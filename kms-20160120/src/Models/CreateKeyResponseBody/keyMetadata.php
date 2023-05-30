<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyResponseBody;

use AlibabaCloud\Tea\Model;

class keyMetadata extends Model
{
    /**
     * @description The period of automatic key rotation. Unit: seconds. The value is in the format of an integer followed by the letter s. For example, if the rotation period is seven days, this parameter is set to 604800s. This value is returned only when the value of the AutomaticRotation parameter is Enabled or Suspended.
     *
     * @example acs:kms:cn-qingdao:154035569884****:key/d6bee1cb-2e14-4277-ba6b-73786b21****
     *
     * @var string
     */
    public $arn;

    /**
     * @description The time when the key material expires. The time is displayed in UTC.
     *
     * If this parameter value is empty, the key material does not expire.
     * @example Disabled
     *
     * @var string
     */
    public $automaticRotation;

    /**
     * @description The usage of the CMK.
     *
     * @example 2022-03-25T10:42:40Z
     *
     * @var string
     */
    public $creationDate;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the CMK.
     *
     * @example 154035569884****
     *
     * @var string
     */
    public $creator;

    /**
     * @description The date and time when the CMK was created. The time is displayed in UTC.
     *
     * @example kst-bjj62d8f5e0sgtx8h****
     *
     * @var string
     */
    public $DKMSInstanceId;

    /**
     * @description The time when the last rotation was performed. The time is displayed in UTC.
     *
     * For a new CMK, this parameter value is the time when the initial version of the CMK was generated.
     * @example 2022-07-06T18:22:03Z
     *
     * @var string
     */
    public $deleteDate;

    /**
     * @description The ID of the current primary key version of the symmetric CMK.
     *
     * > * The primary key version of a symmetric CMK is an active encryption key. KMS uses the primary key version of a specified CMK to encrypt data.
     * > * This parameter is unavailable for asymmetric CMKs.
     * @example key description example
     *
     * @var string
     */
    public $description;

    /**
     * @description The metadata of the CMK.
     *
     * @example d6bee1cb-2e14-4277-ba6b-73786b21****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The description of the CMK.
     *
     * @example Aliyun_AES_256
     *
     * @var string
     */
    public $keySpec;

    /**
     * @description The time when the next rotation will be performed.
     *
     * >  This value is returned only when the value of the AutomaticRotation parameter is Enabled or Suspended.
     * @example Enabled
     *
     * @var string
     */
    public $keyState;

    /**
     * @description The protection level of the CMK.
     *
     * @example ENCRYPT/DECRYPT
     *
     * @var string
     */
    public $keyUsage;

    /**
     * @description The creator of the CMK.
     *
     * @example 2022-06-06T18:22:03Z
     *
     * @var string
     */
    public $lastRotationDate;

    /**
     * @description The source of the key material for the CMK.
     *
     * @example 2022-07-06T18:22:03Z
     *
     * @var string
     */
    public $materialExpireTime;

    /**
     * @description The ID of the CMK. The ID must be globally unique.
     *
     * @example 2022-07-06T18:22:03Z
     *
     * @var string
     */
    public $nextRotationDate;

    /**
     * @description The type of the CMK.
     *
     * @example Aliyun_KMS
     *
     * @var string
     */
    public $origin;

    /**
     * @description The time when the CMK is scheduled for deletion.
     *
     * >  This value is returned only when the value of the KeyState parameter is PendingDeletion.
     * @example 7ce1d081-06cb-42e6-aab6-5c5de030****
     *
     * @var string
     */
    public $primaryKeyVersion;

    /**
     * @description Indicates whether automatic key rotation is enabled. Valid values:
     *
     *   Enabled: Automatic key rotation is enabled.
     *   Disabled: Automatic key rotation is disabled.
     *   Suspended: Automatic key rotation is suspended. For more information, see [Automatic key rotation](~~134270~~).
     *
     * >  Automatic key rotation is available only for symmetric CMKs.
     * @example SOFTWARE
     *
     * @var string
     */
    public $protectionLevel;

    /**
     * @description The status of the CMK.
     *
     * For more information, see [Impact of CMK status on API operations](~~44211~~).
     * @example 31536000s
     *
     * @var string
     */
    public $rotationInterval;
    protected $_name = [
        'arn'                => 'Arn',
        'automaticRotation'  => 'AutomaticRotation',
        'creationDate'       => 'CreationDate',
        'creator'            => 'Creator',
        'DKMSInstanceId'     => 'DKMSInstanceId',
        'deleteDate'         => 'DeleteDate',
        'description'        => 'Description',
        'keyId'              => 'KeyId',
        'keySpec'            => 'KeySpec',
        'keyState'           => 'KeyState',
        'keyUsage'           => 'KeyUsage',
        'lastRotationDate'   => 'LastRotationDate',
        'materialExpireTime' => 'MaterialExpireTime',
        'nextRotationDate'   => 'NextRotationDate',
        'origin'             => 'Origin',
        'primaryKeyVersion'  => 'PrimaryKeyVersion',
        'protectionLevel'    => 'ProtectionLevel',
        'rotationInterval'   => 'RotationInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->automaticRotation) {
            $res['AutomaticRotation'] = $this->automaticRotation;
        }
        if (null !== $this->creationDate) {
            $res['CreationDate'] = $this->creationDate;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->DKMSInstanceId) {
            $res['DKMSInstanceId'] = $this->DKMSInstanceId;
        }
        if (null !== $this->deleteDate) {
            $res['DeleteDate'] = $this->deleteDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->keySpec) {
            $res['KeySpec'] = $this->keySpec;
        }
        if (null !== $this->keyState) {
            $res['KeyState'] = $this->keyState;
        }
        if (null !== $this->keyUsage) {
            $res['KeyUsage'] = $this->keyUsage;
        }
        if (null !== $this->lastRotationDate) {
            $res['LastRotationDate'] = $this->lastRotationDate;
        }
        if (null !== $this->materialExpireTime) {
            $res['MaterialExpireTime'] = $this->materialExpireTime;
        }
        if (null !== $this->nextRotationDate) {
            $res['NextRotationDate'] = $this->nextRotationDate;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->primaryKeyVersion) {
            $res['PrimaryKeyVersion'] = $this->primaryKeyVersion;
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
     * @return keyMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['AutomaticRotation'])) {
            $model->automaticRotation = $map['AutomaticRotation'];
        }
        if (isset($map['CreationDate'])) {
            $model->creationDate = $map['CreationDate'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DKMSInstanceId'])) {
            $model->DKMSInstanceId = $map['DKMSInstanceId'];
        }
        if (isset($map['DeleteDate'])) {
            $model->deleteDate = $map['DeleteDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeySpec'])) {
            $model->keySpec = $map['KeySpec'];
        }
        if (isset($map['KeyState'])) {
            $model->keyState = $map['KeyState'];
        }
        if (isset($map['KeyUsage'])) {
            $model->keyUsage = $map['KeyUsage'];
        }
        if (isset($map['LastRotationDate'])) {
            $model->lastRotationDate = $map['LastRotationDate'];
        }
        if (isset($map['MaterialExpireTime'])) {
            $model->materialExpireTime = $map['MaterialExpireTime'];
        }
        if (isset($map['NextRotationDate'])) {
            $model->nextRotationDate = $map['NextRotationDate'];
        }
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }
        if (isset($map['PrimaryKeyVersion'])) {
            $model->primaryKeyVersion = $map['PrimaryKeyVersion'];
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
