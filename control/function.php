<?php

function FilePrefix($prefix=null){

    if(is_null($prefix)){

    }else{
        $prefix = ucwords($prefix);
        switch($prefix){

            case"PDF";

            break;
        }
    }
}

function ProcessFile($path=null){

    $output = "";
    if(is_null($path)){
        $output = "invaild path";    
    }else{
        $fileList = glob($path);
        foreach($fileList as $filename){
            $md5 = md5($filename);
            if(is_file($filename)){
                
                $data = explode("/",$filename);
                $root = $data[0];
                $catagory = $data[1];
                $doc = $data[2];
                
                $doc = explode(".",$doc);
                $find = ["-","_","$","%"];
                $replace = " ";
                $title = str_replace($find,$replace,$doc);
                $book_title = ucfirst($title[0]);
                $book_mime = strtolower($title[1]);                        
            } 

            $collection[] = array(
                "hash" => $md5,
                "title" => $book_title,
                "type" => $book_mime,
                "link" => $filename
            );
        }
        $output = json_encode(array(
            "catalog"=> $catagory,
            "books"=>$collection));
    }
    return $output;
}

function table_fomrat($files = null){
    $output = null;
    if(is_null($files)){
        $output = null;
    }else{
        foreach($files as $r){

            if(!isset($n)){
                $n = 1;
            }else{
                $n = $n + 1;
            }

            $title = $r['title'];
            $type = strtoupper($r['type']);
            $link = $r['link'];

            $output .="
            <tr>
                <td>$n</td>
                <td>$title</td>
                <td>$type</td>
                <td><a href='$link'>view</a></td>
            </tr>";
        }
    }
    
    return $output;
}

?>