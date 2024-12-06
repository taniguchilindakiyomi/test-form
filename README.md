# アプリケーション名
test-from
## 環境構築
Dockerビルド  
1.git clone リンク  
2.docker-compose up -d --build

laravel環境構築  
1.docker-conpose exec php bash  
2.composer install  
3.cp .env example .envで.envファイル作成 ->環境変数を変更(DB_HOST=など)  
4.php artisan key:generate  
5.php artisan migrateでphpmyadminにテーブルを用意  
6.php artisan db:seedでダミーデータ作成

## 使用技術(実行環境)
php->8.2 (プログラミング言語)  
laravel->10 (フレームワーク)  
mysql->8.0.26  
niginx->1.21.1  
phpmyadmin->5.2.1

## ER図
< - - - 作成したER図の画像 - - - >  
![作成したER図の画像](/.png)

## URL
開発環境：http://localhost/  
phpmyadmin : http://localhost:8080/
