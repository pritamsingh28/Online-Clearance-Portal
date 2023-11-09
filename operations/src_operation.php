<?php

include('../shared/connection.php');
$studid = $_POST['userid'];
$button_pressed = $_POST['approve'];
//Clicking on the approve button
if($button_pressed == "approve"){
    $insert="INSERT INTO clearance (id) values('$studid')";
    mysqli_query($con,$insert) or die(mysqli_error($con));
    $sql="SELECT 
		student.id, 
		student.index_no, 
		student.first_name, 
		student.last_name, 
		student.status,
		tbl_src.amount,
		tbl_src.bal
		FROM student INNER JOIN tbl_src on 
		student.id=tbl_src.student_id
		WHERE tbl_src.student_id='$studid' GROUP by student.id";
    $q=mysqli_query($con,$sql);
    $fetch=mysqli_fetch_assoc($q);
    if($fetch['id']==$studid && $fetch['bal']==NULL){
        $query="UPDATE clearance SET is_src_approved=NULL WHERE id='$studid'";
        mysqli_query($con,$query) or die(mysqli_error($con));
        echo "Approval Denied:"." "."Student is Owing Dues";
    }

    else{
        $query="UPDATE clearance SET is_src_approved=1 WHERE id='$studid'";
        mysqli_query($con,$query) or die(mysqli_error($con));
        echo "Cleared";}
}
?>
