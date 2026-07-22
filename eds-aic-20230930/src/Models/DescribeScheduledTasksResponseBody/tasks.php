<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeScheduledTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeScheduledTasksResponseBody\tasks\runConfig;

class tasks extends Model
{
    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $lastExecutionAt;

    /**
     * @var string
     */
    public $nextExecutionAt;

    /**
     * @var runConfig
     */
    public $runConfig;

    /**
     * @var string
     */
    public $scheduledId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskConfigId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $totalExecutions;

    /**
     * @var int
     */
    public $totalFailures;

    /**
     * @var string
     */
    public $userPrompt;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'cronExpression' => 'CronExpression',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'instanceIds' => 'InstanceIds',
        'lastExecutionAt' => 'LastExecutionAt',
        'nextExecutionAt' => 'NextExecutionAt',
        'runConfig' => 'RunConfig',
        'scheduledId' => 'ScheduledId',
        'status' => 'Status',
        'taskConfigId' => 'TaskConfigId',
        'taskName' => 'TaskName',
        'totalExecutions' => 'TotalExecutions',
        'totalFailures' => 'TotalFailures',
        'userPrompt' => 'UserPrompt',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (null !== $this->runConfig) {
            $this->runConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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

        if (null !== $this->lastExecutionAt) {
            $res['LastExecutionAt'] = $this->lastExecutionAt;
        }

        if (null !== $this->nextExecutionAt) {
            $res['NextExecutionAt'] = $this->nextExecutionAt;
        }

        if (null !== $this->runConfig) {
            $res['RunConfig'] = null !== $this->runConfig ? $this->runConfig->toArray($noStream) : $this->runConfig;
        }

        if (null !== $this->scheduledId) {
            $res['ScheduledId'] = $this->scheduledId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskConfigId) {
            $res['TaskConfigId'] = $this->taskConfigId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->totalExecutions) {
            $res['TotalExecutions'] = $this->totalExecutions;
        }

        if (null !== $this->totalFailures) {
            $res['TotalFailures'] = $this->totalFailures;
        }

        if (null !== $this->userPrompt) {
            $res['UserPrompt'] = $this->userPrompt;
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
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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

        if (isset($map['LastExecutionAt'])) {
            $model->lastExecutionAt = $map['LastExecutionAt'];
        }

        if (isset($map['NextExecutionAt'])) {
            $model->nextExecutionAt = $map['NextExecutionAt'];
        }

        if (isset($map['RunConfig'])) {
            $model->runConfig = runConfig::fromMap($map['RunConfig']);
        }

        if (isset($map['ScheduledId'])) {
            $model->scheduledId = $map['ScheduledId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskConfigId'])) {
            $model->taskConfigId = $map['TaskConfigId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TotalExecutions'])) {
            $model->totalExecutions = $map['TotalExecutions'];
        }

        if (isset($map['TotalFailures'])) {
            $model->totalFailures = $map['TotalFailures'];
        }

        if (isset($map['UserPrompt'])) {
            $model->userPrompt = $map['UserPrompt'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
