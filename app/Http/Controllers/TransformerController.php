<?php

namespace App\Http\Controllers;

use Surgiie\Transformer\Concerns\UsesTransformer;

class TransformerController extends Controller
{
    use UsesTransformer;

    public function show() 
    {
        $information = ' ' . __('Nissan Motor Co. and Honda Motor Co. have signed an agreement to cooperate in the development of electric vehicles (EV) in a bid to match other Japanese automakers that have formed similar partnerships.');
        echo __('Original information: ') . $information . PHP_EOL;
        $newValue = $this->transform($information, ['trim', function ($value) {
            return __('Japanese automakers lag behind companies in the United States and China in EV sales due mainly to their long history in producing gasoline vehicles.') . $value;
        }]);
        echo __('New information: ') . $newValue . PHP_EOL;
    }
}
