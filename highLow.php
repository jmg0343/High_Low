<?php 
	
	$randomNumber = rand(1, 100);
	fwrite(STDOUT, "Random Number is: $randomNumber\n");

	
	
	fwrite(STDOUT, "Guess? ");
	$userInput = trim((int)fgets(STDIN));
	while ($userInput != $randomNumber) {
		// fwrite(STDOUT, "Guess? ");
		// $userInput = trim((int)fgets(STDIN));
		// fwrite(STDOUT, "This was your guess: $userInput\n" );	
		if ($userInput < $randomNumber) {
			fwrite(STDOUT, "Higher\n");
			$userInput = trim((int)fgets(STDIN));
		} else {
			fwrite(STDOUT, "Lower\nGuess? ");
			$userInput = trim((int)fgets(STDIN));
		}
	}
	
	fwrite(STDOUT, "You Win!\n");


// <!-- 
//  	// Write the output
// // Notice the space after the ?
// fwrite(STDOUT, 'What is your first name? ');

// // Get the input from user
// $firstName = fgets(STDIN);

// // Output the user's name
// fwrite(STDOUT, "Hello $firstName\n"); -->
 ?>
