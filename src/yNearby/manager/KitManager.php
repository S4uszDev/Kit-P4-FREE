<?php

namespace yNearby\manager;

use pocketmine\player\Player;
use pocketmine\item\enchantment\EnchantmentInstance;
use pocketmine\item\enchantment\VanillaEnchantments;
use pocketmine\item\VanillaItems;
use pocketmine\player\GameMode;
use pocketmine\utils\TextFormat;
use pocketmine\world\particle\HappyVillagerParticle;
use pocketmine\world\sound\XpLevelUpSound;

class KitManager {

    public static function kit(Player $player, String $kit): void
    {

        switch ($kit) {
            case 'FREE':
                $player->getInventory()->clearAll();
                $player->getEffects()->clear();
                $player->getArmorInventory()->clearAll();
                $player->setAbsorption(0);
                $player->getHungerManager()->setFood(20);
                $player->setHealth(20);
                $player->setGamemode(GameMode::ADVENTURE());

                $sword = VanillaItems::DIAMOND_SWORD();
                $swordKb = $sword;
                $helmet = VanillaItems::DIAMOND_HELMET();
                $chestplate = VanillaItems::DIAMOND_CHESTPLATE();
                $leggings = VanillaItems::DIAMOND_LEGGINGS();
                $boots = VanillaItems::DIAMOND_BOOTS();

                $protection = VanillaEnchantments::PROTECTION();
                $unbreaking = VanillaEnchantments::UNBREAKING();
                $sharpness = VanillaEnchantments::SHARPNESS();
                $knockback = VanillaEnchantments::KNOCKBACK();

                $helmet->addEnchantment(new EnchantmentInstance($protection, 4));
                $chestplate->addEnchantment(new EnchantmentInstance($protection, 4));
                $leggings->addEnchantment(new EnchantmentInstance($protection, 4));
                $boots->addEnchantment(new EnchantmentInstance($protection, 4));

                $helmet->addEnchantment(new EnchantmentInstance($unbreaking, 3));
                $chestplate->addEnchantment(new EnchantmentInstance($unbreaking, 3));
                $leggings->addEnchantment(new EnchantmentInstance($unbreaking, 3));
                $boots->addEnchantment(new EnchantmentInstance($unbreaking, 3));

                $sword->addEnchantment(new EnchantmentInstance($unbreaking, 3));
                $sword->addEnchantment(new EnchantmentInstance($sharpness, 4));

                $swordKb->addEnchantment(new EnchantmentInstance($unbreaking, 3));
                $swordKb->addEnchantment(new EnchantmentInstance($sharpness, 4));
                $swordKb->addEnchantment(new EnchantmentInstance($knockback, 2));

                $enchantedApple = VanillaItems::ENCHANTED_GOLDEN_APPLE()->setCount(64);
                $potion = VanillaItems::STRONG_STRENGTH_POTION();

                $player->getArmorInventory()->setHelmet($helmet);
                $player->getArmorInventory()->setChestplate($chestplate);
                $player->getArmorInventory()->setLeggings($leggings);
                $player->getArmorInventory()->setBoots($boots);

                $player->getInventory()->setItem(0, $sword);
                $player->getInventory()->setItem(1, $enchantedApple);
                $player->getInventory()->setItem(6, $swordKb);
                $player->getInventory()->setItem(7, $potion);


                $player->getInventory()->setItem(9, $helmet);
                $player->getInventory()->setItem(18, $helmet);
                $player->getInventory()->setItem(27, $helmet);
                $player->getInventory()->setItem(13, $helmet);
                $player->getInventory()->setItem(22, $helmet);
                $player->getInventory()->setItem(31, $helmet);
                $player->getInventory()->setItem(2, $helmet);
                $player->getInventory()->setItem(35, $helmet);
                $player->getInventory()->setItem(8, $helmet);

                $player->getInventory()->setItem(10, $chestplate);
                $player->getInventory()->setItem(19, $chestplate);
                $player->getInventory()->setItem(28, $chestplate);
                $player->getInventory()->setItem(14, $chestplate);
                $player->getInventory()->setItem(23, $chestplate);
                $player->getInventory()->setItem(32, $chestplate);
                $player->getInventory()->setItem(3, $chestplate);

                $player->getInventory()->setItem(11, $leggings);
                $player->getInventory()->setItem(20, $leggings);
                $player->getInventory()->setItem(29, $leggings);
                $player->getInventory()->setItem(15, $leggings);
                $player->getInventory()->setItem(24, $leggings);
                $player->getInventory()->setItem(33, $leggings);
                $player->getInventory()->setItem(4, $leggings);

                $player->getInventory()->setItem(12, $boots);
                $player->getInventory()->setItem(21, $boots);
                $player->getInventory()->setItem(30, $boots);
                $player->getInventory()->setItem(16, $boots);
                $player->getInventory()->setItem(25, $boots);
                $player->getInventory()->setItem(34, $boots);
                $player->getInventory()->setItem(5, $boots);
                $player->getInventory()->setItem(17, $boots);
                $player->getInventory()->setItem(26, $boots);

                $player->sendMessage(TextFormat::ITALIC . TextFormat::AQUA . 'Successfully kitted!');

                $player->getWorld()->addSound($player->getPosition(), new XpLevelUpSound(30), [$player]);
                $player->getWorld()->addParticle($player->getPosition(), new HappyVillagerParticle(), [$player]);
                break;
            case 'VIP':
                $player->getInventory()->clearAll();
                $player->getEffects()->clear();
                $player->getArmorInventory()->clearAll();
                $player->setAbsorption(0);
                $player->getHungerManager()->setFood(20);
                $player->setHealth(20);
                $player->setGamemode(GameMode::ADVENTURE());

                $sword = VanillaItems::DIAMOND_SWORD();
                $swordKb = $sword;
                $helmet = VanillaItems::DIAMOND_HELMET();
                $chestplate = VanillaItems::DIAMOND_CHESTPLATE();
                $leggings = VanillaItems::DIAMOND_LEGGINGS();
                $boots = VanillaItems::DIAMOND_BOOTS();

                $protection = VanillaEnchantments::PROTECTION();
                $unbreaking = VanillaEnchantments::UNBREAKING();
                $sharpness = VanillaEnchantments::SHARPNESS();
                $knockback = VanillaEnchantments::KNOCKBACK();

                $helmet->addEnchantment(new EnchantmentInstance($protection, 6));
                $chestplate->addEnchantment(new EnchantmentInstance($protection, 6));
                $leggings->addEnchantment(new EnchantmentInstance($protection, 6));
                $boots->addEnchantment(new EnchantmentInstance($protection, 6));

                $helmet->addEnchantment(new EnchantmentInstance($unbreaking, 3));
                $chestplate->addEnchantment(new EnchantmentInstance($unbreaking, 3));
                $leggings->addEnchantment(new EnchantmentInstance($unbreaking, 3));
                $boots->addEnchantment(new EnchantmentInstance($unbreaking, 3));

                $sword->addEnchantment(new EnchantmentInstance($unbreaking, 5));
                $sword->addEnchantment(new EnchantmentInstance($sharpness, 6));

                $swordKb->addEnchantment(new EnchantmentInstance($unbreaking, 3));
                $swordKb->addEnchantment(new EnchantmentInstance($sharpness, 4));
                $swordKb->addEnchantment(new EnchantmentInstance($knockback, 2));

                $enchantedApple = VanillaItems::ENCHANTED_GOLDEN_APPLE()->setCount(64);
                $potion = VanillaItems::STRONG_STRENGTH_POTION();

                $player->getArmorInventory()->setHelmet($helmet);
                $player->getArmorInventory()->setChestplate($chestplate);
                $player->getArmorInventory()->setLeggings($leggings);
                $player->getArmorInventory()->setBoots($boots);

                $player->getInventory()->setItem(0, $sword);
                $player->getInventory()->setItem(1, $enchantedApple);
                $player->getInventory()->setItem(6, $swordKb);
                $player->getInventory()->setItem(7, $potion);


                $player->getInventory()->setItem(9, $helmet);
                $player->getInventory()->setItem(18, $helmet);
                $player->getInventory()->setItem(27, $helmet);
                $player->getInventory()->setItem(13, $helmet);
                $player->getInventory()->setItem(22, $helmet);
                $player->getInventory()->setItem(31, $helmet);
                $player->getInventory()->setItem(2, $helmet);
                $player->getInventory()->setItem(35, $helmet);
                $player->getInventory()->setItem(8, $helmet);

                $player->getInventory()->setItem(10, $chestplate);
                $player->getInventory()->setItem(19, $chestplate);
                $player->getInventory()->setItem(28, $chestplate);
                $player->getInventory()->setItem(14, $chestplate);
                $player->getInventory()->setItem(23, $chestplate);
                $player->getInventory()->setItem(32, $chestplate);
                $player->getInventory()->setItem(3, $chestplate);

                $player->getInventory()->setItem(11, $leggings);
                $player->getInventory()->setItem(20, $leggings);
                $player->getInventory()->setItem(29, $leggings);
                $player->getInventory()->setItem(15, $leggings);
                $player->getInventory()->setItem(24, $leggings);
                $player->getInventory()->setItem(33, $leggings);
                $player->getInventory()->setItem(4, $leggings);

                $player->getInventory()->setItem(12, $boots);
                $player->getInventory()->setItem(21, $boots);
                $player->getInventory()->setItem(30, $boots);
                $player->getInventory()->setItem(16, $boots);
                $player->getInventory()->setItem(25, $boots);
                $player->getInventory()->setItem(34, $boots);
                $player->getInventory()->setItem(5, $boots);
                $player->getInventory()->setItem(17, $boots);
                $player->getInventory()->setItem(26, $boots);

                $player->sendMessage(TextFormat::ITALIC . TextFormat::AQUA . 'Successfully kitted!');

                $player->getWorld()->addSound($player->getPosition(), new XpLevelUpSound(30), [$player]);
                $player->getWorld()->addParticle($player->getPosition(), new HappyVillagerParticle(), [$player]);
                break;
            case 'BOOSTER':
                $player->getInventory()->clearAll();
                $player->getEffects()->clear();
                $player->getArmorInventory()->clearAll();
                $player->setAbsorption(0);
                $player->getHungerManager()->setFood(20);
                $player->setHealth(20);
                $player->setGamemode(GameMode::ADVENTURE());

                $sword = VanillaItems::DIAMOND_SWORD();
                $swordKb = $sword;
                $helmet = VanillaItems::DIAMOND_HELMET();
                $chestplate = VanillaItems::DIAMOND_CHESTPLATE();
                $leggings = VanillaItems::DIAMOND_LEGGINGS();
                $boots = VanillaItems::DIAMOND_BOOTS();

                $protection = VanillaEnchantments::PROTECTION();
                $unbreaking = VanillaEnchantments::UNBREAKING();
                $sharpness = VanillaEnchantments::SHARPNESS();
                $knockback = VanillaEnchantments::KNOCKBACK();

                $helmet->addEnchantment(new EnchantmentInstance($protection, 5));
                $chestplate->addEnchantment(new EnchantmentInstance($protection, 5));
                $leggings->addEnchantment(new EnchantmentInstance($protection, 5));
                $boots->addEnchantment(new EnchantmentInstance($protection, 5));

                $helmet->addEnchantment(new EnchantmentInstance($unbreaking, 3));
                $chestplate->addEnchantment(new EnchantmentInstance($unbreaking, 3));
                $leggings->addEnchantment(new EnchantmentInstance($unbreaking, 3));
                $boots->addEnchantment(new EnchantmentInstance($unbreaking, 3));

                $sword->addEnchantment(new EnchantmentInstance($unbreaking, 5));
                $sword->addEnchantment(new EnchantmentInstance($sharpness, 5));

                $swordKb->addEnchantment(new EnchantmentInstance($unbreaking, 3));
                $swordKb->addEnchantment(new EnchantmentInstance($sharpness, 4));
                $swordKb->addEnchantment(new EnchantmentInstance($knockback, 2));

                $enchantedApple = VanillaItems::ENCHANTED_GOLDEN_APPLE()->setCount(64);
                $potion = VanillaItems::STRONG_STRENGTH_POTION();

                $player->getArmorInventory()->setHelmet($helmet);
                $player->getArmorInventory()->setChestplate($chestplate);
                $player->getArmorInventory()->setLeggings($leggings);
                $player->getArmorInventory()->setBoots($boots);

                $player->getInventory()->setItem(0, $sword);
                $player->getInventory()->setItem(1, $enchantedApple);
                $player->getInventory()->setItem(6, $swordKb);
                $player->getInventory()->setItem(7, $potion);


                $player->getInventory()->setItem(9, $helmet);
                $player->getInventory()->setItem(18, $helmet);
                $player->getInventory()->setItem(27, $helmet);
                $player->getInventory()->setItem(13, $helmet);
                $player->getInventory()->setItem(22, $helmet);
                $player->getInventory()->setItem(31, $helmet);
                $player->getInventory()->setItem(2, $helmet);
                $player->getInventory()->setItem(35, $helmet);
                $player->getInventory()->setItem(8, $helmet);

                $player->getInventory()->setItem(10, $chestplate);
                $player->getInventory()->setItem(19, $chestplate);
                $player->getInventory()->setItem(28, $chestplate);
                $player->getInventory()->setItem(14, $chestplate);
                $player->getInventory()->setItem(23, $chestplate);
                $player->getInventory()->setItem(32, $chestplate);
                $player->getInventory()->setItem(3, $chestplate);

                $player->getInventory()->setItem(11, $leggings);
                $player->getInventory()->setItem(20, $leggings);
                $player->getInventory()->setItem(29, $leggings);
                $player->getInventory()->setItem(15, $leggings);
                $player->getInventory()->setItem(24, $leggings);
                $player->getInventory()->setItem(33, $leggings);
                $player->getInventory()->setItem(4, $leggings);

                $player->getInventory()->setItem(12, $boots);
                $player->getInventory()->setItem(21, $boots);
                $player->getInventory()->setItem(30, $boots);
                $player->getInventory()->setItem(16, $boots);
                $player->getInventory()->setItem(25, $boots);
                $player->getInventory()->setItem(34, $boots);
                $player->getInventory()->setItem(5, $boots);
                $player->getInventory()->setItem(17, $boots);
                $player->getInventory()->setItem(26, $boots);

                $player->sendMessage(TextFormat::ITALIC . TextFormat::AQUA . 'Successfully kitted!');

                $player->getWorld()->addSound($player->getPosition(), new XpLevelUpSound(30), [$player]);
                $player->getWorld()->addParticle($player->getPosition(), new HappyVillagerParticle(), [$player]);
                break;

        }
    }
}