<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobExecutorsResponseBody\executors;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobExecutorsResponseBody\executorStatus;

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
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'executorStatus' => 'ExecutorStatus',
        'executors' => 'Executors',
        'jobId' => 'JobId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'taskName' => 'TaskName',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->executorStatus) {
            $this->executorStatus->validate();
        }
        if (\is_array($this->executors)) {
            Model::validateArray($this->executors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executorStatus) {
            $res['ExecutorStatus'] = null !== $this->executorStatus ? $this->executorStatus->toArray($noStream) : $this->executorStatus;
        }

        if (null !== $this->executors) {
            if (\is_array($this->executors)) {
                $res['Executors'] = [];
                $n1 = 0;
                foreach ($this->executors as $item1) {
                    $res['Executors'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutorStatus'])) {
            $model->executorStatus = executorStatus::fromMap($map['ExecutorStatus']);
        }

        if (isset($map['Executors'])) {
            if (!empty($map['Executors'])) {
                $model->executors = [];
                $n1 = 0;
                foreach ($map['Executors'] as $item1) {
                    $model->executors[$n1++] = executors::fromMap($item1);
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
