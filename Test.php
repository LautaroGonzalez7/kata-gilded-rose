<?php
require_once 'src/Item.php';
require_once 'NewGildedRose.php';

$items[] = new Item("Normal", 25, 25);
$items[] = new Item("Conjured", 25, 25);
$items[] = new Item("Aged Brie", 25, 25);
$items[] = new Item("Item raro", 25, 25);
$items[] = new Item("Sulfuras", 25, 25);

NewGildedRose::updateQuality($items);