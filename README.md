# Praktikum 11 : PHP CI

## Konfigurasi PHP
Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi pada webserver. Untuk mengaktifkan ekstentensi tersebut, melalu **XAMPP Control Panel**, pada bagian Apache klik **Config -> PHP.ini**. Kemuadian kita akan mendapatkan file yang bernama `php`, dimana kita akan menghilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan.

## Installasi Codeigniter 4
Pada praktikum ini kita akan menginstall Codeigniter 4 menggunakan cara manual. Apabila sudah diunduh dan diubah namanya menjadi **ci4**, maka selanjutnya buka browser dengan alamat http://localhost/lab11_ci/ci4/public/ 
Maka ini tampilan awalannya:

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img/welcome.PNG)

## Menjalankan CLI
Nah di sini, saya membuka dengan menggunakan **Git Bash**, seperti gambar di bawah ini.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img/CLI.PNG)

## Mengaktifkan Mode Debugging

Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img/whoops.PNG)

Untuk memudahkan mengetahui jenis errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable **CI_ENVIRINMENT** menjadi **development**. Sebelumnya, ubah nama file **env** menjadi **.env**

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img/env.PNG)

Contoh error yang terjadi. Untuk mencoba error tersebut, ubah kode pada file **app/Controller/Home.php** hilangkan titik koma pada akhir kode.

Jadi, apabila ada error, akan muncul kode yang error tersebut, seperti berikut.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img/parse_error.PNG)

## Membuat Route baru

Tambahkan kode berikut ini pada file `Routes.php`, seperti di bawah ini.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img/route_baru.PNG)

Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan seperti berikut.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img/spark_routes.PNG)

## Membuat Controller
Buat file baru dengan nama `page.php` pada direktori Controller kemudian isi kodenya seperti berikut.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img/page.PNG)

Kemudian *refresh*, maka akan muncul tampilan seperti di bawah ini.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img/ss_about.PNG)

## Auto Routing
Seperti ini tampilan autoroute.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img/auto_routing_tos.PNG)

## Membuat View

Buat file baru dengan nama about.php pada direktori view (**app/view/about.php**) kemudian isi kodenya seperti berikut.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img/view_about.PNG)

Ubah method about pada **class Controller Page** menjadi seperti berikut:

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img/return_view_abot.PNG)

Kemudian refresh, dan ini tampialnnya.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img/ss_view_about.PNG)

## Membuat Layout Web dengan CSS

Buat file css pada direktori public dengan nama **style.css** (copy file dari praktikum lab4_layout. Kita akan gunakan layout yang pernah dibuat pada praktikum 4.

Kemudian buat folder template pada direktori view kemudian buat file `header.php` dan `footer.php`

### header.php
Berikut ini kode `header.php`

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img/header.PNG)

### footer.php
Berikut ini kode `footer.php`

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img/footer.PNG)

### about.php

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img/about.PNG)

Dan ini hasil tampilannya.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img/ss_menu_about.PNG)

Kode program untuk menu lainnya yang ada pada Controller Page, seperti berikut.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img/menu_lain.PNG)

# Praktikum 12 : Framework Lanjutan (CRUD)

 - Pada Praktikum 12 ini, kita akan membuat aplikasi CRUD sederhana dengan menggunakan Framework Codeigniter 4. Seperti yang sudah dijelaskan pada praktikum sebelumnya, CRUD merupakan singkatan dari ***Create***, ***Read***, ***Update***, dan ***Delete***.
 - Sebelum memulai membuat aplikasi CRUD, yang perlu disiapkan adalah database server MySQL, dan pastikan sudah dijalankan melalui XAMPP.

## Membuat Database
Kita akan membuat database dengan nama **lab_ci4**, seperti di bawah ini.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/create_db.PNG)

## Membuat Tabel
Selanjutnya kita membuat tabel pada database yang sudah dibuat, dengan nama tabel **artikel**.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/create_tb.PNG)

## Konfigurasi koneksi  Database
Untuk melakukan konfigurasi kita menggunakan file **.env**. Dan seperti ini konfigurasinya.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/konfig_db.PNG)

## Membuat Model
Model berfungsi untuk memproses data Artikel, kemudian kita akan membuat file baru dengan nama `ArtikelModel.php`, pada direktori **app/Models**, seperti ini kode programnya.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/artikel_model.PNG)

