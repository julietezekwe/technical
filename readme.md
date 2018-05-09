# Gloo.ng Interview Questions

## Instructions
You are to answer either Question 1 or any other 2 questions below

### Question 1 (100 Marks)

The LeagueTable class tracks the score of each player in a league. After each game, the player records their score with the recordResult function.

The player's rank in the league is calculated using the following logic:

The player with the highest score is ranked first (rank 1). The player with the lowest score is ranked last.
If two players are tied on score, then the player who has played the fewest games is ranked higher.
If two players are tied on score and number of games played, then the player who was first in the list of players is ranked higher.
Implement the playerRank function that returns the player at the given rank.

For example:
#### PHP
```php
$table = new LeagueTable(array('Mike', 'Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);
echo $table->playerRank(1);
```

#### Javascript
```javascript
 var table = new LeagueTable(['Mike', 'Chris', 'Arnold' ])
 table.recordResult('Mike', 2)
 table.recordResult('Mike', 3)
 table.recordResult('Arnold', 5)
 table.recordResult('Chris', 5)
 console.log(table.playerRank(1)

```

All players have the same score. However, Arnold and Chris have played fewer games than Mike, and as Chris is before Arnold in the list of players, he is ranked first. Therefore, the code above should display "Chris".


### Question 2 (50 Marks)


Given the input array below as an input, write a function to output it as a bullet list.

#### PHP
```php
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
]
```

### Question 3 (50 Marks)

A palindrome is a word that reads the same backward or forward.

Write a function that checks if a given word is a palindrome. Character case should be ignored.

For example, isPalindrome("Deleveled") should return true as character case should be ignored, resulting in "deleveled", which is a palindrome since it reads the same backward and forward.

