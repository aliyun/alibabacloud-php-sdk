<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListSubscribeDeviceResponse\data;

use AlibabaCloud\Tea\Model;

class subscribeList extends Model
{
    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $pushConfig;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'userId'     => 'UserId',
        'deviceId'   => 'DeviceId',
        'pushConfig' => 'PushConfig',
        'createTime' => 'CreateTime',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('deviceId', $this->deviceId, true);
        Model::validateRequired('pushConfig', $this->pushConfig, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->pushConfig) {
            $res['PushConfig'] = $this->pushConfig;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['PushConfig'])) {
            $model->pushConfig = $map['PushConfig'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
