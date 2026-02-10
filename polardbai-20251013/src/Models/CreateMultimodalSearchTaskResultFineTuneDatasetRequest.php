<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class CreateMultimodalSearchTaskResultFineTuneDatasetRequest extends Model
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
     * @var int[]
     */
    public $resultIndex;

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
        'resultIndex' => 'ResultIndex',
        'resultMode' => 'ResultMode',
        'taskId' => 'TaskId',
        'topN' => 'TopN',
    ];

    public function validate()
    {
        if (\is_array($this->resultIndex)) {
            Model::validateArray($this->resultIndex);
        }
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

        if (null !== $this->resultIndex) {
            if (\is_array($this->resultIndex)) {
                $res['ResultIndex'] = [];
                $n1 = 0;
                foreach ($this->resultIndex as $item1) {
                    $res['ResultIndex'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['ResultIndex'])) {
                $model->resultIndex = [];
                $n1 = 0;
                foreach ($map['ResultIndex'] as $item1) {
                    $model->resultIndex[$n1] = $item1;
                    ++$n1;
                }
            }
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
