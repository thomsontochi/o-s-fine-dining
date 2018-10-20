<?php 
 define ("TITLE", "Contact Us | O's Fine Dining");
 include ("includes/header.php");
?>


<div class="bg-light">

 <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Get in touch with us!</h2>
        <p class="lead">We're available around the clock. Let us know how we can help!.</p>
      </div>

     
     
     <!--php part-->
     <?php
	
		// Check for Header Injections
		function has_header_injection($str) {
			return preg_match( "/[\r\n]/", $str );
		}
		
		
		if (isset($_POST['contact_submit'])) {
			
			// Assign trimmed form data to variables
			// Note that the value within the $_POST array is looking for the HTML "name" attribute, i.e. name="email"
			$name	= trim($_POST['name']);
			$email	= trim($_POST['email']);
			$lastName	= trim($_POST['lastName']);
			$username	= trim($_POST['username']);
			$msg	= $_POST['message']; // no need to trim message
		
			// Check to see if $name or $email have header injections
			if (has_header_injection($name) || has_header_injection($email) || has_header_injections($lastName) || has_header_injections($username)) {
				
				die(); // If true, kill the script
				
			}
			
			if (!$name || !$email || !$msg || !$lastName || !$username) {
				echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button block">Go back and try again</a>';
				exit;
			}
			
			// Add the recipient email to a variable
			$to	= "opiaaustin@gmail.com";
			
			// Create a subject
			$subject = "$name sent a message via your contact form";
			
			// Construct the message
			$message .= "Name: $name\r\n";
			$message .= "Email: $email\r\n\r\n";
			$message .= "Message:\r\n$msg";
			
			// If the subscribe checkbox was checked
			if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe' ) {
			
				// Add a new line to the $message
				$message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
				
			}
		
			$message = wordwrap($message, 72); // Keep the message neat n' tidy
		
			// Set the mail headers into a variable
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
			$headers .= "From: " . $name . " <" . $email . ">\r\n";
			$headers .= "X-Priority: 1\r\n";
			$headers .= "X-MSMail-Priority: High\r\n\r\n";
		
			
			// Send the email!
			mail($to, $subject, $message, $headers);
		?>
		
		<!-- Show success message after email has sent -->
		<h5>Thanks for contacting opia's!</h5>
		<p>Please allow 24 hours for a response.</p>
		<p><a href="index.php" class="button block">&laquo; Go to Home Page</a></p>
		
		<?php
			} else {
		?>

     
     
     <!--end of php-->
     
      <div class="row">
     
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">contact form</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" name="name" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" name="lastname" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username"  name="username" placeholder="Customer name" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control"  name="email" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Message</label>
                  <textarea type="text" class="form-control" id="address"  name="message" placeholder="1234 Main St" required></textarea>
            </div>

            
            <hr class="mb-4">
            
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input"  name="subscribe" id="save-info">
              <label class="custom-control-label" for="save-info">subscribe</label>
            </div>
            <hr class="mb-4">        
          
            <button class="btn btn-lg btn-block" name="contact_submit" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>
    </div>
 <?php
			}
		?>
</div>
	






<?php include('includes/script.php');?>
<?php  include ("includes/footer.php");?>