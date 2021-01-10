<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class ConnectAssistDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $hardwareId;

    /**
     * @var bool
     */
    public $allowCommandExtension;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $VIN;

    /**
     * @var string
     */
    public $UUID;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'hardwareId'            => 'HardwareId',
        'allowCommandExtension' => 'AllowCommandExtension',
        'deviceId'              => 'DeviceId',
        'serialNumber'          => 'SerialNumber',
        'VIN'                   => 'VIN',
        'UUID'                  => 'UUID',
        'projectId'             => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hardwareId) {
            $res['HardwareId'] = $this->hardwareId;
        }
        if (null !== $this->allowCommandExtension) {
            $res['AllowCommandExtension'] = $this->allowCommandExtension;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->VIN) {
            $res['VIN'] = $this->VIN;
        }
        if (null !== $this->UUID) {
            $res['UUID'] = $this->UUID;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConnectAssistDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HardwareId'])) {
            $model->hardwareId = $map['HardwareId'];
        }
        if (isset($map['AllowCommandExtension'])) {
            $model->allowCommandExtension = $map['AllowCommandExtension'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['VIN'])) {
            $model->VIN = $map['VIN'];
        }
        if (isset($map['UUID'])) {
            $model->UUID = $map['UUID'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
