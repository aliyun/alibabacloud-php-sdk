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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AiSearch',
            'version'     => '2024-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/linked-retrieval/linked-retrieval-entry/v3/linkedRetrieval/commands/aiSearch',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenericAdvancedSearch',
            'version'     => '2024-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/linked-retrieval/linked-retrieval-entry/v2/linkedRetrieval/commands/genericAdvancedSearch',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
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
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenericSearch',
            'version'     => '2024-11-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/linked-retrieval/linked-retrieval-entry/v2/linkedRetrieval/commands/genericSearch',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
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
}
