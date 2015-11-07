<?php

namespace FrontRunner\Bundle\ExtendCallBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FrontRunnerExtendCallBundle extends Bundle
{
	public function getParent()
    {
        return 'OroCRMCallBundle';
    }
}
