<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Tree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Income;
use App\Models\User;

class TreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id)
    {
        return Tree::create([
            'user_id' => $user_id
        ]);
    }

    /**
     * set sponsor postion and placement.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function setSponsorPostion($postion,$user_id,$sponsor_id)
    {
        $tree = Tree::where('user_id', $sponsor_id)->first();
        if($postion==0){
            if($tree->left_side == 0){
                $tree->left_side = $user_id;
                $newUserTree = Tree::where('user_id', $user_id)->first();
                $newUserTree->placement_id = $sponsor_id;
                $newUserTree->save();

                // update count and income
                $this->updateIncomeAndCount($sponsor_id,$postion);
            }else{
                $this->setSponsorPostion($postion,$user_id,$tree->left_side);
            }
        }else{
            if($tree->right_side == 0){
                $tree->right_side = $user_id;
                $newUserTree = Tree::where('user_id', $user_id)->first();
                $newUserTree->placement_id = $sponsor_id;
                $newUserTree->save();

                // update count and income
                $this->updateIncomeAndCount($sponsor_id,$postion);

            }else{
                $this->setSponsorPostion($postion,$user_id,$tree->right_side);
            }
        }
        $tree->save();
        return $tree;
    }


    public function updateIncomeAndCount($sponsor_id,$postion){
        $capping = 500;
        $temp_sponsor_id = $sponsor_id;
        $temp_side = $postion == 0 ? 'left_side': 'right_side';
        // $temp_side_count = $postion == 0 ? 'left_count': 'right_count';
        $total_count = 1;
		$i=1;
        while($total_count > 0){
            $i;
            $tree = Tree::where('user_id', $temp_sponsor_id)->first();
            if($postion == 0){
                $tree->left_count = $tree->left_count+1;
            }else{
                $tree->right_count = $tree->right_count+1;
            }
            $tree->save();

            // income
            if($temp_sponsor_id !==0 ){
                $income = Income::where('user_id', $temp_sponsor_id)->first();
                //income add less than 500
                if($income->day_bal<$capping){
                    // all tree information
                    $treeInformation = Tree::where('user_id', $temp_sponsor_id)->first();
                    $temp_left_count = $treeInformation->left_count;
                    $temp_right_count = $treeInformation->right_count;

                    // check pair left and right side then add income
                    if($temp_left_count>0 && $temp_right_count>0){
                        //check the side user selected
                        // accrodin to side user selected we will do opration
                        if($temp_side == 'left_side'){
                            // user selected left side 
                            if($temp_left_count<=$temp_right_count){
                                $newIncome = Income::where('user_id', $temp_sponsor_id)->first();
                                $newIncome->day_bal = $newIncome->day_bal+100;
                                $newIncome->current_bal = $newIncome->current_bal+100;
                                $newIncome->total_bal = $newIncome->total_bal+100;
                                $newIncome->save();
                            }
                        }else{
                            // user selected right side 
                            if($temp_left_count>=$temp_right_count){
                                $newIncome = Income::where('user_id', $temp_sponsor_id)->first();
                                $newIncome->day_bal = $newIncome->day_bal+100;
                                $newIncome->current_bal = $newIncome->current_bal+100;
                                $newIncome->total_bal = $newIncome->total_bal+100;
                                $newIncome->save();
                            }
                        }
                    }
                }
                // change sponsor id
                $next_user = User::where('user_id',$temp_sponsor_id)->first();
                $temp_sponsor_id = $next_user->sponsor_id;
                $postion = $next_user->postion;
                $temp_side = $next_user->postion == 0 ? 'left_side': 'right_side';

                $i++;
            }

            //Chaeck for the last user
			if($temp_sponsor_id==0){
				$total_count=0;
			}
            //exit loop
        }
    } 

    /**
     * Tree left side or right side check.
     *
     * @param  \App\Models\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function sideCheck($sponsor_id,$postion)
    {
        $tree = Tree::where('user_id', $sponsor_id)->first();
        if($postion==0){
            $side_value = $tree->left_side;
        }else{
            $side_value = $tree->right_side;
        }
        if($side_value === 0){
            return true;
        }else{
            return false;
        }
    }
}
