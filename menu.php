<?php  define ('TITLE', 'MENU | O`s Fine Dining');?>
<?php  include ('includes/header.php');?>


<!-- menu -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Our Delicious Menu</h2>
						<p>Like our team, our menu is very small &mdash; but dang, does it ever pack a punch!.</p>
                        <p><em>Click any menu item to learn more about it.</em></p>
					</header>
					<div class="highlights">
					  <?php foreach ($menuItems as $dish => $item) { ?>
                          <a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item["title"]; ?></a> 
			             <?php } ?>	
					</div>
				</div>
			</section>
<!--
	                    <section>
							<div class="content">
								<header>
									<img src="img/blur-breakfast-close-up-376464%20(1).jpg" alt="breakfast" id="Team">
									<h3>breakfast</h3>
								</header>
								<p>Start your day with a properly breakfast made with the appropriate ingredents to start your day with!.</p>
							</div>
						</section>
-->






<?php include ('includes/script.php'); ?>
<?php  include( 'includes/footer.php'); ?>