<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class UploadFileSignatureResult extends Model
{
    /**
     * @var int
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $thumbUrl;
    protected $_name = [
        'expiredTime' => 'expiredTime',
        'fileUrl' => 'fileUrl',
        'host' => 'host',
        'keyId' => 'keyId',
        'path' => 'path',
        'policy' => 'policy',
        'signature' => 'signature',
        'thumbUrl' => 'thumbUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiredTime) {
            $res['expiredTime'] = $this->expiredTime;
        }

        if (null !== $this->fileUrl) {
            $res['fileUrl'] = $this->fileUrl;
        }

        if (null !== $this->host) {
            $res['host'] = $this->host;
        }

        if (null !== $this->keyId) {
            $res['keyId'] = $this->keyId;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->policy) {
            $res['policy'] = $this->policy;
        }

        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }

        if (null !== $this->thumbUrl) {
            $res['thumbUrl'] = $this->thumbUrl;
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
        if (isset($map['expiredTime'])) {
            $model->expiredTime = $map['expiredTime'];
        }

        if (isset($map['fileUrl'])) {
            $model->fileUrl = $map['fileUrl'];
        }

        if (isset($map['host'])) {
            $model->host = $map['host'];
        }

        if (isset($map['keyId'])) {
            $model->keyId = $map['keyId'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['policy'])) {
            $model->policy = $map['policy'];
        }

        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }

        if (isset($map['thumbUrl'])) {
            $model->thumbUrl = $map['thumbUrl'];
        }

        return $model;
    }
}
