<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribePriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribePriceResponseBody\promotionRules\promotionRule;

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
        if (\is_array($this->promotionRule)) {
            Model::validateArray($this->promotionRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->promotionRule) {
            if (\is_array($this->promotionRule)) {
                $res['PromotionRule'] = [];
                $n1                   = 0;
                foreach ($this->promotionRule as $item1) {
                    $res['PromotionRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PromotionRule'])) {
            if (!empty($map['PromotionRule'])) {
                $model->promotionRule = [];
                $n1                   = 0;
                foreach ($map['PromotionRule'] as $item1) {
                    $model->promotionRule[$n1++] = promotionRule::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
