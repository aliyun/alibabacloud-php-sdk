<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GetParametersForImportResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $publicKey;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $tokenExpireTime;

    /**
     * @var string
     */
    public $importToken;
    protected $_name = [
        'requestId'       => 'RequestId',
        'publicKey'       => 'PublicKey',
        'keyId'           => 'KeyId',
        'tokenExpireTime' => 'TokenExpireTime',
        'importToken'     => 'ImportToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->tokenExpireTime) {
            $res['TokenExpireTime'] = $this->tokenExpireTime;
        }
        if (null !== $this->importToken) {
            $res['ImportToken'] = $this->importToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetParametersForImportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['TokenExpireTime'])) {
            $model->tokenExpireTime = $map['TokenExpireTime'];
        }
        if (isset($map['ImportToken'])) {
            $model->importToken = $map['ImportToken'];
        }

        return $model;
    }
}
