<div class="container">
    <a href="<?php echo ROOT_PATH;?>shares/add" class="btn btn-success btn-share">Share Something</a>
    <?php foreach($viewmodel as $item): ?>
        <div class="card card-body bg-light card-block mb-3">
            <h3><?php echo $item['title']; ?></h3>
            <small><?php echo $item['create_date']; ?></small>
            <hr>
            <p><?php echo $item['body']; ?></p>
            <br>
            <div>
                <a href="//<?php echo $item['link']; ?>" class="btn btn-default mt-auto border" target="_blank">Go To Website</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>