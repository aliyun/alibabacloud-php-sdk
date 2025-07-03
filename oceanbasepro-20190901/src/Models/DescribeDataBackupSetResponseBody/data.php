<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDataBackupSetResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDataBackupSetResponseBody\data\backupObjects;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDataBackupSetResponseBody\data\backupResults;

class data extends Model
{
    /**
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
     * @var string
     */
    public $checkpoint;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var int
     */
    public $dataVersion;

    /**
     * @var int
     */
    public $downloadTaskId;

    /**
     * @var string
     */
    public $downloadTaskStatus;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $setId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $validity;
    protected $_name = [
        'backupObjectType' => 'BackupObjectType',
        'backupObjects' => 'BackupObjects',
        'backupResults' => 'BackupResults',
        'checkpoint' => 'Checkpoint',
        'dataSize' => 'DataSize',
        'dataVersion' => 'DataVersion',
        'downloadTaskId' => 'DownloadTaskId',
        'downloadTaskStatus' => 'DownloadTaskStatus',
        'endTime' => 'EndTime',
        'method' => 'Method',
        'policy' => 'Policy',
        'progress' => 'Progress',
        'setId' => 'SetId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'storageClass' => 'StorageClass',
        'type' => 'Type',
        'validity' => 'Validity',
    ];

    public function validate()
    {
        if (\is_array($this->backupObjects)) {
            Model::validateArray($this->backupObjects);
        }
        if (\is_array($this->backupResults)) {
            Model::validateArray($this->backupResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupObjectType) {
            $res['BackupObjectType'] = $this->backupObjectType;
        }

        if (null !== $this->backupObjects) {
            if (\is_array($this->backupObjects)) {
                $res['BackupObjects'] = [];
                $n1 = 0;
                foreach ($this->backupObjects as $item1) {
                    $res['BackupObjects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->backupResults) {
            if (\is_array($this->backupResults)) {
                $res['BackupResults'] = [];
                $n1 = 0;
                foreach ($this->backupResults as $item1) {
                    $res['BackupResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupObjectType'])) {
            $model->backupObjectType = $map['BackupObjectType'];
        }

        if (isset($map['BackupObjects'])) {
            if (!empty($map['BackupObjects'])) {
                $model->backupObjects = [];
                $n1 = 0;
                foreach ($map['BackupObjects'] as $item1) {
                    $model->backupObjects[$n1] = backupObjects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BackupResults'])) {
            if (!empty($map['BackupResults'])) {
                $model->backupResults = [];
                $n1 = 0;
                foreach ($map['BackupResults'] as $item1) {
                    $model->backupResults[$n1] = backupResults::fromMap($item1);
                    ++$n1;
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
