<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapioxscross\V20200701;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Viapioxscross\V20200701\Models\CreateSDKInstanceRequest;
use AlibabaCloud\SDK\Viapioxscross\V20200701\Models\CreateSDKInstanceResponse;
use AlibabaCloud\SDK\Viapioxscross\V20200701\Models\GetSDKInstanceDebugInfoRequest;
use AlibabaCloud\SDK\Viapioxscross\V20200701\Models\GetSDKInstanceDebugInfoResponse;
use AlibabaCloud\SDK\Viapioxscross\V20200701\Models\QuerySDKInstancesRequest;
use AlibabaCloud\SDK\Viapioxscross\V20200701\Models\QuerySDKInstancesResponse;
use AlibabaCloud\SDK\Viapioxscross\V20200701\Models\StartSDKInstanceProductionRequest;
use AlibabaCloud\SDK\Viapioxscross\V20200701\Models\StartSDKInstanceProductionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Viapioxscross extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('viapi-oxs-cross', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateSDKInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateSDKInstanceResponse
     */
    public function createSDKInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bundleId)) {
            $query['BundleId'] = $request->bundleId;
        }
        if (!Utils::isUnset($request->pk)) {
            $query['Pk'] = $request->pk;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->recipe)) {
            $query['Recipe'] = $request->recipe;
        }
        if (!Utils::isUnset($request->validFrom)) {
            $query['ValidFrom'] = $request->validFrom;
        }
        if (!Utils::isUnset($request->validTo)) {
            $query['ValidTo'] = $request->validTo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSDKInstance',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSDKInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSDKInstanceRequest $request
     *
     * @return CreateSDKInstanceResponse
     */
    public function createSDKInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSDKInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetSDKInstanceDebugInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetSDKInstanceDebugInfoResponse
     */
    public function getSDKInstanceDebugInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSDKInstanceDebugInfo',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSDKInstanceDebugInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSDKInstanceDebugInfoRequest $request
     *
     * @return GetSDKInstanceDebugInfoResponse
     */
    public function getSDKInstanceDebugInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSDKInstanceDebugInfoWithOptions($request, $runtime);
    }

    /**
     * @param QuerySDKInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QuerySDKInstancesResponse
     */
    public function querySDKInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->codeList)) {
            $query['CodeList'] = $request->codeList;
        }
        if (!Utils::isUnset($request->createdAfterDate)) {
            $query['CreatedAfterDate'] = $request->createdAfterDate;
        }
        if (!Utils::isUnset($request->createdBeforeDate)) {
            $query['CreatedBeforeDate'] = $request->createdBeforeDate;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pk)) {
            $query['Pk'] = $request->pk;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySDKInstances',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySDKInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySDKInstancesRequest $request
     *
     * @return QuerySDKInstancesResponse
     */
    public function querySDKInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySDKInstancesWithOptions($request, $runtime);
    }

    /**
     * @param StartSDKInstanceProductionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return StartSDKInstanceProductionResponse
     */
    public function startSDKInstanceProductionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartSDKInstanceProduction',
            'version'     => '2020-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartSDKInstanceProductionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartSDKInstanceProductionRequest $request
     *
     * @return StartSDKInstanceProductionResponse
     */
    public function startSDKInstanceProduction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSDKInstanceProductionWithOptions($request, $runtime);
    }
}
