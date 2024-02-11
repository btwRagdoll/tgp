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
        <style>
        .form-step {
            display: none;
        }

        .current-step {
            display: block;
        }
    </style>
<form id="installForm" action="process_install.php" method="post">
    <!-- Step 1: Database Details -->
    <div class="form-step current-step" id="step1">
        <h3 style="color:#000;">Step 1: Database Details</h3>
        <input style="width:380px;" type="text" placeholder="localhost" name="Serverhost">
        <br><br>
        <input style="width:380px;" type="text" placeholder="Database Username" name="Serverusername" required>
        <br><br>
        <input style="width:380px;" type="password" placeholder="Database Password" name="Serverpassword" required>
        <br><br>
        <input style="width:380px;" type="text" placeholder="Database Name" name="Serverdatabase" required>
        <br><br>
        <button style="width:400px;" type="button" onclick="nextStep('step1', 'step2')">Next Step 2</button>
    </div>

    <!-- Step 2: Bot Details -->
    <div class="form-step" id="step2">
        <h3 style="color:#000;">Step 2: Bot & User Details</h3>
        <input style="width:380px;" type="text" placeholder="Bot Token" name="BotToken" required>
        <br><br>
        <input style="width:380px;" type="text" placeholder="Admin Chat ID" name="adminId" required>
        <br><br>
        <input style="display:none;" type="text" name="channelUsername" value="www.IntecHost.com" readonly>
        <input style="width:380px;" type="text" placeholder="Admin Contact @UserName" name="adminContact" required>
        <br><br>
        <button style="width:400px;" type="button" onclick="nextStep('step2', 'step3')">Next Step 3</button>
    </div>

    <!-- Step 3: PayTm Merchant Details -->
    <div class="form-step" id="step3">
        <h3 style="color:#000;">Step 3: PayTm Merchant Details</h3>
        <input style="width:380px;" type="text" placeholder="PayTm Merchant ID" name="PayTmMerchentId" required>
        <br><br>
        <input style="display:none;" type="text" value="www.IntecHost.com" name="PayTmMerchentKey">
        <input style="width:380px;" type="text" placeholder="PayTm QR Code UPI ID" name="PayTmupiId" required>
        <br><br>
        <button style="width:400px;" type="submit">Install Now!</button>
    </div>
</form>
<script>
    function nextStep(currentStepId, nextStepId) {
        document.getElementById(currentStepId).classList.remove('current-step');
        document.getElementById(currentStepId).style.display = 'none';

        const nextStep = document.getElementById(nextStepId);

        if (nextStep) {
            nextStep.classList.add('current-step');
            nextStep.style.display = 'block';
        }
    }
</script>
</div>
</body>
</html>