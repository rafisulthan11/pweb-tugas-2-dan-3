<?php

function redirect($url)
{
    header("Location: $url");
    exit();
}

function display_error($message)
{
    echo '<div class="error-message">' . $message . '</div>';
}

function display_success($message)
{
    echo '<div class="success-message">' . $message . '</div>';
}

function get_data_from_database($table, $id)
{
    // Implementasi pengambilan data dari database
    // $table adalah nama tabel, $id adalah ID data yang ingin diambil
    // Return data dalam bentuk array atau objek
}

function save_data_to_database($table, $data)
{
    // Implementasi penyimpanan data ke database
    // $table adalah nama tabel, $data adalah array data yang akan disimpan
    // Return true jika berhasil, false jika gagal
}

function validate_input($input)
{
    // Implementasi validasi input, misalnya, cek apakah input adalah email yang valid
    // Return true jika valid, false jika tidak valid
}

function get_customer_data($customer_id)
{
    // Implementasi pengambilan data customer dari database
    // Return data customer dalam bentuk array atau objek
}

function get_item_data($item_id)
{
    // Implementasi pengambilan data item dari database
    // Return data item dalam bentuk array atau objek
}

function admin()
{
    echo "Halaman Admin";
}

function dashboard()
{
    echo "Halaman Dashboard Admin";
}

function customer_login()
{
    echo "Halaman Login Customer";
}

function customer_login_save()
{
    echo "Proses Login Customer";
}

function customer_register()
{
    echo "Halaman Register Customer";
}

function customer_register_save()
{
    echo "Proses Register Customer";
}

function customer_profile()
{
    echo "Halaman Profil Customer";
}

function customer_profile_edited()
{
    echo "Proses Edit Profil Customer";
}

function item($id)
{
    echo "Halaman Detail Item dengan ID $id";
}

function cart()
{
    echo "Halaman Keranjang Belanja";
}

function order($id)
{
    echo "Halaman Detail Pesanan dengan ID $id";
}

function contact()
{
    echo "Halaman Kontak";
}

function logout()
{
    echo "Proses Logout";
}
