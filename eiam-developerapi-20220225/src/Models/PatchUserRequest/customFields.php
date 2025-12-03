<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\PatchUserRequest;

use AlibabaCloud\Dara\Model;

class customFields extends Model
{
    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $fieldValue;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $operator;
    protected $_name = [
        'fieldName' => 'fieldName',
        'fieldValue' => 'fieldValue',
        'operation' => 'operation',
        'operator' => 'operator',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
