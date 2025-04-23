<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetExplorerTaskResponseBody\task;

use AlibabaCloud\Dara\Model;

class uploadSignature extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $bucketName;

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
    public $url;
    protected $_name = [
        'accessKeyId' => 'accessKeyId',
        'bucketName' => 'bucketName',
        'key' => 'key',
        'policy' => 'policy',
        'signature' => 'signature',
        'url' => 'url',
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

        if (null !== $this->bucketName) {
            $res['bucketName'] = $this->bucketName;
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

        if (null !== $this->url) {
            $res['url'] = $this->url;
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

        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
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

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
