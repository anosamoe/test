<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <title>My Account</title>
    <?php include('./head_foot_menu/head.php'); ?>
</head>
<html>

<body>
    <?php include('./head_foot_menu/header-logged-in.php'); ?>
        <section class="account_page home-logged-in">
            <div class="standart_block">
                <h2 class="title_section">My Account</h2>
                <div class="center_content">
                    <ul class="nav nav-tabs account_title_cont clear">
                        <li class="active"><a data-toggle="tab" href="#profile">Profile</a></li>
                        <li><a data-toggle="tab" href="#identification">Identification</a></li>
                        <li><a data-toggle="tab" href="#bonuses">Bonuses</a></li>
                        <li><a data-toggle="tab" href="#wager_history">Wager History</a></li>
                        <li><a data-toggle="tab" href="#transactions">Transactions</a></li>
                    </ul>
                    <div class="tab-content account_section_cont clear">
                        <div id="profile" class="tab-pane fade in active">
                            <?php include('./account/profile.php'); ?>
                        </div>
                        <div id="identification" class="tab-pane fade">
                            <?php include('./account/identification.php'); ?>
                        </div>
                        <div id="bonuses" class="tab-pane fade">
                            <?php include('./account/bonuses.php'); ?>
                        </div>
                        <div id="wager_history" class="tab-pane fade">
                            <?php include('./account/wager_history.php'); ?>
                        </div>
                        <div id="transactions" class="tab-pane fade">
                            <?php include('./account/transactions.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('./head_foot_menu/footer.php'); ?>
        </section>
</body>

</html>
