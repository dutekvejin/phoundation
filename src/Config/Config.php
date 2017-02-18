<?php
/**
 * This file is part of the PHP App Foundation package.
 *
 * Copyright (c) Nikola Posa
 *
 * For full copyright and license information, please refer to the LICENSE file,
 * located at the package root folder.
 */

declare(strict_types=1);

namespace Foundation\Config;

use ArrayObject;

/**
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
final class Config extends ArrayObject
{
    public static function fromArray(array $config)
    {
        return new self($config);
    }
}
