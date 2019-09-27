<?php
require_once 'UpdateStrategyInterface.php';

class CommonUpdateStrategy implements UpdateStrategyInterface
{
    public function update(Item $item)
    {
        if ($item->getSellIn() < 0) {
            if ($item->getQuality() - 1 > 0) {
                $item->setQuality($item->getQuality() - 2);
            }
        } else {
            if ($item->getQuality() > 0) {
                $item->setQuality($item->getQuality() - 1);
            }
        }

        if ($item->getQuality() < 0) {
            $item->setQuality(0);
        }

        $item->setSellIn($item->getSellIn() - 1);
    }
}