<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class GetEndpointSwitchTaskRequest extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $context;

    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $skipAuth;

    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'taskId' => 'TaskId',
        'uid' => 'Uid',
        'userId' => 'UserId',
        'context' => '__context',
        'accessKey' => 'accessKey',
        'signature' => 'signature',
        'skipAuth' => 'skipAuth',
        'timestamp' => 'timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->context) {
            $res['__context'] = $this->context;
        }

        if (null !== $this->accessKey) {
            $res['accessKey'] = $this->accessKey;
        }

        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }

        if (null !== $this->skipAuth) {
            $res['skipAuth'] = $this->skipAuth;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['__context'])) {
            $model->context = $map['__context'];
        }

        if (isset($map['accessKey'])) {
            $model->accessKey = $map['accessKey'];
        }

        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }

        if (isset($map['skipAuth'])) {
            $model->skipAuth = $map['skipAuth'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        return $model;
    }
}
