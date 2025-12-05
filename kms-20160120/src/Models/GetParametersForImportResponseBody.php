<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class GetParametersForImportResponseBody extends Model
{
    /**
     * @var string
     */
    public $importToken;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $publicKey;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $tokenExpireTime;
    protected $_name = [
        'importToken' => 'ImportToken',
        'keyId' => 'KeyId',
        'publicKey' => 'PublicKey',
        'requestId' => 'RequestId',
        'tokenExpireTime' => 'TokenExpireTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->importToken) {
            $res['ImportToken'] = $this->importToken;
        }

        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }

        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tokenExpireTime) {
            $res['TokenExpireTime'] = $this->tokenExpireTime;
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
        if (isset($map['ImportToken'])) {
            $model->importToken = $map['ImportToken'];
        }

        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TokenExpireTime'])) {
            $model->tokenExpireTime = $map['TokenExpireTime'];
        }

        return $model;
    }
}
