<div class="modal fade" id="cashier-modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <p class="modal_title">
                <img class="modal_logo" src="../assets/images/wb_logo-mob.png" alt="">
                <span>Cashier</span>
            </p>
            <div class="cashier-cont">
                <span class="close" data-dismiss="modal">&#10006;</span>
                <form id='cashier-form'>
                    <ul class="nav nav-tabs cashier_title_cont clear">
                        <li class="active"><a data-toggle="tab" href="#deposit">Deposit</a></li>
                        <li><a data-toggle="tab" href="#withdraw">Withdraw</a></li>
                    </ul>
                    <div class="tab-content deposit_section_cont clear">
                        <div id="deposit" class="tab-pane fade in active">
                            <div class="col3-item">
                                <div class="col_title">Personal Information</div>
                                <div class='input-cont'>
                                    <label for="firstname-popup">First Name</label>
                                    <div class='input-cont-group form-group'>
                                        <input type="text" id="firstname-popup" name="first_name" placeholder="First Name">
                                    </div>
                                </div>
                                <div class='input-cont'>
                                    <label for="lastname-popup">Last Name</label>
                                    <div class='input-cont-group form-group'>
                                        <input type="text" id="lastname-popup" name="last_name" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class='input-cont'>
                                    <label for="sign-up-popup">Your Email</label>
                                    <div class='input-cont-group form-group'>
                                        <input type="email" id="sign-up-popup" name='email' placeholder="Your Email">
                                    </div>
                                </div>
                                <div class='input-cont'>
                                    <label for="">Mobile Phone</label>
                                    <div class='clear phone_cont form-group'>
                                        <div class='input-cont-group left_c'>
                                            <input type="number" name='mob_code' placeholder="USA +1" disabled>
                                        </div>
                                        <div class='input-cont-group right_c'>
                                            <input type="number" id="mobile-number-popup" name='mob_number' placeholder="234 567-89-01">
                                        </div>
                                    </div>
                                </div>
                                <div class='input-cont'>
                                    <label for="">Date of Birth</label>
                                    <div class='input-cont-group date-select'>
                                        <div class='form-group select-arrow'>
                                            <?php
                                                $months = array(1 => 'January', 2 => 'February.', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December');
                                                $transposed = array_slice($months, date('n'), 12, true) + array_slice($months, 0, date('n'), true);
                                                $last8 = array_reverse(array_slice($transposed, -8, 12, true), true);
                                            ?>
                                                <select name="dob">
                                                    <option value="0" selected="true" disabled="disabled">Month</option>
                                                    <?php
                                                    foreach ($months as $num => $name) {
                                                        printf('<option value="%u">%s</option>', $num, $name);
                                                    }
                                                ?>
                                                </select>
                                        </div>
                                        <div class='form-group select-arrow'>
                                            <select name='dob'>
                                                <option selected="true" disabled="disabled">Day</option>
                                                <?php
                                                for($i=1; $i<32; $i++){
                                                    echo "<option value='".$i."'>".$i."</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class='form-group select-arrow'>
                                            <select name='dob'>
                                                <option selected="true" disabled="disabled">Year</option>
                                                <?php
                                                for($i=1900; $i<2017; $i++){
                                                    echo "<option value='".$i."'>".$i."</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col3-item">
                                <div class="col_title">Contact Information</div>
                                <div class='input-cont'>
                                    <label for="">Country</label>
                                    <div class='input-cont-group form-group select-arrow'>
                                        <select name="country">
                                            <option value="1" selected disabled>Select country</option>
                                            <option value="2">country 1</option>
                                            <option value="3">country 2</option>
                                            <option value="4">country 3</option>
                                            <option value="5">country 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='input-cont'>
                                    <label for="">State</label>
                                    <div class='input-cont-group form-group select-arrow'>
                                        <select name="state">
                                            <option value="1" selected disabled>Select state</option>
                                            <option value="2">state 1</option>
                                            <option value="3">state 2</option>
                                            <option value="4">state 3</option>
                                            <option value="5">state 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='input-cont'>
                                    <label for="city-popup">City</label>
                                    <div class='input-cont-group form-group'>
                                        <input type="text" id="city-popup" name="city" placeholder="City">
                                    </div>
                                </div>
                                <div class='input-cont'>
                                    <label for="address-popup">Street Address</label>
                                    <div class='input-cont-group form-group'>
                                        <input type="text" id="address-popup" name="address" placeholder="Street Address">
                                    </div>
                                </div>
                                <div class='input-cont'>
                                    <label for="zip-popup">Zip Code</label>
                                    <div class='input-cont-group form-group'>
                                        <input type="text" id="zip-popup" name="zip" placeholder="Zip Code">
                                    </div>
                                </div>
                            </div>
                            <div class="col3-item">
                                <div class="col_title">Account Details</div>
                                <div class='input-cont'>
                                    <label for="new-password-popup">Password</label>
                                    <div class='input-cont-group form-group'>
                                        <input type="password" id="new-password-popup" name="password" placeholder="Password">
                                    </div>
                                    <label for="retype-password-popup">Password Again</label>
                                    <div class='input-cont-group form-group'>
                                        <input type="password" id="retype-password-popup" name="confirmPassword" placeholder="Password Again">
                                    </div>
                                </div>
                                <div class='input-cont'>
                                    <label for="">How did you hear about us</label>
                                    <div class='input-cont-group form-group select-arrow'>
                                        <select name="">
                                            <option value="1" selected disabled>Select (optional)</option>
                                            <option value="2">option 1</option>
                                            <option value="3">option 2</option>
                                            <option value="4">option 3</option>
                                            <option value="5">option 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='input-cont'>
                                    <label for="specify-popup">Please specify</label>
                                    <div class='input-cont-group form-group'>
                                        <input type="text" id="specify-popup" name="specify" placeholder="Please specify">
                                    </div>
                                </div>
                                <div class='input-cont'>
                                    <label for="promo-popup">Promo Code</label>
                                    <div class='clear promo_cont'>
                                        <div class='input-cont-group form-group left_c'>
                                            <input type="text" id="promo-popup" name="specify" placeholder="Promo Code">
                                        </div>
                                        <div class='input-cont-group right_c'>
                                            Use it to get bonus
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
