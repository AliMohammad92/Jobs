<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SeekerController;
use App\Http\Controllers\UserController;
use App\Http\Requests\postRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Routes need auth //
Route::middleware(['auth:sanctum'])->group(function () {

    // Routes common with all //
    Route::controller(UserController::class)->group(function () {
        Route::put('update', 'update');

        Route::get('logout', 'logout');

        Route::post('checkPassword', 'checkPassword');

        Route::post('resetPassword', 'resetPassword');

        Route::delete('delete', 'delete');

        Route::post('fcm-token', 'updateToken');

//        Route::get('test/{token}', 'noti');

        Route::get('search/{search}', 'search');
    });
        // Chat
        Route::controller(ChatController::class)->group(function () {
            Route::post('create', 'sendMessage');
            Route::post('displaysChats', 'allChats');
            Route::get('displayMessages/{chat_id}','shawAllMessages');
        });

        // Follow
        Route::controller(FollowController::class)->group(function () {
            Route::get('follow/{user_id}', 'follow');
            Route::get('followers/{user_id}','showFollowers');
            Route::get('followings/{user_id}','showFollowings');
        });
    // Routes common are over //

    // Company routes //
    Route::prefix('company')->group(function () {
        Route::controller(CompanyController::class)->group(function () {
            Route::post('create', 'createCompany');
            Route::post('update','update');
            Route::delete('delete', 'delete');
        });

        Route::controller(OpportunityController::class)->group(function () {
            Route::delete('delete/{id}', 'delete')->middleware('can:delete opportunity');

            Route::middleware('can:opportunity control')->group(function () {
                Route::post('addOpportunity', 'addOpportunity');
                Route::put('updateOpportunity/{id}', 'updateOpportunity');
                Route::get('getOpportunity', 'getOpportunity');
            });
        });
    });
    // Company routes are over //

    // Seeker routes //
    Route::controller(SeekerController::class)->prefix('seeker')->group(function () {
        Route::post('create', 'create');
        Route::post('update','update');

        Route::post('createCV', 'createCV');
    });

    // Post
    Route::controller(PostController::class)->prefix('post')->group(function () {
        Route::middleware('can:post control')->group(function () {
            Route::post('create', 'create');
            Route::put('edit/{post_id}' , 'edit');
            Route::get('view','allPosts');
        });
        Route::delete('delete/{id}','delete')->middleware('can:delete post');
    });
    // Seeker routes are over //


    // Admin Routes // Don't forget: api/admin/{}
    Route::prefix('admin')->group(function ()  {
        Route::controller(AdminController::class)->group(function (){
            Route::delete('removeUser', 'removeUser')->middleware('can:delete user');

            Route::delete('removePost', 'removePost')->middleware('can:delete post');

            Route::post('blockUser', 'blockUser')->middleware('can:block user');

            Route::middleware('can:view users')->group(function () {

                Route::get('getUsers/{type}', 'getUsers');

                Route::get('search/{user}','searchByUsernameOrEmail');
            });
        });

        Route::controller(PostController::class)->group(function () {
            Route::get('allPosts', 'allPosts')->middleware('can:view posts');
        });

        Route::controller(OpportunityController::class)->group(function () {
            Route::get('allOpportunities', 'allOpportunities')->middleware('can:view opportunities');
        });

        // api/admin/employee/{}
        Route::controller(EmployeeController::class)->prefix('employee')->group(function () {
            Route::middleware('can:employee control')->group(function () {
                Route::post('addEmployee','add');
                Route::post('editEmployee','edit');
            });
            Route::get('employees','getEmployee')->middleware('can:view employees');
        });
    });

        // Roles
        Route::middleware('can:role control')->controller(RoleController::class)->prefix('role')->group(function () {
            Route::get('allRoles', 'allRoles');
            Route::post('addRole', 'addRole');
            Route::put('editRole', 'editRole');
            Route::post('deleteRole', 'deleteRole');

            Route::post('editUserRoles', 'editUserRoles');
        });
    // Admin routes are over //
});
// Routes need auth are over //


// Routes don't need auth //
Route::controller(UserController::class)->group(function () {
    Route::post('register', 'register');

    // If code is expired, class this route
    Route::post('sendCode', 'sendCodeVerification');

    Route::post('login', 'login');

    // Verify
    Route::post('verifyAccount', 'verifyAccount');

    //       For Reset Password If user forgot his password
    Route::post('checkCode', 'checkCode');

    Route::post('forgotPassword', 'sendCode');

    Route::post('rePassword', 'rePassword');
});
// Routes don't need auth are over //
