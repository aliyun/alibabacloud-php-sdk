<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GenerateKMSDataKeyResponseBody;

use AlibabaCloud\Tea\Model;

class dataKey extends Model
{
    /**
     * @description The ciphertext of the encrypted data key. This parameter is used as CipherText when you create a transcoding job.
     *
     * @example ODZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmS7FmDBBQ0BkKsQrtRnidtPwirmDcS0ZuJCU41xxAAWk4Z8qsADfbV0b+i6kQmlvj79dJdGOvtX69Uycs901qOjop4bTS****
     *
     * @var string
     */
    public $ciphertextBlob;

    /**
     * @description The ID of the customer master key (CMK). The ID must be globally unique.
     *
     * @example 7906979c-8e06-46a2-be2d-68e3ccbc****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The Base64-encoded plaintext of the data key.
     *
     * @example QmFzZTY0IGVuY29kZWQgcGxhaW50****
     *
     * @var string
     */
    public $plaintext;
    protected $_name = [
        'ciphertextBlob' => 'CiphertextBlob',
        'keyId'          => 'KeyId',
        'plaintext'      => 'Plaintext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ciphertextBlob) {
            $res['CiphertextBlob'] = $this->ciphertextBlob;
        }
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
        if (isset($map['CiphertextBlob'])) {
            $model->ciphertextBlob = $map['CiphertextBlob'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['Plaintext'])) {
            $model->plaintext = $map['Plaintext'];
        }

        return $model;
    }
}
