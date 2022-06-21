<?php
    if(isset($_POST['name'])) {
        //名前が送信されたら以下の処理を行う
        //この部分は変更してもいい
        
        //「予約フォーム」からの情報をそれぞれ変数に格納しておく↓

$name=htmlspecialchars($_POST["name"], ENT_QUOTES);
$number=htmlspecialchars($_POST["number"], ENT_QUOTES);
$member=htmlspecialchars($_POST["member"], ENT_QUOTES);
$day=htmlspecialchars($_POST["day"], ENT_QUOTES);
        
        //「予約フォーム」からの情報をそれぞれ変数に格納しておく↑

        
$dsn="mysql:host=localhost;dbname=postgres2;charset=utf8";
$user="";
$pass="パスワード";
           
    
    try{
        
$db = new PDO($dsn,$user,$pass);
$db->query("INSERT INTO テーブル名 (ban,name,number,member,day)
            VALUES (NULL,'$name','$number','$member','$day')");
        
    }catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
              
        header("Location: reservation_form.php");
        //"reservation_form.php（予約フォームがあったページ）"に戻る
        exit;
    
    }
?>