# Scouter GitHub Laravel Test

## 開発環境
|     | バージョン |
| --- | -------- |
| PHP | 7.2.34   |

## 開発環境のセットアップ手順
```
1.クローンしてきたリポジトリ内で以下のコマンドを実行。
$ cp env-example .env

2.「.env」ファイルにDBの接続設定を正しく書くこと。

3.以下のコマンドで DBを作成すること。
$ create database 'データベース名' charset utf8;

4.以下のコマンドで DBが作成されていることを確認する。
$ show databases;

5.以下のコマンドでキーの生成を行う。
$ php artisan key:generate

6.該当のリポジトリで以下のコマンドを叩き、アプリケーションのセットアップをしてください。
$ composer install
$ php artisan migrate
$ composer dump-autoload
$ php artisan db:seed
```