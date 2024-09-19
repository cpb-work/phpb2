<?php
echo "Введите первое целое число: ";
$num1 = trim(fgets(STDIN));

while (!(int)$num1) {
    echo "Введённое не является целым числом. Введите целое число: ";
    $num1 = trim(fgets(STDIN));
}

echo "Введите ещё одно целое число: ";
$num2 = trim(fgets(STDIN));

while (!(int)$num2) {
    if ($num2 == 0) {
        fwrite(STDERR, "Делить на 0 нельзя");
        exit;
    } else {
        echo "Введённое не является целым числом. Введите целое число: ";
        $num2 = trim(fgets(STDIN));
    }
}

fwrite(STDOUT, "Результат: $num1 / $num2 = " . $num1 / $num2);