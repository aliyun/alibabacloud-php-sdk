<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\AllocatePublicContactPointsRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\AllocatePublicContactPointsResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\CreateBackupPlanRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\CreateBackupPlanResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\CreateDataCenterRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\CreateDataCenterResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DeleteBackupPlanRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DeleteBackupPlanResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DeleteDataCenterRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DeleteDataCenterResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DeleteNodeToolExecutionHistoryRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DeleteNodeToolExecutionHistoryResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeAccountsRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeAccountsResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupPlanRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupPlanResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupPlansRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupPlansResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupsRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupsResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterDashboardRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterDashboardResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClustersRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClustersResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterStatusRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterStatusResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeContactPointsRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeContactPointsResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeDataCenterRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeDataCenterResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeDataCentersRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeDataCentersResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeDeletedClustersRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeDeletedClustersResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeInstanceTypeRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeInstanceTypeResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeIpWhitelistGroupsRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeIpWhitelistGroupsResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeIpWhitelistRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeIpWhitelistResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeNodeToolExecutionHistoriesRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeNodeToolExecutionHistoriesResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeNodeToolExecutionHistoryRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeNodeToolExecutionHistoryResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeParameterModificationHistoriesRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeParameterModificationHistoriesResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeParametersRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeParametersResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeSecurityGroupsRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeSecurityGroupsResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ExecuteNodeToolRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ExecuteNodeToolResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\GetCmsUrlRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\GetCmsUrlResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ListTagsRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ListTagsResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifyAccountPasswordRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifyAccountPasswordResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifyBackupPlanRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifyBackupPlanResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifyClusterRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifyClusterResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifyDataCenterRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifyDataCenterResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifyInstanceMaintainTimeRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifyInstanceMaintainTimeResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifyInstanceTypeRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifyInstanceTypeResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifyIpWhitelistGroupRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifyIpWhitelistGroupResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifyIpWhitelistRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifyIpWhitelistResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifyParameterRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifyParameterResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifySecurityGroupsRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ModifySecurityGroupsResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\PurgeClusterRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\PurgeClusterResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\RebootClusterRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\RebootClusterResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ReleasePublicContactPointsRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ReleasePublicContactPointsResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ResizeDiskSizeRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ResizeDiskSizeResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ResizeNodeCountRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\ResizeNodeCountResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\UnTagResourcesResponse;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\UpgradeClusterVersionRequest;
use AlibabaCloud\SDK\Cassandra\V20190101\Models\UpgradeClusterVersionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Cassandra extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cassandra', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AllocatePublicContactPointsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AllocatePublicContactPointsResponse
     */
    public function allocatePublicContactPointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllocatePublicContactPointsResponse::fromMap($this->doRPCRequest('AllocatePublicContactPoints', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AllocatePublicContactPointsRequest $request
     *
     * @return AllocatePublicContactPointsResponse
     */
    public function allocatePublicContactPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocatePublicContactPointsWithOptions($request, $runtime);
    }

    /**
     * @param CreateBackupPlanRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateBackupPlanResponse
     */
    public function createBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBackupPlanResponse::fromMap($this->doRPCRequest('CreateBackupPlan', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateBackupPlanRequest $request
     *
     * @return CreateBackupPlanResponse
     */
    public function createBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @param CreateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateClusterResponse::fromMap($this->doRPCRequest('CreateCluster', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateClusterRequest $request
     *
     * @return CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataCenterRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDataCenterResponse
     */
    public function createDataCenterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDataCenterResponse::fromMap($this->doRPCRequest('CreateDataCenter', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDataCenterRequest $request
     *
     * @return CreateDataCenterResponse
     */
    public function createDataCenter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataCenterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBackupPlanRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteBackupPlanResponse
     */
    public function deleteBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteBackupPlanResponse::fromMap($this->doRPCRequest('DeleteBackupPlan', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteBackupPlanRequest $request
     *
     * @return DeleteBackupPlanResponse
     */
    public function deleteBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteClusterResponse::fromMap($this->doRPCRequest('DeleteCluster', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDataCenterRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDataCenterResponse
     */
    public function deleteDataCenterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDataCenterResponse::fromMap($this->doRPCRequest('DeleteDataCenter', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDataCenterRequest $request
     *
     * @return DeleteDataCenterResponse
     */
    public function deleteDataCenter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataCenterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNodeToolExecutionHistoryRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteNodeToolExecutionHistoryResponse
     */
    public function deleteNodeToolExecutionHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNodeToolExecutionHistoryResponse::fromMap($this->doRPCRequest('DeleteNodeToolExecutionHistory', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteNodeToolExecutionHistoryRequest $request
     *
     * @return DeleteNodeToolExecutionHistoryResponse
     */
    public function deleteNodeToolExecutionHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNodeToolExecutionHistoryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccountsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeAccountsResponse
     */
    public function describeAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAccountsResponse::fromMap($this->doRPCRequest('DescribeAccounts', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAccountsRequest $request
     *
     * @return DescribeAccountsResponse
     */
    public function describeAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeBackupResponse
     */
    public function describeBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupResponse::fromMap($this->doRPCRequest('DescribeBackup', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBackupRequest $request
     *
     * @return DescribeBackupResponse
     */
    public function describeBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupPlanRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeBackupPlanResponse
     */
    public function describeBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupPlanResponse::fromMap($this->doRPCRequest('DescribeBackupPlan', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBackupPlanRequest $request
     *
     * @return DescribeBackupPlanResponse
     */
    public function describeBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupPlansRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeBackupPlansResponse
     */
    public function describeBackupPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupPlansResponse::fromMap($this->doRPCRequest('DescribeBackupPlans', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBackupPlansRequest $request
     *
     * @return DescribeBackupPlansResponse
     */
    public function describeBackupPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupPlansWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBackupsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBackupsResponse
     */
    public function describeBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBackupsResponse::fromMap($this->doRPCRequest('DescribeBackups', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBackupsRequest $request
     *
     * @return DescribeBackupsResponse
     */
    public function describeBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBackupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeClusterResponse
     */
    public function describeClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterResponse::fromMap($this->doRPCRequest('DescribeCluster', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeClusterRequest $request
     *
     * @return DescribeClusterResponse
     */
    public function describeCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterDashboardRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeClusterDashboardResponse
     */
    public function describeClusterDashboardWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterDashboardResponse::fromMap($this->doRPCRequest('DescribeClusterDashboard', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeClusterDashboardRequest $request
     *
     * @return DescribeClusterDashboardResponse
     */
    public function describeClusterDashboard($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterDashboardWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClustersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeClustersResponse
     */
    public function describeClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClustersResponse::fromMap($this->doRPCRequest('DescribeClusters', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeClustersRequest $request
     *
     * @return DescribeClustersResponse
     */
    public function describeClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClustersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeClusterStatusResponse
     */
    public function describeClusterStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterStatusResponse::fromMap($this->doRPCRequest('DescribeClusterStatus', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeClusterStatusRequest $request
     *
     * @return DescribeClusterStatusResponse
     */
    public function describeClusterStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContactPointsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeContactPointsResponse
     */
    public function describeContactPointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeContactPointsResponse::fromMap($this->doRPCRequest('DescribeContactPoints', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeContactPointsRequest $request
     *
     * @return DescribeContactPointsResponse
     */
    public function describeContactPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContactPointsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDataCenterRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDataCenterResponse
     */
    public function describeDataCenterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDataCenterResponse::fromMap($this->doRPCRequest('DescribeDataCenter', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDataCenterRequest $request
     *
     * @return DescribeDataCenterResponse
     */
    public function describeDataCenter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataCenterWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDataCentersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDataCentersResponse
     */
    public function describeDataCentersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDataCentersResponse::fromMap($this->doRPCRequest('DescribeDataCenters', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDataCentersRequest $request
     *
     * @return DescribeDataCentersResponse
     */
    public function describeDataCenters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataCentersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeletedClustersRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDeletedClustersResponse
     */
    public function describeDeletedClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDeletedClustersResponse::fromMap($this->doRPCRequest('DescribeDeletedClusters', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeletedClustersRequest $request
     *
     * @return DescribeDeletedClustersResponse
     */
    public function describeDeletedClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeletedClustersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceTypeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeInstanceTypeResponse
     */
    public function describeInstanceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceTypeResponse::fromMap($this->doRPCRequest('DescribeInstanceType', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceTypeRequest $request
     *
     * @return DescribeInstanceTypeResponse
     */
    public function describeInstanceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTypeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpWhitelistRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeIpWhitelistResponse
     */
    public function describeIpWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIpWhitelistResponse::fromMap($this->doRPCRequest('DescribeIpWhitelist', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeIpWhitelistRequest $request
     *
     * @return DescribeIpWhitelistResponse
     */
    public function describeIpWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIpWhitelistGroupsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeIpWhitelistGroupsResponse
     */
    public function describeIpWhitelistGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIpWhitelistGroupsResponse::fromMap($this->doRPCRequest('DescribeIpWhitelistGroups', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeIpWhitelistGroupsRequest $request
     *
     * @return DescribeIpWhitelistGroupsResponse
     */
    public function describeIpWhitelistGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIpWhitelistGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNodeToolExecutionHistoriesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeNodeToolExecutionHistoriesResponse
     */
    public function describeNodeToolExecutionHistoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNodeToolExecutionHistoriesResponse::fromMap($this->doRPCRequest('DescribeNodeToolExecutionHistories', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeNodeToolExecutionHistoriesRequest $request
     *
     * @return DescribeNodeToolExecutionHistoriesResponse
     */
    public function describeNodeToolExecutionHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNodeToolExecutionHistoriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNodeToolExecutionHistoryRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeNodeToolExecutionHistoryResponse
     */
    public function describeNodeToolExecutionHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeNodeToolExecutionHistoryResponse::fromMap($this->doRPCRequest('DescribeNodeToolExecutionHistory', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeNodeToolExecutionHistoryRequest $request
     *
     * @return DescribeNodeToolExecutionHistoryResponse
     */
    public function describeNodeToolExecutionHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNodeToolExecutionHistoryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParameterModificationHistoriesRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeParameterModificationHistoriesResponse
     */
    public function describeParameterModificationHistoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeParameterModificationHistoriesResponse::fromMap($this->doRPCRequest('DescribeParameterModificationHistories', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeParameterModificationHistoriesRequest $request
     *
     * @return DescribeParameterModificationHistoriesResponse
     */
    public function describeParameterModificationHistories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParameterModificationHistoriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParametersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeParametersResponse
     */
    public function describeParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeParametersResponse::fromMap($this->doRPCRequest('DescribeParameters', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeParametersRequest $request
     *
     * @return DescribeParametersResponse
     */
    public function describeParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParametersWithOptions($request, $runtime);
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

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeSecurityGroupsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSecurityGroupsResponse
     */
    public function describeSecurityGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSecurityGroupsResponse::fromMap($this->doRPCRequest('DescribeSecurityGroups', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSecurityGroupsRequest $request
     *
     * @return DescribeSecurityGroupsResponse
     */
    public function describeSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteNodeToolRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ExecuteNodeToolResponse
     */
    public function executeNodeToolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecuteNodeToolResponse::fromMap($this->doRPCRequest('ExecuteNodeTool', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExecuteNodeToolRequest $request
     *
     * @return ExecuteNodeToolResponse
     */
    public function executeNodeTool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeNodeToolWithOptions($request, $runtime);
    }

    /**
     * @param GetCmsUrlRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetCmsUrlResponse
     */
    public function getCmsUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCmsUrlResponse::fromMap($this->doRPCRequest('GetCmsUrl', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCmsUrlRequest $request
     *
     * @return GetCmsUrlResponse
     */
    public function getCmsUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCmsUrlWithOptions($request, $runtime);
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

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListTagsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListTagsResponse
     */
    public function listTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagsResponse::fromMap($this->doRPCRequest('ListTags', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTagsRequest $request
     *
     * @return ListTagsResponse
     */
    public function listTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAccountPasswordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyAccountPasswordResponse
     */
    public function modifyAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAccountPasswordResponse::fromMap($this->doRPCRequest('ModifyAccountPassword', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyAccountPasswordRequest $request
     *
     * @return ModifyAccountPasswordResponse
     */
    public function modifyAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBackupPlanRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyBackupPlanResponse
     */
    public function modifyBackupPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyBackupPlanResponse::fromMap($this->doRPCRequest('ModifyBackupPlan', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyBackupPlanRequest $request
     *
     * @return ModifyBackupPlanResponse
     */
    public function modifyBackupPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBackupPlanWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyClusterResponse
     */
    public function modifyClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyClusterResponse::fromMap($this->doRPCRequest('ModifyCluster', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyClusterRequest $request
     *
     * @return ModifyClusterResponse
     */
    public function modifyCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDataCenterRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyDataCenterResponse
     */
    public function modifyDataCenterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDataCenterResponse::fromMap($this->doRPCRequest('ModifyDataCenter', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDataCenterRequest $request
     *
     * @return ModifyDataCenterResponse
     */
    public function modifyDataCenter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDataCenterWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceMaintainTimeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyInstanceMaintainTimeResponse
     */
    public function modifyInstanceMaintainTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceMaintainTimeResponse::fromMap($this->doRPCRequest('ModifyInstanceMaintainTime', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceMaintainTimeRequest $request
     *
     * @return ModifyInstanceMaintainTimeResponse
     */
    public function modifyInstanceMaintainTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceMaintainTimeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceTypeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyInstanceTypeResponse
     */
    public function modifyInstanceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceTypeResponse::fromMap($this->doRPCRequest('ModifyInstanceType', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceTypeRequest $request
     *
     * @return ModifyInstanceTypeResponse
     */
    public function modifyInstanceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceTypeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIpWhitelistRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyIpWhitelistResponse
     */
    public function modifyIpWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyIpWhitelistResponse::fromMap($this->doRPCRequest('ModifyIpWhitelist', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyIpWhitelistRequest $request
     *
     * @return ModifyIpWhitelistResponse
     */
    public function modifyIpWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpWhitelistWithOptions($request, $runtime);
    }

    /**
     * @param ModifyIpWhitelistGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyIpWhitelistGroupResponse
     */
    public function modifyIpWhitelistGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyIpWhitelistGroupResponse::fromMap($this->doRPCRequest('ModifyIpWhitelistGroup', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyIpWhitelistGroupRequest $request
     *
     * @return ModifyIpWhitelistGroupResponse
     */
    public function modifyIpWhitelistGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyIpWhitelistGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyParameterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyParameterResponse
     */
    public function modifyParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyParameterResponse::fromMap($this->doRPCRequest('ModifyParameter', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyParameterRequest $request
     *
     * @return ModifyParameterResponse
     */
    public function modifyParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyParameterWithOptions($request, $runtime);
    }

    /**
     * @param ModifySecurityGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifySecurityGroupsResponse
     */
    public function modifySecurityGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySecurityGroupsResponse::fromMap($this->doRPCRequest('ModifySecurityGroups', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySecurityGroupsRequest $request
     *
     * @return ModifySecurityGroupsResponse
     */
    public function modifySecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityGroupsWithOptions($request, $runtime);
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

        return MoveResourceGroupResponse::fromMap($this->doRPCRequest('MoveResourceGroup', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param PurgeClusterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PurgeClusterResponse
     */
    public function purgeClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PurgeClusterResponse::fromMap($this->doRPCRequest('PurgeCluster', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PurgeClusterRequest $request
     *
     * @return PurgeClusterResponse
     */
    public function purgeCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purgeClusterWithOptions($request, $runtime);
    }

    /**
     * @param RebootClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RebootClusterResponse
     */
    public function rebootClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RebootClusterResponse::fromMap($this->doRPCRequest('RebootCluster', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RebootClusterRequest $request
     *
     * @return RebootClusterResponse
     */
    public function rebootCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootClusterWithOptions($request, $runtime);
    }

    /**
     * @param ReleasePublicContactPointsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ReleasePublicContactPointsResponse
     */
    public function releasePublicContactPointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleasePublicContactPointsResponse::fromMap($this->doRPCRequest('ReleasePublicContactPoints', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReleasePublicContactPointsRequest $request
     *
     * @return ReleasePublicContactPointsResponse
     */
    public function releasePublicContactPoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePublicContactPointsWithOptions($request, $runtime);
    }

    /**
     * @param ResizeDiskSizeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResizeDiskSizeResponse
     */
    public function resizeDiskSizeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResizeDiskSizeResponse::fromMap($this->doRPCRequest('ResizeDiskSize', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResizeDiskSizeRequest $request
     *
     * @return ResizeDiskSizeResponse
     */
    public function resizeDiskSize($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeDiskSizeWithOptions($request, $runtime);
    }

    /**
     * @param ResizeNodeCountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ResizeNodeCountResponse
     */
    public function resizeNodeCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResizeNodeCountResponse::fromMap($this->doRPCRequest('ResizeNodeCount', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResizeNodeCountRequest $request
     *
     * @return ResizeNodeCountResponse
     */
    public function resizeNodeCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeNodeCountWithOptions($request, $runtime);
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

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UnTagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnTagResourcesResponse::fromMap($this->doRPCRequest('UnTagResources', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnTagResourcesRequest $request
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeClusterVersionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpgradeClusterVersionResponse
     */
    public function upgradeClusterVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeClusterVersionResponse::fromMap($this->doRPCRequest('UpgradeClusterVersion', '2019-01-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpgradeClusterVersionRequest $request
     *
     * @return UpgradeClusterVersionResponse
     */
    public function upgradeClusterVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeClusterVersionWithOptions($request, $runtime);
    }
}
