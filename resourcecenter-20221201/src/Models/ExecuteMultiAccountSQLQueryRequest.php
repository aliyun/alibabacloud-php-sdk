<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Tea\Model;

class ExecuteMultiAccountSQLQueryRequest extends Model
{
    /**
     * @description The SQL statement to be executed.
     *
     * This parameter is required.
     * @example SELECT * FROM resources LIMIT 100;
     *
     * @var string
     */
    public $expression;

    /**
     * @description The search scope. The value of this parameter can be one of the following items:
     *
     *   ID of a resource directory: Resources within the management account and all members of the resource directory are searched.
     *   ID of the Root folder: Resources within all members in the Root folder and the subfolders of the Root folder are searched.
     *   ID of a folder: Resources within all members in the folder are searched.
     *   ID of a member: Resources within the member are searched.
     *   ID of a member/ID of a Resource group: Resources within the member in the resource group are searched.
     *
     * This parameter is required.
     * @example rd-r4****
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
     * @return ExecuteMultiAccountSQLQueryRequest
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
