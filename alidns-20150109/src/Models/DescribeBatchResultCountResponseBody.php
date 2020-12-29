<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeBatchResultCountResponseBody extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var string
     */
    public $batchType;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'status'       => 'Status',
        'totalCount'   => 'TotalCount',
        'taskId'       => 'TaskId',
        'requestId'    => 'RequestId',
        'failedCount'  => 'FailedCount',
        'successCount' => 'SuccessCount',
        'batchType'    => 'BatchType',
        'reason'       => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->batchType) {
            $res['BatchType'] = $this->batchType;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['BatchType'])) {
            $model->batchType = $map['BatchType'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
