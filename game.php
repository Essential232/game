<!DOCTYPE html>
<html lang="en">
    <style>
        body{background-color:lightcyan;
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 20px;
            



        }
        form{margin: 40px;
        padding: 20px;
        

    }

        
    </style>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="game.php" method="post">
    <label>Enter your lucky number:</label><br>
    <input type="number" name="luckynumber"><br><br>
    <input type="submit" value="Submit">

    </form>

    <?php
    $lucky_number=$_POST["luckynumber"];
    $number= rand(1,30);

    if($lucky_number<1 || $lucky_number>30)
    {echo"Enter a number between 1 to 30";}

    
    elseif($lucky_number==$number){
        echo"You win";
    echo"The number is {$number}";}

    else{echo"You lose"."<br>";
    echo"The number is {$number}";};


    

    ?>
</body>
</html>