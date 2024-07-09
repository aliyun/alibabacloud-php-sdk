<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddGroupMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddGroupMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddPipelineRelationsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddPipelineRelationsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddRepositoryMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddRepositoryMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddWebhookRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddWebhookResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CloseMergeRequestRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CloseMergeRequestResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateAppMembersRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateAppMembersResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateBranchRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateBranchResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateChangeRequestRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateChangeRequestResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateCheckRunRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateCheckRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateCommentRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateCommentResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateCommitStatusRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateCommitStatusResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateCommitWithMultipleFilesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateCommitWithMultipleFilesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateDeployKeyRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateDeployKeyResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateFileRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateFileResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateFlowTagGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateFlowTagGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateFlowTagRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateFlowTagResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateHostGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateHostGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateMergeRequestRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateMergeRequestResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateOAuthTokenRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateOAuthTokenResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreatePipelineGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreatePipelineGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreatePipelineRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreatePipelineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateProjectLabelRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateProjectLabelResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateProtectdBranchRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateProtectdBranchResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreatePushRuleRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreatePushRuleResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateRepositoryGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateRepositoryGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateRepositoryRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateRepositoryResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateResourceMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateResourceMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateServiceAuthRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateServiceAuthResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateServiceConnectionRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateServiceConnectionResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateServiceCredentialRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateServiceCredentialResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateSprintRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateSprintResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateSshKeyResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateTagRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateTagResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateUserKeyRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateUserKeyResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateVariableGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateVariableGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemCommentRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemCommentResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemEstimateRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemEstimateResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemRecordRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemRecordResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemV2Request;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemV2Response;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkspaceRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkspaceResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteAppMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteAppMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteBranchRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteBranchResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteFileRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteFileResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteFlowTagGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteFlowTagResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteGroupMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteGroupMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteHostGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeletePipelineGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeletePipelineRelationsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeletePipelineRelationsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeletePipelineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteProjectLabelRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteProjectLabelResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteProtectedBranchRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteProtectedBranchResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeletePushRuleRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeletePushRuleResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteRepositoryGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteRepositoryGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteRepositoryMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteRepositoryMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteRepositoryRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteRepositoryResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteRepositoryWebhookRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteRepositoryWebhookResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteResourceMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteTagRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteTagResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteUserKeyRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteUserKeyResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteVariableGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteWorkitemAllCommentRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteWorkitemAllCommentResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteWorkitemCommentRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteWorkitemCommentResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteWorkitemRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\DeleteWorkitemResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\EnableDeployKeyRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\EnableDeployKeyResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightCustomValueRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightCustomValueResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightExpectedWorkTimeRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightExpectedWorkTimeResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightFieldRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightFieldResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightSpaceRefRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightSpaceRefResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightSpaceRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightSpaceResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightSprintRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightSprintResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightTagRefRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightTagRefResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightWorkitemStatusJoinWorkitemDefectExtraRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightWorkitemStatusJoinWorkitemDefectExtraResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightWorkitemStatusRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightWorkitemStatusResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightWorkitemVersionRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightWorkitemVersionResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightWorkTimeRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightWorkTimeResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportWorkitemActivityRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExportWorkitemActivityResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\FrozenWorkspaceResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetApplicationRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetApplicationResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetBranchInfoRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetBranchInfoResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetCheckRunRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetCheckRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetCodeupOrganizationRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetCodeupOrganizationResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetCompareDetailRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetCompareDetailResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetCustomFieldOptionRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetCustomFieldOptionResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetFileBlobsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetFileBlobsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetFileLastCommitRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetFileLastCommitResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetFlowTagGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetGroupByPathRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetGroupByPathResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetGroupDetailRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetGroupDetailResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetHostGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestChangeTreeRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestChangeTreeResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetMergeRequestResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetOrganizationMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineArtifactUrlRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineArtifactUrlResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineEmasArtifactUrlRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineEmasArtifactUrlResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineScanReportUrlRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineScanReportUrlResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetProjectInfoResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetProjectMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetProjectMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPushRuleRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPushRuleResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetRepositoryCommitRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetRepositoryCommitResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetRepositoryRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetRepositoryResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetRepositoryTagRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetRepositoryTagResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetSearchCodePreviewRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetSearchCodePreviewResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetSprintInfoResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestcaseListRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestcaseListResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestResultListRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetTestResultListResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetUserInfoRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetUserInfoResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetVariableGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetVMDeployOrderResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemActivityResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemAttachmentCreatemetaRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemAttachmentCreatemetaResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemCommentListResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemFileResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemInfoResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemRelationsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemRelationsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemTimeTypeListResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemWorkFlowInfoRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemWorkFlowInfoResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkspaceResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\JoinPipelineGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\JoinPipelineGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\LinkMergeRequestLabelRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\LinkMergeRequestLabelResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListAllReleaseWorkflowsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListAllReleaseWorkflowsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListApplicationMembersRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListApplicationMembersResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListApplicationsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListApplicationsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListAppReleaseStageExecutionIntegratedMetadataRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListAppReleaseStageExecutionIntegratedMetadataResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListAppReleaseStageExecutionsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListAppReleaseStageExecutionsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListChangeRequestsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListChangeRequestsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListChangeRequestsShrinkRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListChangeRequestWorkflowExecutionsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListChangeRequestWorkflowExecutionsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListCheckRunsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListCheckRunsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListCommitStatusesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListCommitStatusesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListFlowTagGroupsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListGroupMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListGroupMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListGroupRepositoriesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListGroupRepositoriesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListHostGroupsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListHostGroupsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListJoinedOrganizationsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestCommentsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestCommentsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestFilesReadsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestFilesReadsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestLabelsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestLabelsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestPatchSetsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestPatchSetsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListMergeRequestsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListOrganizationMembersRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListOrganizationMembersResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListOrganizationsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListOrganizationsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineGroupPipelinesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineGroupPipelinesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineGroupsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineGroupsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineJobHistorysRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineJobHistorysResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineJobsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineJobsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineRelationsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineRelationsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineRunsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineRunsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelinesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelinesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectLabelsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectLabelsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectMembersRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectMembersResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectTemplatesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectTemplatesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectWorkitemTypesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectWorkitemTypesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProtectedBranchesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProtectedBranchesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPushRulesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListPushRulesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoriesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoriesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryBranchesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryBranchesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryCommitDiffRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryCommitDiffResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryCommitsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryCommitsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryGroupsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryGroupsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryMemberWithInheritedRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryMemberWithInheritedResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryTagsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryTagsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryTreeRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryTreeResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryWebhookRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryWebhookResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListResourceMembersResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchCommitRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchCommitResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchRepositoryRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchRepositoryResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchSourceCodeRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListSearchSourceCodeResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceAuthsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceAuthsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceConnectionsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceConnectionsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceCredentialsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListServiceCredentialsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListSprintsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListSprintsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListTestCaseFieldsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListTestCaseFieldsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserDrawRecordByPkRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserDrawRecordByPkResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserKeysRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserKeysResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListVariableGroupsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListVariableGroupsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkItemAllFieldsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkItemAllFieldsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemAttachmentsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemEstimateResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkitemTimeResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkItemWorkFlowStatusRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkItemWorkFlowStatusResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListWorkspacesShrinkRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\LogPipelineJobRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\LogVMDeployMachineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\MergeMergeRequestRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\MergeMergeRequestResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\PassPipelineValidateResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\RefusePipelineValidateResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ReleaseWorkspaceResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ReopenMergeRequestRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ReopenMergeRequestResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ResetSshKeyResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ResumeVMDeployOrderResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\RetryPipelineJobRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\RetryVMDeployMachineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\ReviewMergeRequestRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ReviewMergeRequestResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\SkipPipelineJobRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\SkipVMDeployMachineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\StartPipelineRunRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\StartPipelineRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\StopPipelineJobRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\StopPipelineRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\StopVMDeployOrderResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\TransferRepositoryRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\TransferRepositoryResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\TriggerRepositoryMirrorSyncRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\TriggerRepositoryMirrorSyncResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateApplicationRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateApplicationResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateAppMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateAppMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateCheckRunRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateCheckRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateFileRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateFileResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateFlowTagGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateFlowTagGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateFlowTagRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateFlowTagResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateGroupMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateGroupMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateHostGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateHostGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateMergeRequestPersonnelRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateMergeRequestPersonnelResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateMergeRequestRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateMergeRequestResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateOrganizationMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateOrganizationMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePipelineBaseInfoRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePipelineBaseInfoResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePipelineGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePipelineGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePipelineRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePipelineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProjectFieldRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProjectFieldResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProjectLabelRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProjectLabelResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProjectMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProjectMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePushReviewOnOffRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePushReviewOnOffResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePushRuleRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePushRuleResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateRepositoryResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateResourceMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateResourceMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestResultRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestResultResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateVariableGroupRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateVariableGroupResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateWorkitemCommentRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateWorkitemCommentResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateWorkitemFieldRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateWorkitemFieldResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateWorkItemRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateWorkItemResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\WorkitemAttachmentCreateRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\WorkitemAttachmentCreateResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Devops extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('devops', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 添加组成员
     *  *
     * @param string                $groupId
     * @param AddGroupMemberRequest $request AddGroupMemberRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddGroupMemberResponse AddGroupMemberResponse
     */
    public function addGroupMemberWithOptions($groupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->accessLevel)) {
            $body['accessLevel'] = $request->accessLevel;
        }
        if (!Utils::isUnset($request->aliyunPks)) {
            $body['aliyunPks'] = $request->aliyunPks;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddGroupMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/members/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加组成员
     *  *
     * @param string                $groupId
     * @param AddGroupMemberRequest $request AddGroupMemberRequest
     *
     * @return AddGroupMemberResponse AddGroupMemberResponse
     */
    public function addGroupMember($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addGroupMemberWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * @summary 添加流水线关联
     *  *
     * @param string                      $organizationId
     * @param string                      $pipelineId
     * @param AddPipelineRelationsRequest $request        AddPipelineRelationsRequest
     * @param string[]                    $headers        map
     * @param RuntimeOptions              $runtime        runtime options for this request RuntimeOptions
     *
     * @return AddPipelineRelationsResponse AddPipelineRelationsResponse
     */
    public function addPipelineRelationsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->relObjectIds)) {
            $query['relObjectIds'] = $request->relObjectIds;
        }
        if (!Utils::isUnset($request->relObjectType)) {
            $query['relObjectType'] = $request->relObjectType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddPipelineRelations',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRelations',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddPipelineRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加流水线关联
     *  *
     * @param string                      $organizationId
     * @param string                      $pipelineId
     * @param AddPipelineRelationsRequest $request        AddPipelineRelationsRequest
     *
     * @return AddPipelineRelationsResponse AddPipelineRelationsResponse
     */
    public function addPipelineRelations($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addPipelineRelationsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * @summary 添加代码库成员
     *  *
     * @param string                     $repositoryId
     * @param AddRepositoryMemberRequest $request      AddRepositoryMemberRequest
     * @param string[]                   $headers      map
     * @param RuntimeOptions             $runtime      runtime options for this request RuntimeOptions
     *
     * @return AddRepositoryMemberResponse AddRepositoryMemberResponse
     */
    public function addRepositoryMemberWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->accessLevel)) {
            $body['accessLevel'] = $request->accessLevel;
        }
        if (!Utils::isUnset($request->aliyunPks)) {
            $body['aliyunPks'] = $request->aliyunPks;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddRepositoryMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/members',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddRepositoryMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加代码库成员
     *  *
     * @param string                     $repositoryId
     * @param AddRepositoryMemberRequest $request      AddRepositoryMemberRequest
     *
     * @return AddRepositoryMemberResponse AddRepositoryMemberResponse
     */
    public function addRepositoryMember($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addRepositoryMemberWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 添加代码库Webhook
     *  *
     * @param string            $repositoryId
     * @param AddWebhookRequest $request      AddWebhookRequest
     * @param string[]          $headers      map
     * @param RuntimeOptions    $runtime      runtime options for this request RuntimeOptions
     *
     * @return AddWebhookResponse AddWebhookResponse
     */
    public function addWebhookWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->enableSslVerification)) {
            $body['enableSslVerification'] = $request->enableSslVerification;
        }
        if (!Utils::isUnset($request->mergeRequestsEvents)) {
            $body['mergeRequestsEvents'] = $request->mergeRequestsEvents;
        }
        if (!Utils::isUnset($request->noteEvents)) {
            $body['noteEvents'] = $request->noteEvents;
        }
        if (!Utils::isUnset($request->pushEvents)) {
            $body['pushEvents'] = $request->pushEvents;
        }
        if (!Utils::isUnset($request->secretToken)) {
            $body['secretToken'] = $request->secretToken;
        }
        if (!Utils::isUnset($request->tagPushEvents)) {
            $body['tagPushEvents'] = $request->tagPushEvents;
        }
        if (!Utils::isUnset($request->url)) {
            $body['url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddWebhook',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/webhooks/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加代码库Webhook
     *  *
     * @param string            $repositoryId
     * @param AddWebhookRequest $request      AddWebhookRequest
     *
     * @return AddWebhookResponse AddWebhookResponse
     */
    public function addWebhook($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addWebhookWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 关闭代码评审
     *  *
     * @param string                   $repositoryId
     * @param string                   $localId
     * @param CloseMergeRequestRequest $request      CloseMergeRequestRequest
     * @param string[]                 $headers      map
     * @param RuntimeOptions           $runtime      runtime options for this request RuntimeOptions
     *
     * @return CloseMergeRequestResponse CloseMergeRequestResponse
     */
    public function closeMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CloseMergeRequest',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/merge_requests/' . OpenApiUtilClient::getEncodeParam($localId) . '/close',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloseMergeRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 关闭代码评审
     *  *
     * @param string                   $repositoryId
     * @param string                   $localId
     * @param CloseMergeRequestRequest $request      CloseMergeRequestRequest
     *
     * @return CloseMergeRequestResponse CloseMergeRequestResponse
     */
    public function closeMergeRequest($repositoryId, $localId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->closeMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime);
    }

    /**
     * @summary 添加应用成员
     *  *
     * @param string                  $appName
     * @param CreateAppMembersRequest $request CreateAppMembersRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppMembersResponse CreateAppMembersResponse
     */
    public function createAppMembersWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->playerList)) {
            $body['playerList'] = $request->playerList;
        }
        if (!Utils::isUnset($request->roleNames)) {
            $body['roleNames'] = $request->roleNames;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAppMembers',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/appstack/apps/' . OpenApiUtilClient::getEncodeParam($appName) . '/members',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return CreateAppMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加应用成员
     *  *
     * @param string                  $appName
     * @param CreateAppMembersRequest $request CreateAppMembersRequest
     *
     * @return CreateAppMembersResponse CreateAppMembersResponse
     */
    public function createAppMembers($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppMembersWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * @summary 创建分支
     *  *
     * @param string              $repositoryId
     * @param CreateBranchRequest $request      CreateBranchRequest
     * @param string[]            $headers      map
     * @param RuntimeOptions      $runtime      runtime options for this request RuntimeOptions
     *
     * @return CreateBranchResponse CreateBranchResponse
     */
    public function createBranchWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->branchName)) {
            $body['branchName'] = $request->branchName;
        }
        if (!Utils::isUnset($request->ref)) {
            $body['ref'] = $request->ref;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateBranch',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/branches',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateBranchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建分支
     *  *
     * @param string              $repositoryId
     * @param CreateBranchRequest $request      CreateBranchRequest
     *
     * @return CreateBranchResponse CreateBranchResponse
     */
    public function createBranch($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createBranchWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建变更
     *  *
     * @param string                     $appName
     * @param CreateChangeRequestRequest $request CreateChangeRequestRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateChangeRequestResponse CreateChangeRequestResponse
     */
    public function createChangeRequestWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->appCodeRepoSn)) {
            $body['appCodeRepoSn'] = $request->appCodeRepoSn;
        }
        if (!Utils::isUnset($request->autoDeleteBranchWhenEnd)) {
            $body['autoDeleteBranchWhenEnd'] = $request->autoDeleteBranchWhenEnd;
        }
        if (!Utils::isUnset($request->branchName)) {
            $body['branchName'] = $request->branchName;
        }
        if (!Utils::isUnset($request->createBranch)) {
            $body['createBranch'] = $request->createBranch;
        }
        if (!Utils::isUnset($request->ownerAccountId)) {
            $body['ownerAccountId'] = $request->ownerAccountId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $body['ownerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateChangeRequest',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/appstack/apps/' . OpenApiUtilClient::getEncodeParam($appName) . '/changeRequests',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateChangeRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建变更
     *  *
     * @param string                     $appName
     * @param CreateChangeRequestRequest $request CreateChangeRequestRequest
     *
     * @return CreateChangeRequestResponse CreateChangeRequestResponse
     */
    public function createChangeRequest($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createChangeRequestWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * @summary 添加检查运行记录
     *  *
     * @param CreateCheckRunRequest $request CreateCheckRunRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCheckRunResponse CreateCheckRunResponse
     */
    public function createCheckRunWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->repositoryIdentity)) {
            $query['repositoryIdentity'] = $request->repositoryIdentity;
        }
        $body = [];
        if (!Utils::isUnset($request->annotations)) {
            $body['annotations'] = $request->annotations;
        }
        if (!Utils::isUnset($request->completedAt)) {
            $body['completedAt'] = $request->completedAt;
        }
        if (!Utils::isUnset($request->conclusion)) {
            $body['conclusion'] = $request->conclusion;
        }
        if (!Utils::isUnset($request->detailsUrl)) {
            $body['detailsUrl'] = $request->detailsUrl;
        }
        if (!Utils::isUnset($request->externalId)) {
            $body['externalId'] = $request->externalId;
        }
        if (!Utils::isUnset($request->headSha)) {
            $body['headSha'] = $request->headSha;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->output)) {
            $body['output'] = $request->output;
        }
        if (!Utils::isUnset($request->startedAt)) {
            $body['startedAt'] = $request->startedAt;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCheckRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/check_runs/create_check_run',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCheckRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加检查运行记录
     *  *
     * @param CreateCheckRunRequest $request CreateCheckRunRequest
     *
     * @return CreateCheckRunResponse CreateCheckRunResponse
     */
    public function createCheckRun($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCheckRunWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建评论
     *  *
     * @param CreateCommentRequest $request CreateCommentRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCommentResponse CreateCommentResponse
     */
    public function createCommentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->localId)) {
            $query['localId'] = $request->localId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->repositoryIdentity)) {
            $query['repositoryIdentity'] = $request->repositoryIdentity;
        }
        $body = [];
        if (!Utils::isUnset($request->commentType)) {
            $body['commentType'] = $request->commentType;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->draft)) {
            $body['draft'] = $request->draft;
        }
        if (!Utils::isUnset($request->filePath)) {
            $body['filePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->lineNumber)) {
            $body['lineNumber'] = $request->lineNumber;
        }
        if (!Utils::isUnset($request->parentCommentBizId)) {
            $body['parentCommentBizId'] = $request->parentCommentBizId;
        }
        if (!Utils::isUnset($request->patchSetBizId)) {
            $body['patchSetBizId'] = $request->patchSetBizId;
        }
        if (!Utils::isUnset($request->resolved)) {
            $body['resolved'] = $request->resolved;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateComment',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/code_reviews/comments/create_comment',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCommentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建评论
     *  *
     * @param CreateCommentRequest $request CreateCommentRequest
     *
     * @return CreateCommentResponse CreateCommentResponse
     */
    public function createComment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCommentWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建提交状态记录
     *  *
     * @param CreateCommitStatusRequest $request CreateCommitStatusRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCommitStatusResponse CreateCommitStatusResponse
     */
    public function createCommitStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->repositoryIdentity)) {
            $query['repositoryIdentity'] = $request->repositoryIdentity;
        }
        if (!Utils::isUnset($request->sha)) {
            $query['sha'] = $request->sha;
        }
        $body = [];
        if (!Utils::isUnset($request->context)) {
            $body['context'] = $request->context;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->state)) {
            $body['state'] = $request->state;
        }
        if (!Utils::isUnset($request->targetUrl)) {
            $body['targetUrl'] = $request->targetUrl;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCommitStatus',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/repository/commit_statuses/create_commit_status',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCommitStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建提交状态记录
     *  *
     * @param CreateCommitStatusRequest $request CreateCommitStatusRequest
     *
     * @return CreateCommitStatusResponse CreateCommitStatusResponse
     */
    public function createCommitStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCommitStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 单提交变更多个文件
     *  *
     * @param CreateCommitWithMultipleFilesRequest $request CreateCommitWithMultipleFilesRequest
     * @param string[]                             $headers map
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCommitWithMultipleFilesResponse CreateCommitWithMultipleFilesResponse
     */
    public function createCommitWithMultipleFilesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->repositoryIdentity)) {
            $query['repositoryIdentity'] = $request->repositoryIdentity;
        }
        $body = [];
        if (!Utils::isUnset($request->actions)) {
            $body['actions'] = $request->actions;
        }
        if (!Utils::isUnset($request->branch)) {
            $body['branch'] = $request->branch;
        }
        if (!Utils::isUnset($request->commitMessage)) {
            $body['commitMessage'] = $request->commitMessage;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCommitWithMultipleFiles',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/repository/commits/files',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCommitWithMultipleFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 单提交变更多个文件
     *  *
     * @param CreateCommitWithMultipleFilesRequest $request CreateCommitWithMultipleFilesRequest
     *
     * @return CreateCommitWithMultipleFilesResponse CreateCommitWithMultipleFilesResponse
     */
    public function createCommitWithMultipleFiles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCommitWithMultipleFilesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建部署密钥
     *  *
     * @param string                 $repositoryId
     * @param CreateDeployKeyRequest $request      CreateDeployKeyRequest
     * @param string[]               $headers      map
     * @param RuntimeOptions         $runtime      runtime options for this request RuntimeOptions
     *
     * @return CreateDeployKeyResponse CreateDeployKeyResponse
     */
    public function createDeployKeyWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->key)) {
            $body['key'] = $request->key;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDeployKey',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/keys/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDeployKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建部署密钥
     *  *
     * @param string                 $repositoryId
     * @param CreateDeployKeyRequest $request      CreateDeployKeyRequest
     *
     * @return CreateDeployKeyResponse CreateDeployKeyResponse
     */
    public function createDeployKey($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDeployKeyWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建文件
     *  *
     * @param string            $repositoryId
     * @param CreateFileRequest $request      CreateFileRequest
     * @param string[]          $headers      map
     * @param RuntimeOptions    $runtime      runtime options for this request RuntimeOptions
     *
     * @return CreateFileResponse CreateFileResponse
     */
    public function createFileWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->branchName)) {
            $body['branchName'] = $request->branchName;
        }
        if (!Utils::isUnset($request->commitMessage)) {
            $body['commitMessage'] = $request->commitMessage;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->encoding)) {
            $body['encoding'] = $request->encoding;
        }
        if (!Utils::isUnset($request->filePath)) {
            $body['filePath'] = $request->filePath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFile',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/files',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建文件
     *  *
     * @param string            $repositoryId
     * @param CreateFileRequest $request      CreateFileRequest
     *
     * @return CreateFileResponse CreateFileResponse
     */
    public function createFile($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFileWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建标签
     *  *
     * @param string               $organizationId
     * @param CreateFlowTagRequest $request        CreateFlowTagRequest
     * @param string[]             $headers        map
     * @param RuntimeOptions       $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreateFlowTagResponse CreateFlowTagResponse
     */
    public function createFlowTagWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->color)) {
            $query['color'] = $request->color;
        }
        if (!Utils::isUnset($request->flowTagGroupId)) {
            $query['flowTagGroupId'] = $request->flowTagGroupId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowTag',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/flow/tags',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFlowTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建标签
     *  *
     * @param string               $organizationId
     * @param CreateFlowTagRequest $request        CreateFlowTagRequest
     *
     * @return CreateFlowTagResponse CreateFlowTagResponse
     */
    public function createFlowTag($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFlowTagWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建标签分类
     *  *
     * @param string                    $organizationId
     * @param CreateFlowTagGroupRequest $request        CreateFlowTagGroupRequest
     * @param string[]                  $headers        map
     * @param RuntimeOptions            $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreateFlowTagGroupResponse CreateFlowTagGroupResponse
     */
    public function createFlowTagGroupWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFlowTagGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/flow/tagGroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFlowTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建标签分类
     *  *
     * @param string                    $organizationId
     * @param CreateFlowTagGroupRequest $request        CreateFlowTagGroupRequest
     *
     * @return CreateFlowTagGroupResponse CreateFlowTagGroupResponse
     */
    public function createFlowTagGroup($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFlowTagGroupWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建主机组
     *  *
     * @param string                 $organizationId
     * @param CreateHostGroupRequest $request        CreateHostGroupRequest
     * @param string[]               $headers        map
     * @param RuntimeOptions         $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreateHostGroupResponse CreateHostGroupResponse
     */
    public function createHostGroupWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aliyunRegion)) {
            $body['aliyunRegion'] = $request->aliyunRegion;
        }
        if (!Utils::isUnset($request->ecsLabelKey)) {
            $body['ecsLabelKey'] = $request->ecsLabelKey;
        }
        if (!Utils::isUnset($request->ecsLabelValue)) {
            $body['ecsLabelValue'] = $request->ecsLabelValue;
        }
        if (!Utils::isUnset($request->ecsType)) {
            $body['ecsType'] = $request->ecsType;
        }
        if (!Utils::isUnset($request->envId)) {
            $body['envId'] = $request->envId;
        }
        if (!Utils::isUnset($request->machineInfos)) {
            $body['machineInfos'] = $request->machineInfos;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceConnectionId)) {
            $body['serviceConnectionId'] = $request->serviceConnectionId;
        }
        if (!Utils::isUnset($request->tagIds)) {
            $body['tagIds'] = $request->tagIds;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateHostGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/hostGroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建主机组
     *  *
     * @param string                 $organizationId
     * @param CreateHostGroupRequest $request        CreateHostGroupRequest
     *
     * @return CreateHostGroupResponse CreateHostGroupResponse
     */
    public function createHostGroup($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHostGroupWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建代码评审
     *  *
     * @param string                    $repositoryId
     * @param CreateMergeRequestRequest $request      CreateMergeRequestRequest
     * @param string[]                  $headers      map
     * @param RuntimeOptions            $runtime      runtime options for this request RuntimeOptions
     *
     * @return CreateMergeRequestResponse CreateMergeRequestResponse
     */
    public function createMergeRequestWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->createFrom)) {
            $body['createFrom'] = $request->createFrom;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->reviewerIds)) {
            $body['reviewerIds'] = $request->reviewerIds;
        }
        if (!Utils::isUnset($request->sourceBranch)) {
            $body['sourceBranch'] = $request->sourceBranch;
        }
        if (!Utils::isUnset($request->sourceProjectId)) {
            $body['sourceProjectId'] = $request->sourceProjectId;
        }
        if (!Utils::isUnset($request->targetBranch)) {
            $body['targetBranch'] = $request->targetBranch;
        }
        if (!Utils::isUnset($request->targetProjectId)) {
            $body['targetProjectId'] = $request->targetProjectId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        if (!Utils::isUnset($request->workItemIds)) {
            $body['workItemIds'] = $request->workItemIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMergeRequest',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/merge_requests',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateMergeRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建代码评审
     *  *
     * @param string                    $repositoryId
     * @param CreateMergeRequestRequest $request      CreateMergeRequestRequest
     *
     * @return CreateMergeRequestResponse CreateMergeRequestResponse
     */
    public function createMergeRequest($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMergeRequestWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建OAuth令牌
     *  *
     * @param CreateOAuthTokenRequest $request CreateOAuthTokenRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOAuthTokenResponse CreateOAuthTokenResponse
     */
    public function createOAuthTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientId)) {
            $body['clientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientSecret)) {
            $body['clientSecret'] = $request->clientSecret;
        }
        if (!Utils::isUnset($request->code)) {
            $body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->grantType)) {
            $body['grantType'] = $request->grantType;
        }
        if (!Utils::isUnset($request->login)) {
            $body['login'] = $request->login;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOAuthToken',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/login/oauth/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateOAuthTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建OAuth令牌
     *  *
     * @param CreateOAuthTokenRequest $request CreateOAuthTokenRequest
     *
     * @return CreateOAuthTokenResponse CreateOAuthTokenResponse
     */
    public function createOAuthToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOAuthTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建流水线。
     *  *
     * @param string                $organizationId
     * @param CreatePipelineRequest $request        CreatePipelineRequest
     * @param string[]              $headers        map
     * @param RuntimeOptions        $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreatePipelineResponse CreatePipelineResponse
     */
    public function createPipelineWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePipeline',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建流水线。
     *  *
     * @param string                $organizationId
     * @param CreatePipelineRequest $request        CreatePipelineRequest
     *
     * @return CreatePipelineResponse CreatePipelineResponse
     */
    public function createPipeline($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPipelineWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建流水线分组
     *  *
     * @param string                     $organizationId
     * @param CreatePipelineGroupRequest $request        CreatePipelineGroupRequest
     * @param string[]                   $headers        map
     * @param RuntimeOptions             $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreatePipelineGroupResponse CreatePipelineGroupResponse
     */
    public function createPipelineGroupWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePipelineGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelineGroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePipelineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建流水线分组
     *  *
     * @param string                     $organizationId
     * @param CreatePipelineGroupRequest $request        CreatePipelineGroupRequest
     *
     * @return CreatePipelineGroupResponse CreatePipelineGroupResponse
     */
    public function createPipelineGroup($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPipelineGroupWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建项目
     *  *
     * @param string               $organizationId
     * @param CreateProjectRequest $request        CreateProjectRequest
     * @param string[]             $headers        map
     * @param RuntimeOptions       $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreateProjectResponse CreateProjectResponse
     */
    public function createProjectWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->customCode)) {
            $body['customCode'] = $request->customCode;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->templateIdentifier)) {
            $body['templateIdentifier'] = $request->templateIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProject',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/projects/createProject',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建项目
     *  *
     * @param string               $organizationId
     * @param CreateProjectRequest $request        CreateProjectRequest
     *
     * @return CreateProjectResponse CreateProjectResponse
     */
    public function createProject($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建代码库Label
     *  *
     * @param CreateProjectLabelRequest $request CreateProjectLabelRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProjectLabelResponse CreateProjectLabelResponse
     */
    public function createProjectLabelWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->repositoryIdentity)) {
            $query['repositoryIdentity'] = $request->repositoryIdentity;
        }
        $body = [];
        if (!Utils::isUnset($request->color)) {
            $body['color'] = $request->color;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProjectLabel',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/labels',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProjectLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建代码库Label
     *  *
     * @param CreateProjectLabelRequest $request CreateProjectLabelRequest
     *
     * @return CreateProjectLabelResponse CreateProjectLabelResponse
     */
    public function createProjectLabel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectLabelWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建保护分支
     *  *
     * @param string                      $repositoryId
     * @param CreateProtectdBranchRequest $request      CreateProtectdBranchRequest
     * @param string[]                    $headers      map
     * @param RuntimeOptions              $runtime      runtime options for this request RuntimeOptions
     *
     * @return CreateProtectdBranchResponse CreateProtectdBranchResponse
     */
    public function createProtectdBranchWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->allowMergeRoles)) {
            $body['allowMergeRoles'] = $request->allowMergeRoles;
        }
        if (!Utils::isUnset($request->allowMergeUserIds)) {
            $body['allowMergeUserIds'] = $request->allowMergeUserIds;
        }
        if (!Utils::isUnset($request->allowPushRoles)) {
            $body['allowPushRoles'] = $request->allowPushRoles;
        }
        if (!Utils::isUnset($request->allowPushUserIds)) {
            $body['allowPushUserIds'] = $request->allowPushUserIds;
        }
        if (!Utils::isUnset($request->branch)) {
            $body['branch'] = $request->branch;
        }
        if (!Utils::isUnset($request->id)) {
            $body['id'] = $request->id;
        }
        if (!Utils::isUnset($request->mergeRequestSetting)) {
            $body['mergeRequestSetting'] = $request->mergeRequestSetting;
        }
        if (!Utils::isUnset($request->testSettingDTO)) {
            $body['testSettingDTO'] = $request->testSettingDTO;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProtectdBranch',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/protect_branches',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProtectdBranchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建保护分支
     *  *
     * @param string                      $repositoryId
     * @param CreateProtectdBranchRequest $request      CreateProtectdBranchRequest
     *
     * @return CreateProtectdBranchResponse CreateProtectdBranchResponse
     */
    public function createProtectdBranch($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProtectdBranchWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建推送规则
     *  *
     * @param string                $repositoryId
     * @param CreatePushRuleRequest $request      CreatePushRuleRequest
     * @param string[]              $headers      map
     * @param RuntimeOptions        $runtime      runtime options for this request RuntimeOptions
     *
     * @return CreatePushRuleResponse CreatePushRuleResponse
     */
    public function createPushRuleWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->ruleInfos)) {
            $body['ruleInfos'] = $request->ruleInfos;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePushRule',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/push_rule',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreatePushRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建推送规则
     *  *
     * @param string                $repositoryId
     * @param CreatePushRuleRequest $request      CreatePushRuleRequest
     *
     * @return CreatePushRuleResponse CreatePushRuleResponse
     */
    public function createPushRule($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPushRuleWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建(导入)代码库
     *  *
     * @param CreateRepositoryRequest $request CreateRepositoryRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRepositoryResponse CreateRepositoryResponse
     */
    public function createRepositoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->createParentPath)) {
            $query['createParentPath'] = $request->createParentPath;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->sync)) {
            $query['sync'] = $request->sync;
        }
        $body = [];
        if (!Utils::isUnset($request->avatarUrl)) {
            $body['avatarUrl'] = $request->avatarUrl;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->gitignoreType)) {
            $body['gitignoreType'] = $request->gitignoreType;
        }
        if (!Utils::isUnset($request->importAccount)) {
            $body['importAccount'] = $request->importAccount;
        }
        if (!Utils::isUnset($request->importDemoProject)) {
            $body['importDemoProject'] = $request->importDemoProject;
        }
        if (!Utils::isUnset($request->importRepoType)) {
            $body['importRepoType'] = $request->importRepoType;
        }
        if (!Utils::isUnset($request->importToken)) {
            $body['importToken'] = $request->importToken;
        }
        if (!Utils::isUnset($request->importTokenEncrypted)) {
            $body['importTokenEncrypted'] = $request->importTokenEncrypted;
        }
        if (!Utils::isUnset($request->importUrl)) {
            $body['importUrl'] = $request->importUrl;
        }
        if (!Utils::isUnset($request->initStandardService)) {
            $body['initStandardService'] = $request->initStandardService;
        }
        if (!Utils::isUnset($request->isCryptoEnabled)) {
            $body['isCryptoEnabled'] = $request->isCryptoEnabled;
        }
        if (!Utils::isUnset($request->localImportUrl)) {
            $body['localImportUrl'] = $request->localImportUrl;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->namespaceId)) {
            $body['namespaceId'] = $request->namespaceId;
        }
        if (!Utils::isUnset($request->path)) {
            $body['path'] = $request->path;
        }
        if (!Utils::isUnset($request->readmeType)) {
            $body['readmeType'] = $request->readmeType;
        }
        if (!Utils::isUnset($request->visibilityLevel)) {
            $body['visibilityLevel'] = $request->visibilityLevel;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRepository',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建(导入)代码库
     *  *
     * @param CreateRepositoryRequest $request CreateRepositoryRequest
     *
     * @return CreateRepositoryResponse CreateRepositoryResponse
     */
    public function createRepository($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRepositoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建代码组
     *  *
     * @param CreateRepositoryGroupRequest $request CreateRepositoryGroupRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRepositoryGroupResponse CreateRepositoryGroupResponse
     */
    public function createRepositoryGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->avatarUrl)) {
            $body['avatarUrl'] = $request->avatarUrl;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentId)) {
            $body['parentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->path)) {
            $body['path'] = $request->path;
        }
        if (!Utils::isUnset($request->visibilityLevel)) {
            $body['visibilityLevel'] = $request->visibilityLevel;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRepositoryGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/groups/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRepositoryGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建代码组
     *  *
     * @param CreateRepositoryGroupRequest $request CreateRepositoryGroupRequest
     *
     * @return CreateRepositoryGroupResponse CreateRepositoryGroupResponse
     */
    public function createRepositoryGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRepositoryGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 插入资源成员
     *  *
     * @param string                      $organizationId
     * @param string                      $resourceType
     * @param string                      $resourceId
     * @param CreateResourceMemberRequest $request        CreateResourceMemberRequest
     * @param string[]                    $headers        map
     * @param RuntimeOptions              $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreateResourceMemberResponse CreateResourceMemberResponse
     */
    public function createResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['accountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->roleName)) {
            $body['roleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateResourceMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/' . OpenApiUtilClient::getEncodeParam($resourceType) . '/' . OpenApiUtilClient::getEncodeParam($resourceId) . '/members',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateResourceMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 插入资源成员
     *  *
     * @param string                      $organizationId
     * @param string                      $resourceType
     * @param string                      $resourceId
     * @param CreateResourceMemberRequest $request        CreateResourceMemberRequest
     *
     * @return CreateResourceMemberResponse CreateResourceMemberResponse
     */
    public function createResourceMember($organizationId, $resourceType, $resourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建服务授权
     *  *
     * @param string                   $organizationId
     * @param CreateServiceAuthRequest $request        CreateServiceAuthRequest
     * @param string[]                 $headers        map
     * @param RuntimeOptions           $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreateServiceAuthResponse CreateServiceAuthResponse
     */
    public function createServiceAuthWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceAuthType)) {
            $query['serviceAuthType'] = $request->serviceAuthType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceAuth',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/serviceAuths',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateServiceAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建服务授权
     *  *
     * @param string                   $organizationId
     * @param CreateServiceAuthRequest $request        CreateServiceAuthRequest
     *
     * @return CreateServiceAuthResponse CreateServiceAuthResponse
     */
    public function createServiceAuth($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceAuthWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建服务连接
     *  *
     * @param string                         $organizationId
     * @param CreateServiceConnectionRequest $request        CreateServiceConnectionRequest
     * @param string[]                       $headers        map
     * @param RuntimeOptions                 $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreateServiceConnectionResponse CreateServiceConnectionResponse
     */
    public function createServiceConnectionWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authType)) {
            $body['authType'] = $request->authType;
        }
        if (!Utils::isUnset($request->connectionName)) {
            $body['connectionName'] = $request->connectionName;
        }
        if (!Utils::isUnset($request->connectionType)) {
            $body['connectionType'] = $request->connectionType;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->serviceAuthId)) {
            $body['serviceAuthId'] = $request->serviceAuthId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceConnection',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/createServiceConnection',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateServiceConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建服务连接
     *  *
     * @param string                         $organizationId
     * @param CreateServiceConnectionRequest $request        CreateServiceConnectionRequest
     *
     * @return CreateServiceConnectionResponse CreateServiceConnectionResponse
     */
    public function createServiceConnection($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceConnectionWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建用户名密码类型的证书
     *  *
     * @param string                         $organizationId
     * @param CreateServiceCredentialRequest $request        CreateServiceCredentialRequest
     * @param string[]                       $headers        map
     * @param RuntimeOptions                 $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreateServiceCredentialResponse CreateServiceCredentialResponse
     */
    public function createServiceCredentialWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->password)) {
            $body['password'] = $request->password;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->username)) {
            $body['username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceCredential',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/serviceCredentials',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateServiceCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建用户名密码类型的证书
     *  *
     * @param string                         $organizationId
     * @param CreateServiceCredentialRequest $request        CreateServiceCredentialRequest
     *
     * @return CreateServiceCredentialResponse CreateServiceCredentialResponse
     */
    public function createServiceCredential($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceCredentialWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建迭代
     *  *
     * @param string              $organizationId
     * @param CreateSprintRequest $request        CreateSprintRequest
     * @param string[]            $headers        map
     * @param RuntimeOptions      $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreateSprintResponse CreateSprintResponse
     */
    public function createSprintWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endDate)) {
            $body['endDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->spaceIdentifier)) {
            $body['spaceIdentifier'] = $request->spaceIdentifier;
        }
        if (!Utils::isUnset($request->staffIds)) {
            $body['staffIds'] = $request->staffIds;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['startDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSprint',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/sprints/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSprintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建迭代
     *  *
     * @param string              $organizationId
     * @param CreateSprintRequest $request        CreateSprintRequest
     *
     * @return CreateSprintResponse CreateSprintResponse
     */
    public function createSprint($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSprintWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建企业公钥
     *  *
     * @param string         $organizationId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreateSshKeyResponse CreateSshKeyResponse
     */
    public function createSshKeyWithOptions($organizationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateSshKey',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/sshKey',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSshKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建企业公钥
     *  *
     * @param string $organizationId
     *
     * @return CreateSshKeyResponse CreateSshKeyResponse
     */
    public function createSshKey($organizationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSshKeyWithOptions($organizationId, $headers, $runtime);
    }

    /**
     * @summary 创建标签Tag
     *  *
     * @param string           $repositoryId
     * @param CreateTagRequest $request      CreateTagRequest
     * @param string[]         $headers      map
     * @param RuntimeOptions   $runtime      runtime options for this request RuntimeOptions
     *
     * @return CreateTagResponse CreateTagResponse
     */
    public function createTagWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->message)) {
            $body['message'] = $request->message;
        }
        if (!Utils::isUnset($request->ref)) {
            $body['ref'] = $request->ref;
        }
        if (!Utils::isUnset($request->tagName)) {
            $body['tagName'] = $request->tagName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTag',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/tags/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建标签Tag
     *  *
     * @param string           $repositoryId
     * @param CreateTagRequest $request      CreateTagRequest
     *
     * @return CreateTagResponse CreateTagResponse
     */
    public function createTag($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTagWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建测试用例
     *  *
     * @param string                $organizationId
     * @param CreateTestCaseRequest $request        CreateTestCaseRequest
     * @param string[]              $headers        map
     * @param RuntimeOptions        $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreateTestCaseResponse CreateTestCaseResponse
     */
    public function createTestCaseWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assignedTo)) {
            $body['assignedTo'] = $request->assignedTo;
        }
        if (!Utils::isUnset($request->directoryIdentifier)) {
            $body['directoryIdentifier'] = $request->directoryIdentifier;
        }
        if (!Utils::isUnset($request->fieldValueList)) {
            $body['fieldValueList'] = $request->fieldValueList;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->spaceIdentifier)) {
            $body['spaceIdentifier'] = $request->spaceIdentifier;
        }
        if (!Utils::isUnset($request->subject)) {
            $body['subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->testcaseStepContentInfo)) {
            $body['testcaseStepContentInfo'] = $request->testcaseStepContentInfo;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTestCase',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/testhub/testcase',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTestCaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建测试用例
     *  *
     * @param string                $organizationId
     * @param CreateTestCaseRequest $request        CreateTestCaseRequest
     *
     * @return CreateTestCaseResponse CreateTestCaseResponse
     */
    public function createTestCase($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTestCaseWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建SSH Key密钥
     *  *
     * @param CreateUserKeyRequest $request CreateUserKeyRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserKeyResponse CreateUserKeyResponse
     */
    public function createUserKeyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->expireTime)) {
            $body['expireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->keyScope)) {
            $body['keyScope'] = $request->keyScope;
        }
        if (!Utils::isUnset($request->publicKey)) {
            $body['publicKey'] = $request->publicKey;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateUserKey',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v3/user/keys/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateUserKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建SSH Key密钥
     *  *
     * @param CreateUserKeyRequest $request CreateUserKeyRequest
     *
     * @return CreateUserKeyResponse CreateUserKeyResponse
     */
    public function createUserKey($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUserKeyWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建变量组
     *  *
     * @param string                     $organizationId
     * @param CreateVariableGroupRequest $request        CreateVariableGroupRequest
     * @param string[]                   $headers        map
     * @param RuntimeOptions             $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreateVariableGroupResponse CreateVariableGroupResponse
     */
    public function createVariableGroupWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->variables)) {
            $body['variables'] = $request->variables;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVariableGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/variableGroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVariableGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建变量组
     *  *
     * @param string                     $organizationId
     * @param CreateVariableGroupRequest $request        CreateVariableGroupRequest
     *
     * @return CreateVariableGroupResponse CreateVariableGroupResponse
     */
    public function createVariableGroup($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVariableGroupWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 新建工作项
     *  *
     * @param string                $organizationId
     * @param CreateWorkitemRequest $request        CreateWorkitemRequest
     * @param string[]              $headers        map
     * @param RuntimeOptions        $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreateWorkitemResponse CreateWorkitemResponse
     */
    public function createWorkitemWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assignedTo)) {
            $body['assignedTo'] = $request->assignedTo;
        }
        if (!Utils::isUnset($request->category)) {
            $body['category'] = $request->category;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->descriptionFormat)) {
            $body['descriptionFormat'] = $request->descriptionFormat;
        }
        if (!Utils::isUnset($request->fieldValueList)) {
            $body['fieldValueList'] = $request->fieldValueList;
        }
        if (!Utils::isUnset($request->parent)) {
            $body['parent'] = $request->parent;
        }
        if (!Utils::isUnset($request->participant)) {
            $body['participant'] = $request->participant;
        }
        if (!Utils::isUnset($request->space)) {
            $body['space'] = $request->space;
        }
        if (!Utils::isUnset($request->spaceIdentifier)) {
            $body['spaceIdentifier'] = $request->spaceIdentifier;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $body['spaceType'] = $request->spaceType;
        }
        if (!Utils::isUnset($request->sprint)) {
            $body['sprint'] = $request->sprint;
        }
        if (!Utils::isUnset($request->subject)) {
            $body['subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->tracker)) {
            $body['tracker'] = $request->tracker;
        }
        if (!Utils::isUnset($request->verifier)) {
            $body['verifier'] = $request->verifier;
        }
        if (!Utils::isUnset($request->workitemType)) {
            $body['workitemType'] = $request->workitemType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkitem',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateWorkitemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新建工作项
     *  *
     * @param string                $organizationId
     * @param CreateWorkitemRequest $request        CreateWorkitemRequest
     *
     * @return CreateWorkitemResponse CreateWorkitemResponse
     */
    public function createWorkitem($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkitemWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建一个评论
     *  *
     * @param string                       $organizationId
     * @param CreateWorkitemCommentRequest $request        CreateWorkitemCommentRequest
     * @param string[]                     $headers        map
     * @param RuntimeOptions               $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreateWorkitemCommentResponse CreateWorkitemCommentResponse
     */
    public function createWorkitemCommentWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->formatType)) {
            $body['formatType'] = $request->formatType;
        }
        if (!Utils::isUnset($request->parentId)) {
            $body['parentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->workitemIdentifier)) {
            $body['workitemIdentifier'] = $request->workitemIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkitemComment',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/comment',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateWorkitemCommentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建一个评论
     *  *
     * @param string                       $organizationId
     * @param CreateWorkitemCommentRequest $request        CreateWorkitemCommentRequest
     *
     * @return CreateWorkitemCommentResponse CreateWorkitemCommentResponse
     */
    public function createWorkitemComment($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkitemCommentWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 登记预计工时
     *  *
     * @param string                        $organizationId
     * @param CreateWorkitemEstimateRequest $request        CreateWorkitemEstimateRequest
     * @param string[]                      $headers        map
     * @param RuntimeOptions                $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreateWorkitemEstimateResponse CreateWorkitemEstimateResponse
     */
    public function createWorkitemEstimateWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->recordUserIdentifier)) {
            $body['recordUserIdentifier'] = $request->recordUserIdentifier;
        }
        if (!Utils::isUnset($request->spentTime)) {
            $body['spentTime'] = $request->spentTime;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->workitemIdentifier)) {
            $body['workitemIdentifier'] = $request->workitemIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkitemEstimate',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/estimate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateWorkitemEstimateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 登记预计工时
     *  *
     * @param string                        $organizationId
     * @param CreateWorkitemEstimateRequest $request        CreateWorkitemEstimateRequest
     *
     * @return CreateWorkitemEstimateResponse CreateWorkitemEstimateResponse
     */
    public function createWorkitemEstimate($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkitemEstimateWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 登记实际工时
     *  *
     * @param string                      $organizationId
     * @param CreateWorkitemRecordRequest $request        CreateWorkitemRecordRequest
     * @param string[]                    $headers        map
     * @param RuntimeOptions              $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreateWorkitemRecordResponse CreateWorkitemRecordResponse
     */
    public function createWorkitemRecordWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->actualTime)) {
            $body['actualTime'] = $request->actualTime;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->gmtEnd)) {
            $body['gmtEnd'] = $request->gmtEnd;
        }
        if (!Utils::isUnset($request->gmtStart)) {
            $body['gmtStart'] = $request->gmtStart;
        }
        if (!Utils::isUnset($request->recordUserIdentifier)) {
            $body['recordUserIdentifier'] = $request->recordUserIdentifier;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        if (!Utils::isUnset($request->workitemIdentifier)) {
            $body['workitemIdentifier'] = $request->workitemIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkitemRecord',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/record',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateWorkitemRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 登记实际工时
     *  *
     * @param string                      $organizationId
     * @param CreateWorkitemRecordRequest $request        CreateWorkitemRecordRequest
     *
     * @return CreateWorkitemRecordResponse CreateWorkitemRecordResponse
     */
    public function createWorkitemRecord($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkitemRecordWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建工作项
     *  *
     * @param string                  $organizationId
     * @param CreateWorkitemV2Request $request        CreateWorkitemV2Request
     * @param string[]                $headers        map
     * @param RuntimeOptions          $runtime        runtime options for this request RuntimeOptions
     *
     * @return CreateWorkitemV2Response CreateWorkitemV2Response
     */
    public function createWorkitemV2WithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assignedTo)) {
            $body['assignedTo'] = $request->assignedTo;
        }
        if (!Utils::isUnset($request->category)) {
            $body['category'] = $request->category;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->fieldValueList)) {
            $body['fieldValueList'] = $request->fieldValueList;
        }
        if (!Utils::isUnset($request->parentIdentifier)) {
            $body['parentIdentifier'] = $request->parentIdentifier;
        }
        if (!Utils::isUnset($request->participants)) {
            $body['participants'] = $request->participants;
        }
        if (!Utils::isUnset($request->spaceIdentifier)) {
            $body['spaceIdentifier'] = $request->spaceIdentifier;
        }
        if (!Utils::isUnset($request->sprintIdentifier)) {
            $body['sprintIdentifier'] = $request->sprintIdentifier;
        }
        if (!Utils::isUnset($request->subject)) {
            $body['subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['tags'] = $request->tags;
        }
        if (!Utils::isUnset($request->trackers)) {
            $body['trackers'] = $request->trackers;
        }
        if (!Utils::isUnset($request->verifier)) {
            $body['verifier'] = $request->verifier;
        }
        if (!Utils::isUnset($request->versions)) {
            $body['versions'] = $request->versions;
        }
        if (!Utils::isUnset($request->workitemTypeIdentifier)) {
            $body['workitemTypeIdentifier'] = $request->workitemTypeIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkitemV2',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitem',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateWorkitemV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建工作项
     *  *
     * @param string                  $organizationId
     * @param CreateWorkitemV2Request $request        CreateWorkitemV2Request
     *
     * @return CreateWorkitemV2Response CreateWorkitemV2Response
     */
    public function createWorkitemV2($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkitemV2WithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建工作空间
     *  *
     * @param CreateWorkspaceRequest $request CreateWorkspaceRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWorkspaceResponse CreateWorkspaceResponse
     */
    public function createWorkspaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->codeUrl)) {
            $body['codeUrl'] = $request->codeUrl;
        }
        if (!Utils::isUnset($request->codeVersion)) {
            $body['codeVersion'] = $request->codeVersion;
        }
        if (!Utils::isUnset($request->filePath)) {
            $body['filePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->requestFrom)) {
            $body['requestFrom'] = $request->requestFrom;
        }
        if (!Utils::isUnset($request->resourceIdentifier)) {
            $body['resourceIdentifier'] = $request->resourceIdentifier;
        }
        if (!Utils::isUnset($request->reuse)) {
            $body['reuse'] = $request->reuse;
        }
        if (!Utils::isUnset($request->workspaceTemplate)) {
            $body['workspaceTemplate'] = $request->workspaceTemplate;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkspace',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/workspaces',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建工作空间
     *  *
     * @param CreateWorkspaceRequest $request CreateWorkspaceRequest
     *
     * @return CreateWorkspaceResponse CreateWorkspaceResponse
     */
    public function createWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除应用成员
     *  *
     * @param string                 $appName
     * @param DeleteAppMemberRequest $request DeleteAppMemberRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppMemberResponse DeleteAppMemberResponse
     */
    public function deleteAppMemberWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->subjectId)) {
            $query['subjectId'] = $request->subjectId;
        }
        if (!Utils::isUnset($request->subjectType)) {
            $query['subjectType'] = $request->subjectType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAppMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/appstack/apps/' . OpenApiUtilClient::getEncodeParam($appName) . '/members',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return DeleteAppMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除应用成员
     *  *
     * @param string                 $appName
     * @param DeleteAppMemberRequest $request DeleteAppMemberRequest
     *
     * @return DeleteAppMemberResponse DeleteAppMemberResponse
     */
    public function deleteAppMember($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAppMemberWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * @summary 删除分支
     *  *
     * @param string              $repositoryId
     * @param DeleteBranchRequest $request      DeleteBranchRequest
     * @param string[]            $headers      map
     * @param RuntimeOptions      $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteBranchResponse DeleteBranchResponse
     */
    public function deleteBranchWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->branchName)) {
            $query['branchName'] = $request->branchName;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBranch',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/branches/delete',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteBranchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除分支
     *  *
     * @param string              $repositoryId
     * @param DeleteBranchRequest $request      DeleteBranchRequest
     *
     * @return DeleteBranchResponse DeleteBranchResponse
     */
    public function deleteBranch($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBranchWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除文件
     *  *
     * @param string            $repositoryId
     * @param DeleteFileRequest $request      DeleteFileRequest
     * @param string[]          $headers      map
     * @param RuntimeOptions    $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteFileResponse DeleteFileResponse
     */
    public function deleteFileWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->branchName)) {
            $query['branchName'] = $request->branchName;
        }
        if (!Utils::isUnset($request->commitMessage)) {
            $query['commitMessage'] = $request->commitMessage;
        }
        if (!Utils::isUnset($request->filePath)) {
            $query['filePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFile',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/files/delete',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除文件
     *  *
     * @param string            $repositoryId
     * @param DeleteFileRequest $request      DeleteFileRequest
     *
     * @return DeleteFileResponse DeleteFileResponse
     */
    public function deleteFile($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFileWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除标签
     *  *
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return DeleteFlowTagResponse DeleteFlowTagResponse
     */
    public function deleteFlowTagWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowTag',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/flow/tags/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除标签
     *  *
     * @param string $organizationId
     * @param string $id
     *
     * @return DeleteFlowTagResponse DeleteFlowTagResponse
     */
    public function deleteFlowTag($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowTagWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @summary 删除标签分类
     *  *
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return DeleteFlowTagGroupResponse DeleteFlowTagGroupResponse
     */
    public function deleteFlowTagGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteFlowTagGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/flow/tagGroups/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除标签分类
     *  *
     * @param string $organizationId
     * @param string $id
     *
     * @return DeleteFlowTagGroupResponse DeleteFlowTagGroupResponse
     */
    public function deleteFlowTagGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowTagGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @summary 删除组成员
     *  *
     * @param string                   $groupId
     * @param DeleteGroupMemberRequest $request DeleteGroupMemberRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGroupMemberResponse DeleteGroupMemberResponse
     */
    public function deleteGroupMemberWithOptions($groupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->aliyunPk)) {
            $query['aliyunPk'] = $request->aliyunPk;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->memberType)) {
            $body['memberType'] = $request->memberType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroupMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/members/remove/aliyun_pk',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除组成员
     *  *
     * @param string                   $groupId
     * @param DeleteGroupMemberRequest $request DeleteGroupMemberRequest
     *
     * @return DeleteGroupMemberResponse DeleteGroupMemberResponse
     */
    public function deleteGroupMember($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGroupMemberWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除主机组
     *  *
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return DeleteHostGroupResponse DeleteHostGroupResponse
     */
    public function deleteHostGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteHostGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/hostGroups/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除主机组
     *  *
     * @param string $organizationId
     * @param string $id
     *
     * @return DeleteHostGroupResponse DeleteHostGroupResponse
     */
    public function deleteHostGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHostGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @summary 删除流水线
     *  *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return DeletePipelineResponse DeletePipelineResponse
     */
    public function deletePipelineWithOptions($organizationId, $pipelineId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeletePipeline',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除流水线
     *  *
     * @param string $organizationId
     * @param string $pipelineId
     *
     * @return DeletePipelineResponse DeletePipelineResponse
     */
    public function deletePipeline($organizationId, $pipelineId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelineWithOptions($organizationId, $pipelineId, $headers, $runtime);
    }

    /**
     * @summary 删除流水线分组
     *  *
     * @param string         $organizationId
     * @param string         $groupId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return DeletePipelineGroupResponse DeletePipelineGroupResponse
     */
    public function deletePipelineGroupWithOptions($organizationId, $groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeletePipelineGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelineGroups/' . OpenApiUtilClient::getEncodeParam($groupId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePipelineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除流水线分组
     *  *
     * @param string $organizationId
     * @param string $groupId
     *
     * @return DeletePipelineGroupResponse DeletePipelineGroupResponse
     */
    public function deletePipelineGroup($organizationId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelineGroupWithOptions($organizationId, $groupId, $headers, $runtime);
    }

    /**
     * @summary 删除流水线关联
     *  *
     * @param string                         $organizationId
     * @param string                         $pipelineId
     * @param DeletePipelineRelationsRequest $request        DeletePipelineRelationsRequest
     * @param string[]                       $headers        map
     * @param RuntimeOptions                 $runtime        runtime options for this request RuntimeOptions
     *
     * @return DeletePipelineRelationsResponse DeletePipelineRelationsResponse
     */
    public function deletePipelineRelationsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->relObjectId)) {
            $query['relObjectId'] = $request->relObjectId;
        }
        if (!Utils::isUnset($request->relObjectType)) {
            $query['relObjectType'] = $request->relObjectType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePipelineRelations',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRelations',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePipelineRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除流水线关联
     *  *
     * @param string                         $organizationId
     * @param string                         $pipelineId
     * @param DeletePipelineRelationsRequest $request        DeletePipelineRelationsRequest
     *
     * @return DeletePipelineRelationsResponse DeletePipelineRelationsResponse
     */
    public function deletePipelineRelations($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelineRelationsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除项目
     *  *
     * @param string               $organizationId
     * @param DeleteProjectRequest $request        DeleteProjectRequest
     * @param string[]             $headers        map
     * @param RuntimeOptions       $runtime        runtime options for this request RuntimeOptions
     *
     * @return DeleteProjectResponse DeleteProjectResponse
     */
    public function deleteProjectWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identifier)) {
            $query['identifier'] = $request->identifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProject',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/projects/delete',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除项目
     *  *
     * @param string               $organizationId
     * @param DeleteProjectRequest $request        DeleteProjectRequest
     *
     * @return DeleteProjectResponse DeleteProjectResponse
     */
    public function deleteProject($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除代码库Label
     *  *
     * @param string                    $labelId
     * @param DeleteProjectLabelRequest $request DeleteProjectLabelRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteProjectLabelResponse DeleteProjectLabelResponse
     */
    public function deleteProjectLabelWithOptions($labelId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->repositoryIdentity)) {
            $query['repositoryIdentity'] = $request->repositoryIdentity;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProjectLabel',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/labels/' . OpenApiUtilClient::getEncodeParam($labelId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProjectLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除代码库Label
     *  *
     * @param string                    $labelId
     * @param DeleteProjectLabelRequest $request DeleteProjectLabelRequest
     *
     * @return DeleteProjectLabelResponse DeleteProjectLabelResponse
     */
    public function deleteProjectLabel($labelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectLabelWithOptions($labelId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除保护分支
     *  *
     * @param string                       $repositoryId
     * @param string                       $protectedBranchId
     * @param DeleteProtectedBranchRequest $request           DeleteProtectedBranchRequest
     * @param string[]                     $headers           map
     * @param RuntimeOptions               $runtime           runtime options for this request RuntimeOptions
     *
     * @return DeleteProtectedBranchResponse DeleteProtectedBranchResponse
     */
    public function deleteProtectedBranchWithOptions($repositoryId, $protectedBranchId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProtectedBranch',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/protect_branches/' . OpenApiUtilClient::getEncodeParam($protectedBranchId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProtectedBranchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除保护分支
     *  *
     * @param string                       $repositoryId
     * @param string                       $protectedBranchId
     * @param DeleteProtectedBranchRequest $request           DeleteProtectedBranchRequest
     *
     * @return DeleteProtectedBranchResponse DeleteProtectedBranchResponse
     */
    public function deleteProtectedBranch($repositoryId, $protectedBranchId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProtectedBranchWithOptions($repositoryId, $protectedBranchId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除推送规则
     *  *
     * @param string                $repositoryId
     * @param string                $pushRuleId
     * @param DeletePushRuleRequest $request      DeletePushRuleRequest
     * @param string[]              $headers      map
     * @param RuntimeOptions        $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeletePushRuleResponse DeletePushRuleResponse
     */
    public function deletePushRuleWithOptions($repositoryId, $pushRuleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePushRule',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/push_rule/' . OpenApiUtilClient::getEncodeParam($pushRuleId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeletePushRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除推送规则
     *  *
     * @param string                $repositoryId
     * @param string                $pushRuleId
     * @param DeletePushRuleRequest $request      DeletePushRuleRequest
     *
     * @return DeletePushRuleResponse DeletePushRuleResponse
     */
    public function deletePushRule($repositoryId, $pushRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePushRuleWithOptions($repositoryId, $pushRuleId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除代码库
     *  *
     * @param string                  $repositoryId
     * @param DeleteRepositoryRequest $request      DeleteRepositoryRequest
     * @param string[]                $headers      map
     * @param RuntimeOptions          $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteRepositoryResponse DeleteRepositoryResponse
     */
    public function deleteRepositoryWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->reason)) {
            $body['reason'] = $request->reason;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRepository',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/remove',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除代码库
     *  *
     * @param string                  $repositoryId
     * @param DeleteRepositoryRequest $request      DeleteRepositoryRequest
     *
     * @return DeleteRepositoryResponse DeleteRepositoryResponse
     */
    public function deleteRepository($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepositoryWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除代码组
     *  *
     * @param string                       $groupId
     * @param DeleteRepositoryGroupRequest $request DeleteRepositoryGroupRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRepositoryGroupResponse DeleteRepositoryGroupResponse
     */
    public function deleteRepositoryGroupWithOptions($groupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->reason)) {
            $body['reason'] = $request->reason;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRepositoryGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/remove',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRepositoryGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除代码组
     *  *
     * @param string                       $groupId
     * @param DeleteRepositoryGroupRequest $request DeleteRepositoryGroupRequest
     *
     * @return DeleteRepositoryGroupResponse DeleteRepositoryGroupResponse
     */
    public function deleteRepositoryGroup($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepositoryGroupWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除代码库成员
     *  *
     * @param string                        $repositoryId
     * @param string                        $aliyunPk
     * @param DeleteRepositoryMemberRequest $request      DeleteRepositoryMemberRequest
     * @param string[]                      $headers      map
     * @param RuntimeOptions                $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteRepositoryMemberResponse DeleteRepositoryMemberResponse
     */
    public function deleteRepositoryMemberWithOptions($repositoryId, $aliyunPk, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->memberType)) {
            $body['memberType'] = $request->memberType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRepositoryMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/members/delete/' . OpenApiUtilClient::getEncodeParam($aliyunPk) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRepositoryMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除代码库成员
     *  *
     * @param string                        $repositoryId
     * @param string                        $aliyunPk
     * @param DeleteRepositoryMemberRequest $request      DeleteRepositoryMemberRequest
     *
     * @return DeleteRepositoryMemberResponse DeleteRepositoryMemberResponse
     */
    public function deleteRepositoryMember($repositoryId, $aliyunPk, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepositoryMemberWithOptions($repositoryId, $aliyunPk, $request, $headers, $runtime);
    }

    /**
     * @summary 删除代码库Webhook
     *  *
     * @param string                         $repositoryId
     * @param string                         $hookId
     * @param DeleteRepositoryWebhookRequest $request      DeleteRepositoryWebhookRequest
     * @param string[]                       $headers      map
     * @param RuntimeOptions                 $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteRepositoryWebhookResponse DeleteRepositoryWebhookResponse
     */
    public function deleteRepositoryWebhookWithOptions($repositoryId, $hookId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRepositoryWebhook',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/hooks/' . OpenApiUtilClient::getEncodeParam($hookId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRepositoryWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除代码库Webhook
     *  *
     * @param string                         $repositoryId
     * @param string                         $hookId
     * @param DeleteRepositoryWebhookRequest $request      DeleteRepositoryWebhookRequest
     *
     * @return DeleteRepositoryWebhookResponse DeleteRepositoryWebhookResponse
     */
    public function deleteRepositoryWebhook($repositoryId, $hookId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepositoryWebhookWithOptions($repositoryId, $hookId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除资源成员
     *  *
     * @param string         $organizationId
     * @param string         $resourceType
     * @param string         $resourceId
     * @param string         $accountId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return DeleteResourceMemberResponse DeleteResourceMemberResponse
     */
    public function deleteResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $accountId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/' . OpenApiUtilClient::getEncodeParam($resourceType) . '/' . OpenApiUtilClient::getEncodeParam($resourceId) . '/members/' . OpenApiUtilClient::getEncodeParam($accountId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除资源成员
     *  *
     * @param string $organizationId
     * @param string $resourceType
     * @param string $resourceId
     * @param string $accountId
     *
     * @return DeleteResourceMemberResponse DeleteResourceMemberResponse
     */
    public function deleteResourceMember($organizationId, $resourceType, $resourceId, $accountId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $accountId, $headers, $runtime);
    }

    /**
     * @summary 删除标签
     *  *
     * @param string           $repositoryId
     * @param DeleteTagRequest $request      DeleteTagRequest
     * @param string[]         $headers      map
     * @param RuntimeOptions   $runtime      runtime options for this request RuntimeOptions
     *
     * @return DeleteTagResponse DeleteTagResponse
     */
    public function deleteTagWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['tagName'] = $request->tagName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTag',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/tags/delete',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除标签
     *  *
     * @param string           $repositoryId
     * @param DeleteTagRequest $request      DeleteTagRequest
     *
     * @return DeleteTagResponse DeleteTagResponse
     */
    public function deleteTag($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTagWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除用户的SSH Key
     *  *
     * @param string               $keyId
     * @param DeleteUserKeyRequest $request DeleteUserKeyRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserKeyResponse DeleteUserKeyResponse
     */
    public function deleteUserKeyWithOptions($keyId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserKey',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v3/user/keys/' . OpenApiUtilClient::getEncodeParam($keyId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteUserKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除用户的SSH Key
     *  *
     * @param string               $keyId
     * @param DeleteUserKeyRequest $request DeleteUserKeyRequest
     *
     * @return DeleteUserKeyResponse DeleteUserKeyResponse
     */
    public function deleteUserKey($keyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUserKeyWithOptions($keyId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除变量组
     *  *
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return DeleteVariableGroupResponse DeleteVariableGroupResponse
     */
    public function deleteVariableGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteVariableGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/variableGroups/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteVariableGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除变量组
     *  *
     * @param string $organizationId
     * @param string $id
     *
     * @return DeleteVariableGroupResponse DeleteVariableGroupResponse
     */
    public function deleteVariableGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteVariableGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @summary 删除工作项
     *  *
     * @param string                $organizationId
     * @param DeleteWorkitemRequest $request        DeleteWorkitemRequest
     * @param string[]              $headers        map
     * @param RuntimeOptions        $runtime        runtime options for this request RuntimeOptions
     *
     * @return DeleteWorkitemResponse DeleteWorkitemResponse
     */
    public function deleteWorkitemWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identifier)) {
            $query['identifier'] = $request->identifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkitem',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitem/delete',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteWorkitemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除工作项
     *  *
     * @param string                $organizationId
     * @param DeleteWorkitemRequest $request        DeleteWorkitemRequest
     *
     * @return DeleteWorkitemResponse DeleteWorkitemResponse
     */
    public function deleteWorkitem($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkitemWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除所有评论
     *  *
     * @param string                          $organizationId
     * @param DeleteWorkitemAllCommentRequest $request        DeleteWorkitemAllCommentRequest
     * @param string[]                        $headers        map
     * @param RuntimeOptions                  $runtime        runtime options for this request RuntimeOptions
     *
     * @return DeleteWorkitemAllCommentResponse DeleteWorkitemAllCommentResponse
     */
    public function deleteWorkitemAllCommentWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identifier)) {
            $query['identifier'] = $request->identifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkitemAllComment',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/deleteAllComment',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteWorkitemAllCommentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除所有评论
     *  *
     * @param string                          $organizationId
     * @param DeleteWorkitemAllCommentRequest $request        DeleteWorkitemAllCommentRequest
     *
     * @return DeleteWorkitemAllCommentResponse DeleteWorkitemAllCommentResponse
     */
    public function deleteWorkitemAllComment($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkitemAllCommentWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除单条评论
     *  *
     * @param string                       $organizationId
     * @param DeleteWorkitemCommentRequest $request        DeleteWorkitemCommentRequest
     * @param string[]                     $headers        map
     * @param RuntimeOptions               $runtime        runtime options for this request RuntimeOptions
     *
     * @return DeleteWorkitemCommentResponse DeleteWorkitemCommentResponse
     */
    public function deleteWorkitemCommentWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->commentId)) {
            $body['commentId'] = $request->commentId;
        }
        if (!Utils::isUnset($request->identifier)) {
            $body['identifier'] = $request->identifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkitemComment',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/deleteComent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteWorkitemCommentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除单条评论
     *  *
     * @param string                       $organizationId
     * @param DeleteWorkitemCommentRequest $request        DeleteWorkitemCommentRequest
     *
     * @return DeleteWorkitemCommentResponse DeleteWorkitemCommentResponse
     */
    public function deleteWorkitemComment($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkitemCommentWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 启用部署密钥
     *  *
     * @param string                 $repositoryId
     * @param string                 $keyId
     * @param EnableDeployKeyRequest $request      EnableDeployKeyRequest
     * @param string[]               $headers      map
     * @param RuntimeOptions         $runtime      runtime options for this request RuntimeOptions
     *
     * @return EnableDeployKeyResponse EnableDeployKeyResponse
     */
    public function enableDeployKeyWithOptions($repositoryId, $keyId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableDeployKey',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/keys/' . OpenApiUtilClient::getEncodeParam($keyId) . '/enable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableDeployKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启用部署密钥
     *  *
     * @param string                 $repositoryId
     * @param string                 $keyId
     * @param EnableDeployKeyRequest $request      EnableDeployKeyRequest
     *
     * @return EnableDeployKeyResponse EnableDeployKeyResponse
     */
    public function enableDeployKey($repositoryId, $keyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableDeployKeyWithOptions($repositoryId, $keyId, $request, $headers, $runtime);
    }

    /**
     * @summary 导出Insight custom_value表
     *  *
     * @param string                          $organizationId
     * @param ExportInsightCustomValueRequest $request        ExportInsightCustomValueRequest
     * @param string[]                        $headers        map
     * @param RuntimeOptions                  $runtime        runtime options for this request RuntimeOptions
     *
     * @return ExportInsightCustomValueResponse ExportInsightCustomValueResponse
     */
    public function exportInsightCustomValueWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportInsightCustomValue',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/data/customValues',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExportInsightCustomValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出Insight custom_value表
     *  *
     * @param string                          $organizationId
     * @param ExportInsightCustomValueRequest $request        ExportInsightCustomValueRequest
     *
     * @return ExportInsightCustomValueResponse ExportInsightCustomValueResponse
     */
    public function exportInsightCustomValue($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightCustomValueWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 导出Insight expected_work_time表数据
     *  *
     * @param string                               $organizationId
     * @param ExportInsightExpectedWorkTimeRequest $request        ExportInsightExpectedWorkTimeRequest
     * @param string[]                             $headers        map
     * @param RuntimeOptions                       $runtime        runtime options for this request RuntimeOptions
     *
     * @return ExportInsightExpectedWorkTimeResponse ExportInsightExpectedWorkTimeResponse
     */
    public function exportInsightExpectedWorkTimeWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportInsightExpectedWorkTime',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/data/expectedWorkTimes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExportInsightExpectedWorkTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出Insight expected_work_time表数据
     *  *
     * @param string                               $organizationId
     * @param ExportInsightExpectedWorkTimeRequest $request        ExportInsightExpectedWorkTimeRequest
     *
     * @return ExportInsightExpectedWorkTimeResponse ExportInsightExpectedWorkTimeResponse
     */
    public function exportInsightExpectedWorkTime($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightExpectedWorkTimeWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 导出Insight field表
     *  *
     * @param string                    $organizationId
     * @param ExportInsightFieldRequest $request        ExportInsightFieldRequest
     * @param string[]                  $headers        map
     * @param RuntimeOptions            $runtime        runtime options for this request RuntimeOptions
     *
     * @return ExportInsightFieldResponse ExportInsightFieldResponse
     */
    public function exportInsightFieldWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportInsightField',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/data/fields',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExportInsightFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出Insight field表
     *  *
     * @param string                    $organizationId
     * @param ExportInsightFieldRequest $request        ExportInsightFieldRequest
     *
     * @return ExportInsightFieldResponse ExportInsightFieldResponse
     */
    public function exportInsightField($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightFieldWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 导出Insight space表数据
     *  *
     * @param string                    $organizationId
     * @param ExportInsightSpaceRequest $request        ExportInsightSpaceRequest
     * @param string[]                  $headers        map
     * @param RuntimeOptions            $runtime        runtime options for this request RuntimeOptions
     *
     * @return ExportInsightSpaceResponse ExportInsightSpaceResponse
     */
    public function exportInsightSpaceWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportInsightSpace',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/data/spaces',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExportInsightSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出Insight space表数据
     *  *
     * @param string                    $organizationId
     * @param ExportInsightSpaceRequest $request        ExportInsightSpaceRequest
     *
     * @return ExportInsightSpaceResponse ExportInsightSpaceResponse
     */
    public function exportInsightSpace($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightSpaceWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 导出Insight space_ref表数据
     *  *
     * @param string                       $organizationId
     * @param ExportInsightSpaceRefRequest $request        ExportInsightSpaceRefRequest
     * @param string[]                     $headers        map
     * @param RuntimeOptions               $runtime        runtime options for this request RuntimeOptions
     *
     * @return ExportInsightSpaceRefResponse ExportInsightSpaceRefResponse
     */
    public function exportInsightSpaceRefWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportInsightSpaceRef',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/data/spaceRefs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExportInsightSpaceRefResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出Insight space_ref表数据
     *  *
     * @param string                       $organizationId
     * @param ExportInsightSpaceRefRequest $request        ExportInsightSpaceRefRequest
     *
     * @return ExportInsightSpaceRefResponse ExportInsightSpaceRefResponse
     */
    public function exportInsightSpaceRef($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightSpaceRefWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 导出Insight sprint表数据
     *  *
     * @param string                     $organizationId
     * @param ExportInsightSprintRequest $request        ExportInsightSprintRequest
     * @param string[]                   $headers        map
     * @param RuntimeOptions             $runtime        runtime options for this request RuntimeOptions
     *
     * @return ExportInsightSprintResponse ExportInsightSprintResponse
     */
    public function exportInsightSprintWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportInsightSprint',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/data/sprints',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExportInsightSprintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出Insight sprint表数据
     *  *
     * @param string                     $organizationId
     * @param ExportInsightSprintRequest $request        ExportInsightSprintRequest
     *
     * @return ExportInsightSprintResponse ExportInsightSprintResponse
     */
    public function exportInsightSprint($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightSprintWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 导出Insight tag_ref表数据
     *  *
     * @param string                     $organizationId
     * @param ExportInsightTagRefRequest $request        ExportInsightTagRefRequest
     * @param string[]                   $headers        map
     * @param RuntimeOptions             $runtime        runtime options for this request RuntimeOptions
     *
     * @return ExportInsightTagRefResponse ExportInsightTagRefResponse
     */
    public function exportInsightTagRefWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportInsightTagRef',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/data/tagRefs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExportInsightTagRefResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出Insight tag_ref表数据
     *  *
     * @param string                     $organizationId
     * @param ExportInsightTagRefRequest $request        ExportInsightTagRefRequest
     *
     * @return ExportInsightTagRefResponse ExportInsightTagRefResponse
     */
    public function exportInsightTagRef($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightTagRefWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 导出Insight work_time表数据
     *  *
     * @param string                       $organizationId
     * @param ExportInsightWorkTimeRequest $request        ExportInsightWorkTimeRequest
     * @param string[]                     $headers        map
     * @param RuntimeOptions               $runtime        runtime options for this request RuntimeOptions
     *
     * @return ExportInsightWorkTimeResponse ExportInsightWorkTimeResponse
     */
    public function exportInsightWorkTimeWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportInsightWorkTime',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/data/workTimes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExportInsightWorkTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出Insight work_time表数据
     *  *
     * @param string                       $organizationId
     * @param ExportInsightWorkTimeRequest $request        ExportInsightWorkTimeRequest
     *
     * @return ExportInsightWorkTimeResponse ExportInsightWorkTimeResponse
     */
    public function exportInsightWorkTime($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightWorkTimeWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 导出Insight workitem_stauts表数据
     *  *
     * @param string                             $organizationId
     * @param ExportInsightWorkitemStatusRequest $request        ExportInsightWorkitemStatusRequest
     * @param string[]                           $headers        map
     * @param RuntimeOptions                     $runtime        runtime options for this request RuntimeOptions
     *
     * @return ExportInsightWorkitemStatusResponse ExportInsightWorkitemStatusResponse
     */
    public function exportInsightWorkitemStatusWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportInsightWorkitemStatus',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/data/workitemStatuses',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExportInsightWorkitemStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出Insight workitem_stauts表数据
     *  *
     * @param string                             $organizationId
     * @param ExportInsightWorkitemStatusRequest $request        ExportInsightWorkitemStatusRequest
     *
     * @return ExportInsightWorkitemStatusResponse ExportInsightWorkitemStatusResponse
     */
    public function exportInsightWorkitemStatus($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightWorkitemStatusWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 导出Insight workitem_stauts表 join workitem_defect_extra表表数据
     *  *
     * @param string                                                    $organizationId
     * @param ExportInsightWorkitemStatusJoinWorkitemDefectExtraRequest $request        ExportInsightWorkitemStatusJoinWorkitemDefectExtraRequest
     * @param string[]                                                  $headers        map
     * @param RuntimeOptions                                            $runtime        runtime options for this request RuntimeOptions
     *
     * @return ExportInsightWorkitemStatusJoinWorkitemDefectExtraResponse ExportInsightWorkitemStatusJoinWorkitemDefectExtraResponse
     */
    public function exportInsightWorkitemStatusJoinWorkitemDefectExtraWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportInsightWorkitemStatusJoinWorkitemDefectExtra',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/data/workitemStatusJoinWorkitemDefectExtras',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExportInsightWorkitemStatusJoinWorkitemDefectExtraResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出Insight workitem_stauts表 join workitem_defect_extra表表数据
     *  *
     * @param string                                                    $organizationId
     * @param ExportInsightWorkitemStatusJoinWorkitemDefectExtraRequest $request        ExportInsightWorkitemStatusJoinWorkitemDefectExtraRequest
     *
     * @return ExportInsightWorkitemStatusJoinWorkitemDefectExtraResponse ExportInsightWorkitemStatusJoinWorkitemDefectExtraResponse
     */
    public function exportInsightWorkitemStatusJoinWorkitemDefectExtra($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightWorkitemStatusJoinWorkitemDefectExtraWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 导出Insight workitem_version表数据
     *  *
     * @param string                              $organizationId
     * @param ExportInsightWorkitemVersionRequest $request        ExportInsightWorkitemVersionRequest
     * @param string[]                            $headers        map
     * @param RuntimeOptions                      $runtime        runtime options for this request RuntimeOptions
     *
     * @return ExportInsightWorkitemVersionResponse ExportInsightWorkitemVersionResponse
     */
    public function exportInsightWorkitemVersionWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportInsightWorkitemVersion',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/data/workitemVersions',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExportInsightWorkitemVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出Insight workitem_version表数据
     *  *
     * @param string                              $organizationId
     * @param ExportInsightWorkitemVersionRequest $request        ExportInsightWorkitemVersionRequest
     *
     * @return ExportInsightWorkitemVersionResponse ExportInsightWorkitemVersionResponse
     */
    public function exportInsightWorkitemVersion($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightWorkitemVersionWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 导出Insight workitem_activity表数据
     *  *
     * @param string                        $organizationId
     * @param ExportWorkitemActivityRequest $request        ExportWorkitemActivityRequest
     * @param string[]                      $headers        map
     * @param RuntimeOptions                $runtime        runtime options for this request RuntimeOptions
     *
     * @return ExportWorkitemActivityResponse ExportWorkitemActivityResponse
     */
    public function exportWorkitemActivityWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExportWorkitemActivity',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/data/workitemActivities',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ExportWorkitemActivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出Insight workitem_activity表数据
     *  *
     * @param string                        $organizationId
     * @param ExportWorkitemActivityRequest $request        ExportWorkitemActivityRequest
     *
     * @return ExportWorkitemActivityResponse ExportWorkitemActivityResponse
     */
    public function exportWorkitemActivity($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportWorkitemActivityWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 冻结工作空间
     *  *
     * @param string         $workspaceId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return FrozenWorkspaceResponse FrozenWorkspaceResponse
     */
    public function frozenWorkspaceWithOptions($workspaceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'FrozenWorkspace',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/frozen',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FrozenWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 冻结工作空间
     *  *
     * @param string $workspaceId
     *
     * @return FrozenWorkspaceResponse FrozenWorkspaceResponse
     */
    public function frozenWorkspace($workspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->frozenWorkspaceWithOptions($workspaceId, $headers, $runtime);
    }

    /**
     * @summary 查找应用详情
     *  *
     * @param string                $appName
     * @param GetApplicationRequest $request GetApplicationRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetApplicationResponse GetApplicationResponse
     */
    public function getApplicationWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetApplication',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/appstack/apps/' . OpenApiUtilClient::getEncodeParam($appName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查找应用详情
     *  *
     * @param string                $appName
     * @param GetApplicationRequest $request GetApplicationRequest
     *
     * @return GetApplicationResponse GetApplicationResponse
     */
    public function getApplication($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getApplicationWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * @summary 查询单个分支
     *  *
     * @param string               $repositoryId
     * @param GetBranchInfoRequest $request      GetBranchInfoRequest
     * @param string[]             $headers      map
     * @param RuntimeOptions       $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetBranchInfoResponse GetBranchInfoResponse
     */
    public function getBranchInfoWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->branchName)) {
            $query['branchName'] = $request->branchName;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBranchInfo',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/branches/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetBranchInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询单个分支
     *  *
     * @param string               $repositoryId
     * @param GetBranchInfoRequest $request      GetBranchInfoRequest
     *
     * @return GetBranchInfoResponse GetBranchInfoResponse
     */
    public function getBranchInfo($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBranchInfoWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询检查运行
     *  *
     * @param GetCheckRunRequest $request GetCheckRunRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCheckRunResponse GetCheckRunResponse
     */
    public function getCheckRunWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->checkRunId)) {
            $query['checkRunId'] = $request->checkRunId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->repositoryIdentity)) {
            $query['repositoryIdentity'] = $request->repositoryIdentity;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCheckRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/check_runs/get_check_run',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCheckRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询检查运行
     *  *
     * @param GetCheckRunRequest $request GetCheckRunRequest
     *
     * @return GetCheckRunResponse GetCheckRunResponse
     */
    public function getCheckRun($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCheckRunWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取企业信息
     *  *
     * @param string                       $identity
     * @param GetCodeupOrganizationRequest $request  GetCodeupOrganizationRequest
     * @param string[]                     $headers  map
     * @param RuntimeOptions               $runtime  runtime options for this request RuntimeOptions
     *
     * @return GetCodeupOrganizationResponse GetCodeupOrganizationResponse
     */
    public function getCodeupOrganizationWithOptions($identity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCodeupOrganization',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/organization/' . OpenApiUtilClient::getEncodeParam($identity) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCodeupOrganizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取企业信息
     *  *
     * @param string                       $identity
     * @param GetCodeupOrganizationRequest $request  GetCodeupOrganizationRequest
     *
     * @return GetCodeupOrganizationResponse GetCodeupOrganizationResponse
     */
    public function getCodeupOrganization($identity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCodeupOrganizationWithOptions($identity, $request, $headers, $runtime);
    }

    /**
     * @summary 获取比较详情
     *  *
     * @param string                  $repositoryId
     * @param GetCompareDetailRequest $request      GetCompareDetailRequest
     * @param string[]                $headers      map
     * @param RuntimeOptions          $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetCompareDetailResponse GetCompareDetailResponse
     */
    public function getCompareDetailWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->from)) {
            $query['from'] = $request->from;
        }
        if (!Utils::isUnset($request->maxDiffByte)) {
            $query['maxDiffByte'] = $request->maxDiffByte;
        }
        if (!Utils::isUnset($request->maxDiffFile)) {
            $query['maxDiffFile'] = $request->maxDiffFile;
        }
        if (!Utils::isUnset($request->mergeBase)) {
            $query['mergeBase'] = $request->mergeBase;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->to)) {
            $query['to'] = $request->to;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCompareDetail',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/commits/compare/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCompareDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取比较详情
     *  *
     * @param string                  $repositoryId
     * @param GetCompareDetailRequest $request      GetCompareDetailRequest
     *
     * @return GetCompareDetailResponse GetCompareDetailResponse
     */
    public function getCompareDetail($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCompareDetailWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取自定义字段的选项值
     *  *
     * @param string                      $organizationId
     * @param string                      $fieldId
     * @param GetCustomFieldOptionRequest $request        GetCustomFieldOptionRequest
     * @param string[]                    $headers        map
     * @param RuntimeOptions              $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetCustomFieldOptionResponse GetCustomFieldOptionResponse
     */
    public function getCustomFieldOptionWithOptions($organizationId, $fieldId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->spaceIdentifier)) {
            $query['spaceIdentifier'] = $request->spaceIdentifier;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $query['spaceType'] = $request->spaceType;
        }
        if (!Utils::isUnset($request->workitemTypeIdentifier)) {
            $query['workitemTypeIdentifier'] = $request->workitemTypeIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCustomFieldOption',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/fields/' . OpenApiUtilClient::getEncodeParam($fieldId) . '/getCustomOption',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCustomFieldOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取自定义字段的选项值
     *  *
     * @param string                      $organizationId
     * @param string                      $fieldId
     * @param GetCustomFieldOptionRequest $request        GetCustomFieldOptionRequest
     *
     * @return GetCustomFieldOptionResponse GetCustomFieldOptionResponse
     */
    public function getCustomFieldOption($organizationId, $fieldId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCustomFieldOptionWithOptions($organizationId, $fieldId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询文件
     *  *
     * @param string              $repositoryId
     * @param GetFileBlobsRequest $request      GetFileBlobsRequest
     * @param string[]            $headers      map
     * @param RuntimeOptions      $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetFileBlobsResponse GetFileBlobsResponse
     */
    public function getFileBlobsWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->filePath)) {
            $query['filePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->from)) {
            $query['from'] = $request->from;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->ref)) {
            $query['ref'] = $request->ref;
        }
        if (!Utils::isUnset($request->to)) {
            $query['to'] = $request->to;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFileBlobs',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/files/blobs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFileBlobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询文件
     *  *
     * @param string              $repositoryId
     * @param GetFileBlobsRequest $request      GetFileBlobsRequest
     *
     * @return GetFileBlobsResponse GetFileBlobsResponse
     */
    public function getFileBlobs($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFileBlobsWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取文件上一次提交信息
     *  *
     * @param string                   $repositoryId
     * @param GetFileLastCommitRequest $request      GetFileLastCommitRequest
     * @param string[]                 $headers      map
     * @param RuntimeOptions           $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetFileLastCommitResponse GetFileLastCommitResponse
     */
    public function getFileLastCommitWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->filePath)) {
            $query['filePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->sha)) {
            $query['sha'] = $request->sha;
        }
        if (!Utils::isUnset($request->showSignature)) {
            $query['showSignature'] = $request->showSignature;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFileLastCommit',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/files/lastCommit',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFileLastCommitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取文件上一次提交信息
     *  *
     * @param string                   $repositoryId
     * @param GetFileLastCommitRequest $request      GetFileLastCommitRequest
     *
     * @return GetFileLastCommitResponse GetFileLastCommitResponse
     */
    public function getFileLastCommit($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFileLastCommitWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取标签分类
     *  *
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetFlowTagGroupResponse GetFlowTagGroupResponse
     */
    public function getFlowTagGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetFlowTagGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/flow/tagGroups/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFlowTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取标签分类
     *  *
     * @param string $organizationId
     * @param string $id
     *
     * @return GetFlowTagGroupResponse GetFlowTagGroupResponse
     */
    public function getFlowTagGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFlowTagGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @summary 根据路径查询代码组
     *  *
     * @param GetGroupByPathRequest $request GetGroupByPathRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGroupByPathResponse GetGroupByPathResponse
     */
    public function getGroupByPathWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identity)) {
            $query['identity'] = $request->identity;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGroupByPath',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/4/groups/find_by_path',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetGroupByPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据路径查询代码组
     *  *
     * @param GetGroupByPathRequest $request GetGroupByPathRequest
     *
     * @return GetGroupByPathResponse GetGroupByPathResponse
     */
    public function getGroupByPath($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGroupByPathWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询代码组信息
     *  *
     * @param GetGroupDetailRequest $request GetGroupDetailRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetGroupDetailResponse GetGroupDetailResponse
     */
    public function getGroupDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['groupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetGroupDetail',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/groups/get_detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetGroupDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询代码组信息
     *  *
     * @param GetGroupDetailRequest $request GetGroupDetailRequest
     *
     * @return GetGroupDetailResponse GetGroupDetailResponse
     */
    public function getGroupDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGroupDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取主机组信息
     *  *
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetHostGroupResponse GetHostGroupResponse
     */
    public function getHostGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetHostGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/hostGroups/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取主机组信息
     *  *
     * @param string $organizationId
     * @param string $id
     *
     * @return GetHostGroupResponse GetHostGroupResponse
     */
    public function getHostGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHostGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @summary 查询合并请求详情
     *  *
     * @param string                 $repositoryId
     * @param string                 $localId
     * @param GetMergeRequestRequest $request      GetMergeRequestRequest
     * @param string[]               $headers      map
     * @param RuntimeOptions         $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetMergeRequestResponse GetMergeRequestResponse
     */
    public function getMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMergeRequest',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/merge_requests/' . OpenApiUtilClient::getEncodeParam($localId) . '/detail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMergeRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询合并请求详情
     *  *
     * @param string                 $repositoryId
     * @param string                 $localId
     * @param GetMergeRequestRequest $request      GetMergeRequestRequest
     *
     * @return GetMergeRequestResponse GetMergeRequestResponse
     */
    public function getMergeRequest($repositoryId, $localId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询合并请求的变更信息
     *  *
     * @param GetMergeRequestChangeTreeRequest $request GetMergeRequestChangeTreeRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMergeRequestChangeTreeResponse GetMergeRequestChangeTreeResponse
     */
    public function getMergeRequestChangeTreeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->fromPatchSetBizId)) {
            $query['fromPatchSetBizId'] = $request->fromPatchSetBizId;
        }
        if (!Utils::isUnset($request->localId)) {
            $query['localId'] = $request->localId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->repositoryIdentity)) {
            $query['repositoryIdentity'] = $request->repositoryIdentity;
        }
        if (!Utils::isUnset($request->toPatchSetBizId)) {
            $query['toPatchSetBizId'] = $request->toPatchSetBizId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMergeRequestChangeTree',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/merge_requests/diffs/change_tree',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMergeRequestChangeTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询合并请求的变更信息
     *  *
     * @param GetMergeRequestChangeTreeRequest $request GetMergeRequestChangeTreeRequest
     *
     * @return GetMergeRequestChangeTreeResponse GetMergeRequestChangeTreeResponse
     */
    public function getMergeRequestChangeTree($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMergeRequestChangeTreeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取企业成员
     *  *
     * @param string         $organizationId
     * @param string         $accountId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetOrganizationMemberResponse GetOrganizationMemberResponse
     */
    public function getOrganizationMemberWithOptions($organizationId, $accountId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetOrganizationMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/members/' . OpenApiUtilClient::getEncodeParam($accountId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOrganizationMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取企业成员
     *  *
     * @param string $organizationId
     * @param string $accountId
     *
     * @return GetOrganizationMemberResponse GetOrganizationMemberResponse
     */
    public function getOrganizationMember($organizationId, $accountId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOrganizationMemberWithOptions($organizationId, $accountId, $headers, $runtime);
    }

    /**
     * @summary 获取流水线
     *  *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetPipelineResponse GetPipelineResponse
     */
    public function getPipelineWithOptions($organizationId, $pipelineId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetPipeline',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流水线
     *  *
     * @param string $organizationId
     * @param string $pipelineId
     *
     * @return GetPipelineResponse GetPipelineResponse
     */
    public function getPipeline($organizationId, $pipelineId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineWithOptions($organizationId, $pipelineId, $headers, $runtime);
    }

    /**
     * @summary 获取构建物下载链接
     *  *
     * @param string                        $organizationId
     * @param GetPipelineArtifactUrlRequest $request        GetPipelineArtifactUrlRequest
     * @param string[]                      $headers        map
     * @param RuntimeOptions                $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetPipelineArtifactUrlResponse GetPipelineArtifactUrlResponse
     */
    public function getPipelineArtifactUrlWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['fileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->filePath)) {
            $query['filePath'] = $request->filePath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPipelineArtifactUrl',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipeline/getArtifactDownloadUrl',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineArtifactUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取构建物下载链接
     *  *
     * @param string                        $organizationId
     * @param GetPipelineArtifactUrlRequest $request        GetPipelineArtifactUrlRequest
     *
     * @return GetPipelineArtifactUrlResponse GetPipelineArtifactUrlResponse
     */
    public function getPipelineArtifactUrl($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineArtifactUrlWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取emase构建物下载链接
     *  *
     * @param string                            $organizationId
     * @param string                            $emasJobInstanceId
     * @param string                            $md5
     * @param string                            $pipelineId
     * @param string                            $pipelineRunId
     * @param GetPipelineEmasArtifactUrlRequest $request           GetPipelineEmasArtifactUrlRequest
     * @param string[]                          $headers           map
     * @param RuntimeOptions                    $runtime           runtime options for this request RuntimeOptions
     *
     * @return GetPipelineEmasArtifactUrlResponse GetPipelineEmasArtifactUrlResponse
     */
    public function getPipelineEmasArtifactUrlWithOptions($organizationId, $emasJobInstanceId, $md5, $pipelineId, $pipelineRunId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceConnectionId)) {
            $query['serviceConnectionId'] = $request->serviceConnectionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPipelineEmasArtifactUrl',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipeline/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRun/' . OpenApiUtilClient::getEncodeParam($pipelineRunId) . '/emas/artifact/' . OpenApiUtilClient::getEncodeParam($emasJobInstanceId) . '/' . OpenApiUtilClient::getEncodeParam($md5) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineEmasArtifactUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取emase构建物下载链接
     *  *
     * @param string                            $organizationId
     * @param string                            $emasJobInstanceId
     * @param string                            $md5
     * @param string                            $pipelineId
     * @param string                            $pipelineRunId
     * @param GetPipelineEmasArtifactUrlRequest $request           GetPipelineEmasArtifactUrlRequest
     *
     * @return GetPipelineEmasArtifactUrlResponse GetPipelineEmasArtifactUrlResponse
     */
    public function getPipelineEmasArtifactUrl($organizationId, $emasJobInstanceId, $md5, $pipelineId, $pipelineRunId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineEmasArtifactUrlWithOptions($organizationId, $emasJobInstanceId, $md5, $pipelineId, $pipelineRunId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取流水线分组
     *  *
     * @param string         $organizationId
     * @param string         $groupId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetPipelineGroupResponse GetPipelineGroupResponse
     */
    public function getPipelineGroupWithOptions($organizationId, $groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetPipelineGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelineGroups/' . OpenApiUtilClient::getEncodeParam($groupId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流水线分组
     *  *
     * @param string $organizationId
     * @param string $groupId
     *
     * @return GetPipelineGroupResponse GetPipelineGroupResponse
     */
    public function getPipelineGroup($organizationId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineGroupWithOptions($organizationId, $groupId, $headers, $runtime);
    }

    /**
     * @summary 获取流水线运行信息
     *  *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetPipelineRunResponse GetPipelineRunResponse
     */
    public function getPipelineRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetPipelineRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRuns/' . OpenApiUtilClient::getEncodeParam($pipelineRunId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流水线运行信息
     *  *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     *
     * @return GetPipelineRunResponse GetPipelineRunResponse
     */
    public function getPipelineRun($organizationId, $pipelineId, $pipelineRunId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $headers, $runtime);
    }

    /**
     * @summary 获取扫描报告下载链接
     *  *
     * @param string                          $organizationId
     * @param GetPipelineScanReportUrlRequest $request        GetPipelineScanReportUrlRequest
     * @param string[]                        $headers        map
     * @param RuntimeOptions                  $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetPipelineScanReportUrlResponse GetPipelineScanReportUrlResponse
     */
    public function getPipelineScanReportUrlWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->reportPath)) {
            $body['reportPath'] = $request->reportPath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPipelineScanReportUrl',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipeline/getPipelineScanReportUrl',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPipelineScanReportUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取扫描报告下载链接
     *  *
     * @param string                          $organizationId
     * @param GetPipelineScanReportUrlRequest $request        GetPipelineScanReportUrlRequest
     *
     * @return GetPipelineScanReportUrlResponse GetPipelineScanReportUrlResponse
     */
    public function getPipelineScanReportUrl($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineScanReportUrlWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 根据id获取项目详情-Projex
     *  *
     * @param string         $organizationId
     * @param string         $projectId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetProjectInfoResponse GetProjectInfoResponse
     */
    public function getProjectInfoWithOptions($organizationId, $projectId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetProjectInfo',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/project/' . OpenApiUtilClient::getEncodeParam($projectId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据id获取项目详情-Projex
     *  *
     * @param string $organizationId
     * @param string $projectId
     *
     * @return GetProjectInfoResponse GetProjectInfoResponse
     */
    public function getProjectInfo($organizationId, $projectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectInfoWithOptions($organizationId, $projectId, $headers, $runtime);
    }

    /**
     * @summary 查询代码库成员
     *  *
     * @param string                  $repositoryId
     * @param string                  $aliyunPk
     * @param GetProjectMemberRequest $request      GetProjectMemberRequest
     * @param string[]                $headers      map
     * @param RuntimeOptions          $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetProjectMemberResponse GetProjectMemberResponse
     */
    public function getProjectMemberWithOptions($repositoryId, $aliyunPk, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProjectMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/members/get/' . OpenApiUtilClient::getEncodeParam($aliyunPk) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProjectMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询代码库成员
     *  *
     * @param string                  $repositoryId
     * @param string                  $aliyunPk
     * @param GetProjectMemberRequest $request      GetProjectMemberRequest
     *
     * @return GetProjectMemberResponse GetProjectMemberResponse
     */
    public function getProjectMember($repositoryId, $aliyunPk, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectMemberWithOptions($repositoryId, $aliyunPk, $request, $headers, $runtime);
    }

    /**
     * @summary 查询推送规则
     *  *
     * @param string             $repositoryId
     * @param string             $pushRuleId
     * @param GetPushRuleRequest $request      GetPushRuleRequest
     * @param string[]           $headers      map
     * @param RuntimeOptions     $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetPushRuleResponse GetPushRuleResponse
     */
    public function getPushRuleWithOptions($repositoryId, $pushRuleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPushRule',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/push_rule/' . OpenApiUtilClient::getEncodeParam($pushRuleId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPushRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询推送规则
     *  *
     * @param string             $repositoryId
     * @param string             $pushRuleId
     * @param GetPushRuleRequest $request      GetPushRuleRequest
     *
     * @return GetPushRuleResponse GetPushRuleResponse
     */
    public function getPushRule($repositoryId, $pushRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPushRuleWithOptions($repositoryId, $pushRuleId, $request, $headers, $runtime);
    }

    /**
     * @summary 使用代码库ID或路径查询代码库信息
     *  *
     * @param GetRepositoryRequest $request GetRepositoryRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRepositoryResponse GetRepositoryResponse
     */
    public function getRepositoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->identity)) {
            $query['identity'] = $request->identity;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRepository',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/get',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 使用代码库ID或路径查询代码库信息
     *  *
     * @param GetRepositoryRequest $request GetRepositoryRequest
     *
     * @return GetRepositoryResponse GetRepositoryResponse
     */
    public function getRepository($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepositoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询代码库提交信息
     *  *
     * @param string                     $repositoryId
     * @param string                     $sha
     * @param GetRepositoryCommitRequest $request      GetRepositoryCommitRequest
     * @param string[]                   $headers      map
     * @param RuntimeOptions             $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetRepositoryCommitResponse GetRepositoryCommitResponse
     */
    public function getRepositoryCommitWithOptions($repositoryId, $sha, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->showSignature)) {
            $query['showSignature'] = $request->showSignature;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRepositoryCommit',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/commits/' . OpenApiUtilClient::getEncodeParam($sha) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRepositoryCommitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询代码库提交信息
     *  *
     * @param string                     $repositoryId
     * @param string                     $sha
     * @param GetRepositoryCommitRequest $request      GetRepositoryCommitRequest
     *
     * @return GetRepositoryCommitResponse GetRepositoryCommitResponse
     */
    public function getRepositoryCommit($repositoryId, $sha, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepositoryCommitWithOptions($repositoryId, $sha, $request, $headers, $runtime);
    }

    /**
     * @summary 查询单个标签
     *  *
     * @param string                  $repositoryId
     * @param GetRepositoryTagRequest $request      GetRepositoryTagRequest
     * @param string[]                $headers      map
     * @param RuntimeOptions          $runtime      runtime options for this request RuntimeOptions
     *
     * @return GetRepositoryTagResponse GetRepositoryTagResponse
     */
    public function getRepositoryTagWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['tagName'] = $request->tagName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRepositoryTag',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/tag/info',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRepositoryTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询单个标签
     *  *
     * @param string                  $repositoryId
     * @param GetRepositoryTagRequest $request      GetRepositoryTagRequest
     *
     * @return GetRepositoryTagResponse GetRepositoryTagResponse
     */
    public function getRepositoryTag($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepositoryTagWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 预览代码片段
     *  *
     * @param GetSearchCodePreviewRequest $request GetSearchCodePreviewRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSearchCodePreviewResponse GetSearchCodePreviewResponse
     */
    public function getSearchCodePreviewWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->docId)) {
            $query['docId'] = $request->docId;
        }
        if (!Utils::isUnset($request->isDsl)) {
            $query['isDsl'] = $request->isDsl;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSearchCodePreview',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/search/code_preview',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSearchCodePreviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 预览代码片段
     *  *
     * @param GetSearchCodePreviewRequest $request GetSearchCodePreviewRequest
     *
     * @return GetSearchCodePreviewResponse GetSearchCodePreviewResponse
     */
    public function getSearchCodePreview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSearchCodePreviewWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取迭代详情
     *  *
     * @param string         $organizationId
     * @param string         $sprintId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetSprintInfoResponse GetSprintInfoResponse
     */
    public function getSprintInfoWithOptions($organizationId, $sprintId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSprintInfo',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/sprints/' . OpenApiUtilClient::getEncodeParam($sprintId) . '/getSprintinfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSprintInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取迭代详情
     *  *
     * @param string $organizationId
     * @param string $sprintId
     *
     * @return GetSprintInfoResponse GetSprintInfoResponse
     */
    public function getSprintInfo($organizationId, $sprintId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSprintInfoWithOptions($organizationId, $sprintId, $headers, $runtime);
    }

    /**
     * @summary 获取测试计划中的测试用例列表
     *  *
     * @param string                   $organizationId
     * @param string                   $testPlanIdentifier
     * @param GetTestResultListRequest $request            GetTestResultListRequest
     * @param string[]                 $headers            map
     * @param RuntimeOptions           $runtime            runtime options for this request RuntimeOptions
     *
     * @return GetTestResultListResponse GetTestResultListResponse
     */
    public function getTestResultListWithOptions($organizationId, $testPlanIdentifier, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->conditions)) {
            $body['conditions'] = $request->conditions;
        }
        if (!Utils::isUnset($request->directoryIdentifier)) {
            $body['directoryIdentifier'] = $request->directoryIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTestResultList',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/testhub/testplan/' . OpenApiUtilClient::getEncodeParam($testPlanIdentifier) . '/testresults',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTestResultListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取测试计划中的测试用例列表
     *  *
     * @param string                   $organizationId
     * @param string                   $testPlanIdentifier
     * @param GetTestResultListRequest $request            GetTestResultListRequest
     *
     * @return GetTestResultListResponse GetTestResultListResponse
     */
    public function getTestResultList($organizationId, $testPlanIdentifier, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTestResultListWithOptions($organizationId, $testPlanIdentifier, $request, $headers, $runtime);
    }

    /**
     * @summary 获取测试用例列表
     *  *
     * @param string                 $organizationId
     * @param GetTestcaseListRequest $request        GetTestcaseListRequest
     * @param string[]               $headers        map
     * @param RuntimeOptions         $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetTestcaseListResponse GetTestcaseListResponse
     */
    public function getTestcaseListWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->conditions)) {
            $body['conditions'] = $request->conditions;
        }
        if (!Utils::isUnset($request->directoryIdentifier)) {
            $body['directoryIdentifier'] = $request->directoryIdentifier;
        }
        if (!Utils::isUnset($request->maxResult)) {
            $body['maxResult'] = $request->maxResult;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->spaceIdentifier)) {
            $body['spaceIdentifier'] = $request->spaceIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTestcaseList',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/testhub/testcases',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTestcaseListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取测试用例列表
     *  *
     * @param string                 $organizationId
     * @param GetTestcaseListRequest $request        GetTestcaseListRequest
     *
     * @return GetTestcaseListResponse GetTestcaseListResponse
     */
    public function getTestcaseList($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTestcaseListWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询当前用户信息
     *  *
     * @param GetUserInfoRequest $request GetUserInfoRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserInfoResponse GetUserInfoResponse
     */
    public function getUserInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserInfo',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/users/current',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询当前用户信息
     *  *
     * @param GetUserInfoRequest $request GetUserInfoRequest
     *
     * @return GetUserInfoResponse GetUserInfoResponse
     */
    public function getUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取部署单信息
     *  *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetVMDeployOrderResponse GetVMDeployOrderResponse
     */
    public function getVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetVMDeployOrder',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/deploy/' . OpenApiUtilClient::getEncodeParam($deployOrderId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetVMDeployOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取部署单信息
     *  *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     *
     * @return GetVMDeployOrderResponse GetVMDeployOrderResponse
     */
    public function getVMDeployOrder($organizationId, $pipelineId, $deployOrderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime);
    }

    /**
     * @summary 获取变量组
     *  *
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetVariableGroupResponse GetVariableGroupResponse
     */
    public function getVariableGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetVariableGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/variableGroups/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetVariableGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取变量组
     *  *
     * @param string $organizationId
     * @param string $id
     *
     * @return GetVariableGroupResponse GetVariableGroupResponse
     */
    public function getVariableGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVariableGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * @summary 获取工作项动态
     *  *
     * @param string         $organizationId
     * @param string         $workitemId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetWorkItemActivityResponse GetWorkItemActivityResponse
     */
    public function getWorkItemActivityWithOptions($organizationId, $workitemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetWorkItemActivity',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/' . OpenApiUtilClient::getEncodeParam($workitemId) . '/getActivity',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkItemActivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取工作项动态
     *  *
     * @param string $organizationId
     * @param string $workitemId
     *
     * @return GetWorkItemActivityResponse GetWorkItemActivityResponse
     */
    public function getWorkItemActivity($organizationId, $workitemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkItemActivityWithOptions($organizationId, $workitemId, $headers, $runtime);
    }

    /**
     * @summary 根据id获取工作项详情
     *  *
     * @param string         $organizationId
     * @param string         $workitemId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetWorkItemInfoResponse GetWorkItemInfoResponse
     */
    public function getWorkItemInfoWithOptions($organizationId, $workitemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetWorkItemInfo',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/' . OpenApiUtilClient::getEncodeParam($workitemId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkItemInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据id获取工作项详情
     *  *
     * @param string $organizationId
     * @param string $workitemId
     *
     * @return GetWorkItemInfoResponse GetWorkItemInfoResponse
     */
    public function getWorkItemInfo($organizationId, $workitemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkItemInfoWithOptions($organizationId, $workitemId, $headers, $runtime);
    }

    /**
     * @summary 获取工作项工作流信息
     *  *
     * @param string                         $organizationId
     * @param string                         $workitemId
     * @param GetWorkItemWorkFlowInfoRequest $request        GetWorkItemWorkFlowInfoRequest
     * @param string[]                       $headers        map
     * @param RuntimeOptions                 $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetWorkItemWorkFlowInfoResponse GetWorkItemWorkFlowInfoResponse
     */
    public function getWorkItemWorkFlowInfoWithOptions($organizationId, $workitemId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configurationId)) {
            $query['configurationId'] = $request->configurationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkItemWorkFlowInfo',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/' . OpenApiUtilClient::getEncodeParam($workitemId) . '/getWorkflowInfo',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkItemWorkFlowInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取工作项工作流信息
     *  *
     * @param string                         $organizationId
     * @param string                         $workitemId
     * @param GetWorkItemWorkFlowInfoRequest $request        GetWorkItemWorkFlowInfoRequest
     *
     * @return GetWorkItemWorkFlowInfoResponse GetWorkItemWorkFlowInfoResponse
     */
    public function getWorkItemWorkFlowInfo($organizationId, $workitemId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkItemWorkFlowInfoWithOptions($organizationId, $workitemId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取附件上传的元信息
     *  *
     * @param string                                 $organizationId
     * @param string                                 $workitemIdentifier
     * @param GetWorkitemAttachmentCreatemetaRequest $request            GetWorkitemAttachmentCreatemetaRequest
     * @param string[]                               $headers            map
     * @param RuntimeOptions                         $runtime            runtime options for this request RuntimeOptions
     *
     * @return GetWorkitemAttachmentCreatemetaResponse GetWorkitemAttachmentCreatemetaResponse
     */
    public function getWorkitemAttachmentCreatemetaWithOptions($organizationId, $workitemIdentifier, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileName)) {
            $query['fileName'] = $request->fileName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkitemAttachmentCreatemeta',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitem/' . OpenApiUtilClient::getEncodeParam($workitemIdentifier) . '/attachment/createmeta',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkitemAttachmentCreatemetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取附件上传的元信息
     *  *
     * @param string                                 $organizationId
     * @param string                                 $workitemIdentifier
     * @param GetWorkitemAttachmentCreatemetaRequest $request            GetWorkitemAttachmentCreatemetaRequest
     *
     * @return GetWorkitemAttachmentCreatemetaResponse GetWorkitemAttachmentCreatemetaResponse
     */
    public function getWorkitemAttachmentCreatemeta($organizationId, $workitemIdentifier, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkitemAttachmentCreatemetaWithOptions($organizationId, $workitemIdentifier, $request, $headers, $runtime);
    }

    /**
     * @summary 获得所有评论
     *  *
     * @param string         $organizationId
     * @param string         $workitemId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetWorkitemCommentListResponse GetWorkitemCommentListResponse
     */
    public function getWorkitemCommentListWithOptions($organizationId, $workitemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetWorkitemCommentList',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/' . OpenApiUtilClient::getEncodeParam($workitemId) . '/commentList',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkitemCommentListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获得所有评论
     *  *
     * @param string $organizationId
     * @param string $workitemId
     *
     * @return GetWorkitemCommentListResponse GetWorkitemCommentListResponse
     */
    public function getWorkitemCommentList($organizationId, $workitemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkitemCommentListWithOptions($organizationId, $workitemId, $headers, $runtime);
    }

    /**
     * @summary 获取工作项文件信息
     *  *
     * @param string         $organizationId
     * @param string         $workitemIdentifier
     * @param string         $fileIdentifier
     * @param string[]       $headers            map
     * @param RuntimeOptions $runtime            runtime options for this request RuntimeOptions
     *
     * @return GetWorkitemFileResponse GetWorkitemFileResponse
     */
    public function getWorkitemFileWithOptions($organizationId, $workitemIdentifier, $fileIdentifier, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetWorkitemFile',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitem/' . OpenApiUtilClient::getEncodeParam($workitemIdentifier) . '/files/' . OpenApiUtilClient::getEncodeParam($fileIdentifier) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkitemFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取工作项文件信息
     *  *
     * @param string $organizationId
     * @param string $workitemIdentifier
     * @param string $fileIdentifier
     *
     * @return GetWorkitemFileResponse GetWorkitemFileResponse
     */
    public function getWorkitemFile($organizationId, $workitemIdentifier, $fileIdentifier)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkitemFileWithOptions($organizationId, $workitemIdentifier, $fileIdentifier, $headers, $runtime);
    }

    /**
     * @summary 获得一个工作项的指定关联项
     *  *
     * @param string                      $organizationId
     * @param string                      $workitemId
     * @param GetWorkitemRelationsRequest $request        GetWorkitemRelationsRequest
     * @param string[]                    $headers        map
     * @param RuntimeOptions              $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetWorkitemRelationsResponse GetWorkitemRelationsResponse
     */
    public function getWorkitemRelationsWithOptions($organizationId, $workitemId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->relationType)) {
            $query['relationType'] = $request->relationType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkitemRelations',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/' . OpenApiUtilClient::getEncodeParam($workitemId) . '/getRelations',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkitemRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获得一个工作项的指定关联项
     *  *
     * @param string                      $organizationId
     * @param string                      $workitemId
     * @param GetWorkitemRelationsRequest $request        GetWorkitemRelationsRequest
     *
     * @return GetWorkitemRelationsResponse GetWorkitemRelationsResponse
     */
    public function getWorkitemRelations($organizationId, $workitemId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkitemRelationsWithOptions($organizationId, $workitemId, $request, $headers, $runtime);
    }

    /**
     * @summary 获得一个企业下所有工时类型
     *  *
     * @param string         $organizationId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return GetWorkitemTimeTypeListResponse GetWorkitemTimeTypeListResponse
     */
    public function getWorkitemTimeTypeListWithOptions($organizationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetWorkitemTimeTypeList',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/type/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkitemTimeTypeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获得一个企业下所有工时类型
     *  *
     * @param string $organizationId
     *
     * @return GetWorkitemTimeTypeListResponse GetWorkitemTimeTypeListResponse
     */
    public function getWorkitemTimeTypeList($organizationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkitemTimeTypeListWithOptions($organizationId, $headers, $runtime);
    }

    /**
     * @summary 查询工作空间详情
     *  *
     * @param string         $workspaceId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return GetWorkspaceResponse GetWorkspaceResponse
     */
    public function getWorkspaceWithOptions($workspaceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetWorkspace',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询工作空间详情
     *  *
     * @param string $workspaceId
     *
     * @return GetWorkspaceResponse GetWorkspaceResponse
     */
    public function getWorkspace($workspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkspaceWithOptions($workspaceId, $headers, $runtime);
    }

    /**
     * @summary 加入流水线分组
     *  *
     * @param string                   $organizationId
     * @param JoinPipelineGroupRequest $request        JoinPipelineGroupRequest
     * @param string[]                 $headers        map
     * @param RuntimeOptions           $runtime        runtime options for this request RuntimeOptions
     *
     * @return JoinPipelineGroupResponse JoinPipelineGroupResponse
     */
    public function joinPipelineGroupWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['groupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pipelineIds)) {
            $query['pipelineIds'] = $request->pipelineIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'JoinPipelineGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelineGroups/join',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return JoinPipelineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 加入流水线分组
     *  *
     * @param string                   $organizationId
     * @param JoinPipelineGroupRequest $request        JoinPipelineGroupRequest
     *
     * @return JoinPipelineGroupResponse JoinPipelineGroupResponse
     */
    public function joinPipelineGroup($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->joinPipelineGroupWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 关联合并请求Label
     *  *
     * @param LinkMergeRequestLabelRequest $request LinkMergeRequestLabelRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return LinkMergeRequestLabelResponse LinkMergeRequestLabelResponse
     */
    public function linkMergeRequestLabelWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->localId)) {
            $query['localId'] = $request->localId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->repositoryIdentity)) {
            $query['repositoryIdentity'] = $request->repositoryIdentity;
        }
        $body = [];
        if (!Utils::isUnset($request->labelIds)) {
            $body['labelIds'] = $request->labelIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LinkMergeRequestLabel',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/merge_requests/link_labels',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return LinkMergeRequestLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 关联合并请求Label
     *  *
     * @param LinkMergeRequestLabelRequest $request LinkMergeRequestLabelRequest
     *
     * @return LinkMergeRequestLabelResponse LinkMergeRequestLabelResponse
     */
    public function linkMergeRequestLabel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->linkMergeRequestLabelWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查找应用下所有的研发流程
     *  *
     * @param string                         $appName
     * @param ListAllReleaseWorkflowsRequest $request ListAllReleaseWorkflowsRequest
     * @param string[]                       $headers map
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAllReleaseWorkflowsResponse ListAllReleaseWorkflowsResponse
     */
    public function listAllReleaseWorkflowsWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAllReleaseWorkflows',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/appstack/apps/' . OpenApiUtilClient::getEncodeParam($appName) . '/releaseWorkflows',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListAllReleaseWorkflowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查找应用下所有的研发流程
     *  *
     * @param string                         $appName
     * @param ListAllReleaseWorkflowsRequest $request ListAllReleaseWorkflowsRequest
     *
     * @return ListAllReleaseWorkflowsResponse ListAllReleaseWorkflowsResponse
     */
    public function listAllReleaseWorkflows($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAllReleaseWorkflowsWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * @summary 查询研发阶段执行记录集成变更信息
     *  *
     * @param string                                                $appName
     * @param string                                                $releaseWorkflowSn
     * @param string                                                $releaseStageSn
     * @param string                                                $executionNumber
     * @param ListAppReleaseStageExecutionIntegratedMetadataRequest $request           ListAppReleaseStageExecutionIntegratedMetadataRequest
     * @param string[]                                              $headers           map
     * @param RuntimeOptions                                        $runtime           runtime options for this request RuntimeOptions
     *
     * @return ListAppReleaseStageExecutionIntegratedMetadataResponse ListAppReleaseStageExecutionIntegratedMetadataResponse
     */
    public function listAppReleaseStageExecutionIntegratedMetadataWithOptions($appName, $releaseWorkflowSn, $releaseStageSn, $executionNumber, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppReleaseStageExecutionIntegratedMetadata',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/appstack/apps/' . OpenApiUtilClient::getEncodeParam($appName) . '/releaseWorkflows/' . OpenApiUtilClient::getEncodeParam($releaseWorkflowSn) . '/releaseStages/' . OpenApiUtilClient::getEncodeParam($releaseStageSn) . '/executions/' . OpenApiUtilClient::getEncodeParam($executionNumber) . '/integratedMetadata',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'array',
        ]);

        return ListAppReleaseStageExecutionIntegratedMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询研发阶段执行记录集成变更信息
     *  *
     * @param string                                                $appName
     * @param string                                                $releaseWorkflowSn
     * @param string                                                $releaseStageSn
     * @param string                                                $executionNumber
     * @param ListAppReleaseStageExecutionIntegratedMetadataRequest $request           ListAppReleaseStageExecutionIntegratedMetadataRequest
     *
     * @return ListAppReleaseStageExecutionIntegratedMetadataResponse ListAppReleaseStageExecutionIntegratedMetadataResponse
     */
    public function listAppReleaseStageExecutionIntegratedMetadata($appName, $releaseWorkflowSn, $releaseStageSn, $executionNumber, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppReleaseStageExecutionIntegratedMetadataWithOptions($appName, $releaseWorkflowSn, $releaseStageSn, $executionNumber, $request, $headers, $runtime);
    }

    /**
     * @summary 批量查询研发阶段执行记录
     *  *
     * @param string                               $appName
     * @param string                               $releaseWorkflowSn
     * @param string                               $releaseStageSn
     * @param ListAppReleaseStageExecutionsRequest $request           ListAppReleaseStageExecutionsRequest
     * @param string[]                             $headers           map
     * @param RuntimeOptions                       $runtime           runtime options for this request RuntimeOptions
     *
     * @return ListAppReleaseStageExecutionsResponse ListAppReleaseStageExecutionsResponse
     */
    public function listAppReleaseStageExecutionsWithOptions($appName, $releaseWorkflowSn, $releaseStageSn, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['orderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pagination)) {
            $query['pagination'] = $request->pagination;
        }
        if (!Utils::isUnset($request->perPage)) {
            $query['perPage'] = $request->perPage;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppReleaseStageExecutions',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/appstack/apps/' . OpenApiUtilClient::getEncodeParam($appName) . '/releaseWorkflows/' . OpenApiUtilClient::getEncodeParam($releaseWorkflowSn) . '/releaseStages/' . OpenApiUtilClient::getEncodeParam($releaseStageSn) . '/executions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAppReleaseStageExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询研发阶段执行记录
     *  *
     * @param string                               $appName
     * @param string                               $releaseWorkflowSn
     * @param string                               $releaseStageSn
     * @param ListAppReleaseStageExecutionsRequest $request           ListAppReleaseStageExecutionsRequest
     *
     * @return ListAppReleaseStageExecutionsResponse ListAppReleaseStageExecutionsResponse
     */
    public function listAppReleaseStageExecutions($appName, $releaseWorkflowSn, $releaseStageSn, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppReleaseStageExecutionsWithOptions($appName, $releaseWorkflowSn, $releaseStageSn, $request, $headers, $runtime);
    }

    /**
     * @summary 查找应用成员列表
     *  *
     * @param string                        $appName
     * @param ListApplicationMembersRequest $request ListApplicationMembersRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationMembersResponse ListApplicationMembersResponse
     */
    public function listApplicationMembersWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplicationMembers',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/appstack/apps/' . OpenApiUtilClient::getEncodeParam($appName) . '/members',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListApplicationMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查找应用成员列表
     *  *
     * @param string                        $appName
     * @param ListApplicationMembersRequest $request ListApplicationMembersRequest
     *
     * @return ListApplicationMembersResponse ListApplicationMembersResponse
     */
    public function listApplicationMembers($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listApplicationMembersWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * @summary 分页查找应用详情
     *  *
     * @param ListApplicationsRequest $request ListApplicationsRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationsResponse ListApplicationsResponse
     */
    public function listApplicationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['orderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->pagination)) {
            $query['pagination'] = $request->pagination;
        }
        if (!Utils::isUnset($request->perPage)) {
            $query['perPage'] = $request->perPage;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplications',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/appstack/apps%3Asearch',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 分页查找应用详情
     *  *
     * @param ListApplicationsRequest $request ListApplicationsRequest
     *
     * @return ListApplicationsResponse ListApplicationsResponse
     */
    public function listApplications($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listApplicationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询变更研发流程运行记录
     *  *
     * @param string                                     $appName
     * @param string                                     $sn
     * @param ListChangeRequestWorkflowExecutionsRequest $request ListChangeRequestWorkflowExecutionsRequest
     * @param string[]                                   $headers map
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListChangeRequestWorkflowExecutionsResponse ListChangeRequestWorkflowExecutionsResponse
     */
    public function listChangeRequestWorkflowExecutionsWithOptions($appName, $sn, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderBy)) {
            $query['orderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->perPage)) {
            $query['perPage'] = $request->perPage;
        }
        if (!Utils::isUnset($request->releaseStageSn)) {
            $query['releaseStageSn'] = $request->releaseStageSn;
        }
        if (!Utils::isUnset($request->releaseWorkflowSn)) {
            $query['releaseWorkflowSn'] = $request->releaseWorkflowSn;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListChangeRequestWorkflowExecutions',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/appstack/apps/' . OpenApiUtilClient::getEncodeParam($appName) . '/changeRequests/' . OpenApiUtilClient::getEncodeParam($sn) . '/executions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListChangeRequestWorkflowExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询变更研发流程运行记录
     *  *
     * @param string                                     $appName
     * @param string                                     $sn
     * @param ListChangeRequestWorkflowExecutionsRequest $request ListChangeRequestWorkflowExecutionsRequest
     *
     * @return ListChangeRequestWorkflowExecutionsResponse ListChangeRequestWorkflowExecutionsResponse
     */
    public function listChangeRequestWorkflowExecutions($appName, $sn, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChangeRequestWorkflowExecutionsWithOptions($appName, $sn, $request, $headers, $runtime);
    }

    /**
     * @summary 查询变更列表
     *  *
     * @param string                    $appName
     * @param ListChangeRequestsRequest $tmpReq  ListChangeRequestsRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListChangeRequestsResponse ListChangeRequestsResponse
     */
    public function listChangeRequestsWithOptions($appName, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListChangeRequestsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->appNameList)) {
            $request->appNameListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->appNameList, 'appNameList', 'json');
        }
        if (!Utils::isUnset($tmpReq->ownerIdList)) {
            $request->ownerIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ownerIdList, 'ownerIdList', 'json');
        }
        if (!Utils::isUnset($tmpReq->stateList)) {
            $request->stateListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->stateList, 'stateList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appNameListShrink)) {
            $query['appNameList'] = $request->appNameListShrink;
        }
        if (!Utils::isUnset($request->displayNameKeyword)) {
            $query['displayNameKeyword'] = $request->displayNameKeyword;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['orderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->ownerIdListShrink)) {
            $query['ownerIdList'] = $request->ownerIdListShrink;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pagination)) {
            $query['pagination'] = $request->pagination;
        }
        if (!Utils::isUnset($request->perPage)) {
            $query['perPage'] = $request->perPage;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->stateListShrink)) {
            $query['stateList'] = $request->stateListShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListChangeRequests',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/appstack/apps/' . OpenApiUtilClient::getEncodeParam($appName) . '/changeRequests',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListChangeRequestsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询变更列表
     *  *
     * @param string                    $appName
     * @param ListChangeRequestsRequest $request ListChangeRequestsRequest
     *
     * @return ListChangeRequestsResponse ListChangeRequestsResponse
     */
    public function listChangeRequests($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChangeRequestsWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * @summary 查询检查运行列表
     *  *
     * @param ListCheckRunsRequest $request ListCheckRunsRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCheckRunsResponse ListCheckRunsResponse
     */
    public function listCheckRunsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->ref)) {
            $query['ref'] = $request->ref;
        }
        if (!Utils::isUnset($request->repositoryIdentity)) {
            $query['repositoryIdentity'] = $request->repositoryIdentity;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCheckRuns',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/check_runs/list_check_runs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCheckRunsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询检查运行列表
     *  *
     * @param ListCheckRunsRequest $request ListCheckRunsRequest
     *
     * @return ListCheckRunsResponse ListCheckRunsResponse
     */
    public function listCheckRuns($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCheckRunsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询提交状态列表
     *  *
     * @param ListCommitStatusesRequest $request ListCommitStatusesRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCommitStatusesResponse ListCommitStatusesResponse
     */
    public function listCommitStatusesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->repositoryIdentity)) {
            $query['repositoryIdentity'] = $request->repositoryIdentity;
        }
        if (!Utils::isUnset($request->sha)) {
            $query['sha'] = $request->sha;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCommitStatuses',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/repository/commit_statuses/list_commit_statuses',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCommitStatusesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询提交状态列表
     *  *
     * @param ListCommitStatusesRequest $request ListCommitStatusesRequest
     *
     * @return ListCommitStatusesResponse ListCommitStatusesResponse
     */
    public function listCommitStatuses($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCommitStatusesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取标签分类列表
     *  *
     * @param string         $organizationId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListFlowTagGroupsResponse ListFlowTagGroupsResponse
     */
    public function listFlowTagGroupsWithOptions($organizationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListFlowTagGroups',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/flow/tagGroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFlowTagGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取标签分类列表
     *  *
     * @param string $organizationId
     *
     * @return ListFlowTagGroupsResponse ListFlowTagGroupsResponse
     */
    public function listFlowTagGroups($organizationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowTagGroupsWithOptions($organizationId, $headers, $runtime);
    }

    /**
     * @summary 查询组成员列表
     *  *
     * @param string                 $groupId
     * @param ListGroupMemberRequest $request ListGroupMemberRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGroupMemberResponse ListGroupMemberResponse
     */
    public function listGroupMemberWithOptions($groupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroupMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询组成员列表
     *  *
     * @param string                 $groupId
     * @param ListGroupMemberRequest $request ListGroupMemberRequest
     *
     * @return ListGroupMemberResponse ListGroupMemberResponse
     */
    public function listGroupMember($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGroupMemberWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询代码组下的库列表
     *  *
     * @param string                       $groupId
     * @param ListGroupRepositoriesRequest $request ListGroupRepositoriesRequest
     * @param string[]                     $headers map
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGroupRepositoriesResponse ListGroupRepositoriesResponse
     */
    public function listGroupRepositoriesWithOptions($groupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->search)) {
            $query['search'] = $request->search;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroupRepositories',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/projects',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListGroupRepositoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询代码组下的库列表
     *  *
     * @param string                       $groupId
     * @param ListGroupRepositoriesRequest $request ListGroupRepositoriesRequest
     *
     * @return ListGroupRepositoriesResponse ListGroupRepositoriesResponse
     */
    public function listGroupRepositories($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGroupRepositoriesWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取主机组列表
     *  *
     * @param string                $organizationId
     * @param ListHostGroupsRequest $request        ListHostGroupsRequest
     * @param string[]              $headers        map
     * @param RuntimeOptions        $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListHostGroupsResponse ListHostGroupsResponse
     */
    public function listHostGroupsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createEndTime)) {
            $query['createEndTime'] = $request->createEndTime;
        }
        if (!Utils::isUnset($request->createStartTime)) {
            $query['createStartTime'] = $request->createStartTime;
        }
        if (!Utils::isUnset($request->creatorAccountIds)) {
            $query['creatorAccountIds'] = $request->creatorAccountIds;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageOrder)) {
            $query['pageOrder'] = $request->pageOrder;
        }
        if (!Utils::isUnset($request->pageSort)) {
            $query['pageSort'] = $request->pageSort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHostGroups',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/hostGroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListHostGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取主机组列表
     *  *
     * @param string                $organizationId
     * @param ListHostGroupsRequest $request        ListHostGroupsRequest
     *
     * @return ListHostGroupsResponse ListHostGroupsResponse
     */
    public function listHostGroups($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHostGroupsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 当前用户加入的企业列表
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJoinedOrganizationsResponse ListJoinedOrganizationsResponse
     */
    public function listJoinedOrganizationsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListJoinedOrganizations',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/users/joinedOrgs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListJoinedOrganizationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 当前用户加入的企业列表
     *  *
     * @return ListJoinedOrganizationsResponse ListJoinedOrganizationsResponse
     */
    public function listJoinedOrganizations()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJoinedOrganizationsWithOptions($headers, $runtime);
    }

    /**
     * @summary 查询合并请求评论列表
     *  *
     * @param ListMergeRequestCommentsRequest $request ListMergeRequestCommentsRequest
     * @param string[]                        $headers map
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMergeRequestCommentsResponse ListMergeRequestCommentsResponse
     */
    public function listMergeRequestCommentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->localId)) {
            $query['localId'] = $request->localId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->repositoryIdentity)) {
            $query['repositoryIdentity'] = $request->repositoryIdentity;
        }
        $body = [];
        if (!Utils::isUnset($request->commentType)) {
            $body['commentType'] = $request->commentType;
        }
        if (!Utils::isUnset($request->filePath)) {
            $body['filePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->patchSetBizIds)) {
            $body['patchSetBizIds'] = $request->patchSetBizIds;
        }
        if (!Utils::isUnset($request->resolved)) {
            $body['resolved'] = $request->resolved;
        }
        if (!Utils::isUnset($request->state)) {
            $body['state'] = $request->state;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMergeRequestComments',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/merge_requests/comments/list_comments',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMergeRequestCommentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询合并请求评论列表
     *  *
     * @param ListMergeRequestCommentsRequest $request ListMergeRequestCommentsRequest
     *
     * @return ListMergeRequestCommentsResponse ListMergeRequestCommentsResponse
     */
    public function listMergeRequestComments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMergeRequestCommentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询合并请求文件已读列表
     *  *
     * @param ListMergeRequestFilesReadsRequest $request ListMergeRequestFilesReadsRequest
     * @param string[]                          $headers map
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMergeRequestFilesReadsResponse ListMergeRequestFilesReadsResponse
     */
    public function listMergeRequestFilesReadsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->fromPatchSetBizId)) {
            $query['fromPatchSetBizId'] = $request->fromPatchSetBizId;
        }
        if (!Utils::isUnset($request->localId)) {
            $query['localId'] = $request->localId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->repositoryIdentity)) {
            $query['repositoryIdentity'] = $request->repositoryIdentity;
        }
        if (!Utils::isUnset($request->toPatchSetBizId)) {
            $query['toPatchSetBizId'] = $request->toPatchSetBizId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMergeRequestFilesReads',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/merge_requests/diffs/files_read_infos',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMergeRequestFilesReadsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询合并请求文件已读列表
     *  *
     * @param ListMergeRequestFilesReadsRequest $request ListMergeRequestFilesReadsRequest
     *
     * @return ListMergeRequestFilesReadsResponse ListMergeRequestFilesReadsResponse
     */
    public function listMergeRequestFilesReads($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMergeRequestFilesReadsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询合并请求Label列表
     *  *
     * @param ListMergeRequestLabelsRequest $request ListMergeRequestLabelsRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMergeRequestLabelsResponse ListMergeRequestLabelsResponse
     */
    public function listMergeRequestLabelsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->localId)) {
            $query['localId'] = $request->localId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->repositoryIdentity)) {
            $query['repositoryIdentity'] = $request->repositoryIdentity;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMergeRequestLabels',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/merge_requests/labels',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMergeRequestLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询合并请求Label列表
     *  *
     * @param ListMergeRequestLabelsRequest $request ListMergeRequestLabelsRequest
     *
     * @return ListMergeRequestLabelsResponse ListMergeRequestLabelsResponse
     */
    public function listMergeRequestLabels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMergeRequestLabelsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询合并请求的版本列表
     *  *
     * @param ListMergeRequestPatchSetsRequest $request ListMergeRequestPatchSetsRequest
     * @param string[]                         $headers map
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMergeRequestPatchSetsResponse ListMergeRequestPatchSetsResponse
     */
    public function listMergeRequestPatchSetsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->localId)) {
            $query['localId'] = $request->localId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->repositoryIdentity)) {
            $query['repositoryIdentity'] = $request->repositoryIdentity;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMergeRequestPatchSets',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/merge_requests/diffs/list_patchsets',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMergeRequestPatchSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询合并请求的版本列表
     *  *
     * @param ListMergeRequestPatchSetsRequest $request ListMergeRequestPatchSetsRequest
     *
     * @return ListMergeRequestPatchSetsResponse ListMergeRequestPatchSetsResponse
     */
    public function listMergeRequestPatchSets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMergeRequestPatchSetsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询代码评审列表
     *  *
     * @param ListMergeRequestsRequest $request ListMergeRequestsRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMergeRequestsResponse ListMergeRequestsResponse
     */
    public function listMergeRequestsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->authorIds)) {
            $query['authorIds'] = $request->authorIds;
        }
        if (!Utils::isUnset($request->createdAfter)) {
            $query['createdAfter'] = $request->createdAfter;
        }
        if (!Utils::isUnset($request->createdBefore)) {
            $query['createdBefore'] = $request->createdBefore;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->groupIds)) {
            $query['groupIds'] = $request->groupIds;
        }
        if (!Utils::isUnset($request->labelIds)) {
            $query['labelIds'] = $request->labelIds;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['orderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectIds)) {
            $query['projectIds'] = $request->projectIds;
        }
        if (!Utils::isUnset($request->reviewerIds)) {
            $query['reviewerIds'] = $request->reviewerIds;
        }
        if (!Utils::isUnset($request->search)) {
            $query['search'] = $request->search;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->state)) {
            $query['state'] = $request->state;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMergeRequests',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/merge_requests/advanced_search',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMergeRequestsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询代码评审列表
     *  *
     * @param ListMergeRequestsRequest $request ListMergeRequestsRequest
     *
     * @return ListMergeRequestsResponse ListMergeRequestsResponse
     */
    public function listMergeRequests($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMergeRequestsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取企业成员列表
     *  *
     * @param string                         $organizationId
     * @param ListOrganizationMembersRequest $request        ListOrganizationMembersRequest
     * @param string[]                       $headers        map
     * @param RuntimeOptions                 $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListOrganizationMembersResponse ListOrganizationMembersResponse
     */
    public function listOrganizationMembersWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->containsExternInfo)) {
            $query['containsExternInfo'] = $request->containsExternInfo;
        }
        if (!Utils::isUnset($request->externUid)) {
            $query['externUid'] = $request->externUid;
        }
        if (!Utils::isUnset($request->joinTimeFrom)) {
            $query['joinTimeFrom'] = $request->joinTimeFrom;
        }
        if (!Utils::isUnset($request->joinTimeTo)) {
            $query['joinTimeTo'] = $request->joinTimeTo;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->organizationMemberName)) {
            $query['organizationMemberName'] = $request->organizationMemberName;
        }
        if (!Utils::isUnset($request->provider)) {
            $query['provider'] = $request->provider;
        }
        if (!Utils::isUnset($request->state)) {
            $query['state'] = $request->state;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOrganizationMembers',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/members',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListOrganizationMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取企业成员列表
     *  *
     * @param string                         $organizationId
     * @param ListOrganizationMembersRequest $request        ListOrganizationMembersRequest
     *
     * @return ListOrganizationMembersResponse ListOrganizationMembersResponse
     */
    public function listOrganizationMembers($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOrganizationMembersWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询用户企业列表
     *  *
     * @param ListOrganizationsRequest $request ListOrganizationsRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOrganizationsResponse ListOrganizationsResponse
     */
    public function listOrganizationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessLevel)) {
            $query['accessLevel'] = $request->accessLevel;
        }
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->minAccessLevel)) {
            $query['minAccessLevel'] = $request->minAccessLevel;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOrganizations',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organizations/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListOrganizationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户企业列表
     *  *
     * @param ListOrganizationsRequest $request ListOrganizationsRequest
     *
     * @return ListOrganizationsResponse ListOrganizationsResponse
     */
    public function listOrganizations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOrganizationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取流水线分组下流水线列表列表
     *  *
     * @param string                            $organizationId
     * @param string                            $groupId
     * @param ListPipelineGroupPipelinesRequest $request        ListPipelineGroupPipelinesRequest
     * @param string[]                          $headers        map
     * @param RuntimeOptions                    $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListPipelineGroupPipelinesResponse ListPipelineGroupPipelinesResponse
     */
    public function listPipelineGroupPipelinesWithOptions($organizationId, $groupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createEndTime)) {
            $query['createEndTime'] = $request->createEndTime;
        }
        if (!Utils::isUnset($request->createStartTime)) {
            $query['createStartTime'] = $request->createStartTime;
        }
        if (!Utils::isUnset($request->executeEndTime)) {
            $query['executeEndTime'] = $request->executeEndTime;
        }
        if (!Utils::isUnset($request->executeStartTime)) {
            $query['executeStartTime'] = $request->executeStartTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pipelineName)) {
            $query['pipelineName'] = $request->pipelineName;
        }
        if (!Utils::isUnset($request->resultStatusList)) {
            $query['resultStatusList'] = $request->resultStatusList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelineGroupPipelines',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelineGroups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/pipelines',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineGroupPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流水线分组下流水线列表列表
     *  *
     * @param string                            $organizationId
     * @param string                            $groupId
     * @param ListPipelineGroupPipelinesRequest $request        ListPipelineGroupPipelinesRequest
     *
     * @return ListPipelineGroupPipelinesResponse ListPipelineGroupPipelinesResponse
     */
    public function listPipelineGroupPipelines($organizationId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineGroupPipelinesWithOptions($organizationId, $groupId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取流水线分组列表
     *  *
     * @param string                    $organizationId
     * @param ListPipelineGroupsRequest $request        ListPipelineGroupsRequest
     * @param string[]                  $headers        map
     * @param RuntimeOptions            $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListPipelineGroupsResponse ListPipelineGroupsResponse
     */
    public function listPipelineGroupsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelineGroups',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelineGroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流水线分组列表
     *  *
     * @param string                    $organizationId
     * @param ListPipelineGroupsRequest $request        ListPipelineGroupsRequest
     *
     * @return ListPipelineGroupsResponse ListPipelineGroupsResponse
     */
    public function listPipelineGroups($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineGroupsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取流水线运行过的任务历史
     *  *
     * @param string                         $organizationId
     * @param string                         $pipelineId
     * @param ListPipelineJobHistorysRequest $request        ListPipelineJobHistorysRequest
     * @param string[]                       $headers        map
     * @param RuntimeOptions                 $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListPipelineJobHistorysResponse ListPipelineJobHistorysResponse
     */
    public function listPipelineJobHistorysWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['category'] = $request->category;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelineJobHistorys',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipeline/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/job/historys',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineJobHistorysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流水线运行过的任务历史
     *  *
     * @param string                         $organizationId
     * @param string                         $pipelineId
     * @param ListPipelineJobHistorysRequest $request        ListPipelineJobHistorysRequest
     *
     * @return ListPipelineJobHistorysResponse ListPipelineJobHistorysResponse
     */
    public function listPipelineJobHistorys($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineJobHistorysWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取流水线运行过的任务
     *  *
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param ListPipelineJobsRequest $request        ListPipelineJobsRequest
     * @param string[]                $headers        map
     * @param RuntimeOptions          $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListPipelineJobsResponse ListPipelineJobsResponse
     */
    public function listPipelineJobsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['category'] = $request->category;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelineJobs',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipeline/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/jobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流水线运行过的任务
     *  *
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param ListPipelineJobsRequest $request        ListPipelineJobsRequest
     *
     * @return ListPipelineJobsResponse ListPipelineJobsResponse
     */
    public function listPipelineJobs($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineJobsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取流水线关联列表
     *  *
     * @param string                       $organizationId
     * @param string                       $pipelineId
     * @param ListPipelineRelationsRequest $request        ListPipelineRelationsRequest
     * @param string[]                     $headers        map
     * @param RuntimeOptions               $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListPipelineRelationsResponse ListPipelineRelationsResponse
     */
    public function listPipelineRelationsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->relObjectType)) {
            $query['relObjectType'] = $request->relObjectType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelineRelations',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRelations',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流水线关联列表
     *  *
     * @param string                       $organizationId
     * @param string                       $pipelineId
     * @param ListPipelineRelationsRequest $request        ListPipelineRelationsRequest
     *
     * @return ListPipelineRelationsResponse ListPipelineRelationsResponse
     */
    public function listPipelineRelations($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineRelationsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取流水线运行历史
     *  *
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param ListPipelineRunsRequest $request        ListPipelineRunsRequest
     * @param string[]                $headers        map
     * @param RuntimeOptions          $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListPipelineRunsResponse ListPipelineRunsResponse
     */
    public function listPipelineRunsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        if (!Utils::isUnset($request->triggerMode)) {
            $query['triggerMode'] = $request->triggerMode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelineRuns',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRuns',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelineRunsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流水线运行历史
     *  *
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param ListPipelineRunsRequest $request        ListPipelineRunsRequest
     *
     * @return ListPipelineRunsResponse ListPipelineRunsResponse
     */
    public function listPipelineRuns($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineRunsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取流水线列表
     *  *
     * @param string               $organizationId
     * @param ListPipelinesRequest $request        ListPipelinesRequest
     * @param string[]             $headers        map
     * @param RuntimeOptions       $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListPipelinesResponse ListPipelinesResponse
     */
    public function listPipelinesWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createEndTime)) {
            $query['createEndTime'] = $request->createEndTime;
        }
        if (!Utils::isUnset($request->createStartTime)) {
            $query['createStartTime'] = $request->createStartTime;
        }
        if (!Utils::isUnset($request->creatorAccountIds)) {
            $query['creatorAccountIds'] = $request->creatorAccountIds;
        }
        if (!Utils::isUnset($request->executeAccountIds)) {
            $query['executeAccountIds'] = $request->executeAccountIds;
        }
        if (!Utils::isUnset($request->executeEndTime)) {
            $query['executeEndTime'] = $request->executeEndTime;
        }
        if (!Utils::isUnset($request->executeStartTime)) {
            $query['executeStartTime'] = $request->executeStartTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pipelineName)) {
            $query['pipelineName'] = $request->pipelineName;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['statusList'] = $request->statusList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPipelines',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流水线列表
     *  *
     * @param string               $organizationId
     * @param ListPipelinesRequest $request        ListPipelinesRequest
     *
     * @return ListPipelinesResponse ListPipelinesResponse
     */
    public function listPipelines($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelinesWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询代码库Label列表
     *  *
     * @param ListProjectLabelsRequest $request ListProjectLabelsRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProjectLabelsResponse ListProjectLabelsResponse
     */
    public function listProjectLabelsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['orderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->repositoryIdentity)) {
            $query['repositoryIdentity'] = $request->repositoryIdentity;
        }
        if (!Utils::isUnset($request->search)) {
            $query['search'] = $request->search;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->withCounts)) {
            $query['withCounts'] = $request->withCounts;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjectLabels',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/labels',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询代码库Label列表
     *  *
     * @param ListProjectLabelsRequest $request ListProjectLabelsRequest
     *
     * @return ListProjectLabelsResponse ListProjectLabelsResponse
     */
    public function listProjectLabels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectLabelsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 根据项目id获取项目所以成员
     *  *
     * @param string                    $organizationId
     * @param string                    $projectId
     * @param ListProjectMembersRequest $request        ListProjectMembersRequest
     * @param string[]                  $headers        map
     * @param RuntimeOptions            $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListProjectMembersResponse ListProjectMembersResponse
     */
    public function listProjectMembersWithOptions($organizationId, $projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->targetType)) {
            $query['targetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjectMembers',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/listMembers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据项目id获取项目所以成员
     *  *
     * @param string                    $organizationId
     * @param string                    $projectId
     * @param ListProjectMembersRequest $request        ListProjectMembersRequest
     *
     * @return ListProjectMembersResponse ListProjectMembersResponse
     */
    public function listProjectMembers($organizationId, $projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectMembersWithOptions($organizationId, $projectId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取项目模板列表
     *  *
     * @param string                      $organizationId
     * @param ListProjectTemplatesRequest $request        ListProjectTemplatesRequest
     * @param string[]                    $headers        map
     * @param RuntimeOptions              $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListProjectTemplatesResponse ListProjectTemplatesResponse
     */
    public function listProjectTemplatesWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['category'] = $request->category;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjectTemplates',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/projects/listTemplates',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取项目模板列表
     *  *
     * @param string                      $organizationId
     * @param ListProjectTemplatesRequest $request        ListProjectTemplatesRequest
     *
     * @return ListProjectTemplatesResponse ListProjectTemplatesResponse
     */
    public function listProjectTemplates($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectTemplatesWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取项目下开启的工作项类型
     *  *
     * @param string                          $organizationId
     * @param string                          $projectId
     * @param ListProjectWorkitemTypesRequest $request        ListProjectWorkitemTypesRequest
     * @param string[]                        $headers        map
     * @param RuntimeOptions                  $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListProjectWorkitemTypesResponse ListProjectWorkitemTypesResponse
     */
    public function listProjectWorkitemTypesWithOptions($organizationId, $projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['category'] = $request->category;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $query['spaceType'] = $request->spaceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjectWorkitemTypes',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/getWorkitemType',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectWorkitemTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取项目下开启的工作项类型
     *  *
     * @param string                          $organizationId
     * @param string                          $projectId
     * @param ListProjectWorkitemTypesRequest $request        ListProjectWorkitemTypesRequest
     *
     * @return ListProjectWorkitemTypesResponse ListProjectWorkitemTypesResponse
     */
    public function listProjectWorkitemTypes($organizationId, $projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectWorkitemTypesWithOptions($organizationId, $projectId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取项目列表
     *  *
     * @param string              $organizationId
     * @param ListProjectsRequest $request        ListProjectsRequest
     * @param string[]            $headers        map
     * @param RuntimeOptions      $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListProjectsResponse ListProjectsResponse
     */
    public function listProjectsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['category'] = $request->category;
        }
        if (!Utils::isUnset($request->conditions)) {
            $query['conditions'] = $request->conditions;
        }
        if (!Utils::isUnset($request->extraConditions)) {
            $query['extraConditions'] = $request->extraConditions;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['scope'] = $request->scope;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProjects',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/listProjects',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取项目列表
     *  *
     * @param string              $organizationId
     * @param ListProjectsRequest $request        ListProjectsRequest
     *
     * @return ListProjectsResponse ListProjectsResponse
     */
    public function listProjects($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询保护分支列表
     *  *
     * @param string                       $repositoryId
     * @param ListProtectedBranchesRequest $request      ListProtectedBranchesRequest
     * @param string[]                     $headers      map
     * @param RuntimeOptions               $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListProtectedBranchesResponse ListProtectedBranchesResponse
     */
    public function listProtectedBranchesWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProtectedBranches',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/protect_branches',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProtectedBranchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询保护分支列表
     *  *
     * @param string                       $repositoryId
     * @param ListProtectedBranchesRequest $request      ListProtectedBranchesRequest
     *
     * @return ListProtectedBranchesResponse ListProtectedBranchesResponse
     */
    public function listProtectedBranches($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProtectedBranchesWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询推送规则列表
     *  *
     * @param string               $repositoryId
     * @param ListPushRulesRequest $request      ListPushRulesRequest
     * @param string[]             $headers      map
     * @param RuntimeOptions       $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListPushRulesResponse ListPushRulesResponse
     */
    public function listPushRulesWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPushRules',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/push_rule/push_rules/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListPushRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询推送规则列表
     *  *
     * @param string               $repositoryId
     * @param ListPushRulesRequest $request      ListPushRulesRequest
     *
     * @return ListPushRulesResponse ListPushRulesResponse
     */
    public function listPushRules($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPushRulesWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询代码库列表
     *  *
     * @param ListRepositoriesRequest $request ListRepositoriesRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRepositoriesResponse ListRepositoriesResponse
     */
    public function listRepositoriesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->archived)) {
            $query['archived'] = $request->archived;
        }
        if (!Utils::isUnset($request->minAccessLevel)) {
            $query['minAccessLevel'] = $request->minAccessLevel;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['orderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->perPage)) {
            $query['perPage'] = $request->perPage;
        }
        if (!Utils::isUnset($request->search)) {
            $query['search'] = $request->search;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRepositories',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepositoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询代码库列表
     *  *
     * @param ListRepositoriesRequest $request ListRepositoriesRequest
     *
     * @return ListRepositoriesResponse ListRepositoriesResponse
     */
    public function listRepositories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询分支列表
     *  *
     * @param string                        $repositoryId
     * @param ListRepositoryBranchesRequest $request      ListRepositoryBranchesRequest
     * @param string[]                      $headers      map
     * @param RuntimeOptions                $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListRepositoryBranchesResponse ListRepositoryBranchesResponse
     */
    public function listRepositoryBranchesWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->search)) {
            $query['search'] = $request->search;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRepositoryBranches',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/branches',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepositoryBranchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询分支列表
     *  *
     * @param string                        $repositoryId
     * @param ListRepositoryBranchesRequest $request      ListRepositoryBranchesRequest
     *
     * @return ListRepositoryBranchesResponse ListRepositoryBranchesResponse
     */
    public function listRepositoryBranches($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryBranchesWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询代码库单个提交（Commit）的提交内容
     *  *
     * @param string                          $repositoryId
     * @param string                          $sha
     * @param ListRepositoryCommitDiffRequest $request      ListRepositoryCommitDiffRequest
     * @param string[]                        $headers      map
     * @param RuntimeOptions                  $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListRepositoryCommitDiffResponse ListRepositoryCommitDiffResponse
     */
    public function listRepositoryCommitDiffWithOptions($repositoryId, $sha, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->contextLine)) {
            $query['contextLine'] = $request->contextLine;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRepositoryCommitDiff',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/commits/' . OpenApiUtilClient::getEncodeParam($sha) . '/diff',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepositoryCommitDiffResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询代码库单个提交（Commit）的提交内容
     *  *
     * @param string                          $repositoryId
     * @param string                          $sha
     * @param ListRepositoryCommitDiffRequest $request      ListRepositoryCommitDiffRequest
     *
     * @return ListRepositoryCommitDiffResponse ListRepositoryCommitDiffResponse
     */
    public function listRepositoryCommitDiff($repositoryId, $sha, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryCommitDiffWithOptions($repositoryId, $sha, $request, $headers, $runtime);
    }

    /**
     * @summary 查询代码库提交历史
     *  *
     * @param string                       $repositoryId
     * @param ListRepositoryCommitsRequest $request      ListRepositoryCommitsRequest
     * @param string[]                     $headers      map
     * @param RuntimeOptions               $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListRepositoryCommitsResponse ListRepositoryCommitsResponse
     */
    public function listRepositoryCommitsWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->end)) {
            $query['end'] = $request->end;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->path)) {
            $query['path'] = $request->path;
        }
        if (!Utils::isUnset($request->refName)) {
            $query['refName'] = $request->refName;
        }
        if (!Utils::isUnset($request->search)) {
            $query['search'] = $request->search;
        }
        if (!Utils::isUnset($request->showCommentsCount)) {
            $query['showCommentsCount'] = $request->showCommentsCount;
        }
        if (!Utils::isUnset($request->showSignature)) {
            $query['showSignature'] = $request->showSignature;
        }
        if (!Utils::isUnset($request->start)) {
            $query['start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRepositoryCommits',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/commits',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepositoryCommitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询代码库提交历史
     *  *
     * @param string                       $repositoryId
     * @param ListRepositoryCommitsRequest $request      ListRepositoryCommitsRequest
     *
     * @return ListRepositoryCommitsResponse ListRepositoryCommitsResponse
     */
    public function listRepositoryCommits($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryCommitsWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询代码组列表
     *  *
     * @param ListRepositoryGroupsRequest $request ListRepositoryGroupsRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRepositoryGroupsResponse ListRepositoryGroupsResponse
     */
    public function listRepositoryGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->includePersonal)) {
            $query['includePersonal'] = $request->includePersonal;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['orderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['parentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->search)) {
            $query['search'] = $request->search;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRepositoryGroups',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/groups/get/all',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepositoryGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询代码组列表
     *  *
     * @param ListRepositoryGroupsRequest $request ListRepositoryGroupsRequest
     *
     * @return ListRepositoryGroupsResponse ListRepositoryGroupsResponse
     */
    public function listRepositoryGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询代码库成员列表
     *  *
     * @param string                                   $repositoryId
     * @param ListRepositoryMemberWithInheritedRequest $request      ListRepositoryMemberWithInheritedRequest
     * @param string[]                                 $headers      map
     * @param RuntimeOptions                           $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListRepositoryMemberWithInheritedResponse ListRepositoryMemberWithInheritedResponse
     */
    public function listRepositoryMemberWithInheritedWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRepositoryMemberWithInherited',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/members/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepositoryMemberWithInheritedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询代码库成员列表
     *  *
     * @param string                                   $repositoryId
     * @param ListRepositoryMemberWithInheritedRequest $request      ListRepositoryMemberWithInheritedRequest
     *
     * @return ListRepositoryMemberWithInheritedResponse ListRepositoryMemberWithInheritedResponse
     */
    public function listRepositoryMemberWithInherited($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryMemberWithInheritedWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询标签列表
     *  *
     * @param string                    $repositoryId
     * @param ListRepositoryTagsRequest $request      ListRepositoryTagsRequest
     * @param string[]                  $headers      map
     * @param RuntimeOptions            $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListRepositoryTagsResponse ListRepositoryTagsResponse
     */
    public function listRepositoryTagsWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->search)) {
            $query['search'] = $request->search;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRepositoryTags',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/tag/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepositoryTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询标签列表
     *  *
     * @param string                    $repositoryId
     * @param ListRepositoryTagsRequest $request      ListRepositoryTagsRequest
     *
     * @return ListRepositoryTagsResponse ListRepositoryTagsResponse
     */
    public function listRepositoryTags($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryTagsWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询代码库文件树
     *  *
     * @param string                    $repositoryId
     * @param ListRepositoryTreeRequest $request      ListRepositoryTreeRequest
     * @param string[]                  $headers      map
     * @param RuntimeOptions            $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListRepositoryTreeResponse ListRepositoryTreeResponse
     */
    public function listRepositoryTreeWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->path)) {
            $query['path'] = $request->path;
        }
        if (!Utils::isUnset($request->refName)) {
            $query['refName'] = $request->refName;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRepositoryTree',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/files/tree',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepositoryTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询代码库文件树
     *  *
     * @param string                    $repositoryId
     * @param ListRepositoryTreeRequest $request      ListRepositoryTreeRequest
     *
     * @return ListRepositoryTreeResponse ListRepositoryTreeResponse
     */
    public function listRepositoryTree($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryTreeWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询代码库Webhook列表
     *  *
     * @param string                       $repositoryId
     * @param ListRepositoryWebhookRequest $request      ListRepositoryWebhookRequest
     * @param string[]                     $headers      map
     * @param RuntimeOptions               $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListRepositoryWebhookResponse ListRepositoryWebhookResponse
     */
    public function listRepositoryWebhookWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRepositoryWebhook',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/webhooks/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRepositoryWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询代码库Webhook列表
     *  *
     * @param string                       $repositoryId
     * @param ListRepositoryWebhookRequest $request      ListRepositoryWebhookRequest
     *
     * @return ListRepositoryWebhookResponse ListRepositoryWebhookResponse
     */
    public function listRepositoryWebhook($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryWebhookWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取资源成员列表
     *  *
     * @param string         $organizationId
     * @param string         $resourceType
     * @param string         $resourceId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListResourceMembersResponse ListResourceMembersResponse
     */
    public function listResourceMembersWithOptions($organizationId, $resourceType, $resourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListResourceMembers',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/' . OpenApiUtilClient::getEncodeParam($resourceType) . '/' . OpenApiUtilClient::getEncodeParam($resourceId) . '/members',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取资源成员列表
     *  *
     * @param string $organizationId
     * @param string $resourceType
     * @param string $resourceId
     *
     * @return ListResourceMembersResponse ListResourceMembersResponse
     */
    public function listResourceMembers($organizationId, $resourceType, $resourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceMembersWithOptions($organizationId, $resourceType, $resourceId, $headers, $runtime);
    }

    /**
     * @summary 搜索代码提交数据
     *  *
     * @param ListSearchCommitRequest $request ListSearchCommitRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSearchCommitResponse ListSearchCommitResponse
     */
    public function listSearchCommitWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->keyword)) {
            $body['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->order)) {
            $body['order'] = $request->order;
        }
        if (!Utils::isUnset($request->page)) {
            $body['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->repoPath)) {
            $body['repoPath'] = $request->repoPath;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->sort)) {
            $body['sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSearchCommit',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/search/commit',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSearchCommitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 搜索代码提交数据
     *  *
     * @param ListSearchCommitRequest $request ListSearchCommitRequest
     *
     * @return ListSearchCommitResponse ListSearchCommitResponse
     */
    public function listSearchCommit($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSearchCommitWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 搜索代码仓库数据
     *  *
     * @param ListSearchRepositoryRequest $request ListSearchRepositoryRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSearchRepositoryResponse ListSearchRepositoryResponse
     */
    public function listSearchRepositoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->aliyunPk)) {
            $body['aliyunPk'] = $request->aliyunPk;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->order)) {
            $body['order'] = $request->order;
        }
        if (!Utils::isUnset($request->page)) {
            $body['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->repoPath)) {
            $body['repoPath'] = $request->repoPath;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->sort)) {
            $body['sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->visibilityLevel)) {
            $body['visibilityLevel'] = $request->visibilityLevel;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSearchRepository',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/search/repo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSearchRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 搜索代码仓库数据
     *  *
     * @param ListSearchRepositoryRequest $request ListSearchRepositoryRequest
     *
     * @return ListSearchRepositoryResponse ListSearchRepositoryResponse
     */
    public function listSearchRepository($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSearchRepositoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 搜索代码片段
     *  *
     * @param ListSearchSourceCodeRequest $request ListSearchSourceCodeRequest
     * @param string[]                    $headers map
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSearchSourceCodeResponse ListSearchSourceCodeResponse
     */
    public function listSearchSourceCodeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->filePath)) {
            $body['filePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->isCodeBlock)) {
            $body['isCodeBlock'] = $request->isCodeBlock;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->language)) {
            $body['language'] = $request->language;
        }
        if (!Utils::isUnset($request->order)) {
            $body['order'] = $request->order;
        }
        if (!Utils::isUnset($request->page)) {
            $body['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->repoPath)) {
            $body['repoPath'] = $request->repoPath;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->sort)) {
            $body['sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSearchSourceCode',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/search/code',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSearchSourceCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 搜索代码片段
     *  *
     * @param ListSearchSourceCodeRequest $request ListSearchSourceCodeRequest
     *
     * @return ListSearchSourceCodeResponse ListSearchSourceCodeResponse
     */
    public function listSearchSourceCode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSearchSourceCodeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取服务授权列表
     *  *
     * @param string                  $organizationId
     * @param ListServiceAuthsRequest $request        ListServiceAuthsRequest
     * @param string[]                $headers        map
     * @param RuntimeOptions          $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListServiceAuthsResponse ListServiceAuthsResponse
     */
    public function listServiceAuthsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceAuthType)) {
            $query['serviceAuthType'] = $request->serviceAuthType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceAuths',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/serviceAuths',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServiceAuthsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取服务授权列表
     *  *
     * @param string                  $organizationId
     * @param ListServiceAuthsRequest $request        ListServiceAuthsRequest
     *
     * @return ListServiceAuthsResponse ListServiceAuthsResponse
     */
    public function listServiceAuths($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceAuthsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取服务连接列表
     *  *
     * @param string                        $organizationId
     * @param ListServiceConnectionsRequest $request        ListServiceConnectionsRequest
     * @param string[]                      $headers        map
     * @param RuntimeOptions                $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListServiceConnectionsResponse ListServiceConnectionsResponse
     */
    public function listServiceConnectionsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sericeConnectionType)) {
            $query['sericeConnectionType'] = $request->sericeConnectionType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceConnections',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/serviceConnections',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServiceConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取服务连接列表
     *  *
     * @param string                        $organizationId
     * @param ListServiceConnectionsRequest $request        ListServiceConnectionsRequest
     *
     * @return ListServiceConnectionsResponse ListServiceConnectionsResponse
     */
    public function listServiceConnections($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceConnectionsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取服务证书列表
     *  *
     * @param string                        $organizationId
     * @param ListServiceCredentialsRequest $request        ListServiceCredentialsRequest
     * @param string[]                      $headers        map
     * @param RuntimeOptions                $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListServiceCredentialsResponse ListServiceCredentialsResponse
     */
    public function listServiceCredentialsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serviceCredentialType)) {
            $query['serviceCredentialType'] = $request->serviceCredentialType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceCredentials',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/serviceCredentials',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServiceCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取服务证书列表
     *  *
     * @param string                        $organizationId
     * @param ListServiceCredentialsRequest $request        ListServiceCredentialsRequest
     *
     * @return ListServiceCredentialsResponse ListServiceCredentialsResponse
     */
    public function listServiceCredentials($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceCredentialsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取迭代列表
     *  *
     * @param string             $organizationId
     * @param ListSprintsRequest $request        ListSprintsRequest
     * @param string[]           $headers        map
     * @param RuntimeOptions     $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListSprintsResponse ListSprintsResponse
     */
    public function listSprintsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->spaceIdentifier)) {
            $query['spaceIdentifier'] = $request->spaceIdentifier;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $query['spaceType'] = $request->spaceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSprints',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/sprints/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSprintsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取迭代列表
     *  *
     * @param string             $organizationId
     * @param ListSprintsRequest $request        ListSprintsRequest
     *
     * @return ListSprintsResponse ListSprintsResponse
     */
    public function listSprints($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSprintsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取测试用例全部字段
     *  *
     * @param string                    $organizationId
     * @param ListTestCaseFieldsRequest $request        ListTestCaseFieldsRequest
     * @param string[]                  $headers        map
     * @param RuntimeOptions            $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListTestCaseFieldsResponse ListTestCaseFieldsResponse
     */
    public function listTestCaseFieldsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->spaceIdentifier)) {
            $query['spaceIdentifier'] = $request->spaceIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTestCaseFields',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/testhub/testcase/fields',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTestCaseFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取测试用例全部字段
     *  *
     * @param string                    $organizationId
     * @param ListTestCaseFieldsRequest $request        ListTestCaseFieldsRequest
     *
     * @return ListTestCaseFieldsResponse ListTestCaseFieldsResponse
     */
    public function listTestCaseFields($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTestCaseFieldsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 测试DrawService
     *  *
     * @param ListUserDrawRecordByPkRequest $request ListUserDrawRecordByPkRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserDrawRecordByPkResponse ListUserDrawRecordByPkResponse
     */
    public function listUserDrawRecordByPkWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunPk)) {
            $query['aliyunPk'] = $request->aliyunPk;
        }
        if (!Utils::isUnset($request->drawGroup)) {
            $query['drawGroup'] = $request->drawGroup;
        }
        if (!Utils::isUnset($request->drawPoolName)) {
            $query['drawPoolName'] = $request->drawPoolName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserDrawRecordByPk',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/listUserDrawRecords',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUserDrawRecordByPkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 测试DrawService
     *  *
     * @param ListUserDrawRecordByPkRequest $request ListUserDrawRecordByPkRequest
     *
     * @return ListUserDrawRecordByPkResponse ListUserDrawRecordByPkResponse
     */
    public function listUserDrawRecordByPk($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserDrawRecordByPkWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询当前用户的SSH Key列表
     *  *
     * @param ListUserKeysRequest $request ListUserKeysRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserKeysResponse ListUserKeysResponse
     */
    public function listUserKeysWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['orderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserKeys',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v3/user/keys',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUserKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询当前用户的SSH Key列表
     *  *
     * @param ListUserKeysRequest $request ListUserKeysRequest
     *
     * @return ListUserKeysResponse ListUserKeysResponse
     */
    public function listUserKeys($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserKeysWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询用户有权限的资源（代码库、组）
     *  *
     * @param ListUserResourcesRequest $request ListUserResourcesRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserResourcesResponse ListUserResourcesResponse
     */
    public function listUserResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->userIds)) {
            $query['userIds'] = $request->userIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserResources',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/user/vision/user_resources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUserResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户有权限的资源（代码库、组）
     *  *
     * @param ListUserResourcesRequest $request ListUserResourcesRequest
     *
     * @return ListUserResourcesResponse ListUserResourcesResponse
     */
    public function listUserResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取变量组列表
     *  *
     * @param string                    $organizationId
     * @param ListVariableGroupsRequest $request        ListVariableGroupsRequest
     * @param string[]                  $headers        map
     * @param RuntimeOptions            $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListVariableGroupsResponse ListVariableGroupsResponse
     */
    public function listVariableGroupsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageOrder)) {
            $query['pageOrder'] = $request->pageOrder;
        }
        if (!Utils::isUnset($request->pageSort)) {
            $query['pageSort'] = $request->pageSort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVariableGroups',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/variableGroups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListVariableGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取变量组列表
     *  *
     * @param string                    $organizationId
     * @param ListVariableGroupsRequest $request        ListVariableGroupsRequest
     *
     * @return ListVariableGroupsResponse ListVariableGroupsResponse
     */
    public function listVariableGroups($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVariableGroupsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取项目下工作项的所有字段
     *  *
     * @param string                       $organizationId
     * @param ListWorkItemAllFieldsRequest $request        ListWorkItemAllFieldsRequest
     * @param string[]                     $headers        map
     * @param RuntimeOptions               $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListWorkItemAllFieldsResponse ListWorkItemAllFieldsResponse
     */
    public function listWorkItemAllFieldsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->spaceIdentifier)) {
            $query['spaceIdentifier'] = $request->spaceIdentifier;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $query['spaceType'] = $request->spaceType;
        }
        if (!Utils::isUnset($request->workitemTypeIdentifier)) {
            $query['workitemTypeIdentifier'] = $request->workitemTypeIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkItemAllFields',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/fields/listAll',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkItemAllFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取项目下工作项的所有字段
     *  *
     * @param string                       $organizationId
     * @param ListWorkItemAllFieldsRequest $request        ListWorkItemAllFieldsRequest
     *
     * @return ListWorkItemAllFieldsResponse ListWorkItemAllFieldsResponse
     */
    public function listWorkItemAllFields($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkItemAllFieldsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询工作项工作流的所有状态
     *  *
     * @param string                            $organizationId
     * @param ListWorkItemWorkFlowStatusRequest $request        ListWorkItemWorkFlowStatusRequest
     * @param string[]                          $headers        map
     * @param RuntimeOptions                    $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListWorkItemWorkFlowStatusResponse ListWorkItemWorkFlowStatusResponse
     */
    public function listWorkItemWorkFlowStatusWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->spaceIdentifier)) {
            $query['spaceIdentifier'] = $request->spaceIdentifier;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $query['spaceType'] = $request->spaceType;
        }
        if (!Utils::isUnset($request->workitemCategoryIdentifier)) {
            $query['workitemCategoryIdentifier'] = $request->workitemCategoryIdentifier;
        }
        if (!Utils::isUnset($request->workitemTypeIdentifier)) {
            $query['workitemTypeIdentifier'] = $request->workitemTypeIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkItemWorkFlowStatus',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/workflow/listWorkflowStatus',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkItemWorkFlowStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询工作项工作流的所有状态
     *  *
     * @param string                            $organizationId
     * @param ListWorkItemWorkFlowStatusRequest $request        ListWorkItemWorkFlowStatusRequest
     *
     * @return ListWorkItemWorkFlowStatusResponse ListWorkItemWorkFlowStatusResponse
     */
    public function listWorkItemWorkFlowStatus($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkItemWorkFlowStatusWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取工作项的附件列表
     *  *
     * @param string         $organizationId
     * @param string         $workitemIdentifier
     * @param string[]       $headers            map
     * @param RuntimeOptions $runtime            runtime options for this request RuntimeOptions
     *
     * @return ListWorkitemAttachmentsResponse ListWorkitemAttachmentsResponse
     */
    public function listWorkitemAttachmentsWithOptions($organizationId, $workitemIdentifier, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListWorkitemAttachments',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitem/' . OpenApiUtilClient::getEncodeParam($workitemIdentifier) . '/attachments',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkitemAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取工作项的附件列表
     *  *
     * @param string $organizationId
     * @param string $workitemIdentifier
     *
     * @return ListWorkitemAttachmentsResponse ListWorkitemAttachmentsResponse
     */
    public function listWorkitemAttachments($organizationId, $workitemIdentifier)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkitemAttachmentsWithOptions($organizationId, $workitemIdentifier, $headers, $runtime);
    }

    /**
     * @summary 获取工作项预计工时明细列表
     *  *
     * @param string         $organizationId
     * @param string         $workitemId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListWorkitemEstimateResponse ListWorkitemEstimateResponse
     */
    public function listWorkitemEstimateWithOptions($organizationId, $workitemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListWorkitemEstimate',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/' . OpenApiUtilClient::getEncodeParam($workitemId) . '/estimate/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkitemEstimateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取工作项预计工时明细列表
     *  *
     * @param string $organizationId
     * @param string $workitemId
     *
     * @return ListWorkitemEstimateResponse ListWorkitemEstimateResponse
     */
    public function listWorkitemEstimate($organizationId, $workitemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkitemEstimateWithOptions($organizationId, $workitemId, $headers, $runtime);
    }

    /**
     * @summary 获取工作项工时明细列表
     *  *
     * @param string         $organizationId
     * @param string         $workitemId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListWorkitemTimeResponse ListWorkitemTimeResponse
     */
    public function listWorkitemTimeWithOptions($organizationId, $workitemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListWorkitemTime',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/' . OpenApiUtilClient::getEncodeParam($workitemId) . '/time/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkitemTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取工作项工时明细列表
     *  *
     * @param string $organizationId
     * @param string $workitemId
     *
     * @return ListWorkitemTimeResponse ListWorkitemTimeResponse
     */
    public function listWorkitemTime($organizationId, $workitemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkitemTimeWithOptions($organizationId, $workitemId, $headers, $runtime);
    }

    /**
     * @summary 获取工作项列表
     *  *
     * @param string               $organizationId
     * @param ListWorkitemsRequest $request        ListWorkitemsRequest
     * @param string[]             $headers        map
     * @param RuntimeOptions       $runtime        runtime options for this request RuntimeOptions
     *
     * @return ListWorkitemsResponse ListWorkitemsResponse
     */
    public function listWorkitemsWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['category'] = $request->category;
        }
        if (!Utils::isUnset($request->conditions)) {
            $query['conditions'] = $request->conditions;
        }
        if (!Utils::isUnset($request->extraConditions)) {
            $query['extraConditions'] = $request->extraConditions;
        }
        if (!Utils::isUnset($request->groupCondition)) {
            $query['groupCondition'] = $request->groupCondition;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['orderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->searchType)) {
            $query['searchType'] = $request->searchType;
        }
        if (!Utils::isUnset($request->spaceIdentifier)) {
            $query['spaceIdentifier'] = $request->spaceIdentifier;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $query['spaceType'] = $request->spaceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkitems',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/listWorkitems',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkitemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取工作项列表
     *  *
     * @param string               $organizationId
     * @param ListWorkitemsRequest $request        ListWorkitemsRequest
     *
     * @return ListWorkitemsResponse ListWorkitemsResponse
     */
    public function listWorkitems($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkitemsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 查询工作空间列表
     *  *
     * @param ListWorkspacesRequest $tmpReq  ListWorkspacesRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWorkspacesResponse ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListWorkspacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->statusList)) {
            $request->statusListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->statusList, 'statusList', 'simple');
        }
        if (!Utils::isUnset($tmpReq->workspaceTemplateList)) {
            $request->workspaceTemplateListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->workspaceTemplateList, 'workspaceTemplateList', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->statusListShrink)) {
            $query['statusList'] = $request->statusListShrink;
        }
        if (!Utils::isUnset($request->workspaceTemplateListShrink)) {
            $query['workspaceTemplateList'] = $request->workspaceTemplateListShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWorkspaces',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/workspaces',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询工作空间列表
     *  *
     * @param ListWorkspacesRequest $request ListWorkspacesRequest
     *
     * @return ListWorkspacesResponse ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取流水线运行任务日志
     *  *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $jobId
     * @param string         $pipelineRunId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return LogPipelineJobRunResponse LogPipelineJobRunResponse
     */
    public function logPipelineJobRunWithOptions($organizationId, $pipelineId, $jobId, $pipelineRunId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'LogPipelineJobRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipeline/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRun/' . OpenApiUtilClient::getEncodeParam($pipelineRunId) . '/job/' . OpenApiUtilClient::getEncodeParam($jobId) . '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return LogPipelineJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流水线运行任务日志
     *  *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $jobId
     * @param string $pipelineRunId
     *
     * @return LogPipelineJobRunResponse LogPipelineJobRunResponse
     */
    public function logPipelineJobRun($organizationId, $pipelineId, $jobId, $pipelineRunId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->logPipelineJobRunWithOptions($organizationId, $pipelineId, $jobId, $pipelineRunId, $headers, $runtime);
    }

    /**
     * @summary 获取机器部署日志
     *  *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string         $machineSn
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return LogVMDeployMachineResponse LogVMDeployMachineResponse
     */
    public function logVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'LogVMDeployMachine',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/deploy/' . OpenApiUtilClient::getEncodeParam($deployOrderId) . '/machine/' . OpenApiUtilClient::getEncodeParam($machineSn) . '/log',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return LogVMDeployMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取机器部署日志
     *  *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     * @param string $machineSn
     *
     * @return LogVMDeployMachineResponse LogVMDeployMachineResponse
     */
    public function logVMDeployMachine($organizationId, $pipelineId, $deployOrderId, $machineSn)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->logVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime);
    }

    /**
     * @summary 合并代码评审
     *  *
     * @param string                   $repositoryId
     * @param string                   $localId
     * @param MergeMergeRequestRequest $request      MergeMergeRequestRequest
     * @param string[]                 $headers      map
     * @param RuntimeOptions           $runtime      runtime options for this request RuntimeOptions
     *
     * @return MergeMergeRequestResponse MergeMergeRequestResponse
     */
    public function mergeMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->mergeMessage)) {
            $body['mergeMessage'] = $request->mergeMessage;
        }
        if (!Utils::isUnset($request->mergeType)) {
            $body['mergeType'] = $request->mergeType;
        }
        if (!Utils::isUnset($request->removeSourceBranch)) {
            $body['removeSourceBranch'] = $request->removeSourceBranch;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MergeMergeRequest',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/merge_requests/' . OpenApiUtilClient::getEncodeParam($localId) . '/merge',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return MergeMergeRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 合并代码评审
     *  *
     * @param string                   $repositoryId
     * @param string                   $localId
     * @param MergeMergeRequestRequest $request      MergeMergeRequestRequest
     *
     * @return MergeMergeRequestResponse MergeMergeRequestResponse
     */
    public function mergeMergeRequest($repositoryId, $localId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->mergeMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime);
    }

    /**
     * @summary 通过人工卡点
     *  *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return PassPipelineValidateResponse PassPipelineValidateResponse
     */
    public function passPipelineValidateWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'PassPipelineValidate',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRuns/' . OpenApiUtilClient::getEncodeParam($pipelineRunId) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '/pass',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PassPipelineValidateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通过人工卡点
     *  *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return PassPipelineValidateResponse PassPipelineValidateResponse
     */
    public function passPipelineValidate($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->passPipelineValidateWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * @summary 拒绝人工卡点
     *  *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return RefusePipelineValidateResponse RefusePipelineValidateResponse
     */
    public function refusePipelineValidateWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RefusePipelineValidate',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRuns/' . OpenApiUtilClient::getEncodeParam($pipelineRunId) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '/refuse',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RefusePipelineValidateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 拒绝人工卡点
     *  *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return RefusePipelineValidateResponse RefusePipelineValidateResponse
     */
    public function refusePipelineValidate($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->refusePipelineValidateWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * @summary 释放工作空间
     *  *
     * @param string         $workspaceId
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return ReleaseWorkspaceResponse ReleaseWorkspaceResponse
     */
    public function releaseWorkspaceWithOptions($workspaceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ReleaseWorkspace',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/workspaces/' . OpenApiUtilClient::getEncodeParam($workspaceId) . '/release',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReleaseWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 释放工作空间
     *  *
     * @param string $workspaceId
     *
     * @return ReleaseWorkspaceResponse ReleaseWorkspaceResponse
     */
    public function releaseWorkspace($workspaceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->releaseWorkspaceWithOptions($workspaceId, $headers, $runtime);
    }

    /**
     * @summary 重新打开代码评审
     *  *
     * @param string                    $repositoryId
     * @param string                    $localId
     * @param ReopenMergeRequestRequest $request      ReopenMergeRequestRequest
     * @param string[]                  $headers      map
     * @param RuntimeOptions            $runtime      runtime options for this request RuntimeOptions
     *
     * @return ReopenMergeRequestResponse ReopenMergeRequestResponse
     */
    public function reopenMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReopenMergeRequest',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/merge_requests/' . OpenApiUtilClient::getEncodeParam($localId) . '/reopen',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReopenMergeRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重新打开代码评审
     *  *
     * @param string                    $repositoryId
     * @param string                    $localId
     * @param ReopenMergeRequestRequest $request      ReopenMergeRequestRequest
     *
     * @return ReopenMergeRequestResponse ReopenMergeRequestResponse
     */
    public function reopenMergeRequest($repositoryId, $localId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reopenMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime);
    }

    /**
     * @summary 重置企业公钥
     *  *
     * @param string         $organizationId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return ResetSshKeyResponse ResetSshKeyResponse
     */
    public function resetSshKeyWithOptions($organizationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ResetSshKey',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/sshKey',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResetSshKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重置企业公钥
     *  *
     * @param string $organizationId
     *
     * @return ResetSshKeyResponse ResetSshKeyResponse
     */
    public function resetSshKey($organizationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resetSshKeyWithOptions($organizationId, $headers, $runtime);
    }

    /**
     * @summary 继续部署
     *  *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return ResumeVMDeployOrderResponse ResumeVMDeployOrderResponse
     */
    public function resumeVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ResumeVMDeployOrder',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/deploy/' . OpenApiUtilClient::getEncodeParam($deployOrderId) . '/resume',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResumeVMDeployOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 继续部署
     *  *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     *
     * @return ResumeVMDeployOrderResponse ResumeVMDeployOrderResponse
     */
    public function resumeVMDeployOrder($organizationId, $pipelineId, $deployOrderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime);
    }

    /**
     * @summary 重试流水线运行
     *  *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return RetryPipelineJobRunResponse RetryPipelineJobRunResponse
     */
    public function retryPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RetryPipelineJobRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRuns/' . OpenApiUtilClient::getEncodeParam($pipelineRunId) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RetryPipelineJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重试流水线运行
     *  *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return RetryPipelineJobRunResponse RetryPipelineJobRunResponse
     */
    public function retryPipelineJobRun($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * @summary 重试机器部署
     *  *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string         $machineSn
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return RetryVMDeployMachineResponse RetryVMDeployMachineResponse
     */
    public function retryVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RetryVMDeployMachine',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/deploy/' . OpenApiUtilClient::getEncodeParam($deployOrderId) . '/machine/' . OpenApiUtilClient::getEncodeParam($machineSn) . '/retry',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RetryVMDeployMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重试机器部署
     *  *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     * @param string $machineSn
     *
     * @return RetryVMDeployMachineResponse RetryVMDeployMachineResponse
     */
    public function retryVMDeployMachine($organizationId, $pipelineId, $deployOrderId, $machineSn)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime);
    }

    /**
     * @summary 提交变更请求的评审意见
     *  *
     * @param string                    $repositoryId
     * @param string                    $localId
     * @param ReviewMergeRequestRequest $request      ReviewMergeRequestRequest
     * @param string[]                  $headers      map
     * @param RuntimeOptions            $runtime      runtime options for this request RuntimeOptions
     *
     * @return ReviewMergeRequestResponse ReviewMergeRequestResponse
     */
    public function reviewMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->draftCommentIds)) {
            $body['draftCommentIds'] = $request->draftCommentIds;
        }
        if (!Utils::isUnset($request->reviewComment)) {
            $body['reviewComment'] = $request->reviewComment;
        }
        if (!Utils::isUnset($request->reviewOpinion)) {
            $body['reviewOpinion'] = $request->reviewOpinion;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReviewMergeRequest',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/merge_requests/' . OpenApiUtilClient::getEncodeParam($localId) . '/submit_review_opinion',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReviewMergeRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交变更请求的评审意见
     *  *
     * @param string                    $repositoryId
     * @param string                    $localId
     * @param ReviewMergeRequestRequest $request      ReviewMergeRequestRequest
     *
     * @return ReviewMergeRequestResponse ReviewMergeRequestResponse
     */
    public function reviewMergeRequest($repositoryId, $localId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reviewMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime);
    }

    /**
     * @summary 跳过流水线任务运行
     *  *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return SkipPipelineJobRunResponse SkipPipelineJobRunResponse
     */
    public function skipPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'SkipPipelineJobRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRuns/' . OpenApiUtilClient::getEncodeParam($pipelineRunId) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '/skip',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SkipPipelineJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 跳过流水线任务运行
     *  *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return SkipPipelineJobRunResponse SkipPipelineJobRunResponse
     */
    public function skipPipelineJobRun($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->skipPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * @summary 跳过机器部署
     *  *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string         $machineSn
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return SkipVMDeployMachineResponse SkipVMDeployMachineResponse
     */
    public function skipVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'SkipVMDeployMachine',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/deploy/' . OpenApiUtilClient::getEncodeParam($deployOrderId) . '/machine/' . OpenApiUtilClient::getEncodeParam($machineSn) . '/skip',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SkipVMDeployMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 跳过机器部署
     *  *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     * @param string $machineSn
     *
     * @return SkipVMDeployMachineResponse SkipVMDeployMachineResponse
     */
    public function skipVMDeployMachine($organizationId, $pipelineId, $deployOrderId, $machineSn)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->skipVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime);
    }

    /**
     * @summary 运行流水线
     *  *
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param StartPipelineRunRequest $request        StartPipelineRunRequest
     * @param string[]                $headers        map
     * @param RuntimeOptions          $runtime        runtime options for this request RuntimeOptions
     *
     * @return StartPipelineRunResponse StartPipelineRunResponse
     */
    public function startPipelineRunWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->params)) {
            $body['params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartPipelineRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organizations/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/run',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartPipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 运行流水线
     *  *
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param StartPipelineRunRequest $request        StartPipelineRunRequest
     *
     * @return StartPipelineRunResponse StartPipelineRunResponse
     */
    public function startPipelineRun($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startPipelineRunWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * @summary 终止流水线任务运行
     *  *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return StopPipelineJobRunResponse StopPipelineJobRunResponse
     */
    public function stopPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopPipelineJobRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRuns/' . OpenApiUtilClient::getEncodeParam($pipelineRunId) . '/jobs/' . OpenApiUtilClient::getEncodeParam($jobId) . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopPipelineJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 终止流水线任务运行
     *  *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return StopPipelineJobRunResponse StopPipelineJobRunResponse
     */
    public function stopPipelineJobRun($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * @summary 终止流水线运行
     *  *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return StopPipelineRunResponse StopPipelineRunResponse
     */
    public function stopPipelineRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopPipelineRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/pipelineRuns/' . OpenApiUtilClient::getEncodeParam($pipelineRunId) . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopPipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 终止流水线运行
     *  *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     *
     * @return StopPipelineRunResponse StopPipelineRunResponse
     */
    public function stopPipelineRun($organizationId, $pipelineId, $pipelineRunId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopPipelineRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $headers, $runtime);
    }

    /**
     * @summary 取消部署单
     *  *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string[]       $headers        map
     * @param RuntimeOptions $runtime        runtime options for this request RuntimeOptions
     *
     * @return StopVMDeployOrderResponse StopVMDeployOrderResponse
     */
    public function stopVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopVMDeployOrder',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/deploy/' . OpenApiUtilClient::getEncodeParam($deployOrderId) . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopVMDeployOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消部署单
     *  *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     *
     * @return StopVMDeployOrderResponse StopVMDeployOrderResponse
     */
    public function stopVMDeployOrder($organizationId, $pipelineId, $deployOrderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime);
    }

    /**
     * @summary 转移代码库
     *  *
     * @param TransferRepositoryRequest $request TransferRepositoryRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return TransferRepositoryResponse TransferRepositoryResponse
     */
    public function transferRepositoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['groupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->repositoryId)) {
            $query['repositoryId'] = $request->repositoryId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransferRepository',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/repository/transfer',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TransferRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 转移代码库
     *  *
     * @param TransferRepositoryRequest $request TransferRepositoryRequest
     *
     * @return TransferRepositoryResponse TransferRepositoryResponse
     */
    public function transferRepository($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->transferRepositoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 触发仓库同步
     *  *
     * @param string                             $repositoryId
     * @param TriggerRepositoryMirrorSyncRequest $request      TriggerRepositoryMirrorSyncRequest
     * @param string[]                           $headers      map
     * @param RuntimeOptions                     $runtime      runtime options for this request RuntimeOptions
     *
     * @return TriggerRepositoryMirrorSyncResponse TriggerRepositoryMirrorSyncResponse
     */
    public function triggerRepositoryMirrorSyncWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->account)) {
            $query['account'] = $request->account;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TriggerRepositoryMirrorSync',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/mirror',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TriggerRepositoryMirrorSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 触发仓库同步
     *  *
     * @param string                             $repositoryId
     * @param TriggerRepositoryMirrorSyncRequest $request      TriggerRepositoryMirrorSyncRequest
     *
     * @return TriggerRepositoryMirrorSyncResponse TriggerRepositoryMirrorSyncResponse
     */
    public function triggerRepositoryMirrorSync($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->triggerRepositoryMirrorSyncWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新应用成员
     *  *
     * @param string                 $appName
     * @param UpdateAppMemberRequest $request UpdateAppMemberRequest
     * @param string[]               $headers map
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAppMemberResponse UpdateAppMemberResponse
     */
    public function updateAppMemberWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->player)) {
            $body['player'] = $request->player;
        }
        if (!Utils::isUnset($request->roleNames)) {
            $body['roleNames'] = $request->roleNames;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAppMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/appstack/apps/' . OpenApiUtilClient::getEncodeParam($appName) . '/members',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'string',
        ]);

        return UpdateAppMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新应用成员
     *  *
     * @param string                 $appName
     * @param UpdateAppMemberRequest $request UpdateAppMemberRequest
     *
     * @return UpdateAppMemberResponse UpdateAppMemberResponse
     */
    public function updateAppMember($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAppMemberWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * @summary 更新应用
     *  *
     * @param string                   $appName
     * @param UpdateApplicationRequest $request UpdateApplicationRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateApplicationResponse UpdateApplicationResponse
     */
    public function updateApplicationWithOptions($appName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->ownerAccountId)) {
            $body['ownerAccountId'] = $request->ownerAccountId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateApplication',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/appstack/apps/' . OpenApiUtilClient::getEncodeParam($appName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新应用
     *  *
     * @param string                   $appName
     * @param UpdateApplicationRequest $request UpdateApplicationRequest
     *
     * @return UpdateApplicationResponse UpdateApplicationResponse
     */
    public function updateApplication($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApplicationWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * @summary 更新检查运行记录
     *  *
     * @param UpdateCheckRunRequest $request UpdateCheckRunRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCheckRunResponse UpdateCheckRunResponse
     */
    public function updateCheckRunWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->checkRunId)) {
            $query['checkRunId'] = $request->checkRunId;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->repositoryIdentity)) {
            $query['repositoryIdentity'] = $request->repositoryIdentity;
        }
        $body = [];
        if (!Utils::isUnset($request->annotations)) {
            $body['annotations'] = $request->annotations;
        }
        if (!Utils::isUnset($request->completedAt)) {
            $body['completedAt'] = $request->completedAt;
        }
        if (!Utils::isUnset($request->conclusion)) {
            $body['conclusion'] = $request->conclusion;
        }
        if (!Utils::isUnset($request->detailsUrl)) {
            $body['detailsUrl'] = $request->detailsUrl;
        }
        if (!Utils::isUnset($request->externalId)) {
            $body['externalId'] = $request->externalId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->output)) {
            $body['output'] = $request->output;
        }
        if (!Utils::isUnset($request->startedAt)) {
            $body['startedAt'] = $request->startedAt;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateCheckRun',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/check_runs/update_check_run',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateCheckRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新检查运行记录
     *  *
     * @param UpdateCheckRunRequest $request UpdateCheckRunRequest
     *
     * @return UpdateCheckRunResponse UpdateCheckRunResponse
     */
    public function updateCheckRun($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCheckRunWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新代码库文件
     *  *
     * @param string            $repositoryId
     * @param UpdateFileRequest $request      UpdateFileRequest
     * @param string[]          $headers      map
     * @param RuntimeOptions    $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateFileResponse UpdateFileResponse
     */
    public function updateFileWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->branchName)) {
            $body['branchName'] = $request->branchName;
        }
        if (!Utils::isUnset($request->commitMessage)) {
            $body['commitMessage'] = $request->commitMessage;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->encoding)) {
            $body['encoding'] = $request->encoding;
        }
        if (!Utils::isUnset($request->newPath)) {
            $body['newPath'] = $request->newPath;
        }
        if (!Utils::isUnset($request->oldPath)) {
            $body['oldPath'] = $request->oldPath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFile',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/files/update',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新代码库文件
     *  *
     * @param string            $repositoryId
     * @param UpdateFileRequest $request      UpdateFileRequest
     *
     * @return UpdateFileResponse UpdateFileResponse
     */
    public function updateFile($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFileWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新标签
     *  *
     * @param string               $organizationId
     * @param string               $id
     * @param UpdateFlowTagRequest $request        UpdateFlowTagRequest
     * @param string[]             $headers        map
     * @param RuntimeOptions       $runtime        runtime options for this request RuntimeOptions
     *
     * @return UpdateFlowTagResponse UpdateFlowTagResponse
     */
    public function updateFlowTagWithOptions($organizationId, $id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->color)) {
            $query['color'] = $request->color;
        }
        if (!Utils::isUnset($request->flowTagGroupId)) {
            $query['flowTagGroupId'] = $request->flowTagGroupId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFlowTag',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/flow/tags/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFlowTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新标签
     *  *
     * @param string               $organizationId
     * @param string               $id
     * @param UpdateFlowTagRequest $request        UpdateFlowTagRequest
     *
     * @return UpdateFlowTagResponse UpdateFlowTagResponse
     */
    public function updateFlowTag($organizationId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFlowTagWithOptions($organizationId, $id, $request, $headers, $runtime);
    }

    /**
     * @summary 标签分类
     *  *
     * @param string                    $organizationId
     * @param string                    $id
     * @param UpdateFlowTagGroupRequest $request        UpdateFlowTagGroupRequest
     * @param string[]                  $headers        map
     * @param RuntimeOptions            $runtime        runtime options for this request RuntimeOptions
     *
     * @return UpdateFlowTagGroupResponse UpdateFlowTagGroupResponse
     */
    public function updateFlowTagGroupWithOptions($organizationId, $id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFlowTagGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/flow/tagGroups/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFlowTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 标签分类
     *  *
     * @param string                    $organizationId
     * @param string                    $id
     * @param UpdateFlowTagGroupRequest $request        UpdateFlowTagGroupRequest
     *
     * @return UpdateFlowTagGroupResponse UpdateFlowTagGroupResponse
     */
    public function updateFlowTagGroup($organizationId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFlowTagGroupWithOptions($organizationId, $id, $request, $headers, $runtime);
    }

    /**
     * @summary 更新单个代码组信息
     *  *
     * @param UpdateGroupRequest $request UpdateGroupRequest
     * @param string[]           $headers map
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGroupResponse UpdateGroupResponse
     */
    public function updateGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->avatarUrl)) {
            $body['avatarUrl'] = $request->avatarUrl;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->path)) {
            $body['path'] = $request->path;
        }
        if (!Utils::isUnset($request->pathWithNamespace)) {
            $body['pathWithNamespace'] = $request->pathWithNamespace;
        }
        if (!Utils::isUnset($request->visibilityLevel)) {
            $body['visibilityLevel'] = $request->visibilityLevel;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/groups/modify',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新单个代码组信息
     *  *
     * @param UpdateGroupRequest $request UpdateGroupRequest
     *
     * @return UpdateGroupResponse UpdateGroupResponse
     */
    public function updateGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 修改组成员
     *  *
     * @param string                   $groupId
     * @param UpdateGroupMemberRequest $request UpdateGroupMemberRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateGroupMemberResponse UpdateGroupMemberResponse
     */
    public function updateGroupMemberWithOptions($groupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->aliyunPk)) {
            $query['aliyunPk'] = $request->aliyunPk;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->accessLevel)) {
            $body['accessLevel'] = $request->accessLevel;
        }
        if (!Utils::isUnset($request->memberType)) {
            $body['memberType'] = $request->memberType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateGroupMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/groups/' . OpenApiUtilClient::getEncodeParam($groupId) . '/members/update/aliyun_pk',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改组成员
     *  *
     * @param string                   $groupId
     * @param UpdateGroupMemberRequest $request UpdateGroupMemberRequest
     *
     * @return UpdateGroupMemberResponse UpdateGroupMemberResponse
     */
    public function updateGroupMember($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGroupMemberWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新主机组
     *  *
     * @param string                 $organizationId
     * @param string                 $id
     * @param UpdateHostGroupRequest $request        UpdateHostGroupRequest
     * @param string[]               $headers        map
     * @param RuntimeOptions         $runtime        runtime options for this request RuntimeOptions
     *
     * @return UpdateHostGroupResponse UpdateHostGroupResponse
     */
    public function updateHostGroupWithOptions($organizationId, $id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aliyunRegion)) {
            $body['aliyunRegion'] = $request->aliyunRegion;
        }
        if (!Utils::isUnset($request->ecsLabelKey)) {
            $body['ecsLabelKey'] = $request->ecsLabelKey;
        }
        if (!Utils::isUnset($request->ecsLabelValue)) {
            $body['ecsLabelValue'] = $request->ecsLabelValue;
        }
        if (!Utils::isUnset($request->ecsType)) {
            $body['ecsType'] = $request->ecsType;
        }
        if (!Utils::isUnset($request->envId)) {
            $body['envId'] = $request->envId;
        }
        if (!Utils::isUnset($request->machineInfos)) {
            $body['machineInfos'] = $request->machineInfos;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->serviceConnectionId)) {
            $body['serviceConnectionId'] = $request->serviceConnectionId;
        }
        if (!Utils::isUnset($request->tagIds)) {
            $body['tagIds'] = $request->tagIds;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateHostGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/hostGroups/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新主机组
     *  *
     * @param string                 $organizationId
     * @param string                 $id
     * @param UpdateHostGroupRequest $request        UpdateHostGroupRequest
     *
     * @return UpdateHostGroupResponse UpdateHostGroupResponse
     */
    public function updateHostGroup($organizationId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHostGroupWithOptions($organizationId, $id, $request, $headers, $runtime);
    }

    /**
     * @summary 更新代码评审的标题和描述
     *  *
     * @param string                    $repositoryId
     * @param string                    $localId
     * @param UpdateMergeRequestRequest $request      UpdateMergeRequestRequest
     * @param string[]                  $headers      map
     * @param RuntimeOptions            $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateMergeRequestResponse UpdateMergeRequestResponse
     */
    public function updateMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->title)) {
            $body['title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMergeRequest',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/merge_requests/' . OpenApiUtilClient::getEncodeParam($localId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateMergeRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新代码评审的标题和描述
     *  *
     * @param string                    $repositoryId
     * @param string                    $localId
     * @param UpdateMergeRequestRequest $request      UpdateMergeRequestRequest
     *
     * @return UpdateMergeRequestResponse UpdateMergeRequestResponse
     */
    public function updateMergeRequest($repositoryId, $localId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新代码评审的干系人
     *  *
     * @param string                             $repositoryId
     * @param string                             $localId
     * @param string                             $personType
     * @param UpdateMergeRequestPersonnelRequest $request      UpdateMergeRequestPersonnelRequest
     * @param string[]                           $headers      map
     * @param RuntimeOptions                     $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateMergeRequestPersonnelResponse UpdateMergeRequestPersonnelResponse
     */
    public function updateMergeRequestPersonnelWithOptions($repositoryId, $localId, $personType, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->newUserIdList)) {
            $body['newUserIdList'] = $request->newUserIdList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMergeRequestPersonnel',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/merge_requests/' . OpenApiUtilClient::getEncodeParam($localId) . '/person/' . OpenApiUtilClient::getEncodeParam($personType) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateMergeRequestPersonnelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新代码评审的干系人
     *  *
     * @param string                             $repositoryId
     * @param string                             $localId
     * @param string                             $personType
     * @param UpdateMergeRequestPersonnelRequest $request      UpdateMergeRequestPersonnelRequest
     *
     * @return UpdateMergeRequestPersonnelResponse UpdateMergeRequestPersonnelResponse
     */
    public function updateMergeRequestPersonnel($repositoryId, $localId, $personType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMergeRequestPersonnelWithOptions($repositoryId, $localId, $personType, $request, $headers, $runtime);
    }

    /**
     * @summary 当前用户加入的企业列表
     *  *
     * @param string                          $organizationId
     * @param string                          $accountId
     * @param UpdateOrganizationMemberRequest $request        UpdateOrganizationMemberRequest
     * @param string[]                        $headers        map
     * @param RuntimeOptions                  $runtime        runtime options for this request RuntimeOptions
     *
     * @return UpdateOrganizationMemberResponse UpdateOrganizationMemberResponse
     */
    public function updateOrganizationMemberWithOptions($organizationId, $accountId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationMemberName)) {
            $query['organizationMemberName'] = $request->organizationMemberName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateOrganizationMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/members/' . OpenApiUtilClient::getEncodeParam($accountId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateOrganizationMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 当前用户加入的企业列表
     *  *
     * @param string                          $organizationId
     * @param string                          $accountId
     * @param UpdateOrganizationMemberRequest $request        UpdateOrganizationMemberRequest
     *
     * @return UpdateOrganizationMemberResponse UpdateOrganizationMemberResponse
     */
    public function updateOrganizationMember($organizationId, $accountId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateOrganizationMemberWithOptions($organizationId, $accountId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新流水线。
     *  *
     * @param string                $organizationId
     * @param UpdatePipelineRequest $request        UpdatePipelineRequest
     * @param string[]              $headers        map
     * @param RuntimeOptions        $runtime        runtime options for this request RuntimeOptions
     *
     * @return UpdatePipelineResponse UpdatePipelineResponse
     */
    public function updatePipelineWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $body['pipelineId'] = $request->pipelineId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdatePipeline',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新流水线。
     *  *
     * @param string                $organizationId
     * @param UpdatePipelineRequest $request        UpdatePipelineRequest
     *
     * @return UpdatePipelineResponse UpdatePipelineResponse
     */
    public function updatePipeline($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePipelineWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 删除标签
     *  *
     * @param string                        $organizationId
     * @param string                        $pipelineId
     * @param UpdatePipelineBaseInfoRequest $request        UpdatePipelineBaseInfoRequest
     * @param string[]                      $headers        map
     * @param RuntimeOptions                $runtime        runtime options for this request RuntimeOptions
     *
     * @return UpdatePipelineBaseInfoResponse UpdatePipelineBaseInfoResponse
     */
    public function updatePipelineBaseInfoWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->envId)) {
            $query['envId'] = $request->envId;
        }
        if (!Utils::isUnset($request->pipelineName)) {
            $query['pipelineName'] = $request->pipelineName;
        }
        if (!Utils::isUnset($request->tagList)) {
            $query['tagList'] = $request->tagList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePipelineBaseInfo',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelines/' . OpenApiUtilClient::getEncodeParam($pipelineId) . '/baseInfo',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePipelineBaseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除标签
     *  *
     * @param string                        $organizationId
     * @param string                        $pipelineId
     * @param UpdatePipelineBaseInfoRequest $request        UpdatePipelineBaseInfoRequest
     *
     * @return UpdatePipelineBaseInfoResponse UpdatePipelineBaseInfoResponse
     */
    public function updatePipelineBaseInfo($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePipelineBaseInfoWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新流水线分组
     *  *
     * @param string                     $organizationId
     * @param string                     $groupId
     * @param UpdatePipelineGroupRequest $request        UpdatePipelineGroupRequest
     * @param string[]                   $headers        map
     * @param RuntimeOptions             $runtime        runtime options for this request RuntimeOptions
     *
     * @return UpdatePipelineGroupResponse UpdatePipelineGroupResponse
     */
    public function updatePipelineGroupWithOptions($organizationId, $groupId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePipelineGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/pipelineGroups/' . OpenApiUtilClient::getEncodeParam($groupId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePipelineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新流水线分组
     *  *
     * @param string                     $organizationId
     * @param string                     $groupId
     * @param UpdatePipelineGroupRequest $request        UpdatePipelineGroupRequest
     *
     * @return UpdatePipelineGroupResponse UpdatePipelineGroupResponse
     */
    public function updatePipelineGroup($organizationId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePipelineGroupWithOptions($organizationId, $groupId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新项目属性与字段
     *  *
     * @param string                    $organizationId
     * @param string                    $identifier
     * @param UpdateProjectFieldRequest $request        UpdateProjectFieldRequest
     * @param string[]                  $headers        map
     * @param RuntimeOptions            $runtime        runtime options for this request RuntimeOptions
     *
     * @return UpdateProjectFieldResponse UpdateProjectFieldResponse
     */
    public function updateProjectFieldWithOptions($organizationId, $identifier, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->statusIdentifier)) {
            $body['statusIdentifier'] = $request->statusIdentifier;
        }
        if (!Utils::isUnset($request->updateBasicFieldRequestList)) {
            $body['updateBasicFieldRequestList'] = $request->updateBasicFieldRequestList;
        }
        if (!Utils::isUnset($request->updateForOpenApiList)) {
            $body['updateForOpenApiList'] = $request->updateForOpenApiList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProjectField',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/project/' . OpenApiUtilClient::getEncodeParam($identifier) . '',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProjectFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新项目属性与字段
     *  *
     * @param string                    $organizationId
     * @param string                    $identifier
     * @param UpdateProjectFieldRequest $request        UpdateProjectFieldRequest
     *
     * @return UpdateProjectFieldResponse UpdateProjectFieldResponse
     */
    public function updateProjectField($organizationId, $identifier, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectFieldWithOptions($organizationId, $identifier, $request, $headers, $runtime);
    }

    /**
     * @summary 更新代码库Label
     *  *
     * @param string                    $labelId
     * @param UpdateProjectLabelRequest $request UpdateProjectLabelRequest
     * @param string[]                  $headers map
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateProjectLabelResponse UpdateProjectLabelResponse
     */
    public function updateProjectLabelWithOptions($labelId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->repositoryIdentity)) {
            $query['repositoryIdentity'] = $request->repositoryIdentity;
        }
        $body = [];
        if (!Utils::isUnset($request->color)) {
            $body['color'] = $request->color;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProjectLabel',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/labels/' . OpenApiUtilClient::getEncodeParam($labelId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProjectLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新代码库Label
     *  *
     * @param string                    $labelId
     * @param UpdateProjectLabelRequest $request UpdateProjectLabelRequest
     *
     * @return UpdateProjectLabelResponse UpdateProjectLabelResponse
     */
    public function updateProjectLabel($labelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectLabelWithOptions($labelId, $request, $headers, $runtime);
    }

    /**
     * @summary 添加项目成员
     *  *
     * @param string                     $organizationId
     * @param string                     $projectId
     * @param UpdateProjectMemberRequest $request        UpdateProjectMemberRequest
     * @param string[]                   $headers        map
     * @param RuntimeOptions             $runtime        runtime options for this request RuntimeOptions
     *
     * @return UpdateProjectMemberResponse UpdateProjectMemberResponse
     */
    public function updateProjectMemberWithOptions($organizationId, $projectId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->roleIdentifier)) {
            $body['roleIdentifier'] = $request->roleIdentifier;
        }
        if (!Utils::isUnset($request->targetIdentifier)) {
            $body['targetIdentifier'] = $request->targetIdentifier;
        }
        if (!Utils::isUnset($request->targetType)) {
            $body['targetType'] = $request->targetType;
        }
        if (!Utils::isUnset($request->userIdentifier)) {
            $body['userIdentifier'] = $request->userIdentifier;
        }
        if (!Utils::isUnset($request->userType)) {
            $body['userType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProjectMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/projects/' . OpenApiUtilClient::getEncodeParam($projectId) . '/updateMember',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProjectMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加项目成员
     *  *
     * @param string                     $organizationId
     * @param string                     $projectId
     * @param UpdateProjectMemberRequest $request        UpdateProjectMemberRequest
     *
     * @return UpdateProjectMemberResponse UpdateProjectMemberResponse
     */
    public function updateProjectMember($organizationId, $projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectMemberWithOptions($organizationId, $projectId, $request, $headers, $runtime);
    }

    /**
     * @summary 更改保护分支设置
     *  *
     * @param string                         $repositoryId
     * @param string                         $id
     * @param UpdateProtectedBranchesRequest $request      UpdateProtectedBranchesRequest
     * @param string[]                       $headers      map
     * @param RuntimeOptions                 $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateProtectedBranchesResponse UpdateProtectedBranchesResponse
     */
    public function updateProtectedBranchesWithOptions($repositoryId, $id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->allowMergeRoles)) {
            $body['allowMergeRoles'] = $request->allowMergeRoles;
        }
        if (!Utils::isUnset($request->allowMergeUserIds)) {
            $body['allowMergeUserIds'] = $request->allowMergeUserIds;
        }
        if (!Utils::isUnset($request->allowPushRoles)) {
            $body['allowPushRoles'] = $request->allowPushRoles;
        }
        if (!Utils::isUnset($request->allowPushUserIds)) {
            $body['allowPushUserIds'] = $request->allowPushUserIds;
        }
        if (!Utils::isUnset($request->branch)) {
            $body['branch'] = $request->branch;
        }
        if (!Utils::isUnset($request->id)) {
            $body['id'] = $request->id;
        }
        if (!Utils::isUnset($request->mergeRequestSetting)) {
            $body['mergeRequestSetting'] = $request->mergeRequestSetting;
        }
        if (!Utils::isUnset($request->testSettingDTO)) {
            $body['testSettingDTO'] = $request->testSettingDTO;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProtectedBranches',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/protect_branches/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProtectedBranchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更改保护分支设置
     *  *
     * @param string                         $repositoryId
     * @param string                         $id
     * @param UpdateProtectedBranchesRequest $request      UpdateProtectedBranchesRequest
     *
     * @return UpdateProtectedBranchesResponse UpdateProtectedBranchesResponse
     */
    public function updateProtectedBranches($repositoryId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProtectedBranchesWithOptions($repositoryId, $id, $request, $headers, $runtime);
    }

    /**
     * @summary 推送评审模式开关
     *  *
     * @param string                       $repositoryId
     * @param UpdatePushReviewOnOffRequest $request      UpdatePushReviewOnOffRequest
     * @param string[]                     $headers      map
     * @param RuntimeOptions               $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdatePushReviewOnOffResponse UpdatePushReviewOnOffResponse
     */
    public function updatePushReviewOnOffWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        if (!Utils::isUnset($request->trunkMode)) {
            $query['trunkMode'] = $request->trunkMode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePushReviewOnOff',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/settings/trunk_mode',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePushReviewOnOffResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 推送评审模式开关
     *  *
     * @param string                       $repositoryId
     * @param UpdatePushReviewOnOffRequest $request      UpdatePushReviewOnOffRequest
     *
     * @return UpdatePushReviewOnOffResponse UpdatePushReviewOnOffResponse
     */
    public function updatePushReviewOnOff($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePushReviewOnOffWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新推送规则
     *  *
     * @param string                $repositoryId
     * @param string                $pushRuleId
     * @param UpdatePushRuleRequest $request      UpdatePushRuleRequest
     * @param string[]              $headers      map
     * @param RuntimeOptions        $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdatePushRuleResponse UpdatePushRuleResponse
     */
    public function updatePushRuleWithOptions($repositoryId, $pushRuleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->ruleInfos)) {
            $body['ruleInfos'] = $request->ruleInfos;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdatePushRule',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v4/projects/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/push_rule/' . OpenApiUtilClient::getEncodeParam($pushRuleId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdatePushRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新推送规则
     *  *
     * @param string                $repositoryId
     * @param string                $pushRuleId
     * @param UpdatePushRuleRequest $request      UpdatePushRuleRequest
     *
     * @return UpdatePushRuleResponse UpdatePushRuleResponse
     */
    public function updatePushRule($repositoryId, $pushRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePushRuleWithOptions($repositoryId, $pushRuleId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新代码库名称、路径、描述、默认分支等设置
     *  *
     * @param string                  $repositoryId
     * @param UpdateRepositoryRequest $request      UpdateRepositoryRequest
     * @param string[]                $headers      map
     * @param RuntimeOptions          $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateRepositoryResponse UpdateRepositoryResponse
     */
    public function updateRepositoryWithOptions($repositoryId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->adminSettingLanguage)) {
            $body['adminSettingLanguage'] = $request->adminSettingLanguage;
        }
        if (!Utils::isUnset($request->avatar)) {
            $body['avatar'] = $request->avatar;
        }
        if (!Utils::isUnset($request->buildsEnabled)) {
            $body['buildsEnabled'] = $request->buildsEnabled;
        }
        if (!Utils::isUnset($request->checkEmail)) {
            $body['checkEmail'] = $request->checkEmail;
        }
        if (!Utils::isUnset($request->defaultBranch)) {
            $body['defaultBranch'] = $request->defaultBranch;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->id)) {
            $body['id'] = $request->id;
        }
        if (!Utils::isUnset($request->issuesEnabled)) {
            $body['issuesEnabled'] = $request->issuesEnabled;
        }
        if (!Utils::isUnset($request->mergeRequestsEnabled)) {
            $body['mergeRequestsEnabled'] = $request->mergeRequestsEnabled;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->openCloneDownloadControl)) {
            $body['openCloneDownloadControl'] = $request->openCloneDownloadControl;
        }
        if (!Utils::isUnset($request->path)) {
            $body['path'] = $request->path;
        }
        if (!Utils::isUnset($request->projectCloneDownloadMethodList)) {
            $body['projectCloneDownloadMethodList'] = $request->projectCloneDownloadMethodList;
        }
        if (!Utils::isUnset($request->projectCloneDownloadRoleList)) {
            $body['projectCloneDownloadRoleList'] = $request->projectCloneDownloadRoleList;
        }
        if (!Utils::isUnset($request->snippetsEnabled)) {
            $body['snippetsEnabled'] = $request->snippetsEnabled;
        }
        if (!Utils::isUnset($request->visibilityLevel)) {
            $body['visibilityLevel'] = $request->visibilityLevel;
        }
        if (!Utils::isUnset($request->wikiEnabled)) {
            $body['wikiEnabled'] = $request->wikiEnabled;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRepository',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新代码库名称、路径、描述、默认分支等设置
     *  *
     * @param string                  $repositoryId
     * @param UpdateRepositoryRequest $request      UpdateRepositoryRequest
     *
     * @return UpdateRepositoryResponse UpdateRepositoryResponse
     */
    public function updateRepository($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRepositoryWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * @summary 修改代码库成员的权限（角色）
     *  *
     * @param string                        $repositoryId
     * @param string                        $aliyunPk
     * @param UpdateRepositoryMemberRequest $request      UpdateRepositoryMemberRequest
     * @param string[]                      $headers      map
     * @param RuntimeOptions                $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateRepositoryMemberResponse UpdateRepositoryMemberResponse
     */
    public function updateRepositoryMemberWithOptions($repositoryId, $aliyunPk, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessToken)) {
            $query['accessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->organizationId)) {
            $query['organizationId'] = $request->organizationId;
        }
        $body = [];
        if (!Utils::isUnset($request->accessLevel)) {
            $body['accessLevel'] = $request->accessLevel;
        }
        if (!Utils::isUnset($request->expireAt)) {
            $body['expireAt'] = $request->expireAt;
        }
        if (!Utils::isUnset($request->memberType)) {
            $body['memberType'] = $request->memberType;
        }
        if (!Utils::isUnset($request->relatedId)) {
            $body['relatedId'] = $request->relatedId;
        }
        if (!Utils::isUnset($request->relatedInfos)) {
            $body['relatedInfos'] = $request->relatedInfos;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRepositoryMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/repository/' . OpenApiUtilClient::getEncodeParam($repositoryId) . '/members/' . OpenApiUtilClient::getEncodeParam($aliyunPk) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateRepositoryMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改代码库成员的权限（角色）
     *  *
     * @param string                        $repositoryId
     * @param string                        $aliyunPk
     * @param UpdateRepositoryMemberRequest $request      UpdateRepositoryMemberRequest
     *
     * @return UpdateRepositoryMemberResponse UpdateRepositoryMemberResponse
     */
    public function updateRepositoryMember($repositoryId, $aliyunPk, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRepositoryMemberWithOptions($repositoryId, $aliyunPk, $request, $headers, $runtime);
    }

    /**
     * @summary 更新资源成员
     *  *
     * @param string                      $organizationId
     * @param string                      $resourceType
     * @param string                      $resourceId
     * @param string                      $accountId
     * @param UpdateResourceMemberRequest $request        UpdateResourceMemberRequest
     * @param string[]                    $headers        map
     * @param RuntimeOptions              $runtime        runtime options for this request RuntimeOptions
     *
     * @return UpdateResourceMemberResponse UpdateResourceMemberResponse
     */
    public function updateResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $accountId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->roleName)) {
            $body['roleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourceMember',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/' . OpenApiUtilClient::getEncodeParam($resourceType) . '/' . OpenApiUtilClient::getEncodeParam($resourceId) . '/members/' . OpenApiUtilClient::getEncodeParam($accountId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新资源成员
     *  *
     * @param string                      $organizationId
     * @param string                      $resourceType
     * @param string                      $resourceId
     * @param string                      $accountId
     * @param UpdateResourceMemberRequest $request        UpdateResourceMemberRequest
     *
     * @return UpdateResourceMemberResponse UpdateResourceMemberResponse
     */
    public function updateResourceMember($organizationId, $resourceType, $resourceId, $accountId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $accountId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新测试用例字段
     *  *
     * @param string                $organizationId
     * @param string                $testcaseIdentifier
     * @param UpdateTestCaseRequest $request            UpdateTestCaseRequest
     * @param string[]              $headers            map
     * @param RuntimeOptions        $runtime            runtime options for this request RuntimeOptions
     *
     * @return UpdateTestCaseResponse UpdateTestCaseResponse
     */
    public function updateTestCaseWithOptions($organizationId, $testcaseIdentifier, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->updateWorkitemPropertyRequest)) {
            $body['updateWorkitemPropertyRequest'] = $request->updateWorkitemPropertyRequest;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTestCase',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/testhub/testcase/' . OpenApiUtilClient::getEncodeParam($testcaseIdentifier) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTestCaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新测试用例字段
     *  *
     * @param string                $organizationId
     * @param string                $testcaseIdentifier
     * @param UpdateTestCaseRequest $request            UpdateTestCaseRequest
     *
     * @return UpdateTestCaseResponse UpdateTestCaseResponse
     */
    public function updateTestCase($organizationId, $testcaseIdentifier, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTestCaseWithOptions($organizationId, $testcaseIdentifier, $request, $headers, $runtime);
    }

    /**
     * @summary 更新了测试计划中测试用例的执行人与状态
     *  *
     * @param string                  $organizationId
     * @param string                  $testPlanIdentifier
     * @param string                  $testcaseIdentifier
     * @param UpdateTestResultRequest $request            UpdateTestResultRequest
     * @param string[]                $headers            map
     * @param RuntimeOptions          $runtime            runtime options for this request RuntimeOptions
     *
     * @return UpdateTestResultResponse UpdateTestResultResponse
     */
    public function updateTestResultWithOptions($organizationId, $testPlanIdentifier, $testcaseIdentifier, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->executor)) {
            $body['executor'] = $request->executor;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTestResult',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/testhub/testplan/' . OpenApiUtilClient::getEncodeParam($testPlanIdentifier) . '/testresult/' . OpenApiUtilClient::getEncodeParam($testcaseIdentifier) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTestResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新了测试计划中测试用例的执行人与状态
     *  *
     * @param string                  $organizationId
     * @param string                  $testPlanIdentifier
     * @param string                  $testcaseIdentifier
     * @param UpdateTestResultRequest $request            UpdateTestResultRequest
     *
     * @return UpdateTestResultResponse UpdateTestResultResponse
     */
    public function updateTestResult($organizationId, $testPlanIdentifier, $testcaseIdentifier, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTestResultWithOptions($organizationId, $testPlanIdentifier, $testcaseIdentifier, $request, $headers, $runtime);
    }

    /**
     * @summary 更新变量组
     *  *
     * @param string                     $organizationId
     * @param string                     $id
     * @param UpdateVariableGroupRequest $request        UpdateVariableGroupRequest
     * @param string[]                   $headers        map
     * @param RuntimeOptions             $runtime        runtime options for this request RuntimeOptions
     *
     * @return UpdateVariableGroupResponse UpdateVariableGroupResponse
     */
    public function updateVariableGroupWithOptions($organizationId, $id, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->variables)) {
            $body['variables'] = $request->variables;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateVariableGroup',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/variableGroups/' . OpenApiUtilClient::getEncodeParam($id) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVariableGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新变量组
     *  *
     * @param string                     $organizationId
     * @param string                     $id
     * @param UpdateVariableGroupRequest $request        UpdateVariableGroupRequest
     *
     * @return UpdateVariableGroupResponse UpdateVariableGroupResponse
     */
    public function updateVariableGroup($organizationId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateVariableGroupWithOptions($organizationId, $id, $request, $headers, $runtime);
    }

    /**
     * @summary 更新工作项信息
     *  *
     * @param string                $organizationId
     * @param UpdateWorkItemRequest $request        UpdateWorkItemRequest
     * @param string[]              $headers        map
     * @param RuntimeOptions        $runtime        runtime options for this request RuntimeOptions
     *
     * @return UpdateWorkItemResponse UpdateWorkItemResponse
     */
    public function updateWorkItemWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fieldType)) {
            $body['fieldType'] = $request->fieldType;
        }
        if (!Utils::isUnset($request->identifier)) {
            $body['identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->propertyKey)) {
            $body['propertyKey'] = $request->propertyKey;
        }
        if (!Utils::isUnset($request->propertyValue)) {
            $body['propertyValue'] = $request->propertyValue;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkItem',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新工作项信息
     *  *
     * @param string                $organizationId
     * @param UpdateWorkItemRequest $request        UpdateWorkItemRequest
     *
     * @return UpdateWorkItemResponse UpdateWorkItemResponse
     */
    public function updateWorkItem($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWorkItemWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新工作项评论
     *  *
     * @param string                       $organizationId
     * @param UpdateWorkitemCommentRequest $request        UpdateWorkitemCommentRequest
     * @param string[]                     $headers        map
     * @param RuntimeOptions               $runtime        runtime options for this request RuntimeOptions
     *
     * @return UpdateWorkitemCommentResponse UpdateWorkitemCommentResponse
     */
    public function updateWorkitemCommentWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->commentId)) {
            $body['commentId'] = $request->commentId;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->formatType)) {
            $body['formatType'] = $request->formatType;
        }
        if (!Utils::isUnset($request->workitemIdentifier)) {
            $body['workitemIdentifier'] = $request->workitemIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkitemComment',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/commentUpdate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkitemCommentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新工作项评论
     *  *
     * @param string                       $organizationId
     * @param UpdateWorkitemCommentRequest $request        UpdateWorkitemCommentRequest
     *
     * @return UpdateWorkitemCommentResponse UpdateWorkitemCommentResponse
     */
    public function updateWorkitemComment($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWorkitemCommentWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 批量更新工作项字段信息
     *  *
     * @param string                     $organizationId
     * @param UpdateWorkitemFieldRequest $request        UpdateWorkitemFieldRequest
     * @param string[]                   $headers        map
     * @param RuntimeOptions             $runtime        runtime options for this request RuntimeOptions
     *
     * @return UpdateWorkitemFieldResponse UpdateWorkitemFieldResponse
     */
    public function updateWorkitemFieldWithOptions($organizationId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->updateWorkitemPropertyRequest)) {
            $body['updateWorkitemPropertyRequest'] = $request->updateWorkitemPropertyRequest;
        }
        if (!Utils::isUnset($request->workitemIdentifier)) {
            $body['workitemIdentifier'] = $request->workitemIdentifier;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkitemField',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitems/updateWorkitemField',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkitemFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量更新工作项字段信息
     *  *
     * @param string                     $organizationId
     * @param UpdateWorkitemFieldRequest $request        UpdateWorkitemFieldRequest
     *
     * @return UpdateWorkitemFieldResponse UpdateWorkitemFieldResponse
     */
    public function updateWorkitemField($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWorkitemFieldWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * @summary 工作项附件创建
     *  *
     * @param string                          $organizationId
     * @param string                          $workitemIdentifier
     * @param WorkitemAttachmentCreateRequest $request            WorkitemAttachmentCreateRequest
     * @param string[]                        $headers            map
     * @param RuntimeOptions                  $runtime            runtime options for this request RuntimeOptions
     *
     * @return WorkitemAttachmentCreateResponse WorkitemAttachmentCreateResponse
     */
    public function workitemAttachmentCreateWithOptions($organizationId, $workitemIdentifier, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileKey)) {
            $body['fileKey'] = $request->fileKey;
        }
        if (!Utils::isUnset($request->originalFilename)) {
            $body['originalFilename'] = $request->originalFilename;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'WorkitemAttachmentCreate',
            'version'     => '2021-06-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/organization/' . OpenApiUtilClient::getEncodeParam($organizationId) . '/workitem/' . OpenApiUtilClient::getEncodeParam($workitemIdentifier) . '/attachment',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return WorkitemAttachmentCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 工作项附件创建
     *  *
     * @param string                          $organizationId
     * @param string                          $workitemIdentifier
     * @param WorkitemAttachmentCreateRequest $request            WorkitemAttachmentCreateRequest
     *
     * @return WorkitemAttachmentCreateResponse WorkitemAttachmentCreateResponse
     */
    public function workitemAttachmentCreate($organizationId, $workitemIdentifier, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->workitemAttachmentCreateWithOptions($organizationId, $workitemIdentifier, $request, $headers, $runtime);
    }
}
