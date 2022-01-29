<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemRequest;

use AlibabaCloud\Tea\Model;

class fieldValueList extends Model
{
    /**
     * @description 字段唯一标识
     *
     * @var string
     */
    public $fieldIdentifier;

    /**
     * @description 字段值，写入时使用
     *
     * @var string
     */
    public $value;

    /**
     * @description 工作项的唯一标识
     *
     * @var string
     */
    public $workitemIdentifier;
    protected $_name = [
        'fieldIdentifier'    => 'fieldIdentifier',
        'value'              => 'value',
        'workitemIdentifier' => 'workitemIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldIdentifier) {
            $res['fieldIdentifier'] = $this->fieldIdentifier;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->workitemIdentifier) {
            $res['workitemIdentifier'] = $this->workitemIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fieldValueList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fieldIdentifier'])) {
            $model->fieldIdentifier = $map['fieldIdentifier'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['workitemIdentifier'])) {
            $model->workitemIdentifier = $map['workitemIdentifier'];
        }

        return $model;
    }
}
