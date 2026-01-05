<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\inputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\outputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\script;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\strategy;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\tags;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\trigger;

class nodes extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var dataSource
     */
    public $dataSource;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var inputs
     */
    public $inputs;

    /**
     * @var int
     */
    public $modifyTime;

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
    public $projectId;

    /**
     * @var string
     */
    public $recurrence;

    /**
     * @var runtimeResource
     */
    public $runtimeResource;

    /**
     * @var script
     */
    public $script;

    /**
     * @var strategy
     */
    public $strategy;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var trigger
     */
    public $trigger;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dataSource' => 'DataSource',
        'description' => 'Description',
        'id' => 'Id',
        'inputs' => 'Inputs',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'outputs' => 'Outputs',
        'owner' => 'Owner',
        'projectId' => 'ProjectId',
        'recurrence' => 'Recurrence',
        'runtimeResource' => 'RuntimeResource',
        'script' => 'Script',
        'strategy' => 'Strategy',
        'tags' => 'Tags',
        'taskId' => 'TaskId',
        'trigger' => 'Trigger',
    ];

    public function validate()
    {
        if (null !== $this->dataSource) {
            $this->dataSource->validate();
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
        if (null !== $this->strategy) {
            $this->strategy->validate();
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toArray($noStream) : $this->dataSource;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->inputs) {
            $res['Inputs'] = null !== $this->inputs ? $this->inputs->toArray($noStream) : $this->inputs;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
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

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->recurrence) {
            $res['Recurrence'] = $this->recurrence;
        }

        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toArray($noStream) : $this->runtimeResource;
        }

        if (null !== $this->script) {
            $res['Script'] = null !== $this->script ? $this->script->toArray($noStream) : $this->script;
        }

        if (null !== $this->strategy) {
            $res['Strategy'] = null !== $this->strategy ? $this->strategy->toArray($noStream) : $this->strategy;
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

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Inputs'])) {
            $model->inputs = inputs::fromMap($map['Inputs']);
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
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

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Recurrence'])) {
            $model->recurrence = $map['Recurrence'];
        }

        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = runtimeResource::fromMap($map['RuntimeResource']);
        }

        if (isset($map['Script'])) {
            $model->script = script::fromMap($map['Script']);
        }

        if (isset($map['Strategy'])) {
            $model->strategy = strategy::fromMap($map['Strategy']);
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

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }

        return $model;
    }
}
