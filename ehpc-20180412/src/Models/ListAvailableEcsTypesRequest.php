<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListAvailableEcsTypesRequest extends Model
{
    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var bool
     */
    public $showSoldOut;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'instanceChargeType' => 'InstanceChargeType',
        'showSoldOut'        => 'ShowSoldOut',
        'spotStrategy'       => 'SpotStrategy',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->showSoldOut) {
            $res['ShowSoldOut'] = $this->showSoldOut;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['ShowSoldOut'])) {
            $model->showSoldOut = $map['ShowSoldOut'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
