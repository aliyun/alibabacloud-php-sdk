<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetRequest\datasetConfig;

class UpdateDatasetRequest extends Model
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
     * @var int
     */
    public $datasetId;
    /**
     * @var int
     */
    public $searchDatasetEnable;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetConfig'       => 'DatasetConfig',
        'datasetDescription'  => 'DatasetDescription',
        'datasetId'           => 'DatasetId',
        'searchDatasetEnable' => 'SearchDatasetEnable',
        'workspaceId'         => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->datasetConfig) {
            $this->datasetConfig->validate();
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

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
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

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
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
