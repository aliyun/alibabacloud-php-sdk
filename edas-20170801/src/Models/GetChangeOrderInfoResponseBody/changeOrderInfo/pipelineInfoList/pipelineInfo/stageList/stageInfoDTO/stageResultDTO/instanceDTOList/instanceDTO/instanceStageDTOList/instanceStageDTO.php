<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO\instanceDTOList\instanceDTO\instanceStageDTOList;

use AlibabaCloud\Tea\Model;

class instanceStageDTO extends Model
{
    /**
     * @description The time when the execution stopped.
     *
     * @example 2020-03-11T07:28:52Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The ID of the stage.
     *
     * @example 5dd4c0f2-d81a-406f-****-************
     *
     * @var string
     */
    public $stageId;

    /**
     * @description The information about the stage.
     *
     * @example Pulling image \"registry-vpc.cn-hangzhou.aliyuncs.com****-user/1172745****_shared_repo:428084d6-265f-****-911a-7eb0d2c3****_15839117****\
     *
     * @var string
     */
    public $stageMessage;

    /**
     * @description The name of the stage.
     *
     * @example scale out
     *
     * @var string
     */
    public $stageName;

    /**
     * @description The time when the execution was started.
     *
     * @example 2020-03-11T07:28:49Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The state of the stage. Valid values:
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
    public $status;
    protected $_name = [
        'finishTime'   => 'FinishTime',
        'stageId'      => 'StageId',
        'stageMessage' => 'StageMessage',
        'stageName'    => 'StageName',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->stageMessage) {
            $res['StageMessage'] = $this->stageMessage;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceStageDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['StageMessage'])) {
            $model->stageMessage = $map['StageMessage'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
