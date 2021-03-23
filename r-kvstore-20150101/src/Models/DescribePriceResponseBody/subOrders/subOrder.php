<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\ruleIds;
use AlibabaCloud\Tea\Model;

class subOrder extends Model
{
    /**
     * @var string
     */
    public $originalAmount;

    /**
     * @var string
     */
    public $tradeAmount;

    /**
     * @var string
     */
    public $discountAmount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var ruleIds
     */
    public $ruleIds;
    protected $_name = [
        'originalAmount' => 'OriginalAmount',
        'tradeAmount'    => 'TradeAmount',
        'discountAmount' => 'DiscountAmount',
        'instanceId'     => 'InstanceId',
        'ruleIds'        => 'RuleIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }
        if (null !== $this->tradeAmount) {
            $res['TradeAmount'] = $this->tradeAmount;
        }
        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = null !== $this->ruleIds ? $this->ruleIds->toMap() : null;
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
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }
        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }
        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RuleIds'])) {
            $model->ruleIds = ruleIds::fromMap($map['RuleIds']);
        }

        return $model;
    }
}
