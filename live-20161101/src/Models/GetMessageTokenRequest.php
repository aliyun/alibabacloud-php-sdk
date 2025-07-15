<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class GetMessageTokenRequest extends Model
{
    /**
     * @description The ID of the interactive messaging application.
     *
     * This parameter is required.
     *
     * @example a494caec-***-695ef345db77
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the device. Each device has a unique ID. You can specify a custom ID. The ID can be up to 64 characters in length and can contain lowercase letters, digits, underscores (_), and hyphen (-). You can specify multiple device IDs. We recommend that you obtain the IDs from the devices and pass the IDs to the server.
     *
     * This parameter is required.
     *
     * @example a494caec-***-695ef345db77
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description The type of the device. Valid values:
     *
     *   ios
     *   android
     *   web
     *   pc
     *
     * This parameter is required.
     *
     * @example android
     *
     * @var string
     */
    public $deviceType;

    /**
     * @description The ID of the user. Each user has a unique ID in the application. The ID can be up to 32 characters in length and can contain lowercase letters, digits, underscores (_), and periods (.). You can specify multiple user IDs.
     *
     * This parameter is required.
     *
     * @example de1**a0
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId' => 'AppId',
        'deviceId' => 'DeviceId',
        'deviceType' => 'DeviceType',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMessageTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
