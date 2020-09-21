@section('extra_styles')
<script>
.bg-custom-1 {
  background-color: #85144b;
}

.bg-custom-2 {
background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
}
</script>
@endsection
<div class="header">
	<div class="row">
		<div class="logo">
			<a href="{{ route('home') }}"><img src="images/logo.png" alt=""></a>
		</div>
		<span class="menu"></span>
		<div class="navigation">
			<ul class="navig cl-effect-3" >
				<li><a href="{{ route('home') }}">Home</a></li>
				<li><a href="{{ route('login') }}">Login</a></li>
				<li><a href="{{ route('register') }}">Register</a></li>
				<li><a href="{{ route('contact-us') }}">Contact</a></li>

				@auth
				<li class="nav-item dropdown profile_login">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" title="User Login ">
						<figure> <img src="{{ Auth::user()->profile_picture_path }}" alt="profile"></figure>
						<span class="user_name">{{ Auth::user()->name }}</span> <i class="fa fa-caret-down" aria-hidden="true"></i>
					</a>
					<div class="dropdown-menu custom_drop_down" aria-labelledby="navbarDropdownMenuLink">
						@if (!Auth::user()->isUser())
							<a class="dropdown-item" href="{{ route('profile.index') }}">Manage Profile</a>
						@else
							<a class="dropdown-item" href="#">Dashboard</a>
						@endif
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('header-logout-form').submit();"> Logout </a>
						<form id="header-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>

				</li>
                @endauth


				@auth
				<li>
				<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbar-list-4">
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle">
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Dashboard</a>
						<a class="dropdown-item" href="#">Edit Profile</a>
						<a class="dropdown-item" href="#">Log Out</a>
						</div>
					</li>   
					</ul>
				</div>
				</nav>
				</li>
				@endauth

			</ul>
			
			<div class="clearfix"></div>
			<script>
				$( "span.menu" ).click(function() {
				  $( ".navigation" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>

		</div>
		<div class="clearfix"></div>
	</div>
</div>