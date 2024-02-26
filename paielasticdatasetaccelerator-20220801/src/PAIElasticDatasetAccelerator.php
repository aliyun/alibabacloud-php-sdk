<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
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
            'action'      => 'BindEndpoint',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/endpoints/' . OpenApiUtilClient::getEncodeParam($EndpointId) . '/slots/' . OpenApiUtilClient::getEncodeParam($SlotId) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BindEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateEndpointRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateEndpointResponse
     */
    public function createEndpointWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vswitchId)) {
            $body['VswitchId'] = $request->vswitchId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEndpoint',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/endpoints',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->capacity)) {
            $body['Capacity'] = $request->capacity;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->maxEndpoint)) {
            $body['MaxEndpoint'] = $request->maxEndpoint;
        }
        if (!Utils::isUnset($request->maxSlot)) {
            $body['MaxSlot'] = $request->maxSlot;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $body['PaymentType'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->providerType)) {
            $body['ProviderType'] = $request->providerType;
        }
        if (!Utils::isUnset($request->storageType)) {
            $body['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateSlotRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateSlotResponse
     */
    public function createSlotWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->capacity)) {
            $body['Capacity'] = $request->capacity;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endpointIds)) {
            $body['EndpointIds'] = $request->endpointIds;
        }
        if (!Utils::isUnset($request->endpoints)) {
            $body['Endpoints'] = $request->endpoints;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ioType)) {
            $body['IoType'] = $request->ioType;
        }
        if (!Utils::isUnset($request->lifeCycle)) {
            $body['LifeCycle'] = $request->lifeCycle;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->storageType)) {
            $body['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->storageUri)) {
            $body['StorageUri'] = $request->storageUri;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSlot',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/slots',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSlotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateSlotsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSlotsResponse
     */
    public function createSlotsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dryRun)) {
            $body['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->slots)) {
            $body['Slots'] = $request->slots;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSlots',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/batch/slots/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSlotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateTagRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateTagResponse
     */
    public function createTagWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->key)) {
            $body['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->value)) {
            $body['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTag',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tags',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DeleteEndpoint',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/endpoints/' . OpenApiUtilClient::getEncodeParam($EndpointId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DeleteInstance',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string            $SlotId
     * @param DeleteSlotRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteSlotResponse
     */
    public function deleteSlotWithOptions($SlotId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSlot',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/slots/' . OpenApiUtilClient::getEncodeParam($SlotId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSlotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteTagRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteTagResponse
     */
    public function deleteTagWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTag',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tags',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                   $ComponentId
     * @param DescribeComponentRequest $tmpReq
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeComponentResponse
     */
    public function describeComponentWithOptions($ComponentId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeComponentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->values)) {
            $request->valuesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->values, 'Values', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->renderTemplate)) {
            $query['RenderTemplate'] = $request->renderTemplate;
        }
        if (!Utils::isUnset($request->valuesShrink)) {
            $query['Values'] = $request->valuesShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeComponent',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/components/' . OpenApiUtilClient::getEncodeParam($ComponentId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeComponentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DescribeEndpoint',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/endpoints/' . OpenApiUtilClient::getEncodeParam($EndpointId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DescribeInstance',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'DescribeSlot',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/slots/' . OpenApiUtilClient::getEncodeParam($SlotId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSlotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListComponentsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListComponentsResponse
     */
    public function listComponentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->componentIds)) {
            $query['ComponentIds'] = $request->componentIds;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListComponents',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/components',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListEndpointsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListEndpointsResponse
     */
    public function listEndpointsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointIds)) {
            $query['EndpointIds'] = $request->endpointIds;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->slotIds)) {
            $query['SlotIds'] = $request->slotIds;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEndpoints',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/endpoints',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListInstancesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $query['PaymentType'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->phase)) {
            $query['Phase'] = $request->phase;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListSlotsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListSlotsResponse
     */
    public function listSlotsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endpointIds)) {
            $query['EndpointIds'] = $request->endpointIds;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phase)) {
            $query['Phase'] = $request->phase;
        }
        if (!Utils::isUnset($request->slotIds)) {
            $query['SlotIds'] = $request->slotIds;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->storageUri)) {
            $query['StorageUri'] = $request->storageUri;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSlots',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/slots',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSlotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListTagsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListTagsResponse
     */
    public function listTagsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTags',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tags',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                      $InstanceId
     * @param QueryInstanceMetricsRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return QueryInstanceMetricsResponse
     */
    public function queryInstanceMetricsWithOptions($InstanceId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryInstanceMetricsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dimensions)) {
            $request->dimensionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dimensions, 'Dimensions', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dimensionsShrink)) {
            $query['Dimensions'] = $request->dimensionsShrink;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->timeStep)) {
            $query['TimeStep'] = $request->timeStep;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryInstanceMetrics',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/metrics/action/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryInstanceMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                  $SlotId
     * @param QuerySlotMetricsRequest $tmpReq
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySlotMetricsResponse
     */
    public function querySlotMetricsWithOptions($SlotId, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QuerySlotMetricsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dimensions)) {
            $request->dimensionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dimensions, 'Dimensions', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dimensionsShrink)) {
            $query['Dimensions'] = $request->dimensionsShrink;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->timeStep)) {
            $query['TimeStep'] = $request->timeStep;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySlotMetrics',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/slots/' . OpenApiUtilClient::getEncodeParam($SlotId) . '/metrics/action/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QuerySlotMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param QueryStatisticRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return QueryStatisticResponse
     */
    public function queryStatisticWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->fields)) {
            $query['Fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryStatistic',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/statistics/action/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'ReloadSlot',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/slots/' . OpenApiUtilClient::getEncodeParam($SlotId) . '/action/reload',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReloadSlotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'StopSlot',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/slots/' . OpenApiUtilClient::getEncodeParam($SlotId) . '/action/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopSlotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'UnbindEndpoint',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/endpoints/' . OpenApiUtilClient::getEncodeParam($EndpointId) . '/slots/' . OpenApiUtilClient::getEncodeParam($SlotId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UnbindEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                $InstanceId
     * @param UpdateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->maxSlot)) {
            $body['MaxSlot'] = $request->maxSlot;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstance',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string            $SlotId
     * @param UpdateSlotRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateSlotResponse
     */
    public function updateSlotWithOptions($SlotId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->capacity)) {
            $body['Capacity'] = $request->capacity;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->lifeCycle)) {
            $body['LifeCycle'] = $request->lifeCycle;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->storageType)) {
            $body['StorageType'] = $request->storageType;
        }
        if (!Utils::isUnset($request->storageUri)) {
            $body['StorageUri'] = $request->storageUri;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSlot',
            'version'     => '2022-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/slots/' . OpenApiUtilClient::getEncodeParam($SlotId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSlotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
