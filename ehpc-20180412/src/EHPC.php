<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\EHPC\V20180412\Models\AddContainerAppRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\AddContainerAppResponse;
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
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateGWSClusterRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateGWSClusterResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateGWSImageRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateGWSImageResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateGWSInstanceRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateGWSInstanceResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateJobFileRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateJobFileResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateJobTemplateRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateJobTemplateResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteContainerAppsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteContainerAppsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteGWSClusterRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteGWSClusterResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteGWSInstanceRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteGWSInstanceResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteImageRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteImageResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteJobsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteJobsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteJobTemplatesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteJobTemplatesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteLocalImageRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DeleteLocalImageResponse;
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
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeContainerAppRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeContainerAppResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeEstackImageRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeEstackImageResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeGWSClusterPolicyRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeGWSClusterPolicyResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeGWSClustersRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeGWSClustersResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeGWSImagesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeGWSImagesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeGWSInstancesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeGWSInstancesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeImageGatewayConfigRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeImageGatewayConfigResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeImagePriceRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeImagePriceResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeImageRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeImageResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeJobRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeJobResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeNFSClientStatusRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeNFSClientStatusResponse;
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
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetCommonImageRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetCommonImageResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetGWSConnectTicketRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetGWSConnectTicketResponse;
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
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetUserImageRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetUserImageResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetVisualServiceStatusRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetVisualServiceStatusResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\InitializeEHPCRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\InitializeEHPCResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\InspectImageRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\InspectImageResponse;
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
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListContainerAppsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListContainerAppsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListContainerImagesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListContainerImagesResponse;
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
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyContainerAppAttributesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyContainerAppAttributesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyImageGatewayConfigRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyImageGatewayConfigResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyUserGroupsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyUserGroupsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyUserPasswordsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyUserPasswordsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyVisualServicePasswdRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyVisualServicePasswdResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\MountNFSRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\MountNFSResponse;
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
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetGWSClusterPolicyRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetGWSClusterPolicyResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetGWSInstanceNameRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetGWSInstanceNameResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetGWSInstanceUserRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetGWSInstanceUserResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetPostScriptsRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetPostScriptsResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetQueueRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetQueueResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StartClusterRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StartClusterResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StartGWSInstanceRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StartGWSInstanceResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StartNodesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StartNodesResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StartVisualServiceRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StartVisualServiceResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StopClusterRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StopClusterResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StopGWSInstanceRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StopGWSInstanceResponse;
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
use AlibabaCloud\SDK\EHPC\V20180412\Models\SummaryImagesInfoRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SummaryImagesInfoResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SummaryImagesRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SummaryImagesResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * If you select an image for a new containerized application, the image is pulled from Docker Hub by default. However, the version of the image may not be up to date. You can call the [PullImage](~~159052~~) operation to pull the latest image.
     *   *
     * @param AddContainerAppRequest $request AddContainerAppRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddContainerAppResponse AddContainerAppResponse
     */
    public function addContainerAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddContainerApp',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddContainerAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you select an image for a new containerized application, the image is pulled from Docker Hub by default. However, the version of the image may not be up to date. You can call the [PullImage](~~159052~~) operation to pull the latest image.
     *   *
     * @param AddContainerAppRequest $request AddContainerAppRequest
     *
     * @return AddContainerAppResponse AddContainerAppResponse
     */
    public function addContainerApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addContainerAppWithOptions($request, $runtime);
    }

    /**
     * *   The compute nodes to be added are in the Stopped state.
     *   * *   After the compute nodes are added to the cluster, the operating systems of the nodes are replaced with the operating system specified by the ImageId parameter.
     *   * *   The hosts of the compute nodes must be different from those of the existing compute nodes in the cluster. Otherwise, the add operation fails.
     *   *
     * @param AddExistedNodesRequest $request AddExistedNodesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddExistedNodesResponse AddExistedNodesResponse
     */
    public function addExistedNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddExistedNodes',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddExistedNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   The compute nodes to be added are in the Stopped state.
     *   * *   After the compute nodes are added to the cluster, the operating systems of the nodes are replaced with the operating system specified by the ImageId parameter.
     *   * *   The hosts of the compute nodes must be different from those of the existing compute nodes in the cluster. Otherwise, the add operation fails.
     *   *
     * @param AddExistedNodesRequest $request AddExistedNodesRequest
     *
     * @return AddExistedNodesResponse AddExistedNodesResponse
     */
    public function addExistedNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addExistedNodesWithOptions($request, $runtime);
    }

    /**
     * @param AddLocalNodesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddLocalNodesResponse
     */
    public function addLocalNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddLocalNodes',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddLocalNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param AddNodesRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddNodesResponse
     */
    public function addNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddNodes',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param AddQueueRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddQueueResponse
     */
    public function addQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddQueue',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param AddSecurityGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddSecurityGroupResponse
     */
    public function addSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSecurityGroup',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param AddUsersRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddUsersResponse
     */
    public function addUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUsers',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ## [](#)Description
     *   * You can call the ApplyNodes operation to specify the number of compute nodes, the number of vCPUs, and the memory size when you add nodes to a cluster.
     *   *
     * @param ApplyNodesRequest $request ApplyNodesRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyNodesResponse ApplyNodesResponse
     */
    public function applyNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyNodes',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Description
     *   * You can call the ApplyNodes operation to specify the number of compute nodes, the number of vCPUs, and the memory size when you add nodes to a cluster.
     *   *
     * @param ApplyNodesRequest $request ApplyNodesRequest
     *
     * @return ApplyNodesResponse ApplyNodesResponse
     */
    public function applyNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyNodesWithOptions($request, $runtime);
    }

    /**
     * After you create an Elastic High Performance Computing (E-HPC) cluster, you are charged for the cluster resources that you use. We recommend that you learn about the billing methods of E-HPC in advance. For more information, see [Billing overview](~~57844~~).
     *   *
     * @param CreateClusterRequest $request CreateClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCluster',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you create an Elastic High Performance Computing (E-HPC) cluster, you are charged for the cluster resources that you use. We recommend that you learn about the billing methods of E-HPC in advance. For more information, see [Billing overview](~~57844~~).
     *   *
     * @param CreateClusterRequest $request CreateClusterRequest
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * @param CreateGWSClusterRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateGWSClusterResponse
     */
    public function createGWSClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGWSCluster',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGWSClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGWSClusterRequest $request
     *
     * @return CreateGWSClusterResponse
     */
    public function createGWSCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGWSClusterWithOptions($request, $runtime);
    }

    /**
     * @param CreateGWSImageRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateGWSImageResponse
     */
    public function createGWSImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGWSImage',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGWSImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGWSImageRequest $request
     *
     * @return CreateGWSImageResponse
     */
    public function createGWSImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGWSImageWithOptions($request, $runtime);
    }

    /**
     * @param CreateGWSInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateGWSInstanceResponse
     */
    public function createGWSInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGWSInstance',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGWSInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGWSInstanceRequest $request
     *
     * @return CreateGWSInstanceResponse
     */
    public function createGWSInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGWSInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateHybridClusterRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateHybridClusterResponse
     */
    public function createHybridClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateHybridCluster',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHybridClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateJobFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateJobFileResponse
     */
    public function createJobFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateJobFile',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateJobFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateJobTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateJobTemplateResponse
     */
    public function createJobTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateJobTemplate',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateJobTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * After a cluster is released, the pay-as-you-go nodes and the subscription nodes that are expired are automatically released. The subscription nodes that are expired are retained. If you need to release subscription nodes that are not expired, change the billing method to pay-as-you-go. Before you release a cluster, make sure that you no longer use the cluster.
     *   *
     * @param DeleteClusterRequest $request DeleteClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCluster',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After a cluster is released, the pay-as-you-go nodes and the subscription nodes that are expired are automatically released. The subscription nodes that are expired are retained. If you need to release subscription nodes that are not expired, change the billing method to pay-as-you-go. Before you release a cluster, make sure that you no longer use the cluster.
     *   *
     * @param DeleteClusterRequest $request DeleteClusterRequest
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * Before you delete container applications, you can call the [ListContainerApps](~~87333~~) operation to query the container applications.
     *   *
     * @param DeleteContainerAppsRequest $request DeleteContainerAppsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteContainerAppsResponse DeleteContainerAppsResponse
     */
    public function deleteContainerAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteContainerApps',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteContainerAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you delete container applications, you can call the [ListContainerApps](~~87333~~) operation to query the container applications.
     *   *
     * @param DeleteContainerAppsRequest $request DeleteContainerAppsRequest
     *
     * @return DeleteContainerAppsResponse DeleteContainerAppsResponse
     */
    public function deleteContainerApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContainerAppsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGWSClusterRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteGWSClusterResponse
     */
    public function deleteGWSClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGWSCluster',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGWSClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGWSClusterRequest $request
     *
     * @return DeleteGWSClusterResponse
     */
    public function deleteGWSCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGWSClusterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGWSInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteGWSInstanceResponse
     */
    public function deleteGWSInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGWSInstance',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGWSInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGWSInstanceRequest $request
     *
     * @return DeleteGWSInstanceResponse
     */
    public function deleteGWSInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGWSInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteImageResponse
     */
    public function deleteImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteImage',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteImageRequest $request
     *
     * @return DeleteImageResponse
     */
    public function deleteImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageWithOptions($request, $runtime);
    }

    /**
     * @param DeleteJobTemplatesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteJobTemplatesResponse
     */
    public function deleteJobTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteJobTemplates',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteJobTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteJobsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteJobsResponse
     */
    public function deleteJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteJobs',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteLocalImageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteLocalImageResponse
     */
    public function deleteLocalImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLocalImage',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLocalImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLocalImageRequest $request
     *
     * @return DeleteLocalImageResponse
     */
    public function deleteLocalImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLocalImageWithOptions($request, $runtime);
    }

    /**
     * Before you delete a compute node, we recommend that you export all job data from the node to prevent data loss.
     *   *
     * @param DeleteNodesRequest $request DeleteNodesRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNodesResponse DeleteNodesResponse
     */
    public function deleteNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNodes',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you delete a compute node, we recommend that you export all job data from the node to prevent data loss.
     *   *
     * @param DeleteNodesRequest $request DeleteNodesRequest
     *
     * @return DeleteNodesResponse DeleteNodesResponse
     */
    public function deleteNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNodesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQueueRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteQueueResponse
     */
    public function deleteQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteQueue',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteSecurityGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSecurityGroupResponse
     */
    public function deleteSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecurityGroup',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * If you delete a user, only its information is deleted. The files stored in the /home directory for the user are retained. For example, if you delete a user named user1, the files in the `/home/user1/` directory of the cluster are not deleted. However, a deleted user cannot be recovered. Even if you create another user that has the same name, the data retained for the deleted user is not reused.
     *   *
     * @param DeleteUsersRequest $request DeleteUsersRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUsersResponse DeleteUsersResponse
     */
    public function deleteUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUsers',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you delete a user, only its information is deleted. The files stored in the /home directory for the user are retained. For example, if you delete a user named user1, the files in the `/home/user1/` directory of the cluster are not deleted. However, a deleted user cannot be recovered. Even if you create another user that has the same name, the data retained for the deleted user is not reused.
     *   *
     * @param DeleteUsersRequest $request DeleteUsersRequest
     *
     * @return DeleteUsersResponse DeleteUsersResponse
     */
    public function deleteUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUsersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutoScaleConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAutoScaleConfigResponse
     */
    public function describeAutoScaleConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAutoScaleConfig',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAutoScaleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeClusterResponse
     */
    public function describeClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCluster',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeContainerAppRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeContainerAppResponse
     */
    public function describeContainerAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeContainerApp',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeContainerAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeContainerAppRequest $request
     *
     * @return DescribeContainerAppResponse
     */
    public function describeContainerApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerAppWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEstackImageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeEstackImageResponse
     */
    public function describeEstackImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEstackImage',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEstackImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeGWSClusterPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeGWSClusterPolicyResponse
     */
    public function describeGWSClusterPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->asyncMode)) {
            $query['AsyncMode'] = $request->asyncMode;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGWSClusterPolicy',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGWSClusterPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGWSClusterPolicyRequest $request
     *
     * @return DescribeGWSClusterPolicyResponse
     */
    public function describeGWSClusterPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGWSClusterPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGWSClustersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeGWSClustersResponse
     */
    public function describeGWSClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGWSClusters',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGWSClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGWSClustersRequest $request
     *
     * @return DescribeGWSClustersResponse
     */
    public function describeGWSClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGWSClustersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGWSImagesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeGWSImagesResponse
     */
    public function describeGWSImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGWSImages',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGWSImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGWSImagesRequest $request
     *
     * @return DescribeGWSImagesResponse
     */
    public function describeGWSImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGWSImagesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGWSInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeGWSInstancesResponse
     */
    public function describeGWSInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGWSInstances',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGWSInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGWSInstancesRequest $request
     *
     * @return DescribeGWSInstancesResponse
     */
    public function describeGWSInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGWSInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeImageResponse
     */
    public function describeImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImage',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageRequest $request
     *
     * @return DescribeImageResponse
     */
    public function describeImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageGatewayConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeImageGatewayConfigResponse
     */
    public function describeImageGatewayConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageGatewayConfig',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageGatewayConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageGatewayConfigRequest $request
     *
     * @return DescribeImageGatewayConfigResponse
     */
    public function describeImageGatewayConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageGatewayConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImagePriceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeImagePriceResponse
     */
    public function describeImagePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImagePrice',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImagePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeJobResponse
     */
    public function describeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeJob',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeNFSClientStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeNFSClientStatusResponse
     */
    public function describeNFSClientStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNFSClientStatus',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNFSClientStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNFSClientStatusRequest $request
     *
     * @return DescribeNFSClientStatusResponse
     */
    public function describeNFSClientStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNFSClientStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribePriceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribePriceResponse
     */
    public function describePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePrice',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeServerlessJobsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeServerlessJobsResponse
     */
    public function describeServerlessJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServerlessJobs',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServerlessJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param EditJobTemplateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EditJobTemplateResponse
     */
    public function editJobTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EditJobTemplate',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EditJobTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetAccountingReportRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAccountingReportResponse
     */
    public function getAccountingReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccountingReport',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccountingReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetAutoScaleConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetAutoScaleConfigResponse
     */
    public function getAutoScaleConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAutoScaleConfig',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAutoScaleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetCloudMetricLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetCloudMetricLogsResponse
     */
    public function getCloudMetricLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCloudMetricLogs',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCloudMetricLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetCloudMetricProfilingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetCloudMetricProfilingResponse
     */
    public function getCloudMetricProfilingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCloudMetricProfiling',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCloudMetricProfilingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetClusterVolumesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetClusterVolumesResponse
     */
    public function getClusterVolumesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetClusterVolumes',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetClusterVolumesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetCommonImageRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetCommonImageResponse
     */
    public function getCommonImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCommonImage',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCommonImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCommonImageRequest $request
     *
     * @return GetCommonImageResponse
     */
    public function getCommonImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCommonImageWithOptions($request, $runtime);
    }

    /**
     * @param GetGWSConnectTicketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetGWSConnectTicketResponse
     */
    public function getGWSConnectTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGWSConnectTicket',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetGWSConnectTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetGWSConnectTicketRequest $request
     *
     * @return GetGWSConnectTicketResponse
     */
    public function getGWSConnectTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getGWSConnectTicketWithOptions($request, $runtime);
    }

    /**
     * @param GetHybridClusterConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetHybridClusterConfigResponse
     */
    public function getHybridClusterConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHybridClusterConfig',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHybridClusterConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetIfEcsTypeSupportHtConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetIfEcsTypeSupportHtConfigResponse
     */
    public function getIfEcsTypeSupportHtConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIfEcsTypeSupportHtConfig',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIfEcsTypeSupportHtConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetJobLogRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetJobLogResponse
     */
    public function getJobLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJobLog',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetJobLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetPostScriptsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetPostScriptsResponse
     */
    public function getPostScriptsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPostScripts',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPostScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetSchedulerInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSchedulerInfoResponse
     */
    public function getSchedulerInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSchedulerInfo',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSchedulerInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetUserImageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetUserImageResponse
     */
    public function getUserImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserImage',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserImageRequest $request
     *
     * @return GetUserImageResponse
     */
    public function getUserImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserImageWithOptions($request, $runtime);
    }

    /**
     * @param GetVisualServiceStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetVisualServiceStatusResponse
     */
    public function getVisualServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVisualServiceStatus',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVisualServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param InitializeEHPCRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return InitializeEHPCResponse
     */
    public function initializeEHPCWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InitializeEHPC',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitializeEHPCResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param InspectImageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return InspectImageResponse
     */
    public function inspectImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InspectImage',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InspectImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InspectImageRequest $request
     *
     * @return InspectImageResponse
     */
    public function inspectImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inspectImageWithOptions($request, $runtime);
    }

    /**
     * @param InstallSoftwareRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return InstallSoftwareResponse
     */
    public function installSoftwareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InstallSoftware',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstallSoftwareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param InvokeShellCommandRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return InvokeShellCommandResponse
     */
    public function invokeShellCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InvokeShellCommand',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InvokeShellCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListAvailableEcsTypesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListAvailableEcsTypesResponse
     */
    public function listAvailableEcsTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAvailableEcsTypes',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAvailableEcsTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListCloudMetricProfilingsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListCloudMetricProfilingsResponse
     */
    public function listCloudMetricProfilingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCloudMetricProfilings',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCloudMetricProfilingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListClusterLogsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListClusterLogsResponse
     */
    public function listClusterLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusterLogs',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClusterLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListClustersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClusters',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListClustersMetaRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListClustersMetaResponse
     */
    public function listClustersMetaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClustersMeta',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClustersMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListCommandsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListCommandsResponse
     */
    public function listCommandsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCommands',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCommandsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListCommunityImagesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListCommunityImagesResponse
     */
    public function listCommunityImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCommunityImages',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCommunityImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListContainerAppsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListContainerAppsResponse
     */
    public function listContainerAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListContainerApps',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListContainerAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListContainerAppsRequest $request
     *
     * @return ListContainerAppsResponse
     */
    public function listContainerApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContainerAppsWithOptions($request, $runtime);
    }

    /**
     * @param ListContainerImagesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListContainerImagesResponse
     */
    public function listContainerImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListContainerImages',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListContainerImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListContainerImagesRequest $request
     *
     * @return ListContainerImagesResponse
     */
    public function listContainerImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContainerImagesWithOptions($request, $runtime);
    }

    /**
     * @param ListCpfsFileSystemsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListCpfsFileSystemsResponse
     */
    public function listCpfsFileSystemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCpfsFileSystems',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCpfsFileSystemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return ListCurrentClientVersionResponse
     */
    public function listCurrentClientVersionWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListCurrentClientVersion',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCurrentClientVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListCurrentClientVersionResponse
     */
    public function listCurrentClientVersion()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCurrentClientVersionWithOptions($runtime);
    }

    /**
     * @param ListCustomImagesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListCustomImagesResponse
     */
    public function listCustomImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomImages',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListFileSystemWithMountTargetsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListFileSystemWithMountTargetsResponse
     */
    public function listFileSystemWithMountTargetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFileSystemWithMountTargets',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFileSystemWithMountTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListImagesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListImagesResponse
     */
    public function listImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListImages',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListInstalledSoftwareRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListInstalledSoftwareResponse
     */
    public function listInstalledSoftwareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstalledSoftware',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstalledSoftwareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListInvocationResultsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListInvocationResultsResponse
     */
    public function listInvocationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInvocationResults',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInvocationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListInvocationStatusRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListInvocationStatusResponse
     */
    public function listInvocationStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInvocationStatus',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInvocationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListJobTemplatesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListJobTemplatesResponse
     */
    public function listJobTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobTemplates',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJobTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListJobsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobs',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListJobsWithFiltersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListJobsWithFiltersResponse
     */
    public function listJobsWithFiltersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobsWithFilters',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJobsWithFiltersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListNodesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodes',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListNodesByQueueRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListNodesByQueueResponse
     */
    public function listNodesByQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodesByQueue',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodesByQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListNodesNoPagingRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListNodesNoPagingResponse
     */
    public function listNodesNoPagingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodesNoPaging',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodesNoPagingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListPreferredEcsTypesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListPreferredEcsTypesResponse
     */
    public function listPreferredEcsTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPreferredEcsTypes',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPreferredEcsTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListQueuesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListQueuesResponse
     */
    public function listQueuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQueues',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListQueuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListRegions',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($runtime);
    }

    /**
     * @param ListSecurityGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListSecurityGroupsResponse
     */
    public function listSecurityGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSecurityGroups',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListServerlessJobsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListServerlessJobsResponse
     */
    public function listServerlessJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        if (!Utils::isUnset($request->jobNames)) {
            $query['JobNames'] = $request->jobNames;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startOrder)) {
            $query['StartOrder'] = $request->startOrder;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->submitOrder)) {
            $query['SubmitOrder'] = $request->submitOrder;
        }
        if (!Utils::isUnset($request->submitTimeEnd)) {
            $query['SubmitTimeEnd'] = $request->submitTimeEnd;
        }
        if (!Utils::isUnset($request->submitTimeStart)) {
            $query['SubmitTimeStart'] = $request->submitTimeStart;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServerlessJobs',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServerlessJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListSoftwaresRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSoftwaresResponse
     */
    public function listSoftwaresWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSoftwares',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSoftwaresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * If you succeed in calling an asynchronous API operation, a response is generated before a resulting task is completed. Therefore, to query the result of the task, you can use the TaskId parameter returned by the API operation.
     *   *
     * @param ListTasksRequest $request ListTasksRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTasksResponse ListTasksResponse
     */
    public function listTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTasks',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you succeed in calling an asynchronous API operation, a response is generated before a resulting task is completed. Therefore, to query the result of the task, you can use the TaskId parameter returned by the API operation.
     *   *
     * @param ListTasksRequest $request ListTasksRequest
     *
     * @return ListTasksResponse ListTasksResponse
     */
    public function listTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTasksWithOptions($request, $runtime);
    }

    /**
     * @param ListUpgradeClientsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListUpgradeClientsResponse
     */
    public function listUpgradeClientsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUpgradeClients',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUpgradeClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListUsersAsyncRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListUsersAsyncResponse
     */
    public function listUsersAsyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUsersAsync',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUsersAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListVolumesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListVolumesResponse
     */
    public function listVolumesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVolumes',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVolumesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ## Usage notes
     *   * Before you call this operation, you can call the [DescribeCluster](~~87126~~) operation to query details of the selected cluster.
     *   *
     * @param ModifyClusterAttributesRequest $request ModifyClusterAttributesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyClusterAttributesResponse ModifyClusterAttributesResponse
     */
    public function modifyClusterAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterAttributes',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * Before you call this operation, you can call the [DescribeCluster](~~87126~~) operation to query details of the selected cluster.
     *   *
     * @param ModifyClusterAttributesRequest $request ModifyClusterAttributesRequest
     *
     * @return ModifyClusterAttributesResponse ModifyClusterAttributesResponse
     */
    public function modifyClusterAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterAttributesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyContainerAppAttributesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyContainerAppAttributesResponse
     */
    public function modifyContainerAppAttributesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyContainerAppAttributes',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyContainerAppAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyContainerAppAttributesRequest $request
     *
     * @return ModifyContainerAppAttributesResponse
     */
    public function modifyContainerAppAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyContainerAppAttributesWithOptions($request, $runtime);
    }

    /**
     * @param ModifyImageGatewayConfigRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyImageGatewayConfigResponse
     */
    public function modifyImageGatewayConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyImageGatewayConfig',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyImageGatewayConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyImageGatewayConfigRequest $request
     *
     * @return ModifyImageGatewayConfigResponse
     */
    public function modifyImageGatewayConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImageGatewayConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUserGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyUserGroupsResponse
     */
    public function modifyUserGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUserGroups',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUserGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyUserPasswordsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyUserPasswordsResponse
     */
    public function modifyUserPasswordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUserPasswords',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUserPasswordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ModifyVisualServicePasswdRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyVisualServicePasswdResponse
     */
    public function modifyVisualServicePasswdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVisualServicePasswd',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVisualServicePasswdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param MountNFSRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return MountNFSResponse
     */
    public function mountNFSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MountNFS',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MountNFSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MountNFSRequest $request
     *
     * @return MountNFSResponse
     */
    public function mountNFS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mountNFSWithOptions($request, $runtime);
    }

    /**
     * @param PullImageRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return PullImageResponse
     */
    public function pullImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PullImage',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PullImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RuntimeOptions $runtime
     *
     * @return QueryServicePackAndPriceResponse
     */
    public function queryServicePackAndPriceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'QueryServicePackAndPrice',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryServicePackAndPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return QueryServicePackAndPriceResponse
     */
    public function queryServicePackAndPrice()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryServicePackAndPriceWithOptions($runtime);
    }

    /**
     * You can call the operation to reset and restore a cluster only when the cluster is in the Exception state. You can call the [ListClusters](~~87116~~) operation to query the ID and status of a cluster.
     *   * We recommend that you export all job data before you restore a cluster. When you reset and restore a cluster, take note of the following impacts:
     *   * *   The system disks of all nodes are changed. By default, new system disks are configured based on the settings that you specified when the cluster was created.
     *   * *   The data on the system disks and data disks of all cluster nodes is lost. The data includes user information, job information, scheduler queue information, and configuration data of auto-scaling queues. However, the data on Apsara File Storage NAS file systems is retained.
     *   * *   The self-managed queues in the cluster are deleted. All nodes are retained and migrated to the default queue of the cluster.
     *   *
     * @param RecoverClusterRequest $request RecoverClusterRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RecoverClusterResponse RecoverClusterResponse
     */
    public function recoverClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecoverCluster',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecoverClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the operation to reset and restore a cluster only when the cluster is in the Exception state. You can call the [ListClusters](~~87116~~) operation to query the ID and status of a cluster.
     *   * We recommend that you export all job data before you restore a cluster. When you reset and restore a cluster, take note of the following impacts:
     *   * *   The system disks of all nodes are changed. By default, new system disks are configured based on the settings that you specified when the cluster was created.
     *   * *   The data on the system disks and data disks of all cluster nodes is lost. The data includes user information, job information, scheduler queue information, and configuration data of auto-scaling queues. However, the data on Apsara File Storage NAS file systems is retained.
     *   * *   The self-managed queues in the cluster are deleted. All nodes are retained and migrated to the default queue of the cluster.
     *   *
     * @param RecoverClusterRequest $request RecoverClusterRequest
     *
     * @return RecoverClusterResponse RecoverClusterResponse
     */
    public function recoverCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoverClusterWithOptions($request, $runtime);
    }

    /**
     * @param RerunJobsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return RerunJobsResponse
     */
    public function rerunJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RerunJobs',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RerunJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * After a node is reset, the operating system and software return to their initial states. To ensure that jobs run as expected, we recommend that you do not reset running nodes unless you need to perform crash recovery.
     *   *
     * @param ResetNodesRequest $request ResetNodesRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetNodesResponse ResetNodesResponse
     */
    public function resetNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetNodes',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After a node is reset, the operating system and software return to their initial states. To ensure that jobs run as expected, we recommend that you do not reset running nodes unless you need to perform crash recovery.
     *   *
     * @param ResetNodesRequest $request ResetNodesRequest
     *
     * @return ResetNodesResponse ResetNodesResponse
     */
    public function resetNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetNodesWithOptions($request, $runtime);
    }

    /**
     * @param RunCloudMetricProfilingRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RunCloudMetricProfilingResponse
     */
    public function runCloudMetricProfilingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunCloudMetricProfiling',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunCloudMetricProfilingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ## Usage notes
     *   * If the settings in the Queue Configuration section are different from the settings in the Global Configurations section, the former prevails.
     *   *
     * @param SetAutoScaleConfigRequest $request SetAutoScaleConfigRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SetAutoScaleConfigResponse SetAutoScaleConfigResponse
     */
    public function setAutoScaleConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetAutoScaleConfig',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetAutoScaleConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * If the settings in the Queue Configuration section are different from the settings in the Global Configurations section, the former prevails.
     *   *
     * @param SetAutoScaleConfigRequest $request SetAutoScaleConfigRequest
     *
     * @return SetAutoScaleConfigResponse SetAutoScaleConfigResponse
     */
    public function setAutoScaleConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAutoScaleConfigWithOptions($request, $runtime);
    }

    /**
     * @param SetGWSClusterPolicyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SetGWSClusterPolicyResponse
     */
    public function setGWSClusterPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->asyncMode)) {
            $query['AsyncMode'] = $request->asyncMode;
        }
        if (!Utils::isUnset($request->clipboard)) {
            $query['Clipboard'] = $request->clipboard;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->localDrive)) {
            $query['LocalDrive'] = $request->localDrive;
        }
        if (!Utils::isUnset($request->udpPort)) {
            $query['UdpPort'] = $request->udpPort;
        }
        if (!Utils::isUnset($request->usbRedirect)) {
            $query['UsbRedirect'] = $request->usbRedirect;
        }
        if (!Utils::isUnset($request->watermark)) {
            $query['Watermark'] = $request->watermark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetGWSClusterPolicy',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetGWSClusterPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetGWSClusterPolicyRequest $request
     *
     * @return SetGWSClusterPolicyResponse
     */
    public function setGWSClusterPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGWSClusterPolicyWithOptions($request, $runtime);
    }

    /**
     * @param SetGWSInstanceNameRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetGWSInstanceNameResponse
     */
    public function setGWSInstanceNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetGWSInstanceName',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetGWSInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetGWSInstanceNameRequest $request
     *
     * @return SetGWSInstanceNameResponse
     */
    public function setGWSInstanceName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGWSInstanceNameWithOptions($request, $runtime);
    }

    /**
     * @param SetGWSInstanceUserRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetGWSInstanceUserResponse
     */
    public function setGWSInstanceUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetGWSInstanceUser',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetGWSInstanceUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetGWSInstanceUserRequest $request
     *
     * @return SetGWSInstanceUserResponse
     */
    public function setGWSInstanceUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setGWSInstanceUserWithOptions($request, $runtime);
    }

    /**
     * @param SetPostScriptsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetPostScriptsResponse
     */
    public function setPostScriptsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetPostScripts',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetPostScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SetQueueRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return SetQueueResponse
     */
    public function setQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetQueue',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SetSchedulerInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetSchedulerInfoResponse
     */
    public function setSchedulerInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetSchedulerInfo',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetSchedulerInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param StartClusterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StartClusterResponse
     */
    public function startClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartCluster',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param StartGWSInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartGWSInstanceResponse
     */
    public function startGWSInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartGWSInstance',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartGWSInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartGWSInstanceRequest $request
     *
     * @return StartGWSInstanceResponse
     */
    public function startGWSInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startGWSInstanceWithOptions($request, $runtime);
    }

    /**
     * @param StartNodesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StartNodesResponse
     */
    public function startNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartNodes',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param StartVisualServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartVisualServiceResponse
     */
    public function startVisualServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartVisualService',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartVisualServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * If you stop a subscription compute node, its billing is not affected. If you stop a pay-as-you-go compute node for which you have enabled the *economical mode*, you are no longer charged for its computing resources. For more information, see [Economical mode](~~63353~~).
     *   *
     * @param StopClusterRequest $request StopClusterRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return StopClusterResponse StopClusterResponse
     */
    public function stopClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopCluster',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you stop a subscription compute node, its billing is not affected. If you stop a pay-as-you-go compute node for which you have enabled the *economical mode*, you are no longer charged for its computing resources. For more information, see [Economical mode](~~63353~~).
     *   *
     * @param StopClusterRequest $request StopClusterRequest
     *
     * @return StopClusterResponse StopClusterResponse
     */
    public function stopCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopClusterWithOptions($request, $runtime);
    }

    /**
     * @param StopGWSInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StopGWSInstanceResponse
     */
    public function stopGWSInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopGWSInstance',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopGWSInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopGWSInstanceRequest $request
     *
     * @return StopGWSInstanceResponse
     */
    public function stopGWSInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopGWSInstanceWithOptions($request, $runtime);
    }

    /**
     * @param StopJobsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return StopJobsResponse
     */
    public function stopJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopJobs',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param StopNodesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StopNodesResponse
     */
    public function stopNodesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopNodes',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param StopServerlessJobsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StopServerlessJobsResponse
     */
    public function stopServerlessJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopServerlessJobs',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopServerlessJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param StopVisualServiceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StopVisualServiceResponse
     */
    public function stopVisualServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopVisualService',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopVisualServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ## Description
     *   * Before you submit a job in a cluster, you must upload a job file to the cluster, for example, job.sh. For more information, see [CreateJobFile](~~159049~~).
     *   *
     * @param SubmitJobRequest $request SubmitJobRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitJobResponse SubmitJobResponse
     */
    public function submitJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitJob',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * Before you submit a job in a cluster, you must upload a job file to the cluster, for example, job.sh. For more information, see [CreateJobFile](~~159049~~).
     *   *
     * @param SubmitJobRequest $request SubmitJobRequest
     *
     * @return SubmitJobResponse SubmitJobResponse
     */
    public function submitJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitServerlessJobRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitServerlessJobResponse
     */
    public function submitServerlessJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitServerlessJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->arrayProperties)) {
            $request->arrayPropertiesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->arrayProperties, 'ArrayProperties', 'json');
        }
        if (!Utils::isUnset($tmpReq->container)) {
            $request->containerShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->container, 'Container', 'json');
        }
        if (!Utils::isUnset($tmpReq->dependsOn)) {
            $request->dependsOnShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dependsOn, 'DependsOn', 'json');
        }
        if (!Utils::isUnset($tmpReq->instanceType)) {
            $request->instanceTypeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceType, 'InstanceType', 'json');
        }
        if (!Utils::isUnset($tmpReq->retryStrategy)) {
            $request->retryStrategyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->retryStrategy, 'RetryStrategy', 'json');
        }
        if (!Utils::isUnset($tmpReq->vSwitchId)) {
            $request->vSwitchIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->vSwitchId, 'VSwitchId', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->arrayPropertiesShrink)) {
            $query['ArrayProperties'] = $request->arrayPropertiesShrink;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->containerShrink)) {
            $query['Container'] = $request->containerShrink;
        }
        if (!Utils::isUnset($request->cpu)) {
            $query['Cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->dependsOnShrink)) {
            $query['DependsOn'] = $request->dependsOnShrink;
        }
        if (!Utils::isUnset($request->ephemeralStorage)) {
            $query['EphemeralStorage'] = $request->ephemeralStorage;
        }
        if (!Utils::isUnset($request->instanceTypeShrink)) {
            $query['InstanceType'] = $request->instanceTypeShrink;
        }
        if (!Utils::isUnset($request->jobName)) {
            $query['JobName'] = $request->jobName;
        }
        if (!Utils::isUnset($request->jobPriority)) {
            $query['JobPriority'] = $request->jobPriority;
        }
        if (!Utils::isUnset($request->memory)) {
            $query['Memory'] = $request->memory;
        }
        if (!Utils::isUnset($request->ramRoleName)) {
            $query['RamRoleName'] = $request->ramRoleName;
        }
        if (!Utils::isUnset($request->retryStrategyShrink)) {
            $query['RetryStrategy'] = $request->retryStrategyShrink;
        }
        if (!Utils::isUnset($request->spotPriceLimit)) {
            $query['SpotPriceLimit'] = $request->spotPriceLimit;
        }
        if (!Utils::isUnset($request->spotStrategy)) {
            $query['SpotStrategy'] = $request->spotStrategy;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->vSwitchIdShrink)) {
            $query['VSwitchId'] = $request->vSwitchIdShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitServerlessJob',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitServerlessJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SummaryImagesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SummaryImagesResponse
     */
    public function summaryImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SummaryImages',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SummaryImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SummaryImagesRequest $request
     *
     * @return SummaryImagesResponse
     */
    public function summaryImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->summaryImagesWithOptions($request, $runtime);
    }

    /**
     * @param SummaryImagesInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SummaryImagesInfoResponse
     */
    public function summaryImagesInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SummaryImagesInfo',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SummaryImagesInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SummaryImagesInfoRequest $request
     *
     * @return SummaryImagesInfoResponse
     */
    public function summaryImagesInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->summaryImagesInfoWithOptions($request, $runtime);
    }

    /**
     * @param SyncUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SyncUsersResponse
     */
    public function syncUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SyncUsers',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnTagResources',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UninstallSoftwareRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UninstallSoftwareResponse
     */
    public function uninstallSoftwareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UninstallSoftware',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UninstallSoftwareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateClusterVolumesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateClusterVolumesResponse
     */
    public function updateClusterVolumesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateClusterVolumes',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateClusterVolumesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * After you update the resource group, the nodes that you add by scaling out the cluster are automatically included in the resource group.
     *   *
     * @param UpdateQueueConfigRequest $request UpdateQueueConfigRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateQueueConfigResponse UpdateQueueConfigResponse
     */
    public function updateQueueConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateQueueConfig',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateQueueConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you update the resource group, the nodes that you add by scaling out the cluster are automatically included in the resource group.
     *   *
     * @param UpdateQueueConfigRequest $request UpdateQueueConfigRequest
     *
     * @return UpdateQueueConfigResponse UpdateQueueConfigResponse
     */
    public function updateQueueConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateQueueConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeClientRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpgradeClientResponse
     */
    public function upgradeClientWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeClient',
            'version'     => '2018-04-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
