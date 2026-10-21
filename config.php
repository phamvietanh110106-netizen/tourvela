<?php
session_start();
define('DB_HOST','127.0.0.1'); define('DB_NAME','tourvela'); define('DB_USER','root'); define('DB_PASS','');
function db(){ static $p=null; if(!$p){$p=new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4',DB_USER,DB_PASS,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);} return $p; }
function e($v){return htmlspecialchars((string)$v,ENT_QUOTES,'UTF-8');}
function money($n){return number_format((float)$n,0,',','.').'₫';}
function admin(){return !empty($_SESSION['admin']);}
