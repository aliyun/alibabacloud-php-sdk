<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models\GetTaskStatusResponseBody;

use AlibabaCloud\Tea\Model;

class taskInfo extends Model
{
    /**
     * @example 21
     *
     * @var int
     */
    public $analysisUseTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 186.75
     *
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $errorInfo;

    /**
     * @example 6754336754000
     *
     * @var int
     */
    public $finishTime;

    /**
     * @example https://result*******.aliyuncs.com/xxxxx/test
     *
     * @var string
     */
    public $processResultOss;

    /**
     * @example testQueryTag
     *
     * @var string
     */
    public $queryTags;

    /**
     * @example 0.95
     *
     * @var string
     */
    public $replaceStorageThreshold;

    /**
     * @example 320*160
     *
     * @var string
     */
    public $resolution;

    /**
     * @example 1
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 3
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
     * @var int
     */
    public $storageType;

    /**
     * @example 169876556900
     *
     * @var int
     */
    public $submitTime;

    /**
     * @example 19056
     *
     * @var int
     */
    public $taskId;

    /**
     * @example testVideoId
     *
     * @var string
     */
    public $videoId;

    /**
     * @example testVideoTag
     *
     * @var string
     */
    public $videoTags;

    /**
     * @example https://testVideo.aliyuncs.com/xxxxx
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'analysisUseTime'         => 'AnalysisUseTime',
        'description'             => 'Description',
        'duration'                => 'Duration',
        'errorInfo'               => 'ErrorInfo',
        'finishTime'              => 'FinishTime',
        'processResultOss'        => 'ProcessResultOss',
        'queryTags'               => 'QueryTags',
        'replaceStorageThreshold' => 'ReplaceStorageThreshold',
        'resolution'              => 'Resolution',
        'resourceType'            => 'ResourceType',
        'status'                  => 'Status',
        'storageInfo'             => 'StorageInfo',
        'storageType'             => 'StorageType',
        'submitTime'              => 'SubmitTime',
        'taskId'                  => 'TaskId',
        'videoId'                 => 'VideoId',
        'videoTags'               => 'VideoTags',
        'videoUrl'                => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisUseTime) {
            $res['AnalysisUseTime'] = $this->analysisUseTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->processResultOss) {
            $res['ProcessResultOss'] = $this->processResultOss;
        }
        if (null !== $this->queryTags) {
            $res['QueryTags'] = $this->queryTags;
        }
        if (null !== $this->replaceStorageThreshold) {
            $res['ReplaceStorageThreshold'] = $this->replaceStorageThreshold;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['ProcessResultOss'])) {
            $model->processResultOss = $map['ProcessResultOss'];
        }
        if (isset($map['QueryTags'])) {
            $model->queryTags = $map['QueryTags'];
        }
        if (isset($map['ReplaceStorageThreshold'])) {
            $model->replaceStorageThreshold = $map['ReplaceStorageThreshold'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
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

        return $model;
    }
}
