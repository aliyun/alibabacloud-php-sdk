<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListTicketsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example assignee@ccc-test
     *
     * @var string
     */
    public $assignee;

    /**
     * @example Assignee
     *
     * @var string
     */
    public $assigneeName;

    /**
     * @example 43c2671b-*****-4223-86d0-6bd187905cc8
     *
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @example Completed
     *
     * @var string
     */
    public $closeCode;

    /**
     * @var string
     */
    public $comment;

    /**
     * @example {"productName":"alynx"}
     *
     * @var string
     */
    public $context;

    /**
     * @example 1631440860000
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example creator@ccc-test
     *
     * @var string
     */
    public $creator;

    /**
     * @example Creator
     *
     * @var string
     */
    public $creatorName;

    /**
     * @example 0707dab6-34a8-11ef-9823-161e3802b2d4
     *
     * @var string
     */
    public $currentTaskId;

    /**
     * @var string
     */
    public $currentTaskName;

    /**
     * @example 1631440860000
     *
     * @var int
     */
    public $currentTaskStartTime;

    /**
     * @example 51e155ce-*****1-b402-13c69597b920
     *
     * @var string
     */
    public $customerId;

    /**
     * @example 1631440860000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example job-47150***150396416
     *
     * @var string
     */
    public $jobId;

    /**
     * @example CHAT
     *
     * @var string
     */
    public $source;

    /**
     * @example 1631440860000
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
     * @example c844a5f0-496c-4c5b-8a0c-dd27686e8ff6
     *
     * @var string
     */
    public $templateId;

    /**
     * @example 0
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @example feb83abd-9f08-49d2-9b56-41d1b66ca0ac
     *
     * @var string
     */
    public $ticketId;

    /**
     * @var string
     */
    public $title;

    /**
     * @example 1631440860000
     *
     * @var string
     */
    public $updatedTime;
    protected $_name = [
        'assignee'             => 'Assignee',
        'assigneeName'         => 'AssigneeName',
        'categoryId'           => 'CategoryId',
        'categoryName'         => 'CategoryName',
        'closeCode'            => 'CloseCode',
        'comment'              => 'Comment',
        'context'              => 'Context',
        'createdTime'          => 'CreatedTime',
        'creator'              => 'Creator',
        'creatorName'          => 'CreatorName',
        'currentTaskId'        => 'CurrentTaskId',
        'currentTaskName'      => 'CurrentTaskName',
        'currentTaskStartTime' => 'CurrentTaskStartTime',
        'customerId'           => 'CustomerId',
        'endTime'              => 'EndTime',
        'instanceId'           => 'InstanceId',
        'jobId'                => 'JobId',
        'source'               => 'Source',
        'startTime'            => 'StartTime',
        'state'                => 'State',
        'templateId'           => 'TemplateId',
        'templateVersion'      => 'TemplateVersion',
        'ticketId'             => 'TicketId',
        'title'                => 'Title',
        'updatedTime'          => 'UpdatedTime',
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
        if (null !== $this->assigneeName) {
            $res['AssigneeName'] = $this->assigneeName;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->closeCode) {
            $res['CloseCode'] = $this->closeCode;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->currentTaskId) {
            $res['CurrentTaskId'] = $this->currentTaskId;
        }
        if (null !== $this->currentTaskName) {
            $res['CurrentTaskName'] = $this->currentTaskName;
        }
        if (null !== $this->currentTaskStartTime) {
            $res['CurrentTaskStartTime'] = $this->currentTaskStartTime;
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Assignee'])) {
            $model->assignee = $map['Assignee'];
        }
        if (isset($map['AssigneeName'])) {
            $model->assigneeName = $map['AssigneeName'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['CloseCode'])) {
            $model->closeCode = $map['CloseCode'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['CurrentTaskId'])) {
            $model->currentTaskId = $map['CurrentTaskId'];
        }
        if (isset($map['CurrentTaskName'])) {
            $model->currentTaskName = $map['CurrentTaskName'];
        }
        if (isset($map['CurrentTaskStartTime'])) {
            $model->currentTaskStartTime = $map['CurrentTaskStartTime'];
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
