<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyResponseBody\policy;

use AlibabaCloud\Dara\Model;

class statement extends Model
{
    /**
     * @var string[]
     */
    public $action;

    /**
     * @var mixed[]
     */
    public $condition;

    /**
     * @var string
     */
    public $effect;

    /**
     * @var string
     */
    public $resource;
    protected $_name = [
        'action' => 'Action',
        'condition' => 'Condition',
        'effect' => 'Effect',
        'resource' => 'Resource',
    ];

    public function validate()
    {
        if (\is_array($this->action)) {
            Model::validateArray($this->action);
        }
        if (\is_array($this->condition)) {
            Model::validateArray($this->condition);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            if (\is_array($this->action)) {
                $res['Action'] = [];
                $n1 = 0;
                foreach ($this->action as $item1) {
                    $res['Action'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->condition) {
            if (\is_array($this->condition)) {
                $res['Condition'] = [];
                foreach ($this->condition as $key1 => $value1) {
                    $res['Condition'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->effect) {
            $res['Effect'] = $this->effect;
        }

        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
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
        if (isset($map['Action'])) {
            if (!empty($map['Action'])) {
                $model->action = [];
                $n1 = 0;
                foreach ($map['Action'] as $item1) {
                    $model->action[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Condition'])) {
            if (!empty($map['Condition'])) {
                $model->condition = [];
                foreach ($map['Condition'] as $key1 => $value1) {
                    $model->condition[$key1] = $value1;
                }
            }
        }

        if (isset($map['Effect'])) {
            $model->effect = $map['Effect'];
        }

        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        return $model;
    }
}
