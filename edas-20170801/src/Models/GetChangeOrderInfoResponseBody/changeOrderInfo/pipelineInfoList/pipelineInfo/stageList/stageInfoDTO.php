<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO;
use AlibabaCloud\Tea\Model;

class stageInfoDTO extends Model
{
    /**
     * @description The ID of the stage.
     *
     * @example 358a143f-09a0-45e0-****-************@**_*******_*****
     *
     * @var string
     */
    public $stageId;

    /**
     * @description The name of the stage.
     *
     * @example Scale Out
     *
     * @var string
     */
    public $stageName;

    /**
     * @description The results of the task executed in the stage.
     *
     * @var stageResultDTO
     */
    public $stageResultDTO;

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
        'stageId'        => 'StageId',
        'stageName'      => 'StageName',
        'stageResultDTO' => 'StageResultDTO',
        'status'         => 'Status',
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
        if (null !== $this->stageResultDTO) {
            $res['StageResultDTO'] = null !== $this->stageResultDTO ? $this->stageResultDTO->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stageInfoDTO
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
        if (isset($map['StageResultDTO'])) {
            $model->stageResultDTO = stageResultDTO::fromMap($map['StageResultDTO']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
