<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRenewalPriceResponseBody\subOrders;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRenewalPriceResponseBody\subOrders\subOrder\ruleIds;
use AlibabaCloud\Tea\Model;

class subOrder extends Model
{
    /**
     * @var float
     */
    public $discountAmount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var float
     */
    public $originalAmount;

    /**
     * @var ruleIds
     */
    public $ruleIds;

    /**
     * @var float
     */
    public $tradeAmount;
    protected $_name = [
        'discountAmount' => 'DiscountAmount',
        'instanceId'     => 'InstanceId',
        'originalAmount' => 'OriginalAmount',
        'ruleIds'        => 'RuleIds',
        'tradeAmount'    => 'TradeAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = null !== $this->ruleIds ? $this->ruleIds->toMap() : null;
        }
        if (null !== $this->tradeAmount) {
            $res['TradeAmount'] = $this->tradeAmount;
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
        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }
        if (isset($map['RuleIds'])) {
            $model->ruleIds = ruleIds::fromMap($map['RuleIds']);
        }
        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }

        return $model;
    }
}
