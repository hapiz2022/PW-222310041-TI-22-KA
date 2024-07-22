<!-- resources/views/students/edit.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Edit Student</h2>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('students.update', $student->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="fullname">Fullname:</label>
                <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo e($student->fullname); ?>">
            </div>
            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" class="form-control" id="npm" name="npm" value="<?php echo e($student->npm); ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo e($student->email); ?>">
            </div>
            <div class="form-group">
                <label for="prodi">Prodi:</label>
                <input type="text" class="form-control" id="prodi" name="prodi" value="<?php echo e($student->prodi); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Kampus\IBIK\Materi\Semester 4\Lab. Pemrograman Web\laravel-student\resources\views/students/edit.blade.php ENDPATH**/ ?>