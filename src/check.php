<?php

$email = $_POST['email'];
$password = $_POST['password'];
if($email == 'b201210306@sakarya.edu.tr' && $password == 'b201210306'){
echo "Hoşgeldin b201210306";
}else{
echo "Parola yanlış geri yönlendiriliyorsunuz...";
	
	header( "Refresh:5; url=https://platinsoft.net/B201210306/src/login.html");

}

?>
