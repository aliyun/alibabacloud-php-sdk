<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\order\coupons\coupon;

use AlibabaCloud\Dara\Model;

class promotionRuleIdList extends Model
{
    /**
     * @var int[]
     */
    public $promotionRuleId;
    protected $_name = [
        'promotionRuleId' => 'PromotionRuleId',
    ];

    public function validate()
    {
        if (\is_array($this->promotionRuleId)) {
            Model::validateArray($this->promotionRuleId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->promotionRuleId) {
            if (\is_array($this->promotionRuleId)) {
                $res['PromotionRuleId'] = [];
                $n1 = 0;
                foreach ($this->promotionRuleId as $item1) {
                    $res['PromotionRuleId'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['PromotionRuleId'])) {
            if (!empty($map['PromotionRuleId'])) {
                $model->promotionRuleId = [];
                $n1 = 0;
                foreach ($map['PromotionRuleId'] as $item1) {
                    $model->promotionRuleId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
