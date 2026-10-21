# ✈️ TourVela — Website Du Lịch & Đặt Tour

**Tiếng Việt** | [English](#english)

TourVela là website giới thiệu, tìm kiếm và đặt tour du lịch được phát triển trong khuôn khổ đồ án môn học. Dự án sử dụng PHP, MySQL và các công nghệ web cơ bản, hướng đến việc xây dựng một nền tảng đặt tour có giao diện hiện đại, dễ sử dụng và phù hợp với nhu cầu của khách du lịch.

Website tập trung vào quy trình khám phá điểm đến, tìm kiếm tour, xem thông tin hành trình và đăng ký đặt tour. Dự án cũng hướng đến việc xây dựng khu vực quản trị để quản lý dữ liệu tour và thông tin đặt chỗ.

## ✨ Tính năng chính

### 👤 Phía khách hàng

- **Khám phá tour du lịch:** Hiển thị danh sách tour và các điểm đến nổi bật.
- **Tìm kiếm tour:** Hỗ trợ tìm tour theo tên hoặc điểm đến.
- **Thông tin tour:** Hiển thị tên tour, thời gian, giá và hình ảnh minh họa.
- **Đặt tour:** Cung cấp giao diện nhập thông tin đặt tour.
- **Giao diện responsive:** Tối ưu bố cục để sử dụng trên máy tính, máy tính bảng và điện thoại.

### 🛠️ Phía quản trị

- Quản lý danh sách tour du lịch.
- Thêm tour mới.
- Cập nhật thông tin tour.
- Xóa tour khi cần thiết.
- Theo dõi và quản lý thông tin đặt tour.

> Lưu ý: Các chức năng trên là phạm vi dự kiến của dự án. Những chức năng chưa được triển khai hoặc kiểm thử trong mã nguồn thực tế cần được hoàn thiện trước khi giới thiệu là đã hoạt động.

## 🖥️ Giao diện website

### Trang danh sách tour

Website sử dụng bố cục dạng thẻ để trình bày các tour du lịch, kết hợp hình ảnh điểm đến, thời gian hành trình và giá tour.

Các điểm đến minh họa bao gồm:

- Vịnh Hạ Long
- Phú Quốc
- Đà Nẵng – Hội An
- Sa Pa – Fansipan
- Ninh Bình
- Đà Lạt

*Bạn có thể thêm ảnh chụp màn hình thực tế của website vào thư mục `screenshots/` và hiển thị tại đây.*

```markdown
![TourVela - Danh sách tour](screenshots/tour-list.png)
```

## 🧰 Công nghệ sử dụng

| Công nghệ | Vai trò |
|---|---|
| PHP | Xử lý logic phía máy chủ |
| MySQL | Lưu trữ và quản lý dữ liệu |
| HTML5 | Xây dựng cấu trúc trang web |
| CSS3 | Thiết kế giao diện và bố cục |
| JavaScript | Tăng tính tương tác cho website |
| XAMPP | Môi trường chạy Apache, PHP và cơ sở dữ liệu |
| Visual Studio Code | Soạn thảo và quản lý mã nguồn |
| Git & GitHub | Quản lý phiên bản và lưu trữ dự án |

## ⚙️ Yêu cầu môi trường

- Windows 10 hoặc Windows 11.
- XAMPP có tích hợp PHP và MariaDB/MySQL tương thích.
- Trình duyệt web hiện đại, chẳng hạn Google Chrome.
- Visual Studio Code (khuyến nghị).
- Git (nếu muốn tải và quản lý dự án bằng Git).
- Cơ sở dữ liệu MySQL và tệp SQL khởi tạo nếu dự án sử dụng cơ sở dữ liệu.

## 🚀 Hướng dẫn cài đặt

### 1. Clone repository

Mở Terminal hoặc Command Prompt và chạy:

```bash
git clone <https://github.com/phamvietanh110106-netizen/tourvela.git>
cd <https://github.com/phamvietanh110106-netizen/tourvela.git>
```



### 2. Cài đặt và khởi động XAMPP

1. Cài đặt XAMPP trên máy tính.
2. Mở XAMPP Control Panel.
3. Khởi động **Apache**.
4. Khởi động **MySQL** nếu dự án cần cơ sở dữ liệu.
5. Đặt thư mục dự án trong:

```text
C:\xampp\htdocs\TourVela
```

### 3. Tạo cơ sở dữ liệu

Mở phpMyAdmin:

```text
http://localhost/phpmyadmin
```

Tạo cơ sở dữ liệu mới, ví dụ:

```sql
CREATE DATABASE tourvela
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;
```

Nếu repository có tệp SQL khởi tạo, hãy chọn cơ sở dữ liệu `tourvela`, sau đó sử dụng chức năng **Import** để nhập các bảng và dữ liệu mẫu.

> Nếu dự án chưa có tệp SQL, cần tạo cấu trúc bảng và dữ liệu ban đầu trước khi sử dụng các chức năng phụ thuộc vào cơ sở dữ liệu.

### 4. Cấu hình kết nối cơ sở dữ liệu

Cập nhật thông tin kết nối trong tệp cấu hình PHP của dự án theo môi trường đang sử dụng.

Ví dụ với PDO:

```php
<?php
$host = '127.0.0.1';
$dbname = 'tourvela';
$username = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$pdo = new PDO($dsn, $username, $password, $options);
```

**Lưu ý:** Ví dụ trên dành cho môi trường XAMPP mặc định. Hãy điều chỉnh tên cơ sở dữ liệu, tài khoản và mật khẩu theo cấu hình thực tế. Không đưa mật khẩu hoặc thông tin bí mật vào repository công khai.

### 5. Khởi chạy website

Sau khi Apache đã chạy và cấu hình cơ sở dữ liệu hoàn tất, mở trình duyệt:

```text
http://localhost/TourVela/
```

Nếu trang chủ có tên tệp khác hoặc dự án được đặt trong thư mục khác, hãy thay URL tương ứng.

## 🗄️ Thiết kế cơ sở dữ liệu

Tùy theo phiên bản triển khai, cơ sở dữ liệu có thể bao gồm các nhóm bảng sau:

| Bảng dự kiến | Chức năng |
|---|---|
| `tours` | Lưu thông tin tour du lịch |
| `destinations` | Lưu thông tin điểm đến |
| `customers` | Lưu thông tin khách hàng |
| `bookings` | Lưu thông tin đặt tour |
| `users` | Quản lý tài khoản người dùng và quản trị |

Tên bảng thực tế cần được đồng bộ với mã nguồn và tệp SQL của dự án.

## 📁 Cấu trúc dự án tham khảo

```text
TourVela/
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
├── config/
│   └── database.php
├── includes/
│   ├── header.php
│   └── footer.php
├── index.php
├── tours.php
├── tour-detail.php
├── booking.php
├── admin/
│   ├── index.php
│   └── tours.php
├── database/
│   └── tourvela.sql
└── README.md
```

Cấu trúc trên mang tính tham khảo. Hãy điều chỉnh theo các thư mục và tệp thực tế trong repository.

## 🧪 Kiểm thử

Các nội dung nên được kiểm tra trước khi hoàn thiện đồ án:

- Website mở được trên môi trường XAMPP.
- Các trang hiển thị đúng và không bị lỗi bố cục.
- Hình ảnh tour tải đúng đường dẫn.
- Chức năng tìm kiếm trả về kết quả phù hợp.
- Kết nối cơ sở dữ liệu hoạt động.
- Các chức năng thêm, xem, sửa và xóa dữ liệu hoạt động đúng nếu đã triển khai.
- Biểu mẫu đặt tour kiểm tra dữ liệu đầu vào và xử lý trường hợp nhập thiếu thông tin.
- Giao diện hoạt động trên cả máy tính và màn hình điện thoại.

## 🔒 Bảo mật và lưu ý

- Sử dụng prepared statements khi truy vấn cơ sở dữ liệu.
- Kiểm tra và làm sạch dữ liệu đầu vào phù hợp với từng ngữ cảnh.
- Không lưu mật khẩu tài khoản dưới dạng văn bản thuần.
- Không công khai thông tin đăng nhập, mật khẩu cơ sở dữ liệu hoặc khóa bí mật.
- Đây là dự án phục vụ mục đích học tập; cần bổ sung các biện pháp bảo mật và kiểm thử trước khi triển khai thực tế.

## 🎓 Mục tiêu đồ án

Dự án giúp vận dụng kiến thức về lập trình web, xử lý dữ liệu bằng PHP, thiết kế cơ sở dữ liệu quan hệ, xây dựng giao diện người dùng và quản lý mã nguồn bằng GitHub.

## 👨‍💻 Tác giả

- **Tên dự án:** TourVela
- **Loại dự án:** Đồ án môn học
- **Lĩnh vực:** Website du lịch và đặt tour
- **Repository:** `<https://github.com/phamvietanh110106-netizen/tourvela.git>`

---

<a id="english"></a>

# TourVela — Travel & Tour Booking Website

TourVela is a travel website developed as an academic project using PHP, MySQL, and standard web technologies. The project aims to provide a modern interface for discovering destinations, searching for tours, viewing itinerary information, and submitting tour booking requests.

## Key Features

### Customer Features

- Browse travel tours and popular destinations.
- Search for tours by name or destination.
- View tour information, including images, duration, and price.
- Access the tour booking interface.
- Use a responsive layout on desktop and mobile devices.

### Administration Features

- Manage travel tour records.
- Add, update, and delete tours.
- Review and manage booking information.

*Only features implemented and verified in the actual source code should be presented as completed functionality.*

## Technology Stack

- **PHP** — Server-side development.
- **MySQL** — Relational database management.
- **HTML5 and CSS3** — Website structure and styling.
- **JavaScript** — Client-side interactions.
- **XAMPP** — Local development environment.
- **Git and GitHub** — Version control and source code hosting.

## Requirements

- Windows 10 or Windows 11.
- XAMPP with PHP and a compatible MySQL/MariaDB database server.
- A modern web browser.
- Visual Studio Code (recommended).
- Git (optional).

## Installation

1. Clone the repository and place the project in `C:\xampp\htdocs\TourVela`.
2. Start Apache and the database service from XAMPP Control Panel.
3. Open `http://localhost/phpmyadmin` and create the `tourvela` database.
4. Import the project's SQL file if one is provided.
5. Configure the database connection in the project's PHP configuration file.
6. Open `http://localhost/TourVela/` in your browser.

Adjust the database configuration and URL to match the actual project setup.

## Project Goals

This project demonstrates practical knowledge of PHP web development, relational database design, user interface implementation, basic data management, and GitHub-based version control.

## Author

Liên hệ
Email: phamvietanhxfile@gmail.com
https://github.com/phamvietanh110106-netizen/tourvela.git
