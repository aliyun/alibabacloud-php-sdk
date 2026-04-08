<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appflow\V20230904;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Appflow\V20230904\Models\GenerateUserSessionTokenRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\GenerateUserSessionTokenResponse;
use AlibabaCloud\SDK\Appflow\V20230904\Models\InvokeActionRequest;
use AlibabaCloud\SDK\Appflow\V20230904\Models\InvokeActionResponse;
use AlibabaCloud\SDK\Appflow\V20230904\Models\InvokeActionShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Appflow extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
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
     * Generate Login Session Token.
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
     * Generate Login Session Token.
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
     * 运行连接器的执行动作.
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
     * 运行连接器的执行动作.
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
     * 运行连接器的执行动作.
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
}
