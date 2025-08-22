<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateTaskRequest\groupInfo;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateTaskRequest\tags;
use AlibabaCloud\SDK\IaCService\V20210806\Models\CreateTaskRequest\taskBackend;

class CreateTaskRequest extends Model
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
    public $clientToken;

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
     * @var tags[]
     */
    public $tags;

    /**
     * @var taskBackend
     */
    public $taskBackend;

    /**
     * @var string
     */
    public $terraformVersion;

    /**
     * @var string
     */
    public $triggerStrategy;
    protected $_name = [
        'autoApply' => 'autoApply',
        'autoDestroy' => 'autoDestroy',
        'clientToken' => 'clientToken',
        'description' => 'description',
        'groupInfo' => 'groupInfo',
        'initModuleState' => 'initModuleState',
        'moduleId' => 'moduleId',
        'moduleVersion' => 'moduleVersion',
        'name' => 'name',
        'protectionStrategy' => 'protectionStrategy',
        'ramRole' => 'ramRole',
        'skipPropertyValidation' => 'skipPropertyValidation',
        'tags' => 'tags',
        'taskBackend' => 'taskBackend',
        'terraformVersion' => 'terraformVersion',
        'triggerStrategy' => 'triggerStrategy',
    ];

    public function validate()
    {
        if (null !== $this->groupInfo) {
            $this->groupInfo->validate();
        }
        if (\is_array($this->protectionStrategy)) {
            Model::validateArray($this->protectionStrategy);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->taskBackend) {
            $this->taskBackend->validate();
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

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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

        if (null !== $this->protectionStrategy) {
            if (\is_array($this->protectionStrategy)) {
                $res['protectionStrategy'] = [];
                $n1 = 0;
                foreach ($this->protectionStrategy as $item1) {
                    $res['protectionStrategy'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ramRole) {
            $res['ramRole'] = $this->ramRole;
        }

        if (null !== $this->skipPropertyValidation) {
            $res['skipPropertyValidation'] = $this->skipPropertyValidation;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskBackend) {
            $res['taskBackend'] = null !== $this->taskBackend ? $this->taskBackend->toArray($noStream) : $this->taskBackend;
        }

        if (null !== $this->terraformVersion) {
            $res['terraformVersion'] = $this->terraformVersion;
        }

        if (null !== $this->triggerStrategy) {
            $res['triggerStrategy'] = $this->triggerStrategy;
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

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
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

        if (isset($map['protectionStrategy'])) {
            if (!empty($map['protectionStrategy'])) {
                $model->protectionStrategy = [];
                $n1 = 0;
                foreach ($map['protectionStrategy'] as $item1) {
                    $model->protectionStrategy[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ramRole'])) {
            $model->ramRole = $map['ramRole'];
        }

        if (isset($map['skipPropertyValidation'])) {
            $model->skipPropertyValidation = $map['skipPropertyValidation'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['taskBackend'])) {
            $model->taskBackend = taskBackend::fromMap($map['taskBackend']);
        }

        if (isset($map['terraformVersion'])) {
            $model->terraformVersion = $map['terraformVersion'];
        }

        if (isset($map['triggerStrategy'])) {
            $model->triggerStrategy = $map['triggerStrategy'];
        }

        return $model;
    }
}
