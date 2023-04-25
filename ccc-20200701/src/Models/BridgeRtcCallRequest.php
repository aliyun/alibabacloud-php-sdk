<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class BridgeRtcCallRequest extends Model
{
    /**
     * @var string
     */
    public $callee;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $serviceProvider;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var int
     */
    public $timeoutSeconds;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var bool
     */
    public $videoEnabled;
    protected $_name = [
        'callee'          => 'Callee',
        'caller'          => 'Caller',
        'deviceId'        => 'DeviceId',
        'instanceId'      => 'InstanceId',
        'serviceProvider' => 'ServiceProvider',
        'tags'            => 'Tags',
        'timeoutSeconds'  => 'TimeoutSeconds',
        'userId'          => 'UserId',
        'videoEnabled'    => 'VideoEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->serviceProvider) {
            $res['ServiceProvider'] = $this->serviceProvider;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->videoEnabled) {
            $res['VideoEnabled'] = $this->videoEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BridgeRtcCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ServiceProvider'])) {
            $model->serviceProvider = $map['ServiceProvider'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['VideoEnabled'])) {
            $model->videoEnabled = $map['VideoEnabled'];
        }

        return $model;
    }
}
