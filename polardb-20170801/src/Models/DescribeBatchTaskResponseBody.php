<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBatchTaskResponseBody\subTasks;

class DescribeBatchTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $batchId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var subTasks[]
     */
    public $subTasks;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var string
     */
    public $taskBegin;

    /**
     * @var string
     */
    public $taskEnd;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'batchId' => 'BatchId',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'subTasks' => 'SubTasks',
        'successCount' => 'SuccessCount',
        'taskBegin' => 'TaskBegin',
        'taskEnd' => 'TaskEnd',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->subTasks)) {
            Model::validateArray($this->subTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subTasks) {
            if (\is_array($this->subTasks)) {
                $res['SubTasks'] = [];
                $n1 = 0;
                foreach ($this->subTasks as $item1) {
                    $res['SubTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        if (null !== $this->taskBegin) {
            $res['TaskBegin'] = $this->taskBegin;
        }

        if (null !== $this->taskEnd) {
            $res['TaskEnd'] = $this->taskEnd;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubTasks'])) {
            if (!empty($map['SubTasks'])) {
                $model->subTasks = [];
                $n1 = 0;
                foreach ($map['SubTasks'] as $item1) {
                    $model->subTasks[$n1] = subTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        if (isset($map['TaskBegin'])) {
            $model->taskBegin = $map['TaskBegin'];
        }

        if (isset($map['TaskEnd'])) {
            $model->taskEnd = $map['TaskEnd'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
