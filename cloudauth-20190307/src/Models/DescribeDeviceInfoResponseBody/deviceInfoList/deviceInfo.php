<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeDeviceInfoResponseBody\deviceInfoList;

use AlibabaCloud\Tea\Model;

class deviceInfo extends Model
{
    /**
     * @example 20180101
     *
     * @var string
     */
    public $beginDay;

    /**
     * @example FACE_TEST
     *
     * @var string
     */
    public $bizType;

    /**
     * @example wd.6ziUffspAeW5FVYbaqmexR-1qwNjM
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 20180101
     *
     * @var string
     */
    public $expiredDay;

    /**
     * @example 3iJ1AY$oHcu7mC69
     *
     * @var string
     */
    public $userDeviceId;
    protected $_name = [
        'beginDay'     => 'BeginDay',
        'bizType'      => 'BizType',
        'deviceId'     => 'DeviceId',
        'expiredDay'   => 'ExpiredDay',
        'userDeviceId' => 'UserDeviceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginDay) {
            $res['BeginDay'] = $this->beginDay;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->expiredDay) {
            $res['ExpiredDay'] = $this->expiredDay;
        }
        if (null !== $this->userDeviceId) {
            $res['UserDeviceId'] = $this->userDeviceId;
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
        if (isset($map['BeginDay'])) {
            $model->beginDay = $map['BeginDay'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['ExpiredDay'])) {
            $model->expiredDay = $map['ExpiredDay'];
        }
        if (isset($map['UserDeviceId'])) {
            $model->userDeviceId = $map['UserDeviceId'];
        }

        return $model;
    }
}
