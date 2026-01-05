<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\BindEndpointResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\CreateEndpointRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\CreateEndpointResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\CreateSlotRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\CreateSlotResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\CreateSlotsRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\CreateSlotsResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\CreateTagRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\CreateTagResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\DeleteEndpointResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\DeleteSlotRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\DeleteSlotResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\DeleteTagRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\DeleteTagResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\DescribeComponentRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\DescribeComponentResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\DescribeComponentShrinkRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\DescribeEndpointResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\DescribeSlotResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\ListComponentsRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\ListComponentsResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\ListEndpointsRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\ListEndpointsResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\ListInstancesRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\ListInstancesResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\ListSlotsRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\ListSlotsResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\ListTagsRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\ListTagsResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\QueryInstanceMetricsRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\QueryInstanceMetricsResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\QueryInstanceMetricsShrinkRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\QuerySlotMetricsRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\QuerySlotMetricsResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\QuerySlotMetricsShrinkRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\QueryStatisticRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\QueryStatisticResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\ReloadSlotResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\StopSlotResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\UnbindEndpointResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\UpdateSlotRequest;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\UpdateSlotResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class PAIElasticDatasetAccelerator extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('paielasticdatasetaccelerator', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 将一个挂载点关联到一个数据集加速槽上。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindEndpointResponse
     *
     * @param string         $EndpointId
     * @param string         $SlotId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return BindEndpointResponse
     */
    public function bindEndpointWithOptions($EndpointId, $SlotId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'BindEndpoint',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/endpoints/' . Url::percentEncode($EndpointId) . '/slots/' . Url::percentEncode($SlotId) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BindEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将一个挂载点关联到一个数据集加速槽上。
     *
     * @returns BindEndpointResponse
     *
     * @param string $EndpointId
     * @param string $SlotId
     *
     * @return BindEndpointResponse
     */
    public function bindEndpoint($EndpointId, $SlotId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->bindEndpointWithOptions($EndpointId, $SlotId, $headers, $runtime);
    }

    /**
     * 创建并注册一个数据集加速槽挂载点。
     *
     * @param request - CreateEndpointRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEndpointResponse
     *
     * @param CreateEndpointRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateEndpointResponse
     */
    public function createEndpointWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vswitchId) {
            @$body['VswitchId'] = $request->vswitchId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEndpoint',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/endpoints',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建并注册一个数据集加速槽挂载点。
     *
     * @param request - CreateEndpointRequest
     *
     * @returns CreateEndpointResponse
     *
     * @param CreateEndpointRequest $request
     *
     * @return CreateEndpointResponse
     */
    public function createEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEndpointWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建数据集加速实例.
     *
     * @param request - CreateInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->capacity) {
            @$body['Capacity'] = $request->capacity;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->maxEndpoint) {
            @$body['MaxEndpoint'] = $request->maxEndpoint;
        }

        if (null !== $request->maxSlot) {
            @$body['MaxSlot'] = $request->maxSlot;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->paymentType) {
            @$body['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->providerType) {
            @$body['ProviderType'] = $request->providerType;
        }

        if (null !== $request->storageType) {
            @$body['StorageType'] = $request->storageType;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建数据集加速实例.
     *
     * @param request - CreateInstanceRequest
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建并注册一个 数据集加速槽。
     *
     * @param request - CreateSlotRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSlotResponse
     *
     * @param CreateSlotRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateSlotResponse
     */
    public function createSlotWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->capacity) {
            @$body['Capacity'] = $request->capacity;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->endpointIds) {
            @$body['EndpointIds'] = $request->endpointIds;
        }

        if (null !== $request->endpoints) {
            @$body['Endpoints'] = $request->endpoints;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ioType) {
            @$body['IoType'] = $request->ioType;
        }

        if (null !== $request->lifeCycle) {
            @$body['LifeCycle'] = $request->lifeCycle;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->storageType) {
            @$body['StorageType'] = $request->storageType;
        }

        if (null !== $request->storageUri) {
            @$body['StorageUri'] = $request->storageUri;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSlot',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/slots',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSlotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建并注册一个 数据集加速槽。
     *
     * @param request - CreateSlotRequest
     *
     * @returns CreateSlotResponse
     *
     * @param CreateSlotRequest $request
     *
     * @return CreateSlotResponse
     */
    public function createSlot($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSlotWithOptions($request, $headers, $runtime);
    }

    /**
     * 同时创建并注册多个数据集加速槽，并使用相同的一组数据加速槽挂载点。
     *
     * @param request - CreateSlotsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSlotsResponse
     *
     * @param CreateSlotsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSlotsResponse
     */
    public function createSlotsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dryRun) {
            @$body['DryRun'] = $request->dryRun;
        }

        if (null !== $request->slots) {
            @$body['Slots'] = $request->slots;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSlots',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/batch/slots/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSlotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 同时创建并注册多个数据集加速槽，并使用相同的一组数据加速槽挂载点。
     *
     * @param request - CreateSlotsRequest
     *
     * @returns CreateSlotsResponse
     *
     * @param CreateSlotsRequest $request
     *
     * @return CreateSlotsResponse
     */
    public function createSlots($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSlotsWithOptions($request, $headers, $runtime);
    }

    /**
     * 针对一个资源，创建一个标签。
     *
     * @param request - CreateTagRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTagResponse
     *
     * @param CreateTagRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateTagResponse
     */
    public function createTagWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->key) {
            @$body['Key'] = $request->key;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$body['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->value) {
            @$body['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTag',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 针对一个资源，创建一个标签。
     *
     * @param request - CreateTagRequest
     *
     * @returns CreateTagResponse
     *
     * @param CreateTagRequest $request
     *
     * @return CreateTagResponse
     */
    public function createTag($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTagWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除一个数据集加速槽挂载点。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEndpointResponse
     *
     * @param string         $EndpointId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteEndpointResponse
     */
    public function deleteEndpointWithOptions($EndpointId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteEndpoint',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/endpoints/' . Url::percentEncode($EndpointId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除一个数据集加速槽挂载点。
     *
     * @returns DeleteEndpointResponse
     *
     * @param string $EndpointId
     *
     * @return DeleteEndpointResponse
     */
    public function deleteEndpoint($EndpointId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEndpointWithOptions($EndpointId, $headers, $runtime);
    }

    /**
     * 删除一个数据集加速实例。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除一个数据集加速实例。
     *
     * @returns DeleteInstanceResponse
     *
     * @param string $InstanceId
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * 删除一个数据集加速槽。
     *
     * @param request - DeleteSlotRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSlotResponse
     *
     * @param string            $SlotId
     * @param DeleteSlotRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteSlotResponse
     */
    public function deleteSlotWithOptions($SlotId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSlot',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/slots/' . Url::percentEncode($SlotId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSlotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除一个数据集加速槽。
     *
     * @param request - DeleteSlotRequest
     *
     * @returns DeleteSlotResponse
     *
     * @param string            $SlotId
     * @param DeleteSlotRequest $request
     *
     * @return DeleteSlotResponse
     */
    public function deleteSlot($SlotId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSlotWithOptions($SlotId, $request, $headers, $runtime);
    }

    /**
     * 删除一个资源上的一个标签。
     *
     * @param request - DeleteTagRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTagResponse
     *
     * @param DeleteTagRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteTagResponse
     */
    public function deleteTagWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTag',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tags',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除一个资源上的一个标签。
     *
     * @param request - DeleteTagRequest
     *
     * @returns DeleteTagResponse
     *
     * @param DeleteTagRequest $request
     *
     * @return DeleteTagResponse
     */
    public function deleteTag($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTagWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取指定数据集加速组件的信息。
     *
     * @param tmpReq - DescribeComponentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeComponentResponse
     *
     * @param string                   $ComponentId
     * @param DescribeComponentRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeComponentResponse
     */
    public function describeComponentWithOptions($ComponentId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeComponentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->values) {
            $request->valuesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->values, 'Values', 'json');
        }

        $query = [];
        if (null !== $request->renderTemplate) {
            @$query['RenderTemplate'] = $request->renderTemplate;
        }

        if (null !== $request->valuesShrink) {
            @$query['Values'] = $request->valuesShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeComponent',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/components/' . Url::percentEncode($ComponentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeComponentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定数据集加速组件的信息。
     *
     * @param request - DescribeComponentRequest
     *
     * @returns DescribeComponentResponse
     *
     * @param string                   $ComponentId
     * @param DescribeComponentRequest $request
     *
     * @return DescribeComponentResponse
     */
    public function describeComponent($ComponentId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeComponentWithOptions($ComponentId, $request, $headers, $runtime);
    }

    /**
     * 获取指定数据集加速槽挂载点的信息。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEndpointResponse
     *
     * @param string         $EndpointId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeEndpointResponse
     */
    public function describeEndpointWithOptions($EndpointId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeEndpoint',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/endpoints/' . Url::percentEncode($EndpointId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定数据集加速槽挂载点的信息。
     *
     * @returns DescribeEndpointResponse
     *
     * @param string $EndpointId
     *
     * @return DescribeEndpointResponse
     */
    public function describeEndpoint($EndpointId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeEndpointWithOptions($EndpointId, $headers, $runtime);
    }

    /**
     * 获取指定数据集加速实例信息。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceResponse
     *
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeInstance',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定数据集加速实例信息。
     *
     * @returns DescribeInstanceResponse
     *
     * @param string $InstanceId
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * 获取指定数据集加速槽的信息。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSlotResponse
     *
     * @param string         $SlotId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSlotResponse
     */
    public function describeSlotWithOptions($SlotId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DescribeSlot',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/slots/' . Url::percentEncode($SlotId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeSlotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定数据集加速槽的信息。
     *
     * @returns DescribeSlotResponse
     *
     * @param string $SlotId
     *
     * @return DescribeSlotResponse
     */
    public function describeSlot($SlotId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSlotWithOptions($SlotId, $headers, $runtime);
    }

    /**
     * 获取数据集加速组件的信息列表。
     *
     * @param request - ListComponentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListComponentsResponse
     *
     * @param ListComponentsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListComponentsResponse
     */
    public function listComponentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->componentIds) {
            @$query['ComponentIds'] = $request->componentIds;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->version) {
            @$query['Version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListComponents',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/components',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据集加速组件的信息列表。
     *
     * @param request - ListComponentsRequest
     *
     * @returns ListComponentsResponse
     *
     * @param ListComponentsRequest $request
     *
     * @return ListComponentsResponse
     */
    public function listComponents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listComponentsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取数据集加速槽挂载点的信息列表。
     *
     * @param request - ListEndpointsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEndpointsResponse
     *
     * @param ListEndpointsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListEndpointsResponse
     */
    public function listEndpointsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointIds) {
            @$query['EndpointIds'] = $request->endpointIds;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->slotIds) {
            @$query['SlotIds'] = $request->slotIds;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEndpoints',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/endpoints',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据集加速槽挂载点的信息列表。
     *
     * @param request - ListEndpointsRequest
     *
     * @returns ListEndpointsResponse
     *
     * @param ListEndpointsRequest $request
     *
     * @return ListEndpointsResponse
     */
    public function listEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEndpointsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取数据集加速实例信息列表。
     *
     * @param request - ListInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->phase) {
            @$query['Phase'] = $request->phase;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据集加速实例信息列表。
     *
     * @param request - ListInstancesRequest
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取数据集加速槽的信息列表。
     *
     * @param request - ListSlotsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSlotsResponse
     *
     * @param ListSlotsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListSlotsResponse
     */
    public function listSlotsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endpointIds) {
            @$query['EndpointIds'] = $request->endpointIds;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->phase) {
            @$query['Phase'] = $request->phase;
        }

        if (null !== $request->slotIds) {
            @$query['SlotIds'] = $request->slotIds;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        if (null !== $request->storageUri) {
            @$query['StorageUri'] = $request->storageUri;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSlots',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/slots',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSlotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据集加速槽的信息列表。
     *
     * @param request - ListSlotsRequest
     *
     * @returns ListSlotsResponse
     *
     * @param ListSlotsRequest $request
     *
     * @return ListSlotsResponse
     */
    public function listSlots($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSlotsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取标签列表信息。
     *
     * @param request - ListTagsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagsResponse
     *
     * @param ListTagsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListTagsResponse
     */
    public function listTagsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->value) {
            @$query['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTags',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tags',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取标签列表信息。
     *
     * @param request - ListTagsRequest
     *
     * @returns ListTagsResponse
     *
     * @param ListTagsRequest $request
     *
     * @return ListTagsResponse
     */
    public function listTags($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTagsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询并获取监控指标信息。
     *
     * @param tmpReq - QueryInstanceMetricsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryInstanceMetricsResponse
     *
     * @param string                      $InstanceId
     * @param QueryInstanceMetricsRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return QueryInstanceMetricsResponse
     */
    public function queryInstanceMetricsWithOptions($InstanceId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryInstanceMetricsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dimensions) {
            $request->dimensionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dimensions, 'Dimensions', 'json');
        }

        $query = [];
        if (null !== $request->dimensionsShrink) {
            @$query['Dimensions'] = $request->dimensionsShrink;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->metricType) {
            @$query['MetricType'] = $request->metricType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->timeStep) {
            @$query['TimeStep'] = $request->timeStep;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryInstanceMetrics',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '/metrics/action/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryInstanceMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询并获取监控指标信息。
     *
     * @param request - QueryInstanceMetricsRequest
     *
     * @returns QueryInstanceMetricsResponse
     *
     * @param string                      $InstanceId
     * @param QueryInstanceMetricsRequest $request
     *
     * @return QueryInstanceMetricsResponse
     */
    public function queryInstanceMetrics($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryInstanceMetricsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * 查询并获取监控指标信息.
     *
     * @param tmpReq - QuerySlotMetricsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySlotMetricsResponse
     *
     * @param string                  $SlotId
     * @param QuerySlotMetricsRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySlotMetricsResponse
     */
    public function querySlotMetricsWithOptions($SlotId, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new QuerySlotMetricsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dimensions) {
            $request->dimensionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dimensions, 'Dimensions', 'json');
        }

        $query = [];
        if (null !== $request->dimensionsShrink) {
            @$query['Dimensions'] = $request->dimensionsShrink;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->metricType) {
            @$query['MetricType'] = $request->metricType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->timeStep) {
            @$query['TimeStep'] = $request->timeStep;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySlotMetrics',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/slots/' . Url::percentEncode($SlotId) . '/metrics/action/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QuerySlotMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询并获取监控指标信息.
     *
     * @param request - QuerySlotMetricsRequest
     *
     * @returns QuerySlotMetricsResponse
     *
     * @param string                  $SlotId
     * @param QuerySlotMetricsRequest $request
     *
     * @return QuerySlotMetricsResponse
     */
    public function querySlotMetrics($SlotId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySlotMetricsWithOptions($SlotId, $request, $headers, $runtime);
    }

    /**
     * 查询当前账号下数据集加速相关的统计信息。
     *
     * @param request - QueryStatisticRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryStatisticResponse
     *
     * @param QueryStatisticRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return QueryStatisticResponse
     */
    public function queryStatisticWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->fields) {
            @$query['Fields'] = $request->fields;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryStatistic',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/statistics/action/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return QueryStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询当前账号下数据集加速相关的统计信息。
     *
     * @param request - QueryStatisticRequest
     *
     * @returns QueryStatisticResponse
     *
     * @param QueryStatisticRequest $request
     *
     * @return QueryStatisticResponse
     */
    public function queryStatistic($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryStatisticWithOptions($request, $headers, $runtime);
    }

    /**
     * 重载数据加速槽的数据.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReloadSlotResponse
     *
     * @param string         $SlotId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ReloadSlotResponse
     */
    public function reloadSlotWithOptions($SlotId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ReloadSlot',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/slots/' . Url::percentEncode($SlotId) . '/action/reload',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReloadSlotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重载数据加速槽的数据.
     *
     * @returns ReloadSlotResponse
     *
     * @param string $SlotId
     *
     * @return ReloadSlotResponse
     */
    public function reloadSlot($SlotId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reloadSlotWithOptions($SlotId, $headers, $runtime);
    }

    /**
     * 停止一个数据集加速槽。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopSlotResponse
     *
     * @param string         $SlotId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopSlotResponse
     */
    public function stopSlotWithOptions($SlotId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopSlot',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/slots/' . Url::percentEncode($SlotId) . '/action/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopSlotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止一个数据集加速槽。
     *
     * @returns StopSlotResponse
     *
     * @param string $SlotId
     *
     * @return StopSlotResponse
     */
    public function stopSlot($SlotId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopSlotWithOptions($SlotId, $headers, $runtime);
    }

    /**
     * 取消挂载点关联和指定数据集加速槽的关联关系。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindEndpointResponse
     *
     * @param string         $EndpointId
     * @param string         $SlotId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UnbindEndpointResponse
     */
    public function unbindEndpointWithOptions($EndpointId, $SlotId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'UnbindEndpoint',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/endpoints/' . Url::percentEncode($EndpointId) . '/slots/' . Url::percentEncode($SlotId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnbindEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消挂载点关联和指定数据集加速槽的关联关系。
     *
     * @returns UnbindEndpointResponse
     *
     * @param string $EndpointId
     * @param string $SlotId
     *
     * @return UnbindEndpointResponse
     */
    public function unbindEndpoint($EndpointId, $SlotId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unbindEndpointWithOptions($EndpointId, $SlotId, $headers, $runtime);
    }

    /**
     * 更新一个数据集加速实例的信息。
     *
     * @param request - UpdateInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceResponse
     *
     * @param string                $InstanceId
     * @param UpdateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->maxSlot) {
            @$body['MaxSlot'] = $request->maxSlot;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstance',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($InstanceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新一个数据集加速实例的信息。
     *
     * @param request - UpdateInstanceRequest
     *
     * @returns UpdateInstanceResponse
     *
     * @param string                $InstanceId
     * @param UpdateInstanceRequest $request
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstance($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * 更新一个数据集加速槽的信息。
     *
     * @param request - UpdateSlotRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSlotResponse
     *
     * @param string            $SlotId
     * @param UpdateSlotRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateSlotResponse
     */
    public function updateSlotWithOptions($SlotId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->capacity) {
            @$body['Capacity'] = $request->capacity;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->lifeCycle) {
            @$body['LifeCycle'] = $request->lifeCycle;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->storageType) {
            @$body['StorageType'] = $request->storageType;
        }

        if (null !== $request->storageUri) {
            @$body['StorageUri'] = $request->storageUri;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSlot',
            'version' => '2022-08-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/slots/' . Url::percentEncode($SlotId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSlotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新一个数据集加速槽的信息。
     *
     * @param request - UpdateSlotRequest
     *
     * @returns UpdateSlotResponse
     *
     * @param string            $SlotId
     * @param UpdateSlotRequest $request
     *
     * @return UpdateSlotResponse
     */
    public function updateSlot($SlotId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSlotWithOptions($SlotId, $request, $headers, $runtime);
    }
}
