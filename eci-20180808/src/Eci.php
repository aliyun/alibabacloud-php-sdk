<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateImageCacheRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateImageCacheResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteContainerGroupRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteContainerGroupResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteImageCacheRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DeleteImageCacheResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupMetricResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerLogRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerLogResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\ExecContainerCommandRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\ExecContainerCommandResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\ListUsageRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\ListUsageResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\RestartContainerGroupRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\RestartContainerGroupResponse;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Eci extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eci', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateContainerGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateContainerGroupResponse
     */
    public function createContainerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateContainerGroupResponse::fromMap($this->doRPCRequest('CreateContainerGroup', '2018-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateContainerGroupRequest $request
     *
     * @return CreateContainerGroupResponse
     */
    public function createContainerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createContainerGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateImageCacheRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateImageCacheResponse
     */
    public function createImageCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateImageCacheResponse::fromMap($this->doRPCRequest('CreateImageCache', '2018-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateImageCacheRequest $request
     *
     * @return CreateImageCacheResponse
     */
    public function createImageCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageCacheWithOptions($request, $runtime);
    }

    /**
     * @param DeleteContainerGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteContainerGroupResponse
     */
    public function deleteContainerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteContainerGroupResponse::fromMap($this->doRPCRequest('DeleteContainerGroup', '2018-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteContainerGroupRequest $request
     *
     * @return DeleteContainerGroupResponse
     */
    public function deleteContainerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContainerGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteImageCacheRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteImageCacheResponse
     */
    public function deleteImageCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteImageCacheResponse::fromMap($this->doRPCRequest('DeleteImageCache', '2018-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteImageCacheRequest $request
     *
     * @return DeleteImageCacheResponse
     */
    public function deleteImageCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageCacheWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContainerGroupMetricRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeContainerGroupMetricResponse
     */
    public function describeContainerGroupMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeContainerGroupMetricResponse::fromMap($this->doRPCRequest('DescribeContainerGroupMetric', '2018-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeContainerGroupMetricRequest $request
     *
     * @return DescribeContainerGroupMetricResponse
     */
    public function describeContainerGroupMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerGroupMetricWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContainerGroupPriceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeContainerGroupPriceResponse
     */
    public function describeContainerGroupPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeContainerGroupPriceResponse::fromMap($this->doRPCRequest('DescribeContainerGroupPrice', '2018-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeContainerGroupPriceRequest $request
     *
     * @return DescribeContainerGroupPriceResponse
     */
    public function describeContainerGroupPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerGroupPriceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContainerGroupsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeContainerGroupsResponse
     */
    public function describeContainerGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeContainerGroupsResponse::fromMap($this->doRPCRequest('DescribeContainerGroups', '2018-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeContainerGroupsRequest $request
     *
     * @return DescribeContainerGroupsResponse
     */
    public function describeContainerGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContainerLogRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeContainerLogResponse
     */
    public function describeContainerLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeContainerLogResponse::fromMap($this->doRPCRequest('DescribeContainerLog', '2018-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeContainerLogRequest $request
     *
     * @return DescribeContainerLogResponse
     */
    public function describeContainerLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageCachesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeImageCachesResponse
     */
    public function describeImageCachesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeImageCachesResponse::fromMap($this->doRPCRequest('DescribeImageCaches', '2018-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeImageCachesRequest $request
     *
     * @return DescribeImageCachesResponse
     */
    public function describeImageCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageCachesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMultiContainerGroupMetricRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeMultiContainerGroupMetricResponse
     */
    public function describeMultiContainerGroupMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMultiContainerGroupMetricResponse::fromMap($this->doRPCRequest('DescribeMultiContainerGroupMetric', '2018-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMultiContainerGroupMetricRequest $request
     *
     * @return DescribeMultiContainerGroupMetricResponse
     */
    public function describeMultiContainerGroupMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMultiContainerGroupMetricWithOptions($request, $runtime);
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

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2018-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ExecContainerCommandRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ExecContainerCommandResponse
     */
    public function execContainerCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecContainerCommandResponse::fromMap($this->doRPCRequest('ExecContainerCommand', '2018-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExecContainerCommandRequest $request
     *
     * @return ExecContainerCommandResponse
     */
    public function execContainerCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->execContainerCommandWithOptions($request, $runtime);
    }

    /**
     * @param ListUsageRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsageResponse
     */
    public function listUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUsageResponse::fromMap($this->doRPCRequest('ListUsage', '2018-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUsageRequest $request
     *
     * @return ListUsageResponse
     */
    public function listUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsageWithOptions($request, $runtime);
    }

    /**
     * @param RestartContainerGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RestartContainerGroupResponse
     */
    public function restartContainerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestartContainerGroupResponse::fromMap($this->doRPCRequest('RestartContainerGroup', '2018-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RestartContainerGroupRequest $request
     *
     * @return RestartContainerGroupResponse
     */
    public function restartContainerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartContainerGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateContainerGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateContainerGroupResponse
     */
    public function updateContainerGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateContainerGroupResponse::fromMap($this->doRPCRequest('UpdateContainerGroup', '2018-08-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateContainerGroupRequest $request
     *
     * @return UpdateContainerGroupResponse
     */
    public function updateContainerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContainerGroupWithOptions($request, $runtime);
    }
}
