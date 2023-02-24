<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class DecryptResponseBody extends Model
{
    /**
     * @description The ID of the customer master key (CMK) that is used to decrypt the ciphertext.
     *
     * It is the GUID of the CMK.
     * @example 202b9877-5a25-46e3-a763-e20791b5****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The ID of the CMK version that is used to decrypt the ciphertext.
     *
     * @example 2ab1a983-7072-4bbc-a582-584b5bd8****
     *
     * @var string
     */
    public $keyVersionId;

    /**
     * @description The plaintext that is generated after decryption.
     *
     * @example tRYXuCwgja12xxO1N/gZERDDCLw9doZEQiPDk/Bv****
     *
     * @var string
     */
    public $plaintext;

    /**
     * @description The ID of the request.
     *
     * @example 207596a2-36d3-4840-b1bd-f87044699bd7
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
     * @return DecryptResponseBody
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
