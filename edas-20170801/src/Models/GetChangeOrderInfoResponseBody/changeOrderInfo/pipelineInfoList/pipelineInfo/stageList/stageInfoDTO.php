<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo\pipelineInfoList\pipelineInfo\stageList\stageInfoDTO\stageResultDTO;

class stageInfoDTO extends Model
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
     * @var stageResultDTO
     */
    public $stageResultDTO;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'stageId' => 'StageId',
        'stageName' => 'StageName',
        'stageResultDTO' => 'StageResultDTO',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->stageResultDTO) {
            $this->stageResultDTO->validate();
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

        if (null !== $this->stageResultDTO) {
            $res['StageResultDTO'] = null !== $this->stageResultDTO ? $this->stageResultDTO->toArray($noStream) : $this->stageResultDTO;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['StageResultDTO'])) {
            $model->stageResultDTO = stageResultDTO::fromMap($map['StageResultDTO']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
