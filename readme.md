<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## About Laravel

<h3>clone並還原專案</h3>

- 先切換到要放專案的資料夾，然後從終端機執行：<br>
git clone https://github.com/Cai-will/laravel-shop laravel-shop 
- Copy下來後，進入laravel-shop 目錄，然後讓composer重建相關套件，此時會重建vendor目裡的內容<br>
cd laravel-shop<br>
composer install
- 最後要還原.env設定檔，必須先把一個範例檔複製成.env，然後利用產生器來產生APP KEY，重點還有資料庫的名稱及帳號密碼設定一定要正確。<br>
cp .env.example .env <br>
php artisan key:generate
- 接下來打開.env文件，你會發現APP_KEY一行已經自動填入了我們剛剛生成的key。<br>
接下來我們將數據庫信息填入相應的位置：

[...]                
DB_CONNECTION=mysql                    
DB_HOST=localhost                
DB_PORT=33060                    
DB_DATABASE=blog_local                    
DB_USERNAME=root                    
DB_PASSWORD=root                  
[...]<br>
我們看到，DB_DATABASE一行，我們填入該環境下數據庫名稱，DB_USERNAME及DB_PASSWORD一行，我們分別填入管理該數據庫的用戶名和密碼。<br>
還需要新增資料庫<h3>blog_local</h3>     

- 好了，現在我們保存文件。如果你有數據庫遷移文件（migration），那麼現在可以運行重建資料庫<br>
執行下面指令，讓他跑migrate然後同時跑seed

php artisan migrate:fresh --seed<br>
php artisan serve<br>
#####您現在可以在localhost：8000訪問您的項目:)


Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

