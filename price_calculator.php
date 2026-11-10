<?php
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;

// 小計
$subtotal = $price * $quantity;
// 消費税額
$tax_amount = $subtotal * $tax_rate;
// 合計金額
$total = $subtotal + $tax_amount;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Caluculate</title>
</head>
<body>
    <p>
        商品名： <?php echo $product_name ?><br>
        単価： <?php echo $price ?> 円 <br>
        数量： <?php echo $quantity ?> 個 <br>
        小計： <?php echo $subtotal ?> 円 <br>
        消費税(10%)： <?php echo $tax_amount ?> 円 <br>
        <span style="font-weight: bold;">
            合計金額： <?php echo $total ?> 円
        </span> 
    </p> 
</body>
</html>