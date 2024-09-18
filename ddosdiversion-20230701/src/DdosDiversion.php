<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\ConfigNetStatusRequest;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\ConfigNetStatusResponse;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\ListInstanceRequest;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\ListInstanceResponse;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListRequest;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class DdosDiversion extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Configures the advertising of a CIDR block.
     *  *
     * @param ConfigNetStatusRequest $request ConfigNetStatusRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigNetStatusResponse ConfigNetStatusResponse
     */
    public function configNetStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->net)) {
            $query['Net'] = $request->net;
        }
        if (!Utils::isUnset($request->regions)) {
            $query['Regions'] = $request->regions;
        }
        if (!Utils::isUnset($request->saleId)) {
            $query['SaleId'] = $request->saleId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->subNets)) {
            $query['SubNets'] = $request->subNets;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigNetStatus',
            'version'     => '2023-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigNetStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures the advertising of a CIDR block.
     *  *
     * @param ConfigNetStatusRequest $request ConfigNetStatusRequest
     *
     * @return ConfigNetStatusResponse ConfigNetStatusResponse
     */
    public function configNetStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configNetStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries anti-DDoS diversion instances.
     *  *
     * @param ListInstanceRequest $request ListInstanceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstanceResponse ListInstanceResponse
     */
    public function listInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->num)) {
            $query['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->saleId)) {
            $query['SaleId'] = $request->saleId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstance',
            'version'     => '2023-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries anti-DDoS diversion instances.
     *  *
     * @param ListInstanceRequest $request ListInstanceRequest
     *
     * @return ListInstanceResponse ListInstanceResponse
     */
    public function listInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the CIDR blocks of an anti-DDoS diversion instance.
     *  *
     * @param QueryNetListRequest $request QueryNetListRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryNetListResponse QueryNetListResponse
     */
    public function queryNetListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mainNet)) {
            $query['MainNet'] = $request->mainNet;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->net)) {
            $query['Net'] = $request->net;
        }
        if (!Utils::isUnset($request->num)) {
            $query['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->saleId)) {
            $query['SaleId'] = $request->saleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryNetList',
            'version'     => '2023-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryNetListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the CIDR blocks of an anti-DDoS diversion instance.
     *  *
     * @param QueryNetListRequest $request QueryNetListRequest
     *
     * @return QueryNetListResponse QueryNetListResponse
     */
    public function queryNetList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryNetListWithOptions($request, $runtime);
    }
}
