<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="<?php echo e(route('register')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Register</button>
    </form>
</body>
</html><?php /**PATH C:\Users\m305user\Documents\REBURIANO\nina\resources\views/auth/register.blade.php ENDPATH**/ ?>