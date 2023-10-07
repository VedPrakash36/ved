<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $marks=500;
     switch($marks){
        case 230:
            echo "you got second division";
            break;
        case 300:
            echo "you got first division";    
            break;
        case 490:
            echo "you are state topper";
            break;
        case 500:
            echo "you are india topper";
            break;
        default:
            echo "you are pass in exam";
            break;            
     }

    ?>
</body>
</html>