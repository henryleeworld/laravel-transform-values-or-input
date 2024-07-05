<?php

namespace App\Http\Controllers;

use Surgiie\Transformer\Concerns\UsesTransformer;

class TransformerController extends Controller
{
    use UsesTransformer;

    public function show() 
    {
        $information = ' 玉山銀行長期支持臺灣青棒，已連續 17 年贊助玉山盃全國青棒錦標賽，用心打造玉山盃成為「臺灣甲子園」。';
        echo '原資訊：' . $information . PHP_EOL;
        $newValue = $this->transform($information, ['trim', function ($value) {
            return '玉山銀行每年攜手中華棒協、臺灣世界少棒聯盟引進職棒水準師資組成各專項訓練營，期望持續提升國內青棒水準。' . $value;
        }]);
        echo '新資訊：' . $newValue . PHP_EOL;
    }
}
