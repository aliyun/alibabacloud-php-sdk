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
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Appstreamcenter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'appstream-center';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
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
     * Retrieves the connection credentials for cloud applications.
     *
     * @remarks
     * It is a time-consuming operation to issue connection credentials. Therefore, you may need to invoke this API operation multiple times to obtain the connection credentials.
     * 1. When you invoke the API for the first time, an application instance is allocated to the specified convenience account, and the application is started. The start node ID (`TaskId`) is returned.
     * 2. When you invoke the API subsequently, you must pass the `TaskId` parameter as a request parameter to check whether the node is completed. When the returned node status (`TaskStatus`) is `Finished`, the connection ticket (`Ticket`) is also returned.
     * >
     * > - If the startup process is fast enough, the connection ticket (`Ticket`) may also be returned when you invoke the API for the first time.
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

        if (null !== $request->requireUuidValidation) {
            @$body['RequireUuidValidation'] = $request->requireUuidValidation;
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
     * Retrieves the connection credentials for cloud applications.
     *
     * @remarks
     * It is a time-consuming operation to issue connection credentials. Therefore, you may need to invoke this API operation multiple times to obtain the connection credentials.
     * 1. When you invoke the API for the first time, an application instance is allocated to the specified convenience account, and the application is started. The start node ID (`TaskId`) is returned.
     * 2. When you invoke the API subsequently, you must pass the `TaskId` parameter as a request parameter to check whether the node is completed. When the returned node status (`TaskStatus`) is `Finished`, the connection ticket (`Ticket`) is also returned.
     * >
     * > - If the startup process is fast enough, the connection ticket (`Ticket`) may also be returned when you invoke the API for the first time.
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
     * Retrieves a list of published applications.
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
     * Retrieves a list of published applications.
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
     * Queries running applications.
     *
     * @remarks
     * ## Prerequisites
     * This operation is an anonymous API operation, but the server still verifies the logon status. The `LoginToken` and `SessionId` request parameters are actually required. If either parameter is missing, an HTTP 400 error is returned with the error code `InvalidParameter.loginToken` or `InvalidParameter.sessionId`.
     * ## Obtain credentials
     * To obtain the `LoginToken` and `SessionId` by using `GetLoginToken`, call the `GetLoginToken` operation of the `appstream-center` 2021-02-20 version. The 2021-09-03 version does not provide this operation. You can also call `RefreshLoginToken` to update and obtain the `LoginToken`.
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
     * Queries running applications.
     *
     * @remarks
     * ## Prerequisites
     * This operation is an anonymous API operation, but the server still verifies the logon status. The `LoginToken` and `SessionId` request parameters are actually required. If either parameter is missing, an HTTP 400 error is returned with the error code `InvalidParameter.loginToken` or `InvalidParameter.sessionId`.
     * ## Obtain credentials
     * To obtain the `LoginToken` and `SessionId` by using `GetLoginToken`, call the `GetLoginToken` operation of the `appstream-center` 2021-02-20 version. The 2021-09-03 version does not provide this operation. You can also call `RefreshLoginToken` to update and obtain the `LoginToken`.
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
     * Resets application resources.
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
     * Resets application resources.
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
     * Restarts application resources.
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
     * Restarts application resources.
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
     * Starts application resources.
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
     * Starts application resources.
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
     * Stops a specified application.
     *
     * @remarks
     * ## Credential acquisition
     * To obtain the `LoginToken` and `SessionId` by using `GetLoginToken`, call the `GetLoginToken` operation of the `appstream-center` 2021-02-20 version. The 2021-09-03 version does not provide this operation. You can also update and obtain the `LoginToken` by using `RefreshLoginToken`.
     * ### Required parameters and authentication invocation flow for GetLoginToken (2021-02-20 version)
     * API documentation: [GetLoginToken (2021-02-20)](https://www.alibabacloud.com/help/en/wuying-appstreaming/developer-reference/api-appstream-center-2021-02-20-getlogintoken)
     * Required metric descriptions:
     * - `ClientId`: Required. The unique ID generated by the client, serving as the identity for the client that initiates the logon. Reuse the same value within the same session.
     * - `LoginIdentifier`: The enterprise identity (i.e., enterprise alias). This parameter is required when you use the enterprise identity logon method. Note that the parameter name is `LoginIdentifier`, not `TenantAlias`.
     * - When you use a convenience account or an AD domain account for authentication, the Settings for `CurrentStage` must be `ADPassword`, and you must provide both `EndUserId` (username) and `Password` (password).
     * Complete authentication invocation flow:
     * 1. Invoke `GetLoginToken` for the first time with `ClientId`, `LoginIdentifier`, `CurrentStage` based on the logon method, and the corresponding credentials. Save the returned `LoginToken` and `SessionId`. `SessionId` is returned only during the first invocation in the same session and must be reused in subsequent stage invocations.
     * 2. If `NextStage` (such as `MFAVerify`, `TokenVerify`, or `ChangePassword`) is returned, carry the same `SessionId` and `ClientId`, update the Settings of `CurrentStage` to the value of `NextStage`, and provide the parameters required for this stage (such as `AuthenticationCode` for the `MFAVerify` stage and `TokenCode` for the `TokenVerify` stage). Repeat the invocation until the final `LoginToken` is obtained.
     * 3. Use the final `LoginToken` and `SessionId` to invoke this operation (`StopApp`).
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
     * Stops a specified application.
     *
     * @remarks
     * ## Credential acquisition
     * To obtain the `LoginToken` and `SessionId` by using `GetLoginToken`, call the `GetLoginToken` operation of the `appstream-center` 2021-02-20 version. The 2021-09-03 version does not provide this operation. You can also update and obtain the `LoginToken` by using `RefreshLoginToken`.
     * ### Required parameters and authentication invocation flow for GetLoginToken (2021-02-20 version)
     * API documentation: [GetLoginToken (2021-02-20)](https://www.alibabacloud.com/help/en/wuying-appstreaming/developer-reference/api-appstream-center-2021-02-20-getlogintoken)
     * Required metric descriptions:
     * - `ClientId`: Required. The unique ID generated by the client, serving as the identity for the client that initiates the logon. Reuse the same value within the same session.
     * - `LoginIdentifier`: The enterprise identity (i.e., enterprise alias). This parameter is required when you use the enterprise identity logon method. Note that the parameter name is `LoginIdentifier`, not `TenantAlias`.
     * - When you use a convenience account or an AD domain account for authentication, the Settings for `CurrentStage` must be `ADPassword`, and you must provide both `EndUserId` (username) and `Password` (password).
     * Complete authentication invocation flow:
     * 1. Invoke `GetLoginToken` for the first time with `ClientId`, `LoginIdentifier`, `CurrentStage` based on the logon method, and the corresponding credentials. Save the returned `LoginToken` and `SessionId`. `SessionId` is returned only during the first invocation in the same session and must be reused in subsequent stage invocations.
     * 2. If `NextStage` (such as `MFAVerify`, `TokenVerify`, or `ChangePassword`) is returned, carry the same `SessionId` and `ClientId`, update the Settings of `CurrentStage` to the value of `NextStage`, and provide the parameters required for this stage (such as `AuthenticationCode` for the `MFAVerify` stage and `TokenCode` for the `TokenVerify` stage). Repeat the invocation until the final `LoginToken` is obtained.
     * 3. Use the final `LoginToken` and `SessionId` to invoke this operation (`StopApp`).
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
     * Stops application resources.
     *
     * @remarks
     * ## Before you begin
     * Before you call this operation, you must complete user logon authentication to obtain the `LoginToken` and `SessionId`. This `StopAppResources` operation uses the **2021-09-03** version of `appstream-center`. The prerequisite logon operation uses the **2021-02-20** version of [GetLoginToken](https://www.alibabacloud.com/help/en/wuying-appstreaming/developer-reference/api-appstream-center-2021-02-20-getlogintoken). Use the respective API versions for each operation.
     * ### 1. Prepare the enterprise identifier and account information
     * The following procedure applies to password authentication for convenience accounts or AD domain accounts that log on by using an enterprise identifier.
     * | Parameter | Description |
     * | --- | --- |
     * | `ClientId` | The unique ID generated by the client. This parameter is required when you call `GetLoginToken`. The same client ID is reused in the following call sequence. |
     * | `LoginIdentifier` | The enterprise identifier for logon, which is the `TenantAlias`. The parameter name in the logon request is `LoginIdentifier`, not `TenantAlias`. To query the logon configuration of this identifier, you can call [FindIdpListByLoginIdentifier (2021-02-20)](https://www.alibabacloud.com/help/en/wuying-appstreaming/developer-reference/api-appstream-center-2021-02-20-findidplistbyloginidentifier). The `TenantAliasInfo.TenantAlias` field in the response indicates the enterprise identifier. |
     * | `CurrentStage` | Set this parameter to `ADPassword` for password authentication. This value applies to both convenience accounts and AD domain accounts, not only AD domain accounts. |
     * | `EndUserId` | The username of the convenience account or AD domain account. This parameter is required when `CurrentStage` is set to `ADPassword`. |
     * | `Password` | The password of the corresponding account. This parameter is required when `CurrentStage` is set to `ADPassword`. |
     * ### 2. Continue logon based on the returned authentication stage
     * After you invoke `GetLoginToken` for the first time, save the returned `SessionId`. This value is returned only during the first invocation in the same logon session. If you need to authenticate further, include the saved `SessionId` in subsequent requests. Do not clear this value even if it is not returned in subsequent responses.
     * Determine whether you still need to authenticate based on the `NextStage` field in the response, and set the required next authentication stage as the `CurrentStage` for subsequent requests. Examples:
     * | Next authentication stage | What to do next |
     * | --- | --- |
     * | `MFAVerify` | Include the `SessionId` and the `AuthenticationCode` generated by the virtual MFA device to continue to invoke `GetLoginToken`. |
     * | `TokenVerify` | Include the `SessionId` and the client secondary authentication verification code `TokenCode` to continue to authenticate. |
     * | `ChangePassword` | Specify `OldPassword` and `NewPassword` as required to complete the password change stage. |
     * | `MFABind` or other authentication stages | Complete the corresponding operations based on the actual returned stage and the `GetLoginToken` documentation. Do not directly apply the request parameters of `MFAVerify`. |
     * The authentication stages are determined by the account configuration and the result of the current logon. Not every logon must go through all the preceding stages in sequence. Invoke `StopAppResources` only after logon authentication is complete and the `LoginToken` is obtained. Do not proceed with the shutdown of resources if authentication failed or if there are pending authentication stages.
     * ### 3. Call sequence example
     * The following is pseudocode for parameter passing and is not an executable SDK example. `clientId`, `tenantAlias`, `endUserId`, `password`, and `authenticationCode` are runtime variables of the caller. `resourceIds`, `productType`, and `appInstanceGroupId` are business parameters for this operation. Do not write real passwords, verification codes, or logon credentials in examples or logs.
     * ```text
     * login1 = GetLoginToken(version="2021-02-20",
     *     ClientId=clientId, LoginIdentifier=tenantAlias,
     *     CurrentStage="ADPassword", EndUserId=endUserId, Password=password)
     * sessionId = login1.SessionId
     * loginResult = login1
     * if loginResult.NextStage == "MFAVerify":
     *     loginResult = GetLoginToken(version="2021-02-20",
     *         ClientId=clientId, LoginIdentifier=tenantAlias,
     *         SessionId=sessionId, CurrentStage="MFAVerify",
     *         AuthenticationCode=authenticationCode)
     * ```
     * If other authentication stages are still required, continue processing based on `NextStage`. Do not treat the preceding single MFA call as a fixed endpoint. After logon is complete, call this operation by using the `LoginToken` obtained during this logon and the saved `SessionId`:
     * ```text
     * StopAppResources(version="2021-09-03",
     *     ClientId=clientId, LoginToken=loginResult.LoginToken, SessionId=sessionId,
     *     ProductType=productType, AppInstanceGroupId=appInstanceGroupId,
     *     ResourceIds=resourceIds)
     * ```
     * `Password`, `LoginIdentifier`, and `CurrentStage` belong to the prerequisite logon request and are not request parameters of `StopAppResources`. For the rules on how to specify other parameters and resource IDs for this operation, see the request parameter table below.
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
     * Stops application resources.
     *
     * @remarks
     * ## Before you begin
     * Before you call this operation, you must complete user logon authentication to obtain the `LoginToken` and `SessionId`. This `StopAppResources` operation uses the **2021-09-03** version of `appstream-center`. The prerequisite logon operation uses the **2021-02-20** version of [GetLoginToken](https://www.alibabacloud.com/help/en/wuying-appstreaming/developer-reference/api-appstream-center-2021-02-20-getlogintoken). Use the respective API versions for each operation.
     * ### 1. Prepare the enterprise identifier and account information
     * The following procedure applies to password authentication for convenience accounts or AD domain accounts that log on by using an enterprise identifier.
     * | Parameter | Description |
     * | --- | --- |
     * | `ClientId` | The unique ID generated by the client. This parameter is required when you call `GetLoginToken`. The same client ID is reused in the following call sequence. |
     * | `LoginIdentifier` | The enterprise identifier for logon, which is the `TenantAlias`. The parameter name in the logon request is `LoginIdentifier`, not `TenantAlias`. To query the logon configuration of this identifier, you can call [FindIdpListByLoginIdentifier (2021-02-20)](https://www.alibabacloud.com/help/en/wuying-appstreaming/developer-reference/api-appstream-center-2021-02-20-findidplistbyloginidentifier). The `TenantAliasInfo.TenantAlias` field in the response indicates the enterprise identifier. |
     * | `CurrentStage` | Set this parameter to `ADPassword` for password authentication. This value applies to both convenience accounts and AD domain accounts, not only AD domain accounts. |
     * | `EndUserId` | The username of the convenience account or AD domain account. This parameter is required when `CurrentStage` is set to `ADPassword`. |
     * | `Password` | The password of the corresponding account. This parameter is required when `CurrentStage` is set to `ADPassword`. |
     * ### 2. Continue logon based on the returned authentication stage
     * After you invoke `GetLoginToken` for the first time, save the returned `SessionId`. This value is returned only during the first invocation in the same logon session. If you need to authenticate further, include the saved `SessionId` in subsequent requests. Do not clear this value even if it is not returned in subsequent responses.
     * Determine whether you still need to authenticate based on the `NextStage` field in the response, and set the required next authentication stage as the `CurrentStage` for subsequent requests. Examples:
     * | Next authentication stage | What to do next |
     * | --- | --- |
     * | `MFAVerify` | Include the `SessionId` and the `AuthenticationCode` generated by the virtual MFA device to continue to invoke `GetLoginToken`. |
     * | `TokenVerify` | Include the `SessionId` and the client secondary authentication verification code `TokenCode` to continue to authenticate. |
     * | `ChangePassword` | Specify `OldPassword` and `NewPassword` as required to complete the password change stage. |
     * | `MFABind` or other authentication stages | Complete the corresponding operations based on the actual returned stage and the `GetLoginToken` documentation. Do not directly apply the request parameters of `MFAVerify`. |
     * The authentication stages are determined by the account configuration and the result of the current logon. Not every logon must go through all the preceding stages in sequence. Invoke `StopAppResources` only after logon authentication is complete and the `LoginToken` is obtained. Do not proceed with the shutdown of resources if authentication failed or if there are pending authentication stages.
     * ### 3. Call sequence example
     * The following is pseudocode for parameter passing and is not an executable SDK example. `clientId`, `tenantAlias`, `endUserId`, `password`, and `authenticationCode` are runtime variables of the caller. `resourceIds`, `productType`, and `appInstanceGroupId` are business parameters for this operation. Do not write real passwords, verification codes, or logon credentials in examples or logs.
     * ```text
     * login1 = GetLoginToken(version="2021-02-20",
     *     ClientId=clientId, LoginIdentifier=tenantAlias,
     *     CurrentStage="ADPassword", EndUserId=endUserId, Password=password)
     * sessionId = login1.SessionId
     * loginResult = login1
     * if loginResult.NextStage == "MFAVerify":
     *     loginResult = GetLoginToken(version="2021-02-20",
     *         ClientId=clientId, LoginIdentifier=tenantAlias,
     *         SessionId=sessionId, CurrentStage="MFAVerify",
     *         AuthenticationCode=authenticationCode)
     * ```
     * If other authentication stages are still required, continue processing based on `NextStage`. Do not treat the preceding single MFA call as a fixed endpoint. After logon is complete, call this operation by using the `LoginToken` obtained during this logon and the saved `SessionId`:
     * ```text
     * StopAppResources(version="2021-09-03",
     *     ClientId=clientId, LoginToken=loginResult.LoginToken, SessionId=sessionId,
     *     ProductType=productType, AppInstanceGroupId=appInstanceGroupId,
     *     ResourceIds=resourceIds)
     * ```
     * `Password`, `LoginIdentifier`, and `CurrentStage` belong to the prerequisite logon request and are not request parameters of `StopAppResources`. For the rules on how to specify other parameters and resource IDs for this operation, see the request parameter table below.
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
     * Unbinds an application instance from a user.
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

        if (null !== $request->appInstancePersistentId) {
            @$body['AppInstancePersistentId'] = $request->appInstancePersistentId;
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

        if (null !== $request->sessionToken) {
            @$body['SessionToken'] = $request->sessionToken;
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
     * Unbinds an application instance from a user.
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
