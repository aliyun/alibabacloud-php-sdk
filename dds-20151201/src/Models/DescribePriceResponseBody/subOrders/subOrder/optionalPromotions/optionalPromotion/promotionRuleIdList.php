<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\optionalPromotions\optionalPromotion;

use AlibabaCloud\Tea\Model;

class promotionRuleIdList extends Model
{
    /**
     * @var string[]
     */
    public $promotionRuleId;
    protected $_name = [
        'promotionRuleId' => 'promotionRuleId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->promotionRuleId) {
            $res['promotionRuleId'] = $this->promotionRuleId;
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
        if (isset($map['promotionRuleId'])) {
            if (!empty($map['promotionRuleId'])) {
                $model->promotionRuleId = $map['promotionRuleId'];
            }
        }

        return $model;
    }
}
