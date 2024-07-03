<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\GetConnectionTicketRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\GetConnectionTicketResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ListLFUAppRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ListLFUAppResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ListPublishedAppInfoRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ListPublishedAppInfoResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ListRunningAppsRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ListRunningAppsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\StopAppRequest;
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
        $this->_endpointRule       = '';
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
        if (!Utils::isUnset($request->connectionProperties)) {
            $body['ConnectionProperties'] = $request->connectionProperties;
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
            'action'      => 'GetConnectionTicket',
            'version'     => '2021-09-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConnectionTicketResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListLFUAppRequest $request ListLFUAppRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLFUAppResponse ListLFUAppResponse
     */
    public function listLFUAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aliUid)) {
            $body['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->apiType)) {
            $body['ApiType'] = $request->apiType;
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
        if (!Utils::isUnset($request->extendsAccessToken)) {
            $body['ExtendsAccessToken'] = $request->extendsAccessToken;
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
        if (!Utils::isUnset($request->traceId)) {
            $body['TraceId'] = $request->traceId;
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
            'action'      => 'ListLFUApp',
            'version'     => '2021-09-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLFUAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLFUAppRequest $request ListLFUAppRequest
     *
     * @return ListLFUAppResponse ListLFUAppResponse
     */
    public function listLFUApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLFUAppWithOptions($request, $runtime);
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
            'action'      => 'ListPublishedAppInfo',
            'version'     => '2021-09-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPublishedAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'ListRunningApps',
            'version'     => '2021-09-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRunningAppsResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'StopApp',
            'version'     => '2021-09-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopAppResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'action'      => 'Unbind',
            'version'     => '2021-09-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindResponse::fromMap($this->callApi($params, $req, $runtime));
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
