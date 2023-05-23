<div class="partners-container container">
    <div class="row">
        <div id="partners" class="col-md-12">
            <h1>PARTNERS</h1>
        </div>
        <div class="partners col-md-12">
            <?php foreach ($attributes["photos"] as $partners) : ?>
                <div class="partner-all-logos col-3">
                    <div class="col-3 partners-logo">
                        <img class="partners-logos"  src="<?php echo $partners["logos"]?>" alt=""><br>
                    </div>

                </div>  


                
        
    <?php endforeach ?>
    </div>

    </div>
</div>