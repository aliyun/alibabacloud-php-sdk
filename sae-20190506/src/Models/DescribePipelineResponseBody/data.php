<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribePipelineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribePipelineResponseBody\data\stageList;

class data extends Model
{
    /**
     * @var string
     */
    public $coStatus;

    /**
     * @var string
     */
    public $currentStageId;

    /**
     * @var string
     */
    public $nextPipelineId;

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
     * @var bool
     */
    public $showBatch;

    /**
     * @var stageList[]
     */
    public $stageList;
    protected $_name = [
        'coStatus' => 'CoStatus',
        'currentStageId' => 'CurrentStageId',
        'nextPipelineId' => 'NextPipelineId',
        'pipelineId' => 'PipelineId',
        'pipelineName' => 'PipelineName',
        'pipelineStatus' => 'PipelineStatus',
        'showBatch' => 'ShowBatch',
        'stageList' => 'StageList',
    ];

    public function validate()
    {
        if (\is_array($this->stageList)) {
            Model::validateArray($this->stageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coStatus) {
            $res['CoStatus'] = $this->coStatus;
        }

        if (null !== $this->currentStageId) {
            $res['CurrentStageId'] = $this->currentStageId;
        }

        if (null !== $this->nextPipelineId) {
            $res['NextPipelineId'] = $this->nextPipelineId;
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        if (null !== $this->pipelineName) {
            $res['PipelineName'] = $this->pipelineName;
        }

        if (null !== $this->pipelineStatus) {
            $res['PipelineStatus'] = $this->pipelineStatus;
        }

        if (null !== $this->showBatch) {
            $res['ShowBatch'] = $this->showBatch;
        }

        if (null !== $this->stageList) {
            if (\is_array($this->stageList)) {
                $res['StageList'] = [];
                $n1 = 0;
                foreach ($this->stageList as $item1) {
                    $res['StageList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['CoStatus'])) {
            $model->coStatus = $map['CoStatus'];
        }

        if (isset($map['CurrentStageId'])) {
            $model->currentStageId = $map['CurrentStageId'];
        }

        if (isset($map['NextPipelineId'])) {
            $model->nextPipelineId = $map['NextPipelineId'];
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        if (isset($map['PipelineName'])) {
            $model->pipelineName = $map['PipelineName'];
        }

        if (isset($map['PipelineStatus'])) {
            $model->pipelineStatus = $map['PipelineStatus'];
        }

        if (isset($map['ShowBatch'])) {
            $model->showBatch = $map['ShowBatch'];
        }

        if (isset($map['StageList'])) {
            if (!empty($map['StageList'])) {
                $model->stageList = [];
                $n1 = 0;
                foreach ($map['StageList'] as $item1) {
                    $model->stageList[$n1++] = stageList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
