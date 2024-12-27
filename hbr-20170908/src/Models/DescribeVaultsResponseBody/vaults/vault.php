<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault\backupPlanStatistics;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault\replicationProgress;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault\sourceTypes;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault\tags;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault\trialInfo;
use AlibabaCloud\Tea\Model;

class vault extends Model
{
    /**
     * @description Archival tier backup data volume. Unit: bytes.
     *
     * @example 1024000
     *
     * @var int
     */
    public $archiveBytesDone;

    /**
     * @description The billable storage usage of the Archive tier. Unit: bytes.
     *
     * @example 1024000
     *
     * @var int
     */
    public $archiveStorageSize;

    /**
     * @description The statistics of backup plans that use the backup vault.
     *
     * @var backupPlanStatistics
     */
    public $backupPlanStatistics;

    /**
     * @description The name of the OSS bucket used by the backup vault.
     *
     * @example hbr-0005i51******t58
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The amount of data that is backed up. Unit: bytes.
     *
     * @example 20
     *
     * @var int
     */
    public $bytesDone;

    /**
     * @description The billing method of the backup vault.
     *
     * @example FREE
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The billable storage usage of the archive vault. Unit: bytes.
     *
     * @example 1024000
     *
     * @var int
     */
    public $chargedStorageSize;

    /**
     * @description The encryption algorithm used to compress the backup vault. Valid values:
     *
     *   DISABLED: The backup vault is not compressed.
     *   SNAPPY: The backup vault is compressed by using the SNAPPY encryption algorithm.
     *   ZSTD: The backup vault is compressed by using Zstandard, a fast lossless compression algorithm.
     *
     * @example ZSTD
     *
     * @var string
     */
    public $compressionAlgorithm;

    /**
     * @description The time when the backup vault was created. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1554347313
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description Indicates whether the deduplication feature is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $dedup;

    /**
     * @description The description of the backup vault.
     *
     * @example vault description
     *
     * @var string
     */
    public $description;

    /**
     * @description The encryption type of the backup vault. Valid values:
     *
     *   NONE: The backup vault is not encrypted.
     *   HBR_PRIVATE (default): The backup vault is encrypted by using a key provided by Cloud Backup.
     *   KMS: The backup vault is encrypted by using a custom master key (CMK) created in Key Management Service (KMS).
     *
     * @example HBR_PRIVATE
     *
     * @var string
     */
    public $encryptType;

    /**
     * @description Indicates whether indexes are available. Indexes are available when they are not being updated.
     *
     * @example true
     *
     * @var bool
     */
    public $indexAvailable;

    /**
     * @description The index level.
     *
     *   OFF: No indexes are created.
     *   META: Metadata indexes are created.
     *   ALL: Full-text indexes are created.
     *
     * @example OFF
     *
     * @var string
     */
    public $indexLevel;

    /**
     * @description The time when the index was updated.
     *
     * @example 1639645628
     *
     * @var int
     */
    public $indexUpdateTime;

    /**
     * @description The ID or alias of the CMK created in KMS. This parameter is returned only when EncryptType is set to KMS.
     *
     * @example alias/acs/acm
     *
     * @var string
     */
    public $kmsKeyId;

    /**
     * @description The time when the last remote backup was synchronized. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1554347313
     *
     * @var int
     */
    public $latestReplicationTime;

    /**
     * @description The data redundancy type of the backup vault. Valid values:
     *
     *   LRS: Locally redundant storage (LRS) is enabled for the backup vault. Cloud Backup stores the copies of each object on multiple devices of different facilities in the same zone. This way, Cloud Backup ensures data durability and availability even if hardware failures occur.
     *   ZRS: Zone-redundant storage (ZRS) is enabled for the backup vault. Cloud Backup uses the multi-zone mechanism to distribute data across three zones within the same region. If a zone fails, the data that is stored in the other two zones is still accessible.
     *
     * @example LRS
     *
     * @var string
     */
    public $redundancyType;

    /**
     * @description Indicates whether the backup vault is a remote backup vault. Valid values:
     *
     *   true: The backup vault is a remote backup vault.
     *   false: The backup vault is a local backup vault.
     *
     * @example false
     *
     * @var bool
     */
    public $replication;

