<?php

if (isset($_POST['submit'])) {
    
    $newfilename =$_POST['Filename'];
    if (empty($newfilename)) {
        $newfilename= "gallery";
    }else{
       $newfilename= strtolower(str_replace(" ","-",  $newfilename));  
    }
   $imagetitle =$_POST['Filetitle']; 
   $imagedesc =$_POST['filedesc']; 
    
    $file = $_FILES['file'];
    
    $filename =$file["name"];
    $filetype =$file["type"];
    $filetempname =$file["tmp_name"];
    $fileError =$file["error"];
    $filesize =$file["size"];
    
    $FileExt = explode [".",$filename];
    $fileActualExt = strtolower(end($FileExt));
    
    $allowed = ("jpg","jpeg","png");
    
    if(in_array($fileActualExt,$allowed)){
     if($fileError=== 0){
       if($filesize < 2000000){
          $imagefullname = $newfilename . ".". uniqid("",true) . ".". $fileActualExt;
           $FileDestination ="../images/" . $imagefullname;
           
           include_once "dbh.inc.php";
           
           if(empty($imagetitle) || empty($imagedesc)){
               header("location:../gallery.php");
               exit();    
           }else{
               $sql = "SELECT*FROM gallery;";
               $stmt = mysqli_stmt_init($conn);
               
               if (!mysqli_stmt_prepare($stmt, $sql)){
                   echo "SQL statement failed!";
               }else{
                   mysqli_stmt_execute($stmt);
                   $result = mysqli_stmt_get_result($stmt);
                   $rowcount = mysqli_num_rows($result);
                   $setimageorder =  $rowcount + 1;
                   
                   $sql = "INSERT INTO gallery (idGallery,	titlegallery,	descgallery,	imgfullnamegallery,	Ordergallery
) VALUES (?,?,?,?);";
                   if (!mysqli_stmt_prepare($stmt, $sql)){
                   echo "SQL statement failed!";
                   }else{
                       mysqli_stmt_bind_param($stmt, "ssss", $imagetitle, $imagedesc, $imagefullname, $setimageorder);
                       mysqli_stmt_execute($stmt);
                       
                       move_uploaded_file($filetempname, $FileDestination);
                       header ("location:../gallery.php");
                   }
               }
           }
       }else{
         echo"file size is too big!";
        exit();  
       }  
     }else{
        echo"you had an error!";
        exit();  
     }  
    }else{
        echo"you need to upload proper file type!";
        exit();
    }
}