<?php 
    $conn = mysqli_connect("localhost","root","","resq");
    if(isset($_POST['submit'])){
        $user_type = $_POST['user-type'];
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = md5($_POST['password']);
    
        $select = " SELECT * FROM resq WHERE email = '$email' && password = '$pass' ";
    
        $result = mysqli_query($conn, $select);
    
        if(mysqli_num_rows($result) > 0){
            $error[] = 'user already exists!';
        }else{
    
            if($pass != $)
    
        }
    };
    if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        };
    };
?>

