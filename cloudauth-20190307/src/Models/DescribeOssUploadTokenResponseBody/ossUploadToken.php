<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeOssUploadTokenResponseBody;

use AlibabaCloud\Tea\Model;

class ossUploadToken extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $secret;

    /**
     * @var int
     */
    public $expired;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $endPoint;

    /**
     * @var string
     */
    public $bucket;
    protected $_name = [
        'key'      => 'Key',
        'token'    => 'Token',
        'secret'   => 'Secret',
        'expired'  => 'Expired',
        'path'     => 'Path',
        'endPoint' => 'EndPoint',
        'bucket'   => 'Bucket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->secret) {
            $res['Secret'] = $this->secret;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->endPoint) {
            $res['EndPoint'] = $this->endPoint;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossUploadToken
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Secret'])) {
            $model->secret = $map['Secret'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['EndPoint'])) {
            $model->endPoint = $map['EndPoint'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        return $model;
    }
}
