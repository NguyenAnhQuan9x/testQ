<?php
// Định nghĩa ra các tình huống lấy dữ liệu
define('FETCH_ALL', 2);
define('FETCH_ONE', 1);
define('NOT_FETCH', 0);

function getConnect() {
    $connect = new PDO(
        'mysql:host=localhost;dbname=PHP2_WE17202',
        'root',
        ''
    );

    return $connect;
}
// 1. Viết truy vấn $sql = 'SELECT * FROM tours;
// 2. Chuẩn bị truy vấn $statement = $connect->prepare($sql);
// 3. Thực thi $statement->execute();
// 4. Nhận kq $tours = $statement->fetchAll();
function getData($sql, $fetchType) {
    $conn = getConnect();
    $statement = $conn->prepare($sql);
    $statement->execute();

    switch($fetchType) {
        case FETCH_ALL:
            return $statement->fetchAll();
        case FETCH_ONE:
            return $statement->fetch();
        default:
            return true;
    }
}
function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = getConnect();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
