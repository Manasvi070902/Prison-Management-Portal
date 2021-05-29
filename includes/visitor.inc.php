<?php
    if(isset($_POST['visitor_add'])){
        require 'dbh.inc.php';
        
        $f_name=$_POST['f_name'];
        $l_name=$_POST['l_name'];
        $date_visit=$_POST['date_visit'];
        $aadhaar=$_POST['aadhaar'];
        $time_slot = $_POST['time_slot'];
        $prisoner_id=$_POST['prisoner_id'];


    if(empty($f_name)||empty($l_name)||empty($date_in)||empty($prisoner_id)){              
            
            header("Location: ../visitor.php?error=emptyfields");
            exit();
        }else{
                
                $sql="INSERT INTO Visitor(First_name,Last_name,Aadhaar) VALUES (?,?,?) ";
                $stmt=mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location: ../visitor.php?error=sqlerror");
                    exit();
                }else{
                    mysqli_stmt_bind_param($stmt,"sssi",$f_name,$l_name,$aadhaar);
                    // To DO : check for success or failure of statement in case of duplicate entry
                    mysqli_stmt_execute($stmt);

                    $visit_sql = "INSERT INTO Visit(Visitor_aadhaar,Date_visit,Time_slot,Prisoner_id) VALUES (?,?,?,?)";
                    $visit_stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($visit_stmt,$sql)){
                        header("Location: ../visitor.php?error=sqlerror");
                        exit();
                    }
                    else{
                        mysqli_stmt_bind_param($visit_stmt,"sssi",$aadhaar,$date_visit,$time_slot,$prisoner_id);
                        mysqli_stmt_execute($visit_stmt);
                        header("Location: ../success_visitor.php?insert=success");
                        exit();
                    }
                }

        }
    }