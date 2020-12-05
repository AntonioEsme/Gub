<?php
$recaptcha = $_POST ['g-recaptcha-response'];
if($recaptcha !=''){
    $secret = "6LcWa8IUAAAAAHQLcB5MdLC6oIuU2SNiPPUmPTF0";
    /*--ip remota--*/
    $ip = $_SERVER['REMOTE_ADDR'];
    $var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
    $array = json_decode($var,true);
        if($array==true)
        {
            echo "Bienvenido  ";
            echo "";
            echo "INICIO  VER_USUARIOS    MOSTRAR ";
                                
                    
                       
                    
                
        }
    
}
else{
    echo "Error";;
}
?>
