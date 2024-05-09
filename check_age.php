<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Welcome</p>
    
    <?php
    if(isset($_GET['age'])){
        $age = $_GET['age'];
        if($age>18){
            echo "You are elligble.";
        }
        else{
            $rem = 18-$age;
            echo "Sorry....".$rem." year remaining.";
        }
    }
    
    else{ ?>
        <form action="" method="GET">
        Enter Age : <input type="number" name="age">
        <button>submit</button>
    </form>
  <?php  } ?>

</body>
</html>