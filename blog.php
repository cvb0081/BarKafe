<?php
//Initialize Session if not login page does not load
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog - Bar Kafe</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Header-->
    <?php require_once 'header.php'?>

    <!-- Navigation -->
    <?php require_once 'nav.php'?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname;?> - <a href="logout.php">Logout</a> </h2>
                    <hr>
                    <h2 class="intro-text text-center">Bar Kafe
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>

                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>What Is Kona Coffee And How Did It Come To Hawaii?
                        <br>
                        <small>MAY 19, 2021 </small>
                    </h2>
                    <p>When it comes to coffee grown in the United States, the first thing that comes to mind is Kona. Sure, there’s a porkpie-wearing acoustic guitarist growing some in So Cal, and some folks in Florida are giving it a go as well, but the Hawaiian-grown coffee reigns supreme. Along with Jamaica Blue Mountain (and perhaps, ugh, kopi luwak), there may be nothing more synonymous with “fancy coffee” amongst the coffee-drinking masses than Kona. Sure, we coffee dweebs go gaga for Gesha and have Eugenioides envy, but ask your parents or grandparents what the best high-end coffee is and they’re probably going to tell you it’s Kona.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>Will Coffee Cure A Hangover Or Just Make It Worse?
                        <br>
                        <small>MAY 10, 2021 </small>
                    </h2>
                    <p>One of the great cruelties of aging is that with each passing year it takes fewer and fewer drinks to invoke the dreaded hangover demon. I used to be able to consume alcohol at alarming rates with nary a headache in sight, not even enough of one to justify skipping class (though I would anyway). Now, I can’t so much as smell an IPA or agave-based spirit without needing a cold compress and about 18 hours of sleep.
                        But when hangovers do happen, everyone has their go-to cure for what ails you, and like many of you, mine has always been as much coffee as I could get my hands on. But a recent article in Medical News Today suggests that while coffee may ease some symptoms, it may actually make others worse.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>Protests In Colombia Have Halted Coffee Exports
                        <br>
                        <small>MAY 6, 2021 </small>
                    </h2>
                    <p>Colombia is in a state of unrest. Demonstrations began early last week in the cities of Bogota and Cali, in protest over a tax reform plan proposed by the government of President Ivan Duque. That plan has since been canceled, but the protests continue, with citizens now calling for the government to “tackle poverty, police violence and inequalities in the health and education systems,” per Reuters. At least 24 individuals—and likely many, many more—have died in clashes with the police and militarized “SWAT”-style officers, a response that has been condemned by Amnesty International.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Modal 1 -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">KONA COFFEE</h4>
                </div>
                <div class="modal-body">
                    <p>Before we get to the how, let’s first break down the what. Kona is defined more provincially than genetically. Contrary to what most assume, Kona isn’t a specific variety of coffee at all but refers more broadly to the Arabica species. But what makes Kona “Kona”, much like champagne and bourbon, is where it is grown. For a coffee to be considered Kona, it must be “cultivated on the slopes of Hualalai and Mauna Loa in the North and South Kona Districts of the Big Island of Hawaii.” Theoretically, there could be Typica Kona, Red Bourbon Kona, even Gesha Kona.</p>

                     <p>The first recorded coffee plant to find its way to Hawaii, per SF Gate, arrived in 1817 via Francisco de Paula Marín, “a Spanish friend of King Kamehameha who acted as an informal adviser,” who also introduced grapes and pineapples to the island. It wasn’t until eight years later, when Chief Boki of Oahu imported plants from Brazil, that coffee cultivation took root in Hawaii. Around the same time, the “Second Great Awakening,” a Christian revival movement in America, was taking place, sending many missionaries to the islands. Per SF Gate, coffee was used as a tool to destabilize Hawaiian power structures:</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Hangover and coffe</h4>
                </div>
                <div class="modal-body">
                    <p>Per the article, the exact causes of a hangover are unknown—other than, you know, drinking too much alcohol—but biological factors like “dehydration, gastrointestinal irritation, inflammation, chemical exposure, disrupted sleep, and mini-withdrawals likely contribute to the symptoms.” These symptoms include but are not limited to: fatigue, weakness, headaches, increased thirst, sensitivity to light and sound, sweating, irritability, anxiety, nausea, stomach pain, muscles aches, dizziness, and increased blood pressure.</p>
                    <p>So how does coffee play into all this? While there isn’t much research on coffee’s effect on the aftermath of a night drinking, the CDC notes that mixing alcohol with caffeine can be dangerous because caffeine increases one’s alertness, giving the illusion of sobriety. This same increased alertness, it stands to reason, could at least partially counteract hangover-caused fatigue. And as we’ve reported in previous studies, caffeine has short-term benefits for those suffering from disrupted or insufficient rest (like one would have after drinking all night).</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <div id="myModal3" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Protests in Colombia</h4>
                </div>
                <div class="modal-body">
                    <p> Colombia is a nation synonymous with coffee—it's the third largest coffee producing nation in the world, with more than 500,000 coffee farmers. As the protests have begun to spread nationwide, the demonstrations are putting a halt to commerce, resulting in significant early impacts on Colombia’s coffee industry.</p>
                    <p>
                        As reported by Reuters, anti-government protestors are setting up road blockades around the country, which is disrupting coffee shipments. One blockage in particular, in Bonaventure, is preventing any goods from entering or leaving the major port. The National Federation of Coffee Growers of Colombia (Fedecafe) head Roberto Velez tells Reuters that the blockades are having a particularly significant effect on producers in the “Huila, Valle del Cauca, Cauca, and Nariño provinces who are in the midst of their main harvest.”</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <?php require_once 'footer.php'?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
    <?php

} else {
    header("location:login.php ");
}
?>