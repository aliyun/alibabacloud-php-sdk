<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class CreateRestoreJobRequest extends Model
{
    /**
     * @description The name of the RAM role that is created within the source Alibaba Cloud account and assigned to the current Alibaba Cloud account to authorize the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example BackupRole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @description Specifies whether data is backed up within the same Alibaba Cloud account or across Alibaba Cloud accounts. Valid values:
     *
     *   SELF_ACCOUNT: Data is backed up within the same Alibaba Cloud account.
     *   CROSS_ACCOUNT: Data is backed up across Alibaba Cloud accounts.
     *
     * @example SELF_ACCOUNT
     *
     * @var string
     */
    public $crossAccountType;

    /**
     * @description The ID of the source Alibaba Cloud account that authorizes the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example 158975xxxxx4625
     *
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @description The paths to the files that you do not want to restore. No files in the specified paths are restored. The value must be 1 to 255 characters in length.
     *
     * @example ["/var", "/proc"]
     *
     * @var string
     */
    public $exclude;

    /**
     * @var mixed[]
     */
    public $failbackDetail;

    /**
     * @description The paths to the files that you want to restore. All files in the specified paths are restored. The value must be 1 to 255 characters in length.
     *
     * @example ["/home/alice/*.pdf", "/home/bob/*.txt"]
     *
     * @var string
     */
    public $include;

    /**
     * @description Specifies whether to initiate the request by using Container Service for Kubernetes (ACK). Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $initiatedByAck;

    /**
     * @var string
     */
    public $options;

    /**
     * @description The details about the Tablestore instance.
     *
     * @var OtsTableRestoreDetail
     */
    public $otsDetail;

    /**
     * @description The type of the restore destination. Valid values:
     *
     *   **ECS_FILE**: restores data to Elastic Compute Service (ECS) files.
     *   **OSS**: restores data to Object Storage Service (OSS) buckets.
     *   **NAS**: restores data to Apsara File Storage NAS file systems.
     *   **OTS_TABLE**: restores data to Tablestore instances.
     *   **UDM_ECS_ROLLBACK**: restores data to ECS instances.
     *
     * @example ECS_FILE
     *
     * @var string
     */
    public $restoreType;

    /**
     * @description The hash value of the backup snapshot.
     *
     * @example f2fe...
     *
     * @var string
     */
    public $snapshotHash;

    /**
     * @description The ID of the backup snapshot.
     *
     * @example s-********************
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **ECS_FILE**: ECS files
     *   **OSS**: OSS buckets
     *   **NAS**: NAS file systems
     *   **OTS_TABLE**: Tablestore instances
     *   **UDM_ECS**: ECS instances
     *
     * @example ECS_FILE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description This parameter is required only if the **RestoreType** parameter is set to **OSS**. This parameter specifies the name of the OSS bucket to which you want to restore data.
     *
     * @example hbr-backup-oss
     *
     * @var string
     */
    public $targetBucket;

    /**
     * @description The details about the container to which you want to restore data.
     *
     * @example {\"host\":\"k8s-node1\",\"hostPrefix\":\"/var/lib/kubelet/pods/4acb31fe-8577-40ff-bc8c-eccabd835f73/volumes/kubernetes.io~csi/pvc-b050b00e-ef17-4792-aab1-1642355cf1f4/mount\",\"pvPath\":\"/\"}
     *
     * @var string
     */
    public $targetContainer;

    /**
     * @description The ID of the container cluster to which you want to restore data.
     *
     * @example cc-000amjsc7o1h9506oob7
     *
     * @var string
     */
    public $targetContainerClusterId;

    /**
     * @description This parameter is required only if the **RestoreType** parameter is set to **NAS**. This parameter specifies the time when the file system is created.
     *
     * @example 1554347313
     *
     * @var int
     */
    public $targetCreateTime;

    /**
     * @description This parameter is required only if the **RestoreType** parameter is set to **NAS**. This parameter specifies the ID of the file system to which you want to restore data.
     *
     * @example 005494
     *
     * @var string
     */
    public $targetFileSystemId;

    /**
     * @description This parameter is required only if the **RestoreType** parameter is set to **ECS_FILE**. This parameter specifies the ID of the ECS instance to which you want to restore data.
     *
     * @example i-*********************
     *
     * @var string
     */
    public $targetInstanceId;

    /**
     * @description The name of the Tablestore instance to which you want to restore data.
     *
     * @example instancename
     *
     * @var string
     */
    public $targetInstanceName;

    /**
     * @description This parameter is required only if the **RestoreType** parameter is set to **ECS_FILE**. This parameter specifies the destination file path.
     *
     * @example C:\
     *
     * @var string
     */
    public $targetPath;

    /**
     * @description This parameter is required only if the **RestoreType** parameter is set to **OSS**. This parameter specifies the prefix of objects that you want to restore.
     *
     * @example hbr
     *
     * @var string
     */
    public $targetPrefix;

    /**
     * @description The name of the table that stores the restored data.
     *
     * @example tablename
     *
     * @var string
     */
    public $targetTableName;

    /**
     * @description The time when data is restored to the Tablestore instance. The value must be a UNIX timestamp. Unit: seconds.
     *
     * @example 1642496881
     *
     * @var int
     */
    public $targetTime;

    /**
     * @description The details of ECS instance backup.
     *
     * @example {\"sourceInstanceId\":\"i-uf62te6pm3iwsyxyz66q\",\"bootAfterRestore\":false}
     *
     * @var mixed[]
     */
    public $udmDetail;

    /**
     * @description This parameter is required only if you set the **SourceType** parameter to **UDM_ECS**. This parameter specifies the region to which you want to restore data.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $udmRegionId;

    /**
     * @description The ID of the backup vault to which the backup snapshot belongs.
     *
     * @example v-*********************
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'crossAccountRoleName'     => 'CrossAccountRoleName',
        'crossAccountType'         => 'CrossAccountType',
        'crossAccountUserId'       => 'CrossAccountUserId',
        'exclude'                  => 'Exclude',
        'failbackDetail'           => 'FailbackDetail',
        'include'                  => 'Include',
        'initiatedByAck'           => 'InitiatedByAck',
        'options'                  => 'Options',
        'otsDetail'                => 'OtsDetail',
        'restoreType'              => 'RestoreType',
        'snapshotHash'             => 'SnapshotHash',
        'snapshotId'               => 'SnapshotId',
        'sourceType'               => 'SourceType',
        'targetBucket'             => 'TargetBucket',
        'targetContainer'          => 'TargetContainer',
        'targetContainerClusterId' => 'TargetContainerClusterId',
        'targetCreateTime'         => 'TargetCreateTime',
        'targetFileSystemId'       => 'TargetFileSystemId',
        'targetInstanceId'         => 'TargetInstanceId',
        'targetInstanceName'       => 'TargetInstanceName',
        'targetPath'               => 'TargetPath',
        'targetPrefix'             => 'TargetPrefix',
        'targetTableName'          => 'TargetTableName',
        'targetTime'               => 'TargetTime',
        'udmDetail'                => 'UdmDetail',
        'udmRegionId'              => 'UdmRegionId',
        'vaultId'                  => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }
        if (null !== $this->crossAccountType) {
            $res['CrossAccountType'] = $this->crossAccountType;
        }
        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
        }
        if (null !== $this->exclude) {
            $res['Exclude'] = $this->exclude;
        }
        if (null !== $this->failbackDetail) {
            $res['FailbackDetail'] = $this->failbackDetail;
        }
        if (null !== $this->include) {
            $res['Include'] = $this->include;
        }
        if (null !== $this->initiatedByAck) {
            $res['InitiatedByAck'] = $this->initiatedByAck;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->otsDetail) {
            $res['OtsDetail'] = null !== $this->otsDetail ? $this->otsDetail->toMap() : null;
        }
        if (null !== $this->restoreType) {
            $res['RestoreType'] = $this->restoreType;
        }
        if (null !== $this->snapshotHash) {
            $res['SnapshotHash'] = $this->snapshotHash;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->targetBucket) {
            $res['TargetBucket'] = $this->targetBucket;
        }
        if (null !== $this->targetContainer) {
            $res['TargetContainer'] = $this->targetContainer;
        }
        if (null !== $this->targetContainerClusterId) {
            $res['TargetContainerClusterId'] = $this->targetContainerClusterId;
        }
        if (null !== $this->targetCreateTime) {
            $res['TargetCreateTime'] = $this->targetCreateTime;
        }
        if (null !== $this->targetFileSystemId) {
            $res['TargetFileSystemId'] = $this->targetFileSystemId;
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }
        if (null !== $this->targetInstanceName) {
            $res['TargetInstanceName'] = $this->targetInstanceName;
        }
        if (null !== $this->targetPath) {
            $res['TargetPath'] = $this->targetPath;
        }
        if (null !== $this->targetPrefix) {
            $res['TargetPrefix'] = $this->targetPrefix;
        }
        if (null !== $this->targetTableName) {
            $res['TargetTableName'] = $this->targetTableName;
        }
        if (null !== $this->targetTime) {
            $res['TargetTime'] = $this->targetTime;
        }
        if (null !== $this->udmDetail) {
            $res['UdmDetail'] = $this->udmDetail;
        }
        if (null !== $this->udmRegionId) {
            $res['UdmRegionId'] = $this->udmRegionId;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRestoreJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }
        if (isset($map['CrossAccountType'])) {
            $model->crossAccountType = $map['CrossAccountType'];
        }
        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }
        if (isset($map['Exclude'])) {
            $model->exclude = $map['Exclude'];
        }
        if (isset($map['FailbackDetail'])) {
            $model->failbackDetail = $map['FailbackDetail'];
        }
        if (isset($map['Include'])) {
            $model->include = $map['Include'];
        }
        if (isset($map['InitiatedByAck'])) {
            $model->initiatedByAck = $map['InitiatedByAck'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['OtsDetail'])) {
            $model->otsDetail = OtsTableRestoreDetail::fromMap($map['OtsDetail']);
        }
        if (isset($map['RestoreType'])) {
            $model->restoreType = $map['RestoreType'];
        }
        if (isset($map['SnapshotHash'])) {
            $model->snapshotHash = $map['SnapshotHash'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['TargetBucket'])) {
            $model->targetBucket = $map['TargetBucket'];
        }
        if (isset($map['TargetContainer'])) {
            $model->targetContainer = $map['TargetContainer'];
        }
        if (isset($map['TargetContainerClusterId'])) {
            $model->targetContainerClusterId = $map['TargetContainerClusterId'];
        }
        if (isset($map['TargetCreateTime'])) {
            $model->targetCreateTime = $map['TargetCreateTime'];
        }
        if (isset($map['TargetFileSystemId'])) {
            $model->targetFileSystemId = $map['TargetFileSystemId'];
        }
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }
        if (isset($map['TargetInstanceName'])) {
            $model->targetInstanceName = $map['TargetInstanceName'];
        }
        if (isset($map['TargetPath'])) {
            $model->targetPath = $map['TargetPath'];
        }
        if (isset($map['TargetPrefix'])) {
            $model->targetPrefix = $map['TargetPrefix'];
        }
        if (isset($map['TargetTableName'])) {
            $model->targetTableName = $map['TargetTableName'];
        }
        if (isset($map['TargetTime'])) {
            $model->targetTime = $map['TargetTime'];
        }
        if (isset($map['UdmDetail'])) {
            $model->udmDetail = $map['UdmDetail'];
        }
        if (isset($map['UdmRegionId'])) {
            $model->udmRegionId = $map['UdmRegionId'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
