<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models\ListBatchTaskResponse\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $taskType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $dataPath;

    /**
     * @var string
     */
    public $metaFile;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $processMessage;
    protected $_name = [
        'taskId'         => 'TaskId',
        'status'         => 'Status',
        'taskType'       => 'TaskType',
        'regionId'       => 'RegionId',
        'bucketName'     => 'BucketName',
        'dataPath'       => 'DataPath',
        'metaFile'       => 'MetaFile',
        'modifiedTime'   => 'ModifiedTime',
        'processMessage' => 'ProcessMessage',
    ];

    public function validate()
    {
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('taskType', $this->taskType, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('bucketName', $this->bucketName, true);
        Model::validateRequired('dataPath', $this->dataPath, true);
        Model::validateRequired('metaFile', $this->metaFile, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('processMessage', $this->processMessage, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->dataPath) {
            $res['DataPath'] = $this->dataPath;
        }
        if (null !== $this->metaFile) {
            $res['MetaFile'] = $this->metaFile;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->processMessage) {
            $res['ProcessMessage'] = $this->processMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['DataPath'])) {
            $model->dataPath = $map['DataPath'];
        }
        if (isset($map['MetaFile'])) {
            $model->metaFile = $map['MetaFile'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ProcessMessage'])) {
            $model->processMessage = $map['ProcessMessage'];
        }

        return $model;
    }
}
