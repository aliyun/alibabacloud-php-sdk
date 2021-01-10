<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesRequest;

use AlibabaCloud\Tea\Model;

class deviceNameList extends Model
{
    /**
     * @var string
     */
    public $deviceNickname;

    /**
     * @var string
     */
    public $deviceName;
    protected $_name = [
        'deviceNickname' => 'DeviceNickname',
        'deviceName'     => 'DeviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceNickname) {
            $res['DeviceNickname'] = $this->deviceNickname;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceNickname'])) {
            $model->deviceNickname = $map['DeviceNickname'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        return $model;
    }
}
