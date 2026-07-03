<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListResponseRuleFieldsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListResponseRuleFieldsResponseBody\listResponseRuleFields\rightValue;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListResponseRuleFieldsResponseBody\listResponseRuleFields\supportOperators;

class listResponseRuleFields extends Model
{
    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $fieldNormalization;

    /**
     * @var rightValue[]
     */
    public $rightValue;

    /**
     * @var supportOperators[]
     */
    public $supportOperators;
    protected $_name = [
        'dataType' => 'DataType',
        'field' => 'Field',
        'fieldName' => 'FieldName',
        'fieldNormalization' => 'FieldNormalization',
        'rightValue' => 'RightValue',
        'supportOperators' => 'SupportOperators',
    ];

    public function validate()
    {
        if (\is_array($this->rightValue)) {
            Model::validateArray($this->rightValue);
        }
        if (\is_array($this->supportOperators)) {
            Model::validateArray($this->supportOperators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }

        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        if (null !== $this->fieldNormalization) {
            $res['FieldNormalization'] = $this->fieldNormalization;
        }

        if (null !== $this->rightValue) {
            if (\is_array($this->rightValue)) {
                $res['RightValue'] = [];
                $n1 = 0;
                foreach ($this->rightValue as $item1) {
                    $res['RightValue'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->supportOperators) {
            if (\is_array($this->supportOperators)) {
                $res['SupportOperators'] = [];
                $n1 = 0;
                foreach ($this->supportOperators as $item1) {
                    $res['SupportOperators'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }

        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        if (isset($map['FieldNormalization'])) {
            $model->fieldNormalization = $map['FieldNormalization'];
        }

        if (isset($map['RightValue'])) {
            if (!empty($map['RightValue'])) {
                $model->rightValue = [];
                $n1 = 0;
                foreach ($map['RightValue'] as $item1) {
                    $model->rightValue[$n1] = rightValue::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SupportOperators'])) {
            if (!empty($map['SupportOperators'])) {
                $model->supportOperators = [];
                $n1 = 0;
                foreach ($map['SupportOperators'] as $item1) {
                    $model->supportOperators[$n1] = supportOperators::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
