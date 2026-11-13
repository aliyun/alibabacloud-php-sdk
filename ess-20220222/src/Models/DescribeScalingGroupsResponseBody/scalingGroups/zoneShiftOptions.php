<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\zoneShiftOptions\zoneShiftPolicy;

class zoneShiftOptions extends Model
{
    /**
     * @var string
     */
    public $expiryTime;

    /**
     * @var string[]
     */
    public $impairedZoneIds;

    /**
     * @var zoneShiftPolicy
     */
    public $zoneShiftPolicy;
    protected $_name = [
        'expiryTime' => 'ExpiryTime',
        'impairedZoneIds' => 'ImpairedZoneIds',
        'zoneShiftPolicy' => 'ZoneShiftPolicy',
    ];

    public function validate()
    {
        if (\is_array($this->impairedZoneIds)) {
            Model::validateArray($this->impairedZoneIds);
        }
        if (null !== $this->zoneShiftPolicy) {
            $this->zoneShiftPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiryTime) {
            $res['ExpiryTime'] = $this->expiryTime;
        }

        if (null !== $this->impairedZoneIds) {
            if (\is_array($this->impairedZoneIds)) {
                $res['ImpairedZoneIds'] = [];
                $n1 = 0;
                foreach ($this->impairedZoneIds as $item1) {
                    $res['ImpairedZoneIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneShiftPolicy) {
            $res['ZoneShiftPolicy'] = null !== $this->zoneShiftPolicy ? $this->zoneShiftPolicy->toArray($noStream) : $this->zoneShiftPolicy;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiryTime'])) {
            $model->expiryTime = $map['ExpiryTime'];
        }

        if (isset($map['ImpairedZoneIds'])) {
            if (!empty($map['ImpairedZoneIds'])) {
                $model->impairedZoneIds = [];
                $n1 = 0;
                foreach ($map['ImpairedZoneIds'] as $item1) {
                    $model->impairedZoneIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ZoneShiftPolicy'])) {
            $model->zoneShiftPolicy = zoneShiftPolicy::fromMap($map['ZoneShiftPolicy']);
        }

        return $model;
    }
}
