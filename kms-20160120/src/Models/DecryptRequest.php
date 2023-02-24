<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class DecryptRequest extends Model
{
    /**
     * @description The ciphertext that you want to decrypt.
     *
     * You can generate the ciphertext by calling the following operations:
     *
     *   [GenerateDataKey](~~28948~~)
     *   [Encrypt](~~28949~~)
     *   [GenerateDataKeyWithoutPlaintext](~~134043~~)
     *
     * @example DZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmaaSl+TztSIMe43nbTH/Z1Wr4XfLftKhAciUmDQXuMRl4WTvKhxjMThjK****
     *
     * @var string
     */
    public $ciphertextBlob;

    /**
     * @description The JSON string that consists of key-value pairs.
     *
     * >  If you specify the EncryptionContext parameter when you call the [GenerateDataKey](~~28948~~), [Encrypt](~~28949~~), or [GenerateDataKeyWithoutPlaintext](~~134043~~) operation, you must specify the same context when you call the Decrypt operation. For more information, see [EncryptionContext](~~42975~~).
     * @example {"Example":"Example"}
     *
     * @var mixed[]
     */
    public $encryptionContext;
    protected $_name = [
        'ciphertextBlob'    => 'CiphertextBlob',
        'encryptionContext' => 'EncryptionContext',
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
        if (null !== $this->encryptionContext) {
            $res['EncryptionContext'] = $this->encryptionContext;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DecryptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CiphertextBlob'])) {
            $model->ciphertextBlob = $map['CiphertextBlob'];
        }
        if (isset($map['EncryptionContext'])) {
            $model->encryptionContext = $map['EncryptionContext'];
        }

        return $model;
    }
}
