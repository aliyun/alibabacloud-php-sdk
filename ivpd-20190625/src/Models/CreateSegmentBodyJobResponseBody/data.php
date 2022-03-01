<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models\CreateSegmentBodyJobResponseBody;

use AlibabaCloud\SDK\Ivpd\V20190625\Models\CreateSegmentBodyJobResponseBody\data\resultList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $batchSize;

    /**
     * @var bool
     */
    public $completed;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var resultList[]
     */
    public $resultList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalUsedTime;
    protected $_name = [
        'batchSize'     => 'BatchSize',
        'completed'     => 'Completed',
        'jobId'         => 'JobId',
        'progress'      => 'Progress',
        'resultList'    => 'ResultList',
        'status'        => 'Status',
        'totalUsedTime' => 'TotalUsedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchSize) {
            $res['BatchSize'] = $this->batchSize;
        }
        if (null !== $this->completed) {
            $res['Completed'] = $this->completed;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->resultList) {
            $res['ResultList'] = [];
            if (null !== $this->resultList && \is_array($this->resultList)) {
                $n = 0;
                foreach ($this->resultList as $item) {
                    $res['ResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalUsedTime) {
            $res['TotalUsedTime'] = $this->totalUsedTime;
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
        if (isset($map['BatchSize'])) {
            $model->batchSize = $map['BatchSize'];
        }
        if (isset($map['Completed'])) {
            $model->completed = $map['Completed'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = [];
                $n                 = 0;
                foreach ($map['ResultList'] as $item) {
                    $model->resultList[$n++] = null !== $item ? resultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalUsedTime'])) {
            $model->totalUsedTime = $map['TotalUsedTime'];
        }

        return $model;
    }
}
