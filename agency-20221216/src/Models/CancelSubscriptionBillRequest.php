<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class CancelSubscriptionBillRequest extends Model
{
    /**
     * @description The type of the bill to which you want to cancel the subscription. Valid values: PartnerBillingItemDetailForBillingPeriod, PartnerBillingItemDetailMonthly, PartnerInstanceDetailForBillingPeriod, and PartnerInstanceDetailMonthly.
     *
     * @example PartnerBillingItemDetailForBillingPeriod
     *
     * @var string
     */
    public $subscribeType;
    protected $_name = [
        'subscribeType' => 'SubscribeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subscribeType) {
            $res['SubscribeType'] = $this->subscribeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelSubscriptionBillRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubscribeType'])) {
            $model->subscribeType = $map['SubscribeType'];
        }

        return $model;
    }
}
