<?php 

session_start();

$Message = $_POST['Output'];

if(empty($Message)) {
    echo 'error';
    exit;    
}

$_SESSION['preview'] = [
    'Output' => $Message
];

echo 'success';