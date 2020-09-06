<form action="index.php" method="post">
    a: <input type="text" name="a"><br>
    b: <input type="text" name="b"><br>
    c: <input type="text" name="c"><br>
    <input type="submit" value="Find">
</form>
<?php
include "QuadraticEquation.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
}
$result = new QuadraticEquation($a, $b, $c);
$result->getA();
$result->getB();
$result->getC();
if ($result->getDiscriminant() > 0) {
    echo "<br>";
    echo $result->getRoot1();
    echo "<br>";
    echo $result->getRoot2();
} else if ($result->getDiscriminant() == 0) {
    echo "<br>";
    echo $result->getRoot();

} else {
    echo "<br>";
    echo "The equation has no roots";
}

