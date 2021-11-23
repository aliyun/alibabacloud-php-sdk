<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\requestParameters;

use AlibabaCloud\Tea\Model;

class requestParameter extends Model
{
    /**
     * @var string
     */
    public $apiParameterName;

    /**
     * @var string
     */
    public $arrayItemsType;

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
     * @var int
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
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $maxLength;

    /**
     * @var int
     */
    public $maxValue;

    /**
     * @var int
     */
    public $minLength;

    /**
     * @var int
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
