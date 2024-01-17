<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class ListDialoguesRequest extends Model
{
    /**
     * @example xxxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @example 2
     *
     * @var int
     */
    public $dialogueType;

    /**
     * @example 2024-01-04 11:46:07
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @example 2024-01-04 11:46:07
     *
     * @var string
     */
    public $startTime;

    /**
     * @example xxx
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListDialoguesRequest
     */
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
