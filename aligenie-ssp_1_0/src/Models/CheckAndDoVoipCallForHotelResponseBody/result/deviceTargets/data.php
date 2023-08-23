<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAndDoVoipCallForHotelResponseBody\result\deviceTargets;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deviceIcon;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'deviceIcon' => 'DeviceIcon',
        'deviceName' => 'DeviceName',
        'deviceType' => 'DeviceType',
        'online'     => 'Online',
        'uuid'       => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceIcon) {
            $res['DeviceIcon'] = $this->deviceIcon;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceIcon'])) {
            $model->deviceIcon = $map['DeviceIcon'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
