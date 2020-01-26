<?php

$start="http://indihacks.in/";

function follow_link($url){

$doc = new DOMDocument();
$doc->loadHTML(file_get_contents($url));

$linklist = $doc->getElementsByTagName("a");
foreach($linklist as $link){
echo $link->getAttribute("href");
echo "\n";
}

}





follow_link($start);
?>
