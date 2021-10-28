<?php
    include("header.php"); 
?>
<form action="" class="container mb-5" method="post"> <!-- function checkLogin -->
    <div class="row">
        <div class="col-6 mx-auto my-5 text-center">
            <h1 class="fw-bold">重設密碼</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-6 mx-auto my-3">
            <div class="input-group mb-3">
                <span for="userNickname" class="input-group-text">使用者名稱</span>
                <input type="userNickname" class="form-control bg-light" id="userNickname">
            </div>
            <div class="input-group mb-3">
                <span for="userEmail" class="input-group-text">註冊信箱</span>
                <input type="email" class="form-control bg-light" id="userEmail">
            </div>
            <div class="container d-flex flex-row-reverse">
                <input class="btn btn-primary link-light" type="submit" value="確認發送">
            </div>
        </div>
    </div>
</form>
<?php
    include("footer.php"); 
?>