<?php

/**
 * This file is part of VkClient package.
 *
 * @author ATehnix <atehnix@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ATehnix\VkClient\Contracts;

/**
 * Interface ScriptableInterface
 *
 * @package ATehnix\VkClient
 */
interface ScriptableInterface
{
    /**
     * @return string
     */
    public function toScript();
}
