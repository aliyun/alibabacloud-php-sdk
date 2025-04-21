<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeOssUploadTokenResponseBody;

use AlibabaCloud\Dara\Model;

class ossUploadToken extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $endPoint;

    /**
     * @var int
     */
    public $expired;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $secret;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'bucket' => 'Bucket',
        'endPoint' => 'EndPoint',
        'expired' => 'Expired',
        'key' => 'Key',
        'path' => 'Path',
        'secret' => 'Secret',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        if (null !== $this->endPoint) {
            $res['EndPoint'] = $this->endPoint;
        }

        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->secret) {
            $res['Secret'] = $this->secret;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        if (isset($map['EndPoint'])) {
            $model->endPoint = $map['EndPoint'];
        }

        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Secret'])) {
            $model->secret = $map['Secret'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
