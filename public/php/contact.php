<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) && $_POST['name'] != '' &&
        isset($_POST['phone']) && $_POST['phone'] != '' &&
        isset($_POST['title']) && $_POST['title'] != '' &&
        isset($_POST['body']) && $_POST['body'] != ''
    ) {
        include 'contact.php';
        session_start();
        $name = mysqli_real_escape_string($_POST['name']);
        $phone = mysqli_real_escape_string($_POST['phone']);
        $title = mysqli_real_escape_string($_POST['title']);
        $body = mysqli_real_escape_string($_POST['body']);

        $query = "INSERT INTO contact (name , phone , title , body) VALUES ('$name' , '$phone' , '$title' , '$body')";
        if (mysqli_query($conn , $query)) {
            $_SESSION['status'] = 'success';
            $_SESSION['message'] = 'پیغام با موفقیت ارسال شد';
            header('location:http://localhost:8080/');
//            echo json_encode([
//                'status' => 'success',
//                'message' => 'پیغام با موفقیت ارسال شد'
//            ]);
        }
        else {
            $_SESSION['status'] = 'error';
            $_SESSION['message'] = 'خطلا در برقراری ارتباط با سرور';
            header('location:http://localhost:8080/');
//            echo json_encode([
//                'status' => 'error',
//                'message' => 'خطلا در برقراری ارتباط با سرور'
//            ]);
        }
        mysqli_close($conn);
    }
    else {
        $_SESSION['status'] = 'error';
        $_SESSION['message'] = 'تمام مقادیر را وارد کنید';
        header('location:http://localhost:8080/');
//        echo json_encode([
//           'status' => 'error',
//           'message' => 'تمام مقادیر را وارد کنید'
//        ]);
    }
}
else {
    $_SESSION['status'] = 'error';
    $_SESSION['message'] = 'متد نامعتبر';
    header('location:http://localhost:8080/');
//    echo json_encode([
//        'status' => 'error',
//        'message' => 'invalid method'
//    ]);
}