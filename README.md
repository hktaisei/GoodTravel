# GoodTravel
良い旅を送るための旅管理システム

## 開発環境構築

1. コンテナ起動
```sh
docker-compose up -d
```

2. コンテナ内に入る
```sh
docker exec -it travel-app bash
```

3. マイグレーションを実行する
```sh
php artisan migrate
```

4. フロントエンドをビルドする(コンテナに入った状態)
```sh
npm install
npm run dev
```

## 画面テスト

<http://localhost>