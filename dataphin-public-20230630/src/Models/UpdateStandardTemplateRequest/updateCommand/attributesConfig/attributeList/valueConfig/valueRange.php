<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardTemplateRequest\updateCommand\attributesConfig\attributeList\valueConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardTemplateRequest\updateCommand\attributesConfig\attributeList\valueConfig\valueRange\lookupTableReference;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardTemplateRequest\updateCommand\attributesConfig\attributeList\valueConfig\valueRange\minMaxValueConfig;

class valueRange extends Model
{
    /**
     * @var string
     */
    public $dataphinAttributeType;

    /**
     * @var lookupTableReference
     */
    public $lookupTableReference;

    /**
     * @var minMaxValueConfig
     */
    public $minMaxValueConfig;

    /**
     * @var string
     */
    public $valueConstraint;

    /**
     * @var string[]
     */
    public $valueList;
    protected $_name = [
        'dataphinAttributeType' => 'DataphinAttributeType',
        'lookupTableReference' => 'LookupTableReference',
        'minMaxValueConfig' => 'MinMaxValueConfig',
        'valueConstraint' => 'ValueConstraint',
        'valueList' => 'ValueList',
    ];

    public function validate()
    {
        if (null !== $this->lookupTableReference) {
            $this->lookupTableReference->validate();
        }
        if (null !== $this->minMaxValueConfig) {
            $this->minMaxValueConfig->validate();
        }
        if (\is_array($this->valueList)) {
            Model::validateArray($this->valueList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataphinAttributeType) {
            $res['DataphinAttributeType'] = $this->dataphinAttributeType;
        }

        if (null !== $this->lookupTableReference) {
            $res['LookupTableReference'] = null !== $this->lookupTableReference ? $this->lookupTableReference->toArray($noStream) : $this->lookupTableReference;
        }

        if (null !== $this->minMaxValueConfig) {
            $res['MinMaxValueConfig'] = null !== $this->minMaxValueConfig ? $this->minMaxValueConfig->toArray($noStream) : $this->minMaxValueConfig;
        }

        if (null !== $this->valueConstraint) {
            $res['ValueConstraint'] = $this->valueConstraint;
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
        if (isset($map['DataphinAttributeType'])) {
            $model->dataphinAttributeType = $map['DataphinAttributeType'];
        }

        if (isset($map['LookupTableReference'])) {
            $model->lookupTableReference = lookupTableReference::fromMap($map['LookupTableReference']);
        }

        if (isset($map['MinMaxValueConfig'])) {
            $model->minMaxValueConfig = minMaxValueConfig::fromMap($map['MinMaxValueConfig']);
        }

        if (isset($map['ValueConstraint'])) {
            $model->valueConstraint = $map['ValueConstraint'];
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
