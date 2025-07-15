<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class RegisterDevicesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test-device
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example password
     *
     * @var string
     */
    public $password;

    /**
     * @example ["user-test@ccc-test"]
     *
     * @var string
     */
    public $userIdListJson;
    protected $_name = [
        'deviceId' => 'DeviceId',
        'instanceId' => 'InstanceId',
        'password' => 'Password',
        'userIdListJson' => 'UserIdListJson',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->userIdListJson) {
            $res['UserIdListJson'] = $this->userIdListJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['UserIdListJson'])) {
            $model->userIdListJson = $map['UserIdListJson'];
        }

        return $model;
    }
}
