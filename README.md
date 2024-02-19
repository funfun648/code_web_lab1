Đây là một bài lab về các lỗ hổng như IDOR và SSTI , HTTP header

IDOR(Insecure direct object references) 

IDOR là một loại lỗ hổng kiểm soát truy cập phát sinh khi một ứng dụng của người dùng được cung cấp đầu vào để truy cập trực tiếp các đối tượng. 
Các lỗ hổng IDOR thường liên quan đến leo thang đặc quyền theo chiều ngang, nhưng chúng cũng có thể phát sinh liên quan đến leo thang đặc quyền theo chiều dọc.

Các tham số trong URL hoặc các tham số của yêu cầu HTTP để xác định các đối tượng mà người dùng muốn truy cập. Khi người dùng thay đổi các thông số này để truy cập các đối tượng mà họ không có quyền, và ứng dụng không kiểm tra đúng quyền truy cập, lỗ hổng IDOR xuất hiện.
Đôi khi IDOR say ra khi việc phân quyền sai cho các tài khoản trên một trang web.

Nguyên nhân :

Thiếu kiểm tra phân quyền: Ứng dụng không kiểm tra quyền truy cập của người dùng đối với đối tượng mà họ yêu cầu. Do đó, người dùng có thể truy cập vào các đối tượng mà họ không được phép xem hoặc sửa đổi thông tin.

Dùng các tham số không được kiểm tra: Ứng dụng sử dụng các tham số trực tiếp từ yêu cầu của người dùng (ví dụ: ID hoặc tên đối tượng) mà không kiểm tra tính hợp lệ của chúng. Kẻ tấn công có thể thay đổi các tham số này để tham chiếu đến các đối tượng khác trong hệ thống.

Dựa vào giá trị của tham số trong yêu cầu: Ứng dụng dựa vào giá trị của tham số trong yêu cầu để xác định đối tượng cần truy cập mà không thực hiện kiểm tra thêm. Điều này cho phép kẻ tấn công thay đổi tham số để tham chiếu đến các đối tượng khác nhau.


Ta có thể sử dụng burp suite để thực hiện kiểm thử idor

![image](https://github.com/funfun648/code_web_lab1/assets/128309991/385348b9-6fb6-4f2a-afd1-02720420e232)

SSTI

Template engines (công cụ giúp chúng ta tách mã HTML thành các phần nhỏ hơn mà chúng ta có thể sử dụng lại trên nhiều tập tin HTML) được sử dụng rộng rãi bởi các ứng dụng web nhằm trình bày dữ liệu thông qua các trang web và emails. Việc nhúng các đầu vào từ phía người dùng theo cách không an toàn vào trong templates dẫn đến Server-Side Template Injection - một lỗ hổng nghiêm trọng thường xuyên dễ dàng bị nhầm lẫn với Cross-Site Scripting (XSS), hoặc hoàn toàn bị ngó lơ.Trong bài lab ta sẽ phải sử dụng một số kỹ thuật cơ bản để xác định trang web đang sử dụng template nào.
Sau đó mới tận dụng khai thác

![1b20d79b-7ca2-4056-943b-97f706baf51d](https://github.com/funfun648/code_web_lab1/assets/128309991/fb74c12b-aa68-4198-ba02-0e505b323042)
