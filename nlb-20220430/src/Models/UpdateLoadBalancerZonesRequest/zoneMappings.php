<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\UpdateLoadBalancerZonesRequest;

use AlibabaCloud\Dara\Model;

class zoneMappings extends Model
{
    /**
     * @var string
     */
    public $allocationId;
    /**
     * @var string
     */
    public $eipType;
    /**
     * @var string
     */
    public $privateIPv4Address;
    /**
     * @var string
     */
    public $vSwitchId;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allocationId'       => 'AllocationId',
        'eipType'            => 'EipType',
        'privateIPv4Address' => 'PrivateIPv4Address',
        'vSwitchId'          => 'VSwitchId',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }

        if (null !== $this->eipType) {
            $res['EipType'] = $this->eipType;
        }

        if (null !== $this->privateIPv4Address) {
            $res['PrivateIPv4Address'] = $this->privateIPv4Address;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }

        if (isset($map['EipType'])) {
            $model->eipType = $map['EipType'];
        }

        if (isset($map['PrivateIPv4Address'])) {
            $model->privateIPv4Address = $map['PrivateIPv4Address'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
