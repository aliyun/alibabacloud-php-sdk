<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectJobSummaryResponseBody\jobSummary;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @var int
     */
    public $failCnt;

    /**
     * @var int
     */
    public $runningCnt;

    /**
     * @var int
     */
    public $successCnt;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'failCnt'    => 'failCnt',
        'runningCnt' => 'runningCnt',
        'successCnt' => 'successCnt',
        'taskId'     => 'taskId',
        'total'      => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failCnt) {
            $res['failCnt'] = $this->failCnt;
        }
        if (null !== $this->runningCnt) {
            $res['runningCnt'] = $this->runningCnt;
        }
        if (null !== $this->successCnt) {
            $res['successCnt'] = $this->successCnt;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['failCnt'])) {
            $model->failCnt = $map['failCnt'];
        }
        if (isset($map['runningCnt'])) {
            $model->runningCnt = $map['runningCnt'];
        }
        if (isset($map['successCnt'])) {
            $model->successCnt = $map['successCnt'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
