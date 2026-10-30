<?php
function RouteRandomPass($length) {
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = "";

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = random_int(0, strlen($characters) - 1);
        $password .= $characters[$randomIndex];
    }

    return $password;
}

echo RouteRandomPass(6);
