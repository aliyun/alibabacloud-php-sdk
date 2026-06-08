<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProcessInstanceResponseBody\processInstance\approvalProcessDefinition;

use AlibabaCloud\Dara\Model;

class ruleConditions extends Model
{
    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'expression' => 'Expression',
        'scope' => 'Scope',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
