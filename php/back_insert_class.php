<?php
try {
    require_once "./connect_ced101g3.php";

    $content = trim(file_get_contents("php://input"));
    $decoded = json_decode($content, true);

    $courseNo = $decoded["courseNo"];

    $teachNo = $decoded["teachNo"];
    $startDate = $decoded["startDate"];
    $endDate = $decoded["endDate"];
    $courseStartDate = $decoded["courseStartDate"];
    $classDescription = $decoded["classDescription"];

    $sql = "
            insert into class(courseNo,teachNo,startDate,endDate,courseStartDate,classDescription)
            values (:courseNo,:teachNo,:startDate,:endDate,:courseStartDate,:classDescription);
            ";
    //ok的sql
    // INSERT INTO `class` (`classNo`, `courseNo`, `teachNo`, `startDate`, `endDate`, `courseStartDate`, `classStatus`, `maxRegistNum`, `minRegistNum`, `RegistNum`, `classDescription`) 
    // VALUES (NULL, '1', '1', '2021-01-23', '2021-03-05', '2021-03-06', '1', '30', '1', '0', '魚魚測試');

    
    // $grouporddata = $pdo->query($sql);
    $per_ord_data = $pdo->prepare($sql);
    $per_ord_data->bindValue(":courseNo", $courseNo);
    $per_ord_data->bindValue(":teachNo", $teachNo);
    $per_ord_data->bindValue(":startDate", $startDate);
    $per_ord_data->bindValue(":endDate", $endDate);
    $per_ord_data->bindValue(":courseStartDate", $courseStartDate);
    $per_ord_data->bindValue(":classDescription", $classDescription);

    $per_ord_data->execute();

    echo "修改成功~!!";
    // if ($per_ord_data->rowCount() == 0) { //找不到
    //     //傳回空的JSON字串
    //     // echo "{}";

    // } else { //找得到
    //     //取回一筆資料
    //     $per_ord_datarow = $per_ord_data->fetchAll(PDO::FETCH_ASSOC);

    //     //送出json字串
    //     echo json_encode($per_ord_datarow);
    //     // echo $managerdatarow;
    // }

} catch (PDOException $e) {
    echo "系統錯誤, 請通知系維護人員~<br>";
    // echo "錯誤行號 : " . $e->getLine() . "<br>";
    // echo "錯誤原因 : " . $e->getMessage() . "<br>";
}