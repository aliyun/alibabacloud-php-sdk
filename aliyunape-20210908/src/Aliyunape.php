<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliyunape\V20210908;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\HistoricalRequest;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\HistoricalResponse;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\StationDayRequest;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\StationDayResponse;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\WeatherforecastRequest;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\WeatherforecastResponse;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\WeatherforecastTimeRequest;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\WeatherforecastTimeResponse;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\WeathermonitorRequest;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\WeathermonitorResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Aliyunape extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aliyunape', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param HistoricalRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return HistoricalResponse
     */
    public function historicalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return HistoricalResponse::fromMap($this->doRPCRequest('Historical', '2021-09-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param HistoricalRequest $request
     *
     * @return HistoricalResponse
     */
    public function historical($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->historicalWithOptions($request, $runtime);
    }

    /**
     * @param StationDayRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StationDayResponse
     */
    public function stationDayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StationDayResponse::fromMap($this->doRPCRequest('StationDay', '2021-09-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StationDayRequest $request
     *
     * @return StationDayResponse
     */
    public function stationDay($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stationDayWithOptions($request, $runtime);
    }

    /**
     * @param WeatherforecastRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return WeatherforecastResponse
     */
    public function weatherforecastWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return WeatherforecastResponse::fromMap($this->doRPCRequest('Weatherforecast', '2021-09-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param WeatherforecastRequest $request
     *
     * @return WeatherforecastResponse
     */
    public function weatherforecast($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->weatherforecastWithOptions($request, $runtime);
    }

    /**
     * @param WeatherforecastTimeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return WeatherforecastTimeResponse
     */
    public function weatherforecastTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return WeatherforecastTimeResponse::fromMap($this->doRPCRequest('WeatherforecastTime', '2021-09-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param WeatherforecastTimeRequest $request
     *
     * @return WeatherforecastTimeResponse
     */
    public function weatherforecastTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->weatherforecastTimeWithOptions($request, $runtime);
    }

    /**
     * @param WeathermonitorRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return WeathermonitorResponse
     */
    public function weathermonitorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return WeathermonitorResponse::fromMap($this->doRPCRequest('Weathermonitor', '2021-09-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param WeathermonitorRequest $request
     *
     * @return WeathermonitorResponse
     */
    public function weathermonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->weathermonitorWithOptions($request, $runtime);
    }
}
