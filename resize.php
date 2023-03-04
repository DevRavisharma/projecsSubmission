<?php
$maxwidthA = $_POST["widthA"];
$maxheightA = $_POST["heightA"];

$maxwidthB = $_POST["widthB"];
$maxheightB = $_POST["heightB"];

    $dimension = array();
    $imgwidth = $maxwidthA;
    $imgheight = $maxheightA;
    if($imgwidth > $maxwidthB){
        $ratio = $maxwidthB/$imgwidth;
        $newwidth = round($imgwidth*$ratio);
        $newheight = round($imgheight*$ratio);
        if($newheight > $maxheightB){
            $ratio = $maxheightB/$newheight;
            $dimension[] = round($newwidth*$ratio);
            $dimension[] = round($newheight*$ratio);
            return $dimension;
        }else{
            $dimension[] = $newwidth;
            $dimension[] = $newheight;
            return $dimension;
        }
    }elseif($imgheight > $maxheightB){
        $ratio = $maxheightB/$imgheight;
        $newwidth = round($imgwidth*$ratio);
        $newheight = round($imgheight*$ratio);
        if($newwidth > $maxwidthB){
            $ratio = $maxwidthB/$newwidth;
            $dimension[] = round($newwidth*$ratio);
            $dimension[] = round($newheight*$ratio);
            return $dimension;
        }else{
            $dimension[] = $newwidth;
            $dimension[] = $newheight;
            return $dimension;
        }
    }else{
        $dimension[] = $imgwidth;
        $dimension[] = $imgheight;
        return $dimension;
    }
?>