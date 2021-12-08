<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Laravel</title>

    <?php echo $__env->yieldPushContent('before-style'); ?> <!-- menyisipkan style  -->
    <?php echo $__env->make('includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('after-style'); ?> 
</head> 
<body>
    <div class="container-fluid">
        <div class="row">
            <?php echo $__env->yieldPushContent('before-content'); ?>
            <?php echo $__env->yieldContent('content'); ?> <!-- tinggal add section ketika ingin menyisipkan content -->
            <?php echo $__env->yieldPushContent('after-content'); ?>
        </div>
    </div>

    <?php echo $__env->yieldPushContent('before-style'); ?>
    <?php echo $__env->make('includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('after-style'); ?>

</body>
</html><?php /**PATH C:\Users\User\Desktop\sertifikasi\resources\views/layouts/default.blade.php ENDPATH**/ ?>