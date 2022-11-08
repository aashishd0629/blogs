<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    <title>My Adventures</title>
</head>

<body>
    <h1>Hello You!</h1>
    <h2>Nepal is calling you...</h2>
    <h3>What are you waiting for?</h3>
    <h4>Adventures are like heaven...</h4>

    <?php foreach($posts as $post): ?>
       
    <article>
        <h1> 
           <a href="/posts/<?php $post->slug ?>">
           <!-- {{dd($post->slug)}}; -->
           <?php echo $post->title;?>
           </a>
        </h1>
        <p><?php echo $post->body; ?> </p>

    </article>
    <?php endforeach; ?> 
   
    <h1>Love form Nepal.</h1>
</body>

</html>