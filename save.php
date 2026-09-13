<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $data = "Fullname: " . $_POST['fullname'].
            " | Surname: " . $_POST['surname'].
            " | ID: " . $_POST['idnumber'].
            " | Cell : " . $_POST['cell'].
            " | Tel : " . $_POST['tel'].
            " | Email : " . $_POST['email'].
            " | Password : " . $_POST['password']. 
            "\n";
    
    file_put_contents("users.txt", $data, FILE_APPEND);
    header("Location: page.html");        
}
?>    