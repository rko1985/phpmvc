<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Shareboard</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Shareboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_URL;?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_URL;?>shares">Shares</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <?php if(isset($_SESSION['is_logged_in'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo ROOT_URL;?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo ROOT_URL;?>users/logout">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo ROOT_URL;?>users/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo ROOT_URL;?>users/register">Register</a>
                    </li>
                <?php endif; ?>
            </ul>      
        </div>
    </div>
</nav>

<div class="container">

    <div class="row">
        <div class="col">
            <?php Messages::display(); ?>
        </div>        
        <?php require($view); ?>

    </div>

</div><!-- /.container -->
    
</body>
</html>