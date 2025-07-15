<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class CreateDatasetShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $datasetConfigShrink;

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
     * @var string
     */
    public $documentHandleConfigShrink;

    /**
     * @example portal
     *
     * @var string
     */
    public $invokeType;

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
        'datasetConfigShrink' => 'DatasetConfig',
        'datasetDescription' => 'DatasetDescription',
        'datasetName' => 'DatasetName',
        'datasetType' => 'DatasetType',
        'documentHandleConfigShrink' => 'DocumentHandleConfig',
        'invokeType' => 'InvokeType',
        'searchDatasetEnable' => 'SearchDatasetEnable',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetConfigShrink) {
            $res['DatasetConfig'] = $this->datasetConfigShrink;
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
        if (null !== $this->documentHandleConfigShrink) {
            $res['DocumentHandleConfig'] = $this->documentHandleConfigShrink;
        }
        if (null !== $this->invokeType) {
            $res['InvokeType'] = $this->invokeType;
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
     * @return CreateDatasetShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetConfig'])) {
            $model->datasetConfigShrink = $map['DatasetConfig'];
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
            $model->documentHandleConfigShrink = $map['DocumentHandleConfig'];
        }
        if (isset($map['InvokeType'])) {
            $model->invokeType = $map['InvokeType'];
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
