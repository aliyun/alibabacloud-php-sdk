<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetVariableGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetVariableGroupResponseBody\variableGroup\relatedPipelines;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetVariableGroupResponseBody\variableGroup\variables;

class variableGroup extends Model
{
    /**
     * @var string
     */
    public $ccreatorAccountId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $modifierAccountId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var relatedPipelines[]
     */
    public $relatedPipelines;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'ccreatorAccountId' => 'ccreatorAccountId',
        'createTime' => 'createTime',
        'description' => 'description',
        'id' => 'id',
        'modifierAccountId' => 'modifierAccountId',
        'name' => 'name',
        'relatedPipelines' => 'relatedPipelines',
        'updateTime' => 'updateTime',
        'variables' => 'variables',
    ];

    public function validate()
    {
        if (\is_array($this->relatedPipelines)) {
            Model::validateArray($this->relatedPipelines);
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ccreatorAccountId) {
            $res['ccreatorAccountId'] = $this->ccreatorAccountId;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->modifierAccountId) {
            $res['modifierAccountId'] = $this->modifierAccountId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->relatedPipelines) {
            if (\is_array($this->relatedPipelines)) {
                $res['relatedPipelines'] = [];
                $n1 = 0;
                foreach ($this->relatedPipelines as $item1) {
                    $res['relatedPipelines'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['variables'] = [];
                $n1 = 0;
                foreach ($this->variables as $item1) {
                    $res['variables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ccreatorAccountId'])) {
            $model->ccreatorAccountId = $map['ccreatorAccountId'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['modifierAccountId'])) {
            $model->modifierAccountId = $map['modifierAccountId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['relatedPipelines'])) {
            if (!empty($map['relatedPipelines'])) {
                $model->relatedPipelines = [];
                $n1 = 0;
                foreach ($map['relatedPipelines'] as $item1) {
                    $model->relatedPipelines[$n1] = relatedPipelines::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                $n1 = 0;
                foreach ($map['variables'] as $item1) {
                    $model->variables[$n1] = variables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
