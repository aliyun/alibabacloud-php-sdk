<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DecryptKMSDataKeyResponseBody extends Model
{
    /**
     * @description The ID of the customer master key (CMK) that was used to decrypt the ciphertext.
     *
     * @example 202b9877-5a25-46e3-a763-e20791b5****
     *
     * @var string
     */
    public $keyId;

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
     * @example 25818875-5F78-4A*****F6-D7393642CA58
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'keyId'     => 'KeyId',
        'plaintext' => 'Plaintext',
        'requestId' => 'RequestId',
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
     * @return DecryptKMSDataKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
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
