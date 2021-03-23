<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// // CRUD
// // メッセージの個別詳細ページ表示
// Route::get('tasks/{id}', 'TasksController@show');
// // メッセージの新規登録を処理（新規登録画面を表示するためのものではありません）
// Route::post('tasks', 'TasksController@store');
// // メッセージの更新処理（編集画面を表示するためのものではありません）
// Route::put('tasks/{id}', 'TasksController@update');
// // メッセージを削除
// Route::delete('tasks/{id}', 'TasksController@destroy');

// // index: showの補助ページ
// Route::get('tasks', 'TasksController@index')->name('tasks.index')
// // create: 新規作成用のフォームページ
// Route::get('tasks/create', 'TasksController@create')->name('tasks.create');
// // edit: 更新用のフォームページ
// Route::get('tasks/{id}/edit', 'TasksController@edit')->name('tasks.edit');


//トップページ'/'をTasksControllerのindexアクションに設定する内容
//indexアクションは'/'にアクセスした時/Tasksにアクセスした両方で同じルーティングが設定？
Route::get('/', 'TasksController@index');
//7つの基本ルーティングの省略形
Route::resource('tasks', 'TasksController');

//認証はLoginControllerが担当
//LoginController.php内のuse AuthenticatesUsers;はトレイトを使っている
//Routerで設定したshowLoginFormやloginアクションはそこに定義される
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login.post');
Route::get('login','Auth\LoginController@logout')->name('logout.get');