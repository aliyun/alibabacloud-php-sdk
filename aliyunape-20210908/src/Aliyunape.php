<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliyunape\V20210908;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\ExecuteRequest;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\ExecuteResponse;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\ExecuteShrinkRequest;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\WeathermonitorProvinceHourRequest;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\WeathermonitorProvinceHourResponse;
use AlibabaCloud\SDK\Aliyunape\V20210908\Models\WeathermonitorProvinceHourShrinkRequest;
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
     * @param ExecuteRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return ExecuteResponse
     */
    public function executeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExecuteShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extendParam)) {
            $request->extendParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extendParam, 'ExtendParam', 'json');
        }
        if (!Utils::isUnset($tmpReq->serviceParam)) {
            $request->serviceParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->serviceParam, 'ServiceParam', 'json');
        }
        $query                 = [];
        $query['AppName']      = $request->appName;
        $query['Channel']      = $request->channel;
        $query['ExtendParam']  = $request->extendParamShrink;
        $query['OrderId']      = $request->orderId;
        $query['RequestId']    = $request->requestId;
        $query['ServiceParam'] = $request->serviceParamShrink;
        $query['UserId']       = $request->userId;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'Execute',
            'version'     => '2021-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExecuteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecuteRequest $request
     *
     * @return ExecuteResponse
     */
    public function execute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeWithOptions($request, $runtime);
    }

    /**
     * @param WeathermonitorProvinceHourRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return WeathermonitorProvinceHourResponse
     */
    public function weathermonitorProvinceHourWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new WeathermonitorProvinceHourShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extendParam)) {
            $request->extendParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extendParam, 'ExtendParam', 'json');
        }
        if (!Utils::isUnset($tmpReq->serviceParam)) {
            $request->serviceParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->serviceParam, 'ServiceParam', 'json');
        }
        $query                 = [];
        $query['AppName']      = $request->appName;
        $query['Channel']      = $request->channel;
        $query['ExtendParam']  = $request->extendParamShrink;
        $query['OrderId']      = $request->orderId;
        $query['RequestId']    = $request->requestId;
        $query['ServiceParam'] = $request->serviceParamShrink;
        $query['UserId']       = $request->userId;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'WeathermonitorProvinceHour',
            'version'     => '2021-09-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return WeathermonitorProvinceHourResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param WeathermonitorProvinceHourRequest $request
     *
     * @return WeathermonitorProvinceHourResponse
     */
    public function weathermonitorProvinceHour($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->weathermonitorProvinceHourWithOptions($request, $runtime);
    }
}
