<?php

function getPassword($length) {
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()';
    $password = '';
    $password .= strtolower($letters[rand(0, strlen($letters) - 1)]);
    $password .= strtoupper($letters[rand(0, strlen($letters) - 1)]);
    $password .= $numbers[rand(0, strlen($numbers) - 1)];
    $password .= $symbols[rand(0, strlen($symbols) - 1)];
    $characters = strtolower($letters) . strtoupper($letters) . $numbers . $symbols;
    for ($i = 4; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return str_shuffle($password);
}


?>