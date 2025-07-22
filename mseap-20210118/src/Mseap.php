<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Mseap\V20210118\Models\GetOrderSummaryForPartnerRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\GetOrderSummaryForPartnerResponse;
use AlibabaCloud\SDK\Mseap\V20210118\Models\GetPlatformUserInfoForPartnerRequest;
use AlibabaCloud\SDK\Mseap\V20210118\Models\GetPlatformUserInfoForPartnerResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 商品授权码激活
     *  *
     * @param ActivateLicenseRequest $request ActivateLicenseRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ActivateLicenseResponse ActivateLicenseResponse
     */
    public function activateLicenseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->licenseCode)) {
            $query['LicenseCode'] = $request->licenseCode;
        }
        if (!Utils::isUnset($request->licenseNo)) {
            $query['LicenseNo'] = $request->licenseNo;
        }
        if (!Utils::isUnset($request->licensePublisher)) {
            $query['LicensePublisher'] = $request->licensePublisher;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 商品授权码激活
     *  *
     * @param ActivateLicenseRequest $request ActivateLicenseRequest
     *
     * @return ActivateLicenseResponse ActivateLicenseResponse
     */
    public function activateLicense($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateLicenseWithOptions($request, $runtime);
    }

    /**
     * @summary 任务回调
     *  *
     * @param CallbackTaskRequest $request CallbackTaskRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CallbackTaskResponse CallbackTaskResponse
     */
    public function callbackTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunKp)) {
            $query['AliyunKp'] = $request->aliyunKp;
        }
        if (!Utils::isUnset($request->apiType)) {
            $query['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->bizCode)) {
            $query['BizCode'] = $request->bizCode;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->originalRequest)) {
            $query['OriginalRequest'] = $request->originalRequest;
        }
        if (!Utils::isUnset($request->outTaskId)) {
            $query['OutTaskId'] = $request->outTaskId;
        }
        if (!Utils::isUnset($request->principalKey)) {
            $query['PrincipalKey'] = $request->principalKey;
        }
        if (!Utils::isUnset($request->taskData)) {
            $query['TaskData'] = $request->taskData;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userBid)) {
            $query['UserBid'] = $request->userBid;
        }
        if (!Utils::isUnset($request->userCallerParentId)) {
            $query['UserCallerParentId'] = $request->userCallerParentId;
        }
        if (!Utils::isUnset($request->userCallerSecurityTransport)) {
            $query['UserCallerSecurityTransport'] = $request->userCallerSecurityTransport;
        }
        if (!Utils::isUnset($request->userCallerType)) {
            $query['UserCallerType'] = $request->userCallerType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->userKp)) {
            $query['UserKp'] = $request->userKp;
        }
        if (!Utils::isUnset($request->userMfaPresent)) {
            $query['UserMfaPresent'] = $request->userMfaPresent;
        }
        if (!Utils::isUnset($request->userSecurityToken)) {
            $query['UserSecurityToken'] = $request->userSecurityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 任务回调
     *  *
     * @param CallbackTaskRequest $request CallbackTaskRequest
     *
     * @return CallbackTaskResponse CallbackTaskResponse
     */
    public function callbackTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->callbackTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 查询协议状态
     *  *
     * @param DescribeAgreementStatusRequest $request DescribeAgreementStatusRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAgreementStatusResponse DescribeAgreementStatusResponse
     */
    public function describeAgreementStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agreementCode)) {
            $query['AgreementCode'] = $request->agreementCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 查询协议状态
     *  *
     * @param DescribeAgreementStatusRequest $request DescribeAgreementStatusRequest
     *
     * @return DescribeAgreementStatusResponse DescribeAgreementStatusResponse
     */
    public function describeAgreementStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAgreementStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 合作伙伴生成上传文件策略
     *  *
     * @param GenerateUploadFilePolicyForPartnerRequest $request GenerateUploadFilePolicyForPartnerRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateUploadFilePolicyForPartnerResponse GenerateUploadFilePolicyForPartnerResponse
     */
    public function generateUploadFilePolicyForPartnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileType)) {
            $query['FileType'] = $request->fileType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 合作伙伴生成上传文件策略
     *  *
     * @param GenerateUploadFilePolicyForPartnerRequest $request GenerateUploadFilePolicyForPartnerRequest
     *
     * @return GenerateUploadFilePolicyForPartnerResponse GenerateUploadFilePolicyForPartnerResponse
     */
    public function generateUploadFilePolicyForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUploadFilePolicyForPartnerWithOptions($request, $runtime);
    }

    /**
     * @summary 获取node节点通过流程id
     *  *
     * @param GetNodeByFlowIdRequest $request GetNodeByFlowIdRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNodeByFlowIdResponse GetNodeByFlowIdResponse
     */
    public function getNodeByFlowIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunKp)) {
            $query['AliyunKp'] = $request->aliyunKp;
        }
        if (!Utils::isUnset($request->apiType)) {
            $query['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->flowId)) {
            $query['FlowId'] = $request->flowId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->originalRequest)) {
            $query['OriginalRequest'] = $request->originalRequest;
        }
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userBid)) {
            $query['UserBid'] = $request->userBid;
        }
        if (!Utils::isUnset($request->userCallerParentId)) {
            $query['UserCallerParentId'] = $request->userCallerParentId;
        }
        if (!Utils::isUnset($request->userCallerSecurityTransport)) {
            $query['UserCallerSecurityTransport'] = $request->userCallerSecurityTransport;
        }
        if (!Utils::isUnset($request->userCallerType)) {
            $query['UserCallerType'] = $request->userCallerType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->userKp)) {
            $query['UserKp'] = $request->userKp;
        }
        if (!Utils::isUnset($request->userMfaPresent)) {
            $query['UserMfaPresent'] = $request->userMfaPresent;
        }
        if (!Utils::isUnset($request->userSecurityToken)) {
            $query['UserSecurityToken'] = $request->userSecurityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取node节点通过流程id
     *  *
     * @param GetNodeByFlowIdRequest $request GetNodeByFlowIdRequest
     *
     * @return GetNodeByFlowIdResponse GetNodeByFlowIdResponse
     */
    public function getNodeByFlowId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeByFlowIdWithOptions($request, $runtime);
    }

    /**
     * @summary 获取node节点通过模版id
     *  *
     * @param GetNodeByTemplateIdRequest $request GetNodeByTemplateIdRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNodeByTemplateIdResponse GetNodeByTemplateIdResponse
     */
    public function getNodeByTemplateIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunKp)) {
            $query['AliyunKp'] = $request->aliyunKp;
        }
        if (!Utils::isUnset($request->apiType)) {
            $query['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->originalRequest)) {
            $query['OriginalRequest'] = $request->originalRequest;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userBid)) {
            $query['UserBid'] = $request->userBid;
        }
        if (!Utils::isUnset($request->userCallerParentId)) {
            $query['UserCallerParentId'] = $request->userCallerParentId;
        }
        if (!Utils::isUnset($request->userCallerSecurityTransport)) {
            $query['UserCallerSecurityTransport'] = $request->userCallerSecurityTransport;
        }
        if (!Utils::isUnset($request->userCallerType)) {
            $query['UserCallerType'] = $request->userCallerType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->userKp)) {
            $query['UserKp'] = $request->userKp;
        }
        if (!Utils::isUnset($request->userMfaPresent)) {
            $query['UserMfaPresent'] = $request->userMfaPresent;
        }
        if (!Utils::isUnset($request->userSecurityToken)) {
            $query['UserSecurityToken'] = $request->userSecurityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取node节点通过模版id
     *  *
     * @param GetNodeByTemplateIdRequest $request GetNodeByTemplateIdRequest
     *
     * @return GetNodeByTemplateIdResponse GetNodeByTemplateIdResponse
     */
    public function getNodeByTemplateId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNodeByTemplateIdWithOptions($request, $runtime);
    }

    /**
     * @summary 合作伙伴获取订单概要信息
     *  *
     * @param GetOrderSummaryForPartnerRequest $request GetOrderSummaryForPartnerRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOrderSummaryForPartnerResponse GetOrderSummaryForPartnerResponse
     */
    public function getOrderSummaryForPartnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOrderSummaryForPartner',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOrderSummaryForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 合作伙伴获取订单概要信息
     *  *
     * @param GetOrderSummaryForPartnerRequest $request GetOrderSummaryForPartnerRequest
     *
     * @return GetOrderSummaryForPartnerResponse GetOrderSummaryForPartnerResponse
     */
    public function getOrderSummaryForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrderSummaryForPartnerWithOptions($request, $runtime);
    }

    /**
     * @summary 合作伙伴获取用户跨平台信息
     *  *
     * @param GetPlatformUserInfoForPartnerRequest $request GetPlatformUserInfoForPartnerRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPlatformUserInfoForPartnerResponse GetPlatformUserInfoForPartnerResponse
     */
    public function getPlatformUserInfoForPartnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->platformType)) {
            $query['PlatformType'] = $request->platformType;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPlatformUserInfoForPartner',
            'version' => '2021-01-18',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPlatformUserInfoForPartnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 合作伙伴获取用户跨平台信息
     *  *
     * @param GetPlatformUserInfoForPartnerRequest $request GetPlatformUserInfoForPartnerRequest
     *
     * @return GetPlatformUserInfoForPartnerResponse GetPlatformUserInfoForPartnerResponse
     */
    public function getPlatformUserInfoForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPlatformUserInfoForPartnerWithOptions($request, $runtime);
    }

    /**
     * @summary 获取代理
     *  *
     * @param GetProxyByTypeRequest $request GetProxyByTypeRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProxyByTypeResponse GetProxyByTypeResponse
     */
    public function getProxyByTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunKp)) {
            $query['AliyunKp'] = $request->aliyunKp;
        }
        if (!Utils::isUnset($request->apiType)) {
            $query['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->originalRequest)) {
            $query['OriginalRequest'] = $request->originalRequest;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userBid)) {
            $query['UserBid'] = $request->userBid;
        }
        if (!Utils::isUnset($request->userCallerParentId)) {
            $query['UserCallerParentId'] = $request->userCallerParentId;
        }
        if (!Utils::isUnset($request->userCallerSecurityTransport)) {
            $query['UserCallerSecurityTransport'] = $request->userCallerSecurityTransport;
        }
        if (!Utils::isUnset($request->userCallerType)) {
            $query['UserCallerType'] = $request->userCallerType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->userKp)) {
            $query['UserKp'] = $request->userKp;
        }
        if (!Utils::isUnset($request->userMfaPresent)) {
            $query['UserMfaPresent'] = $request->userMfaPresent;
        }
        if (!Utils::isUnset($request->userSecurityToken)) {
            $query['UserSecurityToken'] = $request->userSecurityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取代理
     *  *
     * @param GetProxyByTypeRequest $request GetProxyByTypeRequest
     *
     * @return GetProxyByTypeResponse GetProxyByTypeResponse
     */
    public function getProxyByType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProxyByTypeWithOptions($request, $runtime);
    }

    /**
     * @summary 获取redis值
     *  *
     * @param GetRedisValueRequest $request GetRedisValueRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRedisValueResponse GetRedisValueResponse
     */
    public function getRedisValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunKp)) {
            $query['AliyunKp'] = $request->aliyunKp;
        }
        if (!Utils::isUnset($request->apiType)) {
            $query['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->originalRequest)) {
            $query['OriginalRequest'] = $request->originalRequest;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userBid)) {
            $query['UserBid'] = $request->userBid;
        }
        if (!Utils::isUnset($request->userCallerParentId)) {
            $query['UserCallerParentId'] = $request->userCallerParentId;
        }
        if (!Utils::isUnset($request->userCallerSecurityTransport)) {
            $query['UserCallerSecurityTransport'] = $request->userCallerSecurityTransport;
        }
        if (!Utils::isUnset($request->userCallerType)) {
            $query['UserCallerType'] = $request->userCallerType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->userKp)) {
            $query['UserKp'] = $request->userKp;
        }
        if (!Utils::isUnset($request->userMfaPresent)) {
            $query['UserMfaPresent'] = $request->userMfaPresent;
        }
        if (!Utils::isUnset($request->userSecurityToken)) {
            $query['UserSecurityToken'] = $request->userSecurityToken;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取redis值
     *  *
     * @param GetRedisValueRequest $request GetRedisValueRequest
     *
     * @return GetRedisValueResponse GetRedisValueResponse
     */
    public function getRedisValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRedisValueWithOptions($request, $runtime);
    }

    /**
     * @summary 获取变量
     *  *
     * @param GetVariableRequest $request GetVariableRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVariableResponse GetVariableResponse
     */
    public function getVariableWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunKp)) {
            $query['AliyunKp'] = $request->aliyunKp;
        }
        if (!Utils::isUnset($request->apiType)) {
            $query['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->originalRequest)) {
            $query['OriginalRequest'] = $request->originalRequest;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userBid)) {
            $query['UserBid'] = $request->userBid;
        }
        if (!Utils::isUnset($request->userCallerParentId)) {
            $query['UserCallerParentId'] = $request->userCallerParentId;
        }
        if (!Utils::isUnset($request->userCallerSecurityTransport)) {
            $query['UserCallerSecurityTransport'] = $request->userCallerSecurityTransport;
        }
        if (!Utils::isUnset($request->userCallerType)) {
            $query['UserCallerType'] = $request->userCallerType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->userKp)) {
            $query['UserKp'] = $request->userKp;
        }
        if (!Utils::isUnset($request->userMfaPresent)) {
            $query['UserMfaPresent'] = $request->userMfaPresent;
        }
        if (!Utils::isUnset($request->userSecurityToken)) {
            $query['UserSecurityToken'] = $request->userSecurityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 获取变量
     *  *
     * @param GetVariableRequest $request GetVariableRequest
     *
     * @return GetVariableResponse GetVariableResponse
     */
    public function getVariable($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVariableWithOptions($request, $runtime);
    }

    /**
     * @summary 识别验证码
     *  *
     * @param IdentifyCodeRequest $request IdentifyCodeRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return IdentifyCodeResponse IdentifyCodeResponse
     */
    public function identifyCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunKp)) {
            $query['AliyunKp'] = $request->aliyunKp;
        }
        if (!Utils::isUnset($request->apiType)) {
            $query['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->label)) {
            $query['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->originalRequest)) {
            $query['OriginalRequest'] = $request->originalRequest;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userBid)) {
            $query['UserBid'] = $request->userBid;
        }
        if (!Utils::isUnset($request->userCallerParentId)) {
            $query['UserCallerParentId'] = $request->userCallerParentId;
        }
        if (!Utils::isUnset($request->userCallerSecurityTransport)) {
            $query['UserCallerSecurityTransport'] = $request->userCallerSecurityTransport;
        }
        if (!Utils::isUnset($request->userCallerType)) {
            $query['UserCallerType'] = $request->userCallerType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->userKp)) {
            $query['UserKp'] = $request->userKp;
        }
        if (!Utils::isUnset($request->userMfaPresent)) {
            $query['UserMfaPresent'] = $request->userMfaPresent;
        }
        if (!Utils::isUnset($request->userSecurityToken)) {
            $query['UserSecurityToken'] = $request->userSecurityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 识别验证码
     *  *
     * @param IdentifyCodeRequest $request IdentifyCodeRequest
     *
     * @return IdentifyCodeResponse IdentifyCodeResponse
     */
    public function identifyCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->identifyCodeWithOptions($request, $runtime);
    }

    /**
     * @summary 拉取协议变更识别模型
     *  *
     * @param PullRpaModelRequest $request PullRpaModelRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return PullRpaModelResponse PullRpaModelResponse
     */
    public function pullRpaModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunKp)) {
            $query['AliyunKp'] = $request->aliyunKp;
        }
        if (!Utils::isUnset($request->apiType)) {
            $query['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->originalRequest)) {
            $query['OriginalRequest'] = $request->originalRequest;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userBid)) {
            $query['UserBid'] = $request->userBid;
        }
        if (!Utils::isUnset($request->userCallerParentId)) {
            $query['UserCallerParentId'] = $request->userCallerParentId;
        }
        if (!Utils::isUnset($request->userCallerType)) {
            $query['UserCallerType'] = $request->userCallerType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->userKp)) {
            $query['UserKp'] = $request->userKp;
        }
        if (!Utils::isUnset($request->userMfaPresent)) {
            $query['UserMfaPresent'] = $request->userMfaPresent;
        }
        if (!Utils::isUnset($request->userSecurityToken)) {
            $query['UserSecurityToken'] = $request->userSecurityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 拉取协议变更识别模型
     *  *
     * @param PullRpaModelRequest $request PullRpaModelRequest
     *
     * @return PullRpaModelResponse PullRpaModelResponse
     */
    public function pullRpaModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pullRpaModelWithOptions($request, $runtime);
    }

    /**
     * @summary RPA拉取任务
     *  *
     * @param PullTaskRequest $request PullTaskRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return PullTaskResponse PullTaskResponse
     */
    public function pullTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunKp)) {
            $query['AliyunKp'] = $request->aliyunKp;
        }
        if (!Utils::isUnset($request->apiType)) {
            $query['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->bizCode)) {
            $query['BizCode'] = $request->bizCode;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->originalRequest)) {
            $query['OriginalRequest'] = $request->originalRequest;
        }
        if (!Utils::isUnset($request->principalKey)) {
            $query['PrincipalKey'] = $request->principalKey;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userBid)) {
            $query['UserBid'] = $request->userBid;
        }
        if (!Utils::isUnset($request->userCallerParentId)) {
            $query['UserCallerParentId'] = $request->userCallerParentId;
        }
        if (!Utils::isUnset($request->userCallerSecurityTransport)) {
            $query['UserCallerSecurityTransport'] = $request->userCallerSecurityTransport;
        }
        if (!Utils::isUnset($request->userCallerType)) {
            $query['UserCallerType'] = $request->userCallerType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->userKp)) {
            $query['UserKp'] = $request->userKp;
        }
        if (!Utils::isUnset($request->userMfaPresent)) {
            $query['UserMfaPresent'] = $request->userMfaPresent;
        }
        if (!Utils::isUnset($request->userSecurityToken)) {
            $query['UserSecurityToken'] = $request->userSecurityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary RPA拉取任务
     *  *
     * @param PullTaskRequest $request PullTaskRequest
     *
     * @return PullTaskResponse PullTaskResponse
     */
    public function pullTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pullTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 推送RPA运行时任务
     *  *
     * @param PushRpaTaskRequest $request PushRpaTaskRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return PushRpaTaskResponse PushRpaTaskResponse
     */
    public function pushRpaTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunKp)) {
            $query['AliyunKp'] = $request->aliyunKp;
        }
        if (!Utils::isUnset($request->apiType)) {
            $query['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->originalRequest)) {
            $query['OriginalRequest'] = $request->originalRequest;
        }
        if (!Utils::isUnset($request->request)) {
            $query['Request'] = $request->request;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userBid)) {
            $query['UserBid'] = $request->userBid;
        }
        if (!Utils::isUnset($request->userCallerParentId)) {
            $query['UserCallerParentId'] = $request->userCallerParentId;
        }
        if (!Utils::isUnset($request->userCallerType)) {
            $query['UserCallerType'] = $request->userCallerType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->userKp)) {
            $query['UserKp'] = $request->userKp;
        }
        if (!Utils::isUnset($request->userMfaPresent)) {
            $query['UserMfaPresent'] = $request->userMfaPresent;
        }
        if (!Utils::isUnset($request->userSecurityToken)) {
            $query['UserSecurityToken'] = $request->userSecurityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 推送RPA运行时任务
     *  *
     * @param PushRpaTaskRequest $request PushRpaTaskRequest
     *
     * @return PushRpaTaskResponse PushRpaTaskResponse
     */
    public function pushRpaTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushRpaTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 推送运行时任务明细
     *  *
     * @param PushRpaTaskDetailRequest $request PushRpaTaskDetailRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return PushRpaTaskDetailResponse PushRpaTaskDetailResponse
     */
    public function pushRpaTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunKp)) {
            $query['AliyunKp'] = $request->aliyunKp;
        }
        if (!Utils::isUnset($request->apiType)) {
            $query['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->inputData)) {
            $query['InputData'] = $request->inputData;
        }
        if (!Utils::isUnset($request->inputHtml)) {
            $query['InputHtml'] = $request->inputHtml;
        }
        if (!Utils::isUnset($request->inputScreenshot)) {
            $query['InputScreenshot'] = $request->inputScreenshot;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->modelDetailId)) {
            $query['ModelDetailId'] = $request->modelDetailId;
        }
        if (!Utils::isUnset($request->originalRequest)) {
            $query['OriginalRequest'] = $request->originalRequest;
        }
        if (!Utils::isUnset($request->outputData)) {
            $query['OutputData'] = $request->outputData;
        }
        if (!Utils::isUnset($request->outputHtml)) {
            $query['OutputHtml'] = $request->outputHtml;
        }
        if (!Utils::isUnset($request->outputScreenshot)) {
            $query['OutputScreenshot'] = $request->outputScreenshot;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskDetailId)) {
            $query['TaskDetailId'] = $request->taskDetailId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userBid)) {
            $query['UserBid'] = $request->userBid;
        }
        if (!Utils::isUnset($request->userCallerParentId)) {
            $query['UserCallerParentId'] = $request->userCallerParentId;
        }
        if (!Utils::isUnset($request->userCallerType)) {
            $query['UserCallerType'] = $request->userCallerType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->userKp)) {
            $query['UserKp'] = $request->userKp;
        }
        if (!Utils::isUnset($request->userSecurityToken)) {
            $query['UserSecurityToken'] = $request->userSecurityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 推送运行时任务明细
     *  *
     * @param PushRpaTaskDetailRequest $request PushRpaTaskDetailRequest
     *
     * @return PushRpaTaskDetailResponse PushRpaTaskDetailResponse
     */
    public function pushRpaTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushRpaTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 合作伙伴发送消息通知
     *  *
     * @param SendNotificationForPartnerRequest $tmpReq  SendNotificationForPartnerRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SendNotificationForPartnerResponse SendNotificationForPartnerResponse
     */
    public function sendNotificationForPartnerWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendNotificationForPartnerShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->paramMap)) {
            $request->paramMapShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->paramMap, 'ParamMap', 'json');
        }
        if (!Utils::isUnset($tmpReq->smartSubChannels)) {
            $request->smartSubChannelsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->smartSubChannels, 'SmartSubChannels', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->channelType)) {
            $query['ChannelType'] = $request->channelType;
        }
        if (!Utils::isUnset($request->notifyType)) {
            $query['NotifyType'] = $request->notifyType;
        }
        if (!Utils::isUnset($request->notifycationEventType)) {
            $query['NotifycationEventType'] = $request->notifycationEventType;
        }
        if (!Utils::isUnset($request->paramMapShrink)) {
            $query['ParamMap'] = $request->paramMapShrink;
        }
        if (!Utils::isUnset($request->sendTarget)) {
            $query['SendTarget'] = $request->sendTarget;
        }
        if (!Utils::isUnset($request->smartSubChannelsShrink)) {
            $query['SmartSubChannels'] = $request->smartSubChannelsShrink;
        }
        if (!Utils::isUnset($request->trackId)) {
            $query['TrackId'] = $request->trackId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 合作伙伴发送消息通知
     *  *
     * @param SendNotificationForPartnerRequest $request SendNotificationForPartnerRequest
     *
     * @return SendNotificationForPartnerResponse SendNotificationForPartnerResponse
     */
    public function sendNotificationForPartner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendNotificationForPartnerWithOptions($request, $runtime);
    }

    /**
     * @summary redis设置
     *  *
     * @param SetRedisValueRequest $request SetRedisValueRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return SetRedisValueResponse SetRedisValueResponse
     */
    public function setRedisValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunKp)) {
            $query['AliyunKp'] = $request->aliyunKp;
        }
        if (!Utils::isUnset($request->apiType)) {
            $query['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->bid)) {
            $query['Bid'] = $request->bid;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->originalRequest)) {
            $query['OriginalRequest'] = $request->originalRequest;
        }
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->userAccessKeyId)) {
            $query['UserAccessKeyId'] = $request->userAccessKeyId;
        }
        if (!Utils::isUnset($request->userBid)) {
            $query['UserBid'] = $request->userBid;
        }
        if (!Utils::isUnset($request->userCallerParentId)) {
            $query['UserCallerParentId'] = $request->userCallerParentId;
        }
        if (!Utils::isUnset($request->userCallerType)) {
            $query['UserCallerType'] = $request->userCallerType;
        }
        if (!Utils::isUnset($request->userClientIp)) {
            $query['UserClientIp'] = $request->userClientIp;
        }
        if (!Utils::isUnset($request->userKp)) {
            $query['UserKp'] = $request->userKp;
        }
        if (!Utils::isUnset($request->userMfaPresent)) {
            $query['UserMfaPresent'] = $request->userMfaPresent;
        }
        if (!Utils::isUnset($request->userSecurityToken)) {
            $query['UserSecurityToken'] = $request->userSecurityToken;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary redis设置
     *  *
     * @param SetRedisValueRequest $request SetRedisValueRequest
     *
     * @return SetRedisValueResponse SetRedisValueResponse
     */
    public function setRedisValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setRedisValueWithOptions($request, $runtime);
    }

    /**
     * @summary 更新协议状态
     *  *
     * @param UpdateAgreementStatusRequest $request UpdateAgreementStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAgreementStatusResponse UpdateAgreementStatusResponse
     */
    public function updateAgreementStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agreementCode)) {
            $query['AgreementCode'] = $request->agreementCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 更新协议状态
     *  *
     * @param UpdateAgreementStatusRequest $request UpdateAgreementStatusRequest
     *
     * @return UpdateAgreementStatusResponse UpdateAgreementStatusResponse
     */
    public function updateAgreementStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAgreementStatusWithOptions($request, $runtime);
    }
}
