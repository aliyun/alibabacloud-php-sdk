<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\PatchUserRequest;

use AlibabaCloud\Tea\Model;

class customFields extends Model
{
    /**
     * @example age
     *
     * @var string
     */
    public $fieldName;

    /**
     * @example test_value
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @description 字段操作类型，取值可选范围：
     * - remove：移除。
     * @example replace
     *
     * @var string
     */
    public $operation;

    /**
     * @example replace
     *
     * @deprecated
     *
     * @var string
     */
    public $operator;
    protected $_name = [
        'fieldName'  => 'fieldName',
        'fieldValue' => 'fieldValue',
        'operation'  => 'operation',
        'operator'   => 'operator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldName) {
            $res['fieldName'] = $this->fieldName;
        }
        if (null !== $this->fieldValue) {
            $res['fieldValue'] = $this->fieldValue;
        }
        if (null !== $this->operation) {
            $res['operation'] = $this->operation;
        }
        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customFields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fieldName'])) {
            $model->fieldName = $map['fieldName'];
        }
        if (isset($map['fieldValue'])) {
            $model->fieldValue = $map['fieldValue'];
        }
        if (isset($map['operation'])) {
            $model->operation = $map['operation'];
        }
        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }

        return $model;
    }
}
