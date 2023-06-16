<?php

namespace yNearby\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat;
use yNearby\Loader;
use yNearby\manager\KitManager;

class KitCommand extends Command
{

    public function __construct(private Loader $plugin)
    {
        parent::__construct('kit', TextFormat::ITALIC . TextFormat::AQUA . 'Choose a kit!');
        $this->setPermission('kit.command');
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if ($sender instanceof Player) {
            if (!isset($args[0])) {
                $this->plugin->forms->kitMenu($sender);
            } else if ($args[0] === 'free') {
                KitManager::kit($sender, 'FREE');
            } else if ($args[0] === 'vip') {
                KitManager::kit($sender, 'VIP');
            } else if ($args[0] === 'booster') {
                KitManager::kit($sender, 'BOOSTER');
            } else {
                $sender->sendMessage(TextFormat::RED . 'Kit not found!');
            }
        } else {
            $sender->sendMessage('Use this command on game lmfao!');
        }
    }
}