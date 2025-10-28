<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageDetailList;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList;

class pipelineInfo extends Model
{
    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $pipelineName;

    /**
     * @var int
     */
    public $pipelineStatus;

    /**
     * @var stageDetailList
     */
    public $stageDetailList;

    /**
     * @var stageList
     */
    public $stageList;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'pipelineId' => 'PipelineId',
        'pipelineName' => 'PipelineName',
        'pipelineStatus' => 'PipelineStatus',
        'stageDetailList' => 'StageDetailList',
        'stageList' => 'StageList',
        'startTime' => 'StartTime',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->stageDetailList) {
            $this->stageDetailList->validate();
        }
        if (null !== $this->stageList) {
            $this->stageList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        if (null !== $this->pipelineName) {
            $res['PipelineName'] = $this->pipelineName;
        }

        if (null !== $this->pipelineStatus) {
            $res['PipelineStatus'] = $this->pipelineStatus;
        }

        if (null !== $this->stageDetailList) {
            $res['StageDetailList'] = null !== $this->stageDetailList ? $this->stageDetailList->toArray($noStream) : $this->stageDetailList;
        }

        if (null !== $this->stageList) {
            $res['StageList'] = null !== $this->stageList ? $this->stageList->toArray($noStream) : $this->stageList;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        if (isset($map['PipelineName'])) {
            $model->pipelineName = $map['PipelineName'];
        }

        if (isset($map['PipelineStatus'])) {
            $model->pipelineStatus = $map['PipelineStatus'];
        }

        if (isset($map['StageDetailList'])) {
            $model->stageDetailList = stageDetailList::fromMap($map['StageDetailList']);
        }

        if (isset($map['StageList'])) {
            $model->stageList = stageList::fromMap($map['StageList']);
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
