<!-- resources/views/products/index.blade.php -->



<?php $__env->startSection('content'); ?>
<h1>Lista de Produtos</h1>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div>
<h2><?php echo e($product->name); ?></h2>
<p><?php echo e($product->description); ?></p>
<p>R$ <?php echo e(number_format($product->price, 2, ',', '.')); ?></p>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alunos\Desktop\app\example-app\resources\views/products/index.blade.php ENDPATH**/ ?>