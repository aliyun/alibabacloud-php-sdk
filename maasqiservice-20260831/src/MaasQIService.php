<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\AigcChatCompletionStreamHeaders;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\AigcChatCompletionStreamRequest;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\AigcChatCompletionStreamResponse;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraChatCompletionStreamHeaders;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraChatCompletionStreamRequest;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraChatCompletionStreamResponse;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraConsoleDebugStreamHeaders;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraConsoleDebugStreamRequest;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CameraConsoleDebugStreamResponse;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CuaChatCompletionStreamHeaders;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CuaChatCompletionStreamRequest;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\CuaChatCompletionStreamResponse;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\GuiChatCompletionStreamHeaders;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\GuiChatCompletionStreamRequest;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\GuiChatCompletionStreamResponse;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\PaChatCompletionStreamHeaders;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\PaChatCompletionStreamRequest;
use AlibabaCloud\SDK\MaasQIService\V20260831\Models\PaChatCompletionStreamResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class MaasQIService extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'MaasQIService';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
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
     * Invokes a published Creative Agent, supporting both the lite and dedicated editions, and returns execution progress and image artifacts via Server-Sent Events (SSE). The lite edition performs text-to-image or image-to-image generation based on whether a reference image is provided. The dedicated edition uses a Planner to schedule and execute generation and editing tasks, supporting multi-turn conversations. Parameters such as the generation count and size are passed through metadata.parameters. For image URLs in the results, refer to artifacts.
     *
     * @remarks
     * ### Prerequisites
     * - Install the SDK from the SDK Center.
     * - Activate the Creative Agent service and prepare the published instance ID and the corresponding instance access key.
     * - Creative Agent provides the lite and dedicated editions. The lite edition performs generation or editing based on whether a reference image is provided. The dedicated edition uses a Planner to schedule and execute creative tasks.
     * - Use the SDK to complete AccessKey authentication. The instance access key must be placed in the X-QI-Agent-Api-Key header and cannot replace the AccessKey signature.
     * - Set Content-Type: application/json and Accept: text/event-stream. The stream parameter must be set to true.
     * ### Call methods
     * - Method and path: POST /aigc/v1/chat/completions.
     * - Specify the instance through X-QI-Instance-Id and execute according to the published configuration of the instance. The model field in the request body is a compatibility placeholder and cannot be used to switch models.
     * - This operation returns incremental events rather than a complete JSON response. Continuously read the stream until it ends and check for errors within the stream.
     * ### Session management
     * You can omit X-QI-Session-Id in the first turn. Save the session ID returned by the server from the qi_session_id field in the SSE body and pass the same value back in subsequent turns. Do not rely on the gateway to pass through custom response headers. Use different IDs for different sessions and send requests in sequence for the same session.
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
     * Invokes a published Creative Agent, supporting both the lite and dedicated editions, and returns execution progress and image artifacts via Server-Sent Events (SSE). The lite edition performs text-to-image or image-to-image generation based on whether a reference image is provided. The dedicated edition uses a Planner to schedule and execute generation and editing tasks, supporting multi-turn conversations. Parameters such as the generation count and size are passed through metadata.parameters. For image URLs in the results, refer to artifacts.
     *
     * @remarks
     * ### Prerequisites
     * - Install the SDK from the SDK Center.
     * - Activate the Creative Agent service and prepare the published instance ID and the corresponding instance access key.
     * - Creative Agent provides the lite and dedicated editions. The lite edition performs generation or editing based on whether a reference image is provided. The dedicated edition uses a Planner to schedule and execute creative tasks.
     * - Use the SDK to complete AccessKey authentication. The instance access key must be placed in the X-QI-Agent-Api-Key header and cannot replace the AccessKey signature.
     * - Set Content-Type: application/json and Accept: text/event-stream. The stream parameter must be set to true.
     * ### Call methods
     * - Method and path: POST /aigc/v1/chat/completions.
     * - Specify the instance through X-QI-Instance-Id and execute according to the published configuration of the instance. The model field in the request body is a compatibility placeholder and cannot be used to switch models.
     * - This operation returns incremental events rather than a complete JSON response. Continuously read the stream until it ends and check for errors within the stream.
     * ### Session management
     * You can omit X-QI-Session-Id in the first turn. Save the session ID returned by the server from the qi_session_id field in the SSE body and pass the same value back in subsequent turns. Do not rely on the gateway to pass through custom response headers. Use different IDs for different sessions and send requests in sequence for the same session.
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
     * Invokes a published Creative Agent, supporting both the lite and dedicated editions, and returns execution progress and image artifacts via Server-Sent Events (SSE). The lite edition performs text-to-image or image-to-image generation based on whether a reference image is provided. The dedicated edition uses a Planner to schedule and execute generation and editing tasks, supporting multi-turn conversations. Parameters such as the generation count and size are passed through metadata.parameters. For image URLs in the results, refer to artifacts.
     *
     * @remarks
     * ### Prerequisites
     * - Install the SDK from the SDK Center.
     * - Activate the Creative Agent service and prepare the published instance ID and the corresponding instance access key.
     * - Creative Agent provides the lite and dedicated editions. The lite edition performs generation or editing based on whether a reference image is provided. The dedicated edition uses a Planner to schedule and execute creative tasks.
     * - Use the SDK to complete AccessKey authentication. The instance access key must be placed in the X-QI-Agent-Api-Key header and cannot replace the AccessKey signature.
     * - Set Content-Type: application/json and Accept: text/event-stream. The stream parameter must be set to true.
     * ### Call methods
     * - Method and path: POST /aigc/v1/chat/completions.
     * - Specify the instance through X-QI-Instance-Id and execute according to the published configuration of the instance. The model field in the request body is a compatibility placeholder and cannot be used to switch models.
     * - This operation returns incremental events rather than a complete JSON response. Continuously read the stream until it ends and check for errors within the stream.
     * ### Session management
     * You can omit X-QI-Session-Id in the first turn. Save the session ID returned by the server from the qi_session_id field in the SSE body and pass the same value back in subsequent turns. Do not rely on the gateway to pass through custom response headers. Use different IDs for different sessions and send requests in sequence for the same session.
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
     * Calls a published Camera Agent to recognize food and beverages and detect new persons in scenes. Food recognition returns the locations and counts of targets. Person detection deduplicates against recorded portraits in the scene and returns at most one new person per call. The recognition capabilities are determined by the published configuration of the instance. Both JSON and Server-Sent Events (SSE) responses are supported. All bounding boxes use the pixel coordinates of the original image.
     *
     * @remarks
     * ### Prerequisites
     * - The Camera Agent service is activated. A published CameraStandard instance ID and the corresponding instance access key are prepared.
     * - AccessKey authentication is completed by using SDK or OpenAPI signatures. The instance key is provided in the X-QI-Agent-Api-Key header and cannot replace the AccessKey signature.
     * - The Content-Type header is set to application/json. If stream is set to true, SSE is used and the Accept header is set to text/event-stream. Otherwise, a JSON response is returned.
     * ### Call method
     * Send a POST request to /camera/v1/chat/completions. Specify the instance by using the X-QI-Instance-Id header and provide the raw value of the key. Submit one role=user message and one image per call. The recognition scene, model, and thresholds are based on the published configuration of the instance.
     * ### Session management
     * You can omit the X-QI-Session-Id header in the first call and make sequential calls within the same session. The scene_id parameter is required for person recognition but must be omitted for food recognition. Session management ensures execution and idempotency, while the scene ID manages person deduplication. The same scene can be reused across sessions, but calls must be sequential. Create a new session when you switch the published version or recognition scene. For person recognition, create a new scene at the same time.
     *
     * @param request - CameraChatCompletionStreamRequest
     * @param headers - CameraChatCompletionStreamHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CameraChatCompletionStreamResponse
     *
     * @param CameraChatCompletionStreamRequest $request
     * @param CameraChatCompletionStreamHeaders $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CameraChatCompletionStreamResponse
     */
    public function cameraChatCompletionStreamWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->sceneId) {
            @$body['sceneId'] = $request->sceneId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xQIAgentApiKey) {
            @$realHeaders['X-QI-Agent-Api-Key'] = '' . $headers->xQIAgentApiKey;
        }

        if (null !== $headers->xQIRequestId) {
            @$realHeaders['X-QI-Request-Id'] = '' . $headers->xQIRequestId;
        }

        if (null !== $headers->xQISessionId) {
            @$realHeaders['X-QI-Session-Id'] = '' . $headers->xQISessionId;
        }

        if (null !== $headers->xQIInstanceId) {
            @$realHeaders['x-QI-Instance-Id'] = '' . $headers->xQIInstanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CameraChatCompletionStream',
            'version' => '2026-08-31',
            'protocol' => 'HTTPS',
            'pathname' => '/camera/v1/chat/completions',
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

                yield CameraChatCompletionStreamResponse::fromMap([
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
     * Calls a published Camera Agent to recognize food and beverages and detect new persons in scenes. Food recognition returns the locations and counts of targets. Person detection deduplicates against recorded portraits in the scene and returns at most one new person per call. The recognition capabilities are determined by the published configuration of the instance. Both JSON and Server-Sent Events (SSE) responses are supported. All bounding boxes use the pixel coordinates of the original image.
     *
     * @remarks
     * ### Prerequisites
     * - The Camera Agent service is activated. A published CameraStandard instance ID and the corresponding instance access key are prepared.
     * - AccessKey authentication is completed by using SDK or OpenAPI signatures. The instance key is provided in the X-QI-Agent-Api-Key header and cannot replace the AccessKey signature.
     * - The Content-Type header is set to application/json. If stream is set to true, SSE is used and the Accept header is set to text/event-stream. Otherwise, a JSON response is returned.
     * ### Call method
     * Send a POST request to /camera/v1/chat/completions. Specify the instance by using the X-QI-Instance-Id header and provide the raw value of the key. Submit one role=user message and one image per call. The recognition scene, model, and thresholds are based on the published configuration of the instance.
     * ### Session management
     * You can omit the X-QI-Session-Id header in the first call and make sequential calls within the same session. The scene_id parameter is required for person recognition but must be omitted for food recognition. Session management ensures execution and idempotency, while the scene ID manages person deduplication. The same scene can be reused across sessions, but calls must be sequential. Create a new session when you switch the published version or recognition scene. For person recognition, create a new scene at the same time.
     *
     * @param request - CameraChatCompletionStreamRequest
     * @param headers - CameraChatCompletionStreamHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CameraChatCompletionStreamResponse
     *
     * @param CameraChatCompletionStreamRequest $request
     * @param CameraChatCompletionStreamHeaders $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CameraChatCompletionStreamResponse
     */
    public function cameraChatCompletionStreamWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->sceneId) {
            @$body['sceneId'] = $request->sceneId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xQIAgentApiKey) {
            @$realHeaders['X-QI-Agent-Api-Key'] = '' . $headers->xQIAgentApiKey;
        }

        if (null !== $headers->xQIRequestId) {
            @$realHeaders['X-QI-Request-Id'] = '' . $headers->xQIRequestId;
        }

        if (null !== $headers->xQISessionId) {
            @$realHeaders['X-QI-Session-Id'] = '' . $headers->xQISessionId;
        }

        if (null !== $headers->xQIInstanceId) {
            @$realHeaders['x-QI-Instance-Id'] = '' . $headers->xQIInstanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CameraChatCompletionStream',
            'version' => '2026-08-31',
            'protocol' => 'HTTPS',
            'pathname' => '/camera/v1/chat/completions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);

        return CameraChatCompletionStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Calls a published Camera Agent to recognize food and beverages and detect new persons in scenes. Food recognition returns the locations and counts of targets. Person detection deduplicates against recorded portraits in the scene and returns at most one new person per call. The recognition capabilities are determined by the published configuration of the instance. Both JSON and Server-Sent Events (SSE) responses are supported. All bounding boxes use the pixel coordinates of the original image.
     *
     * @remarks
     * ### Prerequisites
     * - The Camera Agent service is activated. A published CameraStandard instance ID and the corresponding instance access key are prepared.
     * - AccessKey authentication is completed by using SDK or OpenAPI signatures. The instance key is provided in the X-QI-Agent-Api-Key header and cannot replace the AccessKey signature.
     * - The Content-Type header is set to application/json. If stream is set to true, SSE is used and the Accept header is set to text/event-stream. Otherwise, a JSON response is returned.
     * ### Call method
     * Send a POST request to /camera/v1/chat/completions. Specify the instance by using the X-QI-Instance-Id header and provide the raw value of the key. Submit one role=user message and one image per call. The recognition scene, model, and thresholds are based on the published configuration of the instance.
     * ### Session management
     * You can omit the X-QI-Session-Id header in the first call and make sequential calls within the same session. The scene_id parameter is required for person recognition but must be omitted for food recognition. Session management ensures execution and idempotency, while the scene ID manages person deduplication. The same scene can be reused across sessions, but calls must be sequential. Create a new session when you switch the published version or recognition scene. For person recognition, create a new scene at the same time.
     *
     * @param request - CameraChatCompletionStreamRequest
     *
     * @returns CameraChatCompletionStreamResponse
     *
     * @param CameraChatCompletionStreamRequest $request
     *
     * @return CameraChatCompletionStreamResponse
     */
    public function cameraChatCompletionStream($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CameraChatCompletionStreamHeaders([]);

        return $this->cameraChatCompletionStreamWithOptions($request, $headers, $runtime);
    }

    /**
     * 调试 Camera Agent.
     *
     * @remarks
     * ### 接入前提
     * - 已开通 Camera Agent 服务，准备当前租户的 CameraStandard 实例；实例可以未发布。
     * - 使用 SDK/OpenAPI 签名完成 AccessKey 认证，无需 `X-QI-Agent-Api-Key`。
     * - 设置 `Content-Type: application/json`。`input.stream=true` 时使用 SSE，并设置 `Accept: text/event-stream`；否则返回 JSON。
     * ### 调用方式
     * `POST /api/console/camera/agents/debug`。实例 ID 放在 `instanceId` 或 `X-QI-Instance-Id` Header，非空 Header 优先；图片请求放入 `input`。省略 `config` 使用实例草稿，临时配置仅对本次调用生效，不保存或发布实例。
     * ### 会话管理
     * 首轮可省略 `sessionId`，非空 `X-QI-Session-Id` Header 优先。同一会话顺序调用；人物识别省略整个 `input.scene_id` 字段时，由 Session 派生场景。需要连续去重时复用 Session 或显式指定同一场景，切换有效配置时换新 Session 和场景。
     *
     * @param request - CameraConsoleDebugStreamRequest
     * @param headers - CameraConsoleDebugStreamHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CameraConsoleDebugStreamResponse
     *
     * @param CameraConsoleDebugStreamRequest $request
     * @param CameraConsoleDebugStreamHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CameraConsoleDebugStreamResponse
     */
    public function cameraConsoleDebugStreamWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->input) {
            @$body['input'] = $request->input;
        }

        if (null !== $request->instanceId) {
            @$body['instanceId'] = $request->instanceId;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xQIInstanceId) {
            @$realHeaders['X-QI-Instance-Id'] = '' . $headers->xQIInstanceId;
        }

        if (null !== $headers->xQIRequestId) {
            @$realHeaders['X-QI-Request-Id'] = '' . $headers->xQIRequestId;
        }

        if (null !== $headers->xQISessionId) {
            @$realHeaders['X-QI-Session-Id'] = '' . $headers->xQISessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CameraConsoleDebugStream',
            'version' => '2026-08-31',
            'protocol' => 'HTTPS',
            'pathname' => '/api/console/camera/agents/debug',
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

                yield CameraConsoleDebugStreamResponse::fromMap([
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
     * 调试 Camera Agent.
     *
     * @remarks
     * ### 接入前提
     * - 已开通 Camera Agent 服务，准备当前租户的 CameraStandard 实例；实例可以未发布。
     * - 使用 SDK/OpenAPI 签名完成 AccessKey 认证，无需 `X-QI-Agent-Api-Key`。
     * - 设置 `Content-Type: application/json`。`input.stream=true` 时使用 SSE，并设置 `Accept: text/event-stream`；否则返回 JSON。
     * ### 调用方式
     * `POST /api/console/camera/agents/debug`。实例 ID 放在 `instanceId` 或 `X-QI-Instance-Id` Header，非空 Header 优先；图片请求放入 `input`。省略 `config` 使用实例草稿，临时配置仅对本次调用生效，不保存或发布实例。
     * ### 会话管理
     * 首轮可省略 `sessionId`，非空 `X-QI-Session-Id` Header 优先。同一会话顺序调用；人物识别省略整个 `input.scene_id` 字段时，由 Session 派生场景。需要连续去重时复用 Session 或显式指定同一场景，切换有效配置时换新 Session 和场景。
     *
     * @param request - CameraConsoleDebugStreamRequest
     * @param headers - CameraConsoleDebugStreamHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CameraConsoleDebugStreamResponse
     *
     * @param CameraConsoleDebugStreamRequest $request
     * @param CameraConsoleDebugStreamHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CameraConsoleDebugStreamResponse
     */
    public function cameraConsoleDebugStreamWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->input) {
            @$body['input'] = $request->input;
        }

        if (null !== $request->instanceId) {
            @$body['instanceId'] = $request->instanceId;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        if (null !== $request->requestId) {
            @$body['requestId'] = $request->requestId;
        }

        if (null !== $request->scenario) {
            @$body['scenario'] = $request->scenario;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xQIInstanceId) {
            @$realHeaders['X-QI-Instance-Id'] = '' . $headers->xQIInstanceId;
        }

        if (null !== $headers->xQIRequestId) {
            @$realHeaders['X-QI-Request-Id'] = '' . $headers->xQIRequestId;
        }

        if (null !== $headers->xQISessionId) {
            @$realHeaders['X-QI-Session-Id'] = '' . $headers->xQISessionId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CameraConsoleDebugStream',
            'version' => '2026-08-31',
            'protocol' => 'HTTPS',
            'pathname' => '/api/console/camera/agents/debug',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);

        return CameraConsoleDebugStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调试 Camera Agent.
     *
     * @remarks
     * ### 接入前提
     * - 已开通 Camera Agent 服务，准备当前租户的 CameraStandard 实例；实例可以未发布。
     * - 使用 SDK/OpenAPI 签名完成 AccessKey 认证，无需 `X-QI-Agent-Api-Key`。
     * - 设置 `Content-Type: application/json`。`input.stream=true` 时使用 SSE，并设置 `Accept: text/event-stream`；否则返回 JSON。
     * ### 调用方式
     * `POST /api/console/camera/agents/debug`。实例 ID 放在 `instanceId` 或 `X-QI-Instance-Id` Header，非空 Header 优先；图片请求放入 `input`。省略 `config` 使用实例草稿，临时配置仅对本次调用生效，不保存或发布实例。
     * ### 会话管理
     * 首轮可省略 `sessionId`，非空 `X-QI-Session-Id` Header 优先。同一会话顺序调用；人物识别省略整个 `input.scene_id` 字段时，由 Session 派生场景。需要连续去重时复用 Session 或显式指定同一场景，切换有效配置时换新 Session 和场景。
     *
     * @param request - CameraConsoleDebugStreamRequest
     *
     * @returns CameraConsoleDebugStreamResponse
     *
     * @param CameraConsoleDebugStreamRequest $request
     *
     * @return CameraConsoleDebugStreamResponse
     */
    public function cameraConsoleDebugStream($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CameraConsoleDebugStreamHeaders([]);

        return $this->cameraConsoleDebugStreamWithOptions($request, $headers, $runtime);
    }

    /**
     * Invokes a published Computer Use Agent (CUA) Standard Edition instance, submits a task and the current desktop screenshot, and returns single-step computer operation decisions through Server-Sent Events (SSE). After the client executes the computer_use action, it returns the actual results and continues the call with the session ID and the latest screenshot.
     *
     * @remarks
     * This topic retains the section names and order of the previous version. For version differences, see Release notes. This topic is compiled based on the official API reference of the previous version, subsequent call instructions from the service provider, and pre-release call observations. It does not indicate that a full audit of the new version of the service source code or the official gateway has been completed. No new API version number is provided.
     * ## Before you begin
     * - Install the official SDK applicable to the target endpoint from the SDK center.
     * - Activate the CUA Agent service and prepare the published CUA instance ID and its access key.
     * - CUA is only available in Standard Edition.
     * - The official POP/OpenAPI endpoint uses the Alibaba Cloud SDK or OpenAPI signature to complete AccessKey authentication. The instance access key is separately placed in `X-QI-Agent-Api-Key` and cannot replace the AccessKey signature.
     * - Set `Content-Type: application/json` and `Accept: text/event-stream`. The `stream` parameter must be set to `true`.
     * - Use the target endpoint confirmed by the service provider. The authentication behavior of the pre-release direct business endpoint cannot be extrapolated to mean that the official endpoint does not require an AK signature.
     * - The client must have the capabilities of taking screenshots, fully parsing SSE, executing actions, and returning actual results. Code and commands must be executed in a controlled and authorized environment. Manual confirmation should be added for sensitive operations.
     * ## Call methods
     * - Method and path: `POST /cua/v1/chat/completions`.
     * - `X-QI-Instance-Id` specifies the instance and is executed according to the published CUA Standard Edition configuration. The `model` parameter in the request body is a compatibility placeholder and cannot be used to switch models.
     * - The response consists of SSE events, not a complete JSON object. Continue reading until the end and check for errors within the stream.
     * - CUA returns the complete action after the single-step model decision is completed, rather than outputting token by token. Heartbeats are used to maintain the connection during the waiting phase.
     * - The mode is selected through `metadata.actionMode` in the request body: `gui-only` or `gui+cli`. This is a field supplemented by subsequent service instructions, not a model name or request header.
     * - Do not use `stream:false` to replace this API operation. Non-streaming mode may result in no response bytes for a long time before the model finishes, which increases the risk of intermediate link timeouts.
     * ## Session management
     * In the first round, you can omit or leave `X-QI-Session-Id` empty, save `qi_session_id` from the SSE body, and reuse it through the request header with the same name in subsequent rounds. Do not rely on the gateway to pass through custom response headers. The actual identifier is subject to the SSE body.
     * `X-QI-Request-Id` can be generated by the server. We recommend that the client explicitly generate it to facilitate recovery and troubleshooting:
     * - New step: new request ID.
     * - Retry the same step: same session, same request ID, and same request body.
     * - Calls within the same session must be strictly sequential. Do not send different steps in parallel. Use different sessions for different tasks.
     * - Explicitly select `actionMode` in the first round and keep it consistent in subsequent rounds. If you need to change the mode, create a new session. You cannot switch modes within the same session.
     * - If the stream is disconnected before `qi_session_id` is obtained in the first round, the recovery method must be handled according to the rules confirmed by the service provider. You cannot assume that the request ID can be deduplicated across unknown sessions.
     * - Save the session/request ID immediately when the identity event is obtained, but do not treat the identity event as a complete return of the action.
     * - Stop continuing after receiving `finished`. The current documentation does not provide an independent session release API operation. Do not construct additional release requests on your own.
     * ## Rate limit
     * The current API request rate for the cloud service is not exposed. Do not treat the client concurrency configuration as the concurrency or QPS commitment allowed by the service. You should confirm the capacity, queuing, and quotas with the service provider.
     * Limits provided in subsequent service instructions:
     * - The current request body limit is **8 MB**, including the fully serialized JSON, not just images.
     * - Exactly one current screenshot is required for each step. Do not pass multiple images or screenshot history.
     * - A keepalive message is sent approximately every **15 seconds** during the waiting period. This interval is not a response latency SLA, and you cannot rely on heartbeats when an HTTP/SSE response has not been established.
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

        if (null !== $headers->xQIRequestId) {
            @$realHeaders['X-QI-Request-Id'] = '' . $headers->xQIRequestId;
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
     * Invokes a published Computer Use Agent (CUA) Standard Edition instance, submits a task and the current desktop screenshot, and returns single-step computer operation decisions through Server-Sent Events (SSE). After the client executes the computer_use action, it returns the actual results and continues the call with the session ID and the latest screenshot.
     *
     * @remarks
     * This topic retains the section names and order of the previous version. For version differences, see Release notes. This topic is compiled based on the official API reference of the previous version, subsequent call instructions from the service provider, and pre-release call observations. It does not indicate that a full audit of the new version of the service source code or the official gateway has been completed. No new API version number is provided.
     * ## Before you begin
     * - Install the official SDK applicable to the target endpoint from the SDK center.
     * - Activate the CUA Agent service and prepare the published CUA instance ID and its access key.
     * - CUA is only available in Standard Edition.
     * - The official POP/OpenAPI endpoint uses the Alibaba Cloud SDK or OpenAPI signature to complete AccessKey authentication. The instance access key is separately placed in `X-QI-Agent-Api-Key` and cannot replace the AccessKey signature.
     * - Set `Content-Type: application/json` and `Accept: text/event-stream`. The `stream` parameter must be set to `true`.
     * - Use the target endpoint confirmed by the service provider. The authentication behavior of the pre-release direct business endpoint cannot be extrapolated to mean that the official endpoint does not require an AK signature.
     * - The client must have the capabilities of taking screenshots, fully parsing SSE, executing actions, and returning actual results. Code and commands must be executed in a controlled and authorized environment. Manual confirmation should be added for sensitive operations.
     * ## Call methods
     * - Method and path: `POST /cua/v1/chat/completions`.
     * - `X-QI-Instance-Id` specifies the instance and is executed according to the published CUA Standard Edition configuration. The `model` parameter in the request body is a compatibility placeholder and cannot be used to switch models.
     * - The response consists of SSE events, not a complete JSON object. Continue reading until the end and check for errors within the stream.
     * - CUA returns the complete action after the single-step model decision is completed, rather than outputting token by token. Heartbeats are used to maintain the connection during the waiting phase.
     * - The mode is selected through `metadata.actionMode` in the request body: `gui-only` or `gui+cli`. This is a field supplemented by subsequent service instructions, not a model name or request header.
     * - Do not use `stream:false` to replace this API operation. Non-streaming mode may result in no response bytes for a long time before the model finishes, which increases the risk of intermediate link timeouts.
     * ## Session management
     * In the first round, you can omit or leave `X-QI-Session-Id` empty, save `qi_session_id` from the SSE body, and reuse it through the request header with the same name in subsequent rounds. Do not rely on the gateway to pass through custom response headers. The actual identifier is subject to the SSE body.
     * `X-QI-Request-Id` can be generated by the server. We recommend that the client explicitly generate it to facilitate recovery and troubleshooting:
     * - New step: new request ID.
     * - Retry the same step: same session, same request ID, and same request body.
     * - Calls within the same session must be strictly sequential. Do not send different steps in parallel. Use different sessions for different tasks.
     * - Explicitly select `actionMode` in the first round and keep it consistent in subsequent rounds. If you need to change the mode, create a new session. You cannot switch modes within the same session.
     * - If the stream is disconnected before `qi_session_id` is obtained in the first round, the recovery method must be handled according to the rules confirmed by the service provider. You cannot assume that the request ID can be deduplicated across unknown sessions.
     * - Save the session/request ID immediately when the identity event is obtained, but do not treat the identity event as a complete return of the action.
     * - Stop continuing after receiving `finished`. The current documentation does not provide an independent session release API operation. Do not construct additional release requests on your own.
     * ## Rate limit
     * The current API request rate for the cloud service is not exposed. Do not treat the client concurrency configuration as the concurrency or QPS commitment allowed by the service. You should confirm the capacity, queuing, and quotas with the service provider.
     * Limits provided in subsequent service instructions:
     * - The current request body limit is **8 MB**, including the fully serialized JSON, not just images.
     * - Exactly one current screenshot is required for each step. Do not pass multiple images or screenshot history.
     * - A keepalive message is sent approximately every **15 seconds** during the waiting period. This interval is not a response latency SLA, and you cannot rely on heartbeats when an HTTP/SSE response has not been established.
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

        if (null !== $headers->xQIRequestId) {
            @$realHeaders['X-QI-Request-Id'] = '' . $headers->xQIRequestId;
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
     * Invokes a published Computer Use Agent (CUA) Standard Edition instance, submits a task and the current desktop screenshot, and returns single-step computer operation decisions through Server-Sent Events (SSE). After the client executes the computer_use action, it returns the actual results and continues the call with the session ID and the latest screenshot.
     *
     * @remarks
     * This topic retains the section names and order of the previous version. For version differences, see Release notes. This topic is compiled based on the official API reference of the previous version, subsequent call instructions from the service provider, and pre-release call observations. It does not indicate that a full audit of the new version of the service source code or the official gateway has been completed. No new API version number is provided.
     * ## Before you begin
     * - Install the official SDK applicable to the target endpoint from the SDK center.
     * - Activate the CUA Agent service and prepare the published CUA instance ID and its access key.
     * - CUA is only available in Standard Edition.
     * - The official POP/OpenAPI endpoint uses the Alibaba Cloud SDK or OpenAPI signature to complete AccessKey authentication. The instance access key is separately placed in `X-QI-Agent-Api-Key` and cannot replace the AccessKey signature.
     * - Set `Content-Type: application/json` and `Accept: text/event-stream`. The `stream` parameter must be set to `true`.
     * - Use the target endpoint confirmed by the service provider. The authentication behavior of the pre-release direct business endpoint cannot be extrapolated to mean that the official endpoint does not require an AK signature.
     * - The client must have the capabilities of taking screenshots, fully parsing SSE, executing actions, and returning actual results. Code and commands must be executed in a controlled and authorized environment. Manual confirmation should be added for sensitive operations.
     * ## Call methods
     * - Method and path: `POST /cua/v1/chat/completions`.
     * - `X-QI-Instance-Id` specifies the instance and is executed according to the published CUA Standard Edition configuration. The `model` parameter in the request body is a compatibility placeholder and cannot be used to switch models.
     * - The response consists of SSE events, not a complete JSON object. Continue reading until the end and check for errors within the stream.
     * - CUA returns the complete action after the single-step model decision is completed, rather than outputting token by token. Heartbeats are used to maintain the connection during the waiting phase.
     * - The mode is selected through `metadata.actionMode` in the request body: `gui-only` or `gui+cli`. This is a field supplemented by subsequent service instructions, not a model name or request header.
     * - Do not use `stream:false` to replace this API operation. Non-streaming mode may result in no response bytes for a long time before the model finishes, which increases the risk of intermediate link timeouts.
     * ## Session management
     * In the first round, you can omit or leave `X-QI-Session-Id` empty, save `qi_session_id` from the SSE body, and reuse it through the request header with the same name in subsequent rounds. Do not rely on the gateway to pass through custom response headers. The actual identifier is subject to the SSE body.
     * `X-QI-Request-Id` can be generated by the server. We recommend that the client explicitly generate it to facilitate recovery and troubleshooting:
     * - New step: new request ID.
     * - Retry the same step: same session, same request ID, and same request body.
     * - Calls within the same session must be strictly sequential. Do not send different steps in parallel. Use different sessions for different tasks.
     * - Explicitly select `actionMode` in the first round and keep it consistent in subsequent rounds. If you need to change the mode, create a new session. You cannot switch modes within the same session.
     * - If the stream is disconnected before `qi_session_id` is obtained in the first round, the recovery method must be handled according to the rules confirmed by the service provider. You cannot assume that the request ID can be deduplicated across unknown sessions.
     * - Save the session/request ID immediately when the identity event is obtained, but do not treat the identity event as a complete return of the action.
     * - Stop continuing after receiving `finished`. The current documentation does not provide an independent session release API operation. Do not construct additional release requests on your own.
     * ## Rate limit
     * The current API request rate for the cloud service is not exposed. Do not treat the client concurrency configuration as the concurrency or QPS commitment allowed by the service. You should confirm the capacity, queuing, and quotas with the service provider.
     * Limits provided in subsequent service instructions:
     * - The current request body limit is **8 MB**, including the fully serialized JSON, not just images.
     * - Exactly one current screenshot is required for each step. Do not pass multiple images or screenshot history.
     * - A keepalive message is sent approximately every **15 seconds** during the waiting period. This interval is not a response latency SLA, and you cannot rely on heartbeats when an HTTP/SSE response has not been established.
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
     * Calls a published Mobile-Use Agent, which supports both the standard and exclusive editions. Submits the task text and the current screen screenshot, passes the device and application context through metadata, and returns the next mobile UI operation via Server-Sent Events (SSE). The UI operation is executed by the caller. After execution, subsequent calls are made with the session ID and the latest screenshot.
     *
     * @remarks
     * ### Prerequisites
     * - Install the SDK from the SDK center.
     * - Activate the Mobile-Use Agent service and prepare the published Mobile-Use Agent instance ID and its access key.
     * - Mobile-Use Agent provides the standard and exclusive editions. Call the API based on the edition of the selected instance.
     * - Use the SDK to complete AccessKey authentication. Place the instance access key in the X-QI-Agent-Api-Key header, which cannot replace the AccessKey signature.
     * - Set Content-Type to application/json and Accept to text/event-stream. The stream parameter must be set to true.
     * ### Call methods
     * - Method and path: `POST /gui/v1/chat/completions`.
     * - X-QI-Instance-Id specifies the instance and executes based on the published configuration. The model field in the request body is a compatibility placeholder and cannot be used to switch models.
     * - The response consists of SSE incremental events, not a complete JSON object. Continuously read until the stream ends and check for errors within the stream.
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
     * Calls a published Mobile-Use Agent, which supports both the standard and exclusive editions. Submits the task text and the current screen screenshot, passes the device and application context through metadata, and returns the next mobile UI operation via Server-Sent Events (SSE). The UI operation is executed by the caller. After execution, subsequent calls are made with the session ID and the latest screenshot.
     *
     * @remarks
     * ### Prerequisites
     * - Install the SDK from the SDK center.
     * - Activate the Mobile-Use Agent service and prepare the published Mobile-Use Agent instance ID and its access key.
     * - Mobile-Use Agent provides the standard and exclusive editions. Call the API based on the edition of the selected instance.
     * - Use the SDK to complete AccessKey authentication. Place the instance access key in the X-QI-Agent-Api-Key header, which cannot replace the AccessKey signature.
     * - Set Content-Type to application/json and Accept to text/event-stream. The stream parameter must be set to true.
     * ### Call methods
     * - Method and path: `POST /gui/v1/chat/completions`.
     * - X-QI-Instance-Id specifies the instance and executes based on the published configuration. The model field in the request body is a compatibility placeholder and cannot be used to switch models.
     * - The response consists of SSE incremental events, not a complete JSON object. Continuously read until the stream ends and check for errors within the stream.
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
     * Calls a published Mobile-Use Agent, which supports both the standard and exclusive editions. Submits the task text and the current screen screenshot, passes the device and application context through metadata, and returns the next mobile UI operation via Server-Sent Events (SSE). The UI operation is executed by the caller. After execution, subsequent calls are made with the session ID and the latest screenshot.
     *
     * @remarks
     * ### Prerequisites
     * - Install the SDK from the SDK center.
     * - Activate the Mobile-Use Agent service and prepare the published Mobile-Use Agent instance ID and its access key.
     * - Mobile-Use Agent provides the standard and exclusive editions. Call the API based on the edition of the selected instance.
     * - Use the SDK to complete AccessKey authentication. Place the instance access key in the X-QI-Agent-Api-Key header, which cannot replace the AccessKey signature.
     * - Set Content-Type to application/json and Accept to text/event-stream. The stream parameter must be set to true.
     * ### Call methods
     * - Method and path: `POST /gui/v1/chat/completions`.
     * - X-QI-Instance-Id specifies the instance and executes based on the published configuration. The model field in the request body is a compatibility placeholder and cannot be used to switch models.
     * - The response consists of SSE incremental events, not a complete JSON object. Continuously read until the stream ends and check for errors within the stream.
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
     * Invokes a published Mobile Planner Agent to initiate a conversation or node planning by using OpenAI-compatible Chat Completions messages, and returns text, model-provided thinking content, and structured tool invocations over Server-Sent Events (SSE). Supports multi-turn sessions and image inputs supported by the model. Business tools are executed by the invoker.
     *
     * @remarks
     * ### Prerequisites
     * - Install the SDK from the SDK center.
     * - Activate the Mobile Planner Agent service and prepare the ID and access key of a published Mobile Planner Agent instance.
     * - Use the SDK to complete AccessKey authentication. Place the instance access key in the X-QI-Agent-Api-Key header, which cannot replace the AccessKey signature.
     * - Set Content-Type to application/json and Accept to text/event-stream. The stream parameter must be set to true.
     * ### Call methods
     * - Method and path: `POST /pa/v1/chat/completions`.
     * - Use X-QI-Instance-Id to specify the instance and execute it based on the published configuration. The model field in the request body is a compatibility placeholder and cannot be used to switch models.
     * - The response consists of SSE incremental events rather than a complete JSON object. Continuously read the stream until it ends and check for errors within the stream.
     * ### Session management
     * You can omit X-QI-Session-Id in the first turn and save the qi_session_id from the SSE body. Pass it back in the request header with the same name in subsequent turns to continue the session. Make sequential calls within the same session and use different identifiers for different sessions. Do not rely on the gateway to pass through custom response headers. The actual identifier is subject to the SSE body.
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
     * Invokes a published Mobile Planner Agent to initiate a conversation or node planning by using OpenAI-compatible Chat Completions messages, and returns text, model-provided thinking content, and structured tool invocations over Server-Sent Events (SSE). Supports multi-turn sessions and image inputs supported by the model. Business tools are executed by the invoker.
     *
     * @remarks
     * ### Prerequisites
     * - Install the SDK from the SDK center.
     * - Activate the Mobile Planner Agent service and prepare the ID and access key of a published Mobile Planner Agent instance.
     * - Use the SDK to complete AccessKey authentication. Place the instance access key in the X-QI-Agent-Api-Key header, which cannot replace the AccessKey signature.
     * - Set Content-Type to application/json and Accept to text/event-stream. The stream parameter must be set to true.
     * ### Call methods
     * - Method and path: `POST /pa/v1/chat/completions`.
     * - Use X-QI-Instance-Id to specify the instance and execute it based on the published configuration. The model field in the request body is a compatibility placeholder and cannot be used to switch models.
     * - The response consists of SSE incremental events rather than a complete JSON object. Continuously read the stream until it ends and check for errors within the stream.
     * ### Session management
     * You can omit X-QI-Session-Id in the first turn and save the qi_session_id from the SSE body. Pass it back in the request header with the same name in subsequent turns to continue the session. Make sequential calls within the same session and use different identifiers for different sessions. Do not rely on the gateway to pass through custom response headers. The actual identifier is subject to the SSE body.
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
     * Invokes a published Mobile Planner Agent to initiate a conversation or node planning by using OpenAI-compatible Chat Completions messages, and returns text, model-provided thinking content, and structured tool invocations over Server-Sent Events (SSE). Supports multi-turn sessions and image inputs supported by the model. Business tools are executed by the invoker.
     *
     * @remarks
     * ### Prerequisites
     * - Install the SDK from the SDK center.
     * - Activate the Mobile Planner Agent service and prepare the ID and access key of a published Mobile Planner Agent instance.
     * - Use the SDK to complete AccessKey authentication. Place the instance access key in the X-QI-Agent-Api-Key header, which cannot replace the AccessKey signature.
     * - Set Content-Type to application/json and Accept to text/event-stream. The stream parameter must be set to true.
     * ### Call methods
     * - Method and path: `POST /pa/v1/chat/completions`.
     * - Use X-QI-Instance-Id to specify the instance and execute it based on the published configuration. The model field in the request body is a compatibility placeholder and cannot be used to switch models.
     * - The response consists of SSE incremental events rather than a complete JSON object. Continuously read the stream until it ends and check for errors within the stream.
     * ### Session management
     * You can omit X-QI-Session-Id in the first turn and save the qi_session_id from the SSE body. Pass it back in the request header with the same name in subsequent turns to continue the session. Make sequential calls within the same session and use different identifiers for different sessions. Do not rely on the gateway to pass through custom response headers. The actual identifier is subject to the SSE body.
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
