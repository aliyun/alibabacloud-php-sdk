<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRestoreJobs2ResponseBody\restoreJobs;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRestoreJobs2ResponseBody\restoreJobs\restoreJob\otsDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeRestoreJobs2ResponseBody\restoreJobs\restoreJob\report;
use AlibabaCloud\Tea\Model;

class restoreJob extends Model
{
    /**
     * @description The actual amount of data that is restored after duplicates are removed. Unit: bytes.
     *
     * @example 600
     *
     * @var int
     */
    public $actualBytes;

    /**
     * @description This parameter is valid only if the **SourceType** parameter is set to **ECS_FILE**. This parameter indicates the actual number of objects that are restored by the restore job.
     *
     * @example 6
     *
     * @var int
     */
    public $actualItems;

    /**
     * @description The amount of data that was restored. Unit: bytes.
     *
     * @example 800
     *
     * @var int
     */
    public $bytesDone;

    /**
     * @description The total amount of data that was backed up from the data source. Unit: bytes.
     *
     * @example 1000
     *
     * @var int
     */
    public $bytesTotal;

    /**
     * @description The ID of the client group used for restoration.
     *
     * @example cl-000******hp6
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The time when the restore job was completed. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1554347313
     *
     * @var int
     */
    public $completeTime;

    /**
     * @description The time when the restore job was created. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1554347313
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The name of the Resource Access Management (RAM) role that is created within the source Alibaba Cloud account and assigned to the current Alibaba Cloud account to authorize the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example BackupRole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @description Indicates whether data is backed up within the same Alibaba Cloud account or across Alibaba Cloud accounts. Valid values:
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
     * @example 158975xxxxxx4625
     *
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @description The files that failed to be restored.
     *
     * @example "test.csv"
     *
     * @var string
     */
    public $errorFile;

    /**
     * @description The error message that is returned for the restore job.
     *
     * @example PARTIAL_COMPLETE
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description This parameter is valid only if the **SourceType** parameter is set to **ECS_FILE**. This parameter indicates the paths to the files that are excluded from the restore job. The value can be up to 255 characters in length.
     *
     * @example ["/var", "/proc"]
     *
     * @var string
     */
    public $exclude;

    /**
     * @description The time when the restore job expires.
     *
     * @example 1634714531
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The details about the VMware failback task.
     *
     * @example {"cpu":4,"extra":"{\\"restoreVMNamePrefix\\":\\"627-\\",\\"dataCenterName\\":\\"SDDC-Datacenter\\",\\"dataStoreId\\":\\"datastore-50\\",\\"folderId\\":\\"group-v49\\",\\"resourcePoolId\\":\\"resgroup-46\\",\\"locationName\\":\\"vcenter.pc-uf600arcwi9td3eyj641.acvs.aliyuncs.com/SDDC-Datacenter/Workloads\\",\\"computeResourceName\\":\\"SDDC-Datacenter/Default_c-uf600arcwi9td3eyj640\\",\\"dataStoreName\\":\\"Default_c-uf600arcwi9td3eyj640/WorkloadDatastore\\",\\"networkMoReference\\":\\"DistributedVirtualPortgroup:dvportgroup-1001\\",\\"useHotAdd\\":false}","instanceId":"i-2vc357i2eannmmotcagz","memoryInMB":8192,"serverId":"0fdc0c86-eb92-4e05-91ab-eeaf9fb6ad01","uefiBoot":false}
     *
     * @var string
     */
    public $failbackDetail;

    /**
     * @description The paths to the files that are included in the restore job.
     *
     * @example ["/home/alice/*.pdf", "/home/bob/*.txt"]
     *
     * @var string
     */
    public $include;

    /**
     * @description This parameter is valid only if the **SourceType** parameter is set to **ECS_FILE**. This parameter indicates the number of restored objects.
     *
     * @example 8
     *
     * @var int
     */
    public $itemsDone;

    /**
     * @description This parameter is valid only if the **SourceType** parameter is set to **ECS_FILE**. This parameter indicates the total number of objects in the data source.
     *
     * @example 10
     *
     * @var int
     */
    public $itemsTotal;

