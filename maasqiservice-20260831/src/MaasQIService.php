<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\AigcChatCompletionStreamHeaders;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\AigcChatCompletionStreamRequest;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\AigcChatCompletionStreamResponse;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CuaChatCompletionStreamHeaders;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CuaChatCompletionStreamRequest;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CuaChatCompletionStreamResponse;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\GuiChatCompletionStreamHeaders;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\GuiChatCompletionStreamRequest;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\GuiChatCompletionStreamResponse;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\PaChatCompletionStreamHeaders;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\PaChatCompletionStreamRequest;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\PaChatCompletionStreamResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class MaasQIService extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('maasqiservice', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Calls a published Creative Agent with support for Lite and Dedicated editions, and returns execution progress and image artifacts by using Server-Sent Events (SSE). The Lite edition performs text-to-image or image-to-image generation depending on whether a reference image is provided. The Dedicated edition uses a Planner to plan and execute generation and editing tasks with multi-turn conversation support. Pass generation count, dimensions, and other parameters through metadata.parameters. Image URLs are included in the artifacts of the result.
     *
     * @remarks
     * ### Before you begin
     * - Install the SDK from the SDK Center.
     * - Activate the Creative Agent service and prepare the published instance ID and the corresponding instance access key.
     * - Creative Agent provides Lite and Dedicated editions. The Lite edition generates or edits images based on whether a reference image is provided. The Dedicated edition uses a Planner to plan and execute creative tasks.
     * - Complete AccessKey authentication by using the SDK. The instance access key is placed in X-QI-Agent-Api-Key and cannot replace the AccessKey signature.
     * - Set Content-Type: application/json and Accept: text/event-stream. The stream parameter must be set to true.
     * ### How to call
     * - Method and path: `POST /aigc/v1/chat/completions`.
     * - Specify the instance by using `X-QI-Instance-Id`. The request is executed based on the published configuration of the specified instance. The model field in the request body is a compatibility placeholder and cannot be used to switch models.
     * - This operation returns incremental events instead of a complete JSON response. Continue reading until the stream ends and check for in-stream errors.
     * ### Session management
     * You can omit `X-QI-Session-Id` for the first turn. Save the session identifier returned by the server from the `qi_session_id` field in the SSE body, and pass the same value back in subsequent turns. Do not rely on the gateway to pass through custom response headers. Use different identifiers for different sessions and send requests sequentially within the same session.
     *
     * @param request - AigcChatCompletionStreamRequest
     * @param headers - AigcChatCompletionStreamHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AigcChatCompletionStreamResponse
     *
     * @param AigcChatCompletionStreamRequest $request
     * @param AigcChatCompletionStreamHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return AigcChatCompletionStreamResponse
     */
    public function aigcChatCompletionStreamWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->metadata) {
            @$body['metadata'] = $request->metadata;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->streamOptions) {
            @$body['streamOptions'] = $request->streamOptions;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xQIAgentApiKey) {
            @$realHeaders['X-QI-Agent-Api-Key'] = '' . $headers->xQIAgentApiKey;
        }

        if (null !== $headers->xQIInstanceId) {
            @$realHeaders['X-QI-Instance-Id'] = '' . $headers->xQIInstanceId;
        }

        if (null !== $headers->xQISessionId) {
            @$realHeaders['X-QI-Session-Id'] = '' . $headers->xQISessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AigcChatCompletionStream',
            'version' => '2026-08-31',
            'protocol' => 'HTTPS',
            'pathname' => '/aigc/v1/chat/completions',
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

                yield AigcChatCompletionStreamResponse::fromMap([
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
     * Calls a published Creative Agent with support for Lite and Dedicated editions, and returns execution progress and image artifacts by using Server-Sent Events (SSE). The Lite edition performs text-to-image or image-to-image generation depending on whether a reference image is provided. The Dedicated edition uses a Planner to plan and execute generation and editing tasks with multi-turn conversation support. Pass generation count, dimensions, and other parameters through metadata.parameters. Image URLs are included in the artifacts of the result.
     *
     * @remarks
     * ### Before you begin
     * - Install the SDK from the SDK Center.
     * - Activate the Creative Agent service and prepare the published instance ID and the corresponding instance access key.
     * - Creative Agent provides Lite and Dedicated editions. The Lite edition generates or edits images based on whether a reference image is provided. The Dedicated edition uses a Planner to plan and execute creative tasks.
     * - Complete AccessKey authentication by using the SDK. The instance access key is placed in X-QI-Agent-Api-Key and cannot replace the AccessKey signature.
     * - Set Content-Type: application/json and Accept: text/event-stream. The stream parameter must be set to true.
     * ### How to call
     * - Method and path: `POST /aigc/v1/chat/completions`.
     * - Specify the instance by using `X-QI-Instance-Id`. The request is executed based on the published configuration of the specified instance. The model field in the request body is a compatibility placeholder and cannot be used to switch models.
     * - This operation returns incremental events instead of a complete JSON response. Continue reading until the stream ends and check for in-stream errors.
     * ### Session management
     * You can omit `X-QI-Session-Id` for the first turn. Save the session identifier returned by the server from the `qi_session_id` field in the SSE body, and pass the same value back in subsequent turns. Do not rely on the gateway to pass through custom response headers. Use different identifiers for different sessions and send requests sequentially within the same session.
     *
     * @param request - AigcChatCompletionStreamRequest
     * @param headers - AigcChatCompletionStreamHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AigcChatCompletionStreamResponse
     *
     * @param AigcChatCompletionStreamRequest $request
     * @param AigcChatCompletionStreamHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return AigcChatCompletionStreamResponse
     */
    public function aigcChatCompletionStreamWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->metadata) {
            @$body['metadata'] = $request->metadata;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->streamOptions) {
            @$body['streamOptions'] = $request->streamOptions;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xQIAgentApiKey) {
            @$realHeaders['X-QI-Agent-Api-Key'] = '' . $headers->xQIAgentApiKey;
        }

        if (null !== $headers->xQIInstanceId) {
            @$realHeaders['X-QI-Instance-Id'] = '' . $headers->xQIInstanceId;
        }

        if (null !== $headers->xQISessionId) {
            @$realHeaders['X-QI-Session-Id'] = '' . $headers->xQISessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AigcChatCompletionStream',
            'version' => '2026-08-31',
            'protocol' => 'HTTPS',
            'pathname' => '/aigc/v1/chat/completions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AigcChatCompletionStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls a published Creative Agent with support for Lite and Dedicated editions, and returns execution progress and image artifacts by using Server-Sent Events (SSE). The Lite edition performs text-to-image or image-to-image generation depending on whether a reference image is provided. The Dedicated edition uses a Planner to plan and execute generation and editing tasks with multi-turn conversation support. Pass generation count, dimensions, and other parameters through metadata.parameters. Image URLs are included in the artifacts of the result.
     *
     * @remarks
     * ### Before you begin
     * - Install the SDK from the SDK Center.
     * - Activate the Creative Agent service and prepare the published instance ID and the corresponding instance access key.
     * - Creative Agent provides Lite and Dedicated editions. The Lite edition generates or edits images based on whether a reference image is provided. The Dedicated edition uses a Planner to plan and execute creative tasks.
     * - Complete AccessKey authentication by using the SDK. The instance access key is placed in X-QI-Agent-Api-Key and cannot replace the AccessKey signature.
     * - Set Content-Type: application/json and Accept: text/event-stream. The stream parameter must be set to true.
     * ### How to call
     * - Method and path: `POST /aigc/v1/chat/completions`.
     * - Specify the instance by using `X-QI-Instance-Id`. The request is executed based on the published configuration of the specified instance. The model field in the request body is a compatibility placeholder and cannot be used to switch models.
     * - This operation returns incremental events instead of a complete JSON response. Continue reading until the stream ends and check for in-stream errors.
     * ### Session management
     * You can omit `X-QI-Session-Id` for the first turn. Save the session identifier returned by the server from the `qi_session_id` field in the SSE body, and pass the same value back in subsequent turns. Do not rely on the gateway to pass through custom response headers. Use different identifiers for different sessions and send requests sequentially within the same session.
     *
     * @param request - AigcChatCompletionStreamRequest
     *
     * @returns AigcChatCompletionStreamResponse
     *
     * @param AigcChatCompletionStreamRequest $request
     *
     * @return AigcChatCompletionStreamResponse
     */
    public function aigcChatCompletionStream($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AigcChatCompletionStreamHeaders([]);

        return $this->aigcChatCompletionStreamWithOptions($request, $headers, $runtime);
    }

    /**
     * 调用已发布 CUAStandard 实例，根据任务和桌面截图生成电脑操作单步决策，以 SSE 返回 computer_use 工具调用.
     *
     * @param request - CuaChatCompletionStreamRequest
     * @param headers - CuaChatCompletionStreamHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CuaChatCompletionStreamResponse
     *
     * @param CuaChatCompletionStreamRequest $request
     * @param CuaChatCompletionStreamHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CuaChatCompletionStreamResponse
     */
    public function cuaChatCompletionStreamWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->metadata) {
            @$body['metadata'] = $request->metadata;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->streamOptions) {
            @$body['streamOptions'] = $request->streamOptions;
        }

        if (null !== $request->tools) {
            @$body['tools'] = $request->tools;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xQIAgentApiKey) {
            @$realHeaders['X-QI-Agent-Api-Key'] = '' . $headers->xQIAgentApiKey;
        }

        if (null !== $headers->xQIInstanceId) {
            @$realHeaders['X-QI-Instance-Id'] = '' . $headers->xQIInstanceId;
        }

        if (null !== $headers->xQISessionId) {
            @$realHeaders['X-QI-Session-Id'] = '' . $headers->xQISessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CuaChatCompletionStream',
            'version' => '2026-08-31',
            'protocol' => 'HTTPS',
            'pathname' => '/cua/v1/chat/completions',
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

                yield CuaChatCompletionStreamResponse::fromMap([
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
     * 调用已发布 CUAStandard 实例，根据任务和桌面截图生成电脑操作单步决策，以 SSE 返回 computer_use 工具调用.
     *
     * @param request - CuaChatCompletionStreamRequest
     * @param headers - CuaChatCompletionStreamHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CuaChatCompletionStreamResponse
     *
     * @param CuaChatCompletionStreamRequest $request
     * @param CuaChatCompletionStreamHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CuaChatCompletionStreamResponse
     */
    public function cuaChatCompletionStreamWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->metadata) {
            @$body['metadata'] = $request->metadata;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->streamOptions) {
            @$body['streamOptions'] = $request->streamOptions;
        }

        if (null !== $request->tools) {
            @$body['tools'] = $request->tools;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xQIAgentApiKey) {
            @$realHeaders['X-QI-Agent-Api-Key'] = '' . $headers->xQIAgentApiKey;
        }

        if (null !== $headers->xQIInstanceId) {
            @$realHeaders['X-QI-Instance-Id'] = '' . $headers->xQIInstanceId;
        }

        if (null !== $headers->xQISessionId) {
            @$realHeaders['X-QI-Session-Id'] = '' . $headers->xQISessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CuaChatCompletionStream',
            'version' => '2026-08-31',
            'protocol' => 'HTTPS',
            'pathname' => '/cua/v1/chat/completions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CuaChatCompletionStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用已发布 CUAStandard 实例，根据任务和桌面截图生成电脑操作单步决策，以 SSE 返回 computer_use 工具调用.
     *
     * @param request - CuaChatCompletionStreamRequest
     *
     * @returns CuaChatCompletionStreamResponse
     *
     * @param CuaChatCompletionStreamRequest $request
     *
     * @return CuaChatCompletionStreamResponse
     */
    public function cuaChatCompletionStream($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CuaChatCompletionStreamHeaders([]);

        return $this->cuaChatCompletionStreamWithOptions($request, $headers, $runtime);
    }

    /**
     * Calls a published Mobile-Use Agent instance, which supports the Standard Edition and Dedicated Edition. Submits the task text and the current screen screenshot, passes the device and application context through metadata, and returns the next mobile UI operation by using Server-Sent Events (SSE). The caller executes the UI operation and then continues to call the API with the session ID and the latest screenshot.
     *
     * @remarks
     * ### Prerequisites
     * - Install the SDK from the SDK Center.
     * - Activate the Mobile-Use Agent service and prepare the ID and access key of a published Mobile-Use Agent instance.
     * - Mobile-Use Agent provides the Standard Edition and Dedicated Edition. Call the API based on the edition of the selected instance.
     * - Use the SDK to complete AccessKey authentication. Place the instance access key in the X-QI-Agent-Api-Key header, which cannot replace the AccessKey signature.
     * - Set Content-Type to application/json and Accept to text/event-stream. The stream parameter must be set to true.
     * ### Call methods
     * - Method and path: POST /gui/v1/chat/completions.
     * - Use X-QI-Instance-Id to specify the instance and execute based on the published configurations. The model field in the request body is a compatibility placeholder and cannot be used to switch models.
     * - The response consists of SSE incremental events rather than a complete JSON object. Continuously read the stream until it ends and check for errors within the stream.
     * ### Session management
     * You can omit X-QI-Session-Id in the first round. Save the qi_session_id from the SSE body and pass it in the request header with the same name for subsequent calls. Make sequential calls within the same session and use different identifiers for different sessions. Do not rely on the gateway to pass through custom response headers. The actual identifier is subject to the SSE body.
     *
     * @param request - GuiChatCompletionStreamRequest
     * @param headers - GuiChatCompletionStreamHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GuiChatCompletionStreamResponse
     *
     * @param GuiChatCompletionStreamRequest $request
     * @param GuiChatCompletionStreamHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GuiChatCompletionStreamResponse
     */
    public function guiChatCompletionStreamWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->allowedTokenIds) {
            @$body['allowedTokenIds'] = $request->allowedTokenIds;
        }

        if (null !== $request->badWords) {
            @$body['badWords'] = $request->badWords;
        }

        if (null !== $request->chatTemplateKwargs) {
            @$body['chatTemplateKwargs'] = $request->chatTemplateKwargs;
        }

        if (null !== $request->frequencyPenalty) {
            @$body['frequencyPenalty'] = $request->frequencyPenalty;
        }

        if (null !== $request->ignoreEos) {
            @$body['ignoreEos'] = $request->ignoreEos;
        }

        if (null !== $request->includeReasoning) {
            @$body['includeReasoning'] = $request->includeReasoning;
        }

        if (null !== $request->logprobs) {
            @$body['logprobs'] = $request->logprobs;
        }

        if (null !== $request->maxCompletionTokens) {
            @$body['maxCompletionTokens'] = $request->maxCompletionTokens;
        }

        if (null !== $request->maxTokens) {
            @$body['maxTokens'] = $request->maxTokens;
        }

        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->metadata) {
            @$body['metadata'] = $request->metadata;
        }

        if (null !== $request->minP) {
            @$body['minP'] = $request->minP;
        }

        if (null !== $request->minTokens) {
            @$body['minTokens'] = $request->minTokens;
        }

        if (null !== $request->mmProcessorKwargs) {
            @$body['mmProcessorKwargs'] = $request->mmProcessorKwargs;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->n) {
            @$body['n'] = $request->n;
        }

        if (null !== $request->parallelToolCalls) {
            @$body['parallelToolCalls'] = $request->parallelToolCalls;
        }

        if (null !== $request->presencePenalty) {
            @$body['presencePenalty'] = $request->presencePenalty;
        }

        if (null !== $request->promptLogprobs) {
            @$body['promptLogprobs'] = $request->promptLogprobs;
        }

        if (null !== $request->reasoningEffort) {
            @$body['reasoningEffort'] = $request->reasoningEffort;
        }

        if (null !== $request->repetitionPenalty) {
            @$body['repetitionPenalty'] = $request->repetitionPenalty;
        }

        if (null !== $request->responseFormat) {
            @$body['responseFormat'] = $request->responseFormat;
        }

        if (null !== $request->seed) {
            @$body['seed'] = $request->seed;
        }

        if (null !== $request->skipSpecialTokens) {
            @$body['skipSpecialTokens'] = $request->skipSpecialTokens;
        }

        if (null !== $request->stop) {
            @$body['stop'] = $request->stop;
        }

        if (null !== $request->stopTokenIds) {
            @$body['stopTokenIds'] = $request->stopTokenIds;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->streamOptions) {
            @$body['streamOptions'] = $request->streamOptions;
        }

        if (null !== $request->structuredOutputs) {
            @$body['structuredOutputs'] = $request->structuredOutputs;
        }

        if (null !== $request->temperature) {
            @$body['temperature'] = $request->temperature;
        }

        if (null !== $request->topK) {
            @$body['topK'] = $request->topK;
        }

        if (null !== $request->topLogprobs) {
            @$body['topLogprobs'] = $request->topLogprobs;
        }

        if (null !== $request->topP) {
            @$body['topP'] = $request->topP;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xQIAgentApiKey) {
            @$realHeaders['X-QI-Agent-Api-Key'] = '' . $headers->xQIAgentApiKey;
        }

        if (null !== $headers->xQIInstanceId) {
            @$realHeaders['X-QI-Instance-Id'] = '' . $headers->xQIInstanceId;
        }

        if (null !== $headers->xQISessionId) {
            @$realHeaders['X-QI-Session-Id'] = '' . $headers->xQISessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GuiChatCompletionStream',
            'version' => '2026-08-31',
            'protocol' => 'HTTPS',
            'pathname' => '/gui/v1/chat/completions',
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

                yield GuiChatCompletionStreamResponse::fromMap([
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
     * Calls a published Mobile-Use Agent instance, which supports the Standard Edition and Dedicated Edition. Submits the task text and the current screen screenshot, passes the device and application context through metadata, and returns the next mobile UI operation by using Server-Sent Events (SSE). The caller executes the UI operation and then continues to call the API with the session ID and the latest screenshot.
     *
     * @remarks
     * ### Prerequisites
     * - Install the SDK from the SDK Center.
     * - Activate the Mobile-Use Agent service and prepare the ID and access key of a published Mobile-Use Agent instance.
     * - Mobile-Use Agent provides the Standard Edition and Dedicated Edition. Call the API based on the edition of the selected instance.
     * - Use the SDK to complete AccessKey authentication. Place the instance access key in the X-QI-Agent-Api-Key header, which cannot replace the AccessKey signature.
     * - Set Content-Type to application/json and Accept to text/event-stream. The stream parameter must be set to true.
     * ### Call methods
     * - Method and path: POST /gui/v1/chat/completions.
     * - Use X-QI-Instance-Id to specify the instance and execute based on the published configurations. The model field in the request body is a compatibility placeholder and cannot be used to switch models.
     * - The response consists of SSE incremental events rather than a complete JSON object. Continuously read the stream until it ends and check for errors within the stream.
     * ### Session management
     * You can omit X-QI-Session-Id in the first round. Save the qi_session_id from the SSE body and pass it in the request header with the same name for subsequent calls. Make sequential calls within the same session and use different identifiers for different sessions. Do not rely on the gateway to pass through custom response headers. The actual identifier is subject to the SSE body.
     *
     * @param request - GuiChatCompletionStreamRequest
     * @param headers - GuiChatCompletionStreamHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GuiChatCompletionStreamResponse
     *
     * @param GuiChatCompletionStreamRequest $request
     * @param GuiChatCompletionStreamHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GuiChatCompletionStreamResponse
     */
    public function guiChatCompletionStreamWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->allowedTokenIds) {
            @$body['allowedTokenIds'] = $request->allowedTokenIds;
        }

        if (null !== $request->badWords) {
            @$body['badWords'] = $request->badWords;
        }

        if (null !== $request->chatTemplateKwargs) {
            @$body['chatTemplateKwargs'] = $request->chatTemplateKwargs;
        }

        if (null !== $request->frequencyPenalty) {
            @$body['frequencyPenalty'] = $request->frequencyPenalty;
        }

        if (null !== $request->ignoreEos) {
            @$body['ignoreEos'] = $request->ignoreEos;
        }

        if (null !== $request->includeReasoning) {
            @$body['includeReasoning'] = $request->includeReasoning;
        }

        if (null !== $request->logprobs) {
            @$body['logprobs'] = $request->logprobs;
        }

        if (null !== $request->maxCompletionTokens) {
            @$body['maxCompletionTokens'] = $request->maxCompletionTokens;
        }

        if (null !== $request->maxTokens) {
            @$body['maxTokens'] = $request->maxTokens;
        }

        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->metadata) {
            @$body['metadata'] = $request->metadata;
        }

        if (null !== $request->minP) {
            @$body['minP'] = $request->minP;
        }

        if (null !== $request->minTokens) {
            @$body['minTokens'] = $request->minTokens;
        }

        if (null !== $request->mmProcessorKwargs) {
            @$body['mmProcessorKwargs'] = $request->mmProcessorKwargs;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->n) {
            @$body['n'] = $request->n;
        }

        if (null !== $request->parallelToolCalls) {
            @$body['parallelToolCalls'] = $request->parallelToolCalls;
        }

        if (null !== $request->presencePenalty) {
            @$body['presencePenalty'] = $request->presencePenalty;
        }

        if (null !== $request->promptLogprobs) {
            @$body['promptLogprobs'] = $request->promptLogprobs;
        }

        if (null !== $request->reasoningEffort) {
            @$body['reasoningEffort'] = $request->reasoningEffort;
        }

        if (null !== $request->repetitionPenalty) {
            @$body['repetitionPenalty'] = $request->repetitionPenalty;
        }

        if (null !== $request->responseFormat) {
            @$body['responseFormat'] = $request->responseFormat;
        }

        if (null !== $request->seed) {
            @$body['seed'] = $request->seed;
        }

        if (null !== $request->skipSpecialTokens) {
            @$body['skipSpecialTokens'] = $request->skipSpecialTokens;
        }

        if (null !== $request->stop) {
            @$body['stop'] = $request->stop;
        }

        if (null !== $request->stopTokenIds) {
            @$body['stopTokenIds'] = $request->stopTokenIds;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->streamOptions) {
            @$body['streamOptions'] = $request->streamOptions;
        }

        if (null !== $request->structuredOutputs) {
            @$body['structuredOutputs'] = $request->structuredOutputs;
        }

        if (null !== $request->temperature) {
            @$body['temperature'] = $request->temperature;
        }

        if (null !== $request->topK) {
            @$body['topK'] = $request->topK;
        }

        if (null !== $request->topLogprobs) {
            @$body['topLogprobs'] = $request->topLogprobs;
        }

        if (null !== $request->topP) {
            @$body['topP'] = $request->topP;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xQIAgentApiKey) {
            @$realHeaders['X-QI-Agent-Api-Key'] = '' . $headers->xQIAgentApiKey;
        }

        if (null !== $headers->xQIInstanceId) {
            @$realHeaders['X-QI-Instance-Id'] = '' . $headers->xQIInstanceId;
        }

        if (null !== $headers->xQISessionId) {
            @$realHeaders['X-QI-Session-Id'] = '' . $headers->xQISessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GuiChatCompletionStream',
            'version' => '2026-08-31',
            'protocol' => 'HTTPS',
            'pathname' => '/gui/v1/chat/completions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GuiChatCompletionStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls a published Mobile-Use Agent instance, which supports the Standard Edition and Dedicated Edition. Submits the task text and the current screen screenshot, passes the device and application context through metadata, and returns the next mobile UI operation by using Server-Sent Events (SSE). The caller executes the UI operation and then continues to call the API with the session ID and the latest screenshot.
     *
     * @remarks
     * ### Prerequisites
     * - Install the SDK from the SDK Center.
     * - Activate the Mobile-Use Agent service and prepare the ID and access key of a published Mobile-Use Agent instance.
     * - Mobile-Use Agent provides the Standard Edition and Dedicated Edition. Call the API based on the edition of the selected instance.
     * - Use the SDK to complete AccessKey authentication. Place the instance access key in the X-QI-Agent-Api-Key header, which cannot replace the AccessKey signature.
     * - Set Content-Type to application/json and Accept to text/event-stream. The stream parameter must be set to true.
     * ### Call methods
     * - Method and path: POST /gui/v1/chat/completions.
     * - Use X-QI-Instance-Id to specify the instance and execute based on the published configurations. The model field in the request body is a compatibility placeholder and cannot be used to switch models.
     * - The response consists of SSE incremental events rather than a complete JSON object. Continuously read the stream until it ends and check for errors within the stream.
     * ### Session management
     * You can omit X-QI-Session-Id in the first round. Save the qi_session_id from the SSE body and pass it in the request header with the same name for subsequent calls. Make sequential calls within the same session and use different identifiers for different sessions. Do not rely on the gateway to pass through custom response headers. The actual identifier is subject to the SSE body.
     *
     * @param request - GuiChatCompletionStreamRequest
     *
     * @returns GuiChatCompletionStreamResponse
     *
     * @param GuiChatCompletionStreamRequest $request
     *
     * @return GuiChatCompletionStreamResponse
     */
    public function guiChatCompletionStream($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GuiChatCompletionStreamHeaders([]);

        return $this->guiChatCompletionStreamWithOptions($request, $headers, $runtime);
    }

    /**
     * Invokes a published Mobile Planner Agent using OpenAI-Compatible Chat Completions messages to initiate a conversation or node planning, and returns text, model-provided reasoning content, and structured tool calling via SSE. Supports multi-turn sessions and model-supported image input. Business tools are executed by the caller.
     *
     * @remarks
     * ### Before you begin
     * - Install the SDK from the SDK center.
     * - Activate the Mobile Planner Agent service and prepare the published Mobile Planner Agent instance ID and its access key.
     * - Use the SDK to complete AccessKey authentication. The instance access key is placed in X-QI-Agent-Api-Key and cannot replace the AccessKey signature.
     * - Set Content-Type: application/json and Accept: text/event-stream. The stream parameter must be set to true.
     * ### How to call
     * - Method and path: `POST /pa/v1/chat/completions`.
     * - X-QI-Instance-Id specifies the instance and executes based on the published configuration. The model field in the request body is a compatibility placeholder and cannot switch models.
     * - The response consists of SSE incremental events, not a single complete JSON object. Continue reading until the stream ends and check for errors within the stream.
     * ### Session management
     * You can omit X-QI-Session-Id for the first turn. Save qi_session_id from the SSE body and pass it back through the request header of the same name in subsequent turns. Call sequentially within the same session. Use different identifiers for different sessions. Do not rely on the gateway to pass through custom response headers. The actual identifier is based on the SSE body.
     *
     * @param request - PaChatCompletionStreamRequest
     * @param headers - PaChatCompletionStreamHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PaChatCompletionStreamResponse
     *
     * @param PaChatCompletionStreamRequest $request
     * @param PaChatCompletionStreamHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return PaChatCompletionStreamResponse
     */
    public function paChatCompletionStreamWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->allowedTokenIds) {
            @$body['allowedTokenIds'] = $request->allowedTokenIds;
        }

        if (null !== $request->badWords) {
            @$body['badWords'] = $request->badWords;
        }

        if (null !== $request->chatTemplateKwargs) {
            @$body['chatTemplateKwargs'] = $request->chatTemplateKwargs;
        }

        if (null !== $request->frequencyPenalty) {
            @$body['frequencyPenalty'] = $request->frequencyPenalty;
        }

        if (null !== $request->ignoreEos) {
            @$body['ignoreEos'] = $request->ignoreEos;
        }

        if (null !== $request->includeReasoning) {
            @$body['includeReasoning'] = $request->includeReasoning;
        }

        if (null !== $request->logprobs) {
            @$body['logprobs'] = $request->logprobs;
        }

        if (null !== $request->maxCompletionTokens) {
            @$body['maxCompletionTokens'] = $request->maxCompletionTokens;
        }

        if (null !== $request->maxTokens) {
            @$body['maxTokens'] = $request->maxTokens;
        }

        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->minP) {
            @$body['minP'] = $request->minP;
        }

        if (null !== $request->minTokens) {
            @$body['minTokens'] = $request->minTokens;
        }

        if (null !== $request->mmProcessorKwargs) {
            @$body['mmProcessorKwargs'] = $request->mmProcessorKwargs;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->n) {
            @$body['n'] = $request->n;
        }

        if (null !== $request->parallelToolCalls) {
            @$body['parallelToolCalls'] = $request->parallelToolCalls;
        }

        if (null !== $request->presencePenalty) {
            @$body['presencePenalty'] = $request->presencePenalty;
        }

        if (null !== $request->promptLogprobs) {
            @$body['promptLogprobs'] = $request->promptLogprobs;
        }

        if (null !== $request->reasoningEffort) {
            @$body['reasoningEffort'] = $request->reasoningEffort;
        }

        if (null !== $request->repetitionPenalty) {
            @$body['repetitionPenalty'] = $request->repetitionPenalty;
        }

        if (null !== $request->responseFormat) {
            @$body['responseFormat'] = $request->responseFormat;
        }

        if (null !== $request->seed) {
            @$body['seed'] = $request->seed;
        }

        if (null !== $request->skipSpecialTokens) {
            @$body['skipSpecialTokens'] = $request->skipSpecialTokens;
        }

        if (null !== $request->stop) {
            @$body['stop'] = $request->stop;
        }

        if (null !== $request->stopTokenIds) {
            @$body['stopTokenIds'] = $request->stopTokenIds;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->streamOptions) {
            @$body['streamOptions'] = $request->streamOptions;
        }

        if (null !== $request->structuredOutputs) {
            @$body['structuredOutputs'] = $request->structuredOutputs;
        }

        if (null !== $request->temperature) {
            @$body['temperature'] = $request->temperature;
        }

        if (null !== $request->toolChoice) {
            @$body['toolChoice'] = $request->toolChoice;
        }

        if (null !== $request->tools) {
            @$body['tools'] = $request->tools;
        }

        if (null !== $request->topK) {
            @$body['topK'] = $request->topK;
        }

        if (null !== $request->topLogprobs) {
            @$body['topLogprobs'] = $request->topLogprobs;
        }

        if (null !== $request->topP) {
            @$body['topP'] = $request->topP;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xQIAgentApiKey) {
            @$realHeaders['X-QI-Agent-Api-Key'] = '' . $headers->xQIAgentApiKey;
        }

        if (null !== $headers->xQIInstanceId) {
            @$realHeaders['X-QI-Instance-Id'] = '' . $headers->xQIInstanceId;
        }

        if (null !== $headers->xQISessionId) {
            @$realHeaders['X-QI-Session-Id'] = '' . $headers->xQISessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PaChatCompletionStream',
            'version' => '2026-08-31',
            'protocol' => 'HTTPS',
            'pathname' => '/pa/v1/chat/completions',
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

                yield PaChatCompletionStreamResponse::fromMap([
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
     * Invokes a published Mobile Planner Agent using OpenAI-Compatible Chat Completions messages to initiate a conversation or node planning, and returns text, model-provided reasoning content, and structured tool calling via SSE. Supports multi-turn sessions and model-supported image input. Business tools are executed by the caller.
     *
     * @remarks
     * ### Before you begin
     * - Install the SDK from the SDK center.
     * - Activate the Mobile Planner Agent service and prepare the published Mobile Planner Agent instance ID and its access key.
     * - Use the SDK to complete AccessKey authentication. The instance access key is placed in X-QI-Agent-Api-Key and cannot replace the AccessKey signature.
     * - Set Content-Type: application/json and Accept: text/event-stream. The stream parameter must be set to true.
     * ### How to call
     * - Method and path: `POST /pa/v1/chat/completions`.
     * - X-QI-Instance-Id specifies the instance and executes based on the published configuration. The model field in the request body is a compatibility placeholder and cannot switch models.
     * - The response consists of SSE incremental events, not a single complete JSON object. Continue reading until the stream ends and check for errors within the stream.
     * ### Session management
     * You can omit X-QI-Session-Id for the first turn. Save qi_session_id from the SSE body and pass it back through the request header of the same name in subsequent turns. Call sequentially within the same session. Use different identifiers for different sessions. Do not rely on the gateway to pass through custom response headers. The actual identifier is based on the SSE body.
     *
     * @param request - PaChatCompletionStreamRequest
     * @param headers - PaChatCompletionStreamHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PaChatCompletionStreamResponse
     *
     * @param PaChatCompletionStreamRequest $request
     * @param PaChatCompletionStreamHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return PaChatCompletionStreamResponse
     */
    public function paChatCompletionStreamWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->allowedTokenIds) {
            @$body['allowedTokenIds'] = $request->allowedTokenIds;
        }

        if (null !== $request->badWords) {
            @$body['badWords'] = $request->badWords;
        }

        if (null !== $request->chatTemplateKwargs) {
            @$body['chatTemplateKwargs'] = $request->chatTemplateKwargs;
        }

        if (null !== $request->frequencyPenalty) {
            @$body['frequencyPenalty'] = $request->frequencyPenalty;
        }

        if (null !== $request->ignoreEos) {
            @$body['ignoreEos'] = $request->ignoreEos;
        }

        if (null !== $request->includeReasoning) {
            @$body['includeReasoning'] = $request->includeReasoning;
        }

        if (null !== $request->logprobs) {
            @$body['logprobs'] = $request->logprobs;
        }

        if (null !== $request->maxCompletionTokens) {
            @$body['maxCompletionTokens'] = $request->maxCompletionTokens;
        }

        if (null !== $request->maxTokens) {
            @$body['maxTokens'] = $request->maxTokens;
        }

        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->minP) {
            @$body['minP'] = $request->minP;
        }

        if (null !== $request->minTokens) {
            @$body['minTokens'] = $request->minTokens;
        }

        if (null !== $request->mmProcessorKwargs) {
            @$body['mmProcessorKwargs'] = $request->mmProcessorKwargs;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->n) {
            @$body['n'] = $request->n;
        }

        if (null !== $request->parallelToolCalls) {
            @$body['parallelToolCalls'] = $request->parallelToolCalls;
        }

        if (null !== $request->presencePenalty) {
            @$body['presencePenalty'] = $request->presencePenalty;
        }

        if (null !== $request->promptLogprobs) {
            @$body['promptLogprobs'] = $request->promptLogprobs;
        }

        if (null !== $request->reasoningEffort) {
            @$body['reasoningEffort'] = $request->reasoningEffort;
        }

        if (null !== $request->repetitionPenalty) {
            @$body['repetitionPenalty'] = $request->repetitionPenalty;
        }

        if (null !== $request->responseFormat) {
            @$body['responseFormat'] = $request->responseFormat;
        }

        if (null !== $request->seed) {
            @$body['seed'] = $request->seed;
        }

        if (null !== $request->skipSpecialTokens) {
            @$body['skipSpecialTokens'] = $request->skipSpecialTokens;
        }

        if (null !== $request->stop) {
            @$body['stop'] = $request->stop;
        }

        if (null !== $request->stopTokenIds) {
            @$body['stopTokenIds'] = $request->stopTokenIds;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->streamOptions) {
            @$body['streamOptions'] = $request->streamOptions;
        }

        if (null !== $request->structuredOutputs) {
            @$body['structuredOutputs'] = $request->structuredOutputs;
        }

        if (null !== $request->temperature) {
            @$body['temperature'] = $request->temperature;
        }

        if (null !== $request->toolChoice) {
            @$body['toolChoice'] = $request->toolChoice;
        }

        if (null !== $request->tools) {
            @$body['tools'] = $request->tools;
        }

        if (null !== $request->topK) {
            @$body['topK'] = $request->topK;
        }

        if (null !== $request->topLogprobs) {
            @$body['topLogprobs'] = $request->topLogprobs;
        }

        if (null !== $request->topP) {
            @$body['topP'] = $request->topP;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xQIAgentApiKey) {
            @$realHeaders['X-QI-Agent-Api-Key'] = '' . $headers->xQIAgentApiKey;
        }

        if (null !== $headers->xQIInstanceId) {
            @$realHeaders['X-QI-Instance-Id'] = '' . $headers->xQIInstanceId;
        }

        if (null !== $headers->xQISessionId) {
            @$realHeaders['X-QI-Session-Id'] = '' . $headers->xQISessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PaChatCompletionStream',
            'version' => '2026-08-31',
            'protocol' => 'HTTPS',
            'pathname' => '/pa/v1/chat/completions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PaChatCompletionStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invokes a published Mobile Planner Agent using OpenAI-Compatible Chat Completions messages to initiate a conversation or node planning, and returns text, model-provided reasoning content, and structured tool calling via SSE. Supports multi-turn sessions and model-supported image input. Business tools are executed by the caller.
     *
     * @remarks
     * ### Before you begin
     * - Install the SDK from the SDK center.
     * - Activate the Mobile Planner Agent service and prepare the published Mobile Planner Agent instance ID and its access key.
     * - Use the SDK to complete AccessKey authentication. The instance access key is placed in X-QI-Agent-Api-Key and cannot replace the AccessKey signature.
     * - Set Content-Type: application/json and Accept: text/event-stream. The stream parameter must be set to true.
     * ### How to call
     * - Method and path: `POST /pa/v1/chat/completions`.
     * - X-QI-Instance-Id specifies the instance and executes based on the published configuration. The model field in the request body is a compatibility placeholder and cannot switch models.
     * - The response consists of SSE incremental events, not a single complete JSON object. Continue reading until the stream ends and check for errors within the stream.
     * ### Session management
     * You can omit X-QI-Session-Id for the first turn. Save qi_session_id from the SSE body and pass it back through the request header of the same name in subsequent turns. Call sequentially within the same session. Use different identifiers for different sessions. Do not rely on the gateway to pass through custom response headers. The actual identifier is based on the SSE body.
     *
     * @param request - PaChatCompletionStreamRequest
     *
     * @returns PaChatCompletionStreamResponse
     *
     * @param PaChatCompletionStreamRequest $request
     *
     * @return PaChatCompletionStreamResponse
     */
    public function paChatCompletionStream($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PaChatCompletionStreamHeaders([]);

        return $this->paChatCompletionStreamWithOptions($request, $headers, $runtime);
    }
}
