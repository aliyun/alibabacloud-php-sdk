<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageDetailList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageDetailList\stageDetailDTO\taskList;

class stageDetailDTO extends Model
{
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
    public $stageStatus;

    /**
     * @var taskList
     */
    public $taskList;
    protected $_name = [
        'stageId' => 'StageId',
        'stageName' => 'StageName',
        'stageStatus' => 'StageStatus',
        'taskList' => 'TaskList',
    ];

    public function validate()
    {
        if (null !== $this->taskList) {
            $this->taskList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['TaskList'] = null !== $this->taskList ? $this->taskList->toArray($noStream) : $this->taskList;
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
