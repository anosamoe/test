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
                    <div class="tab-content cashier_section_cont clear">
                        <div id="deposit" class="tab-pane fade in active">
                            <div class="col3-item">
                                <div class="col_title">Select Deposit Option</div>
                                <div class="select_btns_cont">
                                    <div class="s_btn">
                                        <span>Credit Card</span>
                                        <a href="#" class="active"><img src="../assets/images/deposit_imgs/credit_card.png" alt=""></a>
                                    </div>
                                    <div class="s_btn">
                                        <span>MoneyGram</span>
                                        <a href="#"><img src="../assets/images/deposit_imgs/moneygram.png" alt=""></a>
                                    </div>
                                    <div class="s_btn">
                                        <span>eCheck</span>
                                        <a href="#"><img src="../assets/images/deposit_imgs/echeck.png" alt=""></a>
                                    </div>
                                    <div class="s_btn">
                                        <span>Wire Transfer</span>
                                        <a href="#"><img src="../assets/images/deposit_imgs/wire_transfer.png" alt=""></a>
                                    </div>
                                    <div class="s_btn">
                                        <span>Bitcoin</span>
                                        <a href="#"><img src="../assets/images/deposit_imgs/bitcoin.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col3-item">
                                <div class="col_title">Credit Card Details</div>
                                <div class='input-cont'>
                                    <label for="card_number">Card Number</label>
                                    <div class='input-cont-group form-group'>
                                        <input type="text" id="card_number" name="card_number" placeholder="Card Number">
                                    </div>
                                </div>
                                <div class='input-cont'>
                                    <label for="card_holder">Card Holder Name</label>
                                    <div class='input-cont-group form-group'>
                                        <input type="text" id="card_holder" name="card_holder" placeholder="Card Holder Name">
                                    </div>
                                </div>
                                <div class='input-cont expiration_c'>
                                    <div class="expiration_l">
                                        <label for="">Expiration Date</label>
                                        <div class='input-cont-group date-select'>
                                            <div class='form-group select-arrow'>
                                                <select name='expiration'>
                                                    <option selected="true" disabled="disabled">MM</option>
                                                    <?php
                                                    for($i=1; $i<13; $i++){
                                                        echo "<option value='".$i."'>".$i."</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class='form-group select-arrow'>
                                                <select name='expiration'>
                                                    <option selected="true" disabled="disabled">YYYY</option>
                                                    <?php
                                                    for($i=1900; $i<2018; $i++){
                                                        echo "<option value='".$i."'>".$i."</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="expiration_r">
                                        <div class="cvv">
                                            <label for="cvv">CVV</label>
                                            <div class='input-cont-group form-group'>
                                                <input type="number" id="cvv" name="cvv" placeholder="CVV">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="amount_select">
                                    <div class="col_title">Amount, $</div>
                                    <div class='input-cont'>
                                        <div class='input-cont-group form-group'>
                                            <input type="text" id="selected_amount" name="selected_amount" placeholder="Amount">
                                        </div>
                                    </div>
                                    <div class="select_btns_cont">
                                        <div class="s_btn">
                                            <a href="#">$100</a>
                                        </div>
                                        <div class="s_btn">
                                            <a href="#" class="active">$200</a>
                                        </div>
                                        <div class="s_btn">
                                            <a href="#">$300</a>
                                        </div>
                                        <div class="s_btn">
                                            <a href="#">$500</a>
                                        </div>
                                        <div class="s_btn">
                                            <a href="#">$1000</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col3-item">
                                <div class="col_title">Claim a Bonus?</div>
                                <p class="checkbox">
                                    <input type="checkbox" id="bonus" />
                                    <label for="bonus">
                                        <span>
                                            200% up to $100 (×40 wagering)
                                            <a href="#">Terms & Conditions</a>
                                        </span>
                                    </label>
                                </p>
                                <p class="checkbox">
                                    <input type="checkbox" id="without_bonus" />
                                    <label for="without_bonus">
                                        <span>
                                            No, Thanks!
                                        </span>
                                    </label>
                                </p>
                                <ul class="info_list">
                                    <li><span>Min Deposit $45</span></li>
                                    <li><span>Max Deposit $1000</span></li>
                                    <li><span>Daily Max $1000</span></li>
                                </ul>
                                <a href="#" class="button green medium-btn">Deposit</a>
                            </div>
                        </div>
                        <div id="withdraw" class="tab-pane fade">
                            <div class="col3-item">
                                <div class="col_title">Recipient Information</div>
                                <div class="recipient_info">
                                    <div class="recipient_info_item">
                                        <span>Full Name</span>
                                        <p>John Smith</p>
                                    </div>
                                    <div class="recipient_info_item">
                                        <span>Account ID</span>
                                        <p>WB123456</p>
                                    </div>
                                    <div class="recipient_info_item">
                                        <span>Current Balance</span>
                                        <p>$300.00</p>
                                    </div>
                                    <div class="recipient_info_item">
                                        <span>Pending Withdrawals</span>
                                        <p>$100.00</p>
                                    </div>
                                    <div class="recipient_info_item">
                                        <span>Available Balance</span>
                                        <p>$200.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col3-item">
                                <div class="col_title">Select a Withdrawal Option</div>
                                <div class="select_btns_cont">
                                    <div class="s_btn">
                                        <span>Credit Card</span>
                                        <a href="#" class="active"><img src="../assets/images/deposit_imgs/credit_card.png" alt=""></a>
                                    </div>
                                    <div class="s_btn">
                                        <span>MoneyGram</span>
                                        <a href="#"><img src="../assets/images/deposit_imgs/moneygram.png" alt=""></a>
                                    </div>
                                    <div class="s_btn">
                                        <span>eCheck</span>
                                        <a href="#"><img src="../assets/images/deposit_imgs/echeck.png" alt=""></a>
                                    </div>
                                    <div class="s_btn">
                                        <span>Wire Transfer</span>
                                        <a href="#"><img src="../assets/images/deposit_imgs/wire_transfer.png" alt=""></a>
                                    </div>
                                    <div class="s_btn">
                                        <span>Bitcoin</span>
                                        <a href="#"><img src="../assets/images/deposit_imgs/bitcoin.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col3-item">
                                <div class="col_title">Withdrawal Amount, $</div>
                                <div class='input-cont'>
                                    <div class='input-cont-group form-group'>
                                        <input type="text" id="selected_amount" name="selected_amount" placeholder="Amount">
                                    </div>
                                </div>
                                <div class="col_title mt">Credit Card Details</div>
                                <div class='input-cont'>
                                    <label for="card_number">Card Number</label>
                                    <div class='input-cont-group form-group'>
                                        <input type="text" id="card_number" name="card_number" placeholder="Card Number">
                                    </div>
                                </div>
                                <div class='input-cont'>
                                    <label for="card_holder">Card Holder Name</label>
                                    <div class='input-cont-group form-group'>
                                        <input type="text" id="card_holder" name="card_holder" placeholder="Card Holder Name">
                                    </div>
                                </div>
                                <div class='input-cont expiration_c'>
                                    <div class="expiration_l">
                                        <label for="">Expiration Date</label>
                                        <div class='input-cont-group date-select'>
                                            <div class='form-group select-arrow'>
                                                <select name='expiration'>
                                                    <option selected="true" disabled="disabled">MM</option>
                                                    <?php
                                                    for($i=1; $i<13; $i++){
                                                        echo "<option value='".$i."'>".$i."</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class='form-group select-arrow'>
                                                <select name='expiration'>
                                                    <option selected="true" disabled="disabled">YYYY</option>
                                                    <?php
                                                    for($i=1900; $i<2018; $i++){
                                                        echo "<option value='".$i."'>".$i."</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="expiration_r">
                                        <div class="cvv">
                                            <label for="cvv">CVV</label>
                                            <div class='input-cont-group form-group'>
                                                <input type="number" id="cvv" name="cvv" placeholder="CVV">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="button yellow medium-btn">Withdraw</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
