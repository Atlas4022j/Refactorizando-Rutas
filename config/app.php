<?php 
$app_url = "http://localhost/examen/public/";

function asset($cardena){
    global $app_url;
    return $app_url.$cardena;
}