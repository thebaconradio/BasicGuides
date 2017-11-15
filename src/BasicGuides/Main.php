<?php

namespace BasicGuides;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat;
use pocketmine\item\Item;

class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getLogger()->info("BasicGuides enabled!");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onDisable(){
		$this->getServer()->getLogger()->info("BasicGuides disabled!");
	}
	
	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
		$name = $player->getName();
		$player->sendMessage(TextFormat::GREEN . "Hello " . TextFormat::BLUE . $name);
		
		$player->getInventory()->addItem(Item::get(340, 0, 1));
		
		$custom = Item::get(340, 0,1);
		$customName = $custom->setCustomName(TextFormat::GOLD . TextFormat::BOLD . "This is Custom Name");
		$player->getInventory()->addItem($customName);
	}
}
