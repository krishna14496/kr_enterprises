<?php $__env->startSection('content'); ?>
	    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Listings</div>

                <div class="card-body">
                    <?php echo Form::open(['action'=> 'ListingsController@store','method' => 'POST']); ?>

                    	<?php echo e(Form::text('name', '', ['placeholder'=> 'Company Name'])); ?>

						<?php echo e(Form::text('email', '', ['placeholder'=> 'Company email'])); ?>

						<?php echo e(Form::text('phone', '', ['placeholder'=> 'Company phone'])); ?>

						<?php echo e(Form::text('address', '', ['placeholder'=> 'Company address'])); ?>

                		<?php echo e(Form::textarea('bio', '', ['placeholder'=> 'About this bussiness'])); ?>

                		<?php echo e(Form::submit('submit')); ?>

                	<?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\KRISHNA\Desktop\larabiz\resources\views/createlisting.blade.php ENDPATH**/ ?>