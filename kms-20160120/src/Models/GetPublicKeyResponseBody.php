<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GetPublicKeyResponseBody extends Model
{
    /**
     * @description The globally unique ID of the CMK.
     *
     * >  If you set the KeyId parameter to the alias of the CMK, the ID of the CMK to which the alias is bound is returned.
     * @example 5c438b18-05be-40ad-b6c2-3be6752c****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The version of the CMK that is used to encrypt the plaintext.
     *
     * @example 2ab1a983-7072-4bbc-a582-584b5bd8****
     *
     * @var string
     */
    public $keyVersionId;

    /**
     * @description The public key returned in the PEM format.
     *
     * @example -----BEGIN PUBLIC KEY-----\\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAs5Yu9AEgATN2/e3nUz1K\\nEy6ng8MSPutcse2/VECG/NUF9C6D4IsJ64ShzY3dcn34WYzTOe916eMJFxyrNrSw\\nHtc4UOR5AvaoRrfpgu2uq+i70/ZXrWL+pGb1hgZV8cWheIHMxwrR3IiQlM5qN7EF\\n9BdyWtyBfUGsp0Bn1VqlPc5G0x0a9xU2z9YtP994yDenNVIoIQ6Cov1lIEuwXAb2\\n7boC41ePXwD0JWt41sP+rgCmpjBx00puIG+IlnoReEgI1ZGYmK98GgA/XzmNjZiD\\nyvXJZAcM33Ue85+PkR5iHTtSEbi4QAoqpJabprUzz3Fin2j1dRrcacxGb7p31A9c\\nJQIDAQAB\\n-----END PUBLIC KEY-----\\n
     *
     * @var string
     */
    public $publicKey;

    /**
     * @description The ID of the request.
     *
     * @example 475f1620-b9d3-4d35-b5c6-3fbdd941423d
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'keyId'        => 'KeyId',
        'keyVersionId' => 'KeyVersionId',
        'publicKey'    => 'PublicKey',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->keyVersionId) {
            $res['KeyVersionId'] = $this->keyVersionId;
        }
        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPublicKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeyVersionId'])) {
            $model->keyVersionId = $map['KeyVersionId'];
        }
        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
