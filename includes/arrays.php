<?php 

//nav items
   $NavItems = array(
             
            	array(
						"slug"	=> "index.php",
						"title"	=> "Home"
					),
				
					array(
						"slug"	=> "team.php",
						"title"	=> "Team"
					),
					
					array(
						"slug"	=> "menu.php",
						"title"	=> "Menu"
					),
					
					array(
						"slug"	=> "contact.php",
						"title"	=> "Contact"
					),
   
   );


//using array to echo the team members individually.
    $matthew = array(
                array(
                 "name" => "matthew",
                 "position" => "owner",
                 "bio" =>"matthew is the overall manager place there by OPIA him self, He cooks a mean fritatta!",
                 "img" => "owner"
                    ),  
              );

   $ruth = array(
                array(
                 "name" => "ruth",
                 "position" => "General Manager",
                 "bio" =>"ruth knows her stuff. The big sister of matthew himself, she runs the show. Don't miss her Margherita Mondays",
                 "img" => "ruth"
                    )
              );
   $jessi= array(
                array(
                 "name" => "jessi",
                 "position" => "head chef",
                 "bio" =>"jessi is the epitome of the phrase &ldquo;Don't judge a book by it's cover&rdquo; &mdash; You simply cannot find a better chef!",
                 "img" => "jessi"
                    )
              );

        

    $menuItems = array(
					
					"club-sandwich" => array(
						
						"title"	=> "<section>
							<div class='content'>
								<header>
									<img src='img/blur-breakfast-close-up-376464%20(1).jpg' alt='breakfast' id='Team'>
									<h3>breakfast</h3>
								</header>
								<p>Start your day with a properly breakfast made with the appropriate ingredents to start your day with!.</p>
							</div>
						</section>",
						"price"	=> 11,
						"blurb"	=> "Bacon ipsum dolor sit amet fatback landjaeger ullamco pariatur. Nostrud laboris et, duis drumstick eiusmod kevin ut aliquip. Filet mignon short ribs tenderloin short loin kielbasa non pork chop aliqua. Jerky shank tri-tip capicola, non andouille tenderloin cupidatat turducken meatball pork beef eu shoulder jowl.",
						"drink"	=> "Club Soda"
						
					),
					
					"dill-salmon" => array(
						
						"title"	=> "<section>
							<div class='content'>
								<header>
									<img src='img/cake-chocolate-chocolate-cake-132694.jpg' alt='breakfast' id='Team'>
									<h3 class=''>CAKE</h3>
								</header>
								<p>check out our hot baked chocolate cake  with a taste of strawberry</p>
							</div>
						</section>",
						"price"	=> 18,
						"blurb"	=> "Pork belly tempor ground round qui exercitation, jowl leberkas sed voluptate excepteur jerky. Reprehenderit veniam cow, quis in ribeye andouille eu pastrami eiusmod exercitation dolor.",
						"drink"	=> "Fancy Wine"
						
					),
					
					"super-salad" => array(
						
						"title"	=> "<section>
							<div class='content'>
								<header>
									<img src='img/close-up-cooking-cuisine-958545 (1).jpg' alt='breakfast' id='Team'>
									<dl>
                                     <dt>SALAD CHICKEN FRIES</dt>
                                     <dd>
                                     <p>check out our mixture of salad chiken fries... all mashed up together</p>
                                     </dd>
                                    </dl>
								</header>
								
							</div>
						</section>",
						"price"	=> 34,
						"blurb"	=> "Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.",
						"drink"	=> "Jug o' Water"
						
					),
					
				
					
				 );

?>
