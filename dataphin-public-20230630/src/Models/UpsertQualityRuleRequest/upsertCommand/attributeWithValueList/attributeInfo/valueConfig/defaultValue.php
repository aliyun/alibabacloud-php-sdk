<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpsertQualityRuleRequest\upsertCommand\attributeWithValueList\attributeInfo\valueConfig;

use AlibabaCloud\Dara\Model;

class defaultValue extends Model
{
    /**
     * @var bool
     */
    public $includeMaxValue;

    /**
     * @var bool
     */
    public $includeMinValue;

    /**
     * @var string
     */
    public $maxValue;

    /**
     * @var string
     */
    public $minValue;

    /**
     * @var string[]
     */
    public $valueList;
    protected $_name = [
        'includeMaxValue' => 'IncludeMaxValue',
        'includeMinValue' => 'IncludeMinValue',
        'maxValue' => 'MaxValue',
        'minValue' => 'MinValue',
        'valueList' => 'ValueList',
    ];

    public function validate()
    {
        if (\is_array($this->valueList)) {
            Model::validateArray($this->valueList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->includeMaxValue) {
            $res['IncludeMaxValue'] = $this->includeMaxValue;
        }

        if (null !== $this->includeMinValue) {
            $res['IncludeMinValue'] = $this->includeMinValue;
        }

        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }

        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }

        if (null !== $this->valueList) {
            if (\is_array($this->valueList)) {
                $res['ValueList'] = [];
                $n1 = 0;
                foreach ($this->valueList as $item1) {
                    $res['ValueList'][$n1] = $item1;
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
        if (isset($map['IncludeMaxValue'])) {
            $model->includeMaxValue = $map['IncludeMaxValue'];
        }

        if (isset($map['IncludeMinValue'])) {
            $model->includeMinValue = $map['IncludeMinValue'];
        }

        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }

        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }

        if (isset($map['ValueList'])) {
            if (!empty($map['ValueList'])) {
                $model->valueList = [];
                $n1 = 0;
                foreach ($map['ValueList'] as $item1) {
                    $model->valueList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
