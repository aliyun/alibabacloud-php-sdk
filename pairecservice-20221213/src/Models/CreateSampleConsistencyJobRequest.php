<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class CreateSampleConsistencyJobRequest extends Model
{
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
    public $featureSaveResourceId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $itemIdField;

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
    public $requestIdField;

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
    public $userIdField;
    protected $_name = [
        'duration' => 'Duration',
        'easModelServiceName' => 'EasModelServiceName',
        'featureSaveResourceId' => 'FeatureSaveResourceId',
        'instanceId' => 'InstanceId',
        'itemIdField' => 'ItemIdField',
        'name' => 'Name',
        'partitionField' => 'PartitionField',
        'partitionFieldFormat' => 'PartitionFieldFormat',
        'requestIdField' => 'RequestIdField',
        'sampleRate' => 'SampleRate',
        'sampleTableName' => 'SampleTableName',
        'sceneId' => 'SceneId',
        'userIdField' => 'UserIdField',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->easModelServiceName) {
            $res['EasModelServiceName'] = $this->easModelServiceName;
        }

        if (null !== $this->featureSaveResourceId) {
            $res['FeatureSaveResourceId'] = $this->featureSaveResourceId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->itemIdField) {
            $res['ItemIdField'] = $this->itemIdField;
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

        if (null !== $this->requestIdField) {
            $res['RequestIdField'] = $this->requestIdField;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['EasModelServiceName'])) {
            $model->easModelServiceName = $map['EasModelServiceName'];
        }

        if (isset($map['FeatureSaveResourceId'])) {
            $model->featureSaveResourceId = $map['FeatureSaveResourceId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ItemIdField'])) {
            $model->itemIdField = $map['ItemIdField'];
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

        if (isset($map['RequestIdField'])) {
            $model->requestIdField = $map['RequestIdField'];
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

        if (isset($map['UserIdField'])) {
            $model->userIdField = $map['UserIdField'];
        }

        return $model;
    }
}
