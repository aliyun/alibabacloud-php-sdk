<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListTicketTasksResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example CounterSignTask
     *
     * @var string
     */
    public $action;

    /**
     * @example assignee@ccc-test
     *
     * @var string
     */
    public $assignee;

    /**
     * @example assignee
     *
     * @var string
     */
    public $assigneeName;

    /**
     * @var string
     */
    public $comment;

    /**
     * @example 1620269200000
     *
     * @var int
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $fileKeys;

    /**
     * @var string[]
     */
    public $fileUrls;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1620259200000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example APPROVAL__6zu2QjAz
     *
     * @var string
     */
    public $taskDefinitionNodeId;

    /**
     * @example APPROVAL
     *
     * @var string
     */
    public $taskDefinitionNodeType;

    /**
     * @example eb039a4a6a5742c6b44ccff0c1fca745
     *
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @example 5491d3b4-14ee-4341-b5f1-db2c78beddeb
     *
     * @var string
     */
    public $ticketId;
    protected $_name = [
        'action'                 => 'Action',
        'assignee'               => 'Assignee',
        'assigneeName'           => 'AssigneeName',
        'comment'                => 'Comment',
        'endTime'                => 'EndTime',
        'fileKeys'               => 'FileKeys',
        'fileUrls'               => 'FileUrls',
        'instanceId'             => 'InstanceId',
        'startTime'              => 'StartTime',
        'taskDefinitionNodeId'   => 'TaskDefinitionNodeId',
        'taskDefinitionNodeType' => 'TaskDefinitionNodeType',
        'taskId'                 => 'TaskId',
        'taskName'               => 'TaskName',
        'ticketId'               => 'TicketId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->assignee) {
            $res['Assignee'] = $this->assignee;
        }
        if (null !== $this->assigneeName) {
            $res['AssigneeName'] = $this->assigneeName;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->fileKeys) {
            $res['FileKeys'] = $this->fileKeys;
        }
        if (null !== $this->fileUrls) {
            $res['FileUrls'] = $this->fileUrls;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskDefinitionNodeId) {
            $res['TaskDefinitionNodeId'] = $this->taskDefinitionNodeId;
        }
        if (null !== $this->taskDefinitionNodeType) {
            $res['TaskDefinitionNodeType'] = $this->taskDefinitionNodeType;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Assignee'])) {
            $model->assignee = $map['Assignee'];
        }
        if (isset($map['AssigneeName'])) {
            $model->assigneeName = $map['AssigneeName'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FileKeys'])) {
            if (!empty($map['FileKeys'])) {
                $model->fileKeys = $map['FileKeys'];
            }
        }
        if (isset($map['FileUrls'])) {
            if (!empty($map['FileUrls'])) {
                $model->fileUrls = $map['FileUrls'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskDefinitionNodeId'])) {
            $model->taskDefinitionNodeId = $map['TaskDefinitionNodeId'];
        }
        if (isset($map['TaskDefinitionNodeType'])) {
            $model->taskDefinitionNodeType = $map['TaskDefinitionNodeType'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }

        return $model;
    }
}
