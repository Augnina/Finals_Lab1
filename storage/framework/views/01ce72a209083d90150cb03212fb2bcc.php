<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="<?php echo e(route('login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Log In</button>
    </form>
</body>
</html><?php /**PATH C:\Users\jojol\Desktop\general\colej\year3\s2\cit18\Reburiano_Registration_Login\resources\views/auth/login.blade.php ENDPATH**/ ?>