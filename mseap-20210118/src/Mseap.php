<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Mseap\V20210118\Models\ActivateLicenseRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\ActivateLicenseResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\CallbackTaskRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\CallbackTaskResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\DescribeAgreementStatusRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\DescribeAgreementStatusResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\GenerateUploadFilePolicyForPartnerRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\GenerateUploadFilePolicyForPartnerResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\GetNodeByFlowIdRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\GetNodeByFlowIdResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\GetNodeByTemplateIdRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\GetNodeByTemplateIdResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\GetProxyByTypeRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\GetProxyByTypeResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\GetRedisValueRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\GetRedisValueResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\GetVariableRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\GetVariableResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\IdentifyCodeRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\IdentifyCodeResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\PullRpaModelRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\PullRpaModelResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\PullTaskRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\PullTaskResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\PushRpaTaskDetailRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\PushRpaTaskDetailResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\PushRpaTaskRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\PushRpaTaskResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\SendNotificationForPartnerRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\SendNotificationForPartnerResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\SendNotificationForPartnerShrinkRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\SetRedisValueRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\SetRedisValueResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\UpdateAgreementStatusRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\UpdateAgreementStatusResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Mseap extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('mseap', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param request - ActivateLicenseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActivateLicenseResponse
     *
     * @param ActivateLicenseRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ActivateLicenseResponse
     */
    public function activateLicenseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->licenseCode) {
            @$query['LicenseCode'] = $request->licenseCode;
        }

        if (null !== $request->licenseNo) {
            @$query['LicenseNo'] = $request->licenseNo;
        }

        if (null !== $request->licensePublisher) {
            @$query['LicensePublisher'] = $request->licensePublisher;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ActivateLicense',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ActivateLicenseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ActivateLicenseRequest
     *
     * @returns ActivateLicenseResponse
     *
     * @param ActivateLicenseRequest $request
     *
     * @return ActivateLicenseResponse
     */
    public function activateLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateLicenseWithOptions($request, $runtime);
    }

    /**
     * 任务回调.
     *
     * @param request - CallbackTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CallbackTaskResponse
     *
     * @param CallbackTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CallbackTaskResponse
     */
    public function callbackTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunKp) {
            @$query['AliyunKp'] = $request->aliyunKp;
        }

        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->bid) {
            @$query['Bid'] = $request->bid;
        }

        if (null !== $request->bizCode) {
            @$query['BizCode'] = $request->bizCode;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->originalRequest) {
            @$query['OriginalRequest'] = $request->originalRequest;
        }

        if (null !== $request->outTaskId) {
            @$query['OutTaskId'] = $request->outTaskId;
        }

        if (null !== $request->principalKey) {
            @$query['PrincipalKey'] = $request->principalKey;
        }

        if (null !== $request->taskData) {
            @$query['TaskData'] = $request->taskData;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userBid) {
            @$query['UserBid'] = $request->userBid;
        }

        if (null !== $request->userCallerParentId) {
            @$query['UserCallerParentId'] = $request->userCallerParentId;
        }

        if (null !== $request->userCallerSecurityTransport) {
            @$query['UserCallerSecurityTransport'] = $request->userCallerSecurityTransport;
        }

        if (null !== $request->userCallerType) {
            @$query['UserCallerType'] = $request->userCallerType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->userKp) {
            @$query['UserKp'] = $request->userKp;
        }

        if (null !== $request->userMfaPresent) {
            @$query['UserMfaPresent'] = $request->userMfaPresent;
        }

        if (null !== $request->userSecurityToken) {
            @$query['UserSecurityToken'] = $request->userSecurityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CallbackTask',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CallbackTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 任务回调.
     *
     * @param request - CallbackTaskRequest
     *
     * @returns CallbackTaskResponse
     *
     * @param CallbackTaskRequest $request
     *
     * @return CallbackTaskResponse
     */
    public function callbackTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->callbackTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeAgreementStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAgreementStatusResponse
     *
     * @param DescribeAgreementStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAgreementStatusResponse
     */
    public function describeAgreementStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agreementCode) {
            @$query['AgreementCode'] = $request->agreementCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAgreementStatus',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAgreementStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeAgreementStatusRequest
     *
     * @returns DescribeAgreementStatusResponse
     *
     * @param DescribeAgreementStatusRequest $request
     *
     * @return DescribeAgreementStatusResponse
     */
    public function describeAgreementStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAgreementStatusWithOptions($request, $runtime);
    }

    /**
     * 合作伙伴生成上传文件策略.
     *
     * @param request - GenerateUploadFilePolicyForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateUploadFilePolicyForPartnerResponse
     *
     * @param GenerateUploadFilePolicyForPartnerRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GenerateUploadFilePolicyForPartnerResponse
     */
    public function generateUploadFilePolicyForPartnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateUploadFilePolicyForPartner',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateUploadFilePolicyForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 合作伙伴生成上传文件策略.
     *
     * @param request - GenerateUploadFilePolicyForPartnerRequest
     *
     * @returns GenerateUploadFilePolicyForPartnerResponse
     *
     * @param GenerateUploadFilePolicyForPartnerRequest $request
     *
     * @return GenerateUploadFilePolicyForPartnerResponse
     */
    public function generateUploadFilePolicyForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUploadFilePolicyForPartnerWithOptions($request, $runtime);
    }

    /**
     * 获取node节点通过流程id.
     *
     * @param request - GetNodeByFlowIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNodeByFlowIdResponse
     *
     * @param GetNodeByFlowIdRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetNodeByFlowIdResponse
     */
    public function getNodeByFlowIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunKp) {
            @$query['AliyunKp'] = $request->aliyunKp;
        }

        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->bid) {
            @$query['Bid'] = $request->bid;
        }

        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->originalRequest) {
            @$query['OriginalRequest'] = $request->originalRequest;
        }

        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userBid) {
            @$query['UserBid'] = $request->userBid;
        }

        if (null !== $request->userCallerParentId) {
            @$query['UserCallerParentId'] = $request->userCallerParentId;
        }

        if (null !== $request->userCallerSecurityTransport) {
            @$query['UserCallerSecurityTransport'] = $request->userCallerSecurityTransport;
        }

        if (null !== $request->userCallerType) {
            @$query['UserCallerType'] = $request->userCallerType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->userKp) {
            @$query['UserKp'] = $request->userKp;
        }

        if (null !== $request->userMfaPresent) {
            @$query['UserMfaPresent'] = $request->userMfaPresent;
        }

        if (null !== $request->userSecurityToken) {
            @$query['UserSecurityToken'] = $request->userSecurityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNodeByFlowId',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNodeByFlowIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取node节点通过流程id.
     *
     * @param request - GetNodeByFlowIdRequest
     *
     * @returns GetNodeByFlowIdResponse
     *
     * @param GetNodeByFlowIdRequest $request
     *
     * @return GetNodeByFlowIdResponse
     */
    public function getNodeByFlowId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeByFlowIdWithOptions($request, $runtime);
    }

    /**
     * 获取node节点通过模版id.
     *
     * @param request - GetNodeByTemplateIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNodeByTemplateIdResponse
     *
     * @param GetNodeByTemplateIdRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetNodeByTemplateIdResponse
     */
    public function getNodeByTemplateIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunKp) {
            @$query['AliyunKp'] = $request->aliyunKp;
        }

        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->bid) {
            @$query['Bid'] = $request->bid;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->originalRequest) {
            @$query['OriginalRequest'] = $request->originalRequest;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userBid) {
            @$query['UserBid'] = $request->userBid;
        }

        if (null !== $request->userCallerParentId) {
            @$query['UserCallerParentId'] = $request->userCallerParentId;
        }

        if (null !== $request->userCallerSecurityTransport) {
            @$query['UserCallerSecurityTransport'] = $request->userCallerSecurityTransport;
        }

        if (null !== $request->userCallerType) {
            @$query['UserCallerType'] = $request->userCallerType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->userKp) {
            @$query['UserKp'] = $request->userKp;
        }

        if (null !== $request->userMfaPresent) {
            @$query['UserMfaPresent'] = $request->userMfaPresent;
        }

        if (null !== $request->userSecurityToken) {
            @$query['UserSecurityToken'] = $request->userSecurityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNodeByTemplateId',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNodeByTemplateIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取node节点通过模版id.
     *
     * @param request - GetNodeByTemplateIdRequest
     *
     * @returns GetNodeByTemplateIdResponse
     *
     * @param GetNodeByTemplateIdRequest $request
     *
     * @return GetNodeByTemplateIdResponse
     */
    public function getNodeByTemplateId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeByTemplateIdWithOptions($request, $runtime);
    }

    /**
     * 获取代理.
     *
     * @param request - GetProxyByTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProxyByTypeResponse
     *
     * @param GetProxyByTypeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetProxyByTypeResponse
     */
    public function getProxyByTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunKp) {
            @$query['AliyunKp'] = $request->aliyunKp;
        }

        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->bid) {
            @$query['Bid'] = $request->bid;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->originalRequest) {
            @$query['OriginalRequest'] = $request->originalRequest;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userBid) {
            @$query['UserBid'] = $request->userBid;
        }

        if (null !== $request->userCallerParentId) {
            @$query['UserCallerParentId'] = $request->userCallerParentId;
        }

        if (null !== $request->userCallerSecurityTransport) {
            @$query['UserCallerSecurityTransport'] = $request->userCallerSecurityTransport;
        }

        if (null !== $request->userCallerType) {
            @$query['UserCallerType'] = $request->userCallerType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->userKp) {
            @$query['UserKp'] = $request->userKp;
        }

        if (null !== $request->userMfaPresent) {
            @$query['UserMfaPresent'] = $request->userMfaPresent;
        }

        if (null !== $request->userSecurityToken) {
            @$query['UserSecurityToken'] = $request->userSecurityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProxyByType',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetProxyByTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取代理.
     *
     * @param request - GetProxyByTypeRequest
     *
     * @returns GetProxyByTypeResponse
     *
     * @param GetProxyByTypeRequest $request
     *
     * @return GetProxyByTypeResponse
     */
    public function getProxyByType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProxyByTypeWithOptions($request, $runtime);
    }

    /**
     * 获取redis值
     *
     * @param request - GetRedisValueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRedisValueResponse
     *
     * @param GetRedisValueRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetRedisValueResponse
     */
    public function getRedisValueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunKp) {
            @$query['AliyunKp'] = $request->aliyunKp;
        }

        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->bid) {
            @$query['Bid'] = $request->bid;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->originalRequest) {
            @$query['OriginalRequest'] = $request->originalRequest;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userBid) {
            @$query['UserBid'] = $request->userBid;
        }

        if (null !== $request->userCallerParentId) {
            @$query['UserCallerParentId'] = $request->userCallerParentId;
        }

        if (null !== $request->userCallerSecurityTransport) {
            @$query['UserCallerSecurityTransport'] = $request->userCallerSecurityTransport;
        }

        if (null !== $request->userCallerType) {
            @$query['UserCallerType'] = $request->userCallerType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->userKp) {
            @$query['UserKp'] = $request->userKp;
        }

        if (null !== $request->userMfaPresent) {
            @$query['UserMfaPresent'] = $request->userMfaPresent;
        }

        if (null !== $request->userSecurityToken) {
            @$query['UserSecurityToken'] = $request->userSecurityToken;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRedisValue',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRedisValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取redis值
     *
     * @param request - GetRedisValueRequest
     *
     * @returns GetRedisValueResponse
     *
     * @param GetRedisValueRequest $request
     *
     * @return GetRedisValueResponse
     */
    public function getRedisValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRedisValueWithOptions($request, $runtime);
    }

    /**
     * 获取变量.
     *
     * @param request - GetVariableRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVariableResponse
     *
     * @param GetVariableRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetVariableResponse
     */
    public function getVariableWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunKp) {
            @$query['AliyunKp'] = $request->aliyunKp;
        }

        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->bid) {
            @$query['Bid'] = $request->bid;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->originalRequest) {
            @$query['OriginalRequest'] = $request->originalRequest;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userBid) {
            @$query['UserBid'] = $request->userBid;
        }

        if (null !== $request->userCallerParentId) {
            @$query['UserCallerParentId'] = $request->userCallerParentId;
        }

        if (null !== $request->userCallerSecurityTransport) {
            @$query['UserCallerSecurityTransport'] = $request->userCallerSecurityTransport;
        }

        if (null !== $request->userCallerType) {
            @$query['UserCallerType'] = $request->userCallerType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->userKp) {
            @$query['UserKp'] = $request->userKp;
        }

        if (null !== $request->userMfaPresent) {
            @$query['UserMfaPresent'] = $request->userMfaPresent;
        }

        if (null !== $request->userSecurityToken) {
            @$query['UserSecurityToken'] = $request->userSecurityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVariable',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVariableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取变量.
     *
     * @param request - GetVariableRequest
     *
     * @returns GetVariableResponse
     *
     * @param GetVariableRequest $request
     *
     * @return GetVariableResponse
     */
    public function getVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVariableWithOptions($request, $runtime);
    }

    /**
     * 识别验证码
     *
     * @param request - IdentifyCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IdentifyCodeResponse
     *
     * @param IdentifyCodeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return IdentifyCodeResponse
     */
    public function identifyCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunKp) {
            @$query['AliyunKp'] = $request->aliyunKp;
        }

        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->bid) {
            @$query['Bid'] = $request->bid;
        }

        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->label) {
            @$query['Label'] = $request->label;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->originalRequest) {
            @$query['OriginalRequest'] = $request->originalRequest;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userBid) {
            @$query['UserBid'] = $request->userBid;
        }

        if (null !== $request->userCallerParentId) {
            @$query['UserCallerParentId'] = $request->userCallerParentId;
        }

        if (null !== $request->userCallerSecurityTransport) {
            @$query['UserCallerSecurityTransport'] = $request->userCallerSecurityTransport;
        }

        if (null !== $request->userCallerType) {
            @$query['UserCallerType'] = $request->userCallerType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->userKp) {
            @$query['UserKp'] = $request->userKp;
        }

        if (null !== $request->userMfaPresent) {
            @$query['UserMfaPresent'] = $request->userMfaPresent;
        }

        if (null !== $request->userSecurityToken) {
            @$query['UserSecurityToken'] = $request->userSecurityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IdentifyCode',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IdentifyCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 识别验证码
     *
     * @param request - IdentifyCodeRequest
     *
     * @returns IdentifyCodeResponse
     *
     * @param IdentifyCodeRequest $request
     *
     * @return IdentifyCodeResponse
     */
    public function identifyCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->identifyCodeWithOptions($request, $runtime);
    }

    /**
     * 拉取协议变更识别模型.
     *
     * @param request - PullRpaModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PullRpaModelResponse
     *
     * @param PullRpaModelRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PullRpaModelResponse
     */
    public function pullRpaModelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunKp) {
            @$query['AliyunKp'] = $request->aliyunKp;
        }

        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->bid) {
            @$query['Bid'] = $request->bid;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->originalRequest) {
            @$query['OriginalRequest'] = $request->originalRequest;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userBid) {
            @$query['UserBid'] = $request->userBid;
        }

        if (null !== $request->userCallerParentId) {
            @$query['UserCallerParentId'] = $request->userCallerParentId;
        }

        if (null !== $request->userCallerType) {
            @$query['UserCallerType'] = $request->userCallerType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->userKp) {
            @$query['UserKp'] = $request->userKp;
        }

        if (null !== $request->userMfaPresent) {
            @$query['UserMfaPresent'] = $request->userMfaPresent;
        }

        if (null !== $request->userSecurityToken) {
            @$query['UserSecurityToken'] = $request->userSecurityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PullRpaModel',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PullRpaModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 拉取协议变更识别模型.
     *
     * @param request - PullRpaModelRequest
     *
     * @returns PullRpaModelResponse
     *
     * @param PullRpaModelRequest $request
     *
     * @return PullRpaModelResponse
     */
    public function pullRpaModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pullRpaModelWithOptions($request, $runtime);
    }

    /**
     * RPA拉取任务
     *
     * @param request - PullTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PullTaskResponse
     *
     * @param PullTaskRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return PullTaskResponse
     */
    public function pullTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunKp) {
            @$query['AliyunKp'] = $request->aliyunKp;
        }

        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->bid) {
            @$query['Bid'] = $request->bid;
        }

        if (null !== $request->bizCode) {
            @$query['BizCode'] = $request->bizCode;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->originalRequest) {
            @$query['OriginalRequest'] = $request->originalRequest;
        }

        if (null !== $request->principalKey) {
            @$query['PrincipalKey'] = $request->principalKey;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userBid) {
            @$query['UserBid'] = $request->userBid;
        }

        if (null !== $request->userCallerParentId) {
            @$query['UserCallerParentId'] = $request->userCallerParentId;
        }

        if (null !== $request->userCallerSecurityTransport) {
            @$query['UserCallerSecurityTransport'] = $request->userCallerSecurityTransport;
        }

        if (null !== $request->userCallerType) {
            @$query['UserCallerType'] = $request->userCallerType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->userKp) {
            @$query['UserKp'] = $request->userKp;
        }

        if (null !== $request->userMfaPresent) {
            @$query['UserMfaPresent'] = $request->userMfaPresent;
        }

        if (null !== $request->userSecurityToken) {
            @$query['UserSecurityToken'] = $request->userSecurityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PullTask',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PullTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * RPA拉取任务
     *
     * @param request - PullTaskRequest
     *
     * @returns PullTaskResponse
     *
     * @param PullTaskRequest $request
     *
     * @return PullTaskResponse
     */
    public function pullTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pullTaskWithOptions($request, $runtime);
    }

    /**
     * 推送RPA运行时任务
     *
     * @param request - PushRpaTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushRpaTaskResponse
     *
     * @param PushRpaTaskRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return PushRpaTaskResponse
     */
    public function pushRpaTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunKp) {
            @$query['AliyunKp'] = $request->aliyunKp;
        }

        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->bid) {
            @$query['Bid'] = $request->bid;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->modelId) {
            @$query['ModelId'] = $request->modelId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->originalRequest) {
            @$query['OriginalRequest'] = $request->originalRequest;
        }

        if (null !== $request->request) {
            @$query['Request'] = $request->request;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userBid) {
            @$query['UserBid'] = $request->userBid;
        }

        if (null !== $request->userCallerParentId) {
            @$query['UserCallerParentId'] = $request->userCallerParentId;
        }

        if (null !== $request->userCallerType) {
            @$query['UserCallerType'] = $request->userCallerType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->userKp) {
            @$query['UserKp'] = $request->userKp;
        }

        if (null !== $request->userMfaPresent) {
            @$query['UserMfaPresent'] = $request->userMfaPresent;
        }

        if (null !== $request->userSecurityToken) {
            @$query['UserSecurityToken'] = $request->userSecurityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PushRpaTask',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushRpaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 推送RPA运行时任务
     *
     * @param request - PushRpaTaskRequest
     *
     * @returns PushRpaTaskResponse
     *
     * @param PushRpaTaskRequest $request
     *
     * @return PushRpaTaskResponse
     */
    public function pushRpaTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushRpaTaskWithOptions($request, $runtime);
    }

    /**
     * 推送运行时任务明细.
     *
     * @param request - PushRpaTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushRpaTaskDetailResponse
     *
     * @param PushRpaTaskDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PushRpaTaskDetailResponse
     */
    public function pushRpaTaskDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunKp) {
            @$query['AliyunKp'] = $request->aliyunKp;
        }

        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->bid) {
            @$query['Bid'] = $request->bid;
        }

        if (null !== $request->inputData) {
            @$query['InputData'] = $request->inputData;
        }

        if (null !== $request->inputHtml) {
            @$query['InputHtml'] = $request->inputHtml;
        }

        if (null !== $request->inputScreenshot) {
            @$query['InputScreenshot'] = $request->inputScreenshot;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->modelDetailId) {
            @$query['ModelDetailId'] = $request->modelDetailId;
        }

        if (null !== $request->originalRequest) {
            @$query['OriginalRequest'] = $request->originalRequest;
        }

        if (null !== $request->outputData) {
            @$query['OutputData'] = $request->outputData;
        }

        if (null !== $request->outputHtml) {
            @$query['OutputHtml'] = $request->outputHtml;
        }

        if (null !== $request->outputScreenshot) {
            @$query['OutputScreenshot'] = $request->outputScreenshot;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskDetailId) {
            @$query['TaskDetailId'] = $request->taskDetailId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userBid) {
            @$query['UserBid'] = $request->userBid;
        }

        if (null !== $request->userCallerParentId) {
            @$query['UserCallerParentId'] = $request->userCallerParentId;
        }

        if (null !== $request->userCallerType) {
            @$query['UserCallerType'] = $request->userCallerType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->userKp) {
            @$query['UserKp'] = $request->userKp;
        }

        if (null !== $request->userSecurityToken) {
            @$query['UserSecurityToken'] = $request->userSecurityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PushRpaTaskDetail',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushRpaTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 推送运行时任务明细.
     *
     * @param request - PushRpaTaskDetailRequest
     *
     * @returns PushRpaTaskDetailResponse
     *
     * @param PushRpaTaskDetailRequest $request
     *
     * @return PushRpaTaskDetailResponse
     */
    public function pushRpaTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushRpaTaskDetailWithOptions($request, $runtime);
    }

    /**
     * 合作伙伴发送消息通知.
     *
     * @param tmpReq - SendNotificationForPartnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendNotificationForPartnerResponse
     *
     * @param SendNotificationForPartnerRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return SendNotificationForPartnerResponse
     */
    public function sendNotificationForPartnerWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SendNotificationForPartnerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->paramMap) {
            $request->paramMapShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->paramMap, 'ParamMap', 'json');
        }

        if (null !== $tmpReq->smartSubChannels) {
            $request->smartSubChannelsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->smartSubChannels, 'SmartSubChannels', 'json');
        }

        $query = [];
        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->channelType) {
            @$query['ChannelType'] = $request->channelType;
        }

        if (null !== $request->notifyType) {
            @$query['NotifyType'] = $request->notifyType;
        }

        if (null !== $request->notifycationEventType) {
            @$query['NotifycationEventType'] = $request->notifycationEventType;
        }

        if (null !== $request->paramMapShrink) {
            @$query['ParamMap'] = $request->paramMapShrink;
        }

        if (null !== $request->sendTarget) {
            @$query['SendTarget'] = $request->sendTarget;
        }

        if (null !== $request->smartSubChannelsShrink) {
            @$query['SmartSubChannels'] = $request->smartSubChannelsShrink;
        }

        if (null !== $request->trackId) {
            @$query['TrackId'] = $request->trackId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendNotificationForPartner',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendNotificationForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 合作伙伴发送消息通知.
     *
     * @param request - SendNotificationForPartnerRequest
     *
     * @returns SendNotificationForPartnerResponse
     *
     * @param SendNotificationForPartnerRequest $request
     *
     * @return SendNotificationForPartnerResponse
     */
    public function sendNotificationForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendNotificationForPartnerWithOptions($request, $runtime);
    }

    /**
     * redis设置.
     *
     * @param request - SetRedisValueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetRedisValueResponse
     *
     * @param SetRedisValueRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SetRedisValueResponse
     */
    public function setRedisValueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunKp) {
            @$query['AliyunKp'] = $request->aliyunKp;
        }

        if (null !== $request->apiType) {
            @$query['ApiType'] = $request->apiType;
        }

        if (null !== $request->bid) {
            @$query['Bid'] = $request->bid;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->originalRequest) {
            @$query['OriginalRequest'] = $request->originalRequest;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        if (null !== $request->userAccessKeyId) {
            @$query['UserAccessKeyId'] = $request->userAccessKeyId;
        }

        if (null !== $request->userBid) {
            @$query['UserBid'] = $request->userBid;
        }

        if (null !== $request->userCallerParentId) {
            @$query['UserCallerParentId'] = $request->userCallerParentId;
        }

        if (null !== $request->userCallerType) {
            @$query['UserCallerType'] = $request->userCallerType;
        }

        if (null !== $request->userClientIp) {
            @$query['UserClientIp'] = $request->userClientIp;
        }

        if (null !== $request->userKp) {
            @$query['UserKp'] = $request->userKp;
        }

        if (null !== $request->userMfaPresent) {
            @$query['UserMfaPresent'] = $request->userMfaPresent;
        }

        if (null !== $request->userSecurityToken) {
            @$query['UserSecurityToken'] = $request->userSecurityToken;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetRedisValue',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetRedisValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * redis设置.
     *
     * @param request - SetRedisValueRequest
     *
     * @returns SetRedisValueResponse
     *
     * @param SetRedisValueRequest $request
     *
     * @return SetRedisValueResponse
     */
    public function setRedisValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setRedisValueWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateAgreementStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgreementStatusResponse
     *
     * @param UpdateAgreementStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateAgreementStatusResponse
     */
    public function updateAgreementStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agreementCode) {
            @$query['AgreementCode'] = $request->agreementCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAgreementStatus',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAgreementStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateAgreementStatusRequest
     *
     * @returns UpdateAgreementStatusResponse
     *
     * @param UpdateAgreementStatusRequest $request
     *
     * @return UpdateAgreementStatusResponse
     */
    public function updateAgreementStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAgreementStatusWithOptions($request, $runtime);
    }
}
