<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest\tableMappings;

use AlibabaCloud\Dara\Model;

class sourceObjectSelectionRules extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $expressionType;

    /**
     * @var string
     */
    public $objectType;
    protected $_name = [
        'action' => 'Action',
        'expression' => 'Expression',
        'expressionType' => 'ExpressionType',
        'objectType' => 'ObjectType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }

        if (null !== $this->expressionType) {
            $res['ExpressionType'] = $this->expressionType;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
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
            $model->action = $map['Action'];
        }

        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }

        if (isset($map['ExpressionType'])) {
            $model->expressionType = $map['ExpressionType'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        return $model;
    }
}
