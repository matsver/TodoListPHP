<?php 
    include 'connect.php';
    $id = $_POST["id"];
    $stmt = $pdo->prepare('DELETE FROM todos WHERE id = :id');
    $stmt->execute(array('id' => $id));
    exit();
$conn->close();
?>