<?php
	
	define("TITLE", "Menu | Franklin's Fine Dining");
	
	include('includes/header.php');
	
	// Strip bad characters function
	// Learn more about preg_replace: http://php.net/manual/en/function.preg-replace.php
	function strip_bad_chars( $input ) {
		$output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
		return $output;
	}
	
	if(isset($_GET['item'])) {
		$menuItem = strip_bad_chars( $_GET['item'] );
		$dish = $menuItems[$menuItem];
	}
	
	// Calculate suggested tip
	function suggestedTip($price, $tip) {
		$totalTip = $price * $tip;
        echo "$totalTip";
       // echo money_format('%.2n', $totalTip);
	}
	
?>
	<div class="text-center">
	
		<h1>
           <div class="">
               <?php echo $dish["title"]; ?>
            </div>
            <span class="price"><sup>$</sup><?php echo $dish["price"]; ?></span></h1>
		<p><?php echo $dish["blurb"]; ?></p>
		<br>
		<p><strong>Suggested beverage: <?php echo $dish["drink"]; ?></strong></p>
		<p><em>Suggested tip: <sup>$</sup><?php suggestedTip($dish["price"], 0.20); ?></em></p>
        
        <a href="menu.php" class="button btnspace">&laquo; Back to Menu</a>
		
	</div><!-- dish -->
	
	
			
<?php include('includes/footer.php'); ?>
<?php include('includes/script.php');?>
