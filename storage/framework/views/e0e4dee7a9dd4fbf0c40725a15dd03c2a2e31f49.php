<?php $__env->startSection('content'); ?>

<div class="container my-4">
    <div class="container">
        <div class="text-right">
            <?php echo Form::open(['route'=>['posts.destroy',$post->id],'method'=>'delete']); ?>

            <a class="btn btn-primary" href="<?php echo e(route('posts.edit',['post_id'=>$post->id])); ?>">
                編集する
            </a>
            <?php echo Form::submit('削除する',['class'=>'btn btn-danger']); ?>

            <?php echo Form::close(); ?>

        </div>
    </div>
</div>

<div class="container my-4">

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
        </div>
        <div class="card-footer">
            <span>
                投稿日時： <?php echo e($post->created_at->format('Y-m-d')); ?>

            </span>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Sample/resources/views/posts/show.blade.php ENDPATH**/ ?>