    /**
     * @description The amount of data that was restored. Unit: bytes. This parameter is valid only if the StorageClass parameter is set to ARCHIVE. The minimum billable size of the data stored at the Archive tier is 1 MB.
     *
     * @example 1048576
     *
     * @var int
     */
    public $meteringBytesDone;

    /**
     * @description The total amount of data that was backed up from the data source. Unit: bytes. This parameter is valid only if the StorageClass parameter is set to ARCHIVE. The minimum billable size of the data stored at the Archive tier is 1 MB.
     *
     * @example 1048576
     *
     * @var int
     */
    public $meteringBytesTotal;

    /**
     * @description This parameter is valid only if the **SourceType** parameter is set to **ECS_FILE**. This parameter indicates whether Windows Volume Shadow Copy Service (VSS) is used to define a restoration path.
     *
     *   This parameter is available only for Windows ECS instances.
     *   If data changes occur in the backup source, the source data must be the same as the data to be backed up before you can set this parameter to `["UseVSS":true]`.
     *   If you use VSS, you cannot restore data from multiple directories.
     *
     * @example {"UseVSS":false}
     *
     * @var string
     */
    public $options;

    /**
     * @description The details about the Tablestore instance.
     *
     * @var otsDetail
     */
    public $otsDetail;

    /**
     * @description The ID of the parent job.
     *
     * @example r-0003hd2an3x4dyv0l18b
     *
     * @var string
     */
    public $parentId;

    /**
     * @description The progress of the restore job. Valid values: [0,10000]. For example, 10000 indicates that the progress is 100%.
     *
     * @example 10000
     *
     * @var int
     */
    public $progress;

    /**
     * @description The report of the restore job.
     *
     * @var report
     */
    public $report;

    /**
     * @description The ID of the restore job.
     *
     * @example r-0003*****8a
     *
     * @var string
     */
    public $restoreId;

    /**
     * @description The type of the restore job.
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
     * @description The ID of the snapshot used for restoration.
     *
     * @example s-0002******ga88
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **ECS_FILE**: ECS files
     *   **OSS**: Object Storage Service (OSS) buckets
     *   **NAS**: Apsara File Storage NAS (NAS) file systems
     *   **OTS_TABLE**: Tablestore instances
     *   **UDM_ECS**: ECS instances
     *
     * @example ECS_FILE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The average speed at which data is backed up. Unit: KB/s.
     *
     * @example 500
     *
     * @var int
     */
    public $speed;

    /**
     * @description The time when the restore job started. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1554347313
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the restore job. Valid values:
     *
     *   **COMPLETE**: The job is completed.
     *   **PARTIAL_COMPLETE**: The job is partially completed.
     *   **FAILED**: The job failed.
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $status;

    /**
     * @description The storage class of the backup data. Valid values:
     *
     *   **STANDARD**
     *   **ARCHIVE**
     *
     * @example STANDARD
     *
     * @var string
     */
    public $storageClass;

    /**
     * @description The name of the destination OSS bucket. This parameter is returned only for OSS buckets.
     *
     * @example target-bucket
     *
     * @var string
     */
    public $targetBucket;

    /**
     * @description The ID of the destination client.
     *
     * @example c-000e*****397
     *
     * @var string
     */
    public $targetClientId;

    /**
     * @description The time when the file system was created. This parameter is returned only for NAS file systems.
     *
     * @example 1634714531
     *
     * @var int
     */
    public $targetCreateTime;

    /**
     * @description The ID of the destination data source.
     *
     * @example ds-000*****997
     *
     * @var string
     */
    public $targetDataSourceId;

    /**
     * @description The ID of the destination NAS file system. This parameter is returned only for NAS file systems.
     *
     * @example 0be9****9c9
     *
     * @var string
     */
    public $targetFileSystemId;

    /**
     * @description The ID of the destination instance for the restore job.
     *
     * @example i-2ze3m7ktcgw******cs
     *
     * @var string
     */
    public $targetInstanceId;

    /**
     * @description The name of the destination Tablestore instance.
     *
     * @example instancename
     *
     * @var string
     */
    public $targetInstanceName;

