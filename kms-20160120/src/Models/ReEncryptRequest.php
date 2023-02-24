<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ReEncryptRequest extends Model
{
    /**
     * @description The ciphertext that you want to re-encrypt.
     *
     * You can set this parameter to the ciphertext that is returned after a symmetric or asymmetric encryption operation.
     *
     *   Symmetric encryption: the ciphertext returned after you call the [Encrypt](~~28949~~), [GenerateDataKey](~~28948~~), [GenerateDataKeyWithoutPlaintext](~~134043~~), or [GenerateAndExportDataKey](~~176804~~) operation
     *   Asymmetric encryption: the public key-encrypted ciphertext returned after you call the [GenerateAndExportDataKey](~~176804~~) operation, or the ciphertext encrypted by using the public key of an asymmetric key pair outside KMS
     *
     * @example ODZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmS7FmDBBQ0BkKsQrtRnidtPwirmDcS0ZuJCU41xxAAWk4Z8qsADfbV0b+i6kQmlvj79dJdGOvtX69Uycs901q********
     *
     * @var string
     */
    public $ciphertextBlob;

    /**
     * @description A JSON string that consists of key-value pairs. This parameter specifies the EncryptionContext that is used to re-encrypt the decrypted data or data key.
     *
     * @example {"Example":"Example"}
     *
     * @var mixed[]
     */
    public $destinationEncryptionContext;

    /**
     * @description The ID of the symmetric CMK that is used to re-encrypt the ciphertext after the ciphertext is decrypted.
     *
     * @example 1234abcd-12ab-34cd-56ef-12345678****
     *
     * @var string
     */
    public $destinationKeyId;

    /**
     * @description The encryption algorithm based on which the public key is used to encrypt the ciphertext specified by CiphertextBlob. For more information about encryption algorithms, see [AsymmetricDecrypt](~~148130~~).
     *
     * Valid values:
     *
     *   RSAES_OAEP_SHA\_256
     *   RSAES_OAEP_SHA\_1
     *   SM2PKE
     *
     * >  If you set CiphertextBlob to the public key-encrypted ciphertext that is returned after an asymmetric encryption operation, specify this parameter.
     * @example RSAES_OAEP_SHA_256
     *
     * @var string
     */
    public $sourceEncryptionAlgorithm;

    /**
     * @description A JSON string that consists of key-value pairs. If you specify EncryptionContext when you call the [Encrypt](~~28949~~), [GenerateDataKey](~~28948~~), [GenerateDataKeyWithoutPlaintext](~~134043~~), or [GenerateAndExportDataKey](~~176804~~) operation to encrypt the data or data key, an equivalent value is required here. For more information, see [EncryptionContext](~~42975~~).
     *
     * >  If you set CiphertextBlob to the ciphertext that is returned after a symmetric encryption operation, specify this parameter.
     * @example {"Example":"Example"}
     *
     * @var mixed[]
     */
    public $sourceEncryptionContext;

    /**
     * @description The ID of the CMK that is used to decrypt the ciphertext.
     *
     * >  If you set CiphertextBlob to the public key-encrypted ciphertext that is returned after an asymmetric encryption operation, specify this parameter.
     * @example 5c438b18-05be-40ad-b6c2-3be6752c****
     *
     * @var string
     */
    public $sourceKeyId;

    /**
     * @description The ID of the CMK version that is used to decrypt the ciphertext.
     *
     * >  If you set CiphertextBlob to the public key-encrypted ciphertext that is returned after an asymmetric encryption operation, specify this parameter.
     * @example 2ab1a983-7072-4bbc-a582-584b5bd8****
     *
     * @var string
     */
    public $sourceKeyVersionId;
    protected $_name = [
        'ciphertextBlob'               => 'CiphertextBlob',
        'destinationEncryptionContext' => 'DestinationEncryptionContext',
        'destinationKeyId'             => 'DestinationKeyId',
        'sourceEncryptionAlgorithm'    => 'SourceEncryptionAlgorithm',
        'sourceEncryptionContext'      => 'SourceEncryptionContext',
        'sourceKeyId'                  => 'SourceKeyId',
        'sourceKeyVersionId'           => 'SourceKeyVersionId',
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
        if (null !== $this->destinationEncryptionContext) {
            $res['DestinationEncryptionContext'] = $this->destinationEncryptionContext;
        }
        if (null !== $this->destinationKeyId) {
            $res['DestinationKeyId'] = $this->destinationKeyId;
        }
        if (null !== $this->sourceEncryptionAlgorithm) {
            $res['SourceEncryptionAlgorithm'] = $this->sourceEncryptionAlgorithm;
        }
        if (null !== $this->sourceEncryptionContext) {
            $res['SourceEncryptionContext'] = $this->sourceEncryptionContext;
        }
        if (null !== $this->sourceKeyId) {
            $res['SourceKeyId'] = $this->sourceKeyId;
        }
        if (null !== $this->sourceKeyVersionId) {
            $res['SourceKeyVersionId'] = $this->sourceKeyVersionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReEncryptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CiphertextBlob'])) {
            $model->ciphertextBlob = $map['CiphertextBlob'];
        }
        if (isset($map['DestinationEncryptionContext'])) {
            $model->destinationEncryptionContext = $map['DestinationEncryptionContext'];
        }
        if (isset($map['DestinationKeyId'])) {
            $model->destinationKeyId = $map['DestinationKeyId'];
        }
        if (isset($map['SourceEncryptionAlgorithm'])) {
            $model->sourceEncryptionAlgorithm = $map['SourceEncryptionAlgorithm'];
        }
        if (isset($map['SourceEncryptionContext'])) {
            $model->sourceEncryptionContext = $map['SourceEncryptionContext'];
        }
        if (isset($map['SourceKeyId'])) {
            $model->sourceKeyId = $map['SourceKeyId'];
        }
        if (isset($map['SourceKeyVersionId'])) {
            $model->sourceKeyVersionId = $map['SourceKeyVersionId'];
        }

        return $model;
    }
}
