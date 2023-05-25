<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\requestParameters;

use AlibabaCloud\Tea\Model;

class requestParameter extends Model
{
    /**
     * @description Indicates whether a subnode exists.
     *
     * @example age
     *
     * @var string
     */
    public $apiParameterName;

    /**
     * @description The security authentication method of the API. Valid values:
     *
     *   **APP**: Only authorized applications can call the API.
     *
     *   **ANONYMOUS**: The API can be anonymously called. In this mode, you must take note of the following rules:
     *
     *   All users who have obtained the API service information can call this API. API Gateway does not authenticate callers and cannot set user-specific throttling policies. If you make this API public, set API-specific throttling policies.
     *   We recommend that you do not make the API whose security authentication method is ANONYMOUS available in Alibaba Cloud Marketplace because API Gateway cannot meter calls on the caller or limit the number of calls on the API. If you want to make the API group to which the API belongs available in Alibaba Cloud Marketplace, we recommend that you move the API to another group, set its type to PRIVATE, or set its security authentication method to APP.
     *
     *   **APPOPENID**: The OpenID Connect account authentication method is used. Only applications authorized by OpenID Connect can call the API. If this method is selected, the OpenIdConnectConfig parameter is required.
     *
     * @example String
     *
     * @var string
     */
    public $arrayItemsType;

    /**
     * @description The configuration items of API requests sent by API Gateway to the backend service.
     *
     * @example 20
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description The OpenID Connect mode. Valid values:
     *
     *   **IDTOKEN**: indicates the APIs that are called by clients to obtain tokens. If you specify this value, the PublicKeyId parameter and the PublicKey parameter are required.
     *   **BUSINESS**: indicates business APIs. Tokens are used to call the business APIs. If you specify this value, the IdTokenParamName parameter is required.
     *
     * @example 20
     *
     * @var string
     */
    public $demoValue;

    /**
     * @description The returned description of the API.
     *
     * @example The simulated headers.
     *
     * @var string
     */
    public $description;

    /**
     * @description The event bus.
     *
     * @example 0
     *
     * @var int
     */
    public $docOrder;

    /**
     * @description The sample response from the backend service.
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $docShow;

    /**
     * @description The name of the parameter.
     *
     * @example boy,girl
     *
     * @var string
     */
    public $enumValue;

    /**
     * @description The regular expression used for parameter validation when **ParameterType** is set to String.
     *
     * @example JSON
     *
     * @var string
     */
    public $jsonScheme;

    /**
     * @description The ID of the VPC.
     *
     * @example HEAD
     *
     * @var string
     */
    public $location;

    /**
     * @description Backend service type
     *
     * @example 123456
     *
     * @var int
     */
    public $maxLength;

    /**
     * @description Specifies whether to enable backend services.
     *
     * @example 123456
     *
     * @var int
     */
    public $maxValue;

    /**
     * @description The name of the backend service parameter.
     *
     * @example 123456
     *
     * @var int
     */
    public $minLength;

    /**
     * @description The name of the system parameter. Valid values: CaClientIp, CaDomain, CaRequestHandleTime, CaAppId, CaRequestId, CaHttpSchema, and CaProxy.
     *
     * @example 123456
     *
     * @var int
     */
    public $minValue;

    /**
     * @description The region where the Function Compute instance is located.
     *
     * @example String
     *
     * @var string
     */
    public $parameterType;

    /**
     * @description Configuration items of EventBridge
     *
     * @example xxx
     *
     * @var string
     */
    public $regularExpression;

    /**
     * @description The UserId parameter is missing from the request.
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
