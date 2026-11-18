<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\IQS\V20241111\Models\AiSearchRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\AiSearchResponse;
use AlibabaCloud\SDK\IQS\V20241111\Models\CommonQueryBySceneRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\CommonQueryBySceneResponse;
use AlibabaCloud\SDK\IQS\V20241111\Models\GenericAdvancedSearchRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\GenericAdvancedSearchResponse;
use AlibabaCloud\SDK\IQS\V20241111\Models\GenericSearchRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\GenericSearchResponse;
use AlibabaCloud\SDK\IQS\V20241111\Models\GenericSearchShrinkRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\GetIqsUsageRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\GetIqsUsageResponse;
use AlibabaCloud\SDK\IQS\V20241111\Models\GlobalSearchRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\GlobalSearchResponse;
use AlibabaCloud\SDK\IQS\V20241111\Models\MedicalAnswerRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\MedicalAnswerResponse;
use AlibabaCloud\SDK\IQS\V20241111\Models\MedicalKnowledgeRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\MedicalKnowledgeResponse;
use AlibabaCloud\SDK\IQS\V20241111\Models\MultimodalSearchRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\MultimodalSearchResponse;
use AlibabaCloud\SDK\IQS\V20241111\Models\OmniAnswerRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\OmniAnswerResponse;
use AlibabaCloud\SDK\IQS\V20241111\Models\ReadPageBasicRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\ReadPageBasicResponse;
use AlibabaCloud\SDK\IQS\V20241111\Models\ReadPageScrapeRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\ReadPageScrapeResponse;
use AlibabaCloud\SDK\IQS\V20241111\Models\UnifiedSearchRequest;
use AlibabaCloud\SDK\IQS\V20241111\Models\UnifiedSearchResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class IQS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'IQS';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
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
     * Describes how to invoke the multi-stage streaming API V3 for general search by using the Alibaba Cloud OpenAPI SDK and provides parameter descriptions.
     *
     * @remarks
     * Provides streaming results in two stages, common_search and post_retrieval, for customers to use on demand. General search results (common_search): the original search results. Covers key fields such as web page title, dynamic summary, body text, source website, and publish time. Post-retrieval processing (post_retrieval): reranks and filters the common_search results from the previous stage by using a rerank model. The mean average precision (mAP) metric for context relevancy of search results is improved by about 5%, and the latency is increased by about 110 ms.
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
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield AiSearchResponse::fromMap([
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
     * Describes how to invoke the multi-stage streaming API V3 for general search by using the Alibaba Cloud OpenAPI SDK and provides parameter descriptions.
     *
     * @remarks
     * Provides streaming results in two stages, common_search and post_retrieval, for customers to use on demand. General search results (common_search): the original search results. Covers key fields such as web page title, dynamic summary, body text, source website, and publish time. Post-retrieval processing (post_retrieval): reranks and filters the common_search results from the previous stage by using a rerank model. The mean average precision (mAP) metric for context relevancy of search results is improved by about 5%, and the latency is increased by about 110 ms.
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
     * Describes how to invoke the multi-stage streaming API V3 for general search by using the Alibaba Cloud OpenAPI SDK and provides parameter descriptions.
     *
     * @remarks
     * Provides streaming results in two stages, common_search and post_retrieval, for customers to use on demand. General search results (common_search): the original search results. Covers key fields such as web page title, dynamic summary, body text, source website, and publish time. Post-retrieval processing (post_retrieval): reranks and filters the common_search results from the previous stage by using a rerank model. The mean average precision (mAP) metric for context relevancy of search results is improved by about 5%, and the latency is increased by about 110 ms.
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
     * Performs general natural language queries.
     *
     * @remarks
     * The general API for natural language search.
     *
     * @param request - CommonQueryBySceneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CommonQueryBySceneResponse
     *
     * @param CommonQueryBySceneRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CommonQueryBySceneResponse
     */
    public function commonQueryBySceneWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CommonQueryByScene',
            'version' => '2024-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/amap-function-call-agent/iqs-agent-service/v2/nl/common',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CommonQueryBySceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs general natural language queries.
     *
     * @remarks
     * The general API for natural language search.
     *
     * @param request - CommonQueryBySceneRequest
     *
     * @returns CommonQueryBySceneResponse
     *
     * @param CommonQueryBySceneRequest $request
     *
     * @return CommonQueryBySceneResponse
     */
    public function commonQueryByScene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->commonQueryBySceneWithOptions($request, $headers, $runtime);
    }

    /**
     * This topic describes how to call the GenericAdvancedSearch operation by using Alibaba Cloud OpenAPI SDKs and provides parameter descriptions. Compared with GenericSearch, GenericAdvancedSearch provides better recall from authoritative websites and returns up to 40 results, delivering more authoritative and diverse data. The response parameters and format of the enhanced operation are the same as those of GenericAdvancedSearch.
     *
     * @remarks
     * GenericAdvancedSearch is currently in the testing phase. New specifications will be available for purchase in the future.
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
     * This topic describes how to call the GenericAdvancedSearch operation by using Alibaba Cloud OpenAPI SDKs and provides parameter descriptions. Compared with GenericSearch, GenericAdvancedSearch provides better recall from authoritative websites and returns up to 40 results, delivering more authoritative and diverse data. The response parameters and format of the enhanced operation are the same as those of GenericAdvancedSearch.
     *
     * @remarks
     * GenericAdvancedSearch is currently in the testing phase. New specifications will be available for purchase in the future.
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
     * Performs a general search.
     *
     * @param tmpReq - GenericSearchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenericSearchResponse
     *
     * @param GenericSearchRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GenericSearchResponse
     */
    public function genericSearchWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GenericSearchShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->advancedParams) {
            $request->advancedParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->advancedParams, 'advancedParams', 'json');
        }

        $query = [];
        if (null !== $request->advancedParamsShrink) {
            @$query['advancedParams'] = $request->advancedParamsShrink;
        }

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

        if (null !== $request->returnRichMainBody) {
            @$query['returnRichMainBody'] = $request->returnRichMainBody;
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
     * Performs a general search.
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
     * Queries the daily usage of the information query service API.
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
        if (null !== $request->callerId) {
            @$query['callerId'] = $request->callerId;
        }

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
     * Queries the daily usage of the information query service API.
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
     * Searches for global information by using the Global Edition search.
     *
     * @remarks
     * This topic describes how to use the Global Edition search (GlobalSearch) and provides parameter descriptions.
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
     * Searches for global information by using the Global Edition search.
     *
     * @remarks
     * This topic describes how to use the Global Edition search (GlobalSearch) and provides parameter descriptions.
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
     * Provides medical Q&A.
     *
     * @param request - MedicalAnswerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MedicalAnswerResponse
     *
     * @param MedicalAnswerRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return MedicalAnswerResponse
     */
    public function medicalAnswerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'MedicalAnswer',
            'version' => '2024-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-entry/v1/iqs/domain/medical/answer',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MedicalAnswerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides medical Q&A.
     *
     * @param request - MedicalAnswerRequest
     *
     * @returns MedicalAnswerResponse
     *
     * @param MedicalAnswerRequest $request
     *
     * @return MedicalAnswerResponse
     */
    public function medicalAnswer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->medicalAnswerWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the health graph.
     *
     * @param request - MedicalKnowledgeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MedicalKnowledgeResponse
     *
     * @param MedicalKnowledgeRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return MedicalKnowledgeResponse
     */
    public function medicalKnowledgeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'MedicalKnowledge',
            'version' => '2024-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-entry/v1/iqs/domain/medical/know',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MedicalKnowledgeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the health graph.
     *
     * @param request - MedicalKnowledgeRequest
     *
     * @returns MedicalKnowledgeResponse
     *
     * @param MedicalKnowledgeRequest $request
     *
     * @return MedicalKnowledgeResponse
     */
    public function medicalKnowledge($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->medicalKnowledgeWithOptions($request, $headers, $runtime);
    }

    /**
     * Performs a multimodal search.
     *
     * @param request - MultimodalSearchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MultimodalSearchResponse
     *
     * @param MultimodalSearchRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return MultimodalSearchResponse
     */
    public function multimodalSearchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'MultimodalSearch',
            'version' => '2024-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-entry/v1/iqs/multimodal/unified',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MultimodalSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a multimodal search.
     *
     * @param request - MultimodalSearchRequest
     *
     * @returns MultimodalSearchResponse
     *
     * @param MultimodalSearchRequest $request
     *
     * @return MultimodalSearchResponse
     */
    public function multimodalSearch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->multimodalSearchWithOptions($request, $headers, $runtime);
    }

    /**
     * This topic describes the SearchStream streaming API for intelligent search and AI chat. Based on retrieval augmented generation (RAG) and large language models, this API accepts natural language questions from users and can automatically execute intent recognition, query rewrite, and content generation, and retrieve data from multiple sources. The API uses the Server-Sent Events (SSE) streaming protocol to return data, supporting real-time output of the infer status, reference sources, and token-by-token generated answers. This API is suitable for AI chat and search scenarios that require low latency and high interpretability.
     *
     * @param request - OmniAnswerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OmniAnswerResponse
     *
     * @param OmniAnswerRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return OmniAnswerResponse
     */
    public function omniAnswerWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'OmniAnswer',
            'version' => '2024-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-entry/v1/iqs/answer/omni/search',
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

                yield OmniAnswerResponse::fromMap([
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
     * This topic describes the SearchStream streaming API for intelligent search and AI chat. Based on retrieval augmented generation (RAG) and large language models, this API accepts natural language questions from users and can automatically execute intent recognition, query rewrite, and content generation, and retrieve data from multiple sources. The API uses the Server-Sent Events (SSE) streaming protocol to return data, supporting real-time output of the infer status, reference sources, and token-by-token generated answers. This API is suitable for AI chat and search scenarios that require low latency and high interpretability.
     *
     * @param request - OmniAnswerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OmniAnswerResponse
     *
     * @param OmniAnswerRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return OmniAnswerResponse
     */
    public function omniAnswerWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'OmniAnswer',
            'version' => '2024-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-entry/v1/iqs/answer/omni/search',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);

        return OmniAnswerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This topic describes the SearchStream streaming API for intelligent search and AI chat. Based on retrieval augmented generation (RAG) and large language models, this API accepts natural language questions from users and can automatically execute intent recognition, query rewrite, and content generation, and retrieve data from multiple sources. The API uses the Server-Sent Events (SSE) streaming protocol to return data, supporting real-time output of the infer status, reference sources, and token-by-token generated answers. This API is suitable for AI chat and search scenarios that require low latency and high interpretability.
     *
     * @param request - OmniAnswerRequest
     *
     * @returns OmniAnswerResponse
     *
     * @param OmniAnswerRequest $request
     *
     * @return OmniAnswerResponse
     */
    public function omniAnswer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->omniAnswerWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves HTML and parses static web page content.
     *
     * @remarks
     * 1. A request is counted as valid when the HTTP response code of the destination URL is less than 500.
     * 2. If the content type in the response header of the destination URL is application/pdf, the system automatically triggers PDF parsing (the maximum PDF size is 20 MB). This operation is counted as an additional valid request.
     * 3. Trial instructions: During the trial period, the API rate limit is 5 QPS, and the trial quota is 1,000 requests per 30 days.
     *
     * @param request - ReadPageBasicRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadPageBasicResponse
     *
     * @param ReadPageBasicRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ReadPageBasicResponse
     */
    public function readPageBasicWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'ReadPageBasic',
            'version' => '2024-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-entry/v1/iqs/readpage/basic',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReadPageBasicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves HTML and parses static web page content.
     *
     * @remarks
     * 1. A request is counted as valid when the HTTP response code of the destination URL is less than 500.
     * 2. If the content type in the response header of the destination URL is application/pdf, the system automatically triggers PDF parsing (the maximum PDF size is 20 MB). This operation is counted as an additional valid request.
     * 3. Trial instructions: During the trial period, the API rate limit is 5 QPS, and the trial quota is 1,000 requests per 30 days.
     *
     * @param request - ReadPageBasicRequest
     *
     * @returns ReadPageBasicResponse
     *
     * @param ReadPageBasicRequest $request
     *
     * @return ReadPageBasicResponse
     */
    public function readPageBasic($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->readPageBasicWithOptions($request, $headers, $runtime);
    }

    /**
     * Reads HTML and parses web page content in a browser sandbox environment. The operation starts parsing after the resources on the target page are fully loaded. You can adjust the maximum wait time by using the pageTimeout parameter. The overall execution duration is significantly affected by the resource loading status of the target site.
     *
     * @remarks
     * 1. A request is counted as a valid request when the HTTP status code of the target URL is less than 500.
     * 2. If the Content-Type in the response header of the target URL is application/pdf, the system automatically triggers PDF parsing (the maximum size of a PDF file that can be processed is 20 MB). This operation is counted as an additional valid request.
     * 3. Trial description: During the trial period, the API operation is limited to 5 QPS. The trial quota is 1,000 requests per 30 days.
     *
     * @param request - ReadPageScrapeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadPageScrapeResponse
     *
     * @param ReadPageScrapeRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ReadPageScrapeResponse
     */
    public function readPageScrapeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'ReadPageScrape',
            'version' => '2024-11-11',
            'protocol' => 'HTTPS',
            'pathname' => '/linked-retrieval/linked-retrieval-entry/v1/iqs/readpage/scrape',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReadPageScrapeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reads HTML and parses web page content in a browser sandbox environment. The operation starts parsing after the resources on the target page are fully loaded. You can adjust the maximum wait time by using the pageTimeout parameter. The overall execution duration is significantly affected by the resource loading status of the target site.
     *
     * @remarks
     * 1. A request is counted as a valid request when the HTTP status code of the target URL is less than 500.
     * 2. If the Content-Type in the response header of the target URL is application/pdf, the system automatically triggers PDF parsing (the maximum size of a PDF file that can be processed is 20 MB). This operation is counted as an additional valid request.
     * 3. Trial description: During the trial period, the API operation is limited to 5 QPS. The trial quota is 1,000 requests per 30 days.
     *
     * @param request - ReadPageScrapeRequest
     *
     * @returns ReadPageScrapeResponse
     *
     * @param ReadPageScrapeRequest $request
     *
     * @return ReadPageScrapeResponse
     */
    public function readPageScrape($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->readPageScrapeWithOptions($request, $headers, $runtime);
    }

    /**
     * Provides the Tongxiao unified search API to quickly and easily integrate web-wide general search capabilities.
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
     * Provides the Tongxiao unified search API to quickly and easily integrate web-wide general search capabilities.
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
