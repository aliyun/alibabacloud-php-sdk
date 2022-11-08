<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models;

use AlibabaCloud\Tea\Model;

class UpdateTrainTaskRequest extends Model
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
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $labelIds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $preTrainTaskFlag;

    /**
     * @var int
     */
    public $preTrainTaskId;

    /**
     * @var string
     */
    public $trainMode;
    protected $_name = [
        'advancedParameters' => 'AdvancedParameters',
        'datasetIds'         => 'DatasetIds',
        'description'        => 'Description',
        'id'                 => 'Id',
        'labelIds'           => 'LabelIds',
        'name'               => 'Name',
        'preTrainTaskFlag'   => 'PreTrainTaskFlag',
        'preTrainTaskId'     => 'PreTrainTaskId',
        'trainMode'          => 'TrainMode',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->labelIds) {
            $res['LabelIds'] = $this->labelIds;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->preTrainTaskFlag) {
            $res['PreTrainTaskFlag'] = $this->preTrainTaskFlag;
        }
        if (null !== $this->preTrainTaskId) {
            $res['PreTrainTaskId'] = $this->preTrainTaskId;
        }
        if (null !== $this->trainMode) {
            $res['TrainMode'] = $this->trainMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTrainTaskRequest
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LabelIds'])) {
            $model->labelIds = $map['LabelIds'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PreTrainTaskFlag'])) {
            $model->preTrainTaskFlag = $map['PreTrainTaskFlag'];
        }
        if (isset($map['PreTrainTaskId'])) {
            $model->preTrainTaskId = $map['PreTrainTaskId'];
        }
        if (isset($map['TrainMode'])) {
            $model->trainMode = $map['TrainMode'];
        }

        return $model;
    }
}
