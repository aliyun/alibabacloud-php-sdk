<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListTicketTasksResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $action;
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
    public $comment;
    /**
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
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var string
     */
    public $taskDefinitionNodeId;
    /**
     * @var string
     */
    public $taskDefinitionNodeType;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var string
     */
    public $taskName;
    /**
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
        if (\is_array($this->fileKeys)) {
            Model::validateArray($this->fileKeys);
        }
        if (\is_array($this->fileUrls)) {
            Model::validateArray($this->fileUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->fileKeys)) {
                $res['FileKeys'] = [];
                $n1              = 0;
                foreach ($this->fileKeys as $item1) {
                    $res['FileKeys'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->fileUrls) {
            if (\is_array($this->fileUrls)) {
                $res['FileUrls'] = [];
                $n1              = 0;
                foreach ($this->fileUrls as $item1) {
                    $res['FileUrls'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->fileKeys = [];
                $n1              = 0;
                foreach ($map['FileKeys'] as $item1) {
                    $model->fileKeys[$n1++] = $item1;
                }
            }
        }

        if (isset($map['FileUrls'])) {
            if (!empty($map['FileUrls'])) {
                $model->fileUrls = [];
                $n1              = 0;
                foreach ($map['FileUrls'] as $item1) {
                    $model->fileUrls[$n1++] = $item1;
                }
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
