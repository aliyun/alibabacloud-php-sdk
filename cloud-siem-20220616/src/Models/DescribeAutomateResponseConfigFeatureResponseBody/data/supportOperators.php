<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigFeatureResponseBody\data;

use AlibabaCloud\Dara\Model;

class supportOperators extends Model
{
    /**
     * @var bool
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
    public $operatorDescCn;

    /**
     * @var string
     */
    public $operatorDescEn;

    /**
     * @var string
     */
    public $operatorName;

    /**
     * @var string
     */
    public $supportDataType;

    /**
     * @var string[]
     */
    public $supportTag;
    protected $_name = [
        'hasRightValue' => 'HasRightValue',
        'index' => 'Index',
        'operator' => 'Operator',
        'operatorDescCn' => 'OperatorDescCn',
        'operatorDescEn' => 'OperatorDescEn',
        'operatorName' => 'OperatorName',
        'supportDataType' => 'SupportDataType',
        'supportTag' => 'SupportTag',
    ];

    public function validate()
    {
        if (\is_array($this->supportTag)) {
            Model::validateArray($this->supportTag);
        }
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

        if (null !== $this->operatorDescCn) {
            $res['OperatorDescCn'] = $this->operatorDescCn;
        }

        if (null !== $this->operatorDescEn) {
            $res['OperatorDescEn'] = $this->operatorDescEn;
        }

        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }

        if (null !== $this->supportDataType) {
            $res['SupportDataType'] = $this->supportDataType;
        }

        if (null !== $this->supportTag) {
            if (\is_array($this->supportTag)) {
                $res['SupportTag'] = [];
                $n1 = 0;
                foreach ($this->supportTag as $item1) {
                    $res['SupportTag'][$n1++] = $item1;
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
        if (isset($map['HasRightValue'])) {
            $model->hasRightValue = $map['HasRightValue'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['OperatorDescCn'])) {
            $model->operatorDescCn = $map['OperatorDescCn'];
        }

        if (isset($map['OperatorDescEn'])) {
            $model->operatorDescEn = $map['OperatorDescEn'];
        }

        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }

        if (isset($map['SupportDataType'])) {
            $model->supportDataType = $map['SupportDataType'];
        }

        if (isset($map['SupportTag'])) {
            if (!empty($map['SupportTag'])) {
                $model->supportTag = [];
                $n1 = 0;
                foreach ($map['SupportTag'] as $item1) {
                    $model->supportTag[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
