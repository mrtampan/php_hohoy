<?php

echo "layer 1";

?>

<?php

echo "layer 2";

?>

<?php

echo "<script>

console.log('hehe')

</script>"

?>

<?php

echo "<script>

console.log('hoho')

</script>"

?>

<?php

$hewan = ["kelinci", "sapi", "kuda"];
$semuahewan = '';
foreach($hewan as $hew){
    $semuahewan .= $hew . " ";
}

echo $semuahewan;
?>
<?php
function hehe($param){
    return "hallo apa kabar " . $param;
}


?>

<?php
echo hehe("kimak");
?>