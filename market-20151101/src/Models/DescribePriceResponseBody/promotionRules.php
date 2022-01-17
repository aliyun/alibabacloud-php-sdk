<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribePriceResponseBody;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribePriceResponseBody\promotionRules\promotionRule;
use AlibabaCloud\Tea\Model;

class promotionRules extends Model
{
    /**
     * @var promotionRule[]
     */
    public $promotionRule;
    protected $_name = [
        'promotionRule' => 'PromotionRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->promotionRule) {
            $res['PromotionRule'] = [];
            if (null !== $this->promotionRule && \is_array($this->promotionRule)) {
                $n = 0;
                foreach ($this->promotionRule as $item) {
                    $res['PromotionRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promotionRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PromotionRule'])) {
            if (!empty($map['PromotionRule'])) {
                $model->promotionRule = [];
                $n                    = 0;
                foreach ($map['PromotionRule'] as $item) {
                    $model->promotionRule[$n++] = null !== $item ? promotionRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
