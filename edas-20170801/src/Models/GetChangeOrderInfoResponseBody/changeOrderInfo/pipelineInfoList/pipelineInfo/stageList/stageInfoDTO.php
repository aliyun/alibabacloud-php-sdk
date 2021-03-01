<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO;
use AlibabaCloud\Tea\Model;

class stageInfoDTO extends Model
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
     * @var stageResultDTO
     */
    public $stageResultDTO;

    /**
     * @var string
     */
    public $stageName;
    protected $_name = [
        'stageId'        => 'StageId',
        'status'         => 'Status',
        'stageResultDTO' => 'StageResultDTO',
        'stageName'      => 'StageName',
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
        if (null !== $this->stageResultDTO) {
            $res['StageResultDTO'] = null !== $this->stageResultDTO ? $this->stageResultDTO->toMap() : null;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StageResultDTO'])) {
            $model->stageResultDTO = stageResultDTO::fromMap($map['StageResultDTO']);
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
