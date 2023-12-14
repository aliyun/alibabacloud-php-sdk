<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models\ListStorageVideoTasksResponseBody\data;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example xxx
     *
     * @var string
     */
    public $errorDetail;

    /**
     * @example 1618396147
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $processTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $remoteTaskId;

    /**
     * @example 1
     *
     * @var int
     */
    public $sort;

    /**
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $storageInfo;

    /**
     * @example 1
     *
     * @var int
     */
    public $taskId;

    /**
     * @example 1
     *
     * @var string
     */
    public $videoId;

    /**
     * @example testName
     *
     * @var string
     */
    public $videoName;

    /**
     * @example http://xxx
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'description'  => 'Description',
        'errorDetail'  => 'ErrorDetail',
        'modifiedTime' => 'ModifiedTime',
        'processTime'  => 'ProcessTime',
        'remoteTaskId' => 'RemoteTaskId',
        'sort'         => 'Sort',
        'status'       => 'Status',
        'storageInfo'  => 'StorageInfo',
        'taskId'       => 'TaskId',
        'videoId'      => 'VideoId',
        'videoName'    => 'VideoName',
        'videoUrl'     => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->errorDetail) {
            $res['ErrorDetail'] = $this->errorDetail;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->processTime) {
            $res['ProcessTime'] = $this->processTime;
        }
        if (null !== $this->remoteTaskId) {
            $res['RemoteTaskId'] = $this->remoteTaskId;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageInfo) {
            $res['StorageInfo'] = $this->storageInfo;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->videoName) {
            $res['VideoName'] = $this->videoName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ErrorDetail'])) {
            $model->errorDetail = $map['ErrorDetail'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ProcessTime'])) {
            $model->processTime = $map['ProcessTime'];
        }
        if (isset($map['RemoteTaskId'])) {
            $model->remoteTaskId = $map['RemoteTaskId'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageInfo'])) {
            $model->storageInfo = $map['StorageInfo'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['VideoName'])) {
            $model->videoName = $map['VideoName'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
