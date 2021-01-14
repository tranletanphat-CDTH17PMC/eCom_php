<div class="sgu">
    <a class="logo" href="."><img src="img/logo.png" alt=""></a>
    <h1 class="title">Create your account</h1>
</div>
<form class="form-signup" action="" method="post">
    <dl>
        <dt>
            <label for="user[login]">Username </label>
        </dt>
        <dd>
            <input type="text" name="user[login]" id="user[login]">
        </dd>
        <dt>
            <label for="user[email]">Email address</label>
        </dt>
        <dd>
            <input type="email" name="user[email]" id="user[email]">
        </dd>
        <dt>
            <label for="user[password]">Password</label>
        </dt>
        <dd>
            <input type="password" name="user[password]" id="user[password]">
        </dd>
    </dl>
    <button type="submit"> Sign up</button>
</form>
<form class="to-login" action="" method="post">
    <input type="hidden" name="view" value="login">
    <p>Already an account?</p>
    <button class="btn-login">Login to Ogani</button>.
</form>