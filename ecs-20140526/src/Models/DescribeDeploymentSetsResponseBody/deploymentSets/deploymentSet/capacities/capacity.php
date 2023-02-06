<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDeploymentSetsResponseBody\deploymentSets\deploymentSet\capacities;

use AlibabaCloud\Tea\Model;

class capacity extends Model
{
    /**
     * @description The number of ECS instances that can be added to the deployment set within the zone.
     *
     * @example 18
     *
     * @var int
     */
    public $availableAmount;

    /**
     * @description The number of ECS instances that belong to the zone in the deployment set.
     *
     * @example 2
     *
     * @var int
     */
    public $usedAmount;

    /**
     * @description The ID of the zone. Only the zone IDs of existing ECS instances in the deployment set are returned.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availableAmount' => 'AvailableAmount',
        'usedAmount'      => 'UsedAmount',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableAmount) {
            $res['AvailableAmount'] = $this->availableAmount;
        }
        if (null !== $this->usedAmount) {
            $res['UsedAmount'] = $this->usedAmount;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableAmount'])) {
            $model->availableAmount = $map['AvailableAmount'];
        }
        if (isset($map['UsedAmount'])) {
            $model->usedAmount = $map['UsedAmount'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
