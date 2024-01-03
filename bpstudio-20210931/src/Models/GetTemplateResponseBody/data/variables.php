<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetTemplateResponseBody\data;

use AlibabaCloud\Tea\Model;

class variables extends Model
{
    /**
     * @description The name of the variable.
     *
     * @example instance_name
     *
     * @var string
     */
    public $attribute;

    /**
     * @description The type of the variable.
     *
     * @example String
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The default value of the variable.
     *
     * @example cadt-app-01
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description The value of the variable.
     *
     * @example ${name}
     *
     * @var string
     */
    public $variable;
    protected $_name = [
        'attribute'    => 'Attribute',
        'dataType'     => 'DataType',
        'defaultValue' => 'DefaultValue',
        'variable'     => 'Variable',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->variable) {
            $res['Variable'] = $this->variable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return variables
     */
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
        if (isset($map['Variable'])) {
            $model->variable = $map['Variable'];
        }

        return $model;
    }
}
