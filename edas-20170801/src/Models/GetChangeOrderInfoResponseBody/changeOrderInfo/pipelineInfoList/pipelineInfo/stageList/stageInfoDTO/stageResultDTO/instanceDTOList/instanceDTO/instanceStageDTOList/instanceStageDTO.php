<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO\instanceDTOList\instanceDTO\instanceStageDTOList;

use AlibabaCloud\Tea\Model;

class instanceStageDTO extends Model
{
    /**
     * @var string
     */
    public $stageId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $stageMessage;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $stageName;
    protected $_name = [
        'stageId'      => 'StageId',
        'status'       => 'Status',
        'startTime'    => 'StartTime',
        'stageMessage' => 'StageMessage',
        'finishTime'   => 'FinishTime',
        'stageName'    => 'StageName',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->stageMessage) {
            $res['StageMessage'] = $this->stageMessage;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
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
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StageMessage'])) {
            $model->stageMessage = $map['StageMessage'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
