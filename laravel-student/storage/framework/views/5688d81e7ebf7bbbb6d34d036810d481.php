<!-- resources/views/students/create.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Add New Student</h2>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('students.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="fullname">Fullname:</label>
                <input type="text" class="form-control" id="fullname" name="fullname">
            </div>
            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" class="form-control" id="npm" name="npm">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="prodi">Prodi:</label>
                <input type="text" class="form-control" id="prodi" name="prodi">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Kampus\IBIK\Materi\Semester 4\Lab. Pemrograman Web\laravel-student\resources\views/students/create.blade.php ENDPATH**/ ?>