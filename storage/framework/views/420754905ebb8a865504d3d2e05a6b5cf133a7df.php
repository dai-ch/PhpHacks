<?php $__env->startSection('content'); ?>

<div class="container my-4">
    <div class="border p-4">
        <h5 class="mb-4">
            投稿の編集
        </h5>

        <?php if($errors->any()): ?>
        <div>
            <ul class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <?php echo e($error); ?>

                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>


        <?php echo Form::open(['route'=>['posts.update',$post->id],'method'=>'put']); ?>

        <div class="form-group">
            <?php echo Form::label('title','タイトル'); ?>

            <?php echo Form::text('title',old('title') ? old('title') : $post->title ,['class'=>'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('body','本文'); ?>

            <?php echo Form::textarea('body',old('body') ? old('body') : $post->body ,['class'=>'form-control']); ?>

        </div>

        <div class="mt-4">
            <a class="btn btn-secondary" href="<?php echo e(route('posts.show',['post_id'=>$post->id])); ?>">
                キャンセル
            </a>
            <?php echo Form::submit('更新をする',['class'=>'btn btn-primary']); ?>

        </div>
        <?php echo Form::close(); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Sample/resources/views/posts/edit.blade.php ENDPATH**/ ?>