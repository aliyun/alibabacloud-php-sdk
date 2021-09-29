<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListVehicleResponseBody\vehicles;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $vin;
    protected $_name = [
        'connectionStatus' => 'ConnectionStatus',
        'createTime'       => 'CreateTime',
        'deviceId'         => 'DeviceId',
        'vin'              => 'Vin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->vin) {
            $res['Vin'] = $this->vin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Vin'])) {
            $model->vin = $map['Vin'];
        }

        return $model;
    }
}
