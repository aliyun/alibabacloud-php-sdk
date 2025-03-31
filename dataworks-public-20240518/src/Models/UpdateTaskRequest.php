<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskRequest\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskRequest\dependencies;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskRequest\inputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskRequest\outputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskRequest\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskRequest\script;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskRequest\tags;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskRequest\trigger;

class UpdateTaskRequest extends Model
{
    /**
     * @var string
     */
    public $clientUniqueCode;

    /**
     * @var dataSource
     */
    public $dataSource;

    /**
     * @var dependencies[]
     */
    public $dependencies;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var inputs
     */
    public $inputs;

    /**
     * @var string
     */
    public $instanceMode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var outputs
     */
    public $outputs;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $rerunInterval;

    /**
     * @var string
     */
    public $rerunMode;

    /**
     * @var int
     */
    public $rerunTimes;

    /**
     * @var runtimeResource
     */
    public $runtimeResource;

    /**
     * @var script
     */
    public $script;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var trigger
     */
    public $trigger;
    protected $_name = [
        'clientUniqueCode' => 'ClientUniqueCode',
        'dataSource' => 'DataSource',
        'dependencies' => 'Dependencies',
        'description' => 'Description',
        'envType' => 'EnvType',
        'id' => 'Id',
        'inputs' => 'Inputs',
        'instanceMode' => 'InstanceMode',
        'name' => 'Name',
        'outputs' => 'Outputs',
        'owner' => 'Owner',
        'rerunInterval' => 'RerunInterval',
        'rerunMode' => 'RerunMode',
        'rerunTimes' => 'RerunTimes',
        'runtimeResource' => 'RuntimeResource',
        'script' => 'Script',
        'tags' => 'Tags',
        'timeout' => 'Timeout',
        'trigger' => 'Trigger',
    ];

    public function validate()
    {
        if (null !== $this->dataSource) {
            $this->dataSource->validate();
        }
        if (\is_array($this->dependencies)) {
            Model::validateArray($this->dependencies);
        }
        if (null !== $this->inputs) {
            $this->inputs->validate();
        }
        if (null !== $this->outputs) {
            $this->outputs->validate();
        }
        if (null !== $this->runtimeResource) {
            $this->runtimeResource->validate();
        }
        if (null !== $this->script) {
            $this->script->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->trigger) {
            $this->trigger->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientUniqueCode) {
            $res['ClientUniqueCode'] = $this->clientUniqueCode;
        }

        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toArray($noStream) : $this->dataSource;
        }

        if (null !== $this->dependencies) {
            if (\is_array($this->dependencies)) {
                $res['Dependencies'] = [];
                $n1 = 0;
                foreach ($this->dependencies as $item1) {
                    $res['Dependencies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->inputs) {
            $res['Inputs'] = null !== $this->inputs ? $this->inputs->toArray($noStream) : $this->inputs;
        }

        if (null !== $this->instanceMode) {
            $res['InstanceMode'] = $this->instanceMode;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outputs) {
            $res['Outputs'] = null !== $this->outputs ? $this->outputs->toArray($noStream) : $this->outputs;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->rerunInterval) {
            $res['RerunInterval'] = $this->rerunInterval;
        }

        if (null !== $this->rerunMode) {
            $res['RerunMode'] = $this->rerunMode;
        }

        if (null !== $this->rerunTimes) {
            $res['RerunTimes'] = $this->rerunTimes;
        }

        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toArray($noStream) : $this->runtimeResource;
        }

        if (null !== $this->script) {
            $res['Script'] = null !== $this->script ? $this->script->toArray($noStream) : $this->script;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->trigger) {
            $res['Trigger'] = null !== $this->trigger ? $this->trigger->toArray($noStream) : $this->trigger;
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
        if (isset($map['ClientUniqueCode'])) {
            $model->clientUniqueCode = $map['ClientUniqueCode'];
        }

        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
        }

        if (isset($map['Dependencies'])) {
            if (!empty($map['Dependencies'])) {
                $model->dependencies = [];
                $n1 = 0;
                foreach ($map['Dependencies'] as $item1) {
                    $model->dependencies[$n1++] = dependencies::fromMap($item1);
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Inputs'])) {
            $model->inputs = inputs::fromMap($map['Inputs']);
        }

        if (isset($map['InstanceMode'])) {
            $model->instanceMode = $map['InstanceMode'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Outputs'])) {
            $model->outputs = outputs::fromMap($map['Outputs']);
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['RerunInterval'])) {
            $model->rerunInterval = $map['RerunInterval'];
        }

        if (isset($map['RerunMode'])) {
            $model->rerunMode = $map['RerunMode'];
        }

        if (isset($map['RerunTimes'])) {
            $model->rerunTimes = $map['RerunTimes'];
        }

        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = runtimeResource::fromMap($map['RuntimeResource']);
        }

        if (isset($map['Script'])) {
            $model->script = script::fromMap($map['Script']);
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }

        return $model;
    }
}
