<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20160722\Models\DescribeCapacityHistoryResponseBody\capacityHistoryItems;

use AlibabaCloud\Tea\Model;

class capacityHistoryModel extends Model
{
    /**
     * @var int
     */
    public $attachedCapacity;

    /**
     * @var int
     */
    public $autoCreatedCapacity;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var int
     */
    public $totalCapacity;
    protected $_name = [
        'attachedCapacity'    => 'AttachedCapacity',
        'autoCreatedCapacity' => 'AutoCreatedCapacity',
        'scalingGroupId'      => 'ScalingGroupId',
        'timestamp'           => 'Timestamp',
        'totalCapacity'       => 'TotalCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachedCapacity) {
            $res['AttachedCapacity'] = $this->attachedCapacity;
        }
        if (null !== $this->autoCreatedCapacity) {
            $res['AutoCreatedCapacity'] = $this->autoCreatedCapacity;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacityHistoryModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachedCapacity'])) {
            $model->attachedCapacity = $map['AttachedCapacity'];
        }
        if (isset($map['AutoCreatedCapacity'])) {
            $model->autoCreatedCapacity = $map['AutoCreatedCapacity'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }

        return $model;
    }
}
