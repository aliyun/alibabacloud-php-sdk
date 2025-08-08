<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationVariables4FailResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $attribute;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $placeHolder;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $variable;
    protected $_name = [
        'attribute' => 'Attribute',
        'defaultValue' => 'DefaultValue',
        'placeHolder' => 'PlaceHolder',
        'region' => 'Region',
        'value' => 'Value',
        'variable' => 'Variable',
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
