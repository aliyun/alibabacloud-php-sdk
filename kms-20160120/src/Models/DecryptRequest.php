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
     *   [GenerateDataKey](https://help.aliyun.com/document_detail/28948.html)
     *   [Encrypt](https://help.aliyun.com/document_detail/28949.html)
     *   [GenerateDataKeyWithoutPlaintext](https://help.aliyun.com/document_detail/134043.html)
     *
     * This parameter is required.
     * @example DZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmaaSl+TztSIMe43nbTH/Z1Wr4XfLftKhAciUmDQXuMRl4WTvKhxjMThjK****
     *
     * @var string
     */
    public $ciphertextBlob;

    /**
     * @description The JSON string that consists of key-value pairs.
     *
     * >  If you specify the EncryptionContext parameter when you call the [GenerateDataKey](https://help.aliyun.com/document_detail/28948.html), [Encrypt](https://help.aliyun.com/document_detail/28949.html), or [GenerateDataKeyWithoutPlaintext](https://help.aliyun.com/document_detail/134043.html) operation, you must specify the same context when you call the Decrypt operation. For more information, see [EncryptionContext](https://help.aliyun.com/document_detail/42975.html).
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
