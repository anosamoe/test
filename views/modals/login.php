<div class="modal fade" id="login-modal" role="dialog">
    <div class="modal-dialog">
		<div class="modal-content">
		    <p class="modal_title">
                <img class="modal_logo" src="../assets/images/wb_logo-mob.png" alt="">
		        <span>Log In</span>
            </p>
			<div class="login-cont">
				<span class="close" data-dismiss="modal">&#10006;</span>
				<form id='login-form'>
                    <div class="login_section_cont clear">
                        <div class='input-cont'>
                            <label for="login-email-popup">Email</label>
                            <div class='input-cont-group form-group'>
                                <input type="text" id="login-email-popup" name="login_email_popup" placeholder="Your Email">
                            </div>
                        </div>
                        <div class='input-cont'>
                            <label for="login-pass-popup">Password</label>
                            <div class='input-cont-group form-group'>
                                <input type="password" id="login-pass-popup" name="login_pass_popup" placeholder="Password">
                            </div>
                        </div>
                        <div class="save_info">
                            <p class="checkbox">
                                <input type="checkbox" id="save_info" />
                                <label for="save_info"><span>Save my information</span></label>
                            </p>
                            <a href="#" data-toggle="modal" data-target="#pass-recovery-modal" data-dismiss="modal">Forgot password?</a>
                        </div>
                        <div class="btn_cont">
                            <a href="#" class="button red medium-btn">Log In</a><br><br>
                            <a href="#" class="button blue small-btn" data-toggle="modal" data-target="#sign-up-modal" data-dismiss="modal">Create account</a>
                        </div>
                    </div>
				</form>
			</div>
		</div>
    </div>
</div>
