<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\CreateCopilotSessionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CreateCopilotSessionResponseBody\data\activeTurn;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CreateCopilotSessionResponseBody\data\lastTurn;
use AlibabaCloud\SDK\SysOM\V20231230\Models\CreateCopilotSessionResponseBody\data\scheduledTask;

class data extends Model
{
    /**
     * @var activeTurn
     */
    public $activeTurn;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $cursor;

    /**
     * @var lastTurn
     */
    public $lastTurn;

    /**
     * @var string
     */
    public $name;

    /**
     * @var scheduledTask
     */
    public $scheduledTask;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $sessionType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'activeTurn' => 'activeTurn',
        'createdAt' => 'createdAt',
        'cursor' => 'cursor',
        'lastTurn' => 'lastTurn',
        'name' => 'name',
        'scheduledTask' => 'scheduledTask',
        'sessionId' => 'sessionId',
        'sessionType' => 'sessionType',
        'status' => 'status',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (null !== $this->activeTurn) {
            $this->activeTurn->validate();
        }
        if (null !== $this->lastTurn) {
            $this->lastTurn->validate();
        }
        if (null !== $this->scheduledTask) {
            $this->scheduledTask->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeTurn) {
            $res['activeTurn'] = null !== $this->activeTurn ? $this->activeTurn->toArray($noStream) : $this->activeTurn;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }

        if (null !== $this->lastTurn) {
            $res['lastTurn'] = null !== $this->lastTurn ? $this->lastTurn->toArray($noStream) : $this->lastTurn;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->scheduledTask) {
            $res['scheduledTask'] = null !== $this->scheduledTask ? $this->scheduledTask->toArray($noStream) : $this->scheduledTask;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->sessionType) {
            $res['sessionType'] = $this->sessionType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['activeTurn'])) {
            $model->activeTurn = activeTurn::fromMap($map['activeTurn']);
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['cursor'])) {
            $model->cursor = $map['cursor'];
        }

        if (isset($map['lastTurn'])) {
            $model->lastTurn = lastTurn::fromMap($map['lastTurn']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['scheduledTask'])) {
            $model->scheduledTask = scheduledTask::fromMap($map['scheduledTask']);
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['sessionType'])) {
            $model->sessionType = $map['sessionType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
