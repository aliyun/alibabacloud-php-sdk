<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckImportDeviceRequest;

use AlibabaCloud\Tea\Model;

class deviceList extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $deviceSecret;

    /**
     * @var string
     */
    public $sn;
    protected $_name = [
        'deviceName'   => 'DeviceName',
        'deviceSecret' => 'DeviceSecret',
        'sn'           => 'Sn',
    ];

    public function validate()
    {
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('deviceSecret', $this->deviceSecret, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceSecret) {
            $res['DeviceSecret'] = $this->deviceSecret;
        }
        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceSecret'])) {
            $model->deviceSecret = $map['DeviceSecret'];
        }
        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }

        return $model;
    }
}
