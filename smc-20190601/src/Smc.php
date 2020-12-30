<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateReplicationJobRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateReplicationJobResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\CutOverReplicationJobRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\CutOverReplicationJobResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DeleteReplicationJobRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DeleteReplicationJobResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DeleteSourceServerRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DeleteSourceServerResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\ModifyReplicationJobAttributeRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\ModifyReplicationJobAttributeResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\ModifySourceServerAttributeRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\ModifySourceServerAttributeResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\StartReplicationJobRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\StartReplicationJobResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\StopReplicationJobRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\StopReplicationJobResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Smc\V20190601\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Smc\V20190601\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Smc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('smc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateReplicationJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateReplicationJobResponse
     */
    public function createReplicationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateReplicationJobResponse::fromMap($this->doRPCRequest('CreateReplicationJob', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateReplicationJobRequest $request
     *
     * @return CreateReplicationJobResponse
     */
    public function createReplicationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createReplicationJobWithOptions($request, $runtime);
    }

    /**
     * @param CutOverReplicationJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CutOverReplicationJobResponse
     */
    public function cutOverReplicationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CutOverReplicationJobResponse::fromMap($this->doRPCRequest('CutOverReplicationJob', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CutOverReplicationJobRequest $request
     *
     * @return CutOverReplicationJobResponse
     */
    public function cutOverReplicationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cutOverReplicationJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteReplicationJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteReplicationJobResponse
     */
    public function deleteReplicationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteReplicationJobResponse::fromMap($this->doRPCRequest('DeleteReplicationJob', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteReplicationJobRequest $request
     *
     * @return DeleteReplicationJobResponse
     */
    public function deleteReplicationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteReplicationJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSourceServerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteSourceServerResponse
     */
    public function deleteSourceServerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSourceServerResponse::fromMap($this->doRPCRequest('DeleteSourceServer', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSourceServerRequest $request
     *
     * @return DeleteSourceServerResponse
     */
    public function deleteSourceServer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSourceServerWithOptions($request, $runtime);
    }

    /**
     * @param DescribeReplicationJobsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeReplicationJobsResponse
     */
    public function describeReplicationJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeReplicationJobsResponse::fromMap($this->doRPCRequest('DescribeReplicationJobs', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeReplicationJobsRequest $request
     *
     * @return DescribeReplicationJobsResponse
     */
    public function describeReplicationJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReplicationJobsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSourceServersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSourceServersResponse
     */
    public function describeSourceServersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSourceServersResponse::fromMap($this->doRPCRequest('DescribeSourceServers', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSourceServersRequest $request
     *
     * @return DescribeSourceServersResponse
     */
    public function describeSourceServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSourceServersWithOptions($request, $runtime);
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

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyReplicationJobAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyReplicationJobAttributeResponse
     */
    public function modifyReplicationJobAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyReplicationJobAttributeResponse::fromMap($this->doRPCRequest('ModifyReplicationJobAttribute', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyReplicationJobAttributeRequest $request
     *
     * @return ModifyReplicationJobAttributeResponse
     */
    public function modifyReplicationJobAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyReplicationJobAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifySourceServerAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifySourceServerAttributeResponse
     */
    public function modifySourceServerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySourceServerAttributeResponse::fromMap($this->doRPCRequest('ModifySourceServerAttribute', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySourceServerAttributeRequest $request
     *
     * @return ModifySourceServerAttributeResponse
     */
    public function modifySourceServerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySourceServerAttributeWithOptions($request, $runtime);
    }

    /**
     * @param StartReplicationJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartReplicationJobResponse
     */
    public function startReplicationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartReplicationJobResponse::fromMap($this->doRPCRequest('StartReplicationJob', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartReplicationJobRequest $request
     *
     * @return StartReplicationJobResponse
     */
    public function startReplicationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startReplicationJobWithOptions($request, $runtime);
    }

    /**
     * @param StopReplicationJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StopReplicationJobResponse
     */
    public function stopReplicationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopReplicationJobResponse::fromMap($this->doRPCRequest('StopReplicationJob', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopReplicationJobRequest $request
     *
     * @return StopReplicationJobResponse
     */
    public function stopReplicationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopReplicationJobWithOptions($request, $runtime);
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

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2019-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
}
