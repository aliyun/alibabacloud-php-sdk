<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class StartScalingGroupZoneShiftRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $expiryTime;

    /**
     * @var string[]
     */
    public $impairedZoneIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'expiryTime' => 'ExpiryTime',
        'impairedZoneIds' => 'ImpairedZoneIds',
        'regionId' => 'RegionId',
        'scalingGroupId' => 'ScalingGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->impairedZoneIds)) {
            Model::validateArray($this->impairedZoneIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}
