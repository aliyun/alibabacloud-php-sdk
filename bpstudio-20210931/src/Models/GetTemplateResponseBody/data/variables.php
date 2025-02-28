<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetTemplateResponseBody\data;

use AlibabaCloud\Dara\Model;

class variables extends Model
{
    /**
     * @var string
     */
    public $attribute;
    /**
     * @var string
     */
    public $dataType;
    /**
     * @var string
     */
    public $defaultValue;
    /**
     * @var string
     */
    public $options;
    /**
     * @var string
     */
    public $variable;
    protected $_name = [
        'attribute'    => 'Attribute',
        'dataType'     => 'DataType',
        'defaultValue' => 'DefaultValue',
        'options'      => 'Options',
        'variable'     => 'Variable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['Attribute'] = $this->attribute;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->variable) {
            $res['Variable'] = $this->variable;
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
        if (isset($map['Attribute'])) {
            $model->attribute = $map['Attribute'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['Variable'])) {
            $model->variable = $map['Variable'];
        }

        return $model;
    }
}
