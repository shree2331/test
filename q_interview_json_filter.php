<?php
function getViewCount(string $jsonString) : int
{
    if(empty($jsonString)) return 0;
    $json_parsed = json_decode($jsonString,true);
    if(empty($json_parsed)) return 0;
    $view_count = 0;
    foreach ($json_parsed['videos'] as $video){
        $view_count += $video['viewCount'];
    }

    return $view_count;
}

$jsonString = '{
    "apiVersion":"2.1",
    "videos":[
        {
            "id":"253",
            "category":"Music",
            "title":"Jingle Bells",
            "duration":457,
            "viewCount":88270796
        }
    ]
}';

echo getViewCount($jsonString);