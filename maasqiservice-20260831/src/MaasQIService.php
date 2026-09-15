<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\AigcChatCompletionStreamHeaders;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\AigcChatCompletionStreamRequest;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\AigcChatCompletionStreamResponse;
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
        $this->_endpointRule = '';
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
     * 以 SSE 流式调用已发布 AIGC Agent；支持 AIGCLite 文生图/图生图与 AIGCStandard Planner，兼容 OpenAI Chat Completions。
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
     * 以 SSE 流式调用已发布 AIGC Agent；支持 AIGCLite 文生图/图生图与 AIGCStandard Planner，兼容 OpenAI Chat Completions。
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
     * 以 SSE 流式调用已发布 AIGC Agent；支持 AIGCLite 文生图/图生图与 AIGCStandard Planner，兼容 OpenAI Chat Completions。
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
     * 以 SSE 流式调用已发布 GUI Agent；兼容 OpenAI Chat Completions，输入屏幕截图与任务文本，返回下一步 GUI 操作。
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
     * 以 SSE 流式调用已发布 GUI Agent；兼容 OpenAI Chat Completions，输入屏幕截图与任务文本，返回下一步 GUI 操作。
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
     * 以 SSE 流式调用已发布 GUI Agent；兼容 OpenAI Chat Completions，输入屏幕截图与任务文本，返回下一步 GUI 操作。
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
     * 以 SSE 流式调用已发布 PA Agent；兼容 OpenAI Chat Completions，支持多轮消息、工具调用、多模态输入与思考内容。
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
     * 以 SSE 流式调用已发布 PA Agent；兼容 OpenAI Chat Completions，支持多轮消息、工具调用、多模态输入与思考内容。
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
     * 以 SSE 流式调用已发布 PA Agent；兼容 OpenAI Chat Completions，支持多轮消息、工具调用、多模态输入与思考内容。
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
