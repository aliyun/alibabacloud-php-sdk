<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ddi\V20200617\Models\AddScalingConfigItemRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\AddScalingConfigItemResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\AddSecurityWhiteListRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\AddSecurityWhiteListResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CancelOrderRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CancelOrderResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CloneFlowJobRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CloneFlowJobResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CloneFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CloneFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CommitFlowEntitySnapshotRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CommitFlowEntitySnapshotResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateClusterHostGroupRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateClusterHostGroupResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateClusterTemplateRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateClusterTemplateResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateClusterV2Request;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateClusterV2Response;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowCategoryRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowCategoryResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowEditLockRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowEditLockResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowJobRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowJobResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowProjectRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowProjectResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowProjectUserRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowProjectUserResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateLibraryRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateLibraryResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateMetaTablePreviewTaskRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateMetaTablePreviewTaskResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateScalingGroupRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\CreateScalingGroupResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteClusterHostGroupRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteClusterHostGroupResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteClusterTemplateRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteClusterTemplateResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowCategoryRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowCategoryResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowEditLockRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowEditLockResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowProjectRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowProjectResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowProjectUserRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowProjectUserResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteLibrariesRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteLibrariesResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteSecurityWhiteListRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteSecurityWhiteListResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterOperationHostTaskLogRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterOperationHostTaskLogResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceConfigRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceConfigResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterTemplateRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterTemplateResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2Request;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2Response;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowCategoryTreeRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowCategoryTreeResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowInstanceRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowInstanceResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowJobRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowJobResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowNodeInstanceContainerLogRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowNodeInstanceContainerLogResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowNodeInstanceLauncherLogRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowNodeInstanceLauncherLogResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowNodeInstanceRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowNodeInstanceResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowProjectRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowProjectResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeLibraryDetailRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeLibraryDetailResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeLibraryInstallTaskDetailRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeLibraryInstallTaskDetailResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeMetaTablePreviewTaskRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeMetaTablePreviewTaskResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingCommonConfigRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingCommonConfigResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingConfigItemRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingConfigItemResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingGroupInstanceRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingGroupInstanceResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingGroupRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingGroupResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingMetricsRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingMetricsResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeSecurityWhiteListRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeSecurityWhiteListResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DetachAndReleaseClusterEniRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DetachAndReleaseClusterEniResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\InstallLibrariesRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\InstallLibrariesResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\KillFlowJobRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\KillFlowJobResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterHostComponentRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterHostComponentResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterHostRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterHostResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterInstalledServiceRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterInstalledServiceResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterOperationHostRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterOperationHostResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterOperationHostTaskRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterOperationHostTaskResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterOperationRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterOperationResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterServiceConfigHistoryRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterServiceConfigHistoryResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClustersRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClustersResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterTemplatesRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterTemplatesResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListDatasourceInstancesRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListDatasourceInstancesResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterAllHostsRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterAllHostsResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterAllRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterAllResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterHostRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterHostResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowEntitySnapshotRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowEntitySnapshotResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowInstanceRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowInstanceResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowJobHistoryRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowJobHistoryResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowJobsRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowJobsResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowNodeInstanceContainerStatusRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowNodeInstanceContainerStatusResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowNodeSqlResultRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowNodeSqlResultResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowProjectsRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowProjectsResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowProjectUserRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowProjectUserResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowsRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowsResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListLdapUsersRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListLdapUsersResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListLibrariesRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListLibrariesResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListLibraryStatusRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListLibraryStatusResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListMetaClusterRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListMetaClusterResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListScalingActivityRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListScalingActivityResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListScalingConfigItemRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListScalingConfigItemResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListScalingGroupRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListScalingGroupResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListUsersRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListUsersResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListVswitchRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListVswitchResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyClusterNameRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyClusterNameResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyClusterServiceConfigRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyClusterServiceConfigResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyClusterTemplateRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyClusterTemplateResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowCategoryRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowCategoryResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowForWebRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowForWebResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowJobRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowJobResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowProjectRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowProjectResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyScalingConfigItemRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyScalingConfigItemResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyScalingGroupRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ModifyScalingGroupResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\QueryKnoxUserPasswordRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\QueryKnoxUserPasswordResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ReleaseClusterRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ReleaseClusterResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\RemoveScalingConfigItemRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\RemoveScalingConfigItemResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\RerunFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\RerunFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ResetUserPasswordRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ResetUserPasswordResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ResizeClusterRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ResizeClusterResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\RestoreFlowEntitySnapshotRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\RestoreFlowEntitySnapshotResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ResumeFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ResumeFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\RunClusterServiceActionRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\RunClusterServiceActionResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\RunScalingActionRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\RunScalingActionResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\StartFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\StartFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\SubmitFlowJobRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\SubmitFlowJobResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\SubmitFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\SubmitFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\SuspendFlowRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\SuspendFlowResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\TagResourcesSystemTagsRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\TagResourcesSystemTagsResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\UninstallLibrariesRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\UninstallLibrariesResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\UntagResourcesSystemTagsRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\UntagResourcesSystemTagsResponse;
use AlibabaCloud\SDK\Ddi\V20200617\Models\UpdateLibraryInstallTaskStatusRequest;
use AlibabaCloud\SDK\Ddi\V20200617\Models\UpdateLibraryInstallTaskStatusResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Ddi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'cn-qingdao'     => 'ddi.cn-qingdao.aliyuncs.com',
            'cn-chengdu'     => 'ddi.cn-chengdu.aliyuncs.com',
            'cn-zhangjiakou' => 'ddi.cn-zhangjiakou.aliyuncs.com',
            'cn-huhehaote'   => 'ddi.cn-huhehaote.aliyuncs.com',
            'cn-hongkong'    => 'ddi.cn-hongkong.aliyuncs.com',
            'ap-southeast-2' => 'ddi.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3' => 'ddi.ap-southeast-3.aliyuncs.com',
            'ap-southeast-5' => 'ddi.ap-southeast-5.aliyuncs.com',
            'ap-northeast-1' => 'ddi.ap-northeast-1.aliyuncs.com',
            'eu-west-1'      => 'ddi.eu-west-1.aliyuncs.com',
            'us-east-1'      => 'ddi.us-east-1.aliyuncs.com',
            'eu-central-1'   => 'ddi.eu-central-1.aliyuncs.com',
            'me-east-1'      => 'ddi.me-east-1.aliyuncs.com',
            'ap-south-1'     => 'ddi.ap-south-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ddi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFlowResponse
     */
    public function createFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowResponse::fromMap($this->doRPCRequest('CreateFlow', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFlowRequest $request
     *
     * @return CreateFlowResponse
     */
    public function createFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUsersResponse::fromMap($this->doRPCRequest('ListUsers', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ModifyFlowProjectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyFlowProjectResponse
     */
    public function modifyFlowProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyFlowProjectResponse::fromMap($this->doRPCRequest('ModifyFlowProject', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyFlowProjectRequest $request
     *
     * @return ModifyFlowProjectResponse
     */
    public function modifyFlowProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowProjectWithOptions($request, $runtime);
    }

    /**
     * @param QueryKnoxUserPasswordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryKnoxUserPasswordResponse
     */
    public function queryKnoxUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryKnoxUserPasswordResponse::fromMap($this->doRPCRequest('QueryKnoxUserPassword', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryKnoxUserPasswordRequest $request
     *
     * @return QueryKnoxUserPasswordResponse
     */
    public function queryKnoxUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryKnoxUserPasswordWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowNodeInstanceLauncherLogRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeFlowNodeInstanceLauncherLogResponse
     */
    public function describeFlowNodeInstanceLauncherLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowNodeInstanceLauncherLogResponse::fromMap($this->doRPCRequest('DescribeFlowNodeInstanceLauncherLog', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlowNodeInstanceLauncherLogRequest $request
     *
     * @return DescribeFlowNodeInstanceLauncherLogResponse
     */
    public function describeFlowNodeInstanceLauncherLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowNodeInstanceLauncherLogWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListFlowResponse
     */
    public function listFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowResponse::fromMap($this->doRPCRequest('ListFlow', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowRequest $request
     *
     * @return ListFlowResponse
     */
    public function listFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowWithOptions($request, $runtime);
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

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListFlowClusterHostRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListFlowClusterHostResponse
     */
    public function listFlowClusterHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowClusterHostResponse::fromMap($this->doRPCRequest('ListFlowClusterHost', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowClusterHostRequest $request
     *
     * @return ListFlowClusterHostResponse
     */
    public function listFlowClusterHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowClusterHostWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterOperationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListClusterOperationResponse
     */
    public function listClusterOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterOperationResponse::fromMap($this->doRPCRequest('ListClusterOperation', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListClusterOperationRequest $request
     *
     * @return ListClusterOperationResponse
     */
    public function listClusterOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterOperationWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowEntitySnapshotRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListFlowEntitySnapshotResponse
     */
    public function listFlowEntitySnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowEntitySnapshotResponse::fromMap($this->doRPCRequest('ListFlowEntitySnapshot', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowEntitySnapshotRequest $request
     *
     * @return ListFlowEntitySnapshotResponse
     */
    public function listFlowEntitySnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowEntitySnapshotWithOptions($request, $runtime);
    }

    /**
     * @param DeleteClusterTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteClusterTemplateResponse
     */
    public function deleteClusterTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteClusterTemplateResponse::fromMap($this->doRPCRequest('DeleteClusterTemplate', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteClusterTemplateRequest $request
     *
     * @return DeleteClusterTemplateResponse
     */
    public function deleteClusterTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CancelOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CancelOrderResponse
     */
    public function cancelOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelOrderResponse::fromMap($this->doRPCRequest('CancelOrder', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelOrderRequest $request
     *
     * @return CancelOrderResponse
     */
    public function cancelOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOrderWithOptions($request, $runtime);
    }

    /**
     * @param CloneFlowJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CloneFlowJobResponse
     */
    public function cloneFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CloneFlowJobResponse::fromMap($this->doRPCRequest('CloneFlowJob', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CloneFlowJobRequest $request
     *
     * @return CloneFlowJobResponse
     */
    public function cloneFlowJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneFlowJobWithOptions($request, $runtime);
    }

    /**
     * @param StartFlowRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StartFlowResponse
     */
    public function startFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartFlowResponse::fromMap($this->doRPCRequest('StartFlow', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartFlowRequest $request
     *
     * @return StartFlowResponse
     */
    public function startFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startFlowWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateFlowJobResponse
     */
    public function createFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowJobResponse::fromMap($this->doRPCRequest('CreateFlowJob', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFlowJobRequest $request
     *
     * @return CreateFlowJobResponse
     */
    public function createFlowJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlowCategoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteFlowCategoryResponse
     */
    public function deleteFlowCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFlowCategoryResponse::fromMap($this->doRPCRequest('DeleteFlowCategory', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFlowCategoryRequest $request
     *
     * @return DeleteFlowCategoryResponse
     */
    public function deleteFlowCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowCategoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlowEditLockRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteFlowEditLockResponse
     */
    public function deleteFlowEditLockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFlowEditLockResponse::fromMap($this->doRPCRequest('DeleteFlowEditLock', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFlowEditLockRequest $request
     *
     * @return DeleteFlowEditLockResponse
     */
    public function deleteFlowEditLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowEditLockWithOptions($request, $runtime);
    }

    /**
     * @param ResizeClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ResizeClusterResponse
     */
    public function resizeClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResizeClusterResponse::fromMap($this->doRPCRequest('ResizeCluster', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResizeClusterRequest $request
     *
     * @return ResizeClusterResponse
     */
    public function resizeCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeClusterWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMetaTablePreviewTaskRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeMetaTablePreviewTaskResponse
     */
    public function describeMetaTablePreviewTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMetaTablePreviewTaskResponse::fromMap($this->doRPCRequest('DescribeMetaTablePreviewTask', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMetaTablePreviewTaskRequest $request
     *
     * @return DescribeMetaTablePreviewTaskResponse
     */
    public function describeMetaTablePreviewTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetaTablePreviewTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterServiceConfigHistoryRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListClusterServiceConfigHistoryResponse
     */
    public function listClusterServiceConfigHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterServiceConfigHistoryResponse::fromMap($this->doRPCRequest('ListClusterServiceConfigHistory', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListClusterServiceConfigHistoryRequest $request
     *
     * @return ListClusterServiceConfigHistoryResponse
     */
    public function listClusterServiceConfigHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterServiceConfigHistoryWithOptions($request, $runtime);
    }

    /**
     * @param ModifyScalingConfigItemRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyScalingConfigItemResponse
     */
    public function modifyScalingConfigItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyScalingConfigItemResponse::fromMap($this->doRPCRequest('ModifyScalingConfigItem', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyScalingConfigItemRequest $request
     *
     * @return ModifyScalingConfigItemResponse
     */
    public function modifyScalingConfigItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScalingConfigItemWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowClusterAllRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListFlowClusterAllResponse
     */
    public function listFlowClusterAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowClusterAllResponse::fromMap($this->doRPCRequest('ListFlowClusterAll', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowClusterAllRequest $request
     *
     * @return ListFlowClusterAllResponse
     */
    public function listFlowClusterAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowClusterAllWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScalingGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeScalingGroupResponse
     */
    public function describeScalingGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScalingGroupResponse::fromMap($this->doRPCRequest('DescribeScalingGroup', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeScalingGroupRequest $request
     *
     * @return DescribeScalingGroupResponse
     */
    public function describeScalingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListScalingGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListScalingGroupResponse
     */
    public function listScalingGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListScalingGroupResponse::fromMap($this->doRPCRequest('ListScalingGroup', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListScalingGroupRequest $request
     *
     * @return ListScalingGroupResponse
     */
    public function listScalingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScalingGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFlowCategoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyFlowCategoryResponse
     */
    public function modifyFlowCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyFlowCategoryResponse::fromMap($this->doRPCRequest('ModifyFlowCategory', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyFlowCategoryRequest $request
     *
     * @return ModifyFlowCategoryResponse
     */
    public function modifyFlowCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowCategoryWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterServiceConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyClusterServiceConfigResponse
     */
    public function modifyClusterServiceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyClusterServiceConfigResponse::fromMap($this->doRPCRequest('ModifyClusterServiceConfig', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyClusterServiceConfigRequest $request
     *
     * @return ModifyClusterServiceConfigResponse
     */
    public function modifyClusterServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterServiceConfigWithOptions($request, $runtime);
    }

    /**
     * @param CloneFlowRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CloneFlowResponse
     */
    public function cloneFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CloneFlowResponse::fromMap($this->doRPCRequest('CloneFlow', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CloneFlowRequest $request
     *
     * @return CloneFlowResponse
     */
    public function cloneFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneFlowWithOptions($request, $runtime);
    }

    /**
     * @param CreateClusterTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateClusterTemplateResponse
     */
    public function createClusterTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateClusterTemplateResponse::fromMap($this->doRPCRequest('CreateClusterTemplate', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateClusterTemplateRequest $request
     *
     * @return CreateClusterTemplateResponse
     */
    public function createClusterTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLibraryInstallTaskStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateLibraryInstallTaskStatusResponse
     */
    public function updateLibraryInstallTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateLibraryInstallTaskStatusResponse::fromMap($this->doRPCRequest('UpdateLibraryInstallTaskStatus', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateLibraryInstallTaskStatusRequest $request
     *
     * @return UpdateLibraryInstallTaskStatusResponse
     */
    public function updateLibraryInstallTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLibraryInstallTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param ListScalingConfigItemRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListScalingConfigItemResponse
     */
    public function listScalingConfigItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListScalingConfigItemResponse::fromMap($this->doRPCRequest('ListScalingConfigItem', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListScalingConfigItemRequest $request
     *
     * @return ListScalingConfigItemResponse
     */
    public function listScalingConfigItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScalingConfigItemWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListFlowInstanceResponse
     */
    public function listFlowInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowInstanceResponse::fromMap($this->doRPCRequest('ListFlowInstance', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowInstanceRequest $request
     *
     * @return ListFlowInstanceResponse
     */
    public function listFlowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScalingMetricsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeScalingMetricsResponse
     */
    public function describeScalingMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScalingMetricsResponse::fromMap($this->doRPCRequest('DescribeScalingMetrics', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeScalingMetricsRequest $request
     *
     * @return DescribeScalingMetricsResponse
     */
    public function describeScalingMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingMetricsWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesSystemTagsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UntagResourcesSystemTagsResponse
     */
    public function untagResourcesSystemTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesSystemTagsResponse::fromMap($this->doRPCRequest('UntagResourcesSystemTags', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UntagResourcesSystemTagsRequest $request
     *
     * @return UntagResourcesSystemTagsResponse
     */
    public function untagResourcesSystemTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesSystemTagsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowProjectRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeFlowProjectResponse
     */
    public function describeFlowProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowProjectResponse::fromMap($this->doRPCRequest('DescribeFlowProject', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlowProjectRequest $request
     *
     * @return DescribeFlowProjectResponse
     */
    public function describeFlowProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSecurityWhiteListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteSecurityWhiteListResponse
     */
    public function deleteSecurityWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSecurityWhiteListResponse::fromMap($this->doRPCRequest('DeleteSecurityWhiteList', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSecurityWhiteListRequest $request
     *
     * @return DeleteSecurityWhiteListResponse
     */
    public function deleteSecurityWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param ListScalingActivityRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListScalingActivityResponse
     */
    public function listScalingActivityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListScalingActivityResponse::fromMap($this->doRPCRequest('ListScalingActivity', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListScalingActivityRequest $request
     *
     * @return ListScalingActivityResponse
     */
    public function listScalingActivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScalingActivityWithOptions($request, $runtime);
    }

    /**
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListTagValuesResponse::fromMap($this->doRPCRequest('ListTagValues', '2020-06-17', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTagValuesRequest $request
     *
     * @return ListTagValuesResponse
     */
    public function listTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagValuesWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterInstalledServiceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListClusterInstalledServiceResponse
     */
    public function listClusterInstalledServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterInstalledServiceResponse::fromMap($this->doRPCRequest('ListClusterInstalledService', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListClusterInstalledServiceRequest $request
     *
     * @return ListClusterInstalledServiceResponse
     */
    public function listClusterInstalledService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterInstalledServiceWithOptions($request, $runtime);
    }

    /**
     * @param RunClusterServiceActionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RunClusterServiceActionResponse
     */
    public function runClusterServiceActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RunClusterServiceActionResponse::fromMap($this->doRPCRequest('RunClusterServiceAction', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RunClusterServiceActionRequest $request
     *
     * @return RunClusterServiceActionResponse
     */
    public function runClusterServiceAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runClusterServiceActionWithOptions($request, $runtime);
    }

    /**
     * @param SuspendFlowRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SuspendFlowResponse
     */
    public function suspendFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SuspendFlowResponse::fromMap($this->doRPCRequest('SuspendFlow', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SuspendFlowRequest $request
     *
     * @return SuspendFlowResponse
     */
    public function suspendFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendFlowWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowProjectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateFlowProjectResponse
     */
    public function createFlowProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowProjectResponse::fromMap($this->doRPCRequest('CreateFlowProject', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFlowProjectRequest $request
     *
     * @return CreateFlowProjectResponse
     */
    public function createFlowProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowProjectWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowNodeInstanceContainerStatusRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListFlowNodeInstanceContainerStatusResponse
     */
    public function listFlowNodeInstanceContainerStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowNodeInstanceContainerStatusResponse::fromMap($this->doRPCRequest('ListFlowNodeInstanceContainerStatus', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowNodeInstanceContainerStatusRequest $request
     *
     * @return ListFlowNodeInstanceContainerStatusResponse
     */
    public function listFlowNodeInstanceContainerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowNodeInstanceContainerStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyClusterTemplateResponse
     */
    public function modifyClusterTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyClusterTemplateResponse::fromMap($this->doRPCRequest('ModifyClusterTemplate', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyClusterTemplateRequest $request
     *
     * @return ModifyClusterTemplateResponse
     */
    public function modifyClusterTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterTemplateWithOptions($request, $runtime);
    }

    /**
     * @param AddSecurityWhiteListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddSecurityWhiteListResponse
     */
    public function addSecurityWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddSecurityWhiteListResponse::fromMap($this->doRPCRequest('AddSecurityWhiteList', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddSecurityWhiteListRequest $request
     *
     * @return AddSecurityWhiteListResponse
     */
    public function addSecurityWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSecurityWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param ListMetaClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListMetaClusterResponse
     */
    public function listMetaClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMetaClusterResponse::fromMap($this->doRPCRequest('ListMetaCluster', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMetaClusterRequest $request
     *
     * @return ListMetaClusterResponse
     */
    public function listMetaCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMetaClusterWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterOperationHostRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListClusterOperationHostResponse
     */
    public function listClusterOperationHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterOperationHostResponse::fromMap($this->doRPCRequest('ListClusterOperationHost', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListClusterOperationHostRequest $request
     *
     * @return ListClusterOperationHostResponse
     */
    public function listClusterOperationHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterOperationHostWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterTemplatesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListClusterTemplatesResponse
     */
    public function listClusterTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterTemplatesResponse::fromMap($this->doRPCRequest('ListClusterTemplates', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListClusterTemplatesRequest $request
     *
     * @return ListClusterTemplatesResponse
     */
    public function listClusterTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterTemplatesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClustersResponse::fromMap($this->doRPCRequest('ListClusters', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param TagResourcesSystemTagsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return TagResourcesSystemTagsResponse
     */
    public function tagResourcesSystemTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesSystemTagsResponse::fromMap($this->doRPCRequest('TagResourcesSystemTags', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TagResourcesSystemTagsRequest $request
     *
     * @return TagResourcesSystemTagsResponse
     */
    public function tagResourcesSystemTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesSystemTagsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFlowJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyFlowJobResponse
     */
    public function modifyFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyFlowJobResponse::fromMap($this->doRPCRequest('ModifyFlowJob', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyFlowJobRequest $request
     *
     * @return ModifyFlowJobResponse
     */
    public function modifyFlowJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFlowResponse
     */
    public function deleteFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFlowResponse::fromMap($this->doRPCRequest('DeleteFlow', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFlowRequest $request
     *
     * @return DeleteFlowResponse
     */
    public function deleteFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowEditLockRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateFlowEditLockResponse
     */
    public function createFlowEditLockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowEditLockResponse::fromMap($this->doRPCRequest('CreateFlowEditLock', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFlowEditLockRequest $request
     *
     * @return CreateFlowEditLockResponse
     */
    public function createFlowEditLock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowEditLockWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowNodeInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeFlowNodeInstanceResponse
     */
    public function describeFlowNodeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowNodeInstanceResponse::fromMap($this->doRPCRequest('DescribeFlowNodeInstance', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlowNodeInstanceRequest $request
     *
     * @return DescribeFlowNodeInstanceResponse
     */
    public function describeFlowNodeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowNodeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DetachAndReleaseClusterEniRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DetachAndReleaseClusterEniResponse
     */
    public function detachAndReleaseClusterEniWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachAndReleaseClusterEniResponse::fromMap($this->doRPCRequest('DetachAndReleaseClusterEni', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetachAndReleaseClusterEniRequest $request
     *
     * @return DetachAndReleaseClusterEniResponse
     */
    public function detachAndReleaseClusterEni($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachAndReleaseClusterEniWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScalingGroupInstanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeScalingGroupInstanceResponse
     */
    public function describeScalingGroupInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScalingGroupInstanceResponse::fromMap($this->doRPCRequest('DescribeScalingGroupInstance', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeScalingGroupInstanceRequest $request
     *
     * @return DescribeScalingGroupInstanceResponse
     */
    public function describeScalingGroupInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingGroupInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateClusterHostGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateClusterHostGroupResponse
     */
    public function createClusterHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateClusterHostGroupResponse::fromMap($this->doRPCRequest('CreateClusterHostGroup', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateClusterHostGroupRequest $request
     *
     * @return CreateClusterHostGroupResponse
     */
    public function createClusterHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterHostGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeClusterTemplateResponse
     */
    public function describeClusterTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterTemplateResponse::fromMap($this->doRPCRequest('DescribeClusterTemplate', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeClusterTemplateRequest $request
     *
     * @return DescribeClusterTemplateResponse
     */
    public function describeClusterTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterTemplateWithOptions($request, $runtime);
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

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CommitFlowEntitySnapshotRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CommitFlowEntitySnapshotResponse
     */
    public function commitFlowEntitySnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CommitFlowEntitySnapshotResponse::fromMap($this->doRPCRequest('CommitFlowEntitySnapshot', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CommitFlowEntitySnapshotRequest $request
     *
     * @return CommitFlowEntitySnapshotResponse
     */
    public function commitFlowEntitySnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->commitFlowEntitySnapshotWithOptions($request, $runtime);
    }

    /**
     * @param SubmitFlowJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SubmitFlowJobResponse
     */
    public function submitFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitFlowJobResponse::fromMap($this->doRPCRequest('SubmitFlowJob', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitFlowJobRequest $request
     *
     * @return SubmitFlowJobResponse
     */
    public function submitFlowJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitFlowJobWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowJobHistoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListFlowJobHistoryResponse
     */
    public function listFlowJobHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowJobHistoryResponse::fromMap($this->doRPCRequest('ListFlowJobHistory', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowJobHistoryRequest $request
     *
     * @return ListFlowJobHistoryResponse
     */
    public function listFlowJobHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowJobHistoryWithOptions($request, $runtime);
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
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2020-06-17', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param ListClusterHostComponentRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListClusterHostComponentResponse
     */
    public function listClusterHostComponentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterHostComponentResponse::fromMap($this->doRPCRequest('ListClusterHostComponent', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListClusterHostComponentRequest $request
     *
     * @return ListClusterHostComponentResponse
     */
    public function listClusterHostComponent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterHostComponentWithOptions($request, $runtime);
    }

    /**
     * @param ModifyScalingGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyScalingGroupResponse
     */
    public function modifyScalingGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyScalingGroupResponse::fromMap($this->doRPCRequest('ModifyScalingGroup', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyScalingGroupRequest $request
     *
     * @return ModifyScalingGroupResponse
     */
    public function modifyScalingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScalingGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowProjectClusterSettingRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeFlowProjectClusterSettingResponse
     */
    public function describeFlowProjectClusterSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowProjectClusterSettingResponse::fromMap($this->doRPCRequest('DescribeFlowProjectClusterSetting', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlowProjectClusterSettingRequest $request
     *
     * @return DescribeFlowProjectClusterSettingResponse
     */
    public function describeFlowProjectClusterSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowProjectClusterSettingWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowProjectClusterSettingRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListFlowProjectClusterSettingResponse
     */
    public function listFlowProjectClusterSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowProjectClusterSettingResponse::fromMap($this->doRPCRequest('ListFlowProjectClusterSetting', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowProjectClusterSettingRequest $request
     *
     * @return ListFlowProjectClusterSettingResponse
     */
    public function listFlowProjectClusterSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowProjectClusterSettingWithOptions($request, $runtime);
    }

    /**
     * @param SubmitFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SubmitFlowResponse
     */
    public function submitFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitFlowResponse::fromMap($this->doRPCRequest('SubmitFlow', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SubmitFlowRequest $request
     *
     * @return SubmitFlowResponse
     */
    public function submitFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitFlowWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScalingCommonConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeScalingCommonConfigResponse
     */
    public function describeScalingCommonConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScalingCommonConfigResponse::fromMap($this->doRPCRequest('DescribeScalingCommonConfig', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeScalingCommonConfigRequest $request
     *
     * @return DescribeScalingCommonConfigResponse
     */
    public function describeScalingCommonConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingCommonConfigWithOptions($request, $runtime);
    }

    /**
     * @param ResumeFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ResumeFlowResponse
     */
    public function resumeFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResumeFlowResponse::fromMap($this->doRPCRequest('ResumeFlow', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResumeFlowRequest $request
     *
     * @return ResumeFlowResponse
     */
    public function resumeFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeFlowWithOptions($request, $runtime);
    }

    /**
     * @param RestoreFlowEntitySnapshotRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RestoreFlowEntitySnapshotResponse
     */
    public function restoreFlowEntitySnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestoreFlowEntitySnapshotResponse::fromMap($this->doRPCRequest('RestoreFlowEntitySnapshot', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RestoreFlowEntitySnapshotRequest $request
     *
     * @return RestoreFlowEntitySnapshotResponse
     */
    public function restoreFlowEntitySnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreFlowEntitySnapshotWithOptions($request, $runtime);
    }

    /**
     * @param CreateLibraryRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateLibraryResponse
     */
    public function createLibraryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLibraryResponse::fromMap($this->doRPCRequest('CreateLibrary', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateLibraryRequest $request
     *
     * @return CreateLibraryResponse
     */
    public function createLibrary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLibraryWithOptions($request, $runtime);
    }

    /**
     * @param ListVswitchRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListVswitchResponse
     */
    public function listVswitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVswitchResponse::fromMap($this->doRPCRequest('ListVswitch', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListVswitchRequest $request
     *
     * @return ListVswitchResponse
     */
    public function listVswitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVswitchWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlowProjectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteFlowProjectResponse
     */
    public function deleteFlowProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFlowProjectResponse::fromMap($this->doRPCRequest('DeleteFlowProject', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFlowProjectRequest $request
     *
     * @return DeleteFlowProjectResponse
     */
    public function deleteFlowProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowProjectWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseClusterRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ReleaseClusterResponse
     */
    public function releaseClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseClusterResponse::fromMap($this->doRPCRequest('ReleaseCluster', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReleaseClusterRequest $request
     *
     * @return ReleaseClusterResponse
     */
    public function releaseCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseClusterWithOptions($request, $runtime);
    }

    /**
     * @param AddScalingConfigItemRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AddScalingConfigItemResponse
     */
    public function addScalingConfigItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddScalingConfigItemResponse::fromMap($this->doRPCRequest('AddScalingConfigItem', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddScalingConfigItemRequest $request
     *
     * @return AddScalingConfigItemResponse
     */
    public function addScalingConfigItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addScalingConfigItemWithOptions($request, $runtime);
    }

    /**
     * @param ResetUserPasswordRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ResetUserPasswordResponse
     */
    public function resetUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetUserPasswordResponse::fromMap($this->doRPCRequest('ResetUserPassword', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetUserPasswordRequest $request
     *
     * @return ResetUserPasswordResponse
     */
    public function resetUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetUserPasswordWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowClusterAllHostsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListFlowClusterAllHostsResponse
     */
    public function listFlowClusterAllHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowClusterAllHostsResponse::fromMap($this->doRPCRequest('ListFlowClusterAllHosts', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowClusterAllHostsRequest $request
     *
     * @return ListFlowClusterAllHostsResponse
     */
    public function listFlowClusterAllHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowClusterAllHostsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLibrariesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteLibrariesResponse
     */
    public function deleteLibrariesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLibrariesResponse::fromMap($this->doRPCRequest('DeleteLibraries', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteLibrariesRequest $request
     *
     * @return DeleteLibrariesResponse
     */
    public function deleteLibraries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLibrariesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowCategoryTreeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeFlowCategoryTreeResponse
     */
    public function describeFlowCategoryTreeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowCategoryTreeResponse::fromMap($this->doRPCRequest('DescribeFlowCategoryTree', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlowCategoryTreeRequest $request
     *
     * @return DescribeFlowCategoryTreeResponse
     */
    public function describeFlowCategoryTree($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowCategoryTreeWithOptions($request, $runtime);
    }

    /**
     * @param ListDatasourceInstancesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDatasourceInstancesResponse
     */
    public function listDatasourceInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDatasourceInstancesResponse::fromMap($this->doRPCRequest('ListDatasourceInstances', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDatasourceInstancesRequest $request
     *
     * @return ListDatasourceInstancesResponse
     */
    public function listDatasourceInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDatasourceInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowNodeSqlResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListFlowNodeSqlResultResponse
     */
    public function listFlowNodeSqlResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowNodeSqlResultResponse::fromMap($this->doRPCRequest('ListFlowNodeSqlResult', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowNodeSqlResultRequest $request
     *
     * @return ListFlowNodeSqlResultResponse
     */
    public function listFlowNodeSqlResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowNodeSqlResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeFlowJobResponse
     */
    public function describeFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowJobResponse::fromMap($this->doRPCRequest('DescribeFlowJob', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlowJobRequest $request
     *
     * @return DescribeFlowJobResponse
     */
    public function describeFlowJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowJobWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLibraryInstallTaskDetailRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeLibraryInstallTaskDetailResponse
     */
    public function describeLibraryInstallTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLibraryInstallTaskDetailResponse::fromMap($this->doRPCRequest('DescribeLibraryInstallTaskDetail', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLibraryInstallTaskDetailRequest $request
     *
     * @return DescribeLibraryInstallTaskDetailResponse
     */
    public function describeLibraryInstallTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLibraryInstallTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFlowForWebRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyFlowForWebResponse
     */
    public function modifyFlowForWebWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyFlowForWebResponse::fromMap($this->doRPCRequest('ModifyFlowForWeb', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyFlowForWebRequest $request
     *
     * @return ModifyFlowForWebResponse
     */
    public function modifyFlowForWeb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowForWebWithOptions($request, $runtime);
    }

    /**
     * @param RemoveScalingConfigItemRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RemoveScalingConfigItemResponse
     */
    public function removeScalingConfigItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveScalingConfigItemResponse::fromMap($this->doRPCRequest('RemoveScalingConfigItem', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveScalingConfigItemRequest $request
     *
     * @return RemoveScalingConfigItemResponse
     */
    public function removeScalingConfigItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeScalingConfigItemWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityWhiteListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSecurityWhiteListResponse
     */
    public function describeSecurityWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSecurityWhiteListResponse::fromMap($this->doRPCRequest('DescribeSecurityWhiteList', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSecurityWhiteListRequest $request
     *
     * @return DescribeSecurityWhiteListResponse
     */
    public function describeSecurityWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowNodeInstanceContainerLogRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeFlowNodeInstanceContainerLogResponse
     */
    public function describeFlowNodeInstanceContainerLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowNodeInstanceContainerLogResponse::fromMap($this->doRPCRequest('DescribeFlowNodeInstanceContainerLog', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlowNodeInstanceContainerLogRequest $request
     *
     * @return DescribeFlowNodeInstanceContainerLogResponse
     */
    public function describeFlowNodeInstanceContainerLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowNodeInstanceContainerLogWithOptions($request, $runtime);
    }

    /**
     * @param RerunFlowRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return RerunFlowResponse
     */
    public function rerunFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RerunFlowResponse::fromMap($this->doRPCRequest('RerunFlow', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RerunFlowRequest $request
     *
     * @return RerunFlowResponse
     */
    public function rerunFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rerunFlowWithOptions($request, $runtime);
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

        return ListTagKeysResponse::fromMap($this->doRPCRequest('ListTagKeys', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeClusterOperationHostTaskLogRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeClusterOperationHostTaskLogResponse
     */
    public function describeClusterOperationHostTaskLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterOperationHostTaskLogResponse::fromMap($this->doRPCRequest('DescribeClusterOperationHostTaskLog', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeClusterOperationHostTaskLogRequest $request
     *
     * @return DescribeClusterOperationHostTaskLogResponse
     */
    public function describeClusterOperationHostTaskLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterOperationHostTaskLogWithOptions($request, $runtime);
    }

    /**
     * @param KillFlowJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return KillFlowJobResponse
     */
    public function killFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return KillFlowJobResponse::fromMap($this->doRPCRequest('KillFlowJob', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param KillFlowJobRequest $request
     *
     * @return KillFlowJobResponse
     */
    public function killFlowJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killFlowJobWithOptions($request, $runtime);
    }

    /**
     * @param UninstallLibrariesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UninstallLibrariesResponse
     */
    public function uninstallLibrariesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UninstallLibrariesResponse::fromMap($this->doRPCRequest('UninstallLibraries', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UninstallLibrariesRequest $request
     *
     * @return UninstallLibrariesResponse
     */
    public function uninstallLibraries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallLibrariesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterV2Request $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeClusterV2Response
     */
    public function describeClusterV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterV2Response::fromMap($this->doRPCRequest('DescribeClusterV2', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeClusterV2Request $request
     *
     * @return DescribeClusterV2Response
     */
    public function describeClusterV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeFlowResponse
     */
    public function describeFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowResponse::fromMap($this->doRPCRequest('DescribeFlow', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlowRequest $request
     *
     * @return DescribeFlowResponse
     */
    public function describeFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFlowClusterResponse
     */
    public function listFlowClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowClusterResponse::fromMap($this->doRPCRequest('ListFlowCluster', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowClusterRequest $request
     *
     * @return ListFlowClusterResponse
     */
    public function listFlowCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowClusterWithOptions($request, $runtime);
    }

    /**
     * @param ListLdapUsersRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListLdapUsersResponse
     */
    public function listLdapUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListLdapUsersResponse::fromMap($this->doRPCRequest('ListLdapUsers', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListLdapUsersRequest $request
     *
     * @return ListLdapUsersResponse
     */
    public function listLdapUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLdapUsersWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUserResponse::fromMap($this->doRPCRequest('DeleteUser', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUserRequest $request
     *
     * @return DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowProjectClusterSettingRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateFlowProjectClusterSettingResponse
     */
    public function createFlowProjectClusterSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowProjectClusterSettingResponse::fromMap($this->doRPCRequest('CreateFlowProjectClusterSetting', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFlowProjectClusterSettingRequest $request
     *
     * @return CreateFlowProjectClusterSettingResponse
     */
    public function createFlowProjectClusterSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowProjectClusterSettingWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeFlowInstanceResponse
     */
    public function describeFlowInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowInstanceResponse::fromMap($this->doRPCRequest('DescribeFlowInstance', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlowInstanceRequest $request
     *
     * @return DescribeFlowInstanceResponse
     */
    public function describeFlowInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowProjectUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateFlowProjectUserResponse
     */
    public function createFlowProjectUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowProjectUserResponse::fromMap($this->doRPCRequest('CreateFlowProjectUser', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFlowProjectUserRequest $request
     *
     * @return CreateFlowProjectUserResponse
     */
    public function createFlowProjectUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowProjectUserWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowCategoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateFlowCategoryResponse
     */
    public function createFlowCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowCategoryResponse::fromMap($this->doRPCRequest('CreateFlowCategory', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFlowCategoryRequest $request
     *
     * @return CreateFlowCategoryResponse
     */
    public function createFlowCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowCategoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlowProjectClusterSettingRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteFlowProjectClusterSettingResponse
     */
    public function deleteFlowProjectClusterSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFlowProjectClusterSettingResponse::fromMap($this->doRPCRequest('DeleteFlowProjectClusterSetting', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFlowProjectClusterSettingRequest $request
     *
     * @return DeleteFlowProjectClusterSettingResponse
     */
    public function deleteFlowProjectClusterSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowProjectClusterSettingWithOptions($request, $runtime);
    }

    /**
     * @param ListLibrariesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListLibrariesResponse
     */
    public function listLibrariesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListLibrariesResponse::fromMap($this->doRPCRequest('ListLibraries', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListLibrariesRequest $request
     *
     * @return ListLibrariesResponse
     */
    public function listLibraries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLibrariesWithOptions($request, $runtime);
    }

    /**
     * @param RunScalingActionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RunScalingActionResponse
     */
    public function runScalingActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RunScalingActionResponse::fromMap($this->doRPCRequest('RunScalingAction', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RunScalingActionRequest $request
     *
     * @return RunScalingActionResponse
     */
    public function runScalingAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runScalingActionWithOptions($request, $runtime);
    }

    /**
     * @param InstallLibrariesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return InstallLibrariesResponse
     */
    public function installLibrariesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InstallLibrariesResponse::fromMap($this->doRPCRequest('InstallLibraries', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InstallLibrariesRequest $request
     *
     * @return InstallLibrariesResponse
     */
    public function installLibraries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installLibrariesWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowJobsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListFlowJobsResponse
     */
    public function listFlowJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowJobsResponse::fromMap($this->doRPCRequest('ListFlowJobs', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowJobsRequest $request
     *
     * @return ListFlowJobsResponse
     */
    public function listFlowJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowJobsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyFlowResponse
     */
    public function modifyFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyFlowResponse::fromMap($this->doRPCRequest('ModifyFlow', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyFlowRequest $request
     *
     * @return ModifyFlowResponse
     */
    public function modifyFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowWithOptions($request, $runtime);
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

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListLibraryStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListLibraryStatusResponse
     */
    public function listLibraryStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListLibraryStatusResponse::fromMap($this->doRPCRequest('ListLibraryStatus', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListLibraryStatusRequest $request
     *
     * @return ListLibraryStatusResponse
     */
    public function listLibraryStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLibraryStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterServiceConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeClusterServiceConfigResponse
     */
    public function describeClusterServiceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterServiceConfigResponse::fromMap($this->doRPCRequest('DescribeClusterServiceConfig', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeClusterServiceConfigRequest $request
     *
     * @return DescribeClusterServiceConfigResponse
     */
    public function describeClusterServiceConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterServiceConfigWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFlowProjectClusterSettingRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyFlowProjectClusterSettingResponse
     */
    public function modifyFlowProjectClusterSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyFlowProjectClusterSettingResponse::fromMap($this->doRPCRequest('ModifyFlowProjectClusterSetting', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyFlowProjectClusterSettingRequest $request
     *
     * @return ModifyFlowProjectClusterSettingResponse
     */
    public function modifyFlowProjectClusterSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowProjectClusterSettingWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlowProjectUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteFlowProjectUserResponse
     */
    public function deleteFlowProjectUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFlowProjectUserResponse::fromMap($this->doRPCRequest('DeleteFlowProjectUser', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFlowProjectUserRequest $request
     *
     * @return DeleteFlowProjectUserResponse
     */
    public function deleteFlowProjectUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowProjectUserWithOptions($request, $runtime);
    }

    /**
     * @param CreateClusterV2Request $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateClusterV2Response
     */
    public function createClusterV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateClusterV2Response::fromMap($this->doRPCRequest('CreateClusterV2', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateClusterV2Request $request
     *
     * @return CreateClusterV2Response
     */
    public function createClusterV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterV2WithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyClusterNameResponse
     */
    public function modifyClusterNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyClusterNameResponse::fromMap($this->doRPCRequest('ModifyClusterName', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyClusterNameRequest $request
     *
     * @return ModifyClusterNameResponse
     */
    public function modifyClusterName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterNameWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterOperationHostTaskRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListClusterOperationHostTaskResponse
     */
    public function listClusterOperationHostTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterOperationHostTaskResponse::fromMap($this->doRPCRequest('ListClusterOperationHostTask', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListClusterOperationHostTaskRequest $request
     *
     * @return ListClusterOperationHostTaskResponse
     */
    public function listClusterOperationHostTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterOperationHostTaskWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScalingConfigItemRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeScalingConfigItemResponse
     */
    public function describeScalingConfigItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScalingConfigItemResponse::fromMap($this->doRPCRequest('DescribeScalingConfigItem', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeScalingConfigItemRequest $request
     *
     * @return DescribeScalingConfigItemResponse
     */
    public function describeScalingConfigItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingConfigItemWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterHostRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListClusterHostResponse
     */
    public function listClusterHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterHostResponse::fromMap($this->doRPCRequest('ListClusterHost', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListClusterHostRequest $request
     *
     * @return ListClusterHostResponse
     */
    public function listClusterHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterHostWithOptions($request, $runtime);
    }

    /**
     * @param CreateScalingGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateScalingGroupResponse
     */
    public function createScalingGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateScalingGroupResponse::fromMap($this->doRPCRequest('CreateScalingGroup', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateScalingGroupRequest $request
     *
     * @return CreateScalingGroupResponse
     */
    public function createScalingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScalingGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterServiceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeClusterServiceResponse
     */
    public function describeClusterServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterServiceResponse::fromMap($this->doRPCRequest('DescribeClusterService', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeClusterServiceRequest $request
     *
     * @return DescribeClusterServiceResponse
     */
    public function describeClusterService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterServiceWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowProjectsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListFlowProjectsResponse
     */
    public function listFlowProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowProjectsResponse::fromMap($this->doRPCRequest('ListFlowProjects', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowProjectsRequest $request
     *
     * @return ListFlowProjectsResponse
     */
    public function listFlowProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowProjectsWithOptions($request, $runtime);
    }

    /**
     * @param CreateMetaTablePreviewTaskRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateMetaTablePreviewTaskResponse
     */
    public function createMetaTablePreviewTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMetaTablePreviewTaskResponse::fromMap($this->doRPCRequest('CreateMetaTablePreviewTask', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateMetaTablePreviewTaskRequest $request
     *
     * @return CreateMetaTablePreviewTaskResponse
     */
    public function createMetaTablePreviewTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMetaTablePreviewTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowProjectUserRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListFlowProjectUserResponse
     */
    public function listFlowProjectUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowProjectUserResponse::fromMap($this->doRPCRequest('ListFlowProjectUser', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowProjectUserRequest $request
     *
     * @return ListFlowProjectUserResponse
     */
    public function listFlowProjectUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowProjectUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteClusterHostGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteClusterHostGroupResponse
     */
    public function deleteClusterHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteClusterHostGroupResponse::fromMap($this->doRPCRequest('DeleteClusterHostGroup', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteClusterHostGroupRequest $request
     *
     * @return DeleteClusterHostGroupResponse
     */
    public function deleteClusterHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterHostGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLibraryDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeLibraryDetailResponse
     */
    public function describeLibraryDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLibraryDetailResponse::fromMap($this->doRPCRequest('DescribeLibraryDetail', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeLibraryDetailRequest $request
     *
     * @return DescribeLibraryDetailResponse
     */
    public function describeLibraryDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLibraryDetailWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowsRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListFlowsResponse
     */
    public function listFlowsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowsResponse::fromMap($this->doRPCRequest('ListFlows', '2020-06-17', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowsRequest $request
     *
     * @return ListFlowsResponse
     */
    public function listFlows($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowsWithOptions($request, $runtime);
    }
}
