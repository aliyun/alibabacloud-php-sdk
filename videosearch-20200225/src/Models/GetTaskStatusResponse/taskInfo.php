<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models\GetTaskStatusResponse;

use AlibabaCloud\Tea\Model;

class taskInfo extends Model
{
    /**
     * @var int
     */
    public $analysisUseTime;

    /**
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $processResultOss;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $submitTime;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $errorInfo;

    /**
     * @var int
     */
    public $storageInfo;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $videoTags;

    /**
     * @var string
     */
    public $videoUrl;

    /**
     * @var string
     */
    public $queryTags;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $replaceStorageThreshold;
    protected $_name = [
        'analysisUseTime'         => 'AnalysisUseTime',
        'duration'                => 'Duration',
        'processResultOss'        => 'ProcessResultOss',
        'resolution'              => 'Resolution',
        'status'                  => 'Status',
        'submitTime'              => 'SubmitTime',
        'finishTime'              => 'FinishTime',
        'taskId'                  => 'TaskId',
        'errorInfo'               => 'ErrorInfo',
        'storageInfo'             => 'StorageInfo',
        'description'             => 'Description',
        'videoId'                 => 'VideoId',
        'videoTags'               => 'VideoTags',
        'videoUrl'                => 'VideoUrl',
        'queryTags'               => 'QueryTags',
        'resourceType'            => 'ResourceType',
        'replaceStorageThreshold' => 'ReplaceStorageThreshold',
    ];

    public function validate()
    {
        Model::validateRequired('analysisUseTime', $this->analysisUseTime, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('processResultOss', $this->processResultOss, true);
        Model::validateRequired('resolution', $this->resolution, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('submitTime', $this->submitTime, true);
        Model::validateRequired('finishTime', $this->finishTime, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('errorInfo', $this->errorInfo, true);
        Model::validateRequired('storageInfo', $this->storageInfo, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('videoId', $this->videoId, true);
        Model::validateRequired('videoTags', $this->videoTags, true);
        Model::validateRequired('videoUrl', $this->videoUrl, true);
        Model::validateRequired('queryTags', $this->queryTags, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('replaceStorageThreshold', $this->replaceStorageThreshold, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisUseTime) {
            $res['AnalysisUseTime'] = $this->analysisUseTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->processResultOss) {
            $res['ProcessResultOss'] = $this->processResultOss;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }
        if (null !== $this->storageInfo) {
            $res['StorageInfo'] = $this->storageInfo;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->videoTags) {
            $res['VideoTags'] = $this->videoTags;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }
        if (null !== $this->queryTags) {
            $res['QueryTags'] = $this->queryTags;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->replaceStorageThreshold) {
            $res['ReplaceStorageThreshold'] = $this->replaceStorageThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnalysisUseTime'])) {
            $model->analysisUseTime = $map['AnalysisUseTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ProcessResultOss'])) {
            $model->processResultOss = $map['ProcessResultOss'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }
        if (isset($map['StorageInfo'])) {
            $model->storageInfo = $map['StorageInfo'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['VideoTags'])) {
            $model->videoTags = $map['VideoTags'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }
        if (isset($map['QueryTags'])) {
            $model->queryTags = $map['QueryTags'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ReplaceStorageThreshold'])) {
            $model->replaceStorageThreshold = $map['ReplaceStorageThreshold'];
        }

        return $model;
    }
}