## Membuat Controller
Selanjutnya kita membuat Controller baru dengan nama `Artikel.php` pada direktori **app/Controllers**.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/artikel_controller.PNG)

## Membuat View
Pada direktori **app/Views** buat direktori baru dengan nama **artikel**, kemudian diisi file baru dengan nama `index.php`, dan di bawah ini kode programnya.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/index.PNG)

## Membuat Routing Untuk Artikel index
Buka kembali file `Routes.php` pada direktori **app/Config**, kemudian tambahkan routing untuk artikel index, seperti di bawah ini.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/tambahan_code_routes.PNG)

Selanjutnya buka browser, dan akses url http://localhost:8080/lab11_ci/ci4/public/artikel, maka seperti ini tampilan pada index yang belum ada data.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/ss_index_belumadadata.PNG)

Kemudian kita akan mencoba menambahkan data pada database, seperti ini.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/insert_db.PNG)

Lalu kita refresh browser, dan seperti ini tampilannya.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/ss_sudahadadata.PNG)

## Membuat Tampilan Detail Artikel
Apabila kita meng-klik judul artikel, maka akan diarahkan ke halaman berbeda. Selanjutnya, kita membuat fungsi baru dengan nama `view()` pada **Controller Artikel**.
 ![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/controller_view.PNG)

## Membuat View Detail
Buat file baru pada direktori **app/Views/artikel** dengan nama `detail.php`, seperti ini kode programnya.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/view_detail.PNG)

## Membuat Routing untuk Artikel Detail
Tambahkan routing untuk artikel detail, pada direktori **app/Config/Routes.php**

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/routes_artikel.PNG)

Kemudian refresh browser, dan seperti ini tampilannya.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/ss_view_detail.PNG)

Jadi, apabila kita meng-klik judul misalnya **Artikel Pertama**, maka kita akan diarahkan ke halaman yang berbeda.

## Membuat Menu Admin
Menu admin adalah menu untuk memproses CRUD data artikel.

### Membuat Method Baru
Pada Controller Artikel, tambahkan method `admin_index()`, seperti di bawah ini.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/controller_admin_index.PNG)

### Membuat View dan Routing
Selanjutnya buat view dengan nama `admin_index.php` pada **app/Views/artikel** untuk tampilan admin.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/admin_index.PNG)

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/admin_index2.PNG)

Kemudian tambahkan routing untuk menu admin.

### Membuat View pada direktori app/Views/template
Kita akan membuat view dengan nama `admin_header.php`, seperti berikut.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/admin_header.PNG)

Dan kita juga membuat view dengan nama `admin_footer.php`

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/admin_footer.PNG)

Selanjutnya lihat hasilnya, dengan mengakses http://localhost:8080/lab11_ci/ci4/public/admin/artikel,  dan ini hasil tampilannya.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/ss_admin_index.PNG)

Pada gambar tampilan di atas, merupakan menu ***Read*** pada aplikasi CRUD.

## Menambah Data Artikel (*Create*)
Tambahkan fungsi dengan nama `add()` pada **Controller Artikel**, seperti berikut.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/controller_add.PNG)

Kemudian buat view pada direktori **app/Views/artikel** untuk form tambah dengan nama `form_add.php`

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/form_add.PNG)

Dan seperti hasilnya

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/ss_add.PNG)

## Mengubah Data (*Update*)
Tambahkan fungsi/method baru pada **Controller Artikel** dengan nama `edit()`

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/controller_edit.PNG)

Lalu, buat view dengan nama `form_edit.php` pada direktori **app/Views/artikel**, seperti berikut.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/form_edit.PNG)

Dan seperti ini tampilannya.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/ss_edit.PNG)

## Menghapus Data (*Delete*)
Yang terakhir adalah menu ***Delete***, dengan menambahkan fungsi/method baru pada **Controller Artikel** dengan nama `delete()`, seperti berikut.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/controller_delete.PNG)

Dan seperti tampilannya.

![enter image description here](https://github.com/kameliacindy/Lab11Web/blob/main/img2/ss_hapus.PNG)

Terimakasih, semoga bermanfaat.

Nama	: Kamelia Cindy Astuti

NIM	: 311910104

Kelas	: TI. 19. A. 1
