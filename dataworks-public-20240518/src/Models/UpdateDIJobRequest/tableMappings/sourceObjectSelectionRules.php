<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIJobRequest\tableMappings;

use AlibabaCloud\Tea\Model;

class sourceObjectSelectionRules extends Model
{
    /**
     * @example Include
     *
     * @var string
     */
    public $action;

    /**
     * @example mysql_table_1
     *
     * @var string
     */
    public $expression;

    /**
     * @example Exact
     *
     * @var string
     */
    public $expressionType;

    /**
     * @example Table
     *
     * @var string
     */
    public $objectType;
    protected $_name = [
        'action'         => 'Action',
        'expression'     => 'Expression',
        'expressionType' => 'ExpressionType',
        'objectType'     => 'ObjectType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return sourceObjectSelectionRules
     */
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
