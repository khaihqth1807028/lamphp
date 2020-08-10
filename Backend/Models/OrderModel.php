<?php


class OrderModel{

public function listOrderModel($recordPerPage){

    $numPage = ceil($this->totalRecord()/$recordPerPage);
    //lay bien p truyen tu url
    $p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
    //lay tu ban ghi nao
    $from = $p * $recordPerPage;
    //---
    //lay bien ket noi
    $conn = Connection::getInstall();
    //thuc hien truy van
    $query = $conn->query("select * from orders order by id desc limit $from,$recordPerPage");
    //lay tat cac ket qua tra ve
    $result = $query->fetchAll();
    return $result;
}
public function getCustomer($id){
    $conn = Connection::getInstall();
    //thuc hien truy van
    $query = $conn->query("select name from customers where id=$id");
    $result= $query->fetch();
    return $result;
}
public function totalRecord(){
    $conn = Connection::getInstall();
    //thuc hien truy van
    $query = $conn->query("select id from orders");
    return $query->rowCount();
}
}