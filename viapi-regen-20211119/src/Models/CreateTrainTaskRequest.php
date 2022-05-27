<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models;

use AlibabaCloud\Tea\Model;

class CreateTrainTaskRequest extends Model
{
    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $labelId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $trainMode;

    /**
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'datasetId'   => 'DatasetId',
        'description' => 'Description',
        'labelId'     => 'LabelId',
        'name'        => 'Name',
        'trainMode'   => 'TrainMode',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->labelId) {
            $res['LabelId'] = $this->labelId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LabelId'])) {
            $model->labelId = $map['LabelId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
