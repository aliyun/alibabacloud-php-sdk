<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestoreJobsResponseBody;

use AlibabaCloud\Tea\Model;

class restoreJobs extends Model
{
    /**
     * @description The size of backup data. Unit: bytes.
     *
     * @example 20
     *
     * @var int
     */
    public $actualBytes;

    /**
     * @description The total size of data that is restored. Unit: bytes.
     *
     * @example 20
     *
     * @var int
     */
    public $bytesDone;

    /**
     * @description The total size of data that you want to restore. Unit: bytes.
     *
     * @example 20
     *
     * @var int
     */
    public $bytesTotal;

    /**
     * @description The ID of the anti-ransomware agent that is used to perform the restoration task.
     *
     * @example c-000frxwusjauhp9ajpu6
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The timestamp when the restoration task is complete. Unit: milliseconds.
     *
     * @example 1583289054000
     *
     * @var int
     */
    public $completeTime;

    /**
     * @description The timestamp when the restoration task is created. Unit: milliseconds.
     *
     * @example 1583289052000
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The duration of the restoration task. Unit: seconds.
     *
     * @example 100
     *
     * @var int
     */
    public $duration;

    /**
     * @description The number of the restoration tasks on which errors occur.
     *
     * @example 0
     *
     * @var int
     */
    public $errorCount;

    /**
     * @description The name of the CSV file. The CSV file contains the files that fail to be restored.
     *
     * @example s-000f4wxm8f7gur6g2otm.csv
     *
     * @var string
     */
    public $errorFile;

    /**
     * @description The URL to download the CSV file. The CSV file contains the files that fail to be restored.
     *
     * @example ["/home/user"]
     *
     * @var string
     */
    public $errorFileUrl;

    /**
     * @description The error code that is returned for the restoration task.
     *
     * @example NONE
     *
     * @var string
     */
    public $errorType;

    /**
     * @description The timestamp when the in-progress restoration task is expected to be complete. Unit: seconds.
     *
     * @example 1583299054
     *
     * @var int
     */
    public $eta;

    /**
     * @description The directory excluded from the anti-ransomware policy. The value is the directory that you specify to skip protection when you create the anti-ransomware policy.
     *
     * @example ["/home/user"]
     *
     * @var string
     */
    public $excludes;

    /**
     * @description The return value of the restoration task.
     *
     * @example 0
     *
     * @var string
     */
    public $exitCode;

    /**
     * @description The time when the restoration task is created.
     *
     * @example 2021-04-25T19:11Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the restoration task is updated.
     *
     * @example 2021-04-25T19:11Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The directory in which the restored file is stored. The value is the directory that you specify for protection when you create the anti-ransomware policy
     *
     * @example ["/root/disk-uuid-test","/root/install.sh"]
     *
     * @var string
     */
    public $includes;

    /**
     * @description The ID of the server whose data you want to restore.
     *
     * @example i-bp12xnvdax6307gw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the server whose data you want to restore.
     *
     * @example win2012-01
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server whose data you want to restore.
     *
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The internal IP address of the server whose data you want to restore.
     *
     * @example 2.1.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The number of files that are restored.
     *
     * @example 0
     *
     * @var int
     */
    public $itemsDone;

    /**
     * @description The total number of files that need to be restored.
     *
     * @example 0
     *
     * @var int
     */
    public $itemsTotal;

    /**
     * @description The error message.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The progress of the restoration task in percentage.
     *
     * @example 100
     *
     * @var int
     */
    public $percentage;

    /**
     * @description The request ID.
     *
     * @example 0ED92280-4363-57D3-A4D3-4D3FBC99B29F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the restoration task.
     *
     * @example r-000gmcypy5dyf9ey3uv7
     *
     * @var string
     */
    public $restoreId;

    /**
     * @description The name of the restoration task.
     *
     * @example Restore
     *
     * @var string
     */
    public $restoreName;

