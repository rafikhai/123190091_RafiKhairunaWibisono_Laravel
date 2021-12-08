


<?php $__env->startSection('content'); ?>
<section>
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>
                    <div class="row"> 
                        <div class="col-lg-8 ms-3" >
                        <h1 > Pendataan Peserta Baksos Mawar </h1>
                        <a href="<?php echo e(url('create')); ?>" class="btn btn-primary"> + Tambah Mahasiswa </a>
                        </div>
                    

                    <div class="col-lg-8 mt-5">
                        <table class = "table ms-3">
                            <tr class="table-table-striped">
                                <th> No </th>
                                <th> Nama </th>
                                <th> NIM </th>
                                <th> Alamat </th>
                                <th> Aksi </th>
                            </tr>
                            
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataMahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td> <?php echo e($dataMahasiswa -> id); ?> </td>
                                <td> <?php echo e($dataMahasiswa -> nama); ?> </td>
                                <td> <?php echo e($dataMahasiswa -> nim); ?> </td>
                                <td> <?php echo e($dataMahasiswa -> alamat); ?> </td>
                                <td>
                                    <a href="<?php echo e(url('/edit/'.$dataMahasiswa->id)); ?>" class="btn btn-warning"> Edit</a>
                                    <a href="<?php echo e(url('/destroy/'.$dataMahasiswa->id)); ?>" class="btn btn-danger"> Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>

                </div>

                <div class="card-footer">
                    <a href="<?php echo e(route('logout')); ?>"class="btn btn-danger"> Logout</a>
                </div>
            </div>
        </div>
    </div>
  </div>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\sertifikasi\resources\views/index.blade.php ENDPATH**/ ?>