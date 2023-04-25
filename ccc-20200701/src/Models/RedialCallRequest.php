<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class RedialCallRequest extends Model
{
    /**
     * @example 1318888****
     *
     * @var string
     */
    public $callee;

    /**
     * @example 0109810****
     *
     * @var string
     */
    public $caller;

    /**
     * @example CCC-30.82.86.44-chrome102-bsdf911812c60f61e
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example abc
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example job-6581536084722****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example a=b
     *
     * @var string
     */
    public $tags;

    /**
     * @example 30
     *
     * @var int
     */
    public $timeoutSeconds;

    /**
     * @example samzhang@abc
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'callee'         => 'Callee',
        'caller'         => 'Caller',
        'deviceId'       => 'DeviceId',
        'instanceId'     => 'InstanceId',
        'jobId'          => 'JobId',
        'tags'           => 'Tags',
        'timeoutSeconds' => 'TimeoutSeconds',
        'userId'         => 'UserId',
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RedialCallRequest
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
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

        return $model;
    }
}
