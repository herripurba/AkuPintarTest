# Aku Pintar Test API

## Yang Harus Anda Punya
### 1. Composer
Jika anda belum memiliki composer dalam laptop/PC anda, anda dapat mendownload serta menginstallnya dari tautan berikut
> https://getcomposer.org/Composer-Setup.exe 
atau
> https://getcomposer.org/download/
    
### 2. XAMPP(PHP dan MySQL)
Jika anda belum memiliki XAMPP dalam laptop/PC anda, anda dapat mendownload serta menginstallnya dari tautan berikut
> https://www.apachefriends.org/download.html


## Instalasi
1. Buka terminal dan clone repo ini :
    > git clone https://github.com/herripurba/AkuPintarTest.git

2. Masuk ke dalam folder project :
    > cd AkuPintarTest

3. Install composer package pada project :
    > composer install

4. Buka XAMPP dan pada modul Apache dan MySQL klik tombol start.

5. Setelah Apache dan MySQL aktif, kemudian klik tombol Admin pada modul MySQL.

6. Setelah phpMyAdmin terbuka, buat database dengan nama yang diinginkan.

7. Duplicate file .env.example dan ubah nama salah satu file menjadi .env

8. Pada file .env ubah pengaturan DB sesuai dengan nama DB yang sudah dibuat, beserta dengan username dan password DB anda seperti gambar berikut.

![alt text](https://github.com/herripurba/AkuPintarTest/blob/main/DB_Setup.jpg?raw=true)

9. Pada terminal yang sudah mengarah ke folder project, jalankan syntax berikut:
    > php artisan key:generate

10. Jalankan Migrate Beserta Seeder yang sudah dibuat.
    > php artisan migrate --seed

11. Jalankan Project
    > php artisan serve
 

## Test API yang sudah dibuat
Untuk mengetes API yang sudah di buat ada baiknya menggunakan aplikasi Postman atau dapat membukanya URL API secara langsung. Jika anda ingin menggunakan postman, anda dapat menginstallnya pada url berikut:
> https://www.postman.com/downloads/

### 1. Pencarian Kampus
Untuk mendapatkan data semua data kampus dapat dilakukan dengan menggunakan URL API berikut
> http://localhost:8000/api/pencarian-kampus/ atau http://127.0.0.1:8000/api/pencarian-kampus/

Untuk mendapatkan data data kampus sesuai kata kunci pencarian dapat dilakukan dengan menggunakan URL API berikut:
> http://localhost:8000/api/pencarian-kampus/{search} atau http://127.0.0.1:8000/api/pencarian-kampus/{search}

Contoh : http://localhost:8000/api/pencarian-kampus/Institut


### 2. Mengikuti Kampus
Untuk mendapatkan data semua data kampus yang diikuti oleh user tersebut dapat dilakukan dengan menggunakan URL API berikut dengan menginputkan id dari user tersebut.
> http://localhost:8000/api/mengikuti-kampus/{id} atau http://127.0.0.1:8000/api/mengikuti-kampus/{id}

Contoh : http://localhost:8000/api/mengikuti-kampus/1

### 3. List Jurusan pada Kampus
Untuk mendapatkan data list jurusan pada sebuah kampus dapat dilakukan dengan menggunakan URL API berikut dengan menginputkan id dari kampus tersebut.
> http://localhost:8000/api/jurusan-kampus/{id} atau http://127.0.0.1:8000/api/jurusan-kampus/{id}

Contoh : http://localhost:8000/api/jurusan-kampus/1