    /**
     * @description The type of the file that is restored. Valid values:
     *
     *   **ECS_FILE**: files on Elastic Compute Service (ECS) instances
     *   **FILE**: files on servers in data centers
     *
     * @example ECS_FILE
     *
     * @var string
     */
    public $restoreType;

    /**
     * @description The hash value of the snapshot that stores backup data when the data is backed up.
     *
     * @example a3992de83f529b844135fe795d949181735a7d20e0ac8539485c61b7983e618f
     *
     * @var string
     */
    public $snapshotHash;

    /**
     * @description The hash value ID of the snapshot that stores backup data when the data is backed up.
     *
     * @example s-000gmcypy5dy54e39yny
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The version of the backup data.
     *
     * @example 2020-03-03 18:00
     *
     * @var string
     */
    public $snapshotVersion;

    /**
     * @description The restored content.
     *
     * @example ["/home/admin","\\\\\\\\servername\\\\sharename"]
     *
     * @var string
     */
    public $source;

    /**
     * @description The ID of the anti-ransomware agent that is used to back up data.
     *
     * @example c-000gmcypy5dyf9ey3uv7
     *
     * @var string
     */
    public $sourceClientId;

    /**
     * @description The speed at which data is restored. Unit: byte/s.
     *
     * @example 25766558
     *
     * @var int
     */
    public $speed;

    /**
     * @description The status of the restoration task. Valid values:
     *
     *   **RUNNING**: The task is running.
     *   **COMPLETE**: The task is complete.
     *   **FAILED**: The task fails.
     *   **CANCELING**: The task is being canceled.
     *   **CANCELED**: The task is canceled.
     *   **PARTIAL_COMPLETE**: The task is partially successful.
     *   **CREATED**: The task was created but is not run.
     *   **EXPIRED**: The task is not updated.
     *   **QUEUED**: The task is waiting to be run.
     *   **CLIENT_DELETED**: The task fails because the anti-ransomware agent is uninstalled.
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $status;

    /**
     * @description The folder to which the backup data is restored. After you create the restoration task, the backup data is restored to the specified folder.
     *
     * @example /home
     *
     * @var string
     */
    public $target;

    /**
     * @description The timestamp when the restoration task was last updated. Unit: milliseconds.
     *
     * @example 1583289054000
     *
     * @var int
     */
    public $updatedTime;

    /**
     * @description The UUID of the server whose data you want to restore.
     *
     * @example 6E3DABB6-3F6A-40DB-9492-2C8B59C****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The ID of the backup vault in which the backup data is stored.
     *
     * @example v-000b0v0jqzmse2yz06zw
     *
     * @var string
     */
    public $vaultId;

