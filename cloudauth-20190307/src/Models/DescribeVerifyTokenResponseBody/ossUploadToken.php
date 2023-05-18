<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyTokenResponseBody;

use AlibabaCloud\Tea\Model;

class ossUploadToken extends Model
{
    /**
     * @example cloudauth-zhangjiakou-external
     *
     * @var string
     */
    public $bucket;

    /**
     * @example https://oss-cn-zhangjiakou.aliyuncs.com
     *
     * @var string
     */
    public $endPoint;

    /**
     * @example 1582636610000
     *
     * @var int
     */
    public $expired;

    /**
     * @example STS.NU8rUBj****
     *
     * @var string
     */
    public $key;

    /**
     * @example prod/RdNLC@Ox2n-1s7NMt
     *
     * @var string
     */
    public $path;

    /**
     * @example FwmnyoqT8dHj7nJLuM67T****
     *
     * @var string
     */
    public $secret;

    /**
     * @example uWia500nTS5knZaDzq4/KqpvhcLnO****
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'bucket'   => 'Bucket',
        'endPoint' => 'EndPoint',
        'expired'  => 'Expired',
        'key'      => 'Key',
        'path'     => 'Path',
        'secret'   => 'Secret',
        'token'    => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ossUploadToken
     */
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
