<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryDeviceStatusRequest\payload;

use AlibabaCloud\Tea\Model;

class locationDevices extends Model
{
    /**
     * @example night_light
     *
     * @var string
     */
    public $deviceNumber;

    /**
     * @example light
     *
     * @var string
     */
    public $deviceType;

    /**
     * @example room
     *
     * @var string
     */
    public $location;
    protected $_name = [
        'deviceNumber' => 'DeviceNumber',
        'deviceType'   => 'DeviceType',
        'location'     => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceNumber) {
            $res['DeviceNumber'] = $this->deviceNumber;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return locationDevices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceNumber'])) {
            $model->deviceNumber = $map['DeviceNumber'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
