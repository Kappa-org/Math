<?php
/**
 * This file is part of the Kappa\Utils package.
 *
 * (c) Ondřej Záruba <zarubaondra@gmail.com>
 *
 * For the full copyright and license information, please view the license.md
 * file that was distributed with this source code.
 *
 * @testCase
 */

namespace KappaTests\Math;

use Kappa\Math\Math;
use Tester\Assert;
use Tester\TestCase;

require_once __DIR__ . '/../bootstrap.php';

/**
 * Class MathTest
 *
 * @package KappaTests\Math
 * @author Ondřej Záruba <http://zaruba-ondrej.cz>
 */
class MathTest extends TestCase
{
	public function testAverage()
	{
		Assert::same(9.75, Math::average(array(1,4,8,7,5,2,63,6,4,7,8,2)));
		$average = Math::average(array(1,4,8,7,5,2,63,6,4,7,8));
		Assert::true($average > 10.454545 && $average < 10.46);
	}

	public function testMedian()
	{
		Assert::same(5.5, Math::median(array(1,4,8,7,5,2,63,6,4,7,8,2)));
		Assert::same(6, Math::median(array(1,4,8,7,5,2,63,6,4,7,8)));
	}

	public function testMode()
	{
		Assert::same([7], Math::mode(array(1,2,3,4,4,5,6,7,7,7,8)));
		Assert::same([4, 7], Math::mode(array(1,2,3,4,4,4, 5,6,7,7,7,8)));
	}
}

\run(new MathTest());
