<?php 

$db = new PDO('sqlite:expense.db','','',[
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);

function add_expense(array $data, $table, $db){
    $query = $db->prepare("INSERT INTO $table (date, description, amount) VALUES (?, ?, ?)");
    $query->execute($data);
}

function del_expense(int $id, $table, $db){
    $query = $db->prepare("DELETE FROM $table WHERE id = :id");
    $query->execute([':id' => $id]);

}
function up_expense(array $data, $table, $db, $id){
    $query = $db->prepare("UPDATE $table SET 
                            date = :date, 
                            description = :desc, 
                            amount = :amount WHERE id = :id");
    $query->bindParam(':date',$data[0], PDO::PARAM_INT);
    $query->bindParam(':desc',$data[1], PDO::PARAM_INT);
    $query->bindParam(':amount',$data[3], PDO::PARAM_INT);
}
function list_info_expense($table, $db){
    $query = $db->prepare("SELECT * from $table");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;

}


?>