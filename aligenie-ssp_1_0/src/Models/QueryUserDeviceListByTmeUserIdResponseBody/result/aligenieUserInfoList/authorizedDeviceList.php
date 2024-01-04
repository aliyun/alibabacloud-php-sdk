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

    /**
     * @var string
     */
    public $tmeDeviceId;

    /**
     * @var string
     */
    public $tmeProductId;
    protected $_name = [
        'deviceName'   => 'DeviceName',
        'online'       => 'Online',
        'openDeviceId' => 'OpenDeviceId',
        'tmeDeviceId'  => 'TmeDeviceId',
        'tmeProductId' => 'TmeProductId',
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
        if (null !== $this->tmeDeviceId) {
            $res['TmeDeviceId'] = $this->tmeDeviceId;
        }
        if (null !== $this->tmeProductId) {
            $res['TmeProductId'] = $this->tmeProductId;
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
        if (isset($map['TmeDeviceId'])) {
            $model->tmeDeviceId = $map['TmeDeviceId'];
        }
        if (isset($map['TmeProductId'])) {
            $model->tmeProductId = $map['TmeProductId'];
        }

        return $model;
    }
}
