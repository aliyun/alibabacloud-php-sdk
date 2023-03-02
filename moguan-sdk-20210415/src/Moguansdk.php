<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Moguansdk\V20210415;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Moguansdk\V20210415\Models\RegisterDeviceRequest;
use AlibabaCloud\SDK\Moguansdk\V20210415\Models\RegisterDeviceResponse;
use AlibabaCloud\SDK\Moguansdk\V20210415\Models\RegisterDeviceShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Moguansdk extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('moguan-sdk', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param RegisterDeviceRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return RegisterDeviceResponse
     */
    public function registerDeviceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RegisterDeviceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extend)) {
            $request->extendShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extend, 'Extend', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appKey)) {
            $body['AppKey'] = $request->appKey;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $body['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->extendShrink)) {
            $body['Extend'] = $request->extendShrink;
        }
        if (!Utils::isUnset($request->sdkCode)) {
            $body['SdkCode'] = $request->sdkCode;
        }
        if (!Utils::isUnset($request->userDeviceId)) {
            $body['UserDeviceId'] = $request->userDeviceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RegisterDevice',
            'version'     => '2021-04-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RegisterDeviceRequest $request
     *
     * @return RegisterDeviceResponse
     */
    public function registerDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerDeviceWithOptions($request, $runtime);
    }
}
