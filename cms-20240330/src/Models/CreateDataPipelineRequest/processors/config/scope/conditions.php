<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\CreateDataPipelineRequest\processors\config\scope;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateDataPipelineRequest\processors\config\scope\conditions\field;

class conditions extends Model
{
    /**
     * @var field
     */
    public $field;

    /**
     * @var string
     */
    public $matchType;

    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'field' => 'field',
        'matchType' => 'matchType',
        'values' => 'values',
    ];

    public function validate()
    {
        if (null !== $this->field) {
            $this->field->validate();
        }
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->field) {
            $res['field'] = null !== $this->field ? $this->field->toArray($noStream) : $this->field;
        }

        if (null !== $this->matchType) {
            $res['matchType'] = $this->matchType;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    $res['values'][$n1] = $item1;
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
        if (isset($map['field'])) {
            $model->field = field::fromMap($map['field']);
        }

        if (isset($map['matchType'])) {
            $model->matchType = $map['matchType'];
        }

        if (isset($map['values'])) {
            if (!empty($map['values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['values'] as $item1) {
                    $model->values[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
