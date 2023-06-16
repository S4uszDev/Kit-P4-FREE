<?php

namespace yNearby;

use pocketmine\player\Player;
use pocketmine\utils\TextFormat;
use yNearby\forms\SimpleForm;
use yNearby\manager\KitManager;

class Forms {

    public function kitMenu(Player $player): void {
        $form = new SimpleForm(function (Player $player, $data = null): void {
            if (is_null($data)) {
                return;
            }

            switch ($data) {
                case 0:
                    KitManager::kit($player, 'FREE');
                    break;
                case 1:
                    KitManager::kit($player, 'VIP');
                    break;
                case 2:
                    KitManager::kit($player, 'BOOSTER');
                    break;
            }
        });
        $form->setTitle('Kits');
        $form->addButton(TextFormat::AQUA . 'P4 FREE' . TextFormat::DARK_GRAY . TextFormat::EOL . TextFormat::ITALIC . '(Click to get!)');
        $form->addButton(TextFormat::AQUA . 'P4 VIP' . TextFormat::DARK_GRAY . TextFormat::EOL . TextFormat::ITALIC . '(Click to get!)');
        $form->addButton(TextFormat::AQUA . 'P4 BOOSTER' . TextFormat::DARK_GRAY . TextFormat::EOL . TextFormat::ITALIC . '(Click to get!)');
        $form->sendToPlayer($player);
    }
}