<?php

/*
 * This file is part of the Alice package.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nelmio\Alice\Definition\Value;

use Nelmio\Alice\NotCallableTrait;
use Nelmio\Alice\ObjectInterface;

class FakeObject implements ObjectInterface
{
    use NotCallableTrait;
    
    public function getId(): string
    {
        $this->__call(__METHOD__, func_get_args());
    }
    
    public function getInstance(): object
    {
        $this->__call(__METHOD__, func_get_args());
    }
    
    public function withInstance($newInstance): static
    {
        $this->__call(__METHOD__, func_get_args());
    }
}
