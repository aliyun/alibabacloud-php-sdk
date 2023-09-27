<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribePurchasedApiResponseBody\requestQueries;

use AlibabaCloud\Tea\Model;

class requestParam extends Model
{
    /**
     * @var string
     */
    public $apiParameterName;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $demoValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $docOrder;

    /**
     * @var string
     */
    public $docShow;

    /**
     * @var string
     */
    public $enumValue;

    /**
     * @var string
     */
    public $jsonScheme;

    /**
     * @var int
     */
    public $maxLength;

    /**
     * @var string
     */
    public $maxValue;

    /**
     * @var int
     */
    public $minLength;

    /**
     * @var string
     */
    public $minValue;

    /**
     * @var string
     */
    public $parameterType;

    /**
     * @var string
     */
    public $regularExpression;

    /**
     * @var string
     */
    public $required;
    protected $_name = [
        'apiParameterName'  => 'ApiParameterName',
        'defaultValue'      => 'DefaultValue',
        'demoValue'         => 'DemoValue',
        'description'       => 'Description',
        'docOrder'          => 'DocOrder',
        'docShow'           => 'DocShow',
        'enumValue'         => 'EnumValue',
        'jsonScheme'        => 'JsonScheme',
        'maxLength'         => 'MaxLength',
        'maxValue'          => 'MaxValue',
        'minLength'         => 'MinLength',
        'minValue'          => 'MinValue',
        'parameterType'     => 'ParameterType',
        'regularExpression' => 'RegularExpression',
        'required'          => 'Required',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiParameterName) {
            $res['ApiParameterName'] = $this->apiParameterName;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->demoValue) {
            $res['DemoValue'] = $this->demoValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->docOrder) {
            $res['DocOrder'] = $this->docOrder;
        }
        if (null !== $this->docShow) {
            $res['DocShow'] = $this->docShow;
        }
        if (null !== $this->enumValue) {
            $res['EnumValue'] = $this->enumValue;
        }
        if (null !== $this->jsonScheme) {
            $res['JsonScheme'] = $this->jsonScheme;
        }
        if (null !== $this->maxLength) {
            $res['MaxLength'] = $this->maxLength;
        }
        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }
        if (null !== $this->minLength) {
            $res['MinLength'] = $this->minLength;
        }
        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }
        if (null !== $this->parameterType) {
            $res['ParameterType'] = $this->parameterType;
        }
        if (null !== $this->regularExpression) {
            $res['RegularExpression'] = $this->regularExpression;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiParameterName'])) {
            $model->apiParameterName = $map['ApiParameterName'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['DemoValue'])) {
            $model->demoValue = $map['DemoValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DocOrder'])) {
            $model->docOrder = $map['DocOrder'];
        }
        if (isset($map['DocShow'])) {
            $model->docShow = $map['DocShow'];
        }
        if (isset($map['EnumValue'])) {
            $model->enumValue = $map['EnumValue'];
        }
        if (isset($map['JsonScheme'])) {
            $model->jsonScheme = $map['JsonScheme'];
        }
        if (isset($map['MaxLength'])) {
            $model->maxLength = $map['MaxLength'];
        }
        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }
        if (isset($map['MinLength'])) {
            $model->minLength = $map['MinLength'];
        }
        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }
        if (isset($map['ParameterType'])) {
            $model->parameterType = $map['ParameterType'];
        }
        if (isset($map['RegularExpression'])) {
            $model->regularExpression = $map['RegularExpression'];
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        return $model;
    }
}
