<?php

/**
 * SITE CONFIG
 */
define("SITE", [
    "name" => "Auth em MVC com PHP",
    "desc" => "Exemplo de implementação de um sistema de login simples usando MVC com PHP baseado no curso Código Aberto T1.",
    "domain" => "",
    "locale" => "pt_BR",
    "root" => "http://localhost:8000"
]);

/**
 * DATABASE CONNECT
 */
const DATA_LAYER_CONFIG = [
    "driver" => "mysql",
    "host" => "database",
    "port" => "3306",
    "dbname" => "auth",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
];

/**
 * SOCIAL CONFIG
 */
define("SOCIAL", [
    "facebook_page" => "",
    "facebook_author" => "",
    "facebook_appId" => "",
    "twitter_creator" => "",
    "twitter_site" => ""
]);

/**
 * MAIL CONNECT
 */
define("MAIL", [
    "host" => "	smtp.sendgrid.net",
    "port" => "587",
    "user" => "apikey",
    "passwd" => "",
    "from_name" => "",
    "from_email" => ""
]);

/**
 * SOCIAL LOGIN
 */
define("FACEBOOK_LOGIN", [
    "clientId" => "",
    "clientSecret" => "",
    "redirectUri" => SITE["root"] . "/facebook",
    "graphApiVersion" => "v17.0"
]);

/**
 * GOOGLE LOGIN
 */
define("GOOGLE_LOGIN", [
    "clientId" => "",
    "clientSecret" => "",
    "redirectUri" => SITE["root"] . "/google"
]);
