<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDataBackupSetResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDataBackupSetResponseBody\data\backupObjects;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDataBackupSetResponseBody\data\backupResults;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example cluster
     *
     * @var string
     */
    public $backupObjectType;

    /**
     * @var backupObjects[]
     */
    public $backupObjects;

    /**
     * @var backupResults[]
     */
    public $backupResults;

    /**
     * @example 2023-05-15T07:11:08Z
     *
     * @var string
     */
    public $checkpoint;

    /**
     * @example 31457280
     *
     * @var int
     */
    public $dataSize;

    /**
     * @example 1678847020352
     *
     * @var int
     */
    public $dataVersion;

    /**
     * @example 100***012
     *
     * @var int
     */
    public $downloadTaskId;

    /**
     * @example not_exist
     *
     * @var string
     */
    public $downloadTaskStatus;

    /**
     * @example 2023-04-13T03:38:10Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example logical
     *
     * @var string
     */
    public $method;

    /**
     * @example automated
     *
     * @var string
     */
    public $policy;

    /**
     * @example 52
     *
     * @var string
     */
    public $progress;

    /**
     * @example imm-test-set-cb****ee-b7d7-11ed-956f-****3e10bd70
     *
     * @var int
     */
    public $setId;

    /**
     * @example 2020-05-22T17:04:18
     *
     * @var string
     */
    public $startTime;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example standard
     *
     * @var string
     */
    public $storageClass;

    /**
     * @example manual
     *
     * @var string
     */
    public $type;

    /**
     * @example VALID
     *
     * @var string
     */
    public $validity;
    protected $_name = [
        'backupObjectType'   => 'BackupObjectType',
        'backupObjects'      => 'BackupObjects',
        'backupResults'      => 'BackupResults',
        'checkpoint'         => 'Checkpoint',
        'dataSize'           => 'DataSize',
        'dataVersion'        => 'DataVersion',
        'downloadTaskId'     => 'DownloadTaskId',
        'downloadTaskStatus' => 'DownloadTaskStatus',
        'endTime'            => 'EndTime',
        'method'             => 'Method',
        'policy'             => 'Policy',
        'progress'           => 'Progress',
        'setId'              => 'SetId',
        'startTime'          => 'StartTime',
        'status'             => 'Status',
        'storageClass'       => 'StorageClass',
        'type'               => 'Type',
        'validity'           => 'Validity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupObjectType) {
            $res['BackupObjectType'] = $this->backupObjectType;
        }
        if (null !== $this->backupObjects) {
            $res['BackupObjects'] = [];
            if (null !== $this->backupObjects && \is_array($this->backupObjects)) {
                $n = 0;
                foreach ($this->backupObjects as $item) {
                    $res['BackupObjects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->backupResults) {
            $res['BackupResults'] = [];
            if (null !== $this->backupResults && \is_array($this->backupResults)) {
                $n = 0;
                foreach ($this->backupResults as $item) {
                    $res['BackupResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->dataVersion) {
            $res['DataVersion'] = $this->dataVersion;
        }
        if (null !== $this->downloadTaskId) {
            $res['DownloadTaskId'] = $this->downloadTaskId;
        }
        if (null !== $this->downloadTaskStatus) {
            $res['DownloadTaskStatus'] = $this->downloadTaskStatus;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->validity) {
            $res['Validity'] = $this->validity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupObjectType'])) {
            $model->backupObjectType = $map['BackupObjectType'];
        }
        if (isset($map['BackupObjects'])) {
            if (!empty($map['BackupObjects'])) {
                $model->backupObjects = [];
                $n                    = 0;
                foreach ($map['BackupObjects'] as $item) {
                    $model->backupObjects[$n++] = null !== $item ? backupObjects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BackupResults'])) {
            if (!empty($map['BackupResults'])) {
                $model->backupResults = [];
                $n                    = 0;
                foreach ($map['BackupResults'] as $item) {
                    $model->backupResults[$n++] = null !== $item ? backupResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['DataVersion'])) {
            $model->dataVersion = $map['DataVersion'];
        }
        if (isset($map['DownloadTaskId'])) {
            $model->downloadTaskId = $map['DownloadTaskId'];
        }
        if (isset($map['DownloadTaskStatus'])) {
            $model->downloadTaskStatus = $map['DownloadTaskStatus'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Validity'])) {
            $model->validity = $map['Validity'];
        }

        return $model;
    }
}
