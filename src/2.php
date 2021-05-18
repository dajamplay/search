<?php

//сортировка пузырьком

$items = [123, 22, 1, 0, 44, 23, 21, 111, 121];

$isSort = false;

echo '<pre>';
print_r($items);
echo '</pre>';

while (!$isSort) {

    $isSort = true;

    for ($i = 0; $i < count($items) - 1; $i++) {

        if ( $items[$i] > $items[$i + 1] )  {
            list($items[$i], $items[($i + 1)]) = [$items[($i + 1)], $items[$i]];
//            $tmp = $items[$i + 1];
//            $items[$i + 1] = $items[$i];
//            $items[$i] = $tmp;
            $isSort = false;
        }

    }

}

echo '<pre>';
print_r($items);
echo '</pre>';