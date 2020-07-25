<?php


class Connection{
    public function getInstall(){
        $conn = new PDO('mysql:host=localhost;dbname=projectbanhang',"root" ,"" );
        $conn->exec("set names utf8");
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        return $conn;
    }
}










