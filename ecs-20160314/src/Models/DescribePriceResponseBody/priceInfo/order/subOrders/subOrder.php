<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePriceResponseBody\priceInfo\order\subOrders;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePriceResponseBody\priceInfo\order\subOrders\subOrder\ruleIdSet;
use AlibabaCloud\Tea\Model;

class subOrder extends Model
{
    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var ruleIdSet
     */
    public $ruleIdSet;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'discountPrice' => 'DiscountPrice',
        'instanceId'    => 'InstanceId',
        'originalPrice' => 'OriginalPrice',
        'ruleIdSet'     => 'RuleIdSet',
        'tradePrice'    => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->ruleIdSet) {
            $res['RuleIdSet'] = null !== $this->ruleIdSet ? $this->ruleIdSet->toMap() : null;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subOrder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['RuleIdSet'])) {
            $model->ruleIdSet = ruleIdSet::fromMap($map['RuleIdSet']);
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
