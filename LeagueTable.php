<?php
/**
 * Created by PhpStorm.
 * User: dave
 * Date: 26/04/2018
 * Time: 9:59 AM
 */


class LeagueTable
{
    public function __construct($players)
    {
        $this->standings = array();
        foreach($players as $index => $p)
        {
            $this->standings[$p] = array
            (
                'index' => $index,
                'games_played' => 0,
                'score' => 0
            );
        }
    }

    public function recordResult($player, $score)
    {
        $this->standings[$player]['games_played']++;
        $this->standings[$player]['score'] += $score;
    }

    public function playerRank($rank)
    {
        return NULL;
    }
}

$table = new LeagueTable(array('Mike', 'Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);
echo $table->playerRank(1);