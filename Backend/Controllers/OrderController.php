<?php


include_once "Models/OrderModel.php";

class OrderController extends OrderModel {
    public function ListOrder(){
        $result= $this->listOrderModel(4);
        include "Views/OrderView.php";
    }
}