<!-- resources/views/students/show.blade.php -->





<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Student Details</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($student->fullname); ?></h5>
                <p class="card-text"><strong>NPM:</strong> <?php echo e($student->npm); ?></p>
                <p class="card-text"><strong>Email:</strong> <?php echo e($student->email); ?></p>
                <p class="card-text"><strong>Prodi:</strong> <?php echo e($student->prodi); ?></p>
            </div>
        </div>

        <a href="<?php echo e(route('students.index')); ?>" class="btn btn-primary mt-3">Back</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Kampus\IBIK\Materi\Semester 4\Lab. Pemrograman Web\student-management\resources\views/students/show.blade.php ENDPATH**/ ?>