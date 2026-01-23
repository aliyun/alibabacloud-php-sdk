<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityRulesResponseBody\pageResult\qualityRuleList\attributeWithValueList\attributeInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityRulesResponseBody\pageResult\qualityRuleList\attributeWithValueList\attributeInfo\valueConfig\defaultValue;

class valueConfig extends Model
{
    /**
     * @var string
     */
    public $dataType;

    /**
     * @var defaultValue
     */
    public $defaultValue;

    /**
     * @var int
     */
    public $length;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $valueEnumList;
    protected $_name = [
        'dataType' => 'DataType',
        'defaultValue' => 'DefaultValue',
        'length' => 'Length',
        'type' => 'Type',
        'valueEnumList' => 'ValueEnumList',
    ];

    public function validate()
    {
        if (null !== $this->defaultValue) {
            $this->defaultValue->validate();
        }
        if (\is_array($this->valueEnumList)) {
            Model::validateArray($this->valueEnumList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = null !== $this->defaultValue ? $this->defaultValue->toArray($noStream) : $this->defaultValue;
        }

        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->valueEnumList) {
            if (\is_array($this->valueEnumList)) {
                $res['ValueEnumList'] = [];
                $n1 = 0;
                foreach ($this->valueEnumList as $item1) {
                    $res['ValueEnumList'][$n1] = $item1;
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

        if (isset($map['DefaultValue'])) {
            $model->defaultValue = defaultValue::fromMap($map['DefaultValue']);
        }

        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['ValueEnumList'])) {
            if (!empty($map['ValueEnumList'])) {
                $model->valueEnumList = [];
                $n1 = 0;
                foreach ($map['ValueEnumList'] as $item1) {
                    $model->valueEnumList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
