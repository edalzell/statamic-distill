<?php

namespace JackSleight\StatamicDistill\Modifiers;

use Exception;
use JackSleight\StatamicDistill\Facades\Distill as DistillFacade;
use Statamic\Fields\Value;
use Statamic\Modifiers\Modifier;

class DistillText extends Modifier
{
    public function index($value)
    {
        if (! $value instanceof Value) {
            throw new Exception('The distill_text modifier is only supported from Blade/PHP');
        }

        return DistillFacade::text($value);
    }
}
