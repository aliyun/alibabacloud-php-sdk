<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateKeyRequest extends Model
{
    /**
     * @description The ID of the dedicated KMS instance.
     *
     * @example kst-bjj62d8f5e0sgtx8h****
     *
     * @var string
     */
    public $DKMSInstanceId;

    /**
     * @description The description of the CMK.
     *
     * The description can be 0 to 8,192 characters in length.
     * @example key description example
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to enable automatic key rotation. Valid values:
     *
     *   true
     *   false
     *
     * >  If the Origin parameter is set to EXTERNAL or the KeySpec parameter is set to an asymmetric CMK type, automatic key rotation is not supported.
     * @example false
     *
     * @var bool
     */
    public $enableAutomaticRotation;

    /**
     * @description The type of the CMK. Valid values:
     *
     *   Aliyun_AES\_256
     *   Aliyun_AES\_128
     *   Aliyun_AES\_192
     *   Aliyun_SM4
     *   RSA\_2048
     *   RSA\_3072
     *   EC_P256
     *   EC_P256K
     *   EC_SM2
     *
     * >
     *   The default type of the CMK is Aliyun_AES\_256.
     *   Only Dedicated KMS supports Aliyun_AES\_128 and Aliyun_AES\_192.
     *
     * @example Aliyun_AES_256
     *
     * @var string
     */
    public $keySpec;

    /**
     * @description The usage of the CMK. Valid values:
     *
     *   ENCRYPT/DECRYPT: encrypts or decrypts data.
     *   SIGN/VERIFY: generates or verifies a digital signature.
     *
     * If the CMK supports signature verification, the default value is SIGN/VERIFY. If the CMK does not support signature verification, the default value is ENCRYPT/DECRYPT.
     * @example ENCRYPT/DECRYPT
     *
     * @var string
     */
    public $keyUsage;

    /**
     * @description The source of key material. Valid values:
     *
     *   Aliyun_KMS (default value)
     *   EXTERNAL
     *
     * >
     *   The value of this parameter is case-sensitive.
     *   If you set the KeySpec parameter to an asymmetric CMK type, you are not allowed to set the Origin parameter to EXTERNAL.
     *   If you set the Origin parameter to EXTERNAL, you must import key material. For more information, see [Import key material](~~68523~~).
     *
     * @example Aliyun_KMS
     *
     * @var string
     */
    public $origin;

    /**
     * @description The protection level of the CMK. Valid values:
     *
     *   SOFTWARE
     *   HSM
     *
     * >
     *   The value of this parameter is case-sensitive.
     *   Assume that you set this parameter to HSM. If you set the Origin parameter to Aliyun_KMS, the CMK is created in a managed HSM. If you set the Origin parameter to EXTERNAL, you can import an external key into the managed HSM.
     *
     * @example SOFTWARE
     *
     * @var string
     */
    public $protectionLevel;

    /**
     * @description The period of automatic key rotation. Specify the value in the integer\[unit] format. Unit: d (day), h (hour), m (minute), or s (second). For example, you can use either 7d or 604800s to specify a seven-day period. The period can range from 7 days to 730 days.
     *
     * >  If you set the EnableAutomaticRotation parameter to true, you must also specify this parameter. If you set the EnableAutomaticRotation parameter to false, you can leave this parameter unspecified.
     * @example 365d
     *
     * @var string
     */
    public $rotationInterval;
    protected $_name = [
        'DKMSInstanceId'          => 'DKMSInstanceId',
        'description'             => 'Description',
        'enableAutomaticRotation' => 'EnableAutomaticRotation',
        'keySpec'                 => 'KeySpec',
        'keyUsage'                => 'KeyUsage',
        'origin'                  => 'Origin',
        'protectionLevel'         => 'ProtectionLevel',
        'rotationInterval'        => 'RotationInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DKMSInstanceId) {
            $res['DKMSInstanceId'] = $this->DKMSInstanceId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableAutomaticRotation) {
            $res['EnableAutomaticRotation'] = $this->enableAutomaticRotation;
        }
        if (null !== $this->keySpec) {
            $res['KeySpec'] = $this->keySpec;
        }
        if (null !== $this->keyUsage) {
            $res['KeyUsage'] = $this->keyUsage;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->protectionLevel) {
            $res['ProtectionLevel'] = $this->protectionLevel;
        }
        if (null !== $this->rotationInterval) {
            $res['RotationInterval'] = $this->rotationInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DKMSInstanceId'])) {
            $model->DKMSInstanceId = $map['DKMSInstanceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableAutomaticRotation'])) {
            $model->enableAutomaticRotation = $map['EnableAutomaticRotation'];
        }
        if (isset($map['KeySpec'])) {
            $model->keySpec = $map['KeySpec'];
        }
        if (isset($map['KeyUsage'])) {
            $model->keyUsage = $map['KeyUsage'];
        }
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }
        if (isset($map['ProtectionLevel'])) {
            $model->protectionLevel = $map['ProtectionLevel'];
        }
        if (isset($map['RotationInterval'])) {
            $model->rotationInterval = $map['RotationInterval'];
        }

        return $model;
    }
}
