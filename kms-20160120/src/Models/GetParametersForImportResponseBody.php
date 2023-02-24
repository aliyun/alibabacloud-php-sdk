<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GetParametersForImportResponseBody extends Model
{
    /**
     * @description The token that is used to import key material.
     *
     * The token is valid for 24 hours. The value of this parameter is required when you call the [ImportKeyMaterial](~~68622~~) operation.
     * @example Base64String
     *
     * @var string
     */
    public $importToken;

    /**
     * @description The globally unique ID of the CMK.
     *
     * The value of this parameter is required when you call the [ImportKeyMaterial](~~68622~~) operation.
     * @example 202b9877-5a25-46e3-a763-e20791b5****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The public key that is used to encrypt key material.
     *
     * The public key is Base64-encoded.
     * @example MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAlls4uIBxD0GG84C+lGBO6Dhpf1J3XimC6cPmPNaKKJMOzoX4tD+C+r7aZv8lZ3vnPfxuxvy/YwG+whUxTEEFUdqJTOIzhPfYucupqKM92crVHIuG+xtMVeHKjyTr+UrtKCsQikqHT+19yDRN/RMoo2HUx0gmEnRyXd8t3JyUXun9FdoxKA08GrsV7nodb9ZsoBLhnev7tTLcXvLyKW6XG1ZQCQm6dPnbnwLeDXR7uK0Lqn9PM28mBIdaiQUQxj2XbM1CoJA+JiyVX3Ptdb+4rqukb4Rb05B80Bs9xV/cf7FIku08l7xGhrGiQFq+DFXwQWtwihXHZxz3LhldU+4ZPwID****
     *
     * @var string
     */
    public $publicKey;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 8cdf51fd-bcd6-d79a-0ef4-e52c9b5466dc
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the token expires.
     *
     * @example 2018-01-25T00:01:02Z
     *
     * @var string
     */
    public $tokenExpireTime;
    protected $_name = [
        'importToken'     => 'ImportToken',
        'keyId'           => 'KeyId',
        'publicKey'       => 'PublicKey',
        'requestId'       => 'RequestId',
        'tokenExpireTime' => 'TokenExpireTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetParametersForImportResponseBody
     */
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
