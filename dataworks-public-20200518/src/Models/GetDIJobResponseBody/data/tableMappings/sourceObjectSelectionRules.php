<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIJobResponseBody\data\tableMappings;

use AlibabaCloud\Tea\Model;

class sourceObjectSelectionRules extends Model
{
    /**
     * @example mysql_table_1
     *
     * @var string
     */
    public $expression;

    /**
     * @example Table
     *
     * @var string
     */
    public $objectType;
    protected $_name = [
        'expression' => 'Expression',
        'objectType' => 'ObjectType',
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
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        return $model;
    }
}
