<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GenerateDataKeyWithoutPlaintextResponseBody extends Model
{
    /**
     * @description The ciphertext of the data that is encrypted by using the primary CMK version.
     *
     * @example ODZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmS7FmDBBQ0BkKsQrtRnidtPwirmDcS0ZuJCU41xxAAWk4Z8qsADfbV0b+i6kQmlvj79dJdGOvtX69Uycs901qOjop4bTS****
     *
     * @var string
     */
    public $ciphertextBlob;

    /**
     * @description The globally unique ID of the CMK.
     *
     * >  If you set the KeyId parameter to an alias, the ID of the CMK to which the alias is bound is returned.
     *
     * @example 599fa825-17de-417e-9554-bb032cc6****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The ID of the key version that is used to encrypt the plaintext. It is the primary version of the CMK.
     *
     * @example 2ab1a983-7072-4bbc-a582-584b5bd8****
     *
     * @var string
     */
    public $keyVersionId;

    /**
     * @description The ID of the request.
     *
     * @example 7021b6ec-4be7-4d3c-8a68-1e85d4d515a0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ciphertextBlob' => 'CiphertextBlob',
        'keyId' => 'KeyId',
        'keyVersionId' => 'KeyVersionId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ciphertextBlob) {
            $res['CiphertextBlob'] = $this->ciphertextBlob;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->keyVersionId) {
            $res['KeyVersionId'] = $this->keyVersionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateDataKeyWithoutPlaintextResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CiphertextBlob'])) {
            $model->ciphertextBlob = $map['CiphertextBlob'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeyVersionId'])) {
            $model->keyVersionId = $map['KeyVersionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