    /**
     * @description The progress of data synchronization from the backup vault to the mirror vault.
     *
     * @var replicationProgress
     */
    public $replicationProgress;

    /**
     * @description The ID of the region in which the source vault resides. This parameter is valid only for remote backup vaults.
     *
     * @example v-*********************
     *
     * @var string
     */
    public $replicationSourceRegionId;

    /**
     * @description Indicate whether the backup vault is the source vault that corresponds to the remote backup vault. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $replicationSourceVault;

    /**
     * @description The ID of the source vault that corresponds to the remote backup vault.
     *
     * @example v-*********************
     *
     * @var string
     */
    public $replicationSourceVaultId;

    /**
     * @description Target region for remote backup repository.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $replicationTargetRegionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-*********************
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The retention period of the backup vault. Unit: days.
     *
     * @example 2
     *
     * @var int
     */
    public $retention;

    /**
     * @description Indicates whether the backup search feature is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $searchEnabled;

    /**
     * @description The number of snapshots in the backup vault.
     *
     * @example 0
     *
     * @var int
     */
    public $snapshotCount;

    /**
     * @description The data source types of the backup vault.
     *
     * @var sourceTypes
     */
    public $sourceTypes;

    /**
     * @description The status of the backup vault. Valid values:
     *
     *   **UNKNOWN**: The backup vault is in an unknown state.
     *   **INITIALIZING**: The backup vault is being initialized.
     *   **CREATED**: The backup vault is created.
     *   **ERROR**: An error occurs on the backup vault.
     *
     * @example CREATED
     *
     * @var string
     */
    public $status;

    /**
     * @description The usage of the backup vault. Unit: bytes.
     *
     * @example 10
     *
     * @var int
     */
    public $storageSize;

    /**
     * @description The tags of the backup vault.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The free trial information.
     *
     * @var trialInfo
     */
    public $trialInfo;

    /**
     * @description The time when the backup vault was updated. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1554347313
     *
     * @var int
     */
    public $updatedTime;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-*********************
     *
     * @var string
     */
    public $vaultId;

    /**
     * @description The name of the backup vault.
     *
     * @example vaultname
     *
     * @var string
     */
    public $vaultName;

    /**
     * @description The ID of the region in which the backup vault resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $vaultRegionId;

    /**
     * @description The status message that is returned when the backup vault is in the ERROR state. This parameter is valid only for remote backup vaults. Valid values:
     *
     *   **UNKNOWN_ERROR**: An unknown error occurs.
     *   **SOURCE_VAULT_ALREADY_HAS_REPLICATION**: A mirror vault is configured for the source vault.
     *
     * @example SOURCE_VAULT_ALREADY_HAS_REPLICATION
     *
     * @var string
     */
    public $vaultStatusMessage;

    /**
     * @description The storage class of the backup vault. Valid value: **STANDARD**, which indicates standard storage.
     *
     * @example STANDARD
     *
     * @var string
     */
    public $vaultStorageClass;

    /**
     * @description The type of the backup vault. Valid value: **STANDARD**, which indicates a standard backup vault.
     *
     * @example STANDARD
     *
     * @var string
     */
    public $vaultType;

