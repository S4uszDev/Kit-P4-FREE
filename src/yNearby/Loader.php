<?php

namespace yNearby;

use pocketmine\plugin\PluginBase;
use yNearby\command\KitCommand;
use yNearby\manager\KitManager;

class Loader extends PluginBase
{

    public ?Forms $forms = null;
    public ?KitManager $kitsManager;

    public function onEnable(): void
    {
        $this->getServer()->getLogger()->info('§aPlugin started successfully');
        $this->forms = new Forms();
        $this->kitsManager = new KitManager();
        $this->getServer()->getCommandMap()->register('kit', new KitCommand($this));
    }

}