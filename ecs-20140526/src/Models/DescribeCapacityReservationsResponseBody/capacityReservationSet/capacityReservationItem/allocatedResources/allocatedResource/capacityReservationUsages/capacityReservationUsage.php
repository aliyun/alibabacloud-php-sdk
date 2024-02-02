<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCapacityReservationsResponseBody\capacityReservationSet\capacityReservationItem\allocatedResources\allocatedResource\capacityReservationUsages;

use AlibabaCloud\Tea\Model;

class capacityReservationUsage extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $serviceName;

    /**
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
