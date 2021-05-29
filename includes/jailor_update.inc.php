<?php
    if(isset($_POST['update_jailor'])){
        require './dbh.inc.php';
        $jailor_id=$_POST['jailor_id'];
        $sec_name=$_POST['section_name'];
        $sec_id=$_POST['section_id'];
        echo $out_date."<br>";
        echo $pid;

        if(empty($out_date)||empty($pid)){
            header("Location: ../prisoner_dateout.php?error=emptyfields");
            exit();

            }else{
                    $sql="UPDATE section SET Section_id='$sec_id',Section_name='$sec_name' WHERE Jailor_id='$jailor_id' ";
                    if(!mysqli_query($conn,$sql)){
                        header("Location: ../jailor_update.php?error=sqlerror");
                        exit();
                    }else{
                        header("Location: ../jailor_update.php?error=success");
                    
                        exit();
                    }
            }
            
            
        }else{
        header("Location: ../failure.php");
        exit();
        }
    






