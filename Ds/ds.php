<?php

namespace Ds;


class Vector implements Ds\Sequence
{

	/**
	 * @var int
	 */
	const MIN_CAPACITY = 10;

	public function allocate( int $capacity ): void
	{
	}

	public function apply( callable $callback ): void
	{
	}

	public function capacity(): int
	{
	}

	public function clear(): void
	{
	}

	public function contains( ...$values ): bool
	{
	}

	public function copy(): Vector
	{
	}

	public function filter( callable $callback = null ): Vector
	{
	}

	/**
	 * @param mixed $value
	 */
	public function find( $value ): void
	{
	}

	/**
	 * @return mixed
	 */
	public function first()
	{
	}

	/**
	 * @param int $index
	 * @return mixed
	 */
	public function get( int $index )
	{
	}

	/**
	 * @param int $index
	 * @param array|mixed $values
	 */
	public function insert( int $index, $values ): void
	{
	}

	public function isEmpty(): bool
	{
	}

	/**
	 * @param string $glue
	 * @return string
	 */
	public function join( string $glue ): string
	{
	}

	/**
	 * @return mixed
	 */
	public function last()
	{
	}


	public function map( callable $callback ): Vector
	{
	}

	/**
	 * @param mixed $values
	 * @return Vector
	 */
	public function merge( $values ): Vector
	{
	}

	/**
	 * @return mixed
	 */
	public function pop()
	{
	}

	/**
	 * @param array|mixed $values
	 */
	public function push( $values ): void
	{
	}

	/**
	 * @param callable $callback
	 * @param  mixed $initial
	 * @return mixed
	 */
	public function reduce( callable $callback, $initial = null )
	{
	}

	/**
	 * @param int $index
	 * @return mixed
	 */
	public function remove( int $index )
	{
	}

	/**
	 *
	 */
	public function reverse(): void
	{
	}

	public function reversed(): Vector
	{
	}

	public function rotate( int $rotations ): void
	{
	}

	public function set( int $index, mixed $value ): void
	{
	}

	public function shift(): mixed
	{
	}

	/**
	 * @param int $index
	 * @param int $length
	 * @return Vector
	 */
	public function slice( int $index, int $length = 0 ): Vector
	{
	}

	/**
	 * @param callable $comparator
	 */
	public function sort( callable $comparator = null ): void
	{
	}

	public function sorted( callable $comparator = null ): Vector
	{
	}

	public function sum(): float
	{
	}

	public function toArray(): array
	{
	}

	/**
	 * @param array $values
	 */
	public function unshift( array $values = [] ): void
	{
	}
}