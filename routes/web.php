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

Route::get('/logout','AdminController@logout');

Route::get('/', function () {
    return view('studentlogin');
});

Route::get('/backend', function () {
    return view('admin.adminlogin');
});

// admin login
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');
Route::get('/viewprofile','AdminController@viewprofile');
Route::get('/setting','AdminController@setting');

// Add Student
Route::get('/addstudent','AddStudentsController@addstudent');
Route::post('/save_student','AddStudentsController@savestudent');

Route::get('/allstudent','AllStudentsController@allstudent');
Route::get('/tutionfee','TutionController@tutionfee');
Route::get('/cse','CSEController@cse');
Route::get('/ece','ECEController@ece');
Route::get('/bba','BBAController@bba');
Route::get('/eee','EEEController@eee');
Route::get('/mba','MBAController@mba');
Route::get('/allteacher','TeacherController@allteacher');
