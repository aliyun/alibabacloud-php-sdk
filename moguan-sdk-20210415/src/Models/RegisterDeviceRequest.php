<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Moguansdk\V20210415\Models;

use AlibabaCloud\Tea\Model;

class RegisterDeviceRequest extends Model
{
    /**
     * @example NWTtS623eqo6s070
     *
     * @var string
     */
    public $appKey;

    /**
     * @example 99daf4a623f2b623ae08e79d6d4bf686
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $extend;

    /**
     * @example SDKCodeTest01
     *
     * @var string
     */
    public $sdkCode;

    /**
     * @example D001
     *
     * @var string
     */
    public $userDeviceId;
    protected $_name = [
        'appKey'       => 'AppKey',
        'deviceId'     => 'DeviceId',
        'extend'       => 'Extend',
        'sdkCode'      => 'SdkCode',
        'userDeviceId' => 'UserDeviceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->sdkCode) {
            $res['SdkCode'] = $this->sdkCode;
        }
        if (null !== $this->userDeviceId) {
            $res['UserDeviceId'] = $this->userDeviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['SdkCode'])) {
            $model->sdkCode = $map['SdkCode'];
        }
        if (isset($map['UserDeviceId'])) {
            $model->userDeviceId = $map['UserDeviceId'];
        }

        return $model;
    }
}
