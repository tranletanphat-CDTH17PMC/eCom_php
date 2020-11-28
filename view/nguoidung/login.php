
<div>
    <h1>Log in to Ogani</h1>
</div>
<form class="form-login" action="." method="post" >
    <dl> 
        <!-- Thẻ dl (description list) dùng làm nơi đặt 1 danh sách mô tả bao gồm các cặp thuật ngữ và mô tả cụ thể cho thuật ngữ -->
        <dt>
            <!-- Thẻ dt (description term) dùng làm nơi đặt thuật ngữ chỉ có thể là con dl. Trong 1 dl có thể dùng nhiều dt -->
            <label for="user-login">Username or email</label>
        </dt>
        <dd>
            <!-- Thẻ dd dùng để mô tả cho thuật ngữ chỉ có thể là con dt. Trong 1 dl có thể dùng nhiều dd -->
            <input type="text" name="user-login" id="user-login">
        </dd>
        <dt>
            <label for="password-login">Password 
                <a class="forgot" href=".">Forgot password?</a>
            </label>
        </dt>
        <dd>
            <input type="password" name="password-login" id="password-login">
        </dd>
    </dl>
    <button type="submit"> Login</button>
</form>
<form class="to-sign-up" action="" method="post">
    <input type="hidden" name="view" value="sign-up">
    <p>New to Ogani?</p>
    <button class="btn-sign-up">Create an account</button>.
</form>