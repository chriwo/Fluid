<?php
namespace NamelessCoder\Fluid\Core\Cache;

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

/**
 * Interface FluidCacheInterface
 *
 * Implemented by classes providing caching
 * features for the Fluid templates being rendered.
 */
interface FluidCacheInterface {

	/**
	 * Gets an entry from the cache or NULL if the
	 * entry does not exist.
	 *
	 * @param string $name
	 * @return mixed
	 */
	public function get($name);

	/**
	 * Set or updates an entry identified by $name
	 * into the cache.
	 *
	 * @param string $name
	 * @param mixed $value
	 * @return void
	 */
	public function set($name, $value);

	/**
	 * Flushes the cache either by entry or flushes
	 * the entire cache if no entry is provided.
	 *
	 * @param string|NULL $name
	 * @return void
	 */
	public function flush($name = NULL);

}
