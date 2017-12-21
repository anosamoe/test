<div class="modal fade" id="login-modal" role="dialog">
    <div class="modal-dialog">
		<div class="modal-content">
			<div class="login-cont">
				<span class="close" data-dismiss="modal">&#10006;</span>
				<div class="sing-in_section_title">
                    <p class="cloud-title"><span>HEY THERE!</span></p>
                    <p>ADVENTURE AWAITS </p>
                </div>
				<form id='login-form'>
					<div class='input-cont'>
					    <label for="username-email-popup">Your Email</label>
						<div class='input-cont-group form-group'>
							<input type="email" id="username-email-popup" name='username_email'>
						</div>
				    </div>
				    <div class='input-cont'>
				        <label for="login-password-popup">Password</label>
						<div class='input-cont-group form-group'>
							<input type="password" id="login-password-popup" name="login_password">
							<span class="hide-pass"><i class="letsbet-icon icon-close-eye"></i></span>
						</div>
				    </div>
				    <div class='input-cont'>
						<div class='form-group'>
							<input value="Log in!" class="button green" type="submit">
						</div>
						<a href='#' class="button purple-border transparent" data-toggle="modal" data-target="#sign-up-modal" data-dismiss="modal">open new account</a>
					</div>
				</form>
				<div class="terms-conditions">
                    <a href="" data-toggle="modal" data-target="#pass-recovery-modal" data-dismiss="modal">I Forgot My Password</a>
                    <br><a href="" data-toggle="modal" data-target="#login-error">User not found.</a>
                </div>
			</div>
			<div class="modal fade" id="login-error" role="dialog" data-backdrop="false">
				<div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="sing-in_section_title">
                            <p class="cloud-title"><span>oooooops...!</span></p>
                            <p>user not found <br>404</p>
                        </div>
                        <div class="modal-body clear">
                            <p>Seems like we can’t find this username. Please try again or</p>
                            <p><a href='#'>contact our awesome support!</a></p>
                        </div>
                    </div>
					<p class="button green hide-modal">OK</p>
				</div>
			</div>
		</div>
    </div>
</div>
