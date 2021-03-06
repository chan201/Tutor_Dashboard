<!-- Main navbar -->
<div class="navbar navbar-default header-highlight">
<div class="navbar-header">
<a class="navbar-brand" href="{{ route('student::home') }}"><img src="https://res.cloudinary.com/ahamlearning/image/upload/c_fit,h_50,q_100/v1466848309/logo_huge_lfpjpa.png" alt=""></a>

<ul class="nav navbar-nav visible-xs-block">
<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
</ul>
</div>

<div class="navbar-collapse collapse" id="navbar-mobile">
<ul class="nav navbar-nav">
<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

</ul>

<ul class="nav navbar-nav navbar-right">

    <li class="dropdown dropdown-user">
        <a class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ cloudinary_url($student->user->present()->picture) }}" alt="">
            <span>{{ $student->user->name }}</span>
            <i class="caret"></i>
        </a>

        <ul class="dropdown-menu dropdown-menu-right">


		    <li class="dropdown-submenu"> 
		    	<a href="#"><i class="icon-pencil7"></i>Classes</a>
		        <ul class="dropdown-menu" style="left:-100%; right:100%;">
				<li><a href="{{  route('student::classes.on-going') }}">
					On Going
					</a>
				</li>

				<li><a href="{{  route('student::classes.upcoming') }}">
					Upcoming
					</a>
				</li>

				<li><a href="{{  route('student::classes.enrolled') }}">
					Enrolled
					</a>
				</li>

				<li><a href="{{  route('student::classes.completed') }}">
					Completed
					</a>
				</li>

				</ul>

			</li>

			<li class="divider"></li>

            <li><a href="{{ url('/') }}"><i class="icon-home"></i> Home </a></li>
            <li><a href="{{ route('auth::logout') }}"><i class="icon-switch2"></i> Logout</a></li>
        </ul>
    </li>
</ul>

<div class="navbar-right">

<div style="display: none;">
@if($student->credits > 5)
 <a href="{{ route('student::credits.add') }}" class="btn btn-success btn-labeled btn-xs legitRipple" style="
    margin-left: 16px; margin-top: 7px; float: left;"><b><i class="icon-coins"></i></b> {{ $student->credits }} Credits</a>
@else

<p class="navbar-text" style="font-size: 14px;"><strong>You have only <span style="color:#d0392e">{{ $student->credits }}</span>  credits. Please add credits.</strong></p>

 <a href="{{ route('student::credits.add') }}" class="btn btn-danger btn-labeled btn-xs legitRipple" style="
    margin-left: 16px; margin-top: 7px; float: left;"><b><i class="icon-coins"></i></b> Add Credits</a>
@endif
</div>

@if (session('aham:impersonator'))
<p class="navbar-text" style="margin-top: -7px;">
	<a class="btn btn-danger btn-mini-xs" href="{{ route('settings::stop_impersonation') }}">Stop Impersonation</a>
</p>
@endif

</div>
</div>
</div>
<!-- /main navbar -->