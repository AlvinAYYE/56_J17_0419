# 56_J17_0419

這個資料夾是一套以比賽環境為主的 Vue 教學教材。

主題集中在三個部分：

- Vue 基礎應用
- 基礎非異步 `fetch`
- Vue 動畫

整套教材用最接近比賽現場的方式製作：

- 不用 vite
- 不用 `.vue` 單檔元件
- 直接在 HTML 中引入 `vue.3.5.13.js`
- 正式範例以組合式 API 為主

## 主要檔案

- `課程.md`：完整講義
- `EZ.html`：第一個 Vue 暖身頁
- `00-api-compare.html`：選項式 API 與組合式 API 對比
- `01-start.html` 到 `04-show-list.html`：Vue 基礎語法與互動
- `05-move.html`、`06-list-move.html`：Vue 動畫
- `07-fetch-json.html`、`08-fetch-php.html`：基礎 fetch
- `09-mix.html`：綜合範例
- `10-playground.html`：整合式遊樂場頁面
- `data/data.json`：本機 JSON 資料
- `api/get_data.php`：本機 PHP 回傳 JSON
- `第55屆_J17正式賽公告試題.pdf`：題目參考資料

## 建議閱讀順序

1. 先看 `課程.md`
2. 打開 `EZ.html`
3. 依序操作 `00-api-compare.html` 到 `10-playground.html`

## 開啟方式

Vue 基礎頁面可以直接開啟 HTML 查看。

但 `fetch` 相關頁面建議用本機網址開啟：

```text
http://localhost/J17_第一次上課/07-fetch-json.html
http://localhost/J17_第一次上課/08-fetch-php.html
http://localhost/J17_第一次上課/09-mix.html
http://localhost/J17_第一次上課/10-playground.html
```

這樣可以避免直接用本機檔案開啟時遇到瀏覽器安全限制。

## 教學重點

- 用 `ref()` 管理常見反應式資料
- 用 `v-model`、`@click`、`v-if`、`v-show`、`v-for` 建立基本互動
- 用 `transition` 和 `transition-group` 做動畫
- 用 `fetch(...).then(...).then(...).catch(...)` 讀取本機資料
- 在同一個畫面中整合多種 Vue 技術

## 備註

- 本專案包含 Vue 函式庫檔 `vue.3.5.13.js`
- `.idea/` 已透過 `.gitignore` 排除
