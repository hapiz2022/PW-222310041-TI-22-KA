

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Students List</h2>
        <a href="<?php echo e(route('students.create')); ?>" class="btn btn-primary">Add New Student</a>

        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
        <?php endif; ?>

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Fullname</th>
                <th>NPM</th>
                <th>Email</th>
                <th>Prodi</th>
                <th width="280px">Action</th>
            </tr>
            <?php
                $i = 0;
            ?>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(++$i); ?></td>
                    <td><?php echo e($student->fullname); ?></td>
                    <td><?php echo e($student->npm); ?></td>
                    <td><?php echo e($student->email); ?></td>
                    <td><?php echo e($student->prodi); ?></td>
                    <td>
                        <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST">
                            <a class="btn btn-info" href="<?php echo e(route('students.show', $student->id)); ?>">Show</a>
                            <a class="btn btn-primary" href="<?php echo e(route('students.edit', $student->id)); ?>">Edit</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Kampus\IBIK\Materi\Semester 4\Lab. Pemrograman Web\laravel-student\resources\views/students/index.blade.php ENDPATH**/ ?>