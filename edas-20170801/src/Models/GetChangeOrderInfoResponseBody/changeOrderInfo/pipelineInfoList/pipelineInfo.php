<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageDetailList;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList;
use AlibabaCloud\Tea\Model;

class pipelineInfo extends Model
{
    /**
     * @description The ID of each batch for the change during the phased release.
     *
     * @example 4c4ee320-5e47-4a48-****-************
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @description The name of the batch.
     *
     * @example Batch: 1
     *
     * @var string
     */
    public $pipelineName;

    /**
     * @description The state of the change task. Valid values:
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
    public $pipelineStatus;

    /**
     * @description The execution results in each stage.
     *
     * @var stageDetailList
     */
    public $stageDetailList;

    /**
     * @description The stages of the change process.
     *
     * @var stageList
     */
    public $stageList;

    /**
     * @description The time when the change task was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1583911702158
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The time when the change task was updated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1583911743633
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'pipelineId'      => 'PipelineId',
        'pipelineName'    => 'PipelineName',
        'pipelineStatus'  => 'PipelineStatus',
        'stageDetailList' => 'StageDetailList',
        'stageList'       => 'StageList',
        'startTime'       => 'StartTime',
        'updateTime'      => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['StageDetailList'] = null !== $this->stageDetailList ? $this->stageDetailList->toMap() : null;
        }
        if (null !== $this->stageList) {
            $res['StageList'] = null !== $this->stageList ? $this->stageList->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
