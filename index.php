<?php
    include './assets/header/data.php'; // ឬ require 'profile-data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <img src="<?php echo $profile['avatar']; ?>" alt="">
                        <div class="card-title">
                            <h1><?= $profile['name'] ?></h1>
                            <h1><?php foreach ($profile['university'] as $U):?> <span style="padding-right: 5px ;"><?= $U?></span> <?php endforeach; ?></h1>
                            <h1><?= $profile['gender'] ?></h1>
                        </div>
                    </div>
                    <div class="card-text">
                        <p style="color:#0099cc;"> Bio :</b> <?=  $profile['bio'] ?></p>
                        <hr>
                        <p style="color:#0099cc;"> Address :</b> <?=  $profile['address']?></p>
                        <hr>
                        <p style="color:#0099cc;"> Email :</b> <?=  $profile['email']?></p>
                    </div>
                    <div class="card-image">
                        <?php foreach ($profile['images'] as $img): ?>
                    <img src="<?= $img ?>" alt="hobby" >
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>