    /**
     * @description The ID of the region where the backup vault resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vaultRegionId;
    protected $_name = [
        'actualBytes'     => 'ActualBytes',
        'bytesDone'       => 'BytesDone',
        'bytesTotal'      => 'BytesTotal',
        'clientId'        => 'ClientId',
        'completeTime'    => 'CompleteTime',
        'createdTime'     => 'CreatedTime',
        'duration'        => 'Duration',
        'errorCount'      => 'ErrorCount',
        'errorFile'       => 'ErrorFile',
        'errorFileUrl'    => 'ErrorFileUrl',
        'errorType'       => 'ErrorType',
        'eta'             => 'Eta',
        'excludes'        => 'Excludes',
        'exitCode'        => 'ExitCode',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'includes'        => 'Includes',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'internetIp'      => 'InternetIp',
        'intranetIp'      => 'IntranetIp',
        'itemsDone'       => 'ItemsDone',
        'itemsTotal'      => 'ItemsTotal',
        'message'         => 'Message',
        'percentage'      => 'Percentage',
        'requestId'       => 'RequestId',
        'restoreId'       => 'RestoreId',
        'restoreName'     => 'RestoreName',
        'restoreType'     => 'RestoreType',
        'snapshotHash'    => 'SnapshotHash',
        'snapshotId'      => 'SnapshotId',
        'snapshotVersion' => 'SnapshotVersion',
        'source'          => 'Source',
        'sourceClientId'  => 'SourceClientId',
        'speed'           => 'Speed',
        'status'          => 'Status',
        'target'          => 'Target',
        'updatedTime'     => 'UpdatedTime',
        'uuid'            => 'Uuid',
        'vaultId'         => 'VaultId',
        'vaultRegionId'   => 'VaultRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualBytes) {
            $res['ActualBytes'] = $this->actualBytes;
        }
        if (null !== $this->bytesDone) {
            $res['BytesDone'] = $this->bytesDone;
        }
        if (null !== $this->bytesTotal) {
            $res['BytesTotal'] = $this->bytesTotal;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }
        if (null !== $this->errorFile) {
            $res['ErrorFile'] = $this->errorFile;
        }
        if (null !== $this->errorFileUrl) {
            $res['ErrorFileUrl'] = $this->errorFileUrl;
        }
        if (null !== $this->errorType) {
            $res['ErrorType'] = $this->errorType;
        }
        if (null !== $this->eta) {
            $res['Eta'] = $this->eta;
        }
        if (null !== $this->excludes) {
            $res['Excludes'] = $this->excludes;
        }
        if (null !== $this->exitCode) {
            $res['ExitCode'] = $this->exitCode;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->includes) {
            $res['Includes'] = $this->includes;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->itemsDone) {
            $res['ItemsDone'] = $this->itemsDone;
        }
        if (null !== $this->itemsTotal) {
            $res['ItemsTotal'] = $this->itemsTotal;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->restoreId) {
            $res['RestoreId'] = $this->restoreId;
        }
        if (null !== $this->restoreName) {
            $res['RestoreName'] = $this->restoreName;
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
        if (null !== $this->snapshotVersion) {
            $res['SnapshotVersion'] = $this->snapshotVersion;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceClientId) {
            $res['SourceClientId'] = $this->sourceClientId;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }
        if (null !== $this->vaultRegionId) {
            $res['VaultRegionId'] = $this->vaultRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return restoreJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualBytes'])) {
            $model->actualBytes = $map['ActualBytes'];
        }
        if (isset($map['BytesDone'])) {
            $model->bytesDone = $map['BytesDone'];
        }
        if (isset($map['BytesTotal'])) {
            $model->bytesTotal = $map['BytesTotal'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }
        if (isset($map['ErrorFile'])) {
            $model->errorFile = $map['ErrorFile'];
        }
        if (isset($map['ErrorFileUrl'])) {
            $model->errorFileUrl = $map['ErrorFileUrl'];
        }
        if (isset($map['ErrorType'])) {
            $model->errorType = $map['ErrorType'];
        }
        if (isset($map['Eta'])) {
            $model->eta = $map['Eta'];
        }
        if (isset($map['Excludes'])) {
            $model->excludes = $map['Excludes'];
        }
        if (isset($map['ExitCode'])) {
            $model->exitCode = $map['ExitCode'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Includes'])) {
            $model->includes = $map['Includes'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['ItemsDone'])) {
            $model->itemsDone = $map['ItemsDone'];
        }
        if (isset($map['ItemsTotal'])) {
            $model->itemsTotal = $map['ItemsTotal'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RestoreId'])) {
            $model->restoreId = $map['RestoreId'];
        }
        if (isset($map['RestoreName'])) {
            $model->restoreName = $map['RestoreName'];
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
        if (isset($map['SnapshotVersion'])) {
            $model->snapshotVersion = $map['SnapshotVersion'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceClientId'])) {
            $model->sourceClientId = $map['SourceClientId'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }
        if (isset($map['VaultRegionId'])) {
            $model->vaultRegionId = $map['VaultRegionId'];
        }

        return $model;
    }
}
