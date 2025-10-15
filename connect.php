<?php
//$dsn = "mysql:host=localhost;dbname=b33_40138553_ecommerce";
//$user = "b33_40138553";
//$pass = "younes1234";

// ===================== الكود القديم كملاحظة =====================
// $dsn = "mysql:host=sql100.byethost33.com;dbname=b33_40138553_ecommerce";
// $user = "b33_40138553";
// $pass = "younes1234";
// ================================================================

// 🔹 القيم المصححة بناءً على ملف .env:
$dsn = "mysql:host=127.0.0.1;dbname=consub17_mceefans;charset=utf8";
$user = "consub17_mceefans";
$pass = "[Tk!W2p;LVYho5?J";

$option = array(
   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
);

$countrowinpage = 9;

try {
   $con = new PDO($dsn, $user, $pass, $option);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   // ✅ في CORS نسمح مبدئياً لجميع النطاقات (يمكن تضييقها لاحقاً)
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
   header("Access-Control-Allow-Methods: POST, OPTIONS , GET");

   include "functions.php";

   if (!isset($notAuth)) {
      // checkAuthenticate();
   }

} catch (PDOException $e) {
   echo $e->getMessage();
}
?>
