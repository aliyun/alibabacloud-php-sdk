<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OssAgent\V20260622;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\OssAgent\V20260622\Models\ChatRequest;
use AlibabaCloud\SDK\OssAgent\V20260622\Models\ChatResponse;
use AlibabaCloud\SDK\OssAgent\V20260622\Models\ConfirmRequest;
use AlibabaCloud\SDK\OssAgent\V20260622\Models\ConfirmResponse;
use AlibabaCloud\SDK\OssAgent\V20260622\Models\InterruptRequest;
use AlibabaCloud\SDK\OssAgent\V20260622\Models\InterruptResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class OssAgent extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ossagent', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 聊天流式接口.
     *
     * @param request - ChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatResponse
     *
     * @param ChatRequest    $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ChatResponse
     */
    public function chatWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Chat',
            'version' => '2026-06-22',
            'protocol' => 'HTTPS',
            'pathname' => '/api/chat/stream',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = $resp->event->data;

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
     * 聊天流式接口.
     *
     * @param request - ChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatResponse
     *
     * @param ChatRequest    $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ChatResponse
     */
    public function chatWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Chat',
            'version' => '2026-06-22',
            'protocol' => 'HTTPS',
            'pathname' => '/api/chat/stream',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);

        return ChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 聊天流式接口.
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
        $headers = [];

        return $this->chatWithOptions($request, $headers, $runtime);
    }

    /**
     * 工具确认接口.
     *
     * @param request - ConfirmRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfirmResponse
     *
     * @param ConfirmRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ConfirmResponse
     */
    public function confirmWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->confirmed) {
            @$body['confirmed'] = $request->confirmed;
        }

        if (null !== $request->phase) {
            @$body['phase'] = $request->phase;
        }

        if (null !== $request->reason) {
            @$body['reason'] = $request->reason;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->toolCalls) {
            @$body['toolCalls'] = $request->toolCalls;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Confirm',
            'version' => '2026-06-22',
            'protocol' => 'HTTPS',
            'pathname' => '/api/chat/confirm',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = $resp->event->data;

                yield ConfirmResponse::fromMap([
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
     * 工具确认接口.
     *
     * @param request - ConfirmRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfirmResponse
     *
     * @param ConfirmRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ConfirmResponse
     */
    public function confirmWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->confirmed) {
            @$body['confirmed'] = $request->confirmed;
        }

        if (null !== $request->phase) {
            @$body['phase'] = $request->phase;
        }

        if (null !== $request->reason) {
            @$body['reason'] = $request->reason;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->toolCalls) {
            @$body['toolCalls'] = $request->toolCalls;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Confirm',
            'version' => '2026-06-22',
            'protocol' => 'HTTPS',
            'pathname' => '/api/chat/confirm',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);

        return ConfirmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 工具确认接口.
     *
     * @param request - ConfirmRequest
     *
     * @returns ConfirmResponse
     *
     * @param ConfirmRequest $request
     *
     * @return ConfirmResponse
     */
    public function confirm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->confirmWithOptions($request, $headers, $runtime);
    }

    /**
     * 聊天中断接口.
     *
     * @param request - InterruptRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InterruptResponse
     *
     * @param string           $sessionId
     * @param InterruptRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return InterruptResponse
     */
    public function interruptWithOptions($sessionId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'Interrupt',
            'version' => '2026-06-22',
            'protocol' => 'HTTPS',
            'pathname' => '/api/chat/interrupt/' . Url::percentEncode($sessionId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);

        return InterruptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 聊天中断接口.
     *
     * @param request - InterruptRequest
     *
     * @returns InterruptResponse
     *
     * @param string           $sessionId
     * @param InterruptRequest $request
     *
     * @return InterruptResponse
     */
    public function interrupt($sessionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->interruptWithOptions($sessionId, $request, $headers, $runtime);
    }
}
