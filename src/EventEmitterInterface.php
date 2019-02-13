<?php  

namespace Emeka;

interface EventEmitterInterface {
	/**
	 * [on description]
	 * @param  string   $event    [description]
	 * @param  callable $listener [description]
	 * @return [type]             [description]
	 */
	public function on(string $event, callable $listener);

	/**
	 * [removeListener description]
	 * @param  string   $event [description]
	 * @param  callable $event [description]
	 * @return [type]          [description]
	 */
	public function removeListener(string $event, callable $listener); public function removeAllListeners(string $event = null);

	/**
	 * [emit description]
	 * @param  string $event     [description]
	 * @param  [type] $arguments [description]
	 * @return [type]            [description]
	 */
	public function emit(string $event, ...$arguments);
}