<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models;

use AlibabaCloud\SDK\EHPC\V20230701\Models\ListJobExecutorsResponseBody\executors;
use AlibabaCloud\SDK\EHPC\V20230701\Models\ListJobExecutorsResponseBody\executorStatus;
use AlibabaCloud\Tea\Model;

class ListJobExecutorsResponseBody extends Model
{
    /**
     * @var executorStatus
     */
    public $executorStatus;

    /**
     * @var executors[]
     */
    public $executors;

    /**
     * @example job-xxxxx
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description Id of the request
     *
     * @example xxxx-xxxx-xxx-xxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @example task0
     *
     * @var string
     */
    public $taskName;

    /**
     * @example 50
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'executorStatus' => 'ExecutorStatus',
        'executors'      => 'Executors',
        'jobId'          => 'JobId',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'taskName'       => 'TaskName',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executorStatus) {
            $res['ExecutorStatus'] = null !== $this->executorStatus ? $this->executorStatus->toMap() : null;
        }
        if (null !== $this->executors) {
            $res['Executors'] = [];
            if (null !== $this->executors && \is_array($this->executors)) {
                $n = 0;
                foreach ($this->executors as $item) {
                    $res['Executors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobExecutorsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutorStatus'])) {
            $model->executorStatus = executorStatus::fromMap($map['ExecutorStatus']);
        }
        if (isset($map['Executors'])) {
            if (!empty($map['Executors'])) {
                $model->executors = [];
                $n                = 0;
                foreach ($map['Executors'] as $item) {
                    $model->executors[$n++] = null !== $item ? executors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
