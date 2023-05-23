<div class="about-people-container container">
    <div class="row">
        <div id="about-people" class="col-md-12">
            <h3>People behind the scenes</h3>
        
        <div class="about-video-people col-md-12 ">
            <?php foreach ($attributes["about-people"] as $aboutpeople) : ?>
                <div class="about-video-people-one col-md-3 col-sm-3">
                    <div class="col-md-12 people-image">
                        <img class="about-video-photos" src="<?php echo $aboutpeople["photo"]?>" alt=""><br>
                    </div>
                    <div class="col-md-12 people-profession">
                        <span class="about-people-location"><?php echo $aboutpeople["profession"] ?></span><br>
                    </div>
                    <div class="col-md-12 people-name">
                        <span class="about-people-time"><?php echo $aboutpeople["name"] ?></span>
                    </div>

                </div>
        
            <?php endforeach ?>
        </div>
        </div>
    </div>
</div>