<div class="about-video-container container">
    <div class="row">
        <div id="about" class="col-md-12 tabs_two">
            <h1>About the VIDEOCLIP</h1>

            <div class="col-md-12 types-location d-flex">
                <div class="col-3">
                    <button>Jested</button>
                </div>
                <div class="col-3">
                    <button>Parking house</button>
                </div>
                <div class="col-3">
                    <button>Driving around</button>
                </div>
                <div class="col-3">
                    <button>Atelier</button>
                </div>
            </div>
            <div class="about-video-items col-md-12 col-sm-12">
                <?php foreach ($attributes["about-videoclip"] as $aboutvideo) : ?>
                    <div class="col-md-12 slider_two all row d-flex">

                        <div class="about-video-left col-md-7 col-sm-12">
                            <img class="about-video-photos" src="<?php echo $aboutvideo["photos"] ?>" alt="">
                        </div>
                        <div class="about-video-right col-md-5 col-sm-12">
                            <div class="col-md-12 locatioon">
                                <h3>Location</h3>
                                <span class="about-video-location"><?php echo $aboutvideo["location"] ?></span><br><br><br>
                            </div>
                            <div class="col-md-12 timee">
                                <h3>How long deos the shooting take</h3>
                                <span class="about-video-time"><?php echo $aboutvideo["time"] ?></span><br><br><br>
                            </div>
                            <div class="col-md-12 reasoon">
                                <h3>Reason for the location</h3>
                                <span class="about-video-reason"><?php echo $aboutvideo["reason"] ?></span><br><br><br>
                            </div>

                        </div>
                    </div>
                <?php endforeach ?>

                <?php foreach ($attributes["about-videoclip-two"] as $aboutvideotwo) : ?>
                    <div class="col-md-12 slider_two two row">
                        <div class="about-video-left col-7">
                            <img class="about-video-photos" src="<?php echo $aboutvideotwo["photos"] ?>" alt="">
                        </div>
                        <div class="about-video-right col-5">
                            <div class="col-md-12 locatioon">
                                <h3>Location</h3>
                                <span class="about-video-location"><?php echo $aboutvideotwo["location"] ?></span><br><br><br>
                            </div>
                            <div class="col-md-12 timee">
                                <h3>How long deos the shooting take</h3>
                                <span class="about-video-time"><?php echo $aboutvideotwo["time"] ?></span><br><br><br>
                            </div>
                            <div class="col-md-12 reasoon">
                                <h3>Reason for the location</h3>
                                <span class="about-video-reason"><?php echo $aboutvideotwo["reason"] ?></span><br><br><br>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>
</div>

<?php
sliders_two()
?>
