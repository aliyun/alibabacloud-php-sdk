<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class ListTicketsRequest extends Model
{
    /**
     * @var string
     */
    public $assignee;
    /**
     * @var string
     */
    public $assigneeType;
    /**
     * @var string
     */
    public $categoryId;
    /**
     * @var string
     */
    public $creator;
    /**
     * @var string
     */
    public $customerId;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $jobIdList;
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
    public $participant;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var string
     */
    public $state;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
