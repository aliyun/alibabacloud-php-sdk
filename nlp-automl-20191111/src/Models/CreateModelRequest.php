<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111\Models;

use AlibabaCloud\Tea\Model;

class CreateModelRequest extends Model
{
    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var mixed[]
     */
    public $datasetIdList;

    /**
     * @var mixed[]
     */
    public $testDatasetIdList;

    /**
     * @var string
     */
    public $isIncrementalTrain;

    /**
     * @var string
     */
    public $product;
    protected $_name = [
        'modelId'            => 'ModelId',
        'modelType'          => 'ModelType',
        'projectId'          => 'ProjectId',
        'modelName'          => 'ModelName',
        'datasetIdList'      => 'DatasetIdList',
        'testDatasetIdList'  => 'TestDatasetIdList',
        'isIncrementalTrain' => 'IsIncrementalTrain',
        'product'            => 'Product',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->datasetIdList) {
            $res['DatasetIdList'] = $this->datasetIdList;
        }
        if (null !== $this->testDatasetIdList) {
            $res['TestDatasetIdList'] = $this->testDatasetIdList;
        }
        if (null !== $this->isIncrementalTrain) {
            $res['IsIncrementalTrain'] = $this->isIncrementalTrain;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['DatasetIdList'])) {
            $model->datasetIdList = $map['DatasetIdList'];
        }
        if (isset($map['TestDatasetIdList'])) {
            $model->testDatasetIdList = $map['TestDatasetIdList'];
        }
        if (isset($map['IsIncrementalTrain'])) {
            $model->isIncrementalTrain = $map['IsIncrementalTrain'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        return $model;
    }
}
