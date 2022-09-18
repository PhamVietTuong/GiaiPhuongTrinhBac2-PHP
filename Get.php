<?php

$result = '';
if (isset($_GET['calculator'])) {
    $a = isset($_GET['a']) ? $_GET['a'] : '';
    $b = isset($_GET['b']) ? $_GET['b'] : '';
    $c = isset($_GET['c']) ? $_GET['c'] : '';
    //Kiểm tra dữ liệu client
    if ($a == "" || $b == "" || $c == "") {
        echo 'Phép tính bị lỗi, vui lòng nhập đủ';
    } else if ($a >= 'a' && $a <= 'z' || $a >= 'A' && $a <= 'Z' || $b >= 'a' && $b <= 'z' || $b >= 'A' && $b <= 'Z' || $c >= 'a' && $c <= 'z' || $c >= 'A' && $c <= 'Z') {
        echo 'Bạn đang nhập kí tự chữ, vui lòng nhập số';
    } else {
        $delta = ($b * $b) - (4 * $a * $c);
        if ($delta < 0) {
            $result = 'Phương trình vô nghiệm';
        } else if ($delta == 0) {
            $result = 'Phương trình nghiệm kép x1 = x2 = ' . (-$b / 2 * $a);
        } else {
            $result = 'Phương trình có hai nghiệm phân biệt, x1 = ' . ((-$b + sqrt($delta)) / 2 * $a);
            $result .= ', x2 = ' . ((-$b - sqrt($delta)) / 2 * $a);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo $result; ?>
</body>

</html>