<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models;

use AlibabaCloud\Tea\Model;

class CreateTrainTaskRequest extends Model
{
    /**
     * @var string
     */
    public $advancedParameters;

    /**
     * @var string
     */
    public $datasetIds;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $labelIds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $preTrainTaskId;

    /**
     * @var string
     */
    public $trainMode;

    /**
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'advancedParameters' => 'AdvancedParameters',
        'datasetIds'         => 'DatasetIds',
        'description'        => 'Description',
        'labelIds'           => 'LabelIds',
        'name'               => 'Name',
        'preTrainTaskId'     => 'PreTrainTaskId',
        'trainMode'          => 'TrainMode',
        'workspaceId'        => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedParameters) {
            $res['AdvancedParameters'] = $this->advancedParameters;
        }
        if (null !== $this->datasetIds) {
            $res['DatasetIds'] = $this->datasetIds;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->labelIds) {
            $res['LabelIds'] = $this->labelIds;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->preTrainTaskId) {
            $res['PreTrainTaskId'] = $this->preTrainTaskId;
        }
        if (null !== $this->trainMode) {
            $res['TrainMode'] = $this->trainMode;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrainTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedParameters'])) {
            $model->advancedParameters = $map['AdvancedParameters'];
        }
        if (isset($map['DatasetIds'])) {
            $model->datasetIds = $map['DatasetIds'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LabelIds'])) {
            $model->labelIds = $map['LabelIds'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PreTrainTaskId'])) {
            $model->preTrainTaskId = $map['PreTrainTaskId'];
        }
        if (isset($map['TrainMode'])) {
            $model->trainMode = $map['TrainMode'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
