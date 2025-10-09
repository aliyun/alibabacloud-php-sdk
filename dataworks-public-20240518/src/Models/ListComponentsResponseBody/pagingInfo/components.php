<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListComponentsResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListComponentsResponseBody\pagingInfo\components\inputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListComponentsResponseBody\pagingInfo\components\outputs;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListComponentsResponseBody\pagingInfo\components\script;

class components extends Model
{
    /**
     * @var string
     */
    public $componentId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var inputs[]
     */
    public $inputs;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var outputs[]
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
     * @var script
     */
    public $script;
    protected $_name = [
        'componentId' => 'ComponentId',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'inputs' => 'Inputs',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'outputs' => 'Outputs',
        'owner' => 'Owner',
        'projectId' => 'ProjectId',
        'script' => 'Script',
    ];

    public function validate()
    {
        if (\is_array($this->inputs)) {
            Model::validateArray($this->inputs);
        }
        if (\is_array($this->outputs)) {
            Model::validateArray($this->outputs);
        }
        if (null !== $this->script) {
            $this->script->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->inputs) {
            if (\is_array($this->inputs)) {
                $res['Inputs'] = [];
                $n1 = 0;
                foreach ($this->inputs as $item1) {
                    $res['Inputs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outputs) {
            if (\is_array($this->outputs)) {
                $res['Outputs'] = [];
                $n1 = 0;
                foreach ($this->outputs as $item1) {
                    $res['Outputs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->script) {
            $res['Script'] = null !== $this->script ? $this->script->toArray($noStream) : $this->script;
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
        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Inputs'])) {
            if (!empty($map['Inputs'])) {
                $model->inputs = [];
                $n1 = 0;
                foreach ($map['Inputs'] as $item1) {
                    $model->inputs[$n1] = inputs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n1 = 0;
                foreach ($map['Outputs'] as $item1) {
                    $model->outputs[$n1] = outputs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Script'])) {
            $model->script = script::fromMap($map['Script']);
        }

        return $model;
    }
}
