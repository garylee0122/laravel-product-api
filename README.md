# Laravel Product API

## 📌 專案介紹

這是一個使用 Laravel 開發的 RESTful API，提供商品管理功能（CRUD），並包含搜尋、分頁與資料驗證。

---

## 🚀 技術使用

* Laravel 12
* MySQL / SQLite
* Eloquent ORM
* RESTful API 設計

---

## ✨ 功能

* 商品 CRUD（Create / Read / Update / Delete）
* 關鍵字搜尋（name）
* 分頁功能（pagination）
* 表單驗證（FormRequest）
* API 回傳格式統一
* Resource 控制輸出格式
* Service Layer 分層架構

---

## 📂 API 說明

### 取得商品列表

GET /api/products?keyword=iphone&page=1

---

### 取得單筆商品

GET /api/products/{id}

---

### 新增商品

POST /api/products

Body:
{
"name": "iPhone",
"price": 30000,
"stock": 10
}

---

### 更新商品

PUT /api/products/{id}

---

### 刪除商品

DELETE /api/products/{id}

---

## 📌 回傳格式

{
"status": "success",
"data": {}
}

---

## 🧠 專案設計

本專案採用以下架構：

* Controller：處理 HTTP Request / Response
* Service：處理商業邏輯
* Model：資料庫操作
* Resource：控制 API 輸出格式

---

## 📎 學習重點

* RESTful API 設計
* Laravel 分層架構
* 資料驗證與安全性
* API 統一回應格式

---

## 👨‍💻 作者

Gary Lee
