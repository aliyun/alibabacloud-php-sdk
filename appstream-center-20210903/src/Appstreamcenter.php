<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\GetConnectionTicketRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\GetConnectionTicketResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ListPublishedAppInfoRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ListPublishedAppInfoResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ListRunningAppsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ListRunningAppsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ResetAppResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ResetAppResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\RestartAppResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\RestartAppResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\StartAppResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\StartAppResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\StopAppRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\StopAppResourcesRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\StopAppResourcesResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\StopAppResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\UnbindRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\UnbindResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Appstreamcenter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('appstream-center', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 获取连接信息.
     *
     * @param request - GetConnectionTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConnectionTicketResponse
     *
     * @param GetConnectionTicketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetConnectionTicketResponse
     */
    public function getConnectionTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessType) {
            @$body['AccessType'] = $request->accessType;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceId) {
            @$body['AppInstanceId'] = $request->appInstanceId;
        }

        if (null !== $request->appPolicyId) {
            @$body['AppPolicyId'] = $request->appPolicyId;
        }

        if (null !== $request->appVersion) {
            @$body['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->autoConnectInQueue) {
            @$body['AutoConnectInQueue'] = $request->autoConnectInQueue;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientIp) {
            @$body['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->clientOS) {
            @$body['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientType) {
            @$body['ClientType'] = $request->clientType;
        }

        if (null !== $request->clientVersion) {
            @$body['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->connectionProperties) {
            @$body['ConnectionProperties'] = $request->connectionProperties;
        }

        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->environmentConfig) {
            @$body['EnvironmentConfig'] = $request->environmentConfig;
        }

        if (null !== $request->loginRegionId) {
            @$body['LoginRegionId'] = $request->loginRegionId;
        }

        if (null !== $request->loginToken) {
            @$body['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->param) {
            @$body['Param'] = $request->param;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetConnectionTicket',
            'version' => '2021-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConnectionTicketResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 获取连接信息.
     *
     * @param request - GetConnectionTicketRequest
     *
     * @returns GetConnectionTicketResponse
     *
     * @param GetConnectionTicketRequest $request
     *
     * @return GetConnectionTicketResponse
     */
    public function getConnectionTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectionTicketWithOptions($request, $runtime);
    }

    /**
     * 已上架应用列表.
     *
     * @param request - ListPublishedAppInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPublishedAppInfoResponse
     *
     * @param ListPublishedAppInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPublishedAppInfoResponse
     */
    public function listPublishedAppInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->categoryId) {
            @$query['CategoryId'] = $request->categoryId;
        }

        if (null !== $request->categoryType) {
            @$query['CategoryType'] = $request->categoryType;
        }

        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientIp) {
            @$query['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->clientOS) {
            @$query['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientVersion) {
            @$query['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->loginRegionId) {
            @$query['LoginRegionId'] = $request->loginRegionId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->orderParam) {
            @$query['OrderParam'] = $request->orderParam;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->sortType) {
            @$query['SortType'] = $request->sortType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPublishedAppInfo',
            'version' => '2021-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPublishedAppInfoResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 已上架应用列表.
     *
     * @param request - ListPublishedAppInfoRequest
     *
     * @returns ListPublishedAppInfoResponse
     *
     * @param ListPublishedAppInfoRequest $request
     *
     * @return ListPublishedAppInfoResponse
     */
    public function listPublishedAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublishedAppInfoWithOptions($request, $runtime);
    }

    /**
     * 运行中应用列表.
     *
     * @param request - ListRunningAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRunningAppsResponse
     *
     * @param ListRunningAppsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListRunningAppsResponse
     */
    public function listRunningAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizRegionId) {
            @$query['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientIp) {
            @$query['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->clientOS) {
            @$query['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientVersion) {
            @$query['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->loginRegionId) {
            @$query['LoginRegionId'] = $request->loginRegionId;
        }

        if (null !== $request->loginToken) {
            @$query['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->tenantId) {
            @$query['TenantId'] = $request->tenantId;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRunningApps',
            'version' => '2021-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRunningAppsResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 运行中应用列表.
     *
     * @param request - ListRunningAppsRequest
     *
     * @returns ListRunningAppsResponse
     *
     * @param ListRunningAppsRequest $request
     *
     * @return ListRunningAppsResponse
     */
    public function listRunningApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRunningAppsWithOptions($request, $runtime);
    }

    /**
     * 重置应用资源.
     *
     * @param request - ResetAppResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetAppResourcesResponse
     *
     * @param ResetAppResourcesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ResetAppResourcesResponse
     */
    public function resetAppResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientIp) {
            @$body['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->clientOS) {
            @$body['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientVersion) {
            @$body['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->loginRegionId) {
            @$body['LoginRegionId'] = $request->loginRegionId;
        }

        if (null !== $request->loginToken) {
            @$body['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceIds) {
            @$body['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResetAppResources',
            'version' => '2021-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetAppResourcesResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 重置应用资源.
     *
     * @param request - ResetAppResourcesRequest
     *
     * @returns ResetAppResourcesResponse
     *
     * @param ResetAppResourcesRequest $request
     *
     * @return ResetAppResourcesResponse
     */
    public function resetAppResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAppResourcesWithOptions($request, $runtime);
    }

    /**
     * 重启应用资源.
     *
     * @param request - RestartAppResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartAppResourcesResponse
     *
     * @param RestartAppResourcesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RestartAppResourcesResponse
     */
    public function restartAppResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientIp) {
            @$body['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->clientOS) {
            @$body['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientVersion) {
            @$body['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->loginRegionId) {
            @$body['LoginRegionId'] = $request->loginRegionId;
        }

        if (null !== $request->loginToken) {
            @$body['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceIds) {
            @$body['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RestartAppResources',
            'version' => '2021-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartAppResourcesResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 重启应用资源.
     *
     * @param request - RestartAppResourcesRequest
     *
     * @returns RestartAppResourcesResponse
     *
     * @param RestartAppResourcesRequest $request
     *
     * @return RestartAppResourcesResponse
     */
    public function restartAppResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartAppResourcesWithOptions($request, $runtime);
    }

    /**
     * 启动应用资源.
     *
     * @param request - StartAppResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartAppResourcesResponse
     *
     * @param StartAppResourcesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StartAppResourcesResponse
     */
    public function startAppResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientIp) {
            @$body['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->clientOS) {
            @$body['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientVersion) {
            @$body['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->loginRegionId) {
            @$body['LoginRegionId'] = $request->loginRegionId;
        }

        if (null !== $request->loginToken) {
            @$body['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceIds) {
            @$body['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartAppResources',
            'version' => '2021-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartAppResourcesResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 启动应用资源.
     *
     * @param request - StartAppResourcesRequest
     *
     * @returns StartAppResourcesResponse
     *
     * @param StartAppResourcesRequest $request
     *
     * @return StartAppResourcesResponse
     */
    public function startAppResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAppResourcesWithOptions($request, $runtime);
    }

    /**
     * 停止应用.
     *
     * @param request - StopAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopAppResponse
     *
     * @param StopAppRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return StopAppResponse
     */
    public function stopAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aliUid) {
            @$body['AliUid'] = $request->aliUid;
        }

        if (null !== $request->apiType) {
            @$body['ApiType'] = $request->apiType;
        }

        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceId) {
            @$body['AppInstanceId'] = $request->appInstanceId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->clientChannel) {
            @$body['ClientChannel'] = $request->clientChannel;
        }

        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientIp) {
            @$body['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->clientOS) {
            @$body['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientVersion) {
            @$body['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->forceStop) {
            @$body['ForceStop'] = $request->forceStop;
        }

        if (null !== $request->idpId) {
            @$body['IdpId'] = $request->idpId;
        }

        if (null !== $request->loginRegionId) {
            @$body['LoginRegionId'] = $request->loginRegionId;
        }

        if (null !== $request->loginToken) {
            @$body['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        if (null !== $request->wyId) {
            @$body['WyId'] = $request->wyId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopApp',
            'version' => '2021-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopAppResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 停止应用.
     *
     * @param request - StopAppRequest
     *
     * @returns StopAppResponse
     *
     * @param StopAppRequest $request
     *
     * @return StopAppResponse
     */
    public function stopApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAppWithOptions($request, $runtime);
    }

    /**
     * 关闭应用资源.
     *
     * @param request - StopAppResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopAppResourcesResponse
     *
     * @param StopAppResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StopAppResourcesResponse
     */
    public function stopAppResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientIp) {
            @$body['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->clientOS) {
            @$body['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientVersion) {
            @$body['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->loginRegionId) {
            @$body['LoginRegionId'] = $request->loginRegionId;
        }

        if (null !== $request->loginToken) {
            @$body['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceIds) {
            @$body['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopAppResources',
            'version' => '2021-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopAppResourcesResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 关闭应用资源.
     *
     * @param request - StopAppResourcesRequest
     *
     * @returns StopAppResourcesResponse
     *
     * @param StopAppResourcesRequest $request
     *
     * @return StopAppResourcesResponse
     */
    public function stopAppResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAppResourcesWithOptions($request, $runtime);
    }

    /**
     * 解绑实例.
     *
     * @param request - UnbindRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindResponse
     *
     * @param UnbindRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return UnbindResponse
     */
    public function unbindWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->appInstanceGroupId) {
            @$body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }

        if (null !== $request->appInstanceId) {
            @$body['AppInstanceId'] = $request->appInstanceId;
        }

        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientIp) {
            @$body['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->clientOS) {
            @$body['ClientOS'] = $request->clientOS;
        }

        if (null !== $request->clientVersion) {
            @$body['ClientVersion'] = $request->clientVersion;
        }

        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->loginRegionId) {
            @$body['LoginRegionId'] = $request->loginRegionId;
        }

        if (null !== $request->loginToken) {
            @$body['LoginToken'] = $request->loginToken;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Unbind',
            'version' => '2021-09-03',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 解绑实例.
     *
     * @param request - UnbindRequest
     *
     * @returns UnbindResponse
     *
     * @param UnbindRequest $request
     *
     * @return UnbindResponse
     */
    public function unbind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindWithOptions($request, $runtime);
    }
}
