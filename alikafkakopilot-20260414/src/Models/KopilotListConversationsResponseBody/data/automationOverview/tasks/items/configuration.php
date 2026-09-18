<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponseBody\data\automationOverview\tasks\items;

use AlibabaCloud\Dara\Model;

class configuration extends Model
{
    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var string[]
     */
    public $destinationIds;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $instruction;

    /**
     * @var int
     */
    public $intervalSeconds;

    /**
     * @var int
     */
    public $maxRunSeconds;

    /**
     * @var int
     */
    public $maxTokens;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceMode;

    /**
     * @var string
     */
    public $runAt;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var string
     */
    public $sessionMode;

    /**
     * @var string
     */
    public $targetSessionId;

    /**
     * @var string
     */
    public $timezone;
    protected $_name = [
        'cronExpression' => 'CronExpression',
        'destinationIds' => 'DestinationIds',
        'instanceIds' => 'InstanceIds',
        'instruction' => 'Instruction',
        'intervalSeconds' => 'IntervalSeconds',
        'maxRunSeconds' => 'MaxRunSeconds',
        'maxTokens' => 'MaxTokens',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'resourceMode' => 'ResourceMode',
        'runAt' => 'RunAt',
        'scheduleType' => 'ScheduleType',
        'sessionMode' => 'SessionMode',
        'targetSessionId' => 'TargetSessionId',
        'timezone' => 'Timezone',
    ];

    public function validate()
    {
        if (\is_array($this->destinationIds)) {
            Model::validateArray($this->destinationIds);
        }
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }

        if (null !== $this->destinationIds) {
            if (\is_array($this->destinationIds)) {
                $res['DestinationIds'] = [];
                $n1 = 0;
                foreach ($this->destinationIds as $item1) {
                    $res['DestinationIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instruction) {
            $res['Instruction'] = $this->instruction;
        }

        if (null !== $this->intervalSeconds) {
            $res['IntervalSeconds'] = $this->intervalSeconds;
        }

        if (null !== $this->maxRunSeconds) {
            $res['MaxRunSeconds'] = $this->maxRunSeconds;
        }

        if (null !== $this->maxTokens) {
            $res['MaxTokens'] = $this->maxTokens;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceMode) {
            $res['ResourceMode'] = $this->resourceMode;
        }

        if (null !== $this->runAt) {
            $res['RunAt'] = $this->runAt;
        }

        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }

        if (null !== $this->sessionMode) {
            $res['SessionMode'] = $this->sessionMode;
        }

        if (null !== $this->targetSessionId) {
            $res['TargetSessionId'] = $this->targetSessionId;
        }

        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
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
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }

        if (isset($map['DestinationIds'])) {
            if (!empty($map['DestinationIds'])) {
                $model->destinationIds = [];
                $n1 = 0;
                foreach ($map['DestinationIds'] as $item1) {
                    $model->destinationIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Instruction'])) {
            $model->instruction = $map['Instruction'];
        }

        if (isset($map['IntervalSeconds'])) {
            $model->intervalSeconds = $map['IntervalSeconds'];
        }

        if (isset($map['MaxRunSeconds'])) {
            $model->maxRunSeconds = $map['MaxRunSeconds'];
        }

        if (isset($map['MaxTokens'])) {
            $model->maxTokens = $map['MaxTokens'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceMode'])) {
            $model->resourceMode = $map['ResourceMode'];
        }

        if (isset($map['RunAt'])) {
            $model->runAt = $map['RunAt'];
        }

        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }

        if (isset($map['SessionMode'])) {
            $model->sessionMode = $map['SessionMode'];
        }

        if (isset($map['TargetSessionId'])) {
            $model->targetSessionId = $map['TargetSessionId'];
        }

        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        return $model;
    }
}
