<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class CreateRestoreJobShrinkRequest extends Model
{
    /**
     * @description The name of the role created in the RAM of the original account for cross-account backup managed by the current account.
     *
     * @example BackupRole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @description Cross-account backup type. Supported values:
     * - CROSS_ACCOUNT: Cross-account backup
     * @example SELF_ACCOUNT
     *
     * @var string
     */
    public $crossAccountType;

    /**
     * @description The original account ID managed by the current account for cross-account backup.
     *
     * @example 158975xxxxx4625
     *
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @description The path not to be restored. All documents under this path will not be restored. Maximum length is 255 characters.
     *
     * @example ["/var", "/proc"]
     *
     * @var string
     */
    public $exclude;

    /**
     * @description Details of restoring to the local environment.
     *
     * @var string
     */
    public $failbackDetailShrink;

    /**
     * @description The path to be restored. All documents under this path will be restored. Maximum length is 255 characters.
     *
     * @example ["/home/alice/*.pdf", "/home/bob/*.txt"]
     *
     * @var string
     */
    public $include;

    /**
     * @description Indicates whether it is called by the container service. Default is false.
     *
     * @example false
     *
     * @var bool
     */
    public $initiatedByAck;

    /**
     * @description Parameters for the restore job.
     *
     * @example {\\"includes\\":[],\\"excludes\\":[],\\"conflictPolicy\\":\\"OVERWRITE_EXISTING\\"}
     *
     * @var string
     */
    public $options;

    /**
     * @description Details of the Table Store instance.
     *
     * @var string
     */
    public $otsDetailShrink;

    /**
     * @description The type of the restore destination data source. Possible values:
     * - **ECS_FILE**: Restore to ECS file.
     * - **OSS**: Restore to Alibaba Cloud OSS.
     * - **NAS**: Restore to Alibaba Cloud NAS.
     * - **OTS_TABLE**: Restore to Alibaba Cloud OTS.
     * - **UDM_ECS_ROLLBACK**: Restore to Alibaba Cloud ECS whole machine.
     *
     * This parameter is required.
     * @example ECS_FILE
     *
     * @var string
     */
    public $restoreType;

    /**
     * @description The HASH value of the backup snapshot.
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
     * @description The type of the data source. Possible values:
     * - **ECS_FILE**: Restore ECS file.
     * - **OSS**: Restore Alibaba Cloud OSS.
     * - **NAS**: Restore Alibaba Cloud NAS.
     * - **OTS_TABLE**: Restore to Alibaba Cloud OTS.
     * - **UDM_ECS**: Restore to Alibaba Cloud ECS whole machine.
     *
     * This parameter is required.
     * @example ECS_FILE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description Valid only when **RestoreType** is **OSS**. Indicates the name of the OSS bucket at the restore destination.
     *
     * @example hbr-backup-oss
     *
     * @var string
     */
    public $targetBucket;

    /**
     * @description Details of the target container.
     *
     * @example {\\"host\\":\\"k8s-node1\\",\\"hostPrefix\\":\\"/var/lib/kubelet/pods/4acb31fe-8577-40ff-bc8c-eccabd835f73/volumes/kubernetes.io~csi/pvc-b050b00e-ef17-4792-aab1-1642355cf1f4/mount\\",\\"pvPath\\":\\"/\\"}
     *
     * @var string
     */
    public $targetContainer;

    /**
     * @description The ID of the target container cluster.
     *
     * @example cc-000amjsc7o1h9506oob7
     *
     * @var string
     */
    public $targetContainerClusterId;

    /**
     * @description Valid only when **RestoreType** is **NAS**. Indicates the creation time of the file system at the restore destination.
     *
     * @example 1554347313
     *
     * @var int
     */
    public $targetCreateTime;

    /**
     * @description Valid only when **RestoreType** is **NAS**. Indicates the ID of the file system at the restore destination.
     *
     * @example 005494
     *
     * @var string
     */
    public $targetFileSystemId;

    /**
     * @description Valid only when **RestoreType** is **ECS_FILE**. Indicates the ECS instance ID at the restore destination.
     *
     * @example i-*********************
     *
     * @var string
     */
    public $targetInstanceId;

    /**
     * @description The name of the target Table Store instance.
     *
     * @example instancename
     *
     * @var string
     */
    public $targetInstanceName;

    /**
     * @description Valid only when **RestoreType** is **ECS_FILE**. Indicates the file path at the restore destination.
     *
     * @example C:\\
     *
     * @var string
     */
    public $targetPath;

    /**
     * @description Valid only when **RestoreType** is **OSS**. Indicates the object prefix at the restore destination.
     *
     * @example hbr
     *
     * @var string
     */
    public $targetPrefix;

    /**
     * @description The name of the data table in the target Table Store.
     *
     * @example tablename
     *
     * @var string
     */
    public $targetTableName;

    /**
     * @description The time of the Table Store to be restored. UNIX timestamp, in seconds.
     *
     * @example 1642496881
     *
     * @var int
     */
    public $targetTime;

    /**
     * @description Details of the whole machine backup.
     *
     * @example {\\"sourceInstanceId\\":\\"i-uf62te6pm3iwsyxyz66q\\",\\"bootAfterRestore\\":false}
     *
     * @var string
     */
    public $udmDetailShrink;

    /**
     * @description Valid only when **SourceType** is **UDM_ECS**. Indicates the target region for the restore.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $udmRegionId;

    /**
     * @description The ID of the backup vault that the snapshot belongs to.
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
        'failbackDetailShrink'     => 'FailbackDetail',
        'include'                  => 'Include',
        'initiatedByAck'           => 'InitiatedByAck',
        'options'                  => 'Options',
        'otsDetailShrink'          => 'OtsDetail',
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
        'udmDetailShrink'          => 'UdmDetail',
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
        if (null !== $this->failbackDetailShrink) {
            $res['FailbackDetail'] = $this->failbackDetailShrink;
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
        if (null !== $this->otsDetailShrink) {
            $res['OtsDetail'] = $this->otsDetailShrink;
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
        if (null !== $this->udmDetailShrink) {
            $res['UdmDetail'] = $this->udmDetailShrink;
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
     * @return CreateRestoreJobShrinkRequest
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
            $model->failbackDetailShrink = $map['FailbackDetail'];
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
            $model->otsDetailShrink = $map['OtsDetail'];
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
            $model->udmDetailShrink = $map['UdmDetail'];
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
