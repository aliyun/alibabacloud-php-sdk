<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeviceControlHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeviceControlRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeviceControlResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\DeviceControlShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelHomeBackImageAndModesHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelHomeBackImageAndModesRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelHomeBackImageAndModesResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelHomeBackImageAndModesShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelOrderDetailHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelOrderDetailRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelOrderDetailResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelOrderDetailShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSampleUtterancesHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSampleUtterancesRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSampleUtterancesResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelSampleUtterancesShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelScreenSaverHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelScreenSaverRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelScreenSaverResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelScreenSaverShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelControlDeviceHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelControlDeviceRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelControlDeviceResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelControlDeviceShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelOrderHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelOrderRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelOrderResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelOrderShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelServiceCategoryHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelServiceCategoryRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelServiceCategoryResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelServiceCategoryShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryDeviceStatusHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryDeviceStatusRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryDeviceStatusResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryDeviceStatusShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelProductHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelProductRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelProductResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelProductShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\RoomCheckOutHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\RoomCheckOutRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\RoomCheckOutResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\RoomCheckOutShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\SubmitHotelOrderHeaders;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\SubmitHotelOrderRequest;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\SubmitHotelOrderResponse;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\SubmitHotelOrderShrinkRequest;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class AliGenie extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aligenie', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DeviceControlRequest $request
     *
     * @return DeviceControlResponse
     */
    public function deviceControl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeviceControlHeaders([]);

        return $this->deviceControlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeviceControlRequest $tmpReq
     * @param DeviceControlHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeviceControlResponse
     */
    public function deviceControlWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeviceControlShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->payload), 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeviceControl',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/deviceControl',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeviceControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotelHomeBackImageAndModesRequest $request
     *
     * @return GetHotelHomeBackImageAndModesResponse
     */
    public function getHotelHomeBackImageAndModes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotelHomeBackImageAndModesHeaders([]);

        return $this->getHotelHomeBackImageAndModesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHotelHomeBackImageAndModesRequest $tmpReq
     * @param GetHotelHomeBackImageAndModesHeaders $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return GetHotelHomeBackImageAndModesResponse
     */
    public function getHotelHomeBackImageAndModesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetHotelHomeBackImageAndModesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotelHomeBackImageAndModes',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getHotelHomeBackImageAndModes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHotelHomeBackImageAndModesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotelOrderDetailRequest $request
     *
     * @return GetHotelOrderDetailResponse
     */
    public function getHotelOrderDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotelOrderDetailHeaders([]);

        return $this->getHotelOrderDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHotelOrderDetailRequest $tmpReq
     * @param GetHotelOrderDetailHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetHotelOrderDetailResponse
     */
    public function getHotelOrderDetailWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetHotelOrderDetailShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->payload), 'Payload', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotelOrderDetail',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getHotelOrderDetail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHotelOrderDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotelSampleUtterancesRequest $request
     *
     * @return GetHotelSampleUtterancesResponse
     */
    public function getHotelSampleUtterances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotelSampleUtterancesHeaders([]);

        return $this->getHotelSampleUtterancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHotelSampleUtterancesRequest $tmpReq
     * @param GetHotelSampleUtterancesHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetHotelSampleUtterancesResponse
     */
    public function getHotelSampleUtterancesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetHotelSampleUtterancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotelSampleUtterances',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getHotelSampleUtterances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHotelSampleUtterancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotelScreenSaverRequest $request
     *
     * @return GetHotelScreenSaverResponse
     */
    public function getHotelScreenSaver($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetHotelScreenSaverHeaders([]);

        return $this->getHotelScreenSaverWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHotelScreenSaverRequest $tmpReq
     * @param GetHotelScreenSaverHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetHotelScreenSaverResponse
     */
    public function getHotelScreenSaverWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetHotelScreenSaverShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotelScreenSaver',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/getHotelScreenSaver',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHotelScreenSaverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHotelControlDeviceRequest $request
     *
     * @return ListHotelControlDeviceResponse
     */
    public function listHotelControlDevice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListHotelControlDeviceHeaders([]);

        return $this->listHotelControlDeviceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListHotelControlDeviceRequest $tmpReq
     * @param ListHotelControlDeviceHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListHotelControlDeviceResponse
     */
    public function listHotelControlDeviceWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListHotelControlDeviceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHotelControlDevice',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listHotelControlDevice',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHotelControlDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHotelOrderRequest $request
     *
     * @return ListHotelOrderResponse
     */
    public function listHotelOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListHotelOrderHeaders([]);

        return $this->listHotelOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListHotelOrderRequest $tmpReq
     * @param ListHotelOrderHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListHotelOrderResponse
     */
    public function listHotelOrderWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListHotelOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->payload), 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHotelOrder',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listHotelOrder',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHotelOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHotelSceneItemRequest $request
     *
     * @return ListHotelSceneItemResponse
     */
    public function listHotelSceneItem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListHotelSceneItemHeaders([]);

        return $this->listHotelSceneItemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListHotelSceneItemRequest $tmpReq
     * @param ListHotelSceneItemHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListHotelSceneItemResponse
     */
    public function listHotelSceneItemWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListHotelSceneItemShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->payload), 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHotelSceneItem',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listHotelSceneItem',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHotelSceneItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHotelServiceCategoryRequest $request
     *
     * @return ListHotelServiceCategoryResponse
     */
    public function listHotelServiceCategory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListHotelServiceCategoryHeaders([]);

        return $this->listHotelServiceCategoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListHotelServiceCategoryRequest $tmpReq
     * @param ListHotelServiceCategoryHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListHotelServiceCategoryResponse
     */
    public function listHotelServiceCategoryWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListHotelServiceCategoryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->payload), 'Payload', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHotelServiceCategory',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/listHotelServiceCategory',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHotelServiceCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDeviceStatusRequest $request
     *
     * @return QueryDeviceStatusResponse
     */
    public function queryDeviceStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryDeviceStatusHeaders([]);

        return $this->queryDeviceStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryDeviceStatusRequest $tmpReq
     * @param QueryDeviceStatusHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QueryDeviceStatusResponse
     */
    public function queryDeviceStatusWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryDeviceStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->payload), 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceStatus',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/queryDeviceStatus',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryHotelProductRequest $request
     *
     * @return QueryHotelProductResponse
     */
    public function queryHotelProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryHotelProductHeaders([]);

        return $this->queryHotelProductWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryHotelProductRequest $tmpReq
     * @param QueryHotelProductHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QueryHotelProductResponse
     */
    public function queryHotelProductWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryHotelProductShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryHotelProduct',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/queryHotelProduct',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryHotelProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RoomCheckOutRequest $request
     *
     * @return RoomCheckOutResponse
     */
    public function roomCheckOut($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RoomCheckOutHeaders([]);

        return $this->roomCheckOutWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RoomCheckOutRequest $tmpReq
     * @param RoomCheckOutHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return RoomCheckOutResponse
     */
    public function roomCheckOutWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RoomCheckOutShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->deviceInfo), 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RoomCheckOut',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/roomCheckOut',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RoomCheckOutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitHotelOrderRequest $request
     *
     * @return SubmitHotelOrderResponse
     */
    public function submitHotelOrder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SubmitHotelOrderHeaders([]);

        return $this->submitHotelOrderWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SubmitHotelOrderRequest $tmpReq
     * @param SubmitHotelOrderHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return SubmitHotelOrderResponse
     */
    public function submitHotelOrderWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitHotelOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->payload), 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitHotelOrder',
            'version'     => 'ip_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/ip/submitHotelOrder',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitHotelOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
