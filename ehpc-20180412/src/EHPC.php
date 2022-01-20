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
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetGWSConnectTicketRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetGWSConnectTicketResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetHybridClusterConfigRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetHybridClusterConfigResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetIfEcsTypeSupportHtConfigRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetIfEcsTypeSupportHtConfigResponse;
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
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListTasksRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListTasksResponse;
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
use AlibabaCloud\SDK\EHPC\V20180412\Models\StopVisualServiceRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\StopVisualServiceResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitJobRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitJobResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SyncUsersRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SyncUsersResponse;
use AlibabaCloud\SDK\EHPC\V20180412\Models\UninstallSoftwareRequest;
use AlibabaCloud\SDK\EHPC\V20180412\Models\UninstallSoftwareResponse;
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
     * @param AddContainerAppRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddContainerAppResponse
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
     * @param AddContainerAppRequest $request
     *
     * @return AddContainerAppResponse
     */
    public function addContainerApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addContainerAppWithOptions($request, $runtime);
    }

    /**
     * @param AddExistedNodesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddExistedNodesResponse
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
     * @param ApplyNodesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ApplyNodesResponse
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
     * @param CreateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
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
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
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
     * @param DeleteContainerAppsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteContainerAppsResponse
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
     * @param DeleteContainerAppsRequest $request
     *
     * @return DeleteContainerAppsResponse
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
     * @param DeleteNodesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteNodesResponse
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
     * @param DeleteUsersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteUsersResponse
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
     * @param ListTasksRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
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
     * @param ModifyClusterAttributesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyClusterAttributesResponse
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
     * @param RecoverClusterRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RecoverClusterResponse
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
     * @param ResetNodesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ResetNodesResponse
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
     * @param SetAutoScaleConfigRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetAutoScaleConfigResponse
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
     * @param StopClusterRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopClusterResponse
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
     * @param SubmitJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SubmitJobResponse
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
     * @param UpdateQueueConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateQueueConfigResponse
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
