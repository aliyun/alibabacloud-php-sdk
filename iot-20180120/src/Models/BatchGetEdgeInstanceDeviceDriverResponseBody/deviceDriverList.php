<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceDriverResponseBody;

use AlibabaCloud\Tea\Model;

class deviceDriverList extends Model
{
    /**
     * @example 9c1ae7bd59f1469abbdccc9592******
     *
     * @var string
     */
    public $driverId;

    /**
     * @example Hathoyxglj9jpYPyw3WN******
     *
     * @var string
     */
    public $iotId;
    protected $_name = [
        'driverId' => 'DriverId',
        'iotId'    => 'IotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driverId) {
            $res['DriverId'] = $this->driverId;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceDriverList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DriverId'])) {
            $model->driverId = $map['DriverId'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        return $model;
    }
}
