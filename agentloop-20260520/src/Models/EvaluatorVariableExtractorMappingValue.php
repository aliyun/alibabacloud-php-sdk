<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class EvaluatorVariableExtractorMappingValue extends Model
{
    /**
     * @var string
     */
    public $originField;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $expression;
    protected $_name = [
        'originField' => 'originField',
        'type' => 'type',
        'expression' => 'expression',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->originField) {
            $res['originField'] = $this->originField;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->expression) {
            $res['expression'] = $this->expression;
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
        if (isset($map['originField'])) {
            $model->originField = $map['originField'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['expression'])) {
            $model->expression = $map['expression'];
        }

        return $model;
    }
}
