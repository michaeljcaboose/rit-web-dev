<?php include('php_imports/header.html'); ?>
<title>Stretches</title>
</head>
<body>
<?php include('php_imports/nav.html'); ?>
<div class="content">
    <div id="stretch" class="hero">
        <div class="gray-cover"></div>
        <div class="header hello"><h1>Stretches</h1></div>
    </div>
    <div class="desktop--div_ib hello">

    </div>
    <div class="div_copy">
        <p>
            One of the most overlooked aspects of goaltending in practice is the importance of stretching. Goaltending
            at any sort of competitive level is strenuous on joints, tendons, and muscles in the legs and hips.
            Stretching before and after games will help to avoid serious injury and wear and tear on your body, allowing
            you to keep playing the position for a long time.
        </p>
        <p>
            There are so many stretches and exercises for goaltending that we could make a website just for that purpose,
            so to simplify things for now I went and found one of my favorite stretch drill videos from youtube.
        </p>
        <p><iframe width="560" height="315" src="https://www.youtube.com/embed/_sqm-VmIlqk" frameborder="0" allowfullscreen></iframe></p>
        <?php echo "Last modified: ".date("F d Y H:i:s.",filemtime("stretches.php")); ?>
    </div>
</div>
</body>
</html>