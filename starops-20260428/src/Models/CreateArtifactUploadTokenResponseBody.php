<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models;

use AlibabaCloud\Dara\Model;

class CreateArtifactUploadTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessId;

    /**
     * @var string
     */
    public $artifactPath;

    /**
     * @var string
     */
    public $dir;

    /**
     * @var int
     */
    public $expire;

    /**
     * @var string
     */
    public $host;

    /**
     * @var int
     */
    public $maxSize;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $successActionStatus;
    protected $_name = [
        'accessId' => 'accessId',
        'artifactPath' => 'artifactPath',
        'dir' => 'dir',
        'expire' => 'expire',
        'host' => 'host',
        'maxSize' => 'maxSize',
        'policy' => 'policy',
        'requestId' => 'requestId',
        'signature' => 'signature',
        'successActionStatus' => 'successActionStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['accessId'] = $this->accessId;
        }

        if (null !== $this->artifactPath) {
            $res['artifactPath'] = $this->artifactPath;
        }

        if (null !== $this->dir) {
            $res['dir'] = $this->dir;
        }

        if (null !== $this->expire) {
            $res['expire'] = $this->expire;
        }

        if (null !== $this->host) {
            $res['host'] = $this->host;
        }

        if (null !== $this->maxSize) {
            $res['maxSize'] = $this->maxSize;
        }

        if (null !== $this->policy) {
            $res['policy'] = $this->policy;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }

        if (null !== $this->successActionStatus) {
            $res['successActionStatus'] = $this->successActionStatus;
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
        if (isset($map['accessId'])) {
            $model->accessId = $map['accessId'];
        }

        if (isset($map['artifactPath'])) {
            $model->artifactPath = $map['artifactPath'];
        }

        if (isset($map['dir'])) {
            $model->dir = $map['dir'];
        }

        if (isset($map['expire'])) {
            $model->expire = $map['expire'];
        }

        if (isset($map['host'])) {
            $model->host = $map['host'];
        }

        if (isset($map['maxSize'])) {
            $model->maxSize = $map['maxSize'];
        }

        if (isset($map['policy'])) {
            $model->policy = $map['policy'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }

        if (isset($map['successActionStatus'])) {
            $model->successActionStatus = $map['successActionStatus'];
        }

        return $model;
    }
}
