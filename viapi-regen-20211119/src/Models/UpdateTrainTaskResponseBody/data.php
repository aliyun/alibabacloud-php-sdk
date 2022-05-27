<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models\UpdateTrainTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $labelId;

    /**
     * @var string
     */
    public $labelName;

    /**
     * @var string
     */
    public $modelEffect;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $trainMode;

    /**
     * @var string
     */
    public $trainStatus;
    protected $_name = [
        'datasetId'   => 'DatasetId',
        'datasetName' => 'DatasetName',
        'description' => 'Description',
        'gmtCreate'   => 'GmtCreate',
        'id'          => 'Id',
        'labelId'     => 'LabelId',
        'labelName'   => 'LabelName',
        'modelEffect' => 'ModelEffect',
        'modelId'     => 'ModelId',
        'taskName'    => 'TaskName',
        'trainMode'   => 'TrainMode',
        'trainStatus' => 'TrainStatus',
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
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->labelId) {
            $res['LabelId'] = $this->labelId;
        }
        if (null !== $this->labelName) {
            $res['LabelName'] = $this->labelName;
        }
        if (null !== $this->modelEffect) {
            $res['ModelEffect'] = $this->modelEffect;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->trainMode) {
            $res['TrainMode'] = $this->trainMode;
        }
        if (null !== $this->trainStatus) {
            $res['TrainStatus'] = $this->trainStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LabelId'])) {
            $model->labelId = $map['LabelId'];
        }
        if (isset($map['LabelName'])) {
            $model->labelName = $map['LabelName'];
        }
        if (isset($map['ModelEffect'])) {
            $model->modelEffect = $map['ModelEffect'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TrainMode'])) {
            $model->trainMode = $map['TrainMode'];
        }
        if (isset($map['TrainStatus'])) {
            $model->trainStatus = $map['TrainStatus'];
        }

        return $model;
    }
}
