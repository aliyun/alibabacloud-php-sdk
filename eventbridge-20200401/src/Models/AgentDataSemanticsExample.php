<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class AgentDataSemanticsExample extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var AgentDataSemanticsExampleParameter[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $SQLExpression;
    protected $_name = [
        'description' => 'Description',
        'name' => 'Name',
        'parameters' => 'Parameters',
        'SQLExpression' => 'SQLExpression',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['Parameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->SQLExpression) {
            $res['SQLExpression'] = $this->SQLExpression;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n1 = 0;
                foreach ($map['Parameters'] as $item1) {
                    $model->parameters[$n1] = AgentDataSemanticsExampleParameter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SQLExpression'])) {
            $model->SQLExpression = $map['SQLExpression'];
        }

        return $model;
    }
}
