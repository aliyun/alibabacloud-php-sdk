<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Tea\Model;

class FieldCondition extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $nestFieldPath;

    /**
     * @var int[]
     */
    public $nestFieldValue;

    /**
     * @example =
     *
     * @var string
     */
    public $operateType;

    /**
     * @example yyy
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'fieldName'      => 'fieldName',
        'nestFieldPath'  => 'nestFieldPath',
        'nestFieldValue' => 'nestFieldValue',
        'operateType'    => 'operateType',
        'value'          => 'value',
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
        if (null !== $this->nestFieldPath) {
            $res['nestFieldPath'] = $this->nestFieldPath;
        }
        if (null !== $this->nestFieldValue) {
            $res['nestFieldValue'] = $this->nestFieldValue;
        }
        if (null !== $this->operateType) {
            $res['operateType'] = $this->operateType;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FieldCondition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fieldName'])) {
            $model->fieldName = $map['fieldName'];
        }
        if (isset($map['nestFieldPath'])) {
            $model->nestFieldPath = $map['nestFieldPath'];
        }
        if (isset($map['nestFieldValue'])) {
            if (!empty($map['nestFieldValue'])) {
                $model->nestFieldValue = $map['nestFieldValue'];
            }
        }
        if (isset($map['operateType'])) {
            $model->operateType = $map['operateType'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
