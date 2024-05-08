<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateKeyRequest extends Model
{
    /**
     * @description The ID of the KMS instance.
     *
     * > You must specify this parameter if you need to create a key for a KMS instance. If you need to create a default key of the CMK type, you do not need to specify this parameter.
     * @example kst-bjj62d8f5e0sgtx8h****
     *
     * @var string
     */
    public $DKMSInstanceId;

    /**
     * @description The description of the key.
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
     * This parameter is valid only when the key belongs to an instance type that supports automatic rotation. For more information, see [Key rotation](~~2358146~~).
     * @example true
     *
     * @var bool
     */
    public $enableAutomaticRotation;

    /**
     * @description The key specification. The valid values vary based on the KMS instance type. For more information, see [Overview](~~480159~~).
     *
     * > If you do not specify a value for this parameter, the default key specification is Aliyun_AES_256.
     * @example Aliyun_AES_256
     *
     * @var string
     */
    public $keySpec;

    /**
     * @description The usage of the key. Valid values:
     *
     * If the key supports signing and verification, the default value is SIGN/VERIFY. If the key does not support signing and verification, the default value is ENCRYPT/DECRYPT.
     * @example ENCRYPT/DECRYPT
     *
     * @var string
     */
    public $keyUsage;

    /**
     * @description The key material origin. Valid values:
     *
     * > - If you set Origin to EXTERNAL, you must import key material. For more information, see [Import key material into a symmetric key](~~607841~~) or [Import key material into an asymmetric key](~~608827~~).
     * @example Aliyun_KMS
     *
     * @var string
     */
    public $origin;

    /**
     * @var string
     */
    public $policy;

    /**
     * @description You do not need to specify this parameter. KMS sets a protection level for your key.
     *
     * > - If you do not specify DKMSInstanceId, we recommend that you do not specify this parameter. KMS sets a protection level for your key. If managed hardware security modules (HSMs) exist in the region of your KMS instance, set the value to HSM. If managed HSMs do not exist in the region of your KMS instance, set the value to SOFTWARE. For more information, see Managed HSM overview.
     * @example SOFTWARE
     *
     * @var string
     */
    public $protectionLevel;

    /**
     * @description The period of automatic key rotation. Format: integer[unit]. Unit: d (day), h (hour), m (minute), or s (second). For example, both 7d and 604800s represent a seven-day interval.
     *
     * > If EnableAutomaticRotation is set to true, this parameter is required.
     * @example 365d
     *
     * @var string
     */
    public $rotationInterval;

    /**
     * @description The tag that is added to the key. A tag consists of a key-value pair.
     *
     * > The tag key cannot start with aliyun or acs:.
     * @example [{"TagKey":"disk-encryption","TagValue":"true"}]
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'DKMSInstanceId'          => 'DKMSInstanceId',
        'description'             => 'Description',
        'enableAutomaticRotation' => 'EnableAutomaticRotation',
        'keySpec'                 => 'KeySpec',
        'keyUsage'                => 'KeyUsage',
        'origin'                  => 'Origin',
        'policy'                  => 'Policy',
        'protectionLevel'         => 'ProtectionLevel',
        'rotationInterval'        => 'RotationInterval',
        'tags'                    => 'Tags',
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
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->protectionLevel) {
            $res['ProtectionLevel'] = $this->protectionLevel;
        }
        if (null !== $this->rotationInterval) {
            $res['RotationInterval'] = $this->rotationInterval;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['ProtectionLevel'])) {
            $model->protectionLevel = $map['ProtectionLevel'];
        }
        if (isset($map['RotationInterval'])) {
            $model->rotationInterval = $map['RotationInterval'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
