<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest\datasetConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest\documentHandleConfig;
use AlibabaCloud\Tea\Model;

class CreateDatasetRequest extends Model
{
    /**
     * @var datasetConfig
     */
    public $datasetConfig;

    /**
     * @example 企业自定义数据集
     *
     * @var string
     */
    public $datasetDescription;

    /**
     * @description This parameter is required.
     *
     * @example businessDataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @example CustomSemanticSearch
     *
     * @var string
     */
    public $datasetType;

    /**
     * @var documentHandleConfig
     */
    public $documentHandleConfig;

    /**
     * @example 3
     *
     * @var int
     */
    public $searchDatasetEnable;

    /**
     * @description This parameter is required.
     *
     * @example llm-xxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetConfig'        => 'DatasetConfig',
        'datasetDescription'   => 'DatasetDescription',
        'datasetName'          => 'DatasetName',
        'datasetType'          => 'DatasetType',
        'documentHandleConfig' => 'DocumentHandleConfig',
        'searchDatasetEnable'  => 'SearchDatasetEnable',
        'workspaceId'          => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetConfig) {
            $res['DatasetConfig'] = null !== $this->datasetConfig ? $this->datasetConfig->toMap() : null;
        }
        if (null !== $this->datasetDescription) {
            $res['DatasetDescription'] = $this->datasetDescription;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->datasetType) {
            $res['DatasetType'] = $this->datasetType;
        }
        if (null !== $this->documentHandleConfig) {
            $res['DocumentHandleConfig'] = null !== $this->documentHandleConfig ? $this->documentHandleConfig->toMap() : null;
        }
        if (null !== $this->searchDatasetEnable) {
            $res['SearchDatasetEnable'] = $this->searchDatasetEnable;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDatasetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetConfig'])) {
            $model->datasetConfig = datasetConfig::fromMap($map['DatasetConfig']);
        }
        if (isset($map['DatasetDescription'])) {
            $model->datasetDescription = $map['DatasetDescription'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['DatasetType'])) {
            $model->datasetType = $map['DatasetType'];
        }
        if (isset($map['DocumentHandleConfig'])) {
            $model->documentHandleConfig = documentHandleConfig::fromMap($map['DocumentHandleConfig']);
        }
        if (isset($map['SearchDatasetEnable'])) {
            $model->searchDatasetEnable = $map['SearchDatasetEnable'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
