<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeDeviceInfoResponseBody\deviceInfoList;

use AlibabaCloud\Tea\Model;

class deviceInfo extends Model
{
    /**
     * @var string
     */
    public $userDeviceId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $expiredDay;

    /**
     * @var string
     */
    public $beginDay;

    /**
     * @var string
     */
    public $bizType;
    protected $_name = [
        'userDeviceId' => 'UserDeviceId',
        'deviceId'     => 'DeviceId',
        'expiredDay'   => 'ExpiredDay',
        'beginDay'     => 'BeginDay',
        'bizType'      => 'BizType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userDeviceId) {
            $res['UserDeviceId'] = $this->userDeviceId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->expiredDay) {
            $res['ExpiredDay'] = $this->expiredDay;
        }
        if (null !== $this->beginDay) {
            $res['BeginDay'] = $this->beginDay;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserDeviceId'])) {
            $model->userDeviceId = $map['UserDeviceId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['ExpiredDay'])) {
            $model->expiredDay = $map['ExpiredDay'];
        }
        if (isset($map['BeginDay'])) {
            $model->beginDay = $map['BeginDay'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        return $model;
    }
}
