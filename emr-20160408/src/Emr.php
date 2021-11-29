<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Emr\V20160408\Models\AddClusterServiceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\AddClusterServiceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\AddScalingConfigItemV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\AddScalingConfigItemV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\AuthorizeSecurityGroupRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\AuthorizeSecurityGroupResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CancelOrderRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CancelOrderResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CloneFlowJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CloneFlowJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CloneFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CloneFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateBackupPlanRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateBackupPlanResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateBackupRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateBackupResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterBootstrapActionRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterBootstrapActionResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterHostGroupRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterHostGroupResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterTemplateRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterTemplateResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterWithTemplateRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterWithTemplateResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateDataSourceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateDataSourceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateExecutionPlanRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateExecutionPlanResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowCategoryRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowCategoryResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowForWebRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowForWebResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowProjectRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowProjectResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowProjectUserRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowProjectUserResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateLibraryRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateLibraryResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateMetaTablePreviewTaskRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateMetaTablePreviewTaskResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateResourcePoolRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateResourcePoolResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateResourceQueueRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateResourceQueueResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateScalingGroupV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateScalingGroupV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateScalingRuleRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateScalingRuleResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateTagRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateTagResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateUserRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateUserResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateUsersRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateUsersResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DecommissionHostComponentRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DecommissionHostComponentResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteClusterTemplateRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteClusterTemplateResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteExecutionPlanRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteExecutionPlanResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowCategoryRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowCategoryResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowProjectRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowProjectResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowProjectUserRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowProjectUserResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteLibrariesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteLibrariesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteResourcePoolRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteResourcePoolResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteResourceQueueRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteResourceQueueResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteScalingRuleRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteScalingRuleResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteTagRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteTagResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterBasicInfoRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterBasicInfoResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterMetaCollectRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterMetaCollectResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterOperationHostTaskLogRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterOperationHostTaskLogResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterResourcePoolSchedulerTypeRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterResourcePoolSchedulerTypeResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigHistoryRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigHistoryResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigTagRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigTagResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterTemplateRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterTemplateResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeDataSourceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeDataSourceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeDiskOpsActivityRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeDiskOpsActivityResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeEmrMainVersionRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeEmrMainVersionResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeExecutionPlanRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeExecutionPlanResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowCategoryRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowCategoryResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowCategoryTreeRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowCategoryTreeResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowInstanceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowInstanceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowNodeInstanceContainerLogRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowNodeInstanceContainerLogResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowNodeInstanceLauncherLogRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowNodeInstanceLauncherLogResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowNodeInstanceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowNodeInstanceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowProjectRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowProjectResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeLibraryDetailRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeLibraryDetailResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeLibraryInstallTaskDetailRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeLibraryInstallTaskDetailResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeMetaTablePreviewTaskRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeMetaTablePreviewTaskResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingActivityRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingActivityResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingCommonConfigRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingCommonConfigResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingConfigItemV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingConfigItemV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingRuleRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingRuleResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeSecurityGroupAttributeRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeSecurityGroupAttributeResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DetachAndReleaseClusterEniRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DetachAndReleaseClusterEniResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetHdfsCapacityStatisticInfoRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetHdfsCapacityStatisticInfoResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetJobInputStatisticInfoRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetJobInputStatisticInfoResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetJobOutputStatisticInfoRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetJobOutputStatisticInfoResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetJobRunningTimeStatisticInfoRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetJobRunningTimeStatisticInfoResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueInputStatisticInfoRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueInputStatisticInfoResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueOutputStatisticInfoRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueOutputStatisticInfoResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueSubmissionStatisticInfoRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueSubmissionStatisticInfoResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetUserInputStatisticInfoRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetUserInputStatisticInfoResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetUserOutputStatisticInfoRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetUserOutputStatisticInfoResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetUserSubmissionStatisticInfoRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetUserSubmissionStatisticInfoResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\InstallLibrariesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\InstallLibrariesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\JoinResourceGroupRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\JoinResourceGroupResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\KillFlowJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\KillFlowJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListAdviceActionRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListAdviceActionResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListApmApplicationRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListApmApplicationResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListBackupsRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListBackupsResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostComponentRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostComponentResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostGroupRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostGroupResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterInstalledServiceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterInstalledServiceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationHostRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationHostResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationHostTaskRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationHostTaskResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationTaskRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationTaskResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentHealthInfoResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceComponentResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceConfigHistoryRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceConfigHistoryResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceQuickLinkRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceQuickLinkResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClustersRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClustersResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterTemplatesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterTemplatesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListDataSourceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListDataSourceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListDiskOpsEventsRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListDiskOpsEventsResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrMainVersionRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrMainVersionResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListExecutionPlanInstancesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListExecutionPlanInstancesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowCategoryRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowCategoryResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterAllHostsRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterAllHostsResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterAllRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterAllResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterHostRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterHostResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowInstanceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowInstanceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowJobHistoryRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowJobHistoryResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeInstanceContainerStatusRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeInstanceContainerStatusResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeInstanceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeInstanceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeSqlResultRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeSqlResultResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowProjectRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowProjectResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowProjectUserRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowProjectUserResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListJobExecutionInstancesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListJobExecutionInstancesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListJobsRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListJobsResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListLibrariesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListLibrariesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListLibraryInstallTasksRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListLibraryInstallTasksResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListLibraryStatusRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListLibraryStatusResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListLocalDiskComponentInfoRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListLocalDiskComponentInfoResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListRolesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListRolesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListScalingActivityV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListScalingActivityV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListScalingConfigItemV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListScalingConfigItemV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListScalingGroupV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListScalingGroupV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListSecurityGroupRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListSecurityGroupResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListStackRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListStackResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListTagValuesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListTagValuesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListUsersRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListUsersResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListVswitchRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListVswitchResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterBootstrapActionRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterBootstrapActionResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterHostGroupRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterHostGroupResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterMetaCollectRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterMetaCollectResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterNameRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterNameResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterSecurityGroupRuleRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterSecurityGroupRuleResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterServiceConfigRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterServiceConfigResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterTemplateRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyClusterTemplateResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyExecutionPlanRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyExecutionPlanResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowCategoryRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowCategoryResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowForWebRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowForWebResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowProjectClusterSettingRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowProjectClusterSettingResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowProjectRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowProjectResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyResourcePoolRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyResourcePoolResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyResourcePoolSchedulerTypeRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyResourcePoolSchedulerTypeResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyResourceQueueRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyResourceQueueResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyScalingConfigItemV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyScalingConfigItemV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyScalingGroupV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyScalingGroupV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyScalingRuleRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyScalingRuleResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyScalingTaskGroupRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ModifyScalingTaskGroupResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\QueryEntityRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\QueryEntityResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\QueryTagRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\QueryTagResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\RefreshClusterResourcePoolRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\RefreshClusterResourcePoolResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ReleaseClusterHostGroupRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ReleaseClusterHostGroupResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ReleaseClusterRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ReleaseClusterResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\RemoveScalingConfigItemV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\RemoveScalingConfigItemV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\RerunFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\RerunFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ResizeClusterV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\ResizeClusterV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\ResumeExecutionPlanSchedulerRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ResumeExecutionPlanSchedulerResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ResumeFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ResumeFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\RetryOperationRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\RetryOperationResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\RunClusterServiceActionRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\RunClusterServiceActionResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\RunDiskOpsActivityRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\RunDiskOpsActivityResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\RunExecutionPlanRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\RunExecutionPlanResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\RunExecutionPlanShrinkRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\RunScalingActionV2Request;
use AlibabaCloud\SDK\Emr\V20160408\Models\RunScalingActionV2Response;
use AlibabaCloud\SDK\Emr\V20160408\Models\SearchLogRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\SearchLogResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\StartFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\StartFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\SubmitFlowJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\SubmitFlowJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\SubmitFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\SubmitFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\SuspendExecutionPlanSchedulerRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\SuspendExecutionPlanSchedulerResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\SuspendFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\SuspendFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\UninstallLibrariesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\UninstallLibrariesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\UpdateDataSourceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\UpdateDataSourceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\UpdateLibraryInstallTaskStatusRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\UpdateLibraryInstallTaskStatusResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\UpdateTagRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\UpdateTagResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\UpdateUserRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\UpdateUserResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Emr extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-beijing'            => 'emr.aliyuncs.com',
            'cn-hangzhou'           => 'emr.aliyuncs.com',
            'cn-shanghai'           => 'emr.aliyuncs.com',
            'cn-shenzhen'           => 'emr.aliyuncs.com',
            'ap-southeast-1'        => 'emr.aliyuncs.com',
            'us-west-1'             => 'emr.aliyuncs.com',
            'cn-hangzhou-finance'   => 'emr.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'emr.aliyuncs.com',
            'cn-shanghai-finance-1' => 'emr.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('emr', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddClusterServiceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddClusterServiceResponse
     */
    public function addClusterServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['Comment']         = $request->comment;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['Service']         = $request->service;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddClusterService',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddClusterServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddClusterServiceRequest $request
     *
     * @return AddClusterServiceResponse
     */
    public function addClusterService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addClusterServiceWithOptions($request, $runtime);
    }

    /**
     * @param AddScalingConfigItemV2Request $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddScalingConfigItemV2Response
     */
    public function addScalingConfigItemV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                          = [];
        $query['ConfigItemInformation'] = $request->configItemInformation;
        $query['ConfigItemType']        = $request->configItemType;
        $query['RegionId']              = $request->regionId;
        $query['ResourceGroupId']       = $request->resourceGroupId;
        $query['ResourceOwnerId']       = $request->resourceOwnerId;
        $query['ScalingGroupBizId']     = $request->scalingGroupBizId;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddScalingConfigItemV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddScalingConfigItemV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddScalingConfigItemV2Request $request
     *
     * @return AddScalingConfigItemV2Response
     */
    public function addScalingConfigItemV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addScalingConfigItemV2WithOptions($request, $runtime);
    }

    /**
     * @param AuthorizeSecurityGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AuthorizeSecurityGroupResponse
     */
    public function authorizeSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['BizContent']      = $request->bizContent;
        $query['BizType']         = $request->bizType;
        $query['ClusterId']       = $request->clusterId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AuthorizeSecurityGroup',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AuthorizeSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AuthorizeSecurityGroupRequest $request
     *
     * @return AuthorizeSecurityGroupResponse
     */
    public function authorizeSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeSecurityGroupWithOptions($request, $runtime);
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
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CancelOrder',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelOrderResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CloneFlowRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CloneFlowResponse
     */
    public function cloneFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['Id']        = $request->id;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CloneFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloneFlowResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CloneFlowJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CloneFlowJobResponse
     */
    public function cloneFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['Id']        = $request->id;
        $query['Name']      = $request->name;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CloneFlowJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloneFlowJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateBackupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateBackupResponse
     */
    public function createBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['BackupPlanId']    = $request->backupPlanId;
        $query['MetadataType']    = $request->metadataType;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateBackup',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBackupRequest $request
     *
     * @return CreateBackupResponse
     */
    public function createBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBackupWithOptions($request, $runtime);
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
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['Description']     = $request->description;
        $query['Name']            = $request->name;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['RootPath']        = $request->rootPath;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateBackupPlan',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateBackupPlanResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateClusterBootstrapActionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateClusterBootstrapActionResponse
     */
    public function createClusterBootstrapActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['BootstrapAction'] = $request->bootstrapAction;
        $query['ClusterId']       = $request->clusterId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateClusterBootstrapAction',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateClusterBootstrapActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateClusterBootstrapActionRequest $request
     *
     * @return CreateClusterBootstrapActionResponse
     */
    public function createClusterBootstrapAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterBootstrapActionWithOptions($request, $runtime);
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
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['Comment']         = $request->comment;
        $query['HostGroupName']   = $request->hostGroupName;
        $query['HostGroupParams'] = $request->hostGroupParams;
        $query['HostGroupType']   = $request->hostGroupType;
        $query['PayType']         = $request->payType;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['SecurityGroupId'] = $request->securityGroupId;
        $query['VswitchId']       = $request->vswitchId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateClusterHostGroup',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateClusterHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateClusterTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateClusterTemplateResponse
     */
    public function createClusterTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['AutoRenew']              = $request->autoRenew;
        $query['BootstrapAction']        = $request->bootstrapAction;
        $query['ClientToken']            = $request->clientToken;
        $query['ClusterType']            = $request->clusterType;
        $query['Config']                 = $request->config;
        $query['Configurations']         = $request->configurations;
        $query['DepositType']            = $request->depositType;
        $query['EasEnable']              = $request->easEnable;
        $query['EmrVer']                 = $request->emrVer;
        $query['HighAvailabilityEnable'] = $request->highAvailabilityEnable;
        $query['HostGroup']              = $request->hostGroup;
        $query['InitCustomHiveMetaDb']   = $request->initCustomHiveMetaDb;
        $query['InstanceGeneration']     = $request->instanceGeneration;
        $query['IoOptimized']            = $request->ioOptimized;
        $query['IsOpenPublicIp']         = $request->isOpenPublicIp;
        $query['KeyPairName']            = $request->keyPairName;
        $query['LogPath']                = $request->logPath;
        $query['MachineType']            = $request->machineType;
        $query['MasterPwd']              = $request->masterPwd;
        $query['MetaStoreConf']          = $request->metaStoreConf;
        $query['MetaStoreType']          = $request->metaStoreType;
        $query['NetType']                = $request->netType;
        $query['OptionSoftWareList']     = $request->optionSoftWareList;
        $query['Period']                 = $request->period;
        $query['RegionId']               = $request->regionId;
        $query['ResourceGroupId']        = $request->resourceGroupId;
        $query['ResourceOwnerId']        = $request->resourceOwnerId;
        $query['SecurityGroupId']        = $request->securityGroupId;
        $query['SecurityGroupName']      = $request->securityGroupName;
        $query['SshEnable']              = $request->sshEnable;
        $query['Tag']                    = $request->tag;
        $query['TemplateName']           = $request->templateName;
        $query['UseCustomHiveMetaDb']    = $request->useCustomHiveMetaDb;
        $query['UseLocalMetaDb']         = $request->useLocalMetaDb;
        $query['UserDefinedEmrEcsRole']  = $request->userDefinedEmrEcsRole;
        $query['VSwitchId']              = $request->vSwitchId;
        $query['VpcId']                  = $request->vpcId;
        $query['ZoneId']                 = $request->zoneId;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateClusterTemplate',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateClusterTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateClusterV2Request $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateClusterV2Response
     */
    public function createClusterV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['AuthorizeContent']       = $request->authorizeContent;
        $query['AutoPayOrder']           = $request->autoPayOrder;
        $query['AutoRenew']              = $request->autoRenew;
        $query['BootstrapAction']        = $request->bootstrapAction;
        $query['ChargeType']             = $request->chargeType;
        $query['ClickHouseConf']         = $request->clickHouseConf;
        $query['ClientToken']            = $request->clientToken;
        $query['ClusterType']            = $request->clusterType;
        $query['Config']                 = $request->config;
        $query['Configurations']         = $request->configurations;
        $query['DepositType']            = $request->depositType;
        $query['EasEnable']              = $request->easEnable;
        $query['EmrVer']                 = $request->emrVer;
        $query['ExtraAttributes']        = $request->extraAttributes;
        $query['HighAvailabilityEnable'] = $request->highAvailabilityEnable;
        $query['HostComponentInfo']      = $request->hostComponentInfo;
        $query['HostGroup']              = $request->hostGroup;
        $query['InitCustomHiveMetaDB']   = $request->initCustomHiveMetaDB;
        $query['InstanceGeneration']     = $request->instanceGeneration;
        $query['IoOptimized']            = $request->ioOptimized;
        $query['IsOpenPublicIp']         = $request->isOpenPublicIp;
        $query['KeyPairName']            = $request->keyPairName;
        $query['LogPath']                = $request->logPath;
        $query['MachineType']            = $request->machineType;
        $query['MasterPwd']              = $request->masterPwd;
        $query['MetaStoreConf']          = $request->metaStoreConf;
        $query['MetaStoreType']          = $request->metaStoreType;
        $query['Name']                   = $request->name;
        $query['NetType']                = $request->netType;
        $query['OptionSoftWareList']     = $request->optionSoftWareList;
        $query['Period']                 = $request->period;
        $query['PromotionInfo']          = $request->promotionInfo;
        $query['RegionId']               = $request->regionId;
        $query['RelatedClusterId']       = $request->relatedClusterId;
        $query['ResourceGroupId']        = $request->resourceGroupId;
        $query['ResourceOwnerId']        = $request->resourceOwnerId;
        $query['SecurityGroupId']        = $request->securityGroupId;
        $query['SecurityGroupName']      = $request->securityGroupName;
        $query['ServiceInfo']            = $request->serviceInfo;
        $query['SshEnable']              = $request->sshEnable;
        $query['Tag']                    = $request->tag;
        $query['UseCustomHiveMetaDB']    = $request->useCustomHiveMetaDB;
        $query['UseLocalMetaDb']         = $request->useLocalMetaDb;
        $query['UserDefinedEmrEcsRole']  = $request->userDefinedEmrEcsRole;
        $query['UserInfo']               = $request->userInfo;
        $query['VSwitchId']              = $request->vSwitchId;
        $query['VpcId']                  = $request->vpcId;
        $query['WhiteListType']          = $request->whiteListType;
        $query['ZoneId']                 = $request->zoneId;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateClusterV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateClusterV2Response::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateClusterWithTemplateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateClusterWithTemplateResponse
     */
    public function createClusterWithTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterName']     = $request->clusterName;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['TemplateBizId']   = $request->templateBizId;
        $query['UniqueTag']       = $request->uniqueTag;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateClusterWithTemplate',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateClusterWithTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateClusterWithTemplateRequest $request
     *
     * @return CreateClusterWithTemplateResponse
     */
    public function createClusterWithTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['Conf']            = $request->conf;
        $query['Description']     = $request->description;
        $query['Name']            = $request->name;
        $query['NavParentId']     = $request->navParentId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['SourceType']      = $request->sourceType;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateDataSource',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDataSourceRequest $request
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param CreateExecutionPlanRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateExecutionPlanResponse
     */
    public function createExecutionPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['BootstrapAction']        = $request->bootstrapAction;
        $query['ClusterId']              = $request->clusterId;
        $query['ClusterName']            = $request->clusterName;
        $query['ClusterType']            = $request->clusterType;
        $query['Config']                 = $request->config;
        $query['Configurations']         = $request->configurations;
        $query['CreateClusterOnDemand']  = $request->createClusterOnDemand;
        $query['DayOfMonth']             = $request->dayOfMonth;
        $query['DayOfWeek']              = $request->dayOfWeek;
        $query['EasEnable']              = $request->easEnable;
        $query['EcsOrder']               = $request->ecsOrder;
        $query['EmrVer']                 = $request->emrVer;
        $query['HighAvailabilityEnable'] = $request->highAvailabilityEnable;
        $query['InitCustomHiveMetaDB']   = $request->initCustomHiveMetaDB;
        $query['InstanceGeneration']     = $request->instanceGeneration;
        $query['IoOptimized']            = $request->ioOptimized;
        $query['IsOpenPublicIp']         = $request->isOpenPublicIp;
        $query['JobIdList']              = $request->jobIdList;
        $query['LogEnable']              = $request->logEnable;
        $query['LogPath']                = $request->logPath;
        $query['Name']                   = $request->name;
        $query['NetType']                = $request->netType;
        $query['OptionSoftWareList']     = $request->optionSoftWareList;
        $query['RegionId']               = $request->regionId;
        $query['ResourceOwnerId']        = $request->resourceOwnerId;
        $query['SecurityGroupId']        = $request->securityGroupId;
        $query['StartTime']              = $request->startTime;
        $query['Strategy']               = $request->strategy;
        $query['TimeInterval']           = $request->timeInterval;
        $query['TimeUnit']               = $request->timeUnit;
        $query['UseCustomHiveMetaDB']    = $request->useCustomHiveMetaDB;
        $query['UseLocalMetaDb']         = $request->useLocalMetaDb;
        $query['UserDefinedEmrEcsRole']  = $request->userDefinedEmrEcsRole;
        $query['VSwitchId']              = $request->vSwitchId;
        $query['VpcId']                  = $request->vpcId;
        $query['WorkflowDefinition']     = $request->workflowDefinition;
        $query['ZoneId']                 = $request->zoneId;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateExecutionPlan',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateExecutionPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateExecutionPlanRequest $request
     *
     * @return CreateExecutionPlanResponse
     */
    public function createExecutionPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExecutionPlanWithOptions($request, $runtime);
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
        $query                            = [];
        $query['AlertConf']               = $request->alertConf;
        $query['AlertDingDingGroupBizId'] = $request->alertDingDingGroupBizId;
        $query['AlertUserGroupBizId']     = $request->alertUserGroupBizId;
        $query['Application']             = $request->application;
        $query['ClusterId']               = $request->clusterId;
        $query['CreateCluster']           = $request->createCluster;
        $query['CronExpr']                = $request->cronExpr;
        $query['Description']             = $request->description;
        $query['EndSchedule']             = $request->endSchedule;
        $query['HostName']                = $request->hostName;
        $query['Lifecycle']               = $request->lifecycle;
        $query['LogArchiveLocation']      = $request->logArchiveLocation;
        $query['Name']                    = $request->name;
        $query['Namespace']               = $request->namespace_;
        $query['ParentCategory']          = $request->parentCategory;
        $query['ParentFlowList']          = $request->parentFlowList;
        $query['ProjectId']               = $request->projectId;
        $query['RegionId']                = $request->regionId;
        $query['StartSchedule']           = $request->startSchedule;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFlowResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateFlowCategoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateFlowCategoryResponse
     */
    public function createFlowCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['Name']      = $request->name;
        $query['ParentId']  = $request->parentId;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $query['Type']      = $request->type;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowCategory',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFlowCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateFlowForWebRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateFlowForWebResponse
     */
    public function createFlowForWebWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                            = [];
        $query['AlertConf']               = $request->alertConf;
        $query['AlertDingDingGroupBizId'] = $request->alertDingDingGroupBizId;
        $query['AlertUserGroupBizId']     = $request->alertUserGroupBizId;
        $query['ClusterId']               = $request->clusterId;
        $query['CreateCluster']           = $request->createCluster;
        $query['CronExpr']                = $request->cronExpr;
        $query['Description']             = $request->description;
        $query['EndSchedule']             = $request->endSchedule;
        $query['Graph']                   = $request->graph;
        $query['HostName']                = $request->hostName;
        $query['Lifecycle']               = $request->lifecycle;
        $query['LogArchiveLocation']      = $request->logArchiveLocation;
        $query['Name']                    = $request->name;
        $query['Namespace']               = $request->namespace_;
        $query['ParentCategory']          = $request->parentCategory;
        $query['ParentFlowList']          = $request->parentFlowList;
        $query['ProjectId']               = $request->projectId;
        $query['RegionId']                = $request->regionId;
        $query['StartSchedule']           = $request->startSchedule;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowForWeb',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFlowForWebResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateFlowForWebRequest $request
     *
     * @return CreateFlowForWebResponse
     */
    public function createFlowForWeb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowForWebWithOptions($request, $runtime);
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
        $query                      = [];
        $query['Adhoc']             = $request->adhoc;
        $query['AlertConf']         = $request->alertConf;
        $query['ClusterId']         = $request->clusterId;
        $query['FailAct']           = $request->failAct;
        $query['MaxRetry']          = $request->maxRetry;
        $query['MaxRunningTimeSec'] = $request->maxRunningTimeSec;
        $query['Mode']              = $request->mode;
        $query['Name']              = $request->name;
        $query['ParentCategory']    = $request->parentCategory;
        $query['ProjectId']         = $request->projectId;
        $query['RegionId']          = $request->regionId;
        $query['RetryInterval']     = $request->retryInterval;
        $query['RetryPolicy']       = $request->retryPolicy;
        $query['Type']              = $request->type;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFlowJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateFlowProjectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateFlowProjectResponse
     */
    public function createFlowProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Description']     = $request->description;
        $query['Name']            = $request->name;
        $query['ProductType']     = $request->productType;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowProject',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFlowProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateFlowProjectClusterSettingRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateFlowProjectClusterSettingResponse
     */
    public function createFlowProjectClusterSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['ClusterId']    = $request->clusterId;
        $query['DefaultQueue'] = $request->defaultQueue;
        $query['DefaultUser']  = $request->defaultUser;
        $query['HostList']     = $request->hostList;
        $query['ProjectId']    = $request->projectId;
        $query['QueueList']    = $request->queueList;
        $query['RegionId']     = $request->regionId;
        $query['UserList']     = $request->userList;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowProjectClusterSetting',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFlowProjectClusterSettingResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateFlowProjectUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateFlowProjectUserResponse
     */
    public function createFlowProjectUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $query['User']      = $request->user;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowProjectUser',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFlowProjectUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['FailAct']         = $request->failAct;
        $query['MaxRetry']        = $request->maxRetry;
        $query['Name']            = $request->name;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['RetryInterval']   = $request->retryInterval;
        $query['RunParameter']    = $request->runParameter;
        $query['Type']            = $request->type;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateJobRequest $request
     *
     * @return CreateJobResponse
     */
    public function createJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobWithOptions($request, $runtime);
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
        $query                    = [];
        $query['LibraryVersion']  = $request->libraryVersion;
        $query['Name']            = $request->name;
        $query['Properties']      = $request->properties;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['Scope']           = $request->scope;
        $query['SourceLocation']  = $request->sourceLocation;
        $query['SourceType']      = $request->sourceType;
        $query['Type']            = $request->type;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateLibrary',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateMetaTablePreviewTaskRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateMetaTablePreviewTaskResponse
     */
    public function createMetaTablePreviewTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['DatabaseId']      = $request->databaseId;
        $query['Password']        = $request->password;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['TableId']         = $request->tableId;
        $query['User']            = $request->user;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateMetaTablePreviewTask',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateMetaTablePreviewTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateResourcePoolRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateResourcePoolResponse
     */
    public function createResourcePoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Active']          = $request->active;
        $query['ClusterId']       = $request->clusterId;
        $query['Config']          = $request->config;
        $query['Name']            = $request->name;
        $query['Note']            = $request->note;
        $query['PoolType']        = $request->poolType;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['YarnSiteConfig']  = $request->yarnSiteConfig;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateResourcePool',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateResourcePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateResourcePoolRequest $request
     *
     * @return CreateResourcePoolResponse
     */
    public function createResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourcePoolWithOptions($request, $runtime);
    }

    /**
     * @param CreateResourceQueueRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateResourceQueueResponse
     */
    public function createResourceQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['Config']          = $request->config;
        $query['Leaf']            = $request->leaf;
        $query['Name']            = $request->name;
        $query['ParentQueueId']   = $request->parentQueueId;
        $query['QualifiedName']   = $request->qualifiedName;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ResourcePoolId']  = $request->resourcePoolId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateResourceQueue',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateResourceQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateResourceQueueRequest $request
     *
     * @return CreateResourceQueueResponse
     */
    public function createResourceQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceQueueWithOptions($request, $runtime);
    }

    /**
     * @param CreateScalingGroupV2Request $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateScalingGroupV2Response
     */
    public function createScalingGroupV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Description']     = $request->description;
        $query['HostGroupId']     = $request->hostGroupId;
        $query['Name']            = $request->name;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateScalingGroupV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateScalingGroupV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateScalingGroupV2Request $request
     *
     * @return CreateScalingGroupV2Response
     */
    public function createScalingGroupV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScalingGroupV2WithOptions($request, $runtime);
    }

    /**
     * @param CreateScalingRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateScalingRuleResponse
     */
    public function createScalingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['AdjustmentType']       = $request->adjustmentType;
        $query['AdjustmentValue']      = $request->adjustmentValue;
        $query['CloudWatchTrigger']    = $request->cloudWatchTrigger;
        $query['ClusterId']            = $request->clusterId;
        $query['Cooldown']             = $request->cooldown;
        $query['HostGroupId']          = $request->hostGroupId;
        $query['LaunchExpirationTime'] = $request->launchExpirationTime;
        $query['LaunchTime']           = $request->launchTime;
        $query['RecurrenceEndTime']    = $request->recurrenceEndTime;
        $query['RecurrenceType']       = $request->recurrenceType;
        $query['RecurrenceValue']      = $request->recurrenceValue;
        $query['RegionId']             = $request->regionId;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RuleCategory']         = $request->ruleCategory;
        $query['RuleName']             = $request->ruleName;
        $query['SchedulerTrigger']     = $request->schedulerTrigger;
        $query['TimeoutWithGrace']     = $request->timeoutWithGrace;
        $query['WithGrace']            = $request->withGrace;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateScalingRule',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateScalingRuleRequest $request
     *
     * @return CreateScalingRuleResponse
     */
    public function createScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScalingRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateTagResponse
     */
    public function createTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Category']        = $request->category;
        $query['Description']     = $request->description;
        $query['Id']              = $request->id;
        $query['Name']            = $request->name;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateTag',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
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

        return $this->createTagWithOptions($request, $runtime);
    }

    /**
     * @param CreateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['AliyunUserId']         = $request->aliyunUserId;
        $query['Description']          = $request->description;
        $query['GroupIdList']          = $request->groupIdList;
        $query['RegionId']             = $request->regionId;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RoleIdList']           = $request->roleIdList;
        $query['Status']               = $request->status;
        $query['UserAccountParamList'] = $request->userAccountParamList;
        $query['UserName']             = $request->userName;
        $query['UserType']             = $request->userType;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateUser',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateUserRequest $request
     *
     * @return CreateUserResponse
     */
    public function createUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserWithOptions($request, $runtime);
    }

    /**
     * @param CreateUsersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateUsersResponse
     */
    public function createUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['UserInfo']        = $request->userInfo;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateUsers',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateUsersRequest $request
     *
     * @return CreateUsersResponse
     */
    public function createUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUsersWithOptions($request, $runtime);
    }

    /**
     * @param DecommissionHostComponentRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DecommissionHostComponentResponse
     */
    public function decommissionHostComponentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['ComponentName']   = $request->componentName;
        $query['HostInstanceId']  = $request->hostInstanceId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ServiceName']     = $request->serviceName;
        $query['TimeoutSeconds']  = $request->timeoutSeconds;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DecommissionHostComponent',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DecommissionHostComponentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DecommissionHostComponentRequest $request
     *
     * @return DecommissionHostComponentResponse
     */
    public function decommissionHostComponent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->decommissionHostComponentWithOptions($request, $runtime);
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
        $query                    = [];
        $query['BizId']           = $request->bizId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteClusterTemplate',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteClusterTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteExecutionPlanRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteExecutionPlanResponse
     */
    public function deleteExecutionPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Id']              = $request->id;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteExecutionPlan',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteExecutionPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteExecutionPlanRequest $request
     *
     * @return DeleteExecutionPlanResponse
     */
    public function deleteExecutionPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExecutionPlanWithOptions($request, $runtime);
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
        $query              = [];
        $query['Id']        = $request->id;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteFlowCategoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteFlowCategoryResponse
     */
    public function deleteFlowCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['Id']        = $request->id;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowCategory',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteFlowJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteFlowJobResponse
     */
    public function deleteFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['Id']        = $request->id;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFlowJobRequest $request
     *
     * @return DeleteFlowJobResponse
     */
    public function deleteFlowJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowJobWithOptions($request, $runtime);
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
        $query              = [];
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowProject',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteFlowProjectClusterSettingRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteFlowProjectClusterSettingResponse
     */
    public function deleteFlowProjectClusterSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['ClusterId'] = $request->clusterId;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowProjectClusterSetting',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowProjectClusterSettingResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteFlowProjectUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteFlowProjectUserResponse
     */
    public function deleteFlowProjectUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $query['UserName']  = $request->userName;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowProjectUser',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowProjectUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteJobResponse
     */
    public function deleteJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Id']              = $request->id;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteJobRequest $request
     *
     * @return DeleteJobResponse
     */
    public function deleteJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJobWithOptions($request, $runtime);
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
        $query                     = [];
        $query['LibraryBizIdList'] = $request->libraryBizIdList;
        $query['RegionId']         = $request->regionId;
        $query['ResourceOwnerId']  = $request->resourceOwnerId;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteLibraries',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteLibrariesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteResourcePoolRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteResourcePoolResponse
     */
    public function deleteResourcePoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ResourcePoolId']  = $request->resourcePoolId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteResourcePool',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteResourcePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteResourcePoolRequest $request
     *
     * @return DeleteResourcePoolResponse
     */
    public function deleteResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourcePoolWithOptions($request, $runtime);
    }

    /**
     * @param DeleteResourceQueueRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteResourceQueueResponse
     */
    public function deleteResourceQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ResourceQueueId'] = $request->resourceQueueId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceQueue',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteResourceQueueRequest $request
     *
     * @return DeleteResourceQueueResponse
     */
    public function deleteResourceQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourceQueueWithOptions($request, $runtime);
    }

    /**
     * @param DeleteScalingRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteScalingRuleResponse
     */
    public function deleteScalingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['HostGroupId']     = $request->hostGroupId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ScalingRuleId']   = $request->scalingRuleId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteScalingRule',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteScalingRuleRequest $request
     *
     * @return DeleteScalingRuleResponse
     */
    public function deleteScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScalingRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteTagResponse
     */
    public function deleteTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Category']        = $request->category;
        $query['Description']     = $request->description;
        $query['Id']              = $request->id;
        $query['Name']            = $request->name;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteTag',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
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

        return $this->deleteTagWithOptions($request, $runtime);
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
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['Type']            = $request->type;
        $query['UserId']          = $request->userId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeClusterBasicInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeClusterBasicInfoResponse
     */
    public function describeClusterBasicInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterBasicInfo',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterBasicInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterBasicInfoRequest $request
     *
     * @return DescribeClusterBasicInfoResponse
     */
    public function describeClusterBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterBasicInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterMetaCollectRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeClusterMetaCollectResponse
     */
    public function describeClusterMetaCollectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterMetaCollect',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterMetaCollectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterMetaCollectRequest $request
     *
     * @return DescribeClusterMetaCollectResponse
     */
    public function describeClusterMetaCollect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterMetaCollectWithOptions($request, $runtime);
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
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['HostId']          = $request->hostId;
        $query['OperationId']     = $request->operationId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['Status']          = $request->status;
        $query['TaskId']          = $request->taskId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterOperationHostTaskLog',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterOperationHostTaskLogResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeClusterResourcePoolSchedulerTypeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeClusterResourcePoolSchedulerTypeResponse
     */
    public function describeClusterResourcePoolSchedulerTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterResourcePoolSchedulerType',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterResourcePoolSchedulerTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterResourcePoolSchedulerTypeRequest $request
     *
     * @return DescribeClusterResourcePoolSchedulerTypeResponse
     */
    public function describeClusterResourcePoolSchedulerType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterResourcePoolSchedulerTypeWithOptions($request, $runtime);
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
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ServiceName']     = $request->serviceName;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterService',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterServiceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeClusterServiceConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeClusterServiceConfigResponse
     */
    public function describeClusterServiceConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['ConfigVersion']   = $request->configVersion;
        $query['GroupId']         = $request->groupId;
        $query['HostInstanceId']  = $request->hostInstanceId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ServiceName']     = $request->serviceName;
        $query['TagValue']        = $request->tagValue;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterServiceConfig',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeClusterServiceConfigHistoryRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeClusterServiceConfigHistoryResponse
     */
    public function describeClusterServiceConfigHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['ConfigVersion']   = $request->configVersion;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ServiceName']     = $request->serviceName;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterServiceConfigHistory',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterServiceConfigHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterServiceConfigHistoryRequest $request
     *
     * @return DescribeClusterServiceConfigHistoryResponse
     */
    public function describeClusterServiceConfigHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterServiceConfigHistoryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterServiceConfigTagRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeClusterServiceConfigTagResponse
     */
    public function describeClusterServiceConfigTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['ConfigTag']       = $request->configTag;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ServiceName']     = $request->serviceName;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterServiceConfigTag',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterServiceConfigTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterServiceConfigTagRequest $request
     *
     * @return DescribeClusterServiceConfigTagResponse
     */
    public function describeClusterServiceConfigTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterServiceConfigTagWithOptions($request, $runtime);
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
        $query                    = [];
        $query['BizId']           = $request->bizId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterTemplate',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeClusterV2Request $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeClusterV2Response
     */
    public function describeClusterV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Id']              = $request->id;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterV2Response::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeDataSourceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDataSourceResponse
     */
    public function describeDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Id']              = $request->id;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataSource',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDataSourceRequest $request
     *
     * @return DescribeDataSourceResponse
     */
    public function describeDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDiskOpsActivityRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDiskOpsActivityResponse
     */
    public function describeDiskOpsActivityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['CurrentStage']    = $request->currentStage;
        $query['CurrentState']    = $request->currentState;
        $query['DiskId']          = $request->diskId;
        $query['EventId']         = $request->eventId;
        $query['InstanceId']      = $request->instanceId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiskOpsActivity',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDiskOpsActivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDiskOpsActivityRequest $request
     *
     * @return DescribeDiskOpsActivityResponse
     */
    public function describeDiskOpsActivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiskOpsActivityWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEmrMainVersionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeEmrMainVersionResponse
     */
    public function describeEmrMainVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['EmrVersion']      = $request->emrVersion;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeEmrMainVersion',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeEmrMainVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEmrMainVersionRequest $request
     *
     * @return DescribeEmrMainVersionResponse
     */
    public function describeEmrMainVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEmrMainVersionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExecutionPlanRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeExecutionPlanResponse
     */
    public function describeExecutionPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Id']              = $request->id;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeExecutionPlan',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeExecutionPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExecutionPlanRequest $request
     *
     * @return DescribeExecutionPlanResponse
     */
    public function describeExecutionPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExecutionPlanWithOptions($request, $runtime);
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
        $query              = [];
        $query['Id']        = $request->id;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeFlowCategoryRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeFlowCategoryResponse
     */
    public function describeFlowCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['Id']        = $request->id;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowCategory',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFlowCategoryRequest $request
     *
     * @return DescribeFlowCategoryResponse
     */
    public function describeFlowCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowCategoryWithOptions($request, $runtime);
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
        $query               = [];
        $query['CategoryId'] = $request->categoryId;
        $query['Keyword']    = $request->keyword;
        $query['Mode']       = $request->mode;
        $query['ProjectId']  = $request->projectId;
        $query['RegionId']   = $request->regionId;
        $query['Type']       = $request->type;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowCategoryTree',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowCategoryTreeResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeFlowInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeFlowInstanceResponse
     */
    public function describeFlowInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['Id']        = $request->id;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowInstance',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeFlowJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeFlowJobResponse
     */
    public function describeFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['Id']        = $request->id;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeFlowNodeInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeFlowNodeInstanceResponse
     */
    public function describeFlowNodeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['Id']        = $request->id;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowNodeInstance',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowNodeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeFlowNodeInstanceContainerLogRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeFlowNodeInstanceContainerLogResponse
     */
    public function describeFlowNodeInstanceContainerLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['AppId']          = $request->appId;
        $query['ContainerId']    = $request->containerId;
        $query['Length']         = $request->length;
        $query['LogName']        = $request->logName;
        $query['NodeInstanceId'] = $request->nodeInstanceId;
        $query['Offset']         = $request->offset;
        $query['ProjectId']      = $request->projectId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowNodeInstanceContainerLog',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowNodeInstanceContainerLogResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeFlowNodeInstanceLauncherLogRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeFlowNodeInstanceLauncherLogResponse
     */
    public function describeFlowNodeInstanceLauncherLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['EndTime']        = $request->endTime;
        $query['Length']         = $request->length;
        $query['Lines']          = $request->lines;
        $query['NodeInstanceId'] = $request->nodeInstanceId;
        $query['Offset']         = $request->offset;
        $query['ProjectId']      = $request->projectId;
        $query['RegionId']       = $request->regionId;
        $query['Reverse']        = $request->reverse;
        $query['Start']          = $request->start;
        $query['StartTime']      = $request->startTime;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowNodeInstanceLauncherLog',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowNodeInstanceLauncherLogResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeFlowProjectRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeFlowProjectResponse
     */
    public function describeFlowProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowProject',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeFlowProjectClusterSettingRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeFlowProjectClusterSettingResponse
     */
    public function describeFlowProjectClusterSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['ClusterId'] = $request->clusterId;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowProjectClusterSetting',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowProjectClusterSettingResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeJobResponse
     */
    public function describeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Id']              = $request->id;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param DescribeLibraryDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeLibraryDetailResponse
     */
    public function describeLibraryDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['LibraryBizId']    = $request->libraryBizId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeLibraryDetail',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeLibraryDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeLibraryInstallTaskDetailRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeLibraryInstallTaskDetailResponse
     */
    public function describeLibraryInstallTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['TaskBizId']       = $request->taskBizId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeLibraryInstallTaskDetail',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeLibraryInstallTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeMetaTablePreviewTaskRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeMetaTablePreviewTaskResponse
     */
    public function describeMetaTablePreviewTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['TaskId']          = $request->taskId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeMetaTablePreviewTask',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeMetaTablePreviewTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeScalingActivityRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeScalingActivityResponse
     */
    public function describeScalingActivityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['ClusterId']         = $request->clusterId;
        $query['HostGroupId']       = $request->hostGroupId;
        $query['RegionId']          = $request->regionId;
        $query['ResourceOwnerId']   = $request->resourceOwnerId;
        $query['ScalingActivityId'] = $request->scalingActivityId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingActivity',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeScalingActivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScalingActivityRequest $request
     *
     * @return DescribeScalingActivityResponse
     */
    public function describeScalingActivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingActivityWithOptions($request, $runtime);
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
        $query                    = [];
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingCommonConfig',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeScalingCommonConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeScalingConfigItemV2Request $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeScalingConfigItemV2Response
     */
    public function describeScalingConfigItemV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ConfigItemType']      = $request->configItemType;
        $query['RegionId']            = $request->regionId;
        $query['ResourceGroupId']     = $request->resourceGroupId;
        $query['ResourceOwnerId']     = $request->resourceOwnerId;
        $query['ScalingConfigItemId'] = $request->scalingConfigItemId;
        $query['ScalingGroupBizId']   = $request->scalingGroupBizId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingConfigItemV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeScalingConfigItemV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScalingConfigItemV2Request $request
     *
     * @return DescribeScalingConfigItemV2Response
     */
    public function describeScalingConfigItemV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingConfigItemV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeScalingGroupInstanceV2Request $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeScalingGroupInstanceV2Response
     */
    public function describeScalingGroupInstanceV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['HostGroupBizId']    = $request->hostGroupBizId;
        $query['RegionId']          = $request->regionId;
        $query['ResourceGroupId']   = $request->resourceGroupId;
        $query['ResourceOwnerId']   = $request->resourceOwnerId;
        $query['ScalingGroupBizId'] = $request->scalingGroupBizId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingGroupInstanceV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeScalingGroupInstanceV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScalingGroupInstanceV2Request $request
     *
     * @return DescribeScalingGroupInstanceV2Response
     */
    public function describeScalingGroupInstanceV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingGroupInstanceV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeScalingGroupV2Request $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeScalingGroupV2Response
     */
    public function describeScalingGroupV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['HostGroupBizId']    = $request->hostGroupBizId;
        $query['RegionId']          = $request->regionId;
        $query['ResourceGroupId']   = $request->resourceGroupId;
        $query['ResourceOwnerId']   = $request->resourceOwnerId;
        $query['ScalingGroupBizId'] = $request->scalingGroupBizId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingGroupV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeScalingGroupV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScalingGroupV2Request $request
     *
     * @return DescribeScalingGroupV2Response
     */
    public function describeScalingGroupV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingGroupV2WithOptions($request, $runtime);
    }

    /**
     * @param DescribeScalingRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeScalingRuleResponse
     */
    public function describeScalingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['HostGroupId']     = $request->hostGroupId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ScalingRuleId']   = $request->scalingRuleId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeScalingRule',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeScalingRuleRequest $request
     *
     * @return DescribeScalingRuleResponse
     */
    public function describeScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScalingRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityGroupAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeSecurityGroupAttributeResponse
     */
    public function describeSecurityGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityGroupAttribute',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSecurityGroupAttributeRequest $request
     *
     * @return DescribeSecurityGroupAttributeResponse
     */
    public function describeSecurityGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupAttributeWithOptions($request, $runtime);
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
        $query                    = [];
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['TargetClusterId'] = $request->targetClusterId;
        $query['VswitchId']       = $request->vswitchId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DetachAndReleaseClusterEni',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DetachAndReleaseClusterEniResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetHdfsCapacityStatisticInfoRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetHdfsCapacityStatisticInfoResponse
     */
    public function getHdfsCapacityStatisticInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['FromDatetime']    = $request->fromDatetime;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ToDatetime']      = $request->toDatetime;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetHdfsCapacityStatisticInfo',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHdfsCapacityStatisticInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHdfsCapacityStatisticInfoRequest $request
     *
     * @return GetHdfsCapacityStatisticInfoResponse
     */
    public function getHdfsCapacityStatisticInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHdfsCapacityStatisticInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetJobInputStatisticInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetJobInputStatisticInfoResponse
     */
    public function getJobInputStatisticInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['FromDatetime']    = $request->fromDatetime;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ToDatetime']      = $request->toDatetime;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetJobInputStatisticInfo',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJobInputStatisticInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetJobInputStatisticInfoRequest $request
     *
     * @return GetJobInputStatisticInfoResponse
     */
    public function getJobInputStatisticInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobInputStatisticInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetJobOutputStatisticInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetJobOutputStatisticInfoResponse
     */
    public function getJobOutputStatisticInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['FromDatetime']    = $request->fromDatetime;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ToDatetime']      = $request->toDatetime;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetJobOutputStatisticInfo',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJobOutputStatisticInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetJobOutputStatisticInfoRequest $request
     *
     * @return GetJobOutputStatisticInfoResponse
     */
    public function getJobOutputStatisticInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobOutputStatisticInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetJobRunningTimeStatisticInfoRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetJobRunningTimeStatisticInfoResponse
     */
    public function getJobRunningTimeStatisticInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['FromDatetime']    = $request->fromDatetime;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ToDatetime']      = $request->toDatetime;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetJobRunningTimeStatisticInfo',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJobRunningTimeStatisticInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetJobRunningTimeStatisticInfoRequest $request
     *
     * @return GetJobRunningTimeStatisticInfoResponse
     */
    public function getJobRunningTimeStatisticInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobRunningTimeStatisticInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetQueueInputStatisticInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetQueueInputStatisticInfoResponse
     */
    public function getQueueInputStatisticInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['FromDatetime']    = $request->fromDatetime;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ToDatetime']      = $request->toDatetime;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetQueueInputStatisticInfo',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetQueueInputStatisticInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQueueInputStatisticInfoRequest $request
     *
     * @return GetQueueInputStatisticInfoResponse
     */
    public function getQueueInputStatisticInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueueInputStatisticInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetQueueOutputStatisticInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetQueueOutputStatisticInfoResponse
     */
    public function getQueueOutputStatisticInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['FromDatetime']    = $request->fromDatetime;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ToDatetime']      = $request->toDatetime;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetQueueOutputStatisticInfo',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetQueueOutputStatisticInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQueueOutputStatisticInfoRequest $request
     *
     * @return GetQueueOutputStatisticInfoResponse
     */
    public function getQueueOutputStatisticInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueueOutputStatisticInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetQueueSubmissionStatisticInfoRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetQueueSubmissionStatisticInfoResponse
     */
    public function getQueueSubmissionStatisticInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ApplicationType'] = $request->applicationType;
        $query['ClusterId']       = $request->clusterId;
        $query['FinalStatus']     = $request->finalStatus;
        $query['FromDatetime']    = $request->fromDatetime;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ToDatetime']      = $request->toDatetime;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetQueueSubmissionStatisticInfo',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetQueueSubmissionStatisticInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQueueSubmissionStatisticInfoRequest $request
     *
     * @return GetQueueSubmissionStatisticInfoResponse
     */
    public function getQueueSubmissionStatisticInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueueSubmissionStatisticInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetUserInputStatisticInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetUserInputStatisticInfoResponse
     */
    public function getUserInputStatisticInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['FromDatetime']    = $request->fromDatetime;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ToDatetime']      = $request->toDatetime;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetUserInputStatisticInfo',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserInputStatisticInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserInputStatisticInfoRequest $request
     *
     * @return GetUserInputStatisticInfoResponse
     */
    public function getUserInputStatisticInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserInputStatisticInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetUserOutputStatisticInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetUserOutputStatisticInfoResponse
     */
    public function getUserOutputStatisticInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['FromDatetime']    = $request->fromDatetime;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ToDatetime']      = $request->toDatetime;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetUserOutputStatisticInfo',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserOutputStatisticInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserOutputStatisticInfoRequest $request
     *
     * @return GetUserOutputStatisticInfoResponse
     */
    public function getUserOutputStatisticInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserOutputStatisticInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetUserSubmissionStatisticInfoRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetUserSubmissionStatisticInfoResponse
     */
    public function getUserSubmissionStatisticInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ApplicationType'] = $request->applicationType;
        $query['ClusterId']       = $request->clusterId;
        $query['FinalStatus']     = $request->finalStatus;
        $query['FromDatetime']    = $request->fromDatetime;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ToDatetime']      = $request->toDatetime;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetUserSubmissionStatisticInfo',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserSubmissionStatisticInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserSubmissionStatisticInfoRequest $request
     *
     * @return GetUserSubmissionStatisticInfoResponse
     */
    public function getUserSubmissionStatisticInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserSubmissionStatisticInfoWithOptions($request, $runtime);
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
        $query                     = [];
        $query['ClusterBizIdList'] = $request->clusterBizIdList;
        $query['LibraryBizId']     = $request->libraryBizId;
        $query['RegionId']         = $request->regionId;
        $query['ResourceOwnerId']  = $request->resourceOwnerId;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'InstallLibraries',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return InstallLibrariesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param JoinResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return JoinResourceGroupResponse
     */
    public function joinResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceId']      = $request->resourceId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ResourceType']    = $request->resourceType;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'JoinResourceGroup',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return JoinResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param JoinResourceGroupRequest $request
     *
     * @return JoinResourceGroupResponse
     */
    public function joinResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinResourceGroupWithOptions($request, $runtime);
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
        $query                  = [];
        $query['JobInstanceId'] = $request->jobInstanceId;
        $query['ProjectId']     = $request->projectId;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'KillFlowJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return KillFlowJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListAdviceActionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAdviceActionResponse
     */
    public function listAdviceActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['Component']       = $request->component;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ServiceName']     = $request->serviceName;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListAdviceAction',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAdviceActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAdviceActionRequest $request
     *
     * @return ListAdviceActionResponse
     */
    public function listAdviceAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAdviceActionWithOptions($request, $runtime);
    }

    /**
     * @param ListApmApplicationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListApmApplicationResponse
     */
    public function listApmApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['AppId']           = $request->appId;
        $query['ClusterId']       = $request->clusterId;
        $query['DiagnoseResult']  = $request->diagnoseResult;
        $query['EndTimeFrom']     = $request->endTimeFrom;
        $query['EndTimeTo']       = $request->endTimeTo;
        $query['FinalStatus']     = $request->finalStatus;
        $query['JobType']         = $request->jobType;
        $query['Name']            = $request->name;
        $query['OrderBy']         = $request->orderBy;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['Queue']           = $request->queue;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['StartTimeFrom']   = $request->startTimeFrom;
        $query['StartTimeTo']     = $request->startTimeTo;
        $query['State']           = $request->state;
        $query['User']            = $request->user;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListApmApplication',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListApmApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListApmApplicationRequest $request
     *
     * @return ListApmApplicationResponse
     */
    public function listApmApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApmApplicationWithOptions($request, $runtime);
    }

    /**
     * @param ListBackupsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListBackupsResponse
     */
    public function listBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['BackupId']        = $request->backupId;
        $query['BackupPlanId']    = $request->backupPlanId;
        $query['BizId']           = $request->bizId;
        $query['ClusterId']       = $request->clusterId;
        $query['CurrentSize']     = $request->currentSize;
        $query['Id']              = $request->id;
        $query['Limit']           = $request->limit;
        $query['MetadataType']    = $request->metadataType;
        $query['OrderMode']       = $request->orderMode;
        $query['PageCount']       = $request->pageCount;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ServiceName']     = $request->serviceName;
        $query['Status']          = $request->status;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListBackups',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBackupsRequest $request
     *
     * @return ListBackupsResponse
     */
    public function listBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBackupsWithOptions($request, $runtime);
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
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['ComponentName']   = $request->componentName;
        $query['GroupType']       = $request->groupType;
        $query['HostGroupId']     = $request->hostGroupId;
        $query['HostInstanceId']  = $request->hostInstanceId;
        $query['HostName']        = $request->hostName;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['PrivateIp']       = $request->privateIp;
        $query['PublicIp']        = $request->publicIp;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['StatusList']      = $request->statusList;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListClusterHost',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterHostResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListClusterHostComponentRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListClusterHostComponentResponse
     */
    public function listClusterHostComponentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['ComponentName']   = $request->componentName;
        $query['ComponentStatus'] = $request->componentStatus;
        $query['HostInstanceId']  = $request->hostInstanceId;
        $query['HostName']        = $request->hostName;
        $query['HostRole']        = $request->hostRole;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ServiceName']     = $request->serviceName;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListClusterHostComponent',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterHostComponentResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListClusterHostGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListClusterHostGroupResponse
     */
    public function listClusterHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['HostGroupId']     = $request->hostGroupId;
        $query['HostGroupName']   = $request->hostGroupName;
        $query['HostGroupType']   = $request->hostGroupType;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['StatusList']      = $request->statusList;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListClusterHostGroup',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterHostGroupRequest $request
     *
     * @return ListClusterHostGroupResponse
     */
    public function listClusterHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterHostGroupWithOptions($request, $runtime);
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
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListClusterInstalledService',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterInstalledServiceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListClusterOperationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListClusterOperationResponse
     */
    public function listClusterOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['OperationId']     = $request->operationId;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ServiceName']     = $request->serviceName;
        $query['Status']          = $request->status;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListClusterOperation',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterOperationResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListClusterOperationHostRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListClusterOperationHostResponse
     */
    public function listClusterOperationHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['OperationId']     = $request->operationId;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['Status']          = $request->status;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListClusterOperationHost',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterOperationHostResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListClusterOperationHostTaskRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListClusterOperationHostTaskResponse
     */
    public function listClusterOperationHostTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['HostId']          = $request->hostId;
        $query['OperationId']     = $request->operationId;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['Status']          = $request->status;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListClusterOperationHostTask',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterOperationHostTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListClusterOperationTaskRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListClusterOperationTaskResponse
     */
    public function listClusterOperationTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['OperationId']     = $request->operationId;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['Status']          = $request->status;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListClusterOperationTask',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterOperationTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterOperationTaskRequest $request
     *
     * @return ListClusterOperationTaskResponse
     */
    public function listClusterOperationTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterOperationTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListClusterServiceResponse
     */
    public function listClusterServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListClusterService',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterServiceRequest $request
     *
     * @return ListClusterServiceResponse
     */
    public function listClusterService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterServiceWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterServiceComponentRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListClusterServiceComponentResponse
     */
    public function listClusterServiceComponentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['ComponentName']   = $request->componentName;
        $query['ComponentStatus'] = $request->componentStatus;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['PodName']         = $request->podName;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ServiceName']     = $request->serviceName;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListClusterServiceComponent',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterServiceComponentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterServiceComponentRequest $request
     *
     * @return ListClusterServiceComponentResponse
     */
    public function listClusterServiceComponent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterServiceComponentWithOptions($request, $runtime);
    }

    /**
     * @param ListClusterServiceComponentHealthInfoRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return ListClusterServiceComponentHealthInfoResponse
     */
    public function listClusterServiceComponentHealthInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['ComponentName']   = $request->componentName;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ServiceName']     = $request->serviceName;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListClusterServiceComponentHealthInfo',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterServiceComponentHealthInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterServiceComponentHealthInfoRequest $request
     *
     * @return ListClusterServiceComponentHealthInfoResponse
     */
    public function listClusterServiceComponentHealthInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterServiceComponentHealthInfoWithOptions($request, $runtime);
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
        $query                    = [];
        $query['Author']          = $request->author;
        $query['ClusterId']       = $request->clusterId;
        $query['Comment']         = $request->comment;
        $query['ConfigFileName']  = $request->configFileName;
        $query['ConfigItemKey']   = $request->configItemKey;
        $query['ConfigVersion']   = $request->configVersion;
        $query['HostGroupId']     = $request->hostGroupId;
        $query['HostInstanceId']  = $request->hostInstanceId;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ServiceName']     = $request->serviceName;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListClusterServiceConfigHistory',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterServiceConfigHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListClusterServiceQuickLinkRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListClusterServiceQuickLinkResponse
     */
    public function listClusterServiceQuickLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['DirectType']      = $request->directType;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ServiceName']     = $request->serviceName;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListClusterServiceQuickLink',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterServiceQuickLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClusterServiceQuickLinkRequest $request
     *
     * @return ListClusterServiceQuickLinkResponse
     */
    public function listClusterServiceQuickLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClusterServiceQuickLinkWithOptions($request, $runtime);
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
        $query                    = [];
        $query['BizId']           = $request->bizId;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['ProductType']     = $request->productType;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListClusterTemplates',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListClusterTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                    = [];
        $query['ClusterTypeList'] = $request->clusterTypeList;
        $query['CreateType']      = $request->createType;
        $query['DefaultStatus']   = $request->defaultStatus;
        $query['DepositType']     = $request->depositType;
        $query['ExpiredTagList']  = $request->expiredTagList;
        $query['IsDesc']          = $request->isDesc;
        $query['MachineType']     = $request->machineType;
        $query['Name']            = $request->name;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['StatusList']      = $request->statusList;
        $query['Tag']             = $request->tag;
        $query['VpcId']           = $request->vpcId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListClusters',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param ListDataSourceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListDataSourceResponse
     */
    public function listDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['CreateFrom']      = $request->createFrom;
        $query['Id']              = $request->id;
        $query['Name']            = $request->name;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['ProjectId']       = $request->projectId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['SourceType']      = $request->sourceType;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListDataSource',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDataSourceRequest $request
     *
     * @return ListDataSourceResponse
     */
    public function listDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourceWithOptions($request, $runtime);
    }

    /**
     * @param ListDiskOpsEventsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListDiskOpsEventsResponse
     */
    public function listDiskOpsEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['EndTime']         = $request->endTime;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['StartTime']       = $request->startTime;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListDiskOpsEvents',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDiskOpsEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDiskOpsEventsRequest $request
     *
     * @return ListDiskOpsEventsResponse
     */
    public function listDiskOpsEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDiskOpsEventsWithOptions($request, $runtime);
    }

    /**
     * @param ListEmrAvailableConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListEmrAvailableConfigResponse
     */
    public function listEmrAvailableConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListEmrAvailableConfig',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEmrAvailableConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEmrAvailableConfigRequest $request
     *
     * @return ListEmrAvailableConfigResponse
     */
    public function listEmrAvailableConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEmrAvailableConfigWithOptions($request, $runtime);
    }

    /**
     * @param ListEmrAvailableResourceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListEmrAvailableResourceResponse
     */
    public function listEmrAvailableResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ClusterId']           = $request->clusterId;
        $query['ClusterType']         = $request->clusterType;
        $query['DataDiskType']        = $request->dataDiskType;
        $query['DepositType']         = $request->depositType;
        $query['DestinationResource'] = $request->destinationResource;
        $query['EmrVersion']          = $request->emrVersion;
        $query['InstanceChargeType']  = $request->instanceChargeType;
        $query['InstanceType']        = $request->instanceType;
        $query['NetType']             = $request->netType;
        $query['RegionId']            = $request->regionId;
        $query['ResourceGroupId']     = $request->resourceGroupId;
        $query['ResourceOwnerId']     = $request->resourceOwnerId;
        $query['SpotStrategy']        = $request->spotStrategy;
        $query['SystemDiskType']      = $request->systemDiskType;
        $query['ZoneId']              = $request->zoneId;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListEmrAvailableResource',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEmrAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEmrAvailableResourceRequest $request
     *
     * @return ListEmrAvailableResourceResponse
     */
    public function listEmrAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEmrAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * @param ListEmrMainVersionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListEmrMainVersionResponse
     */
    public function listEmrMainVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['EmrVersion']      = $request->emrVersion;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['StackName']       = $request->stackName;
        $query['StackVersion']    = $request->stackVersion;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListEmrMainVersion',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEmrMainVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEmrMainVersionRequest $request
     *
     * @return ListEmrMainVersionResponse
     */
    public function listEmrMainVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEmrMainVersionWithOptions($request, $runtime);
    }

    /**
     * @param ListExecutionPlanInstancesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListExecutionPlanInstancesResponse
     */
    public function listExecutionPlanInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                        = [];
        $query['ExecutionPlanIdList'] = $request->executionPlanIdList;
        $query['IsDesc']              = $request->isDesc;
        $query['OnlyLastInstance']    = $request->onlyLastInstance;
        $query['PageNumber']          = $request->pageNumber;
        $query['PageSize']            = $request->pageSize;
        $query['RegionId']            = $request->regionId;
        $query['ResourceOwnerId']     = $request->resourceOwnerId;
        $query['StatusList']          = $request->statusList;
        $req                          = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListExecutionPlanInstances',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListExecutionPlanInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListExecutionPlanInstancesRequest $request
     *
     * @return ListExecutionPlanInstancesResponse
     */
    public function listExecutionPlanInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutionPlanInstancesWithOptions($request, $runtime);
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
        $query               = [];
        $query['ClusterId']  = $request->clusterId;
        $query['Id']         = $request->id;
        $query['JobId']      = $request->jobId;
        $query['Name']       = $request->name;
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['Periodic']   = $request->periodic;
        $query['ProjectId']  = $request->projectId;
        $query['RegionId']   = $request->regionId;
        $query['Status']     = $request->status;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListFlowCategoryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListFlowCategoryResponse
     */
    public function listFlowCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['ParentId']   = $request->parentId;
        $query['ProjectId']  = $request->projectId;
        $query['RegionId']   = $request->regionId;
        $query['Root']       = $request->root;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListFlowCategory',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowCategoryRequest $request
     *
     * @return ListFlowCategoryResponse
     */
    public function listFlowCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowCategoryWithOptions($request, $runtime);
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
        $query                    = [];
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['ProjectId']       = $request->projectId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListFlowCluster',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowClusterResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListFlowClusterAllRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListFlowClusterAllResponse
     */
    public function listFlowClusterAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ProductType']     = $request->productType;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListFlowClusterAll',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowClusterAllResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListFlowClusterAllHostsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListFlowClusterAllHostsResponse
     */
    public function listFlowClusterAllHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['ProjectId']       = $request->projectId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListFlowClusterAllHosts',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowClusterAllHostsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListFlowClusterHostRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListFlowClusterHostResponse
     */
    public function listFlowClusterHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['ProjectId']       = $request->projectId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListFlowClusterHost',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowClusterHostResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListFlowInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListFlowInstanceResponse
     */
    public function listFlowInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['FlowId']         = $request->flowId;
        $query['FlowName']       = $request->flowName;
        $query['Id']             = $request->id;
        $query['InstanceId']     = $request->instanceId;
        $query['NodeInstanceId'] = $request->nodeInstanceId;
        $query['OrderBy']        = $request->orderBy;
        $query['OrderType']      = $request->orderType;
        $query['Owner']          = $request->owner;
        $query['PageNumber']     = $request->pageNumber;
        $query['PageSize']       = $request->pageSize;
        $query['ProjectId']      = $request->projectId;
        $query['RegionId']       = $request->regionId;
        $query['StatusList']     = $request->statusList;
        $query['TimeRange']      = $request->timeRange;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListFlowInstance',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListFlowJobRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListFlowJobResponse
     */
    public function listFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['Adhoc']      = $request->adhoc;
        $query['Id']         = $request->id;
        $query['Name']       = $request->name;
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['ProjectId']  = $request->projectId;
        $query['RegionId']   = $request->regionId;
        $query['Type']       = $request->type;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListFlowJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowJobRequest $request
     *
     * @return ListFlowJobResponse
     */
    public function listFlowJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowJobWithOptions($request, $runtime);
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
        $query               = [];
        $query['Id']         = $request->id;
        $query['InstanceId'] = $request->instanceId;
        $query['JobType']    = $request->jobType;
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['ProjectId']  = $request->projectId;
        $query['RegionId']   = $request->regionId;
        $query['StatusList'] = $request->statusList;
        $query['TimeRange']  = $request->timeRange;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListFlowJobHistory',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowJobHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListFlowNodeInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListFlowNodeInstanceResponse
     */
    public function listFlowNodeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['OrderBy']         = $request->orderBy;
        $query['OrderType']       = $request->orderType;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['ProjectId']       = $request->projectId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['StartTime']       = $request->startTime;
        $query['StatusList']      = $request->statusList;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListFlowNodeInstance',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowNodeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowNodeInstanceRequest $request
     *
     * @return ListFlowNodeInstanceResponse
     */
    public function listFlowNodeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowNodeInstanceWithOptions($request, $runtime);
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
        $query                   = [];
        $query['NodeInstanceId'] = $request->nodeInstanceId;
        $query['PageNumber']     = $request->pageNumber;
        $query['PageSize']       = $request->pageSize;
        $query['ProjectId']      = $request->projectId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListFlowNodeInstanceContainerStatus',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowNodeInstanceContainerStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListFlowNodeSqlResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListFlowNodeSqlResultResponse
     */
    public function listFlowNodeSqlResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['Length']         = $request->length;
        $query['NodeInstanceId'] = $request->nodeInstanceId;
        $query['Offset']         = $request->offset;
        $query['ProjectId']      = $request->projectId;
        $query['RegionId']       = $request->regionId;
        $query['SqlIndex']       = $request->sqlIndex;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListFlowNodeSqlResult',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowNodeSqlResultResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListFlowProjectRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFlowProjectResponse
     */
    public function listFlowProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Name']            = $request->name;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['ProductType']     = $request->productType;
        $query['ProjectId']       = $request->projectId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListFlowProject',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFlowProjectRequest $request
     *
     * @return ListFlowProjectResponse
     */
    public function listFlowProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowProjectWithOptions($request, $runtime);
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
        $query               = [];
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['ProjectId']  = $request->projectId;
        $query['RegionId']   = $request->regionId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListFlowProjectClusterSetting',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowProjectClusterSettingResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListFlowProjectUserRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListFlowProjectUserResponse
     */
    public function listFlowProjectUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['PageNumber'] = $request->pageNumber;
        $query['PageSize']   = $request->pageSize;
        $query['ProjectId']  = $request->projectId;
        $query['RegionId']   = $request->regionId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListFlowProjectUser',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowProjectUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListJobExecutionInstancesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListJobExecutionInstancesResponse
     */
    public function listJobExecutionInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                            = [];
        $query['ExecutionPlanInstanceId'] = $request->executionPlanInstanceId;
        $query['IsDesc']                  = $request->isDesc;
        $query['PageNumber']              = $request->pageNumber;
        $query['PageSize']                = $request->pageSize;
        $query['RegionId']                = $request->regionId;
        $query['ResourceOwnerId']         = $request->resourceOwnerId;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListJobExecutionInstances',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListJobExecutionInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListJobExecutionInstancesRequest $request
     *
     * @return ListJobExecutionInstancesResponse
     */
    public function listJobExecutionInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobExecutionInstancesWithOptions($request, $runtime);
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
        $query                    = [];
        $query['IsDesc']          = $request->isDesc;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['QueryString']     = $request->queryString;
        $query['QueryType']       = $request->queryType;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListJobs',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param ListLibrariesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListLibrariesResponse
     */
    public function listLibrariesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterBizId']    = $request->clusterBizId;
        $query['CurrentSize']     = $request->currentSize;
        $query['Limit']           = $request->limit;
        $query['OrderField']      = $request->orderField;
        $query['OrderMode']       = $request->orderMode;
        $query['PageCount']       = $request->pageCount;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListLibraries',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLibrariesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListLibraryInstallTasksRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListLibraryInstallTasksResponse
     */
    public function listLibraryInstallTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterBizId']    = $request->clusterBizId;
        $query['CurrentSize']     = $request->currentSize;
        $query['LibraryBizId']    = $request->libraryBizId;
        $query['Limit']           = $request->limit;
        $query['OrderField']      = $request->orderField;
        $query['OrderMode']       = $request->orderMode;
        $query['PageCount']       = $request->pageCount;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListLibraryInstallTasks',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLibraryInstallTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLibraryInstallTasksRequest $request
     *
     * @return ListLibraryInstallTasksResponse
     */
    public function listLibraryInstallTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLibraryInstallTasksWithOptions($request, $runtime);
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
        $query                    = [];
        $query['ClusterBizId']    = $request->clusterBizId;
        $query['CurrentSize']     = $request->currentSize;
        $query['LibraryBizId']    = $request->libraryBizId;
        $query['Limit']           = $request->limit;
        $query['OrderField']      = $request->orderField;
        $query['OrderMode']       = $request->orderMode;
        $query['PageCount']       = $request->pageCount;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListLibraryStatus',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLibraryStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListLocalDiskComponentInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListLocalDiskComponentInfoResponse
     */
    public function listLocalDiskComponentInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['InstanceId']      = $request->instanceId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListLocalDiskComponentInfo',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListLocalDiskComponentInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLocalDiskComponentInfoRequest $request
     *
     * @return ListLocalDiskComponentInfoResponse
     */
    public function listLocalDiskComponentInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLocalDiskComponentInfoWithOptions($request, $runtime);
    }

    /**
     * @param ListResourcePoolRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListResourcePoolResponse
     */
    public function listResourcePoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['PoolType']        = $request->poolType;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListResourcePool',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourcePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourcePoolRequest $request
     *
     * @return ListResourcePoolResponse
     */
    public function listResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourcePoolWithOptions($request, $runtime);
    }

    /**
     * @param ListRolesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRolesResponse
     */
    public function listRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ResourceType']    = $request->resourceType;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListRoles',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRolesRequest $request
     *
     * @return ListRolesResponse
     */
    public function listRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRolesWithOptions($request, $runtime);
    }

    /**
     * @param ListScalingActivityV2Request $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListScalingActivityV2Response
     */
    public function listScalingActivityV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['ClusterBizId']      = $request->clusterBizId;
        $query['CurrentSize']       = $request->currentSize;
        $query['HostGroupId']       = $request->hostGroupId;
        $query['HostGroupName']     = $request->hostGroupName;
        $query['Limit']             = $request->limit;
        $query['OrderField']        = $request->orderField;
        $query['OrderMode']         = $request->orderMode;
        $query['PageCount']         = $request->pageCount;
        $query['PageNumber']        = $request->pageNumber;
        $query['PageSize']          = $request->pageSize;
        $query['RegionId']          = $request->regionId;
        $query['ResourceGroupId']   = $request->resourceGroupId;
        $query['ResourceOwnerId']   = $request->resourceOwnerId;
        $query['ScalingGroupBizId'] = $request->scalingGroupBizId;
        $query['ScalingRuleName']   = $request->scalingRuleName;
        $query['Status']            = $request->status;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListScalingActivityV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListScalingActivityV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListScalingActivityV2Request $request
     *
     * @return ListScalingActivityV2Response
     */
    public function listScalingActivityV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScalingActivityV2WithOptions($request, $runtime);
    }

    /**
     * @param ListScalingConfigItemV2Request $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListScalingConfigItemV2Response
     */
    public function listScalingConfigItemV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['ConfigItemType']    = $request->configItemType;
        $query['PageNumber']        = $request->pageNumber;
        $query['PageSize']          = $request->pageSize;
        $query['RegionId']          = $request->regionId;
        $query['ResourceGroupId']   = $request->resourceGroupId;
        $query['ResourceOwnerId']   = $request->resourceOwnerId;
        $query['ScalingGroupBizId'] = $request->scalingGroupBizId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListScalingConfigItemV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListScalingConfigItemV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListScalingConfigItemV2Request $request
     *
     * @return ListScalingConfigItemV2Response
     */
    public function listScalingConfigItemV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScalingConfigItemV2WithOptions($request, $runtime);
    }

    /**
     * @param ListScalingGroupV2Request $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListScalingGroupV2Response
     */
    public function listScalingGroupV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterBizId']    = $request->clusterBizId;
        $query['CurrentSize']     = $request->currentSize;
        $query['Limit']           = $request->limit;
        $query['OrderField']      = $request->orderField;
        $query['OrderMode']       = $request->orderMode;
        $query['PageCount']       = $request->pageCount;
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListScalingGroupV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListScalingGroupV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListScalingGroupV2Request $request
     *
     * @return ListScalingGroupV2Response
     */
    public function listScalingGroupV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScalingGroupV2WithOptions($request, $runtime);
    }

    /**
     * @param ListSecurityGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListSecurityGroupResponse
     */
    public function listSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['DepositType'] = $request->depositType;
        $query['NetType']     = $request->netType;
        $query['ProductType'] = $request->productType;
        $query['RegionId']    = $request->regionId;
        $query['VpcId']       = $request->vpcId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListSecurityGroup',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSecurityGroupRequest $request
     *
     * @return ListSecurityGroupResponse
     */
    public function listSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListStackRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListStackResponse
     */
    public function listStackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['PageNumber']      = $request->pageNumber;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['StackName']       = $request->stackName;
        $query['StackVersion']    = $request->stackVersion;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListStack',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListStackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListStackRequest $request
     *
     * @return ListStackResponse
     */
    public function listStack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStackWithOptions($request, $runtime);
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
        $query                    = [];
        $query['Category']        = $request->category;
        $query['NextToken']       = $request->nextToken;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ResourceType']    = $request->resourceType;
        $query['Scope']           = $request->scope;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListTagKeys',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query                    = [];
        $query['NextToken']       = $request->nextToken;
        $query['RegionId']        = $request->regionId;
        $query['ResourceId']      = $request->resourceId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ResourceType']    = $request->resourceType;
        $query['Tag']             = $request->tag;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param ListTagValuesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTagValuesResponse
     */
    public function listTagValuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Key']             = $request->key;
        $query['NextToken']       = $request->nextToken;
        $query['PageSize']        = $request->pageSize;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ResourceType']    = $request->resourceType;
        $query['Scope']           = $request->scope;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListTagValues',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['Type']            = $request->type;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param ListVswitchRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListVswitchResponse
     */
    public function listVswitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['DepositType'] = $request->depositType;
        $query['ProductType'] = $request->productType;
        $query['RegionId']    = $request->regionId;
        $query['VpcId']       = $request->vpcId;
        $query['ZoneId']      = $request->zoneId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListVswitch',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListVswitchResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyClusterBootstrapActionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyClusterBootstrapActionResponse
     */
    public function modifyClusterBootstrapActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['BootstrapAction'] = $request->bootstrapAction;
        $query['ClusterId']       = $request->clusterId;
        $query['Id']              = $request->id;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterBootstrapAction',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterBootstrapActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyClusterBootstrapActionRequest $request
     *
     * @return ModifyClusterBootstrapActionResponse
     */
    public function modifyClusterBootstrapAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterBootstrapActionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterHostGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyClusterHostGroupResponse
     */
    public function modifyClusterHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['Comment']         = $request->comment;
        $query['HostGroupId']     = $request->hostGroupId;
        $query['HostGroupName']   = $request->hostGroupName;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['SecurityGroupId'] = $request->securityGroupId;
        $query['VswitchId']       = $request->vswitchId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterHostGroup',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyClusterHostGroupRequest $request
     *
     * @return ModifyClusterHostGroupResponse
     */
    public function modifyClusterHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterHostGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyClusterMetaCollectRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyClusterMetaCollectResponse
     */
    public function modifyClusterMetaCollectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['SwitchOn']        = $request->switchOn;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterMetaCollect',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterMetaCollectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyClusterMetaCollectRequest $request
     *
     * @return ModifyClusterMetaCollectResponse
     */
    public function modifyClusterMetaCollect($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterMetaCollectWithOptions($request, $runtime);
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
        $query                    = [];
        $query['Id']              = $request->id;
        $query['Name']            = $request->name;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterName',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterNameResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyClusterSecurityGroupRuleRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyClusterSecurityGroupRuleResponse
     */
    public function modifyClusterSecurityGroupRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['IpProtocol']      = $request->ipProtocol;
        $query['ModifyType']      = $request->modifyType;
        $query['NicType']         = $request->nicType;
        $query['PortRange']       = $request->portRange;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['WhiteIp']         = $request->whiteIp;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterSecurityGroupRule',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterSecurityGroupRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyClusterSecurityGroupRuleRequest $request
     *
     * @return ModifyClusterSecurityGroupRuleResponse
     */
    public function modifyClusterSecurityGroupRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyClusterSecurityGroupRuleWithOptions($request, $runtime);
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
        $query                         = [];
        $query['ClusterId']            = $request->clusterId;
        $query['Comment']              = $request->comment;
        $query['ConfigParams']         = $request->configParams;
        $query['ConfigType']           = $request->configType;
        $query['CustomConfigParams']   = $request->customConfigParams;
        $query['GatewayClusterIdList'] = $request->gatewayClusterIdList;
        $query['GroupId']              = $request->groupId;
        $query['HostInstanceId']       = $request->hostInstanceId;
        $query['RefreshHostConfig']    = $request->refreshHostConfig;
        $query['RegionId']             = $request->regionId;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ServiceName']          = $request->serviceName;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterServiceConfig',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterServiceConfigResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyClusterTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyClusterTemplateResponse
     */
    public function modifyClusterTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['AutoRenew']              = $request->autoRenew;
        $query['BizId']                  = $request->bizId;
        $query['BootstrapAction']        = $request->bootstrapAction;
        $query['ChargeType']             = $request->chargeType;
        $query['ClusterType']            = $request->clusterType;
        $query['Config']                 = $request->config;
        $query['Configurations']         = $request->configurations;
        $query['DepositType']            = $request->depositType;
        $query['EasEnable']              = $request->easEnable;
        $query['EmrVer']                 = $request->emrVer;
        $query['HighAvailabilityEnable'] = $request->highAvailabilityEnable;
        $query['HostGroup']              = $request->hostGroup;
        $query['InitCustomHiveMetaDb']   = $request->initCustomHiveMetaDb;
        $query['InstanceGeneration']     = $request->instanceGeneration;
        $query['IoOptimized']            = $request->ioOptimized;
        $query['IsOpenPublicIp']         = $request->isOpenPublicIp;
        $query['KeyPairName']            = $request->keyPairName;
        $query['LogPath']                = $request->logPath;
        $query['MachineType']            = $request->machineType;
        $query['MasterPwd']              = $request->masterPwd;
        $query['MetaStoreConf']          = $request->metaStoreConf;
        $query['MetaStoreType']          = $request->metaStoreType;
        $query['NetType']                = $request->netType;
        $query['OptionSoftWareList']     = $request->optionSoftWareList;
        $query['Period']                 = $request->period;
        $query['RegionId']               = $request->regionId;
        $query['ResourceGroupId']        = $request->resourceGroupId;
        $query['ResourceOwnerId']        = $request->resourceOwnerId;
        $query['SecurityGroupId']        = $request->securityGroupId;
        $query['SecurityGroupName']      = $request->securityGroupName;
        $query['SshEnable']              = $request->sshEnable;
        $query['Tag']                    = $request->tag;
        $query['TemplateName']           = $request->templateName;
        $query['UseCustomHiveMetaDb']    = $request->useCustomHiveMetaDb;
        $query['UseLocalMetaDb']         = $request->useLocalMetaDb;
        $query['UserDefinedEmrEcsRole']  = $request->userDefinedEmrEcsRole;
        $query['VSwitchId']              = $request->vSwitchId;
        $query['VpcId']                  = $request->vpcId;
        $query['ZoneId']                 = $request->zoneId;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyClusterTemplate',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyClusterTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyExecutionPlanRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyExecutionPlanResponse
     */
    public function modifyExecutionPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                           = [];
        $query['BootstrapAction']        = $request->bootstrapAction;
        $query['ClusterId']              = $request->clusterId;
        $query['ClusterName']            = $request->clusterName;
        $query['ClusterType']            = $request->clusterType;
        $query['Config']                 = $request->config;
        $query['Configurations']         = $request->configurations;
        $query['CreateClusterOnDemand']  = $request->createClusterOnDemand;
        $query['DayOfMonth']             = $request->dayOfMonth;
        $query['DayOfWeek']              = $request->dayOfWeek;
        $query['EasEnable']              = $request->easEnable;
        $query['EcsOrder']               = $request->ecsOrder;
        $query['EmrVer']                 = $request->emrVer;
        $query['ExecutionPlanVersion']   = $request->executionPlanVersion;
        $query['HighAvailabilityEnable'] = $request->highAvailabilityEnable;
        $query['Id']                     = $request->id;
        $query['InitCustomHiveMetaDB']   = $request->initCustomHiveMetaDB;
        $query['InstanceGeneration']     = $request->instanceGeneration;
        $query['IoOptimized']            = $request->ioOptimized;
        $query['IsOpenPublicIp']         = $request->isOpenPublicIp;
        $query['JobIdList']              = $request->jobIdList;
        $query['LogEnable']              = $request->logEnable;
        $query['LogPath']                = $request->logPath;
        $query['Name']                   = $request->name;
        $query['NetType']                = $request->netType;
        $query['OptionSoftWareList']     = $request->optionSoftWareList;
        $query['RegionId']               = $request->regionId;
        $query['ResourceOwnerId']        = $request->resourceOwnerId;
        $query['SecurityGroupId']        = $request->securityGroupId;
        $query['StartTime']              = $request->startTime;
        $query['Strategy']               = $request->strategy;
        $query['TimeInterval']           = $request->timeInterval;
        $query['TimeUnit']               = $request->timeUnit;
        $query['UseCustomHiveMetaDB']    = $request->useCustomHiveMetaDB;
        $query['UseLocalMetaDb']         = $request->useLocalMetaDb;
        $query['UserDefinedEmrEcsRole']  = $request->userDefinedEmrEcsRole;
        $query['VSwitchId']              = $request->vSwitchId;
        $query['VpcId']                  = $request->vpcId;
        $query['WorkflowDefinition']     = $request->workflowDefinition;
        $query['ZoneId']                 = $request->zoneId;
        $req                             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyExecutionPlan',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyExecutionPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyExecutionPlanRequest $request
     *
     * @return ModifyExecutionPlanResponse
     */
    public function modifyExecutionPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyExecutionPlanWithOptions($request, $runtime);
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
        $query                            = [];
        $query['AlertConf']               = $request->alertConf;
        $query['AlertDingDingGroupBizId'] = $request->alertDingDingGroupBizId;
        $query['AlertUserGroupBizId']     = $request->alertUserGroupBizId;
        $query['Application']             = $request->application;
        $query['ClusterId']               = $request->clusterId;
        $query['CreateCluster']           = $request->createCluster;
        $query['CronExpr']                = $request->cronExpr;
        $query['Description']             = $request->description;
        $query['EndSchedule']             = $request->endSchedule;
        $query['HostName']                = $request->hostName;
        $query['Id']                      = $request->id;
        $query['Lifecycle']               = $request->lifecycle;
        $query['LogArchiveLocation']      = $request->logArchiveLocation;
        $query['Name']                    = $request->name;
        $query['Namespace']               = $request->namespace_;
        $query['ParentCategory']          = $request->parentCategory;
        $query['ParentFlowList']          = $request->parentFlowList;
        $query['Periodic']                = $request->periodic;
        $query['ProjectId']               = $request->projectId;
        $query['RegionId']                = $request->regionId;
        $query['StartSchedule']           = $request->startSchedule;
        $query['Status']                  = $request->status;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyFlowResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyFlowCategoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyFlowCategoryResponse
     */
    public function modifyFlowCategoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['Id']        = $request->id;
        $query['Name']      = $request->name;
        $query['ParentId']  = $request->parentId;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlowCategory',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyFlowCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyFlowForWebRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyFlowForWebResponse
     */
    public function modifyFlowForWebWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                            = [];
        $query['AlertConf']               = $request->alertConf;
        $query['AlertDingDingGroupBizId'] = $request->alertDingDingGroupBizId;
        $query['AlertUserGroupBizId']     = $request->alertUserGroupBizId;
        $query['ClusterId']               = $request->clusterId;
        $query['CreateCluster']           = $request->createCluster;
        $query['CronExpr']                = $request->cronExpr;
        $query['Description']             = $request->description;
        $query['EndSchedule']             = $request->endSchedule;
        $query['Graph']                   = $request->graph;
        $query['HostName']                = $request->hostName;
        $query['Id']                      = $request->id;
        $query['Lifecycle']               = $request->lifecycle;
        $query['LogArchiveLocation']      = $request->logArchiveLocation;
        $query['Name']                    = $request->name;
        $query['Namespace']               = $request->namespace_;
        $query['ParentCategory']          = $request->parentCategory;
        $query['ParentFlowList']          = $request->parentFlowList;
        $query['Periodic']                = $request->periodic;
        $query['ProjectId']               = $request->projectId;
        $query['RegionId']                = $request->regionId;
        $query['StartSchedule']           = $request->startSchedule;
        $query['Status']                  = $request->status;
        $req                              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlowForWeb',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyFlowForWebResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyFlowJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyFlowJobResponse
     */
    public function modifyFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['AlertConf']         = $request->alertConf;
        $query['ClusterId']         = $request->clusterId;
        $query['CustomVariables']   = $request->customVariables;
        $query['Description']       = $request->description;
        $query['EnvConf']           = $request->envConf;
        $query['FailAct']           = $request->failAct;
        $query['Id']                = $request->id;
        $query['MaxRetry']          = $request->maxRetry;
        $query['MaxRunningTimeSec'] = $request->maxRunningTimeSec;
        $query['Mode']              = $request->mode;
        $query['MonitorConf']       = $request->monitorConf;
        $query['Name']              = $request->name;
        $query['ParamConf']         = $request->paramConf;
        $query['Params']            = $request->params;
        $query['ProjectId']         = $request->projectId;
        $query['RegionId']          = $request->regionId;
        $query['ResourceList']      = $request->resourceList;
        $query['RetryInterval']     = $request->retryInterval;
        $query['RetryPolicy']       = $request->retryPolicy;
        $query['RunConf']           = $request->runConf;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlowJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyFlowJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyFlowProjectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyFlowProjectResponse
     */
    public function modifyFlowProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                = [];
        $query['Description'] = $request->description;
        $query['Name']        = $request->name;
        $query['ProjectId']   = $request->projectId;
        $query['RegionId']    = $request->regionId;
        $req                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlowProject',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyFlowProjectResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyFlowProjectClusterSettingRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyFlowProjectClusterSettingResponse
     */
    public function modifyFlowProjectClusterSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['ClusterId']    = $request->clusterId;
        $query['DefaultQueue'] = $request->defaultQueue;
        $query['DefaultUser']  = $request->defaultUser;
        $query['HostList']     = $request->hostList;
        $query['ProjectId']    = $request->projectId;
        $query['QueueList']    = $request->queueList;
        $query['RegionId']     = $request->regionId;
        $query['UserList']     = $request->userList;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlowProjectClusterSetting',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyFlowProjectClusterSettingResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ModifyJobRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ModifyJobResponse
     */
    public function modifyJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['FailAct']         = $request->failAct;
        $query['Id']              = $request->id;
        $query['MaxRetry']        = $request->maxRetry;
        $query['Name']            = $request->name;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['RetryInterval']   = $request->retryInterval;
        $query['RunParameter']    = $request->runParameter;
        $query['Type']            = $request->type;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyJobRequest $request
     *
     * @return ModifyJobResponse
     */
    public function modifyJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyJobWithOptions($request, $runtime);
    }

    /**
     * @param ModifyResourcePoolRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyResourcePoolResponse
     */
    public function modifyResourcePoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Active']          = $request->active;
        $query['ClusterId']       = $request->clusterId;
        $query['Config']          = $request->config;
        $query['Id']              = $request->id;
        $query['Name']            = $request->name;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['Yarnsiteconfig']  = $request->yarnsiteconfig;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyResourcePool',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyResourcePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyResourcePoolRequest $request
     *
     * @return ModifyResourcePoolResponse
     */
    public function modifyResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourcePoolWithOptions($request, $runtime);
    }

    /**
     * @param ModifyResourcePoolSchedulerTypeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyResourcePoolSchedulerTypeResponse
     */
    public function modifyResourcePoolSchedulerTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['SchedulerType']   = $request->schedulerType;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyResourcePoolSchedulerType',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyResourcePoolSchedulerTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyResourcePoolSchedulerTypeRequest $request
     *
     * @return ModifyResourcePoolSchedulerTypeResponse
     */
    public function modifyResourcePoolSchedulerType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourcePoolSchedulerTypeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyResourceQueueRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyResourceQueueResponse
     */
    public function modifyResourceQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['Config']          = $request->config;
        $query['Id']              = $request->id;
        $query['Leaf']            = $request->leaf;
        $query['Name']            = $request->name;
        $query['ParentQueueId']   = $request->parentQueueId;
        $query['QualifiedName']   = $request->qualifiedName;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ResourcePoolId']  = $request->resourcePoolId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyResourceQueue',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyResourceQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyResourceQueueRequest $request
     *
     * @return ModifyResourceQueueResponse
     */
    public function modifyResourceQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourceQueueWithOptions($request, $runtime);
    }

    /**
     * @param ModifyScalingConfigItemV2Request $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyScalingConfigItemV2Response
     */
    public function modifyScalingConfigItemV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                          = [];
        $query['ConfigItemBizId']       = $request->configItemBizId;
        $query['ConfigItemInformation'] = $request->configItemInformation;
        $query['ConfigItemType']        = $request->configItemType;
        $query['RegionId']              = $request->regionId;
        $query['ResourceGroupId']       = $request->resourceGroupId;
        $query['ResourceOwnerId']       = $request->resourceOwnerId;
        $query['ScalingGroupBizId']     = $request->scalingGroupBizId;
        $req                            = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyScalingConfigItemV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyScalingConfigItemV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyScalingConfigItemV2Request $request
     *
     * @return ModifyScalingConfigItemV2Response
     */
    public function modifyScalingConfigItemV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScalingConfigItemV2WithOptions($request, $runtime);
    }

    /**
     * @param ModifyScalingGroupV2Request $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyScalingGroupV2Response
     */
    public function modifyScalingGroupV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['Description']       = $request->description;
        $query['Name']              = $request->name;
        $query['RegionId']          = $request->regionId;
        $query['ResourceGroupId']   = $request->resourceGroupId;
        $query['ResourceOwnerId']   = $request->resourceOwnerId;
        $query['ScalingGroupBizId'] = $request->scalingGroupBizId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyScalingGroupV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyScalingGroupV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyScalingGroupV2Request $request
     *
     * @return ModifyScalingGroupV2Response
     */
    public function modifyScalingGroupV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScalingGroupV2WithOptions($request, $runtime);
    }

    /**
     * @param ModifyScalingRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyScalingRuleResponse
     */
    public function modifyScalingRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['AdjustmentType']       = $request->adjustmentType;
        $query['AdjustmentValue']      = $request->adjustmentValue;
        $query['CloudWatchTrigger']    = $request->cloudWatchTrigger;
        $query['ClusterId']            = $request->clusterId;
        $query['Cooldown']             = $request->cooldown;
        $query['HostGroupId']          = $request->hostGroupId;
        $query['LaunchExpirationTime'] = $request->launchExpirationTime;
        $query['LaunchTime']           = $request->launchTime;
        $query['RecurrenceEndTime']    = $request->recurrenceEndTime;
        $query['RecurrenceType']       = $request->recurrenceType;
        $query['RecurrenceValue']      = $request->recurrenceValue;
        $query['RegionId']             = $request->regionId;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RuleName']             = $request->ruleName;
        $query['ScalingRuleId']        = $request->scalingRuleId;
        $query['SchedulerTrigger']     = $request->schedulerTrigger;
        $query['TimeoutWithGrace']     = $request->timeoutWithGrace;
        $query['WithGrace']            = $request->withGrace;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyScalingRule',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyScalingRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyScalingRuleRequest $request
     *
     * @return ModifyScalingRuleResponse
     */
    public function modifyScalingRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScalingRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyScalingTaskGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyScalingTaskGroupResponse
     */
    public function modifyScalingTaskGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['ActiveRuleCategory'] = $request->activeRuleCategory;
        $query['ClusterId']          = $request->clusterId;
        $query['DefaultCooldown']    = $request->defaultCooldown;
        $query['HostGroupId']        = $request->hostGroupId;
        $query['MaxSize']            = $request->maxSize;
        $query['MinSize']            = $request->minSize;
        $query['RegionId']           = $request->regionId;
        $query['ResourceOwnerId']    = $request->resourceOwnerId;
        $query['TimeoutWithGrace']   = $request->timeoutWithGrace;
        $query['WithGrace']          = $request->withGrace;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifyScalingTaskGroup',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyScalingTaskGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyScalingTaskGroupRequest $request
     *
     * @return ModifyScalingTaskGroupResponse
     */
    public function modifyScalingTaskGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScalingTaskGroupWithOptions($request, $runtime);
    }

    /**
     * @param QueryEntityRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryEntityResponse
     */
    public function queryEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Category']        = $request->category;
        $query['Description']     = $request->description;
        $query['Id']              = $request->id;
        $query['Name']            = $request->name;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'QueryEntity',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryEntityRequest $request
     *
     * @return QueryEntityResponse
     */
    public function queryEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEntityWithOptions($request, $runtime);
    }

    /**
     * @param QueryTagRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return QueryTagResponse
     */
    public function queryTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['EntityId']        = $request->entityId;
        $query['EntityType']      = $request->entityType;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['TagId']           = $request->tagId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'QueryTag',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTagRequest $request
     *
     * @return QueryTagResponse
     */
    public function queryTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTagWithOptions($request, $runtime);
    }

    /**
     * @param RefreshClusterResourcePoolRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RefreshClusterResourcePoolResponse
     */
    public function refreshClusterResourcePoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ResourcePoolId']  = $request->resourcePoolId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RefreshClusterResourcePool',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RefreshClusterResourcePoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshClusterResourcePoolRequest $request
     *
     * @return RefreshClusterResourcePoolResponse
     */
    public function refreshClusterResourcePool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshClusterResourcePoolWithOptions($request, $runtime);
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
        $query                    = [];
        $query['ForceRelease']    = $request->forceRelease;
        $query['Id']              = $request->id;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ReleaseCluster',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReleaseClusterResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ReleaseClusterHostGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ReleaseClusterHostGroupResponse
     */
    public function releaseClusterHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['HostGroupId']     = $request->hostGroupId;
        $query['InstanceIdList']  = $request->instanceIdList;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ReleaseClusterHostGroup',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReleaseClusterHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseClusterHostGroupRequest $request
     *
     * @return ReleaseClusterHostGroupResponse
     */
    public function releaseClusterHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseClusterHostGroupWithOptions($request, $runtime);
    }

    /**
     * @param RemoveScalingConfigItemV2Request $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveScalingConfigItemV2Response
     */
    public function removeScalingConfigItemV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['ConfigItemBizId']   = $request->configItemBizId;
        $query['ConfigItemType']    = $request->configItemType;
        $query['RegionId']          = $request->regionId;
        $query['ResourceGroupId']   = $request->resourceGroupId;
        $query['ResourceOwnerId']   = $request->resourceOwnerId;
        $query['ScalingGroupBizId'] = $request->scalingGroupBizId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RemoveScalingConfigItemV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveScalingConfigItemV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveScalingConfigItemV2Request $request
     *
     * @return RemoveScalingConfigItemV2Response
     */
    public function removeScalingConfigItemV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeScalingConfigItemV2WithOptions($request, $runtime);
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
        $query                   = [];
        $query['FlowInstanceId'] = $request->flowInstanceId;
        $query['ProjectId']      = $request->projectId;
        $query['ReRunFail']      = $request->reRunFail;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RerunFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RerunFlowResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ResizeClusterV2Request $request
     * @param RuntimeOptions         $runtime
     *
     * @return ResizeClusterV2Response
     */
    public function resizeClusterV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['AutoPayOrder']      = $request->autoPayOrder;
        $query['ClusterId']         = $request->clusterId;
        $query['HostComponentInfo'] = $request->hostComponentInfo;
        $query['HostGroup']         = $request->hostGroup;
        $query['IsOpenPublicIp']    = $request->isOpenPublicIp;
        $query['PromotionInfo']     = $request->promotionInfo;
        $query['RegionId']          = $request->regionId;
        $query['VswitchId']         = $request->vswitchId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ResizeClusterV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResizeClusterV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResizeClusterV2Request $request
     *
     * @return ResizeClusterV2Response
     */
    public function resizeClusterV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeClusterV2WithOptions($request, $runtime);
    }

    /**
     * @param ResumeExecutionPlanSchedulerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ResumeExecutionPlanSchedulerResponse
     */
    public function resumeExecutionPlanSchedulerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Id']              = $request->id;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ResumeExecutionPlanScheduler',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResumeExecutionPlanSchedulerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResumeExecutionPlanSchedulerRequest $request
     *
     * @return ResumeExecutionPlanSchedulerResponse
     */
    public function resumeExecutionPlanScheduler($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeExecutionPlanSchedulerWithOptions($request, $runtime);
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
        $query                   = [];
        $query['FlowInstanceId'] = $request->flowInstanceId;
        $query['ProjectId']      = $request->projectId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ResumeFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResumeFlowResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RetryOperationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RetryOperationResponse
     */
    public function retryOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['OperationId']     = $request->operationId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RetryOperation',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RetryOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RetryOperationRequest $request
     *
     * @return RetryOperationResponse
     */
    public function retryOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryOperationWithOptions($request, $runtime);
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
        $query                                = [];
        $query['ClusterId']                   = $request->clusterId;
        $query['Comment']                     = $request->comment;
        $query['ComponentNameList']           = $request->componentNameList;
        $query['CustomCommand']               = $request->customCommand;
        $query['CustomParams']                = $request->customParams;
        $query['ExecuteStrategy']             = $request->executeStrategy;
        $query['HostGroupIdList']             = $request->hostGroupIdList;
        $query['HostIdList']                  = $request->hostIdList;
        $query['Interval']                    = $request->interval;
        $query['IsRolling']                   = $request->isRolling;
        $query['NodeCountPerBatch']           = $request->nodeCountPerBatch;
        $query['OnlyRestartStaleConfigNodes'] = $request->onlyRestartStaleConfigNodes;
        $query['RegionId']                    = $request->regionId;
        $query['ResourceOwnerId']             = $request->resourceOwnerId;
        $query['ServiceActionName']           = $request->serviceActionName;
        $query['ServiceName']                 = $request->serviceName;
        $query['TotlerateFailCount']          = $request->totlerateFailCount;
        $query['TurnOnMaintenanceMode']       = $request->turnOnMaintenanceMode;
        $req                                  = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RunClusterServiceAction',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunClusterServiceActionResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RunDiskOpsActivityRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RunDiskOpsActivityResponse
     */
    public function runDiskOpsActivityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['CurrentStage']    = $request->currentStage;
        $query['CurrentState']    = $request->currentState;
        $query['DiskId']          = $request->diskId;
        $query['EventId']         = $request->eventId;
        $query['InstanceId']      = $request->instanceId;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RunDiskOpsActivity',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunDiskOpsActivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunDiskOpsActivityRequest $request
     *
     * @return RunDiskOpsActivityResponse
     */
    public function runDiskOpsActivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runDiskOpsActivityWithOptions($request, $runtime);
    }

    /**
     * @param RunExecutionPlanRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return RunExecutionPlanResponse
     */
    public function runExecutionPlanWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunExecutionPlanShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->arguments)) {
            $request->argumentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->arguments, 'Arguments', 'json');
        }
        $query                    = [];
        $query['Arguments']       = $request->argumentsShrink;
        $query['Id']              = $request->id;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RunExecutionPlan',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunExecutionPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunExecutionPlanRequest $request
     *
     * @return RunExecutionPlanResponse
     */
    public function runExecutionPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runExecutionPlanWithOptions($request, $runtime);
    }

    /**
     * @param RunScalingActionV2Request $request
     * @param RuntimeOptions            $runtime
     *
     * @return RunScalingActionV2Response
     */
    public function runScalingActionV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                      = [];
        $query['ActionParam']       = $request->actionParam;
        $query['RegionId']          = $request->regionId;
        $query['ResourceGroupId']   = $request->resourceGroupId;
        $query['ResourceOwnerId']   = $request->resourceOwnerId;
        $query['ScalingActionType'] = $request->scalingActionType;
        $query['ScalingGroupBizId'] = $request->scalingGroupBizId;
        $req                        = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RunScalingActionV2',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RunScalingActionV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunScalingActionV2Request $request
     *
     * @return RunScalingActionV2Response
     */
    public function runScalingActionV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runScalingActionV2WithOptions($request, $runtime);
    }

    /**
     * @param SearchLogRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SearchLogResponse
     */
    public function searchLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['ClusterId']       = $request->clusterId;
        $query['FromTimestamp']   = $request->fromTimestamp;
        $query['HostInnerIp']     = $request->hostInnerIp;
        $query['HostName']        = $request->hostName;
        $query['Line']            = $request->line;
        $query['LogstoreName']    = $request->logstoreName;
        $query['Offset']          = $request->offset;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['Reverse']         = $request->reverse;
        $query['SlsQueryString']  = $request->slsQueryString;
        $query['ToTimestamp']     = $request->toTimestamp;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SearchLog',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SearchLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SearchLogRequest $request
     *
     * @return SearchLogResponse
     */
    public function searchLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchLogWithOptions($request, $runtime);
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
        $query                   = [];
        $query['FlowInstanceId'] = $request->flowInstanceId;
        $query['ProjectId']      = $request->projectId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'StartFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartFlowResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SubmitFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SubmitFlowResponse
     */
    public function submitFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['Conf']      = $request->conf;
        $query['FlowId']    = $request->flowId;
        $query['ProjectId'] = $request->projectId;
        $query['RegionId']  = $request->regionId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitFlowResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SubmitFlowJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SubmitFlowJobResponse
     */
    public function submitFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                  = [];
        $query['ClusterId']     = $request->clusterId;
        $query['Conf']          = $request->conf;
        $query['HostName']      = $request->hostName;
        $query['JobId']         = $request->jobId;
        $query['JobInstanceId'] = $request->jobInstanceId;
        $query['Namespace']     = $request->namespace_;
        $query['ProjectId']     = $request->projectId;
        $query['RegionId']      = $request->regionId;
        $req                    = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SubmitFlowJob',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SubmitFlowJobResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SuspendExecutionPlanSchedulerRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SuspendExecutionPlanSchedulerResponse
     */
    public function suspendExecutionPlanSchedulerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Id']              = $request->id;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SuspendExecutionPlanScheduler',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SuspendExecutionPlanSchedulerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SuspendExecutionPlanSchedulerRequest $request
     *
     * @return SuspendExecutionPlanSchedulerResponse
     */
    public function suspendExecutionPlanScheduler($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendExecutionPlanSchedulerWithOptions($request, $runtime);
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
        $query                   = [];
        $query['FlowInstanceId'] = $request->flowInstanceId;
        $query['ProjectId']      = $request->projectId;
        $query['RegionId']       = $request->regionId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SuspendFlow',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SuspendFlowResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['RegionId']        = $request->regionId;
        $query['ResourceId']      = $request->resourceId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ResourceType']    = $request->resourceType;
        $query['Tag']             = $request->tag;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
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
     * @param UninstallLibrariesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UninstallLibrariesResponse
     */
    public function uninstallLibrariesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['ClusterBizIdList'] = $request->clusterBizIdList;
        $query['LibraryBizId']     = $request->libraryBizId;
        $query['RegionId']         = $request->regionId;
        $query['ResourceOwnerId']  = $request->resourceOwnerId;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UninstallLibraries',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UninstallLibrariesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['All']             = $request->all;
        $query['RegionId']        = $request->regionId;
        $query['ResourceId']      = $request->resourceId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['ResourceType']    = $request->resourceType;
        $query['TagKey']          = $request->tagKey;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDataSourceResponse
     */
    public function updateDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Conf']            = $request->conf;
        $query['Description']     = $request->description;
        $query['Id']              = $request->id;
        $query['Name']            = $request->name;
        $query['RegionId']        = $request->regionId;
        $query['ResourceGroupId'] = $request->resourceGroupId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateDataSource',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDataSourceRequest $request
     *
     * @return UpdateDataSourceResponse
     */
    public function updateDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDataSourceWithOptions($request, $runtime);
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
        $query                    = [];
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $query['Status']          = $request->status;
        $query['TaskBizId']       = $request->taskBizId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateLibraryInstallTaskStatus',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateLibraryInstallTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateTagRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateTagResponse
     */
    public function updateTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['Category']        = $request->category;
        $query['Description']     = $request->description;
        $query['Id']              = $request->id;
        $query['Name']            = $request->name;
        $query['RegionId']        = $request->regionId;
        $query['ResourceOwnerId'] = $request->resourceOwnerId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateTag',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTagRequest $request
     *
     * @return UpdateTagResponse
     */
    public function updateTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTagWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['AliyunUserId']         = $request->aliyunUserId;
        $query['Description']          = $request->description;
        $query['GroupIdList']          = $request->groupIdList;
        $query['RegionId']             = $request->regionId;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['RoleIdList']           = $request->roleIdList;
        $query['Status']               = $request->status;
        $query['UserAccountParamList'] = $request->userAccountParamList;
        $query['UserName']             = $request->userName;
        $query['UserType']             = $request->userType;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateUser',
            'version'     => '2016-04-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUserRequest $request
     *
     * @return UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }
}
