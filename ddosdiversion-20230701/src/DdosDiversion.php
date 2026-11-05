<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\ConfigNetStatusRequest;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\ConfigNetStatusResponse;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\ListInstanceRequest;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\ListInstanceResponse;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListRequest;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class DdosDiversion extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'DdosDiversion';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ddosdiversion', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Configures the advertising of a CIDR block.
     *
     * @param request - ConfigNetStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigNetStatusResponse
     *
     * @param ConfigNetStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ConfigNetStatusResponse
     */
    public function configNetStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->net) {
            @$query['Net'] = $request->net;
        }

        if (null !== $request->regions) {
            @$query['Regions'] = $request->regions;
        }

        if (null !== $request->saleId) {
            @$query['SaleId'] = $request->saleId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->subNets) {
            @$query['SubNets'] = $request->subNets;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigNetStatus',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigNetStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the advertising of a CIDR block.
     *
     * @param request - ConfigNetStatusRequest
     *
     * @returns ConfigNetStatusResponse
     *
     * @param ConfigNetStatusRequest $request
     *
     * @return ConfigNetStatusResponse
     */
    public function configNetStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configNetStatusWithOptions($request, $runtime);
    }

    /**
     * Queries a list of instances.
     *
     * @param request - ListInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceResponse
     *
     * @param ListInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListInstanceResponse
     */
    public function listInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->num) {
            @$query['Num'] = $request->num;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->saleId) {
            @$query['SaleId'] = $request->saleId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstance',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of instances.
     *
     * @param request - ListInstanceRequest
     *
     * @returns ListInstanceResponse
     *
     * @param ListInstanceRequest $request
     *
     * @return ListInstanceResponse
     */
    public function listInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the CIDR blocks of an anti-DDoS diversion instance.
     *
     * @param request - QueryNetListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryNetListResponse
     *
     * @param QueryNetListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QueryNetListResponse
     */
    public function queryNetListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mainNet) {
            @$query['MainNet'] = $request->mainNet;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->net) {
            @$query['Net'] = $request->net;
        }

        if (null !== $request->num) {
            @$query['Num'] = $request->num;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->saleId) {
            @$query['SaleId'] = $request->saleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryNetList',
            'version' => '2023-07-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryNetListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the CIDR blocks of an anti-DDoS diversion instance.
     *
     * @param request - QueryNetListRequest
     *
     * @returns QueryNetListResponse
     *
     * @param QueryNetListRequest $request
     *
     * @return QueryNetListResponse
     */
    public function queryNetList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryNetListWithOptions($request, $runtime);
    }
}
