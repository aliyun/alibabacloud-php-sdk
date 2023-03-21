<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestoreJobsResponseBody;

use AlibabaCloud\Tea\Model;

class restoreJobs extends Model
{
    /**
     * @var int
     */
    public $actualBytes;

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
    public $clientId;

    /**
     * @var int
     */
    public $completeTime;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $errorCount;

    /**
     * @var string
     */
    public $errorFile;

    /**
     * @var string
     */
    public $errorFileUrl;

    /**
     * @var string
     */
    public $errorType;

    /**
     * @var int
     */
    public $eta;

    /**
     * @var string
     */
    public $excludes;

    /**
     * @var string
     */
    public $exitCode;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $includes;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

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
    public $message;

    /**
     * @var int
     */
    public $percentage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $restoreId;

    /**
     * @var string
     */
    public $restoreName;

    /**
     * @var string
     */
    public $restoreType;

    /**
     * @var string
     */
    public $snapshotHash;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $snapshotVersion;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceClientId;

    /**
     * @var int
     */
    public $speed;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $target;

    /**
     * @var int
     */
    public $updatedTime;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $vaultId;
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

        return $model;
    }
}
