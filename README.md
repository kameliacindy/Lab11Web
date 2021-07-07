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

Terimakasih, semoga bermanfaat.
