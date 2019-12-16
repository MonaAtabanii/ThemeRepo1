<?php include 'includes/config.php'?>

<?php
if(isset($_GET['day'])){
    //day comes from link on page
    $day = $_GET['day'];
}
else{
    //current day of week
    $day = date('l');
}


//choose diffrent cat each time based on the day
switch ($day)
{
    case 'Monday': 
        $cat= 'Maine Coon';
        $color= 'Blue';
        $image= 'img/cat11.jpg';
        $about= "The Maine Coon is the largest domesticated cat breed. It has a distinctive physical appearance and valuable hunting skills. It is one of the oldest natural breeds in North America, specifically native to the state of Maine, where it is the official state cat. The Maine Coon is a large and sociable cat, hence its nickname, \"the gentle giant.\" It is characterized by a prominent ruff along its chest, robust bone structure, rectangular body shape, an uneven two layered coat with longer guard hairs over a silky satin undercoat, and a long, bushy tail. The breed's colors vary widely, with only lilac and chocolate disallowed for pedigree. Reputed for its intelligence and playful, gentle personality, the Maine Coon is often cited as having \"dog-like\" characteristics.
        Maine Coons require ample protein and nutrients in their diets. Since they are a large cat breed with high levels of energy, it is best to feed them quality food. Food that lists meat as the first ingredient is best for the Maine Coon.";
    break;
        
case 'Tuesday': 
        $cat= 'Bengal';
        $color= 'Brown';
        $image= 'img/cat2.jpg';
        $about= "The Bengal cat is a domesticated cat breed created from hybrids of domestic cats, the Asian leopard cat (Prionailurus bengalensis) and the Egyptian Mau, which gives them their golden shimmer – the breed name comes from the taxonomic name.[1] Back-crossing to domestic cats is then done with the goal of creating a healthy, and docile cat with wild-looking, high-contrast coat. Bengals have a wild appearance and may show spots, rosettes, arrowhead markings, or marbling. 
        Bengal cats are smart, energetic and playful. Many Bengal owners say that their Bengal naturally retrieves items, and they often enjoy playing in water.";
    break;
    
    case 'Wednesday': 
        $cat= 'Russian Blue';
        $color= 'Grey';
        $image= 'img/cat3.jpg';
        $about= "The Russian Blue has bright green eyes, pinkish lavender or mauve paws, two layers of short thick fur, and a blue-grey coat. The color is a bluish-gray that is the dilute expression of the black gene.
        The Russian Blue is a curious and tranquil animal. They are known for their friendliness and intelligence and are somewhat reserved. They have been known to play fetch and open doors, and are sensitive to human emotions. They enjoy playing with a variety of toys and develop loyal bonds to their loved ones and other family pets. They are generally considered to be a quiet breed but there are always exceptions. They are normally reserved around strangers, unless they are brought up in an active household. Many Russian Blues have been trained to do tricks. They can also be fierce hunters, often catching rodents, birds, rabbits, small mammals, or reptiles.";
    break;
    
    case 'Thursday': 
        $cat= 'Siamese';
        $color= 'Red';
        $image= 'img/cat4.jpg';
        $about= "The Siamese cat is one of the first distinctly recognized breeds of Asian cat. Derived from the Wichianmat landrace, one of several varieties of cat native to Thailand (formerly known as Siam), the Siamese became one of the most popular breeds in Europe and North America in the 19th century. 
        Siamese are usually very affectionate and intelligent cats, renowned for their social nature. Many enjoy being with people and are sometimes described as \"extroverts\". Often they bond strongly to a single person. Some Siamese are extremely vocal, with a loud, low-pitched voice—known as \"Meezer\", from which they get one of their nicknames—that has been compared to the cries of a human baby, and persistent in demanding attention. These cats are typically active and playful, even as adults, and are often described as more dog-like in behavior than other cats. Siamese cats, due to their desire to be near people or other cats, occasionally suffer from depression or separation anxiety if left alone for long periods of time, and it is for this reason that Siamese cats are often bought in pairs so that they can keep each other company.";        
    break;
    
    case 'Friday': 
        $cat= 'Persian';
        $color= 'Black';
        $image= 'img/cat5.jpg';
        $about= "The Persian cat (Persian: گربه ایرانی, romanized: Gorbe Īrānī) is a long-haired breed of cat characterized by its round face and short muzzle. It is also known as the \"Persian Longhair\" in the English-speaking countries. In the Middle East region, they are widely known as \"Iranian cat\" and in Iran they are known as \"Shiraz cat\".
        A show-style Persian has an extremely long and thick coat, short legs, a wide head with the ears set far apart, large eyes, and an extremely shortened muzzle. The breed was originally established with a short muzzle, but over time, this characteristic has become extremely exaggerated, particularly in North America. Persian cats can have virtually any color or markings.
        The Persian is generally described as a quiet cat. Typically placid in nature, it adapts quite well to apartment life. Himalayans tend to be more active due to the influence of Siamese traits. In a study comparing cat owner perceptions of their cats, Persians rated higher than non-pedigree cats on closeness and affection to owners, friendliness towards strangers, cleanliness, predictability, vocalization, and fussiness over food.";        
    break;
    
    case 'Saturday': 
        $cat= 'Exotic Shorthair';
        $color= 'Purple';
        $image= 'img/cat6.jpg';
        $about= "The Exotic Shorthair is a breed of cat developed as a short-haired version of the Persian. The Exotic is similar to the Persian in many ways, including temperament and conformation, a flat nose and face with the exceptions of the short dense coat.
        The Exotic Shorthair meets every standard for the Persian breed, except for the coat.
        Exotic Shorthairs have a gentle and calm personality reminiscent of the Persian, but are generally livelier than their longhaired ancestors.[3] Curious and playful, they are friendly to other cats and dogs, but they don't like being left alone and need the presence of their owner. They tend to show more affection and loyalty than most breeds and make excellent lap cats. Their calm, steady nature makes them ideal apartment cats for city dwellers. Nonetheless, Exotics retain some of the energetic spark of the American Shorthair, and they are often capable mouse hunters.";
    break;
    
    case 'Sunday': 
        $cat= 'Himalayan';
        $color= 'Green';
        $image= 'img/cat7.jpg';
        $about= "The Himalayan (a.k.a. Himalayan Persian, or Colourpoint Persian as it is commonly referred to in Europe), is a breed or sub-breed of long-haired cat similar in type to the Persian, with the exception of its blue eyes and its point colouration, which were derived from crossing the Persian with the Siamese. Some registries may classify the Himalayan as a long-haired sub-breed of Siamese, or a colorpoint sub-breed of Persian. The World Cat Federation has merged them with the Colorpoint Shorthair and Javanese into a single breed, the Colorpoint.
        Himalayan cats are good indoor companions. By and large, they are sweet-tempered, intelligent, and generally very social, but they can be very moody at times. Because of their heritage from the Siamese cats, they tend to be more active than Persians. They possess a playful side as well. Like the Siamese, most Himalayans love to play fetch, and a scrap of crumpled paper or a kitty toy will entertain them for hours. Himalayan cats are devoted and dependent upon their humans for companionship and protection. They crave affection and love to be petted and groomed.";
    break; 
}
?>
<?php get_header()?>
        <h1> Today is <?=$day?> </h1>
        <br>
        <h3><?=$day?>'s cat is <b style="color:<?=$color?>"><?=$cat?></b></h3>
        <br>
        <aside>
            <img src="<?=$image?>" class="image.right" alt="" /> 
        </aside>
        <main>
            <p><b style="color:<?=$color?>"><?=$about?></b></p>
        </main>

        <p>Click below to view all of our special daily cats<p>
                  
              <p><a href="daily.php?day=Monday">Monday</a></p>
              <p><a href="daily.php?day=Tuesday">Tuesday</a> </p>
              <p><a href="daily.php?day=Wednesday">Wednesday</a></p>
              <p><a href="daily.php?day=Thursday">Thursday</a></p>
              <p><a href="daily.php?day=Friday">Friday</a></p>
              <p><a href="daily.php?day=Saturday">Saturday</a></p>
              <p><a href="daily.php?day=Sunday">Sunday</a></p>
 

              <?php get_footer()?>