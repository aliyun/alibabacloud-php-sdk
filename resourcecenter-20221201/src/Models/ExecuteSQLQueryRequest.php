<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Tea\Model;

class ExecuteSQLQueryRequest extends Model
{
    /**
     * @description The SQL statement to be executed.
     *
     * For more information about the SQL syntax, see [Basic SQL syntax](~~2539395~~).
     * @example SELECT * FROM resources LIMIT 100;
     *
     * @var string
     */
    public $expression;

    /**
     * @description The search scope.
     *
     * For information about how to obtain the ID of a resource group, see [ListResourceGroups](~~158855~~).
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'expression' => 'Expression',
        'scope'      => 'Scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteSQLQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
