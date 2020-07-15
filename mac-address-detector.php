<?php 

/*  DETECT MAC ADDRESS OF THE LOCAL NETWORK 

    Depends: php-7.4-cli
    
    Install PHP in Ubuntu or Debian:

    user:~$ sudo apt-get install php7.4
    -----------------------------------

    dependencies error:
    user:~$ sudo apt-get install -f 
    -------------------------------

    ALERT: This script is just for easier your detection, that action is possible to make on the terminal

*/

//Change ip with your specifications
$ip = "192.168.0.";
$range_limit = "150"; //The Range was defined by DHCP provide of the ip for you
//configure your range at the local route

//$i is the start of the range
for($i = 100; $i <= $range_limit; $i++) {  //iterator

    $receive_value = "\t ". $ip . $i . "\n"; //ip concatened with $i 

    system('ping -c 2' . $receive_value, $retval);

    if($i == $range_limit){
        system('arp -a');
    }
}



?>
