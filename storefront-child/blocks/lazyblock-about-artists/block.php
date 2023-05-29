<div class="about-artists-container container">
    <div class="row">
        <div id="about-artists" class="tabs col-md-12">
            <h1>About the ARTISTS</h1>

            <div class="col-md-12 types-location d-flex">
                <div class="col">
                    <button>Gizmo</button>
                </div>
                <div class="col">
                    <button>Eddie Fresco</button>
                </div>
                <div class="col">
                    <button>Bill $aber</button>
                </div>
            </div>
            <div class="about-artists col-md-12">
                <?php foreach ($attributes["about-artists"] as $aboutartists) : ?>
                    <div class="slider col-md-12">
                        <div class="about-artists-one col-md-12 col-sm-12">
                            <div class="col-md-12 ">
                                <img class="about-artists-image" src="<?php echo $aboutartists["photo"] ?>" alt=""><br>
                            </div>
                        </div>

                        <div class="about-artists-two col-md-12">
                            <div class="about-artists-two-left col-md-8 col-sm-12">

                                <div class="col-md-12 artists-description">
                                    <span class="about-people-description"><?php echo $aboutartists["description"] ?></span><br>
                                </div>
                            </div>

                            <div class="about-artists-two-right col-md-4 col-sm-12">

                                <div class="about-artists-two-right-top col-md-12">
                                    <div class="col-6 artists-ig">
                                        <a href="<?php echo $aboutartists["instagram"] ?>"><img src="http://stelzer-jakub.eu/wp-content/uploads/2023/05/instagram-copy.png" alt=""></a>
                                    </div>
                                    <div class="col-6 artists-spotify">
                                        <a href="<?php echo $aboutartists["spotify"] ?>"><img src="http://stelzer-jakub.eu/wp-content/uploads/2023/05/spotify.png" alt=""></a>
                                    </div>
                                </div>


                                <div class="about-artists-two-right-mid col-md-12">
                                    <div class="col-6 artists-applemusic">
                                        <a href="<?php echo $aboutartists["applemusic"] ?>"><img src="http://stelzer-jakub.eu/wp-content/uploads/2023/05/music.png" alt=""></a>
                                    </div>
                                    <div class="col-6 artists-soundcloud">
                                        <a href="<?php echo $aboutartists["soundcloud"] ?>"><img src="http://stelzer-jakub.eu/wp-content/uploads/2023/05/soundcloud.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="about-artists-two-right-bot col-md-12">
                                    <div class="col-md-12 artists-twitter">
                                        <a href="<?php echo $aboutartists["twitter"] ?>"><img src="http://stelzer-jakub.eu/wp-content/uploads/2023/05/twitter.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

                <?php foreach ($attributes["about-artists-two"] as $aboutartiststwo) : ?>
                    <div class="one slider col-md-12">
                        <div class="about-artists-one col-md-12">
                            <div class="col-md-12 ">
                                <img class="about-artists-image" src="<?php echo $aboutartiststwo["photo"] ?>" alt=""><br>
                            </div>
                        </div>

                        <div class="about-artists-two col-md-12">
                            <div class="about-artists-two-left col-8">

                                <div class="col-md-12 artists-description">
                                    <span class="about-people-description"><?php echo $aboutartiststwo["description"] ?></span><br>
                                </div>
                            </div>

                            <div class="about-artists-two-right col-4">

                                <div class="about-artists-two-right-top col-md-12">
                                    <div class="col-6 artists-ig">
                                        <a href="<?php echo $aboutartists["instagram"] ?>"><img src="http://stelzer-jakub.eu/wp-content/uploads/2023/05/instagram-copy.png" alt=""></a>
                                    </div>
                                    <div class="col-6 artists-spotify">
                                        <a href="<?php echo $aboutartists["spotify"] ?>"><img src="http://stelzer-jakub.eu/wp-content/uploads/2023/05/spotify.png" alt=""></a>
                                    </div>
                                </div>


                                <div class="about-artists-two-right-mid col-md-12">
                                    <div class="col-6 artists-applemusic">
                                        <a href="<?php echo $aboutartists["applemusic"] ?>"><img src="http://stelzer-jakub.eu/wp-content/uploads/2023/05/music.png" alt=""></a>
                                    </div>
                                    <div class="col-6 artists-soundcloud">
                                        <a href="<?php echo $aboutartists["soundcloud"] ?>"><img src="http://stelzer-jakub.eu/wp-content/uploads/2023/05/soundcloud.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="about-artists-two-right-bot col-md-12">
                                    <div class="col-md-12 artists-twitter">
                                        <a href="<?php echo $aboutartists["twitter"] ?>"><img src="http://stelzer-jakub.eu/wp-content/uploads/2023/05/twitter.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>


            <div id="events" class="col-md-12">
                <h1>Upcomming events</h1>


                <div class="about-artists-events-field col-md-12">
                    <div class="col-3 artists-events-headline">
                        <h6>date</h6>
                    </div>
                    <div class="col-4 artists-events-headline">
                        <h6>state/town</h6>
                    </div>
                    <div class="col-3 artists-events-headline">
                        <h6>place</h6>
                    </div>
                    <div class="col-2 artists-events-headline">
                        <h6>tickets</h6>
                    </div>

                </div>

                <?php foreach ($attributes["events"] as $events) : ?>
                    <div class="about-artists-events col-md-12">


                        <div class="about-artists-events-field col-md-12">
                            <div class="col-3 artists-events">
                                <span class="about-artists-events"><?php echo $events["date"] ?></span>
                            </div>
                            <div class="col-4 artists-events">
                                <span class="about-artists-events"><?php echo $events["artist"] ?></span>
                            </div>
                            <div class="col-3 artists-events">
                                <span class="about-artists-events"><?php echo $events["place"] ?></span>
                            </div>
                            <div class="col-2 artists-events">
                                <a class="about-artists-events" href="<?php echo $events["tickets"] ?>">tickets</a>
                            </div>

                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>
</div>

<?php
sliders()
?>