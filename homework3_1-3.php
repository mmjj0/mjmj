<?php
    echo "1번<br/>";
    $n = 30;
    $sum=  0;
    $prod = 1;
    for($i = 1; $i <= $n; $i++) 
    {
        $sum += $i;
        $prod *= $i;
    }
    echo "1부터 n까지의 숫자 합 = $sum"."입니다<br/>";
    echo "1부터 n까지의 숫자 곱 = $prod"."입니다<br/>";
?>
<?php
    echo "2번<br/>";
    $n = 30;

    for ($x = 0; $x < $n; $x++) {
        $data[$x] = rand(0, 100);
        echo "$data[$x] ";
    }
    echo "<br/>";
?>
<?php
    echo "3번<br/>";
?>
