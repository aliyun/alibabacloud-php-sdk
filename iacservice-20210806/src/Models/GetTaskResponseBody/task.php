<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetTaskResponseBody\task\groupInfo;

class task extends Model
{
    /**
     * @var bool
     */
    public $autoApply;

    /**
     * @var bool
     */
    public $autoDestroy;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $currentJobId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var groupInfo
     */
    public $groupInfo;

    /**
     * @var bool
     */
    public $initModuleState;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var string[]
     */
    public $protectionStrategy;

    /**
     * @var string
     */
    public $ramRole;

    /**
     * @var bool
     */
    public $skipPropertyValidation;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskOutputPath;

    /**
     * @var string
     */
    public $terraformVersion;

    /**
     * @var string
     */
    public $triggerStrategy;

    /**
     * @var string
     */
    public $triggerValue;
    protected $_name = [
        'autoApply' => 'autoApply',
        'autoDestroy' => 'autoDestroy',
        'createTime' => 'createTime',
        'currentJobId' => 'currentJobId',
        'description' => 'description',
        'groupInfo' => 'groupInfo',
        'initModuleState' => 'initModuleState',
        'moduleId' => 'moduleId',
        'moduleVersion' => 'moduleVersion',
        'name' => 'name',
        'parameters' => 'parameters',
        'protectionStrategy' => 'protectionStrategy',
        'ramRole' => 'ramRole',
        'skipPropertyValidation' => 'skipPropertyValidation',
        'status' => 'status',
        'taskId' => 'taskId',
        'taskOutputPath' => 'taskOutputPath',
        'terraformVersion' => 'terraformVersion',
        'triggerStrategy' => 'triggerStrategy',
        'triggerValue' => 'triggerValue',
    ];

    public function validate()
    {
        if (null !== $this->groupInfo) {
            $this->groupInfo->validate();
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->protectionStrategy)) {
            Model::validateArray($this->protectionStrategy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoApply) {
            $res['autoApply'] = $this->autoApply;
        }

        if (null !== $this->autoDestroy) {
            $res['autoDestroy'] = $this->autoDestroy;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->currentJobId) {
            $res['currentJobId'] = $this->currentJobId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->groupInfo) {
            $res['groupInfo'] = null !== $this->groupInfo ? $this->groupInfo->toArray($noStream) : $this->groupInfo;
        }

        if (null !== $this->initModuleState) {
            $res['initModuleState'] = $this->initModuleState;
        }

        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }

        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->protectionStrategy) {
            if (\is_array($this->protectionStrategy)) {
                $res['protectionStrategy'] = [];
                $n1 = 0;
                foreach ($this->protectionStrategy as $item1) {
                    $res['protectionStrategy'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ramRole) {
            $res['ramRole'] = $this->ramRole;
        }

        if (null !== $this->skipPropertyValidation) {
            $res['skipPropertyValidation'] = $this->skipPropertyValidation;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskOutputPath) {
            $res['taskOutputPath'] = $this->taskOutputPath;
        }

        if (null !== $this->terraformVersion) {
            $res['terraformVersion'] = $this->terraformVersion;
        }

        if (null !== $this->triggerStrategy) {
            $res['triggerStrategy'] = $this->triggerStrategy;
        }

        if (null !== $this->triggerValue) {
            $res['triggerValue'] = $this->triggerValue;
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
        if (isset($map['autoApply'])) {
            $model->autoApply = $map['autoApply'];
        }

        if (isset($map['autoDestroy'])) {
            $model->autoDestroy = $map['autoDestroy'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['currentJobId'])) {
            $model->currentJobId = $map['currentJobId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['groupInfo'])) {
            $model->groupInfo = groupInfo::fromMap($map['groupInfo']);
        }

        if (isset($map['initModuleState'])) {
            $model->initModuleState = $map['initModuleState'];
        }

        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }

        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                foreach ($map['parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['protectionStrategy'])) {
            if (!empty($map['protectionStrategy'])) {
                $model->protectionStrategy = [];
                $n1 = 0;
                foreach ($map['protectionStrategy'] as $item1) {
                    $model->protectionStrategy[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ramRole'])) {
            $model->ramRole = $map['ramRole'];
        }

        if (isset($map['skipPropertyValidation'])) {
            $model->skipPropertyValidation = $map['skipPropertyValidation'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskOutputPath'])) {
            $model->taskOutputPath = $map['taskOutputPath'];
        }

        if (isset($map['terraformVersion'])) {
            $model->terraformVersion = $map['terraformVersion'];
        }

        if (isset($map['triggerStrategy'])) {
            $model->triggerStrategy = $map['triggerStrategy'];
        }

        if (isset($map['triggerValue'])) {
            $model->triggerValue = $map['triggerValue'];
        }

        return $model;
    }
}
