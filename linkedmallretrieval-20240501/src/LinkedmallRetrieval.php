<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkedmallRetrieval\V20240501;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\LinkedmallRetrieval\V20240501\Models\AISearchV2Request;
use AlibabaCloud\SDK\LinkedmallRetrieval\V20240501\Models\AISearchV2Response;
use AlibabaCloud\SDK\LinkedmallRetrieval\V20240501\Models\GenericSearchRequest;
use AlibabaCloud\SDK\LinkedmallRetrieval\V20240501\Models\GenericSearchResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class LinkedmallRetrieval extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('linkedmallretrieval', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 提供通用检索与检索后处理的多阶段优化结果，为开放域QA提供信源
     *  *
     * @param AISearchV2Request $request AISearchV2Request
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return AISearchV2Response AISearchV2Response
     */
    public function aISearchV2WithOptions($request, $headers, $runtime)
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
            'action'      => 'AISearchV2',
            'version'     => '2024-05-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/linked-retrieval/linked-retrieval-entry/v2/linkedRetrieval/commands/aiSearch',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AISearchV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提供通用检索与检索后处理的多阶段优化结果，为开放域QA提供信源
     *  *
     * @param AISearchV2Request $request AISearchV2Request
     *
     * @return AISearchV2Response AISearchV2Response
     */
    public function aISearchV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->aISearchV2WithOptions($request, $headers, $runtime);
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
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
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
            'version'     => '2024-05-01',
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
