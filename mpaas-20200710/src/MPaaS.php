<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20200710;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CancelMpsSchedulerRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CancelMpsSchedulerResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CancelPushSchedulerRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CancelPushSchedulerResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ChangeMcubeMiniTaskStatusRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ChangeMcubeMiniTaskStatusResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ChangeMcubeNebulaTaskStatusRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ChangeMcubeNebulaTaskStatusResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ChangeMcubePublicTaskStatusRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ChangeMcubePublicTaskStatusResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeMiniAppRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeMiniAppResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeMiniTaskRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeMiniTaskResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeNebulaAppRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeNebulaAppResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeNebulaResourceRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeNebulaResourceResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeNebulaTaskRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeNebulaTaskResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeUpgradePackageRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeUpgradePackageResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeUpgradeTaskRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeUpgradeTaskResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeVhostRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeVhostResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeWhitelistForIdeRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeWhitelistForIdeResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeWhitelistRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateMcubeWhitelistResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateOpenGlobalDataRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateOpenGlobalDataResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateOpenSingleDataRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateOpenSingleDataResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\DeleteCubecardWhitelistContentRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\DeleteCubecardWhitelistContentResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\DeleteMcubeMiniAppRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\DeleteMcubeMiniAppResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\DeleteMcubeNebulaAppRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\DeleteMcubeNebulaAppResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\DeleteMcubeUpgradeResourceRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\DeleteMcubeUpgradeResourceResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\DeleteMcubeWhitelistRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\DeleteMcubeWhitelistResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\DeleteMdsWhitelistContentRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\DeleteMdsWhitelistContentResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ExistMcubeRsaKeyRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ExistMcubeRsaKeyResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\GetMcubeFileTokenRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\GetMcubeFileTokenResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\GetMcubeNebulaResourceRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\GetMcubeNebulaResourceResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\GetMcubeNebulaTaskDetailRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\GetMcubeNebulaTaskDetailResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\GetMcubeUpgradePackageInfoRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\GetMcubeUpgradePackageInfoResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\GetMcubeUpgradeTaskInfoRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\GetMcubeUpgradeTaskInfoResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\GetTemplateRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\GetTemplateResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListAnalysisCoreIndexRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListAnalysisCoreIndexResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeMiniAppsRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeMiniAppsResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeMiniPackagesRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeMiniPackagesResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeMiniTasksRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeMiniTasksResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeNebulaAppsRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeNebulaAppsResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeNebulaResourcesRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeNebulaResourcesResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeNebulaTasksRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeNebulaTasksResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeUpgradePackagesRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeUpgradePackagesResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeUpgradeTasksRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeUpgradeTasksResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeWhitelistsRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeWhitelistsResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListTemplatePageRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListTemplatePageResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\PushBroadcastRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\PushBroadcastResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\PushBroadcastShrinkRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\PushMultipleRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\PushMultipleResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\PushMultipleShrinkRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\PushQueryDeviceStateRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\PushQueryDeviceStateResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\PushSimpleRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\PushSimpleResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\PushSimpleShrinkRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\PushTemplateRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\PushTemplateResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\PushTemplateShrinkRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryMcubeMiniPackageRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryMcubeMiniPackageResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryMcubeMiniTaskRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryMcubeMiniTaskResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryMcubeVhostRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryMcubeVhostResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryMpsSchedulerListRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryMpsSchedulerListResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryPushAnalysisCoreIndexRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryPushAnalysisCoreIndexResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryPushAnalysisTaskDetailRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryPushAnalysisTaskDetailResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryPushAnalysisTaskListRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryPushAnalysisTaskListResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryPushSchedulerListRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryPushSchedulerListResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\RevokePushMessageRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\RevokePushMessageResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\RevokePushTaskRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\RevokePushTaskResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\UpdateMcubeWhitelistRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\UpdateMcubeWhitelistResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\UploadMcubeMiniPackageRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\UploadMcubeMiniPackageResponse;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\UploadMcubeRsaKeyRequest;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\UploadMcubeRsaKeyResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class MPaaS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou' => 'mpaas.aliyuncs.com',
            'ap-northeast-1' => 'mpaas.aliyuncs.com',
            'ap-northeast-2-pop' => 'mpaas.aliyuncs.com',
            'ap-south-1' => 'mpaas.aliyuncs.com',
            'ap-southeast-1' => 'mpaas.aliyuncs.com',
            'ap-southeast-2' => 'mpaas.aliyuncs.com',
            'ap-southeast-3' => 'mpaas.aliyuncs.com',
            'ap-southeast-5' => 'mpaas.aliyuncs.com',
            'cn-beijing' => 'mpaas.aliyuncs.com',
            'cn-beijing-finance-1' => 'mpaas.aliyuncs.com',
            'cn-beijing-finance-pop' => 'mpaas.aliyuncs.com',
            'cn-beijing-gov-1' => 'mpaas.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'mpaas.aliyuncs.com',
            'cn-chengdu' => 'mpaas.aliyuncs.com',
            'cn-edge-1' => 'mpaas.aliyuncs.com',
            'cn-fujian' => 'mpaas.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'mpaas.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'mpaas.aliyuncs.com',
            'cn-hangzhou-finance' => 'mpaas.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'mpaas.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'mpaas.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'mpaas.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'mpaas.aliyuncs.com',
            'cn-hangzhou-test-306' => 'mpaas.aliyuncs.com',
            'cn-hongkong' => 'mpaas.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'mpaas.aliyuncs.com',
            'cn-huhehaote' => 'mpaas.aliyuncs.com',
            'cn-north-2-gov-1' => 'mpaas.aliyuncs.com',
            'cn-qingdao' => 'mpaas.aliyuncs.com',
            'cn-qingdao-nebula' => 'mpaas.aliyuncs.com',
            'cn-shanghai' => 'mpaas.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'mpaas.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'mpaas.aliyuncs.com',
            'cn-shanghai-finance-1' => 'mpaas.aliyuncs.com',
            'cn-shanghai-inner' => 'mpaas.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'mpaas.aliyuncs.com',
            'cn-shenzhen' => 'mpaas.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'mpaas.aliyuncs.com',
            'cn-shenzhen-inner' => 'mpaas.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'mpaas.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'mpaas.aliyuncs.com',
            'cn-wuhan' => 'mpaas.aliyuncs.com',
            'cn-yushanfang' => 'mpaas.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'mpaas.aliyuncs.com',
            'cn-zhangjiakou' => 'mpaas.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'mpaas.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'mpaas.aliyuncs.com',
            'eu-central-1' => 'mpaas.aliyuncs.com',
            'eu-west-1' => 'mpaas.aliyuncs.com',
            'eu-west-1-oxs' => 'mpaas.aliyuncs.com',
            'me-east-1' => 'mpaas.aliyuncs.com',
            'rus-west-1-pop' => 'mpaas.aliyuncs.com',
            'us-east-1' => 'mpaas.aliyuncs.com',
            'us-west-1' => 'mpaas.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('mpaas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 取消定时任务
     *
     * @param request - CancelMpsSchedulerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelMpsSchedulerResponse
     *
     * @param CancelMpsSchedulerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CancelMpsSchedulerResponse
     */
    public function cancelMpsSchedulerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->uniqueIds) {
            @$body['UniqueIds'] = $request->uniqueIds;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelMpsScheduler',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelMpsSchedulerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消定时任务
     *
     * @param request - CancelMpsSchedulerRequest
     *
     * @returns CancelMpsSchedulerResponse
     *
     * @param CancelMpsSchedulerRequest $request
     *
     * @return CancelMpsSchedulerResponse
     */
    public function cancelMpsScheduler($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelMpsSchedulerWithOptions($request, $runtime);
    }

    /**
     * @param request - CancelPushSchedulerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelPushSchedulerResponse
     *
     * @param CancelPushSchedulerRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CancelPushSchedulerResponse
     */
    public function cancelPushSchedulerWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->uniqueIds) {
            @$body['UniqueIds'] = $request->uniqueIds;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelPushScheduler',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelPushSchedulerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CancelPushSchedulerRequest
     *
     * @returns CancelPushSchedulerResponse
     *
     * @param CancelPushSchedulerRequest $request
     *
     * @return CancelPushSchedulerResponse
     */
    public function cancelPushScheduler($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelPushSchedulerWithOptions($request, $runtime);
    }

    /**
     * @param request - ChangeMcubeMiniTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeMcubeMiniTaskStatusResponse
     *
     * @param ChangeMcubeMiniTaskStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ChangeMcubeMiniTaskStatusResponse
     */
    public function changeMcubeMiniTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->packageId) {
            @$body['PackageId'] = $request->packageId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskStatus) {
            @$body['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeMcubeMiniTaskStatus',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeMcubeMiniTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ChangeMcubeMiniTaskStatusRequest
     *
     * @returns ChangeMcubeMiniTaskStatusResponse
     *
     * @param ChangeMcubeMiniTaskStatusRequest $request
     *
     * @return ChangeMcubeMiniTaskStatusResponse
     */
    public function changeMcubeMiniTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeMcubeMiniTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - ChangeMcubeNebulaTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeMcubeNebulaTaskStatusResponse
     *
     * @param ChangeMcubeNebulaTaskStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ChangeMcubeNebulaTaskStatusResponse
     */
    public function changeMcubeNebulaTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->packageId) {
            @$body['PackageId'] = $request->packageId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskStatus) {
            @$body['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeMcubeNebulaTaskStatus',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeMcubeNebulaTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ChangeMcubeNebulaTaskStatusRequest
     *
     * @returns ChangeMcubeNebulaTaskStatusResponse
     *
     * @param ChangeMcubeNebulaTaskStatusRequest $request
     *
     * @return ChangeMcubeNebulaTaskStatusResponse
     */
    public function changeMcubeNebulaTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeMcubeNebulaTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - ChangeMcubePublicTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeMcubePublicTaskStatusResponse
     *
     * @param ChangeMcubePublicTaskStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ChangeMcubePublicTaskStatusResponse
     */
    public function changeMcubePublicTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskStatus) {
            @$body['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeMcubePublicTaskStatus',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeMcubePublicTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ChangeMcubePublicTaskStatusRequest
     *
     * @returns ChangeMcubePublicTaskStatusResponse
     *
     * @param ChangeMcubePublicTaskStatusRequest $request
     *
     * @return ChangeMcubePublicTaskStatusResponse
     */
    public function changeMcubePublicTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeMcubePublicTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeMiniAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeMiniAppResponse
     *
     * @param CreateMcubeMiniAppRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMcubeMiniAppResponse
     */
    public function createMcubeMiniAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->h5Name) {
            @$body['H5Name'] = $request->h5Name;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeMiniApp',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeMiniAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeMiniAppRequest
     *
     * @returns CreateMcubeMiniAppResponse
     *
     * @param CreateMcubeMiniAppRequest $request
     *
     * @return CreateMcubeMiniAppResponse
     */
    public function createMcubeMiniApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeMiniAppWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeMiniTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeMiniTaskResponse
     *
     * @param CreateMcubeMiniTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateMcubeMiniTaskResponse
     */
    public function createMcubeMiniTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->greyConfigInfo) {
            @$body['GreyConfigInfo'] = $request->greyConfigInfo;
        }

        if (null !== $request->greyEndtimeData) {
            @$body['GreyEndtimeData'] = $request->greyEndtimeData;
        }

        if (null !== $request->greyNum) {
            @$body['GreyNum'] = $request->greyNum;
        }

        if (null !== $request->memo) {
            @$body['Memo'] = $request->memo;
        }

        if (null !== $request->packageId) {
            @$body['PackageId'] = $request->packageId;
        }

        if (null !== $request->publishMode) {
            @$body['PublishMode'] = $request->publishMode;
        }

        if (null !== $request->publishType) {
            @$body['PublishType'] = $request->publishType;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->whitelistIds) {
            @$body['WhitelistIds'] = $request->whitelistIds;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeMiniTask',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeMiniTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeMiniTaskRequest
     *
     * @returns CreateMcubeMiniTaskResponse
     *
     * @param CreateMcubeMiniTaskRequest $request
     *
     * @return CreateMcubeMiniTaskResponse
     */
    public function createMcubeMiniTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeMiniTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeNebulaAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeNebulaAppResponse
     *
     * @param CreateMcubeNebulaAppRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateMcubeNebulaAppResponse
     */
    public function createMcubeNebulaAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->h5Name) {
            @$body['H5Name'] = $request->h5Name;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeNebulaApp',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeNebulaAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeNebulaAppRequest
     *
     * @returns CreateMcubeNebulaAppResponse
     *
     * @param CreateMcubeNebulaAppRequest $request
     *
     * @return CreateMcubeNebulaAppResponse
     */
    public function createMcubeNebulaApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeNebulaAppWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeNebulaResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeNebulaResourceResponse
     *
     * @param CreateMcubeNebulaResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateMcubeNebulaResourceResponse
     */
    public function createMcubeNebulaResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->autoInstall) {
            @$body['AutoInstall'] = $request->autoInstall;
        }

        if (null !== $request->clientVersionMax) {
            @$body['ClientVersionMax'] = $request->clientVersionMax;
        }

        if (null !== $request->clientVersionMin) {
            @$body['ClientVersionMin'] = $request->clientVersionMin;
        }

        if (null !== $request->customDomainName) {
            @$body['CustomDomainName'] = $request->customDomainName;
        }

        if (null !== $request->extendInfo) {
            @$body['ExtendInfo'] = $request->extendInfo;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->h5Name) {
            @$body['H5Name'] = $request->h5Name;
        }

        if (null !== $request->h5Version) {
            @$body['H5Version'] = $request->h5Version;
        }

        if (null !== $request->installType) {
            @$body['InstallType'] = $request->installType;
        }

        if (null !== $request->mainUrl) {
            @$body['MainUrl'] = $request->mainUrl;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->repeatNebula) {
            @$body['RepeatNebula'] = $request->repeatNebula;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->subUrl) {
            @$body['SubUrl'] = $request->subUrl;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->vhost) {
            @$body['Vhost'] = $request->vhost;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeNebulaResource',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeNebulaResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeNebulaResourceRequest
     *
     * @returns CreateMcubeNebulaResourceResponse
     *
     * @param CreateMcubeNebulaResourceRequest $request
     *
     * @return CreateMcubeNebulaResourceResponse
     */
    public function createMcubeNebulaResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeNebulaResourceWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeNebulaTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeNebulaTaskResponse
     *
     * @param CreateMcubeNebulaTaskRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateMcubeNebulaTaskResponse
     */
    public function createMcubeNebulaTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appCode) {
            @$body['AppCode'] = $request->appCode;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->creator) {
            @$body['Creator'] = $request->creator;
        }

        if (null !== $request->gmtCreate) {
            @$body['GmtCreate'] = $request->gmtCreate;
        }

        if (null !== $request->gmtModified) {
            @$body['GmtModified'] = $request->gmtModified;
        }

        if (null !== $request->gmtModifiedStr) {
            @$body['GmtModifiedStr'] = $request->gmtModifiedStr;
        }

        if (null !== $request->greyConfigInfo) {
            @$body['GreyConfigInfo'] = $request->greyConfigInfo;
        }

        if (null !== $request->greyEndtime) {
            @$body['GreyEndtime'] = $request->greyEndtime;
        }

        if (null !== $request->greyEndtimeData) {
            @$body['GreyEndtimeData'] = $request->greyEndtimeData;
        }

        if (null !== $request->greyEndtimeStr) {
            @$body['GreyEndtimeStr'] = $request->greyEndtimeStr;
        }

        if (null !== $request->greyNum) {
            @$body['GreyNum'] = $request->greyNum;
        }

        if (null !== $request->greyUrl) {
            @$body['GreyUrl'] = $request->greyUrl;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->memo) {
            @$body['Memo'] = $request->memo;
        }

        if (null !== $request->modifier) {
            @$body['Modifier'] = $request->modifier;
        }

        if (null !== $request->packageId) {
            @$body['PackageId'] = $request->packageId;
        }

        if (null !== $request->percent) {
            @$body['Percent'] = $request->percent;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->productVersion) {
            @$body['ProductVersion'] = $request->productVersion;
        }

        if (null !== $request->publishMode) {
            @$body['PublishMode'] = $request->publishMode;
        }

        if (null !== $request->publishType) {
            @$body['PublishType'] = $request->publishType;
        }

        if (null !== $request->releaseVersion) {
            @$body['ReleaseVersion'] = $request->releaseVersion;
        }

        if (null !== $request->resIds) {
            @$body['ResIds'] = $request->resIds;
        }

        if (null !== $request->serialVersionUID) {
            @$body['SerialVersionUID'] = $request->serialVersionUID;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->syncMode) {
            @$body['SyncMode'] = $request->syncMode;
        }

        if (null !== $request->syncResult) {
            @$body['SyncResult'] = $request->syncResult;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskStatus) {
            @$body['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->taskType) {
            @$body['TaskType'] = $request->taskType;
        }

        if (null !== $request->taskVersion) {
            @$body['TaskVersion'] = $request->taskVersion;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->upgradeNoticeNum) {
            @$body['UpgradeNoticeNum'] = $request->upgradeNoticeNum;
        }

        if (null !== $request->upgradeProgress) {
            @$body['UpgradeProgress'] = $request->upgradeProgress;
        }

        if (null !== $request->whitelistIds) {
            @$body['WhitelistIds'] = $request->whitelistIds;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeNebulaTask',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeNebulaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeNebulaTaskRequest
     *
     * @returns CreateMcubeNebulaTaskResponse
     *
     * @param CreateMcubeNebulaTaskRequest $request
     *
     * @return CreateMcubeNebulaTaskResponse
     */
    public function createMcubeNebulaTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeNebulaTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeUpgradePackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeUpgradePackageResponse
     *
     * @param CreateMcubeUpgradePackageRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateMcubeUpgradePackageResponse
     */
    public function createMcubeUpgradePackageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appVersion) {
            @$body['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->appstoreUrl) {
            @$body['AppstoreUrl'] = $request->appstoreUrl;
        }

        if (null !== $request->bundleId) {
            @$body['BundleId'] = $request->bundleId;
        }

        if (null !== $request->customDomainName) {
            @$body['CustomDomainName'] = $request->customDomainName;
        }

        if (null !== $request->desc) {
            @$body['Desc'] = $request->desc;
        }

        if (null !== $request->downloadUrl) {
            @$body['DownloadUrl'] = $request->downloadUrl;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->iconFileUrl) {
            @$body['IconFileUrl'] = $request->iconFileUrl;
        }

        if (null !== $request->installAmount) {
            @$body['InstallAmount'] = $request->installAmount;
        }

        if (null !== $request->iosSymbolfileUrl) {
            @$body['IosSymbolfileUrl'] = $request->iosSymbolfileUrl;
        }

        if (null !== $request->isEnterprise) {
            @$body['IsEnterprise'] = $request->isEnterprise;
        }

        if (null !== $request->needCheck) {
            @$body['NeedCheck'] = $request->needCheck;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->validDays) {
            @$body['ValidDays'] = $request->validDays;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeUpgradePackage',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeUpgradePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeUpgradePackageRequest
     *
     * @returns CreateMcubeUpgradePackageResponse
     *
     * @param CreateMcubeUpgradePackageRequest $request
     *
     * @return CreateMcubeUpgradePackageResponse
     */
    public function createMcubeUpgradePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeUpgradePackageWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeUpgradeTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeUpgradeTaskResponse
     *
     * @param CreateMcubeUpgradeTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateMcubeUpgradeTaskResponse
     */
    public function createMcubeUpgradeTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->greyConfigInfo) {
            @$body['GreyConfigInfo'] = $request->greyConfigInfo;
        }

        if (null !== $request->greyEndtimeData) {
            @$body['GreyEndtimeData'] = $request->greyEndtimeData;
        }

        if (null !== $request->greyNum) {
            @$body['GreyNum'] = $request->greyNum;
        }

        if (null !== $request->historyForce) {
            @$body['HistoryForce'] = $request->historyForce;
        }

        if (null !== $request->memo) {
            @$body['Memo'] = $request->memo;
        }

        if (null !== $request->packageInfoId) {
            @$body['PackageInfoId'] = $request->packageInfoId;
        }

        if (null !== $request->publishMode) {
            @$body['PublishMode'] = $request->publishMode;
        }

        if (null !== $request->publishType) {
            @$body['PublishType'] = $request->publishType;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->upgradeContent) {
            @$body['UpgradeContent'] = $request->upgradeContent;
        }

        if (null !== $request->upgradeType) {
            @$body['UpgradeType'] = $request->upgradeType;
        }

        if (null !== $request->whitelistIds) {
            @$body['WhitelistIds'] = $request->whitelistIds;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeUpgradeTask',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeUpgradeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeUpgradeTaskRequest
     *
     * @returns CreateMcubeUpgradeTaskResponse
     *
     * @param CreateMcubeUpgradeTaskRequest $request
     *
     * @return CreateMcubeUpgradeTaskResponse
     */
    public function createMcubeUpgradeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeUpgradeTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeVhostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeVhostResponse
     *
     * @param CreateMcubeVhostRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateMcubeVhostResponse
     */
    public function createMcubeVhostWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->vhost) {
            @$body['Vhost'] = $request->vhost;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeVhost',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeVhostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeVhostRequest
     *
     * @returns CreateMcubeVhostResponse
     *
     * @param CreateMcubeVhostRequest $request
     *
     * @return CreateMcubeVhostResponse
     */
    public function createMcubeVhost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeVhostWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeWhitelistResponse
     *
     * @param CreateMcubeWhitelistRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateMcubeWhitelistResponse
     */
    public function createMcubeWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->whiteListName) {
            @$body['WhiteListName'] = $request->whiteListName;
        }

        if (null !== $request->whitelistType) {
            @$body['WhitelistType'] = $request->whitelistType;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeWhitelist',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeWhitelistRequest
     *
     * @returns CreateMcubeWhitelistResponse
     *
     * @param CreateMcubeWhitelistRequest $request
     *
     * @return CreateMcubeWhitelistResponse
     */
    public function createMcubeWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMcubeWhitelistForIdeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMcubeWhitelistForIdeResponse
     *
     * @param CreateMcubeWhitelistForIdeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateMcubeWhitelistForIdeResponse
     */
    public function createMcubeWhitelistForIdeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        if (null !== $request->whitelistValue) {
            @$body['WhitelistValue'] = $request->whitelistValue;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMcubeWhitelistForIde',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMcubeWhitelistForIdeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMcubeWhitelistForIdeRequest
     *
     * @returns CreateMcubeWhitelistForIdeResponse
     *
     * @param CreateMcubeWhitelistForIdeRequest $request
     *
     * @return CreateMcubeWhitelistForIdeResponse
     */
    public function createMcubeWhitelistForIde($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMcubeWhitelistForIdeWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateOpenGlobalDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOpenGlobalDataResponse
     *
     * @param CreateOpenGlobalDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateOpenGlobalDataResponse
     */
    public function createOpenGlobalDataWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appMaxVersion) {
            @$body['AppMaxVersion'] = $request->appMaxVersion;
        }

        if (null !== $request->appMinVersion) {
            @$body['AppMinVersion'] = $request->appMinVersion;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->extAttrStr) {
            @$body['ExtAttrStr'] = $request->extAttrStr;
        }

        if (null !== $request->maxUid) {
            @$body['MaxUid'] = $request->maxUid;
        }

        if (null !== $request->minUid) {
            @$body['MinUid'] = $request->minUid;
        }

        if (null !== $request->osType) {
            @$body['OsType'] = $request->osType;
        }

        if (null !== $request->payload) {
            @$body['Payload'] = $request->payload;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->thirdMsgId) {
            @$body['ThirdMsgId'] = $request->thirdMsgId;
        }

        if (null !== $request->uids) {
            @$body['Uids'] = $request->uids;
        }

        if (null !== $request->validTimeEnd) {
            @$body['ValidTimeEnd'] = $request->validTimeEnd;
        }

        if (null !== $request->validTimeStart) {
            @$body['ValidTimeStart'] = $request->validTimeStart;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOpenGlobalData',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOpenGlobalDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateOpenGlobalDataRequest
     *
     * @returns CreateOpenGlobalDataResponse
     *
     * @param CreateOpenGlobalDataRequest $request
     *
     * @return CreateOpenGlobalDataResponse
     */
    public function createOpenGlobalData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOpenGlobalDataWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateOpenSingleDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOpenSingleDataResponse
     *
     * @param CreateOpenSingleDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateOpenSingleDataResponse
     */
    public function createOpenSingleDataWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appMaxVersion) {
            @$body['AppMaxVersion'] = $request->appMaxVersion;
        }

        if (null !== $request->appMinVersion) {
            @$body['AppMinVersion'] = $request->appMinVersion;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->checkOnline) {
            @$body['CheckOnline'] = $request->checkOnline;
        }

        if (null !== $request->extAttrStr) {
            @$body['ExtAttrStr'] = $request->extAttrStr;
        }

        if (null !== $request->linkToken) {
            @$body['LinkToken'] = $request->linkToken;
        }

        if (null !== $request->osType) {
            @$body['OsType'] = $request->osType;
        }

        if (null !== $request->payload) {
            @$body['Payload'] = $request->payload;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->thirdMsgId) {
            @$body['ThirdMsgId'] = $request->thirdMsgId;
        }

        if (null !== $request->validTimeEnd) {
            @$body['ValidTimeEnd'] = $request->validTimeEnd;
        }

        if (null !== $request->validTimeStart) {
            @$body['ValidTimeStart'] = $request->validTimeStart;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOpenSingleData',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOpenSingleDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateOpenSingleDataRequest
     *
     * @returns CreateOpenSingleDataResponse
     *
     * @param CreateOpenSingleDataRequest $request
     *
     * @return CreateOpenSingleDataResponse
     */
    public function createOpenSingleData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOpenSingleDataWithOptions($request, $runtime);
    }

    /**
     * 创建模版.
     *
     * @param request - CreateTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTemplateResponse
     *
     * @param CreateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->descInfo) {
            @$body['DescInfo'] = $request->descInfo;
        }

        if (null !== $request->iconUrls) {
            @$body['IconUrls'] = $request->iconUrls;
        }

        if (null !== $request->imageUrls) {
            @$body['ImageUrls'] = $request->imageUrls;
        }

        if (null !== $request->jumpAction) {
            @$body['JumpAction'] = $request->jumpAction;
        }

        if (null !== $request->pushStyle) {
            @$body['PushStyle'] = $request->pushStyle;
        }

        if (null !== $request->showStyle) {
            @$body['ShowStyle'] = $request->showStyle;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->uri) {
            @$body['Uri'] = $request->uri;
        }

        if (null !== $request->variables) {
            @$body['Variables'] = $request->variables;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTemplate',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建模版.
     *
     * @param request - CreateTemplateRequest
     *
     * @returns CreateTemplateResponse
     *
     * @param CreateTemplateRequest $request
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteCubecardWhitelistContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCubecardWhitelistContentResponse
     *
     * @param DeleteCubecardWhitelistContentRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteCubecardWhitelistContentResponse
     */
    public function deleteCubecardWhitelistContentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->whitelistId) {
            @$body['WhitelistId'] = $request->whitelistId;
        }

        if (null !== $request->whitelistValue) {
            @$body['WhitelistValue'] = $request->whitelistValue;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCubecardWhitelistContent',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCubecardWhitelistContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteCubecardWhitelistContentRequest
     *
     * @returns DeleteCubecardWhitelistContentResponse
     *
     * @param DeleteCubecardWhitelistContentRequest $request
     *
     * @return DeleteCubecardWhitelistContentResponse
     */
    public function deleteCubecardWhitelistContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCubecardWhitelistContentWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMcubeMiniAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMcubeMiniAppResponse
     *
     * @param DeleteMcubeMiniAppRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMcubeMiniAppResponse
     */
    public function deleteMcubeMiniAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMcubeMiniApp',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMcubeMiniAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMcubeMiniAppRequest
     *
     * @returns DeleteMcubeMiniAppResponse
     *
     * @param DeleteMcubeMiniAppRequest $request
     *
     * @return DeleteMcubeMiniAppResponse
     */
    public function deleteMcubeMiniApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMcubeMiniAppWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMcubeNebulaAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMcubeNebulaAppResponse
     *
     * @param DeleteMcubeNebulaAppRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteMcubeNebulaAppResponse
     */
    public function deleteMcubeNebulaAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMcubeNebulaApp',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMcubeNebulaAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMcubeNebulaAppRequest
     *
     * @returns DeleteMcubeNebulaAppResponse
     *
     * @param DeleteMcubeNebulaAppRequest $request
     *
     * @return DeleteMcubeNebulaAppResponse
     */
    public function deleteMcubeNebulaApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMcubeNebulaAppWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMcubeUpgradeResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMcubeUpgradeResourceResponse
     *
     * @param DeleteMcubeUpgradeResourceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteMcubeUpgradeResourceResponse
     */
    public function deleteMcubeUpgradeResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMcubeUpgradeResource',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMcubeUpgradeResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMcubeUpgradeResourceRequest
     *
     * @returns DeleteMcubeUpgradeResourceResponse
     *
     * @param DeleteMcubeUpgradeResourceRequest $request
     *
     * @return DeleteMcubeUpgradeResourceResponse
     */
    public function deleteMcubeUpgradeResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMcubeUpgradeResourceWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMcubeWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMcubeWhitelistResponse
     *
     * @param DeleteMcubeWhitelistRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteMcubeWhitelistResponse
     */
    public function deleteMcubeWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMcubeWhitelist',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMcubeWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMcubeWhitelistRequest
     *
     * @returns DeleteMcubeWhitelistResponse
     *
     * @param DeleteMcubeWhitelistRequest $request
     *
     * @return DeleteMcubeWhitelistResponse
     */
    public function deleteMcubeWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMcubeWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMdsWhitelistContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMdsWhitelistContentResponse
     *
     * @param DeleteMdsWhitelistContentRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteMdsWhitelistContentResponse
     */
    public function deleteMdsWhitelistContentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->whitelistId) {
            @$body['WhitelistId'] = $request->whitelistId;
        }

        if (null !== $request->whitelistValue) {
            @$body['WhitelistValue'] = $request->whitelistValue;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMdsWhitelistContent',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMdsWhitelistContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMdsWhitelistContentRequest
     *
     * @returns DeleteMdsWhitelistContentResponse
     *
     * @param DeleteMdsWhitelistContentRequest $request
     *
     * @return DeleteMdsWhitelistContentResponse
     */
    public function deleteMdsWhitelistContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMdsWhitelistContentWithOptions($request, $runtime);
    }

    /**
     * 删除模版.
     *
     * @param request - DeleteTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTemplateResponse
     *
     * @param DeleteTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteTemplate',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除模版.
     *
     * @param request - DeleteTemplateRequest
     *
     * @returns DeleteTemplateResponse
     *
     * @param DeleteTemplateRequest $request
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - ExistMcubeRsaKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExistMcubeRsaKeyResponse
     *
     * @param ExistMcubeRsaKeyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ExistMcubeRsaKeyResponse
     */
    public function existMcubeRsaKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExistMcubeRsaKey',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExistMcubeRsaKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ExistMcubeRsaKeyRequest
     *
     * @returns ExistMcubeRsaKeyResponse
     *
     * @param ExistMcubeRsaKeyRequest $request
     *
     * @return ExistMcubeRsaKeyResponse
     */
    public function existMcubeRsaKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->existMcubeRsaKeyWithOptions($request, $runtime);
    }

    /**
     * @param request - GetMcubeFileTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMcubeFileTokenResponse
     *
     * @param GetMcubeFileTokenRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetMcubeFileTokenResponse
     */
    public function getMcubeFileTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMcubeFileToken',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMcubeFileTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetMcubeFileTokenRequest
     *
     * @returns GetMcubeFileTokenResponse
     *
     * @param GetMcubeFileTokenRequest $request
     *
     * @return GetMcubeFileTokenResponse
     */
    public function getMcubeFileToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMcubeFileTokenWithOptions($request, $runtime);
    }

    /**
     * @param request - GetMcubeNebulaResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMcubeNebulaResourceResponse
     *
     * @param GetMcubeNebulaResourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetMcubeNebulaResourceResponse
     */
    public function getMcubeNebulaResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMcubeNebulaResource',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMcubeNebulaResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetMcubeNebulaResourceRequest
     *
     * @returns GetMcubeNebulaResourceResponse
     *
     * @param GetMcubeNebulaResourceRequest $request
     *
     * @return GetMcubeNebulaResourceResponse
     */
    public function getMcubeNebulaResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMcubeNebulaResourceWithOptions($request, $runtime);
    }

    /**
     * @param request - GetMcubeNebulaTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMcubeNebulaTaskDetailResponse
     *
     * @param GetMcubeNebulaTaskDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetMcubeNebulaTaskDetailResponse
     */
    public function getMcubeNebulaTaskDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMcubeNebulaTaskDetail',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMcubeNebulaTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetMcubeNebulaTaskDetailRequest
     *
     * @returns GetMcubeNebulaTaskDetailResponse
     *
     * @param GetMcubeNebulaTaskDetailRequest $request
     *
     * @return GetMcubeNebulaTaskDetailResponse
     */
    public function getMcubeNebulaTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMcubeNebulaTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param request - GetMcubeUpgradePackageInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMcubeUpgradePackageInfoResponse
     *
     * @param GetMcubeUpgradePackageInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetMcubeUpgradePackageInfoResponse
     */
    public function getMcubeUpgradePackageInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->packageId) {
            @$body['PackageId'] = $request->packageId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMcubeUpgradePackageInfo',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMcubeUpgradePackageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetMcubeUpgradePackageInfoRequest
     *
     * @returns GetMcubeUpgradePackageInfoResponse
     *
     * @param GetMcubeUpgradePackageInfoRequest $request
     *
     * @return GetMcubeUpgradePackageInfoResponse
     */
    public function getMcubeUpgradePackageInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMcubeUpgradePackageInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - GetMcubeUpgradeTaskInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMcubeUpgradeTaskInfoResponse
     *
     * @param GetMcubeUpgradeTaskInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetMcubeUpgradeTaskInfoResponse
     */
    public function getMcubeUpgradeTaskInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMcubeUpgradeTaskInfo',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMcubeUpgradeTaskInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetMcubeUpgradeTaskInfoRequest
     *
     * @returns GetMcubeUpgradeTaskInfoResponse
     *
     * @param GetMcubeUpgradeTaskInfoRequest $request
     *
     * @return GetMcubeUpgradeTaskInfoResponse
     */
    public function getMcubeUpgradeTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMcubeUpgradeTaskInfoWithOptions($request, $runtime);
    }

    /**
     * 获取模版.
     *
     * @param request - GetTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateResponse
     *
     * @param GetTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTemplate',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取模版.
     *
     * @param request - GetTemplateRequest
     *
     * @returns GetTemplateResponse
     *
     * @param GetTemplateRequest $request
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateWithOptions($request, $runtime);
    }

    /**
     * 查询报表.
     *
     * @param request - ListAnalysisCoreIndexRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAnalysisCoreIndexResponse
     *
     * @param ListAnalysisCoreIndexRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListAnalysisCoreIndexResponse
     */
    public function listAnalysisCoreIndexWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->channel) {
            @$body['Channel'] = $request->channel;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAnalysisCoreIndex',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAnalysisCoreIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询报表.
     *
     * @param request - ListAnalysisCoreIndexRequest
     *
     * @returns ListAnalysisCoreIndexResponse
     *
     * @param ListAnalysisCoreIndexRequest $request
     *
     * @return ListAnalysisCoreIndexResponse
     */
    public function listAnalysisCoreIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAnalysisCoreIndexWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMcubeMiniAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeMiniAppsResponse
     *
     * @param ListMcubeMiniAppsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListMcubeMiniAppsResponse
     */
    public function listMcubeMiniAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeMiniApps',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeMiniAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcubeMiniAppsRequest
     *
     * @returns ListMcubeMiniAppsResponse
     *
     * @param ListMcubeMiniAppsRequest $request
     *
     * @return ListMcubeMiniAppsResponse
     */
    public function listMcubeMiniApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeMiniAppsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMcubeMiniPackagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeMiniPackagesResponse
     *
     * @param ListMcubeMiniPackagesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListMcubeMiniPackagesResponse
     */
    public function listMcubeMiniPackagesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->packageTypes) {
            @$body['PackageTypes'] = $request->packageTypes;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeMiniPackages',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeMiniPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcubeMiniPackagesRequest
     *
     * @returns ListMcubeMiniPackagesResponse
     *
     * @param ListMcubeMiniPackagesRequest $request
     *
     * @return ListMcubeMiniPackagesResponse
     */
    public function listMcubeMiniPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeMiniPackagesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMcubeMiniTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeMiniTasksResponse
     *
     * @param ListMcubeMiniTasksRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListMcubeMiniTasksResponse
     */
    public function listMcubeMiniTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeMiniTasks',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeMiniTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcubeMiniTasksRequest
     *
     * @returns ListMcubeMiniTasksResponse
     *
     * @param ListMcubeMiniTasksRequest $request
     *
     * @return ListMcubeMiniTasksResponse
     */
    public function listMcubeMiniTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeMiniTasksWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMcubeNebulaAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeNebulaAppsResponse
     *
     * @param ListMcubeNebulaAppsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListMcubeNebulaAppsResponse
     */
    public function listMcubeNebulaAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeNebulaApps',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeNebulaAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcubeNebulaAppsRequest
     *
     * @returns ListMcubeNebulaAppsResponse
     *
     * @param ListMcubeNebulaAppsRequest $request
     *
     * @return ListMcubeNebulaAppsResponse
     */
    public function listMcubeNebulaApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeNebulaAppsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMcubeNebulaResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeNebulaResourcesResponse
     *
     * @param ListMcubeNebulaResourcesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListMcubeNebulaResourcesResponse
     */
    public function listMcubeNebulaResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeNebulaResources',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeNebulaResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcubeNebulaResourcesRequest
     *
     * @returns ListMcubeNebulaResourcesResponse
     *
     * @param ListMcubeNebulaResourcesRequest $request
     *
     * @return ListMcubeNebulaResourcesResponse
     */
    public function listMcubeNebulaResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeNebulaResourcesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMcubeNebulaTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeNebulaTasksResponse
     *
     * @param ListMcubeNebulaTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListMcubeNebulaTasksResponse
     */
    public function listMcubeNebulaTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeNebulaTasks',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeNebulaTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcubeNebulaTasksRequest
     *
     * @returns ListMcubeNebulaTasksResponse
     *
     * @param ListMcubeNebulaTasksRequest $request
     *
     * @return ListMcubeNebulaTasksResponse
     */
    public function listMcubeNebulaTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeNebulaTasksWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMcubeUpgradePackagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeUpgradePackagesResponse
     *
     * @param ListMcubeUpgradePackagesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListMcubeUpgradePackagesResponse
     */
    public function listMcubeUpgradePackagesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeUpgradePackages',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeUpgradePackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcubeUpgradePackagesRequest
     *
     * @returns ListMcubeUpgradePackagesResponse
     *
     * @param ListMcubeUpgradePackagesRequest $request
     *
     * @return ListMcubeUpgradePackagesResponse
     */
    public function listMcubeUpgradePackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeUpgradePackagesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMcubeUpgradeTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeUpgradeTasksResponse
     *
     * @param ListMcubeUpgradeTasksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListMcubeUpgradeTasksResponse
     */
    public function listMcubeUpgradeTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->packageId) {
            @$body['PackageId'] = $request->packageId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeUpgradeTasks',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeUpgradeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcubeUpgradeTasksRequest
     *
     * @returns ListMcubeUpgradeTasksResponse
     *
     * @param ListMcubeUpgradeTasksRequest $request
     *
     * @return ListMcubeUpgradeTasksResponse
     */
    public function listMcubeUpgradeTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeUpgradeTasksWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMcubeWhitelistsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMcubeWhitelistsResponse
     *
     * @param ListMcubeWhitelistsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListMcubeWhitelistsResponse
     */
    public function listMcubeWhitelistsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->pageNum) {
            @$body['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->whitelistName) {
            @$body['WhitelistName'] = $request->whitelistName;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMcubeWhitelists',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMcubeWhitelistsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMcubeWhitelistsRequest
     *
     * @returns ListMcubeWhitelistsResponse
     *
     * @param ListMcubeWhitelistsRequest $request
     *
     * @return ListMcubeWhitelistsResponse
     */
    public function listMcubeWhitelists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMcubeWhitelistsWithOptions($request, $runtime);
    }

    /**
     * 分页查询模版列表.
     *
     * @param request - ListTemplatePageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTemplatePageResponse
     *
     * @param ListTemplatePageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTemplatePageResponse
     */
    public function listTemplatePageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTemplatePage',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTemplatePageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询模版列表.
     *
     * @param request - ListTemplatePageRequest
     *
     * @returns ListTemplatePageResponse
     *
     * @param ListTemplatePageRequest $request
     *
     * @return ListTemplatePageResponse
     */
    public function listTemplatePage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplatePageWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - PushBroadcastRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushBroadcastResponse
     *
     * @param PushBroadcastRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return PushBroadcastResponse
     */
    public function pushBroadcastWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PushBroadcastShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->notifyLevel) {
            $request->notifyLevelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notifyLevel, 'NotifyLevel', 'json');
        }

        if (null !== $tmpReq->thirdChannelCategory) {
            $request->thirdChannelCategoryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->thirdChannelCategory, 'ThirdChannelCategory', 'json');
        }

        $body = [];
        if (null !== $request->androidChannel) {
            @$body['AndroidChannel'] = $request->androidChannel;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->bindEndTime) {
            @$body['BindEndTime'] = $request->bindEndTime;
        }

        if (null !== $request->bindStartTime) {
            @$body['BindStartTime'] = $request->bindStartTime;
        }

        if (null !== $request->channelId) {
            @$body['ChannelId'] = $request->channelId;
        }

        if (null !== $request->classification) {
            @$body['Classification'] = $request->classification;
        }

        if (null !== $request->deliveryType) {
            @$body['DeliveryType'] = $request->deliveryType;
        }

        if (null !== $request->expiredSeconds) {
            @$body['ExpiredSeconds'] = $request->expiredSeconds;
        }

        if (null !== $request->extendedParams) {
            @$body['ExtendedParams'] = $request->extendedParams;
        }

        if (null !== $request->miChannelId) {
            @$body['MiChannelId'] = $request->miChannelId;
        }

        if (null !== $request->msgkey) {
            @$body['Msgkey'] = $request->msgkey;
        }

        if (null !== $request->notifyLevelShrink) {
            @$body['NotifyLevel'] = $request->notifyLevelShrink;
        }

        if (null !== $request->notifyType) {
            @$body['NotifyType'] = $request->notifyType;
        }

        if (null !== $request->pushAction) {
            @$body['PushAction'] = $request->pushAction;
        }

        if (null !== $request->pushStatus) {
            @$body['PushStatus'] = $request->pushStatus;
        }

        if (null !== $request->silent) {
            @$body['Silent'] = $request->silent;
        }

        if (null !== $request->strategyContent) {
            @$body['StrategyContent'] = $request->strategyContent;
        }

        if (null !== $request->strategyType) {
            @$body['StrategyType'] = $request->strategyType;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        if (null !== $request->templateKeyValue) {
            @$body['TemplateKeyValue'] = $request->templateKeyValue;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->thirdChannelCategoryShrink) {
            @$body['ThirdChannelCategory'] = $request->thirdChannelCategoryShrink;
        }

        if (null !== $request->timeMode) {
            @$body['TimeMode'] = $request->timeMode;
        }

        if (null !== $request->transparentMessagePayload) {
            @$body['TransparentMessagePayload'] = $request->transparentMessagePayload;
        }

        if (null !== $request->transparentMessageUrgency) {
            @$body['TransparentMessageUrgency'] = $request->transparentMessageUrgency;
        }

        if (null !== $request->unBindEndTime) {
            @$body['UnBindEndTime'] = $request->unBindEndTime;
        }

        if (null !== $request->unBindPeriod) {
            @$body['UnBindPeriod'] = $request->unBindPeriod;
        }

        if (null !== $request->unBindStartTime) {
            @$body['UnBindStartTime'] = $request->unBindStartTime;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushBroadcast',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushBroadcastResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PushBroadcastRequest
     *
     * @returns PushBroadcastResponse
     *
     * @param PushBroadcastRequest $request
     *
     * @return PushBroadcastResponse
     */
    public function pushBroadcast($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushBroadcastWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - PushMultipleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushMultipleResponse
     *
     * @param PushMultipleRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return PushMultipleResponse
     */
    public function pushMultipleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PushMultipleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->notifyLevel) {
            $request->notifyLevelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notifyLevel, 'NotifyLevel', 'json');
        }

        if (null !== $tmpReq->thirdChannelCategory) {
            $request->thirdChannelCategoryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->thirdChannelCategory, 'ThirdChannelCategory', 'json');
        }

        $body = [];
        if (null !== $request->activityContentState) {
            @$body['ActivityContentState'] = $request->activityContentState;
        }

        if (null !== $request->activityEvent) {
            @$body['ActivityEvent'] = $request->activityEvent;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$body['ChannelId'] = $request->channelId;
        }

        if (null !== $request->classification) {
            @$body['Classification'] = $request->classification;
        }

        if (null !== $request->deliveryType) {
            @$body['DeliveryType'] = $request->deliveryType;
        }

        if (null !== $request->dismissalDate) {
            @$body['DismissalDate'] = $request->dismissalDate;
        }

        if (null !== $request->expiredSeconds) {
            @$body['ExpiredSeconds'] = $request->expiredSeconds;
        }

        if (null !== $request->extendedParams) {
            @$body['ExtendedParams'] = $request->extendedParams;
        }

        if (null !== $request->miChannelId) {
            @$body['MiChannelId'] = $request->miChannelId;
        }

        if (null !== $request->notifyLevelShrink) {
            @$body['NotifyLevel'] = $request->notifyLevelShrink;
        }

        if (null !== $request->notifyType) {
            @$body['NotifyType'] = $request->notifyType;
        }

        if (null !== $request->pushAction) {
            @$body['PushAction'] = $request->pushAction;
        }

        if (null !== $request->silent) {
            @$body['Silent'] = $request->silent;
        }

        if (null !== $request->strategyContent) {
            @$body['StrategyContent'] = $request->strategyContent;
        }

        if (null !== $request->strategyType) {
            @$body['StrategyType'] = $request->strategyType;
        }

        if (null !== $request->targetMsg) {
            @$body['TargetMsg'] = $request->targetMsg;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->thirdChannelCategoryShrink) {
            @$body['ThirdChannelCategory'] = $request->thirdChannelCategoryShrink;
        }

        if (null !== $request->transparentMessagePayload) {
            @$body['TransparentMessagePayload'] = $request->transparentMessagePayload;
        }

        if (null !== $request->transparentMessageUrgency) {
            @$body['TransparentMessageUrgency'] = $request->transparentMessageUrgency;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushMultiple',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushMultipleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PushMultipleRequest
     *
     * @returns PushMultipleResponse
     *
     * @param PushMultipleRequest $request
     *
     * @return PushMultipleResponse
     */
    public function pushMultiple($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushMultipleWithOptions($request, $runtime);
    }

    /**
     * 查询设备状态信息.
     *
     * @param request - PushQueryDeviceStateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushQueryDeviceStateResponse
     *
     * @param PushQueryDeviceStateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PushQueryDeviceStateResponse
     */
    public function pushQueryDeviceStateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->target) {
            @$body['Target'] = $request->target;
        }

        if (null !== $request->targetType) {
            @$body['TargetType'] = $request->targetType;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushQueryDeviceState',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushQueryDeviceStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询设备状态信息.
     *
     * @param request - PushQueryDeviceStateRequest
     *
     * @returns PushQueryDeviceStateResponse
     *
     * @param PushQueryDeviceStateRequest $request
     *
     * @return PushQueryDeviceStateResponse
     */
    public function pushQueryDeviceState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushQueryDeviceStateWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - PushSimpleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushSimpleResponse
     *
     * @param PushSimpleRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return PushSimpleResponse
     */
    public function pushSimpleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PushSimpleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->notifyLevel) {
            $request->notifyLevelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notifyLevel, 'NotifyLevel', 'json');
        }

        if (null !== $tmpReq->thirdChannelCategory) {
            $request->thirdChannelCategoryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->thirdChannelCategory, 'ThirdChannelCategory', 'json');
        }

        $body = [];
        if (null !== $request->activityContentState) {
            @$body['ActivityContentState'] = $request->activityContentState;
        }

        if (null !== $request->activityEvent) {
            @$body['ActivityEvent'] = $request->activityEvent;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$body['ChannelId'] = $request->channelId;
        }

        if (null !== $request->classification) {
            @$body['Classification'] = $request->classification;
        }

        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->deliveryType) {
            @$body['DeliveryType'] = $request->deliveryType;
        }

        if (null !== $request->dismissalDate) {
            @$body['DismissalDate'] = $request->dismissalDate;
        }

        if (null !== $request->expiredSeconds) {
            @$body['ExpiredSeconds'] = $request->expiredSeconds;
        }

        if (null !== $request->extendedParams) {
            @$body['ExtendedParams'] = $request->extendedParams;
        }

        if (null !== $request->iconUrls) {
            @$body['IconUrls'] = $request->iconUrls;
        }

        if (null !== $request->imageUrls) {
            @$body['ImageUrls'] = $request->imageUrls;
        }

        if (null !== $request->miChannelId) {
            @$body['MiChannelId'] = $request->miChannelId;
        }

        if (null !== $request->notifyLevelShrink) {
            @$body['NotifyLevel'] = $request->notifyLevelShrink;
        }

        if (null !== $request->notifyType) {
            @$body['NotifyType'] = $request->notifyType;
        }

        if (null !== $request->pushAction) {
            @$body['PushAction'] = $request->pushAction;
        }

        if (null !== $request->pushStyle) {
            @$body['PushStyle'] = $request->pushStyle;
        }

        if (null !== $request->silent) {
            @$body['Silent'] = $request->silent;
        }

        if (null !== $request->strategyContent) {
            @$body['StrategyContent'] = $request->strategyContent;
        }

        if (null !== $request->strategyType) {
            @$body['StrategyType'] = $request->strategyType;
        }

        if (null !== $request->targetMsgkey) {
            @$body['TargetMsgkey'] = $request->targetMsgkey;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->thirdChannelCategoryShrink) {
            @$body['ThirdChannelCategory'] = $request->thirdChannelCategoryShrink;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->transparentMessagePayload) {
            @$body['TransparentMessagePayload'] = $request->transparentMessagePayload;
        }

        if (null !== $request->transparentMessageUrgency) {
            @$body['TransparentMessageUrgency'] = $request->transparentMessageUrgency;
        }

        if (null !== $request->uri) {
            @$body['Uri'] = $request->uri;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushSimple',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushSimpleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PushSimpleRequest
     *
     * @returns PushSimpleResponse
     *
     * @param PushSimpleRequest $request
     *
     * @return PushSimpleResponse
     */
    public function pushSimple($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushSimpleWithOptions($request, $runtime);
    }

    /**
     * @param tmpReq - PushTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushTemplateResponse
     *
     * @param PushTemplateRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return PushTemplateResponse
     */
    public function pushTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PushTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->notifyLevel) {
            $request->notifyLevelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notifyLevel, 'NotifyLevel', 'json');
        }

        if (null !== $tmpReq->thirdChannelCategory) {
            $request->thirdChannelCategoryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->thirdChannelCategory, 'ThirdChannelCategory', 'json');
        }

        $body = [];
        if (null !== $request->activityContentState) {
            @$body['ActivityContentState'] = $request->activityContentState;
        }

        if (null !== $request->activityEvent) {
            @$body['ActivityEvent'] = $request->activityEvent;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->channelId) {
            @$body['ChannelId'] = $request->channelId;
        }

        if (null !== $request->classification) {
            @$body['Classification'] = $request->classification;
        }

        if (null !== $request->deliveryType) {
            @$body['DeliveryType'] = $request->deliveryType;
        }

        if (null !== $request->dismissalDate) {
            @$body['DismissalDate'] = $request->dismissalDate;
        }

        if (null !== $request->expiredSeconds) {
            @$body['ExpiredSeconds'] = $request->expiredSeconds;
        }

        if (null !== $request->extendedParams) {
            @$body['ExtendedParams'] = $request->extendedParams;
        }

        if (null !== $request->miChannelId) {
            @$body['MiChannelId'] = $request->miChannelId;
        }

        if (null !== $request->notifyLevelShrink) {
            @$body['NotifyLevel'] = $request->notifyLevelShrink;
        }

        if (null !== $request->notifyType) {
            @$body['NotifyType'] = $request->notifyType;
        }

        if (null !== $request->pushAction) {
            @$body['PushAction'] = $request->pushAction;
        }

        if (null !== $request->silent) {
            @$body['Silent'] = $request->silent;
        }

        if (null !== $request->strategyContent) {
            @$body['StrategyContent'] = $request->strategyContent;
        }

        if (null !== $request->strategyType) {
            @$body['StrategyType'] = $request->strategyType;
        }

        if (null !== $request->targetMsgkey) {
            @$body['TargetMsgkey'] = $request->targetMsgkey;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        if (null !== $request->templateKeyValue) {
            @$body['TemplateKeyValue'] = $request->templateKeyValue;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->thirdChannelCategoryShrink) {
            @$body['ThirdChannelCategory'] = $request->thirdChannelCategoryShrink;
        }

        if (null !== $request->transparentMessagePayload) {
            @$body['TransparentMessagePayload'] = $request->transparentMessagePayload;
        }

        if (null !== $request->transparentMessageUrgency) {
            @$body['TransparentMessageUrgency'] = $request->transparentMessageUrgency;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushTemplate',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PushTemplateRequest
     *
     * @returns PushTemplateResponse
     *
     * @param PushTemplateRequest $request
     *
     * @return PushTemplateResponse
     */
    public function pushTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMcubeMiniPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMcubeMiniPackageResponse
     *
     * @param QueryMcubeMiniPackageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryMcubeMiniPackageResponse
     */
    public function queryMcubeMiniPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMcubeMiniPackage',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMcubeMiniPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMcubeMiniPackageRequest
     *
     * @returns QueryMcubeMiniPackageResponse
     *
     * @param QueryMcubeMiniPackageRequest $request
     *
     * @return QueryMcubeMiniPackageResponse
     */
    public function queryMcubeMiniPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMcubeMiniPackageWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMcubeMiniTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMcubeMiniTaskResponse
     *
     * @param QueryMcubeMiniTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryMcubeMiniTaskResponse
     */
    public function queryMcubeMiniTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMcubeMiniTask',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMcubeMiniTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMcubeMiniTaskRequest
     *
     * @returns QueryMcubeMiniTaskResponse
     *
     * @param QueryMcubeMiniTaskRequest $request
     *
     * @return QueryMcubeMiniTaskResponse
     */
    public function queryMcubeMiniTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMcubeMiniTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMcubeVhostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMcubeVhostResponse
     *
     * @param QueryMcubeVhostRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryMcubeVhostResponse
     */
    public function queryMcubeVhostWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMcubeVhost',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMcubeVhostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMcubeVhostRequest
     *
     * @returns QueryMcubeVhostResponse
     *
     * @param QueryMcubeVhostRequest $request
     *
     * @return QueryMcubeVhostResponse
     */
    public function queryMcubeVhost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMcubeVhostWithOptions($request, $runtime);
    }

    /**
     * 查询定时任务列表.
     *
     * @param request - QueryMpsSchedulerListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMpsSchedulerListResponse
     *
     * @param QueryMpsSchedulerListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryMpsSchedulerListResponse
     */
    public function queryMpsSchedulerListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->uniqueId) {
            @$body['UniqueId'] = $request->uniqueId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMpsSchedulerList',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMpsSchedulerListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询定时任务列表.
     *
     * @param request - QueryMpsSchedulerListRequest
     *
     * @returns QueryMpsSchedulerListResponse
     *
     * @param QueryMpsSchedulerListRequest $request
     *
     * @return QueryMpsSchedulerListResponse
     */
    public function queryMpsSchedulerList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMpsSchedulerListWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPushAnalysisCoreIndexRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPushAnalysisCoreIndexResponse
     *
     * @param QueryPushAnalysisCoreIndexRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryPushAnalysisCoreIndexResponse
     */
    public function queryPushAnalysisCoreIndexWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->channel) {
            @$body['Channel'] = $request->channel;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryPushAnalysisCoreIndex',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPushAnalysisCoreIndexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPushAnalysisCoreIndexRequest
     *
     * @returns QueryPushAnalysisCoreIndexResponse
     *
     * @param QueryPushAnalysisCoreIndexRequest $request
     *
     * @return QueryPushAnalysisCoreIndexResponse
     */
    public function queryPushAnalysisCoreIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPushAnalysisCoreIndexWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPushAnalysisTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPushAnalysisTaskDetailResponse
     *
     * @param QueryPushAnalysisTaskDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryPushAnalysisTaskDetailResponse
     */
    public function queryPushAnalysisTaskDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryPushAnalysisTaskDetail',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPushAnalysisTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPushAnalysisTaskDetailRequest
     *
     * @returns QueryPushAnalysisTaskDetailResponse
     *
     * @param QueryPushAnalysisTaskDetailRequest $request
     *
     * @return QueryPushAnalysisTaskDetailResponse
     */
    public function queryPushAnalysisTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPushAnalysisTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPushAnalysisTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPushAnalysisTaskListResponse
     *
     * @param QueryPushAnalysisTaskListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryPushAnalysisTaskListResponse
     */
    public function queryPushAnalysisTaskListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryPushAnalysisTaskList',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPushAnalysisTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPushAnalysisTaskListRequest
     *
     * @returns QueryPushAnalysisTaskListResponse
     *
     * @param QueryPushAnalysisTaskListRequest $request
     *
     * @return QueryPushAnalysisTaskListResponse
     */
    public function queryPushAnalysisTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPushAnalysisTaskListWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryPushSchedulerListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPushSchedulerListResponse
     *
     * @param QueryPushSchedulerListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryPushSchedulerListResponse
     */
    public function queryPushSchedulerListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->uniqueId) {
            @$body['UniqueId'] = $request->uniqueId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryPushSchedulerList',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPushSchedulerListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryPushSchedulerListRequest
     *
     * @returns QueryPushSchedulerListResponse
     *
     * @param QueryPushSchedulerListRequest $request
     *
     * @return QueryPushSchedulerListResponse
     */
    public function queryPushSchedulerList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPushSchedulerListWithOptions($request, $runtime);
    }

    /**
     * @param request - RevokePushMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokePushMessageResponse
     *
     * @param RevokePushMessageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RevokePushMessageResponse
     */
    public function revokePushMessageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->messageId) {
            @$body['MessageId'] = $request->messageId;
        }

        if (null !== $request->targetId) {
            @$body['TargetId'] = $request->targetId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RevokePushMessage',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokePushMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RevokePushMessageRequest
     *
     * @returns RevokePushMessageResponse
     *
     * @param RevokePushMessageRequest $request
     *
     * @return RevokePushMessageResponse
     */
    public function revokePushMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokePushMessageWithOptions($request, $runtime);
    }

    /**
     * @param request - RevokePushTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokePushTaskResponse
     *
     * @param RevokePushTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RevokePushTaskResponse
     */
    public function revokePushTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RevokePushTask',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokePushTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RevokePushTaskRequest
     *
     * @returns RevokePushTaskResponse
     *
     * @param RevokePushTaskRequest $request
     *
     * @return RevokePushTaskResponse
     */
    public function revokePushTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokePushTaskWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateMcubeWhitelistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMcubeWhitelistResponse
     *
     * @param UpdateMcubeWhitelistRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateMcubeWhitelistResponse
     */
    public function updateMcubeWhitelistWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->keyIds) {
            @$body['KeyIds'] = $request->keyIds;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->ossUrl) {
            @$body['OssUrl'] = $request->ossUrl;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMcubeWhitelist',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMcubeWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateMcubeWhitelistRequest
     *
     * @returns UpdateMcubeWhitelistResponse
     *
     * @param UpdateMcubeWhitelistRequest $request
     *
     * @return UpdateMcubeWhitelistResponse
     */
    public function updateMcubeWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMcubeWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param request - UploadMcubeMiniPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadMcubeMiniPackageResponse
     *
     * @param UploadMcubeMiniPackageRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UploadMcubeMiniPackageResponse
     */
    public function uploadMcubeMiniPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->autoInstall) {
            @$body['AutoInstall'] = $request->autoInstall;
        }

        if (null !== $request->clientVersionMax) {
            @$body['ClientVersionMax'] = $request->clientVersionMax;
        }

        if (null !== $request->clientVersionMin) {
            @$body['ClientVersionMin'] = $request->clientVersionMin;
        }

        if (null !== $request->enableKeepAlive) {
            @$body['EnableKeepAlive'] = $request->enableKeepAlive;
        }

        if (null !== $request->enableOptionMenu) {
            @$body['EnableOptionMenu'] = $request->enableOptionMenu;
        }

        if (null !== $request->enableTabBar) {
            @$body['EnableTabBar'] = $request->enableTabBar;
        }

        if (null !== $request->extendInfo) {
            @$body['ExtendInfo'] = $request->extendInfo;
        }

        if (null !== $request->h5Id) {
            @$body['H5Id'] = $request->h5Id;
        }

        if (null !== $request->h5Name) {
            @$body['H5Name'] = $request->h5Name;
        }

        if (null !== $request->h5Version) {
            @$body['H5Version'] = $request->h5Version;
        }

        if (null !== $request->iconFileUrl) {
            @$body['IconFileUrl'] = $request->iconFileUrl;
        }

        if (null !== $request->installType) {
            @$body['InstallType'] = $request->installType;
        }

        if (null !== $request->mainUrl) {
            @$body['MainUrl'] = $request->mainUrl;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->packageType) {
            @$body['PackageType'] = $request->packageType;
        }

        if (null !== $request->platform) {
            @$body['Platform'] = $request->platform;
        }

        if (null !== $request->resourceFileUrl) {
            @$body['ResourceFileUrl'] = $request->resourceFileUrl;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        if (null !== $request->vhost) {
            @$body['Vhost'] = $request->vhost;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadMcubeMiniPackage',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadMcubeMiniPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UploadMcubeMiniPackageRequest
     *
     * @returns UploadMcubeMiniPackageResponse
     *
     * @param UploadMcubeMiniPackageRequest $request
     *
     * @return UploadMcubeMiniPackageResponse
     */
    public function uploadMcubeMiniPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadMcubeMiniPackageWithOptions($request, $runtime);
    }

    /**
     * @param request - UploadMcubeRsaKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadMcubeRsaKeyResponse
     *
     * @param UploadMcubeRsaKeyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UploadMcubeRsaKeyResponse
     */
    public function uploadMcubeRsaKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->onexFlag) {
            @$body['OnexFlag'] = $request->onexFlag;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadMcubeRsaKey',
            'version' => '2020-07-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadMcubeRsaKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UploadMcubeRsaKeyRequest
     *
     * @returns UploadMcubeRsaKeyResponse
     *
     * @param UploadMcubeRsaKeyRequest $request
     *
     * @return UploadMcubeRsaKeyResponse
     */
    public function uploadMcubeRsaKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadMcubeRsaKeyWithOptions($request, $runtime);
    }
}
