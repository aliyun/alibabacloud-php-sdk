<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class CheckRecoveryConditionRequest extends Model
{
    /**
     * @description The backup ID.
     *
     * > *   You can call the [DescribeBackups](https://help.aliyun.com/document_detail/62172.html) operation to query the backup ID.
     * > *   You must specify one of the **RestoreTime** and BackupId parameters.
     * > *   This parameter is not applicable to sharded cluster instances.
     *
     * @example 5664****
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The name of the source database. The value is a JSON array.
     *
     * >  If you do not specify this parameter, all databases are restored by default.
     *
     * @example ["db1","db2"]
     *
     * @var string
     */
    public $databaseNames;

    /**
     * @description The region of the backup set used for the cross-region backup and restoration.
     *
     * >  This parameter is required when you set the RestoreType parameter to 3.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $destRegion;

    /**
     * @description The database engine version of the instance.
     *
     *   **6.0**
     *   **5.0**
     *   **4.4**
     *   **4.2**
     *   **4.0**
     *   **3.4**
     *
     * @example 4.2
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The instance architecture. Valid values:
     *
     *   replicate
     *   sharding
     *
     * > * This parameter is required when you set the RestoreType parameter to 2.
     * > * This parameter is required when you set the RestoreType parameter to 3.
     *
     * @example replicate
     *
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example sg-bp179****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The point in time to which the instance is restored. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * > *   The time can be a point in time within the past seven days. The time must be earlier than the current time, but later than the time when the instance was created.
     * > *   You must specify one of the RestoreTime and **BackupId** parameters.
     *
     * @example 2022-08-22T08:00:00Z
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description The restoration type.
     *
     * > * 0: The data of the source instance is restored to a new instance in the same region.
     * > * 1: The data of the source instance is restored to an earlier point in time.
     * > * 2: The data of a deleted instance is restored to a new instance from the backup set.
     * > * 3: The data of a deleted instance is restored to a new instance in another region from the backup set.
     *
     * @example 0
     *
     * @var string
     */
    public $restoreType;

    /**
     * @description The ID of the source instance.
     *
     * @example dds-bp1378****
     *
     * @var string
     */
    public $sourceDBInstance;

    /**
     * @description The region where the source instance resides.
     *
     * > * This parameter is required when you set the RestoreType parameter to 2.
     * > * This parameter is required when you set the RestoreType parameter to 3.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $srcRegion;
    protected $_name = [
        'backupId' => 'BackupId',
        'databaseNames' => 'DatabaseNames',
        'destRegion' => 'DestRegion',
        'engineVersion' => 'EngineVersion',
        'instanceType' => 'InstanceType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'restoreTime' => 'RestoreTime',
        'restoreType' => 'RestoreType',
        'sourceDBInstance' => 'SourceDBInstance',
        'srcRegion' => 'SrcRegion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->databaseNames) {
            $res['DatabaseNames'] = $this->databaseNames;
        }
        if (null !== $this->destRegion) {
            $res['DestRegion'] = $this->destRegion;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->restoreType) {
            $res['RestoreType'] = $this->restoreType;
        }
        if (null !== $this->sourceDBInstance) {
            $res['SourceDBInstance'] = $this->sourceDBInstance;
        }
        if (null !== $this->srcRegion) {
            $res['SrcRegion'] = $this->srcRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckRecoveryConditionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['DatabaseNames'])) {
            $model->databaseNames = $map['DatabaseNames'];
        }
        if (isset($map['DestRegion'])) {
            $model->destRegion = $map['DestRegion'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['RestoreType'])) {
            $model->restoreType = $map['RestoreType'];
        }
        if (isset($map['SourceDBInstance'])) {
            $model->sourceDBInstance = $map['SourceDBInstance'];
        }
        if (isset($map['SrcRegion'])) {
            $model->srcRegion = $map['SrcRegion'];
        }

        return $model;
    }
}
