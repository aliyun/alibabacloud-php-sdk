<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models\ListStorageAudioTasksResponse\data;

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
    public $audioId;

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
    public $updateTime;

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
    public $audioUrl;

    /**
     * @var int
     */
    public $sort;
    protected $_name = [
        'taskId'       => 'TaskId',
        'audioId'      => 'AudioId',
        'processTime'  => 'ProcessTime',
        'storageInfo'  => 'StorageInfo',
        'updateTime'   => 'UpdateTime',
        'status'       => 'Status',
        'errorDetail'  => 'ErrorDetail',
        'remoteTaskId' => 'RemoteTaskId',
        'description'  => 'Description',
        'audioUrl'     => 'AudioUrl',
        'sort'         => 'Sort',
    ];

    public function validate()
    {
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('audioId', $this->audioId, true);
        Model::validateRequired('processTime', $this->processTime, true);
        Model::validateRequired('storageInfo', $this->storageInfo, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('errorDetail', $this->errorDetail, true);
        Model::validateRequired('remoteTaskId', $this->remoteTaskId, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('audioUrl', $this->audioUrl, true);
        Model::validateRequired('sort', $this->sort, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->audioId) {
            $res['AudioId'] = $this->audioId;
        }
        if (null !== $this->processTime) {
            $res['ProcessTime'] = $this->processTime;
        }
        if (null !== $this->storageInfo) {
            $res['StorageInfo'] = $this->storageInfo;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (null !== $this->audioUrl) {
            $res['AudioUrl'] = $this->audioUrl;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
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
        if (isset($map['AudioId'])) {
            $model->audioId = $map['AudioId'];
        }
        if (isset($map['ProcessTime'])) {
            $model->processTime = $map['ProcessTime'];
        }
        if (isset($map['StorageInfo'])) {
            $model->storageInfo = $map['StorageInfo'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
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
        if (isset($map['AudioUrl'])) {
            $model->audioUrl = $map['AudioUrl'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        return $model;
    }
}
