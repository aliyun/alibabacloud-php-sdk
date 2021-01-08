<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models\ListSearchVideoTasksResponse\data;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @var string
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
    public $status;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $processResultUrl;

    /**
     * @var int
     */
    public $storageType;

    /**
     * @var int
     */
    public $storageInfo;

    /**
     * @var string
     */
    public $videoUrl;

    /**
     * @var string
     */
    public $errorDetail;

    /**
     * @var string
     */
    public $replaceStorageThreshold;

    /**
     * @var string
     */
    public $queryTags;

    /**
     * @var string
     */
    public $remoteTaskId;

    /**
     * @var string
     */
    public $videoTags;

    /**
     * @var int
     */
    public $searchType;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'taskId'                  => 'TaskId',
        'videoId'                 => 'VideoId',
        'videoName'               => 'VideoName',
        'processTime'             => 'ProcessTime',
        'status'                  => 'Status',
        'modifiedTime'            => 'ModifiedTime',
        'processResultUrl'        => 'ProcessResultUrl',
        'storageType'             => 'StorageType',
        'storageInfo'             => 'StorageInfo',
        'videoUrl'                => 'VideoUrl',
        'errorDetail'             => 'ErrorDetail',
        'replaceStorageThreshold' => 'ReplaceStorageThreshold',
        'queryTags'               => 'QueryTags',
        'remoteTaskId'            => 'RemoteTaskId',
        'videoTags'               => 'VideoTags',
        'searchType'              => 'SearchType',
        'description'             => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('videoId', $this->videoId, true);
        Model::validateRequired('videoName', $this->videoName, true);
        Model::validateRequired('processTime', $this->processTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('processResultUrl', $this->processResultUrl, true);
        Model::validateRequired('storageType', $this->storageType, true);
        Model::validateRequired('storageInfo', $this->storageInfo, true);
        Model::validateRequired('videoUrl', $this->videoUrl, true);
        Model::validateRequired('errorDetail', $this->errorDetail, true);
        Model::validateRequired('replaceStorageThreshold', $this->replaceStorageThreshold, true);
        Model::validateRequired('queryTags', $this->queryTags, true);
        Model::validateRequired('remoteTaskId', $this->remoteTaskId, true);
        Model::validateRequired('videoTags', $this->videoTags, true);
        Model::validateRequired('searchType', $this->searchType, true);
        Model::validateRequired('description', $this->description, true);
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->processResultUrl) {
            $res['ProcessResultUrl'] = $this->processResultUrl;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->storageInfo) {
            $res['StorageInfo'] = $this->storageInfo;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }
        if (null !== $this->errorDetail) {
            $res['ErrorDetail'] = $this->errorDetail;
        }
        if (null !== $this->replaceStorageThreshold) {
            $res['ReplaceStorageThreshold'] = $this->replaceStorageThreshold;
        }
        if (null !== $this->queryTags) {
            $res['QueryTags'] = $this->queryTags;
        }
        if (null !== $this->remoteTaskId) {
            $res['RemoteTaskId'] = $this->remoteTaskId;
        }
        if (null !== $this->videoTags) {
            $res['VideoTags'] = $this->videoTags;
        }
        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ProcessResultUrl'])) {
            $model->processResultUrl = $map['ProcessResultUrl'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['StorageInfo'])) {
            $model->storageInfo = $map['StorageInfo'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }
        if (isset($map['ErrorDetail'])) {
            $model->errorDetail = $map['ErrorDetail'];
        }
        if (isset($map['ReplaceStorageThreshold'])) {
            $model->replaceStorageThreshold = $map['ReplaceStorageThreshold'];
        }
        if (isset($map['QueryTags'])) {
            $model->queryTags = $map['QueryTags'];
        }
        if (isset($map['RemoteTaskId'])) {
            $model->remoteTaskId = $map['RemoteTaskId'];
        }
        if (isset($map['VideoTags'])) {
            $model->videoTags = $map['VideoTags'];
        }
        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
