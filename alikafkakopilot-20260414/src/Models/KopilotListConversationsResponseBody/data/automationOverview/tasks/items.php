<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponseBody\data\automationOverview\tasks;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponseBody\data\automationOverview\tasks\items\activeRun;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponseBody\data\automationOverview\tasks\items\configuration;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponseBody\data\automationOverview\tasks\items\lastCompletedRun;

class items extends Model
{
    /**
     * @var activeRun
     */
    public $activeRun;

    /**
     * @var configuration
     */
    public $configuration;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var lastCompletedRun
     */
    public $lastCompletedRun;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextRunAt;

    /**
     * @var string
     */
    public $scheduleDescription;

    /**
     * @var string
     */
    public $sessionMode;

    /**
     * @var string
     */
    public $sourceSessionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $targetSessionId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'activeRun' => 'ActiveRun',
        'configuration' => 'Configuration',
        'createdAt' => 'CreatedAt',
        'lastCompletedRun' => 'LastCompletedRun',
        'name' => 'Name',
        'nextRunAt' => 'NextRunAt',
        'scheduleDescription' => 'ScheduleDescription',
        'sessionMode' => 'SessionMode',
        'sourceSessionId' => 'SourceSessionId',
        'status' => 'Status',
        'targetSessionId' => 'TargetSessionId',
        'taskId' => 'TaskId',
        'updatedAt' => 'UpdatedAt',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->activeRun) {
            $this->activeRun->validate();
        }
        if (null !== $this->configuration) {
            $this->configuration->validate();
        }
        if (null !== $this->lastCompletedRun) {
            $this->lastCompletedRun->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeRun) {
            $res['ActiveRun'] = null !== $this->activeRun ? $this->activeRun->toArray($noStream) : $this->activeRun;
        }

        if (null !== $this->configuration) {
            $res['Configuration'] = null !== $this->configuration ? $this->configuration->toArray($noStream) : $this->configuration;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->lastCompletedRun) {
            $res['LastCompletedRun'] = null !== $this->lastCompletedRun ? $this->lastCompletedRun->toArray($noStream) : $this->lastCompletedRun;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nextRunAt) {
            $res['NextRunAt'] = $this->nextRunAt;
        }

        if (null !== $this->scheduleDescription) {
            $res['ScheduleDescription'] = $this->scheduleDescription;
        }

        if (null !== $this->sessionMode) {
            $res['SessionMode'] = $this->sessionMode;
        }

        if (null !== $this->sourceSessionId) {
            $res['SourceSessionId'] = $this->sourceSessionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->targetSessionId) {
            $res['TargetSessionId'] = $this->targetSessionId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ActiveRun'])) {
            $model->activeRun = activeRun::fromMap($map['ActiveRun']);
        }

        if (isset($map['Configuration'])) {
            $model->configuration = configuration::fromMap($map['Configuration']);
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['LastCompletedRun'])) {
            $model->lastCompletedRun = lastCompletedRun::fromMap($map['LastCompletedRun']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NextRunAt'])) {
            $model->nextRunAt = $map['NextRunAt'];
        }

        if (isset($map['ScheduleDescription'])) {
            $model->scheduleDescription = $map['ScheduleDescription'];
        }

        if (isset($map['SessionMode'])) {
            $model->sessionMode = $map['SessionMode'];
        }

        if (isset($map['SourceSessionId'])) {
            $model->sourceSessionId = $map['SourceSessionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TargetSessionId'])) {
            $model->targetSessionId = $map['TargetSessionId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
