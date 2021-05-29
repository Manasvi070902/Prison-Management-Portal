<?php
    if(isset($_POST['update_jailor'])){
        require './dbh.inc.php';
        $jailor_id=$_POST['jailor_id'];
        $sec_name=$_POST['section_name'];
        $sec_id=$_POST['section_id'];
  

        if(empty($jailor_id)||empty($sec_name)||empty($sec_id)){
            header("Location: ../jailor_update.php?error=emptyfields");
            exit();

            }else{
                    $sql="UPDATE Section SET Section_id='$sec_id',Section_name='$sec_name' WHERE Jailor_id='$jailor_id' ";
                    if(!mysqli_query($conn,$sql)){
                        header("Location: ../jailor_update.php?error=sqlerror");
                        exit();
                    }else{
                        header("Location: ../jailor_update.php?error=success");
                    
                        exit();
                    }
                    }
            }
            
            
        }else{
        header("Location: ../failure.php");
        exit();
        }
    






