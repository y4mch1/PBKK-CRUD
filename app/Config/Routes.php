<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Home Karyawan
$routes->get('karyawan', 'Karyawan::index');
// Halaman Tambah
$routes->get('karyawan/tambah', 'Karyawan::tambah');
// Halaman Edit
$routes->get('karyawan/edit/(:any)', 'Karyawan::edit/$1');

// Proses CRUD
// Insert
$routes->post('karyawan/add', 'Karyawan::add');
// Update
$routes->post('karyawan/update', 'Karyawan::update');
// Hapus
$routes->get('karyawan/hapus/(:any)', 'Karyawan::hapus/$1');