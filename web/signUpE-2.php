<?php
    include("header.php"); 
?>
<form action="" class="container mb-5" method="post"> <!-- function signUp -->
<div class="row">
        <div class="col-6 mx-auto my-5 text-center">
            <h1 class="fw-bold">使用者註冊</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-6 mx-auto my-3">
            <div class="input-group mb-3">
                <span for="userEmail" class="input-group-text">註冊信箱</span>
                <input type="email" class="form-control bg-light" id="userEmail" aria-describedby="emailHelp">
            </div>
            <div class="input-group mb-3">
                <span for="userPassword" class="input-group-text">密碼</span>
                <input type="password" class="form-control bg-light" id="userPassword">
            </div>
            <div class="input-group mb-3">
                <span for="userPassword" class="input-group-text">再次確認密碼</span>
                <input type="password" class="form-control bg-light" id="userPasswordCheck">
            </div>
            <div class="input-group mb-3">
                <span for="userNickname" class="input-group-text">使用者名稱</span>
                <input type="text" class="form-control bg-light" id="userNickname">
            </div>
            <div class="input-group mb-3">
                <span for="userName" class="input-group-text">真實姓名</span>
                <input type="text" class="form-control bg-light" id="userName">
            </div>
            <div class="input-group mb-3">
                <span for="userCity" class="input-group-text">居住地區</span>
                <select class="form-select" aria-label="userCity">
                    <option selected>選擇地區...</option>
                    <option value="基隆市">基隆市</option>
                    <option value="台北市">台北市</option>
                    <option value="新北市">新北市</option>
                    <option value="桃園市">桃園市</option>
                    <option value="新竹縣">新竹縣</option>
                    <option value="新竹市">新竹市</option>
                    <option value="苗栗縣">苗栗縣</option>
                    <option value="台中市">台中市</option>
                    <option value="彰化縣">彰化縣</option>
                    <option value="南投縣">南投縣</option>
                    <option value="雲林縣">雲林縣</option>
                    <option value="嘉義縣">嘉義縣</option>
                    <option value="嘉義市">嘉義市</option>
                    <option value="台南市">台南市</option>
                    <option value="高雄市">高雄市</option>
                    <option value="屏東縣">屏東縣</option>
                    <option value="宜蘭縣">宜蘭縣</option>
                    <option value="花蓮縣">花蓮縣</option>
                    <option value="台東縣">台東縣</option>
                    <option value="澎湖縣">澎湖縣</option>
                    <option value="金門縣">金門縣</option>
                    <option value="連江縣">連江縣</option>
                    <option value="其他">其他</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <span for="userPhone" class="input-group-text">連絡電話</span>
                <input type="" class="form-control bg-light" id="userPhone">
            </div>
            <div class="input-group mb-3">
                <span for="userGender" class="input-group-text">性別</span>
                <select class="form-select" aria-label="userGender">
                    <option selected>選擇性別...</option>
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">多元性別</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <span for="userBirthday" class="input-group-text">生日</span>
                <input type="date" class="form-control bg-light" id="userBirthday"> <!-- JQuery -->
            </div>
            <div class="mb-3">
                <label for="userAvatar" class="form-label">頭像上傳</label>
                <input class="form-control" type="file" id="userAvatar">
            </div>
            <div class="mb-3">
                <label for="notice" class="form-label">注意事項</label>
                <section type="text" class="form-control bg-light overflow-auto" id="notice">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit a hendrerit donec lacus ut quis bibendum nulla et. Lacus ultrices imperdiet enim in ac amet magna vestibulum. Ut tempor vel porttitor lacinia cursus. Hendrerit convallis nibh tempor porttitor platea magna maecenas eget. Pulvinar ut id elit, maecenas convallis morbi. Nisl velit eget non sit ac purus. Leo pulvinar at et, feugiat ornare. Est porttitor duis vel venenatis diam, malesuada cursus morbi. Diam amet a, justo vel at. Nunc lorem tristique nisl arcu. Cras turpis tortor.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit a hendrerit donec lacus ut quis bibendum nulla et. Lacus ultrices imperdiet enim in ac amet magna vestibulum. Ut tempor vel porttitor lacinia cursus. Hendrerit convallis nibh tempor porttitor platea magna maecenas eget. Pulvinar ut id elit, maecenas convallis morbi. Nisl velit eget non sit ac purus. Leo pulvinar at et, feugiat ornare. Est porttitor duis vel venenatis diam, malesuada cursus morbi. Diam amet a, justo vel at. Nunc lorem tristique nisl arcu. Cras turpis tortor.
                    </p>
                </section>
            </div>
            <div class="form-check d-flex flex-row-reverse mb-5">
                <label class="form-check-label" for="exampleCheck1">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    我已閱讀以上注意事項
                </label>
            </div>
            <div class="container d-flex flex-row-reverse">
                <button href="./logInE-1.php" class="btn btn-primary link-light" type="submit">確認註冊</button>
            </div>
        </div>
    </div>
</form>
<?php
    include("footer.php"); 
?>