<?php
echo "Введите первое целое число: ";
$num1 = trim(fgets(STDIN));

while (!is_numeric($num1)) {
    echo "Введённое не является целым числом. Введите целое число: ";
    $num1 = trim(fgets(STDIN));
}

echo "Введите ещё одно целое число: ";
$num2 = trim(fgets(STDIN));

while (!is_numeric($num2) OR $num2 == 0) {
    if ($num2 == 0) {
        fwrite(STDERR, "Делить на 0 нельзя. Введите другое целое число: ");
    } else {
        echo "Введённое не является целым числом. Введите целое число: ";
    }
    $num2 = trim(fgets(STDIN));
}

fwrite(STDOUT, "Результат: $num1 / $num2 = " . $num1 / $num2);
unset($num1, $num2);