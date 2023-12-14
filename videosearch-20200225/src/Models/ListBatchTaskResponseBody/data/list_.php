<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models\ListBatchTaskResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $arn;

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
     * @example 1618396147
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @example http://mult***re.oss-cn-hangzhou.aliyuncs.com/batchProcessMessage//1989587002255388/096cae3e-5a0e-4cb6-9f07-9d9cb81f9b95?Expires=1601449075&OSSAccessKeyId=LTAI4Fsi******Y7maLLvP&Signature=jdbmaJ2rKY5%2B*****2h6E8U0%3D
     *
     * @var string
     */
    public $processMessage;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @example http://xxx
     *
     * @var string
     */
    public $subTaskDetail;

    /**
     * @example 10876
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 1
     *
     * @var int
     */
    public $taskType;
    protected $_name = [
        'arn'            => 'Arn',
        'bucketName'     => 'BucketName',
        'dataPath'       => 'DataPath',
        'metaFile'       => 'MetaFile',
        'modifiedTime'   => 'ModifiedTime',
        'processMessage' => 'ProcessMessage',
        'regionId'       => 'RegionId',
        'status'         => 'Status',
        'subTaskDetail'  => 'SubTaskDetail',
        'taskId'         => 'TaskId',
        'taskType'       => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subTaskDetail) {
            $res['SubTaskDetail'] = $this->subTaskDetail;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubTaskDetail'])) {
            $model->subTaskDetail = $map['SubTaskDetail'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
