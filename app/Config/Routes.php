<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/room', 'Home::room');


/* Minggu 2 */

$routes->get('/post_request', 'Form::post_request');
$routes->post('/post_response', 'Form::post_response');
$routes->get('/get_request', 'Form::get_request');
$routes->get('/get_response/(:segment)/(:segment)', 'Form::get_response/$1/$2');



/*  Minggu Ke 3  */

$routes->get('/kategori', 'Kategori::list');
$routes->get('/kategori/insert', 'Kategori::insert');
$routes->post('/kategori/insert', 'Kategori::insert_save');

$routes->get('/provinsi', 'Provinsi::list');
$routes->get('/provinsi/insert', 'Provinsi::insert');
$routes->post('/provinsi/insert', 'Provinsi::insert_save');



// Minggu ke 4 update & delete

$routes->get('/kategori/(:segment)', 'Kategori::update/$1');
$routes->post('/kategori/(:segment)', 'Kategori::update_save/$1');
$routes->get('/kategori/delete/(:segment)', 'Kategori::delete/$1');

$routes->get('/provinsi/(:segment)', 'Provinsi::update/$1');
$routes->post('/provinsi/(:segment)', 'Provinsi::update_save/$1');
$routes->get('/provinsi/delete/(:segment)', 'Provinsi::delete/$1');

//Minggu 5 crud 1-Many

$routes->get('/buku', 'Buku::list');
$routes->get('/buku/insert', 'Buku::insert');
$routes->post('/buku/insert', 'Buku::insert_save');

$routes->get('/kota', 'Kota::list');
$routes->get('/kota/insert', 'Kota::insert');
$routes->post('/kota/insert', 'Kota::insert_save');


//Minggu ke 6

$routes->get('/buku/(:segment)', 'Buku::update/$1');
$routes->post('/buku/(:segment)', 'Buku::update_save/$1');
$routes->get('/buku/delete/(:segment)', 'Buku::delete/$1');


$routes->get('/kota/(:segment)', 'Kota::update/$1');
$routes->post('/kota/(:segment)', 'Kota::update_save/$1');
$routes->get('/kota/delete/(:segment)', 'Kota::delete/$1');


// TB1
$routes->get('/konversi', 'Konversi::list');
$routes->get('/konversi/insert', 'Konversi::insert');
$routes->post('/konversi/insert', 'Konversi::insert_save');
$routes->get('/konversi/(:segment)', 'Konversi::update/$1');
$routes->post('/konversi/(:segment)', 'Konversi::update_save/$1');
$routes->get('/konversi/delete/(:segment)', 'Konversi::delete/$1');

$routes->get('/satuan', 'Satuan::list');
$routes->get('/satuan/insert', 'Satuan::insert');
$routes->post('/satuan/insert', 'Satuan::insert_save');
$routes->get('/satuan/(:segment)', 'Satuan::update/$1');
$routes->post('/satuan/(:segment)', 'Satuan::update_save/$1');
$routes->get('/satuan/delete/(:segment)', 'Satuan::delete/$1');


// Minggu ke 8
$routes->get('/peminjaman', 'Peminjaman::list');
$routes->get('/peminjaman_buku/(:segment)', 'PeminjamanBuku::list/$1');
$routes->get('/peminjaman_buku/insert/(:segment)', 'PeminjamanBuku::insert/$1');
$routes->post('/peminjaman_buku/insert/(:segment)', 'PeminjamanBuku::insert_save/$1');
$routes->get('/peminjaman_buku/delete/(:segment)', 'PeminjamanBuku::delete/$1');





/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
