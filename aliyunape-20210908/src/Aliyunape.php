<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliyunape\V20210908;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\ApeInnerCommonApiRequest;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\ApeInnerCommonApiResponse;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\ApeProvinceStationRefRequest;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\ApeProvinceStationRefResponse;
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
use Darabonba\OpenApi\Models\Params;
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
     * @param ApeInnerCommonApiRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ApeInnerCommonApiResponse
     */
    public function apeInnerCommonApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApeInnerCommonApi',
            'version'     => '2021-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApeInnerCommonApiResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApeInnerCommonApiRequest $request
     *
     * @return ApeInnerCommonApiResponse
     */
    public function apeInnerCommonApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->apeInnerCommonApiWithOptions($request, $runtime);
    }

    /**
     * @param ApeProvinceStationRefRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ApeProvinceStationRefResponse
     */
    public function apeProvinceStationRefWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adcode)) {
            $query['Adcode'] = $request->adcode;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->city)) {
            $query['City'] = $request->city;
        }
        if (!Utils::isUnset($request->cnty)) {
            $query['Cnty'] = $request->cnty;
        }
        if (!Utils::isUnset($request->country)) {
            $query['Country'] = $request->country;
        }
        if (!Utils::isUnset($request->offset)) {
            $query['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->provinceCode)) {
            $query['ProvinceCode'] = $request->provinceCode;
        }
        if (!Utils::isUnset($request->provinceName)) {
            $query['ProvinceName'] = $request->provinceName;
        }
        if (!Utils::isUnset($request->stationName)) {
            $query['StationName'] = $request->stationName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApeProvinceStationRef',
            'version'     => '2021-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApeProvinceStationRefResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApeProvinceStationRefRequest $request
     *
     * @return ApeProvinceStationRefResponse
     */
    public function apeProvinceStationRef($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->apeProvinceStationRefWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->station)) {
            $query['Station'] = $request->station;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Historical',
            'version'     => '2021-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HistoricalResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->startForecast)) {
            $query['StartForecast'] = $request->startForecast;
        }
        if (!Utils::isUnset($request->station)) {
            $query['Station'] = $request->station;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StationDay',
            'version'     => '2021-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StationDayResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->lat)) {
            $query['Lat'] = $request->lat;
        }
        if (!Utils::isUnset($request->lon)) {
            $query['Lon'] = $request->lon;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->startForecast)) {
            $query['StartForecast'] = $request->startForecast;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Weatherforecast',
            'version'     => '2021-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return WeatherforecastResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->curHour)) {
            $query['CurHour'] = $request->curHour;
        }
        if (!Utils::isUnset($request->lat)) {
            $query['Lat'] = $request->lat;
        }
        if (!Utils::isUnset($request->lon)) {
            $query['Lon'] = $request->lon;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'WeatherforecastTime',
            'version'     => '2021-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return WeatherforecastTimeResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->curHour)) {
            $query['CurHour'] = $request->curHour;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Weathermonitor',
            'version'     => '2021-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return WeathermonitorResponse::fromMap($this->callApi($params, $req, $runtime));
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
