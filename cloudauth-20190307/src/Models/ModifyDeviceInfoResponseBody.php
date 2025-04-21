<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class ModifyDeviceInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $beginDay;

    /**
     * @var string
     */
    public $bizType;

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
    public $requestId;

    /**
     * @var string
     */
    public $userDeviceId;
    protected $_name = [
        'beginDay' => 'BeginDay',
        'bizType' => 'BizType',
        'deviceId' => 'DeviceId',
        'expiredDay' => 'ExpiredDay',
        'requestId' => 'RequestId',
        'userDeviceId' => 'UserDeviceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userDeviceId) {
            $res['UserDeviceId'] = $this->userDeviceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserDeviceId'])) {
            $model->userDeviceId = $map['UserDeviceId'];
        }

        return $model;
    }
}
