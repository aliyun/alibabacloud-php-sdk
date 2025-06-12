<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\DecodeDiagnosticMessageResponseBody\decodedDiagnosticMessage;

use AlibabaCloud\Dara\Model;

class authConditions extends Model
{
    /**
     * @var string
     */
    public $conditionKey;

    /**
     * @var string[]
     */
    public $conditionValues;
    protected $_name = [
        'conditionKey' => 'ConditionKey',
        'conditionValues' => 'ConditionValues',
    ];

    public function validate()
    {
        if (\is_array($this->conditionValues)) {
            Model::validateArray($this->conditionValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionKey) {
            $res['ConditionKey'] = $this->conditionKey;
        }

        if (null !== $this->conditionValues) {
            if (\is_array($this->conditionValues)) {
                $res['ConditionValues'] = [];
                $n1 = 0;
                foreach ($this->conditionValues as $item1) {
                    $res['ConditionValues'][$n1++] = $item1;
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
        if (isset($map['ConditionKey'])) {
            $model->conditionKey = $map['ConditionKey'];
        }

        if (isset($map['ConditionValues'])) {
            if (!empty($map['ConditionValues'])) {
                $model->conditionValues = [];
                $n1 = 0;
                foreach ($map['ConditionValues'] as $item1) {
                    $model->conditionValues[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