    /**
     * @description The destination file path of the restore job.
     *
     * @example "D:\\\\rebk"
     *
     * @var string
     */
    public $targetPath;

    /**
     * @description The prefix of the objects that are restored. This parameter is returned only for OSS buckets.
     *
     * @example "/target"
     *
     * @var string
     */
    public $targetPrefix;

    /**
     * @description The name of the destination table in the Tablestore instance.
     *
     * @example tablename
     *
     * @var string
     */
    public $targetTableName;

    /**
     * @description The time when the Tablestore instance was backed up. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1642560261
     *
     * @var int
     */
    public $targetTime;

    /**
     * @description The details about Elastic Compute Service (ECS) instance backup.
     *
     * @example {\\"doCopy\\":true,\\"doBackup\\":false,\\"instanceName\\":\\"instance example\\",\\"appConsistent\\":false,\\"destinationRegionId\\":\\"cn-shanghai\\",\\"enableFsFreeze\\":true,\\"osNameEn\\":\\"Windows Server  2019 Data Center Edition 64bit Chinese Edition\\",\\"osName\\":\\"Windows Server  2019 Data Center Edition 64bit Chinese Edition\\",\\"diskIdList\\":[],\\"backupVaultId\\":\\"\\",\\"snapshotGroup\\":true,\\"destinationRetention\\":35,\\"platform\\":\\"Windows Server 2012\\",\\"timeoutInSeconds\\":60,\\"backupRetention\\":1,\\"osType\\":\\"windows\\",\\"preScriptPath\\":\\"\\",\\"postScriptPath\\":\\"\\",\\"enableWriters\\":true,\\"ecsDeleted\\":false}
     *
     * @var string
     */
    public $udmDetail;

