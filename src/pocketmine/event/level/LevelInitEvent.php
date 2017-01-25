<?php



namespace pocketmine\event\level;

/**
 * Called when a Level is initializing
 */
class LevelInitEvent extends LevelEvent{

	public static $handlerList = null;

	/**
	 * @return EventName
	 */
	public function getName(){
		return "LevelInitEvent";
	}

}