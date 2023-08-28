<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskRequest;

use AlibabaCloud\Tea\Model;

class contentFieldList extends Model
{
    /**
     * @description fieldKey
     *
     * @example fieldKey
     *
     * @var string
     */
    public $fieldKey;

    /**
     * @description fieldValue
     *
     * @example fieldValue
     *
     * @var string
     */
    public $fieldValue;
    protected $_name = [
        'fieldKey'   => 'fieldKey',
        'fieldValue' => 'fieldValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldKey) {
            $res['fieldKey'] = $this->fieldKey;
        }
        if (null !== $this->fieldValue) {
            $res['fieldValue'] = $this->fieldValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contentFieldList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fieldKey'])) {
            $model->fieldKey = $map['fieldKey'];
        }
        if (isset($map['fieldValue'])) {
            $model->fieldValue = $map['fieldValue'];
        }

        return $model;
    }
}
