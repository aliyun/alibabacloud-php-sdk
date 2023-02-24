<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class AsymmetricDecryptResponseBody extends Model
{
    /**
     * @description The ID of the CMK. The ID must be globally unique.
     *
     * >  If you set the KeyId parameter in the request to an alias, the ID of the CMK to which the alias is bound is returned.
     * @example 5c438b18-05be-40ad-b6c2-3be6752c****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The version ID of the CMK that is used to encrypt the plaintext.
     *
     * @example 2ab1a983-7072-4bbc-a582-584b5bd8****
     *
     * @var string
     */
    public $keyVersionId;

    /**
     * @description The Base64-encoded plaintext that is generated after decryption.
     *
     * @example SGVsbG8gd29ybGQ=
     *
     * @var string
     */
    public $plaintext;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 475f1620-b9d3-4d35-b5c6-3fbdd941423d
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'keyId'        => 'KeyId',
        'keyVersionId' => 'KeyVersionId',
        'plaintext'    => 'Plaintext',
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
        if (null !== $this->plaintext) {
            $res['Plaintext'] = $this->plaintext;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsymmetricDecryptResponseBody
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
        if (isset($map['Plaintext'])) {
            $model->plaintext = $map['Plaintext'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
