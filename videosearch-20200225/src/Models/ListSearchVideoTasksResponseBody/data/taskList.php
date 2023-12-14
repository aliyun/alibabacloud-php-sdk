<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models\ListSearchVideoTasksResponseBody\data;

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
     * @example xxx
     *
     * @var string
     */
    public $queryTags;

    /**
     * @example 1
     *
     * @var string
     */
    public $remoteTaskId;

    /**
     * @example 0.5
     *
     * @var string
     */
    public $replaceStorageThreshold;

    /**
     * @example 1
     *
     * @var int
     */
    public $searchType;

    /**
     * @example 1
     *
     * @var int
     */
    public $sort;

    /**
     * @example 2
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
     * @var int
     */
    public $storageType;

    /**
     * @example 123
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 123
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
     * @example xxx
     *
     * @var string
     */
    public $videoTags;

    /**
     * @example http://xxx
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'description'             => 'Description',
        'errorDetail'             => 'ErrorDetail',
        'modifiedTime'            => 'ModifiedTime',
        'processResultUrl'        => 'ProcessResultUrl',
        'processTime'             => 'ProcessTime',
        'queryTags'               => 'QueryTags',
        'remoteTaskId'            => 'RemoteTaskId',
        'replaceStorageThreshold' => 'ReplaceStorageThreshold',
        'searchType'              => 'SearchType',
        'sort'                    => 'Sort',
        'status'                  => 'Status',
        'storageInfo'             => 'StorageInfo',
        'storageType'             => 'StorageType',
        'taskId'                  => 'TaskId',
        'videoId'                 => 'VideoId',
        'videoName'               => 'VideoName',
        'videoTags'               => 'VideoTags',
        'videoUrl'                => 'VideoUrl',
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
        if (null !== $this->processResultUrl) {
            $res['ProcessResultUrl'] = $this->processResultUrl;
        }
        if (null !== $this->processTime) {
            $res['ProcessTime'] = $this->processTime;
        }
        if (null !== $this->queryTags) {
            $res['QueryTags'] = $this->queryTags;
        }
        if (null !== $this->remoteTaskId) {
            $res['RemoteTaskId'] = $this->remoteTaskId;
        }
        if (null !== $this->replaceStorageThreshold) {
            $res['ReplaceStorageThreshold'] = $this->replaceStorageThreshold;
        }
        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
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
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (null !== $this->videoTags) {
            $res['VideoTags'] = $this->videoTags;
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
        if (isset($map['ProcessResultUrl'])) {
            $model->processResultUrl = $map['ProcessResultUrl'];
        }
        if (isset($map['ProcessTime'])) {
            $model->processTime = $map['ProcessTime'];
        }
        if (isset($map['QueryTags'])) {
            $model->queryTags = $map['QueryTags'];
        }
        if (isset($map['RemoteTaskId'])) {
            $model->remoteTaskId = $map['RemoteTaskId'];
        }
        if (isset($map['ReplaceStorageThreshold'])) {
            $model->replaceStorageThreshold = $map['ReplaceStorageThreshold'];
        }
        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
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
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
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
        if (isset($map['VideoTags'])) {
            $model->videoTags = $map['VideoTags'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
