<?php

$start="http://indihacks.in/";

function follow_link($url){

$doc = new DOMDocument();
$doc->loadHTML(file_get_contents($url));

$linklist = $doc->getElementsByTagName("a");
foreach($linklist as $link){
$l = $link->getAttribute("href");
if(substr($l, 0, 1) == "/"  && substr($l, 0, 2) != "//"){
	$l = "https://".$l;
}
echo $l."\n<br>";
}

}





follow_link($start);
?>
