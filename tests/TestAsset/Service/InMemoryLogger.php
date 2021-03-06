<?php
/**
 * This file is part of the Phoundation package.
 *
 * Copyright (c) Nikola Posa
 *
 * For full copyright and license information, please refer to the LICENSE file,
 * located at the package root folder.
 */

declare(strict_types=1);

namespace Phoundation\Tests\TestAsset\Service;

use Psr\Log\AbstractLogger;

/**
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
class InMemoryLogger extends AbstractLogger
{
    protected $logs = [];

    public function log($level, $message, array $context = array())
    {
        $this->logs[] = [
            'level' => $level,
            'message' => $message,
            'context' => $context,
        ];
    }

    public function getLogs()
    {
        return $this->logs;
    }
}
