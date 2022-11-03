<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});


Route::prefix('/zoho')->group(function() {
	Route::get('crm', function() {
		return view('zoho.crm');
	})->name('zoho.crm');
	Route::get('one', function() {
		return view('zoho.one');
	})->name('zoho.one');
	Route::get('connect', function() {
		return view('zoho.connect');
	})->name('zoho.connect');
	Route::get('worplace', function () {
		return view('zoho.workplace');
	})->name('zoho.wp');


});



Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('service');
});

Route::get('/blog', function () {
    return view('blog.blog-layout');
});

Route::get('/team', function () {
    return view('team-profile');
});

Route::get('/blog/post', function () {
    return view('blog.blog-post');
});

Route::get('/portfolio/two-column', function () {
    return view('portfolio.two-column-portfolio');
});

Route::get('/portfolio/three-column', function () {
    return view('portfolio.three-column-portfolio');
});

Route::get('/portfolio/four-column', function () {
    return view('portfolio.four-column-portfolio');
});

Route::get('/privacy-policy', function () {
	return view('privacy-policy');
});

Route::prefix('/digital-city')->group(function() {
	Route::get('local-government-system', function() {
		return view('digitalcity.lgu');
	})->name('dc.lgu');

	Route::get('prizone', function() {
		return view('digitalcity.jail');
	})->name('dc.jail');

	Route::get('school-management-system', function() {
		return view('digitalcity.school');
	})->name('dc.school');
});

Route::prefix('/services')->group(function() {
	Route::get('reputation-management', function() {
		return view('services.orm');
	})->name('services.orm');

	Route::get('workplace-collaboration', function() {
		return view('services.collab');
	})->name('services.collab');

	Route::get('implementation', function() {
		return view('services.implementation');
	})->name('services.implementation');

	Route::get('training-development', function() {
		return view('services.training');
	})->name('services.training');
});

Route::get('pets-find-ways', function() {
	return view('pfw.main');
})->name('pfw.main');

Route::get('mac-tech/blockchain', function() {
	return view('mactech.blockchain');
})->name('mactech.blockchain');

Route::get('charmhealth', function () {
	return view('charmhealth');
})->name('charmhealth');

Route::get('terms-of-use', function () {
	return view('terms');
})->name('terms');

Route::get('careers', function () {
	return view('careers');
})->name('careers');