<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class ModifyDeviceInfoRequest extends Model
{
    /**
     * @example FACE_TEST
     *
     * @var string
     */
    public $bizType;

    /**
     * @description This parameter is required.
     *
     * @example wd.6ziUffspAeW5FVYbaqmexR-1qwNjM
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 1
     *
     * @var string
     */
    public $duration;

    /**
     * @example 20190401
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
        'bizType'      => 'BizType',
        'deviceId'     => 'DeviceId',
        'duration'     => 'Duration',
        'expiredDay'   => 'ExpiredDay',
        'userDeviceId' => 'UserDeviceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
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
     * @return ModifyDeviceInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
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
