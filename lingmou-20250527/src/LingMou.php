<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CloseChatInstanceSessionsRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CloseChatInstanceSessionsResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CloseChatInstanceSessionsShrinkRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatSessionRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateChatSessionResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\QueryChatInstanceSessionsRequest;
use AlibabaCloud\SDK\LingMou\V20250527\Models\QueryChatInstanceSessionsResponse;
use AlibabaCloud\SDK\LingMou\V20250527\Models\QueryChatInstanceSessionsShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class LingMou extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('lingmou', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 关闭会话实例session.
     *
     * @param tmpReq - CloseChatInstanceSessionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseChatInstanceSessionsResponse
     *
     * @param string                           $instanceId
     * @param CloseChatInstanceSessionsRequest $tmpReq
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CloseChatInstanceSessionsResponse
     */
    public function closeChatInstanceSessionsWithOptions($instanceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CloseChatInstanceSessionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sessionIds) {
            $request->sessionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sessionIds, 'sessionIds', 'json');
        }

        $body = [];
        if (null !== $request->sessionIdsShrink) {
            @$body['sessionIds'] = $request->sessionIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CloseChatInstanceSessions',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/chat/instances/' . Url::percentEncode($instanceId) . '/sessions/close',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloseChatInstanceSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关闭会话实例session.
     *
     * @param request - CloseChatInstanceSessionsRequest
     *
     * @returns CloseChatInstanceSessionsResponse
     *
     * @param string                           $instanceId
     * @param CloseChatInstanceSessionsRequest $request
     *
     * @return CloseChatInstanceSessionsResponse
     */
    public function closeChatInstanceSessions($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->closeChatInstanceSessionsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * 创建数字人会话.
     *
     * @param request - CreateChatSessionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChatSessionResponse
     *
     * @param string                   $id
     * @param CreateChatSessionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateChatSessionResponse
     */
    public function createChatSessionWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        if (null !== $request->license) {
            @$query['license'] = $request->license;
        }

        if (null !== $request->platform) {
            @$query['platform'] = $request->platform;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateChatSession',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/chat/init/' . Url::percentEncode($id) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateChatSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建数字人会话.
     *
     * @param request - CreateChatSessionRequest
     *
     * @returns CreateChatSessionResponse
     *
     * @param string                   $id
     * @param CreateChatSessionRequest $request
     *
     * @return CreateChatSessionResponse
     */
    public function createChatSession($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createChatSessionWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * 查询会话实例session.
     *
     * @param tmpReq - QueryChatInstanceSessionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryChatInstanceSessionsResponse
     *
     * @param string                           $instanceId
     * @param QueryChatInstanceSessionsRequest $tmpReq
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryChatInstanceSessionsResponse
     */
    public function queryChatInstanceSessionsWithOptions($instanceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryChatInstanceSessionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sessionIds) {
            $request->sessionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sessionIds, 'sessionIds', 'json');
        }

        $query = [];
        if (null !== $request->sessionIdsShrink) {
            @$query['sessionIds'] = $request->sessionIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryChatInstanceSessions',
            'version' => '2025-05-27',
            'protocol' => 'HTTPS',
            'pathname' => '/openapi/chat/instances/' . Url::percentEncode($instanceId) . '/sessions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryChatInstanceSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询会话实例session.
     *
     * @param request - QueryChatInstanceSessionsRequest
     *
     * @returns QueryChatInstanceSessionsResponse
     *
     * @param string                           $instanceId
     * @param QueryChatInstanceSessionsRequest $request
     *
     * @return QueryChatInstanceSessionsResponse
     */
    public function queryChatInstanceSessions($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryChatInstanceSessionsWithOptions($instanceId, $request, $headers, $runtime);
    }
}
