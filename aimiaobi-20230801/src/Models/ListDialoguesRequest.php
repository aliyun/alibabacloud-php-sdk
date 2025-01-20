<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListDialoguesRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;
    /**
     * @var int
     */
    public $current;
    /**
     * @var int
     */
    public $dialogueType;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var int
     */
    public $size;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'agentKey'     => 'AgentKey',
        'current'      => 'Current',
        'dialogueType' => 'DialogueType',
        'endTime'      => 'EndTime',
        'size'         => 'Size',
        'startTime'    => 'StartTime',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }

        if (null !== $this->dialogueType) {
            $res['DialogueType'] = $this->dialogueType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }

        if (isset($map['DialogueType'])) {
            $model->dialogueType = $map['DialogueType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
