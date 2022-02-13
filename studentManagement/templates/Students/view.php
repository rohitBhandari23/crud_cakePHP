<?php
    echo '<br>';
    echo "<b>Student Name </b>: " . $student_details->name;
    echo '<br>';
    echo "<b>Student  Id</b>: " . $student_details->student_id;
    echo '<br>';
    echo "<b>College Id</b>: " . $student_details->college_id;
    echo '<br>';
    echo "<b>Department</b>: " . $student_details->department;
    echo '<br>';
    echo "<b>Course</b>: " . $student_details->course;
    echo '<br>';
    echo "<b>Phone</b>: " . $student_details->phone;
    echo '<br>';
    echo "<b>Email</b>: " . $student_details->email;
    echo '<br>';
    echo "<b>Age</b>: " . $student_details->age;
    echo '<br>';
    echo "<b>Address  </b>: " . $student_details->address;
    echo '<br>';
    echo "<b>Username  </b>: " . $student_details->username;
    echo '<br>';
    echo "<b>Registered On  </b>: " . $student_details->created_on;
    echo '<br>';
    echo $this->Html->link('Back',['action'=>'index'],['class'=>'btn btn-primary']);
?>