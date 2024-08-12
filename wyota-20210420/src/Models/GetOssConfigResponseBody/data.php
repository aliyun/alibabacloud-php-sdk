<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\GetOssConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $endPoint;

    /**
     * @var string
     */
    public $ossPolicy;

    /**
     * @var string
     */
    public $ossSignature;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'accessKeyId'   => 'AccessKeyId',
        'endPoint'      => 'EndPoint',
        'ossPolicy'     => 'OssPolicy',
        'ossSignature'  => 'OssSignature',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->endPoint) {
            $res['EndPoint'] = $this->endPoint;
        }
        if (null !== $this->ossPolicy) {
            $res['OssPolicy'] = $this->ossPolicy;
        }
        if (null !== $this->ossSignature) {
            $res['OssSignature'] = $this->ossSignature;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['EndPoint'])) {
            $model->endPoint = $map['EndPoint'];
        }
        if (isset($map['OssPolicy'])) {
            $model->ossPolicy = $map['OssPolicy'];
        }
        if (isset($map['OssSignature'])) {
            $model->ossSignature = $map['OssSignature'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
