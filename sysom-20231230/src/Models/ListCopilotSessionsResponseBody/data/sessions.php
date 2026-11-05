<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListCopilotSessionsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListCopilotSessionsResponseBody\data\sessions\activeTurn;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListCopilotSessionsResponseBody\data\sessions\scheduledTask;

class sessions extends Model
{
    /**
     * @var activeTurn
     */
    public $activeTurn;

    /**
     * @var string
     */
    public $activeTurnId;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $id;

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

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'activeTurn' => 'activeTurn',
        'activeTurnId' => 'activeTurnId',
        'agentId' => 'agentId',
        'createdAt' => 'createdAt',
        'id' => 'id',
        'name' => 'name',
        'scheduledTask' => 'scheduledTask',
        'sessionId' => 'sessionId',
        'sessionType' => 'sessionType',
        'status' => 'status',
        'updatedAt' => 'updatedAt',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (null !== $this->activeTurn) {
            $this->activeTurn->validate();
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

        if (null !== $this->activeTurnId) {
            $res['activeTurnId'] = $this->activeTurnId;
        }

        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
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

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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

        if (isset($map['activeTurnId'])) {
            $model->activeTurnId = $map['activeTurnId'];
        }

        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
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

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
