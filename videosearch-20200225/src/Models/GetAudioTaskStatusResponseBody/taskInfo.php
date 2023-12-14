<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models\GetAudioTaskStatusResponseBody;

use AlibabaCloud\Tea\Model;

class taskInfo extends Model
{
    /**
     * @var int
     */
    public $analysisUseTime;

    /**
     * @var string
     */
    public $audioId;

    /**
     * @var string
     */
    public $audioTags;

    /**
     * @var string
     */
    public $audioUrl;

    /**
     * @var string
     */
    public $description;

    /**
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $errorInfo;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var string
     */
    public $processResultOss;

    /**
     * @var string
     */
    public $queryTags;

    /**
     * @var string
     */
    public $replaceStorageThreshold;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $storageInfo;

    /**
     * @var int
     */
    public $submitTime;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'analysisUseTime'         => 'AnalysisUseTime',
        'audioId'                 => 'AudioId',
        'audioTags'               => 'AudioTags',
        'audioUrl'                => 'AudioUrl',
        'description'             => 'Description',
        'duration'                => 'Duration',
        'errorInfo'               => 'ErrorInfo',
        'finishTime'              => 'FinishTime',
        'processResultOss'        => 'ProcessResultOss',
        'queryTags'               => 'QueryTags',
        'replaceStorageThreshold' => 'ReplaceStorageThreshold',
        'resourceType'            => 'ResourceType',
        'status'                  => 'Status',
        'storageInfo'             => 'StorageInfo',
        'submitTime'              => 'SubmitTime',
        'taskId'                  => 'TaskId',
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
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageInfo) {
            $res['StorageInfo'] = $this->storageInfo;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageInfo'])) {
            $model->storageInfo = $map['StorageInfo'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
