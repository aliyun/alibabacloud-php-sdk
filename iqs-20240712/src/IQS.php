<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\IQS\V20240712\Models\BicyclingDirectionNovaRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\BicyclingDirectionNovaResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\CommonQueryBySceneRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\CommonQueryBySceneResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\DrivingDirectionNovaRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\DrivingDirectionNovaResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\ElectrobikeDirectionNovaRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\ElectrobikeDirectionNovaResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\GeoCodeRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\GeoCodeResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\NearbySearchNovaRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\NearbySearchNovaResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\PlaceSearchNovaRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\PlaceSearchNovaResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\RgeoCodeRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\RgeoCodeResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\WalkingDirectionNovaRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\WalkingDirectionNovaResponse;
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
     * @summary 根据起终点坐标检索符合条件的骑行路线规划方案
     *  *
     * @param BicyclingDirectionNovaRequest $request BicyclingDirectionNovaRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return BicyclingDirectionNovaResponse BicyclingDirectionNovaResponse
     */
    public function bicyclingDirectionNovaWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationLatitude)) {
            $query['destinationLatitude'] = $request->destinationLatitude;
        }
        if (!Utils::isUnset($request->destinationLongitude)) {
            $query['destinationLongitude'] = $request->destinationLongitude;
        }
        if (!Utils::isUnset($request->originLatitude)) {
            $query['originLatitude'] = $request->originLatitude;
        }
        if (!Utils::isUnset($request->originLongitude)) {
            $query['originLongitude'] = $request->originLongitude;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BicyclingDirectionNova',
            'version'     => '2024-07-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ipaas/v2/direction/bicycling',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BicyclingDirectionNovaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据起终点坐标检索符合条件的骑行路线规划方案
     *  *
     * @param BicyclingDirectionNovaRequest $request BicyclingDirectionNovaRequest
     *
     * @return BicyclingDirectionNovaResponse BicyclingDirectionNovaResponse
     */
    public function bicyclingDirectionNova($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->bicyclingDirectionNovaWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 自然语言通用查询
     *  *
     * @param CommonQueryBySceneRequest $request CommonQueryBySceneRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CommonQueryBySceneResponse CommonQueryBySceneResponse
     */
    public function commonQueryBySceneWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'CommonQueryByScene',
            'version'     => '2024-07-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/amap-function-call-agent/iqs-agent-service/v2/nl/common',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CommonQueryBySceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 自然语言通用查询
     *  *
     * @param CommonQueryBySceneRequest $request CommonQueryBySceneRequest
     *
     * @return CommonQueryBySceneResponse CommonQueryBySceneResponse
     */
    public function commonQueryByScene($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->commonQueryBySceneWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 根据起终点坐标检索符合条件的驾车路线规划方案
     *  *
     * @param DrivingDirectionNovaRequest $request DrivingDirectionNovaRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DrivingDirectionNovaResponse DrivingDirectionNovaResponse
     */
    public function drivingDirectionNovaWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->carType)) {
            $query['carType'] = $request->carType;
        }
        if (!Utils::isUnset($request->destinationLatitude)) {
            $query['destinationLatitude'] = $request->destinationLatitude;
        }
        if (!Utils::isUnset($request->destinationLongitude)) {
            $query['destinationLongitude'] = $request->destinationLongitude;
        }
        if (!Utils::isUnset($request->originLatitude)) {
            $query['originLatitude'] = $request->originLatitude;
        }
        if (!Utils::isUnset($request->originLongitude)) {
            $query['originLongitude'] = $request->originLongitude;
        }
        if (!Utils::isUnset($request->plate)) {
            $query['plate'] = $request->plate;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DrivingDirectionNova',
            'version'     => '2024-07-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ipaas/v2/direction/driving',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DrivingDirectionNovaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据起终点坐标检索符合条件的驾车路线规划方案
     *  *
     * @param DrivingDirectionNovaRequest $request DrivingDirectionNovaRequest
     *
     * @return DrivingDirectionNovaResponse DrivingDirectionNovaResponse
     */
    public function drivingDirectionNova($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->drivingDirectionNovaWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 电动车路线规划方案V2
     *  *
     * @param ElectrobikeDirectionNovaRequest $request ElectrobikeDirectionNovaRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ElectrobikeDirectionNovaResponse ElectrobikeDirectionNovaResponse
     */
    public function electrobikeDirectionNovaWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationLatitude)) {
            $query['destinationLatitude'] = $request->destinationLatitude;
        }
        if (!Utils::isUnset($request->destinationLongitude)) {
            $query['destinationLongitude'] = $request->destinationLongitude;
        }
        if (!Utils::isUnset($request->originLatitude)) {
            $query['originLatitude'] = $request->originLatitude;
        }
        if (!Utils::isUnset($request->originLongitude)) {
            $query['originLongitude'] = $request->originLongitude;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ElectrobikeDirectionNova',
            'version'     => '2024-07-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ipaas/v2/direction/electrobike',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ElectrobikeDirectionNovaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 电动车路线规划方案V2
     *  *
     * @param ElectrobikeDirectionNovaRequest $request ElectrobikeDirectionNovaRequest
     *
     * @return ElectrobikeDirectionNovaResponse ElectrobikeDirectionNovaResponse
     */
    public function electrobikeDirectionNova($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->electrobikeDirectionNovaWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 地理编码，将详细的结构化地址转换为高德经纬度坐标
     *  *
     * @param GeoCodeRequest $request GeoCodeRequest
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GeoCodeResponse GeoCodeResponse
     */
    public function geoCodeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->address)) {
            $query['address'] = $request->address;
        }
        if (!Utils::isUnset($request->city)) {
            $query['city'] = $request->city;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GeoCode',
            'version'     => '2024-07-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ipaas/v1/geocode/geo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GeoCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 地理编码，将详细的结构化地址转换为高德经纬度坐标
     *  *
     * @param GeoCodeRequest $request GeoCodeRequest
     *
     * @return GeoCodeResponse GeoCodeResponse
     */
    public function geoCode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->geoCodeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 通过经纬度查询附近的地点
     *  *
     * @param NearbySearchNovaRequest $request NearbySearchNovaRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return NearbySearchNovaResponse NearbySearchNovaResponse
     */
    public function nearbySearchNovaWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cityLimit)) {
            $query['cityLimit'] = $request->cityLimit;
        }
        if (!Utils::isUnset($request->keywords)) {
            $query['keywords'] = $request->keywords;
        }
        if (!Utils::isUnset($request->latitude)) {
            $query['latitude'] = $request->latitude;
        }
        if (!Utils::isUnset($request->longitude)) {
            $query['longitude'] = $request->longitude;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->radius)) {
            $query['radius'] = $request->radius;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->sortRule)) {
            $query['sortRule'] = $request->sortRule;
        }
        if (!Utils::isUnset($request->types)) {
            $query['types'] = $request->types;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'NearbySearchNova',
            'version'     => '2024-07-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ipaas/v2/pois/nearby',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return NearbySearchNovaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通过经纬度查询附近的地点
     *  *
     * @param NearbySearchNovaRequest $request NearbySearchNovaRequest
     *
     * @return NearbySearchNovaResponse NearbySearchNovaResponse
     */
    public function nearbySearchNova($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->nearbySearchNovaWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 通过关键词搜索地点
     *  *
     * @param PlaceSearchNovaRequest $request PlaceSearchNovaRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return PlaceSearchNovaResponse PlaceSearchNovaResponse
     */
    public function placeSearchNovaWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cityLimit)) {
            $query['cityLimit'] = $request->cityLimit;
        }
        if (!Utils::isUnset($request->keywords)) {
            $query['keywords'] = $request->keywords;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->types)) {
            $query['types'] = $request->types;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PlaceSearchNova',
            'version'     => '2024-07-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ipaas/v2/pois/place',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PlaceSearchNovaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通过关键词搜索地点
     *  *
     * @param PlaceSearchNovaRequest $request PlaceSearchNovaRequest
     *
     * @return PlaceSearchNovaResponse PlaceSearchNovaResponse
     */
    public function placeSearchNova($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->placeSearchNovaWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 逆地理编码，将经纬度转换为详细结构化的地址信息
     *  *
     * @param RgeoCodeRequest $request RgeoCodeRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return RgeoCodeResponse RgeoCodeResponse
     */
    public function rgeoCodeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->latitude)) {
            $query['latitude'] = $request->latitude;
        }
        if (!Utils::isUnset($request->longitude)) {
            $query['longitude'] = $request->longitude;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RgeoCode',
            'version'     => '2024-07-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ipaas/v1/geocode/regeo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RgeoCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 逆地理编码，将经纬度转换为详细结构化的地址信息
     *  *
     * @param RgeoCodeRequest $request RgeoCodeRequest
     *
     * @return RgeoCodeResponse RgeoCodeResponse
     */
    public function rgeoCode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rgeoCodeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 公共交通路线规划方案
     *  *
     * @param TransitIntegratedDirectionRequest $request TransitIntegratedDirectionRequest
     * @param string[]                          $headers map
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return TransitIntegratedDirectionResponse TransitIntegratedDirectionResponse
     */
    public function transitIntegratedDirectionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationCity)) {
            $query['destinationCity'] = $request->destinationCity;
        }
        if (!Utils::isUnset($request->destinationLatitude)) {
            $query['destinationLatitude'] = $request->destinationLatitude;
        }
        if (!Utils::isUnset($request->destinationLongitude)) {
            $query['destinationLongitude'] = $request->destinationLongitude;
        }
        if (!Utils::isUnset($request->originCity)) {
            $query['originCity'] = $request->originCity;
        }
        if (!Utils::isUnset($request->originLatitude)) {
            $query['originLatitude'] = $request->originLatitude;
        }
        if (!Utils::isUnset($request->originLongitude)) {
            $query['originLongitude'] = $request->originLongitude;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransitIntegratedDirection',
            'version'     => '2024-07-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ipaas/v2/direction/transit/integrated',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TransitIntegratedDirectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 公共交通路线规划方案
     *  *
     * @param TransitIntegratedDirectionRequest $request TransitIntegratedDirectionRequest
     *
     * @return TransitIntegratedDirectionResponse TransitIntegratedDirectionResponse
     */
    public function transitIntegratedDirection($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->transitIntegratedDirectionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 根据起终点坐标检索符合条件的步行路线规划方案
     *  *
     * @param WalkingDirectionNovaRequest $request WalkingDirectionNovaRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return WalkingDirectionNovaResponse WalkingDirectionNovaResponse
     */
    public function walkingDirectionNovaWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationLatitude)) {
            $query['destinationLatitude'] = $request->destinationLatitude;
        }
        if (!Utils::isUnset($request->destinationLongitude)) {
            $query['destinationLongitude'] = $request->destinationLongitude;
        }
        if (!Utils::isUnset($request->originLatitude)) {
            $query['originLatitude'] = $request->originLatitude;
        }
        if (!Utils::isUnset($request->originLongitude)) {
            $query['originLongitude'] = $request->originLongitude;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'WalkingDirectionNova',
            'version'     => '2024-07-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/ipaas/v2/direction/walking',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return WalkingDirectionNovaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据起终点坐标检索符合条件的步行路线规划方案
     *  *
     * @param WalkingDirectionNovaRequest $request WalkingDirectionNovaRequest
     *
     * @return WalkingDirectionNovaResponse WalkingDirectionNovaResponse
     */
    public function walkingDirectionNova($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->walkingDirectionNovaWithOptions($request, $headers, $runtime);
    }
}
