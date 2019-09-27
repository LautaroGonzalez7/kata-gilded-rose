<?php
require_once 'UpdateStrategyInterface.php';

class BackstagePassesUpdateStrategy implements UpdateStrategyInterface
{
    public function update(Item $item)
    {
        if ($item->getSellIn() < 0) {
            $item->setQuality(0);
        } elseif ($item->getSellIn() <= 5) {
            if ($item->getQuality() + 2 < 50) {
                $item->setQuality($item->getQuality() + 3);
            }
        } elseif ($item->getSellIn() <= 10) {
            if ($item->getQuality() + 1 < 50) {
                $item->setQuality($item->getQuality() + 2);
            }
        } elseif ($item->getSellIn() > 10) {
            if ($item->getQuality() < 50) {
                $item->setQuality($item->getQuality() + 1);
            }
        }

        if ($item->getQuality() < 0) {
            $item->setQuality(0);
        }

        $item->setSellIn($item->getSellIn() - 1);
    }
}