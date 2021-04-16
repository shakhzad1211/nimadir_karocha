<form action="../../components/update-profile-after-registration.php" method="post" enctype="multipart/form-data" id="UploadForm" autocomplete="off">

    <div class="col-md-6">
        <div class="form-group float-label-control">
            <label for="">First Name</label>
            <input type="text" class="form-control" placeholder="<?php echo $rws['FName'];?>" name="user_firstname" value="<?php echo $rws['FName'];?>" required>
        </div>
        <div class="form-group float-label-control">
            <label for="">Last Name</label>
            <input type="text" class="form-control"  placeholder="<?php echo $rws['LName'];?>" name="user_lastname" value="<?php echo $rws['LName'];?>" required>
        </div>
       </div>    
    <div class="col-md-6">
        <label for="">Username</label>
        <div class="form-group float-label-control">
               
                <div class="input-group">
          
                    <fieldset > 
                        <input type="text" class="form-control" placeholder="<?php echo $rws['Author_username'];?>" name="user_username" value="<?php echo $rws['Author_username'];?>" id="disabledTextInput" autocomplete="off" required>
                    </fieldset>
                </div>
            
        </div>
        <div class="form-group float-label-control">
            <label for="">Password</label>
            <input type="password" class="form-control" placeholder="<?php echo $rws['user_password'];?>" name="user_password" value="<?php echo $rws['user_password'];?>" required>
        </div>
        <div class="form-group float-label-control">
            <label for="">Email</label>
            <input type="text" class="form-control" placeholder="<?php echo $rws['email'];?>" name="user_email" value="<?php echo $rws['email'];?>" required>
        </div>
    </div>          
<?php
    $user_username =  $_POST['user_username'];
?>     
    <hr>                 
    <div class="submit">           
        <center>
            <button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Save Your Profile</button>
        </center>
    </div>
</form>