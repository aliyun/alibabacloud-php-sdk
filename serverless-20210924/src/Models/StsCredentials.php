<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class StsCredentials extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $expirationTime;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $secretAccessKey;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'accessKeyId'     => 'accessKeyId',
        'expirationTime'  => 'expirationTime',
        'kind'            => 'kind',
        'secretAccessKey' => 'secretAccessKey',
        'token'           => 'token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['accessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->expirationTime) {
            $res['expirationTime'] = $this->expirationTime;
        }
        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }
        if (null !== $this->secretAccessKey) {
            $res['secretAccessKey'] = $this->secretAccessKey;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StsCredentials
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessKeyId'])) {
            $model->accessKeyId = $map['accessKeyId'];
        }
        if (isset($map['expirationTime'])) {
            $model->expirationTime = $map['expirationTime'];
        }
        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }
        if (isset($map['secretAccessKey'])) {
            $model->secretAccessKey = $map['secretAccessKey'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
