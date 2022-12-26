<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeOnceTaskLeafRecordPageRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 1668064495000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example true
     *
     * @var bool
     */
    public $relateInfo;

    /**
     * @example console_batch
     *
     * @var string
     */
    public $source;

    /**
     * @example 1648438617000
     *
     * @var int
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $statusList;

    /**
     * @example 1471d8ebb96795b41ede090b9758****
     *
     * @var string
     */
    public $taskId;

    /**
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
