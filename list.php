<?php
function listArr($categories){
    echo "<ul>" ;
  foreach($categories as $category => $value){
     
        echo "<ul>" ; 
        echo "<li>".$category."</li>";
        echo "</ul>" ;
        if(is_array($value)){
          listArr($value);
      }
      else{
          echo "<ul>";
          echo "<li> ". $value. "</li>";
          echo "</ul>";
      }
  
}
echo "</ul>" ;
}

$categoryItems = [
    "Food & Drinks"=>[
        "Drinks"=>[
            "Beverages"=>[
                "Alcoholic Beverages"=>[
                    "Wines & Spirits"=>[
                        "Wines"=>[
                            "Red Wine",
                            "White Wine"
                        ],
                        "Spirits"
                    ],
                    "Beer"
                ]
            ]
        ],
        "Dairy Foods"=>[
            "Milk"=>[
                "Powdered Milk",
                "Tin Milk"
            ],
            "Egg"
        ],
        "Snacks & Candy"=>[
            "Biscuits",
            "Cookies",
            "Gum"
        ]
    ],
    "Home Essentials"=>[
        "Utensils"=>[
            "Frying Pans",
            "Plates"
        ],
        "Laundry",
        "Electrical & Tools"
    ],
    "Beauty & Personal Care",
    "Home Decor"
];
 

listArr($categoryItems);