<?php

$usergoods = [
    'Телевизоры' => [
        'LED' => [
            'smart-tv' => 10,
            'some-tv-types' => 20,
        ],
        'TFT' => 25,
        '4K' => 15
    ],
    'Холодильники' => 40,
    'Микроволновки' => 20,
    'Пылесосы' => 10,

];



function countGoods($usergoods) {
   static $countGoods = 0;
        foreach ($usergoods as $key => $value) {
            if(is_array($value)) {
                $countGoods = countGoods($value);
            } else {
                $countGoods+=$value;
        }
    }

    return $countGoods;
}

echo '<pre>';
print_r($usergoods);
echo '</pre>';

/* foreach($usergoods as $key => $value) {
    echo '<pre>';
    print_r($value);
    echo '</pre>';

    if(is_array($value)) {
        foreach ($value as $key_2 => $value_2) {
            if(is_array($value_2)) {
                foreach ($value_2 as $key_3 => $value_3) {
                    if(is_array($value_3)) {

                    }
                    else {
                        $goodsCount+=$value_3;
                    }
                }
            } else {
                $goodsCount
            }
        }
        echo true;
    } else 
        $goodsCount+=$value;
        echo 'false';
    }

*/

echo '<hr/>';
echo 'Goods count: '.countGoods($usergoods);

?>