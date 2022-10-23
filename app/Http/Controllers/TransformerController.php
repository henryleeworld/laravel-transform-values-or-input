<?php

namespace App\Http\Controllers;

use Surgiie\Transformer\Concerns\UsesTransformer;

class TransformerController extends Controller
{
    use UsesTransformer;

    public function show() 
    {
        $information = ' 樂天打完 8 局以 2：1 領先，9 局上豪勁只差 1 好球就結束比賽，被判壞球後被味全灌進 4 分超前，打線雖於 9 局下搶回 3 分逼出延長賽，兩隊加班 3 局都沒得分。';
        echo '原資訊：' . $information . PHP_EOL;
        $newValue = $this->transform($information, ['trim', function ($value) {
            return '樂天桃猿鏖戰 12 局以 5：5 與味全龍打和，奉送中信兄弟登上下半季冠軍，中信取得季後賽 1 勝 0 敗的優勢，擁有第 1、3、4 戰的主場優勢。' . $value;
        }]);
        echo '新資訊：' . $newValue . PHP_EOL;
    }
}
