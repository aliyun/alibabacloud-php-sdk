<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIEarthMeteorology\V20220118;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\AIEarthMeteorology\V20220118\Models\DailyWeatherQueryRequest;
use AlibabaCloud\SDK\AIEarthMeteorology\V20220118\Models\DailyWeatherQueryResponse;
use AlibabaCloud\SDK\AIEarthMeteorology\V20220118\Models\GridWeatherQueryRequest;
use AlibabaCloud\SDK\AIEarthMeteorology\V20220118\Models\GridWeatherQueryResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class AIEarthMeteorology extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aiearth-meteorology', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DailyWeatherQueryRequest $request
     *
     * @return DailyWeatherQueryResponse
     */
    public function dailyWeatherQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dailyWeatherQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DailyWeatherQueryRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DailyWeatherQueryResponse
     */
    public function dailyWeatherQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->element)) {
            $query['element'] = $request->element;
        }
        if (!Utils::isUnset($request->forecastTimestamp)) {
            $query['forecastTimestamp'] = $request->forecastTimestamp;
        }
        if (!Utils::isUnset($request->latitude)) {
            $query['latitude'] = $request->latitude;
        }
        if (!Utils::isUnset($request->location)) {
            $query['location'] = $request->location;
        }
        if (!Utils::isUnset($request->longitude)) {
            $query['longitude'] = $request->longitude;
        }
        if (!Utils::isUnset($request->product)) {
            $query['product'] = $request->product;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DailyWeatherQuery',
            'version'     => '2022-01-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/weather/v2/daily',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DailyWeatherQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GridWeatherQueryRequest $request
     *
     * @return GridWeatherQueryResponse
     */
    public function gridWeatherQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->gridWeatherQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GridWeatherQueryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GridWeatherQueryResponse
     */
    public function gridWeatherQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->element)) {
            $query['element'] = $request->element;
        }
        if (!Utils::isUnset($request->forecastTimestamp)) {
            $query['forecastTimestamp'] = $request->forecastTimestamp;
        }
        if (!Utils::isUnset($request->latitude)) {
            $query['latitude'] = $request->latitude;
        }
        if (!Utils::isUnset($request->longitude)) {
            $query['longitude'] = $request->longitude;
        }
        if (!Utils::isUnset($request->observationTimestamp)) {
            $query['observationTimestamp'] = $request->observationTimestamp;
        }
        if (!Utils::isUnset($request->product)) {
            $query['product'] = $request->product;
        }
        if (!Utils::isUnset($request->reportTimestamp)) {
            $query['reportTimestamp'] = $request->reportTimestamp;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GridWeatherQuery',
            'version'     => '2022-01-18',
            'protocol'    => 'HTTPS',
            'pathname'    => '/weather/v2/grid',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GridWeatherQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
