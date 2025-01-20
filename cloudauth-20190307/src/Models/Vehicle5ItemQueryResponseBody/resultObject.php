<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\Vehicle5ItemQueryResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
