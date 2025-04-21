<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class Vehicle5ItemQueryRequest extends Model
{
    /**
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $vehicleNum;

    /**
     * @var string
     */
    public $vehicleType;
    protected $_name = [
        'paramType' => 'ParamType',
        'vehicleNum' => 'VehicleNum',
        'vehicleType' => 'VehicleType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }

        if (null !== $this->vehicleNum) {
            $res['VehicleNum'] = $this->vehicleNum;
        }

        if (null !== $this->vehicleType) {
            $res['VehicleType'] = $this->vehicleType;
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
        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }

        if (isset($map['VehicleNum'])) {
            $model->vehicleNum = $map['VehicleNum'];
        }

        if (isset($map['VehicleType'])) {
            $model->vehicleType = $map['VehicleType'];
        }

        return $model;
    }
}
