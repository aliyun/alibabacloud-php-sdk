<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageDetailList;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageDetailList\stageDetailDTO\taskList;
use AlibabaCloud\Tea\Model;

class stageDetailDTO extends Model
{
    /**
     * @description The ID of the stage.
     *
     * @example d7561440-10a6-452f-8a90-62f6e7ec****
     *
     * @var string
     */
    public $stageId;

    /**
     * @description The name of the stage.
     *
     * @example Process Start
     *
     * @var string
     */
    public $stageName;

    /**
     * @description The status of the stage. Valid values:
     *
     *   0: ready
     *   1: in progress
     *   2: successful
     *   3: failed
     *   6: terminated
     *   8: wait for manual confirmation to trigger the next batch during a manual phased release
     *   9: wait to trigger the next batch during an automatic phased release
     *   10: failed due to a system exception
     *
     * @example 2
     *
     * @var int
     */
    public $stageStatus;

    /**
     * @description The information about the task.
     *
     * @var taskList
     */
    public $taskList;
    protected $_name = [
        'stageId'     => 'StageId',
        'stageName'   => 'StageName',
        'stageStatus' => 'StageStatus',
        'taskList'    => 'TaskList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->stageStatus) {
            $res['StageStatus'] = $this->stageStatus;
        }
        if (null !== $this->taskList) {
            $res['TaskList'] = null !== $this->taskList ? $this->taskList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stageDetailDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['StageStatus'])) {
            $model->stageStatus = $map['StageStatus'];
        }
        if (isset($map['TaskList'])) {
            $model->taskList = taskList::fromMap($map['TaskList']);
        }

        return $model;
    }
}
