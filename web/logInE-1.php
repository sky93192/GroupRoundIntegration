<?php
    include("header.php"); 
?>
<form action="" class="container mb-5" method="post"> <!-- function checkLogin -->
    <div class="row">
        <div class="col-6 mx-auto my-5 text-center">
            <h1 class="fw-bold">歡迎登入</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-6 mx-auto my-3">
            <div class="input-group mb-3">
                <span for="userEmail" class="input-group-text">註冊信箱</span>
                <input type="email" class="form-control bg-light" id="userEmail">
            </div>
            <div class="input-group mb-3">
                <span for="userPassword" class="input-group-text">密碼</span>
                <input type="password" class="form-control bg-light" id="userPassword">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="rememberAccount">記住帳號</label>
            </div>
            <div class="mb-5">
                <a href="./resetPasswordE-3.php" id="resetPassword" class="form-text">忘記密碼</a>
            </div>
            <div class="container d-flex justify-content-around">
                <a href="./signUpE-2.php" class="btn btn-outline-primary" type="submit" value="註冊">註冊</a> <!-- jump to signUp.php -->
                <input class="btn btn-primary link-light" type="submit" value="登入">
            </div>
        </div>
    </div>
</form>
<?php
    include("footer.php"); 
?>