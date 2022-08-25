<?php
 include './database.php';
 header('Content-Type: application/json');
 $filteredAlbum = [];
 if(!isset($_GET['genre']) || empty($_GET['genre'])){
    $filteredAlbum = $albumsInfo;
 }
 else
 {
    for($i=0;$i<count($albumsInfo);$i++){
        if($albumsInfo[$i]['genre'] == $_GET['genre'])
        {
            $filteredAlbum[] = $albumsInfo[$i];
        }
    }
 }

echo json_encode($filteredAlbum);