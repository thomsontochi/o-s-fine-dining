<?php 
define ('TITLE', 'TEAM | O`s Fine Dining');
include ('includes/header.php');
?>


<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Our Team at O's</h2>
						<p>We're small, but mighty. Franklin's Fine Dining has been a family-owned and run business since the dirty thirties, and we're proud of it! When you get these three together, you never know what can happen. But you can count on one thing: <strong>The best food you've ever had. Ever..</p>
					</header>
                   
                    
					<div class="highlights">
						<section>
							<div class="content">
								<header>
									<?php foreach ($matthew as $member) { ?>
                                        <img id="Team" src="img/<?php echo $member["img"]; ?>.png" alt="<?php echo $member["name"]; ?>">
                                        <h3><?php echo $member["name"]; ?></h3>
                                    <?php } ?>
								</header>
                                <p><?php echo $member["bio"]; ?></p>
								
							</div>
						</section>
                        <section>
							<div class="content">
								<header>
									<?php foreach ($ruth as $member) { ?>
                                        <img id="Team" src="img/<?php echo $member["img"]; ?>.jpg" alt="<?php echo $member["name"]; ?>">
                                        <h3><?php echo $member["name"]; ?></h3>
                                    <?php } ?>
								</header>
                                <p><?php echo $member["bio"]; ?></p>
								
							</div>
						</section>
                        <section>
							<div class="content">
								<header>
									<?php foreach ($jessi as $member) { ?>
                                        <img id="Team" src="img/<?php echo $member["img"]; ?>.jpg" alt="<?php echo $member["name"]; ?>">
                                        <h3><?php echo $member["name"]; ?></h3>
                                    <?php } ?>
								</header>
                                <p><?php echo $member["bio"]; ?></p>
								
							</div>
						</section>
                      
					</div>
                    
				</div>
			</section>
<?php include ('includes/footer.php');?>
<?php include('includes/script.php'); ?>