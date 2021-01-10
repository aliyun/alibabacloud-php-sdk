<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAssistDevicesResponseBody;

use AlibabaCloud\Tea\Model;

class devices extends Model
{
    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $hardwareId;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var int
     */
    public $accessTime;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $UUID;

    /**
     * @var string
     */
    public $VIN;
    protected $_name = [
        'serialNumber' => 'SerialNumber',
        'hardwareId'   => 'HardwareId',
        'deviceName'   => 'DeviceName',
        'accessTime'   => 'AccessTime',
        'deviceId'     => 'DeviceId',
        'UUID'         => 'UUID',
        'VIN'          => 'VIN',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->hardwareId) {
            $res['HardwareId'] = $this->hardwareId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->accessTime) {
            $res['AccessTime'] = $this->accessTime;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->UUID) {
            $res['UUID'] = $this->UUID;
        }
        if (null !== $this->VIN) {
            $res['VIN'] = $this->VIN;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return devices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['HardwareId'])) {
            $model->hardwareId = $map['HardwareId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['AccessTime'])) {
            $model->accessTime = $map['AccessTime'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['UUID'])) {
            $model->UUID = $map['UUID'];
        }
        if (isset($map['VIN'])) {
            $model->VIN = $map['VIN'];
        }

        return $model;
    }
}
