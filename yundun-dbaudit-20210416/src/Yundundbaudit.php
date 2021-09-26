<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20210416;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\ClearInstanceStorageRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\ClearInstanceStorageResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\CreateInstanceConnectionRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\CreateInstanceConnectionResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\DeleteInstanceConnectionRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\DeleteInstanceConnectionResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\DescribeInstanceAttributeRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\DescribeInstanceAttributeResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\DescribeInstanceStorageRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\DescribeInstanceStorageResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\ModifyInstanceAttributeRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\ModifyInstanceAttributeResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\ModifyInstanceStorageRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\ModifyInstanceStorageResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\RefundInstanceRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\RefundInstanceResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\UpdateInstanceConnectionRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\UpdateInstanceConnectionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Yundundbaudit extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('yundun-dbaudit', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ClearInstanceStorageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ClearInstanceStorageResponse
     */
    public function clearInstanceStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ClearInstanceStorageResponse::fromMap($this->doRPCRequest('ClearInstanceStorage', '2021-04-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ClearInstanceStorageRequest $request
     *
     * @return ClearInstanceStorageResponse
     */
    public function clearInstanceStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearInstanceStorageWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateInstanceConnectionResponse
     */
    public function createInstanceConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateInstanceConnectionResponse::fromMap($this->doRPCRequest('CreateInstanceConnection', '2021-04-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateInstanceConnectionRequest $request
     *
     * @return CreateInstanceConnectionResponse
     */
    public function createInstanceConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceConnectionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstanceConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteInstanceConnectionResponse
     */
    public function deleteInstanceConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteInstanceConnectionResponse::fromMap($this->doRPCRequest('DeleteInstanceConnection', '2021-04-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteInstanceConnectionRequest $request
     *
     * @return DeleteInstanceConnectionResponse
     */
    public function deleteInstanceConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceConnectionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceAttributeResponse::fromMap($this->doRPCRequest('DescribeInstanceAttribute', '2021-04-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceAttributeRequest $request
     *
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstancesResponse::fromMap($this->doRPCRequest('DescribeInstances', '2021-04-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstancesRequest $request
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceStorageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceStorageResponse
     */
    public function describeInstanceStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceStorageResponse::fromMap($this->doRPCRequest('DescribeInstanceStorage', '2021-04-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceStorageRequest $request
     *
     * @return DescribeInstanceStorageResponse
     */
    public function describeInstanceStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceStorageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2021-04-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagKeysResponse::fromMap($this->doRPCRequest('ListTagKeys', '2021-04-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2021-04-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceAttributeResponse::fromMap($this->doRPCRequest('ModifyInstanceAttribute', '2021-04-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceAttributeRequest $request
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceStorageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyInstanceStorageResponse
     */
    public function modifyInstanceStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceStorageResponse::fromMap($this->doRPCRequest('ModifyInstanceStorage', '2021-04-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceStorageRequest $request
     *
     * @return ModifyInstanceStorageResponse
     */
    public function modifyInstanceStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceStorageWithOptions($request, $runtime);
    }

    /**
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MoveResourceGroupResponse::fromMap($this->doRPCRequest('MoveResourceGroup', '2021-04-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MoveResourceGroupRequest $request
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param RefundInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RefundInstanceResponse
     */
    public function refundInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefundInstanceResponse::fromMap($this->doRPCRequest('RefundInstance', '2021-04-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RefundInstanceRequest $request
     *
     * @return RefundInstanceResponse
     */
    public function refundInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundInstanceWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2021-04-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2021-04-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateInstanceConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateInstanceConnectionResponse
     */
    public function updateInstanceConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateInstanceConnectionResponse::fromMap($this->doRPCRequest('UpdateInstanceConnection', '2021-04-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateInstanceConnectionRequest $request
     *
     * @return UpdateInstanceConnectionResponse
     */
    public function updateInstanceConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceConnectionWithOptions($request, $runtime);
    }
}
