<div class="container">
    <div class="card">    
        <div class="card-body">
            <h3 class="card-title">Share something</h3>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                <div class="form-group">
                    <label for="">Share Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="">Body</label>
                    <textarea class="form-control" name="body"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" class="form-control" name="link">
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                <a href="<?php echo ROOT_PATH;?>shares" class="btn btn-danger">Cancel</a>           
            </form>                 
        </div>
    </div>
</div>
