<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaStreaming\V20260202;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\CreateComputeInstanceRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\CreateComputeInstanceResponse;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\DeleteComputeInstanceRequest;
use AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\DeleteComputeInstanceResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AlikafkaStreaming extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('alikafkastreaming', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建 流计算实例.
     *
     * @param request - CreateComputeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateComputeInstanceResponse
     *
     * @param CreateComputeInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateComputeInstanceResponse
     */
    public function createComputeInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paidType) {
            @$query['PaidType'] = $request->paidType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateComputeInstance',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateComputeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建 流计算实例.
     *
     * @param request - CreateComputeInstanceRequest
     *
     * @returns CreateComputeInstanceResponse
     *
     * @param CreateComputeInstanceRequest $request
     *
     * @return CreateComputeInstanceResponse
     */
    public function createComputeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createComputeInstanceWithOptions($request, $runtime);
    }

    /**
     * 删除实例.
     *
     * @param request - DeleteComputeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteComputeInstanceResponse
     *
     * @param DeleteComputeInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteComputeInstanceResponse
     */
    public function deleteComputeInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteComputeInstance',
            'version' => '2026-02-02',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteComputeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除实例.
     *
     * @param request - DeleteComputeInstanceRequest
     *
     * @returns DeleteComputeInstanceResponse
     *
     * @param DeleteComputeInstanceRequest $request
     *
     * @return DeleteComputeInstanceResponse
     */
    public function deleteComputeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteComputeInstanceWithOptions($request, $runtime);
    }
}
