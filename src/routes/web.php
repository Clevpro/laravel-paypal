<?php
use Clevpro\Paypal\Http\Controllers\Core\AuthorizationController;
 
Route::get('/paypal/test-packege', [AuthorizationController::class, 'index']);

