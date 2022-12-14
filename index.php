<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => "10.4 km",
            'image' => 'https://static.vitalpina.info/images/content/1359790_88538_2_C_1700_955_0_466370717/hotel1.jpg'
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => "2 km",
            'image' => 'https://www.myluxury.it/img/2014/10/the-apeiron-hotel-dubai-1200x843.jpg'
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => "1 km",
            'image' => 'https://www.rivamarehotel.com/mobile/images/home-headline-new.jpg'
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => "5.5 km",
            'image' => 'https://www.myfamilyhotel.it/images/hotel/Bellavista/hbp-.jpg'

        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => "50 m",
            'image' => 'https://media.hrs.com/media/image/f1/62/3b/J24_Hotel_Milano-Mailand-Aussenansicht-986647_600x600@2x.jpg'
        ],

    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Hotel</title>
</head>
<body>
    <header>
        <h1>Hotel</h1>
        <form action="index.php" method="GET">
            <label for="" class="parking">Parking</label>
            <select name="parking" id="" class="parking">
                <option value="true">Yes</option>
                <option value="false">No</option>
            </select>
            <button class="cerca">Cerca</button>
        </form>
    </header>
    <main>
        <?php for($i = 0; $i <= 4; $i++){ ?>
            <div class="card">
                <img src="<?php echo $hotels[$i]["image"];?>" alt="">
                <div class="descrition">
                    <div class="nome-hotel">
                        <span class="name"><?php echo $hotels[$i]["name"]; ?> </span>
                        <span class="star"><?php echo $hotels[$i]["vote"]; ?> <i class="fa-solid fa-star"></i></span>
                    </div>
                    <span><a href="">Mostra sulla mappa</a> <?php echo $hotels[$i]["distance_to_center"]; ?> dal centro</span>
                    <p><?php echo $hotels[$i]["description"]; ?></p>
                </div>
            </div>
        <?php }; ?>
    </main>
</body>
</html>