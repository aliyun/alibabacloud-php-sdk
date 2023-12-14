<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models\ListSearchAudioTasksResponseBody\data;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $audioId;

    /**
     * @example test
     *
     * @var string
     */
    public $audioTags;

    /**
     * @example http://xxx.mp4
     *
     * @var string
     */
    public $audioUrl;

    /**
     * @var string
     */
    public $description;

    /**
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
     * @example http://xxx
     *
     * @var string
     */
    public $processResultUrl;

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
     * @var int
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
     * @var string
     */
    public $taskId;
    protected $_name = [
        'audioId'          => 'AudioId',
        'audioTags'        => 'AudioTags',
        'audioUrl'         => 'AudioUrl',
        'description'      => 'Description',
        'errorDetail'      => 'ErrorDetail',
        'modifiedTime'     => 'ModifiedTime',
        'processResultUrl' => 'ProcessResultUrl',
        'processTime'      => 'ProcessTime',
        'remoteTaskId'     => 'RemoteTaskId',
        'sort'             => 'Sort',
        'status'           => 'Status',
        'storageInfo'      => 'StorageInfo',
        'taskId'           => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioId) {
            $res['AudioId'] = $this->audioId;
        }
        if (null !== $this->audioTags) {
            $res['AudioTags'] = $this->audioTags;
        }
        if (null !== $this->audioUrl) {
            $res['AudioUrl'] = $this->audioUrl;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->errorDetail) {
            $res['ErrorDetail'] = $this->errorDetail;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->processResultUrl) {
            $res['ProcessResultUrl'] = $this->processResultUrl;
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
        if (isset($map['AudioId'])) {
            $model->audioId = $map['AudioId'];
        }
        if (isset($map['AudioTags'])) {
            $model->audioTags = $map['AudioTags'];
        }
        if (isset($map['AudioUrl'])) {
            $model->audioUrl = $map['AudioUrl'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ErrorDetail'])) {
            $model->errorDetail = $map['ErrorDetail'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ProcessResultUrl'])) {
            $model->processResultUrl = $map['ProcessResultUrl'];
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

        return $model;
    }
}
