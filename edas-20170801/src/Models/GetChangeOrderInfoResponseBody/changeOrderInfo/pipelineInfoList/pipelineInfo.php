<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageDetailList;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList;
use AlibabaCloud\Tea\Model;

class pipelineInfo extends Model
{
    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $pipelineStatus;

    /**
     * @var stageDetailList
     */
    public $stageDetailList;

    /**
     * @var string
     */
    public $pipelineName;

    /**
     * @var stageList
     */
    public $stageList;

    /**
     * @var string
     */
    public $pipelineId;
    protected $_name = [
        'startTime'       => 'StartTime',
        'updateTime'      => 'UpdateTime',
        'pipelineStatus'  => 'PipelineStatus',
        'stageDetailList' => 'StageDetailList',
        'pipelineName'    => 'PipelineName',
        'stageList'       => 'StageList',
        'pipelineId'      => 'PipelineId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->pipelineStatus) {
            $res['PipelineStatus'] = $this->pipelineStatus;
        }
        if (null !== $this->stageDetailList) {
            $res['StageDetailList'] = null !== $this->stageDetailList ? $this->stageDetailList->toMap() : null;
        }
        if (null !== $this->pipelineName) {
            $res['PipelineName'] = $this->pipelineName;
        }
        if (null !== $this->stageList) {
            $res['StageList'] = null !== $this->stageList ? $this->stageList->toMap() : null;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pipelineInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['PipelineStatus'])) {
            $model->pipelineStatus = $map['PipelineStatus'];
        }
        if (isset($map['StageDetailList'])) {
            $model->stageDetailList = stageDetailList::fromMap($map['StageDetailList']);
        }
        if (isset($map['PipelineName'])) {
            $model->pipelineName = $map['PipelineName'];
        }
        if (isset($map['StageList'])) {
            $model->stageList = stageList::fromMap($map['StageList']);
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        return $model;
    }
}
