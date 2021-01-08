<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models\ListStorageVideoTasksResponse\data;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $videoName;

    /**
     * @var int
     */
    public $processTime;

    /**
     * @var int
     */
    public $storageInfo;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $errorDetail;

    /**
     * @var string
     */
    public $remoteTaskId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'taskId'       => 'TaskId',
        'videoId'      => 'VideoId',
        'videoName'    => 'VideoName',
        'processTime'  => 'ProcessTime',
        'storageInfo'  => 'StorageInfo',
        'modifiedTime' => 'ModifiedTime',
        'status'       => 'Status',
        'errorDetail'  => 'ErrorDetail',
        'remoteTaskId' => 'RemoteTaskId',
        'description'  => 'Description',
        'videoUrl'     => 'VideoUrl',
    ];

    public function validate()
    {
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('videoId', $this->videoId, true);
        Model::validateRequired('videoName', $this->videoName, true);
        Model::validateRequired('processTime', $this->processTime, true);
        Model::validateRequired('storageInfo', $this->storageInfo, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('errorDetail', $this->errorDetail, true);
        Model::validateRequired('remoteTaskId', $this->remoteTaskId, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('videoUrl', $this->videoUrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->videoName) {
            $res['VideoName'] = $this->videoName;
        }
        if (null !== $this->processTime) {
            $res['ProcessTime'] = $this->processTime;
        }
        if (null !== $this->storageInfo) {
            $res['StorageInfo'] = $this->storageInfo;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->errorDetail) {
            $res['ErrorDetail'] = $this->errorDetail;
        }
        if (null !== $this->remoteTaskId) {
            $res['RemoteTaskId'] = $this->remoteTaskId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['VideoName'])) {
            $model->videoName = $map['VideoName'];
        }
        if (isset($map['ProcessTime'])) {
            $model->processTime = $map['ProcessTime'];
        }
        if (isset($map['StorageInfo'])) {
            $model->storageInfo = $map['StorageInfo'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ErrorDetail'])) {
            $model->errorDetail = $map['ErrorDetail'];
        }
        if (isset($map['RemoteTaskId'])) {
            $model->remoteTaskId = $map['RemoteTaskId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
