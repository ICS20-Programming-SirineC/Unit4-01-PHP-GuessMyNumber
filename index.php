<!DOCTYPE html>
<html>
   <head>
      <!--Metadata-->
      <meta charset="utf-8" />
      <meta name="description" content="Unit4-01-PHP-GuessMyNumber" />
      <meta name="keywords" content="immaculata, ics2o" />
      <meta name="author" content="Sirine Cherkaoui" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!--Favicon-->
      <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png" />
      <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png" />
      <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png" />
      <link rel="manifest" href="./fav/site.webmanifest" />
      <link rel="stylesheet" href="./css/style.css" />
      <title>Guess My Random Number, with PHP</title>
   </head>
   <body>
      <!-- Header -->
      <header>
         <h1>Guess My Random Number, with PHP</h1>
      </header>
      <main>
         <br>
         <br>
         <!--image-->
         <center><img src="./images/guess.png" alt="Guessing" width="200" height ="200"></center>
         <br>
         <br>
         <!-- Numeric Text Field for User Guess -->
         <form method="POST">
            <div>
               <label>Guess a number from 1 to 6:</label>
               <input
                  type="number"
                  id="user-guess"
                  name="user-guess"
                  step="1"
                  min="1"
                  max="6"
               />
            </div>
            <!-- Raised button with ripple -->
            <center>
               <br>
               <button type="submit">
                  Submit Guess
               </button>
            </center>
         </form>
         <br /> 
         <div id="display-results">
            <div id="answer"></div>
         </div>
      </main>
     <?php
        // Generate a random number between 1 and 6
        $random_number = rand(1, 6);

        // Check if the user has submitted a guess
        if(isset($_POST['user-guess'])){
            $user_guess = $_POST['user-guess'];

            // Check if the user's guess is correct
            if($user_guess == $random_number){
                echo "<script>
                          document.getElementById('answer').innerHTML = '<h2>You guessed it right!</h2>';
                      </script>";
            } else {
                echo "<script>
                          document.getElementById('answer').innerHTML = '<h2>Wrong guess! The number was $random_number.</h2>';
                      </script>";
            }
        }
     ?>
   </body>
</html>
