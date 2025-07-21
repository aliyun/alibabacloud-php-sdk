<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ExportDataKeyShrinkRequest extends Model
{
    /**
     * @description The ciphertext of the data key encrypted by using a CMK.
     *
     * This parameter is required.
     *
     * @example ODZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmS7FmDBBQ0BkKsQrtRnidtPwirmDcS0ZuJCU41xxAAWk4Z8qsADfbV0b+i6kQmlvj79dJdGOvtX69Uycs901q********
     *
     * @var string
     */
    public $ciphertextBlob;

    /**
     * @var string
     */
    public $dryRun;

    /**
     * @description A JSON string that consists of key-value pairs. If you specify this parameter when you use a CMK to encrypt the data key, an equivalent value is required here. For more information, see [EncryptionContext](https://help.aliyun.com/document_detail/42975.html).
     *
     * @example {"Example":"Example"}
     *
     * @var string
     */
    public $encryptionContextShrink;

    /**
     * @description A Base64-encoded public key.
     *
     * This parameter is required.
     *
     * @example MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAndKfC2ReLL2+y8a0+ZBBeAft/uBYo86GZiYJuflqgUzKxpyuvlo3uQkBv6b+nx+0tz8g8v7GhpPWMSW5L9mNHYsvYFsa7jTxsYdt17yj6GlUHPuMIs8hr5qbwl38IHU1iIa7nYWwE2fb3ePOvLDACRJVgGpU0yxioW80d2QD+9aU4jF5dlAahcfgsNzo2CXzCUc1+xbmNuq7Rp+H9VJB9dyYOwqnW3RhOLBo21FzpORapf0UiRlrHRpk1V6ez+aE1dofaYh/9bh0m6ioxj7j5hpZbWccuEZTMBKd+cbuBkRhJzc6Tti6qwZbDiu4fUwbZS0Tqpuo1UadiyxMW********
     *
     * @var string
     */
    public $publicKeyBlob;

    /**
     * @description The encryption algorithm based on which you want to use the public key specified by PublicKeyBlob to encrypt the data key. For more information about encryption algorithms, see [AsymmetricDecrypt](https://help.aliyun.com/document_detail/148130.html).
     *
     * Valid values:
     *
     *   RSAES_OAEP_SHA_256
     *   RSAES_OAEP_SHA_1
     *   SM2PKE
     *
     * This parameter is required.
     *
     * @example RSAES_OAEP_SHA_256
     *
     * @var string
     */
    public $wrappingAlgorithm;

    /**
     * @description The key type of the public key specified by PublicKeyBlob. For more information about key types, see [Introduction to asymmetric keys](https://help.aliyun.com/document_detail/148147.html).
     *
     * Valid values:
     *
     *   RSA_2048
     *   EC_SM2
     *
     * This parameter is required.
     *
     * @example RSA_2048
     *
     * @var string
     */
    public $wrappingKeySpec;
    protected $_name = [
        'ciphertextBlob' => 'CiphertextBlob',
        'dryRun' => 'DryRun',
        'encryptionContextShrink' => 'EncryptionContext',
        'publicKeyBlob' => 'PublicKeyBlob',
        'wrappingAlgorithm' => 'WrappingAlgorithm',
        'wrappingKeySpec' => 'WrappingKeySpec',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ciphertextBlob) {
            $res['CiphertextBlob'] = $this->ciphertextBlob;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->encryptionContextShrink) {
            $res['EncryptionContext'] = $this->encryptionContextShrink;
        }
        if (null !== $this->publicKeyBlob) {
            $res['PublicKeyBlob'] = $this->publicKeyBlob;
        }
        if (null !== $this->wrappingAlgorithm) {
            $res['WrappingAlgorithm'] = $this->wrappingAlgorithm;
        }
        if (null !== $this->wrappingKeySpec) {
            $res['WrappingKeySpec'] = $this->wrappingKeySpec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportDataKeyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CiphertextBlob'])) {
            $model->ciphertextBlob = $map['CiphertextBlob'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EncryptionContext'])) {
            $model->encryptionContextShrink = $map['EncryptionContext'];
        }
        if (isset($map['PublicKeyBlob'])) {
            $model->publicKeyBlob = $map['PublicKeyBlob'];
        }
        if (isset($map['WrappingAlgorithm'])) {
            $model->wrappingAlgorithm = $map['WrappingAlgorithm'];
        }
        if (isset($map['WrappingKeySpec'])) {
            $model->wrappingKeySpec = $map['WrappingKeySpec'];
        }

        return $model;
    }
}
