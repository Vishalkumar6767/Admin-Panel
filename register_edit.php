
<?php
session_start();

include 'includes/header.php';
include 'includes/navbar.php';
?>
<!-- datatales -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Edit Admin Profile</h6>
        <div class="card-body">

       

            <div class="form-group">
                <?php
                $connection = mysqli_connect("localhost", "root", "", "adminpanel");

                if (isset($_POST['edit_btn']))
                 {
                    $id = $_POST['edit_id'];
                    $query = "SELECT *FROM register WHERE id = '$id'";
                    $query_run = mysqli_query($connection, $query);
                    foreach ($query_run as $row)
                    {
                        ?>
                     
                <label> Username </label>
                <input type="text" name="username"value="<?= $row['username'];?>" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?= $row['email'];?>" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" value="<?= $row['password'];?>" class="form-control" placeholder="Enter Password">
            </div>
            <a href="register.php" class="btn btn-danger"> CANCEL</a>
            <button class="btn btn-primary">Update</button>
               <?php
                    }
                 }

                ?>
        
        </div>

       
    </div>

</div>

<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>