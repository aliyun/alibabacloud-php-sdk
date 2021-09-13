<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class MakeCallRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

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
    public $caller;

    /**
     * @var string
     */
    public $callee;

    /**
     * @var int
     */
    public $timeoutSeconds;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'userId'         => 'UserId',
        'deviceId'       => 'DeviceId',
        'caller'         => 'Caller',
        'callee'         => 'Callee',
        'timeoutSeconds' => 'TimeoutSeconds',
        'tags'           => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MakeCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
