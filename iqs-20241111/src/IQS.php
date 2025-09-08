<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\IQS\V20241111\Models\AiSearchRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\AiSearchResponse;
use AlibabaCloud\SDK\IQS\V20241111\Models\GenericAdvancedSearchRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\GenericAdvancedSearchResponse;
use AlibabaCloud\SDK\IQS\V20241111\Models\GenericSearchRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\GenericSearchResponse;
use AlibabaCloud\SDK\IQS\V20241111\Models\GetIqsUsageRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\GetIqsUsageResponse;
use AlibabaCloud\SDK\IQS\V20241111\Models\GlobalSearchRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\GlobalSearchResponse;
use AlibabaCloud\SDK\IQS\V20241111\Models\UnifiedSearchRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\UnifiedSearchResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class IQS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('iqs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * AI搜索流式接口.
     *
     * @param request - AiSearchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AiSearchResponse
     *
     * @param AiSearchRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return AiSearchResponse
     */
    public function aiSearchWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->industry) {
            @$query['industry'] = $request->industry;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->sessionId) {
            @$query['sessionId'] = $request->sessionId;
        }

        if (null !== $request->timeRange) {
            @$query['timeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AiSearch',
            'version' => '2024-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-entry/v3/linkedRetrieval/commands/aiSearch',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            $data = json_decode($resp->event->data, true);

            yield AiSearchResponse::fromMap([
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
     * AI搜索流式接口.
     *
     * @param request - AiSearchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AiSearchResponse
     *
     * @param AiSearchRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return AiSearchResponse
     */
    public function aiSearchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->industry) {
            @$query['industry'] = $request->industry;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->sessionId) {
            @$query['sessionId'] = $request->sessionId;
        }

        if (null !== $request->timeRange) {
            @$query['timeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AiSearch',
            'version' => '2024-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-entry/v3/linkedRetrieval/commands/aiSearch',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AiSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AI搜索流式接口.
     *
     * @param request - AiSearchRequest
     *
     * @returns AiSearchResponse
     *
     * @param AiSearchRequest $request
     *
     * @return AiSearchResponse
     */
    public function aiSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aiSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * 增强版通用搜索.
     *
     * @param request - GenericAdvancedSearchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenericAdvancedSearchResponse
     *
     * @param GenericAdvancedSearchRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GenericAdvancedSearchResponse
     */
    public function genericAdvancedSearchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->industry) {
            @$query['industry'] = $request->industry;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->sessionId) {
            @$query['sessionId'] = $request->sessionId;
        }

        if (null !== $request->timeRange) {
            @$query['timeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenericAdvancedSearch',
            'version' => '2024-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-entry/v2/linkedRetrieval/commands/genericAdvancedSearch',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GenericAdvancedSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 增强版通用搜索.
     *
     * @param request - GenericAdvancedSearchRequest
     *
     * @returns GenericAdvancedSearchResponse
     *
     * @param GenericAdvancedSearchRequest $request
     *
     * @return GenericAdvancedSearchResponse
     */
    public function genericAdvancedSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->genericAdvancedSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * 通用搜索.
     *
     * @param request - GenericSearchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenericSearchResponse
     *
     * @param GenericSearchRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GenericSearchResponse
     */
    public function genericSearchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enableRerank) {
            @$query['enableRerank'] = $request->enableRerank;
        }

        if (null !== $request->industry) {
            @$query['industry'] = $request->industry;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->returnMainText) {
            @$query['returnMainText'] = $request->returnMainText;
        }

        if (null !== $request->returnMarkdownText) {
            @$query['returnMarkdownText'] = $request->returnMarkdownText;
        }

        if (null !== $request->returnSummary) {
            @$query['returnSummary'] = $request->returnSummary;
        }

        if (null !== $request->sessionId) {
            @$query['sessionId'] = $request->sessionId;
        }

        if (null !== $request->timeRange) {
            @$query['timeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenericSearch',
            'version' => '2024-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-entry/v2/linkedRetrieval/commands/genericSearch',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GenericSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通用搜索.
     *
     * @param request - GenericSearchRequest
     *
     * @returns GenericSearchResponse
     *
     * @param GenericSearchRequest $request
     *
     * @return GenericSearchResponse
     */
    public function genericSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->genericSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * 信息查询服务接口日维度使用量查询.
     *
     * @param request - GetIqsUsageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIqsUsageResponse
     *
     * @param GetIqsUsageRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetIqsUsageResponse
     */
    public function getIqsUsageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['endDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['startDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIqsUsage',
            'version' => '2024-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-admin/v1/iqs/usage',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIqsUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 信息查询服务接口日维度使用量查询.
     *
     * @param request - GetIqsUsageRequest
     *
     * @returns GetIqsUsageResponse
     *
     * @param GetIqsUsageRequest $request
     *
     * @return GetIqsUsageResponse
     */
    public function getIqsUsage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIqsUsageWithOptions($request, $headers, $runtime);
    }

    /**
     * 通晓搜索-出海版(全球信息搜索).
     *
     * @param request - GlobalSearchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GlobalSearchResponse
     *
     * @param GlobalSearchRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GlobalSearchResponse
     */
    public function globalSearchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->timeRange) {
            @$query['timeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GlobalSearch',
            'version' => '2024-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-entry/v1/iqs/search/global',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GlobalSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通晓搜索-出海版(全球信息搜索).
     *
     * @param request - GlobalSearchRequest
     *
     * @returns GlobalSearchResponse
     *
     * @param GlobalSearchRequest $request
     *
     * @return GlobalSearchResponse
     */
    public function globalSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->globalSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * 通晓统一搜索API.
     *
     * @param request - UnifiedSearchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnifiedSearchResponse
     *
     * @param UnifiedSearchRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UnifiedSearchResponse
     */
    public function unifiedSearchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UnifiedSearch',
            'version' => '2024-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-entry/v1/iqs/search/unified',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnifiedSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通晓统一搜索API.
     *
     * @param request - UnifiedSearchRequest
     *
     * @returns UnifiedSearchResponse
     *
     * @param UnifiedSearchRequest $request
     *
     * @return UnifiedSearchResponse
     */
    public function unifiedSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unifiedSearchWithOptions($request, $headers, $runtime);
    }
}
