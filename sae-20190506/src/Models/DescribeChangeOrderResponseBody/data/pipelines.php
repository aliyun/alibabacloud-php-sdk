<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeChangeOrderResponseBody\data;

use AlibabaCloud\Tea\Model;

class pipelines extends Model
{
    /**
     * @description The batch type.
     *
     * @example 0
     *
     * @var int
     */
    public $batchType;

    /**
     * @description The number of parallel tasks in a batch.
     *
     * @example 0
     *
     * @var int
     */
    public $parallelCount;

    /**
     * @description The ID of the batch.
     *
     * @example 0e4acf82-c9b1-4c1e-ac28-55776338****
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @description The name of the batch.
     *
     * @example Batch 1 Change
     *
     * @var string
     */
    public $pipelineName;

    /**
     * @description The time when the batch processing starts.
     *
     * @example 1562831689704
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the batch. Valid values:
     *
     *   **0**: The batch is being prepared.
     *   **1**: The batch is being processed.
     *   **2**: The batch was processed.
     *   **3**: The batch could not be processed.
     *   **6**: The batch processing was terminated.
     *   **8**: The execution process is pending. You must manually determine the release batch.
     *   **9**: The execution process is pending. SAE will automatically determine the release batch.
     *   **10**: The batch could not be processed due to a system exception.
     *   **11**: The change order is pending approval.
     *   **12**: The change order is approved and is pending execution.
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The time when the batch information is last modified.
     *
     * @example 1562847178007
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'batchType'     => 'BatchType',
        'parallelCount' => 'ParallelCount',
        'pipelineId'    => 'PipelineId',
        'pipelineName'  => 'PipelineName',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
        'updateTime'    => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchType) {
            $res['BatchType'] = $this->batchType;
        }
        if (null !== $this->parallelCount) {
            $res['ParallelCount'] = $this->parallelCount;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->pipelineName) {
            $res['PipelineName'] = $this->pipelineName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pipelines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchType'])) {
            $model->batchType = $map['BatchType'];
        }
        if (isset($map['ParallelCount'])) {
            $model->parallelCount = $map['ParallelCount'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['PipelineName'])) {
            $model->pipelineName = $map['PipelineName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
