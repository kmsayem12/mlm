@section('sidebar')
    <nav class="pcoded-navbar">
        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="active">
                    <a href="{{url('admin/')}}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                        <span class="pcoded-mtext">Dashboard</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
            <div class="pcoded-navigation-label">UI Element</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                        <span class="pcoded-mtext">Basic</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" ">
                            <a href="#" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext">Breadcrumbs</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="#" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext">Button</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="pcoded-navigation-label">Forms</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                        <span class="pcoded-mtext">Form</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
            <div class="pcoded-navigation-label">Pages</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu ">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
                        <span class="pcoded-mtext">Pages</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="#" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext">Login</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
@show