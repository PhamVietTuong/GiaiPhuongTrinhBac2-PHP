<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3>Giải phương trình bậc 2</h3>
    <form action="Get.php" method="get">
        <input type="text" name="a" style="width: 30px" placeholder="A"> x <sup>2</sup>
        +
        <input type="text" name="b" style="width: 30px" placeholder="B"> x
        +
        <input type="text" name="c" style="width: 30px" placeholder="C"> = 0

        <button type="submit" name="calculator">Tính</button>
    </form>
    <!-- Kiểm tra dữ liệu server -->
    <?php
    if (isset($_GET['calculator'])) {
            $a = isset($_GET['a']) ? $_GET['a'] : '';
            $b = isset($_GET['b']) ? $_GET['b'] : '';
            $c = isset($_GET['c']) ? $_GET['c'] : '';
            if ($a == ""||$b == "" ||$c == "") {
                echo 'Phép tính bị lỗi, vui lòng nhập đủ';
            } else if ($a >= 'a' && $a <= 'z' || $a >= 'A' && $a <= 'Z'|| $b >= 'a' && $b <= 'z' || $b >= 'A' && $b <= 'Z'||$c >= 'a' && $c <= 'z' || $c >= 'A' && $c <= 'Z') {
                echo 'Bạn đang nhập kí tự chữ, vui lòng nhập số';
            }
    }
    ?>
</body>
</html>