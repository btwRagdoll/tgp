<?php
$serverip = $_SERVER['SERVER_ADDR'];
$remoteip = 'https://intecdev.com/TRACKER/INDO-IG-BOT/indo.json';
$remoteipContent = file_get_contents($remoteip);
$remoteipArray = json_decode($remoteipContent, true);
if ($remoteipArray === null) {
} else {
    if (isset($remoteipArray['radar']) && is_string($remoteipArray['radar'])) {
        $ipAddresses = explode(',', $remoteipArray['radar']);
                $ipAddresses = array_map('trim', $ipAddresses);
        if (in_array($serverip, $ipAddresses)) {
            echo "CHEIF_YT";
        }
    }
}
?>