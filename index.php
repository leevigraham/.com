<?php $photos = array(
    0 => array(
        'center left',
        'Edwin van Nuil',
        'http://www.flickr.com/photos/vannuil/5036173842/'
    ),
    1 => array(
        'center center',
        'Simon Campbell',
        'http://www.flickr.com/photos/erskinecorp/5046231373/in/photosof-leevigraham/',
    ),
    2 => array(
        'center right'
    ),
    3 => array(
        'center top'
    ),
    4 => array(
        'center center'
    ),
    5 => array(
        '85% 30%',
        'Nate Croft',
        'http://www.flickr.com/photos/natecroft/5074299298/in/photosof-leevigraham/',
    ),
    6 => array(
        '10% top',
        'Emily Lewis',
        'http://www.flickr.com/photos/eplewis/4679543476/in/photosof-leevigraham/',
    ),
    7 => array(
        'center right',
        'Low',
        'http://www.flickr.com/photos/low/4723965560/in/photosof-leevigraham/',
    ),
    8 =>  array(
        'top left',
        'Nate Croft',
        'http://www.flickr.com/photos/natecroft/4767007624/in/photosof-leevigraham/',
    ),
    9 => array(
        'top center',
        'Nate Croft',
        'http://www.flickr.com/photos/natecroft/5071800340/in/photosof-leevigraham/',
    ),
    10 => array(
        '10% 0',
        'Simon Collison',
        'http://www.flickr.com/photos/collylogic/4670892960/in/photosof-leevigraham/',
    ),
    11 => array(
        'top left',
        'Simon Collison',
        'http://www.flickr.com/photos/collylogic/5042413411/in/photosof-leevigraham/'
    ),
    12 => array(
        'top center',
        'Joel Bradbury',
        'http://www.flickr.com/photos/joelbradbury/4049100991/in/photosof-leevigraham/'
    ),
    13 => array(
        '30% 0%',
        'Joel Bradbury',
        'http://www.flickr.com/photos/joelbradbury/4049118887/in/photosof-leevigraham/'
    ),
    14 => array(
        'center center',
        'Joel Bradbury',
        'http://www.flickr.com/photos/joelbradbury/4049873546/in/photosof-leevigraham/'
    ),
    15 => array(
        '30% 0%',
        'Joel Bradbury',
        'http://www.flickr.com/photos/joelbradbury/4049841806/in/photosof-leevigraham/',
    ),
    16 => array(
        'center center',
        'Me',
        'http://www.flickr.com/photos/leevigraham/4061250028/in/photosof-leevigraham/'
    ),
    17 => array(
        'left top',
        'Simon Collison',
        'http://www.flickr.com/photos/collylogic/4670832819/in/photosof-leevigraham/'
    ),
    18 => array(
        'center center',
        'Chris Buttery',
        'http://www.flickr.com/photos/buttahz/6010730443/in/photosof-leevigraham/'
    ),
    19 => array(
        '60% 0%',
        'Simon Collison',
        'http://www.flickr.com/photos/low/4723315739/in/photosof-leevigraham/'
    ),
    20 => array(
        'center top',
        'Nate Croft',
        'http://www.flickr.com/photos/natecroft/4052220208/'
    )
); 

$index = (isset($_GET['index'])) ? $_GET['index'] : rand(0, count($photos) -1);
$index = (isset($photos[$index])) ? $index : 1;
$photo = $photos[$index];
$photo[0] = (isset($photo[0])) ? $photo[0] : 'top left';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="PkUGXsHOiXRLJBeVHsX60rjhaUjkf9JISMMhYxRU7x8" />

    <style type="text/css">
        html, body {
            font-size:14px;
            margin:0;
            padding:0;
            font-family:sans-serif;
            position:relative;
            width:100%;
            height:100%;
        }
        #body {
            background: url(/backgrounds/<?php printf('%02d', $index); ?>.jpg) no-repeat <?php print($photo[0]); ?> fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            position:absolute;
            top:0;
            right:0;
            bottom:0;
            left:0;
            padding:20px;
        }
        h1 {
            background: #111;
            color:#fff;
            float:left;
            font-size:14px;
            font-weight:normal;
            margin:2px 0 0 2px;
            padding:9px;
        }
        p{
            background:#fff;
            clear:both;
            float:left;
            margin:2px 0 0 2px;
            padding:9px;
        }
        ul{
            clear:both;
            padding:0;
            margin:0;
        }
        ul li {
            float:left;
            list-style-type:none;
        }
        ul li a {
            color:#fff;
            display:block;
            background:#ff0099;
            margin:0;
            padding:0;
            text-align:center;
            text-decoration:none;
            padding:9px;
            margin-left:2px;
            margin-top:2px;
        }
        #credit{
            background:#222;
            color:#fff;
            font-size:10px;
            position:absolute;
            bottom:0;
            right:0;
        }
        #credit a {
            color:inherit;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <div id="body">
        <h1>Leevi Graham</h1>
        <p>Web Developer &amp; Designer, Business Owner, Aquaponics Enthusiast, Father</p>
        <ul id="profiles">
            <li><a href="http://github.com/leevigraham">Github</a></li>
            <li><a href="http://twitter.com/leevigraham">Twitter</a></li>
            <li><a href="http://www.flickr.com/leevigraham">Flickr</a></li>
            <li><a href="http://www.dribbble.com/leevigraham">Dribbble</a></li>
            <li><a href="http://newism.com.au">Newism</a></li>
            <li><a href="mailto:info@leevigraham.com">Email</a></li>
        </ul>
        <?php if(isset($photo[1])): ?>
        <p id="credit">
            Photo by: <a href="<?php print($photo[2]); ?>"><?php print($photo[1]); ?></a>
        </p>
        <?php endif; ?>
            
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-353308-8']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </div>
</body>
</html>    