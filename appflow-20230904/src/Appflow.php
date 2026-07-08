<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appflow\V20230904;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Appflow\V20230904\Models\CreateFlowRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\CreateFlowResponse;
use AlibabaCloud\SDK\Appflow\V20230904\Models\CreateUserAuthConfigRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\CreateUserAuthConfigResponse;
use AlibabaCloud\SDK\Appflow\V20230904\Models\DeleteFlowRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\DeleteFlowResponse;
use AlibabaCloud\SDK\Appflow\V20230904\Models\DeleteUserAuthConfigRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\DeleteUserAuthConfigResponse;
use AlibabaCloud\SDK\Appflow\V20230904\Models\DisableFlowRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\DisableFlowResponse;
use AlibabaCloud\SDK\Appflow\V20230904\Models\EnableFlowRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\EnableFlowResponse;
use AlibabaCloud\SDK\Appflow\V20230904\Models\GenerateUserSessionTokenRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\GenerateUserSessionTokenResponse;
use AlibabaCloud\SDK\Appflow\V20230904\Models\GetFlowRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\GetFlowResponse;
use AlibabaCloud\SDK\Appflow\V20230904\Models\GetUserAuthConfigRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\GetUserAuthConfigResponse;
use AlibabaCloud\SDK\Appflow\V20230904\Models\InvokeActionRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\InvokeActionResponse;
use AlibabaCloud\SDK\Appflow\V20230904\Models\InvokeActionShrinkRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\LaunchFlowRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\LaunchFlowResponse;
use AlibabaCloud\SDK\Appflow\V20230904\Models\ListFlowsRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\ListFlowsResponse;
use AlibabaCloud\SDK\Appflow\V20230904\Models\ListUserAuthConfigsRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\ListUserAuthConfigsResponse;
use AlibabaCloud\SDK\Appflow\V20230904\Models\UpdateFlowRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\UpdateFlowResponse;
use AlibabaCloud\SDK\Appflow\V20230904\Models\UpdateUserAuthConfigRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\UpdateUserAuthConfigResponse;
use AlibabaCloud\SDK\Appflow\V20230904\Models\WithdrawFlowRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\WithdrawFlowResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Appflow extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou' => 'appflow.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('appflow', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates a flow.
     *
     * @remarks
     * Creates a flow or a flow version.
     *
     * @param request - CreateFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFlowResponse
     *
     * @param CreateFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFlowResponse
     */
    public function createFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flowDesc) {
            @$query['FlowDesc'] = $request->flowDesc;
        }

        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        if (null !== $request->flowName) {
            @$query['FlowName'] = $request->flowName;
        }

        if (null !== $request->flowTemplate) {
            @$query['FlowTemplate'] = $request->flowTemplate;
        }

        if (null !== $request->launchStatus) {
            @$query['LaunchStatus'] = $request->launchStatus;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFlow',
            'version' => '2023-09-04',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a flow.
     *
     * @remarks
     * Creates a flow or a flow version.
     *
     * @param request - CreateFlowRequest
     *
     * @returns CreateFlowResponse
     *
     * @param CreateFlowRequest $request
     *
     * @return CreateFlowResponse
     */
    public function createFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowWithOptions($request, $runtime);
    }

    /**
     * Creates a user authentication credential.
     *
     * @remarks
     * Creates a connection flow or a connection flow version.
     *
     * @param request - CreateUserAuthConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserAuthConfigResponse
     *
     * @param CreateUserAuthConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateUserAuthConfigResponse
     */
    public function createUserAuthConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authConfig) {
            @$query['AuthConfig'] = $request->authConfig;
        }

        if (null !== $request->authConfigName) {
            @$query['AuthConfigName'] = $request->authConfigName;
        }

        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->connectorId) {
            @$query['ConnectorId'] = $request->connectorId;
        }

        if (null !== $request->connectorVersion) {
            @$query['ConnectorVersion'] = $request->connectorVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUserAuthConfig',
            'version' => '2023-09-04',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUserAuthConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a user authentication credential.
     *
     * @remarks
     * Creates a connection flow or a connection flow version.
     *
     * @param request - CreateUserAuthConfigRequest
     *
     * @returns CreateUserAuthConfigResponse
     *
     * @param CreateUserAuthConfigRequest $request
     *
     * @return CreateUserAuthConfigResponse
     */
    public function createUserAuthConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserAuthConfigWithOptions($request, $runtime);
    }

    /**
     * Deletes a connection flow.
     *
     * @param request - DeleteFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFlowResponse
     *
     * @param DeleteFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFlowResponse
     */
    public function deleteFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        if (null !== $request->flowVersion) {
            @$query['FlowVersion'] = $request->flowVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteFlow',
            'version' => '2023-09-04',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a connection flow.
     *
     * @param request - DeleteFlowRequest
     *
     * @returns DeleteFlowResponse
     *
     * @param DeleteFlowRequest $request
     *
     * @return DeleteFlowResponse
     */
    public function deleteFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowWithOptions($request, $runtime);
    }

    /**
     * Deletes a user authentication credential.
     *
     * @remarks
     * Creates a connection flow or a connection flow version.
     *
     * @param request - DeleteUserAuthConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserAuthConfigResponse
     *
     * @param DeleteUserAuthConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteUserAuthConfigResponse
     */
    public function deleteUserAuthConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authConfigId) {
            @$query['AuthConfigId'] = $request->authConfigId;
        }

        if (null !== $request->connectorId) {
            @$query['ConnectorId'] = $request->connectorId;
        }

        if (null !== $request->connectorVersion) {
            @$query['ConnectorVersion'] = $request->connectorVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUserAuthConfig',
            'version' => '2023-09-04',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUserAuthConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a user authentication credential.
     *
     * @remarks
     * Creates a connection flow or a connection flow version.
     *
     * @param request - DeleteUserAuthConfigRequest
     *
     * @returns DeleteUserAuthConfigResponse
     *
     * @param DeleteUserAuthConfigRequest $request
     *
     * @return DeleteUserAuthConfigResponse
     */
    public function deleteUserAuthConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserAuthConfigWithOptions($request, $runtime);
    }

    /**
     * Disables a flow.
     *
     * @param request - DisableFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableFlowResponse
     *
     * @param DisableFlowRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DisableFlowResponse
     */
    public function disableFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        if (null !== $request->flowVersion) {
            @$query['FlowVersion'] = $request->flowVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableFlow',
            'version' => '2023-09-04',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a flow.
     *
     * @param request - DisableFlowRequest
     *
     * @returns DisableFlowResponse
     *
     * @param DisableFlowRequest $request
     *
     * @return DisableFlowResponse
     */
    public function disableFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableFlowWithOptions($request, $runtime);
    }

    /**
     * Enables a flow.
     *
     * @param request - EnableFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableFlowResponse
     *
     * @param EnableFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return EnableFlowResponse
     */
    public function enableFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        if (null !== $request->flowVersion) {
            @$query['FlowVersion'] = $request->flowVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableFlow',
            'version' => '2023-09-04',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a flow.
     *
     * @param request - EnableFlowRequest
     *
     * @returns EnableFlowResponse
     *
     * @param EnableFlowRequest $request
     *
     * @return EnableFlowResponse
     */
    public function enableFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableFlowWithOptions($request, $runtime);
    }

    /**
     * Generates a logon session token.
     *
     * @param request - GenerateUserSessionTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateUserSessionTokenResponse
     *
     * @param GenerateUserSessionTokenRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GenerateUserSessionTokenResponse
     */
    public function generateUserSessionTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chatbotId) {
            @$query['ChatbotId'] = $request->chatbotId;
        }

        if (null !== $request->expireSecond) {
            @$query['ExpireSecond'] = $request->expireSecond;
        }

        if (null !== $request->extraInfo) {
            @$query['ExtraInfo'] = $request->extraInfo;
        }

        if (null !== $request->integrateId) {
            @$query['IntegrateId'] = $request->integrateId;
        }

        if (null !== $request->userAvatar) {
            @$query['UserAvatar'] = $request->userAvatar;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateUserSessionToken',
            'version' => '2023-09-04',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateUserSessionTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a logon session token.
     *
     * @param request - GenerateUserSessionTokenRequest
     *
     * @returns GenerateUserSessionTokenResponse
     *
     * @param GenerateUserSessionTokenRequest $request
     *
     * @return GenerateUserSessionTokenResponse
     */
    public function generateUserSessionToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUserSessionTokenWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a flow.
     *
     * @param request - GetFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFlowResponse
     *
     * @param GetFlowRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetFlowResponse
     */
    public function getFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        if (null !== $request->flowVersion) {
            @$query['FlowVersion'] = $request->flowVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFlow',
            'version' => '2023-09-04',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a flow.
     *
     * @param request - GetFlowRequest
     *
     * @returns GetFlowResponse
     *
     * @param GetFlowRequest $request
     *
     * @return GetFlowResponse
     */
    public function getFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFlowWithOptions($request, $runtime);
    }

    /**
     * Gets the details of a user authentication credential.
     *
     * @remarks
     * This operation gets the details of a specified credential.
     *
     * @param request - GetUserAuthConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserAuthConfigResponse
     *
     * @param GetUserAuthConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetUserAuthConfigResponse
     */
    public function getUserAuthConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authConfigId) {
            @$query['AuthConfigId'] = $request->authConfigId;
        }

        if (null !== $request->connectorId) {
            @$query['ConnectorId'] = $request->connectorId;
        }

        if (null !== $request->connectorVersion) {
            @$query['ConnectorVersion'] = $request->connectorVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserAuthConfig',
            'version' => '2023-09-04',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserAuthConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets the details of a user authentication credential.
     *
     * @remarks
     * This operation gets the details of a specified credential.
     *
     * @param request - GetUserAuthConfigRequest
     *
     * @returns GetUserAuthConfigResponse
     *
     * @param GetUserAuthConfigRequest $request
     *
     * @return GetUserAuthConfigResponse
     */
    public function getUserAuthConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserAuthConfigWithOptions($request, $runtime);
    }

    /**
     * Invokes a connector action.
     *
     * @param tmpReq - InvokeActionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvokeActionResponse
     *
     * @param InvokeActionRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return InvokeActionResponse
     */
    public function invokeActionWithSSE($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new InvokeActionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->authConfig) {
            $request->authConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->authConfig, 'AuthConfig', 'json');
        }

        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'Body', 'json');
        }

        if (null !== $tmpReq->headers) {
            $request->headersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->headers, 'Headers', 'json');
        }

        if (null !== $tmpReq->path) {
            $request->pathShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->path, 'Path', 'json');
        }

        if (null !== $tmpReq->query) {
            $request->queryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->query, 'Query', 'json');
        }

        $query = [];
        if (null !== $request->actionId) {
            @$query['ActionId'] = $request->actionId;
        }

        if (null !== $request->actionVersion) {
            @$query['ActionVersion'] = $request->actionVersion;
        }

        if (null !== $request->authConfigShrink) {
            @$query['AuthConfig'] = $request->authConfigShrink;
        }

        if (null !== $request->bodyShrink) {
            @$query['Body'] = $request->bodyShrink;
        }

        if (null !== $request->connectorId) {
            @$query['ConnectorId'] = $request->connectorId;
        }

        if (null !== $request->connectorVersion) {
            @$query['ConnectorVersion'] = $request->connectorVersion;
        }

        if (null !== $request->headersShrink) {
            @$query['Headers'] = $request->headersShrink;
        }

        if (null !== $request->pathShrink) {
            @$query['Path'] = $request->pathShrink;
        }

        if (null !== $request->queryShrink) {
            @$query['Query'] = $request->queryShrink;
        }

        if (null !== $request->stream) {
            @$query['Stream'] = $request->stream;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InvokeAction',
            'version' => '2023-09-04',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield InvokeActionResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Invokes a connector action.
     *
     * @param tmpReq - InvokeActionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvokeActionResponse
     *
     * @param InvokeActionRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return InvokeActionResponse
     */
    public function invokeActionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new InvokeActionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->authConfig) {
            $request->authConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->authConfig, 'AuthConfig', 'json');
        }

        if (null !== $tmpReq->body) {
            $request->bodyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->body, 'Body', 'json');
        }

        if (null !== $tmpReq->headers) {
            $request->headersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->headers, 'Headers', 'json');
        }

        if (null !== $tmpReq->path) {
            $request->pathShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->path, 'Path', 'json');
        }

        if (null !== $tmpReq->query) {
            $request->queryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->query, 'Query', 'json');
        }

        $query = [];
        if (null !== $request->actionId) {
            @$query['ActionId'] = $request->actionId;
        }

        if (null !== $request->actionVersion) {
            @$query['ActionVersion'] = $request->actionVersion;
        }

        if (null !== $request->authConfigShrink) {
            @$query['AuthConfig'] = $request->authConfigShrink;
        }

        if (null !== $request->bodyShrink) {
            @$query['Body'] = $request->bodyShrink;
        }

        if (null !== $request->connectorId) {
            @$query['ConnectorId'] = $request->connectorId;
        }

        if (null !== $request->connectorVersion) {
            @$query['ConnectorVersion'] = $request->connectorVersion;
        }

        if (null !== $request->headersShrink) {
            @$query['Headers'] = $request->headersShrink;
        }

        if (null !== $request->pathShrink) {
            @$query['Path'] = $request->pathShrink;
        }

        if (null !== $request->queryShrink) {
            @$query['Query'] = $request->queryShrink;
        }

        if (null !== $request->stream) {
            @$query['Stream'] = $request->stream;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InvokeAction',
            'version' => '2023-09-04',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InvokeActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invokes a connector action.
     *
     * @param request - InvokeActionRequest
     *
     * @returns InvokeActionResponse
     *
     * @param InvokeActionRequest $request
     *
     * @return InvokeActionResponse
     */
    public function invokeAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invokeActionWithOptions($request, $runtime);
    }

    /**
     * Launches a flow.
     *
     * @param request - LaunchFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LaunchFlowResponse
     *
     * @param LaunchFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return LaunchFlowResponse
     */
    public function launchFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flowDesc) {
            @$query['FlowDesc'] = $request->flowDesc;
        }

        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        if (null !== $request->flowName) {
            @$query['FlowName'] = $request->flowName;
        }

        if (null !== $request->flowTemplate) {
            @$query['FlowTemplate'] = $request->flowTemplate;
        }

        if (null !== $request->flowVersion) {
            @$query['FlowVersion'] = $request->flowVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LaunchFlow',
            'version' => '2023-09-04',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LaunchFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Launches a flow.
     *
     * @param request - LaunchFlowRequest
     *
     * @returns LaunchFlowResponse
     *
     * @param LaunchFlowRequest $request
     *
     * @return LaunchFlowResponse
     */
    public function launchFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->launchFlowWithOptions($request, $runtime);
    }

    /**
     * Retrieves a list of connector flows.
     *
     * @remarks
     * Creates a connector flow or a connector flow version.
     *
     * @param request - ListFlowsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFlowsResponse
     *
     * @param ListFlowsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListFlowsResponse
     */
    public function listFlowsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFlows',
            'version' => '2023-09-04',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFlowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of connector flows.
     *
     * @remarks
     * Creates a connector flow or a connector flow version.
     *
     * @param request - ListFlowsRequest
     *
     * @returns ListFlowsResponse
     *
     * @param ListFlowsRequest $request
     *
     * @return ListFlowsResponse
     */
    public function listFlows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowsWithOptions($request, $runtime);
    }

    /**
     * Lists user authentication credentials.
     *
     * @remarks
     * This operation retrieves user auth configs that match specified filters.
     *
     * @param request - ListUserAuthConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserAuthConfigsResponse
     *
     * @param ListUserAuthConfigsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListUserAuthConfigsResponse
     */
    public function listUserAuthConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->connectorId) {
            @$query['ConnectorId'] = $request->connectorId;
        }

        if (null !== $request->connectorVersion) {
            @$query['ConnectorVersion'] = $request->connectorVersion;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserAuthConfigs',
            'version' => '2023-09-04',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserAuthConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists user authentication credentials.
     *
     * @remarks
     * This operation retrieves user auth configs that match specified filters.
     *
     * @param request - ListUserAuthConfigsRequest
     *
     * @returns ListUserAuthConfigsResponse
     *
     * @param ListUserAuthConfigsRequest $request
     *
     * @return ListUserAuthConfigsResponse
     */
    public function listUserAuthConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserAuthConfigsWithOptions($request, $runtime);
    }

    /**
     * Updates a connection flow.
     *
     * @param request - UpdateFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFlowResponse
     *
     * @param UpdateFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateFlowResponse
     */
    public function updateFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->flowDesc) {
            @$query['FlowDesc'] = $request->flowDesc;
        }

        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        if (null !== $request->flowName) {
            @$query['FlowName'] = $request->flowName;
        }

        if (null !== $request->flowTemplate) {
            @$query['FlowTemplate'] = $request->flowTemplate;
        }

        if (null !== $request->flowVersion) {
            @$query['FlowVersion'] = $request->flowVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateFlow',
            'version' => '2023-09-04',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a connection flow.
     *
     * @param request - UpdateFlowRequest
     *
     * @returns UpdateFlowResponse
     *
     * @param UpdateFlowRequest $request
     *
     * @return UpdateFlowResponse
     */
    public function updateFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlowWithOptions($request, $runtime);
    }

    /**
     * Updates a user authentication credential.
     *
     * @remarks
     * Updates the configuration of a specific user authentication credential.
     *
     * @param request - UpdateUserAuthConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserAuthConfigResponse
     *
     * @param UpdateUserAuthConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateUserAuthConfigResponse
     */
    public function updateUserAuthConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authConfig) {
            @$query['AuthConfig'] = $request->authConfig;
        }

        if (null !== $request->authConfigId) {
            @$query['AuthConfigId'] = $request->authConfigId;
        }

        if (null !== $request->authConfigName) {
            @$query['AuthConfigName'] = $request->authConfigName;
        }

        if (null !== $request->connectorId) {
            @$query['ConnectorId'] = $request->connectorId;
        }

        if (null !== $request->connectorVersion) {
            @$query['ConnectorVersion'] = $request->connectorVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateUserAuthConfig',
            'version' => '2023-09-04',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserAuthConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a user authentication credential.
     *
     * @remarks
     * Updates the configuration of a specific user authentication credential.
     *
     * @param request - UpdateUserAuthConfigRequest
     *
     * @returns UpdateUserAuthConfigResponse
     *
     * @param UpdateUserAuthConfigRequest $request
     *
     * @return UpdateUserAuthConfigResponse
     */
    public function updateUserAuthConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserAuthConfigWithOptions($request, $runtime);
    }

    /**
     * Withdraws a connection flow.
     *
     * @param request - WithdrawFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns WithdrawFlowResponse
     *
     * @param WithdrawFlowRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return WithdrawFlowResponse
     */
    public function withdrawFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        if (null !== $request->flowVersion) {
            @$query['FlowVersion'] = $request->flowVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'WithdrawFlow',
            'version' => '2023-09-04',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return WithdrawFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Withdraws a connection flow.
     *
     * @param request - WithdrawFlowRequest
     *
     * @returns WithdrawFlowResponse
     *
     * @param WithdrawFlowRequest $request
     *
     * @return WithdrawFlowResponse
     */
    public function withdrawFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->withdrawFlowWithOptions($request, $runtime);
    }
}
