
<div class="row">
    <div class="col-md-2 mt-2">
    <?php
        echo $this->Html->link('Sign Up', ['action'=>'register'],['class'=>'btn btn-secondary']);
    ?>
    </div>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Student Id</th>
            <th scope="col">Department</th>
            <th scope="col">Course</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($students)) :
            foreach ($students as $sd) :
        ?>
                <tr class="table-active">
                    <th scope="row"><?php echo $sd->name ?></th>
                    <td><?php echo $sd->student_id ?></td>
                    <td><?php echo $sd->department ?></td>
                    <td><?php echo $sd->course ?></td>
                    <td>
                        <?php 
                             echo $this->Html->link('View', ['action'=>'view',$sd->id],['class'=>'btn btn-secondary']);
                        ?>
                        <?php 
                             echo $this->Html->link('Edit', ['action'=>'edit',$sd->id],['class'=>'btn btn-success']);
                        ?>
                        <?php 
                             //echo $this->Html->link('Delete', ['action'=>'delete',$sd->id],['class'=>'btn btn-danger']);
                             echo $this->Html->link(
                                'Delete',
                                array('controller' => 'Students', 'action' => 'delete', $sd->id, 'class'=>'btn btn-danger'),
                                array('confirm' => 'Are you sure you wish to delete this student?'),
                            );

                        ?>
                    </td>
                </tr>
            <?php
            endforeach;
        else :
            ?>
            <tr class="table-active">
                <th scope="row">No Records Found</th>
            </tr>
        <?php
        endif;
        ?>
    </tbody>
</table>