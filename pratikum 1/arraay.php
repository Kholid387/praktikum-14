<?php 
$fruits = ["Mangga", "Banana", "Apel", "Jerukse"];

echo $fruits[1];
echo "<br>";
echo "Jumlah Buah =" . count($fruits);

echo "<ol>";
foreach ($fruits as $fruit) {
    echo "<li> Buah " . $fruit . "</li>";
 }
echo "</ol>";

$fruits[] = "Avocado"; 
$fruits[2] = "styrawberry";
echo "<ol>";
foreach ($fruits as $i => $v) {
    echo "<li>Buah index ke-" . $i . "=" . $v . "</li>";
}
echo "</ol>";

echo "saya mempunyai buah";
foreach ($fruits as $fruit) {
    echo $fruit . ",";
}
?>