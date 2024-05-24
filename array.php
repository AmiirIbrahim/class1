<?php
$user_data =[
    "fullname" =>  "Alex Okama",
    "email" =>  "Aokama@yahoo.com",
    "phone" =>  "0711111111"

];
print $user_data["email"];
?>
<pre>
    <?php print_r($user_data); ?>
</pre>

<?php
// Multidimentaniol Arrays

$user_details =[
    "Director" => array (
    "fullname" =>  "Alex Okama",
    "address"  => "Mada",
    "email" =>  "Aokama@yahoo.com",
    "phone" => [ 
    " Home" =>  "0711111111",
    "Work"  => "0721212121",
    "Mobile" => "0765656565",
    ]
    ),


 "Secretary" => array (
    "fullname" =>  "John Okama",
    "address"  => "karen",
    "email" =>  "jokama@yahoo.com",
    "phone" => [ 
    " Home" =>  "0722222222",
    "Work"  => "0731313131",
    "Mobile" => "0744444444",
    ]
    ),
];
print $user_details
["secretary"]["Work"]
?>
<pre>
    <?php print_r($user_data); ?>
</pre>
