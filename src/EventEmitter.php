<?php

namespace Emeka;

use Emeka\EventEmitterInterface;

/**
 * EventEmitter
 */
class EventEmitter implements EventEmitterInterface
{
	
	function __construct()
	{
		# code...
	}

	public function on(string $event, callable $listener)
	{
	}

	public function removeListener(string $event, callable $listener){
		
	}

	public function removeAllListeners(string $event = null){

	}

	public function emit(string $event, ...$arguments){

	}

}