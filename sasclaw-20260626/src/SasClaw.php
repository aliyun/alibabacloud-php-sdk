<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SasClaw\V20260626;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\SasClaw\V20260626\Models\ChatUserSecAgentRequest;
use AlibabaCloud\SDK\SasClaw\V20260626\Models\ChatUserSecAgentResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class SasClaw extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('sasclaw', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Claw SSE Chat.
     *
     * @param request - ChatUserSecAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatUserSecAgentResponse
     *
     * @param ChatUserSecAgentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ChatUserSecAgentResponse
     */
    public function chatUserSecAgentWithSSE($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agent) {
            @$body['Agent'] = $request->agent;
        }

        if (null !== $request->attachmentStagingId) {
            @$body['AttachmentStagingId'] = $request->attachmentStagingId;
        }

        if (null !== $request->attachments) {
            @$body['Attachments'] = $request->attachments;
        }

        if (null !== $request->channel) {
            @$body['Channel'] = $request->channel;
        }

        if (null !== $request->executionMode) {
            @$body['ExecutionMode'] = $request->executionMode;
        }

        if (null !== $request->extraParams) {
            @$body['ExtraParams'] = $request->extraParams;
        }

        if (null !== $request->memory) {
            @$body['Memory'] = $request->memory;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->responseLanguage) {
            @$body['ResponseLanguage'] = $request->responseLanguage;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->skill) {
            @$body['Skill'] = $request->skill;
        }

        if (null !== $request->stream) {
            @$body['Stream'] = $request->stream;
        }

        if (null !== $request->talkId) {
            @$body['TalkId'] = $request->talkId;
        }

        if (null !== $request->target) {
            @$body['Target'] = $request->target;
        }

        if (null !== $request->timeZone) {
            @$body['TimeZone'] = $request->timeZone;
        }

        if (null !== $request->userInputInfo) {
            @$body['UserInputInfo'] = $request->userInputInfo;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChatUserSecAgent',
            'version' => '2026-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'string',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = $resp->event->data;

                yield ChatUserSecAgentResponse::fromMap([
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
     * Claw SSE Chat.
     *
     * @param request - ChatUserSecAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatUserSecAgentResponse
     *
     * @param ChatUserSecAgentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ChatUserSecAgentResponse
     */
    public function chatUserSecAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agent) {
            @$body['Agent'] = $request->agent;
        }

        if (null !== $request->attachmentStagingId) {
            @$body['AttachmentStagingId'] = $request->attachmentStagingId;
        }

        if (null !== $request->attachments) {
            @$body['Attachments'] = $request->attachments;
        }

        if (null !== $request->channel) {
            @$body['Channel'] = $request->channel;
        }

        if (null !== $request->executionMode) {
            @$body['ExecutionMode'] = $request->executionMode;
        }

        if (null !== $request->extraParams) {
            @$body['ExtraParams'] = $request->extraParams;
        }

        if (null !== $request->memory) {
            @$body['Memory'] = $request->memory;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        if (null !== $request->prompt) {
            @$body['Prompt'] = $request->prompt;
        }

        if (null !== $request->responseLanguage) {
            @$body['ResponseLanguage'] = $request->responseLanguage;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->skill) {
            @$body['Skill'] = $request->skill;
        }

        if (null !== $request->stream) {
            @$body['Stream'] = $request->stream;
        }

        if (null !== $request->talkId) {
            @$body['TalkId'] = $request->talkId;
        }

        if (null !== $request->target) {
            @$body['Target'] = $request->target;
        }

        if (null !== $request->timeZone) {
            @$body['TimeZone'] = $request->timeZone;
        }

        if (null !== $request->userInputInfo) {
            @$body['UserInputInfo'] = $request->userInputInfo;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChatUserSecAgent',
            'version' => '2026-06-26',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'string',
        ]);

        return ChatUserSecAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Claw SSE Chat.
     *
     * @param request - ChatUserSecAgentRequest
     *
     * @returns ChatUserSecAgentResponse
     *
     * @param ChatUserSecAgentRequest $request
     *
     * @return ChatUserSecAgentResponse
     */
    public function chatUserSecAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatUserSecAgentWithOptions($request, $runtime);
    }
}
