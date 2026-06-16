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
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAlertRecordAnalysisResultRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAlertRecordAnalysisResultResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAlertRecordAnalysisResultShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAliYunSafeCenterResultRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAliYunSafeCenterResultResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAliYunSafeCenterResultShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetCanTrySasRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetCanTrySasResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetCanTrySasShrinkRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetDisposalToolStatusRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetDisposalToolStatusResponse;
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
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\QuerySecurityCheckReportRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\QuerySecurityCheckReportResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\StartDisposalToolServiceRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\StartDisposalToolServiceResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\UpdatePostPaidBindRelRequest;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\UpdatePostPaidBindRelResponse;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\UpdatePostPaidBindRelShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class RiskManagement extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
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
}