    /**
     * @description Indicates whether the immutable backup feature is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $wormEnabled;
    protected $_name = [
        'archiveBytesDone'          => 'ArchiveBytesDone',
        'archiveStorageSize'        => 'ArchiveStorageSize',
        'backupPlanStatistics'      => 'BackupPlanStatistics',
        'bucketName'                => 'BucketName',
        'bytesDone'                 => 'BytesDone',
        'chargeType'                => 'ChargeType',
        'chargedStorageSize'        => 'ChargedStorageSize',
        'compressionAlgorithm'      => 'CompressionAlgorithm',
        'createdTime'               => 'CreatedTime',
        'dedup'                     => 'Dedup',
        'description'               => 'Description',
        'encryptType'               => 'EncryptType',
        'indexAvailable'            => 'IndexAvailable',
        'indexLevel'                => 'IndexLevel',
        'indexUpdateTime'           => 'IndexUpdateTime',
        'kmsKeyId'                  => 'KmsKeyId',
        'latestReplicationTime'     => 'LatestReplicationTime',
        'redundancyType'            => 'RedundancyType',
        'replication'               => 'Replication',
        'replicationProgress'       => 'ReplicationProgress',
        'replicationSourceRegionId' => 'ReplicationSourceRegionId',
        'replicationSourceVault'    => 'ReplicationSourceVault',
        'replicationSourceVaultId'  => 'ReplicationSourceVaultId',
        'replicationTargetRegionId' => 'ReplicationTargetRegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'retention'                 => 'Retention',
        'searchEnabled'             => 'SearchEnabled',
        'snapshotCount'             => 'SnapshotCount',
        'sourceTypes'               => 'SourceTypes',
        'status'                    => 'Status',
        'storageSize'               => 'StorageSize',
        'tags'                      => 'Tags',
        'trialInfo'                 => 'TrialInfo',
        'updatedTime'               => 'UpdatedTime',
        'vaultId'                   => 'VaultId',
        'vaultName'                 => 'VaultName',
        'vaultRegionId'             => 'VaultRegionId',
        'vaultStatusMessage'        => 'VaultStatusMessage',
        'vaultStorageClass'         => 'VaultStorageClass',
        'vaultType'                 => 'VaultType',
        'wormEnabled'               => 'WormEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveBytesDone) {
            $res['ArchiveBytesDone'] = $this->archiveBytesDone;
        }
        if (null !== $this->archiveStorageSize) {
            $res['ArchiveStorageSize'] = $this->archiveStorageSize;
        }
        if (null !== $this->backupPlanStatistics) {
            $res['BackupPlanStatistics'] = null !== $this->backupPlanStatistics ? $this->backupPlanStatistics->toMap() : null;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->bytesDone) {
            $res['BytesDone'] = $this->bytesDone;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->chargedStorageSize) {
            $res['ChargedStorageSize'] = $this->chargedStorageSize;
        }
        if (null !== $this->compressionAlgorithm) {
            $res['CompressionAlgorithm'] = $this->compressionAlgorithm;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->dedup) {
            $res['Dedup'] = $this->dedup;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->indexAvailable) {
            $res['IndexAvailable'] = $this->indexAvailable;
        }
        if (null !== $this->indexLevel) {
            $res['IndexLevel'] = $this->indexLevel;
        }
        if (null !== $this->indexUpdateTime) {
            $res['IndexUpdateTime'] = $this->indexUpdateTime;
        }
        if (null !== $this->kmsKeyId) {
            $res['KmsKeyId'] = $this->kmsKeyId;
        }
        if (null !== $this->latestReplicationTime) {
            $res['LatestReplicationTime'] = $this->latestReplicationTime;
        }
        if (null !== $this->redundancyType) {
            $res['RedundancyType'] = $this->redundancyType;
        }
        if (null !== $this->replication) {
            $res['Replication'] = $this->replication;
        }
        if (null !== $this->replicationProgress) {
            $res['ReplicationProgress'] = null !== $this->replicationProgress ? $this->replicationProgress->toMap() : null;
        }
        if (null !== $this->replicationSourceRegionId) {
            $res['ReplicationSourceRegionId'] = $this->replicationSourceRegionId;
        }
        if (null !== $this->replicationSourceVault) {
            $res['ReplicationSourceVault'] = $this->replicationSourceVault;
        }
        if (null !== $this->replicationSourceVaultId) {
            $res['ReplicationSourceVaultId'] = $this->replicationSourceVaultId;
        }
        if (null !== $this->replicationTargetRegionId) {
            $res['ReplicationTargetRegionId'] = $this->replicationTargetRegionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->searchEnabled) {
            $res['SearchEnabled'] = $this->searchEnabled;
        }
        if (null !== $this->snapshotCount) {
            $res['SnapshotCount'] = $this->snapshotCount;
        }
        if (null !== $this->sourceTypes) {
            $res['SourceTypes'] = null !== $this->sourceTypes ? $this->sourceTypes->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->trialInfo) {
            $res['TrialInfo'] = null !== $this->trialInfo ? $this->trialInfo->toMap() : null;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }
        if (null !== $this->vaultName) {
            $res['VaultName'] = $this->vaultName;
        }
        if (null !== $this->vaultRegionId) {
            $res['VaultRegionId'] = $this->vaultRegionId;
        }
        if (null !== $this->vaultStatusMessage) {
            $res['VaultStatusMessage'] = $this->vaultStatusMessage;
        }
        if (null !== $this->vaultStorageClass) {
            $res['VaultStorageClass'] = $this->vaultStorageClass;
        }
        if (null !== $this->vaultType) {
            $res['VaultType'] = $this->vaultType;
        }
        if (null !== $this->wormEnabled) {
            $res['WormEnabled'] = $this->wormEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vault
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchiveBytesDone'])) {
            $model->archiveBytesDone = $map['ArchiveBytesDone'];
        }
        if (isset($map['ArchiveStorageSize'])) {
            $model->archiveStorageSize = $map['ArchiveStorageSize'];
        }
        if (isset($map['BackupPlanStatistics'])) {
            $model->backupPlanStatistics = backupPlanStatistics::fromMap($map['BackupPlanStatistics']);
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['BytesDone'])) {
            $model->bytesDone = $map['BytesDone'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ChargedStorageSize'])) {
            $model->chargedStorageSize = $map['ChargedStorageSize'];
        }
        if (isset($map['CompressionAlgorithm'])) {
            $model->compressionAlgorithm = $map['CompressionAlgorithm'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Dedup'])) {
            $model->dedup = $map['Dedup'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['IndexAvailable'])) {
            $model->indexAvailable = $map['IndexAvailable'];
        }
        if (isset($map['IndexLevel'])) {
            $model->indexLevel = $map['IndexLevel'];
        }
        if (isset($map['IndexUpdateTime'])) {
            $model->indexUpdateTime = $map['IndexUpdateTime'];
        }
        if (isset($map['KmsKeyId'])) {
            $model->kmsKeyId = $map['KmsKeyId'];
        }
        if (isset($map['LatestReplicationTime'])) {
            $model->latestReplicationTime = $map['LatestReplicationTime'];
        }
        if (isset($map['RedundancyType'])) {
            $model->redundancyType = $map['RedundancyType'];
        }
        if (isset($map['Replication'])) {
            $model->replication = $map['Replication'];
        }
        if (isset($map['ReplicationProgress'])) {
            $model->replicationProgress = replicationProgress::fromMap($map['ReplicationProgress']);
        }
        if (isset($map['ReplicationSourceRegionId'])) {
            $model->replicationSourceRegionId = $map['ReplicationSourceRegionId'];
        }
        if (isset($map['ReplicationSourceVault'])) {
            $model->replicationSourceVault = $map['ReplicationSourceVault'];
        }
        if (isset($map['ReplicationSourceVaultId'])) {
            $model->replicationSourceVaultId = $map['ReplicationSourceVaultId'];
        }
        if (isset($map['ReplicationTargetRegionId'])) {
            $model->replicationTargetRegionId = $map['ReplicationTargetRegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['SearchEnabled'])) {
            $model->searchEnabled = $map['SearchEnabled'];
        }
        if (isset($map['SnapshotCount'])) {
            $model->snapshotCount = $map['SnapshotCount'];
        }
        if (isset($map['SourceTypes'])) {
            $model->sourceTypes = sourceTypes::fromMap($map['SourceTypes']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TrialInfo'])) {
            $model->trialInfo = trialInfo::fromMap($map['TrialInfo']);
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }
        if (isset($map['VaultName'])) {
            $model->vaultName = $map['VaultName'];
        }
        if (isset($map['VaultRegionId'])) {
            $model->vaultRegionId = $map['VaultRegionId'];
        }
        if (isset($map['VaultStatusMessage'])) {
            $model->vaultStatusMessage = $map['VaultStatusMessage'];
        }
        if (isset($map['VaultStorageClass'])) {
            $model->vaultStorageClass = $map['VaultStorageClass'];
        }
        if (isset($map['VaultType'])) {
            $model->vaultType = $map['VaultType'];
        }
        if (isset($map['WormEnabled'])) {
            $model->wormEnabled = $map['WormEnabled'];
        }

        return $model;
    }
}
