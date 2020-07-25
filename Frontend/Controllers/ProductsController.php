<?php

include "Models/ProductsModel.php";

class ProductsController extends ProductsModel{

    public function ProductCategory(){
        $recordPerPage = 1;
        $category_id =isset($_GET['category_id'])? $_GET['category_id'] : "";
        //tinh so trang
        $numPage = ceil($this->totalRecord($category_id)/$recordPerPage);
        //goi ham ModelRead tu class ProductsModel de lay ket qua
        $listCategories = $this->findCategories($category_id,$recordPerPage);

        include "Views/ProductsCategory.php";
    }
    public function Search(){
        $recordPerPage = 20;
        //tinh so trang
        $numPage = ceil($this->totalRecordSearch()/$recordPerPage);
        //goi ham ModelRead tu class ProductsModel de lay ket qua
        $listRecord = $this->modelSearch($recordPerPage);
        //load view
        include "Views/ProductsSearch.php";
    }
    public function ProductDetail(){
//
        $id = isset($_GET['id'])?$_GET['id']:"";
        $result = $this->detailProduct($id);

        include "Views/ProductDetail.php";
    }
    public function ProductAll(){
        $recordPerPage = 1;

        //tinh so trang
        $numPage = ceil($this->totalRecoreProducts($recordPerPage));
        //goi ham ModelRead tu class ProductsModel de lay ket qua

        $list = $this->allProducts($recordPerPage);

        include "Views/ProductsCategory.php";
    }
}


?>