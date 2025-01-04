<?php
$for_each = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

foreach ($for_each as $key => $value){
    echo "{$key}：{$value} <br>";
}