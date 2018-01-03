<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Social Bussiness World</title>

		<!-- Bootstrap -->
		<link href="<?php echo elgg_get_simplecache_url("landing/css/styles.css"); ?>" rel="stylesheet">
		<link href="<?php echo elgg_get_simplecache_url("landing/css/bootstrap.min.css"); ?>" rel="stylesheet">
		<link href="<?php echo elgg_get_simplecache_url("landing/css/lightbox.min.css"); ?>" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<div id="wrapper">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="logo"><a href="#"><img src="<?php echo elgg_get_simplecache_url("landing/images/logo.png"); ?>" alt="images"></a></div>
					<div class="right-panel">

					<ul class="flag-list">
						<li><a href="#"><img src="<?php echo elgg_get_simplecache_url("landing/images/flag-1.png"); ?>" alt="image"></a></li>
						<li><a href="#"><img src="<?php echo elgg_get_simplecache_url("landing/images/flag-2.png"); ?>" alt="image"></a></li>
						<li><a href="#"><img src="<?php echo elgg_get_simplecache_url("landing/images/flag-3.png"); ?>" alt="image"></a></li>
						<li><a href="#"><img src="<?php echo elgg_get_simplecache_url("landing/images/flag-4.png"); ?>" alt="image"></a></li>
						<li><a href="#"><img src="<?php echo elgg_get_simplecache_url("landing/images/flag-5.png"); ?>" alt="image"></a></li>
					</ul>
					<?php echo elgg_view_form('login'); ?>
					</div>
					<button type="submit" class="mobile" data-toggle="modal" data-target="#myModal">Sign in</button>
				</div>
			</div>
		</header>

		<div class="banner">
			<div class="container">
				<div class="left-box">
					<h1>The Ethical Social Network For a Sustainable World</h1>
					<ul class="banner-list">
					<li>TOOLS FOR GROUPS</li>
					<li>CROWDFUNDING</li>
					<li>MARKETPLACE</li>
					</ul>
				</div>
				<div class="right-box">
					<h2>register a new account</h2>
					<form class="reg-form" action="#">
					<input type="text" placeholder="Complete Name:">
					<input type="text" placeholder="User Name:">
					<input type="email" placeholder="Email:">
					<input type="password" placeholder="Password:">
					<input type="password" placeholder="Password (again for verification):">
					<p>By clicking on Register, you agree to our <a href="#">Terms</a> and confirm that you have read our <a href="#">Privacy Policy</a>, also containing our Cookie Use.</p>
					<button type="submit" class="join">join us now</button>
					</form>
				</div>
			</div>
		</div>

		<section class="sign-up">
			<div class="container">
			<h2>why to sign up?</br>FREE tools for you and your Groups</h2>
			<ul class="sign-list">
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-2.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						Projects
						<em>Assign Tasks to your group members: Who does What by When</em>
					</div>
					</div>
					<span>projects</span>
				</div>

				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-3.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						Campaigns
						<em>Crowdfunding, Charity and Relief campaigns to fund projects or help those in need</em>
					</div>
					</div>
					<span>campaigns</span>
				</div>
				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-4.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						marketplace
						<em>Sell or Purchase Ethical Products and Services</em>
					</div>
					</div>
				<span>marketplace</span>
				</div>
				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-5.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						groups
						<em>Have your Group's online comfortable space to meet, organize and act</em>
					</div>
					</div>
				<span>groups</span>
				</div>
				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-6.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						maps
						<em>Share your position, Group location and find others that match your interests</em>
					</div>
					</div>
				<span>maps</span>
				</div>
				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-7.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						real-time pad
						<em>Collaborative tool for effective real-time document writing</em>
					</div>
					</div>
				<span>real-time pad</span>
				</div>
				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-8.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						scheduling
						<em>Poll and agree on a meeting date, conference call, etc.</em>
					</div>
					</div>
				<span>scheduling</span>
				</div>
				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-10.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						rss feed import
						<em>Automatically import and share your external Blog's content</em>
					</div>
					</div>
				<span>rss feed import</span>
				</div>
				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-11.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						blogs
						<em>Your own blogging space to share thoughts and articles</em>
					</div>
					</div>
				<span>blogs</span>
				</div>
				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-12.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						discussions
						<em>Discuss topics you're interested in with other community members or within your groups</em>
					</div>
					</div>
				<span>discussions</span>
				</div>
				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-13.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						event manager
						<em>Organize events, create your own registration form, invite and keep track of participants</em>
					</div>
					</div>
				<span>event manager</span>
				</div>
				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-14.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						files repository
						<em>Upload your files and organize them in folders and subfolders</em>
					</div>
					</div>
				<span>files repository</span>
				</div>
				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-15.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						tagging
						<em>Use Tags to easily find content and mention friends</em>
					</div>
					</div>
				<span>tagging</span>
				</div>
				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-16.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						photos
						<em>Upload, organize and share your photo albums</em>
					</div>
					</div>
				<span>photos</span>
				</div>
				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-17.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						pages
						<em>Publish your static pages to tell more about you and your group</em>
					</div>
					</div>
				<span>pages</span>
				</div>
				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-18.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						bookmarks
						<em>Keep track of your favourite content by bookmarking it</em>
					</div>
					</div>
				<span>bookmarks</span>
				</div>
				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-19.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						messaging
						<em>Member to member and Group messaging for immediate communication</em>
					</div>
					</div>
				<span>messaging</span>
				</div>
				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-20.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						polls
						<em>Publish a sitewide or group poll allowing single or multipe answers</em>
					</div>
					</div>
				<span>polls</span>
				</div>
				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-22.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						videos
						<em>Link and share your favourite online videos</em>
					</div>
					</div>
				<span>videos</span>
				</div>
				</li>
				<li>
				<div class="img-holder">
					<img src="<?php echo elgg_get_simplecache_url("landing/images/img-23.jpg"); ?>" alt="image">
					<div class="overlay">
					<div class="text">
						Continuously evolving!
						<em>New and updated tools always in preparation to meet community needs</em>
					</div>
					</div>
				<span>Continuously evolving!</span>
				</div>
				</li>
			</ul>
			</div>
		</section>

		<section class="our-values">
			<div class="container">
			<h2>our values</h2>
			<div class="column-holder">
				<div class="column">
				<img src="<?php echo elgg_get_simplecache_url("landing/images/img-25.png"); ?>" alt="images">
				<div class="text">
					<h3>Free Software</h3>
					<p>We use and support Open Source Software. Made by collective intelligence, used by people </p>
				</div>
				</div>
				<div class="column">
				<img src="<?php echo elgg_get_simplecache_url("landing/images/img-26.png"); ?>" alt="images">
				<div class="text">
					<h3>Solidarity Economy</h3>
					<p>People and planet at the center, not profit</p>
				</div>
				</div>
				<div class="column">
				<img src="<?php echo elgg_get_simplecache_url("landing/images/img-27.png"); ?>" alt="images">
				<div class="text">
					<h3>NETWORKS</h3>
					<p>Connecting People, Social Enterprises, NGOs, Solidarity Purchasing Groups, Institutions and more</p>
				</div>
				</div>
				<div class="column">
				<img src="<?php echo elgg_get_simplecache_url("landing/images/img-28.png"); ?>" alt="images">
				<div class="text">
					<h3>ETHICS</h3>
					<p>We do not make any commercial use of your personal data. We care about you!</p>
				</div>
				</div>
				<div class="column">
				<img src="<?php echo elgg_get_simplecache_url("landing/images/img-29.png"); ?>" alt="images">
				<div class="text">
					<h3>SUSTAINABILITY</h3>
					<p>Critical mass, critical thinking, together for a truly Sustainable World!</p>
				</div>
				</div>
			</div>
			</div>
		</section>

		<section class="welcome">
			<div class="container">
			<div class="heading-holder">
				<h2>we welcome</h2>
				<p>Individuals, Organizations, Associations, Institutions and Companies caring for our planet</p>
			</div>
			<div class="containerrrr">
				<ul class="img-frame">
				<li>
				<a href="images/individuals.jpg" data-lightbox="individuals"><img class="example-image" src="<?php echo elgg_get_simplecache_url("landing/images/individuals.jpg"); ?>" alt="individuals" /></a>
				</li>
				<li><a href="images/organizations.jpg" data-lightbox="organizations"><img class="example-image" src="<?php echo elgg_get_simplecache_url("landing/images/organizations.jpg"); ?>" alt="organizations" /></a></li>
				<li><a href="images/groups.jpg" data-lightbox="groups"><img class="example-image" src="<?php echo elgg_get_simplecache_url("landing/images/groups.jpg"); ?>" alt="groups" /></a></li>
				<li><a href="images/companies.jpg" data-lightbox="companies"><img class="example-image" src="<?php echo elgg_get_simplecache_url("landing/images/companies.jpg"); ?>" alt="companies" /></a></li>
				<li><a href="images/associations.jpg" data-lightbox="associations"><img class="example-image" src="<?php echo elgg_get_simplecache_url("landing/images/associations.jpg"); ?>" alt="associations" /></a></li>
				<li><a href="images/institutions.jpg" data-lightbox="institutions"><img class="example-image" src="<?php echo elgg_get_simplecache_url("landing/images/institutions.jpg"); ?>" alt="image-1" /></a></li>
				</ul>
			</div>
			<div class="comunity-img">
				<img src="<?php echo elgg_get_simplecache_url("landing/images/img-37.jpg"); ?>" alt="image">
			</div>
			</div>
		</section>

		<section class="help">
			<div class="container">
			<h2>Please help maintain sbw!</h2>
			<span class="sub-heading">We rely on your ETHICAL SHOPPING at our Marketplace and your DONATIONS via banktransfer to: Social Business World - Ethic Bank (Banca Etica) - Branch: Ancona (Italy) - IBAN: IT73B0501802600000011519097 - BIC/SWIFT: CCRTIT2T84A. Or, via Paypal using the button below</span>
			<a href="https://www.paypal.me/socialbusinessworld" class="donate">donate</a>
			<span class="now">Consider  supporting  us now. Thank you!</span>
			</div>
		</section>

		<footer id="footer">
			<div class="container">
			<ul class="footer-nav">
				<li><a href="#">About</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">FAQs</a></li>
			</ul>
			<div class="footer-logo"><a href="#"><img src="<?php echo elgg_get_simplecache_url("landing/images/footer-logo.png"); ?>" alt="image"></a></div>
			<p>Via Giovanni Verga, 134, 61025 Montelabbate (PU) Italy - </p>
			<p>P.I./VAT Code: IT02497910410 - REA: PS - 186495 - PEC:  <a href="#"> socialbusinessworld@mypec.eu</a></p>
			<span class="copyright">© 2011-2018 <a href="#"> Social Business World</a>, All rights reserved</span>
			</div>
		</footer>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">sign in</h4>
				</div>
				<div class="modal-body">
				<form class="login-area inner" action="#">
					<div class="form-row">
					<span class="label">Username or Email</span>
					<input type="email">

					</div>
					<div class="form-row">
					<span class="label">Password</span>
					<input type="password">
					<label class="control control--checkbox">
					<input type="checkbox">
						Remember Me
						<span class="control__indicator"></span>
					</label>
					<a href="#">Forgot Password?</a>
					</div>
					<button type="submit">Sign in</button>
				</form>
				</div>

			</div>
			</div>
		</div>
		</div>
	</body>
</html>