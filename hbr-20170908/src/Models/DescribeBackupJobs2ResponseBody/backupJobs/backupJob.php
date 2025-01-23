<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2ResponseBody\backupJobs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2ResponseBody\backupJobs\backupJob\detail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2ResponseBody\backupJobs\backupJob\otsDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2ResponseBody\backupJobs\backupJob\paths;

class backupJob extends Model
{
    /**
     * @var int
     */
    public $actualBytes;
    /**
     * @var int
     */
    public $actualFiles;
    /**
     * @var int
     */
    public $actualItems;
    /**
     * @var string
     */
    public $backupType;
    /**
     * @var string
     */
    public $bucket;
    /**
     * @var int
     */
    public $bytesDone;
    /**
     * @var int
     */
    public $bytesTotal;
    /**
     * @var string
     */
    public $changeListPath;
    /**
     * @var string
     */
    public $clientId;
    /**
     * @var int
     */
    public $completeTime;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var int
     */
    public $createdTime;
    /**
     * @var string
     */
    public $crossAccountRoleName;
    /**
     * @var string
     */
    public $crossAccountType;
    /**
     * @var int
     */
    public $crossAccountUserId;
    /**
     * @var string
     */
    public $destDataSourceDetail;
    /**
     * @var string
     */
    public $destDataSourceId;
    /**
     * @var string
     */
    public $destSourceType;
    /**
     * @var detail
     */
    public $detail;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var string
     */
    public $exclude;
    /**
     * @var string
     */
    public $fileSystemId;
    /**
     * @var int
     */
    public $filesDone;
    /**
     * @var int
     */
    public $filesTotal;
    /**
     * @var string
     */
    public $identifier;
    /**
     * @var string
     */
    public $include;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var int
     */
    public $itemsDone;
    /**
     * @var int
     */
    public $itemsTotal;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $jobName;
    /**
     * @var string
     */
    public $options;
    /**
     * @var otsDetail
     */
    public $otsDetail;
    /**
     * @var paths
     */
    public $paths;
    /**
     * @var string
     */
    public $planId;
    /**
     * @var string
     */
    public $prefix;
    /**
     * @var int
     */
    public $progress;
    /**
     * @var string
     */
    public $sourceType;
    /**
     * @var int
     */
    public $speed;
    /**
     * @var string
     */
    public $speedLimit;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $tableName;
    /**
     * @var int
     */
    public $updatedTime;
    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'actualBytes'          => 'ActualBytes',
        'actualFiles'          => 'ActualFiles',
        'actualItems'          => 'ActualItems',
        'backupType'           => 'BackupType',
        'bucket'               => 'Bucket',
        'bytesDone'            => 'BytesDone',
        'bytesTotal'           => 'BytesTotal',
        'changeListPath'       => 'ChangeListPath',
        'clientId'             => 'ClientId',
        'completeTime'         => 'CompleteTime',
        'createTime'           => 'CreateTime',
        'createdTime'          => 'CreatedTime',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType'     => 'CrossAccountType',
        'crossAccountUserId'   => 'CrossAccountUserId',
        'destDataSourceDetail' => 'DestDataSourceDetail',
        'destDataSourceId'     => 'DestDataSourceId',
        'destSourceType'       => 'DestSourceType',
        'detail'               => 'Detail',
        'errorMessage'         => 'ErrorMessage',
        'exclude'              => 'Exclude',
        'fileSystemId'         => 'FileSystemId',
        'filesDone'            => 'FilesDone',
        'filesTotal'           => 'FilesTotal',
        'identifier'           => 'Identifier',
        'include'              => 'Include',
        'instanceId'           => 'InstanceId',
        'instanceName'         => 'InstanceName',
        'itemsDone'            => 'ItemsDone',
        'itemsTotal'           => 'ItemsTotal',
        'jobId'                => 'JobId',
        'jobName'              => 'JobName',
        'options'              => 'Options',
        'otsDetail'            => 'OtsDetail',
        'paths'                => 'Paths',
        'planId'               => 'PlanId',
        'prefix'               => 'Prefix',
        'progress'             => 'Progress',
        'sourceType'           => 'SourceType',
        'speed'                => 'Speed',
        'speedLimit'           => 'SpeedLimit',
        'startTime'            => 'StartTime',
        'status'               => 'Status',
        'tableName'            => 'TableName',
        'updatedTime'          => 'UpdatedTime',
        'vaultId'              => 'VaultId',
    ];

    public function validate()
    {
        if (null !== $this->detail) {
            $this->detail->validate();
        }
        if (null !== $this->otsDetail) {
            $this->otsDetail->validate();
        }
        if (null !== $this->paths) {
            $this->paths->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualBytes) {
            $res['ActualBytes'] = $this->actualBytes;
        }

        if (null !== $this->actualFiles) {
            $res['ActualFiles'] = $this->actualFiles;
        }

        if (null !== $this->actualItems) {
            $res['ActualItems'] = $this->actualItems;
        }

        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }

        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        if (null !== $this->bytesDone) {
            $res['BytesDone'] = $this->bytesDone;
        }

        if (null !== $this->bytesTotal) {
            $res['BytesTotal'] = $this->bytesTotal;
        }

        if (null !== $this->changeListPath) {
            $res['ChangeListPath'] = $this->changeListPath;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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

        if (null !== $this->destDataSourceDetail) {
            $res['DestDataSourceDetail'] = $this->destDataSourceDetail;
        }

        if (null !== $this->destDataSourceId) {
            $res['DestDataSourceId'] = $this->destDataSourceId;
        }

        if (null !== $this->destSourceType) {
            $res['DestSourceType'] = $this->destSourceType;
        }

        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toArray($noStream) : $this->detail;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->exclude) {
            $res['Exclude'] = $this->exclude;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->filesDone) {
            $res['FilesDone'] = $this->filesDone;
        }

        if (null !== $this->filesTotal) {
            $res['FilesTotal'] = $this->filesTotal;
        }

        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }

        if (null !== $this->include) {
            $res['Include'] = $this->include;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->itemsDone) {
            $res['ItemsDone'] = $this->itemsDone;
        }

        if (null !== $this->itemsTotal) {
            $res['ItemsTotal'] = $this->itemsTotal;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->otsDetail) {
            $res['OtsDetail'] = null !== $this->otsDetail ? $this->otsDetail->toArray($noStream) : $this->otsDetail;
        }

        if (null !== $this->paths) {
            $res['Paths'] = null !== $this->paths ? $this->paths->toArray($noStream) : $this->paths;
        }

        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }

        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }

        if (null !== $this->speedLimit) {
            $res['SpeedLimit'] = $this->speedLimit;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
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
        if (isset($map['ActualBytes'])) {
            $model->actualBytes = $map['ActualBytes'];
        }

        if (isset($map['ActualFiles'])) {
            $model->actualFiles = $map['ActualFiles'];
        }

        if (isset($map['ActualItems'])) {
            $model->actualItems = $map['ActualItems'];
        }

        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }

        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        if (isset($map['BytesDone'])) {
            $model->bytesDone = $map['BytesDone'];
        }

        if (isset($map['BytesTotal'])) {
            $model->bytesTotal = $map['BytesTotal'];
        }

        if (isset($map['ChangeListPath'])) {
            $model->changeListPath = $map['ChangeListPath'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

        if (isset($map['DestDataSourceDetail'])) {
            $model->destDataSourceDetail = $map['DestDataSourceDetail'];
        }

        if (isset($map['DestDataSourceId'])) {
            $model->destDataSourceId = $map['DestDataSourceId'];
        }

        if (isset($map['DestSourceType'])) {
            $model->destSourceType = $map['DestSourceType'];
        }

        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['Exclude'])) {
            $model->exclude = $map['Exclude'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['FilesDone'])) {
            $model->filesDone = $map['FilesDone'];
        }

        if (isset($map['FilesTotal'])) {
            $model->filesTotal = $map['FilesTotal'];
        }

        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }

        if (isset($map['Include'])) {
            $model->include = $map['Include'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['ItemsDone'])) {
            $model->itemsDone = $map['ItemsDone'];
        }

        if (isset($map['ItemsTotal'])) {
            $model->itemsTotal = $map['ItemsTotal'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['OtsDetail'])) {
            $model->otsDetail = otsDetail::fromMap($map['OtsDetail']);
        }

        if (isset($map['Paths'])) {
            $model->paths = paths::fromMap($map['Paths']);
        }

        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }

        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }

        if (isset($map['SpeedLimit'])) {
            $model->speedLimit = $map['SpeedLimit'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
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
