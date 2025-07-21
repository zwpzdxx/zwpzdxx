/* 
  基础样式重置与通用配置
  可直接用于网页项目，上传至GitHub后通过link引入使用
*/

/* 清除默认内外边距 */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* 基础字体设置 */
body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
  font-size: 16px;
  line-height: 1.6;
  color: #333;
  background-color: #f9f9f9;
}

/* 链接样式 */
a {
  color: #2c3e50;
  text-decoration: none;
  transition: color 0.3s ease;
}

a:hover {
  color: #3498db;
}

/* 容器样式 */
.container {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

/* 按钮样式 */
.btn {
  display: inline-block;
  padding: 8px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 14px;
  font-weight: 500;
  transition: all 0.3s ease;
}

.btn-primary {
  background-color: #3498db;
  color: white;
}

.btn-primary:hover {
  background-color: #2980b9;
  transform: translateY(-2px);
}

/* 卡片样式 */
.card {
  background-color: white;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin-bottom: 20px;
}

/* 响应式调整 */
@media (max-width: 768px) {
  .container {
    padding: 0 10px;
  }

  .btn {
    padding: 6px 12px;
    font-size: 13px;
  }

  .card {
    padding: 15px;
  }
}
