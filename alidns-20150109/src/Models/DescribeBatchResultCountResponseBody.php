<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeBatchResultCountResponseBody extends Model
{
    /**
     * @description The type of the batch operation.
     *
     * @example DOMAIN_ADD
     *
     * @var string
     */
    public $batchType;

    /**
     * @description The total number of domain names or DNS records that failed to be processed.
     *
     * @example 2
     *
     * @var int
     */
    public $failedCount;

    /**
     * @description The cause of the execution failure.
     *
     * @example failed_reason
     *
     * @var string
     */
    public $reason;

    /**
     * @description The ID of the request.
     *
     * @example 75446CC1-FC9A-4595-8D96-089D73D7A63D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the task. Valid values:
     *
     *   **-1**: No task for importing domain names or DNS records is submitted.
     *   **0**: The task is being processed.
     *   **1**: The task is completed.
     *   **2**: The task failed.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The total number of successfully processed domain names or DNS records.
     *
     * @example 2
     *
     * @var int
     */
    public $successCount;

    /**
     * @description The ID of the last task.
     *
     * @example 123456
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The total number of DNS records that were processed in batches.
     *
     * @example 4
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'batchType'    => 'BatchType',
        'failedCount'  => 'FailedCount',
        'reason'       => 'Reason',
        'requestId'    => 'RequestId',
        'status'       => 'Status',
        'successCount' => 'SuccessCount',
        'taskId'       => 'TaskId',
        'totalCount'   => 'TotalCount',
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
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBatchResultCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchType'])) {
            $model->batchType = $map['BatchType'];
        }
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
