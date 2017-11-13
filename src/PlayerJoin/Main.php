<?php

namespace BasicGuides;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

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
		$player->sendMessage("Hello Player");
	}
}
