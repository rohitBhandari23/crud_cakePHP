<?php echo $this->Form->create($students); ?>
<fieldset>
    <div class="form-group row mt-4">
        <legend><b>Edit Student Details</b></legend>
    </div>
    <div class="form-group row">
        <div class="col-md-4 col-lg-4 col-xl-4 mt-4">
            <label>Student Id</label>
            <?php
            echo $this->Form->input('student_id', ['class' => 'form-control disabled readonly', 'Placeholder' => 'Student Id']);
            ?>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-4 mt-4">
            <label>Student Name</label>
            <?php
            echo $this->Form->input('name', ['class' => 'form-control', 'Placeholder' => 'Full Name']);
            ?>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-4 mt-4">
            <label>Department</label>
            <?php
            echo $this->Form->input('department', ['class' => 'form-control', 'Placeholder' => 'Department']);
            ?>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-4 mt-4 mt-4">
            <label>Course</label>
            <?php
            echo $this->Form->input('course', ['class' => 'form-control', 'Placeholder' => 'Course']);
            ?>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-4 mt-4">
            <label>Contact Number</label>
            <?php
            echo $this->Form->input('phone', ['class' => 'form-control', 'Placeholder' => 'Phone Number']);
            ?>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-4 mt-4">
            <label>Email</label>
            <?php
            echo $this->Form->input('email', ['class' => 'form-control', 'Placeholder' => 'Email']);
            ?>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-4 mt-4">
            <label>Age</label>
            <?php
            echo $this->Form->input('age', ['class' => 'form-control', 'Placeholder' => 'Age']);
            ?>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-4 mt-4">
            <label>Address</label>
            <?php
            echo $this->Form->input('address', ['class' => 'form-control', 'Placeholder' => 'Address']);
            ?>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-4 mt-4">
            <label>Username</label>
            <?php
            echo $this->Form->input('username', ['class' => 'form-control disabled', 'Placeholder' => 'Username']);
            ?>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-4 mt-4">
            <?php 
                echo $this->Html->link('Back',['action'=>'index'],['class'=>'btn btn-primary']);
                echo $this->Form->button(__('Update'), ['class' => 'btn btn-primary']);  
            ?>
        </div>
</fieldset>
<?php echo $this->Form->end(); ?>