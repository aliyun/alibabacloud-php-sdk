<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class GetTicketSummaryReportRequest extends Model
{
    /**
     * @example assignee@ccc-test
     *
     * @var string
     */
    public $assignee;

    /**
     * @example Agent
     *
     * @var string
     */
    public $assigneeType;

    /**
     * @example 43c2671b-***-***-86d0-6bd187905cc8
     *
     * @var string
     */
    public $categoryId;

    /**
     * @example creator@ccc-test
     *
     * @var string
     */
    public $creator;

    /**
     * @example 1719590399999
     *
     * @var int
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example participant@ccc-test
     *
     * @var string
     */
    public $participant;

    /**
     * @example 1716998400000
     *
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'assignee'     => 'Assignee',
        'assigneeType' => 'AssigneeType',
        'categoryId'   => 'CategoryId',
        'creator'      => 'Creator',
        'endTime'      => 'EndTime',
        'instanceId'   => 'InstanceId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'participant'  => 'Participant',
        'startTime'    => 'StartTime',
        'state'        => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignee) {
            $res['Assignee'] = $this->assignee;
        }
        if (null !== $this->assigneeType) {
            $res['AssigneeType'] = $this->assigneeType;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->participant) {
            $res['Participant'] = $this->participant;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTicketSummaryReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Assignee'])) {
            $model->assignee = $map['Assignee'];
        }
        if (isset($map['AssigneeType'])) {
            $model->assigneeType = $map['AssigneeType'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Participant'])) {
            $model->participant = $map['Participant'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
