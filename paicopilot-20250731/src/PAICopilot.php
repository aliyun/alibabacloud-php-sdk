<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAICopilot\V20250731;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\CreateChatRequest;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\CreateChatResponse;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\CreateSessionRequest;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\CreateSessionResponse;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\DeleteChatRequest;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\DeleteChatResponse;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\DeleteSessionRequest;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\DeleteSessionResponse;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\GetChatRequest;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\GetChatResponse;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\GetSessionRequest;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\GetSessionResponse;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\ListChatsRequest;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\ListChatsResponse;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\ListSessionsRequest;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\ListSessionsResponse;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\SearchInfoRequest;
use AlibabaCloud\SDK\PAICopilot\V20250731\Models\SearchInfoResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class PAICopilot extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('paicopilot', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * CreateChat.
     *
     * @param request - CreateChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChatResponse
     *
     * @param string            $SessionId
     * @param CreateChatRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateChatResponse
     */
    public function createChatWithSSE($SessionId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->extraData) {
            @$body['ExtraData'] = $request->extraData;
        }

        if (null !== $request->payload) {
            @$body['Payload'] = $request->payload;
        }

        if (null !== $request->question) {
            @$body['Question'] = $request->question;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateChat',
            'version' => '2025-07-31',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/sessions/' . Url::percentEncode($SessionId) . '/chats',
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

                yield CreateChatResponse::fromMap([
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
     * CreateChat.
     *
     * @param request - CreateChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChatResponse
     *
     * @param string            $SessionId
     * @param CreateChatRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateChatResponse
     */
    public function createChatWithOptions($SessionId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->extraData) {
            @$body['ExtraData'] = $request->extraData;
        }

        if (null !== $request->payload) {
            @$body['Payload'] = $request->payload;
        }

        if (null !== $request->question) {
            @$body['Question'] = $request->question;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateChat',
            'version' => '2025-07-31',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/sessions/' . Url::percentEncode($SessionId) . '/chats',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateChat.
     *
     * @param request - CreateChatRequest
     *
     * @returns CreateChatResponse
     *
     * @param string            $SessionId
     * @param CreateChatRequest $request
     *
     * @return CreateChatResponse
     */
    public function createChat($SessionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createChatWithOptions($SessionId, $request, $headers, $runtime);
    }

    /**
     * /api/v1/sessions.
     *
     * @param request - CreateSessionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSessionResponse
     *
     * @param CreateSessionRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateSessionResponse
     */
    public function createSessionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSession',
            'version' => '2025-07-31',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/sessions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * /api/v1/sessions.
     *
     * @param request - CreateSessionRequest
     *
     * @returns CreateSessionResponse
     *
     * @param CreateSessionRequest $request
     *
     * @return CreateSessionResponse
     */
    public function createSession($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSessionWithOptions($request, $headers, $runtime);
    }

    /**
     * DeleteChat.
     *
     * @param request - DeleteChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteChatResponse
     *
     * @param string            $SessionId
     * @param string            $ChatId
     * @param DeleteChatRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteChatResponse
     */
    public function deleteChatWithOptions($SessionId, $ChatId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteChat',
            'version' => '2025-07-31',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/sessions/' . Url::percentEncode($SessionId) . '/chats/' . Url::percentEncode($ChatId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeleteChat.
     *
     * @param request - DeleteChatRequest
     *
     * @returns DeleteChatResponse
     *
     * @param string            $SessionId
     * @param string            $ChatId
     * @param DeleteChatRequest $request
     *
     * @return DeleteChatResponse
     */
    public function deleteChat($SessionId, $ChatId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteChatWithOptions($SessionId, $ChatId, $request, $headers, $runtime);
    }

    /**
     * DeleteSession.
     *
     * @param request - DeleteSessionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSessionResponse
     *
     * @param string               $SessionId
     * @param DeleteSessionRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteSessionResponse
     */
    public function deleteSessionWithOptions($SessionId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteSession',
            'version' => '2025-07-31',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/sessions/' . Url::percentEncode($SessionId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeleteSession.
     *
     * @param request - DeleteSessionRequest
     *
     * @returns DeleteSessionResponse
     *
     * @param string               $SessionId
     * @param DeleteSessionRequest $request
     *
     * @return DeleteSessionResponse
     */
    public function deleteSession($SessionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSessionWithOptions($SessionId, $request, $headers, $runtime);
    }

    /**
     * GetChat.
     *
     * @param request - GetChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChatResponse
     *
     * @param string         $ChatId
     * @param string         $SessionId
     * @param GetChatRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetChatResponse
     */
    public function getChatWithOptions($ChatId, $SessionId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetChat',
            'version' => '2025-07-31',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/sessions/' . Url::percentEncode($SessionId) . '/chats/' . Url::percentEncode($ChatId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetChat.
     *
     * @param request - GetChatRequest
     *
     * @returns GetChatResponse
     *
     * @param string         $ChatId
     * @param string         $SessionId
     * @param GetChatRequest $request
     *
     * @return GetChatResponse
     */
    public function getChat($ChatId, $SessionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getChatWithOptions($ChatId, $SessionId, $request, $headers, $runtime);
    }

    /**
     * GetSession.
     *
     * @param request - GetSessionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSessionResponse
     *
     * @param string            $SessionId
     * @param GetSessionRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetSessionResponse
     */
    public function getSessionWithOptions($SessionId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSession',
            'version' => '2025-07-31',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/sessions/' . Url::percentEncode($SessionId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetSession.
     *
     * @param request - GetSessionRequest
     *
     * @returns GetSessionResponse
     *
     * @param string            $SessionId
     * @param GetSessionRequest $request
     *
     * @return GetSessionResponse
     */
    public function getSession($SessionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSessionWithOptions($SessionId, $request, $headers, $runtime);
    }

    /**
     * ListChats.
     *
     * @param request - ListChatsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChatsResponse
     *
     * @param string           $SessionId
     * @param ListChatsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListChatsResponse
     */
    public function listChatsWithOptions($SessionId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->verbose) {
            @$query['Verbose'] = $request->verbose;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListChats',
            'version' => '2025-07-31',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/sessions/' . Url::percentEncode($SessionId) . '/chats',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListChatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListChats.
     *
     * @param request - ListChatsRequest
     *
     * @returns ListChatsResponse
     *
     * @param string           $SessionId
     * @param ListChatsRequest $request
     *
     * @return ListChatsResponse
     */
    public function listChats($SessionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChatsWithOptions($SessionId, $request, $headers, $runtime);
    }

    /**
     * GetChat.
     *
     * @param request - ListSessionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSessionsResponse
     *
     * @param ListSessionsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListSessionsResponse
     */
    public function listSessionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSessions',
            'version' => '2025-07-31',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/sessions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetChat.
     *
     * @param request - ListSessionsRequest
     *
     * @returns ListSessionsResponse
     *
     * @param ListSessionsRequest $request
     *
     * @return ListSessionsResponse
     */
    public function listSessions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSessionsWithOptions($request, $headers, $runtime);
    }

    /**
     * /api/v1/sessions.
     *
     * @param request - SearchInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchInfoResponse
     *
     * @param SearchInfoRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return SearchInfoResponse
     */
    public function searchInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->knowledgeBaseFilters) {
            @$body['KnowledgeBaseFilters'] = $request->knowledgeBaseFilters;
        }

        if (null !== $request->webFilters) {
            @$body['WebFilters'] = $request->webFilters;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchInfo',
            'version' => '2025-07-31',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/searches',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * /api/v1/sessions.
     *
     * @param request - SearchInfoRequest
     *
     * @returns SearchInfoResponse
     *
     * @param SearchInfoRequest $request
     *
     * @return SearchInfoResponse
     */
    public function searchInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchInfoWithOptions($request, $headers, $runtime);
    }
}
