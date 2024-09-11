<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class VehicleQueryRequest extends Model
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
    protected $_name = [
        'paramType'   => 'ParamType',
        'vehicleNum'  => 'VehicleNum',
        'vehicleType' => 'VehicleType',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VehicleQueryRequest
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

        return $model;
    }
}
