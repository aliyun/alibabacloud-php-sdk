<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListSubscribeDeviceResponseBody\data;

use AlibabaCloud\Tea\Model;

class subscribeList extends Model
{
    /**
     * @var string
     */
    public $pushConfig;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'pushConfig' => 'PushConfig',
        'updateTime' => 'UpdateTime',
        'deviceId'   => 'DeviceId',
        'createTime' => 'CreateTime',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pushConfig) {
            $res['PushConfig'] = $this->pushConfig;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscribeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PushConfig'])) {
            $model->pushConfig = $map['PushConfig'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
