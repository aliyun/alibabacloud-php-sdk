<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models\GetSymUploadParamResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;
    /**
     * @var string
     */
    public $callback;
    /**
     * @var string
     */
    public $key;
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
    public $uploadAddress;
    protected $_name = [
        'accessKeyId'   => 'accessKeyId',
        'callback'      => 'callback',
        'key'           => 'key',
        'policy'        => 'policy',
        'signature'     => 'signature',
        'uploadAddress' => 'uploadAddress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['accessKeyId'] = $this->accessKeyId;
        }

        if (null !== $this->callback) {
            $res['callback'] = $this->callback;
        }

        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->policy) {
            $res['policy'] = $this->policy;
        }

        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }

        if (null !== $this->uploadAddress) {
            $res['uploadAddress'] = $this->uploadAddress;
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
        if (isset($map['accessKeyId'])) {
            $model->accessKeyId = $map['accessKeyId'];
        }

        if (isset($map['callback'])) {
            $model->callback = $map['callback'];
        }

        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['policy'])) {
            $model->policy = $map['policy'];
        }

        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }

        if (isset($map['uploadAddress'])) {
            $model->uploadAddress = $map['uploadAddress'];
        }

        return $model;
    }
}
