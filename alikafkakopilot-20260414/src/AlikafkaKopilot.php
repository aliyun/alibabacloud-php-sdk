<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotChatStreamRequest;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotChatStreamResponse;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotFeedbackRequest;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotFeedbackResponse;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationChatMessagesRequest;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationChatMessagesResponse;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsRequest;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponse;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotQueryStatusRequest;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotQueryStatusResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AlikafkaKopilot extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('alikafkakopilot', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 智能体 stream chat.
     *
     * @param request - KopilotChatStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns KopilotChatStreamResponse
     *
     * @param KopilotChatStreamRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return KopilotChatStreamResponse
     */
    public function kopilotChatStreamWithSSE($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'KopilotChatStream',
            'version' => '2026-04-14',
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

                yield KopilotChatStreamResponse::fromMap([
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
     * 智能体 stream chat.
     *
     * @param request - KopilotChatStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns KopilotChatStreamResponse
     *
     * @param KopilotChatStreamRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return KopilotChatStreamResponse
     */
    public function kopilotChatStreamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'KopilotChatStream',
            'version' => '2026-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return KopilotChatStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 智能体 stream chat.
     *
     * @param request - KopilotChatStreamRequest
     *
     * @returns KopilotChatStreamResponse
     *
     * @param KopilotChatStreamRequest $request
     *
     * @return KopilotChatStreamResponse
     */
    public function kopilotChatStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->kopilotChatStreamWithOptions($request, $runtime);
    }

    /**
     * 评价.
     *
     * @param request - KopilotFeedbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns KopilotFeedbackResponse
     *
     * @param KopilotFeedbackRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return KopilotFeedbackResponse
     */
    public function kopilotFeedbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->feedback) {
            @$query['Feedback'] = $request->feedback;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->turnId) {
            @$query['TurnId'] = $request->turnId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'KopilotFeedback',
            'version' => '2026-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return KopilotFeedbackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 评价.
     *
     * @param request - KopilotFeedbackRequest
     *
     * @returns KopilotFeedbackResponse
     *
     * @param KopilotFeedbackRequest $request
     *
     * @return KopilotFeedbackResponse
     */
    public function kopilotFeedback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->kopilotFeedbackWithOptions($request, $runtime);
    }

    /**
     * 历史会话.
     *
     * @param request - KopilotListConversationChatMessagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns KopilotListConversationChatMessagesResponse
     *
     * @param KopilotListConversationChatMessagesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return KopilotListConversationChatMessagesResponse
     */
    public function kopilotListConversationChatMessagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beforeTurnId) {
            @$query['BeforeTurnId'] = $request->beforeTurnId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'KopilotListConversationChatMessages',
            'version' => '2026-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return KopilotListConversationChatMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 历史会话.
     *
     * @param request - KopilotListConversationChatMessagesRequest
     *
     * @returns KopilotListConversationChatMessagesResponse
     *
     * @param KopilotListConversationChatMessagesRequest $request
     *
     * @return KopilotListConversationChatMessagesResponse
     */
    public function kopilotListConversationChatMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->kopilotListConversationChatMessagesWithOptions($request, $runtime);
    }

    /**
     * 智能体.
     *
     * @param request - KopilotListConversationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns KopilotListConversationsResponse
     *
     * @param KopilotListConversationsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return KopilotListConversationsResponse
     */
    public function kopilotListConversationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'KopilotListConversations',
            'version' => '2026-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return KopilotListConversationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 智能体.
     *
     * @param request - KopilotListConversationsRequest
     *
     * @returns KopilotListConversationsResponse
     *
     * @param KopilotListConversationsRequest $request
     *
     * @return KopilotListConversationsResponse
     */
    public function kopilotListConversations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->kopilotListConversationsWithOptions($request, $runtime);
    }

    /**
     * 状态
     *
     * @param request - KopilotQueryStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns KopilotQueryStatusResponse
     *
     * @param KopilotQueryStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return KopilotQueryStatusResponse
     */
    public function kopilotQueryStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->owner) {
            @$query['Owner'] = $request->owner;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'KopilotQueryStatus',
            'version' => '2026-04-14',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return KopilotQueryStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 状态
     *
     * @param request - KopilotQueryStatusRequest
     *
     * @returns KopilotQueryStatusResponse
     *
     * @param KopilotQueryStatusRequest $request
     *
     * @return KopilotQueryStatusResponse
     */
    public function kopilotQueryStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->kopilotQueryStatusWithOptions($request, $runtime);
    }
}
