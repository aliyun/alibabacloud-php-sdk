<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSnapshotsResponseBody;

use AlibabaCloud\Tea\Model;

class snapshots extends Model
{
    /**
     * @var int
     */
    public $actualBytes;

    /**
     * @var int
     */
    public $actualItems;

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
     * @var string
     */
    public $clientVersion;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $errorFile;

    /**
     * @var string
     */
    public $instanceId;

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
    public $parentSnapshotHash;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string[]
     */
    public $paths;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $retention;

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
    public $sourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'actualBytes'        => 'ActualBytes',
        'actualItems'        => 'ActualItems',
        'bytesDone'          => 'BytesDone',
        'bytesTotal'         => 'BytesTotal',
        'clientId'           => 'ClientId',
        'clientVersion'      => 'ClientVersion',
        'createdTime'        => 'CreatedTime',
        'errorFile'          => 'ErrorFile',
        'instanceId'         => 'InstanceId',
        'itemsDone'          => 'ItemsDone',
        'itemsTotal'         => 'ItemsTotal',
        'jobId'              => 'JobId',
        'parentSnapshotHash' => 'ParentSnapshotHash',
        'path'               => 'Path',
        'paths'              => 'Paths',
        'planId'             => 'PlanId',
        'regionId'           => 'RegionId',
        'retention'          => 'Retention',
        'snapshotHash'       => 'SnapshotHash',
        'snapshotId'         => 'SnapshotId',
        'sourceType'         => 'SourceType',
        'status'             => 'Status',
        'uuid'               => 'Uuid',
        'vaultId'            => 'VaultId',
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
        if (null !== $this->actualItems) {
            $res['ActualItems'] = $this->actualItems;
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
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->errorFile) {
            $res['ErrorFile'] = $this->errorFile;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->parentSnapshotHash) {
            $res['ParentSnapshotHash'] = $this->parentSnapshotHash;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return snapshots
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
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ErrorFile'])) {
            $model->errorFile = $map['ErrorFile'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['ParentSnapshotHash'])) {
            $model->parentSnapshotHash = $map['ParentSnapshotHash'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = $map['Paths'];
            }
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
