<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO\instanceDTOList\instanceDTO\instanceStageDTOList;

use AlibabaCloud\Tea\Model;

class instanceStageDTO extends Model
{
    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $stageId;

    /**
     * @var string
     */
    public $stageMessage;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var string
     */
    public $startTime;

    /**
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
