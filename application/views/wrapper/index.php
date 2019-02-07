<!doctype html>
<html lang="en">
<head>
    <?php $this->load->view('wrapper/head.php'); ?>
</head>
<body class="bg-ligth">

    <?php $this->load->view('wrapper/nav.php'); ?>

    <div class="d-flex">
        <?php $this->load->view('wrapper/sidebar.php'); ?>

        <div class="content p-4">
                <h2 class="mb-4"><?php echo $judul; ?></h2>
            <?php $this->load->view($konten); ?>
        </div>
    </div>
<?php $this->load->view('wrapper/script.php'); ?>
</body>
</html>