    /**
     * @description The time when the restore job was updated. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1554347313
     *
     * @var int
     */
    public $updatedTime;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-0006******q
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'actualBytes' => 'ActualBytes',
        'actualItems' => 'ActualItems',
        'bytesDone' => 'BytesDone',
        'bytesTotal' => 'BytesTotal',
        'clusterId' => 'ClusterId',
        'completeTime' => 'CompleteTime',
        'createdTime' => 'CreatedTime',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType' => 'CrossAccountType',
        'crossAccountUserId' => 'CrossAccountUserId',
        'errorFile' => 'ErrorFile',
        'errorMessage' => 'ErrorMessage',
        'exclude' => 'Exclude',
        'expireTime' => 'ExpireTime',
        'failbackDetail' => 'FailbackDetail',
        'include' => 'Include',
        'itemsDone' => 'ItemsDone',
        'itemsTotal' => 'ItemsTotal',
        'meteringBytesDone' => 'MeteringBytesDone',
        'meteringBytesTotal' => 'MeteringBytesTotal',
        'options' => 'Options',
        'otsDetail' => 'OtsDetail',
        'parentId' => 'ParentId',
        'progress' => 'Progress',
        'report' => 'Report',
        'restoreId' => 'RestoreId',
        'restoreType' => 'RestoreType',
        'snapshotHash' => 'SnapshotHash',
        'snapshotId' => 'SnapshotId',
        'sourceType' => 'SourceType',
        'speed' => 'Speed',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'storageClass' => 'StorageClass',
        'targetBucket' => 'TargetBucket',
        'targetClientId' => 'TargetClientId',
        'targetCreateTime' => 'TargetCreateTime',
        'targetDataSourceId' => 'TargetDataSourceId',
        'targetFileSystemId' => 'TargetFileSystemId',
        'targetInstanceId' => 'TargetInstanceId',
        'targetInstanceName' => 'TargetInstanceName',
        'targetPath' => 'TargetPath',
        'targetPrefix' => 'TargetPrefix',
        'targetTableName' => 'TargetTableName',
        'targetTime' => 'TargetTime',
        'udmDetail' => 'UdmDetail',
        'updatedTime' => 'UpdatedTime',
        'vaultId' => 'VaultId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualBytes) {
            $res['ActualBytes'] = $this->actualBytes;
        }
        if (null !== $this->actualItems) {
            $res['ActualItems'] = $this->actualItems;
        }
        if (null !== $this->bytesDone) {
            $res['BytesDone'] = $this->bytesDone;
        }
        if (null !== $this->bytesTotal) {
            $res['BytesTotal'] = $this->bytesTotal;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }
        if (null !== $this->crossAccountType) {
            $res['CrossAccountType'] = $this->crossAccountType;
        }
        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
        }
        if (null !== $this->errorFile) {
            $res['ErrorFile'] = $this->errorFile;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->exclude) {
            $res['Exclude'] = $this->exclude;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->failbackDetail) {
            $res['FailbackDetail'] = $this->failbackDetail;
        }
        if (null !== $this->include) {
            $res['Include'] = $this->include;
        }
        if (null !== $this->itemsDone) {
            $res['ItemsDone'] = $this->itemsDone;
        }
        if (null !== $this->itemsTotal) {
            $res['ItemsTotal'] = $this->itemsTotal;
        }
        if (null !== $this->meteringBytesDone) {
            $res['MeteringBytesDone'] = $this->meteringBytesDone;
        }
        if (null !== $this->meteringBytesTotal) {
            $res['MeteringBytesTotal'] = $this->meteringBytesTotal;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->otsDetail) {
            $res['OtsDetail'] = null !== $this->otsDetail ? $this->otsDetail->toMap() : null;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->report) {
            $res['Report'] = null !== $this->report ? $this->report->toMap() : null;
        }
        if (null !== $this->restoreId) {
            $res['RestoreId'] = $this->restoreId;
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
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }
        if (null !== $this->targetBucket) {
            $res['TargetBucket'] = $this->targetBucket;
        }
        if (null !== $this->targetClientId) {
            $res['TargetClientId'] = $this->targetClientId;
        }
        if (null !== $this->targetCreateTime) {
            $res['TargetCreateTime'] = $this->targetCreateTime;
        }
        if (null !== $this->targetDataSourceId) {
            $res['TargetDataSourceId'] = $this->targetDataSourceId;
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
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return restoreJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualBytes'])) {
            $model->actualBytes = $map['ActualBytes'];
        }
        if (isset($map['ActualItems'])) {
            $model->actualItems = $map['ActualItems'];
        }
        if (isset($map['BytesDone'])) {
            $model->bytesDone = $map['BytesDone'];
        }
        if (isset($map['BytesTotal'])) {
            $model->bytesTotal = $map['BytesTotal'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }
        if (isset($map['CrossAccountType'])) {
            $model->crossAccountType = $map['CrossAccountType'];
        }
        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }
        if (isset($map['ErrorFile'])) {
            $model->errorFile = $map['ErrorFile'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Exclude'])) {
            $model->exclude = $map['Exclude'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['FailbackDetail'])) {
            $model->failbackDetail = $map['FailbackDetail'];
        }
        if (isset($map['Include'])) {
            $model->include = $map['Include'];
        }
        if (isset($map['ItemsDone'])) {
            $model->itemsDone = $map['ItemsDone'];
        }
        if (isset($map['ItemsTotal'])) {
            $model->itemsTotal = $map['ItemsTotal'];
        }
        if (isset($map['MeteringBytesDone'])) {
            $model->meteringBytesDone = $map['MeteringBytesDone'];
        }
        if (isset($map['MeteringBytesTotal'])) {
            $model->meteringBytesTotal = $map['MeteringBytesTotal'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['OtsDetail'])) {
            $model->otsDetail = otsDetail::fromMap($map['OtsDetail']);
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Report'])) {
            $model->report = report::fromMap($map['Report']);
        }
        if (isset($map['RestoreId'])) {
            $model->restoreId = $map['RestoreId'];
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
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }
        if (isset($map['TargetBucket'])) {
            $model->targetBucket = $map['TargetBucket'];
        }
        if (isset($map['TargetClientId'])) {
            $model->targetClientId = $map['TargetClientId'];
        }
        if (isset($map['TargetCreateTime'])) {
            $model->targetCreateTime = $map['TargetCreateTime'];
        }
        if (isset($map['TargetDataSourceId'])) {
            $model->targetDataSourceId = $map['TargetDataSourceId'];
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
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
