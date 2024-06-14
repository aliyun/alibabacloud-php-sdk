<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GenerateDataKeyWithoutPlaintextShrinkRequest extends Model
{
    /**
     * @description A JSON string that consists of key-value pairs. If you specify this parameter, an equivalent value is required when you call the Decrypt operation. For more information, see [EncryptionContext](https://help.aliyun.com/document_detail/42975.html).
     *
     * @example {"Example":"Example"}
     *
     * @var string
     */
    public $encryptionContextShrink;

    /**
     * @description The globally unique ID of the CMK. You can also set this parameter to an alias that is bound to the CMK. For more information, see Use aliases.
     *
     * This parameter is required.
     * @example 1234abcd-12ab-34cd-56ef-12345678****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The length of the data key that you want to generate. Valid values:
     *
     *   AES_256: 256-bit symmetric key
     *   AES_128: 128-bit symmetric key
     *
     * >  We recommend that you use the KeySpec or NumberOfBytes parameter to specify the length of a data key. If both of them are not specified, KMS generates a 256-bit data key. If both of them are specified, KMS ignores the KeySpec parameter.
     * @example AES_256
     *
     * @var string
     */
    public $keySpec;

    /**
     * @description The length of the data key that you want to generate.
     *
     * Unit: bytes.
     * @example 256
     *
     * @var int
     */
    public $numberOfBytes;
    protected $_name = [
        'encryptionContextShrink' => 'EncryptionContext',
        'keyId'                   => 'KeyId',
        'keySpec'                 => 'KeySpec',
        'numberOfBytes'           => 'NumberOfBytes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return GenerateDataKeyWithoutPlaintextShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
