<form id="signupForm" onsubmit="submitForm('signup')">
    <input type="hidden" name="currentForm" value="signup">
    <div class="row">
        <div class="col-md-6 col-12">
             <div class="form-group">
                <label >First Name</label>
                <input class="form-control" type="text" name="fname" required>
            </div> 
            <div class="form-group">
                <label >Email</label>
                <input class="form-control" type="email" name="email" required>
            </div>   
            <div class="form-group">
                <label >Password</label>
                <input class="form-control" type="password" id="password" name="password" required>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="form-group">
                <label >Last Name</label>
                <input class="form-control" type="text" name="lname" required>
            </div>
             <div class="form-group">
                <label >Phone Number</label>
                <input class="form-control" type="number" name="phone" required>
            </div>
             <div class="form-group">
                <label >Confirm Password</label>
                <input class="form-control" type="password" id="confirmPassword" name="confirmPassword" required>
            </div>
        </div>
    </div>
    <div class="row justify-content-between px-3">
        <span>Already a member? <a href="" onclick="change_content('login')">Login</a></span>
        <button type="submit" class="btn btn-primary">Sign Up</button>
    </div>
</form>