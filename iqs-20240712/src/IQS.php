<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\IQS\V20240712\Models\QueryAttractionsNlRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\QueryAttractionsNlResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\QueryAttractionsRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\QueryAttractionsResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\QueryHotelsNlRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\QueryHotelsNlResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\QueryHotelsRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\QueryHotelsResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\QueryRestaurantsNlRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\QueryRestaurantsNlResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\QueryRestaurantsRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\QueryRestaurantsResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\RgeoCodeRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\RgeoCodeResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponse;
use AlibabaCloud\SDK\IQS\V20240712\Models\WalkingDirectionNovaRequest;
use AlibabaCloud\SDK\IQS\V20240712\Models\WalkingDirectionNovaResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 根据起终点坐标检索符合条件的骑行路线规划方案.
     *
     * @param request - BicyclingDirectionNovaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns BicyclingDirectionNovaResponse
     *
     * @param BicyclingDirectionNovaRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return BicyclingDirectionNovaResponse
     */
    public function bicyclingDirectionNovaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->destinationLatitude) {
            @$query['destinationLatitude'] = $request->destinationLatitude;
        }

        if (null !== $request->destinationLongitude) {
            @$query['destinationLongitude'] = $request->destinationLongitude;
        }

        if (null !== $request->originLatitude) {
            @$query['originLatitude'] = $request->originLatitude;
        }

        if (null !== $request->originLongitude) {
            @$query['originLongitude'] = $request->originLongitude;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BicyclingDirectionNovaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BicyclingDirectionNovaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 根据起终点坐标检索符合条件的骑行路线规划方案.
     *
     * @param request - BicyclingDirectionNovaRequest
     * @returns BicyclingDirectionNovaResponse
     *
     * @param BicyclingDirectionNovaRequest $request
     *
     * @return BicyclingDirectionNovaResponse
     */
    public function bicyclingDirectionNova($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->bicyclingDirectionNovaWithOptions($request, $headers, $runtime);
    }

    /**
     * 自然语言通用查询.
     *
     * @param request - CommonQueryBySceneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
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
            'body'    => Utils::parseToMap($request->body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CommonQueryBySceneResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CommonQueryBySceneResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 自然语言通用查询.
     *
     * @param request - CommonQueryBySceneRequest
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
     * 根据起终点坐标检索符合条件的驾车路线规划方案.
     *
     * @param request - DrivingDirectionNovaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DrivingDirectionNovaResponse
     *
     * @param DrivingDirectionNovaRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DrivingDirectionNovaResponse
     */
    public function drivingDirectionNovaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->carType) {
            @$query['carType'] = $request->carType;
        }

        if (null !== $request->destinationLatitude) {
            @$query['destinationLatitude'] = $request->destinationLatitude;
        }

        if (null !== $request->destinationLongitude) {
            @$query['destinationLongitude'] = $request->destinationLongitude;
        }

        if (null !== $request->originLatitude) {
            @$query['originLatitude'] = $request->originLatitude;
        }

        if (null !== $request->originLongitude) {
            @$query['originLongitude'] = $request->originLongitude;
        }

        if (null !== $request->plate) {
            @$query['plate'] = $request->plate;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DrivingDirectionNovaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DrivingDirectionNovaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 根据起终点坐标检索符合条件的驾车路线规划方案.
     *
     * @param request - DrivingDirectionNovaRequest
     * @returns DrivingDirectionNovaResponse
     *
     * @param DrivingDirectionNovaRequest $request
     *
     * @return DrivingDirectionNovaResponse
     */
    public function drivingDirectionNova($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->drivingDirectionNovaWithOptions($request, $headers, $runtime);
    }

    /**
     * 电动车路线规划方案V2.
     *
     * @param request - ElectrobikeDirectionNovaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ElectrobikeDirectionNovaResponse
     *
     * @param ElectrobikeDirectionNovaRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ElectrobikeDirectionNovaResponse
     */
    public function electrobikeDirectionNovaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->destinationLatitude) {
            @$query['destinationLatitude'] = $request->destinationLatitude;
        }

        if (null !== $request->destinationLongitude) {
            @$query['destinationLongitude'] = $request->destinationLongitude;
        }

        if (null !== $request->originLatitude) {
            @$query['originLatitude'] = $request->originLatitude;
        }

        if (null !== $request->originLongitude) {
            @$query['originLongitude'] = $request->originLongitude;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ElectrobikeDirectionNovaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ElectrobikeDirectionNovaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 电动车路线规划方案V2.
     *
     * @param request - ElectrobikeDirectionNovaRequest
     * @returns ElectrobikeDirectionNovaResponse
     *
     * @param ElectrobikeDirectionNovaRequest $request
     *
     * @return ElectrobikeDirectionNovaResponse
     */
    public function electrobikeDirectionNova($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->electrobikeDirectionNovaWithOptions($request, $headers, $runtime);
    }

    /**
     * 地理编码，将详细的结构化地址转换为高德经纬度坐标.
     *
     * @param request - GeoCodeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GeoCodeResponse
     *
     * @param GeoCodeRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GeoCodeResponse
     */
    public function geoCodeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->address) {
            @$query['address'] = $request->address;
        }

        if (null !== $request->city) {
            @$query['city'] = $request->city;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GeoCodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GeoCodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 地理编码，将详细的结构化地址转换为高德经纬度坐标.
     *
     * @param request - GeoCodeRequest
     * @returns GeoCodeResponse
     *
     * @param GeoCodeRequest $request
     *
     * @return GeoCodeResponse
     */
    public function geoCode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->geoCodeWithOptions($request, $headers, $runtime);
    }

    /**
     * 通过经纬度查询附近的地点.
     *
     * @param request - NearbySearchNovaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns NearbySearchNovaResponse
     *
     * @param NearbySearchNovaRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return NearbySearchNovaResponse
     */
    public function nearbySearchNovaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cityLimit) {
            @$query['cityLimit'] = $request->cityLimit;
        }

        if (null !== $request->keywords) {
            @$query['keywords'] = $request->keywords;
        }

        if (null !== $request->latitude) {
            @$query['latitude'] = $request->latitude;
        }

        if (null !== $request->longitude) {
            @$query['longitude'] = $request->longitude;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->radius) {
            @$query['radius'] = $request->radius;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->sortRule) {
            @$query['sortRule'] = $request->sortRule;
        }

        if (null !== $request->types) {
            @$query['types'] = $request->types;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return NearbySearchNovaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return NearbySearchNovaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 通过经纬度查询附近的地点.
     *
     * @param request - NearbySearchNovaRequest
     * @returns NearbySearchNovaResponse
     *
     * @param NearbySearchNovaRequest $request
     *
     * @return NearbySearchNovaResponse
     */
    public function nearbySearchNova($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->nearbySearchNovaWithOptions($request, $headers, $runtime);
    }

    /**
     * 通过关键词搜索地点.
     *
     * @param request - PlaceSearchNovaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns PlaceSearchNovaResponse
     *
     * @param PlaceSearchNovaRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return PlaceSearchNovaResponse
     */
    public function placeSearchNovaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cityLimit) {
            @$query['cityLimit'] = $request->cityLimit;
        }

        if (null !== $request->keywords) {
            @$query['keywords'] = $request->keywords;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->size) {
            @$query['size'] = $request->size;
        }

        if (null !== $request->types) {
            @$query['types'] = $request->types;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PlaceSearchNovaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PlaceSearchNovaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 通过关键词搜索地点.
     *
     * @param request - PlaceSearchNovaRequest
     * @returns PlaceSearchNovaResponse
     *
     * @param PlaceSearchNovaRequest $request
     *
     * @return PlaceSearchNovaResponse
     */
    public function placeSearchNova($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->placeSearchNovaWithOptions($request, $headers, $runtime);
    }

    /**
     * 景点查询.
     *
     * @param request - QueryAttractionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryAttractionsResponse
     *
     * @param QueryAttractionsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return QueryAttractionsResponse
     */
    public function queryAttractionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($request->body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryAttractionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryAttractionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 景点查询.
     *
     * @param request - QueryAttractionsRequest
     * @returns QueryAttractionsResponse
     *
     * @param QueryAttractionsRequest $request
     *
     * @return QueryAttractionsResponse
     */
    public function queryAttractions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAttractionsWithOptions($request, $headers, $runtime);
    }

    /**
     * 景点查询.
     *
     * @param request - QueryAttractionsNlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryAttractionsNlResponse
     *
     * @param QueryAttractionsNlRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return QueryAttractionsNlResponse
     */
    public function queryAttractionsNlWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'QueryAttractionsNl',
            'version'     => '2024-07-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/amap-function-call-agent/iqs-agent-service/v2/nl/attractions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryAttractionsNlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryAttractionsNlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 景点查询.
     *
     * @param request - QueryAttractionsNlRequest
     * @returns QueryAttractionsNlResponse
     *
     * @param QueryAttractionsNlRequest $request
     *
     * @return QueryAttractionsNlResponse
     */
    public function queryAttractionsNl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryAttractionsNlWithOptions($request, $headers, $runtime);
    }

    /**
     * 酒店查询.
     *
     * @param request - QueryHotelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryHotelsResponse
     *
     * @param QueryHotelsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return QueryHotelsResponse
     */
    public function queryHotelsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($request->body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryHotelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryHotelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 酒店查询.
     *
     * @param request - QueryHotelsRequest
     * @returns QueryHotelsResponse
     *
     * @param QueryHotelsRequest $request
     *
     * @return QueryHotelsResponse
     */
    public function queryHotels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryHotelsWithOptions($request, $headers, $runtime);
    }

    /**
     * 酒店查询.
     *
     * @param request - QueryHotelsNlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryHotelsNlResponse
     *
     * @param QueryHotelsNlRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return QueryHotelsNlResponse
     */
    public function queryHotelsNlWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'QueryHotelsNl',
            'version'     => '2024-07-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/amap-function-call-agent/iqs-agent-service/v2/nl/hotels',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryHotelsNlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryHotelsNlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 酒店查询.
     *
     * @param request - QueryHotelsNlRequest
     * @returns QueryHotelsNlResponse
     *
     * @param QueryHotelsNlRequest $request
     *
     * @return QueryHotelsNlResponse
     */
    public function queryHotelsNl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryHotelsNlWithOptions($request, $headers, $runtime);
    }

    /**
     * 餐厅查询.
     *
     * @param request - QueryRestaurantsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryRestaurantsResponse
     *
     * @param QueryRestaurantsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return QueryRestaurantsResponse
     */
    public function queryRestaurantsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($request->body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryRestaurantsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryRestaurantsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 餐厅查询.
     *
     * @param request - QueryRestaurantsRequest
     * @returns QueryRestaurantsResponse
     *
     * @param QueryRestaurantsRequest $request
     *
     * @return QueryRestaurantsResponse
     */
    public function queryRestaurants($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryRestaurantsWithOptions($request, $headers, $runtime);
    }

    /**
     * 餐厅查询.
     *
     * @param request - QueryRestaurantsNlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryRestaurantsNlResponse
     *
     * @param QueryRestaurantsNlRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return QueryRestaurantsNlResponse
     */
    public function queryRestaurantsNlWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action'      => 'QueryRestaurantsNl',
            'version'     => '2024-07-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/amap-function-call-agent/iqs-agent-service/v2/nl/restaurants',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryRestaurantsNlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryRestaurantsNlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 餐厅查询.
     *
     * @param request - QueryRestaurantsNlRequest
     * @returns QueryRestaurantsNlResponse
     *
     * @param QueryRestaurantsNlRequest $request
     *
     * @return QueryRestaurantsNlResponse
     */
    public function queryRestaurantsNl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryRestaurantsNlWithOptions($request, $headers, $runtime);
    }

    /**
     * 逆地理编码，将经纬度转换为详细结构化的地址信息.
     *
     * @param request - RgeoCodeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RgeoCodeResponse
     *
     * @param RgeoCodeRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return RgeoCodeResponse
     */
    public function rgeoCodeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->latitude) {
            @$query['latitude'] = $request->latitude;
        }

        if (null !== $request->longitude) {
            @$query['longitude'] = $request->longitude;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RgeoCodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RgeoCodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 逆地理编码，将经纬度转换为详细结构化的地址信息.
     *
     * @param request - RgeoCodeRequest
     * @returns RgeoCodeResponse
     *
     * @param RgeoCodeRequest $request
     *
     * @return RgeoCodeResponse
     */
    public function rgeoCode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rgeoCodeWithOptions($request, $headers, $runtime);
    }

    /**
     * 公共交通路线规划方案.
     *
     * @param request - TransitIntegratedDirectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns TransitIntegratedDirectionResponse
     *
     * @param TransitIntegratedDirectionRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return TransitIntegratedDirectionResponse
     */
    public function transitIntegratedDirectionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->destinationCity) {
            @$query['destinationCity'] = $request->destinationCity;
        }

        if (null !== $request->destinationLatitude) {
            @$query['destinationLatitude'] = $request->destinationLatitude;
        }

        if (null !== $request->destinationLongitude) {
            @$query['destinationLongitude'] = $request->destinationLongitude;
        }

        if (null !== $request->originCity) {
            @$query['originCity'] = $request->originCity;
        }

        if (null !== $request->originLatitude) {
            @$query['originLatitude'] = $request->originLatitude;
        }

        if (null !== $request->originLongitude) {
            @$query['originLongitude'] = $request->originLongitude;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TransitIntegratedDirectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TransitIntegratedDirectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 公共交通路线规划方案.
     *
     * @param request - TransitIntegratedDirectionRequest
     * @returns TransitIntegratedDirectionResponse
     *
     * @param TransitIntegratedDirectionRequest $request
     *
     * @return TransitIntegratedDirectionResponse
     */
    public function transitIntegratedDirection($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->transitIntegratedDirectionWithOptions($request, $headers, $runtime);
    }

    /**
     * 根据起终点坐标检索符合条件的步行路线规划方案.
     *
     * @param request - WalkingDirectionNovaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns WalkingDirectionNovaResponse
     *
     * @param WalkingDirectionNovaRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return WalkingDirectionNovaResponse
     */
    public function walkingDirectionNovaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->destinationLatitude) {
            @$query['destinationLatitude'] = $request->destinationLatitude;
        }

        if (null !== $request->destinationLongitude) {
            @$query['destinationLongitude'] = $request->destinationLongitude;
        }

        if (null !== $request->originLatitude) {
            @$query['originLatitude'] = $request->originLatitude;
        }

        if (null !== $request->originLongitude) {
            @$query['originLongitude'] = $request->originLongitude;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return WalkingDirectionNovaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return WalkingDirectionNovaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 根据起终点坐标检索符合条件的步行路线规划方案.
     *
     * @param request - WalkingDirectionNovaRequest
     * @returns WalkingDirectionNovaResponse
     *
     * @param WalkingDirectionNovaRequest $request
     *
     * @return WalkingDirectionNovaResponse
     */
    public function walkingDirectionNova($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->walkingDirectionNovaWithOptions($request, $headers, $runtime);
    }
}
