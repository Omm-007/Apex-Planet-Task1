<?php
if(isset($_POST['btn'])){
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    $sub=$n1-$n2;
    echo $sub;
}
?>