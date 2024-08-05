<?php
    include '../../includes/dbconn.php';

    $sql = "SELECT id from tblemployees";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $empcount=$query->rowCount();

    echo htmlentities($empcount);
?>