<?php
require_once 'UpdateStrategyInterface.php';

class UpdateStrategyFactory
{
    public static function create(Item $item)
    {
        if (strpos(strval($item->getName()), 'Aged Brie') !== false) {
            return new AgedBrieUpdateStrategy();
        } elseif (strpos($item->getName(), 'Sulfuras') !== false) {
            return new SulfurasUpdateStrategy();
        } elseif (strpos($item->getName(), 'Backstage passes') !== false) {
            return new BackstagePassesUpdateStrategy();
        } elseif (strpos($item->getName(), 'Conjured') !== false) {
            return new ConjuredUpdateStrategy();
        } else {
            return new CommonUpdateStrategy();
        }
    }
}