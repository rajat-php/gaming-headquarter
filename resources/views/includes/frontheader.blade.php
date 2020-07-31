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