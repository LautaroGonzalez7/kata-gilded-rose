<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'src/Item.php';
require_once 'strategy/UpdateStrategyFactory.php';
require_once 'strategy/AgedBrieUpdateStrategy.php';
require_once 'strategy/BackstagePassesUpdateStrategy.php';
require_once 'strategy/CommonUpdateStrategy.php';
require_once 'strategy/ConjuredUpdateStrategy.php';
require_once 'strategy/SulfurasUpdateStrategy.php';
require_once 'strategy/UpdateStrategyInterface.php';

class NewGildedRose
{
    public static function updateQuality($items)
    {
        foreach ($items as $item) {
            $strategy = UpdateStrategyFactory::create($item);
            $strategy->update($item);
            var_dump($item);
            echo "<br>";
        }
    }
}