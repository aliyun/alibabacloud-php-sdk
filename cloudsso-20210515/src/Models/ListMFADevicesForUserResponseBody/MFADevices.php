<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListMFADevicesForUserResponseBody;

use AlibabaCloud\Tea\Model;

class MFADevices extends Model
{
    /**
     * @description The ID of the MFA device.
     *
     * @example mfa-00ujhet8pycljj7j****
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description The name of the MFA device.
     *
     * @example Alice-MFA1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The type of the MFA device. The value is fixed as TOTP, which indicates a virtual MFA device. Virtual MFA devices are based on the Time-based One-time Password (TOTP) algorithm.
     *
     * @example TOTP
     *
     * @var string
     */
    public $deviceType;

    /**
     * @description The time when the MFA device was enabled.
     *
     * @example 2021-10-29T09:14:06Z
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The ID of the user.
     *
     * @example u-00q8wbq42wiltcrk****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'deviceId'      => 'DeviceId',
        'deviceName'    => 'DeviceName',
        'deviceType'    => 'DeviceType',
        'effectiveTime' => 'EffectiveTime',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MFADevices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
