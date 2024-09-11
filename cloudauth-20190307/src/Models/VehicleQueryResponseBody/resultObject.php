<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\VehicleQueryResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $bizCode;

    /**
     * @var string
     */
    public $vehicleInfo;
    protected $_name = [
        'bizCode'     => 'BizCode',
        'vehicleInfo' => 'VehicleInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->vehicleInfo) {
            $res['VehicleInfo'] = $this->vehicleInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['VehicleInfo'])) {
            $model->vehicleInfo = $map['VehicleInfo'];
        }

        return $model;
    }
}
