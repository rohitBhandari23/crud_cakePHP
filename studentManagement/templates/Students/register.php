<?php echo $this->Form->create($students); ?>
    <fieldset>
        <legend>Sign Up</legend>
        <div class="form-group row">
            <?php
            echo $this->Form->input('name', ['class' => 'form-control', 'Placeholder' => 'Full Name']);
            ?>
        </div>
        <div class="form-group row">
            <?php
            echo $this->Form->input('email', ['class' => 'form-control', 'Placeholder' => 'Email']);
            ?>
        </div>
        <?php echo $this->Form->button(__('Register'), ['class' => 'btn btn-primary']);  ?>
    </fieldset>
<?php echo $this->Form->end(); ?>