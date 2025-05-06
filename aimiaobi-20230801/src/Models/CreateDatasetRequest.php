<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest\datasetConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\CreateDatasetRequest\documentHandleConfig;

class CreateDatasetRequest extends Model
{
    /**
     * @var datasetConfig
     */
    public $datasetConfig;

    /**
     * @var string
     */
    public $datasetDescription;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $datasetType;

    /**
     * @var documentHandleConfig
     */
    public $documentHandleConfig;

    /**
     * @var string
     */
    public $invokeType;

    /**
     * @var int
     */
    public $searchDatasetEnable;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetConfig' => 'DatasetConfig',
        'datasetDescription' => 'DatasetDescription',
        'datasetName' => 'DatasetName',
        'datasetType' => 'DatasetType',
        'documentHandleConfig' => 'DocumentHandleConfig',
        'invokeType' => 'InvokeType',
        'searchDatasetEnable' => 'SearchDatasetEnable',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->datasetConfig) {
            $this->datasetConfig->validate();
        }
        if (null !== $this->documentHandleConfig) {
            $this->documentHandleConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetConfig) {
            $res['DatasetConfig'] = null !== $this->datasetConfig ? $this->datasetConfig->toArray($noStream) : $this->datasetConfig;
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
            $res['DocumentHandleConfig'] = null !== $this->documentHandleConfig ? $this->documentHandleConfig->toArray($noStream) : $this->documentHandleConfig;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
