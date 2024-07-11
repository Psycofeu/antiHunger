<?php

namespace psycofeu\antiHunger;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerExhaustEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{
    protected function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->notice("Plugin enable");
    }
    public function onExauh(PlayerExhaustEvent $event)
    {
        $event->cancel();
    }
}