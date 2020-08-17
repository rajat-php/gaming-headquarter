@extends('layouts.front')
@section('content')

<div class="games">
	<div class="container">
        <h2> Upcoming Tournaments </h2>
		<div class="main">

            <div class="view view-first">
                <img src="images/7.jpg" />
                <div class="mask">
                    <h2>Free Entry</h2>
                    <h5>July 27, 12:00PM</h5>
                    <a href="#" class="info">Join</a>
                </div>
                <div class="gametype">
                    <h4>PUBG SOLO </h4>
                </div>
            </div>
            
            <div class="view view-first">
                <img src="images/7.jpg" />
                <div class="mask">
                    <h2>Free Entry</h2>
                    <h5>July 27, 12:00PM</h5>
                    <a href="#" class="info">Join</a>
                </div>
                <div class="gametype">
                    <h4>PUBG SOLO </h4>
                </div>
            </div>  
            <div class="view view-first">
                <img src="images/7.jpg" />
                <div class="mask">
                    <h2>Free Entry</h2>
                    <h5>July 27, 12:00PM</h5>
                    <a href="#" class="info">Join</a>
                </div>
                <div class="gametype">
                    <h4>PUBG SOLO </h4>
                </div>
            </div> 
            <div class="view view-first">
                <img src="images/4.jpg" />
                <div class="mask">
                    <h2>Ipsum street</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    <a href="#" class="info">Play It</a>
                </div>
            </div> 
            <div class="view view-first">
                <img src="images/5.jpg" />
                <div class="mask">
                    <h2>Games online</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    <a href="#" class="info">Play It</a>
                </div>
            </div>  
            <div class="view view-first">
                <img src="images/6.jpg" />
                <div class="mask">
                    <h2>Nothing but Game</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    <a href="#" class="info">Play It</a>
                </div>
            </div>  
            <div class="view view-first">
                <img src="images/2.jpg" />
                <div class="mask">
                    <h2>Ipsum street</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    <a href="#" class="info">Play It</a>
                </div>
            </div> 
            <div class="view view-first">
                <img src="images/1.jpg" />
                <div class="mask">
                    <h2>Games online</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    <a href="#" class="info">Play It</a>
                </div>
            </div>  
            <div class="view view-first">
                <img src="images/4.jpg" />
                <div class="mask">
                    <h2>Nothing but Game</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    <a href="#" class="info">Play It</a>
                </div>
            </div> 
        </div>
        @include('includes.frontsidebar')
	</div>
</div>

<div class="what-new">
	<div class="container">
		<h3>Rules</h3>
		<div class="blog-news">
			<div class="blog-news-grid">
				<div class="news-grid-left">
					<h4>01</h4>
				</div>
				<div class="news-grid-right">
					<h4>Admin Authorities</h4>
					<p>Decision taken by the Admin Team will be final and binding and won't be changed or reverted under any circumstances.
                    <br>Admin Team has right to ban/kick any player without prior notice</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="blog-news-grid b_n_g">
				<div class="news-grid-left">
					<h4>02</h4>
					</div>
				<div class="news-grid-right">
					<h4>Rewards</h4>
					<p>PUBG Mobile in-game name and ID submitted here on our website should match or else the player won't receive any rewards.
            <br>Results are typically generated within 24 hours of the tournament.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="blog-news b_n">
			<div class="blog-news-grid">
				<div class="news-grid-left">
					<h4>03</h4>
				</div>
				<div class="news-grid-right">
					<h4>Proof</h4>
					<p>Players are required to take screenshots of their match results and video recording in case they find someone cheating/teaming in the match and need to submit it as a proof. </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="blog-news-grid b_n_g">
				<div class="news-grid-left">
					<h4>04</h4>
					</div>
				<div class="news-grid-right">
					<h4>Minimum Requirements</h4>
					<p>Participants should have a minimum IN-GAME LEVEL of 40 or above to play this tournament. Any player below level 40 shall be kicked by the admin team and no refund shall be Granted. </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

@endsection

