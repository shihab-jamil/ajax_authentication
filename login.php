<form id="loginForm" onsubmit="submitForm('login')">
    <input type="hidden" name="currentForm" value="login">
    <div class="form-group">
        <label for="exampleInputEmail1">Email or Phone</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="row justify-content-between px-3">
        <span>New member? <a href="" onclick="change_content('signup')">Register</a></span>
        <button type="submit" class="btn btn-primary">Login</button>
    </div>
    
</form>