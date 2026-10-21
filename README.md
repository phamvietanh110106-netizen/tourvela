# TourVela — Website du lịch và đặt tour (PHP + MySQL)

## Cài đặt trên XAMPP
1. Giải nén thư mục `tourvela` vào `C:\xampp\htdocs\tourvela`.
2. Mở XAMPP Control Panel, Start `Apache` và `MySQL`.
3. Mở `http://localhost/phpmyadmin`, chọn Import và nhập file `database.sql`.
4. Mở `config.php`, sửa `DB_PASS` nếu MySQL trên máy có mật khẩu.
5. Truy cập `http://localhost/tourvela/`.
6. Quản trị: `http://localhost/tourvela/admin/login.php`, tài khoản demo `admin`, mật khẩu `admin123`.

## Chức năng
- Trang chủ, danh sách tour, tìm kiếm/lọc, chi tiết tour.
- Gửi yêu cầu đặt tour và lưu đơn vào cơ sở dữ liệu.
- Trang liên hệ ghi lời nhắn vào CSDL.
- Quản trị: thêm/sửa/ngừng mở bán tour, xem các đơn đặt.
- Responsive, dùng PHP PDO prepared statements và escape dữ liệu hiển thị.

## Đẩy lên GitHub
```bash
git init
git add .
git commit -m "Initial TourVela travel booking website"
git branch -M main
git remote add origin https://github.com/TEN-TAI-KHOAN/TEN-REPOSITORY.git
git push -u origin main
```

