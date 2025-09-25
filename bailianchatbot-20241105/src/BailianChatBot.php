<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianChatBot\V20241105;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\BailianChatBot\V20241105\Models\SseChatRequest;
use AlibabaCloud\SDK\BailianChatBot\V20241105\Models\SseChatResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class BailianChatBot extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('bailianchatbot', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * SSE问答接口.
     *
     * @param request - SseChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SseChatResponse
     *
     * @param SseChatRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return SseChatResponse
     */
    public function sseChatWithSSE($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->command) {
            @$query['Command'] = $request->command;
        }

        if (null !== $request->senderId) {
            @$query['SenderId'] = $request->senderId;
        }

        if (null !== $request->senderNick) {
            @$query['SenderNick'] = $request->senderNick;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->utterance) {
            @$query['Utterance'] = $request->utterance;
        }

        if (null !== $request->vendorParam) {
            @$query['VendorParam'] = $request->vendorParam;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SseChat',
            'version' => '2024-11-05',
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
            $data = json_decode($resp->event->data, true);

            yield SseChatResponse::fromMap([
                'statusCode' => $resp->statusCode,
                'headers' => $resp->headers,
                'body' => Dara::merge([
                    'RequestId' => $resp->event->id,
                    'Message' => $resp->event->event,
                ], $data),
            ]);
        }
    }

    /**
     * SSE问答接口.
     *
     * @param request - SseChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SseChatResponse
     *
     * @param SseChatRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return SseChatResponse
     */
    public function sseChatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->command) {
            @$query['Command'] = $request->command;
        }

        if (null !== $request->senderId) {
            @$query['SenderId'] = $request->senderId;
        }

        if (null !== $request->senderNick) {
            @$query['SenderNick'] = $request->senderNick;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->utterance) {
            @$query['Utterance'] = $request->utterance;
        }

        if (null !== $request->vendorParam) {
            @$query['VendorParam'] = $request->vendorParam;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SseChat',
            'version' => '2024-11-05',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SseChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * SSE问答接口.
     *
     * @param request - SseChatRequest
     *
     * @returns SseChatResponse
     *
     * @param SseChatRequest $request
     *
     * @return SseChatResponse
     */
    public function sseChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sseChatWithOptions($request, $runtime);
    }
}
