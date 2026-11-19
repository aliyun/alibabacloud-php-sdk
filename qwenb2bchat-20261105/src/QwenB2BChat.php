<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261105;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\ChatHeaders;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\ChatRequest;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\ChatResponse;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\OpenServiceHeaders;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\OpenServiceRequest;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\OpenServiceResponse;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\StreamVoiceHeaders;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\StreamVoiceRequest;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\StreamVoiceResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;
use Darabonba\OpenApi\WebsocketUtils\Client as WebSocketUtilsClient;

class QwenB2BChat extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'QwenB2BChat';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('qwenb2bchat', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Sends text or multimodal messages to initiate conversations with web search capabilities, supporting deep thinking, session history management, and both complete JSON and Server-Sent Events (SSE) streaming responses. Specific agent and media capabilities are subject to the activated scope.
     *
     * @param request - ChatRequest
     * @param headers - ChatHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatResponse
     *
     * @param ChatRequest    $request
     * @param ChatHeaders    $headers
     * @param RuntimeOptions $runtime
     *
     * @return ChatResponse
     */
    public function chatWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->communication) {
            @$body['communication'] = $request->communication;
        }

        if (null !== $request->data) {
            @$body['data'] = $request->data;
        }

        if (null !== $request->params) {
            @$body['params'] = $request->params;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accept) {
            @$realHeaders['Accept'] = '' . $headers->accept;
        }

        if (null !== $headers->xDashScopeSSE) {
            @$realHeaders['X-DashScope-SSE'] = '' . $headers->xDashScopeSSE;
        }

        if (null !== $headers->xGWAccess) {
            @$realHeaders['X-GW-Access'] = '' . $headers->xGWAccess;
        }

        if (null !== $headers->xGWNonce) {
            @$realHeaders['X-GW-Nonce'] = '' . $headers->xGWNonce;
        }

        if (null !== $headers->xGWProtocol) {
            @$realHeaders['X-GW-Protocol'] = '' . $headers->xGWProtocol;
        }

        if (null !== $headers->xGWSignature) {
            @$realHeaders['X-GW-Signature'] = '' . $headers->xGWSignature;
        }

        if (null !== $headers->xGWTimestamp) {
            @$realHeaders['X-GW-Timestamp'] = '' . $headers->xGWTimestamp;
        }

        if (null !== $headers->xRequestId) {
            @$realHeaders['X-Request-Id'] = '' . $headers->xRequestId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Chat',
            'version' => '2026-11-05',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/api/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
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
     * Sends text or multimodal messages to initiate conversations with web search capabilities, supporting deep thinking, session history management, and both complete JSON and Server-Sent Events (SSE) streaming responses. Specific agent and media capabilities are subject to the activated scope.
     *
     * @param request - ChatRequest
     * @param headers - ChatHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatResponse
     *
     * @param ChatRequest    $request
     * @param ChatHeaders    $headers
     * @param RuntimeOptions $runtime
     *
     * @return ChatResponse
     */
    public function chatWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->communication) {
            @$body['communication'] = $request->communication;
        }

        if (null !== $request->data) {
            @$body['data'] = $request->data;
        }

        if (null !== $request->params) {
            @$body['params'] = $request->params;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accept) {
            @$realHeaders['Accept'] = '' . $headers->accept;
        }

        if (null !== $headers->xDashScopeSSE) {
            @$realHeaders['X-DashScope-SSE'] = '' . $headers->xDashScopeSSE;
        }

        if (null !== $headers->xGWAccess) {
            @$realHeaders['X-GW-Access'] = '' . $headers->xGWAccess;
        }

        if (null !== $headers->xGWNonce) {
            @$realHeaders['X-GW-Nonce'] = '' . $headers->xGWNonce;
        }

        if (null !== $headers->xGWProtocol) {
            @$realHeaders['X-GW-Protocol'] = '' . $headers->xGWProtocol;
        }

        if (null !== $headers->xGWSignature) {
            @$realHeaders['X-GW-Signature'] = '' . $headers->xGWSignature;
        }

        if (null !== $headers->xGWTimestamp) {
            @$realHeaders['X-GW-Timestamp'] = '' . $headers->xGWTimestamp;
        }

        if (null !== $headers->xRequestId) {
            @$realHeaders['X-Request-Id'] = '' . $headers->xRequestId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Chat',
            'version' => '2026-11-05',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/api/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends text or multimodal messages to initiate conversations with web search capabilities, supporting deep thinking, session history management, and both complete JSON and Server-Sent Events (SSE) streaming responses. Specific agent and media capabilities are subject to the activated scope.
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
        $headers = new ChatHeaders([]);

        return $this->chatWithOptions($request, $headers, $runtime);
    }

    /**
     * Validates the service activation API or initiates service activation for the current account, and returns the current activation status along with the available order or instance ID.
     *
     * @param request - OpenServiceRequest
     * @param headers - OpenServiceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenServiceResponse
     *
     * @param OpenServiceRequest $request
     * @param OpenServiceHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return OpenServiceResponse
     */
    public function openServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->communication) {
            @$body['communication'] = $request->communication;
        }

        if (null !== $request->openBenefits) {
            @$body['openBenefits'] = $request->openBenefits;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xGWAccess) {
            @$realHeaders['X-GW-Access'] = '' . $headers->xGWAccess;
        }

        if (null !== $headers->xGWNonce) {
            @$realHeaders['X-GW-Nonce'] = '' . $headers->xGWNonce;
        }

        if (null !== $headers->xGWSignature) {
            @$realHeaders['X-GW-Signature'] = '' . $headers->xGWSignature;
        }

        if (null !== $headers->xGWTimestamp) {
            @$realHeaders['X-GW-Timestamp'] = '' . $headers->xGWTimestamp;
        }

        if (null !== $headers->xRequestId) {
            @$realHeaders['X-Request-Id'] = '' . $headers->xRequestId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OpenService',
            'version' => '2026-11-05',
            'protocol' => 'HTTPS',
            'pathname' => '/v1/api/openService',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OpenServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Validates the service activation API or initiates service activation for the current account, and returns the current activation status along with the available order or instance ID.
     *
     * @param request - OpenServiceRequest
     *
     * @returns OpenServiceResponse
     *
     * @param OpenServiceRequest $request
     *
     * @return OpenServiceResponse
     */
    public function openService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new OpenServiceHeaders([]);

        return $this->openServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * Uploads audio and receives recognized text, agent responses, and synthesized audio over a WebSocket connection. Supports image and text auxiliary input, recognition context, and conversation history. The operation description covers the complete handshake, control frames, audio frames, return events, and error handling protocols.
     *
     * @param request - StreamVoiceRequest
     * @param headers - StreamVoiceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StreamVoiceResponse
     *
     * @param StreamVoiceRequest $request
     * @param StreamVoiceHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return StreamVoiceResponse
     */
    public function streamVoiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xGWAccess) {
            @$realHeaders['X-GW-Access'] = '' . $headers->xGWAccess;
        }

        if (null !== $headers->xGWNonce) {
            @$realHeaders['X-GW-Nonce'] = '' . $headers->xGWNonce;
        }

        if (null !== $headers->xGWProtocol) {
            @$realHeaders['X-GW-Protocol'] = '' . $headers->xGWProtocol;
        }

        if (null !== $headers->xGWSignature) {
            @$realHeaders['X-GW-Signature'] = '' . $headers->xGWSignature;
        }

        if (null !== $headers->xGWTimestamp) {
            @$realHeaders['X-GW-Timestamp'] = '' . $headers->xGWTimestamp;
        }

        if (null !== $headers->xRequestId) {
            @$realHeaders['X-Request-Id'] = '' . $headers->xRequestId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);
        $params = new Params([
            'action' => 'StreamVoice',
            'version' => '2026-11-05',
            'protocol' => 'wss',
            'pathname' => '/v1/api/voice',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
            'websocketSubProtocol' => 'general',
        ]);
        $res = new StreamVoiceResponse([]);
        $tmp = $this->callApi($params, $req, $runtime);
        if (null !== @$tmp['webSocketClient']) {
            $res->webSocketClient = WebSocketUtilsClient::createWebSocketClient(@$tmp['webSocketClient']);
        }

        return $res;
    }

    /**
     * Uploads audio and receives recognized text, agent responses, and synthesized audio over a WebSocket connection. Supports image and text auxiliary input, recognition context, and conversation history. The operation description covers the complete handshake, control frames, audio frames, return events, and error handling protocols.
     *
     * @param request - StreamVoiceRequest
     *
     * @returns StreamVoiceResponse
     *
     * @param StreamVoiceRequest $request
     *
     * @return StreamVoiceResponse
     */
    public function streamVoice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StreamVoiceHeaders([]);

        return $this->streamVoiceWithOptions($request, $headers, $runtime);
    }
}
