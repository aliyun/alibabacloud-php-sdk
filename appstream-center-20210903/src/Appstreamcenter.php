<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Appstreamcenter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 获取连接信息
     *  *
     * @param GetConnectionTicketRequest $request GetConnectionTicketRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConnectionTicketResponse GetConnectionTicketResponse
     */
    public function getConnectionTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->appInstanceId)) {
            $body['AppInstanceId'] = $request->appInstanceId;
        }
        if (!Utils::isUnset($request->appVersion)) {
            $body['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->autoConnectInQueue)) {
            $body['AutoConnectInQueue'] = $request->autoConnectInQueue;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $body['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $body['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $body['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientType)) {
            $body['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $body['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->connectionProperties)) {
            $body['ConnectionProperties'] = $request->connectionProperties;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $body['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->environmentConfig)) {
            $body['EnvironmentConfig'] = $request->environmentConfig;
        }
        if (!Utils::isUnset($request->loginRegionId)) {
            $body['LoginRegionId'] = $request->loginRegionId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $body['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->param)) {
            $body['Param'] = $request->param;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetConnectionTicketResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetConnectionTicketResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取连接信息
     *  *
     * @param GetConnectionTicketRequest $request GetConnectionTicketRequest
     *
     * @return GetConnectionTicketResponse GetConnectionTicketResponse
     */
    public function getConnectionTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectionTicketWithOptions($request, $runtime);
    }

    /**
     * @summary 已上架应用列表
     *  *
     * @param ListPublishedAppInfoRequest $request ListPublishedAppInfoRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPublishedAppInfoResponse ListPublishedAppInfoResponse
     */
    public function listPublishedAppInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->categoryId)) {
            $query['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->categoryType)) {
            $query['CategoryType'] = $request->categoryType;
        }
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $query['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $query['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->loginRegionId)) {
            $query['LoginRegionId'] = $request->loginRegionId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->orderParam)) {
            $query['OrderParam'] = $request->orderParam;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->sortType)) {
            $query['SortType'] = $request->sortType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListPublishedAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPublishedAppInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 已上架应用列表
     *  *
     * @param ListPublishedAppInfoRequest $request ListPublishedAppInfoRequest
     *
     * @return ListPublishedAppInfoResponse ListPublishedAppInfoResponse
     */
    public function listPublishedAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublishedAppInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 运行中应用列表
     *  *
     * @param ListRunningAppsRequest $request ListRunningAppsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRunningAppsResponse ListRunningAppsResponse
     */
    public function listRunningAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $query['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $query['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $query['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->loginRegionId)) {
            $query['LoginRegionId'] = $request->loginRegionId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $query['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['TenantId'] = $request->tenantId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListRunningAppsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRunningAppsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 运行中应用列表
     *  *
     * @param ListRunningAppsRequest $request ListRunningAppsRequest
     *
     * @return ListRunningAppsResponse ListRunningAppsResponse
     */
    public function listRunningApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRunningAppsWithOptions($request, $runtime);
    }

    /**
     * @summary 重置应用资源
     *  *
     * @param ResetAppResourcesRequest $request ResetAppResourcesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetAppResourcesResponse ResetAppResourcesResponse
     */
    public function resetAppResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $body['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $body['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $body['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $body['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $body['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->loginRegionId)) {
            $body['LoginRegionId'] = $request->loginRegionId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $body['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $body['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ResetAppResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResetAppResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 重置应用资源
     *  *
     * @param ResetAppResourcesRequest $request ResetAppResourcesRequest
     *
     * @return ResetAppResourcesResponse ResetAppResourcesResponse
     */
    public function resetAppResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAppResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 重启应用资源
     *  *
     * @param RestartAppResourcesRequest $request RestartAppResourcesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartAppResourcesResponse RestartAppResourcesResponse
     */
    public function restartAppResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $body['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $body['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $body['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $body['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $body['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->loginRegionId)) {
            $body['LoginRegionId'] = $request->loginRegionId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $body['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $body['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RestartAppResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RestartAppResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 重启应用资源
     *  *
     * @param RestartAppResourcesRequest $request RestartAppResourcesRequest
     *
     * @return RestartAppResourcesResponse RestartAppResourcesResponse
     */
    public function restartAppResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartAppResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 启动应用资源
     *  *
     * @param StartAppResourcesRequest $request StartAppResourcesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return StartAppResourcesResponse StartAppResourcesResponse
     */
    public function startAppResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $body['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $body['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $body['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $body['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $body['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->loginRegionId)) {
            $body['LoginRegionId'] = $request->loginRegionId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $body['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $body['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StartAppResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartAppResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 启动应用资源
     *  *
     * @param StartAppResourcesRequest $request StartAppResourcesRequest
     *
     * @return StartAppResourcesResponse StartAppResourcesResponse
     */
    public function startAppResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAppResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 停止应用
     *  *
     * @param StopAppRequest $request StopAppRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return StopAppResponse StopAppResponse
     */
    public function stopAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aliUid)) {
            $body['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->apiType)) {
            $body['ApiType'] = $request->apiType;
        }
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->appInstanceId)) {
            $body['AppInstanceId'] = $request->appInstanceId;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $body['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->clientChannel)) {
            $body['ClientChannel'] = $request->clientChannel;
        }
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $body['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $body['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $body['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $body['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->forceStop)) {
            $body['ForceStop'] = $request->forceStop;
        }
        if (!Utils::isUnset($request->idpId)) {
            $body['IdpId'] = $request->idpId;
        }
        if (!Utils::isUnset($request->loginRegionId)) {
            $body['LoginRegionId'] = $request->loginRegionId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $body['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        if (!Utils::isUnset($request->wyId)) {
            $body['WyId'] = $request->wyId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StopAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 停止应用
     *  *
     * @param StopAppRequest $request StopAppRequest
     *
     * @return StopAppResponse StopAppResponse
     */
    public function stopApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAppWithOptions($request, $runtime);
    }

    /**
     * @summary 关闭应用资源
     *  *
     * @param StopAppResourcesRequest $request StopAppResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return StopAppResourcesResponse StopAppResourcesResponse
     */
    public function stopAppResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $body['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $body['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $body['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $body['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $body['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->loginRegionId)) {
            $body['LoginRegionId'] = $request->loginRegionId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $body['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->resourceIds)) {
            $body['ResourceIds'] = $request->resourceIds;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StopAppResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopAppResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 关闭应用资源
     *  *
     * @param StopAppResourcesRequest $request StopAppResourcesRequest
     *
     * @return StopAppResourcesResponse StopAppResourcesResponse
     */
    public function stopAppResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAppResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 解绑实例
     *  *
     * @param UnbindRequest  $request UnbindRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindResponse UnbindResponse
     */
    public function unbindWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->appInstanceId)) {
            $body['AppInstanceId'] = $request->appInstanceId;
        }
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $body['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->clientOS)) {
            $body['ClientOS'] = $request->clientOS;
        }
        if (!Utils::isUnset($request->clientVersion)) {
            $body['ClientVersion'] = $request->clientVersion;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $body['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->loginRegionId)) {
            $body['LoginRegionId'] = $request->loginRegionId;
        }
        if (!Utils::isUnset($request->loginToken)) {
            $body['LoginToken'] = $request->loginToken;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UnbindResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UnbindResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 解绑实例
     *  *
     * @param UnbindRequest $request UnbindRequest
     *
     * @return UnbindResponse UnbindResponse
     */
    public function unbind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindWithOptions($request, $runtime);
    }
}
