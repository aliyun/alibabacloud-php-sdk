<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet\capacityReservationItem\allocatedResources\allocatedResource\capacityReservationUsages;

use AlibabaCloud\Tea\Model;

class capacityReservationUsage extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 105909559088****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The name of the Alibaba Cloud service.
     *
     * @example maxcompute.aliyuncs.com
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The number of instances that are used by the Alibaba Cloud account or service.
     *
     * @example 20
     *
     * @var int
     */
    public $usedAmount;
    protected $_name = [
        'accountId'   => 'AccountId',
        'serviceName' => 'ServiceName',
        'usedAmount'  => 'UsedAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->usedAmount) {
            $res['UsedAmount'] = $this->usedAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacityReservationUsage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['UsedAmount'])) {
            $model->usedAmount = $map['UsedAmount'];
        }

        return $model;
    }
}
