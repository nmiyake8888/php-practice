<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even/Odd Determination Program</title>
</head>
<body>
    <?php
        // 定義
        $number = 7;

        // 画面表示
        if ($number % 2 == 0) {
            echo "{$number}は偶数です";
        } else {
            echo "{$number}は奇数です";
        }
    ?>
</body>
</html>