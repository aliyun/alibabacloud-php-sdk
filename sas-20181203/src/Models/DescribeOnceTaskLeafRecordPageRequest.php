<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeOnceTaskLeafRecordPageRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The end timestamp of the sub-task.
     *
     * @example 1668064495000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The number of entries to return on each page. Default value: 20
     *
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether extension information is associated.
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $relateInfo;

    /**
     * @description The source of the request.
     *
     * @example console_batch
     *
     * @var string
     */
    public $source;

    /**
     * @description The start timestamp of the sub-task.
     *
     * @example 1648438617000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status information.
     *
     * @var string[]
     */
    public $statusList;

    /**
     * @description The ID of the sub-task.
     *
     * @example 1471d8ebb96795b41ede090b9758****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The type of the sub-task. Valid values:
     *
     *   **IMAGE_SCAN**: image scan task
     *   **IMAGE_REGISTRY_PULL**: image asset synchronization task
     *
     * This parameter is required.
     * @example CLIENT_PROBLEM_CHECK
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'endTime'     => 'EndTime',
        'pageSize'    => 'PageSize',
        'relateInfo'  => 'RelateInfo',
        'source'      => 'Source',
        'startTime'   => 'StartTime',
        'statusList'  => 'StatusList',
        'taskId'      => 'TaskId',
        'taskType'    => 'TaskType',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->relateInfo) {
            $res['RelateInfo'] = $this->relateInfo;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
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
     * @return DescribeOnceTaskLeafRecordPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RelateInfo'])) {
            $model->relateInfo = $map['RelateInfo'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
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
