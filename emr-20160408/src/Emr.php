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
use AlibabaCloud\SDK\Emr\V20160408\Models\CleanupFlowEntitySnapshotRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CleanupFlowEntitySnapshotResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CloneFlowJobRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CloneFlowJobResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CloneFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CloneFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CommitFlowEntitySnapshotRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CommitFlowEntitySnapshotResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateBackupPlanRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateBackupPlanResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateBackupRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateBackupResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterBootstrapActionRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterBootstrapActionResponse;
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
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowEditLockRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateFlowEditLockResponse;
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
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateNoteRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateNoteResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateParagraphRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateParagraphResponse;
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
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowEditLockRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteFlowEditLockResponse;
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
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteNoteRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DeleteNoteResponse;
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
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeExecutionPlanRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeExecutionPlanResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowAgentTokenRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowAgentTokenResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowAgentUserRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowAgentUserResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowCategoryRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowCategoryResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowCategoryTreeRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowCategoryTreeResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowEntitySnapshotRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowEntitySnapshotResponse;
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
use AlibabaCloud\SDK\Emr\V20160408\Models\DiffFlowEntitySnapshotRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DiffFlowEntitySnapshotResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\DumpMetaDataSourceForOuterRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\DumpMetaDataSourceForOuterResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetFlowEntityRelationGraphRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\GetFlowEntityRelationGraphResponse;
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
use AlibabaCloud\SDK\Emr\V20160408\Models\KillExecutionJobInstanceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\KillExecutionJobInstanceResponse;
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
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrMainVersionRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrMainVersionResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListExecutionPlanInstancesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListExecutionPlanInstancesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListExecutionPlansRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListExecutionPlansResponse;
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
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowEntitySnapshotRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowEntitySnapshotResponse;
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
use AlibabaCloud\SDK\Emr\V20160408\Models\ListJobInstanceWorkersRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListJobInstanceWorkersResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListJobsRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListJobsResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListLibrariesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListLibrariesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListLibraryInstallTasksRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListLibraryInstallTasksResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListLibraryStatusRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListLibraryStatusResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListMetaClusterRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListMetaClusterResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListMetaDataSourceClusterForOuterRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListMetaDataSourceClusterForOuterResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListNotesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListNotesResponse;
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
use AlibabaCloud\SDK\Emr\V20160408\Models\QueryAlarmHistoryRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\QueryAlarmHistoryResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\QueryEntityRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\QueryEntityResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\QueryTableDataRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\QueryTableDataResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\QueryTagRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\QueryTagResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\QueryTrendDataRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\QueryTrendDataResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\RefreshClusterResourcePoolRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\RefreshClusterResourcePoolResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ReleaseClusterByTemplateTagForInternalRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ReleaseClusterByTemplateTagForInternalResponse;
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
use AlibabaCloud\SDK\Emr\V20160408\Models\RestoreBackupRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\RestoreBackupResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\RestoreFlowEntitySnapshotRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\RestoreFlowEntitySnapshotResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ResumeExecutionPlanSchedulerRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ResumeExecutionPlanSchedulerResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\ResumeFlowRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\ResumeFlowResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\RetryOperationRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\RetryOperationResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\RunClusterServiceActionRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\RunClusterServiceActionResponse;
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
use AlibabaCloud\SDK\Emr\V20160408\Models\TagResourcesSystemTagsRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\TagResourcesSystemTagsResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\UninstallLibrariesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\UninstallLibrariesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Emr\V20160408\Models\UntagResourcesSystemTagsRequest;
use AlibabaCloud\SDK\Emr\V20160408\Models\UntagResourcesSystemTagsResponse;
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddClusterServiceResponse::fromMap($this->doRPCRequest('AddClusterService', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddScalingConfigItemV2Response::fromMap($this->doRPCRequest('AddScalingConfigItemV2', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AuthorizeSecurityGroupResponse::fromMap($this->doRPCRequest('AuthorizeSecurityGroup', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelOrderResponse::fromMap($this->doRPCRequest('CancelOrder', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CleanupFlowEntitySnapshotRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CleanupFlowEntitySnapshotResponse
     */
    public function cleanupFlowEntitySnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CleanupFlowEntitySnapshotResponse::fromMap($this->doRPCRequest('CleanupFlowEntitySnapshot', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CleanupFlowEntitySnapshotRequest $request
     *
     * @return CleanupFlowEntitySnapshotResponse
     */
    public function cleanupFlowEntitySnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cleanupFlowEntitySnapshotWithOptions($request, $runtime);
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

        return CloneFlowResponse::fromMap($this->doRPCRequest('CloneFlow', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CloneFlowJobResponse::fromMap($this->doRPCRequest('CloneFlowJob', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return CommitFlowEntitySnapshotResponse::fromMap($this->doRPCRequest('CommitFlowEntitySnapshot', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateBackupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateBackupResponse
     */
    public function createBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBackupResponse::fromMap($this->doRPCRequest('CreateBackup', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBackupPlanResponse::fromMap($this->doRPCRequest('CreateBackupPlan', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateClusterBootstrapActionResponse::fromMap($this->doRPCRequest('CreateClusterBootstrapAction', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return CreateClusterTemplateResponse::fromMap($this->doRPCRequest('CreateClusterTemplate', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateClusterV2Response::fromMap($this->doRPCRequest('CreateClusterV2', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateClusterWithTemplateResponse::fromMap($this->doRPCRequest('CreateClusterWithTemplate', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDataSourceResponse::fromMap($this->doRPCRequest('CreateDataSource', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateExecutionPlanResponse::fromMap($this->doRPCRequest('CreateExecutionPlan', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowResponse::fromMap($this->doRPCRequest('CreateFlow', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowCategoryResponse::fromMap($this->doRPCRequest('CreateFlowCategory', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return CreateFlowEditLockResponse::fromMap($this->doRPCRequest('CreateFlowEditLock', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateFlowForWebRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateFlowForWebResponse
     */
    public function createFlowForWebWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowForWebResponse::fromMap($this->doRPCRequest('CreateFlowForWeb', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowJobResponse::fromMap($this->doRPCRequest('CreateFlowJob', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowProjectResponse::fromMap($this->doRPCRequest('CreateFlowProject', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowProjectClusterSettingResponse::fromMap($this->doRPCRequest('CreateFlowProjectClusterSetting', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowProjectUserResponse::fromMap($this->doRPCRequest('CreateFlowProjectUser', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateJobResponse::fromMap($this->doRPCRequest('CreateJob', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateLibraryResponse::fromMap($this->doRPCRequest('CreateLibrary', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMetaTablePreviewTaskResponse::fromMap($this->doRPCRequest('CreateMetaTablePreviewTask', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateNoteRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateNoteResponse
     */
    public function createNoteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateNoteResponse::fromMap($this->doRPCRequest('CreateNote', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateNoteRequest $request
     *
     * @return CreateNoteResponse
     */
    public function createNote($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNoteWithOptions($request, $runtime);
    }

    /**
     * @param CreateParagraphRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateParagraphResponse
     */
    public function createParagraphWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateParagraphResponse::fromMap($this->doRPCRequest('CreateParagraph', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateParagraphRequest $request
     *
     * @return CreateParagraphResponse
     */
    public function createParagraph($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createParagraphWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateResourcePoolResponse::fromMap($this->doRPCRequest('CreateResourcePool', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateResourceQueueResponse::fromMap($this->doRPCRequest('CreateResourceQueue', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateScalingGroupV2Response::fromMap($this->doRPCRequest('CreateScalingGroupV2', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateScalingRuleResponse::fromMap($this->doRPCRequest('CreateScalingRule', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTagResponse::fromMap($this->doRPCRequest('CreateTag', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUserResponse::fromMap($this->doRPCRequest('CreateUser', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUsersResponse::fromMap($this->doRPCRequest('CreateUsers', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DecommissionHostComponentResponse::fromMap($this->doRPCRequest('DecommissionHostComponent', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteClusterTemplateResponse::fromMap($this->doRPCRequest('DeleteClusterTemplate', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteExecutionPlanResponse::fromMap($this->doRPCRequest('DeleteExecutionPlan', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFlowResponse::fromMap($this->doRPCRequest('DeleteFlow', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFlowCategoryResponse::fromMap($this->doRPCRequest('DeleteFlowCategory', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DeleteFlowEditLockResponse::fromMap($this->doRPCRequest('DeleteFlowEditLock', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteFlowJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteFlowJobResponse
     */
    public function deleteFlowJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFlowJobResponse::fromMap($this->doRPCRequest('DeleteFlowJob', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFlowProjectResponse::fromMap($this->doRPCRequest('DeleteFlowProject', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFlowProjectClusterSettingResponse::fromMap($this->doRPCRequest('DeleteFlowProjectClusterSetting', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFlowProjectUserResponse::fromMap($this->doRPCRequest('DeleteFlowProjectUser', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteJobResponse::fromMap($this->doRPCRequest('DeleteJob', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteLibrariesResponse::fromMap($this->doRPCRequest('DeleteLibraries', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteNoteRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteNoteResponse
     */
    public function deleteNoteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteNoteResponse::fromMap($this->doRPCRequest('DeleteNote', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteNoteRequest $request
     *
     * @return DeleteNoteResponse
     */
    public function deleteNote($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNoteWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteResourcePoolResponse::fromMap($this->doRPCRequest('DeleteResourcePool', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteResourceQueueResponse::fromMap($this->doRPCRequest('DeleteResourceQueue', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteScalingRuleResponse::fromMap($this->doRPCRequest('DeleteScalingRule', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTagResponse::fromMap($this->doRPCRequest('DeleteTag', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUserResponse::fromMap($this->doRPCRequest('DeleteUser', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterBasicInfoResponse::fromMap($this->doRPCRequest('DescribeClusterBasicInfo', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterMetaCollectResponse::fromMap($this->doRPCRequest('DescribeClusterMetaCollect', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterOperationHostTaskLogResponse::fromMap($this->doRPCRequest('DescribeClusterOperationHostTaskLog', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterResourcePoolSchedulerTypeResponse::fromMap($this->doRPCRequest('DescribeClusterResourcePoolSchedulerType', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterServiceResponse::fromMap($this->doRPCRequest('DescribeClusterService', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterServiceConfigResponse::fromMap($this->doRPCRequest('DescribeClusterServiceConfig', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterServiceConfigHistoryResponse::fromMap($this->doRPCRequest('DescribeClusterServiceConfigHistory', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterServiceConfigTagResponse::fromMap($this->doRPCRequest('DescribeClusterServiceConfigTag', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterTemplateResponse::fromMap($this->doRPCRequest('DescribeClusterTemplate', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterV2Response::fromMap($this->doRPCRequest('DescribeClusterV2', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDataSourceResponse::fromMap($this->doRPCRequest('DescribeDataSource', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeExecutionPlanRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeExecutionPlanResponse
     */
    public function describeExecutionPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeExecutionPlanResponse::fromMap($this->doRPCRequest('DescribeExecutionPlan', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowResponse::fromMap($this->doRPCRequest('DescribeFlow', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeFlowAgentTokenRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeFlowAgentTokenResponse
     */
    public function describeFlowAgentTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowAgentTokenResponse::fromMap($this->doRPCRequest('DescribeFlowAgentToken', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlowAgentTokenRequest $request
     *
     * @return DescribeFlowAgentTokenResponse
     */
    public function describeFlowAgentToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowAgentTokenWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowAgentUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeFlowAgentUserResponse
     */
    public function describeFlowAgentUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowAgentUserResponse::fromMap($this->doRPCRequest('DescribeFlowAgentUser', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlowAgentUserRequest $request
     *
     * @return DescribeFlowAgentUserResponse
     */
    public function describeFlowAgentUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowAgentUserWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowCategoryResponse::fromMap($this->doRPCRequest('DescribeFlowCategory', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowCategoryTreeResponse::fromMap($this->doRPCRequest('DescribeFlowCategoryTree', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeFlowEntitySnapshotRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeFlowEntitySnapshotResponse
     */
    public function describeFlowEntitySnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowEntitySnapshotResponse::fromMap($this->doRPCRequest('DescribeFlowEntitySnapshot', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlowEntitySnapshotRequest $request
     *
     * @return DescribeFlowEntitySnapshotResponse
     */
    public function describeFlowEntitySnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowEntitySnapshotWithOptions($request, $runtime);
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

        return DescribeFlowInstanceResponse::fromMap($this->doRPCRequest('DescribeFlowInstance', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowJobResponse::fromMap($this->doRPCRequest('DescribeFlowJob', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowNodeInstanceResponse::fromMap($this->doRPCRequest('DescribeFlowNodeInstance', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowNodeInstanceContainerLogResponse::fromMap($this->doRPCRequest('DescribeFlowNodeInstanceContainerLog', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowNodeInstanceLauncherLogResponse::fromMap($this->doRPCRequest('DescribeFlowNodeInstanceLauncherLog', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowProjectResponse::fromMap($this->doRPCRequest('DescribeFlowProject', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowProjectClusterSettingResponse::fromMap($this->doRPCRequest('DescribeFlowProjectClusterSetting', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeJobResponse::fromMap($this->doRPCRequest('DescribeJob', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLibraryDetailResponse::fromMap($this->doRPCRequest('DescribeLibraryDetail', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeLibraryInstallTaskDetailResponse::fromMap($this->doRPCRequest('DescribeLibraryInstallTaskDetail', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMetaTablePreviewTaskResponse::fromMap($this->doRPCRequest('DescribeMetaTablePreviewTask', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScalingActivityResponse::fromMap($this->doRPCRequest('DescribeScalingActivity', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScalingCommonConfigResponse::fromMap($this->doRPCRequest('DescribeScalingCommonConfig', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScalingConfigItemV2Response::fromMap($this->doRPCRequest('DescribeScalingConfigItemV2', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScalingGroupInstanceV2Response::fromMap($this->doRPCRequest('DescribeScalingGroupInstanceV2', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScalingGroupV2Response::fromMap($this->doRPCRequest('DescribeScalingGroupV2', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScalingRuleResponse::fromMap($this->doRPCRequest('DescribeScalingRule', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSecurityGroupAttributeResponse::fromMap($this->doRPCRequest('DescribeSecurityGroupAttribute', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachAndReleaseClusterEniResponse::fromMap($this->doRPCRequest('DetachAndReleaseClusterEni', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DiffFlowEntitySnapshotRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DiffFlowEntitySnapshotResponse
     */
    public function diffFlowEntitySnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DiffFlowEntitySnapshotResponse::fromMap($this->doRPCRequest('DiffFlowEntitySnapshot', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DiffFlowEntitySnapshotRequest $request
     *
     * @return DiffFlowEntitySnapshotResponse
     */
    public function diffFlowEntitySnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->diffFlowEntitySnapshotWithOptions($request, $runtime);
    }

    /**
     * @param DumpMetaDataSourceForOuterRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DumpMetaDataSourceForOuterResponse
     */
    public function dumpMetaDataSourceForOuterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DumpMetaDataSourceForOuterResponse::fromMap($this->doRPCRequest('DumpMetaDataSourceForOuter', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DumpMetaDataSourceForOuterRequest $request
     *
     * @return DumpMetaDataSourceForOuterResponse
     */
    public function dumpMetaDataSourceForOuter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dumpMetaDataSourceForOuterWithOptions($request, $runtime);
    }

    /**
     * @param GetFlowEntityRelationGraphRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetFlowEntityRelationGraphResponse
     */
    public function getFlowEntityRelationGraphWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetFlowEntityRelationGraphResponse::fromMap($this->doRPCRequest('GetFlowEntityRelationGraph', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetFlowEntityRelationGraphRequest $request
     *
     * @return GetFlowEntityRelationGraphResponse
     */
    public function getFlowEntityRelationGraph($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFlowEntityRelationGraphWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHdfsCapacityStatisticInfoResponse::fromMap($this->doRPCRequest('GetHdfsCapacityStatisticInfo', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetJobInputStatisticInfoResponse::fromMap($this->doRPCRequest('GetJobInputStatisticInfo', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetJobOutputStatisticInfoResponse::fromMap($this->doRPCRequest('GetJobOutputStatisticInfo', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetJobRunningTimeStatisticInfoResponse::fromMap($this->doRPCRequest('GetJobRunningTimeStatisticInfo', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetQueueInputStatisticInfoResponse::fromMap($this->doRPCRequest('GetQueueInputStatisticInfo', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetQueueOutputStatisticInfoResponse::fromMap($this->doRPCRequest('GetQueueOutputStatisticInfo', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetQueueSubmissionStatisticInfoResponse::fromMap($this->doRPCRequest('GetQueueSubmissionStatisticInfo', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserInputStatisticInfoResponse::fromMap($this->doRPCRequest('GetUserInputStatisticInfo', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserOutputStatisticInfoResponse::fromMap($this->doRPCRequest('GetUserOutputStatisticInfo', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUserSubmissionStatisticInfoResponse::fromMap($this->doRPCRequest('GetUserSubmissionStatisticInfo', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InstallLibrariesResponse::fromMap($this->doRPCRequest('InstallLibraries', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return JoinResourceGroupResponse::fromMap($this->doRPCRequest('JoinResourceGroup', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param KillExecutionJobInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return KillExecutionJobInstanceResponse
     */
    public function killExecutionJobInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return KillExecutionJobInstanceResponse::fromMap($this->doRPCRequest('KillExecutionJobInstance', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param KillExecutionJobInstanceRequest $request
     *
     * @return KillExecutionJobInstanceResponse
     */
    public function killExecutionJobInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killExecutionJobInstanceWithOptions($request, $runtime);
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

        return KillFlowJobResponse::fromMap($this->doRPCRequest('KillFlowJob', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAdviceActionResponse::fromMap($this->doRPCRequest('ListAdviceAction', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListApmApplicationResponse::fromMap($this->doRPCRequest('ListApmApplication', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBackupsResponse::fromMap($this->doRPCRequest('ListBackups', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterHostResponse::fromMap($this->doRPCRequest('ListClusterHost', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterHostComponentResponse::fromMap($this->doRPCRequest('ListClusterHostComponent', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterHostGroupResponse::fromMap($this->doRPCRequest('ListClusterHostGroup', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterInstalledServiceResponse::fromMap($this->doRPCRequest('ListClusterInstalledService', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterOperationResponse::fromMap($this->doRPCRequest('ListClusterOperation', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterOperationHostResponse::fromMap($this->doRPCRequest('ListClusterOperationHost', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterOperationHostTaskResponse::fromMap($this->doRPCRequest('ListClusterOperationHostTask', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterOperationTaskResponse::fromMap($this->doRPCRequest('ListClusterOperationTask', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ListClustersResponse::fromMap($this->doRPCRequest('ListClusters', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListClusterServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListClusterServiceResponse
     */
    public function listClusterServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterServiceResponse::fromMap($this->doRPCRequest('ListClusterService', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterServiceComponentResponse::fromMap($this->doRPCRequest('ListClusterServiceComponent', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterServiceComponentHealthInfoResponse::fromMap($this->doRPCRequest('ListClusterServiceComponentHealthInfo', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterServiceConfigHistoryResponse::fromMap($this->doRPCRequest('ListClusterServiceConfigHistory', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterServiceQuickLinkResponse::fromMap($this->doRPCRequest('ListClusterServiceQuickLink', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListClusterTemplatesResponse::fromMap($this->doRPCRequest('ListClusterTemplates', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListDataSourceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListDataSourceResponse
     */
    public function listDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDataSourceResponse::fromMap($this->doRPCRequest('ListDataSource', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListEmrAvailableConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListEmrAvailableConfigResponse
     */
    public function listEmrAvailableConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListEmrAvailableConfigResponse::fromMap($this->doRPCRequest('ListEmrAvailableConfig', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListEmrAvailableResourceResponse::fromMap($this->doRPCRequest('ListEmrAvailableResource', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListEmrMainVersionResponse::fromMap($this->doRPCRequest('ListEmrMainVersion', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListExecutionPlanInstancesResponse::fromMap($this->doRPCRequest('ListExecutionPlanInstances', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListExecutionPlansRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListExecutionPlansResponse
     */
    public function listExecutionPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListExecutionPlansResponse::fromMap($this->doRPCRequest('ListExecutionPlans', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListExecutionPlansRequest $request
     *
     * @return ListExecutionPlansResponse
     */
    public function listExecutionPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutionPlansWithOptions($request, $runtime);
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

        return ListFlowResponse::fromMap($this->doRPCRequest('ListFlow', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowCategoryResponse::fromMap($this->doRPCRequest('ListFlowCategory', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowClusterResponse::fromMap($this->doRPCRequest('ListFlowCluster', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowClusterAllResponse::fromMap($this->doRPCRequest('ListFlowClusterAll', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowClusterAllHostsResponse::fromMap($this->doRPCRequest('ListFlowClusterAllHosts', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowClusterHostResponse::fromMap($this->doRPCRequest('ListFlowClusterHost', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ListFlowEntitySnapshotResponse::fromMap($this->doRPCRequest('ListFlowEntitySnapshot', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ListFlowInstanceResponse::fromMap($this->doRPCRequest('ListFlowInstance', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowJobResponse::fromMap($this->doRPCRequest('ListFlowJob', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowJobHistoryResponse::fromMap($this->doRPCRequest('ListFlowJobHistory', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowNodeInstanceResponse::fromMap($this->doRPCRequest('ListFlowNodeInstance', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowNodeInstanceContainerStatusResponse::fromMap($this->doRPCRequest('ListFlowNodeInstanceContainerStatus', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowNodeSqlResultResponse::fromMap($this->doRPCRequest('ListFlowNodeSqlResult', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowProjectResponse::fromMap($this->doRPCRequest('ListFlowProject', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowProjectClusterSettingResponse::fromMap($this->doRPCRequest('ListFlowProjectClusterSetting', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowProjectUserResponse::fromMap($this->doRPCRequest('ListFlowProjectUser', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListJobExecutionInstancesResponse::fromMap($this->doRPCRequest('ListJobExecutionInstances', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListJobInstanceWorkersRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListJobInstanceWorkersResponse
     */
    public function listJobInstanceWorkersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListJobInstanceWorkersResponse::fromMap($this->doRPCRequest('ListJobInstanceWorkers', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListJobInstanceWorkersRequest $request
     *
     * @return ListJobInstanceWorkersResponse
     */
    public function listJobInstanceWorkers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobInstanceWorkersWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListJobsResponse::fromMap($this->doRPCRequest('ListJobs', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListLibrariesResponse::fromMap($this->doRPCRequest('ListLibraries', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListLibraryInstallTasksResponse::fromMap($this->doRPCRequest('ListLibraryInstallTasks', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListLibraryStatusResponse::fromMap($this->doRPCRequest('ListLibraryStatus', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ListMetaClusterResponse::fromMap($this->doRPCRequest('ListMetaCluster', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListMetaDataSourceClusterForOuterRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListMetaDataSourceClusterForOuterResponse
     */
    public function listMetaDataSourceClusterForOuterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMetaDataSourceClusterForOuterResponse::fromMap($this->doRPCRequest('ListMetaDataSourceClusterForOuter', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMetaDataSourceClusterForOuterRequest $request
     *
     * @return ListMetaDataSourceClusterForOuterResponse
     */
    public function listMetaDataSourceClusterForOuter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMetaDataSourceClusterForOuterWithOptions($request, $runtime);
    }

    /**
     * @param ListNotesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListNotesResponse
     */
    public function listNotesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListNotesResponse::fromMap($this->doRPCRequest('ListNotes', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListNotesRequest $request
     *
     * @return ListNotesResponse
     */
    public function listNotes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNotesWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListResourcePoolResponse::fromMap($this->doRPCRequest('ListResourcePool', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRolesResponse::fromMap($this->doRPCRequest('ListRoles', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListScalingActivityV2Response::fromMap($this->doRPCRequest('ListScalingActivityV2', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListScalingConfigItemV2Response::fromMap($this->doRPCRequest('ListScalingConfigItemV2', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListScalingGroupV2Response::fromMap($this->doRPCRequest('ListScalingGroupV2', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSecurityGroupResponse::fromMap($this->doRPCRequest('ListSecurityGroup', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListStackResponse::fromMap($this->doRPCRequest('ListStack', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagKeysResponse::fromMap($this->doRPCRequest('ListTagKeys', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagValuesResponse::fromMap($this->doRPCRequest('ListTagValues', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUsersResponse::fromMap($this->doRPCRequest('ListUsers', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVswitchResponse::fromMap($this->doRPCRequest('ListVswitch', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyClusterBootstrapActionResponse::fromMap($this->doRPCRequest('ModifyClusterBootstrapAction', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyClusterHostGroupResponse::fromMap($this->doRPCRequest('ModifyClusterHostGroup', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyClusterMetaCollectResponse::fromMap($this->doRPCRequest('ModifyClusterMetaCollect', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyClusterNameResponse::fromMap($this->doRPCRequest('ModifyClusterName', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyClusterSecurityGroupRuleResponse::fromMap($this->doRPCRequest('ModifyClusterSecurityGroupRule', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyClusterServiceConfigResponse::fromMap($this->doRPCRequest('ModifyClusterServiceConfig', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyClusterTemplateResponse::fromMap($this->doRPCRequest('ModifyClusterTemplate', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyExecutionPlanResponse::fromMap($this->doRPCRequest('ModifyExecutionPlan', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyFlowResponse::fromMap($this->doRPCRequest('ModifyFlow', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyFlowCategoryResponse::fromMap($this->doRPCRequest('ModifyFlowCategory', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyFlowForWebResponse::fromMap($this->doRPCRequest('ModifyFlowForWeb', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyFlowJobResponse::fromMap($this->doRPCRequest('ModifyFlowJob', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyFlowProjectResponse::fromMap($this->doRPCRequest('ModifyFlowProject', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyFlowProjectClusterSettingResponse::fromMap($this->doRPCRequest('ModifyFlowProjectClusterSetting', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyJobResponse::fromMap($this->doRPCRequest('ModifyJob', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyResourcePoolResponse::fromMap($this->doRPCRequest('ModifyResourcePool', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyResourcePoolSchedulerTypeResponse::fromMap($this->doRPCRequest('ModifyResourcePoolSchedulerType', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyResourceQueueResponse::fromMap($this->doRPCRequest('ModifyResourceQueue', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyScalingConfigItemV2Response::fromMap($this->doRPCRequest('ModifyScalingConfigItemV2', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyScalingGroupV2Response::fromMap($this->doRPCRequest('ModifyScalingGroupV2', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyScalingRuleResponse::fromMap($this->doRPCRequest('ModifyScalingRule', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyScalingTaskGroupResponse::fromMap($this->doRPCRequest('ModifyScalingTaskGroup', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryAlarmHistoryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryAlarmHistoryResponse
     */
    public function queryAlarmHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAlarmHistoryResponse::fromMap($this->doRPCRequest('QueryAlarmHistory', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAlarmHistoryRequest $request
     *
     * @return QueryAlarmHistoryResponse
     */
    public function queryAlarmHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAlarmHistoryWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEntityResponse::fromMap($this->doRPCRequest('QueryEntity', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryTableDataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryTableDataResponse
     */
    public function queryTableDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTableDataResponse::fromMap($this->doRPCRequest('QueryTableData', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTableDataRequest $request
     *
     * @return QueryTableDataResponse
     */
    public function queryTableData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTableDataWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTagResponse::fromMap($this->doRPCRequest('QueryTag', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryTrendDataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryTrendDataResponse
     */
    public function queryTrendDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTrendDataResponse::fromMap($this->doRPCRequest('QueryTrendData', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTrendDataRequest $request
     *
     * @return QueryTrendDataResponse
     */
    public function queryTrendData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTrendDataWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefreshClusterResourcePoolResponse::fromMap($this->doRPCRequest('RefreshClusterResourcePool', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseClusterResponse::fromMap($this->doRPCRequest('ReleaseCluster', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ReleaseClusterByTemplateTagForInternalRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ReleaseClusterByTemplateTagForInternalResponse
     */
    public function releaseClusterByTemplateTagForInternalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseClusterByTemplateTagForInternalResponse::fromMap($this->doRPCRequest('ReleaseClusterByTemplateTagForInternal', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReleaseClusterByTemplateTagForInternalRequest $request
     *
     * @return ReleaseClusterByTemplateTagForInternalResponse
     */
    public function releaseClusterByTemplateTagForInternal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseClusterByTemplateTagForInternalWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReleaseClusterHostGroupResponse::fromMap($this->doRPCRequest('ReleaseClusterHostGroup', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveScalingConfigItemV2Response::fromMap($this->doRPCRequest('RemoveScalingConfigItemV2', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RerunFlowResponse::fromMap($this->doRPCRequest('RerunFlow', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResizeClusterV2Response::fromMap($this->doRPCRequest('ResizeClusterV2', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param RestoreBackupRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RestoreBackupResponse
     */
    public function restoreBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestoreBackupResponse::fromMap($this->doRPCRequest('RestoreBackup', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RestoreBackupRequest $request
     *
     * @return RestoreBackupResponse
     */
    public function restoreBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreBackupWithOptions($request, $runtime);
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

        return RestoreFlowEntitySnapshotResponse::fromMap($this->doRPCRequest('RestoreFlowEntitySnapshot', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ResumeExecutionPlanSchedulerRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ResumeExecutionPlanSchedulerResponse
     */
    public function resumeExecutionPlanSchedulerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResumeExecutionPlanSchedulerResponse::fromMap($this->doRPCRequest('ResumeExecutionPlanScheduler', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResumeFlowResponse::fromMap($this->doRPCRequest('ResumeFlow', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RetryOperationResponse::fromMap($this->doRPCRequest('RetryOperation', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RunClusterServiceActionResponse::fromMap($this->doRPCRequest('RunClusterServiceAction', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RunExecutionPlanResponse::fromMap($this->doRPCRequest('RunExecutionPlan', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RunScalingActionV2Response::fromMap($this->doRPCRequest('RunScalingActionV2', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchLogResponse::fromMap($this->doRPCRequest('SearchLog', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartFlowResponse::fromMap($this->doRPCRequest('StartFlow', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitFlowResponse::fromMap($this->doRPCRequest('SubmitFlow', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitFlowJobResponse::fromMap($this->doRPCRequest('SubmitFlowJob', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SuspendExecutionPlanSchedulerResponse::fromMap($this->doRPCRequest('SuspendExecutionPlanScheduler', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SuspendFlowResponse::fromMap($this->doRPCRequest('SuspendFlow', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return TagResourcesSystemTagsResponse::fromMap($this->doRPCRequest('TagResourcesSystemTags', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return UninstallLibrariesResponse::fromMap($this->doRPCRequest('UninstallLibraries', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return UntagResourcesSystemTagsResponse::fromMap($this->doRPCRequest('UntagResourcesSystemTags', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param UpdateDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDataSourceResponse
     */
    public function updateDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDataSourceResponse::fromMap($this->doRPCRequest('UpdateDataSource', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateLibraryInstallTaskStatusResponse::fromMap($this->doRPCRequest('UpdateLibraryInstallTaskStatus', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTagResponse::fromMap($this->doRPCRequest('UpdateTag', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateUserResponse::fromMap($this->doRPCRequest('UpdateUser', '2016-04-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
