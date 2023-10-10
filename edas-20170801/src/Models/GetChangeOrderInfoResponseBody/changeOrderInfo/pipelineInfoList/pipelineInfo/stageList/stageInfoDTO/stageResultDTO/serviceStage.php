<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO;

use AlibabaCloud\Tea\Model;

class serviceStage extends Model
{
    /**
     * @description The execution result in the stage.
     *
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the stage.
     *
     * @example 358a143f-09a0-45e0-****-************
     *
     * @var string
     */
    public $stageId;

    /**
     * @description Phase Name
     *
     * @example Enable Tengine
     *
     * @var string
     */
    public $stageName;

    /**
     * @description The running state. Valid values:
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
        'message'   => 'Message',
        'stageId'   => 'StageId',
        'stageName' => 'StageName',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceStage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
