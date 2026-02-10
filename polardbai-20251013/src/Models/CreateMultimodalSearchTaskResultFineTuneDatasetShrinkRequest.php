<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class CreateMultimodalSearchTaskResultFineTuneDatasetShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

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
    public $resultIndexShrink;

    /**
     * @var string
     */
    public $resultMode;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $topN;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'datasetDescription' => 'DatasetDescription',
        'datasetName' => 'DatasetName',
        'resultIndexShrink' => 'ResultIndex',
        'resultMode' => 'ResultMode',
        'taskId' => 'TaskId',
        'topN' => 'TopN',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->datasetDescription) {
            $res['DatasetDescription'] = $this->datasetDescription;
        }

        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->resultIndexShrink) {
            $res['ResultIndex'] = $this->resultIndexShrink;
        }

        if (null !== $this->resultMode) {
            $res['ResultMode'] = $this->resultMode;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->topN) {
            $res['TopN'] = $this->topN;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DatasetDescription'])) {
            $model->datasetDescription = $map['DatasetDescription'];
        }

        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['ResultIndex'])) {
            $model->resultIndexShrink = $map['ResultIndex'];
        }

        if (isset($map['ResultMode'])) {
            $model->resultMode = $map['ResultMode'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TopN'])) {
            $model->topN = $map['TopN'];
        }

        return $model;
    }
}
