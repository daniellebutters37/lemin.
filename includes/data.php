<?php 

include 'connect.php';
 
$video_query = 'SELECT * FROM tbl_videos';


$getVideos = $pdo->query($video_query);

$results = array();
while($row = $getVideos->fetch(PDO::FETCH_ASSOC)){
    //var_dump($row);
    $results[] = $row;
}

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json;charset=UTF-8');
$results_json = json_encode($results, JSON_PRETTY_PRINT);
echo $results_json;

?>