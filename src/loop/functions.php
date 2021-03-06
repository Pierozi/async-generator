<?php

/*
 * This file is part of the async generator runtime project.
 *
 * (c) Julien Bianchi <contact@jubianchi.fr>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

declare (strict_types = 1);

namespace jubianchi\async\loop;

require_once __DIR__ . '/../loop.php';

use jubianchi\async\loop;

/**
 * @api
 *
 * @param callable|mixed $condition
 * @param callable       $resolve
 *
 * @return \generator
 */
function whilst($condition, callable $resolve) : \generator
{
    return loop::whilst($condition, $resolve);
}

/**
 * @api
 *
 * @param callable|mixed $condition
 * @param callable       $resolve
 *
 * @return \generator
 */
function until($condition, callable $resolve) : \generator
{
    return loop::until($condition, $resolve);
}

/**
 * @api
 *
 * @param int      $time
 * @param callable $resolve
 *
 * @return \generator
 */
function times(int $times, callable $resolve) : \generator
{
    return loop::times($times, $resolve);
}

/**
 * @api
 *
 * @param callable $resolve
 *
 * @return \generator
 */
function endless(callable $resolve) : \generator
{
    return loop::endless($resolve);
}
