<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyResponseBody;

use AlibabaCloud\Tea\Model;

class keyMetadata extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the CMK.
     *
     * @example acs:kms:cn-hangzhou:154035569884****:key/05754286-3ba2-4fa6-8d41-4323aca6****
     *
     * @var string
     */
    public $arn;

    /**
     * @description Indicates whether automatic key rotation is enabled. Valid values:
     *
     *   Enabled
     *   Disabled
     *   Suspended
     *
     * >  Only symmetric CMKs support automatic key rotation.
     * @example Disabled
     *
     * @var string
     */
    public $automaticRotation;

    /**
     * @description The time when the CMK was created. The time is displayed in UTC.
     *
     * @example 2021-05-20T06:34:21Z
     *
     * @var string
     */
    public $creationDate;

    /**
     * @description The Alibaba Cloud account that is used to create the CMK.
     *
     * @example 154035569884****
     *
     * @var string
     */
    public $creator;

    /**
     * @description The ID of the dedicated KMS instance.
     *
     * @example kst-bjj62d8f5e0sgtx8h****
     *
     * @var string
     */
    public $DKMSInstanceId;

    /**
     * @description The time at which the CMK is scheduled for deletion. The time is displayed in UTC.
     *
     * >  This parameter is returned only when the value of the KeyState parameter is PendingDeletion.
     * @example 2021-05-26T18:22:03Z
     *
     * @var string
     */
    public $deleteDate;

    /**
     * @description Indicates whether deletion protection is enabled. Valid values:
     *
     *   Enabled
     *   Disabled
     *
     * @example Enabled
     *
     * @var string
     */
    public $deletionProtection;

    /**
     * @description The description of deletion protection.
     *
     * @example The CMK is being used by XXX. Deletion protection is set.
     *
     * @var string
     */
    public $deletionProtectionDescription;

    /**
     * @description The description of the CMK.
     *
     * @example key description example
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the CMK. The ID must be globally unique.
     *
     * @example 05754286-3ba2-4fa6-8d41-4323aca6****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The type of the CMK.
     *
     * @example Aliyun_AES_256
     *
     * @var string
     */
    public $keySpec;

    /**
     * @description The status of the CMK.
     *
     * For more information, see [Impact of CMK status on API operations](~~44211~~).
     * @example Enabled
     *
     * @var string
     */
    public $keyState;

    /**
     * @description The usage of the CMK.
     *
     * @example ENCRYPT/DECRYPT
     *
     * @var string
     */
    public $keyUsage;

    /**
     * @description The time when the last rotation was performed. The time is displayed in UTC. For a new CMK, the value of this parameter is the time when the initial version of the CMK was generated.
     *
     * @example 2021-05-20T06:34:21Z
     *
     * @var string
     */
    public $lastRotationDate;

    /**
     * @description The time when the key material expires. The time is displayed in UTC. If this parameter value is empty, the key material does not expire.
     *
     * @example 2021-07-06T18:22:03Z
     *
     * @var string
     */
    public $materialExpireTime;

    /**
     * @description The time when the next rotation will be performed.
     *
     * >  This parameter is returned only when the value of the AutomaticRotation parameter is Enabled or Suspended.
     * @example 2021-07-06T18:22:03Z
     *
     * @var string
     */
    public $nextRotationDate;

    /**
     * @description The source of the key material for the CMK.
     *
     * @example Aliyun_KMS
     *
     * @var string
     */
    public $origin;

    /**
     * @description The ID of the current primary key version for the symmetric CMK.
     *
     * @example 515e0b0a-624f-45ab-92b5-54f9b551****
     *
     * @var string
     */
    public $primaryKeyVersion;

    /**
     * @description The protection level of the CMK.
     *
     * @example HSM
     *
     * @var string
     */
    public $protectionLevel;

    /**
     * @description The interval for automatic key rotation.
     *
     * >  This parameter is returned only when the value of the AutomaticRotation parameter is Enabled or Suspended.
     * @example 31536000s
     *
     * @var string
     */
    public $rotationInterval;
    protected $_name = [
        'arn'                           => 'Arn',
        'automaticRotation'             => 'AutomaticRotation',
        'creationDate'                  => 'CreationDate',
        'creator'                       => 'Creator',
        'DKMSInstanceId'                => 'DKMSInstanceId',
        'deleteDate'                    => 'DeleteDate',
        'deletionProtection'            => 'DeletionProtection',
        'deletionProtectionDescription' => 'DeletionProtectionDescription',
        'description'                   => 'Description',
        'keyId'                         => 'KeyId',
        'keySpec'                       => 'KeySpec',
        'keyState'                      => 'KeyState',
        'keyUsage'                      => 'KeyUsage',
        'lastRotationDate'              => 'LastRotationDate',
        'materialExpireTime'            => 'MaterialExpireTime',
        'nextRotationDate'              => 'NextRotationDate',
        'origin'                        => 'Origin',
        'primaryKeyVersion'             => 'PrimaryKeyVersion',
        'protectionLevel'               => 'ProtectionLevel',
        'rotationInterval'              => 'RotationInterval',
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
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->deletionProtectionDescription) {
            $res['DeletionProtectionDescription'] = $this->deletionProtectionDescription;
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
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['DeletionProtectionDescription'])) {
            $model->deletionProtectionDescription = $map['DeletionProtectionDescription'];
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
