<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageDetailList;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageDetailList\stageDetailDTO\taskList;
use AlibabaCloud\Tea\Model;

class stageDetailDTO extends Model
{
    /**
     * @var string
     */
    public $stageId;

    /**
     * @var int
     */
    public $stageStatus;

    /**
     * @var taskList
     */
    public $taskList;

    /**
     * @var string
     */
    public $stageName;
    protected $_name = [
        'stageId'     => 'StageId',
        'stageStatus' => 'StageStatus',
        'taskList'    => 'TaskList',
        'stageName'   => 'StageName',
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
        if (null !== $this->stageStatus) {
            $res['StageStatus'] = $this->stageStatus;
        }
        if (null !== $this->taskList) {
            $res['TaskList'] = null !== $this->taskList ? $this->taskList->toMap() : null;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
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
        if (isset($map['StageStatus'])) {
            $model->stageStatus = $map['StageStatus'];
        }
        if (isset($map['TaskList'])) {
            $model->taskList = taskList::fromMap($map['TaskList']);
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
