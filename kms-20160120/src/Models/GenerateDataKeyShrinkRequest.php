<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GenerateDataKeyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dryRun;

    /**
     * @description The JSON string that consists of key-value pairs.
     *
     * If you specify this parameter, an equivalent value is required when you call the [Decrypt](https://help.aliyun.com/document_detail/28950.html) operation. For more information, see [EncryptionContext](https://help.aliyun.com/document_detail/42975.html).
     *
     * @example {"Example":"Example"}
     *
     * @var string
     */
    public $encryptionContextShrink;

    /**
     * @description The ID of the CMK. The ID must be globally unique.
     *
     * You can also set this parameter to an alias that is bound to the CMK. For more information, see [Alias overview](https://help.aliyun.com/document_detail/68522.html).
     *
     * This parameter is required.
     *
     * @example 7906979c-8e06-46a2-be2d-68e3ccbc****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The type of the data key that you want to generate. Valid values:
     *
     *   AES_256: a 256-bit symmetric key
     *   AES_128: a 128-bit symmetric key
     *
     * >  We recommend that you use the KeySpec or NumberOfBytes parameter to specify the length of a data key. If none of the parameters are specified, KMS generates a 256-bit data key. If both parameters are specified, KMS ignores the KeySpec parameter.
     *
     * @example AES_256
     *
     * @var string
     */
    public $keySpec;

    /**
     * @description The length of the data key that you want to generate. Unit: bytes.
     *
     * Valid values: 1 to 1024.
     *
     * Default value:
     *
     *   If the KeySpec parameter is set to AES_256, set the value of the NumberOfBytes parameter to 32.
     *   If the KeySpec parameter is set to AES_128, set the value of the NumberOfBytes parameter to 16.
     *
     * @example 256
     *
     * @var int
     */
    public $numberOfBytes;
    protected $_name = [
        'dryRun' => 'DryRun',
        'encryptionContextShrink' => 'EncryptionContext',
        'keyId' => 'KeyId',
        'keySpec' => 'KeySpec',
        'numberOfBytes' => 'NumberOfBytes',
    ];

    public function validate() {}

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateDataKeyShrinkRequest
     */
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

        return $model;
    }
}
