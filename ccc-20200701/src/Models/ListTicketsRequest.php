<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListTicketsRequest extends Model
{
    /**
     * @example assignee@cccV2-kmz
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
     * @example 43c2671b-****-4223-86d0-6bd187905cc8
     *
     * @var string
     */
    public $categoryId;

    /**
     * @example creator@cccV2-kmz
     *
     * @var string
     */
    public $creator;

    /**
     * @example 51e155ce-3747-*****-b402-13c69597b920
     *
     * @var string
     */
    public $customerId;

    /**
     * @example 1646928000000
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
     * @example ["job-12******","job-23****"]
     *
     * @var string
     */
    public $jobIdList;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example participant@cccV2-kmz
     *
     * @var string
     */
    public $participant;

    /**
     * @example 1646841600000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example Processing
     *
     * @var string
     */
    public $state;

    /**
     * @example 5491d3b4-14ee-4341-b5f1-db2c78beddeb
     *
     * @var string
     */
    public $ticketId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'assignee'     => 'Assignee',
        'assigneeType' => 'AssigneeType',
        'categoryId'   => 'CategoryId',
        'creator'      => 'Creator',
        'customerId'   => 'CustomerId',
        'endTime'      => 'EndTime',
        'instanceId'   => 'InstanceId',
        'jobIdList'    => 'JobIdList',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'participant'  => 'Participant',
        'startTime'    => 'StartTime',
        'state'        => 'State',
        'ticketId'     => 'TicketId',
        'title'        => 'Title',
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
        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobIdList) {
            $res['JobIdList'] = $this->jobIdList;
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
        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTicketsRequest
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
        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobIdList'])) {
            $model->jobIdList = $map['JobIdList'];
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
        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
