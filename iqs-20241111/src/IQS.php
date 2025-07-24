<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary AI搜索流式接口
     *  *
     * @param AiSearchRequest $request AiSearchRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return AiSearchResponse AiSearchResponse
     */
    public function aiSearchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->industry)) {
            $query['industry'] = $request->industry;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['sessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->timeRange)) {
            $query['timeRange'] = $request->timeRange;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary AI搜索流式接口
     *  *
     * @param AiSearchRequest $request AiSearchRequest
     *
     * @return AiSearchResponse AiSearchResponse
     */
    public function aiSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aiSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 增强版通用搜索
     *  *
     * @param GenericAdvancedSearchRequest $request GenericAdvancedSearchRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GenericAdvancedSearchResponse GenericAdvancedSearchResponse
     */
    public function genericAdvancedSearchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->industry)) {
            $query['industry'] = $request->industry;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['sessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->timeRange)) {
            $query['timeRange'] = $request->timeRange;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 增强版通用搜索
     *  *
     * @param GenericAdvancedSearchRequest $request GenericAdvancedSearchRequest
     *
     * @return GenericAdvancedSearchResponse GenericAdvancedSearchResponse
     */
    public function genericAdvancedSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->genericAdvancedSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 通用搜索
     *  *
     * @param GenericSearchRequest $request GenericSearchRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GenericSearchResponse GenericSearchResponse
     */
    public function genericSearchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enableRerank)) {
            $query['enableRerank'] = $request->enableRerank;
        }
        if (!Utils::isUnset($request->industry)) {
            $query['industry'] = $request->industry;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->returnMainText)) {
            $query['returnMainText'] = $request->returnMainText;
        }
        if (!Utils::isUnset($request->returnMarkdownText)) {
            $query['returnMarkdownText'] = $request->returnMarkdownText;
        }
        if (!Utils::isUnset($request->returnSummary)) {
            $query['returnSummary'] = $request->returnSummary;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['sessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->timeRange)) {
            $query['timeRange'] = $request->timeRange;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 通用搜索
     *  *
     * @param GenericSearchRequest $request GenericSearchRequest
     *
     * @return GenericSearchResponse GenericSearchResponse
     */
    public function genericSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->genericSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 信息查询服务接口日维度使用量查询
     *  *
     * @param GetIqsUsageRequest $request GetIqsUsageRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetIqsUsageResponse GetIqsUsageResponse
     */
    public function getIqsUsageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['endDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['startDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 信息查询服务接口日维度使用量查询
     *  *
     * @param GetIqsUsageRequest $request GetIqsUsageRequest
     *
     * @return GetIqsUsageResponse GetIqsUsageResponse
     */
    public function getIqsUsage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIqsUsageWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 通晓搜索-出海版(全球信息搜索)
     *  *
     * @param GlobalSearchRequest $request GlobalSearchRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GlobalSearchResponse GlobalSearchResponse
     */
    public function globalSearchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->timeRange)) {
            $query['timeRange'] = $request->timeRange;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => OpenApiUtilClient::query($query),
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
     * @summary 通晓搜索-出海版(全球信息搜索)
     *  *
     * @param GlobalSearchRequest $request GlobalSearchRequest
     *
     * @return GlobalSearchResponse GlobalSearchResponse
     */
    public function globalSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->globalSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 通晓统一搜索API
     *  *
     * @param UnifiedSearchRequest $request UnifiedSearchRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UnifiedSearchResponse UnifiedSearchResponse
     */
    public function unifiedSearchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => OpenApiUtilClient::parseToMap($request->body),
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
     * @summary 通晓统一搜索API
     *  *
     * @param UnifiedSearchRequest $request UnifiedSearchRequest
     *
     * @return UnifiedSearchResponse UnifiedSearchResponse
     */
    public function unifiedSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unifiedSearchWithOptions($request, $headers, $runtime);
    }
}
