<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceInfoRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceInfoResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceListRequest;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceListResponse;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetOrgAndFactoryResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class EnergyExpertExternal extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('energyexpertexternal', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param GetDeviceInfoRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetDeviceInfoResponse
     */
    public function getDeviceInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['deviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->ds)) {
            $query['ds'] = $request->ds;
        }
        if (!Utils::isUnset($request->factoryId)) {
            $query['factoryId'] = $request->factoryId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceInfo',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/external/getDeviceInfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDeviceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDeviceInfoRequest $request
     *
     * @return GetDeviceInfoResponse
     */
    public function getDeviceInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeviceInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetDeviceListRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetDeviceListResponse
     */
    public function getDeviceListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->factoryId)) {
            $query['factoryId'] = $request->factoryId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceList',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/external/getDeviceList',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDeviceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDeviceListRequest $request
     *
     * @return GetDeviceListResponse
     */
    public function getDeviceList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeviceListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetOrgAndFactoryResponse
     */
    public function getOrgAndFactoryWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetOrgAndFactory',
            'version'     => '2022-09-23',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/external/getOrgAndFactory',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOrgAndFactoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetOrgAndFactoryResponse
     */
    public function getOrgAndFactory()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOrgAndFactoryWithOptions($headers, $runtime);
    }
}
