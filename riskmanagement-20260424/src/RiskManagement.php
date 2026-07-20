<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\BindAuthToMachineRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\BindAuthToMachineResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\BindAuthToMachineShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\CreateSasTrialRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\CreateSasTrialResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\CreateSasTrialShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\CreateServiceLinkedRoleShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\CreateVirusScanOnceTaskRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\CreateVirusScanOnceTaskResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\DescribeCloudCenterInstancesRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\DescribeCloudCenterInstancesResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\DescribeCloudCenterInstancesShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\DescribeServiceLinkedRoleStatusRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\DescribeServiceLinkedRoleStatusResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\DescribeServiceLinkedRoleStatusShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\DescribeSuspEventsRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\DescribeSuspEventsResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\DescribeSuspEventsShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\DescribeVersionConfigRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\DescribeVersionConfigResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\DescribeVersionConfigShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAlertRecordAnalysisResultRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAlertRecordAnalysisResultResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAlertRecordAnalysisResultShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAliYunSafeCenterResultRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAliYunSafeCenterResultResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAliYunSafeCenterResultShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetCanTrySasRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetCanTrySasResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetCanTrySasShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetCompliancePackIdRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetCompliancePackIdResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetDisposalToolStatusRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetDisposalToolStatusResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetNotificationClickRecordRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetNotificationClickRecordResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetNotificationContactsRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetNotificationContactsResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetNotificationPendNumberRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetNotificationPendNumberResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetResourceControlEventRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetResourceControlEventResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetResourceControlEventShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetSecurityCheckBaseInfoRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetSecurityCheckBaseInfoResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetSecurityCheckResultBaseInfoRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetSecurityCheckResultBaseInfoResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetSecuritySuggestionListRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetSecuritySuggestionListResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetSecuritySuggestionListShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetSecuritySuggestionNumberRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetSecuritySuggestionNumberResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetServiceLinkedRoleStatusRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetServiceLinkedRoleStatusResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetValidDeductInstancesRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetValidDeductInstancesResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetValidDeductInstancesShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\InitSasModuleRuleRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\InitSasModuleRuleResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\InitSasModuleRuleShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\ListVirusScanMachineEventRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\ListVirusScanMachineEventResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\OpenTrialPackageRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\OpenTrialPackageResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\QueryAccountSafetyIncidentRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\QueryAccountSafetyIncidentResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\QueryGuideSubStatusRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\QueryGuideSubStatusResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\QueryResourceControlEventsRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\QueryResourceControlEventsResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\QueryResourceControlEventsShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\QuerySecurityCheckReportRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\QuerySecurityCheckReportResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\StartDisposalToolServiceRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\StartDisposalToolServiceResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\StartSecurityCheckServiceRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\StartSecurityCheckServiceResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\SubmitApplyRecordRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\SubmitApplyRecordResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\SubmitApplyRecordShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\UpdatePostPaidBindRelRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\UpdatePostPaidBindRelResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\UpdatePostPaidBindRelShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\UpdateSecurityCheckResultRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\UpdateSecurityCheckResultResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class RiskManagement extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('riskmanagement', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * sas-绑定授权到机器.
     *
     * @param tmpReq - BindAuthToMachineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindAuthToMachineResponse
     *
     * @param BindAuthToMachineRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return BindAuthToMachineResponse
     */
    public function bindAuthToMachineWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BindAuthToMachineShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sdkRequest) {
            $request->sdkRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sdkRequest, 'SdkRequest', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sdkRequestShrink) {
            @$query['SdkRequest'] = $request->sdkRequestShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindAuthToMachine',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindAuthToMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * sas-绑定授权到机器.
     *
     * @param request - BindAuthToMachineRequest
     *
     * @returns BindAuthToMachineResponse
     *
     * @param BindAuthToMachineRequest $request
     *
     * @return BindAuthToMachineResponse
     */
    public function bindAuthToMachine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAuthToMachineWithOptions($request, $runtime);
    }

    /**
     * sas-初始化云安全中心模块规则.
     *
     * @param tmpReq - CreateSasTrialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSasTrialResponse
     *
     * @param CreateSasTrialRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSasTrialResponse
     */
    public function createSasTrialWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSasTrialShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sdkRequest) {
            $request->sdkRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sdkRequest, 'SdkRequest', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sdkRequestShrink) {
            @$query['SdkRequest'] = $request->sdkRequestShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSasTrial',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSasTrialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * sas-初始化云安全中心模块规则.
     *
     * @param request - CreateSasTrialRequest
     *
     * @returns CreateSasTrialResponse
     *
     * @param CreateSasTrialRequest $request
     *
     * @return CreateSasTrialResponse
     */
    public function createSasTrial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSasTrialWithOptions($request, $runtime);
    }

    /**
     * sas-创建服务关联角色.
     *
     * @param tmpReq - CreateServiceLinkedRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceLinkedRoleResponse
     *
     * @param CreateServiceLinkedRoleRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateServiceLinkedRoleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sdkRequest) {
            $request->sdkRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sdkRequest, 'SdkRequest', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sdkRequestShrink) {
            @$query['SdkRequest'] = $request->sdkRequestShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateServiceLinkedRole',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateServiceLinkedRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * sas-创建服务关联角色.
     *
     * @param request - CreateServiceLinkedRoleRequest
     *
     * @returns CreateServiceLinkedRoleResponse
     *
     * @param CreateServiceLinkedRoleRequest $request
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * 创建全盘扫描任务
     *
     * @param request - CreateVirusScanOnceTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVirusScanOnceTaskResponse
     *
     * @param CreateVirusScanOnceTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateVirusScanOnceTaskResponse
     */
    public function createVirusScanOnceTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVirusScanOnceTask',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVirusScanOnceTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建全盘扫描任务
     *
     * @param request - CreateVirusScanOnceTaskRequest
     *
     * @returns CreateVirusScanOnceTaskResponse
     *
     * @param CreateVirusScanOnceTaskRequest $request
     *
     * @return CreateVirusScanOnceTaskResponse
     */
    public function createVirusScanOnceTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVirusScanOnceTaskWithOptions($request, $runtime);
    }

    /**
     * sas-查询云安全中心实例列表.
     *
     * @param tmpReq - DescribeCloudCenterInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudCenterInstancesResponse
     *
     * @param DescribeCloudCenterInstancesRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCloudCenterInstancesResponse
     */
    public function describeCloudCenterInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeCloudCenterInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sdkRequest) {
            $request->sdkRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sdkRequest, 'SdkRequest', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sdkRequestShrink) {
            @$query['SdkRequest'] = $request->sdkRequestShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudCenterInstances',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudCenterInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * sas-查询云安全中心实例列表.
     *
     * @param request - DescribeCloudCenterInstancesRequest
     *
     * @returns DescribeCloudCenterInstancesResponse
     *
     * @param DescribeCloudCenterInstancesRequest $request
     *
     * @return DescribeCloudCenterInstancesResponse
     */
    public function describeCloudCenterInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudCenterInstancesWithOptions($request, $runtime);
    }

    /**
     * sas-查询服务关联角色状态
     *
     * @param tmpReq - DescribeServiceLinkedRoleStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceLinkedRoleStatusResponse
     *
     * @param DescribeServiceLinkedRoleStatusRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeServiceLinkedRoleStatusResponse
     */
    public function describeServiceLinkedRoleStatusWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeServiceLinkedRoleStatusShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sdkRequest) {
            $request->sdkRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sdkRequest, 'SdkRequest', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sdkRequestShrink) {
            @$query['SdkRequest'] = $request->sdkRequestShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceLinkedRoleStatus',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServiceLinkedRoleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * sas-查询服务关联角色状态
     *
     * @param request - DescribeServiceLinkedRoleStatusRequest
     *
     * @returns DescribeServiceLinkedRoleStatusResponse
     *
     * @param DescribeServiceLinkedRoleStatusRequest $request
     *
     * @return DescribeServiceLinkedRoleStatusResponse
     */
    public function describeServiceLinkedRoleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceLinkedRoleStatusWithOptions($request, $runtime);
    }

    /**
     * sas-查询安全告警事件.
     *
     * @param tmpReq - DescribeSuspEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSuspEventsResponse
     *
     * @param DescribeSuspEventsRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSuspEventsResponse
     */
    public function describeSuspEventsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeSuspEventsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sdkRequest) {
            $request->sdkRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sdkRequest, 'SdkRequest', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sdkRequestShrink) {
            @$query['SdkRequest'] = $request->sdkRequestShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSuspEvents',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSuspEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * sas-查询安全告警事件.
     *
     * @param request - DescribeSuspEventsRequest
     *
     * @returns DescribeSuspEventsResponse
     *
     * @param DescribeSuspEventsRequest $request
     *
     * @return DescribeSuspEventsResponse
     */
    public function describeSuspEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSuspEventsWithOptions($request, $runtime);
    }

    /**
     * sas-查看已购买的云安全中心实例的版本详情.
     *
     * @param tmpReq - DescribeVersionConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVersionConfigResponse
     *
     * @param DescribeVersionConfigRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVersionConfigResponse
     */
    public function describeVersionConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeVersionConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sdkRequest) {
            $request->sdkRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sdkRequest, 'SdkRequest', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sdkRequestShrink) {
            @$query['SdkRequest'] = $request->sdkRequestShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVersionConfig',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVersionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * sas-查看已购买的云安全中心实例的版本详情.
     *
     * @param request - DescribeVersionConfigRequest
     *
     * @returns DescribeVersionConfigResponse
     *
     * @param DescribeVersionConfigRequest $request
     *
     * @return DescribeVersionConfigResponse
     */
    public function describeVersionConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVersionConfigWithOptions($request, $runtime);
    }

    /**
     * 获取告警记录分析结果.
     *
     * @param tmpReq - GetAlertRecordAnalysisResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAlertRecordAnalysisResultResponse
     *
     * @param GetAlertRecordAnalysisResultRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return GetAlertRecordAnalysisResultResponse
     */
    public function getAlertRecordAnalysisResultWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetAlertRecordAnalysisResultShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->uniqueTagList) {
            $request->uniqueTagListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->uniqueTagList, 'UniqueTagList', 'json');
        }

        $query = [];
        if (null !== $request->alarmUniqueInfo) {
            @$query['AlarmUniqueInfo'] = $request->alarmUniqueInfo;
        }

        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->uniqueInfo) {
            @$query['UniqueInfo'] = $request->uniqueInfo;
        }

        if (null !== $request->uniqueTagListShrink) {
            @$query['UniqueTagList'] = $request->uniqueTagListShrink;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAlertRecordAnalysisResult',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAlertRecordAnalysisResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取告警记录分析结果.
     *
     * @param request - GetAlertRecordAnalysisResultRequest
     *
     * @returns GetAlertRecordAnalysisResultResponse
     *
     * @param GetAlertRecordAnalysisResultRequest $request
     *
     * @return GetAlertRecordAnalysisResultResponse
     */
    public function getAlertRecordAnalysisResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlertRecordAnalysisResultWithOptions($request, $runtime);
    }

    /**
     * 调用云安全中心部分接口.
     *
     * @param tmpReq - GetAliYunSafeCenterResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAliYunSafeCenterResultResponse
     *
     * @param GetAliYunSafeCenterResultRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return GetAliYunSafeCenterResultResponse
     */
    public function getAliYunSafeCenterResultWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetAliYunSafeCenterResultShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->createSimilarSecurityEventsQueryTaskRequest) {
            $request->createSimilarSecurityEventsQueryTaskRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->createSimilarSecurityEventsQueryTaskRequest, 'CreateSimilarSecurityEventsQueryTaskRequest', 'json');
        }

        if (null !== $tmpReq->describeInstancesFullStatusRequest) {
            $request->describeInstancesFullStatusRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->describeInstancesFullStatusRequest, 'DescribeInstancesFullStatusRequest', 'json');
        }

        if (null !== $tmpReq->describeSecurityEventOperationStatusRequest) {
            $request->describeSecurityEventOperationStatusRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->describeSecurityEventOperationStatusRequest, 'DescribeSecurityEventOperationStatusRequest', 'json');
        }

        if (null !== $tmpReq->describeSimilarSecurityEventsRequest) {
            $request->describeSimilarSecurityEventsRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->describeSimilarSecurityEventsRequest, 'DescribeSimilarSecurityEventsRequest', 'json');
        }

        if (null !== $tmpReq->getAssetDetailByUuidRequest) {
            $request->getAssetDetailByUuidRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->getAssetDetailByUuidRequest, 'GetAssetDetailByUuidRequest', 'json');
        }

        if (null !== $tmpReq->handleSecurityEventsRequest) {
            $request->handleSecurityEventsRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->handleSecurityEventsRequest, 'HandleSecurityEventsRequest', 'json');
        }

        if (null !== $tmpReq->handleSimilarSecurityEventsRequest) {
            $request->handleSimilarSecurityEventsRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->handleSimilarSecurityEventsRequest, 'HandleSimilarSecurityEventsRequest', 'json');
        }

        if (null !== $tmpReq->listInstancesRequest) {
            $request->listInstancesRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->listInstancesRequest, 'ListInstancesRequest', 'json');
        }

        $query = [];
        if (null !== $request->createSimilarSecurityEventsQueryTaskRequestShrink) {
            @$query['CreateSimilarSecurityEventsQueryTaskRequest'] = $request->createSimilarSecurityEventsQueryTaskRequestShrink;
        }

        if (null !== $request->describeInstancesFullStatusRequestShrink) {
            @$query['DescribeInstancesFullStatusRequest'] = $request->describeInstancesFullStatusRequestShrink;
        }

        if (null !== $request->describeSecurityEventOperationStatusRequestShrink) {
            @$query['DescribeSecurityEventOperationStatusRequest'] = $request->describeSecurityEventOperationStatusRequestShrink;
        }

        if (null !== $request->describeSimilarSecurityEventsRequestShrink) {
            @$query['DescribeSimilarSecurityEventsRequest'] = $request->describeSimilarSecurityEventsRequestShrink;
        }

        if (null !== $request->getAssetDetailByUuidRequestShrink) {
            @$query['GetAssetDetailByUuidRequest'] = $request->getAssetDetailByUuidRequestShrink;
        }

        if (null !== $request->handleSecurityEventsRequestShrink) {
            @$query['HandleSecurityEventsRequest'] = $request->handleSecurityEventsRequestShrink;
        }

        if (null !== $request->handleSimilarSecurityEventsRequestShrink) {
            @$query['HandleSimilarSecurityEventsRequest'] = $request->handleSimilarSecurityEventsRequestShrink;
        }

        if (null !== $request->interfaceCode) {
            @$query['InterfaceCode'] = $request->interfaceCode;
        }

        if (null !== $request->listInstancesRequestShrink) {
            @$query['ListInstancesRequest'] = $request->listInstancesRequestShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAliYunSafeCenterResult',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAliYunSafeCenterResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用云安全中心部分接口.
     *
     * @param request - GetAliYunSafeCenterResultRequest
     *
     * @returns GetAliYunSafeCenterResultResponse
     *
     * @param GetAliYunSafeCenterResultRequest $request
     *
     * @return GetAliYunSafeCenterResultResponse
     */
    public function getAliYunSafeCenterResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAliYunSafeCenterResultWithOptions($request, $runtime);
    }

    /**
     * sas-获取能否试用.
     *
     * @param tmpReq - GetCanTrySasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCanTrySasResponse
     *
     * @param GetCanTrySasRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return GetCanTrySasResponse
     */
    public function getCanTrySasWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetCanTrySasShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sdkRequest) {
            $request->sdkRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sdkRequest, 'SdkRequest', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sdkRequestShrink) {
            @$query['SdkRequest'] = $request->sdkRequestShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCanTrySas',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCanTrySasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * sas-获取能否试用.
     *
     * @param request - GetCanTrySasRequest
     *
     * @returns GetCanTrySasResponse
     *
     * @param GetCanTrySasRequest $request
     *
     * @return GetCanTrySasResponse
     */
    public function getCanTrySas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCanTrySasWithOptions($request, $runtime);
    }

    /**
     * 获取安全合规包id.
     *
     * @param request - GetCompliancePackIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCompliancePackIdResponse
     *
     * @param GetCompliancePackIdRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetCompliancePackIdResponse
     */
    public function getCompliancePackIdWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetCompliancePackId',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCompliancePackIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取安全合规包id.
     *
     * @param request - GetCompliancePackIdRequest
     *
     * @returns GetCompliancePackIdResponse
     *
     * @param GetCompliancePackIdRequest $request
     *
     * @return GetCompliancePackIdResponse
     */
    public function getCompliancePackId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCompliancePackIdWithOptions($request, $runtime);
    }

    /**
     * 获取一键处置赋权状态
     *
     * @param request - GetDisposalToolStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDisposalToolStatusResponse
     *
     * @param GetDisposalToolStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDisposalToolStatusResponse
     */
    public function getDisposalToolStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDisposalToolStatus',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDisposalToolStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取一键处置赋权状态
     *
     * @param request - GetDisposalToolStatusRequest
     *
     * @returns GetDisposalToolStatusResponse
     *
     * @param GetDisposalToolStatusRequest $request
     *
     * @return GetDisposalToolStatusResponse
     */
    public function getDisposalToolStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDisposalToolStatusWithOptions($request, $runtime);
    }

    /**
     * 获取用户确认安全联系人记录.
     *
     * @param request - GetNotificationClickRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNotificationClickRecordResponse
     *
     * @param GetNotificationClickRecordRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetNotificationClickRecordResponse
     */
    public function getNotificationClickRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetNotificationClickRecord',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNotificationClickRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用户确认安全联系人记录.
     *
     * @param request - GetNotificationClickRecordRequest
     *
     * @returns GetNotificationClickRecordResponse
     *
     * @param GetNotificationClickRecordRequest $request
     *
     * @return GetNotificationClickRecordResponse
     */
    public function getNotificationClickRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNotificationClickRecordWithOptions($request, $runtime);
    }

    /**
     * 获取安全联系人全部信息.
     *
     * @param request - GetNotificationContactsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNotificationContactsResponse
     *
     * @param GetNotificationContactsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetNotificationContactsResponse
     */
    public function getNotificationContactsWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetNotificationContacts',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNotificationContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取安全联系人全部信息.
     *
     * @param request - GetNotificationContactsRequest
     *
     * @returns GetNotificationContactsResponse
     *
     * @param GetNotificationContactsRequest $request
     *
     * @return GetNotificationContactsResponse
     */
    public function getNotificationContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNotificationContactsWithOptions($request, $runtime);
    }

    /**
     * 获取安全联系人待处理数.
     *
     * @param request - GetNotificationPendNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNotificationPendNumberResponse
     *
     * @param GetNotificationPendNumberRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetNotificationPendNumberResponse
     */
    public function getNotificationPendNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetNotificationPendNumber',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNotificationPendNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取安全联系人待处理数.
     *
     * @param request - GetNotificationPendNumberRequest
     *
     * @returns GetNotificationPendNumberResponse
     *
     * @param GetNotificationPendNumberRequest $request
     *
     * @return GetNotificationPendNumberResponse
     */
    public function getNotificationPendNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNotificationPendNumberWithOptions($request, $runtime);
    }

    /**
     * 查询云资源管控事件详情.
     *
     * @param tmpReq - GetResourceControlEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceControlEventResponse
     *
     * @param GetResourceControlEventRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return GetResourceControlEventResponse
     */
    public function getResourceControlEventWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetResourceControlEventShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->eventIdList) {
            $request->eventIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventIdList, 'EventIdList', 'json');
        }

        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        if (null !== $request->eventIdListShrink) {
            @$query['EventIdList'] = $request->eventIdListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceControlEvent',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetResourceControlEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询云资源管控事件详情.
     *
     * @param request - GetResourceControlEventRequest
     *
     * @returns GetResourceControlEventResponse
     *
     * @param GetResourceControlEventRequest $request
     *
     * @return GetResourceControlEventResponse
     */
    public function getResourceControlEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceControlEventWithOptions($request, $runtime);
    }

    /**
     * 获取安全体检基础信息.
     *
     * @param request - GetSecurityCheckBaseInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecurityCheckBaseInfoResponse
     *
     * @param GetSecurityCheckBaseInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetSecurityCheckBaseInfoResponse
     */
    public function getSecurityCheckBaseInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetSecurityCheckBaseInfo',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSecurityCheckBaseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取安全体检基础信息.
     *
     * @param request - GetSecurityCheckBaseInfoRequest
     *
     * @returns GetSecurityCheckBaseInfoResponse
     *
     * @param GetSecurityCheckBaseInfoRequest $request
     *
     * @return GetSecurityCheckBaseInfoResponse
     */
    public function getSecurityCheckBaseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecurityCheckBaseInfoWithOptions($request, $runtime);
    }

    /**
     * 获取安全检查结果基础信息.
     *
     * @param request - GetSecurityCheckResultBaseInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecurityCheckResultBaseInfoResponse
     *
     * @param GetSecurityCheckResultBaseInfoRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetSecurityCheckResultBaseInfoResponse
     */
    public function getSecurityCheckResultBaseInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetSecurityCheckResultBaseInfo',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSecurityCheckResultBaseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取安全检查结果基础信息.
     *
     * @param request - GetSecurityCheckResultBaseInfoRequest
     *
     * @returns GetSecurityCheckResultBaseInfoResponse
     *
     * @param GetSecurityCheckResultBaseInfoRequest $request
     *
     * @return GetSecurityCheckResultBaseInfoResponse
     */
    public function getSecurityCheckResultBaseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecurityCheckResultBaseInfoWithOptions($request, $runtime);
    }

    /**
     * 获取安全优化建议列表.
     *
     * @param tmpReq - GetSecuritySuggestionListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecuritySuggestionListResponse
     *
     * @param GetSecuritySuggestionListRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return GetSecuritySuggestionListResponse
     */
    public function getSecuritySuggestionListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetSecuritySuggestionListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->listConfigRulesRequest) {
            $request->listConfigRulesRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->listConfigRulesRequest, 'ListConfigRulesRequest', 'json');
        }

        $query = [];
        if (null !== $request->listConfigRulesRequestShrink) {
            @$query['ListConfigRulesRequest'] = $request->listConfigRulesRequestShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSecuritySuggestionList',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSecuritySuggestionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取安全优化建议列表.
     *
     * @param request - GetSecuritySuggestionListRequest
     *
     * @returns GetSecuritySuggestionListResponse
     *
     * @param GetSecuritySuggestionListRequest $request
     *
     * @return GetSecuritySuggestionListResponse
     */
    public function getSecuritySuggestionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecuritySuggestionListWithOptions($request, $runtime);
    }

    /**
     * 获取安全优化建议条数.
     *
     * @param request - GetSecuritySuggestionNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecuritySuggestionNumberResponse
     *
     * @param GetSecuritySuggestionNumberRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetSecuritySuggestionNumberResponse
     */
    public function getSecuritySuggestionNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetSecuritySuggestionNumber',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSecuritySuggestionNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取安全优化建议条数.
     *
     * @param request - GetSecuritySuggestionNumberRequest
     *
     * @returns GetSecuritySuggestionNumberResponse
     *
     * @param GetSecuritySuggestionNumberRequest $request
     *
     * @return GetSecuritySuggestionNumberResponse
     */
    public function getSecuritySuggestionNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecuritySuggestionNumberWithOptions($request, $runtime);
    }

    /**
     * 获取服务关联角色状态
     *
     * @param request - GetServiceLinkedRoleStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetServiceLinkedRoleStatusResponse
     *
     * @param GetServiceLinkedRoleStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetServiceLinkedRoleStatusResponse
     */
    public function getServiceLinkedRoleStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetServiceLinkedRoleStatus',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetServiceLinkedRoleStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取服务关联角色状态
     *
     * @param request - GetServiceLinkedRoleStatusRequest
     *
     * @returns GetServiceLinkedRoleStatusResponse
     *
     * @param GetServiceLinkedRoleStatusRequest $request
     *
     * @return GetServiceLinkedRoleStatusResponse
     */
    public function getServiceLinkedRoleStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceLinkedRoleStatusWithOptions($request, $runtime);
    }

    /**
     * sas-获取有效抵扣实例.
     *
     * @param tmpReq - GetValidDeductInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetValidDeductInstancesResponse
     *
     * @param GetValidDeductInstancesRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return GetValidDeductInstancesResponse
     */
    public function getValidDeductInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetValidDeductInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sdkRequest) {
            $request->sdkRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sdkRequest, 'SdkRequest', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sdkRequestShrink) {
            @$query['SdkRequest'] = $request->sdkRequestShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetValidDeductInstances',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetValidDeductInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * sas-获取有效抵扣实例.
     *
     * @param request - GetValidDeductInstancesRequest
     *
     * @returns GetValidDeductInstancesResponse
     *
     * @param GetValidDeductInstancesRequest $request
     *
     * @return GetValidDeductInstancesResponse
     */
    public function getValidDeductInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getValidDeductInstancesWithOptions($request, $runtime);
    }

    /**
     * sas-初始化云安全中心模块规则.
     *
     * @param tmpReq - InitSasModuleRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitSasModuleRuleResponse
     *
     * @param InitSasModuleRuleRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return InitSasModuleRuleResponse
     */
    public function initSasModuleRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new InitSasModuleRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instances) {
            $request->instancesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instances, 'Instances', 'json');
        }

        $query = [];
        if (null !== $request->autoBind) {
            @$query['AutoBind'] = $request->autoBind;
        }

        if (null !== $request->instancesShrink) {
            @$query['Instances'] = $request->instancesShrink;
        }

        if (null !== $request->isTrial) {
            @$query['IsTrial'] = $request->isTrial;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InitSasModuleRule',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitSasModuleRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * sas-初始化云安全中心模块规则.
     *
     * @param request - InitSasModuleRuleRequest
     *
     * @returns InitSasModuleRuleResponse
     *
     * @param InitSasModuleRuleRequest $request
     *
     * @return InitSasModuleRuleResponse
     */
    public function initSasModuleRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initSasModuleRuleWithOptions($request, $runtime);
    }

    /**
     * 查询全盘扫描结果.
     *
     * @param request - ListVirusScanMachineEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVirusScanMachineEventResponse
     *
     * @param ListVirusScanMachineEventRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListVirusScanMachineEventResponse
     */
    public function listVirusScanMachineEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->operateTaskId) {
            @$query['OperateTaskId'] = $request->operateTaskId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVirusScanMachineEvent',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVirusScanMachineEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询全盘扫描结果.
     *
     * @param request - ListVirusScanMachineEventRequest
     *
     * @returns ListVirusScanMachineEventResponse
     *
     * @param ListVirusScanMachineEventRequest $request
     *
     * @return ListVirusScanMachineEventResponse
     */
    public function listVirusScanMachineEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVirusScanMachineEventWithOptions($request, $runtime);
    }

    /**
     * sas-开启试用套餐.
     *
     * @param request - OpenTrialPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenTrialPackageResponse
     *
     * @param OpenTrialPackageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return OpenTrialPackageResponse
     */
    public function openTrialPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoCloseSwitch) {
            @$query['AutoCloseSwitch'] = $request->autoCloseSwitch;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenTrialPackage',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenTrialPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * sas-开启试用套餐.
     *
     * @param request - OpenTrialPackageRequest
     *
     * @returns OpenTrialPackageResponse
     *
     * @param OpenTrialPackageRequest $request
     *
     * @return OpenTrialPackageResponse
     */
    public function openTrialPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openTrialPackageWithOptions($request, $runtime);
    }

    /**
     * 查询账号安全事件.
     *
     * @param request - QueryAccountSafetyIncidentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAccountSafetyIncidentResponse
     *
     * @param QueryAccountSafetyIncidentRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryAccountSafetyIncidentResponse
     */
    public function queryAccountSafetyIncidentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->caseCode) {
            @$query['CaseCode'] = $request->caseCode;
        }

        if (null !== $request->current) {
            @$query['Current'] = $request->current;
        }

        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->punishEndTime) {
            @$query['PunishEndTime'] = $request->punishEndTime;
        }

        if (null !== $request->punishStartTime) {
            @$query['PunishStartTime'] = $request->punishStartTime;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAccountSafetyIncident',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAccountSafetyIncidentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询账号安全事件.
     *
     * @param request - QueryAccountSafetyIncidentRequest
     *
     * @returns QueryAccountSafetyIncidentResponse
     *
     * @param QueryAccountSafetyIncidentRequest $request
     *
     * @return QueryAccountSafetyIncidentResponse
     */
    public function queryAccountSafetyIncident($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountSafetyIncidentWithOptions($request, $runtime);
    }

    /**
     * 查询云上安全指南的订阅状态
     *
     * @param request - QueryGuideSubStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryGuideSubStatusResponse
     *
     * @param QueryGuideSubStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryGuideSubStatusResponse
     */
    public function queryGuideSubStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'QueryGuideSubStatus',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryGuideSubStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询云上安全指南的订阅状态
     *
     * @param request - QueryGuideSubStatusRequest
     *
     * @returns QueryGuideSubStatusResponse
     *
     * @param QueryGuideSubStatusRequest $request
     *
     * @return QueryGuideSubStatusResponse
     */
    public function queryGuideSubStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGuideSubStatusWithOptions($request, $runtime);
    }

    /**
     * 查询云资源管控事件.
     *
     * @param tmpReq - QueryResourceControlEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryResourceControlEventsResponse
     *
     * @param QueryResourceControlEventsRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryResourceControlEventsResponse
     */
    public function queryResourceControlEventsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryResourceControlEventsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->actionCodes) {
            $request->actionCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->actionCodes, 'ActionCodes', 'json');
        }

        if (null !== $tmpReq->caseCodesPrefix) {
            $request->caseCodesPrefixShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->caseCodesPrefix, 'CaseCodesPrefix', 'json');
        }

        if (null !== $tmpReq->eventCodes) {
            $request->eventCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventCodes, 'EventCodes', 'json');
        }

        if (null !== $tmpReq->eventIdList) {
            $request->eventIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventIdList, 'EventIdList', 'json');
        }

        if (null !== $tmpReq->excludeActionCodes) {
            $request->excludeActionCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->excludeActionCodes, 'ExcludeActionCodes', 'json');
        }

        if (null !== $tmpReq->excludeEventCodes) {
            $request->excludeEventCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->excludeEventCodes, 'ExcludeEventCodes', 'json');
        }

        if (null !== $tmpReq->excludeReasons) {
            $request->excludeReasonsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->excludeReasons, 'ExcludeReasons', 'json');
        }

        if (null !== $tmpReq->includeReasons) {
            $request->includeReasonsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->includeReasons, 'IncludeReasons', 'json');
        }

        if (null !== $tmpReq->sourceCodes) {
            $request->sourceCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceCodes, 'SourceCodes', 'json');
        }

        if (null !== $tmpReq->statusList) {
            $request->statusListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->statusList, 'StatusList', 'json');
        }

        $query = [];
        if (null !== $request->actionCode) {
            @$query['ActionCode'] = $request->actionCode;
        }

        if (null !== $request->actionCodesShrink) {
            @$query['ActionCodes'] = $request->actionCodesShrink;
        }

        if (null !== $request->aliyunLang) {
            @$query['AliyunLang'] = $request->aliyunLang;
        }

        if (null !== $request->businessCode) {
            @$query['BusinessCode'] = $request->businessCode;
        }

        if (null !== $request->caseCodesPrefixShrink) {
            @$query['CaseCodesPrefix'] = $request->caseCodesPrefixShrink;
        }

        if (null !== $request->current) {
            @$query['Current'] = $request->current;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->eventCode) {
            @$query['EventCode'] = $request->eventCode;
        }

        if (null !== $request->eventCodesShrink) {
            @$query['EventCodes'] = $request->eventCodesShrink;
        }

        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        if (null !== $request->eventIdListShrink) {
            @$query['EventIdList'] = $request->eventIdListShrink;
        }

        if (null !== $request->excludeActionCodesShrink) {
            @$query['ExcludeActionCodes'] = $request->excludeActionCodesShrink;
        }

        if (null !== $request->excludeEventCodesShrink) {
            @$query['ExcludeEventCodes'] = $request->excludeEventCodesShrink;
        }

        if (null !== $request->excludeReasonsShrink) {
            @$query['ExcludeReasons'] = $request->excludeReasonsShrink;
        }

        if (null !== $request->includeReasonsShrink) {
            @$query['IncludeReasons'] = $request->includeReasonsShrink;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->punishEndTime) {
            @$query['PunishEndTime'] = $request->punishEndTime;
        }

        if (null !== $request->punishStartTime) {
            @$query['PunishStartTime'] = $request->punishStartTime;
        }

        if (null !== $request->reason) {
            @$query['Reason'] = $request->reason;
        }

        if (null !== $request->sourceCodesShrink) {
            @$query['SourceCodes'] = $request->sourceCodesShrink;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->statusListShrink) {
            @$query['StatusList'] = $request->statusListShrink;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryResourceControlEvents',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryResourceControlEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询云资源管控事件.
     *
     * @param request - QueryResourceControlEventsRequest
     *
     * @returns QueryResourceControlEventsResponse
     *
     * @param QueryResourceControlEventsRequest $request
     *
     * @return QueryResourceControlEventsResponse
     */
    public function queryResourceControlEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryResourceControlEventsWithOptions($request, $runtime);
    }

    /**
     * 查询安全体检简报.
     *
     * @param request - QuerySecurityCheckReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySecurityCheckReportResponse
     *
     * @param QuerySecurityCheckReportRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QuerySecurityCheckReportResponse
     */
    public function querySecurityCheckReportWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'QuerySecurityCheckReport',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySecurityCheckReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询安全体检简报.
     *
     * @param request - QuerySecurityCheckReportRequest
     *
     * @returns QuerySecurityCheckReportResponse
     *
     * @param QuerySecurityCheckReportRequest $request
     *
     * @return QuerySecurityCheckReportResponse
     */
    public function querySecurityCheckReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySecurityCheckReportWithOptions($request, $runtime);
    }

    /**
     * 开启处置工具授权.
     *
     * @param request - StartDisposalToolServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartDisposalToolServiceResponse
     *
     * @param StartDisposalToolServiceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return StartDisposalToolServiceResponse
     */
    public function startDisposalToolServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartDisposalToolService',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartDisposalToolServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开启处置工具授权.
     *
     * @param request - StartDisposalToolServiceRequest
     *
     * @returns StartDisposalToolServiceResponse
     *
     * @param StartDisposalToolServiceRequest $request
     *
     * @return StartDisposalToolServiceResponse
     */
    public function startDisposalToolService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDisposalToolServiceWithOptions($request, $runtime);
    }

    /**
     * 开启安全体检
     *
     * @param request - StartSecurityCheckServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartSecurityCheckServiceResponse
     *
     * @param StartSecurityCheckServiceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return StartSecurityCheckServiceResponse
     */
    public function startSecurityCheckServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'StartSecurityCheckService',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartSecurityCheckServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 开启安全体检
     *
     * @param request - StartSecurityCheckServiceRequest
     *
     * @returns StartSecurityCheckServiceResponse
     *
     * @param StartSecurityCheckServiceRequest $request
     *
     * @return StartSecurityCheckServiceResponse
     */
    public function startSecurityCheckService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSecurityCheckServiceWithOptions($request, $runtime);
    }

    /**
     * 申请解封
     *
     * @param tmpReq - SubmitApplyRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitApplyRecordResponse
     *
     * @param SubmitApplyRecordRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitApplyRecordResponse
     */
    public function submitApplyRecordWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitApplyRecordShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->eventIdList) {
            $request->eventIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventIdList, 'EventIdList', 'json');
        }

        $query = [];
        if (null !== $request->applyRequest) {
            @$query['ApplyRequest'] = $request->applyRequest;
        }

        if (null !== $request->commitmentLetter) {
            @$query['CommitmentLetter'] = $request->commitmentLetter;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->eventIdListShrink) {
            @$query['EventIdList'] = $request->eventIdListShrink;
        }

        if (null !== $request->qualificationProof) {
            @$query['QualificationProof'] = $request->qualificationProof;
        }

        if (null !== $request->trial) {
            @$query['Trial'] = $request->trial;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitApplyRecord',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitApplyRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 申请解封
     *
     * @param request - SubmitApplyRecordRequest
     *
     * @returns SubmitApplyRecordResponse
     *
     * @param SubmitApplyRecordRequest $request
     *
     * @return SubmitApplyRecordResponse
     */
    public function submitApplyRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitApplyRecordWithOptions($request, $runtime);
    }

    /**
     * sas-更新后付费绑定关系.
     *
     * @param tmpReq - UpdatePostPaidBindRelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePostPaidBindRelResponse
     *
     * @param UpdatePostPaidBindRelRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return UpdatePostPaidBindRelResponse
     */
    public function updatePostPaidBindRelWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdatePostPaidBindRelShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sdkRequest) {
            $request->sdkRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sdkRequest, 'SdkRequest', 'json');
        }

        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sdkRequestShrink) {
            @$query['SdkRequest'] = $request->sdkRequestShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePostPaidBindRel',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePostPaidBindRelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * sas-更新后付费绑定关系.
     *
     * @param request - UpdatePostPaidBindRelRequest
     *
     * @returns UpdatePostPaidBindRelResponse
     *
     * @param UpdatePostPaidBindRelRequest $request
     *
     * @return UpdatePostPaidBindRelResponse
     */
    public function updatePostPaidBindRel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePostPaidBindRelWithOptions($request, $runtime);
    }

    /**
     * 更新体检结果.
     *
     * @param request - UpdateSecurityCheckResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSecurityCheckResultResponse
     *
     * @param UpdateSecurityCheckResultRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateSecurityCheckResultResponse
     */
    public function updateSecurityCheckResultWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'UpdateSecurityCheckResult',
            'version' => '2026-04-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSecurityCheckResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新体检结果.
     *
     * @param request - UpdateSecurityCheckResultRequest
     *
     * @returns UpdateSecurityCheckResultResponse
     *
     * @param UpdateSecurityCheckResultRequest $request
     *
     * @return UpdateSecurityCheckResultResponse
     */
    public function updateSecurityCheckResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSecurityCheckResultWithOptions($request, $runtime);
    }
}
