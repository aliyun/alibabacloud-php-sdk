<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeleteScheduleTaskRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeleteScheduleTaskRequest\payload;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\DeleteScheduleTaskRequest\userInfo;
use AlibabaCloud\Tea\Model;

class DeleteScheduleTaskRequest extends Model
{
    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var payload
     */
    public $payload;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'deviceInfo' => 'DeviceInfo',
        'payload'    => 'Payload',
        'userInfo'   => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toMap() : null;
        }
        if (null !== $this->payload) {
            $res['Payload'] = null !== $this->payload ? $this->payload->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteScheduleTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }
        if (isset($map['Payload'])) {
            $model->payload = payload::fromMap($map['Payload']);
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
