<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\QueryUserDeviceListByTmeUserIdResponseBody\result\aligenieUserInfoList;

use AlibabaCloud\Tea\Model;

class authorizedDeviceList extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @example true
     *
     * @var bool
     */
    public $online;

    /**
     * @var string
     */
    public $openDeviceId;
    protected $_name = [
        'deviceName'   => 'DeviceName',
        'online'       => 'Online',
        'openDeviceId' => 'OpenDeviceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->openDeviceId) {
            $res['OpenDeviceId'] = $this->openDeviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizedDeviceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['OpenDeviceId'])) {
            $model->openDeviceId = $map['OpenDeviceId'];
        }

        return $model;
    }
}
