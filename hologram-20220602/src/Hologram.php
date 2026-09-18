<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220602;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Hologram\V20220602\Models\CreateAgentSessionRequest;
use AlibabaCloud\SDK\Hologram\V20220602\Models\CreateAgentSessionResponse;
use AlibabaCloud\SDK\Hologram\V20220602\Models\CreateAgentSessionShrinkRequest;
use AlibabaCloud\SDK\Hologram\V20220602\Models\PromptAgentSessionRequest;
use AlibabaCloud\SDK\Hologram\V20220602\Models\PromptAgentSessionResponse;
use AlibabaCloud\SDK\Hologram\V20220602\Models\PromptAgentSessionShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Hologram extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('hologram', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 用于创建一个新的Agent会话并返回会话ID。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于创建一个新的 Agent 会话。
     * - 通过 `_meta.agent.agentName` 指定绑定的 Agent 名称，这是必填项。
     * - 可以通过 `_meta.config.sessionSource` 透传会话来源标识，便于后续按来源检索。
     * - 支持通过 `_meta.config.sessionTags[].sessionTagCode` 传入会话标签。
     *
     * @param tmpReq - CreateAgentSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentSessionResponse
     *
     * @param CreateAgentSessionRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAgentSessionResponse
     */
    public function createAgentSessionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAgentSessionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jsonrpc) {
            @$body['Jsonrpc'] = $request->jsonrpc;
        }

        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAgentSession',
            'version' => '2022-06-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAgentSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用于创建一个新的Agent会话并返回会话ID。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于创建一个新的 Agent 会话。
     * - 通过 `_meta.agent.agentName` 指定绑定的 Agent 名称，这是必填项。
     * - 可以通过 `_meta.config.sessionSource` 透传会话来源标识，便于后续按来源检索。
     * - 支持通过 `_meta.config.sessionTags[].sessionTagCode` 传入会话标签。
     *
     * @param request - CreateAgentSessionRequest
     *
     * @returns CreateAgentSessionResponse
     *
     * @param CreateAgentSessionRequest $request
     *
     * @return CreateAgentSessionResponse
     */
    public function createAgentSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAgentSessionWithOptions($request, $runtime);
    }

    /**
     * 向指定会话发送用户Prompt，并以SSE方式流式接收Agent响应。
     *
     * @remarks
     * ## 请求说明
     * - 该 API 用于向指定的会话 ID 发送用户的 Prompt，并以 SSE（Server-Sent Events）流式方式接收来自 Agent 的响应。
     * - 响应可能包括消息分片、思考过程、工具调用状态更新等信息。
     * - 如果指定的会话不存在，将通过 SSE 错误帧返回 400 错误。
     * - `stopReason`字段指示了 Agent 停止本轮对话的原因。
     * - 可选地提供额外元信息`Meta`来传递更多上下文给服务端。
     * - 返回的内容符合开源协议 Agent Client Protocol (ACP) 的规范。
     *
     * @param tmpReq - PromptAgentSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PromptAgentSessionResponse
     *
     * @param PromptAgentSessionRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return PromptAgentSessionResponse
     */
    public function promptAgentSessionWithSSE($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PromptAgentSessionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $body = [];
        if (null !== $request->callerContext) {
            @$body['Caller-Context'] = $request->callerContext;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jsonrpc) {
            @$body['Jsonrpc'] = $request->jsonrpc;
        }

        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PromptAgentSession',
            'version' => '2022-06-02',
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

                yield PromptAgentSessionResponse::fromMap([
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
     * 向指定会话发送用户Prompt，并以SSE方式流式接收Agent响应。
     *
     * @remarks
     * ## 请求说明
     * - 该 API 用于向指定的会话 ID 发送用户的 Prompt，并以 SSE（Server-Sent Events）流式方式接收来自 Agent 的响应。
     * - 响应可能包括消息分片、思考过程、工具调用状态更新等信息。
     * - 如果指定的会话不存在，将通过 SSE 错误帧返回 400 错误。
     * - `stopReason`字段指示了 Agent 停止本轮对话的原因。
     * - 可选地提供额外元信息`Meta`来传递更多上下文给服务端。
     * - 返回的内容符合开源协议 Agent Client Protocol (ACP) 的规范。
     *
     * @param tmpReq - PromptAgentSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PromptAgentSessionResponse
     *
     * @param PromptAgentSessionRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return PromptAgentSessionResponse
     */
    public function promptAgentSessionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PromptAgentSessionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $body = [];
        if (null !== $request->callerContext) {
            @$body['Caller-Context'] = $request->callerContext;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->jsonrpc) {
            @$body['Jsonrpc'] = $request->jsonrpc;
        }

        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PromptAgentSession',
            'version' => '2022-06-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PromptAgentSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 向指定会话发送用户Prompt，并以SSE方式流式接收Agent响应。
     *
     * @remarks
     * ## 请求说明
     * - 该 API 用于向指定的会话 ID 发送用户的 Prompt，并以 SSE（Server-Sent Events）流式方式接收来自 Agent 的响应。
     * - 响应可能包括消息分片、思考过程、工具调用状态更新等信息。
     * - 如果指定的会话不存在，将通过 SSE 错误帧返回 400 错误。
     * - `stopReason`字段指示了 Agent 停止本轮对话的原因。
     * - 可选地提供额外元信息`Meta`来传递更多上下文给服务端。
     * - 返回的内容符合开源协议 Agent Client Protocol (ACP) 的规范。
     *
     * @param request - PromptAgentSessionRequest
     *
     * @returns PromptAgentSessionResponse
     *
     * @param PromptAgentSessionRequest $request
     *
     * @return PromptAgentSessionResponse
     */
    public function promptAgentSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->promptAgentSessionWithOptions($request, $runtime);
    }
}
