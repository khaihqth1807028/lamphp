<?php


class LeftCateModel{
public function listLeftCate(){

    $conn = Connection::getInstall();
    $query= $conn->query("slect * from categories where ");

}





}