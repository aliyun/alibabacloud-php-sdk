<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WuyingAI\V20260311;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\WuyingAI\V20260311\Models\ChatRequest;
use AlibabaCloud\SDK\WuyingAI\V20260311\Models\ChatResponse;
use AlibabaCloud\SDK\WuyingAI\V20260311\Models\ChatShrinkRequest;
use AlibabaCloud\SDK\WuyingAI\V20260311\Models\GetAccessTokenRequest;
use AlibabaCloud\SDK\WuyingAI\V20260311\Models\GetAccessTokenResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class WuyingAI extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('wuyingai', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 与 JVS Crew 进行流式对话，采用 Server-Sent Events (SSE) 协议实时推送对话内容。
     *
     * @param tmpReq - ChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatResponse
     *
     * @param ChatRequest    $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return ChatResponse
     */
    public function chatWithSSE($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ChatShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        if (null !== $tmpReq->settings) {
            $request->settingsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->settings, 'Settings', 'json');
        }

        if (null !== $tmpReq->streamOptions) {
            $request->streamOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->streamOptions, 'StreamOptions', 'json');
        }

        $query = [];
        if (null !== $request->authorization) {
            @$query['Authorization'] = $request->authorization;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $body = [];
        if (null !== $request->externalUserId) {
            @$body['ExternalUserId'] = $request->externalUserId;
        }

        if (null !== $request->inputShrink) {
            @$body['Input'] = $request->inputShrink;
        }

        if (null !== $request->routingKey) {
            @$body['RoutingKey'] = $request->routingKey;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->settingsShrink) {
            @$body['Settings'] = $request->settingsShrink;
        }

        if (null !== $request->streamOptionsShrink) {
            @$body['StreamOptions'] = $request->streamOptionsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Chat',
            'version' => '2026-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield ChatResponse::fromMap([
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
     * 与 JVS Crew 进行流式对话，采用 Server-Sent Events (SSE) 协议实时推送对话内容。
     *
     * @param tmpReq - ChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatResponse
     *
     * @param ChatRequest    $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return ChatResponse
     */
    public function chatWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ChatShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        if (null !== $tmpReq->settings) {
            $request->settingsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->settings, 'Settings', 'json');
        }

        if (null !== $tmpReq->streamOptions) {
            $request->streamOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->streamOptions, 'StreamOptions', 'json');
        }

        $query = [];
        if (null !== $request->authorization) {
            @$query['Authorization'] = $request->authorization;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $body = [];
        if (null !== $request->externalUserId) {
            @$body['ExternalUserId'] = $request->externalUserId;
        }

        if (null !== $request->inputShrink) {
            @$body['Input'] = $request->inputShrink;
        }

        if (null !== $request->routingKey) {
            @$body['RoutingKey'] = $request->routingKey;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->settingsShrink) {
            @$body['Settings'] = $request->settingsShrink;
        }

        if (null !== $request->streamOptionsShrink) {
            @$body['StreamOptions'] = $request->streamOptionsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Chat',
            'version' => '2026-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 与 JVS Crew 进行流式对话，采用 Server-Sent Events (SSE) 协议实时推送对话内容。
     *
     * @param request - ChatRequest
     *
     * @returns ChatResponse
     *
     * @param ChatRequest $request
     *
     * @return ChatResponse
     */
    public function chat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatWithOptions($request, $runtime);
    }

    /**
     * 获取用户进行对话所需的访问令牌（AccessToken），用于后续调用 Chat 接口进行身份验证。
     *
     * @param request - GetAccessTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccessTokenResponse
     *
     * @param GetAccessTokenRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAccessTokenResponse
     */
    public function getAccessTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->externalUserId) {
            @$query['ExternalUserId'] = $request->externalUserId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccessToken',
            'version' => '2026-03-11',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccessTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用户进行对话所需的访问令牌（AccessToken），用于后续调用 Chat 接口进行身份验证。
     *
     * @param request - GetAccessTokenRequest
     *
     * @returns GetAccessTokenResponse
     *
     * @param GetAccessTokenRequest $request
     *
     * @return GetAccessTokenResponse
     */
    public function getAccessToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccessTokenWithOptions($request, $runtime);
    }
}
