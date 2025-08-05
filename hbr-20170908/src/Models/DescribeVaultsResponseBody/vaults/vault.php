<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault\backupPlanStatistics;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault\replicationProgress;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault\sourceTypes;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault\tags;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault\trialInfo;

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
     * @var string
     */
    public $bucketName;

    /**
     * @var int
     */
    public $bytesDone;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $chargedStorageSize;

    /**
     * @var string
     */
    public $compressionAlgorithm;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var bool
     */
    public $dedup;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $encryptType;

    /**
     * @var bool
     */
    public $indexAvailable;

    /**
     * @var string
     */
    public $indexLevel;

    /**
     * @var int
     */
    public $indexUpdateTime;

    /**
     * @var string
     */
    public $kmsKeyId;

    /**
     * @var int
     */
    public $latestReplicationTime;

    /**
     * @var string
     */
    public $redundancyType;

    /**
     * @var bool
     */
    public $replication;

    /**
     * @var replicationProgress
     */
    public $replicationProgress;

    /**
     * @var string
     */
    public $replicationSourceRegionId;

    /**
     * @var bool
     */
    public $replicationSourceVault;

    /**
     * @var string
     */
    public $replicationSourceVaultId;

    /**
     * @var string
     */
    public $replicationTargetRegionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $retention;

    /**
     * @var bool
     */
    public $searchEnabled;

    /**
     * @var int
     */
    public $snapshotCount;

    /**
     * @var sourceTypes
     */
    public $sourceTypes;

    /**
     * @var string
     */
    public $status;

    /**
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
     * @var int
     */
    public $updatedTime;

    /**
     * @var string
     */
    public $vaultId;

    /**
     * @var string
     */
    public $vaultName;

    /**
     * @var string
     */
    public $vaultRegionId;

    /**
     * @var string
     */
    public $vaultStatusMessage;

    /**
     * @var string
     */
    public $vaultStorageClass;

    /**
     * @var string
     */
    public $vaultType;

    /**
     * @var bool
     */
    public $wormEnabled;
    protected $_name = [
        'archiveBytesDone' => 'ArchiveBytesDone',
        'archiveStorageSize' => 'ArchiveStorageSize',
        'backupPlanStatistics' => 'BackupPlanStatistics',
        'bucketName' => 'BucketName',
        'bytesDone' => 'BytesDone',
        'chargeType' => 'ChargeType',
        'chargedStorageSize' => 'ChargedStorageSize',
        'compressionAlgorithm' => 'CompressionAlgorithm',
        'createdTime' => 'CreatedTime',
        'dedup' => 'Dedup',
        'description' => 'Description',
        'encryptType' => 'EncryptType',
        'indexAvailable' => 'IndexAvailable',
        'indexLevel' => 'IndexLevel',
        'indexUpdateTime' => 'IndexUpdateTime',
        'kmsKeyId' => 'KmsKeyId',
        'latestReplicationTime' => 'LatestReplicationTime',
        'redundancyType' => 'RedundancyType',
        'replication' => 'Replication',
        'replicationProgress' => 'ReplicationProgress',
        'replicationSourceRegionId' => 'ReplicationSourceRegionId',
        'replicationSourceVault' => 'ReplicationSourceVault',
        'replicationSourceVaultId' => 'ReplicationSourceVaultId',
        'replicationTargetRegionId' => 'ReplicationTargetRegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'retention' => 'Retention',
        'searchEnabled' => 'SearchEnabled',
        'snapshotCount' => 'SnapshotCount',
        'sourceTypes' => 'SourceTypes',
        'status' => 'Status',
        'storageSize' => 'StorageSize',
        'tags' => 'Tags',
        'trialInfo' => 'TrialInfo',
        'updatedTime' => 'UpdatedTime',
        'vaultId' => 'VaultId',
        'vaultName' => 'VaultName',
        'vaultRegionId' => 'VaultRegionId',
        'vaultStatusMessage' => 'VaultStatusMessage',
        'vaultStorageClass' => 'VaultStorageClass',
        'vaultType' => 'VaultType',
        'wormEnabled' => 'WormEnabled',
    ];

    public function validate()
    {
        if (null !== $this->backupPlanStatistics) {
            $this->backupPlanStatistics->validate();
        }
        if (null !== $this->replicationProgress) {
            $this->replicationProgress->validate();
        }
        if (null !== $this->sourceTypes) {
            $this->sourceTypes->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        if (null !== $this->trialInfo) {
            $this->trialInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->archiveBytesDone) {
            $res['ArchiveBytesDone'] = $this->archiveBytesDone;
        }

        if (null !== $this->archiveStorageSize) {
            $res['ArchiveStorageSize'] = $this->archiveStorageSize;
        }

        if (null !== $this->backupPlanStatistics) {
            $res['BackupPlanStatistics'] = null !== $this->backupPlanStatistics ? $this->backupPlanStatistics->toArray($noStream) : $this->backupPlanStatistics;
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
            $res['ReplicationProgress'] = null !== $this->replicationProgress ? $this->replicationProgress->toArray($noStream) : $this->replicationProgress;
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
            $res['SourceTypes'] = null !== $this->sourceTypes ? $this->sourceTypes->toArray($noStream) : $this->sourceTypes;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->trialInfo) {
            $res['TrialInfo'] = null !== $this->trialInfo ? $this->trialInfo->toArray($noStream) : $this->trialInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
