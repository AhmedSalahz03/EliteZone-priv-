<?php
require 'vendor/autoload.php';


if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $comment = $_POST['comment'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $time = $_POST['time'];

    $mongo = new MongoDB\Client('mongodb+srv://ahmedfighter1990:XoD7n9IBUYwpkrfa@ahmedcluster.kmzemsr.mongodb.net/');

    $collection = $mongo->comments->comments;
    
    $insertOneResult = $collection->insertOne([
        'comment' => $comment,
        'name' => $name,
        'mobile' => $mobile,
        'email' => $email,
        'time' => $time
    ]);
    
    
    if ($insertOneResult->getInsertedCount() == 1) {
        echo "Comment added successfully.";
    } else {
        echo "Error adding comment.";
    }
}
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>