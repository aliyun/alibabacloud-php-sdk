<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class SyncHDMAliyunResourceRequest extends Model
{
    /**
     * @var string
     */
    public $async;

    /**
     * @var string
     */
    public $resourceTypes;

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
    public $waitForModifySecurityIps;

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
        'async'                    => 'Async',
        'resourceTypes'            => 'ResourceTypes',
        'uid'                      => 'Uid',
        'userId'                   => 'UserId',
        'waitForModifySecurityIps' => 'WaitForModifySecurityIps',
        'context'                  => '__context',
        'accessKey'                => 'accessKey',
        'signature'                => 'signature',
        'skipAuth'                 => 'skipAuth',
        'timestamp'                => 'timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->waitForModifySecurityIps) {
            $res['WaitForModifySecurityIps'] = $this->waitForModifySecurityIps;
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

    /**
     * @param array $map
     *
     * @return SyncHDMAliyunResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['ResourceTypes'])) {
            $model->resourceTypes = $map['ResourceTypes'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WaitForModifySecurityIps'])) {
            $model->waitForModifySecurityIps = $map['WaitForModifySecurityIps'];
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
