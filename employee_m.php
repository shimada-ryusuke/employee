<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.9.1
 */

/**
 * Database `testdata`
 */

/* `testdata`.`employee_m` */
$employee_m = array(
  array('id' => '1','name' => '山田 太郎','age' => '24','department' => '営業'),
  array('id' => '2','name' => '山下 清','age' => '25','department' => '経理'),
  array('id' => '3','name' => '麻生太郎','age' => '30','department' => '営業'),
  array('id' => '4','name' => '佐藤隆弘','age' => '28','department' => '営業'),
  array('id' => '5','name' => '水本恵子','age' => '26','department' => '経理'),
  array('id' => '6','name' => '吉田明子','age' => '23','department' => '営業事務'),
  array('id' => '7','name' => '野田圭祐','age' => '40','department' => '所長'),
  array('id' => '8','name' => '安川隆二','age' => '35','department' => '副所長')
);
foreach (employee_m as $key) {
  echo $key;
}
?>