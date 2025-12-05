<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class GenerateAndExportDataKeyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dryRun;

    /**
     * @var string
     */
    public $encryptionContextShrink;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $keySpec;

    /**
     * @var int
     */
    public $numberOfBytes;

    /**
     * @var string
     */
    public $publicKeyBlob;

    /**
     * @var string
     */
    public $wrappingAlgorithm;

    /**
     * @var string
     */
    public $wrappingKeySpec;
    protected $_name = [
        'dryRun' => 'DryRun',
        'encryptionContextShrink' => 'EncryptionContext',
        'keyId' => 'KeyId',
        'keySpec' => 'KeySpec',
        'numberOfBytes' => 'NumberOfBytes',
        'publicKeyBlob' => 'PublicKeyBlob',
        'wrappingAlgorithm' => 'WrappingAlgorithm',
        'wrappingKeySpec' => 'WrappingKeySpec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->encryptionContextShrink) {
            $res['EncryptionContext'] = $this->encryptionContextShrink;
        }

        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }

        if (null !== $this->keySpec) {
            $res['KeySpec'] = $this->keySpec;
        }

        if (null !== $this->numberOfBytes) {
            $res['NumberOfBytes'] = $this->numberOfBytes;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EncryptionContext'])) {
            $model->encryptionContextShrink = $map['EncryptionContext'];
        }

        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        if (isset($map['KeySpec'])) {
            $model->keySpec = $map['KeySpec'];
        }

        if (isset($map['NumberOfBytes'])) {
            $model->numberOfBytes = $map['NumberOfBytes'];
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
