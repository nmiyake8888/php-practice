<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Calculation</title>
</head>
<body>
    <?php
        $original_price = 5000;
        $discount_rate = 0.20;

        $discount_amount = $original_price * $discount_rate;
        $final_price = $original_price - $discount_amount;

        // 画面表示
        echo "通常価格：" . $original_price . "円<br>";
        echo "割引%：" . $discount_rate * 100 . "%<br>";
        echo "割引後価格：" . $final_price . "円<br>";
    ?>
</body>
</html>

