<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListAvailableEcsTypesRequest extends Model
{
    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var bool
     */
    public $showSoldOut;
    protected $_name = [
        'zoneId'             => 'ZoneId',
        'spotStrategy'       => 'SpotStrategy',
        'instanceChargeType' => 'InstanceChargeType',
        'showSoldOut'        => 'ShowSoldOut',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->showSoldOut) {
            $res['ShowSoldOut'] = $this->showSoldOut;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAvailableEcsTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['ShowSoldOut'])) {
            $model->showSoldOut = $map['ShowSoldOut'];
        }

        return $model;
    }
}
