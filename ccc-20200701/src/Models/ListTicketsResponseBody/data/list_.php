<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListTicketsResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $assignee;
    /**
     * @var string
     */
    public $assigneeName;
    /**
     * @var string
     */
    public $categoryId;
    /**
     * @var string
     */
    public $categoryName;
    /**
     * @var string
     */
    public $closeCode;
    /**
     * @var string
     */
    public $comment;
    /**
     * @var string
     */
    public $context;
    /**
     * @var string
     */
    public $createdTime;
    /**
     * @var string
     */
    public $creator;
    /**
     * @var string
     */
    public $creatorName;
    /**
     * @var string
     */
    public $currentTaskId;
    /**
     * @var string
     */
    public $currentTaskName;
    /**
     * @var int
     */
    public $currentTaskStartTime;
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
    public $jobId;
    /**
     * @var string
     */
    public $source;
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
    public $templateId;
    /**
     * @var string
     */
    public $templateVersion;
    /**
     * @var string
     */
    public $ticketId;
    /**
     * @var string
     */
    public $title;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
