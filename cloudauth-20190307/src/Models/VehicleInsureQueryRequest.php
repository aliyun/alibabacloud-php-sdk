<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class VehicleInsureQueryRequest extends Model
{
    /**
     * @example normal
     *
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $vehicleNum;

    /**
     * @example 02
     *
     * @var string
     */
    public $vehicleType;

    /**
     * @example LB**************
     *
     * @var string
     */
    public $vin;
    protected $_name = [
        'paramType'   => 'ParamType',
        'vehicleNum'  => 'VehicleNum',
        'vehicleType' => 'VehicleType',
        'vin'         => 'Vin',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->vin) {
            $res['Vin'] = $this->vin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VehicleInsureQueryRequest
     */
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
        if (isset($map['Vin'])) {
            $model->vin = $map['Vin'];
        }

        return $model;
    }
}
