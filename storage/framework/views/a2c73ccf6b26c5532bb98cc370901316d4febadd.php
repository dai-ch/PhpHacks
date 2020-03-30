<?php $__env->startSection('content'); ?>
<div class="container my-4">
    <div class="container">
        <a class="btn btn-primary" href="<?php echo e(route('posts.create')); ?>">
            投稿の新規作成
        </a>
    </div>
</div>

<div class="container my-4">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card mb-4">
        <div class="card-header">
            <h2>
                <?php echo e($post->title); ?>

            </h2>
        </div>
        <div class="card-body">
            <p class="card-text">
                <?php echo e($post->body); ?>

            </p>

            <a class="card-link" href="<?php echo e(route('posts.show',['post_id'=>$post->id])); ?>">
                詳細を見る
            </a>
        </div>
        <div class="card-footer">
            <span>
                投稿日時：<?php echo e($post->created_at->format('Y-m-d')); ?>

            </span>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="d-flex justify-content-center mb-5">
        <?php echo e($posts->links()); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Sample/resources/views/posts/index.blade.php ENDPATH**/ ?>