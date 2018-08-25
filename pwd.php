
<?php
 /*$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }

$key[] = $pass;
echo"<pre>";
print_r($key);*/
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$&?";
    $password = substr( str_shuffle( $chars ), 0, 8);
    echo($password);


	$resource	= Mage::getSingleton('core/resource');
	$conn 		= $resource->getConnection('sys');
	$results 	= $conn->query('SELECT * FROM host_summary');
	
	print_r($results)
?>