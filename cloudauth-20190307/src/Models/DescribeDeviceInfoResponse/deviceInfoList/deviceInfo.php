<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeDeviceInfoResponse\deviceInfoList;

use AlibabaCloud\Tea\Model;

class deviceInfo extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $userDeviceId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $beginDay;

    /**
     * @var string
     */
    public $expiredDay;
    protected $_name = [
        'deviceId'     => 'DeviceId',
        'userDeviceId' => 'UserDeviceId',
        'bizType'      => 'BizType',
        'beginDay'     => 'BeginDay',
        'expiredDay'   => 'ExpiredDay',
    ];

    public function validate()
    {
        Model::validateRequired('deviceId', $this->deviceId, true);
        Model::validateRequired('userDeviceId', $this->userDeviceId, true);
        Model::validateRequired('bizType', $this->bizType, true);
        Model::validateRequired('beginDay', $this->beginDay, true);
        Model::validateRequired('expiredDay', $this->expiredDay, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->userDeviceId) {
            $res['UserDeviceId'] = $this->userDeviceId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->beginDay) {
            $res['BeginDay'] = $this->beginDay;
        }
        if (null !== $this->expiredDay) {
            $res['ExpiredDay'] = $this->expiredDay;
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
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['UserDeviceId'])) {
            $model->userDeviceId = $map['UserDeviceId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BeginDay'])) {
            $model->beginDay = $map['BeginDay'];
        }
        if (isset($map['ExpiredDay'])) {
            $model->expiredDay = $map['ExpiredDay'];
        }

        return $model;
    }
}
