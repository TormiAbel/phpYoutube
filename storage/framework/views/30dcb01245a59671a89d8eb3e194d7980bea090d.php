<?php $__env->startSection('content'); ?>
    <div class="card">
        <video src="<?php echo e($video->path); ?>" controls class="card-img-top" alt="..."></video>
        <div class="card-body">
            <h5 class="card-title"><?php echo e($video->title); ?></h5>
            <p class="card-text"><?php echo e($video->description); ?></p>
        </div>
        <div class="card-footer text-muted">
            <?php echo e($video->created_at->diffForHumans()); ?>

        </div>
    </div>

    <?php $__currentLoopData = $video->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mt-2">
            <div class="card-body">
                <p class="card-text"><?php echo e($comment->body); ?></p>
            </div>
            <div class="card-footer text-muted">
                <?php echo e($comment->user->name); ?>

                <?php echo e($comment->created_at->diffForHumans()); ?>

            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TA-20E-471\Desktop\ta20youtube-main\resources\views/videos\view.blade.php ENDPATH**/ ?>