<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\EHPC\V20180412\Models\AddExistedNodesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\AddExistedNodesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\AddLocalNodesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\AddLocalNodesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\AddNodesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\AddNodesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\AddQueueRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\AddQueueResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\AddSecurityGroupRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\AddSecurityGroupResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\AddUsersRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\AddUsersResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ApplyNodesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ApplyNodesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateJobFileRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateJobFileResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateJobTemplateRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateJobTemplateResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteJobsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteJobsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteJobTemplatesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteJobTemplatesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteNodesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteNodesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteQueueRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteQueueResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteSecurityGroupRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteSecurityGroupResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteUsersRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteUsersResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeAutoScaleConfigRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeAutoScaleConfigResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeEstackImageRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeEstackImageResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeImagePriceRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeImagePriceResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeJobRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeJobResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\EditJobTemplateRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\EditJobTemplateResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAccountingReportRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAccountingReportResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricLogsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricLogsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricProfilingRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricProfilingResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetClusterVolumesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetClusterVolumesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetHybridClusterConfigRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetHybridClusterConfigResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetIfEcsTypeSupportHtConfigRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetIfEcsTypeSupportHtConfigResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetJobLogRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetJobLogResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetPostScriptsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetPostScriptsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetSchedulerInfoRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetSchedulerInfoResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetVisualServiceStatusRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetVisualServiceStatusResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\InitializeEHPCRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\InitializeEHPCResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\InstallSoftwareRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\InstallSoftwareResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\InvokeShellCommandRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\InvokeShellCommandResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableEcsTypesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableEcsTypesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCloudMetricProfilingsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCloudMetricProfilingsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClusterLogsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClusterLogsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersMetaRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersMetaResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCommandsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCommandsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCommunityImagesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCommunityImagesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCpfsFileSystemsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCpfsFileSystemsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCurrentClientVersionResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCustomImagesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCustomImagesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListImagesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListImagesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListInstalledSoftwareRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListInstalledSoftwareResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListInvocationResultsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListInvocationResultsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListInvocationStatusRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListInvocationStatusResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobsWithFiltersRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobsWithFiltersResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobTemplatesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobTemplatesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesByQueueRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesByQueueResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesNoPagingRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesNoPagingResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListQueuesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListQueuesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListRegionsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListSecurityGroupsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListSecurityGroupsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListServerlessJobsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListServerlessJobsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListTasksRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListTasksResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListUpgradeClientsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListUpgradeClientsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListUsersAsyncRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListUsersAsyncResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListUsersRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListUsersResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListVolumesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListVolumesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyClusterAttributesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyClusterAttributesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyUserGroupsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyUserGroupsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyUserPasswordsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyUserPasswordsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyVisualServicePasswdRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyVisualServicePasswdResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\PullImageRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\PullImageResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\QueryServicePackAndPriceResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\RecoverClusterRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\RecoverClusterResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\RerunJobsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\RerunJobsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ResetNodesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ResetNodesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\RunCloudMetricProfilingRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\RunCloudMetricProfilingResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetAutoScaleConfigRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetAutoScaleConfigResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetPostScriptsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetPostScriptsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetQueueRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetQueueResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StartClusterRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StartClusterResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StartNodesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StartNodesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StartVisualServiceRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StartVisualServiceResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StopClusterRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StopClusterResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StopJobsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StopJobsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StopNodesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StopNodesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StopServerlessJobsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StopServerlessJobsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StopVisualServiceRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StopVisualServiceResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitJobRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitJobResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SyncUsersRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SyncUsersResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\TagResourcesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\TagResourcesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\UninstallSoftwareRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\UninstallSoftwareResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\UnTagResourcesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\UnTagResourcesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\UpdateClusterVolumesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\UpdateClusterVolumesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\UpdateQueueConfigRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\UpdateQueueConfigResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\UpgradeClientRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\UpgradeClientResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class EHPC extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ehpc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds one or more existing ECS instances as compute nodes to a specified cluster.
     *
     * @remarks
     *   The compute nodes to be added are in the Stopped state.
     * *   After the compute nodes are added to the cluster, the operating systems of the nodes are replaced with the operating system specified by the ImageId parameter.
     * *   The hosts of the compute nodes must be different from those of the existing compute nodes in the cluster. Otherwise, the add operation fails.
     *
     * @param request - AddExistedNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddExistedNodesResponse
     *
     * @param AddExistedNodesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddExistedNodesResponse
     */
    public function addExistedNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddExistedNodes',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddExistedNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds one or more existing ECS instances as compute nodes to a specified cluster.
     *
     * @remarks
     *   The compute nodes to be added are in the Stopped state.
     * *   After the compute nodes are added to the cluster, the operating systems of the nodes are replaced with the operating system specified by the ImageId parameter.
     * *   The hosts of the compute nodes must be different from those of the existing compute nodes in the cluster. Otherwise, the add operation fails.
     *
     * @param request - AddExistedNodesRequest
     *
     * @returns AddExistedNodesResponse
     *
     * @param AddExistedNodesRequest $request
     *
     * @return AddExistedNodesResponse
     */
    public function addExistedNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addExistedNodesWithOptions($request, $runtime);
    }

    /**
     * @param request - AddLocalNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddLocalNodesResponse
     *
     * @param AddLocalNodesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddLocalNodesResponse
     */
    public function addLocalNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddLocalNodes',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddLocalNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddLocalNodesRequest
     *
     * @returns AddLocalNodesResponse
     *
     * @param AddLocalNodesRequest $request
     *
     * @return AddLocalNodesResponse
     */
    public function addLocalNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLocalNodesWithOptions($request, $runtime);
    }

    /**
     * Adds one or more compute nodes to an E-HPC cluster.
     *
     * @param request - AddNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddNodesResponse
     *
     * @param AddNodesRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddNodesResponse
     */
    public function addNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddNodes',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds one or more compute nodes to an E-HPC cluster.
     *
     * @param request - AddNodesRequest
     *
     * @returns AddNodesResponse
     *
     * @param AddNodesRequest $request
     *
     * @return AddNodesResponse
     */
    public function addNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addNodesWithOptions($request, $runtime);
    }

    /**
     * Creates a queue for a cluster.
     *
     * @param request - AddQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddQueueResponse
     *
     * @param AddQueueRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddQueueResponse
     */
    public function addQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddQueue',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a queue for a cluster.
     *
     * @param request - AddQueueRequest
     *
     * @returns AddQueueResponse
     *
     * @param AddQueueRequest $request
     *
     * @return AddQueueResponse
     */
    public function addQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addQueueWithOptions($request, $runtime);
    }

    /**
     * Adds a cluster to a security group.
     *
     * @param request - AddSecurityGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSecurityGroupResponse
     *
     * @param AddSecurityGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddSecurityGroupResponse
     */
    public function addSecurityGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddSecurityGroup',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a cluster to a security group.
     *
     * @param request - AddSecurityGroupRequest
     *
     * @returns AddSecurityGroupResponse
     *
     * @param AddSecurityGroupRequest $request
     *
     * @return AddSecurityGroupResponse
     */
    public function addSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * Adds users to a cluster.
     *
     * @param request - AddUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddUsersResponse
     *
     * @param AddUsersRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddUsersResponse
     */
    public function addUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddUsers',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds users to a cluster.
     *
     * @param request - AddUsersRequest
     *
     * @returns AddUsersResponse
     *
     * @param AddUsersRequest $request
     *
     * @return AddUsersResponse
     */
    public function addUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUsersWithOptions($request, $runtime);
    }

    /**
     * Adds pay-as-you-go or preemptible compute nodes to a cluster.
     *
     * @remarks
     * ## [](#)Description
     * You can call the ApplyNodes operation to specify the number of compute nodes, the number of vCPUs, and the memory size when you add nodes to a cluster.
     *
     * @param request - ApplyNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyNodesResponse
     *
     * @param ApplyNodesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ApplyNodesResponse
     */
    public function applyNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyNodes',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds pay-as-you-go or preemptible compute nodes to a cluster.
     *
     * @remarks
     * ## [](#)Description
     * You can call the ApplyNodes operation to specify the number of compute nodes, the number of vCPUs, and the memory size when you add nodes to a cluster.
     *
     * @param request - ApplyNodesRequest
     *
     * @returns ApplyNodesResponse
     *
     * @param ApplyNodesRequest $request
     *
     * @return ApplyNodesResponse
     */
    public function applyNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyNodesWithOptions($request, $runtime);
    }

    /**
     * Creates a pay-as-you-go or subscription E-HPC cluster.
     *
     * @remarks
     * After you create an Elastic High Performance Computing (E-HPC) cluster, you are charged for the cluster resources that you use. We recommend that you learn about the billing methods of E-HPC in advance. For more information, see [Billing overview](https://help.aliyun.com/document_detail/57844.html).
     *
     * @param request - CreateClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClusterResponse
     *
     * @param CreateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCluster',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a pay-as-you-go or subscription E-HPC cluster.
     *
     * @remarks
     * After you create an Elastic High Performance Computing (E-HPC) cluster, you are charged for the cluster resources that you use. We recommend that you learn about the billing methods of E-HPC in advance. For more information, see [Billing overview](https://help.aliyun.com/document_detail/57844.html).
     *
     * @param request - CreateClusterRequest
     *
     * @returns CreateClusterResponse
     *
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
     * Creates a hybrid cloud cluster.
     *
     * @param request - CreateHybridClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHybridClusterResponse
     *
     * @param CreateHybridClusterRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateHybridClusterResponse
     */
    public function createHybridClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHybridCluster',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHybridClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a hybrid cloud cluster.
     *
     * @param request - CreateHybridClusterRequest
     *
     * @returns CreateHybridClusterResponse
     *
     * @param CreateHybridClusterRequest $request
     *
     * @return CreateHybridClusterResponse
     */
    public function createHybridCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHybridClusterWithOptions($request, $runtime);
    }

    /**
     * Creates a job file.
     *
     * @param request - CreateJobFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateJobFileResponse
     *
     * @param CreateJobFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateJobFileResponse
     */
    public function createJobFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateJobFile',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateJobFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a job file.
     *
     * @param request - CreateJobFileRequest
     *
     * @returns CreateJobFileResponse
     *
     * @param CreateJobFileRequest $request
     *
     * @return CreateJobFileResponse
     */
    public function createJobFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobFileWithOptions($request, $runtime);
    }

    /**
     * Creates a job template.
     *
     * @param request - CreateJobTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateJobTemplateResponse
     *
     * @param CreateJobTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateJobTemplateResponse
     */
    public function createJobTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateJobTemplate',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateJobTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a job template.
     *
     * @param request - CreateJobTemplateRequest
     *
     * @returns CreateJobTemplateResponse
     *
     * @param CreateJobTemplateRequest $request
     *
     * @return CreateJobTemplateResponse
     */
    public function createJobTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobTemplateWithOptions($request, $runtime);
    }

    /**
     * Releases a cluster.
     *
     * @remarks
     * After a cluster is released, the pay-as-you-go nodes and the subscription nodes that are expired are automatically released. The subscription nodes that are expired are retained. If you need to release subscription nodes that are not expired, change the billing method to pay-as-you-go. Before you release a cluster, make sure that you no longer use the cluster.
     *
     * @param request - DeleteClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClusterResponse
     *
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCluster',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a cluster.
     *
     * @remarks
     * After a cluster is released, the pay-as-you-go nodes and the subscription nodes that are expired are automatically released. The subscription nodes that are expired are retained. If you need to release subscription nodes that are not expired, change the billing method to pay-as-you-go. Before you release a cluster, make sure that you no longer use the cluster.
     *
     * @param request - DeleteClusterRequest
     *
     * @returns DeleteClusterResponse
     *
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
     * Deletes job templates.
     *
     * @param request - DeleteJobTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteJobTemplatesResponse
     *
     * @param DeleteJobTemplatesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteJobTemplatesResponse
     */
    public function deleteJobTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteJobTemplates',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteJobTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes job templates.
     *
     * @param request - DeleteJobTemplatesRequest
     *
     * @returns DeleteJobTemplatesResponse
     *
     * @param DeleteJobTemplatesRequest $request
     *
     * @return DeleteJobTemplatesResponse
     */
    public function deleteJobTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJobTemplatesWithOptions($request, $runtime);
    }

    /**
     * Deletes jobs from a cluster.
     *
     * @param request - DeleteJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteJobsResponse
     *
     * @param DeleteJobsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteJobsResponse
     */
    public function deleteJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteJobs',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes jobs from a cluster.
     *
     * @param request - DeleteJobsRequest
     *
     * @returns DeleteJobsResponse
     *
     * @param DeleteJobsRequest $request
     *
     * @return DeleteJobsResponse
     */
    public function deleteJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJobsWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * Before you delete a compute node, we recommend that you export all job data from the node to prevent data loss.
     *
     * @param request - DeleteNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNodesResponse
     *
     * @param DeleteNodesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteNodesResponse
     */
    public function deleteNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNodes',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * Before you delete a compute node, we recommend that you export all job data from the node to prevent data loss.
     *
     * @param request - DeleteNodesRequest
     *
     * @returns DeleteNodesResponse
     *
     * @param DeleteNodesRequest $request
     *
     * @return DeleteNodesResponse
     */
    public function deleteNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNodesWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteQueueResponse
     *
     * @param DeleteQueueRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteQueueResponse
     */
    public function deleteQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteQueue',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteQueueRequest
     *
     * @returns DeleteQueueResponse
     *
     * @param DeleteQueueRequest $request
     *
     * @return DeleteQueueResponse
     */
    public function deleteQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQueueWithOptions($request, $runtime);
    }

    /**
     * Removes a cluster from a specified security group.
     *
     * @param request - DeleteSecurityGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSecurityGroupResponse
     *
     * @param DeleteSecurityGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSecurityGroupResponse
     */
    public function deleteSecurityGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSecurityGroup',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a cluster from a specified security group.
     *
     * @param request - DeleteSecurityGroupRequest
     *
     * @returns DeleteSecurityGroupResponse
     *
     * @param DeleteSecurityGroupRequest $request
     *
     * @return DeleteSecurityGroupResponse
     */
    public function deleteSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes users from a cluster.
     *
     * @remarks
     * If you delete a user, only its information is deleted. The files stored in the /home directory for the user are retained. For example, if you delete a user named user1, the files in the `/home/user1/` directory of the cluster are not deleted. However, a deleted user cannot be recovered. Even if you create another user that has the same name, the data retained for the deleted user is not reused.
     *
     * @param request - DeleteUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUsersResponse
     *
     * @param DeleteUsersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteUsersResponse
     */
    public function deleteUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUsers',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes users from a cluster.
     *
     * @remarks
     * If you delete a user, only its information is deleted. The files stored in the /home directory for the user are retained. For example, if you delete a user named user1, the files in the `/home/user1/` directory of the cluster are not deleted. However, a deleted user cannot be recovered. Even if you create another user that has the same name, the data retained for the deleted user is not reused.
     *
     * @param request - DeleteUsersRequest
     *
     * @returns DeleteUsersResponse
     *
     * @param DeleteUsersRequest $request
     *
     * @return DeleteUsersResponse
     */
    public function deleteUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUsersWithOptions($request, $runtime);
    }

    /**
     * Queries the auto scaling settings of a cluster.
     *
     * @param request - DescribeAutoScaleConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAutoScaleConfigResponse
     *
     * @param DescribeAutoScaleConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAutoScaleConfigResponse
     */
    public function describeAutoScaleConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAutoScaleConfig',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAutoScaleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the auto scaling settings of a cluster.
     *
     * @param request - DescribeAutoScaleConfigRequest
     *
     * @returns DescribeAutoScaleConfigResponse
     *
     * @param DescribeAutoScaleConfigRequest $request
     *
     * @return DescribeAutoScaleConfigResponse
     */
    public function describeAutoScaleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoScaleConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a cluster.
     *
     * @param request - DescribeClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterResponse
     *
     * @param DescribeClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeClusterResponse
     */
    public function describeClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCluster',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a cluster.
     *
     * @param request - DescribeClusterRequest
     *
     * @returns DescribeClusterResponse
     *
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
     * Queries the base images of Elastic High Performance Computing (E-HPC).
     *
     * @param request - DescribeEstackImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEstackImageResponse
     *
     * @param DescribeEstackImageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeEstackImageResponse
     */
    public function describeEstackImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEstackImage',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEstackImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the base images of Elastic High Performance Computing (E-HPC).
     *
     * @param request - DescribeEstackImageRequest
     *
     * @returns DescribeEstackImageResponse
     *
     * @param DescribeEstackImageRequest $request
     *
     * @return DescribeEstackImageResponse
     */
    public function describeEstackImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEstackImageWithOptions($request, $runtime);
    }

    /**
     * Queries the price of an Alibaba Cloud Marketplace image.
     *
     * @param request - DescribeImagePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeImagePriceResponse
     *
     * @param DescribeImagePriceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeImagePriceResponse
     */
    public function describeImagePriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeImagePrice',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeImagePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the price of an Alibaba Cloud Marketplace image.
     *
     * @param request - DescribeImagePriceRequest
     *
     * @returns DescribeImagePriceResponse
     *
     * @param DescribeImagePriceRequest $request
     *
     * @return DescribeImagePriceResponse
     */
    public function describeImagePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImagePriceWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a job in an E-HPC cluster.
     *
     * @param request - DescribeJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeJobResponse
     *
     * @param DescribeJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeJobResponse
     */
    public function describeJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeJob',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a job in an E-HPC cluster.
     *
     * @param request - DescribeJobRequest
     *
     * @returns DescribeJobResponse
     *
     * @param DescribeJobRequest $request
     *
     * @return DescribeJobResponse
     */
    public function describeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobWithOptions($request, $runtime);
    }

    /**
     * Queries the pricing information of a cluster.
     *
     * @param request - DescribePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePriceResponse
     *
     * @param DescribePriceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribePriceResponse
     */
    public function describePriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePrice',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the pricing information of a cluster.
     *
     * @param request - DescribePriceRequest
     *
     * @returns DescribePriceResponse
     *
     * @param DescribePriceRequest $request
     *
     * @return DescribePriceResponse
     */
    public function describePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a serverless job by job ID or subtask ID (array job). You can specify only a single job ID or a single subtask ID at a time.
     *
     * @param request - DescribeServerlessJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServerlessJobsResponse
     *
     * @param DescribeServerlessJobsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeServerlessJobsResponse
     */
    public function describeServerlessJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServerlessJobs',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServerlessJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a serverless job by job ID or subtask ID (array job). You can specify only a single job ID or a single subtask ID at a time.
     *
     * @param request - DescribeServerlessJobsRequest
     *
     * @returns DescribeServerlessJobsResponse
     *
     * @param DescribeServerlessJobsRequest $request
     *
     * @return DescribeServerlessJobsResponse
     */
    public function describeServerlessJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServerlessJobsWithOptions($request, $runtime);
    }

    /**
     * @param request - EditJobTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EditJobTemplateResponse
     *
     * @param EditJobTemplateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EditJobTemplateResponse
     */
    public function editJobTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EditJobTemplate',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EditJobTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EditJobTemplateRequest
     *
     * @returns EditJobTemplateResponse
     *
     * @param EditJobTemplateRequest $request
     *
     * @return EditJobTemplateResponse
     */
    public function editJobTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editJobTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - GetAccountingReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccountingReportResponse
     *
     * @param GetAccountingReportRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAccountingReportResponse
     */
    public function getAccountingReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccountingReport',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccountingReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetAccountingReportRequest
     *
     * @returns GetAccountingReportResponse
     *
     * @param GetAccountingReportRequest $request
     *
     * @return GetAccountingReportResponse
     */
    public function getAccountingReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountingReportWithOptions($request, $runtime);
    }

    /**
     * Obtains the auto scaling settings of a cluster.
     *
     * @param request - GetAutoScaleConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAutoScaleConfigResponse
     *
     * @param GetAutoScaleConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAutoScaleConfigResponse
     */
    public function getAutoScaleConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAutoScaleConfig',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAutoScaleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the auto scaling settings of a cluster.
     *
     * @param request - GetAutoScaleConfigRequest
     *
     * @returns GetAutoScaleConfigResponse
     *
     * @param GetAutoScaleConfigRequest $request
     *
     * @return GetAutoScaleConfigResponse
     */
    public function getAutoScaleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoScaleConfigWithOptions($request, $runtime);
    }

    /**
     * Reads performance metrics (CloudMetrics) logs of E-HPC.
     *
     * @param request - GetCloudMetricLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCloudMetricLogsResponse
     *
     * @param GetCloudMetricLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetCloudMetricLogsResponse
     */
    public function getCloudMetricLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCloudMetricLogs',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCloudMetricLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reads performance metrics (CloudMetrics) logs of E-HPC.
     *
     * @param request - GetCloudMetricLogsRequest
     *
     * @returns GetCloudMetricLogsResponse
     *
     * @param GetCloudMetricLogsRequest $request
     *
     * @return GetCloudMetricLogsResponse
     */
    public function getCloudMetricLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCloudMetricLogsWithOptions($request, $runtime);
    }

    /**
     * @param request - GetCloudMetricProfilingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCloudMetricProfilingResponse
     *
     * @param GetCloudMetricProfilingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetCloudMetricProfilingResponse
     */
    public function getCloudMetricProfilingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCloudMetricProfiling',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCloudMetricProfilingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetCloudMetricProfilingRequest
     *
     * @returns GetCloudMetricProfilingResponse
     *
     * @param GetCloudMetricProfilingRequest $request
     *
     * @return GetCloudMetricProfilingResponse
     */
    public function getCloudMetricProfiling($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCloudMetricProfilingWithOptions($request, $runtime);
    }

    /**
     * Queries the information of the NAS file system mounted to a specified cluster.
     *
     * @param request - GetClusterVolumesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClusterVolumesResponse
     *
     * @param GetClusterVolumesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetClusterVolumesResponse
     */
    public function getClusterVolumesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetClusterVolumes',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetClusterVolumesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information of the NAS file system mounted to a specified cluster.
     *
     * @param request - GetClusterVolumesRequest
     *
     * @returns GetClusterVolumesResponse
     *
     * @param GetClusterVolumesRequest $request
     *
     * @return GetClusterVolumesResponse
     */
    public function getClusterVolumes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClusterVolumesWithOptions($request, $runtime);
    }

    /**
     * @param request - GetHybridClusterConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHybridClusterConfigResponse
     *
     * @param GetHybridClusterConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetHybridClusterConfigResponse
     */
    public function getHybridClusterConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHybridClusterConfig',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHybridClusterConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetHybridClusterConfigRequest
     *
     * @returns GetHybridClusterConfigResponse
     *
     * @param GetHybridClusterConfigRequest $request
     *
     * @return GetHybridClusterConfigResponse
     */
    public function getHybridClusterConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHybridClusterConfigWithOptions($request, $runtime);
    }

    /**
     * Queries whether hyper-threading can be enabled or disabled for an instance type.
     *
     * @param request - GetIfEcsTypeSupportHtConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIfEcsTypeSupportHtConfigResponse
     *
     * @param GetIfEcsTypeSupportHtConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetIfEcsTypeSupportHtConfigResponse
     */
    public function getIfEcsTypeSupportHtConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIfEcsTypeSupportHtConfig',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIfEcsTypeSupportHtConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether hyper-threading can be enabled or disabled for an instance type.
     *
     * @param request - GetIfEcsTypeSupportHtConfigRequest
     *
     * @returns GetIfEcsTypeSupportHtConfigResponse
     *
     * @param GetIfEcsTypeSupportHtConfigRequest $request
     *
     * @return GetIfEcsTypeSupportHtConfigResponse
     */
    public function getIfEcsTypeSupportHtConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIfEcsTypeSupportHtConfigWithOptions($request, $runtime);
    }

    /**
     * 实时查询任务的输出日志.
     *
     * @param request - GetJobLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobLogResponse
     *
     * @param GetJobLogRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetJobLogResponse
     */
    public function getJobLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobLog',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 实时查询任务的输出日志.
     *
     * @param request - GetJobLogRequest
     *
     * @returns GetJobLogResponse
     *
     * @param GetJobLogRequest $request
     *
     * @return GetJobLogResponse
     */
    public function getJobLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobLogWithOptions($request, $runtime);
    }

    /**
     * Queries the post-processing scripts of a cluster.
     *
     * @param request - GetPostScriptsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPostScriptsResponse
     *
     * @param GetPostScriptsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetPostScriptsResponse
     */
    public function getPostScriptsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPostScripts',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPostScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the post-processing scripts of a cluster.
     *
     * @param request - GetPostScriptsRequest
     *
     * @returns GetPostScriptsResponse
     *
     * @param GetPostScriptsRequest $request
     *
     * @return GetPostScriptsResponse
     */
    public function getPostScripts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPostScriptsWithOptions($request, $runtime);
    }

    /**
     * Queries the scheduler settings of a cluster.
     *
     * @param request - GetSchedulerInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSchedulerInfoResponse
     *
     * @param GetSchedulerInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSchedulerInfoResponse
     */
    public function getSchedulerInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSchedulerInfo',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSchedulerInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the scheduler settings of a cluster.
     *
     * @param request - GetSchedulerInfoRequest
     *
     * @returns GetSchedulerInfoResponse
     *
     * @param GetSchedulerInfoRequest $request
     *
     * @return GetSchedulerInfoResponse
     */
    public function getSchedulerInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSchedulerInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the status of the VNC service in a cluster.
     *
     * @param request - GetVisualServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVisualServiceStatusResponse
     *
     * @param GetVisualServiceStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetVisualServiceStatusResponse
     */
    public function getVisualServiceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVisualServiceStatus',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVisualServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the VNC service in a cluster.
     *
     * @param request - GetVisualServiceStatusRequest
     *
     * @returns GetVisualServiceStatusResponse
     *
     * @param GetVisualServiceStatusRequest $request
     *
     * @return GetVisualServiceStatusResponse
     */
    public function getVisualServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVisualServiceStatusWithOptions($request, $runtime);
    }

    /**
     * Creates a service-linked role for Elastic High Performance Computing (E-HPC). A service-linked role is required for you to use E-HPC.
     *
     * @param request - InitializeEHPCRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitializeEHPCResponse
     *
     * @param InitializeEHPCRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return InitializeEHPCResponse
     */
    public function initializeEHPCWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InitializeEHPC',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InitializeEHPCResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service-linked role for Elastic High Performance Computing (E-HPC). A service-linked role is required for you to use E-HPC.
     *
     * @param request - InitializeEHPCRequest
     *
     * @returns InitializeEHPCResponse
     *
     * @param InitializeEHPCRequest $request
     *
     * @return InitializeEHPCResponse
     */
    public function initializeEHPC($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeEHPCWithOptions($request, $runtime);
    }

    /**
     * Installs software in a cluster.
     *
     * @param request - InstallSoftwareRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallSoftwareResponse
     *
     * @param InstallSoftwareRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return InstallSoftwareResponse
     */
    public function installSoftwareWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InstallSoftware',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InstallSoftwareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Installs software in a cluster.
     *
     * @param request - InstallSoftwareRequest
     *
     * @returns InstallSoftwareResponse
     *
     * @param InstallSoftwareRequest $request
     *
     * @return InstallSoftwareResponse
     */
    public function installSoftware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installSoftwareWithOptions($request, $runtime);
    }

    /**
     * Runs interactive commands in a cluster node.
     *
     * @param request - InvokeShellCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvokeShellCommandResponse
     *
     * @param InvokeShellCommandRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return InvokeShellCommandResponse
     */
    public function invokeShellCommandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InvokeShellCommand',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InvokeShellCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Runs interactive commands in a cluster node.
     *
     * @param request - InvokeShellCommandRequest
     *
     * @returns InvokeShellCommandResponse
     *
     * @param InvokeShellCommandRequest $request
     *
     * @return InvokeShellCommandResponse
     */
    public function invokeShellCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invokeShellCommandWithOptions($request, $runtime);
    }

    /**
     * Queries available Elastic Compute Service (ECS) instance types.
     *
     * @param request - ListAvailableEcsTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAvailableEcsTypesResponse
     *
     * @param ListAvailableEcsTypesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListAvailableEcsTypesResponse
     */
    public function listAvailableEcsTypesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAvailableEcsTypes',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAvailableEcsTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries available Elastic Compute Service (ECS) instance types.
     *
     * @param request - ListAvailableEcsTypesRequest
     *
     * @returns ListAvailableEcsTypesResponse
     *
     * @param ListAvailableEcsTypesRequest $request
     *
     * @return ListAvailableEcsTypesResponse
     */
    public function listAvailableEcsTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvailableEcsTypesWithOptions($request, $runtime);
    }

    /**
     * Queries the profiling history of a cluster.
     *
     * @param request - ListCloudMetricProfilingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloudMetricProfilingsResponse
     *
     * @param ListCloudMetricProfilingsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListCloudMetricProfilingsResponse
     */
    public function listCloudMetricProfilingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCloudMetricProfilings',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloudMetricProfilingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the profiling history of a cluster.
     *
     * @param request - ListCloudMetricProfilingsRequest
     *
     * @returns ListCloudMetricProfilingsResponse
     *
     * @param ListCloudMetricProfilingsRequest $request
     *
     * @return ListCloudMetricProfilingsResponse
     */
    public function listCloudMetricProfilings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudMetricProfilingsWithOptions($request, $runtime);
    }

    /**
     * Queries the operation logs of a cluster within the last three days.
     *
     * @param request - ListClusterLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClusterLogsResponse
     *
     * @param ListClusterLogsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListClusterLogsResponse
     */
    public function listClusterLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClusterLogs',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClusterLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the operation logs of a cluster within the last three days.
     *
     * @param request - ListClusterLogsRequest
     *
     * @returns ListClusterLogsResponse
     *
     * @param ListClusterLogsRequest $request
     *
     * @return ListClusterLogsResponse
     */
    public function listClusterLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterLogsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of clusters in all regions within an account.
     *
     * @param request - ListClustersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClustersResponse
     *
     * @param ListClustersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClusters',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of clusters in all regions within an account.
     *
     * @param request - ListClustersRequest
     *
     * @returns ListClustersResponse
     *
     * @param ListClustersRequest $request
     *
     * @return ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersWithOptions($request, $runtime);
    }

    /**
     * Queries the list of cluster metadata.
     *
     * @param request - ListClustersMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClustersMetaResponse
     *
     * @param ListClustersMetaRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListClustersMetaResponse
     */
    public function listClustersMetaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClustersMeta',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClustersMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of cluster metadata.
     *
     * @param request - ListClustersMetaRequest
     *
     * @returns ListClustersMetaResponse
     *
     * @param ListClustersMetaRequest $request
     *
     * @return ListClustersMetaResponse
     */
    public function listClustersMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersMetaWithOptions($request, $runtime);
    }

    /**
     * Queries the interactive commands in a specified cluster.
     *
     * @param request - ListCommandsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCommandsResponse
     *
     * @param ListCommandsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListCommandsResponse
     */
    public function listCommandsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCommands',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCommandsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the interactive commands in a specified cluster.
     *
     * @param request - ListCommandsRequest
     *
     * @returns ListCommandsResponse
     *
     * @param ListCommandsRequest $request
     *
     * @return ListCommandsResponse
     */
    public function listCommands($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCommandsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of community images.
     *
     * @param request - ListCommunityImagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCommunityImagesResponse
     *
     * @param ListCommunityImagesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListCommunityImagesResponse
     */
    public function listCommunityImagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCommunityImages',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCommunityImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of community images.
     *
     * @param request - ListCommunityImagesRequest
     *
     * @returns ListCommunityImagesResponse
     *
     * @param ListCommunityImagesRequest $request
     *
     * @return ListCommunityImagesResponse
     */
    public function listCommunityImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCommunityImagesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about Cloud Paralleled File System (CPFS) and its mount targets.
     *
     * @param request - ListCpfsFileSystemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCpfsFileSystemsResponse
     *
     * @param ListCpfsFileSystemsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListCpfsFileSystemsResponse
     */
    public function listCpfsFileSystemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCpfsFileSystems',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCpfsFileSystemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about Cloud Paralleled File System (CPFS) and its mount targets.
     *
     * @param request - ListCpfsFileSystemsRequest
     *
     * @returns ListCpfsFileSystemsResponse
     *
     * @param ListCpfsFileSystemsRequest $request
     *
     * @return ListCpfsFileSystemsResponse
     */
    public function listCpfsFileSystems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCpfsFileSystemsWithOptions($request, $runtime);
    }

    /**
     * Query the latest version number of the cluster client (ehpcutil).
     *
     * @param request - ListCurrentClientVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCurrentClientVersionResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListCurrentClientVersionResponse
     */
    public function listCurrentClientVersionWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListCurrentClientVersion',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCurrentClientVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the latest version number of the cluster client (ehpcutil).
     *
     * @returns ListCurrentClientVersionResponse
     *
     * @return ListCurrentClientVersionResponse
     */
    public function listCurrentClientVersion()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCurrentClientVersionWithOptions($runtime);
    }

    /**
     * Queries custom images and shared images supported by Elastic High Performance Computing (E-HPC).
     *
     * @param request - ListCustomImagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomImagesResponse
     *
     * @param ListCustomImagesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListCustomImagesResponse
     */
    public function listCustomImagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCustomImages',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCustomImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries custom images and shared images supported by Elastic High Performance Computing (E-HPC).
     *
     * @param request - ListCustomImagesRequest
     *
     * @returns ListCustomImagesResponse
     *
     * @param ListCustomImagesRequest $request
     *
     * @return ListCustomImagesResponse
     */
    public function listCustomImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomImagesWithOptions($request, $runtime);
    }

    /**
     * Queries file systems and mount targets.
     *
     * @param request - ListFileSystemWithMountTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFileSystemWithMountTargetsResponse
     *
     * @param ListFileSystemWithMountTargetsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListFileSystemWithMountTargetsResponse
     */
    public function listFileSystemWithMountTargetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFileSystemWithMountTargets',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFileSystemWithMountTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries file systems and mount targets.
     *
     * @param request - ListFileSystemWithMountTargetsRequest
     *
     * @returns ListFileSystemWithMountTargetsResponse
     *
     * @param ListFileSystemWithMountTargetsRequest $request
     *
     * @return ListFileSystemWithMountTargetsResponse
     */
    public function listFileSystemWithMountTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFileSystemWithMountTargetsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of images that can be installed in a cluster.
     *
     * @param request - ListImagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListImagesResponse
     *
     * @param ListImagesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListImagesResponse
     */
    public function listImagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListImages',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of images that can be installed in a cluster.
     *
     * @param request - ListImagesRequest
     *
     * @returns ListImagesResponse
     *
     * @param ListImagesRequest $request
     *
     * @return ListImagesResponse
     */
    public function listImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImagesWithOptions($request, $runtime);
    }

    /**
     * Queries the software that is installed in a cluster.
     *
     * @param request - ListInstalledSoftwareRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstalledSoftwareResponse
     *
     * @param ListInstalledSoftwareRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListInstalledSoftwareResponse
     */
    public function listInstalledSoftwareWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstalledSoftware',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstalledSoftwareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the software that is installed in a cluster.
     *
     * @param request - ListInstalledSoftwareRequest
     *
     * @returns ListInstalledSoftwareResponse
     *
     * @param ListInstalledSoftwareRequest $request
     *
     * @return ListInstalledSoftwareResponse
     */
    public function listInstalledSoftware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstalledSoftwareWithOptions($request, $runtime);
    }

    /**
     * Queries the result of an interactive command in a cluster.
     *
     * @param request - ListInvocationResultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInvocationResultsResponse
     *
     * @param ListInvocationResultsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListInvocationResultsResponse
     */
    public function listInvocationResultsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInvocationResults',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInvocationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the result of an interactive command in a cluster.
     *
     * @param request - ListInvocationResultsRequest
     *
     * @returns ListInvocationResultsResponse
     *
     * @param ListInvocationResultsRequest $request
     *
     * @return ListInvocationResultsResponse
     */
    public function listInvocationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInvocationResultsWithOptions($request, $runtime);
    }

    /**
     * Queries the status of an interactive command.
     *
     * @param request - ListInvocationStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInvocationStatusResponse
     *
     * @param ListInvocationStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListInvocationStatusResponse
     */
    public function listInvocationStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInvocationStatus',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInvocationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of an interactive command.
     *
     * @param request - ListInvocationStatusRequest
     *
     * @returns ListInvocationStatusResponse
     *
     * @param ListInvocationStatusRequest $request
     *
     * @return ListInvocationStatusResponse
     */
    public function listInvocationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInvocationStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the list of job templates.
     *
     * @param request - ListJobTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobTemplatesResponse
     *
     * @param ListJobTemplatesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListJobTemplatesResponse
     */
    public function listJobTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobTemplates',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of job templates.
     *
     * @param request - ListJobTemplatesRequest
     *
     * @returns ListJobTemplatesResponse
     *
     * @param ListJobTemplatesRequest $request
     *
     * @return ListJobTemplatesResponse
     */
    public function listJobTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries the list of jobs in a cluster.
     *
     * @param request - ListJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobsResponse
     *
     * @param ListJobsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobs',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of jobs in a cluster.
     *
     * @param request - ListJobsRequest
     *
     * @returns ListJobsResponse
     *
     * @param ListJobsRequest $request
     *
     * @return ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a specified job.
     *
     * @param request - ListJobsWithFiltersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobsWithFiltersResponse
     *
     * @param ListJobsWithFiltersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListJobsWithFiltersResponse
     */
    public function listJobsWithFiltersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobsWithFilters',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobsWithFiltersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specified job.
     *
     * @param request - ListJobsWithFiltersRequest
     *
     * @returns ListJobsWithFiltersResponse
     *
     * @param ListJobsWithFiltersRequest $request
     *
     * @return ListJobsWithFiltersResponse
     */
    public function listJobsWithFilters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobsWithFiltersWithOptions($request, $runtime);
    }

    /**
     * Queries the list of nodes in a cluster.
     *
     * @param request - ListNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNodesResponse
     *
     * @param ListNodesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNodes',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of nodes in a cluster.
     *
     * @param request - ListNodesRequest
     *
     * @returns ListNodesResponse
     *
     * @param ListNodesRequest $request
     *
     * @return ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesWithOptions($request, $runtime);
    }

    /**
     * Queries the node information of a single cluster within an Alibaba Cloud account by queue.
     *
     * @param request - ListNodesByQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNodesByQueueResponse
     *
     * @param ListNodesByQueueRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListNodesByQueueResponse
     */
    public function listNodesByQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNodesByQueue',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNodesByQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the node information of a single cluster within an Alibaba Cloud account by queue.
     *
     * @param request - ListNodesByQueueRequest
     *
     * @returns ListNodesByQueueResponse
     *
     * @param ListNodesByQueueRequest $request
     *
     * @return ListNodesByQueueResponse
     */
    public function listNodesByQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesByQueueWithOptions($request, $runtime);
    }

    /**
     * Queries the information of all nodes in a specified cluster on one page.
     *
     * @param request - ListNodesNoPagingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNodesNoPagingResponse
     *
     * @param ListNodesNoPagingRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListNodesNoPagingResponse
     */
    public function listNodesNoPagingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNodesNoPaging',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListNodesNoPagingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information of all nodes in a specified cluster on one page.
     *
     * @param request - ListNodesNoPagingRequest
     *
     * @returns ListNodesNoPagingResponse
     *
     * @param ListNodesNoPagingRequest $request
     *
     * @return ListNodesNoPagingResponse
     */
    public function listNodesNoPaging($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodesNoPagingWithOptions($request, $runtime);
    }

    /**
     * Queries the Elastic Compute Service (ECS) instance types recommended by Elastic High Performance Computing (E-HPC).
     *
     * @param request - ListPreferredEcsTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPreferredEcsTypesResponse
     *
     * @param ListPreferredEcsTypesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListPreferredEcsTypesResponse
     */
    public function listPreferredEcsTypesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPreferredEcsTypes',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPreferredEcsTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Elastic Compute Service (ECS) instance types recommended by Elastic High Performance Computing (E-HPC).
     *
     * @param request - ListPreferredEcsTypesRequest
     *
     * @returns ListPreferredEcsTypesResponse
     *
     * @param ListPreferredEcsTypesRequest $request
     *
     * @return ListPreferredEcsTypesResponse
     */
    public function listPreferredEcsTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPreferredEcsTypesWithOptions($request, $runtime);
    }

    /**
     * Queries the queues of a specified cluster.
     *
     * @param request - ListQueuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQueuesResponse
     *
     * @param ListQueuesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListQueuesResponse
     */
    public function listQueuesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQueues',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListQueuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the queues of a specified cluster.
     *
     * @param request - ListQueuesRequest
     *
     * @returns ListQueuesResponse
     *
     * @param ListQueuesRequest $request
     *
     * @return ListQueuesResponse
     */
    public function listQueues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQueuesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of regions where Elastic High Performance Computing (E-HPC) is supported.
     *
     * @param request - ListRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListRegions',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of regions where Elastic High Performance Computing (E-HPC) is supported.
     *
     * @returns ListRegionsResponse
     *
     * @return ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($runtime);
    }

    /**
     * Queries the security groups that are assigned to an E-HPC cluster.
     *
     * @param request - ListSecurityGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSecurityGroupsResponse
     *
     * @param ListSecurityGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListSecurityGroupsResponse
     */
    public function listSecurityGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSecurityGroups',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the security groups that are assigned to an E-HPC cluster.
     *
     * @param request - ListSecurityGroupsRequest
     *
     * @returns ListSecurityGroupsResponse
     *
     * @param ListSecurityGroupsRequest $request
     *
     * @return ListSecurityGroupsResponse
     */
    public function listSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of serverless jobs based on filter conditions.
     *
     * @param request - ListServerlessJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServerlessJobsResponse
     *
     * @param ListServerlessJobsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListServerlessJobsResponse
     */
    public function listServerlessJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        if (null !== $request->jobNames) {
            @$query['JobNames'] = $request->jobNames;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startOrder) {
            @$query['StartOrder'] = $request->startOrder;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->submitOrder) {
            @$query['SubmitOrder'] = $request->submitOrder;
        }

        if (null !== $request->submitTimeEnd) {
            @$query['SubmitTimeEnd'] = $request->submitTimeEnd;
        }

        if (null !== $request->submitTimeStart) {
            @$query['SubmitTimeStart'] = $request->submitTimeStart;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServerlessJobs',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListServerlessJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of serverless jobs based on filter conditions.
     *
     * @param request - ListServerlessJobsRequest
     *
     * @returns ListServerlessJobsResponse
     *
     * @param ListServerlessJobsRequest $request
     *
     * @return ListServerlessJobsResponse
     */
    public function listServerlessJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServerlessJobsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of software that can be installed in a cluster.
     *
     * @param request - ListSoftwaresRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSoftwaresResponse
     *
     * @param ListSoftwaresRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSoftwaresResponse
     */
    public function listSoftwaresWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSoftwares',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSoftwaresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of software that can be installed in a cluster.
     *
     * @param request - ListSoftwaresRequest
     *
     * @returns ListSoftwaresResponse
     *
     * @param ListSoftwaresRequest $request
     *
     * @return ListSoftwaresResponse
     */
    public function listSoftwares($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSoftwaresWithOptions($request, $runtime);
    }

    /**
     * Queries the tags that are attached to a specified resource.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags that are attached to a specified resource.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
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
     * Queries the response of an asynchronous API operation for a cluster.
     *
     * @remarks
     * For some asynchronous API operations such as AddNodes, the system immediately returns a result without waiting for the node to be created if the request succeeds. In this case, you can use the TaskId returned by the asynchronous API operation to query the result of the task.
     *
     * @param request - ListTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTasksResponse
     *
     * @param ListTasksRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTasks',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the response of an asynchronous API operation for a cluster.
     *
     * @remarks
     * For some asynchronous API operations such as AddNodes, the system immediately returns a result without waiting for the node to be created if the request succeeds. In this case, you can use the TaskId returned by the asynchronous API operation to query the result of the task.
     *
     * @param request - ListTasksRequest
     *
     * @returns ListTasksResponse
     *
     * @param ListTasksRequest $request
     *
     * @return ListTasksResponse
     */
    public function listTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTasksWithOptions($request, $runtime);
    }

    /**
     * Queries the latest version to which the client (ehpcutil) in a cluster can be updated and historical update records of the client.
     *
     * @param request - ListUpgradeClientsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUpgradeClientsResponse
     *
     * @param ListUpgradeClientsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListUpgradeClientsResponse
     */
    public function listUpgradeClientsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUpgradeClients',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUpgradeClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the latest version to which the client (ehpcutil) in a cluster can be updated and historical update records of the client.
     *
     * @param request - ListUpgradeClientsRequest
     *
     * @returns ListUpgradeClientsResponse
     *
     * @param ListUpgradeClientsRequest $request
     *
     * @return ListUpgradeClientsResponse
     */
    public function listUpgradeClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUpgradeClientsWithOptions($request, $runtime);
    }

    /**
     * Queries all users of a cluster.
     *
     * @param request - ListUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersResponse
     *
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsers',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all users of a cluster.
     *
     * @param request - ListUsersRequest
     *
     * @returns ListUsersResponse
     *
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersWithOptions($request, $runtime);
    }

    /**
     * Queries the users in a cluster.
     *
     * @param request - ListUsersAsyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersAsyncResponse
     *
     * @param ListUsersAsyncRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListUsersAsyncResponse
     */
    public function listUsersAsyncWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUsersAsync',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUsersAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the users in a cluster.
     *
     * @param request - ListUsersAsyncRequest
     *
     * @returns ListUsersAsyncResponse
     *
     * @param ListUsersAsyncRequest $request
     *
     * @return ListUsersAsyncResponse
     */
    public function listUsersAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersAsyncWithOptions($request, $runtime);
    }

    /**
     * Queries the file systems mounted on Elastic High Performance Computing (E-HPC) clusters.
     *
     * @param request - ListVolumesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVolumesResponse
     *
     * @param ListVolumesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListVolumesResponse
     */
    public function listVolumesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVolumes',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVolumesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the file systems mounted on Elastic High Performance Computing (E-HPC) clusters.
     *
     * @param request - ListVolumesRequest
     *
     * @returns ListVolumesResponse
     *
     * @param ListVolumesRequest $request
     *
     * @return ListVolumesResponse
     */
    public function listVolumes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVolumesWithOptions($request, $runtime);
    }

    /**
     * Modifies the basic information of a cluster, including the name, description, and image.
     *
     * @remarks
     * ## Usage notes
     * Before you call this operation, you can call the [DescribeCluster](https://help.aliyun.com/document_detail/87126.html) operation to query details of the selected cluster.
     *
     * @param request - ModifyClusterAttributesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyClusterAttributesResponse
     *
     * @param ModifyClusterAttributesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyClusterAttributesResponse
     */
    public function modifyClusterAttributesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyClusterAttributes',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyClusterAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the basic information of a cluster, including the name, description, and image.
     *
     * @remarks
     * ## Usage notes
     * Before you call this operation, you can call the [DescribeCluster](https://help.aliyun.com/document_detail/87126.html) operation to query details of the selected cluster.
     *
     * @param request - ModifyClusterAttributesRequest
     *
     * @returns ModifyClusterAttributesResponse
     *
     * @param ModifyClusterAttributesRequest $request
     *
     * @return ModifyClusterAttributesResponse
     */
    public function modifyClusterAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterAttributesWithOptions($request, $runtime);
    }

    /**
     * Changes the user group to which users belong.
     *
     * @param request - ModifyUserGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyUserGroupsResponse
     *
     * @param ModifyUserGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyUserGroupsResponse
     */
    public function modifyUserGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyUserGroups',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyUserGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the user group to which users belong.
     *
     * @param request - ModifyUserGroupsRequest
     *
     * @returns ModifyUserGroupsResponse
     *
     * @param ModifyUserGroupsRequest $request
     *
     * @return ModifyUserGroupsResponse
     */
    public function modifyUserGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserGroupsWithOptions($request, $runtime);
    }

    /**
     * Changes the passwords of users.
     *
     * @param request - ModifyUserPasswordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyUserPasswordsResponse
     *
     * @param ModifyUserPasswordsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyUserPasswordsResponse
     */
    public function modifyUserPasswordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyUserPasswords',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyUserPasswordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the passwords of users.
     *
     * @param request - ModifyUserPasswordsRequest
     *
     * @returns ModifyUserPasswordsResponse
     *
     * @param ModifyUserPasswordsRequest $request
     *
     * @return ModifyUserPasswordsResponse
     */
    public function modifyUserPasswords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserPasswordsWithOptions($request, $runtime);
    }

    /**
     * Sets a password that you can use to remotely connect to a visualization service in a cluster over the virtual network console (VNC).
     *
     * @param request - ModifyVisualServicePasswdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyVisualServicePasswdResponse
     *
     * @param ModifyVisualServicePasswdRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyVisualServicePasswdResponse
     */
    public function modifyVisualServicePasswdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyVisualServicePasswd',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyVisualServicePasswdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets a password that you can use to remotely connect to a visualization service in a cluster over the virtual network console (VNC).
     *
     * @param request - ModifyVisualServicePasswdRequest
     *
     * @returns ModifyVisualServicePasswdResponse
     *
     * @param ModifyVisualServicePasswdRequest $request
     *
     * @return ModifyVisualServicePasswdResponse
     */
    public function modifyVisualServicePasswd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVisualServicePasswdWithOptions($request, $runtime);
    }

    /**
     * @param request - PullImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PullImageResponse
     *
     * @param PullImageRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return PullImageResponse
     */
    public function pullImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PullImage',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PullImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PullImageRequest
     *
     * @returns PullImageResponse
     *
     * @param PullImageRequest $request
     *
     * @return PullImageResponse
     */
    public function pullImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pullImageWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryServicePackAndPriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryServicePackAndPriceResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return QueryServicePackAndPriceResponse
     */
    public function queryServicePackAndPriceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'QueryServicePackAndPrice',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryServicePackAndPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns QueryServicePackAndPriceResponse
     *
     * @return QueryServicePackAndPriceResponse
     */
    public function queryServicePackAndPrice()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryServicePackAndPriceWithOptions($runtime);
    }

    /**
     * Resets and restores a cluster.
     *
     * @remarks
     * You can call the operation to reset and restore a cluster only when the cluster is in the Exception state. You can call the [ListClusters](https://help.aliyun.com/document_detail/87116.html) operation to query the ID and status of a cluster. We recommend that you export all job data before you restore a cluster. When you reset and restore a cluster, take note of the following impacts:
     * *   The system disks of all nodes are changed. By default, new system disks are configured based on the settings that you specified when the cluster was created.
     * *   The data on the system disks and data disks of all cluster nodes is lost. The data includes user information, job information, scheduler queue information, and configuration data of auto-scaling queues. However, the data on File Storage NAS file systems is retained.
     * *   The self-managed queues in the cluster are deleted. All nodes are retained and migrated to the default queue of the cluster.
     *
     * @param request - RecoverClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecoverClusterResponse
     *
     * @param RecoverClusterRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecoverClusterResponse
     */
    public function recoverClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RecoverCluster',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecoverClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets and restores a cluster.
     *
     * @remarks
     * You can call the operation to reset and restore a cluster only when the cluster is in the Exception state. You can call the [ListClusters](https://help.aliyun.com/document_detail/87116.html) operation to query the ID and status of a cluster. We recommend that you export all job data before you restore a cluster. When you reset and restore a cluster, take note of the following impacts:
     * *   The system disks of all nodes are changed. By default, new system disks are configured based on the settings that you specified when the cluster was created.
     * *   The data on the system disks and data disks of all cluster nodes is lost. The data includes user information, job information, scheduler queue information, and configuration data of auto-scaling queues. However, the data on File Storage NAS file systems is retained.
     * *   The self-managed queues in the cluster are deleted. All nodes are retained and migrated to the default queue of the cluster.
     *
     * @param request - RecoverClusterRequest
     *
     * @returns RecoverClusterResponse
     *
     * @param RecoverClusterRequest $request
     *
     * @return RecoverClusterResponse
     */
    public function recoverCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoverClusterWithOptions($request, $runtime);
    }

    /**
     * @param request - RerunJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RerunJobsResponse
     *
     * @param RerunJobsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return RerunJobsResponse
     */
    public function rerunJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RerunJobs',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RerunJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RerunJobsRequest
     *
     * @returns RerunJobsResponse
     *
     * @param RerunJobsRequest $request
     *
     * @return RerunJobsResponse
     */
    public function rerunJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rerunJobsWithOptions($request, $runtime);
    }

    /**
     * @remarks
     * After a node is reset, the operating system and software return to their initial states. To ensure that jobs run as expected, we recommend that you do not reset running nodes unless you need to perform crash recovery.
     *
     * @param request - ResetNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetNodesResponse
     *
     * @param ResetNodesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ResetNodesResponse
     */
    public function resetNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetNodes',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     * After a node is reset, the operating system and software return to their initial states. To ensure that jobs run as expected, we recommend that you do not reset running nodes unless you need to perform crash recovery.
     *
     * @param request - ResetNodesRequest
     *
     * @returns ResetNodesResponse
     *
     * @param ResetNodesRequest $request
     *
     * @return ResetNodesResponse
     */
    public function resetNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetNodesWithOptions($request, $runtime);
    }

    /**
     * Starts the profiling process of a cluster.
     *
     * @param request - RunCloudMetricProfilingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunCloudMetricProfilingResponse
     *
     * @param RunCloudMetricProfilingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RunCloudMetricProfilingResponse
     */
    public function runCloudMetricProfilingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RunCloudMetricProfiling',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunCloudMetricProfilingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts the profiling process of a cluster.
     *
     * @param request - RunCloudMetricProfilingRequest
     *
     * @returns RunCloudMetricProfilingResponse
     *
     * @param RunCloudMetricProfilingRequest $request
     *
     * @return RunCloudMetricProfilingResponse
     */
    public function runCloudMetricProfiling($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCloudMetricProfilingWithOptions($request, $runtime);
    }

    /**
     * Configures the auto scaling settings of a cluster.
     *
     * @remarks
     * ## Usage notes
     * If the settings in the Queue Configuration section are different from the settings in the Global Configurations section, the former prevails.
     *
     * @param request - SetAutoScaleConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetAutoScaleConfigResponse
     *
     * @param SetAutoScaleConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetAutoScaleConfigResponse
     */
    public function setAutoScaleConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetAutoScaleConfig',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetAutoScaleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the auto scaling settings of a cluster.
     *
     * @remarks
     * ## Usage notes
     * If the settings in the Queue Configuration section are different from the settings in the Global Configurations section, the former prevails.
     *
     * @param request - SetAutoScaleConfigRequest
     *
     * @returns SetAutoScaleConfigResponse
     *
     * @param SetAutoScaleConfigRequest $request
     *
     * @return SetAutoScaleConfigResponse
     */
    public function setAutoScaleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAutoScaleConfigWithOptions($request, $runtime);
    }

    /**
     * Configures the post-processing scripts of a cluster.
     *
     * @param request - SetPostScriptsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetPostScriptsResponse
     *
     * @param SetPostScriptsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetPostScriptsResponse
     */
    public function setPostScriptsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetPostScripts',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetPostScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the post-processing scripts of a cluster.
     *
     * @param request - SetPostScriptsRequest
     *
     * @returns SetPostScriptsResponse
     *
     * @param SetPostScriptsRequest $request
     *
     * @return SetPostScriptsResponse
     */
    public function setPostScripts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPostScriptsWithOptions($request, $runtime);
    }

    /**
     * @param request - SetQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetQueueResponse
     *
     * @param SetQueueRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return SetQueueResponse
     */
    public function setQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetQueue',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SetQueueRequest
     *
     * @returns SetQueueResponse
     *
     * @param SetQueueRequest $request
     *
     * @return SetQueueResponse
     */
    public function setQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setQueueWithOptions($request, $runtime);
    }

    /**
     * Configures the scheduler settings of a cluster.
     *
     * @param request - SetSchedulerInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetSchedulerInfoResponse
     *
     * @param SetSchedulerInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetSchedulerInfoResponse
     */
    public function setSchedulerInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetSchedulerInfo',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetSchedulerInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the scheduler settings of a cluster.
     *
     * @param request - SetSchedulerInfoRequest
     *
     * @returns SetSchedulerInfoResponse
     *
     * @param SetSchedulerInfoRequest $request
     *
     * @return SetSchedulerInfoResponse
     */
    public function setSchedulerInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSchedulerInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - StartClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartClusterResponse
     *
     * @param StartClusterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StartClusterResponse
     */
    public function startClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartCluster',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StartClusterRequest
     *
     * @returns StartClusterResponse
     *
     * @param StartClusterRequest $request
     *
     * @return StartClusterResponse
     */
    public function startCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startClusterWithOptions($request, $runtime);
    }

    /**
     * @param request - StartNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartNodesResponse
     *
     * @param StartNodesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StartNodesResponse
     */
    public function startNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartNodes',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StartNodesRequest
     *
     * @returns StartNodesResponse
     *
     * @param StartNodesRequest $request
     *
     * @return StartNodesResponse
     */
    public function startNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startNodesWithOptions($request, $runtime);
    }

    /**
     * Starts the Virtual Network Console (VNC) Remote visualization service in a specified cluster.
     *
     * @param request - StartVisualServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartVisualServiceResponse
     *
     * @param StartVisualServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartVisualServiceResponse
     */
    public function startVisualServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartVisualService',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartVisualServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts the Virtual Network Console (VNC) Remote visualization service in a specified cluster.
     *
     * @param request - StartVisualServiceRequest
     *
     * @returns StartVisualServiceResponse
     *
     * @param StartVisualServiceRequest $request
     *
     * @return StartVisualServiceResponse
     */
    public function startVisualService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startVisualServiceWithOptions($request, $runtime);
    }

    /**
     * Stops a cluster.
     *
     * @remarks
     * If you stop a subscription compute node, its billing is not affected. If you stop a pay-as-you-go compute node for which you have enabled the *economical mode*, you are no longer charged for its computing resources. For more information, see [Economical mode](https://help.aliyun.com/document_detail/63353.html).
     *
     * @param request - StopClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopClusterResponse
     *
     * @param StopClusterRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopClusterResponse
     */
    public function stopClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopCluster',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a cluster.
     *
     * @remarks
     * If you stop a subscription compute node, its billing is not affected. If you stop a pay-as-you-go compute node for which you have enabled the *economical mode*, you are no longer charged for its computing resources. For more information, see [Economical mode](https://help.aliyun.com/document_detail/63353.html).
     *
     * @param request - StopClusterRequest
     *
     * @returns StopClusterResponse
     *
     * @param StopClusterRequest $request
     *
     * @return StopClusterResponse
     */
    public function stopCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopClusterWithOptions($request, $runtime);
    }

    /**
     * @param request - StopJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopJobsResponse
     *
     * @param StopJobsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return StopJobsResponse
     */
    public function stopJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopJobs',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StopJobsRequest
     *
     * @returns StopJobsResponse
     *
     * @param StopJobsRequest $request
     *
     * @return StopJobsResponse
     */
    public function stopJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopJobsWithOptions($request, $runtime);
    }

    /**
     * @param request - StopNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopNodesResponse
     *
     * @param StopNodesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StopNodesResponse
     */
    public function stopNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopNodes',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StopNodesRequest
     *
     * @returns StopNodesResponse
     *
     * @param StopNodesRequest $request
     *
     * @return StopNodesResponse
     */
    public function stopNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopNodesWithOptions($request, $runtime);
    }

    /**
     * Stops Serverless jobs in a cluster based on job IDs or subtask IDs (array jobs). If you specify the job ID of an array job, all subtasks in the job are stopped.
     *
     * @param request - StopServerlessJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopServerlessJobsResponse
     *
     * @param StopServerlessJobsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StopServerlessJobsResponse
     */
    public function stopServerlessJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopServerlessJobs',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopServerlessJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops Serverless jobs in a cluster based on job IDs or subtask IDs (array jobs). If you specify the job ID of an array job, all subtasks in the job are stopped.
     *
     * @param request - StopServerlessJobsRequest
     *
     * @returns StopServerlessJobsResponse
     *
     * @param StopServerlessJobsRequest $request
     *
     * @return StopServerlessJobsResponse
     */
    public function stopServerlessJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopServerlessJobsWithOptions($request, $runtime);
    }

    /**
     * Stops the remote visualization service of Virtual Network Console (VNC) in a cluster.
     *
     * @param request - StopVisualServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopVisualServiceResponse
     *
     * @param StopVisualServiceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StopVisualServiceResponse
     */
    public function stopVisualServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopVisualService',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopVisualServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops the remote visualization service of Virtual Network Console (VNC) in a cluster.
     *
     * @param request - StopVisualServiceRequest
     *
     * @returns StopVisualServiceResponse
     *
     * @param StopVisualServiceRequest $request
     *
     * @return StopVisualServiceResponse
     */
    public function stopVisualService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopVisualServiceWithOptions($request, $runtime);
    }

    /**
     * Submits a job in a cluster.
     *
     * @remarks
     * The ID of the request.
     *
     * @param request - SubmitJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitJobResponse
     *
     * @param SubmitJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SubmitJobResponse
     */
    public function submitJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitJob',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a job in a cluster.
     *
     * @remarks
     * The ID of the request.
     *
     * @param request - SubmitJobRequest
     *
     * @returns SubmitJobResponse
     *
     * @param SubmitJobRequest $request
     *
     * @return SubmitJobResponse
     */
    public function submitJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitJobWithOptions($request, $runtime);
    }

    /**
     * Submits a serverless job to an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param tmpReq - SubmitServerlessJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitServerlessJobResponse
     *
     * @param SubmitServerlessJobRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitServerlessJobResponse
     */
    public function submitServerlessJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitServerlessJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->arrayProperties) {
            $request->arrayPropertiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->arrayProperties, 'ArrayProperties', 'json');
        }

        if (null !== $tmpReq->container) {
            $request->containerShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->container, 'Container', 'json');
        }

        if (null !== $tmpReq->dependsOn) {
            $request->dependsOnShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dependsOn, 'DependsOn', 'json');
        }

        if (null !== $tmpReq->instanceType) {
            $request->instanceTypeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceType, 'InstanceType', 'json');
        }

        if (null !== $tmpReq->retryStrategy) {
            $request->retryStrategyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->retryStrategy, 'RetryStrategy', 'json');
        }

        if (null !== $tmpReq->vSwitchId) {
            $request->vSwitchIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vSwitchId, 'VSwitchId', 'json');
        }

        $query = [];
        if (null !== $request->arrayPropertiesShrink) {
            @$query['ArrayProperties'] = $request->arrayPropertiesShrink;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->containerShrink) {
            @$query['Container'] = $request->containerShrink;
        }

        if (null !== $request->cpu) {
            @$query['Cpu'] = $request->cpu;
        }

        if (null !== $request->dependsOnShrink) {
            @$query['DependsOn'] = $request->dependsOnShrink;
        }

        if (null !== $request->ephemeralStorage) {
            @$query['EphemeralStorage'] = $request->ephemeralStorage;
        }

        if (null !== $request->instanceTypeShrink) {
            @$query['InstanceType'] = $request->instanceTypeShrink;
        }

        if (null !== $request->jobName) {
            @$query['JobName'] = $request->jobName;
        }

        if (null !== $request->jobPriority) {
            @$query['JobPriority'] = $request->jobPriority;
        }

        if (null !== $request->memory) {
            @$query['Memory'] = $request->memory;
        }

        if (null !== $request->ramRoleName) {
            @$query['RamRoleName'] = $request->ramRoleName;
        }

        if (null !== $request->retryStrategyShrink) {
            @$query['RetryStrategy'] = $request->retryStrategyShrink;
        }

        if (null !== $request->spotPriceLimit) {
            @$query['SpotPriceLimit'] = $request->spotPriceLimit;
        }

        if (null !== $request->spotStrategy) {
            @$query['SpotStrategy'] = $request->spotStrategy;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        if (null !== $request->vSwitchIdShrink) {
            @$query['VSwitchId'] = $request->vSwitchIdShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitServerlessJob',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitServerlessJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a serverless job to an Elastic High Performance Computing (E-HPC) cluster.
     *
     * @param request - SubmitServerlessJobRequest
     *
     * @returns SubmitServerlessJobResponse
     *
     * @param SubmitServerlessJobRequest $request
     *
     * @return SubmitServerlessJobResponse
     */
    public function submitServerlessJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitServerlessJobWithOptions($request, $runtime);
    }

    /**
     * Synchronizes local cluster users to a hybrid cloud cluster in hybrid-cloud proxy mode.
     *
     * @param request - SyncUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncUsersResponse
     *
     * @param SyncUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SyncUsersResponse
     */
    public function syncUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SyncUsers',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SyncUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Synchronizes local cluster users to a hybrid cloud cluster in hybrid-cloud proxy mode.
     *
     * @param request - SyncUsersRequest
     *
     * @returns SyncUsersResponse
     *
     * @param SyncUsersRequest $request
     *
     * @return SyncUsersResponse
     */
    public function syncUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncUsersWithOptions($request, $runtime);
    }

    /**
     * Creates tags and attach the tags to a specified resource.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates tags and attach the tags to a specified resource.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
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
     * Removes tags from a specified resource.
     *
     * @param request - UnTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnTagResourcesResponse
     *
     * @param UnTagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnTagResourcesResponse
     */
    public function unTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnTagResources',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from a specified resource.
     *
     * @param request - UnTagResourcesRequest
     *
     * @returns UnTagResourcesResponse
     *
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
     * Uninstalls software from a cluster.
     *
     * @param request - UninstallSoftwareRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UninstallSoftwareResponse
     *
     * @param UninstallSoftwareRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UninstallSoftwareResponse
     */
    public function uninstallSoftwareWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UninstallSoftware',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UninstallSoftwareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uninstalls software from a cluster.
     *
     * @param request - UninstallSoftwareRequest
     *
     * @returns UninstallSoftwareResponse
     *
     * @param UninstallSoftwareRequest $request
     *
     * @return UninstallSoftwareResponse
     */
    public function uninstallSoftware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallSoftwareWithOptions($request, $runtime);
    }

    /**
     * Mount new storage resources to a cluster.
     *
     * @param request - UpdateClusterVolumesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateClusterVolumesResponse
     *
     * @param UpdateClusterVolumesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateClusterVolumesResponse
     */
    public function updateClusterVolumesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateClusterVolumes',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateClusterVolumesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Mount new storage resources to a cluster.
     *
     * @param request - UpdateClusterVolumesRequest
     *
     * @returns UpdateClusterVolumesResponse
     *
     * @param UpdateClusterVolumesRequest $request
     *
     * @return UpdateClusterVolumesResponse
     */
    public function updateClusterVolumes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClusterVolumesWithOptions($request, $runtime);
    }

    /**
     * Updates the resource group information and the instance types of compute nodes for a queue of a cluster.
     *
     * @remarks
     * After you update the resource group, the nodes that you add by scaling out the cluster are automatically included in the resource group.
     *
     * @param request - UpdateQueueConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateQueueConfigResponse
     *
     * @param UpdateQueueConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateQueueConfigResponse
     */
    public function updateQueueConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateQueueConfig',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateQueueConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the resource group information and the instance types of compute nodes for a queue of a cluster.
     *
     * @remarks
     * After you update the resource group, the nodes that you add by scaling out the cluster are automatically included in the resource group.
     *
     * @param request - UpdateQueueConfigRequest
     *
     * @returns UpdateQueueConfigResponse
     *
     * @param UpdateQueueConfigRequest $request
     *
     * @return UpdateQueueConfigResponse
     */
    public function updateQueueConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQueueConfigWithOptions($request, $runtime);
    }

    /**
     * Updates the client (ehpcutil) in a cluster to a new version.
     *
     * @param request - UpgradeClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeClientResponse
     *
     * @param UpgradeClientRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpgradeClientResponse
     */
    public function upgradeClientWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeClient',
            'version' => '2018-04-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the client (ehpcutil) in a cluster to a new version.
     *
     * @param request - UpgradeClientRequest
     *
     * @returns UpgradeClientResponse
     *
     * @param UpgradeClientRequest $request
     *
     * @return UpgradeClientResponse
     */
    public function upgradeClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeClientWithOptions($request, $runtime);
    }
}
