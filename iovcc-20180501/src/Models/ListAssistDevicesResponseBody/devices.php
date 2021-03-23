<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAssistDevicesResponseBody;

use AlibabaCloud\Tea\Model;

class devices extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceName;

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
    public $UUID;

    /**
     * @var string
     */
    public $VIN;

    /**
     * @var int
     */
    public $accessTime;
    protected $_name = [
        'deviceId'     => 'DeviceId',
        'deviceName'   => 'DeviceName',
        'serialNumber' => 'SerialNumber',
        'hardwareId'   => 'HardwareId',
        'UUID'         => 'UUID',
        'VIN'          => 'VIN',
        'accessTime'   => 'AccessTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->hardwareId) {
            $res['HardwareId'] = $this->hardwareId;
        }
        if (null !== $this->UUID) {
            $res['UUID'] = $this->UUID;
        }
        if (null !== $this->VIN) {
            $res['VIN'] = $this->VIN;
        }
        if (null !== $this->accessTime) {
            $res['AccessTime'] = $this->accessTime;
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
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['HardwareId'])) {
            $model->hardwareId = $map['HardwareId'];
        }
        if (isset($map['UUID'])) {
            $model->UUID = $map['UUID'];
        }
        if (isset($map['VIN'])) {
            $model->VIN = $map['VIN'];
        }
        if (isset($map['AccessTime'])) {
            $model->accessTime = $map['AccessTime'];
        }

        return $model;
    }
}
