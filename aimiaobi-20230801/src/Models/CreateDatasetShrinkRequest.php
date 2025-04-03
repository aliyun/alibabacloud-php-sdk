<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class CreateDatasetShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $datasetConfigShrink;

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
     * @var string
     */
    public $documentHandleConfigShrink;

    /**
     * @var int
     */
    public $searchDatasetEnable;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetConfigShrink' => 'DatasetConfig',
        'datasetDescription' => 'DatasetDescription',
        'datasetName' => 'DatasetName',
        'datasetType' => 'DatasetType',
        'documentHandleConfigShrink' => 'DocumentHandleConfig',
        'searchDatasetEnable' => 'SearchDatasetEnable',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (isset($map['SearchDatasetEnable'])) {
            $model->searchDatasetEnable = $map['SearchDatasetEnable'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
