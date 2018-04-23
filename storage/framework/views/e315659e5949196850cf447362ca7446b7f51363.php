<?php $__env->startSection('content'); ?>
<?php if(Auth::user()->tipo == 'sadmin'): ?>
<?php echo $__env->make('layouts.sadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<?php if(Auth::user()->tipo == 'admin'): ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<?php if(Auth::user()->tipo == 'user'): ?>
<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<?php if(Auth::user()->tipo == 'reportes'): ?>
<?php echo $__env->make('layouts.reportes', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>







<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>