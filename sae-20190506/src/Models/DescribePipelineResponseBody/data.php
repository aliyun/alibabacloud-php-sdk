<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribePipelineResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribePipelineResponseBody\data\stageList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The status of the change order for the batch.
     *
     * @example Successful
     *
     * @var string
     */
    public $coStatus;

    /**
     * @description The ID of the batch processing stage.
     *
     * @example c3a55592-4c30-4d84-ac2d-e98c18ec****
     *
     * @var string
     */
    public $currentStageId;

    /**
     * @description The ID of the next batch.
     *
     * @example b77b1c98-5772-4f05-95fc-c7bee5fa****
     *
     * @var string
     */
    public $nextPipelineId;

    /**
     * @description The ID of the batch.
     *
     * @example 917660ba-5092-44ca-b8e0-80012c96****
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @description The name of the batch.
     *
     * @example First batch
     *
     * @var string
     */
    public $pipelineName;

    /**
     * @description The batch status. Valid values:
     *
     *   **0**: The batch is prepared for processing.
     *   **1**: The task is being executed.
     *   **2**: successful
     *   **3**: The processing failed in this stage.
     *   **6**: The batch processing was terminated.
     *   **10**: The batch could not be processed due to a system exception.
     *
     * @example 2
     *
     * @var int
     */
    public $pipelineStatus;

    /**
     * @description Indicates whether to start processing the next batch. Valid values:
     *
     *   **false**: indicates that the next batch cannot be processed yet.
     *   **true**: indicates that the next batch can be processed now.
     *
     * @example false
     *
     * @var bool
     */
    public $showBatch;

    /**
     * @description The list of batch processing stages.
     *
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
