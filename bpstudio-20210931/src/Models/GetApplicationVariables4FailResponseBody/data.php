<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationVariables4FailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example instance_name
     *
     * @var string
     */
    public $attribute;

    /**
     * @example cadt-app-01
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @example ${name}
     *
     * @var string
     */
    public $placeHolder;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $region;

    /**
     * @example cadt-app-01
     *
     * @var string
     */
    public $value;

    /**
     * @example ${name}
     *
     * @var string
     */
    public $variable;
    protected $_name = [
        'attribute'    => 'Attribute',
        'defaultValue' => 'DefaultValue',
        'placeHolder'  => 'PlaceHolder',
        'region'       => 'Region',
        'value'        => 'Value',
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
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->placeHolder) {
            $res['PlaceHolder'] = $this->placeHolder;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->variable) {
            $res['Variable'] = $this->variable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attribute'])) {
            $model->attribute = $map['Attribute'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['PlaceHolder'])) {
            $model->placeHolder = $map['PlaceHolder'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Variable'])) {
            $model->variable = $map['Variable'];
        }

        return $model;
    }
}
