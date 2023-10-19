<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponseBody\errorCodeSamples;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponseBody\requestConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponseBody\requestParameters;
use AlibabaCloud\Tea\Model;

class DescribeApiDocResponseBody extends Model
{
    /**
     * @description The ID of the API.
     *
     * @example b24be7e59a104e52bffbf432cc9272af
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The name of the API
     *
     * @example ObtainKeywordQRCodeAddress
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The security authentication method. Valid values: APP, ANONYMOUS, and APPOPENID, indicating respectively Alibaba Cloud application authentication, anonymous authentication, and third-party OpenID Connect account authentication.
     *
     * @example APP
     *
     * @var string
     */
    public $authType;

    /**
     * @description The publishing time.
     *
     * @example 2022-07-13T16:00:33Z
     *
     * @var string
     */
    public $deployedTime;

    /**
     * @description The API description.
     *
     * @example Lynk\&Co Digital Mall OMS-UAT
     *
     * @var string
     */
    public $description;

    /**
     * @description *   Specifies whether to set **DisableInternet** to **true** to limit API calls to within the VPC.
     *   If you set **DisableInternet** to **false**, the limit is lifted. The default value is false when you create an API.
     *
     * @example true
     *
     * @var bool
     */
    public $disableInternet;

    /**
     * @description The sample error codes returned by the backend service.
     *
     * @var errorCodeSamples
     */
    public $errorCodeSamples;

    /**
     * @description The sample error response from the backend service.
     *
     * @example {"errorCode":"fail","errorMessage":"param invalid"}
     *
     * @var string
     */
    public $failResultSample;

    /**
     * @description *   Specifies whether to set **ForceNonceCheck** to **true** to force the check of X-Ca-Nonce during the request. This is the unique identifier of the request and is generally identified by UUID. After receiving this parameter, API Gateway verifies the validity of this parameter. The same value can be used only once within 15 minutes. This helps prevent replay attacks.
     *   If you set **ForceNonceCheck** to **false**, the check is not performed. The default value is false when you create an API.
     *
     * @example true
     *
     * @var bool
     */
    public $forceNonceCheck;

    /**
     * @description The ID of the API group.
     *
     * @example f51d08c5b7c84342905544ebaec26d35
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the API group.
     *
     * @example Member Age Transaction Service
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The region ID of the API group.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The returned API frontend definition information. It is an array consisting of RequestConfig data.
     *
     * @var requestConfig
     */
    public $requestConfig;

    /**
     * @description The ID of the request.
     *
     * @example F253FB5F-9AE1-5DDA-99B5-46BE00A3719E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The returned frontend input parameters in the API. It is an array consisting of RequestParameter data.
     *
     * @var requestParameters
     */
    public $requestParameters;

    /**
     * @description The sample response.
     *
     * @example {\n  \"status\": 0,\n  \"data\": {\n    \"count\": 1,\n    \"list\": [\n      \"352\"\n    ]\n  },\n  \"message\": \"success\"\n}
     *
     * @var string
     */
    public $resultSample;

    /**
     * @description The return value type.
     *
     * @example JSON
     *
     * @var string
     */
    public $resultType;

    /**
     * @description The name of the runtime environment. Valid values:
     *
     *   **RELEASE**
     *   **TEST**
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;

    /**
     * @description Indicates whether the API is public. Valid values: PUBLIC and PRIVATE.
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $visibility;
    protected $_name = [
        'apiId'             => 'ApiId',
        'apiName'           => 'ApiName',
        'authType'          => 'AuthType',
        'deployedTime'      => 'DeployedTime',
        'description'       => 'Description',
        'disableInternet'   => 'DisableInternet',
        'errorCodeSamples'  => 'ErrorCodeSamples',
        'failResultSample'  => 'FailResultSample',
        'forceNonceCheck'   => 'ForceNonceCheck',
        'groupId'           => 'GroupId',
        'groupName'         => 'GroupName',
        'regionId'          => 'RegionId',
        'requestConfig'     => 'RequestConfig',
        'requestId'         => 'RequestId',
        'requestParameters' => 'RequestParameters',
        'resultSample'      => 'ResultSample',
        'resultType'        => 'ResultType',
        'stageName'         => 'StageName',
        'visibility'        => 'Visibility',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->deployedTime) {
            $res['DeployedTime'] = $this->deployedTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->disableInternet) {
            $res['DisableInternet'] = $this->disableInternet;
        }
        if (null !== $this->errorCodeSamples) {
            $res['ErrorCodeSamples'] = null !== $this->errorCodeSamples ? $this->errorCodeSamples->toMap() : null;
        }
        if (null !== $this->failResultSample) {
            $res['FailResultSample'] = $this->failResultSample;
        }
        if (null !== $this->forceNonceCheck) {
            $res['ForceNonceCheck'] = $this->forceNonceCheck;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestConfig) {
            $res['RequestConfig'] = null !== $this->requestConfig ? $this->requestConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->requestParameters) {
            $res['RequestParameters'] = null !== $this->requestParameters ? $this->requestParameters->toMap() : null;
        }
        if (null !== $this->resultSample) {
            $res['ResultSample'] = $this->resultSample;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiDocResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['DeployedTime'])) {
            $model->deployedTime = $map['DeployedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisableInternet'])) {
            $model->disableInternet = $map['DisableInternet'];
        }
        if (isset($map['ErrorCodeSamples'])) {
            $model->errorCodeSamples = errorCodeSamples::fromMap($map['ErrorCodeSamples']);
        }
        if (isset($map['FailResultSample'])) {
            $model->failResultSample = $map['FailResultSample'];
        }
        if (isset($map['ForceNonceCheck'])) {
            $model->forceNonceCheck = $map['ForceNonceCheck'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestConfig'])) {
            $model->requestConfig = requestConfig::fromMap($map['RequestConfig']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequestParameters'])) {
            $model->requestParameters = requestParameters::fromMap($map['RequestParameters']);
        }
        if (isset($map['ResultSample'])) {
            $model->resultSample = $map['ResultSample'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
