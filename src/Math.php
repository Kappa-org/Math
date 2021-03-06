<?php
/**
 * This file is part of the Kappa\Math package.
 *
 * (c) Ondřej Záruba <zarubaondra@gmail.com>
 *
 * For the full copyright and license information, please view the license.md
 * file that was distributed with this source code.
 */

namespace Kappa\Math;

/**
 * Class Math
 *
 * @package Kappa\Math
 * @author Ondřej Záruba <http://zaruba-ondrej.cz>
 */
class Math
{
	/**
	 * @param array $items
	 * @return float
	 */
	public static function average(array $items)
	{
		return array_sum($items) / count($items);
	}

	/**
	 * @param array $items
	 * @return float
	 */
	public static function median(array $items)
	{
		sort($items);
		$midst = (int)floor(count($items) / 2);
		if (count($items) % 2 == 0) {
			$median = self::average([$items[$midst], $items[$midst - 1]]);

			return $median;
		} else {
			return $items[$midst];
		}
	}

	/**
	 * @param array $items
	 * @return array
	 */
	public static function mode(array $items)
	{
		$counted = array_count_values($items);
		$max = max($counted);
		$filtered = array_filter($counted, function($val) use($max) {return $val == $max;});
		$keys = array_keys($filtered);

		return $keys;
	}
}
