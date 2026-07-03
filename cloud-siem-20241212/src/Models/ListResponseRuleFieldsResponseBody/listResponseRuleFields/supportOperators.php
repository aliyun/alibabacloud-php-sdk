<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListResponseRuleFieldsResponseBody\listResponseRuleFields;

use AlibabaCloud\Dara\Model;

class supportOperators extends Model
{
    /**
     * @var string
     */
    public $hasRightValue;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $operatorName;

    /**
     * @var string
     */
    public $supportDataType;
    protected $_name = [
        'hasRightValue' => 'HasRightValue',
        'index' => 'Index',
        'operator' => 'Operator',
        'operatorName' => 'OperatorName',
        'supportDataType' => 'SupportDataType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasRightValue) {
            $res['HasRightValue'] = $this->hasRightValue;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }

        if (null !== $this->supportDataType) {
            $res['SupportDataType'] = $this->supportDataType;
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
        if (isset($map['HasRightValue'])) {
            $model->hasRightValue = $map['HasRightValue'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }

        if (isset($map['SupportDataType'])) {
            $model->supportDataType = $map['SupportDataType'];
        }

        return $model;
    }
}
