<?php
require_once 'Models/db.php';

function getCategories()
{

    $sql = 'SELECT * FROM categories';

    return getData($sql, FETCH_ALL);
}

function getTours() {
    $sql = 'SELECT tours.id, tours.name, categories.name as cate_name FROM tours
        LEFT JOIN categories
        ON tours.category_id = categories.id
    ';
    return getData($sql, FETCH_ALL);
}
function addTour($ten, $category){
     $sql = "INSERT into tours(name,category_id) value ('$ten','$category')";
     return getData($sql,NOT_FETCH);
}
function editTour($ten,$category){
    $sql = "UPDATE tours set name=$ten, category_id =$category";
    return getData($sql, FETCH_ONE);
}
function deleteTour(){
    $sql = "DELETE FROM tours where id=" . $_GET['id'];
    return getData($sql, FETCH_ONE);
}
