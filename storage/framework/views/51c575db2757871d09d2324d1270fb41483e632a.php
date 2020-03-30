<?php $__env->startSection('content'); ?>

<div class="container my-4">
    <div class="border p-4">
        <h5 class="mb-4">
            投稿の新規作成
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

        <?php echo Form::open(['route'=>'posts.store']); ?>

        <div class="form-group">
            <?php echo Form::label('title','タイトル'); ?>

            <?php echo Form::text('title',old('title'),['class'=>'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('body','本文'); ?>

            <?php echo Form::textarea('body',old('body'),['class'=>'form-control']); ?>

        </div>

        <div class="mt-4">
            <a class="btn btn-secondary" href="<?php echo e(route('top')); ?>">
                キャンセル
            </a>
            <?php echo Form::submit('投稿をする',['class'=>'btn btn-primary']); ?>

        </div>
        <?php echo Form::close(); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Sample/resources/views/posts/create.blade.php ENDPATH**/ ?>