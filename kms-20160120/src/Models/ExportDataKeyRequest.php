<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ExportDataKeyRequest extends Model
{
    /**
     * @var string
     */
    public $ciphertextBlob;

    /**
     * @var mixed[]
     */
    public $encryptionContext;

    /**
     * @var string
     */
    public $publicKeyBlob;

    /**
     * @var string
     */
    public $wrappingKeySpec;

    /**
     * @var string
     */
    public $wrappingAlgorithm;
    protected $_name = [
        'ciphertextBlob'    => 'CiphertextBlob',
        'encryptionContext' => 'EncryptionContext',
        'publicKeyBlob'     => 'PublicKeyBlob',
        'wrappingKeySpec'   => 'WrappingKeySpec',
        'wrappingAlgorithm' => 'WrappingAlgorithm',
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
        if (null !== $this->publicKeyBlob) {
            $res['PublicKeyBlob'] = $this->publicKeyBlob;
        }
        if (null !== $this->wrappingKeySpec) {
            $res['WrappingKeySpec'] = $this->wrappingKeySpec;
        }
        if (null !== $this->wrappingAlgorithm) {
            $res['WrappingAlgorithm'] = $this->wrappingAlgorithm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportDataKeyRequest
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
        if (isset($map['PublicKeyBlob'])) {
            $model->publicKeyBlob = $map['PublicKeyBlob'];
        }
        if (isset($map['WrappingKeySpec'])) {
            $model->wrappingKeySpec = $map['WrappingKeySpec'];
        }
        if (isset($map['WrappingAlgorithm'])) {
            $model->wrappingAlgorithm = $map['WrappingAlgorithm'];
        }

        return $model;
    }
}
