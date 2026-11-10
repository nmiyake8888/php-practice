<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program for evaluating multiple conditions</title>
</head>
<body>
    <?php
        // 定義
        $age = 25;
        $is_member = true;
        $is_student = false;

        // 条件1：18歳以上かつ会員
        if ($age >= 18 && $is_member) {
            echo "割引が適用されます<br>";
        }

        // 条件2：65歳以上または学生
        if ($age >= 65 || $is_student) {
            echo "シニア・学生割引が適用されます<br>";
        }
    ?>
</body>
</html>