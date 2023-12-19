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
     * @var int
     */
    public $archiveBytesDone;

    /**
     * @var int
     */
    public $archiveStorageSize;

    /**
     * @var backupPlanStatistics
     */
    public $backupPlanStatistics;

    /**
     * @example hbr-0005i51******t58
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example 20
     *
     * @var int
     */
    public $bytesDone;

    /**
     * @example FREE
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example 1024000
     *
     * @var int
     */
    public $chargedStorageSize;

    /**
     * @example ZSTD
     *
     * @var string
     */
    public $compressionAlgorithm;

    /**
     * @example 1554347313
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $dedup;

    /**
     * @example vault description
     *
     * @var string
     */
    public $description;

    /**
     * @example HBR_PRIVATE
     *
     * @var string
     */
    public $encryptType;

    /**
     * @example true
     *
     * @var bool
     */
    public $indexAvailable;

    /**
     * @example OFF
     *
     * @var string
     */
    public $indexLevel;

    /**
     * @example 1639645628
     *
     * @var int
     */
    public $indexUpdateTime;

    /**
     * @example alias/acs/acm
     *
     * @var string
     */
    public $kmsKeyId;

    /**
     * @example 1554347313
     *
     * @var int
     */
    public $latestReplicationTime;

    /**
     * @example LRS
     *
     * @var string
     */
    public $redundancyType;

    /**
     * @example false
     *
     * @var bool
     */
    public $replication;

    /**
     * @var replicationProgress
     */
    public $replicationProgress;

    /**
     * @example v-*********************
     *
     * @var string
     */
    public $replicationSourceRegionId;

    /**
     * @var bool
     */
    public $replicationSourceVault;

    /**
     * @example v-*********************
     *
     * @var string
     */
    public $replicationSourceVaultId;

    /**
     * @example rg-*********************
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 2
     *
     * @var int
     */
    public $retention;

    /**
     * @example true
     *
     * @var bool
     */
    public $searchEnabled;

    /**
     * @example 0
     *
     * @var int
     */
    public $snapshotCount;

    /**
     * @var sourceTypes
     */
    public $sourceTypes;

    /**
     * @example CREATED
     *
     * @var string
     */
    public $status;

    /**
     * @example 10
     *
     * @var int
     */
    public $storageSize;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var trialInfo
     */
    public $trialInfo;

    /**
     * @example 1554347313
     *
     * @var int
     */
    public $updatedTime;

    /**
     * @example v-*********************
     *
     * @var string
     */
    public $vaultId;

    /**
     * @example vaultname
     *
     * @var string
     */
    public $vaultName;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $vaultRegionId;

    /**
     * @example SOURCE_VAULT_ALREADY_HAS_REPLICATION
     *
     * @var string
     */
    public $vaultStatusMessage;

    /**
     * @example STANDARD
     *
     * @var string
     */
    public $vaultStorageClass;

    /**
     * @example STANDARD
     *
     * @var string
     */
    public $vaultType;

    /**
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
