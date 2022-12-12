<?php $__env->startSection('title', 'Home page'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo e($videos->links()); ?>

    <div class="row">
        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-3">
            <div class="card">
                <img src="<?php echo e($video->thumbnail); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($video->title); ?></h5>
                    <p class="card-text"><?php echo e($video->snippet); ?></p>
                    <a href="<?php echo e(route('public.video', ['video' => $video])); ?>" class="btn btn-primary">View</a>
                    <a href="<?php echo e(route('video.like', ['video' => $video])); ?>" class="btn <?php echo e($video->authHasLiked ? 'btn-danger' : 'btn-primary'); ?>">
                        <?php if($video->authHasLiked): ?>
                            Unlike
                        <?php else: ?>
                            Like
                        <?php endif; ?>
                    </a>
                </div>
                <div class="card-footer text-muted">
                    <?php echo e($video->user->name); ?><br>
                    <?php echo e($video->created_at->diffForHumans()); ?> <br>
                    <b>Comments:</b> <?php echo e($video->comments()->count()); ?> <br>
                    <b>Likes:</b> <?php echo e($video->likes()->count()); ?> <br>
                    <?php $__currentLoopData = $video->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('public.tag', ['tag'=>$tag])); ?>">#<?php echo e($tag->name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TA-20E-471\Desktop\ta20youtube-main\resources\views/index.blade.php ENDPATH**/ ?>