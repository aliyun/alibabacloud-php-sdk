<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryRuleResponseBody\data\strategy;

class data extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $failedTaskCount;

    /**
     * @var string
     */
    public $lastExecutedAt;

    /**
     * @var string
     */
    public $lastTaskId;

    /**
     * @var string
     */
    public $lastTaskStatus;

    /**
     * @var string
     */
    public $memoryStoreId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var strategy
     */
    public $strategy;

    /**
     * @var int
     */
    public $succeededTaskCount;

    /**
     * @var int
     */
    public $taskCount;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'description' => 'description',
        'enabled' => 'enabled',
        'failedTaskCount' => 'failedTaskCount',
        'lastExecutedAt' => 'lastExecutedAt',
        'lastTaskId' => 'lastTaskId',
        'lastTaskStatus' => 'lastTaskStatus',
        'memoryStoreId' => 'memoryStoreId',
        'name' => 'name',
        'ruleId' => 'ruleId',
        'strategy' => 'strategy',
        'succeededTaskCount' => 'succeededTaskCount',
        'taskCount' => 'taskCount',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (null !== $this->strategy) {
            $this->strategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->failedTaskCount) {
            $res['failedTaskCount'] = $this->failedTaskCount;
        }

        if (null !== $this->lastExecutedAt) {
            $res['lastExecutedAt'] = $this->lastExecutedAt;
        }

        if (null !== $this->lastTaskId) {
            $res['lastTaskId'] = $this->lastTaskId;
        }

        if (null !== $this->lastTaskStatus) {
            $res['lastTaskStatus'] = $this->lastTaskStatus;
        }

        if (null !== $this->memoryStoreId) {
            $res['memoryStoreId'] = $this->memoryStoreId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }

        if (null !== $this->strategy) {
            $res['strategy'] = null !== $this->strategy ? $this->strategy->toArray($noStream) : $this->strategy;
        }

        if (null !== $this->succeededTaskCount) {
            $res['succeededTaskCount'] = $this->succeededTaskCount;
        }

        if (null !== $this->taskCount) {
            $res['taskCount'] = $this->taskCount;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['failedTaskCount'])) {
            $model->failedTaskCount = $map['failedTaskCount'];
        }

        if (isset($map['lastExecutedAt'])) {
            $model->lastExecutedAt = $map['lastExecutedAt'];
        }

        if (isset($map['lastTaskId'])) {
            $model->lastTaskId = $map['lastTaskId'];
        }

        if (isset($map['lastTaskStatus'])) {
            $model->lastTaskStatus = $map['lastTaskStatus'];
        }

        if (isset($map['memoryStoreId'])) {
            $model->memoryStoreId = $map['memoryStoreId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        if (isset($map['strategy'])) {
            $model->strategy = strategy::fromMap($map['strategy']);
        }

        if (isset($map['succeededTaskCount'])) {
            $model->succeededTaskCount = $map['succeededTaskCount'];
        }

        if (isset($map['taskCount'])) {
            $model->taskCount = $map['taskCount'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
