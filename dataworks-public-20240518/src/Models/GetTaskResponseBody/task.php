<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\dependencies;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\inputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\outputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\script;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\subTasks;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\tags;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\trigger;

class task extends Model
{
    /**
     * @var int
     */
    public $baselineId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUser;

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
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $modifyUser;

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
    public $priority;

    /**
     * @var string
     */
    public $projectEnv;

    /**
     * @var int
     */
    public $projectId;

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
     * @var subTasks
     */
    public $subTasks;

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

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'baselineId' => 'BaselineId',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'dataSource' => 'DataSource',
        'dependencies' => 'Dependencies',
        'description' => 'Description',
        'envType' => 'EnvType',
        'id' => 'Id',
        'inputs' => 'Inputs',
        'instanceMode' => 'InstanceMode',
        'modifyTime' => 'ModifyTime',
        'modifyUser' => 'ModifyUser',
        'name' => 'Name',
        'outputs' => 'Outputs',
        'owner' => 'Owner',
        'priority' => 'Priority',
        'projectEnv' => 'ProjectEnv',
        'projectId' => 'ProjectId',
        'rerunInterval' => 'RerunInterval',
        'rerunMode' => 'RerunMode',
        'rerunTimes' => 'RerunTimes',
        'runtimeResource' => 'RuntimeResource',
        'script' => 'Script',
        'subTasks' => 'SubTasks',
        'tags' => 'Tags',
        'timeout' => 'Timeout',
        'trigger' => 'Trigger',
        'type' => 'Type',
        'workflowId' => 'WorkflowId',
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
        if (null !== $this->subTasks) {
            $this->subTasks->validate();
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
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }

        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toArray($noStream) : $this->dataSource;
        }

        if (null !== $this->dependencies) {
            if (\is_array($this->dependencies)) {
                $res['Dependencies'] = [];
                $n1 = 0;
                foreach ($this->dependencies as $item1) {
                    $res['Dependencies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
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

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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

        if (null !== $this->subTasks) {
            $res['SubTasks'] = null !== $this->subTasks ? $this->subTasks->toArray($noStream) : $this->subTasks;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->trigger) {
            $res['Trigger'] = null !== $this->trigger ? $this->trigger->toArray($noStream) : $this->trigger;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
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
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }

        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
        }

        if (isset($map['Dependencies'])) {
            if (!empty($map['Dependencies'])) {
                $model->dependencies = [];
                $n1 = 0;
                foreach ($map['Dependencies'] as $item1) {
                    $model->dependencies[$n1] = dependencies::fromMap($item1);
                    ++$n1;
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

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
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

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
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

        if (isset($map['SubTasks'])) {
            $model->subTasks = subTasks::fromMap($map['SubTasks']);
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
