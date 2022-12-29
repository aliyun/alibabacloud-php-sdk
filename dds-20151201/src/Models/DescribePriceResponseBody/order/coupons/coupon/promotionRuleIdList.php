<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\order\coupons\coupon;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->promotionRuleId) {
            $res['PromotionRuleId'] = $this->promotionRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promotionRuleIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PromotionRuleId'])) {
            if (!empty($map['PromotionRuleId'])) {
                $model->promotionRuleId = $map['PromotionRuleId'];
            }
        }

        return $model;
    }
}
