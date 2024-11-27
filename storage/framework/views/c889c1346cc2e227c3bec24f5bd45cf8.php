<!-- first include start -->
<?php echo $__env->make("include/dashboard/first", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- first include end -->


<!-- include navbar start -->
<?php echo $__env->make("include/dashboard/navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- include navbar end -->


<!-- include sidebar start -->
<?php echo $__env->make("include/dashboard/sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- include sidebar end -->

<main id="main" class="main">
<?php echo $__env->yieldContent("content"); ?>
</main>


<!-- include footer start -->
<?php echo $__env->make("include/dashboard/footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- include footer end --><?php /**PATH C:\Users\tamim\Rasasi_perfumes\Rasasi-perfumes-project\resources\views/layouts/dashboard_master.blade.php ENDPATH**/ ?>