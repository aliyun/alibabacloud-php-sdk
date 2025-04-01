<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribePipelineResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribePipelineResponseBody\data\stageList\taskList;

class stageList extends Model
{
    /**
     * @var int
     */
    public $executorType;

    /**
     * @var string
     */
    public $stageId;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var taskList[]
     */
    public $taskList;
    protected $_name = [
        'executorType' => 'ExecutorType',
        'stageId' => 'StageId',
        'stageName' => 'StageName',
        'status' => 'Status',
        'taskList' => 'TaskList',
    ];

    public function validate()
    {
        if (\is_array($this->taskList)) {
            Model::validateArray($this->taskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executorType) {
            $res['ExecutorType'] = $this->executorType;
        }

        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }

        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskList) {
            if (\is_array($this->taskList)) {
                $res['TaskList'] = [];
                $n1 = 0;
                foreach ($this->taskList as $item1) {
                    $res['TaskList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ExecutorType'])) {
            $model->executorType = $map['ExecutorType'];
        }

        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }

        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskList'])) {
            if (!empty($map['TaskList'])) {
                $model->taskList = [];
                $n1 = 0;
                foreach ($map['TaskList'] as $item1) {
                    $model->taskList[$n1++] = taskList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
