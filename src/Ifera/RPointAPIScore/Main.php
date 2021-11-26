<?php
declare(strict_types = 1);

namespace Ifera\RPointAPIScore;

use Ifera\RPointAPIScore\listeners\EventListener;
use Ifera\RPointAPIScore\listeners\TagResolveListener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

	public function onEnable(){
	    $this->rpoint = $this->getServer()->getPluginManager()->getPlugin("RPointAPI");

		$this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
		$this->getServer()->getPluginManager()->registerEvents(new TagResolveListener($this), $this);
	}
}
