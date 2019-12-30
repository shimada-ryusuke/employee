<?php
try {
  $pdo = new PDO ( 'mysql:dbname=testdata; host=localhost;port=3306; charset=utf8', 'shimada', 'shimada' );
  print '接続に成功しました。';
} catch ( PDOException $e ) {
  print "接続エラー:{$e->getMessage()}";
}

$sql = 'SELECT * FROM employee_m';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
// print_r ($result);
?>
​
<table>
<table border="1">
<?php
  foreach ($result[0] as $key => $val){
    if (is_numeric($key)){
       for($j=0;$j<count($result);$j++){
           echo "<td>". $result[$j][$key] ."</td>\n";
       }
       echo "</tr>\n";
    }else{
       echo "<tr>\n";
       echo "<td>" .$key. "</td>\n";
    }
  }
?>
</table>