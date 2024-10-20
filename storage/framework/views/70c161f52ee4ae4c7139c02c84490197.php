<!-- resources/views/products/create.blade.php -->



<?php $__env->startSection('content'); ?>
<h1>Criar Produto</h1>
<form action="<?php echo e(route('products.store')); ?>" method="post">
<?php echo csrf_field(); ?>
<label for="name">Nome:</label>
<input type="text" name="name" id="name" required>
<br>
<label for="description">Descrição:</label>
<textarea name="description" id="description"></textarea>
<br>
<label for="price">Preço:</label>

<input type="number" step="0.01" name="price" id="price" required>
<br>
<button type="submit">Salvar</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alunos\Desktop\app\example-app\resources\views/products/create.blade.php ENDPATH**/ ?>