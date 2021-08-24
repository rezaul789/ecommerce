<div id="sidebar-wrapper" class="bg-theme bg-theme2" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="{{route('staff.dashboard')}}">
            <img src="{{asset('assets/admin/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
            <h5 class="logo-text">Bulona Admin</h5>
        </a>
    </div>
    <div class="user-details">
        <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
            <div class="avatar"><img class="mr-3 side-user-img" src="{{asset('assets/admin/images/avatars/avatar-13.png')}}" alt="user avatar"></div>
            <div class="media-body">
                <h6 class="side-user-name">{{auth()->user()->name}}</h6>

            </div>
        </div>
        <div id="user-dropdown" class="collapse">
            <ul class="user-setting-menu">
                <li><a href="#"><i class="icon-user"></i>  My Profile</a></li>
                <li><a href="#"><i class="icon-settings"></i> Setting</a></li>

                <li>
                    <form action="{{route('staff.logout')}}" method="post">
                        @csrf
                        <a  href="{{route('staff.logout')}}" onclick="event.preventDefault(); this.closest('form').submit()"><i class="icon-power"></i> Logout </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li class="{{ request()->is('staff/dashboard') ? 'active' : '' }}"><a  href="{{route('staff.dashboard')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard "></i> <span>Dashboard</span></a></li>
        <li class="{{ request()->is('staff/users*') ? 'active' : '' }}">
            <a href="#" class="waves-effect">
                <i class="fa fa-users"></i> <span>Users</span><i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li class="{{ request()->is('staff/users*') ? 'active' : '' }}"><a href="{{route('staff.users.index')}}"><i class="zmdi zmdi-long-arrow-right"></i>  Users</a></li>
                <li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i>  Users Role</a></li>

            </ul>
        </li>



    </ul>

</div>
