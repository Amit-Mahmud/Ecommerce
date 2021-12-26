<?php 
    $obj_adminBack = new adminBack();
    if(isset($_POST['ctg_btn'])){
        $return_message = $obj_adminBack->add_category($_POST);
    }

?>
<h2>Add Category</h2><br>
<form action="" method="post">
    <div class="form-group">
        <label for="ctg_name">Category Name</label>
        <input type="text" name="ctg_name" class="form-control">
    </div>
    <div class="form-group">
        <label for="ctg_des">Category Description</label>
        <input type="text" name="ctg_des" class="form-control">
    </div>
    <div class="form-group">
        <label for="ctg_status">Category Name</label>
        <select name="ctg_status" class="form-control">
            <option value="1">Published</option>
            <option value="0">Unpublished</option>
        </select>
    </div>
    <input type="submit" value="Add Category" name="ctg_btn" class="btn btn-primary">
    <?php if(isset($return_message)){
        echo $return_message;
    }?>
</form>