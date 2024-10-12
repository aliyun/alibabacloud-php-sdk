<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\IQS\V20240712\Models\QueryAttractionsRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\QueryAttractionsResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\QueryHotelsRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\QueryHotelsResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\QueryRestaurantsRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\QueryRestaurantsResponse;
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
     * @summary 景点查询
     *  *
     * @param QueryAttractionsRequest $request QueryAttractionsRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAttractionsResponse QueryAttractionsResponse
     */
    public function queryAttractionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'QueryAttractions',
            'version'     => '2024-07-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/amap-function-call-agent/iqs-agent-service/v1/nl/attractions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryAttractionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 景点查询
     *  *
     * @param QueryAttractionsRequest $request QueryAttractionsRequest
     *
     * @return QueryAttractionsResponse QueryAttractionsResponse
     */
    public function queryAttractions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAttractionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 餐厅查询
     *  *
     * @param QueryHotelsRequest $request QueryHotelsRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryHotelsResponse QueryHotelsResponse
     */
    public function queryHotelsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'QueryHotels',
            'version'     => '2024-07-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/amap-function-call-agent/iqs-agent-service/v1/nl/hotels',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryHotelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 餐厅查询
     *  *
     * @param QueryHotelsRequest $request QueryHotelsRequest
     *
     * @return QueryHotelsResponse QueryHotelsResponse
     */
    public function queryHotels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryHotelsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 餐厅查询
     *  *
     * @param QueryRestaurantsRequest $request QueryRestaurantsRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryRestaurantsResponse QueryRestaurantsResponse
     */
    public function queryRestaurantsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'QueryRestaurants',
            'version'     => '2024-07-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/amap-function-call-agent/iqs-agent-service/v1/nl/restaurants',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryRestaurantsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 餐厅查询
     *  *
     * @param QueryRestaurantsRequest $request QueryRestaurantsRequest
     *
     * @return QueryRestaurantsResponse QueryRestaurantsResponse
     */
    public function queryRestaurants($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryRestaurantsWithOptions($request, $headers, $runtime);
    }
}
