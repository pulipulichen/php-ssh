<?php
include('Net/SSH2.php');

$ssh = new Net_SSH2('localhost');   // 登入伺服器
$ssh->login('root', 'password');    // 輸入登入的帳號與密碼

echo "<pre>" . $ssh->read('[prompt]') . "</pre>"; // 登入訊息

$ssh->write("reboot");  // 執行指令
echo "<pre>" . $ssh->read('[prompt]') . "</pre>";    // 取得指令執行結果
