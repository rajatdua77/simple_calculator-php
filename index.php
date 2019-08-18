<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>calculator</title>
</head>
<body class="container mt-2">
<h3 class="text-center alert alert-warning">
        Calculator</h3>
        <form action="index.php" method="POST">
        Enter first no.<br>
     <input type="number" name="num1"><br><br>
     Enter second no.<br>
     <input type="number"name="num2"><br><br>
     <button type="submit" class="btn  btn-outline-success" value="+" name="btn">+</button>
     <button type="submit" class="btn  btn-outline-info" value="-" name="btn">-</button>
     <button type="submit" class="btn  btn-outline-danger" value="/" name="btn">/</button>
     <button type="submit" class="btn  btn-outline-warning" value="*" name="btn">*</button>
<br>
</form>
<?php
function compute()
{
    if(isset($_POST['num1'])){
        $num1=$_POST['num1'];
    }
    if(isset($_POST['num2'])){

        $num2=$_POST['num2'];
    }
    if(isset($_POST['btn'])){
switch($_POST['btn'])
    
{
    case'+':
    $sum=$num1+$num2;
    return $sum;
    break;

    case'-':
    $sub=$num1-$num2;
    return $sub;
    break;

    case'/':
    $div=$num1/$num2;
    return $div;
    break;

    case'*':
    $prod=$num1*$num2;
    return $prod;
    break;
    default:
    echo"Invalid operation";
}
}
}
echo"<br><br>".'<span class="alert alert-danger">'."RESULT=".compute().'</span>';
?>
</body>
</html>