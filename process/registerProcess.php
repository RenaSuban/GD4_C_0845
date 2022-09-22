<?php
    
    if(isset($_POST['register'])){
        
        
        include('../db.php');

        
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $phonenum = $_POST['phonenum'];
        $membership = $_POST['membership'];

        $cekemail = mysqli_num_rows(mysqli_query($con, "SELECT email FROM users WHERE email='$_POST[email]'"));

        if($cekemail > 0){
            echo
                '<script>
                alert("Email Tersebut Sudah Digunakan");
                window.location = "../process/registerProcess.php"
                </script>';

        }else{
            
            $query = mysqli_query($con,
            "INSERT INTO users(email, password, name, phonenum, membership) 
                VALUES
            ('$email', '$password', '$name', '$phonenum', '$membership')")
                or die(mysqli_error($con)); 
                
            if($query){
                echo
                    '<script>
                    alert("Register Success"); 
                    window.location = "../index.php"
                    </script>';
            }else{
                echo
                    '<script>
                    alert("Register Failed");
                    </script>';
            }
        }
        
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>