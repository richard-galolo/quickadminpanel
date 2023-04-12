<?php

use App\Http\Controllers\Api\V1\Admin\PostApiController;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Posts
    Route::apiResource('posts', PostApiController::class);
});
