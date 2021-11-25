<?php

/*
 *
 *  ____                       _   _  ___.
 *  _  _ __ | |_| |/ (_)_ __ ___.
 * | ) | ''_ \| __| ' /| | '_ ` _ \.
 * |  __/| | |  __/\__ \  __/ | | | |_| .
 * |\_\_|_| |_| |_|.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Youtube :: Arzxy Modz
 * Github :: Arzxy
 * Discord :: https://discord.gg/QfVEVTY
 * License :: https://www.gnu.org/licenses/lgpl-3.0 LGPL-3.0 License
 *
 *   (\ /)
 *  ( . .) ♥
 *  c(")(")
 */

declare(strict_types=1);

namespace Arzxy;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class Main extends PluginBase{

    public function onEnable(): void
    {
    	$this->getLogger()->info("§bUnregister-Command Enabled By @Arzxy");
    
    
    	$string = $this->getConfig()->get("cmd-for-delete");
    $top = $this->getConfig()->get("unregister-cmd-enable");
    if($top == "true"){
    	$commands = $string;
        $map = $this->getServer()->getCommandMap();

     foreach ($commands as $cmd){
        $map->unregister($map->getCommand($cmd));
        }
     }
  }
}
