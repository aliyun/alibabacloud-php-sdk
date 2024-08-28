<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\TrafficFxOpen\V20240815;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\TrafficFxOpen\V20240815\Models\GetTokenRequest;
use AlibabaCloud\SDK\TrafficFxOpen\V20240815\Models\GetTokenResponse;
use AlibabaCloud\SDK\TrafficFxOpen\V20240815\Models\SearchHeaders;
use AlibabaCloud\SDK\TrafficFxOpen\V20240815\Models\SearchRequest;
use AlibabaCloud\SDK\TrafficFxOpen\V20240815\Models\SearchResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class TrafficFxOpen extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('trafficfxopen', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 创建token
     *  *
     * @param GetTokenRequest $request GetTokenRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTokenResponse GetTokenResponse
     */
    public function getTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appKey)) {
            $query['appKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->appSecret)) {
            $query['appSecret'] = $request->appSecret;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetToken',
            'version'     => '2024-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/distribution/trade/getToken',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建token
     *  *
     * @param GetTokenRequest $request GetTokenRequest
     *
     * @return GetTokenResponse GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 分销报价接口
     *  *
     * @param SearchRequest  $request SearchRequest
     * @param SearchHeaders  $headers SearchHeaders
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchResponse SearchResponse
     */
    public function searchWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->scene)) {
            $body['scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->searchParam)) {
            $body['searchParam'] = $request->searchParam;
        }
        if (!Utils::isUnset($request->source)) {
            $body['source'] = $request->source;
        }
        if (!Utils::isUnset($request->terminal)) {
            $body['terminal'] = $request->terminal;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAirticketAccessToken)) {
            $realHeaders['xAcsAirticketAccessToken'] = Utils::toJSONString($headers->xAcsAirticketAccessToken);
        }
        if (!Utils::isUnset($headers->xAcsAirticketLanguage)) {
            $realHeaders['xAcsAirticketLanguage'] = Utils::toJSONString($headers->xAcsAirticketLanguage);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Search',
            'version'     => '2024-08-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1/distribution/trade/search',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分销报价接口
     *  *
     * @param SearchRequest $request SearchRequest
     *
     * @return SearchResponse SearchResponse
     */
    public function search($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SearchHeaders([]);

        return $this->searchWithOptions($request, $headers, $runtime);
    }
}
