// <?php 
	
	// $randomNumber = rand(1, 100);
	// fwrite(STDOUT, "Random Number is: $randomNumber\n");

	
	
	// fwrite(STDOUT, "Guess? ");
	// $userInput = trim((int)fgets(STDIN));
	// while ($userInput != $randomNumber) {
	// 	// fwrite(STDOUT, "Guess? ");
	// 	// $userInput = trim((int)fgets(STDIN));
	// 	// fwrite(STDOUT, "This was your guess: $userInput\n" );	
	// 	if ($userInput < $randomNumber) {
	// 		fwrite(STDOUT, "Higher\n");
	// 		$userInput = trim((int)fgets(STDIN));
	// 	} else {
	// 		fwrite(STDOUT, "Lower\nGuess? ");
	// 		$userInput = trim((int)fgets(STDIN));
	// 	}
	// }

	// fwrite(STDOUT, "You Win!\n");



// High-Low Game

$min = 1;
$max = 100;

if($argc == 3) {
    $min = isset($argv[1]) ? $argv[1] : null;
    $max = isset($argv[2]) ? $argv[2] : null;
}

// if no command line arguments, default min/max to 1 and 100.

// prompt user for name until they provide it.
do {
    fwrite(STDOUT, "What is your first name?" . PHP_EOL);
    fwrite(STDOUT, "\t name: ");
    $userName = trim(fgets(STDIN));
    var_dump($userName);
} while (empty($userName));

// welcome user
fwrite(STDOUT, "Welcome, $userName!" . PHP_EOL);

do {
    // generate random number
    $randomNumber = mt_rand($min, $max);

    // compare number to the guess
    // if incorrect, let user know higher or lower
    do {
        do {
            // prompt user for their guess
            fwrite(STDOUT, "Please guess an integer between $min and $max" . PHP_EOL);
            $guess = trim(fgets(STDIN));
        } while (!is_numeric($guess));

        if($randomNumber > $guess) {
            $message = "guess higher!" . PHP_EOL;
        } else if($randomNumber < $guess) {
            $message = "guess lower!" . PHP_EOL;
        }
        echo $message . PHP_EOL;
    } while ($randomNumber != $guess);

    fwrite(STDOUT, "You guessed it! Good job!" . PHP_EOL);

    // on correct guess, prompt user to play again
    fwrite(STDOUT, "Would you like to play again? Type 'yes' or 'no'." . PHP_EOL);
    $playAgain = trim(fgets(STDIN));

} while($playAgain != "no");


 ?>
