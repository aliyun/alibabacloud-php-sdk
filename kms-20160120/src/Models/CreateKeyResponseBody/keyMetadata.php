<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyResponseBody;

use AlibabaCloud\Tea\Model;

class keyMetadata extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the key.
     *
     * @example acs:kms:cn-qingdao:154035569884****:key/key-hzz62f1cb66fa42qo****
     *
     * @var string
     */
    public $arn;

    /**
     * @description The status of automatic key rotation. Valid values:
     *
     * - Suspended
     * @example Enabled
     *
     * @var string
     */
    public $automaticRotation;

    /**
     * @description The date and time (UTC) when the key was created.
     *
     * @example 2023-03-25T10:00:00Z
     *
     * @var string
     */
    public $creationDate;

    /**
     * @description The user who created the key.
     *
     * @example 154035569884****
     *
     * @var string
     */
    public $creator;

    /**
     * @description The ID of the KMS instance.
     *
     * @example kst-bjj62d8f5e0sgtx8h****
     *
     * @var string
     */
    public $DKMSInstanceId;

    /**
     * @description The time when the key is scheduled for deletion. For more information, see ScheduleKeyDeletion.
     *
     * This parameter is returned only when the value of KeyState is PendingDeletion.
     * @example 2025-03-25T10:00:00Z
     *
     * @var string
     */
    public $deleteDate;

    /**
     * @description The description of the key.
     *
     * @example key description example
     *
     * @var string
     */
    public $description;

    /**
     * @description The globally unique ID of the key.
     *
     * @example key-hzz62f1cb66fa42qo****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The specification of the key.
     *
     * @example Aliyun_AES_256
     *
     * @var string
     */
    public $keySpec;

    /**
     * @description The status of the key.
     *
     * For more information, see [Impacts of key status on API operations](~~44211~~).
     * @example Enabled
     *
     * @var string
     */
    public $keyState;

    /**
     * @description The usage of the key.
     *
     * @example ENCRYPT/DECRYPT
     *
     * @var string
     */
    public $keyUsage;

    /**
     * @description The time when the last rotation was performed. The time is displayed in UTC.
     *
     * For a new key, this parameter value is the time when the initial version of the key was generated.
     * @example 2023-03-25T10:00:00Z
     *
     * @var string
     */
    public $lastRotationDate;

    /**
     * @description The time when the key material expires. The time is displayed in UTC.
     *
     * If this parameter value is empty, the key material does not expire.
     * @example 2025-03-25T10:00:00Z
     *
     * @var string
     */
    public $materialExpireTime;

    /**
     * @description The time when the key is next rotated.
     *
     * This value is returned only when the value of AutomaticRotation is Enabled or Suspended.
     * @example 2024-03-25T10:00:00Z
     *
     * @var string
     */
    public $nextRotationDate;

    /**
     * @description The key material origin.
     *
     * @example Aliyun_KMS
     *
     * @var string
     */
    public $origin;

    /**
     * @description The current primary version identifier of the key.
     *
     * @example 7ce1d081-06cb-42e6-aab6-5c5de030****
     *
     * @var string
     */
    public $primaryKeyVersion;

    /**
     * @description The protection level of the key.
     *
     * @example SOFTWARE
     *
     * @var string
     */
    public $protectionLevel;

    /**
     * @description The interval for automatic key rotation. Unit: seconds. The format is an integer value followed by the character s. For example, if the rotation period is seven days, this parameter is set to 604800s.
     *
     * This value is returned only when the value of AutomaticRotation is Enabled or Suspended.
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
