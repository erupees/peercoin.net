<?php $page_title = "Wallets"; include ('header.php'); ?>
<h1 class="page-title"><?php echo $Locale->getText("wallet.title"); ?></h1>
<div class="row">
    <div class="col-md-8 col-md-offset-2"><img src="assets/img/downloads/banner.svg" style="svg-fullwidth" /></div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <p style="font-size: 18px"><?php echo $Locale->getText("wallet.desc"); ?></p>
    </div>
</div>
<div class="row">
    <div class="col-md-2 col-md-offset-3">
        <div class="tile text-center wallet-entry">
            <img src="assets/img/logos/peercoin.svg" alt="" class="tile-image big-illustration svg-100">
            <h3 class="tile-title"><?php echo $Locale->getText("wallet.peercoinqt"); ?></h3>
            <p>
                <?php echo $Locale->getText("wallet.peercoinqt_desc"); ?>
            </p>
            <div>
                <a class="btn btn-primary btn-large btn-block" href="download"><?php echo $Locale->getText("wallet.download"); ?> Peercoin-QT</a>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="tile text-center wallet-entry">
            <img src="assets/img/logos/paper-wallet.png" height="100px" width="100px" alt="" class="tile-image big-illustration">
            <h3 class="tile-title"><?php echo $Locale->getText("wallet.paper_wallet"); ?></h3>
            <p>
                <?php echo $Locale->getText("wallet.paper_wallet_desc"); ?>
            </p>
            <div>
                <a class="btn btn-primary btn-large btn-block" href="http://wallet.peercointalk.org/"><?php echo $Locale->getText("wallet.download"); ?> Paper Wallet</a>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="tile text-center wallet-entry">
            <img src="assets/img/logos/android-wallet.png" height="100px" width="100px" alt="" class="tile-image big-illustration">
            <h3 class="tile-title"><?php echo $Locale->getText("wallet.android_wallet"); ?></h3>
            <p>
                <?php echo $Locale->getText("wallet.android_wallet_desc"); ?>
            </p>
            <div>
                <a class="btn btn-primary btn-large btn-block" href="https://talk.peercoin.net/t/ann-peercoin-android-wallet-3-1-released/2846"><?php echo $Locale->getText("wallet.download"); ?> Android Wallet</a>
            </div>
        </div>
    </div>
</div>

</div>
<?php include ('footer.php'); ?>
