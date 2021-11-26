<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribePipelineResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribePipelineResponseBody\data\stageList;
use AlibabaCloud\Tea\Model;

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
        'coStatus'       => 'CoStatus',
        'currentStageId' => 'CurrentStageId',
        'nextPipelineId' => 'NextPipelineId',
        'pipelineId'     => 'PipelineId',
        'pipelineName'   => 'PipelineName',
        'pipelineStatus' => 'PipelineStatus',
        'showBatch'      => 'ShowBatch',
        'stageList'      => 'StageList',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['StageList'] = [];
            if (null !== $this->stageList && \is_array($this->stageList)) {
                $n = 0;
                foreach ($this->stageList as $item) {
                    $res['StageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n                = 0;
                foreach ($map['StageList'] as $item) {
                    $model->stageList[$n++] = null !== $item ? stageList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
