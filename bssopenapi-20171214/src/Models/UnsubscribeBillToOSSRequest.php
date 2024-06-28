<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class UnsubscribeBillToOSSRequest extends Model
{
    /**
     * @description The type of accounts whose bills are to be pushed if multi-tier accounts are involved. Valid values:
     *
     *   MA: management account.
     *   ACP1: member account of a virtual network operator (VNO).
     *
     * Default value: MA.
     * @example MA
     *
     * @var string
     */
    public $multAccountRelSubscribe;

    /**
     * @description The type of the bill to which you want to subscribe. Valid values:
     *
     *   BillingItemDetailForBillingPeriod: bills of billable items
     *   InstanceDetailForBillingPeriod: bills of instances
     *   BillingItemDetailMonthly: billable item-based bills summarized by billing cycle
     *   InstanceDetailMonthly: instance-based bills summarized by billing cycle
     *   SplitItemDetailDaily: split bills summarized by day
     *   MonthBill: monthly bills in the PDF format You can subscribe to the monthly PDF bills only of the master account.
     *
     * This parameter is required.
     * @example BillingItemDetailForBillingPeriod
     *
     * @var string
     */
    public $subscribeType;
    protected $_name = [
        'multAccountRelSubscribe' => 'MultAccountRelSubscribe',
        'subscribeType'           => 'SubscribeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->multAccountRelSubscribe) {
            $res['MultAccountRelSubscribe'] = $this->multAccountRelSubscribe;
        }
        if (null !== $this->subscribeType) {
            $res['SubscribeType'] = $this->subscribeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnsubscribeBillToOSSRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MultAccountRelSubscribe'])) {
            $model->multAccountRelSubscribe = $map['MultAccountRelSubscribe'];
        }
        if (isset($map['SubscribeType'])) {
            $model->subscribeType = $map['SubscribeType'];
        }

        return $model;
    }
}
