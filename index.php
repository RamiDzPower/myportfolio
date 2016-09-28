<?php
	$page = 'page-top';
	include 'header.php';
?>
	<div class="main"  role=”main”>
		<!-- Header section  -->
		<section id="top-page">
			<div class="slider" id="headerwrap">
				<div class="space-1 hidden-sm hidden-xs"></div>
				<div class="space-2 hidden-lg hidden-md"></div>
					<div id="wrap_slide" class="wrap_slide">
						<div class="mockup">
							<img test = "en" alt="Background image" class="mockup__img" src="<?=$site_url?>img/mockup4.jpg" />
							<header class="main-header">
								<div class="type-wrap">
									<span id="typed" style="white-space:pre;"></span>
								</div>
								<span class="who-iam"><?php echo $lang['ET_JE_SUIS']; ?></span>
								<h1>
									<span><?php echo $lang['HEADER_TOP_1']; ?></span><?php echo $lang['JE_SUIS']; ?>
								</h1>
								<div class="social-icon-head">
									<a  href="https://www.facebook.com/rami.chellali" target="_blank">
										<img alt="facebook icon" src="<?=$site_url?>img/facebook.png" class="lazy">
									</a>
									<a  href="https://www.twitter.com/R_Nihonto" target="_blank">
										<img alt="twitter icon" src="<?=$site_url?>img/twitter.png"class="lazy">
									</a>
									<a  href="https://th.linkedin.com/in/ramichellai" target="_blank">
										<img alt="linkedin icon" src="<?=$site_url?>img/linkedin.png"class="lazy">
									</a>
									<a  href="https://plus.google.com/u/0/116778164908248745247/about" target="_blank">
										<img alt="google+ icon" src="<?=$site_url?>img/google+.png"class="lazy">
									</a>
									<a  href="https://instagram.com/r_nihonto/" target="_blank">
										<img alt="instagram icon" src="<?=$site_url?>img/insta.png"class="lazy">
									</a>
								</div>
							</header>
						</div>
					</div><!-- wrap_slide -->
			</div><!-- /slider -->
		</section><!-- Header -->

		<!-- About section  -->
		<section class="about-op">
			<div class="para-box">
				<h3  data-sr><?php echo $lang['PAGE_TITLE']; ?></h3>
				<img alt="circle-separation" src="<?=$site_url?>img/heading_circle_white.png" class="circle-separation lazy"  data-sr />
				<p  data-sr><?php echo $lang['PARA']; ?></p>
			</div>
			<div class="divider-candy"></div>
		</section><!-- About -->

		<!-- Who Iam Section -->
		<section id="who-iam">
			<div class="who-iam-container">
				<div class="row what-offer">
					<h3><i class="fa fa-user-secret"></i> <?php echo $lang['WHO_IAM']; ?> ?</h3>
					<h4 class="sub-title"><?php echo $lang['WHO_IAM_DEC']; ?></h4>
					<!-- <p><?php echo $lang['CAN_DO_P1']; ?><br>
					      <?php echo $lang['CAN_DO_P2']; ?><br>
					      <?php echo $lang['CAN_DO_P3']; ?><span class="page-scroll"><a class="drop-msg" href="#cd-google-map"><?php echo $lang['CAN_DO_SCROLL']; ?></a></span>
					</p> -->

						<?php

							if( $lang_short == 'en' ) {
							      echo'  <div class="twentytwenty-container">
								          <img src="'.$site_url.'img/1_1.jpg" class="lazy" alt="test"/>
								          <img src="'.$site_url.'img/1_2.jpg" class="lazy" alt="test" />
								       </div>';
							    }
					        else{
							      echo'  <div class="twentytwenty-container">
								          <img src="'.$site_url.'img/1.png" class="lazy" alt="test" />
								          <img src="'.$site_url.'img/1_2.jpg" class="lazy" alt="test" />
								       </div>';

					        }
					        ?>
				</div>
			</div>
		</section><!-- Who I am -->

		<!-- Timline section  -->
		<section id="cd-timeline" class="cd-horizontal-timeline">
			<div class="timeline-container">
				<h3><i class="fa fa-calendar"></i> <?php echo $lang['TIMELINE']; ?></h3>
				<h4 class="sub-title"><?php echo $lang['TIME_SUB']; ?></h4>
			</div>

			<div class="timeline">
				<div class="events-wrapper">
					<div class="events">
						<ol>
							<li><a href="#0" data-date="16/01/2014" class="selected">16 Jan</a></li>
							<li><a href="#0" data-date="28/02/2014">28 Feb</a></li>
							<li><a href="#0" data-date="20/04/2014">20 Mar</a></li>
							<li><a href="#0" data-date="20/05/2014">20 May</a></li>
							<li><a href="#0" data-date="09/07/2014">09 Jul</a></li>
							<li><a href="#0" data-date="30/08/2014">30 Aug</a></li>
							<li><a href="#0" data-date="15/09/2014">15 Sep</a></li>
							<li><a href="#0" data-date="01/11/2014">01 Nov</a></li>
							<li><a href="#0" data-date="10/12/2014">10 Dec</a></li>
							<li><a href="#0" data-date="19/01/2015">29 Jan</a></li>
							<li><a href="#0" data-date="03/03/2015">3 Mar</a></li>
						</ol>

						<span class="filling-line" aria-hidden="true"></span>
					</div> <!-- .events -->
				</div> <!-- .events-wrapper -->
					
				<ul class="cd-timeline-navigation">
					<li><a href="#0" class="prev inactive">Prev</a></li>
					<li><a href="#0" class="next">Next</a></li>
				</ul> <!-- .cd-timeline-navigation -->
			</div> <!-- .timeline -->

			<div class="events-content">
				<ol>
					<li class="selected" data-date="16/01/2014">
						<h2>Horizontal Timeline</h2>
						<em>January 16th, 2014</em>
						<p>	
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
						</p>
					</li>

					<li data-date="28/02/2014">
						<h2>Event title here</h2>
						<em>February 28th, 2014</em>
						<p>	
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
						</p>
					</li>

					<li data-date="20/04/2014">
						<h2>Event title here</h2>
						<em>March 20th, 2014</em>
						<p>	
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
						</p>
					</li>

					<li data-date="20/05/2014">
						<h2>Event title here</h2>
						<em>May 20th, 2014</em>
						<p>	
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
						</p>
					</li>

					<li data-date="09/07/2014">
						<h2>Event title here</h2>
						<em>July 9th, 2014</em>
						<p>	
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
						</p>
					</li>

					<li data-date="30/08/2014">
						<h2>Event title here</h2>
						<em>August 30th, 2014</em>
						<p>	
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
						</p>
					</li>

					<li data-date="15/09/2014">
						<h2>Event title here</h2>
						<em>September 15th, 2014</em>
						<p>	
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
						</p>
					</li>

					<li data-date="01/11/2014">
						<h2>Event title here</h2>
						<em>November 1st, 2014</em>
						<p>	
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
						</p>
					</li>

					<li data-date="10/12/2014">
						<h2>Event title here</h2>
						<em>December 10th, 2014</em>
						<p>	
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
						</p>
					</li>

					<li data-date="19/01/2015">
						<h2>Event title here</h2>
						<em>January 19th, 2015</em>
						<p>	
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
						</p>
					</li>

					<li data-date="03/03/2015">
						<h2>Event title here</h2>
						<em>March 3rd, 2015</em>
						<p>	
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
						</p>
					</li>
				</ol>
			</div> <!-- .events-content -->
			<div class="divider-candy candy-bottom"></div>
		</section> <!-- Timeline -->

		<!-- Skills section -->
		<section id="skills">
			<div class="videoBG">
				<video autoplay="autoplay" loop="loop" preload>
				    <source src="<?=$site_url?>file/video.mp4" type="video/mp4" >
				    <source src="<?=$site_url?>file/video.ogg" type="http://leongaban.com/video/ogg" >
				    <source src="<?=$site_url?>file/video.webm" type="video/webm" >
				    <object data="file/video.mp4">
				        <param name="wmode" value="transparent">
				        <param name="autoplay" value="true" >
				        <param name="loop" value="true" >
				    </object>
				</video>
				<div class="container">
					<div class="row centered">
						<div class="skills-head-container">
							<h3><i class="fa fa-briefcase"></i> <?php echo $lang['SKILLS']; ?></h3>
							<h4 class="sub-title"><?php echo $lang['PROUDSKILLS']; ?></h4>							
						</div>
						<div class="certification-container" data-sr="enter top hustle 150px over 1s">
							<a href="http://www.testdome.com/cert/z71gze9dq7" class="testdome-certificate-stamp silver" target="_blank">
								<span class="testdome-certificate-name">CHELLALI Rami</span>
								<span class="testdome-certificate-test-name">HTML/CSS, JS and Bootstrap (Hard) </span>
								<span class="testdome-certificate-card-logo">TestDome<br />Certificate</span>
							</a>
						</div>
						<main class="cd-main">
							<ul class="cd-gallery">
								<li class="cd-item">
									<a href="<?=$site_url?>item-10.php">
										<div>
											<h2>Web Design & Development</h2>
											<b><?php echo $lang['VIEWMORE']; ?></b>
										</div>
									</a>
								</li>

								<li class="cd-item">
									<a href="<?=$site_url?>item-20.php">
										<div>
											<h2>Social Media & SEO</h2>
											<b><?php echo $lang['VIEWMORE']; ?></b>
										</div>
									</a>
								</li>

								<li class="cd-item">
									<a href="<?=$site_url?>item-30.php">
										<div>
											<h2>Framework & CMS</h2>
											<b><?php echo $lang['VIEWMORE']; ?></b>
										</div>
									</a>
								</li>

								<li class="cd-item">
									<a href="<?=$site_url?>item-40.php">
										<div>
											<h2>Web Development Tools</h2>
											<b><?php echo $lang['VIEWMORE']; ?></b>
										</div>
									</a>
								</li>
							</ul> <!-- .cd-gallery -->
						</main> <!-- .cd-main -->
						<div class="cd-folding-panel">
							<div class="fold-left"></div> <!-- this is the left fold -->
							<div class="fold-right"></div> <!-- this is the right fold -->
							<div class="cd-fold-content">
							</div>
							<a class="cd-close" href="#0"></a>
						</div> <!-- .cd-folding-panel -->
					</div>
				</div><!-- container -->
			</div>
			<div class="divider-candy candy-skills"></div>
		</section><!-- Skills -->

		<!-- Section services  -->
		<section id="services" class="section section-padded">
			<div class="container">
				<div class="row nomargin">
					<h3><i class="fa fa-tasks"></i> <?php echo $lang['SERVICES']; ?></h3>
					<h4 class="sub-title"><?php echo $lang['SERVICES_DESC']; ?></h4>
				</div>
				<div class="row what-offer">
					<p><?php echo $lang['CAN_DO_P1']; ?><br>
					      <?php echo $lang['CAN_DO_P2']; ?><br>
					      <?php echo $lang['CAN_DO_P3']; ?><span class="page-scroll"><a class="drop-msg" href="#cd-google-map"><?php echo $lang['CAN_DO_SCROLL']; ?></a></span></p>
				</div>

				<div class="row services">
					<div class="col-md-4" data-sr="enter top hustle 50px over 1.5s">
						<div class="service">
							<div class="icon-holder">
								<i class="fa fa-desktop fa-2x"></i> 
							</div>
							<h4 class="heading">Front end & Back end</h4>
							<p class="description"><?php echo $lang['SPECIALIZING']; ?></p>
						</div>
					</div>
					<div class="col-md-4" data-sr="enter top hustle 50px over 2s">
						<div class="service">
							<div class="icon-holder">
								<i class="fa fa-code fa-2x"></i> 
							</div>
							<h4 class="heading"><?php echo $lang['HIGH_CODE']; ?></h4>
							<p class="description"><?php echo $lang['AIM_TO_WRITE']; ?></p>
						</div>
					</div>
					<div class="col-md-4" data-sr="enter top hustle 50px over 2.5s">
						<div class="service">
							<div class="icon-holder">
								<i class="fa fa-pencil fa-2x"></i>
							</div>
							<h4 class="heading"><?php echo $lang['SOCIAL_MEDIA']; ?></h4>
							<p class="description"><?php echo $lang['SOCIAL_IMPORTANT']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="cut cut-bottom"></div>
			<div class="divider-candy candy-bottom"></div>
		</section><!-- Services -->

		<!-- Work Section -->
		<section id="grid3d" class="grid3d horizontal">
			<div class="container-2">
				<h3 class="title-work"><i class="fa fa-fire"></i><?php echo $lang['LATEST_WORK']; ?></h3>
				<h4 class="sub-title sub-title-work"><?php echo $lang['WORK_DESC']; ?></h4>
				<ul id="filters" class="clearfix">
					<li class="square individual"><span class="ninth before after filter active" data-wipe="All" data-filter="front back graph"><?php echo $lang['ALL_WORK']; ?></span></li>
					<li class="square individual"><span class="ninth before after filter" data-wipe="front" data-filter="front"><?php echo $lang['FRONT_WORK']; ?></span></li>
					<li class="square individual"><span class="ninth before after filter" data-wipe="back" data-filter="back"><?php echo $lang['BACK_WORK']; ?></span></li>
					<li class="square individual"><span class="ninth before after filter" data-wipe="graph" data-filter="graph"><?php echo $lang['GRAPHIC_WORK']; ?></span></li>
				</ul>
				<div class="grid-wrap" id="grid-wrap">
					<div class="grid">
						<div class="work-block front back">
							<figure data-sr="wait 0.3s enter bottom over 1s hustle 50px">
								<img alt="img03" class="work-img lazy" src="<?=$site_url?>img/work/zestate-front.png" />
									<span><i class="fa fa-search-plus fa-2x"></i></span>								
							</figure>							
						</div>
						<div class="work-block back">
							<figure data-sr="wait 0.3s enter bottom over 1s hustle 50px">
								<img alt="img03" class="work-img lazy" src="<?=$site_url?>img/work/zestate-front.png" />
									<span><i class="fa fa-search-plus fa-2x"></i></span>								
							</figure>							
						</div>
						<div class="work-block front back">
							<figure data-sr="wait 0.3s enter bottom over 1s hustle 50px">
								<img alt="img04" class="work-img lazy" src="<?=$site_url?>img/work/moi-front.png" />
									<span><i class="fa fa-search-plus fa-2x"></i></span>								
							</figure>							
						</div>
						<div class="work-block front">
							<figure data-sr="wait 0.6s enter bottom over 1s hustle 50px">
								<img alt="img03" class="work-img lazy" src="<?=$site_url?>img/work/buthan-front.png" />
									<span><i class="fa fa-search-plus fa-2x"></i></span>								
							</figure>							
						</div>
						<div class="work-block front">
							<figure data-sr="wait 0.6s enter bottom over 1s hustle 50px">
								<img alt="img03" class="work-img lazy" src="<?=$site_url?>img/work/wolfcom-front.png" />
									<span><i class="fa fa-search-plus fa-2x"></i></span>								
							</figure>							
						</div>
						<div class="work-block graph">
							<figure data-sr="wait 0.6s enter bottom over 1s hustle 50px">
								<img alt="img03" class="work-img lazy" src="<?=$site_url?>img/work/zbrochure-front.png" />
									<span><i class="fa fa-search-plus fa-2x"></i></span>								
							</figure>							
						</div>
					</div>
				</div><!-- /grid-wrap -->
				<div class="content">
					<div>
						<div class="vignette-container">
							<div class="vignette-header first-work">	
								<div class="vignette-header__content">
								            <h1 class="vignette-header__tagline"><?php echo $lang['FIRST_WORK']; ?></h1>
								            <h2 class="vignette-header__copy">
								                <div class="vignette-copywriting">
								                    <p><?php echo $lang['FIRST_WORK_SHORT_DSC']; ?></p>
								                </div>
								            </h2>
								            <h3 class="vignette-label"><?php echo $lang['FIRST_WORK_CATEGORY']; ?></h3>
								  </div>						
							</div>
						</div>
						<div class="vignette-main"> 
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['WHAT_WE_DID']; ?></h2>
						        <div class="pushtext__copy">
						            <p>Strategy, Scrum, UI/UX, Innovation Lab, Mobile development, Back-end development</p>
						        </div>
						    </div>						    
						        
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['THE_BRIEF']; ?></h2>
						        <div class="pushtext__copy">
						            <p>The banking app landscape in Singapore was becoming crowded with deal apps, dining apps, and banking apps. It was hard for clients to differentiate between the offerings.</p>
							<p>Aleph and UOB worked together to design and develop the UOB Mighty. UOB Mighty makes banking and dining effortless. You no longer have to visit a Branch for your daily transactions or search through restaurant reviews through multiple mediums. We make all these features effortless and readily accessible through your mobile device.</p>
						        </div>
						    </div>						    
						        
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['APPROACH']; ?></h2>
						        <div class="pushtext__copy">
						            <p>Designed and developed with a specific lifestyle in mind, UOB Mighty is the first contactless payments app that is fully secure and elegantly combined with banking services and dining deals.</p>
						        </div>
						    </div>						    
						        
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['RESULTS']; ?></h2>
						        <div class="pushtext__copy">
						            <p>100k + downloads within the first months and overwhelmingly positive response from consumer blogs and social media.</p>
						        </div>
						    </div>

						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['TECHNO_USED']; ?></h2>
						        <div class="pushtext__copy">
						            <img src="<?=$site_url?>img/techno-5.png" alt="Languages" class="img-responsive">
						        </div>
						    </div>

						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['BROWSER_COMPTA']; ?></h2>
						        <div class="pushtext__copy">
						            <img src="<?=$site_url?>img/browser.png" alt="Browsers" class="img-responsive">
						        </div>
						    </div>
						</div>						
					</div>
					<div>
						<div class="vignette-container">
							<div class="vignette-header first-work">	
								<div class="vignette-header__content">
								            <h1 class="vignette-header__tagline"><?php echo $lang['SECOND_WORK']; ?></h1>
								            <h2 class="vignette-header__copy">
								                <div class="vignette-copywriting">
								                    <p><?php echo $lang['SECOND_WORK_SHORT_DSC']; ?></p>
								                </div>
								            </h2>
								            <h3 class="vignette-label"><?php echo $lang['SECOND_WORK_CATEGORY']; ?></h3>
								  </div>						
							</div>
						</div>
						<div class="vignette-main"> 
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['WHAT_WE_DID']; ?></h2>
						        <div class="pushtext__copy">
						            <p>Strategy, Scrum, UI/UX, Innovation Lab, Mobile development, Back-end development</p>
						        </div>
						    </div>						    
						        
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['THE_BRIEF']; ?></h2>
						        <div class="pushtext__copy">
						            <p>The banking app landscape in Singapore was becoming crowded with deal apps, dining apps, and banking apps. It was hard for clients to differentiate between the offerings.</p>
							<p>Aleph and UOB worked together to design and develop the UOB Mighty. UOB Mighty makes banking and dining effortless. You no longer have to visit a Branch for your daily transactions or search through restaurant reviews through multiple mediums. We make all these features effortless and readily accessible through your mobile device.</p>
						        </div>
						    </div>						    
						        
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['APPROACH']; ?></h2>
						        <div class="pushtext__copy">
						            <p>Designed and developed with a specific lifestyle in mind, UOB Mighty is the first contactless payments app that is fully secure and elegantly combined with banking services and dining deals.</p>
						        </div>
						    </div>						    
						        
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['RESULTS']; ?></h2>
						        <div class="pushtext__copy">
						            <p>100k + downloads within the first months and overwhelmingly positive response from consumer blogs and social media.</p>
						        </div>
						    </div>

						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['TECHNO_USED']; ?></h2>
						        <div class="pushtext__copy">
						            <img src="<?=$site_url?>img/techno-4.png" alt="Languages" class="img-responsive">
						        </div>
						    </div>

						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['BROWSER_COMPTA']; ?></h2>
						        <div class="pushtext__copy">
						            <img src="<?=$site_url?>img/browser.png" alt="Browsers" class="img-responsive">
						        </div>
						    </div>
						</div>	
					</div>
					<div>
						<div class="vignette-container">
							<div class="vignette-header third-work">	
								<div class="vignette-header__content">
								            <h1 class="vignette-header__tagline"><?php echo $lang['THIRD_WORK']; ?></h1>
								            <h2 class="vignette-header__copy">
								                <div class="vignette-copywriting">
								                    <p><?php echo $lang['THIRD_WORK_SHORT_DSC']; ?></p>
								                </div>
								            </h2>
								            <h3 class="vignette-label"><?php echo $lang['THIRD_WORK_CATEGORY']; ?></h3>
								  </div>	
							</div>
						</div>
						<div class="vignette-main"> 
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['WHAT_WE_DID']; ?></h2>
						        <div class="pushtext__copy">
						            <p>Strategy, Scrum, UI/UX, Innovation Lab, Mobile development, Back-end development</p>
						        </div>
						    </div>						    
						        
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['THE_BRIEF']; ?></h2>
						        <div class="pushtext__copy">
						            <p>The banking app landscape in Singapore was becoming crowded with deal apps, dining apps, and banking apps. It was hard for clients to differentiate between the offerings.</p>
							<p>Aleph and UOB worked together to design and develop the UOB Mighty. UOB Mighty makes banking and dining effortless. You no longer have to visit a Branch for your daily transactions or search through restaurant reviews through multiple mediums. We make all these features effortless and readily accessible through your mobile device.</p>
						        </div>
						    </div>						    
						        
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['APPROACH']; ?></h2>
						        <div class="pushtext__copy">
						            <p>Designed and developed with a specific lifestyle in mind, UOB Mighty is the first contactless payments app that is fully secure and elegantly combined with banking services and dining deals.</p>
						        </div>
						    </div>						    
						        
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['RESULTS']; ?></h2>
						        <div class="pushtext__copy">
						            <p>100k + downloads within the first months and overwhelmingly positive response from consumer blogs and social media.</p>
						        </div>
						    </div>

						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['TECHNO_USED']; ?></h2>
						        <div class="pushtext__copy">
						            <img src="<?=$site_url?>img/techno.png" alt="Languages" class="img-responsive">
						        </div>
						    </div>

						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['BROWSER_COMPTA']; ?></h2>
						        <div class="pushtext__copy">
						            <img src="<?=$site_url?>img/browser.png" alt="Browsers" class="img-responsive">
						        </div>
						    </div>						    
						</div>						
						<!-- <div class="inner-first-bkg">
							<div class="descriptif-wrap">
								<h2><?php echo $lang['PROJECT_OVERVIEW']; ?></h2>
								<p><?php echo $lang['PROJECT_DECR_1']; ?></p>
								<p><?php echo $lang['PROJECT_DECR_2']; ?></p>
							</div>
							<div class="col-xs-12">
								<img alt="Portfolio-MacBook-Gold" src="<?=$site_url?>img/MacBook-Gold.png" class="macbook-img lazy" />							
							</div>
							<div class="desciptif-suite-wrap">
								<p>Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum </p>
								<p>Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum </p>
							</div>							
						</div>
						<div class="inner-bkg">
							<div class="col-xs-12">
								<div class="col-sm-6 col-sm-push-6  nopadding">
									<p>Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum </p>
									<p>Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum </p>
																</div>
								<div class="col-sm-6 col-sm-pull-6 nopadding">
									<img alt="Modern Browser" src="<?=$site_url?>img/browser.png" class="browser-img lazy" />
									<img alt="Web Technologies" src="<?=$site_url?>img/techno.png" class="browser-img lazy" />
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-sm-6 nopadding">
									<p>Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum </p>
									<p>Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum Loreum </p>
								</div>
								<div class="col-sm-6 nopadding">
									<img alt="Portfolio-iPhone-6S" src="<?=$site_url?>img/iPhone-6S.png" class="iphone-img lazy" />
									<img alt="Portfolio-iPhone-6S" src="<?=$site_url?>img/iPhone-6S-2.png" class="iphone-img lazy" />								
								</div>
							</div>							
						</div> -->
					</div>
					<div>
						<div class="vignette-container">
							<div class="vignette-header fourth-work">	
								<div class="vignette-header__content">
								            <h1 class="vignette-header__tagline"><?php echo $lang['FOURTH_WORK']; ?></h1>
								            <h2 class="vignette-header__copy">
								                <div class="vignette-copywriting">
								                    <p><?php echo $lang['FOURTH_WORK_SHORT_DSC']; ?></p>
								                </div>
								            </h2>
								            <h3 class="vignette-label"><?php echo $lang['FOURTH_WORK_CATEGORY']; ?></h3>
								  </div>						
							</div>
						</div>
						<div class="vignette-main"> 
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['WHAT_WE_DID']; ?></h2>
						        <div class="pushtext__copy">
						            <p>Strategy, Scrum, UI/UX, Innovation Lab, Mobile development, Back-end development</p>
						        </div>
						    </div>						    
						        
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['THE_BRIEF']; ?></h2>
						        <div class="pushtext__copy">
						            <p>The banking app landscape in Singapore was becoming crowded with deal apps, dining apps, and banking apps. It was hard for clients to differentiate between the offerings.</p>
							<p>Aleph and UOB worked together to design and develop the UOB Mighty. UOB Mighty makes banking and dining effortless. You no longer have to visit a Branch for your daily transactions or search through restaurant reviews through multiple mediums. We make all these features effortless and readily accessible through your mobile device.</p>
						        </div>
						    </div>						    
						        
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['APPROACH']; ?></h2>
						        <div class="pushtext__copy">
						            <p>Designed and developed with a specific lifestyle in mind, UOB Mighty is the first contactless payments app that is fully secure and elegantly combined with banking services and dining deals.</p>
						        </div>
						    </div>						    
						        
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['RESULTS']; ?></h2>
						        <div class="pushtext__copy">
						            <p>100k + downloads within the first months and overwhelmingly positive response from consumer blogs and social media.</p>
						        </div>
						    </div>

						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['TECHNO_USED']; ?></h2>
						        <div class="pushtext__copy">
						            <img src="<?=$site_url?>img/techno-2.png" alt="Languages" class="img-responsive">
						        </div>
						    </div>

						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['BROWSER_COMPTA']; ?></h2>
						        <div class="pushtext__copy">
						            <img src="<?=$site_url?>img/browser.png" alt="Browsers" class="img-responsive">
						        </div>
						    </div>						    
						</div>	
					</div>
					<div>
						<div class="vignette-container">
							<div class="vignette-header fifth-work">	
								<div class="vignette-header__content">
								            <h1 class="vignette-header__tagline"><?php echo $lang['FIFTH_WORK']; ?></h1>
								            <h2 class="vignette-header__copy">
								                <div class="vignette-copywriting">
								                    <p><?php echo $lang['FIFTH_WORK_SHORT_DSC']; ?></p>
								                </div>
								            </h2>
								            <h3 class="vignette-label"><?php echo $lang['FIFTH_WORK_CATEGORY']; ?></h3>
								  </div>						
							</div>
						</div>
						<div class="vignette-main"> 
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['WHAT_WE_DID']; ?></h2>
						        <div class="pushtext__copy">
						            <p>Strategy, Scrum, UI/UX, Innovation Lab, Mobile development, Back-end development</p>
						        </div>
						    </div>						    
						        
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['THE_BRIEF']; ?></h2>
						        <div class="pushtext__copy">
						            <p>The banking app landscape in Singapore was becoming crowded with deal apps, dining apps, and banking apps. It was hard for clients to differentiate between the offerings.</p>
							<p>Aleph and UOB worked together to design and develop the UOB Mighty. UOB Mighty makes banking and dining effortless. You no longer have to visit a Branch for your daily transactions or search through restaurant reviews through multiple mediums. We make all these features effortless and readily accessible through your mobile device.</p>
						        </div>
						    </div>						    
						        
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['APPROACH']; ?></h2>
						        <div class="pushtext__copy">
						            <p>Designed and developed with a specific lifestyle in mind, UOB Mighty is the first contactless payments app that is fully secure and elegantly combined with banking services and dining deals.</p>
						        </div>
						    </div>						    
						        
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['RESULTS']; ?></h2>
						        <div class="pushtext__copy">
						            <p>100k + downloads within the first months and overwhelmingly positive response from consumer blogs and social media.</p>
						        </div>
						    </div>

						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['TECHNO_USED']; ?></h2>
						        <div class="pushtext__copy">
						            <img src="<?=$site_url?>img/techno.png" alt="Languages" class="img-responsive">
						        </div>
						    </div>

						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['BROWSER_COMPTA']; ?></h2>
						        <div class="pushtext__copy">
						            <img src="<?=$site_url?>img/browser.png" alt="Browsers" class="img-responsive">
						        </div>
						    </div>						    
						</div>
					</div>
					<div>
						<div class="vignette-container">
							<div class="vignette-header sixth-work">	
								<div class="vignette-header__content">
								            <h1 class="vignette-header__tagline"><?php echo $lang['SIXTH_WORK']; ?></h1>
								            <h2 class="vignette-header__copy">
								                <div class="vignette-copywriting">
								                    <p><?php echo $lang['SIXTH_WORK_SHORT_DSC']; ?></p>
								                </div>
								            </h2>
								            <h3 class="vignette-label"><?php echo $lang['SIXTH_WORK_CATEGORY']; ?></h3>
								  </div>						
							</div>
						</div>
						<div class="vignette-main"> 
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['WHAT_WE_DID']; ?></h2>
						        <div class="pushtext__copy">
						            <p>Strategy, Scrum, UI/UX, Innovation Lab, Mobile development, Back-end development</p>
						        </div>
						    </div>						    
						        
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['THE_BRIEF']; ?></h2>
						        <div class="pushtext__copy">
						            <p>The banking app landscape in Singapore was becoming crowded with deal apps, dining apps, and banking apps. It was hard for clients to differentiate between the offerings.</p>
							<p>Aleph and UOB worked together to design and develop the UOB Mighty. UOB Mighty makes banking and dining effortless. You no longer have to visit a Branch for your daily transactions or search through restaurant reviews through multiple mediums. We make all these features effortless and readily accessible through your mobile device.</p>
						        </div>
						    </div>						    
						        
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['APPROACH']; ?></h2>
						        <div class="pushtext__copy">
						            <p>Designed and developed with a specific lifestyle in mind, UOB Mighty is the first contactless payments app that is fully secure and elegantly combined with banking services and dining deals.</p>
						        </div>
						    </div>						    
						        
						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['RESULTS']; ?></h2>
						        <div class="pushtext__copy">
						            <p>100k + downloads within the first months and overwhelmingly positive response from consumer blogs and social media.</p>
						        </div>
						    </div>

						    <div class="pushtext">
						        <h2 class="pushtext__title"><?php echo $lang['TECHNO_USED']; ?></h2>
						        <div class="pushtext__copy">
						            <img src="<?=$site_url?>img/techno-3.png" alt="Languages" class="img-responsive">
						        </div>
						    </div>						    
						</div>	
					</div>
					<span class="loading"></span>
					<span class="close-content"><i class="fa fa-times"></i></span>
				</div>
			</div><!-- /container -->
			<div class="divider-candy candy-work"></div>
		</section><!-- Work Grid -->

		<!-- Testimonial Section -->
		<section id="testimonial">
			<div class="cd-testimonials-wrapper cd-container">
				<h3 class="title-testi"><i class="fa fa-comments-o"> </i><?php echo $lang['TESTIMONIAL']; ?></h3>
				<h4 class="sub-title sub-title-testi"><?php echo $lang['TESTI_DESC']; ?></h4>
				<ul class="cd-testimonials">
					<li>
						<p><?php echo $lang['TESTIMONIAL_YOANN']; ?></p>
						<div class="cd-author">
							<a href="https://th.linkedin.com/in/yoannhouze/en" target="_blank" title="linkedin Profile"><img alt="Author image" src="<?=$site_url?>img/yoann.jpg" class="img-responsive lazy" /></a>
							<ul class="cd-author-info">
								<li><a href="https://th.linkedin.com/in/yoannhouze/en" target="_blank" title="linkedin Profile">Yoann Houzé</a></li>
								<li>Insights & Analytics Manager <?php echo $lang['CHEZ']; ?> Salamander Jewelry</li>
							</ul>
						</div>
					</li>
					<li>
						<p><?php echo $lang['TESTIMONIAL_STEVE']; ?></p>
						<div class="cd-author">
							<a href="https://th.linkedin.com/in/steve-solanki-prince2-85b00bb" target="_blank" title="linkedin Profile">
								<img alt="Author image" src="<?=$site_url?>img/steve.jpg" class="img-responsive lazy" />
							</a>
							<ul class="cd-author-info">
								<li><a href="https://th.linkedin.com/in/steve-solanki-prince2-85b00bb" target="_blank" title="linkedin Profile">Steve Solanki</a></li>
								<li>Software Consultant <?php echo $lang['CHEZ']; ?>  Softcontrol.Net, Ltd</li>
							</ul>
						</div> 
					</li>
					<li>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam totam nulla est, illo molestiae maxime officiis, quae ad, ipsum vitae deserunt molestias eius alias.</p>
						<div class="cd-author">
							<img alt="Author image" src="<?=$site_url?>img/avatar-3.jpg" class="img-responsive lazy"  />
							<ul class="cd-author-info">
								<li>MyName</li>
								<li>CEO, CompanyName</li>
							</ul>
						</div>
					</li>
				</ul> <!-- cd-testimonials -->
				<a href="#0" class="cd-see-all"><?php echo $lang['SEE_ALL']; ?></a>
			</div><!-- cd-testimonials-wrapper -->

			<div class="cd-testimonials-all">
				<div class="cd-testimonials-all-wrapper">
					<ul>
						<li class="cd-testimonials-item">
							<p><?php echo $lang['TESTIMONIAL_YOANN']; ?></p>
							<div class="cd-author">
								<a href="https://th.linkedin.com/in/yoannhouze/en" target="_blank" title="linkedin Profile">
									<img alt="Author image" src="<?=$site_url?>img/yoann.jpg" class="img-responsive lazy" />
								</a>
								<ul class="cd-author-info">
									<li><a href="https://th.linkedin.com/in/yoannhouze/en" target="_blank" title="linkedin Profile">Yoann Houzé</a></li>
									<li>Insights & Analytics Manager <?php echo $lang['CHEZ']; ?> Salamander Jewelry</li>
								</ul>
							</div>
						</li>

						<li class="cd-testimonials-item">
							<p><?php echo $lang['TESTIMONIAL_STEVE']; ?></p>
							<div class="cd-author">
								<a href="https://th.linkedin.com/in/steve-solanki-prince2-85b00bb" target="_blank" title="linkedin Profile">
									<img alt="Author image" src="<?=$site_url?>img/steve.jpg" class="img-responsive lazy" />
								</a>
								<ul class="cd-author-info">
									<li><a href="https://th.linkedin.com/in/steve-solanki-prince2-85b00bb" target="_blank" title="linkedin Profile">Steve Solanki</a></li>
									<li>Software Consultant <?php echo $lang['CHEZ']; ?>  Softcontrol.Net, Ltd</li>
								</ul>
							</div> <!-- cd-author -->
						</li>

						<li class="cd-testimonials-item">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quibusdam eveniet, molestiae laborum voluptatibus minima hic quasi accusamus ut facere, eius expedita, voluptatem? Repellat incidunt veniam quaerat, qui laboriosam dicta. Quidem ducimus laudantium dolorum enim qui at ipsum, a error.</p>

							<div class="cd-author">
								<img alt="Author image" src="<?=$site_url?>img/avatar-3.jpg" class="img-responsive lazy" />
								<ul class="cd-author-info">
									<li>MyName</li>
									<li>CEO, CompanyName</li>
								</ul>
							</div> <!-- cd-author -->
						</li>

						<li class="cd-testimonials-item">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero voluptates officiis tempore quae officia! Beatae quia deleniti cum corporis eos perferendis libero reiciendis nemo iusto accusamus, debitis tempora voluptas praesentium repudiandae laboriosam excepturi laborum, nisi optio repellat explicabo, incidunt ex numquam. Ullam perferendis officiis harum doloribus quae corrupti minima quia, aliquam nostrum expedita pariatur maxime repellat, voluptas sunt unde, inventore.</p>

							<div class="cd-author">
								<img alt="Author image" src="<?=$site_url?>img/avatar-4.jpg" class="img-responsive lazy" />
								<ul class="cd-author-info">
									<li>MyName</li>
									<li>CEO, CompanyName</li>
								</ul>
							</div> <!-- cd-author -->
						</li>

						<li class="cd-testimonials-item">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>

							<div class="cd-author">
								<img alt="Author image" src="<?=$site_url?>img/avatar-5.jpg" class="img-responsive lazy" />
								<ul class="cd-author-info">
									<li>MyName</li>
									<li>CEO, CompanyName</li>
								</ul>
							</div> <!-- cd-author -->
						</li>

						<li class="cd-testimonials-item">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quia quas, quis illo adipisci voluptate ex harum iste commodi nulla dolor. Eius ratione quod ab!</p>

							<div class="cd-author">
								<img alt="Author image" src="<?=$site_url?>img/avatar-6.jpg" class="img-responsive lazy" />
								<ul class="cd-author-info">
									<li>MyName</li>
									<li>CEO, CompanyName</li>
								</ul>
							</div> <!-- cd-author -->
						</li>

						<li class="cd-testimonials-item">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, dignissimos iure rem fugiat consequuntur officiis.</p>

							<div class="cd-author">
								<img alt="Author image" src="<?=$site_url?>img/avatar-1.jpg" class="img-responsive lazy" />
								<ul class="cd-author-info">
									<li>MyName</li>
									<li>CEO, CompanyName</li>
								</ul>
							</div> <!-- cd-author -->
						</li>

						<li class="cd-testimonials-item">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>

							<div class="cd-author">
								<img alt="Author image" src="<?=$site_url?>img/avatar-2.jpg" class="img-responsive lazy" />
								<ul class="cd-author-info">
									<li>MyName</li>
									<li>CEO, CompanyName</li>
								</ul>
							</div> <!-- cd-author -->
						</li>

						<li class="cd-testimonials-item">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis iusto sapiente, excepturi velit, beatae possimus est tenetur cumque fugit tempore dolore fugiat! Recusandae, vel suscipit? Perspiciatis non similique sint suscipit officia illo, accusamus dolorum, voluptate vitae quia ea amet optio magni voluptatem nemo, natus nihil.</p>

							<div class="cd-author">
								<img alt="Author image" src="<?=$site_url?>img/avatar-3.jpg" class="img-responsive lazy" />
								<ul class="cd-author-info">
									<li>MyName</li>
									<li>CEO, CompanyName</li>
								</ul>
							</div> <!-- cd-author -->
						</li>

						<li class="cd-testimonials-item">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quasi officiis pariatur, fugit minus omnis animi ut assumenda quod commodi, ad a alias maxime unde suscipit magnam, voluptas laboriosam ipsam quibusdam quidem, dolorem deleniti id.</p>

							<div class="cd-author">
								<img alt="Author image" src="<?=$site_url?>img/avatar-4.jpg" class="img-responsive lazy" />
								<ul class="cd-author-info">
									<li>MyName</li>
									<li>CEO, CompanyName</li>
								</ul>
							</div> <!-- cd-author -->
						</li>

						<li class="cd-testimonials-item">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>

							<div class="cd-author">
								<img alt="Author image" src="<?=$site_url?>img/avatar-5.jpg" class="img-responsive lazy" />
								<ul class="cd-author-info">
									<li>MyName</li>
									<li>CEO, CompanyName</li>
								</ul>
							</div> <!-- cd-author -->
						</li>

						<li class="cd-testimonials-item">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore ipsam, eos suscipit nostrum molestias reprehenderit, rerum amet cum similique a, ipsum soluta delectus explicabo nihil repellat incidunt! Minima magni possimus mollitia deserunt facere, tempore earum modi, ea ipsa dicta temporibus suscipit quidem ut quibusdam vero voluptatibus nostrum excepturi explicabo nulla harum, molestiae alias. Ab, quidem rem fugit delectus quod.</p>

							<div class="cd-author">
								<img alt="Author image" src="<?=$site_url?>img/avatar-6.jpg" class="img-responsive lazy" />
								<ul class="cd-author-info">
									<li>MyName</li>
									<li>CEO, CompanyName</li>
								</ul>
							</div> <!-- cd-author -->
						</li>
					</ul>
				</div>	<!-- cd-testimonials-all-wrapper -->
				<a href="#0" class="close-btn">Close</a>
			</div> <!-- cd-testimonials-all -->
		</section><!-- Testimonial -->

		<!-- CONTACT -->
		<section id="cd-google-map">
			<div id="google-container"></div>
			<div id="cd-zoom-in"></div>
			<div id="cd-zoom-out"></div>
		</section>
		<div class="contact-wrapper">
			<div class="container mtb">
				<div class="row">
					<div class="col-sm-8 mail-container">
						<h4><?php echo $lang['GET_IN_TOUCH']; ?></h4>
						<span class="success"><?php if(isset($success)){ echo "$success"; }?></span>
						<hr /><span class="error"><?php if(isset($error)){ echo "$error"; }?></span>
						<div class="hline"></div>
							<p class="hear-from"><?php echo $lang['HEAR_FROM_YOU']; ?></p>
							<form class="cnct-form" method="post" action="<?=$site_url?>#contactwrap">
								<input type="text" name="antispam" id="antispam"  />
								<div class="col-md-6 col-sm-12 nopadding">
									<input class="input__field input__field--juro required" type="text" id="input-28 nom" name="nom" value="<?php if(isset($nom)) echo $nom; ?>"/>
									<span class="input input--juro">
										<label class="input__label input__label--juro" for="input-28 nom">
											<span class="input__label-content input__label-content--juro"><?php echo $lang['YOUR_NAME']; ?></span>
										</label>
									</span>
									<span class="error"><?php if(isset($falsenom)) echo $falsenom; ?></span>
								</div>
								<div class="col-md-6 col-sm-12 email-field nopadding">
									<input class="input__field input__field--juro required" type="text" id="input-28 email" name="email" value="<?php if(isset($email)) echo $email; ?>"/>
									<span class="input input--juro">
										<label class="input__label input__label--juro" for="input-28 email">
											<span class="input__label-content input__label-content--juro"><?php echo $lang['YOUR_EMAIL']; ?></span>
										</label>
									</span>
									<span class="error"><?php if(isset($falsemail)) echo $falsemail; ?></span>
								</div>
								<div class="form-group">
									<label for="message"><?php echo $lang['YOUR_MSG']; ?></label>
									<textarea placeholder="<?php echo $lang['ENTER_MSG']; ?>" class="form-control message-area required" id="message" name="message" rows="3"><?php if(isset($nom)) echo $nom; ?></textarea>
									<span class="error"><?php if(isset($falsemessage)) echo $falsemessage; ?></span>
								</div>
								<button type="submit" class="btn btn-theme"><?php echo $lang['SUBMIT']; ?></button>
							</form>
					</div><!-- col-lg-8 -->

					<div class="col-sm-4 social-links-container">
						<h4><?php echo $lang['SHARING_LINKS']; ?></h4>
						<hr class="social-hr" />
						<div class="menu">
							<div class="menu-wrapper">
								<ul class="menu-items">
									<li class="menu-item">
										<button class="menu-item-button share_facebook" data-url="http://rami-portfolio.jp.tn/">
											<img alt="Facebook icon"  src="<?=$site_url?>img/facebook.png" class="fb lazy"/>
										</button>
										<div class="menu-item-bounce"></div>
									</li>
									<li class="menu-item">
										<button class="menu-item-button share_gplus" data-url="http://rami-portfolio.jp.tn/">
											<img alt="Google+ icon" src="<?=$site_url?>img/google+.png" class="google lazy" />
										</button>
										<div class="menu-item-bounce"></div>
									</li>
									<li class="menu-item">
										<button class="menu-item-button" data-url="http://rami-portfolio.jp.tn/">
											<img alt="Instagram icon" src="<?=$site_url?>img/insta.png" class="insta lazy" />
										</button>
										<div class="menu-item-bounce"></div>
									</li>
									<li class="menu-item">
										<button class="menu-item-button share_linkedin" data-url="http://rami-portfolio.jp.tn/">
											<img alt="Linkedin icon" src="<?=$site_url?>img/linkedin.png" class="linkedin lazy" />
										</button>
										<div class="menu-item-bounce"></div>
									</li>
									<li class="menu-item">
										<button class="menu-item-button share_twitter" data-url="http://rami-portfolio.jp.tn/">
											<img alt="Twitter icon" src="<?=$site_url?>img/twitter.png" class="twt lazy" />
										</button>
										<div class="menu-item-bounce"></div>
									</li>
								</ul>
								<button class="menu-toggle-button">
									<i class="fa fa-share-alt menu-toggle-icon"></i>
								</button>
							</div>
						</div>
						<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
						<defs>
							<filter id="goo">
								<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
								<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
								<feComposite in="SourceGraphic" in2="goo" operator="atop"/>
							</filter>
						</defs>
						</svg>
					</div><!-- /container -->

				</div><!-- row -->
			</div>
		</div><!-- container -->

		<!-- FOOTER -->
		<section id="foot" role="footer">
			<div id="footerwrap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h4>About</h4>
							<div class="hline-w"></div>
							<p class="about-txt">Specialiste Software Developer for <a href="http://www.softcontrol.net" target="_blank">SoftControl.Net, Ltd.</a>Bangkok, Thailand.</p>
							<p class="about-txt">Pationate Web/Graphic Design & Social Media</p>
							    <div class="withLove">
							        <span class="alpha" data-sr="move 50px enter left over 1s"><?php echo $lang['MADE_WITH']; ?></span>
							        <a href="<?=$site_url?>404.php">
								        <svg class="heart" enable-background="new 0 0 92.515 73.161" height="73.161px" version="1.1" viewbox="0 0 92.515 73.161" width="92.515px" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
								            <g>
								                <path d="M82.32,7.888c-8.359-7.671-21.91-7.671-30.271,0l-5.676,5.21l-5.678-5.21c-8.357-7.671-21.91-7.671-30.27,0
								                        c-9.404,8.631-9.404,22.624,0,31.255l35.947,32.991L82.32,39.144C91.724,30.512,91.724,16.52,82.32,7.888z" fill="#010101"></path>
								            </g>
								        </svg>
							        </a>
							        <span class="omega" data-sr="move 50px enter right over 1s">By Rami</span>
							    </div>
						</div>
						<div class="span1 page-scroll">
							<a id="gototop" class="gototop pull-right" href="#page-top"><i class="fa fa-arrow-up"></i></a>
						</div>
					</div><!-- row -->
				</div><!-- container -->
			</div>
		</section><!-- footerwrap -->
	</div><!-- Main -->
<?php
	$page = 'page-top';
	include 'footer.php';
?>