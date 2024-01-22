<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribePipelineResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribePipelineResponseBody\data\stageList\taskList;
use AlibabaCloud\Tea\Model;

class stageList extends Model
{
    /**
     * @description The execution type of the stage. Valid values:
     *
     *   **0**: in sequence.
     *   **1**: in parallel.
     *
     * @example 0
     *
     * @var int
     */
    public $executorType;

    /**
     * @description The ID of the stage.
     *
     * @example c3a55592-4c30-4d84-ac2d-e98c18ec****
     *
     * @var string
     */
    public $stageId;

    /**
     * @description The name of the stage.
     *
     * @example Deploy an application
     *
     * @var string
     */
    public $stageName;

    /**
     * @description The status of the batch processing stage. Valid values:
     *
     *   **0**: The batch is prepared for this processing stage.
     *   **1**: The task is being executed.
     *   **2**: successful
     *   **3**: The processing failed in this stage.
     *   **6**: The processing stage was terminated.
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The list of task statuses.
     *
     * @var taskList[]
     */
    public $taskList;
    protected $_name = [
        'executorType' => 'ExecutorType',
        'stageId'      => 'StageId',
        'stageName'    => 'StageName',
        'status'       => 'Status',
        'taskList'     => 'TaskList',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['TaskList'] = [];
            if (null !== $this->taskList && \is_array($this->taskList)) {
                $n = 0;
                foreach ($this->taskList as $item) {
                    $res['TaskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stageList
     */
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
                $n               = 0;
                foreach ($map['TaskList'] as $item) {
                    $model->taskList[$n++] = null !== $item ? taskList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
