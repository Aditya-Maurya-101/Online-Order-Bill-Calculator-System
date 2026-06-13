<?php
$order = $_POST['a1'];
$mod = $_POST['a2'];

$extra_charge = 0;
$pack_charge = 0;

if ($mod == "Express") {
    $extra_charge = 200;
}

if ($order < 500) {
    $pack_charge = 50;
}

$total = $order + $extra_charge + $pack_charge;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bill Result</title>
    <style>
        body{
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            margin:0;
            font-family:Arial, sans-serif;
        }

        .result-box{
             border:1px solid #292727;
           width:400px;
           height:250px;
           padding:20px;
           justify-content:center;
              align-items:center;
              text-align:center;
        }

        h3{
            margin-top:0;
        }
    </style>
</head>
<body>

<div class="result-box">
    <h3>Bill Details</h3>

    <?php
    echo "Order Amount: ₹" . $order . "<br><br>";
    echo "Delivery Mode: " . $mod . "<br><br>";
    echo "Extra Delivery Charge: ₹" . $extra_charge . "<br><br>";
    echo "Packaging Charge: ₹" . $pack_charge . "<br><br>";
    echo "<b>Final Bill Amount: ₹" . $total . "</b>";
    ?>
</div>

</body>
</html>