<?php   
   require 'game.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="game.js"></script>
    <style>
        #reset, #newGame{
            visibility: hidden;
        }

    </style>
    <title>Hangman</title>
</head>
<body>
    <div class="container col-sm-6">
        <h1 class="text-center">Hangman</h1>
        <div class="float-end">Miss: <span id ='mistakes'> </span></div> <br>
        <div class="float-end">Round: <span id ='games'> </span></div>
        <div class="text-center"></div>
            <img id="hangmanPic" src="./images/0.png" alt="">
           
            <p class="text-center" id="wordSpotlight"></p>
        </div>
        <div class="text-center"><div id="keyboard"></div></div>
        
        <div class="text-center"> <button class="btn btn-info" onclick="startGame()" id="startButton"> Start!</button> </div>
        <div class="text-center"> <button class="btn btn-info" onclick="reset()" id="reset">Another Round!</button> </div>
        <div class="text-center"> <button class="btn btn-info" onclick="newGame()" id="newGame">New Game! </button> </div>
    </div>

    
    
</body>
</html>