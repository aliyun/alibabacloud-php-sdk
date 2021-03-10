<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetEdgeDriverVersionRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $driverId;

    /**
     * @var string
     */
    public $driverVersion;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'driverId'      => 'DriverId',
        'driverVersion' => 'DriverVersion',
    ];

    public function validate()
    {
        Model::validateRequired('driverId', $this->driverId, true);
        Model::validateRequired('driverVersion', $this->driverVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->driverId) {
            $res['DriverId'] = $this->driverId;
        }
        if (null !== $this->driverVersion) {
            $res['DriverVersion'] = $this->driverVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEdgeDriverVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['DriverId'])) {
            $model->driverId = $map['DriverId'];
        }
        if (isset($map['DriverVersion'])) {
            $model->driverVersion = $map['DriverVersion'];
        }

        return $model;
    }
}
