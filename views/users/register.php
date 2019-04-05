<div class="container">
    <div class="card">    
        <div class="card-body">
            <h3 class="card-title">Register User</h3>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">       
            </form>                 
        </div>
    </div>
</div>