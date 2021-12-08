

<?php $__env->startSection('content'); ?>
<section>
  <div class="container mt-5">
      <h1> Edit data </h1>
     <div class="row"> 
        <div class="col-lg-8">
            <form action="<?php echo e(url('/update/'.$data->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?> 
                <div class="form-group mt-2">
                    <label for="nama">Nama Mahasiswa </label>
                    <input type="text" name="nama" class="form-control" placeholder="Rafi Kha" value="<?php echo e($data->nama); ?>">
                </div>
                <div class="form-group">
                    <label for="nama">NIM </label>
                    <input type="text" name="nim" class="form-control" placeholder="123190091"value="<?php echo e($data->nim); ?>">
                </div>
                <div class="form-group mt-2">
                    <label for="nama">Alamat </label>
                    <textarea class="form-control" name="alamat" 
                        placeholder="Sleman"><?php echo e($data->alamat); ?></textarea>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary"> Tambah Mahasiswa</button>
                </div>
                <div class="form-group mt-2">
                    <a href="<?php echo e(url('/')); ?>"> 
                        << kembai ke halaman utama </a>
                </div>
            </form>
        </div>
     </div>
  </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\sertifikasi\resources\views/show.blade.php ENDPATH**/ ?>