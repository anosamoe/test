<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <title>Promotions list</title>
    <?php include('./head_foot_menu/head.php'); ?>
</head>

<body>
    <?php include('./head_foot_menu/header-logged-in.php'); ?>
    <div class="main-container home-logged-in promotions-page promo_list">
        <section class="games_filter">
            <div class="filter_cont input-cont clear">
                <h2>Promotions</h2>
                <div class="games_filter_category select-arrow">
                    <select>
                        <option selected disabled>Welcome Bonuses</option>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                    </select>
                </div>
            </div>
            <div class="games_cont">
                <div class="games_list">
                    <div class="games_list_item">
                        <a href="#" class="game_item" data-toggle="modal" data-target="#promotion-modal">
                            <img src="../assets/images/empty_prom_l.png" alt="" style="background-image: url(../assets/images/promotions/sportsmen.jpg)">
                            <div class="game_overlay">
                                <p class="promotions_parag">50% Sign-Up
                                    <br> Bonus Up To
                                    <br> $1000
                                </p>
                                <span class="more-info">more info</span>
                            </div>
                        </a>
                    </div>
                    <div class="games_list_item">
                        <a href="#" class="game_item" data-toggle="modal" data-target="#promotion-modal">
                            <img src="../assets/images/empty_prom_l.png" alt="" style="background-image: url(../assets/images/promotions/baseball.jpg)">
                            <div class="game_overlay">
                                <p class="promotions_parag">20% Risk-Free
                                    <br> Sport Bet</p>
                                <span class="more-info">more info</span>
                            </div>
                        </a>
                    </div>
                    <div class="games_list_item">
                        <a href="#" class="game_item" data-toggle="modal" data-target="#promotion-modal">
                            <img src="../assets/images/empty_prom_l.png" alt="" style="background-image: url(../assets/images/promotions/monkey.jpg)">
                            <div class="game_overlay">
                                <p class="promotions_parag">100% Casino
                                    <br> Sign-Up Bonus</p>
                                <span class="more-info">more info</span>
                            </div>
                        </a>
                    </div>
                    <div class="games_list_item">
                        <a href="#" class="game_item" data-toggle="modal" data-target="#promotion-modal">
                            <img src="../assets/images/empty_prom_l.png" alt="" style="background-image: url(../assets/images/promotions/horses.jpg)">
                            <div class="game_overlay">
                                <p class="promotions_parag">25% Reload
                                    <br> Bonus Up To
                                    <br> $500
                                </p>
                                <span class="more-info">more info</span>
                            </div>
                        </a>
                    </div>
                    <div class="games_list_item">
                        <a href="#" class="game_item" data-toggle="modal" data-target="#promotion-modal">
                            <img src="../assets/images/empty_prom_l.png" alt="" style="background-image: url(../assets/images/promotions/basketball.jpg)">
                            <div class="game_overlay">
                                <p class="promotions_parag">8% Cash Back
                                    <br> Rebate
                                </p>
                                <span class="more-info">more info</span>
                            </div>
                        </a>
                    </div>
                    <div class="games_list_item">
                        <a href="#" class="game_item" data-toggle="modal" data-target="#promotion-modal">
                            <img src="../assets/images/empty_prom_l.png" alt="" style="background-image: url(../assets/images/promotions/fans.jpg)">
                            <div class="game_overlay">
                                <p class="promotions_parag">Refer a Friend
                                    <br> Special 200% Up
                                    <br> To $200</p>
                                <span class="more-info">more info</span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <?php include('./head_foot_menu/footer.php'); ?>
    </div>
</body>

</html>
