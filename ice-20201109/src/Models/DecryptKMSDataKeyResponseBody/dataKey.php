<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DecryptKMSDataKeyResponseBody;

use AlibabaCloud\Tea\Model;

class dataKey extends Model
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
    protected $_name = [
        'keyId'     => 'KeyId',
        'plaintext' => 'Plaintext',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataKey
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

        return $model;
    }
}
