<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>

<body>
    <form action="<?php echo base_url('kali/perkalian') ?>" method="POST">
        <input type="text" name="bilangan1" id="bilangan1">
        <input type="text" name="bilangan2" id="bilangan2">
        <input type="submit" name="submit" value="Hitung">
        <?php if (isset($hasil)) : ?>
            <br>Hasilnya perkalian <?= $bilangan1 ?> dan <?= $bilangan2 ?> adalah : <strong><?php echo $hasil ?></strong>
        <?php endif ?>

        <br><a href="<?php echo base_url() ?>">Back to main menu.</a>

    </form>
</body>

</html>