<?php $__env->startSection('content'); ?>
    <?php if(request()->session()->has('status')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="status-alert">
            <?php echo e(request()->session()->get('status')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <a href="<?php echo e(route('videos.create')); ?>" class="btn btn-primary">Add Video</a>
    <?php echo e($videos->links()); ?>

    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Duration</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Actions</th>
        </thead>
        <tbody>
        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($video->id); ?></td>
                <td><?php echo e($video->title); ?></td>
                <td><?php echo e($video->duration); ?></td>
                <td><?php echo e($video->created_at); ?></td>
                <td><?php echo e($video->updated_at); ?></td>
                <td>
                    <div class="btn-group">
                        <a href="<?php echo e(route('videos.show', ['video' => $video])); ?>" class="btn btn-primary">View</a>
                        <a href="<?php echo e(route('videos.edit', ['video' => $video])); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo e(route('videos.destroy', ['video' => $video])); ?>" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($videos->links()); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        window.addEventListener("load", () => {
            const alert = bootstrap.Alert.getOrCreateInstance('#status-alert')
            setTimeout(() => alert.close(), 5000);
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TA-20E-471\Desktop\ta20youtube-main\resources\views/videos/index.blade.php ENDPATH**/ ?>