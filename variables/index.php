<?php
    $firstName = 'Shahin';
    $age = 30;

    // constant
    define('NAME', 'Shahin Bhuiyan');

    
      
    echo $firstName;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <h1>User Profile Page</h1>
    <h2><?php echo NAME;  ?></h2>
    <h2><?php echo $firstName; echo ' ' , $age;  ?></h2> 
</body>
</html>