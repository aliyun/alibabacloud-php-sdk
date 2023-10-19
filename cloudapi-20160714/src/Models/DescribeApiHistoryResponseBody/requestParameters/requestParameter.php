<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\requestParameters;

use AlibabaCloud\Tea\Model;

class requestParameter extends Model
{
    /**
     * @description The name of the API parameter.
     *
     * @example age
     *
     * @var string
     */
    public $apiParameterName;

    /**
     * @description The type of the array element.
     *
     * @example String
     *
     * @var string
     */
    public $arrayItemsType;

    /**
     * @description Default value
     *
     * @example 20
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description Examples
     *
     * @example 20
     *
     * @var string
     */
    public $demoValue;

    /**
     * @description The description.
     *
     * @example modidyTest
     *
     * @var string
     */
    public $description;

    /**
     * @description The order in the document.
     *
     * @example 0
     *
     * @var int
     */
    public $docOrder;

    /**
     * @description Specifies whether the document is public. Valid values: PUBLIC and PRIVATE.
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $docShow;

    /**
     * @description The hash values that can be entered when ParameterType is set to Int, Long, Float, Double, or String. Separate different values with commas (,), such as 1,2,3,4,9 or A,B,C,E,F.
     *
     * @example boy,girl
     *
     * @var string
     */
    public $enumValue;

    /**
     * @description JSON scheme
     *
     * @example {}
     *
     * @var string
     */
    public $jsonScheme;

    /**
     * @description The parameter location. Valid values: BODY, HEAD, QUERY, and PATH.
     *
     * @example HEAD
     *
     * @var string
     */
    public $location;

    /**
     * @description The maximum parameter length when ParameterType is set to String.
     *
     * @example 123456
     *
     * @var int
     */
    public $maxLength;

    /**
     * @description The maximum parameter value when ParameterType is set to Int, Long, Float, or Double.
     *
     * @example 123456
     *
     * @var int
     */
    public $maxValue;

    /**
     * @description The minimum parameter length when ParameterType is set to String.
     *
     * @example 123456
     *
     * @var int
     */
    public $minLength;

    /**
     * @description The minimum parameter value when ParameterType is set to Int, Long, Float, or Double.
     *
     * @example 123456
     *
     * @var int
     */
    public $minValue;

    /**
     * @description The type of a request parameter. Valid values: String, Int, Long, Float, Double, and Boolean.
     *
     * @example String
     *
     * @var string
     */
    public $parameterType;

    /**
     * @description The regular expression used for parameter validation when ParameterType is set to String.
     *
     * @example xxx
     *
     * @var string
     */
    public $regularExpression;

    /**
     * @description Indicates whether the parameter is required. Valid values: REQUIRED and OPTIONAL.
     *
     * @example OPTIONAL
     *
     * @var string
     */
    public $required;
    protected $_name = [
        'apiParameterName'  => 'ApiParameterName',
        'arrayItemsType'    => 'ArrayItemsType',
        'defaultValue'      => 'DefaultValue',
        'demoValue'         => 'DemoValue',
        'description'       => 'Description',
        'docOrder'          => 'DocOrder',
        'docShow'           => 'DocShow',
        'enumValue'         => 'EnumValue',
        'jsonScheme'        => 'JsonScheme',
        'location'          => 'Location',
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
        if (null !== $this->arrayItemsType) {
            $res['ArrayItemsType'] = $this->arrayItemsType;
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
        if (null !== $this->location) {
            $res['Location'] = $this->location;
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
     * @return requestParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiParameterName'])) {
            $model->apiParameterName = $map['ApiParameterName'];
        }
        if (isset($map['ArrayItemsType'])) {
            $model->arrayItemsType = $map['ArrayItemsType'];
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
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
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
