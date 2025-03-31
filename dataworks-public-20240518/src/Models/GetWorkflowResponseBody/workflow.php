<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowResponseBody\workflow\dependencies;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowResponseBody\workflow\outputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowResponseBody\workflow\tags;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowResponseBody\workflow\tasks;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetWorkflowResponseBody\workflow\trigger;

class workflow extends Model
{
    /**
     * @var string
     */
    public $clientUniqueCode;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUser;

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
     * @var string
     */
    public $parameters;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var tasks[]
     */
    public $tasks;

    /**
     * @var trigger
     */
    public $trigger;
    protected $_name = [
        'clientUniqueCode' => 'ClientUniqueCode',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'dependencies' => 'Dependencies',
        'description' => 'Description',
        'envType' => 'EnvType',
        'id' => 'Id',
        'modifyTime' => 'ModifyTime',
        'modifyUser' => 'ModifyUser',
        'name' => 'Name',
        'outputs' => 'Outputs',
        'owner' => 'Owner',
        'parameters' => 'Parameters',
        'projectId' => 'ProjectId',
        'tags' => 'Tags',
        'tasks' => 'Tasks',
        'trigger' => 'Trigger',
    ];

    public function validate()
    {
        if (\is_array($this->dependencies)) {
            Model::validateArray($this->dependencies);
        }
        if (null !== $this->outputs) {
            $this->outputs->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->tasks)) {
            Model::validateArray($this->tasks);
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

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
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

        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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

        if (null !== $this->tasks) {
            if (\is_array($this->tasks)) {
                $res['Tasks'] = [];
                $n1 = 0;
                foreach ($this->tasks as $item1) {
                    $res['Tasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
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

        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
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

        if (isset($map['Tasks'])) {
            if (!empty($map['Tasks'])) {
                $model->tasks = [];
                $n1 = 0;
                foreach ($map['Tasks'] as $item1) {
                    $model->tasks[$n1++] = tasks::fromMap($item1);
                }
            }
        }

        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }

        return $model;
    }
}
