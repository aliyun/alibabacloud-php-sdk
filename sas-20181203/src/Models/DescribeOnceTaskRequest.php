<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeOnceTaskRequest extends Model
{
    /**
     * @description The pagination information.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 1651766520000
     *
     * @var int
     */
    public $endTimeQuery;

    /**
     * @description The page number of the returned page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the task.
     *
     * @example bb5d657479bba5e1d308b6c9e85c9174
     *
     * @var string
     */
    public $rootTaskId;

    /**
     * @description The data returned.
     *
     * @example 1651737301000
     *
     * @var int
     */
    public $startTimeQuery;

    /**
     * @description The number of entries returned per page. Default value: **20**.
     *
     * @example d7b2acf8d362742123e4a84e1bf8****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * @example CLIENT_PROBLEM_CHECK
     *
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
