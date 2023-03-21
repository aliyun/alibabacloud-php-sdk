<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeOnceTaskRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $endTimeQuery;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $rootTaskId;

    /**
     * @var int
     */
    public $startTimeQuery;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'currentPage'    => 'CurrentPage',
        'endTimeQuery'   => 'EndTimeQuery',
        'pageSize'       => 'PageSize',
        'rootTaskId'     => 'RootTaskId',
        'startTimeQuery' => 'StartTimeQuery',
        'taskId'         => 'TaskId',
        'taskType'       => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTimeQuery) {
            $res['EndTimeQuery'] = $this->endTimeQuery;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->rootTaskId) {
            $res['RootTaskId'] = $this->rootTaskId;
        }
        if (null !== $this->startTimeQuery) {
            $res['StartTimeQuery'] = $this->startTimeQuery;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOnceTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTimeQuery'])) {
            $model->endTimeQuery = $map['EndTimeQuery'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RootTaskId'])) {
            $model->rootTaskId = $map['RootTaskId'];
        }
        if (isset($map['StartTimeQuery'])) {
            $model->startTimeQuery = $map['StartTimeQuery'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
