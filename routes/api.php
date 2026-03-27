<?php

use Illuminate\Support\Facades\Route;

// 第一個小專案（Laravel API）- 商品管理 API
use App\Http\Controllers\ProductController;

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);     // 查全部（含搜尋）
    Route::get('{id}', [ProductController::class, 'show']);   // 查單筆
    Route::post('/', [ProductController::class, 'store']);    // 新增
    Route::put('{id}', [ProductController::class, 'update']); // 更新
    Route::delete('{id}', [ProductController::class, 'destroy']); // 刪除
});