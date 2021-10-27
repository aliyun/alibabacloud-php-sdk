<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class ModifyDeviceInfoRequest extends Model
{
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
    public $duration;

    /**
     * @var string
     */
    public $expiredDay;

    /**
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
