<?php
require_once 'Models/Tour.php';

// Hàm hiển thị danh sách Tour
function indexTour() {
    // B1. Lấy tất cả các bản ghi tours
    $tours = getTours();
    // B2. include_once view ds tour
    include_once './Views/tours.php';
}
function createTour()
{

    $categories = getCategories();

    include_once './Views/addtour.php';
}
function themtours() {
    //if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $ten = $_POST['themten'];
        $category = $_POST['matours'];
    //}
    
    addTour($ten, $category);
    header('location: index.php');
    die;
}

function edit(){
    $id = $_GET['id'];
    $categorie = getCategories();
    $tours = getTours($id);
    include_once '../Views/edittours.php';
}
function update(){
    $id = $_GET['id'];
    $ten = $_POST['themten'];
    $category = $_POST['matours'];
    editTour($ten,$category);
    header("location: tours.php");
    die;

}

function xoaTours(){
    $id = $_GET['id'];
    deleteTour($id);
    header('location: index.php');
    die;
}