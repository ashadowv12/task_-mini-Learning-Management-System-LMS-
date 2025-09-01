<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">
                    Welcome, <?php echo e(auth()->user()->name); ?>!
                </h3>

                <?php if(auth()->user()->role === 'admin'): ?>
                    <p class="mb-2">You are logged in as an <strong>Admin</strong>.</p>
                    <a href="<?php echo e(route('admin.courses.index')); ?>" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Manage Courses
                    </a>

                <?php elseif(auth()->user()->role === 'student'): ?>
                    <p class="mb-2">You are logged in as a <strong>Student</strong>.</p>
                    <a href="<?php echo e(route('courses.index')); ?>" class="inline-block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                        View Available Courses
                    </a>

                <?php else: ?>
                    <p><?php echo e(__("You're logged in!")); ?></p>
                <?php endif; ?>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p class="text-gray-600">
                    Use the navigation above to access your courses, profile, and other features.
                </p>
            </div>

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\mini-lms\resources\views/dashboard.blade.php ENDPATH**/ ?>