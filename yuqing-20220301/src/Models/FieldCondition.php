<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Dara\Model;

class FieldCondition extends Model
{
    /**
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
     * @var string
     */
    public $operateType;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'fieldName' => 'fieldName',
        'nestFieldPath' => 'nestFieldPath',
        'nestFieldValue' => 'nestFieldValue',
        'operateType' => 'operateType',
        'value' => 'value',
    ];

    public function validate()
    {
        if (\is_array($this->nestFieldValue)) {
            Model::validateArray($this->nestFieldValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldName) {
            $res['fieldName'] = $this->fieldName;
        }

        if (null !== $this->nestFieldPath) {
            $res['nestFieldPath'] = $this->nestFieldPath;
        }

        if (null !== $this->nestFieldValue) {
            if (\is_array($this->nestFieldValue)) {
                $res['nestFieldValue'] = [];
                $n1 = 0;
                foreach ($this->nestFieldValue as $item1) {
                    $res['nestFieldValue'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->operateType) {
            $res['operateType'] = $this->operateType;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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

        if (isset($map['nestFieldPath'])) {
            $model->nestFieldPath = $map['nestFieldPath'];
        }

        if (isset($map['nestFieldValue'])) {
            if (!empty($map['nestFieldValue'])) {
                $model->nestFieldValue = [];
                $n1 = 0;
                foreach ($map['nestFieldValue'] as $item1) {
                    $model->nestFieldValue[$n1] = $item1;
                    ++$n1;
                }
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
