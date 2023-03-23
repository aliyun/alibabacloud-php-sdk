<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyApiConfigurationRequest extends Model
{
    /**
     * @description If the **AuthType** parameter is set to **APP**, you must include this parameter to specify the signature algorithm. If you do not specify a value, HmacSHA256 is used by default. Valid values:
     *
     *   HmacSHA256
     *   HmacSHA1,HmacSHA256
     *
     * @example HmacSHA256
     *
     * @var string
     */
    public $allowSignatureMethod;

    /**
     * @description The ID of the API.
     *
     * @example baacc592e63a4cb6a41920d9d3f91f38
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The name of the API.
     *
     * @example testModifyApiName
     *
     * @var string
     */
    public $apiName;

    /**
     * @description If the **AuthType** parameter is set to **APP**, the valid values are:
     *
     *   **DEFAULT**: The default value that is used if no other values are passed. This value indicates that the settings of the group are used.
     *   **DISABLE**: The authentication is disabled.
     *   **HEADER**: AppCode can be placed in the Header parameter for authentication.
     *   **HEADER_QUERY**: AppCode can be placed in the Header or Query parameter for authentication.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $appCodeAuthType;

    /**
     * @description API安全认证类型，目前可以取值：
     *
     * - **APP**：只允许已授权的APP调用
     * - **ANONYMOUS**：允许匿名调用，设置为允许匿名调用需要注意：
     * - AppCodeAuthType的值不会生效。
     * @example APP
     *
     * @var string
     */
    public $authType;

    /**
     * @description The name of the backend service. This parameter takes effect only when the UseBackendService parameter is set to TRUE.
     *
     * @example testBackendService
     *
     * @var string
     */
    public $backendName;

    /**
     * @description This parameter takes effect only when the **RequestMode** parameter is set to **MAPPING**.
     *
     * The format in which data is transmitted to the server for POST and PUT requests. Valid values: **FORM** and **STREAM**. FORM indicates that data is transmitted in the key-value pair format. STREAM indicates that data is transmitted as byte streams.
     * @example STREAM
     *
     * @var string
     */
    public $bodyFormat;

    /**
     * @description The body model.
     *
     * @example https://apigateway.aliyun.com/models/f4e7333c****40dcbaf7c9da553ccd8d/3ab61f775b****d4bc35e993****87aa8
     *
     * @var string
     */
    public $bodyModel;

    /**
     * @description The ContentType configuration of the backend request.
     *
     *   DEFAULT: the default configuration in API Gateway
     *   CUSTOM: a custom configuration
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $contentTypeCategory;

    /**
     * @description The value of the ContentType header when the ServiceProtocol parameter is set to HTTP and the ContentTypeCatagory parameter is set to DEFAULT or CUSTOM.
     *
     * @example application/x-www-form-urlencoded; charset=UTF-8
     *
     * @var string
     */
    public $contentTypeValue;

    /**
     * @description The description of the API.
     *
     * @example TestModifyDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description *   Specifies whether to call the API only in an internal network. If the **DisableInternet** parameter is set to **true**, the API can be called only in an internal network.
     *   If the **DisableInternet** parameter is set to **false**, the API can be called over the Internet and in an internal network.
     *
     * @example false
     *
     * @var bool
     */
    public $disableInternet;

    /**
     * @description The sample error codes returned by the backend service.
     *
     * For more information, see [ErrorCodeSample](~~44392~~).
     * @example [{"Code":"400","Message":"Missing the userId","Description":"param invalid"}]
     *
     * @var string
     */
    public $errorCodeSamples;

    /**
     * @description The sample error response from the backend service. This value is used only to generate documents. It does not affect the returned result.
     *
     * @example {"errorCode":"fail","errorMessage":"param invalid"}
     *
     * @var string
     */
    public $failResultSample;

    /**
     * @description *   Specifies whether to forcibly check X-Ca-Nonce. If the **ForceNonceCheck** parameter is set to **true**, X-Ca-Nonce is forcibly checked. X-Ca-Nonce is the unique identifier of the request and is generally identified by UUID. After receiving this parameter, API Gateway verifies the validity of this parameter. The same value can be used only once within 15 minutes. This helps prevent replay attacks.
     *   If the **ForceNonceCheck** parameter is set to **false**, X-Ca-Nonce is not checked. If you do not modify this parameter when you modify an API, the original value is used.
     *
     * @example true
     *
     * @var bool
     */
    public $forceNonceCheck;

    /**
     * @description The Function Compute configuration.
     *
     * @example {"FcType":"FCEvent","FcRegionId":"cn-hangzhou","RoleArn":"acs:ram::xxxxxxxx:role/aliyunserviceroleforapigateway","selectServiceName":"fcTest","FunctionName":"funcTest","selectFunctionName":"funcTest","Qualifier":"LATEST","Path":"","FcBaseUrl":"","ServiceName":"fcTest"}
     *
     * @var string
     */
    public $functionComputeConfig;

    /**
     * @description The HTTP configuration.
     *
     * @example {"serviceAddress":"http://test.api.com","servicePath":"/test/api","serviceHttpMethod":"GET"}
     *
     * @var string
     */
    public $httpConfig;

    /**
     * @description The Mock configuration.
     *
     * @example {"MockResult":"test","MockHeaders":[{"HeaderName":"testHeader","HeaderValue":"testHeader"}],"MockStatusCode":"400"}
     *
     * @var string
     */
    public $mockConfig;

    /**
     * @description The name of the model.
     *
     * @example Test
     *
     * @var string
     */
    public $modelName;

    /**
     * @description The OSS configuration.
     *
     * @example {"OssRegionId":"cn-hangzhou","Key":"/test.html","BucketName":"test-api-oss","Action":"GetObject"}
     *
     * @var string
     */
    public $ossConfig;

    /**
     * @description The description of the request body.
     *
     * @example The description of the request body
     *
     * @var string
     */
    public $postBodyDescription;

    /**
     * @description The HTTP method used to make the request. Valid values: GET, POST, DELETE, PUT, HEADER, TRACE, PATCH, CONNECT, and OPTIONS.
     *
     * @example GET
     *
     * @var string
     */
    public $requestHttpMethod;

    /**
     * @description The request mode. Valid values:
     *
     *   MAPPING: Parameters are mapped. Unknown parameters are filtered out.
     *   PASSTHROUGH: Parameters are passed through.
     *   MAPPING_PASSTHROUGH: Parameters are mapped. Unknown parameters are passed through.
     *
     * @example MAPPING
     *
     * @var string
     */
    public $requestMode;

    /**
     * @description The parameters of API requests sent by the consumer to API Gateway.
     *
     * For more information, see [RequestParameter](~~43986~~).
     * @example [{"ParameterLocation":{"name":"Head","orderNumber":2},"ParameterType":"String","Required":"OPTIONAL","isHide":false,"ApiParameterName":"header1","DefaultValue":"123124","Location":"Head"},{"ParameterLocation":{"name":"Head","orderNumber":2},"ParameterType":"String","Required":"REQUIRED","isHide":false,"ApiParameterName":"header2","DefaultValue":"","Location":"Head"},{"ParameterLocation":{"name":"Query","orderNumber":3},"ParameterType":"String","Required":"OPTIONAL","isHide":false,"ApiParameterName":"query1","DefaultValue":"1245","Location":"Query"},{"ApiParameterName":"CaClientIp","ParameterLocation":{"name":"Query","orderNumber":0},"Location":"Query","ParameterType":"String","Required":"REQUIRED","Description":"ClientIP"},{"ApiParameterName":"testConstant","ParameterLocation":{"name":"Head","orderNumber":0},"Location":"Head","ParameterType":"String","Required":"REQUIRED","DefaultValue":"111"}]
     *
     * @var string
     */
    public $requestParameters;

    /**
     * @description The path of the API request. If the complete API URL is `http://api.a.com:8080/object/add?key1=value1&key2=value2`, the path of the API request is `/object/add`.
     *
     * @example /test/api
     *
     * @var string
     */
    public $requestPath;

    /**
     * @description The protocol type supported by the API. Valid values: HTTP and HTTPS. Separate multiple values with commas (,), such as "HTTP,HTTPS".
     *
     * @example HTTP
     *
     * @var string
     */
    public $requestProtocol;

    /**
     * @description The sample response from the backend service. This value is used only to generate documents. It does not affect the returned result.
     *
     * @example {\n  \"status\": 0,\n  \"data\": {\n    \"count\": 1,\n    \"list\": [\n      \"352\"\n    ]\n  },\n  \"message\": \"success\"\n}
     *
     * @var string
     */
    public $resultSample;

    /**
     * @description The format of the response from the backend service. Valid values: JSON, TEXT, BINARY, XML, and HTML. This value is used only to generate documents. It does not affect the returned result.
     *
     * @example JSON
     *
     * @var string
     */
    public $resultType;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The parameters of API requests sent by API Gateway to the backend service.
     *
     * For more information, see [ServiceParameter](~~43988~~).
     * @example [{"ServiceParameterName":"header1","Location":"Head","Type":"String","ParameterCatalog":"REQUEST"},{"ServiceParameterName":"header2","Location":"Query","Type":"String","ParameterCatalog":"REQUEST"},{"ServiceParameterName":"query1","Location":"Head","Type":"String","ParameterCatalog":"REQUEST"},{"ServiceParameterName":"ipp","Location":"Query","Type":"String","ParameterCatalog":"SYSTEM"},{"ServiceParameterName":"testConstant","Location":"Head","Type":"String","ParameterCatalog":"CONSTANT"}]
     *
     * @var string
     */
    public $serviceParameters;

    /**
     * @description The mappings between parameters of requests sent by the consumer to API Gateway and parameters of requests sent by API Gateway to the backend service.
     *
     * For more information, see [ServiceParameterMap](~~43989~~).
     * @example [{"ServiceParameterName":"header1","RequestParameterName":"header1"},{"ServiceParameterName":"header2","RequestParameterName":"header2"},{"ServiceParameterName":"query1","RequestParameterName":"query1"},{"ServiceParameterName":"ipp","RequestParameterName":"CaClientIp"},{"ServiceParameterName":"testConstant","RequestParameterName":"testConstant"}]
     *
     * @var string
     */
    public $serviceParametersMap;

    /**
     * @description The protocol that is used to access backend services. Valid values:
     *
     *   Http: for backend services that use HTTP or HTTPS
     *   Vpc: for backend services that use VPC
     *   FC: for Function Compute
     *   OSS: for Object Storage Service
     *   Mock: for backend services that use the Mock mode
     *   EventBridge: for EventBridge
     *
     * You must specify the config value for the corresponding backend service.
     * @example HTTP
     *
     * @var string
     */
    public $serviceProtocol;

    /**
     * @description The timeout period of the backend service. Unit: milliseconds.
     *
     * @example 10000
     *
     * @var int
     */
    public $serviceTimeout;

    /**
     * @description Specifies whether to use the information about the created backend service. Valid values:
     *
     *   TRUE: uses the information about the created backend service.
     *   FALSE: uses the information about the custom backend service.
     *
     * @example TRUE
     *
     * @var bool
     */
    public $useBackendService;

    /**
     * @description Specifies whether to make the API public. Valid values:
     *
     *   **PUBLIC:** The API is public. If this parameter is set to PUBLIC, the API is displayed on the APIs page for all users after the API is published to the production environment.
     *   **PRIVATE:** The API is private. Private APIs are not displayed in the Alibaba Cloud Marketplace after the API group to which they belong is made available.
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $visibility;

    /**
     * @description The VPC configuration.
     *
     * @example {"VpcId":"vpc-xxxxxxx","Name":"testVpc","InstanceId":"i-p0ssssss","Port":80,"servicePath":"/test/vpc","serviceHttpMethod":"HEAD"}
     *
     * @var string
     */
    public $vpcConfig;
    protected $_name = [
        'allowSignatureMethod'  => 'AllowSignatureMethod',
        'apiId'                 => 'ApiId',
        'apiName'               => 'ApiName',
        'appCodeAuthType'       => 'AppCodeAuthType',
        'authType'              => 'AuthType',
        'backendName'           => 'BackendName',
        'bodyFormat'            => 'BodyFormat',
        'bodyModel'             => 'BodyModel',
        'contentTypeCategory'   => 'ContentTypeCategory',
        'contentTypeValue'      => 'ContentTypeValue',
        'description'           => 'Description',
        'disableInternet'       => 'DisableInternet',
        'errorCodeSamples'      => 'ErrorCodeSamples',
        'failResultSample'      => 'FailResultSample',
        'forceNonceCheck'       => 'ForceNonceCheck',
        'functionComputeConfig' => 'FunctionComputeConfig',
        'httpConfig'            => 'HttpConfig',
        'mockConfig'            => 'MockConfig',
        'modelName'             => 'ModelName',
        'ossConfig'             => 'OssConfig',
        'postBodyDescription'   => 'PostBodyDescription',
        'requestHttpMethod'     => 'RequestHttpMethod',
        'requestMode'           => 'RequestMode',
        'requestParameters'     => 'RequestParameters',
        'requestPath'           => 'RequestPath',
        'requestProtocol'       => 'RequestProtocol',
        'resultSample'          => 'ResultSample',
        'resultType'            => 'ResultType',
        'securityToken'         => 'SecurityToken',
        'serviceParameters'     => 'ServiceParameters',
        'serviceParametersMap'  => 'ServiceParametersMap',
        'serviceProtocol'       => 'ServiceProtocol',
        'serviceTimeout'        => 'ServiceTimeout',
        'useBackendService'     => 'UseBackendService',
        'visibility'            => 'Visibility',
        'vpcConfig'             => 'VpcConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowSignatureMethod) {
            $res['AllowSignatureMethod'] = $this->allowSignatureMethod;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->appCodeAuthType) {
            $res['AppCodeAuthType'] = $this->appCodeAuthType;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->backendName) {
            $res['BackendName'] = $this->backendName;
        }
        if (null !== $this->bodyFormat) {
            $res['BodyFormat'] = $this->bodyFormat;
        }
        if (null !== $this->bodyModel) {
            $res['BodyModel'] = $this->bodyModel;
        }
        if (null !== $this->contentTypeCategory) {
            $res['ContentTypeCategory'] = $this->contentTypeCategory;
        }
        if (null !== $this->contentTypeValue) {
            $res['ContentTypeValue'] = $this->contentTypeValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->disableInternet) {
            $res['DisableInternet'] = $this->disableInternet;
        }
        if (null !== $this->errorCodeSamples) {
            $res['ErrorCodeSamples'] = $this->errorCodeSamples;
        }
        if (null !== $this->failResultSample) {
            $res['FailResultSample'] = $this->failResultSample;
        }
        if (null !== $this->forceNonceCheck) {
            $res['ForceNonceCheck'] = $this->forceNonceCheck;
        }
        if (null !== $this->functionComputeConfig) {
            $res['FunctionComputeConfig'] = $this->functionComputeConfig;
        }
        if (null !== $this->httpConfig) {
            $res['HttpConfig'] = $this->httpConfig;
        }
        if (null !== $this->mockConfig) {
            $res['MockConfig'] = $this->mockConfig;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->ossConfig) {
            $res['OssConfig'] = $this->ossConfig;
        }
        if (null !== $this->postBodyDescription) {
            $res['PostBodyDescription'] = $this->postBodyDescription;
        }
        if (null !== $this->requestHttpMethod) {
            $res['RequestHttpMethod'] = $this->requestHttpMethod;
        }
        if (null !== $this->requestMode) {
            $res['RequestMode'] = $this->requestMode;
        }
        if (null !== $this->requestParameters) {
            $res['RequestParameters'] = $this->requestParameters;
        }
        if (null !== $this->requestPath) {
            $res['RequestPath'] = $this->requestPath;
        }
        if (null !== $this->requestProtocol) {
            $res['RequestProtocol'] = $this->requestProtocol;
        }
        if (null !== $this->resultSample) {
            $res['ResultSample'] = $this->resultSample;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = $this->serviceParameters;
        }
        if (null !== $this->serviceParametersMap) {
            $res['ServiceParametersMap'] = $this->serviceParametersMap;
        }
        if (null !== $this->serviceProtocol) {
            $res['ServiceProtocol'] = $this->serviceProtocol;
        }
        if (null !== $this->serviceTimeout) {
            $res['ServiceTimeout'] = $this->serviceTimeout;
        }
        if (null !== $this->useBackendService) {
            $res['UseBackendService'] = $this->useBackendService;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->vpcConfig) {
            $res['VpcConfig'] = $this->vpcConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApiConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowSignatureMethod'])) {
            $model->allowSignatureMethod = $map['AllowSignatureMethod'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['AppCodeAuthType'])) {
            $model->appCodeAuthType = $map['AppCodeAuthType'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['BackendName'])) {
            $model->backendName = $map['BackendName'];
        }
        if (isset($map['BodyFormat'])) {
            $model->bodyFormat = $map['BodyFormat'];
        }
        if (isset($map['BodyModel'])) {
            $model->bodyModel = $map['BodyModel'];
        }
        if (isset($map['ContentTypeCategory'])) {
            $model->contentTypeCategory = $map['ContentTypeCategory'];
        }
        if (isset($map['ContentTypeValue'])) {
            $model->contentTypeValue = $map['ContentTypeValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisableInternet'])) {
            $model->disableInternet = $map['DisableInternet'];
        }
        if (isset($map['ErrorCodeSamples'])) {
            $model->errorCodeSamples = $map['ErrorCodeSamples'];
        }
        if (isset($map['FailResultSample'])) {
            $model->failResultSample = $map['FailResultSample'];
        }
        if (isset($map['ForceNonceCheck'])) {
            $model->forceNonceCheck = $map['ForceNonceCheck'];
        }
        if (isset($map['FunctionComputeConfig'])) {
            $model->functionComputeConfig = $map['FunctionComputeConfig'];
        }
        if (isset($map['HttpConfig'])) {
            $model->httpConfig = $map['HttpConfig'];
        }
        if (isset($map['MockConfig'])) {
            $model->mockConfig = $map['MockConfig'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['OssConfig'])) {
            $model->ossConfig = $map['OssConfig'];
        }
        if (isset($map['PostBodyDescription'])) {
            $model->postBodyDescription = $map['PostBodyDescription'];
        }
        if (isset($map['RequestHttpMethod'])) {
            $model->requestHttpMethod = $map['RequestHttpMethod'];
        }
        if (isset($map['RequestMode'])) {
            $model->requestMode = $map['RequestMode'];
        }
        if (isset($map['RequestParameters'])) {
            $model->requestParameters = $map['RequestParameters'];
        }
        if (isset($map['RequestPath'])) {
            $model->requestPath = $map['RequestPath'];
        }
        if (isset($map['RequestProtocol'])) {
            $model->requestProtocol = $map['RequestProtocol'];
        }
        if (isset($map['ResultSample'])) {
            $model->resultSample = $map['ResultSample'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = $map['ServiceParameters'];
        }
        if (isset($map['ServiceParametersMap'])) {
            $model->serviceParametersMap = $map['ServiceParametersMap'];
        }
        if (isset($map['ServiceProtocol'])) {
            $model->serviceProtocol = $map['ServiceProtocol'];
        }
        if (isset($map['ServiceTimeout'])) {
            $model->serviceTimeout = $map['ServiceTimeout'];
        }
        if (isset($map['UseBackendService'])) {
            $model->useBackendService = $map['UseBackendService'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['VpcConfig'])) {
            $model->vpcConfig = $map['VpcConfig'];
        }

        return $model;
    }
}
