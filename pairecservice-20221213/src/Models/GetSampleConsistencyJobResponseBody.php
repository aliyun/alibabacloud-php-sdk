<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class GetSampleConsistencyJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $easModelServiceName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $featureSaveResourceId;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $itemIdField;

    /**
     * @var string
     */
    public $logs;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $partitionField;

    /**
     * @var string
     */
    public $partitionFieldFormat;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $requestIdField;

    /**
     * @var string
     */
    public $sampleConsistencyJobId;

    /**
     * @var string
     */
    public $sampleRate;

    /**
     * @var string
     */
    public $sampleTableName;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userIdField;
    protected $_name = [
        'config' => 'Config',
        'duration' => 'Duration',
        'easModelServiceName' => 'EasModelServiceName',
        'endTime' => 'EndTime',
        'featureSaveResourceId' => 'FeatureSaveResourceId',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'itemIdField' => 'ItemIdField',
        'logs' => 'Logs',
        'name' => 'Name',
        'partitionField' => 'PartitionField',
        'partitionFieldFormat' => 'PartitionFieldFormat',
        'requestId' => 'RequestId',
        'requestIdField' => 'RequestIdField',
        'sampleConsistencyJobId' => 'SampleConsistencyJobId',
        'sampleRate' => 'SampleRate',
        'sampleTableName' => 'SampleTableName',
        'sceneId' => 'SceneId',
        'sceneName' => 'SceneName',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'userIdField' => 'UserIdField',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->easModelServiceName) {
            $res['EasModelServiceName'] = $this->easModelServiceName;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->featureSaveResourceId) {
            $res['FeatureSaveResourceId'] = $this->featureSaveResourceId;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->itemIdField) {
            $res['ItemIdField'] = $this->itemIdField;
        }

        if (null !== $this->logs) {
            $res['Logs'] = $this->logs;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->partitionField) {
            $res['PartitionField'] = $this->partitionField;
        }

        if (null !== $this->partitionFieldFormat) {
            $res['PartitionFieldFormat'] = $this->partitionFieldFormat;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->requestIdField) {
            $res['RequestIdField'] = $this->requestIdField;
        }

        if (null !== $this->sampleConsistencyJobId) {
            $res['SampleConsistencyJobId'] = $this->sampleConsistencyJobId;
        }

        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }

        if (null !== $this->sampleTableName) {
            $res['SampleTableName'] = $this->sampleTableName;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userIdField) {
            $res['UserIdField'] = $this->userIdField;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['EasModelServiceName'])) {
            $model->easModelServiceName = $map['EasModelServiceName'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FeatureSaveResourceId'])) {
            $model->featureSaveResourceId = $map['FeatureSaveResourceId'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['ItemIdField'])) {
            $model->itemIdField = $map['ItemIdField'];
        }

        if (isset($map['Logs'])) {
            $model->logs = $map['Logs'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PartitionField'])) {
            $model->partitionField = $map['PartitionField'];
        }

        if (isset($map['PartitionFieldFormat'])) {
            $model->partitionFieldFormat = $map['PartitionFieldFormat'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RequestIdField'])) {
            $model->requestIdField = $map['RequestIdField'];
        }

        if (isset($map['SampleConsistencyJobId'])) {
            $model->sampleConsistencyJobId = $map['SampleConsistencyJobId'];
        }

        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }

        if (isset($map['SampleTableName'])) {
            $model->sampleTableName = $map['SampleTableName'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserIdField'])) {
            $model->userIdField = $map['UserIdField'];
        }

        return $model;
    }
}
