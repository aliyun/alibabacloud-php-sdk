<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddGroupMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddGroupMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddPipelineRelationsRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddPipelineRelationsResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddRepositoryMemberRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddRepositoryMemberResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddWebhookRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\AddWebhookResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\CancelExecutionReleaseStageRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\CancelExecutionReleaseStageResponse;
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
use AlibabaCloud\SDK\Devops\V20210625\Models\ExecuteChangeRequestReleaseStageRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\ExecuteChangeRequestReleaseStageResponse;
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
use AlibabaCloud\SDK\Devops\V20210625\Models\GetReleaseStagePipelineRunRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetReleaseStagePipelineRunResponse;
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
use AlibabaCloud\SDK\Devops\V20210625\Models\LogPipelineJobRunResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\LogVMDeployMachineResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\MergeMergeRequestRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\MergeMergeRequestResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\PassPipelineValidateResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\PassReleaseStagePipelineValidateRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\PassReleaseStagePipelineValidateResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\RefusePipelineValidateResponse;
use AlibabaCloud\SDK\Devops\V20210625\Models\RefuseReleaseStagePipelineValidateRequest;
use AlibabaCloud\SDK\Devops\V20210625\Models\RefuseReleaseStagePipelineValidateResponse;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 添加组成员.
     *
     * @param request - AddGroupMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddGroupMemberResponse
     *
     * @param string                $groupId
     * @param AddGroupMemberRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return AddGroupMemberResponse
     */
    public function addGroupMemberWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->accessLevel) {
            @$body['accessLevel'] = $request->accessLevel;
        }

        if (null !== $request->aliyunPks) {
            @$body['aliyunPks'] = $request->aliyunPks;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddGroupMember',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/groups/' . Url::percentEncode($groupId) . '/members/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加组成员.
     *
     * @param request - AddGroupMemberRequest
     *
     * @returns AddGroupMemberResponse
     *
     * @param string                $groupId
     * @param AddGroupMemberRequest $request
     *
     * @return AddGroupMemberResponse
     */
    public function addGroupMember($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addGroupMemberWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * 添加流水线关联.
     *
     * @param request - AddPipelineRelationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddPipelineRelationsResponse
     *
     * @param string                      $organizationId
     * @param string                      $pipelineId
     * @param AddPipelineRelationsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return AddPipelineRelationsResponse
     */
    public function addPipelineRelationsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->relObjectIds) {
            @$query['relObjectIds'] = $request->relObjectIds;
        }

        if (null !== $request->relObjectType) {
            @$query['relObjectType'] = $request->relObjectType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddPipelineRelations',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/' . Url::percentEncode($pipelineId) . '/pipelineRelations',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddPipelineRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加流水线关联.
     *
     * @param request - AddPipelineRelationsRequest
     *
     * @returns AddPipelineRelationsResponse
     *
     * @param string                      $organizationId
     * @param string                      $pipelineId
     * @param AddPipelineRelationsRequest $request
     *
     * @return AddPipelineRelationsResponse
     */
    public function addPipelineRelations($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addPipelineRelationsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * 添加代码库成员.
     *
     * @param request - AddRepositoryMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddRepositoryMemberResponse
     *
     * @param string                     $repositoryId
     * @param AddRepositoryMemberRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return AddRepositoryMemberResponse
     */
    public function addRepositoryMemberWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->accessLevel) {
            @$body['accessLevel'] = $request->accessLevel;
        }

        if (null !== $request->aliyunPks) {
            @$body['aliyunPks'] = $request->aliyunPks;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddRepositoryMember',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/members',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddRepositoryMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加代码库成员.
     *
     * @param request - AddRepositoryMemberRequest
     *
     * @returns AddRepositoryMemberResponse
     *
     * @param string                     $repositoryId
     * @param AddRepositoryMemberRequest $request
     *
     * @return AddRepositoryMemberResponse
     */
    public function addRepositoryMember($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addRepositoryMemberWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 添加代码库Webhook.
     *
     * @param request - AddWebhookRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddWebhookResponse
     *
     * @param string            $repositoryId
     * @param AddWebhookRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AddWebhookResponse
     */
    public function addWebhookWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->enableSslVerification) {
            @$body['enableSslVerification'] = $request->enableSslVerification;
        }

        if (null !== $request->mergeRequestsEvents) {
            @$body['mergeRequestsEvents'] = $request->mergeRequestsEvents;
        }

        if (null !== $request->noteEvents) {
            @$body['noteEvents'] = $request->noteEvents;
        }

        if (null !== $request->pushEvents) {
            @$body['pushEvents'] = $request->pushEvents;
        }

        if (null !== $request->secretToken) {
            @$body['secretToken'] = $request->secretToken;
        }

        if (null !== $request->tagPushEvents) {
            @$body['tagPushEvents'] = $request->tagPushEvents;
        }

        if (null !== $request->url) {
            @$body['url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddWebhook',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/webhooks/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加代码库Webhook.
     *
     * @param request - AddWebhookRequest
     *
     * @returns AddWebhookResponse
     *
     * @param string            $repositoryId
     * @param AddWebhookRequest $request
     *
     * @return AddWebhookResponse
     */
    public function addWebhook($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addWebhookWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 取消执行研发阶段流水线
     *
     * @param request - CancelExecutionReleaseStageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelExecutionReleaseStageResponse
     *
     * @param string                             $appName
     * @param string                             $releaseWorkflowSn
     * @param string                             $releaseStageSn
     * @param string                             $executionNumber
     * @param CancelExecutionReleaseStageRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return CancelExecutionReleaseStageResponse
     */
    public function cancelExecutionReleaseStageWithOptions($appName, $releaseWorkflowSn, $releaseStageSn, $executionNumber, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelExecutionReleaseStage',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/appstack/apps/' . Url::percentEncode($appName) . '/releaseWorkflows/' . Url::percentEncode($releaseWorkflowSn) . '/releaseStages/' . Url::percentEncode($releaseStageSn) . '/executions/' . Url::percentEncode($executionNumber) . '%3Acancel',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CancelExecutionReleaseStageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消执行研发阶段流水线
     *
     * @param request - CancelExecutionReleaseStageRequest
     *
     * @returns CancelExecutionReleaseStageResponse
     *
     * @param string                             $appName
     * @param string                             $releaseWorkflowSn
     * @param string                             $releaseStageSn
     * @param string                             $executionNumber
     * @param CancelExecutionReleaseStageRequest $request
     *
     * @return CancelExecutionReleaseStageResponse
     */
    public function cancelExecutionReleaseStage($appName, $releaseWorkflowSn, $releaseStageSn, $executionNumber, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelExecutionReleaseStageWithOptions($appName, $releaseWorkflowSn, $releaseStageSn, $executionNumber, $request, $headers, $runtime);
    }

    /**
     * 关闭代码评审
     *
     * @param request - CloseMergeRequestRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseMergeRequestResponse
     *
     * @param string                   $repositoryId
     * @param string                   $localId
     * @param CloseMergeRequestRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CloseMergeRequestResponse
     */
    public function closeMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloseMergeRequest',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/' . Url::percentEncode($repositoryId) . '/merge_requests/' . Url::percentEncode($localId) . '/close',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CloseMergeRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关闭代码评审
     *
     * @param request - CloseMergeRequestRequest
     *
     * @returns CloseMergeRequestResponse
     *
     * @param string                   $repositoryId
     * @param string                   $localId
     * @param CloseMergeRequestRequest $request
     *
     * @return CloseMergeRequestResponse
     */
    public function closeMergeRequest($repositoryId, $localId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->closeMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime);
    }

    /**
     * 添加应用成员.
     *
     * @param request - CreateAppMembersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppMembersResponse
     *
     * @param string                  $appName
     * @param CreateAppMembersRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAppMembersResponse
     */
    public function createAppMembersWithOptions($appName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->playerList) {
            @$body['playerList'] = $request->playerList;
        }

        if (null !== $request->roleNames) {
            @$body['roleNames'] = $request->roleNames;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAppMembers',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/appstack/apps/' . Url::percentEncode($appName) . '/members',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);

        return CreateAppMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加应用成员.
     *
     * @param request - CreateAppMembersRequest
     *
     * @returns CreateAppMembersResponse
     *
     * @param string                  $appName
     * @param CreateAppMembersRequest $request
     *
     * @return CreateAppMembersResponse
     */
    public function createAppMembers($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppMembersWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * 创建分支.
     *
     * @param request - CreateBranchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBranchResponse
     *
     * @param string              $repositoryId
     * @param CreateBranchRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateBranchResponse
     */
    public function createBranchWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->branchName) {
            @$body['branchName'] = $request->branchName;
        }

        if (null !== $request->ref) {
            @$body['ref'] = $request->ref;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateBranch',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/branches',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateBranchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建分支.
     *
     * @param request - CreateBranchRequest
     *
     * @returns CreateBranchResponse
     *
     * @param string              $repositoryId
     * @param CreateBranchRequest $request
     *
     * @return CreateBranchResponse
     */
    public function createBranch($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createBranchWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 创建变更.
     *
     * @param request - CreateChangeRequestRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChangeRequestResponse
     *
     * @param string                     $appName
     * @param CreateChangeRequestRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateChangeRequestResponse
     */
    public function createChangeRequestWithOptions($appName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->appCodeRepoSn) {
            @$body['appCodeRepoSn'] = $request->appCodeRepoSn;
        }

        if (null !== $request->autoDeleteBranchWhenEnd) {
            @$body['autoDeleteBranchWhenEnd'] = $request->autoDeleteBranchWhenEnd;
        }

        if (null !== $request->branchName) {
            @$body['branchName'] = $request->branchName;
        }

        if (null !== $request->createBranch) {
            @$body['createBranch'] = $request->createBranch;
        }

        if (null !== $request->ownerAccountId) {
            @$body['ownerAccountId'] = $request->ownerAccountId;
        }

        if (null !== $request->ownerId) {
            @$body['ownerId'] = $request->ownerId;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateChangeRequest',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/appstack/apps/' . Url::percentEncode($appName) . '/changeRequests',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateChangeRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建变更.
     *
     * @param request - CreateChangeRequestRequest
     *
     * @returns CreateChangeRequestResponse
     *
     * @param string                     $appName
     * @param CreateChangeRequestRequest $request
     *
     * @return CreateChangeRequestResponse
     */
    public function createChangeRequest($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createChangeRequestWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * 添加检查运行记录.
     *
     * @param request - CreateCheckRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCheckRunResponse
     *
     * @param CreateCheckRunRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCheckRunResponse
     */
    public function createCheckRunWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->repositoryIdentity) {
            @$query['repositoryIdentity'] = $request->repositoryIdentity;
        }

        $body = [];
        if (null !== $request->annotations) {
            @$body['annotations'] = $request->annotations;
        }

        if (null !== $request->completedAt) {
            @$body['completedAt'] = $request->completedAt;
        }

        if (null !== $request->conclusion) {
            @$body['conclusion'] = $request->conclusion;
        }

        if (null !== $request->detailsUrl) {
            @$body['detailsUrl'] = $request->detailsUrl;
        }

        if (null !== $request->externalId) {
            @$body['externalId'] = $request->externalId;
        }

        if (null !== $request->headSha) {
            @$body['headSha'] = $request->headSha;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->output) {
            @$body['output'] = $request->output;
        }

        if (null !== $request->startedAt) {
            @$body['startedAt'] = $request->startedAt;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCheckRun',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/check_runs/create_check_run',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateCheckRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加检查运行记录.
     *
     * @param request - CreateCheckRunRequest
     *
     * @returns CreateCheckRunResponse
     *
     * @param CreateCheckRunRequest $request
     *
     * @return CreateCheckRunResponse
     */
    public function createCheckRun($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCheckRunWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建评论.
     *
     * @param request - CreateCommentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCommentResponse
     *
     * @param CreateCommentRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateCommentResponse
     */
    public function createCommentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->localId) {
            @$query['localId'] = $request->localId;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->repositoryIdentity) {
            @$query['repositoryIdentity'] = $request->repositoryIdentity;
        }

        $body = [];
        if (null !== $request->commentType) {
            @$body['commentType'] = $request->commentType;
        }

        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->draft) {
            @$body['draft'] = $request->draft;
        }

        if (null !== $request->filePath) {
            @$body['filePath'] = $request->filePath;
        }

        if (null !== $request->fromPachSetBizId) {
            @$body['fromPachSetBizId'] = $request->fromPachSetBizId;
        }

        if (null !== $request->lineNumber) {
            @$body['lineNumber'] = $request->lineNumber;
        }

        if (null !== $request->parentCommentBizId) {
            @$body['parentCommentBizId'] = $request->parentCommentBizId;
        }

        if (null !== $request->patchSetBizId) {
            @$body['patchSetBizId'] = $request->patchSetBizId;
        }

        if (null !== $request->resolved) {
            @$body['resolved'] = $request->resolved;
        }

        if (null !== $request->toPatchSetBizId) {
            @$body['toPatchSetBizId'] = $request->toPatchSetBizId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateComment',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/code_reviews/comments/create_comment',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateCommentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建评论.
     *
     * @param request - CreateCommentRequest
     *
     * @returns CreateCommentResponse
     *
     * @param CreateCommentRequest $request
     *
     * @return CreateCommentResponse
     */
    public function createComment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCommentWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建提交状态记录.
     *
     * @param request - CreateCommitStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCommitStatusResponse
     *
     * @param CreateCommitStatusRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateCommitStatusResponse
     */
    public function createCommitStatusWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->repositoryIdentity) {
            @$query['repositoryIdentity'] = $request->repositoryIdentity;
        }

        if (null !== $request->sha) {
            @$query['sha'] = $request->sha;
        }

        $body = [];
        if (null !== $request->context) {
            @$body['context'] = $request->context;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->state) {
            @$body['state'] = $request->state;
        }

        if (null !== $request->targetUrl) {
            @$body['targetUrl'] = $request->targetUrl;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCommitStatus',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/repository/commit_statuses/create_commit_status',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateCommitStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建提交状态记录.
     *
     * @param request - CreateCommitStatusRequest
     *
     * @returns CreateCommitStatusResponse
     *
     * @param CreateCommitStatusRequest $request
     *
     * @return CreateCommitStatusResponse
     */
    public function createCommitStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCommitStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * 单提交变更多个文件.
     *
     * @param request - CreateCommitWithMultipleFilesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCommitWithMultipleFilesResponse
     *
     * @param CreateCommitWithMultipleFilesRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateCommitWithMultipleFilesResponse
     */
    public function createCommitWithMultipleFilesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->repositoryIdentity) {
            @$query['repositoryIdentity'] = $request->repositoryIdentity;
        }

        $body = [];
        if (null !== $request->actions) {
            @$body['actions'] = $request->actions;
        }

        if (null !== $request->branch) {
            @$body['branch'] = $request->branch;
        }

        if (null !== $request->commitMessage) {
            @$body['commitMessage'] = $request->commitMessage;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCommitWithMultipleFiles',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/repository/commits/files',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateCommitWithMultipleFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 单提交变更多个文件.
     *
     * @param request - CreateCommitWithMultipleFilesRequest
     *
     * @returns CreateCommitWithMultipleFilesResponse
     *
     * @param CreateCommitWithMultipleFilesRequest $request
     *
     * @return CreateCommitWithMultipleFilesResponse
     */
    public function createCommitWithMultipleFiles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCommitWithMultipleFilesWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建部署密钥.
     *
     * @param request - CreateDeployKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDeployKeyResponse
     *
     * @param string                 $repositoryId
     * @param CreateDeployKeyRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDeployKeyResponse
     */
    public function createDeployKeyWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->key) {
            @$body['key'] = $request->key;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDeployKey',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/keys/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDeployKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建部署密钥.
     *
     * @param request - CreateDeployKeyRequest
     *
     * @returns CreateDeployKeyResponse
     *
     * @param string                 $repositoryId
     * @param CreateDeployKeyRequest $request
     *
     * @return CreateDeployKeyResponse
     */
    public function createDeployKey($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDeployKeyWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 创建文件.
     *
     * @param request - CreateFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFileResponse
     *
     * @param string            $repositoryId
     * @param CreateFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFileResponse
     */
    public function createFileWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->branchName) {
            @$body['branchName'] = $request->branchName;
        }

        if (null !== $request->commitMessage) {
            @$body['commitMessage'] = $request->commitMessage;
        }

        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->encoding) {
            @$body['encoding'] = $request->encoding;
        }

        if (null !== $request->filePath) {
            @$body['filePath'] = $request->filePath;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFile',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/files',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建文件.
     *
     * @param request - CreateFileRequest
     *
     * @returns CreateFileResponse
     *
     * @param string            $repositoryId
     * @param CreateFileRequest $request
     *
     * @return CreateFileResponse
     */
    public function createFile($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFileWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 创建标签.
     *
     * @param request - CreateFlowTagRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFlowTagResponse
     *
     * @param string               $organizationId
     * @param CreateFlowTagRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateFlowTagResponse
     */
    public function createFlowTagWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->color) {
            @$query['color'] = $request->color;
        }

        if (null !== $request->flowTagGroupId) {
            @$query['flowTagGroupId'] = $request->flowTagGroupId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFlowTag',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/flow/tags',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFlowTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建标签.
     *
     * @param request - CreateFlowTagRequest
     *
     * @returns CreateFlowTagResponse
     *
     * @param string               $organizationId
     * @param CreateFlowTagRequest $request
     *
     * @return CreateFlowTagResponse
     */
    public function createFlowTag($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFlowTagWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 创建标签分类.
     *
     * @param request - CreateFlowTagGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFlowTagGroupResponse
     *
     * @param string                    $organizationId
     * @param CreateFlowTagGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateFlowTagGroupResponse
     */
    public function createFlowTagGroupWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFlowTagGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/flow/tagGroups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateFlowTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建标签分类.
     *
     * @param request - CreateFlowTagGroupRequest
     *
     * @returns CreateFlowTagGroupResponse
     *
     * @param string                    $organizationId
     * @param CreateFlowTagGroupRequest $request
     *
     * @return CreateFlowTagGroupResponse
     */
    public function createFlowTagGroup($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFlowTagGroupWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 创建主机组.
     *
     * @param request - CreateHostGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHostGroupResponse
     *
     * @param string                 $organizationId
     * @param CreateHostGroupRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateHostGroupResponse
     */
    public function createHostGroupWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aliyunRegion) {
            @$body['aliyunRegion'] = $request->aliyunRegion;
        }

        if (null !== $request->ecsLabelKey) {
            @$body['ecsLabelKey'] = $request->ecsLabelKey;
        }

        if (null !== $request->ecsLabelValue) {
            @$body['ecsLabelValue'] = $request->ecsLabelValue;
        }

        if (null !== $request->ecsType) {
            @$body['ecsType'] = $request->ecsType;
        }

        if (null !== $request->envId) {
            @$body['envId'] = $request->envId;
        }

        if (null !== $request->machineInfos) {
            @$body['machineInfos'] = $request->machineInfos;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->serviceConnectionId) {
            @$body['serviceConnectionId'] = $request->serviceConnectionId;
        }

        if (null !== $request->tagIds) {
            @$body['tagIds'] = $request->tagIds;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateHostGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/hostGroups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建主机组.
     *
     * @param request - CreateHostGroupRequest
     *
     * @returns CreateHostGroupResponse
     *
     * @param string                 $organizationId
     * @param CreateHostGroupRequest $request
     *
     * @return CreateHostGroupResponse
     */
    public function createHostGroup($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHostGroupWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 创建代码评审
     *
     * @param request - CreateMergeRequestRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMergeRequestResponse
     *
     * @param string                    $repositoryId
     * @param CreateMergeRequestRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMergeRequestResponse
     */
    public function createMergeRequestWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->createFrom) {
            @$body['createFrom'] = $request->createFrom;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->reviewerIds) {
            @$body['reviewerIds'] = $request->reviewerIds;
        }

        if (null !== $request->sourceBranch) {
            @$body['sourceBranch'] = $request->sourceBranch;
        }

        if (null !== $request->sourceProjectId) {
            @$body['sourceProjectId'] = $request->sourceProjectId;
        }

        if (null !== $request->targetBranch) {
            @$body['targetBranch'] = $request->targetBranch;
        }

        if (null !== $request->targetProjectId) {
            @$body['targetProjectId'] = $request->targetProjectId;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        if (null !== $request->workItemIds) {
            @$body['workItemIds'] = $request->workItemIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMergeRequest',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/' . Url::percentEncode($repositoryId) . '/merge_requests',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMergeRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建代码评审
     *
     * @param request - CreateMergeRequestRequest
     *
     * @returns CreateMergeRequestResponse
     *
     * @param string                    $repositoryId
     * @param CreateMergeRequestRequest $request
     *
     * @return CreateMergeRequestResponse
     */
    public function createMergeRequest($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMergeRequestWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 创建OAuth令牌.
     *
     * @param request - CreateOAuthTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOAuthTokenResponse
     *
     * @param CreateOAuthTokenRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateOAuthTokenResponse
     */
    public function createOAuthTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientId) {
            @$body['clientId'] = $request->clientId;
        }

        if (null !== $request->clientSecret) {
            @$body['clientSecret'] = $request->clientSecret;
        }

        if (null !== $request->code) {
            @$body['code'] = $request->code;
        }

        if (null !== $request->grantType) {
            @$body['grantType'] = $request->grantType;
        }

        if (null !== $request->login) {
            @$body['login'] = $request->login;
        }

        if (null !== $request->scope) {
            @$body['scope'] = $request->scope;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOAuthToken',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/login/oauth/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateOAuthTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建OAuth令牌.
     *
     * @param request - CreateOAuthTokenRequest
     *
     * @returns CreateOAuthTokenResponse
     *
     * @param CreateOAuthTokenRequest $request
     *
     * @return CreateOAuthTokenResponse
     */
    public function createOAuthToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createOAuthTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建流水线。
     *
     * @param request - CreatePipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePipelineResponse
     *
     * @param string                $organizationId
     * @param CreatePipelineRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePipelineResponse
     */
    public function createPipelineWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePipeline',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建流水线。
     *
     * @param request - CreatePipelineRequest
     *
     * @returns CreatePipelineResponse
     *
     * @param string                $organizationId
     * @param CreatePipelineRequest $request
     *
     * @return CreatePipelineResponse
     */
    public function createPipeline($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPipelineWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 创建流水线分组.
     *
     * @param request - CreatePipelineGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePipelineGroupResponse
     *
     * @param string                     $organizationId
     * @param CreatePipelineGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreatePipelineGroupResponse
     */
    public function createPipelineGroupWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePipelineGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelineGroups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePipelineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建流水线分组.
     *
     * @param request - CreatePipelineGroupRequest
     *
     * @returns CreatePipelineGroupResponse
     *
     * @param string                     $organizationId
     * @param CreatePipelineGroupRequest $request
     *
     * @return CreatePipelineGroupResponse
     */
    public function createPipelineGroup($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPipelineGroupWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 创建项目.
     *
     * @param request - CreateProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProjectResponse
     *
     * @param string               $organizationId
     * @param CreateProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->customCode) {
            @$body['customCode'] = $request->customCode;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->scope) {
            @$body['scope'] = $request->scope;
        }

        if (null !== $request->templateIdentifier) {
            @$body['templateIdentifier'] = $request->templateIdentifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProject',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/projects/createProject',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建项目.
     *
     * @param request - CreateProjectRequest
     *
     * @returns CreateProjectResponse
     *
     * @param string               $organizationId
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 创建代码库Label.
     *
     * @param request - CreateProjectLabelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProjectLabelResponse
     *
     * @param CreateProjectLabelRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateProjectLabelResponse
     */
    public function createProjectLabelWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->repositoryIdentity) {
            @$query['repositoryIdentity'] = $request->repositoryIdentity;
        }

        $body = [];
        if (null !== $request->color) {
            @$body['color'] = $request->color;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProjectLabel',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/labels',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateProjectLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建代码库Label.
     *
     * @param request - CreateProjectLabelRequest
     *
     * @returns CreateProjectLabelResponse
     *
     * @param CreateProjectLabelRequest $request
     *
     * @return CreateProjectLabelResponse
     */
    public function createProjectLabel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProjectLabelWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建保护分支.
     *
     * @param request - CreateProtectdBranchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProtectdBranchResponse
     *
     * @param string                      $repositoryId
     * @param CreateProtectdBranchRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateProtectdBranchResponse
     */
    public function createProtectdBranchWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->allowMergeRoles) {
            @$body['allowMergeRoles'] = $request->allowMergeRoles;
        }

        if (null !== $request->allowMergeUserIds) {
            @$body['allowMergeUserIds'] = $request->allowMergeUserIds;
        }

        if (null !== $request->allowPushRoles) {
            @$body['allowPushRoles'] = $request->allowPushRoles;
        }

        if (null !== $request->allowPushUserIds) {
            @$body['allowPushUserIds'] = $request->allowPushUserIds;
        }

        if (null !== $request->branch) {
            @$body['branch'] = $request->branch;
        }

        if (null !== $request->id) {
            @$body['id'] = $request->id;
        }

        if (null !== $request->mergeRequestSetting) {
            @$body['mergeRequestSetting'] = $request->mergeRequestSetting;
        }

        if (null !== $request->testSettingDTO) {
            @$body['testSettingDTO'] = $request->testSettingDTO;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProtectdBranch',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/protect_branches',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateProtectdBranchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建保护分支.
     *
     * @param request - CreateProtectdBranchRequest
     *
     * @returns CreateProtectdBranchResponse
     *
     * @param string                      $repositoryId
     * @param CreateProtectdBranchRequest $request
     *
     * @return CreateProtectdBranchResponse
     */
    public function createProtectdBranch($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProtectdBranchWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 创建推送规则.
     *
     * @param request - CreatePushRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePushRuleResponse
     *
     * @param string                $repositoryId
     * @param CreatePushRuleRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePushRuleResponse
     */
    public function createPushRuleWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->ruleInfos) {
            @$body['ruleInfos'] = $request->ruleInfos;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePushRule',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/' . Url::percentEncode($repositoryId) . '/push_rule',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePushRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建推送规则.
     *
     * @param request - CreatePushRuleRequest
     *
     * @returns CreatePushRuleResponse
     *
     * @param string                $repositoryId
     * @param CreatePushRuleRequest $request
     *
     * @return CreatePushRuleResponse
     */
    public function createPushRule($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPushRuleWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 创建(导入)代码库.
     *
     * @param request - CreateRepositoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRepositoryResponse
     *
     * @param CreateRepositoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRepositoryResponse
     */
    public function createRepositoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->createParentPath) {
            @$query['createParentPath'] = $request->createParentPath;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->sync) {
            @$query['sync'] = $request->sync;
        }

        $body = [];
        if (null !== $request->avatarUrl) {
            @$body['avatarUrl'] = $request->avatarUrl;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->gitignoreType) {
            @$body['gitignoreType'] = $request->gitignoreType;
        }

        if (null !== $request->importAccount) {
            @$body['importAccount'] = $request->importAccount;
        }

        if (null !== $request->importDemoProject) {
            @$body['importDemoProject'] = $request->importDemoProject;
        }

        if (null !== $request->importRepoType) {
            @$body['importRepoType'] = $request->importRepoType;
        }

        if (null !== $request->importToken) {
            @$body['importToken'] = $request->importToken;
        }

        if (null !== $request->importTokenEncrypted) {
            @$body['importTokenEncrypted'] = $request->importTokenEncrypted;
        }

        if (null !== $request->importUrl) {
            @$body['importUrl'] = $request->importUrl;
        }

        if (null !== $request->initStandardService) {
            @$body['initStandardService'] = $request->initStandardService;
        }

        if (null !== $request->isCryptoEnabled) {
            @$body['isCryptoEnabled'] = $request->isCryptoEnabled;
        }

        if (null !== $request->localImportUrl) {
            @$body['localImportUrl'] = $request->localImportUrl;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->namespaceId) {
            @$body['namespaceId'] = $request->namespaceId;
        }

        if (null !== $request->path) {
            @$body['path'] = $request->path;
        }

        if (null !== $request->readmeType) {
            @$body['readmeType'] = $request->readmeType;
        }

        if (null !== $request->visibilityLevel) {
            @$body['visibilityLevel'] = $request->visibilityLevel;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRepository',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建(导入)代码库.
     *
     * @param request - CreateRepositoryRequest
     *
     * @returns CreateRepositoryResponse
     *
     * @param CreateRepositoryRequest $request
     *
     * @return CreateRepositoryResponse
     */
    public function createRepository($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRepositoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建代码组.
     *
     * @param request - CreateRepositoryGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRepositoryGroupResponse
     *
     * @param CreateRepositoryGroupRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateRepositoryGroupResponse
     */
    public function createRepositoryGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->avatarUrl) {
            @$body['avatarUrl'] = $request->avatarUrl;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->parentId) {
            @$body['parentId'] = $request->parentId;
        }

        if (null !== $request->path) {
            @$body['path'] = $request->path;
        }

        if (null !== $request->visibilityLevel) {
            @$body['visibilityLevel'] = $request->visibilityLevel;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRepositoryGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/groups/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRepositoryGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建代码组.
     *
     * @param request - CreateRepositoryGroupRequest
     *
     * @returns CreateRepositoryGroupResponse
     *
     * @param CreateRepositoryGroupRequest $request
     *
     * @return CreateRepositoryGroupResponse
     */
    public function createRepositoryGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRepositoryGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 插入资源成员.
     *
     * @param request - CreateResourceMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourceMemberResponse
     *
     * @param string                      $organizationId
     * @param string                      $resourceType
     * @param string                      $resourceId
     * @param CreateResourceMemberRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateResourceMemberResponse
     */
    public function createResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountId) {
            @$body['accountId'] = $request->accountId;
        }

        if (null !== $request->roleName) {
            @$body['roleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateResourceMember',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/' . Url::percentEncode($resourceType) . '/' . Url::percentEncode($resourceId) . '/members',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateResourceMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 插入资源成员.
     *
     * @param request - CreateResourceMemberRequest
     *
     * @returns CreateResourceMemberResponse
     *
     * @param string                      $organizationId
     * @param string                      $resourceType
     * @param string                      $resourceId
     * @param CreateResourceMemberRequest $request
     *
     * @return CreateResourceMemberResponse
     */
    public function createResourceMember($organizationId, $resourceType, $resourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $request, $headers, $runtime);
    }

    /**
     * 创建服务授权.
     *
     * @param request - CreateServiceAuthRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceAuthResponse
     *
     * @param string                   $organizationId
     * @param CreateServiceAuthRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateServiceAuthResponse
     */
    public function createServiceAuthWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceAuthType) {
            @$query['serviceAuthType'] = $request->serviceAuthType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateServiceAuth',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/serviceAuths',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建服务授权.
     *
     * @param request - CreateServiceAuthRequest
     *
     * @returns CreateServiceAuthResponse
     *
     * @param string                   $organizationId
     * @param CreateServiceAuthRequest $request
     *
     * @return CreateServiceAuthResponse
     */
    public function createServiceAuth($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceAuthWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 创建服务连接.
     *
     * @param request - CreateServiceConnectionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceConnectionResponse
     *
     * @param string                         $organizationId
     * @param CreateServiceConnectionRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceConnectionResponse
     */
    public function createServiceConnectionWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authType) {
            @$body['authType'] = $request->authType;
        }

        if (null !== $request->connectionName) {
            @$body['connectionName'] = $request->connectionName;
        }

        if (null !== $request->connectionType) {
            @$body['connectionType'] = $request->connectionType;
        }

        if (null !== $request->scope) {
            @$body['scope'] = $request->scope;
        }

        if (null !== $request->serviceAuthId) {
            @$body['serviceAuthId'] = $request->serviceAuthId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateServiceConnection',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/createServiceConnection',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建服务连接.
     *
     * @param request - CreateServiceConnectionRequest
     *
     * @returns CreateServiceConnectionResponse
     *
     * @param string                         $organizationId
     * @param CreateServiceConnectionRequest $request
     *
     * @return CreateServiceConnectionResponse
     */
    public function createServiceConnection($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceConnectionWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 创建用户名密码类型的证书.
     *
     * @param request - CreateServiceCredentialRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateServiceCredentialResponse
     *
     * @param string                         $organizationId
     * @param CreateServiceCredentialRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceCredentialResponse
     */
    public function createServiceCredentialWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->password) {
            @$body['password'] = $request->password;
        }

        if (null !== $request->scope) {
            @$body['scope'] = $request->scope;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        if (null !== $request->username) {
            @$body['username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateServiceCredential',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/serviceCredentials',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateServiceCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建用户名密码类型的证书.
     *
     * @param request - CreateServiceCredentialRequest
     *
     * @returns CreateServiceCredentialResponse
     *
     * @param string                         $organizationId
     * @param CreateServiceCredentialRequest $request
     *
     * @return CreateServiceCredentialResponse
     */
    public function createServiceCredential($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceCredentialWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 创建迭代.
     *
     * @param request - CreateSprintRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSprintResponse
     *
     * @param string              $organizationId
     * @param CreateSprintRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSprintResponse
     */
    public function createSprintWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endDate) {
            @$body['endDate'] = $request->endDate;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->spaceIdentifier) {
            @$body['spaceIdentifier'] = $request->spaceIdentifier;
        }

        if (null !== $request->staffIds) {
            @$body['staffIds'] = $request->staffIds;
        }

        if (null !== $request->startDate) {
            @$body['startDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSprint',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/sprints/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSprintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建迭代.
     *
     * @param request - CreateSprintRequest
     *
     * @returns CreateSprintResponse
     *
     * @param string              $organizationId
     * @param CreateSprintRequest $request
     *
     * @return CreateSprintResponse
     */
    public function createSprint($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSprintWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 创建企业公钥.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSshKeyResponse
     *
     * @param string         $organizationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateSshKeyResponse
     */
    public function createSshKeyWithOptions($organizationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CreateSshKey',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/sshKey',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSshKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建企业公钥.
     *
     * @returns CreateSshKeyResponse
     *
     * @param string $organizationId
     *
     * @return CreateSshKeyResponse
     */
    public function createSshKey($organizationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSshKeyWithOptions($organizationId, $headers, $runtime);
    }

    /**
     * 创建标签Tag.
     *
     * @param request - CreateTagRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTagResponse
     *
     * @param string           $repositoryId
     * @param CreateTagRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateTagResponse
     */
    public function createTagWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->message) {
            @$body['message'] = $request->message;
        }

        if (null !== $request->ref) {
            @$body['ref'] = $request->ref;
        }

        if (null !== $request->tagName) {
            @$body['tagName'] = $request->tagName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTag',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/tags/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建标签Tag.
     *
     * @param request - CreateTagRequest
     *
     * @returns CreateTagResponse
     *
     * @param string           $repositoryId
     * @param CreateTagRequest $request
     *
     * @return CreateTagResponse
     */
    public function createTag($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTagWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 创建测试用例.
     *
     * @param request - CreateTestCaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTestCaseResponse
     *
     * @param string                $organizationId
     * @param CreateTestCaseRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTestCaseResponse
     */
    public function createTestCaseWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assignedTo) {
            @$body['assignedTo'] = $request->assignedTo;
        }

        if (null !== $request->directoryIdentifier) {
            @$body['directoryIdentifier'] = $request->directoryIdentifier;
        }

        if (null !== $request->fieldValueList) {
            @$body['fieldValueList'] = $request->fieldValueList;
        }

        if (null !== $request->priority) {
            @$body['priority'] = $request->priority;
        }

        if (null !== $request->spaceIdentifier) {
            @$body['spaceIdentifier'] = $request->spaceIdentifier;
        }

        if (null !== $request->subject) {
            @$body['subject'] = $request->subject;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->testcaseStepContentInfo) {
            @$body['testcaseStepContentInfo'] = $request->testcaseStepContentInfo;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTestCase',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/testhub/testcase',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateTestCaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建测试用例.
     *
     * @param request - CreateTestCaseRequest
     *
     * @returns CreateTestCaseResponse
     *
     * @param string                $organizationId
     * @param CreateTestCaseRequest $request
     *
     * @return CreateTestCaseResponse
     */
    public function createTestCase($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTestCaseWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 创建SSH Key密钥.
     *
     * @param request - CreateUserKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserKeyResponse
     *
     * @param CreateUserKeyRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateUserKeyResponse
     */
    public function createUserKeyWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->expireTime) {
            @$body['expireTime'] = $request->expireTime;
        }

        if (null !== $request->keyScope) {
            @$body['keyScope'] = $request->keyScope;
        }

        if (null !== $request->publicKey) {
            @$body['publicKey'] = $request->publicKey;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUserKey',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v3/user/keys/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateUserKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建SSH Key密钥.
     *
     * @param request - CreateUserKeyRequest
     *
     * @returns CreateUserKeyResponse
     *
     * @param CreateUserKeyRequest $request
     *
     * @return CreateUserKeyResponse
     */
    public function createUserKey($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUserKeyWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建变量组.
     *
     * @param request - CreateVariableGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVariableGroupResponse
     *
     * @param string                     $organizationId
     * @param CreateVariableGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateVariableGroupResponse
     */
    public function createVariableGroupWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->variables) {
            @$body['variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVariableGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/variableGroups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVariableGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建变量组.
     *
     * @param request - CreateVariableGroupRequest
     *
     * @returns CreateVariableGroupResponse
     *
     * @param string                     $organizationId
     * @param CreateVariableGroupRequest $request
     *
     * @return CreateVariableGroupResponse
     */
    public function createVariableGroup($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createVariableGroupWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 新建工作项.
     *
     * @param request - CreateWorkitemRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkitemResponse
     *
     * @param string                $organizationId
     * @param CreateWorkitemRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateWorkitemResponse
     */
    public function createWorkitemWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assignedTo) {
            @$body['assignedTo'] = $request->assignedTo;
        }

        if (null !== $request->category) {
            @$body['category'] = $request->category;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->descriptionFormat) {
            @$body['descriptionFormat'] = $request->descriptionFormat;
        }

        if (null !== $request->fieldValueList) {
            @$body['fieldValueList'] = $request->fieldValueList;
        }

        if (null !== $request->parent) {
            @$body['parent'] = $request->parent;
        }

        if (null !== $request->participant) {
            @$body['participant'] = $request->participant;
        }

        if (null !== $request->space) {
            @$body['space'] = $request->space;
        }

        if (null !== $request->spaceIdentifier) {
            @$body['spaceIdentifier'] = $request->spaceIdentifier;
        }

        if (null !== $request->spaceType) {
            @$body['spaceType'] = $request->spaceType;
        }

        if (null !== $request->sprint) {
            @$body['sprint'] = $request->sprint;
        }

        if (null !== $request->subject) {
            @$body['subject'] = $request->subject;
        }

        if (null !== $request->tracker) {
            @$body['tracker'] = $request->tracker;
        }

        if (null !== $request->verifier) {
            @$body['verifier'] = $request->verifier;
        }

        if (null !== $request->workitemType) {
            @$body['workitemType'] = $request->workitemType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWorkitem',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateWorkitemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新建工作项.
     *
     * @param request - CreateWorkitemRequest
     *
     * @returns CreateWorkitemResponse
     *
     * @param string                $organizationId
     * @param CreateWorkitemRequest $request
     *
     * @return CreateWorkitemResponse
     */
    public function createWorkitem($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkitemWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 创建一个评论.
     *
     * @param request - CreateWorkitemCommentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkitemCommentResponse
     *
     * @param string                       $organizationId
     * @param CreateWorkitemCommentRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateWorkitemCommentResponse
     */
    public function createWorkitemCommentWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->formatType) {
            @$body['formatType'] = $request->formatType;
        }

        if (null !== $request->parentId) {
            @$body['parentId'] = $request->parentId;
        }

        if (null !== $request->workitemIdentifier) {
            @$body['workitemIdentifier'] = $request->workitemIdentifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWorkitemComment',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/comment',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateWorkitemCommentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建一个评论.
     *
     * @param request - CreateWorkitemCommentRequest
     *
     * @returns CreateWorkitemCommentResponse
     *
     * @param string                       $organizationId
     * @param CreateWorkitemCommentRequest $request
     *
     * @return CreateWorkitemCommentResponse
     */
    public function createWorkitemComment($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkitemCommentWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 登记预计工时.
     *
     * @param request - CreateWorkitemEstimateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkitemEstimateResponse
     *
     * @param string                        $organizationId
     * @param CreateWorkitemEstimateRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateWorkitemEstimateResponse
     */
    public function createWorkitemEstimateWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->recordUserIdentifier) {
            @$body['recordUserIdentifier'] = $request->recordUserIdentifier;
        }

        if (null !== $request->spentTime) {
            @$body['spentTime'] = $request->spentTime;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        if (null !== $request->workitemIdentifier) {
            @$body['workitemIdentifier'] = $request->workitemIdentifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWorkitemEstimate',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/estimate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateWorkitemEstimateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 登记预计工时.
     *
     * @param request - CreateWorkitemEstimateRequest
     *
     * @returns CreateWorkitemEstimateResponse
     *
     * @param string                        $organizationId
     * @param CreateWorkitemEstimateRequest $request
     *
     * @return CreateWorkitemEstimateResponse
     */
    public function createWorkitemEstimate($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkitemEstimateWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 登记实际工时.
     *
     * @param request - CreateWorkitemRecordRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkitemRecordResponse
     *
     * @param string                      $organizationId
     * @param CreateWorkitemRecordRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateWorkitemRecordResponse
     */
    public function createWorkitemRecordWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->actualTime) {
            @$body['actualTime'] = $request->actualTime;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->gmtEnd) {
            @$body['gmtEnd'] = $request->gmtEnd;
        }

        if (null !== $request->gmtStart) {
            @$body['gmtStart'] = $request->gmtStart;
        }

        if (null !== $request->recordUserIdentifier) {
            @$body['recordUserIdentifier'] = $request->recordUserIdentifier;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        if (null !== $request->workitemIdentifier) {
            @$body['workitemIdentifier'] = $request->workitemIdentifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWorkitemRecord',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/record',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateWorkitemRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 登记实际工时.
     *
     * @param request - CreateWorkitemRecordRequest
     *
     * @returns CreateWorkitemRecordResponse
     *
     * @param string                      $organizationId
     * @param CreateWorkitemRecordRequest $request
     *
     * @return CreateWorkitemRecordResponse
     */
    public function createWorkitemRecord($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkitemRecordWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 创建工作项.
     *
     * @param request - CreateWorkitemV2Request
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkitemV2Response
     *
     * @param string                  $organizationId
     * @param CreateWorkitemV2Request $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateWorkitemV2Response
     */
    public function createWorkitemV2WithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assignedTo) {
            @$body['assignedTo'] = $request->assignedTo;
        }

        if (null !== $request->category) {
            @$body['category'] = $request->category;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->fieldValueList) {
            @$body['fieldValueList'] = $request->fieldValueList;
        }

        if (null !== $request->parentIdentifier) {
            @$body['parentIdentifier'] = $request->parentIdentifier;
        }

        if (null !== $request->participants) {
            @$body['participants'] = $request->participants;
        }

        if (null !== $request->spaceIdentifier) {
            @$body['spaceIdentifier'] = $request->spaceIdentifier;
        }

        if (null !== $request->sprintIdentifier) {
            @$body['sprintIdentifier'] = $request->sprintIdentifier;
        }

        if (null !== $request->subject) {
            @$body['subject'] = $request->subject;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        if (null !== $request->trackers) {
            @$body['trackers'] = $request->trackers;
        }

        if (null !== $request->verifier) {
            @$body['verifier'] = $request->verifier;
        }

        if (null !== $request->versions) {
            @$body['versions'] = $request->versions;
        }

        if (null !== $request->workitemTypeIdentifier) {
            @$body['workitemTypeIdentifier'] = $request->workitemTypeIdentifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWorkitemV2',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitem',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateWorkitemV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建工作项.
     *
     * @param request - CreateWorkitemV2Request
     *
     * @returns CreateWorkitemV2Response
     *
     * @param string                  $organizationId
     * @param CreateWorkitemV2Request $request
     *
     * @return CreateWorkitemV2Response
     */
    public function createWorkitemV2($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWorkitemV2WithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 删除应用成员.
     *
     * @param request - DeleteAppMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppMemberResponse
     *
     * @param string                 $appName
     * @param DeleteAppMemberRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAppMemberResponse
     */
    public function deleteAppMemberWithOptions($appName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->subjectId) {
            @$query['subjectId'] = $request->subjectId;
        }

        if (null !== $request->subjectType) {
            @$query['subjectType'] = $request->subjectType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAppMember',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/appstack/apps/' . Url::percentEncode($appName) . '/members',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);

        return DeleteAppMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除应用成员.
     *
     * @param request - DeleteAppMemberRequest
     *
     * @returns DeleteAppMemberResponse
     *
     * @param string                 $appName
     * @param DeleteAppMemberRequest $request
     *
     * @return DeleteAppMemberResponse
     */
    public function deleteAppMember($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAppMemberWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * 删除分支.
     *
     * @param request - DeleteBranchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBranchResponse
     *
     * @param string              $repositoryId
     * @param DeleteBranchRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteBranchResponse
     */
    public function deleteBranchWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->branchName) {
            @$query['branchName'] = $request->branchName;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBranch',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/branches/delete',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteBranchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除分支.
     *
     * @param request - DeleteBranchRequest
     *
     * @returns DeleteBranchResponse
     *
     * @param string              $repositoryId
     * @param DeleteBranchRequest $request
     *
     * @return DeleteBranchResponse
     */
    public function deleteBranch($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBranchWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 删除文件.
     *
     * @param request - DeleteFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFileResponse
     *
     * @param string            $repositoryId
     * @param DeleteFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFileResponse
     */
    public function deleteFileWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->branchName) {
            @$query['branchName'] = $request->branchName;
        }

        if (null !== $request->commitMessage) {
            @$query['commitMessage'] = $request->commitMessage;
        }

        if (null !== $request->filePath) {
            @$query['filePath'] = $request->filePath;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteFile',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/files/delete',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除文件.
     *
     * @param request - DeleteFileRequest
     *
     * @returns DeleteFileResponse
     *
     * @param string            $repositoryId
     * @param DeleteFileRequest $request
     *
     * @return DeleteFileResponse
     */
    public function deleteFile($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFileWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 删除标签.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFlowTagResponse
     *
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFlowTagResponse
     */
    public function deleteFlowTagWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteFlowTag',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/flow/tags/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteFlowTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除标签.
     *
     * @returns DeleteFlowTagResponse
     *
     * @param string $organizationId
     * @param string $id
     *
     * @return DeleteFlowTagResponse
     */
    public function deleteFlowTag($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowTagWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * 删除标签分类.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFlowTagGroupResponse
     *
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFlowTagGroupResponse
     */
    public function deleteFlowTagGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteFlowTagGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/flow/tagGroups/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteFlowTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除标签分类.
     *
     * @returns DeleteFlowTagGroupResponse
     *
     * @param string $organizationId
     * @param string $id
     *
     * @return DeleteFlowTagGroupResponse
     */
    public function deleteFlowTagGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFlowTagGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * 删除组成员.
     *
     * @param request - DeleteGroupMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGroupMemberResponse
     *
     * @param string                   $groupId
     * @param DeleteGroupMemberRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteGroupMemberResponse
     */
    public function deleteGroupMemberWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->aliyunPk) {
            @$query['aliyunPk'] = $request->aliyunPk;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->memberType) {
            @$body['memberType'] = $request->memberType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteGroupMember',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/groups/' . Url::percentEncode($groupId) . '/members/remove/aliyun_pk',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除组成员.
     *
     * @param request - DeleteGroupMemberRequest
     *
     * @returns DeleteGroupMemberResponse
     *
     * @param string                   $groupId
     * @param DeleteGroupMemberRequest $request
     *
     * @return DeleteGroupMemberResponse
     */
    public function deleteGroupMember($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGroupMemberWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * 删除主机组.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHostGroupResponse
     *
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteHostGroupResponse
     */
    public function deleteHostGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteHostGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/hostGroups/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除主机组.
     *
     * @returns DeleteHostGroupResponse
     *
     * @param string $organizationId
     * @param string $id
     *
     * @return DeleteHostGroupResponse
     */
    public function deleteHostGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHostGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * 删除流水线
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePipelineResponse
     *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePipelineResponse
     */
    public function deletePipelineWithOptions($organizationId, $pipelineId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePipeline',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines/' . Url::percentEncode($pipelineId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除流水线
     *
     * @returns DeletePipelineResponse
     *
     * @param string $organizationId
     * @param string $pipelineId
     *
     * @return DeletePipelineResponse
     */
    public function deletePipeline($organizationId, $pipelineId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelineWithOptions($organizationId, $pipelineId, $headers, $runtime);
    }

    /**
     * 删除流水线分组.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePipelineGroupResponse
     *
     * @param string         $organizationId
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePipelineGroupResponse
     */
    public function deletePipelineGroupWithOptions($organizationId, $groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePipelineGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelineGroups/' . Url::percentEncode($groupId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePipelineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除流水线分组.
     *
     * @returns DeletePipelineGroupResponse
     *
     * @param string $organizationId
     * @param string $groupId
     *
     * @return DeletePipelineGroupResponse
     */
    public function deletePipelineGroup($organizationId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelineGroupWithOptions($organizationId, $groupId, $headers, $runtime);
    }

    /**
     * 删除流水线关联.
     *
     * @param request - DeletePipelineRelationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePipelineRelationsResponse
     *
     * @param string                         $organizationId
     * @param string                         $pipelineId
     * @param DeletePipelineRelationsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeletePipelineRelationsResponse
     */
    public function deletePipelineRelationsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->relObjectId) {
            @$query['relObjectId'] = $request->relObjectId;
        }

        if (null !== $request->relObjectType) {
            @$query['relObjectType'] = $request->relObjectType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePipelineRelations',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/' . Url::percentEncode($pipelineId) . '/pipelineRelations',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePipelineRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除流水线关联.
     *
     * @param request - DeletePipelineRelationsRequest
     *
     * @returns DeletePipelineRelationsResponse
     *
     * @param string                         $organizationId
     * @param string                         $pipelineId
     * @param DeletePipelineRelationsRequest $request
     *
     * @return DeletePipelineRelationsResponse
     */
    public function deletePipelineRelations($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePipelineRelationsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * 删除项目.
     *
     * @param request - DeleteProjectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProjectResponse
     *
     * @param string               $organizationId
     * @param DeleteProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identifier) {
            @$query['identifier'] = $request->identifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteProject',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/projects/delete',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除项目.
     *
     * @param request - DeleteProjectRequest
     *
     * @returns DeleteProjectResponse
     *
     * @param string               $organizationId
     * @param DeleteProjectRequest $request
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 删除代码库Label.
     *
     * @param request - DeleteProjectLabelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProjectLabelResponse
     *
     * @param string                    $labelId
     * @param DeleteProjectLabelRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteProjectLabelResponse
     */
    public function deleteProjectLabelWithOptions($labelId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->repositoryIdentity) {
            @$query['repositoryIdentity'] = $request->repositoryIdentity;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteProjectLabel',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/labels/' . Url::percentEncode($labelId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteProjectLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除代码库Label.
     *
     * @param request - DeleteProjectLabelRequest
     *
     * @returns DeleteProjectLabelResponse
     *
     * @param string                    $labelId
     * @param DeleteProjectLabelRequest $request
     *
     * @return DeleteProjectLabelResponse
     */
    public function deleteProjectLabel($labelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectLabelWithOptions($labelId, $request, $headers, $runtime);
    }

    /**
     * 删除保护分支.
     *
     * @param request - DeleteProtectedBranchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProtectedBranchResponse
     *
     * @param string                       $repositoryId
     * @param string                       $protectedBranchId
     * @param DeleteProtectedBranchRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteProtectedBranchResponse
     */
    public function deleteProtectedBranchWithOptions($repositoryId, $protectedBranchId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteProtectedBranch',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/protect_branches/' . Url::percentEncode($protectedBranchId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteProtectedBranchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除保护分支.
     *
     * @param request - DeleteProtectedBranchRequest
     *
     * @returns DeleteProtectedBranchResponse
     *
     * @param string                       $repositoryId
     * @param string                       $protectedBranchId
     * @param DeleteProtectedBranchRequest $request
     *
     * @return DeleteProtectedBranchResponse
     */
    public function deleteProtectedBranch($repositoryId, $protectedBranchId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProtectedBranchWithOptions($repositoryId, $protectedBranchId, $request, $headers, $runtime);
    }

    /**
     * 删除推送规则.
     *
     * @param request - DeletePushRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePushRuleResponse
     *
     * @param string                $repositoryId
     * @param string                $pushRuleId
     * @param DeletePushRuleRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePushRuleResponse
     */
    public function deletePushRuleWithOptions($repositoryId, $pushRuleId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePushRule',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/' . Url::percentEncode($repositoryId) . '/push_rule/' . Url::percentEncode($pushRuleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePushRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除推送规则.
     *
     * @param request - DeletePushRuleRequest
     *
     * @returns DeletePushRuleResponse
     *
     * @param string                $repositoryId
     * @param string                $pushRuleId
     * @param DeletePushRuleRequest $request
     *
     * @return DeletePushRuleResponse
     */
    public function deletePushRule($repositoryId, $pushRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePushRuleWithOptions($repositoryId, $pushRuleId, $request, $headers, $runtime);
    }

    /**
     * 删除代码库.
     *
     * @param request - DeleteRepositoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRepositoryResponse
     *
     * @param string                  $repositoryId
     * @param DeleteRepositoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteRepositoryResponse
     */
    public function deleteRepositoryWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->reason) {
            @$body['reason'] = $request->reason;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRepository',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/remove',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除代码库.
     *
     * @param request - DeleteRepositoryRequest
     *
     * @returns DeleteRepositoryResponse
     *
     * @param string                  $repositoryId
     * @param DeleteRepositoryRequest $request
     *
     * @return DeleteRepositoryResponse
     */
    public function deleteRepository($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepositoryWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 删除代码组.
     *
     * @param request - DeleteRepositoryGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRepositoryGroupResponse
     *
     * @param string                       $groupId
     * @param DeleteRepositoryGroupRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteRepositoryGroupResponse
     */
    public function deleteRepositoryGroupWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->reason) {
            @$body['reason'] = $request->reason;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRepositoryGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/groups/' . Url::percentEncode($groupId) . '/remove',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRepositoryGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除代码组.
     *
     * @param request - DeleteRepositoryGroupRequest
     *
     * @returns DeleteRepositoryGroupResponse
     *
     * @param string                       $groupId
     * @param DeleteRepositoryGroupRequest $request
     *
     * @return DeleteRepositoryGroupResponse
     */
    public function deleteRepositoryGroup($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepositoryGroupWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * 删除代码库成员.
     *
     * @param request - DeleteRepositoryMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRepositoryMemberResponse
     *
     * @param string                        $repositoryId
     * @param string                        $aliyunPk
     * @param DeleteRepositoryMemberRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteRepositoryMemberResponse
     */
    public function deleteRepositoryMemberWithOptions($repositoryId, $aliyunPk, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->memberType) {
            @$body['memberType'] = $request->memberType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRepositoryMember',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/members/delete/' . Url::percentEncode($aliyunPk) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRepositoryMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除代码库成员.
     *
     * @param request - DeleteRepositoryMemberRequest
     *
     * @returns DeleteRepositoryMemberResponse
     *
     * @param string                        $repositoryId
     * @param string                        $aliyunPk
     * @param DeleteRepositoryMemberRequest $request
     *
     * @return DeleteRepositoryMemberResponse
     */
    public function deleteRepositoryMember($repositoryId, $aliyunPk, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepositoryMemberWithOptions($repositoryId, $aliyunPk, $request, $headers, $runtime);
    }

    /**
     * 删除代码库Webhook.
     *
     * @param request - DeleteRepositoryWebhookRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRepositoryWebhookResponse
     *
     * @param string                         $repositoryId
     * @param string                         $hookId
     * @param DeleteRepositoryWebhookRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteRepositoryWebhookResponse
     */
    public function deleteRepositoryWebhookWithOptions($repositoryId, $hookId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRepositoryWebhook',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/hooks/' . Url::percentEncode($hookId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRepositoryWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除代码库Webhook.
     *
     * @param request - DeleteRepositoryWebhookRequest
     *
     * @returns DeleteRepositoryWebhookResponse
     *
     * @param string                         $repositoryId
     * @param string                         $hookId
     * @param DeleteRepositoryWebhookRequest $request
     *
     * @return DeleteRepositoryWebhookResponse
     */
    public function deleteRepositoryWebhook($repositoryId, $hookId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRepositoryWebhookWithOptions($repositoryId, $hookId, $request, $headers, $runtime);
    }

    /**
     * 删除资源成员.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceMemberResponse
     *
     * @param string         $organizationId
     * @param string         $resourceType
     * @param string         $resourceId
     * @param string         $accountId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteResourceMemberResponse
     */
    public function deleteResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $accountId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteResourceMember',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/' . Url::percentEncode($resourceType) . '/' . Url::percentEncode($resourceId) . '/members/' . Url::percentEncode($accountId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteResourceMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除资源成员.
     *
     * @returns DeleteResourceMemberResponse
     *
     * @param string $organizationId
     * @param string $resourceType
     * @param string $resourceId
     * @param string $accountId
     *
     * @return DeleteResourceMemberResponse
     */
    public function deleteResourceMember($organizationId, $resourceType, $resourceId, $accountId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $accountId, $headers, $runtime);
    }

    /**
     * 删除标签.
     *
     * @param request - DeleteTagRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTagResponse
     *
     * @param string           $repositoryId
     * @param DeleteTagRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteTagResponse
     */
    public function deleteTagWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->tagName) {
            @$query['tagName'] = $request->tagName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTag',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/tags/delete',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除标签.
     *
     * @param request - DeleteTagRequest
     *
     * @returns DeleteTagResponse
     *
     * @param string           $repositoryId
     * @param DeleteTagRequest $request
     *
     * @return DeleteTagResponse
     */
    public function deleteTag($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTagWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 删除用户的SSH Key.
     *
     * @param request - DeleteUserKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserKeyResponse
     *
     * @param string               $keyId
     * @param DeleteUserKeyRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteUserKeyResponse
     */
    public function deleteUserKeyWithOptions($keyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUserKey',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v3/user/keys/' . Url::percentEncode($keyId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteUserKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除用户的SSH Key.
     *
     * @param request - DeleteUserKeyRequest
     *
     * @returns DeleteUserKeyResponse
     *
     * @param string               $keyId
     * @param DeleteUserKeyRequest $request
     *
     * @return DeleteUserKeyResponse
     */
    public function deleteUserKey($keyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteUserKeyWithOptions($keyId, $request, $headers, $runtime);
    }

    /**
     * 删除变量组.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVariableGroupResponse
     *
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteVariableGroupResponse
     */
    public function deleteVariableGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteVariableGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/variableGroups/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteVariableGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除变量组.
     *
     * @returns DeleteVariableGroupResponse
     *
     * @param string $organizationId
     * @param string $id
     *
     * @return DeleteVariableGroupResponse
     */
    public function deleteVariableGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteVariableGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * 删除工作项.
     *
     * @param request - DeleteWorkitemRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkitemResponse
     *
     * @param string                $organizationId
     * @param DeleteWorkitemRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteWorkitemResponse
     */
    public function deleteWorkitemWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identifier) {
            @$query['identifier'] = $request->identifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWorkitem',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitem/delete',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteWorkitemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除工作项.
     *
     * @param request - DeleteWorkitemRequest
     *
     * @returns DeleteWorkitemResponse
     *
     * @param string                $organizationId
     * @param DeleteWorkitemRequest $request
     *
     * @return DeleteWorkitemResponse
     */
    public function deleteWorkitem($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkitemWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 删除所有评论.
     *
     * @param request - DeleteWorkitemAllCommentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkitemAllCommentResponse
     *
     * @param string                          $organizationId
     * @param DeleteWorkitemAllCommentRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteWorkitemAllCommentResponse
     */
    public function deleteWorkitemAllCommentWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identifier) {
            @$query['identifier'] = $request->identifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWorkitemAllComment',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/deleteAllComment',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteWorkitemAllCommentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除所有评论.
     *
     * @param request - DeleteWorkitemAllCommentRequest
     *
     * @returns DeleteWorkitemAllCommentResponse
     *
     * @param string                          $organizationId
     * @param DeleteWorkitemAllCommentRequest $request
     *
     * @return DeleteWorkitemAllCommentResponse
     */
    public function deleteWorkitemAllComment($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkitemAllCommentWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 删除单条评论.
     *
     * @param request - DeleteWorkitemCommentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkitemCommentResponse
     *
     * @param string                       $organizationId
     * @param DeleteWorkitemCommentRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteWorkitemCommentResponse
     */
    public function deleteWorkitemCommentWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->commentId) {
            @$body['commentId'] = $request->commentId;
        }

        if (null !== $request->identifier) {
            @$body['identifier'] = $request->identifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteWorkitemComment',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/deleteComent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteWorkitemCommentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除单条评论.
     *
     * @param request - DeleteWorkitemCommentRequest
     *
     * @returns DeleteWorkitemCommentResponse
     *
     * @param string                       $organizationId
     * @param DeleteWorkitemCommentRequest $request
     *
     * @return DeleteWorkitemCommentResponse
     */
    public function deleteWorkitemComment($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWorkitemCommentWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 启用部署密钥.
     *
     * @param request - EnableDeployKeyRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableDeployKeyResponse
     *
     * @param string                 $repositoryId
     * @param string                 $keyId
     * @param EnableDeployKeyRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return EnableDeployKeyResponse
     */
    public function enableDeployKeyWithOptions($repositoryId, $keyId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableDeployKey',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/keys/' . Url::percentEncode($keyId) . '/enable',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EnableDeployKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启用部署密钥.
     *
     * @param request - EnableDeployKeyRequest
     *
     * @returns EnableDeployKeyResponse
     *
     * @param string                 $repositoryId
     * @param string                 $keyId
     * @param EnableDeployKeyRequest $request
     *
     * @return EnableDeployKeyResponse
     */
    public function enableDeployKey($repositoryId, $keyId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableDeployKeyWithOptions($repositoryId, $keyId, $request, $headers, $runtime);
    }

    /**
     * 执行研发阶段流水线
     *
     * @param request - ExecuteChangeRequestReleaseStageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteChangeRequestReleaseStageResponse
     *
     * @param string                                  $appName
     * @param string                                  $releaseWorkflowSn
     * @param string                                  $releaseStageSn
     * @param ExecuteChangeRequestReleaseStageRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ExecuteChangeRequestReleaseStageResponse
     */
    public function executeChangeRequestReleaseStageWithOptions($appName, $releaseWorkflowSn, $releaseStageSn, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->params) {
            @$body['params'] = $request->params;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteChangeRequestReleaseStage',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/appstack/apps/' . Url::percentEncode($appName) . '/releaseWorkflows/' . Url::percentEncode($releaseWorkflowSn) . '/releaseStages/' . Url::percentEncode($releaseStageSn) . '%3Aexecute',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteChangeRequestReleaseStageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 执行研发阶段流水线
     *
     * @param request - ExecuteChangeRequestReleaseStageRequest
     *
     * @returns ExecuteChangeRequestReleaseStageResponse
     *
     * @param string                                  $appName
     * @param string                                  $releaseWorkflowSn
     * @param string                                  $releaseStageSn
     * @param ExecuteChangeRequestReleaseStageRequest $request
     *
     * @return ExecuteChangeRequestReleaseStageResponse
     */
    public function executeChangeRequestReleaseStage($appName, $releaseWorkflowSn, $releaseStageSn, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeChangeRequestReleaseStageWithOptions($appName, $releaseWorkflowSn, $releaseStageSn, $request, $headers, $runtime);
    }

    /**
     * 导出Insight custom_value表.
     *
     * @param request - ExportInsightCustomValueRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportInsightCustomValueResponse
     *
     * @param string                          $organizationId
     * @param ExportInsightCustomValueRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ExportInsightCustomValueResponse
     */
    public function exportInsightCustomValueWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportInsightCustomValue',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/data/customValues',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportInsightCustomValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出Insight custom_value表.
     *
     * @param request - ExportInsightCustomValueRequest
     *
     * @returns ExportInsightCustomValueResponse
     *
     * @param string                          $organizationId
     * @param ExportInsightCustomValueRequest $request
     *
     * @return ExportInsightCustomValueResponse
     */
    public function exportInsightCustomValue($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightCustomValueWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 导出Insight expected_work_time表数据.
     *
     * @param request - ExportInsightExpectedWorkTimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportInsightExpectedWorkTimeResponse
     *
     * @param string                               $organizationId
     * @param ExportInsightExpectedWorkTimeRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ExportInsightExpectedWorkTimeResponse
     */
    public function exportInsightExpectedWorkTimeWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportInsightExpectedWorkTime',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/data/expectedWorkTimes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportInsightExpectedWorkTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出Insight expected_work_time表数据.
     *
     * @param request - ExportInsightExpectedWorkTimeRequest
     *
     * @returns ExportInsightExpectedWorkTimeResponse
     *
     * @param string                               $organizationId
     * @param ExportInsightExpectedWorkTimeRequest $request
     *
     * @return ExportInsightExpectedWorkTimeResponse
     */
    public function exportInsightExpectedWorkTime($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightExpectedWorkTimeWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 导出Insight field表.
     *
     * @param request - ExportInsightFieldRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportInsightFieldResponse
     *
     * @param string                    $organizationId
     * @param ExportInsightFieldRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ExportInsightFieldResponse
     */
    public function exportInsightFieldWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportInsightField',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/data/fields',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportInsightFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出Insight field表.
     *
     * @param request - ExportInsightFieldRequest
     *
     * @returns ExportInsightFieldResponse
     *
     * @param string                    $organizationId
     * @param ExportInsightFieldRequest $request
     *
     * @return ExportInsightFieldResponse
     */
    public function exportInsightField($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightFieldWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 导出Insight space表数据.
     *
     * @param request - ExportInsightSpaceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportInsightSpaceResponse
     *
     * @param string                    $organizationId
     * @param ExportInsightSpaceRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ExportInsightSpaceResponse
     */
    public function exportInsightSpaceWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportInsightSpace',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/data/spaces',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportInsightSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出Insight space表数据.
     *
     * @param request - ExportInsightSpaceRequest
     *
     * @returns ExportInsightSpaceResponse
     *
     * @param string                    $organizationId
     * @param ExportInsightSpaceRequest $request
     *
     * @return ExportInsightSpaceResponse
     */
    public function exportInsightSpace($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightSpaceWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 导出Insight space_ref表数据.
     *
     * @param request - ExportInsightSpaceRefRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportInsightSpaceRefResponse
     *
     * @param string                       $organizationId
     * @param ExportInsightSpaceRefRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ExportInsightSpaceRefResponse
     */
    public function exportInsightSpaceRefWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportInsightSpaceRef',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/data/spaceRefs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportInsightSpaceRefResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出Insight space_ref表数据.
     *
     * @param request - ExportInsightSpaceRefRequest
     *
     * @returns ExportInsightSpaceRefResponse
     *
     * @param string                       $organizationId
     * @param ExportInsightSpaceRefRequest $request
     *
     * @return ExportInsightSpaceRefResponse
     */
    public function exportInsightSpaceRef($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightSpaceRefWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 导出Insight sprint表数据.
     *
     * @param request - ExportInsightSprintRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportInsightSprintResponse
     *
     * @param string                     $organizationId
     * @param ExportInsightSprintRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ExportInsightSprintResponse
     */
    public function exportInsightSprintWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportInsightSprint',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/data/sprints',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportInsightSprintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出Insight sprint表数据.
     *
     * @param request - ExportInsightSprintRequest
     *
     * @returns ExportInsightSprintResponse
     *
     * @param string                     $organizationId
     * @param ExportInsightSprintRequest $request
     *
     * @return ExportInsightSprintResponse
     */
    public function exportInsightSprint($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightSprintWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 导出Insight tag_ref表数据.
     *
     * @param request - ExportInsightTagRefRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportInsightTagRefResponse
     *
     * @param string                     $organizationId
     * @param ExportInsightTagRefRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ExportInsightTagRefResponse
     */
    public function exportInsightTagRefWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportInsightTagRef',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/data/tagRefs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportInsightTagRefResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出Insight tag_ref表数据.
     *
     * @param request - ExportInsightTagRefRequest
     *
     * @returns ExportInsightTagRefResponse
     *
     * @param string                     $organizationId
     * @param ExportInsightTagRefRequest $request
     *
     * @return ExportInsightTagRefResponse
     */
    public function exportInsightTagRef($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightTagRefWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 导出Insight work_time表数据.
     *
     * @param request - ExportInsightWorkTimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportInsightWorkTimeResponse
     *
     * @param string                       $organizationId
     * @param ExportInsightWorkTimeRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ExportInsightWorkTimeResponse
     */
    public function exportInsightWorkTimeWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportInsightWorkTime',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/data/workTimes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportInsightWorkTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出Insight work_time表数据.
     *
     * @param request - ExportInsightWorkTimeRequest
     *
     * @returns ExportInsightWorkTimeResponse
     *
     * @param string                       $organizationId
     * @param ExportInsightWorkTimeRequest $request
     *
     * @return ExportInsightWorkTimeResponse
     */
    public function exportInsightWorkTime($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightWorkTimeWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 导出Insight workitem_stauts表数据.
     *
     * @param request - ExportInsightWorkitemStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportInsightWorkitemStatusResponse
     *
     * @param string                             $organizationId
     * @param ExportInsightWorkitemStatusRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ExportInsightWorkitemStatusResponse
     */
    public function exportInsightWorkitemStatusWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportInsightWorkitemStatus',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/data/workitemStatuses',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportInsightWorkitemStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出Insight workitem_stauts表数据.
     *
     * @param request - ExportInsightWorkitemStatusRequest
     *
     * @returns ExportInsightWorkitemStatusResponse
     *
     * @param string                             $organizationId
     * @param ExportInsightWorkitemStatusRequest $request
     *
     * @return ExportInsightWorkitemStatusResponse
     */
    public function exportInsightWorkitemStatus($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightWorkitemStatusWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 导出Insight workitem_stauts表 join workitem_defect_extra表表数据.
     *
     * @param request - ExportInsightWorkitemStatusJoinWorkitemDefectExtraRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportInsightWorkitemStatusJoinWorkitemDefectExtraResponse
     *
     * @param string                                                    $organizationId
     * @param ExportInsightWorkitemStatusJoinWorkitemDefectExtraRequest $request
     * @param string[]                                                  $headers
     * @param RuntimeOptions                                            $runtime
     *
     * @return ExportInsightWorkitemStatusJoinWorkitemDefectExtraResponse
     */
    public function exportInsightWorkitemStatusJoinWorkitemDefectExtraWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportInsightWorkitemStatusJoinWorkitemDefectExtra',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/data/workitemStatusJoinWorkitemDefectExtras',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportInsightWorkitemStatusJoinWorkitemDefectExtraResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出Insight workitem_stauts表 join workitem_defect_extra表表数据.
     *
     * @param request - ExportInsightWorkitemStatusJoinWorkitemDefectExtraRequest
     *
     * @returns ExportInsightWorkitemStatusJoinWorkitemDefectExtraResponse
     *
     * @param string                                                    $organizationId
     * @param ExportInsightWorkitemStatusJoinWorkitemDefectExtraRequest $request
     *
     * @return ExportInsightWorkitemStatusJoinWorkitemDefectExtraResponse
     */
    public function exportInsightWorkitemStatusJoinWorkitemDefectExtra($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightWorkitemStatusJoinWorkitemDefectExtraWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 导出Insight workitem_version表数据.
     *
     * @param request - ExportInsightWorkitemVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportInsightWorkitemVersionResponse
     *
     * @param string                              $organizationId
     * @param ExportInsightWorkitemVersionRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ExportInsightWorkitemVersionResponse
     */
    public function exportInsightWorkitemVersionWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportInsightWorkitemVersion',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/data/workitemVersions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportInsightWorkitemVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出Insight workitem_version表数据.
     *
     * @param request - ExportInsightWorkitemVersionRequest
     *
     * @returns ExportInsightWorkitemVersionResponse
     *
     * @param string                              $organizationId
     * @param ExportInsightWorkitemVersionRequest $request
     *
     * @return ExportInsightWorkitemVersionResponse
     */
    public function exportInsightWorkitemVersion($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportInsightWorkitemVersionWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 导出Insight workitem_activity表数据.
     *
     * @param request - ExportWorkitemActivityRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportWorkitemActivityResponse
     *
     * @param string                        $organizationId
     * @param ExportWorkitemActivityRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ExportWorkitemActivityResponse
     */
    public function exportWorkitemActivityWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportWorkitemActivity',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/data/workitemActivities',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExportWorkitemActivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出Insight workitem_activity表数据.
     *
     * @param request - ExportWorkitemActivityRequest
     *
     * @returns ExportWorkitemActivityResponse
     *
     * @param string                        $organizationId
     * @param ExportWorkitemActivityRequest $request
     *
     * @return ExportWorkitemActivityResponse
     */
    public function exportWorkitemActivity($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->exportWorkitemActivityWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 查找应用详情.
     *
     * @param request - GetApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApplicationResponse
     *
     * @param string                $appName
     * @param GetApplicationRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetApplicationResponse
     */
    public function getApplicationWithOptions($appName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApplication',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/appstack/apps/' . Url::percentEncode($appName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查找应用详情.
     *
     * @param request - GetApplicationRequest
     *
     * @returns GetApplicationResponse
     *
     * @param string                $appName
     * @param GetApplicationRequest $request
     *
     * @return GetApplicationResponse
     */
    public function getApplication($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getApplicationWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * 查询单个分支.
     *
     * @param request - GetBranchInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBranchInfoResponse
     *
     * @param string               $repositoryId
     * @param GetBranchInfoRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetBranchInfoResponse
     */
    public function getBranchInfoWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->branchName) {
            @$query['branchName'] = $request->branchName;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBranchInfo',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/branches/detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetBranchInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询单个分支.
     *
     * @param request - GetBranchInfoRequest
     *
     * @returns GetBranchInfoResponse
     *
     * @param string               $repositoryId
     * @param GetBranchInfoRequest $request
     *
     * @return GetBranchInfoResponse
     */
    public function getBranchInfo($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBranchInfoWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 查询检查运行.
     *
     * @param request - GetCheckRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCheckRunResponse
     *
     * @param GetCheckRunRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetCheckRunResponse
     */
    public function getCheckRunWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->checkRunId) {
            @$query['checkRunId'] = $request->checkRunId;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->repositoryIdentity) {
            @$query['repositoryIdentity'] = $request->repositoryIdentity;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCheckRun',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/check_runs/get_check_run',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCheckRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询检查运行.
     *
     * @param request - GetCheckRunRequest
     *
     * @returns GetCheckRunResponse
     *
     * @param GetCheckRunRequest $request
     *
     * @return GetCheckRunResponse
     */
    public function getCheckRun($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCheckRunWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取企业信息.
     *
     * @param request - GetCodeupOrganizationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCodeupOrganizationResponse
     *
     * @param string                       $identity
     * @param GetCodeupOrganizationRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetCodeupOrganizationResponse
     */
    public function getCodeupOrganizationWithOptions($identity, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCodeupOrganization',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/organization/' . Url::percentEncode($identity) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCodeupOrganizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取企业信息.
     *
     * @param request - GetCodeupOrganizationRequest
     *
     * @returns GetCodeupOrganizationResponse
     *
     * @param string                       $identity
     * @param GetCodeupOrganizationRequest $request
     *
     * @return GetCodeupOrganizationResponse
     */
    public function getCodeupOrganization($identity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCodeupOrganizationWithOptions($identity, $request, $headers, $runtime);
    }

    /**
     * 获取比较详情.
     *
     * @param request - GetCompareDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCompareDetailResponse
     *
     * @param string                  $repositoryId
     * @param GetCompareDetailRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetCompareDetailResponse
     */
    public function getCompareDetailWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->from) {
            @$query['from'] = $request->from;
        }

        if (null !== $request->maxDiffByte) {
            @$query['maxDiffByte'] = $request->maxDiffByte;
        }

        if (null !== $request->maxDiffFile) {
            @$query['maxDiffFile'] = $request->maxDiffFile;
        }

        if (null !== $request->mergeBase) {
            @$query['mergeBase'] = $request->mergeBase;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->to) {
            @$query['to'] = $request->to;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCompareDetail',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/commits/compare/detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCompareDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取比较详情.
     *
     * @param request - GetCompareDetailRequest
     *
     * @returns GetCompareDetailResponse
     *
     * @param string                  $repositoryId
     * @param GetCompareDetailRequest $request
     *
     * @return GetCompareDetailResponse
     */
    public function getCompareDetail($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCompareDetailWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 获取自定义字段的选项值
     *
     * @param request - GetCustomFieldOptionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomFieldOptionResponse
     *
     * @param string                      $organizationId
     * @param string                      $fieldId
     * @param GetCustomFieldOptionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetCustomFieldOptionResponse
     */
    public function getCustomFieldOptionWithOptions($organizationId, $fieldId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->spaceIdentifier) {
            @$query['spaceIdentifier'] = $request->spaceIdentifier;
        }

        if (null !== $request->spaceType) {
            @$query['spaceType'] = $request->spaceType;
        }

        if (null !== $request->workitemTypeIdentifier) {
            @$query['workitemTypeIdentifier'] = $request->workitemTypeIdentifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCustomFieldOption',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/fields/' . Url::percentEncode($fieldId) . '/getCustomOption',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCustomFieldOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取自定义字段的选项值
     *
     * @param request - GetCustomFieldOptionRequest
     *
     * @returns GetCustomFieldOptionResponse
     *
     * @param string                      $organizationId
     * @param string                      $fieldId
     * @param GetCustomFieldOptionRequest $request
     *
     * @return GetCustomFieldOptionResponse
     */
    public function getCustomFieldOption($organizationId, $fieldId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCustomFieldOptionWithOptions($organizationId, $fieldId, $request, $headers, $runtime);
    }

    /**
     * 查询文件.
     *
     * @param request - GetFileBlobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFileBlobsResponse
     *
     * @param string              $repositoryId
     * @param GetFileBlobsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetFileBlobsResponse
     */
    public function getFileBlobsWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->filePath) {
            @$query['filePath'] = $request->filePath;
        }

        if (null !== $request->from) {
            @$query['from'] = $request->from;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->ref) {
            @$query['ref'] = $request->ref;
        }

        if (null !== $request->to) {
            @$query['to'] = $request->to;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFileBlobs',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/files/blobs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFileBlobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询文件.
     *
     * @param request - GetFileBlobsRequest
     *
     * @returns GetFileBlobsResponse
     *
     * @param string              $repositoryId
     * @param GetFileBlobsRequest $request
     *
     * @return GetFileBlobsResponse
     */
    public function getFileBlobs($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFileBlobsWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 获取文件上一次提交信息.
     *
     * @param request - GetFileLastCommitRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFileLastCommitResponse
     *
     * @param string                   $repositoryId
     * @param GetFileLastCommitRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetFileLastCommitResponse
     */
    public function getFileLastCommitWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->filePath) {
            @$query['filePath'] = $request->filePath;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->sha) {
            @$query['sha'] = $request->sha;
        }

        if (null !== $request->showSignature) {
            @$query['showSignature'] = $request->showSignature;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetFileLastCommit',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/files/lastCommit',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFileLastCommitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取文件上一次提交信息.
     *
     * @param request - GetFileLastCommitRequest
     *
     * @returns GetFileLastCommitResponse
     *
     * @param string                   $repositoryId
     * @param GetFileLastCommitRequest $request
     *
     * @return GetFileLastCommitResponse
     */
    public function getFileLastCommit($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFileLastCommitWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 获取标签分类.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFlowTagGroupResponse
     *
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFlowTagGroupResponse
     */
    public function getFlowTagGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetFlowTagGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/flow/tagGroups/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetFlowTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取标签分类.
     *
     * @returns GetFlowTagGroupResponse
     *
     * @param string $organizationId
     * @param string $id
     *
     * @return GetFlowTagGroupResponse
     */
    public function getFlowTagGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFlowTagGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * 根据路径查询代码组.
     *
     * @param request - GetGroupByPathRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGroupByPathResponse
     *
     * @param GetGroupByPathRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetGroupByPathResponse
     */
    public function getGroupByPathWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->identity) {
            @$query['identity'] = $request->identity;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGroupByPath',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/4/groups/find_by_path',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGroupByPathResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据路径查询代码组.
     *
     * @param request - GetGroupByPathRequest
     *
     * @returns GetGroupByPathResponse
     *
     * @param GetGroupByPathRequest $request
     *
     * @return GetGroupByPathResponse
     */
    public function getGroupByPath($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGroupByPathWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询代码组信息.
     *
     * @param request - GetGroupDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGroupDetailResponse
     *
     * @param GetGroupDetailRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetGroupDetailResponse
     */
    public function getGroupDetailWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->groupId) {
            @$query['groupId'] = $request->groupId;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetGroupDetail',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/groups/get_detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetGroupDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询代码组信息.
     *
     * @param request - GetGroupDetailRequest
     *
     * @returns GetGroupDetailResponse
     *
     * @param GetGroupDetailRequest $request
     *
     * @return GetGroupDetailResponse
     */
    public function getGroupDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getGroupDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取主机组信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHostGroupResponse
     *
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetHostGroupResponse
     */
    public function getHostGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetHostGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/hostGroups/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取主机组信息.
     *
     * @returns GetHostGroupResponse
     *
     * @param string $organizationId
     * @param string $id
     *
     * @return GetHostGroupResponse
     */
    public function getHostGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHostGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * 查询合并请求详情.
     *
     * @param request - GetMergeRequestRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMergeRequestResponse
     *
     * @param string                 $repositoryId
     * @param string                 $localId
     * @param GetMergeRequestRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetMergeRequestResponse
     */
    public function getMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMergeRequest',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/' . Url::percentEncode($repositoryId) . '/merge_requests/' . Url::percentEncode($localId) . '/detail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMergeRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询合并请求详情.
     *
     * @param request - GetMergeRequestRequest
     *
     * @returns GetMergeRequestResponse
     *
     * @param string                 $repositoryId
     * @param string                 $localId
     * @param GetMergeRequestRequest $request
     *
     * @return GetMergeRequestResponse
     */
    public function getMergeRequest($repositoryId, $localId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime);
    }

    /**
     * 查询合并请求的变更信息.
     *
     * @param request - GetMergeRequestChangeTreeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMergeRequestChangeTreeResponse
     *
     * @param GetMergeRequestChangeTreeRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetMergeRequestChangeTreeResponse
     */
    public function getMergeRequestChangeTreeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->fromPatchSetBizId) {
            @$query['fromPatchSetBizId'] = $request->fromPatchSetBizId;
        }

        if (null !== $request->localId) {
            @$query['localId'] = $request->localId;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->repositoryIdentity) {
            @$query['repositoryIdentity'] = $request->repositoryIdentity;
        }

        if (null !== $request->toPatchSetBizId) {
            @$query['toPatchSetBizId'] = $request->toPatchSetBizId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMergeRequestChangeTree',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/merge_requests/diffs/change_tree',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMergeRequestChangeTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询合并请求的变更信息.
     *
     * @param request - GetMergeRequestChangeTreeRequest
     *
     * @returns GetMergeRequestChangeTreeResponse
     *
     * @param GetMergeRequestChangeTreeRequest $request
     *
     * @return GetMergeRequestChangeTreeResponse
     */
    public function getMergeRequestChangeTree($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMergeRequestChangeTreeWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取企业成员.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOrganizationMemberResponse
     *
     * @param string         $organizationId
     * @param string         $accountId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetOrganizationMemberResponse
     */
    public function getOrganizationMemberWithOptions($organizationId, $accountId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetOrganizationMember',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/members/' . Url::percentEncode($accountId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetOrganizationMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取企业成员.
     *
     * @returns GetOrganizationMemberResponse
     *
     * @param string $organizationId
     * @param string $accountId
     *
     * @return GetOrganizationMemberResponse
     */
    public function getOrganizationMember($organizationId, $accountId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getOrganizationMemberWithOptions($organizationId, $accountId, $headers, $runtime);
    }

    /**
     * 获取流水线
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPipelineResponse
     *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPipelineResponse
     */
    public function getPipelineWithOptions($organizationId, $pipelineId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPipeline',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines/' . Url::percentEncode($pipelineId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取流水线
     *
     * @returns GetPipelineResponse
     *
     * @param string $organizationId
     * @param string $pipelineId
     *
     * @return GetPipelineResponse
     */
    public function getPipeline($organizationId, $pipelineId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineWithOptions($organizationId, $pipelineId, $headers, $runtime);
    }

    /**
     * 获取构建物下载链接.
     *
     * @param request - GetPipelineArtifactUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPipelineArtifactUrlResponse
     *
     * @param string                        $organizationId
     * @param GetPipelineArtifactUrlRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetPipelineArtifactUrlResponse
     */
    public function getPipelineArtifactUrlWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        if (null !== $request->filePath) {
            @$query['filePath'] = $request->filePath;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPipelineArtifactUrl',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipeline/getArtifactDownloadUrl',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPipelineArtifactUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取构建物下载链接.
     *
     * @param request - GetPipelineArtifactUrlRequest
     *
     * @returns GetPipelineArtifactUrlResponse
     *
     * @param string                        $organizationId
     * @param GetPipelineArtifactUrlRequest $request
     *
     * @return GetPipelineArtifactUrlResponse
     */
    public function getPipelineArtifactUrl($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineArtifactUrlWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 获取emase构建物下载链接.
     *
     * @param request - GetPipelineEmasArtifactUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPipelineEmasArtifactUrlResponse
     *
     * @param string                            $organizationId
     * @param string                            $emasJobInstanceId
     * @param string                            $md5
     * @param string                            $pipelineId
     * @param string                            $pipelineRunId
     * @param GetPipelineEmasArtifactUrlRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetPipelineEmasArtifactUrlResponse
     */
    public function getPipelineEmasArtifactUrlWithOptions($organizationId, $emasJobInstanceId, $md5, $pipelineId, $pipelineRunId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceConnectionId) {
            @$query['serviceConnectionId'] = $request->serviceConnectionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPipelineEmasArtifactUrl',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipeline/' . Url::percentEncode($pipelineId) . '/pipelineRun/' . Url::percentEncode($pipelineRunId) . '/emas/artifact/' . Url::percentEncode($emasJobInstanceId) . '/' . Url::percentEncode($md5) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPipelineEmasArtifactUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取emase构建物下载链接.
     *
     * @param request - GetPipelineEmasArtifactUrlRequest
     *
     * @returns GetPipelineEmasArtifactUrlResponse
     *
     * @param string                            $organizationId
     * @param string                            $emasJobInstanceId
     * @param string                            $md5
     * @param string                            $pipelineId
     * @param string                            $pipelineRunId
     * @param GetPipelineEmasArtifactUrlRequest $request
     *
     * @return GetPipelineEmasArtifactUrlResponse
     */
    public function getPipelineEmasArtifactUrl($organizationId, $emasJobInstanceId, $md5, $pipelineId, $pipelineRunId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineEmasArtifactUrlWithOptions($organizationId, $emasJobInstanceId, $md5, $pipelineId, $pipelineRunId, $request, $headers, $runtime);
    }

    /**
     * 获取流水线分组.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPipelineGroupResponse
     *
     * @param string         $organizationId
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPipelineGroupResponse
     */
    public function getPipelineGroupWithOptions($organizationId, $groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPipelineGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelineGroups/' . Url::percentEncode($groupId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPipelineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取流水线分组.
     *
     * @returns GetPipelineGroupResponse
     *
     * @param string $organizationId
     * @param string $groupId
     *
     * @return GetPipelineGroupResponse
     */
    public function getPipelineGroup($organizationId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineGroupWithOptions($organizationId, $groupId, $headers, $runtime);
    }

    /**
     * 获取流水线运行信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPipelineRunResponse
     *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPipelineRunResponse
     */
    public function getPipelineRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPipelineRun',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines/' . Url::percentEncode($pipelineId) . '/pipelineRuns/' . Url::percentEncode($pipelineRunId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取流水线运行信息.
     *
     * @returns GetPipelineRunResponse
     *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     *
     * @return GetPipelineRunResponse
     */
    public function getPipelineRun($organizationId, $pipelineId, $pipelineRunId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $headers, $runtime);
    }

    /**
     * 获取扫描报告下载链接.
     *
     * @param request - GetPipelineScanReportUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPipelineScanReportUrlResponse
     *
     * @param string                          $organizationId
     * @param GetPipelineScanReportUrlRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetPipelineScanReportUrlResponse
     */
    public function getPipelineScanReportUrlWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->reportPath) {
            @$body['reportPath'] = $request->reportPath;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetPipelineScanReportUrl',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipeline/getPipelineScanReportUrl',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPipelineScanReportUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取扫描报告下载链接.
     *
     * @param request - GetPipelineScanReportUrlRequest
     *
     * @returns GetPipelineScanReportUrlResponse
     *
     * @param string                          $organizationId
     * @param GetPipelineScanReportUrlRequest $request
     *
     * @return GetPipelineScanReportUrlResponse
     */
    public function getPipelineScanReportUrl($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPipelineScanReportUrlWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 根据id获取项目详情-Projex.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProjectInfoResponse
     *
     * @param string         $organizationId
     * @param string         $projectId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProjectInfoResponse
     */
    public function getProjectInfoWithOptions($organizationId, $projectId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetProjectInfo',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/project/' . Url::percentEncode($projectId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetProjectInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据id获取项目详情-Projex.
     *
     * @returns GetProjectInfoResponse
     *
     * @param string $organizationId
     * @param string $projectId
     *
     * @return GetProjectInfoResponse
     */
    public function getProjectInfo($organizationId, $projectId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectInfoWithOptions($organizationId, $projectId, $headers, $runtime);
    }

    /**
     * 查询代码库成员.
     *
     * @param request - GetProjectMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProjectMemberResponse
     *
     * @param string                  $repositoryId
     * @param string                  $aliyunPk
     * @param GetProjectMemberRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetProjectMemberResponse
     */
    public function getProjectMemberWithOptions($repositoryId, $aliyunPk, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProjectMember',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/members/get/' . Url::percentEncode($aliyunPk) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetProjectMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询代码库成员.
     *
     * @param request - GetProjectMemberRequest
     *
     * @returns GetProjectMemberResponse
     *
     * @param string                  $repositoryId
     * @param string                  $aliyunPk
     * @param GetProjectMemberRequest $request
     *
     * @return GetProjectMemberResponse
     */
    public function getProjectMember($repositoryId, $aliyunPk, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProjectMemberWithOptions($repositoryId, $aliyunPk, $request, $headers, $runtime);
    }

    /**
     * 获取研发阶段流水线运行实例.
     *
     * @param request - GetReleaseStagePipelineRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetReleaseStagePipelineRunResponse
     *
     * @param string                            $appName
     * @param string                            $releaseWorkflowSn
     * @param string                            $releaseStageSn
     * @param string                            $executionNumber
     * @param GetReleaseStagePipelineRunRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetReleaseStagePipelineRunResponse
     */
    public function getReleaseStagePipelineRunWithOptions($appName, $releaseWorkflowSn, $releaseStageSn, $executionNumber, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetReleaseStagePipelineRun',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/appstack/apps/' . Url::percentEncode($appName) . '/releaseWorkflows/' . Url::percentEncode($releaseWorkflowSn) . '/releaseStages/' . Url::percentEncode($releaseStageSn) . '/executions/' . Url::percentEncode($executionNumber) . '%3AgetPipelineRun',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetReleaseStagePipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取研发阶段流水线运行实例.
     *
     * @param request - GetReleaseStagePipelineRunRequest
     *
     * @returns GetReleaseStagePipelineRunResponse
     *
     * @param string                            $appName
     * @param string                            $releaseWorkflowSn
     * @param string                            $releaseStageSn
     * @param string                            $executionNumber
     * @param GetReleaseStagePipelineRunRequest $request
     *
     * @return GetReleaseStagePipelineRunResponse
     */
    public function getReleaseStagePipelineRun($appName, $releaseWorkflowSn, $releaseStageSn, $executionNumber, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getReleaseStagePipelineRunWithOptions($appName, $releaseWorkflowSn, $releaseStageSn, $executionNumber, $request, $headers, $runtime);
    }

    /**
     * 使用代码库ID或路径查询代码库信息.
     *
     * @param request - GetRepositoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRepositoryResponse
     *
     * @param GetRepositoryRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetRepositoryResponse
     */
    public function getRepositoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->identity) {
            @$query['identity'] = $request->identity;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRepository',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/get',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 使用代码库ID或路径查询代码库信息.
     *
     * @param request - GetRepositoryRequest
     *
     * @returns GetRepositoryResponse
     *
     * @param GetRepositoryRequest $request
     *
     * @return GetRepositoryResponse
     */
    public function getRepository($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepositoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询代码库提交信息.
     *
     * @param request - GetRepositoryCommitRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRepositoryCommitResponse
     *
     * @param string                     $repositoryId
     * @param string                     $sha
     * @param GetRepositoryCommitRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetRepositoryCommitResponse
     */
    public function getRepositoryCommitWithOptions($repositoryId, $sha, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->showSignature) {
            @$query['showSignature'] = $request->showSignature;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRepositoryCommit',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/commits/' . Url::percentEncode($sha) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRepositoryCommitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询代码库提交信息.
     *
     * @param request - GetRepositoryCommitRequest
     *
     * @returns GetRepositoryCommitResponse
     *
     * @param string                     $repositoryId
     * @param string                     $sha
     * @param GetRepositoryCommitRequest $request
     *
     * @return GetRepositoryCommitResponse
     */
    public function getRepositoryCommit($repositoryId, $sha, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepositoryCommitWithOptions($repositoryId, $sha, $request, $headers, $runtime);
    }

    /**
     * 查询单个标签.
     *
     * @param request - GetRepositoryTagRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRepositoryTagResponse
     *
     * @param string                  $repositoryId
     * @param GetRepositoryTagRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetRepositoryTagResponse
     */
    public function getRepositoryTagWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->tagName) {
            @$query['tagName'] = $request->tagName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRepositoryTag',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/tag/info',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRepositoryTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询单个标签.
     *
     * @param request - GetRepositoryTagRequest
     *
     * @returns GetRepositoryTagResponse
     *
     * @param string                  $repositoryId
     * @param GetRepositoryTagRequest $request
     *
     * @return GetRepositoryTagResponse
     */
    public function getRepositoryTag($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRepositoryTagWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 预览代码片段.
     *
     * @param request - GetSearchCodePreviewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSearchCodePreviewResponse
     *
     * @param GetSearchCodePreviewRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetSearchCodePreviewResponse
     */
    public function getSearchCodePreviewWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->docId) {
            @$query['docId'] = $request->docId;
        }

        if (null !== $request->isDsl) {
            @$query['isDsl'] = $request->isDsl;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSearchCodePreview',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/search/code_preview',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSearchCodePreviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预览代码片段.
     *
     * @param request - GetSearchCodePreviewRequest
     *
     * @returns GetSearchCodePreviewResponse
     *
     * @param GetSearchCodePreviewRequest $request
     *
     * @return GetSearchCodePreviewResponse
     */
    public function getSearchCodePreview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSearchCodePreviewWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取迭代详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSprintInfoResponse
     *
     * @param string         $organizationId
     * @param string         $sprintId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSprintInfoResponse
     */
    public function getSprintInfoWithOptions($organizationId, $sprintId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetSprintInfo',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/sprints/' . Url::percentEncode($sprintId) . '/getSprintinfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetSprintInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取迭代详情.
     *
     * @returns GetSprintInfoResponse
     *
     * @param string $organizationId
     * @param string $sprintId
     *
     * @return GetSprintInfoResponse
     */
    public function getSprintInfo($organizationId, $sprintId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSprintInfoWithOptions($organizationId, $sprintId, $headers, $runtime);
    }

    /**
     * 获取测试计划中的测试用例列表.
     *
     * @param request - GetTestResultListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTestResultListResponse
     *
     * @param string                   $organizationId
     * @param string                   $testPlanIdentifier
     * @param GetTestResultListRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetTestResultListResponse
     */
    public function getTestResultListWithOptions($organizationId, $testPlanIdentifier, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->conditions) {
            @$body['conditions'] = $request->conditions;
        }

        if (null !== $request->directoryIdentifier) {
            @$body['directoryIdentifier'] = $request->directoryIdentifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTestResultList',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/testhub/testplan/' . Url::percentEncode($testPlanIdentifier) . '/testresults',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTestResultListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取测试计划中的测试用例列表.
     *
     * @param request - GetTestResultListRequest
     *
     * @returns GetTestResultListResponse
     *
     * @param string                   $organizationId
     * @param string                   $testPlanIdentifier
     * @param GetTestResultListRequest $request
     *
     * @return GetTestResultListResponse
     */
    public function getTestResultList($organizationId, $testPlanIdentifier, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTestResultListWithOptions($organizationId, $testPlanIdentifier, $request, $headers, $runtime);
    }

    /**
     * 获取测试用例列表.
     *
     * @param request - GetTestcaseListRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTestcaseListResponse
     *
     * @param string                 $organizationId
     * @param GetTestcaseListRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetTestcaseListResponse
     */
    public function getTestcaseListWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->conditions) {
            @$body['conditions'] = $request->conditions;
        }

        if (null !== $request->directoryIdentifier) {
            @$body['directoryIdentifier'] = $request->directoryIdentifier;
        }

        if (null !== $request->maxResult) {
            @$body['maxResult'] = $request->maxResult;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        if (null !== $request->spaceIdentifier) {
            @$body['spaceIdentifier'] = $request->spaceIdentifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTestcaseList',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/testhub/testcases',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTestcaseListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取测试用例列表.
     *
     * @param request - GetTestcaseListRequest
     *
     * @returns GetTestcaseListResponse
     *
     * @param string                 $organizationId
     * @param GetTestcaseListRequest $request
     *
     * @return GetTestcaseListResponse
     */
    public function getTestcaseList($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTestcaseListWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 查询当前用户信息.
     *
     * @param request - GetUserInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserInfoResponse
     *
     * @param GetUserInfoRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetUserInfoResponse
     */
    public function getUserInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserInfo',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/users/current',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询当前用户信息.
     *
     * @param request - GetUserInfoRequest
     *
     * @returns GetUserInfoResponse
     *
     * @param GetUserInfoRequest $request
     *
     * @return GetUserInfoResponse
     */
    public function getUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取部署单信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVMDeployOrderResponse
     *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetVMDeployOrderResponse
     */
    public function getVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetVMDeployOrder',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines/' . Url::percentEncode($pipelineId) . '/deploy/' . Url::percentEncode($deployOrderId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetVMDeployOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取部署单信息.
     *
     * @returns GetVMDeployOrderResponse
     *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     *
     * @return GetVMDeployOrderResponse
     */
    public function getVMDeployOrder($organizationId, $pipelineId, $deployOrderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime);
    }

    /**
     * 获取变量组.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVariableGroupResponse
     *
     * @param string         $organizationId
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetVariableGroupResponse
     */
    public function getVariableGroupWithOptions($organizationId, $id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetVariableGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/variableGroups/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetVariableGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取变量组.
     *
     * @returns GetVariableGroupResponse
     *
     * @param string $organizationId
     * @param string $id
     *
     * @return GetVariableGroupResponse
     */
    public function getVariableGroup($organizationId, $id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getVariableGroupWithOptions($organizationId, $id, $headers, $runtime);
    }

    /**
     * 获取工作项动态
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkItemActivityResponse
     *
     * @param string         $organizationId
     * @param string         $workitemId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetWorkItemActivityResponse
     */
    public function getWorkItemActivityWithOptions($organizationId, $workitemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetWorkItemActivity',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/' . Url::percentEncode($workitemId) . '/getActivity',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkItemActivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作项动态
     *
     * @returns GetWorkItemActivityResponse
     *
     * @param string $organizationId
     * @param string $workitemId
     *
     * @return GetWorkItemActivityResponse
     */
    public function getWorkItemActivity($organizationId, $workitemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkItemActivityWithOptions($organizationId, $workitemId, $headers, $runtime);
    }

    /**
     * 根据id获取工作项详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkItemInfoResponse
     *
     * @param string         $organizationId
     * @param string         $workitemId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetWorkItemInfoResponse
     */
    public function getWorkItemInfoWithOptions($organizationId, $workitemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetWorkItemInfo',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/' . Url::percentEncode($workitemId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkItemInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据id获取工作项详情.
     *
     * @returns GetWorkItemInfoResponse
     *
     * @param string $organizationId
     * @param string $workitemId
     *
     * @return GetWorkItemInfoResponse
     */
    public function getWorkItemInfo($organizationId, $workitemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkItemInfoWithOptions($organizationId, $workitemId, $headers, $runtime);
    }

    /**
     * 获取工作项工作流信息.
     *
     * @param request - GetWorkItemWorkFlowInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkItemWorkFlowInfoResponse
     *
     * @param string                         $organizationId
     * @param string                         $workitemId
     * @param GetWorkItemWorkFlowInfoRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetWorkItemWorkFlowInfoResponse
     */
    public function getWorkItemWorkFlowInfoWithOptions($organizationId, $workitemId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configurationId) {
            @$query['configurationId'] = $request->configurationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWorkItemWorkFlowInfo',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/' . Url::percentEncode($workitemId) . '/getWorkflowInfo',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkItemWorkFlowInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作项工作流信息.
     *
     * @param request - GetWorkItemWorkFlowInfoRequest
     *
     * @returns GetWorkItemWorkFlowInfoResponse
     *
     * @param string                         $organizationId
     * @param string                         $workitemId
     * @param GetWorkItemWorkFlowInfoRequest $request
     *
     * @return GetWorkItemWorkFlowInfoResponse
     */
    public function getWorkItemWorkFlowInfo($organizationId, $workitemId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkItemWorkFlowInfoWithOptions($organizationId, $workitemId, $request, $headers, $runtime);
    }

    /**
     * 获取附件上传的元信息.
     *
     * @param request - GetWorkitemAttachmentCreatemetaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkitemAttachmentCreatemetaResponse
     *
     * @param string                                 $organizationId
     * @param string                                 $workitemIdentifier
     * @param GetWorkitemAttachmentCreatemetaRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return GetWorkitemAttachmentCreatemetaResponse
     */
    public function getWorkitemAttachmentCreatemetaWithOptions($organizationId, $workitemIdentifier, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['fileName'] = $request->fileName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWorkitemAttachmentCreatemeta',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitem/' . Url::percentEncode($workitemIdentifier) . '/attachment/createmeta',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkitemAttachmentCreatemetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取附件上传的元信息.
     *
     * @param request - GetWorkitemAttachmentCreatemetaRequest
     *
     * @returns GetWorkitemAttachmentCreatemetaResponse
     *
     * @param string                                 $organizationId
     * @param string                                 $workitemIdentifier
     * @param GetWorkitemAttachmentCreatemetaRequest $request
     *
     * @return GetWorkitemAttachmentCreatemetaResponse
     */
    public function getWorkitemAttachmentCreatemeta($organizationId, $workitemIdentifier, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkitemAttachmentCreatemetaWithOptions($organizationId, $workitemIdentifier, $request, $headers, $runtime);
    }

    /**
     * 获得所有评论.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkitemCommentListResponse
     *
     * @param string         $organizationId
     * @param string         $workitemId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetWorkitemCommentListResponse
     */
    public function getWorkitemCommentListWithOptions($organizationId, $workitemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetWorkitemCommentList',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/' . Url::percentEncode($workitemId) . '/commentList',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkitemCommentListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获得所有评论.
     *
     * @returns GetWorkitemCommentListResponse
     *
     * @param string $organizationId
     * @param string $workitemId
     *
     * @return GetWorkitemCommentListResponse
     */
    public function getWorkitemCommentList($organizationId, $workitemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkitemCommentListWithOptions($organizationId, $workitemId, $headers, $runtime);
    }

    /**
     * 获取工作项文件信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkitemFileResponse
     *
     * @param string         $organizationId
     * @param string         $workitemIdentifier
     * @param string         $fileIdentifier
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetWorkitemFileResponse
     */
    public function getWorkitemFileWithOptions($organizationId, $workitemIdentifier, $fileIdentifier, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetWorkitemFile',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitem/' . Url::percentEncode($workitemIdentifier) . '/files/' . Url::percentEncode($fileIdentifier) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkitemFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作项文件信息.
     *
     * @returns GetWorkitemFileResponse
     *
     * @param string $organizationId
     * @param string $workitemIdentifier
     * @param string $fileIdentifier
     *
     * @return GetWorkitemFileResponse
     */
    public function getWorkitemFile($organizationId, $workitemIdentifier, $fileIdentifier)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkitemFileWithOptions($organizationId, $workitemIdentifier, $fileIdentifier, $headers, $runtime);
    }

    /**
     * 获得一个工作项的指定关联项.
     *
     * @param request - GetWorkitemRelationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkitemRelationsResponse
     *
     * @param string                      $organizationId
     * @param string                      $workitemId
     * @param GetWorkitemRelationsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetWorkitemRelationsResponse
     */
    public function getWorkitemRelationsWithOptions($organizationId, $workitemId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->relationType) {
            @$query['relationType'] = $request->relationType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWorkitemRelations',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/' . Url::percentEncode($workitemId) . '/getRelations',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkitemRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获得一个工作项的指定关联项.
     *
     * @param request - GetWorkitemRelationsRequest
     *
     * @returns GetWorkitemRelationsResponse
     *
     * @param string                      $organizationId
     * @param string                      $workitemId
     * @param GetWorkitemRelationsRequest $request
     *
     * @return GetWorkitemRelationsResponse
     */
    public function getWorkitemRelations($organizationId, $workitemId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkitemRelationsWithOptions($organizationId, $workitemId, $request, $headers, $runtime);
    }

    /**
     * 获得一个企业下所有工时类型.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkitemTimeTypeListResponse
     *
     * @param string         $organizationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetWorkitemTimeTypeListResponse
     */
    public function getWorkitemTimeTypeListWithOptions($organizationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetWorkitemTimeTypeList',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/type/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWorkitemTimeTypeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获得一个企业下所有工时类型.
     *
     * @returns GetWorkitemTimeTypeListResponse
     *
     * @param string $organizationId
     *
     * @return GetWorkitemTimeTypeListResponse
     */
    public function getWorkitemTimeTypeList($organizationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWorkitemTimeTypeListWithOptions($organizationId, $headers, $runtime);
    }

    /**
     * 加入流水线分组.
     *
     * @param request - JoinPipelineGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns JoinPipelineGroupResponse
     *
     * @param string                   $organizationId
     * @param JoinPipelineGroupRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return JoinPipelineGroupResponse
     */
    public function joinPipelineGroupWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['groupId'] = $request->groupId;
        }

        if (null !== $request->pipelineIds) {
            @$query['pipelineIds'] = $request->pipelineIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'JoinPipelineGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelineGroups/join',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return JoinPipelineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 加入流水线分组.
     *
     * @param request - JoinPipelineGroupRequest
     *
     * @returns JoinPipelineGroupResponse
     *
     * @param string                   $organizationId
     * @param JoinPipelineGroupRequest $request
     *
     * @return JoinPipelineGroupResponse
     */
    public function joinPipelineGroup($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->joinPipelineGroupWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 关联合并请求Label.
     *
     * @param request - LinkMergeRequestLabelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LinkMergeRequestLabelResponse
     *
     * @param LinkMergeRequestLabelRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return LinkMergeRequestLabelResponse
     */
    public function linkMergeRequestLabelWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->localId) {
            @$query['localId'] = $request->localId;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->repositoryIdentity) {
            @$query['repositoryIdentity'] = $request->repositoryIdentity;
        }

        $body = [];
        if (null !== $request->labelIds) {
            @$body['labelIds'] = $request->labelIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LinkMergeRequestLabel',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/merge_requests/link_labels',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return LinkMergeRequestLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关联合并请求Label.
     *
     * @param request - LinkMergeRequestLabelRequest
     *
     * @returns LinkMergeRequestLabelResponse
     *
     * @param LinkMergeRequestLabelRequest $request
     *
     * @return LinkMergeRequestLabelResponse
     */
    public function linkMergeRequestLabel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->linkMergeRequestLabelWithOptions($request, $headers, $runtime);
    }

    /**
     * 查找应用下所有的研发流程.
     *
     * @param request - ListAllReleaseWorkflowsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllReleaseWorkflowsResponse
     *
     * @param string                         $appName
     * @param ListAllReleaseWorkflowsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListAllReleaseWorkflowsResponse
     */
    public function listAllReleaseWorkflowsWithOptions($appName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAllReleaseWorkflows',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/appstack/apps/' . Url::percentEncode($appName) . '/releaseWorkflows',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return ListAllReleaseWorkflowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查找应用下所有的研发流程.
     *
     * @param request - ListAllReleaseWorkflowsRequest
     *
     * @returns ListAllReleaseWorkflowsResponse
     *
     * @param string                         $appName
     * @param ListAllReleaseWorkflowsRequest $request
     *
     * @return ListAllReleaseWorkflowsResponse
     */
    public function listAllReleaseWorkflows($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAllReleaseWorkflowsWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * 查询研发阶段执行记录集成变更信息.
     *
     * @param request - ListAppReleaseStageExecutionIntegratedMetadataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppReleaseStageExecutionIntegratedMetadataResponse
     *
     * @param string                                                $appName
     * @param string                                                $releaseWorkflowSn
     * @param string                                                $releaseStageSn
     * @param string                                                $executionNumber
     * @param ListAppReleaseStageExecutionIntegratedMetadataRequest $request
     * @param string[]                                              $headers
     * @param RuntimeOptions                                        $runtime
     *
     * @return ListAppReleaseStageExecutionIntegratedMetadataResponse
     */
    public function listAppReleaseStageExecutionIntegratedMetadataWithOptions($appName, $releaseWorkflowSn, $releaseStageSn, $executionNumber, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppReleaseStageExecutionIntegratedMetadata',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/appstack/apps/' . Url::percentEncode($appName) . '/releaseWorkflows/' . Url::percentEncode($releaseWorkflowSn) . '/releaseStages/' . Url::percentEncode($releaseStageSn) . '/executions/' . Url::percentEncode($executionNumber) . '/integratedMetadata',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'array',
        ]);

        return ListAppReleaseStageExecutionIntegratedMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询研发阶段执行记录集成变更信息.
     *
     * @param request - ListAppReleaseStageExecutionIntegratedMetadataRequest
     *
     * @returns ListAppReleaseStageExecutionIntegratedMetadataResponse
     *
     * @param string                                                $appName
     * @param string                                                $releaseWorkflowSn
     * @param string                                                $releaseStageSn
     * @param string                                                $executionNumber
     * @param ListAppReleaseStageExecutionIntegratedMetadataRequest $request
     *
     * @return ListAppReleaseStageExecutionIntegratedMetadataResponse
     */
    public function listAppReleaseStageExecutionIntegratedMetadata($appName, $releaseWorkflowSn, $releaseStageSn, $executionNumber, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppReleaseStageExecutionIntegratedMetadataWithOptions($appName, $releaseWorkflowSn, $releaseStageSn, $executionNumber, $request, $headers, $runtime);
    }

    /**
     * 批量查询研发阶段执行记录.
     *
     * @param request - ListAppReleaseStageExecutionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppReleaseStageExecutionsResponse
     *
     * @param string                               $appName
     * @param string                               $releaseWorkflowSn
     * @param string                               $releaseStageSn
     * @param ListAppReleaseStageExecutionsRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListAppReleaseStageExecutionsResponse
     */
    public function listAppReleaseStageExecutionsWithOptions($appName, $releaseWorkflowSn, $releaseStageSn, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pagination) {
            @$query['pagination'] = $request->pagination;
        }

        if (null !== $request->perPage) {
            @$query['perPage'] = $request->perPage;
        }

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppReleaseStageExecutions',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/appstack/apps/' . Url::percentEncode($appName) . '/releaseWorkflows/' . Url::percentEncode($releaseWorkflowSn) . '/releaseStages/' . Url::percentEncode($releaseStageSn) . '/executions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAppReleaseStageExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量查询研发阶段执行记录.
     *
     * @param request - ListAppReleaseStageExecutionsRequest
     *
     * @returns ListAppReleaseStageExecutionsResponse
     *
     * @param string                               $appName
     * @param string                               $releaseWorkflowSn
     * @param string                               $releaseStageSn
     * @param ListAppReleaseStageExecutionsRequest $request
     *
     * @return ListAppReleaseStageExecutionsResponse
     */
    public function listAppReleaseStageExecutions($appName, $releaseWorkflowSn, $releaseStageSn, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppReleaseStageExecutionsWithOptions($appName, $releaseWorkflowSn, $releaseStageSn, $request, $headers, $runtime);
    }

    /**
     * 查找应用成员列表.
     *
     * @param request - ListApplicationMembersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationMembersResponse
     *
     * @param string                        $appName
     * @param ListApplicationMembersRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListApplicationMembersResponse
     */
    public function listApplicationMembersWithOptions($appName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplicationMembers',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/appstack/apps/' . Url::percentEncode($appName) . '/members',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListApplicationMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查找应用成员列表.
     *
     * @param request - ListApplicationMembersRequest
     *
     * @returns ListApplicationMembersResponse
     *
     * @param string                        $appName
     * @param ListApplicationMembersRequest $request
     *
     * @return ListApplicationMembersResponse
     */
    public function listApplicationMembers($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listApplicationMembersWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * 分页查找应用详情.
     *
     * @param request - ListApplicationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationsResponse
     *
     * @param ListApplicationsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListApplicationsResponse
     */
    public function listApplicationsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->pagination) {
            @$query['pagination'] = $request->pagination;
        }

        if (null !== $request->perPage) {
            @$query['perPage'] = $request->perPage;
        }

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApplications',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/appstack/apps%3Asearch',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查找应用详情.
     *
     * @param request - ListApplicationsRequest
     *
     * @returns ListApplicationsResponse
     *
     * @param ListApplicationsRequest $request
     *
     * @return ListApplicationsResponse
     */
    public function listApplications($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listApplicationsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询变更研发流程运行记录.
     *
     * @param request - ListChangeRequestWorkflowExecutionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChangeRequestWorkflowExecutionsResponse
     *
     * @param string                                     $appName
     * @param string                                     $sn
     * @param ListChangeRequestWorkflowExecutionsRequest $request
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return ListChangeRequestWorkflowExecutionsResponse
     */
    public function listChangeRequestWorkflowExecutionsWithOptions($appName, $sn, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->perPage) {
            @$query['perPage'] = $request->perPage;
        }

        if (null !== $request->releaseStageSn) {
            @$query['releaseStageSn'] = $request->releaseStageSn;
        }

        if (null !== $request->releaseWorkflowSn) {
            @$query['releaseWorkflowSn'] = $request->releaseWorkflowSn;
        }

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListChangeRequestWorkflowExecutions',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/appstack/apps/' . Url::percentEncode($appName) . '/changeRequests/' . Url::percentEncode($sn) . '/executions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListChangeRequestWorkflowExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询变更研发流程运行记录.
     *
     * @param request - ListChangeRequestWorkflowExecutionsRequest
     *
     * @returns ListChangeRequestWorkflowExecutionsResponse
     *
     * @param string                                     $appName
     * @param string                                     $sn
     * @param ListChangeRequestWorkflowExecutionsRequest $request
     *
     * @return ListChangeRequestWorkflowExecutionsResponse
     */
    public function listChangeRequestWorkflowExecutions($appName, $sn, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChangeRequestWorkflowExecutionsWithOptions($appName, $sn, $request, $headers, $runtime);
    }

    /**
     * 查询变更列表.
     *
     * @param tmpReq - ListChangeRequestsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChangeRequestsResponse
     *
     * @param string                    $appName
     * @param ListChangeRequestsRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListChangeRequestsResponse
     */
    public function listChangeRequestsWithOptions($appName, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListChangeRequestsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->appNameList) {
            $request->appNameListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->appNameList, 'appNameList', 'json');
        }

        if (null !== $tmpReq->ownerIdList) {
            $request->ownerIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ownerIdList, 'ownerIdList', 'json');
        }

        if (null !== $tmpReq->stateList) {
            $request->stateListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->stateList, 'stateList', 'json');
        }

        $query = [];
        if (null !== $request->appNameListShrink) {
            @$query['appNameList'] = $request->appNameListShrink;
        }

        if (null !== $request->displayNameKeyword) {
            @$query['displayNameKeyword'] = $request->displayNameKeyword;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->ownerIdListShrink) {
            @$query['ownerIdList'] = $request->ownerIdListShrink;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pagination) {
            @$query['pagination'] = $request->pagination;
        }

        if (null !== $request->perPage) {
            @$query['perPage'] = $request->perPage;
        }

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        if (null !== $request->stateListShrink) {
            @$query['stateList'] = $request->stateListShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListChangeRequests',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/appstack/apps/' . Url::percentEncode($appName) . '/changeRequests',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListChangeRequestsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询变更列表.
     *
     * @param request - ListChangeRequestsRequest
     *
     * @returns ListChangeRequestsResponse
     *
     * @param string                    $appName
     * @param ListChangeRequestsRequest $request
     *
     * @return ListChangeRequestsResponse
     */
    public function listChangeRequests($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChangeRequestsWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * 查询检查运行列表.
     *
     * @param request - ListCheckRunsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCheckRunsResponse
     *
     * @param ListCheckRunsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListCheckRunsResponse
     */
    public function listCheckRunsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->ref) {
            @$query['ref'] = $request->ref;
        }

        if (null !== $request->repositoryIdentity) {
            @$query['repositoryIdentity'] = $request->repositoryIdentity;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCheckRuns',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/check_runs/list_check_runs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListCheckRunsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询检查运行列表.
     *
     * @param request - ListCheckRunsRequest
     *
     * @returns ListCheckRunsResponse
     *
     * @param ListCheckRunsRequest $request
     *
     * @return ListCheckRunsResponse
     */
    public function listCheckRuns($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCheckRunsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询提交状态列表.
     *
     * @param request - ListCommitStatusesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCommitStatusesResponse
     *
     * @param ListCommitStatusesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListCommitStatusesResponse
     */
    public function listCommitStatusesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->repositoryIdentity) {
            @$query['repositoryIdentity'] = $request->repositoryIdentity;
        }

        if (null !== $request->sha) {
            @$query['sha'] = $request->sha;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCommitStatuses',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/repository/commit_statuses/list_commit_statuses',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListCommitStatusesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询提交状态列表.
     *
     * @param request - ListCommitStatusesRequest
     *
     * @returns ListCommitStatusesResponse
     *
     * @param ListCommitStatusesRequest $request
     *
     * @return ListCommitStatusesResponse
     */
    public function listCommitStatuses($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCommitStatusesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取标签分类列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFlowTagGroupsResponse
     *
     * @param string         $organizationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListFlowTagGroupsResponse
     */
    public function listFlowTagGroupsWithOptions($organizationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListFlowTagGroups',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/flow/tagGroups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFlowTagGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取标签分类列表.
     *
     * @returns ListFlowTagGroupsResponse
     *
     * @param string $organizationId
     *
     * @return ListFlowTagGroupsResponse
     */
    public function listFlowTagGroups($organizationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFlowTagGroupsWithOptions($organizationId, $headers, $runtime);
    }

    /**
     * 查询组成员列表.
     *
     * @param request - ListGroupMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGroupMemberResponse
     *
     * @param string                 $groupId
     * @param ListGroupMemberRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListGroupMemberResponse
     */
    public function listGroupMemberWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroupMember',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/groups/' . Url::percentEncode($groupId) . '/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询组成员列表.
     *
     * @param request - ListGroupMemberRequest
     *
     * @returns ListGroupMemberResponse
     *
     * @param string                 $groupId
     * @param ListGroupMemberRequest $request
     *
     * @return ListGroupMemberResponse
     */
    public function listGroupMember($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGroupMemberWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * 查询代码组下的库列表.
     *
     * @param request - ListGroupRepositoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGroupRepositoriesResponse
     *
     * @param string                       $groupId
     * @param ListGroupRepositoriesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListGroupRepositoriesResponse
     */
    public function listGroupRepositoriesWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->search) {
            @$query['search'] = $request->search;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroupRepositories',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/groups/' . Url::percentEncode($groupId) . '/projects',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGroupRepositoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询代码组下的库列表.
     *
     * @param request - ListGroupRepositoriesRequest
     *
     * @returns ListGroupRepositoriesResponse
     *
     * @param string                       $groupId
     * @param ListGroupRepositoriesRequest $request
     *
     * @return ListGroupRepositoriesResponse
     */
    public function listGroupRepositories($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGroupRepositoriesWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * 获取主机组列表.
     *
     * @param request - ListHostGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHostGroupsResponse
     *
     * @param string                $organizationId
     * @param ListHostGroupsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListHostGroupsResponse
     */
    public function listHostGroupsWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createEndTime) {
            @$query['createEndTime'] = $request->createEndTime;
        }

        if (null !== $request->createStartTime) {
            @$query['createStartTime'] = $request->createStartTime;
        }

        if (null !== $request->creatorAccountIds) {
            @$query['creatorAccountIds'] = $request->creatorAccountIds;
        }

        if (null !== $request->ids) {
            @$query['ids'] = $request->ids;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pageOrder) {
            @$query['pageOrder'] = $request->pageOrder;
        }

        if (null !== $request->pageSort) {
            @$query['pageSort'] = $request->pageSort;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHostGroups',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/hostGroups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListHostGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取主机组列表.
     *
     * @param request - ListHostGroupsRequest
     *
     * @returns ListHostGroupsResponse
     *
     * @param string                $organizationId
     * @param ListHostGroupsRequest $request
     *
     * @return ListHostGroupsResponse
     */
    public function listHostGroups($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listHostGroupsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 当前用户加入的企业列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJoinedOrganizationsResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListJoinedOrganizationsResponse
     */
    public function listJoinedOrganizationsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListJoinedOrganizations',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/users/joinedOrgs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListJoinedOrganizationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 当前用户加入的企业列表.
     *
     * @returns ListJoinedOrganizationsResponse
     *
     * @return ListJoinedOrganizationsResponse
     */
    public function listJoinedOrganizations()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJoinedOrganizationsWithOptions($headers, $runtime);
    }

    /**
     * 查询合并请求评论列表.
     *
     * @param request - ListMergeRequestCommentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMergeRequestCommentsResponse
     *
     * @param ListMergeRequestCommentsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListMergeRequestCommentsResponse
     */
    public function listMergeRequestCommentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->localId) {
            @$query['localId'] = $request->localId;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->repositoryIdentity) {
            @$query['repositoryIdentity'] = $request->repositoryIdentity;
        }

        $body = [];
        if (null !== $request->commentType) {
            @$body['commentType'] = $request->commentType;
        }

        if (null !== $request->filePath) {
            @$body['filePath'] = $request->filePath;
        }

        if (null !== $request->patchSetBizIds) {
            @$body['patchSetBizIds'] = $request->patchSetBizIds;
        }

        if (null !== $request->resolved) {
            @$body['resolved'] = $request->resolved;
        }

        if (null !== $request->state) {
            @$body['state'] = $request->state;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMergeRequestComments',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/merge_requests/comments/list_comments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMergeRequestCommentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询合并请求评论列表.
     *
     * @param request - ListMergeRequestCommentsRequest
     *
     * @returns ListMergeRequestCommentsResponse
     *
     * @param ListMergeRequestCommentsRequest $request
     *
     * @return ListMergeRequestCommentsResponse
     */
    public function listMergeRequestComments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMergeRequestCommentsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询合并请求文件已读列表.
     *
     * @param request - ListMergeRequestFilesReadsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMergeRequestFilesReadsResponse
     *
     * @param ListMergeRequestFilesReadsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListMergeRequestFilesReadsResponse
     */
    public function listMergeRequestFilesReadsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->fromPatchSetBizId) {
            @$query['fromPatchSetBizId'] = $request->fromPatchSetBizId;
        }

        if (null !== $request->localId) {
            @$query['localId'] = $request->localId;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->repositoryIdentity) {
            @$query['repositoryIdentity'] = $request->repositoryIdentity;
        }

        if (null !== $request->toPatchSetBizId) {
            @$query['toPatchSetBizId'] = $request->toPatchSetBizId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMergeRequestFilesReads',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/merge_requests/diffs/files_read_infos',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMergeRequestFilesReadsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询合并请求文件已读列表.
     *
     * @param request - ListMergeRequestFilesReadsRequest
     *
     * @returns ListMergeRequestFilesReadsResponse
     *
     * @param ListMergeRequestFilesReadsRequest $request
     *
     * @return ListMergeRequestFilesReadsResponse
     */
    public function listMergeRequestFilesReads($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMergeRequestFilesReadsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询合并请求Label列表.
     *
     * @param request - ListMergeRequestLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMergeRequestLabelsResponse
     *
     * @param ListMergeRequestLabelsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListMergeRequestLabelsResponse
     */
    public function listMergeRequestLabelsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->localId) {
            @$query['localId'] = $request->localId;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->repositoryIdentity) {
            @$query['repositoryIdentity'] = $request->repositoryIdentity;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMergeRequestLabels',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/merge_requests/labels',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMergeRequestLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询合并请求Label列表.
     *
     * @param request - ListMergeRequestLabelsRequest
     *
     * @returns ListMergeRequestLabelsResponse
     *
     * @param ListMergeRequestLabelsRequest $request
     *
     * @return ListMergeRequestLabelsResponse
     */
    public function listMergeRequestLabels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMergeRequestLabelsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询合并请求的版本列表.
     *
     * @param request - ListMergeRequestPatchSetsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMergeRequestPatchSetsResponse
     *
     * @param ListMergeRequestPatchSetsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListMergeRequestPatchSetsResponse
     */
    public function listMergeRequestPatchSetsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->localId) {
            @$query['localId'] = $request->localId;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->repositoryIdentity) {
            @$query['repositoryIdentity'] = $request->repositoryIdentity;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMergeRequestPatchSets',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/merge_requests/diffs/list_patchsets',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMergeRequestPatchSetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询合并请求的版本列表.
     *
     * @param request - ListMergeRequestPatchSetsRequest
     *
     * @returns ListMergeRequestPatchSetsResponse
     *
     * @param ListMergeRequestPatchSetsRequest $request
     *
     * @return ListMergeRequestPatchSetsResponse
     */
    public function listMergeRequestPatchSets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMergeRequestPatchSetsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询代码评审列表.
     *
     * @param request - ListMergeRequestsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMergeRequestsResponse
     *
     * @param ListMergeRequestsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListMergeRequestsResponse
     */
    public function listMergeRequestsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->authorIds) {
            @$query['authorIds'] = $request->authorIds;
        }

        if (null !== $request->createdAfter) {
            @$query['createdAfter'] = $request->createdAfter;
        }

        if (null !== $request->createdBefore) {
            @$query['createdBefore'] = $request->createdBefore;
        }

        if (null !== $request->filter) {
            @$query['filter'] = $request->filter;
        }

        if (null !== $request->groupIds) {
            @$query['groupIds'] = $request->groupIds;
        }

        if (null !== $request->labelIds) {
            @$query['labelIds'] = $request->labelIds;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->projectIds) {
            @$query['projectIds'] = $request->projectIds;
        }

        if (null !== $request->reviewerIds) {
            @$query['reviewerIds'] = $request->reviewerIds;
        }

        if (null !== $request->search) {
            @$query['search'] = $request->search;
        }

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        if (null !== $request->state) {
            @$query['state'] = $request->state;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMergeRequests',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/merge_requests/advanced_search',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMergeRequestsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询代码评审列表.
     *
     * @param request - ListMergeRequestsRequest
     *
     * @returns ListMergeRequestsResponse
     *
     * @param ListMergeRequestsRequest $request
     *
     * @return ListMergeRequestsResponse
     */
    public function listMergeRequests($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMergeRequestsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取企业成员列表.
     *
     * @param request - ListOrganizationMembersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOrganizationMembersResponse
     *
     * @param string                         $organizationId
     * @param ListOrganizationMembersRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListOrganizationMembersResponse
     */
    public function listOrganizationMembersWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->containsExternInfo) {
            @$query['containsExternInfo'] = $request->containsExternInfo;
        }

        if (null !== $request->externUid) {
            @$query['externUid'] = $request->externUid;
        }

        if (null !== $request->joinTimeFrom) {
            @$query['joinTimeFrom'] = $request->joinTimeFrom;
        }

        if (null !== $request->joinTimeTo) {
            @$query['joinTimeTo'] = $request->joinTimeTo;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->organizationMemberName) {
            @$query['organizationMemberName'] = $request->organizationMemberName;
        }

        if (null !== $request->provider) {
            @$query['provider'] = $request->provider;
        }

        if (null !== $request->state) {
            @$query['state'] = $request->state;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOrganizationMembers',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/members',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListOrganizationMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取企业成员列表.
     *
     * @param request - ListOrganizationMembersRequest
     *
     * @returns ListOrganizationMembersResponse
     *
     * @param string                         $organizationId
     * @param ListOrganizationMembersRequest $request
     *
     * @return ListOrganizationMembersResponse
     */
    public function listOrganizationMembers($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOrganizationMembersWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 查询用户企业列表.
     *
     * @param request - ListOrganizationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOrganizationsResponse
     *
     * @param ListOrganizationsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListOrganizationsResponse
     */
    public function listOrganizationsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessLevel) {
            @$query['accessLevel'] = $request->accessLevel;
        }

        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->minAccessLevel) {
            @$query['minAccessLevel'] = $request->minAccessLevel;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOrganizations',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organizations/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListOrganizationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户企业列表.
     *
     * @param request - ListOrganizationsRequest
     *
     * @returns ListOrganizationsResponse
     *
     * @param ListOrganizationsRequest $request
     *
     * @return ListOrganizationsResponse
     */
    public function listOrganizations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOrganizationsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取流水线分组下流水线列表列表.
     *
     * @param request - ListPipelineGroupPipelinesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPipelineGroupPipelinesResponse
     *
     * @param string                            $organizationId
     * @param string                            $groupId
     * @param ListPipelineGroupPipelinesRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListPipelineGroupPipelinesResponse
     */
    public function listPipelineGroupPipelinesWithOptions($organizationId, $groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createEndTime) {
            @$query['createEndTime'] = $request->createEndTime;
        }

        if (null !== $request->createStartTime) {
            @$query['createStartTime'] = $request->createStartTime;
        }

        if (null !== $request->executeEndTime) {
            @$query['executeEndTime'] = $request->executeEndTime;
        }

        if (null !== $request->executeStartTime) {
            @$query['executeStartTime'] = $request->executeStartTime;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pipelineName) {
            @$query['pipelineName'] = $request->pipelineName;
        }

        if (null !== $request->resultStatusList) {
            @$query['resultStatusList'] = $request->resultStatusList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPipelineGroupPipelines',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelineGroups/' . Url::percentEncode($groupId) . '/pipelines',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPipelineGroupPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取流水线分组下流水线列表列表.
     *
     * @param request - ListPipelineGroupPipelinesRequest
     *
     * @returns ListPipelineGroupPipelinesResponse
     *
     * @param string                            $organizationId
     * @param string                            $groupId
     * @param ListPipelineGroupPipelinesRequest $request
     *
     * @return ListPipelineGroupPipelinesResponse
     */
    public function listPipelineGroupPipelines($organizationId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineGroupPipelinesWithOptions($organizationId, $groupId, $request, $headers, $runtime);
    }

    /**
     * 获取流水线分组列表.
     *
     * @param request - ListPipelineGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPipelineGroupsResponse
     *
     * @param string                    $organizationId
     * @param ListPipelineGroupsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListPipelineGroupsResponse
     */
    public function listPipelineGroupsWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPipelineGroups',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelineGroups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPipelineGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取流水线分组列表.
     *
     * @param request - ListPipelineGroupsRequest
     *
     * @returns ListPipelineGroupsResponse
     *
     * @param string                    $organizationId
     * @param ListPipelineGroupsRequest $request
     *
     * @return ListPipelineGroupsResponse
     */
    public function listPipelineGroups($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineGroupsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 获取流水线运行过的任务历史.
     *
     * @param request - ListPipelineJobHistorysRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPipelineJobHistorysResponse
     *
     * @param string                         $organizationId
     * @param string                         $pipelineId
     * @param ListPipelineJobHistorysRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListPipelineJobHistorysResponse
     */
    public function listPipelineJobHistorysWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['category'] = $request->category;
        }

        if (null !== $request->identifier) {
            @$query['identifier'] = $request->identifier;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPipelineJobHistorys',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipeline/' . Url::percentEncode($pipelineId) . '/job/historys',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPipelineJobHistorysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取流水线运行过的任务历史.
     *
     * @param request - ListPipelineJobHistorysRequest
     *
     * @returns ListPipelineJobHistorysResponse
     *
     * @param string                         $organizationId
     * @param string                         $pipelineId
     * @param ListPipelineJobHistorysRequest $request
     *
     * @return ListPipelineJobHistorysResponse
     */
    public function listPipelineJobHistorys($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineJobHistorysWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * 获取流水线运行过的任务
     *
     * @param request - ListPipelineJobsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPipelineJobsResponse
     *
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param ListPipelineJobsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListPipelineJobsResponse
     */
    public function listPipelineJobsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['category'] = $request->category;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPipelineJobs',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipeline/' . Url::percentEncode($pipelineId) . '/jobs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPipelineJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取流水线运行过的任务
     *
     * @param request - ListPipelineJobsRequest
     *
     * @returns ListPipelineJobsResponse
     *
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param ListPipelineJobsRequest $request
     *
     * @return ListPipelineJobsResponse
     */
    public function listPipelineJobs($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineJobsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * 获取流水线关联列表.
     *
     * @param request - ListPipelineRelationsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPipelineRelationsResponse
     *
     * @param string                       $organizationId
     * @param string                       $pipelineId
     * @param ListPipelineRelationsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListPipelineRelationsResponse
     */
    public function listPipelineRelationsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->relObjectType) {
            @$query['relObjectType'] = $request->relObjectType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPipelineRelations',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/' . Url::percentEncode($pipelineId) . '/pipelineRelations',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPipelineRelationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取流水线关联列表.
     *
     * @param request - ListPipelineRelationsRequest
     *
     * @returns ListPipelineRelationsResponse
     *
     * @param string                       $organizationId
     * @param string                       $pipelineId
     * @param ListPipelineRelationsRequest $request
     *
     * @return ListPipelineRelationsResponse
     */
    public function listPipelineRelations($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineRelationsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * 获取流水线运行历史.
     *
     * @param request - ListPipelineRunsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPipelineRunsResponse
     *
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param ListPipelineRunsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListPipelineRunsResponse
     */
    public function listPipelineRunsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->triggerMode) {
            @$query['triggerMode'] = $request->triggerMode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPipelineRuns',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines/' . Url::percentEncode($pipelineId) . '/pipelineRuns',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPipelineRunsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取流水线运行历史.
     *
     * @param request - ListPipelineRunsRequest
     *
     * @returns ListPipelineRunsResponse
     *
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param ListPipelineRunsRequest $request
     *
     * @return ListPipelineRunsResponse
     */
    public function listPipelineRuns($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelineRunsWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * 获取流水线列表.
     *
     * @param request - ListPipelinesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPipelinesResponse
     *
     * @param string               $organizationId
     * @param ListPipelinesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListPipelinesResponse
     */
    public function listPipelinesWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createEndTime) {
            @$query['createEndTime'] = $request->createEndTime;
        }

        if (null !== $request->createStartTime) {
            @$query['createStartTime'] = $request->createStartTime;
        }

        if (null !== $request->creatorAccountIds) {
            @$query['creatorAccountIds'] = $request->creatorAccountIds;
        }

        if (null !== $request->executeAccountIds) {
            @$query['executeAccountIds'] = $request->executeAccountIds;
        }

        if (null !== $request->executeEndTime) {
            @$query['executeEndTime'] = $request->executeEndTime;
        }

        if (null !== $request->executeStartTime) {
            @$query['executeStartTime'] = $request->executeStartTime;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pipelineName) {
            @$query['pipelineName'] = $request->pipelineName;
        }

        if (null !== $request->statusList) {
            @$query['statusList'] = $request->statusList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPipelines',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取流水线列表.
     *
     * @param request - ListPipelinesRequest
     *
     * @returns ListPipelinesResponse
     *
     * @param string               $organizationId
     * @param ListPipelinesRequest $request
     *
     * @return ListPipelinesResponse
     */
    public function listPipelines($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPipelinesWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 查询代码库Label列表.
     *
     * @param request - ListProjectLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectLabelsResponse
     *
     * @param ListProjectLabelsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListProjectLabelsResponse
     */
    public function listProjectLabelsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->repositoryIdentity) {
            @$query['repositoryIdentity'] = $request->repositoryIdentity;
        }

        if (null !== $request->search) {
            @$query['search'] = $request->search;
        }

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        if (null !== $request->withCounts) {
            @$query['withCounts'] = $request->withCounts;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProjectLabels',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/labels',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProjectLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询代码库Label列表.
     *
     * @param request - ListProjectLabelsRequest
     *
     * @returns ListProjectLabelsResponse
     *
     * @param ListProjectLabelsRequest $request
     *
     * @return ListProjectLabelsResponse
     */
    public function listProjectLabels($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectLabelsWithOptions($request, $headers, $runtime);
    }

    /**
     * 根据项目id获取项目所以成员.
     *
     * @param request - ListProjectMembersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectMembersResponse
     *
     * @param string                    $organizationId
     * @param string                    $projectId
     * @param ListProjectMembersRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListProjectMembersResponse
     */
    public function listProjectMembersWithOptions($organizationId, $projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->targetType) {
            @$query['targetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProjectMembers',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/projects/' . Url::percentEncode($projectId) . '/listMembers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProjectMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据项目id获取项目所以成员.
     *
     * @param request - ListProjectMembersRequest
     *
     * @returns ListProjectMembersResponse
     *
     * @param string                    $organizationId
     * @param string                    $projectId
     * @param ListProjectMembersRequest $request
     *
     * @return ListProjectMembersResponse
     */
    public function listProjectMembers($organizationId, $projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectMembersWithOptions($organizationId, $projectId, $request, $headers, $runtime);
    }

    /**
     * 获取项目模板列表.
     *
     * @param request - ListProjectTemplatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectTemplatesResponse
     *
     * @param string                      $organizationId
     * @param ListProjectTemplatesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListProjectTemplatesResponse
     */
    public function listProjectTemplatesWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['category'] = $request->category;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProjectTemplates',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/projects/listTemplates',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProjectTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取项目模板列表.
     *
     * @param request - ListProjectTemplatesRequest
     *
     * @returns ListProjectTemplatesResponse
     *
     * @param string                      $organizationId
     * @param ListProjectTemplatesRequest $request
     *
     * @return ListProjectTemplatesResponse
     */
    public function listProjectTemplates($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectTemplatesWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 获取项目下开启的工作项类型.
     *
     * @param request - ListProjectWorkitemTypesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectWorkitemTypesResponse
     *
     * @param string                          $organizationId
     * @param string                          $projectId
     * @param ListProjectWorkitemTypesRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListProjectWorkitemTypesResponse
     */
    public function listProjectWorkitemTypesWithOptions($organizationId, $projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['category'] = $request->category;
        }

        if (null !== $request->spaceType) {
            @$query['spaceType'] = $request->spaceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProjectWorkitemTypes',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/projects/' . Url::percentEncode($projectId) . '/getWorkitemType',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProjectWorkitemTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取项目下开启的工作项类型.
     *
     * @param request - ListProjectWorkitemTypesRequest
     *
     * @returns ListProjectWorkitemTypesResponse
     *
     * @param string                          $organizationId
     * @param string                          $projectId
     * @param ListProjectWorkitemTypesRequest $request
     *
     * @return ListProjectWorkitemTypesResponse
     */
    public function listProjectWorkitemTypes($organizationId, $projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectWorkitemTypesWithOptions($organizationId, $projectId, $request, $headers, $runtime);
    }

    /**
     * 获取项目列表.
     *
     * @param request - ListProjectsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectsResponse
     *
     * @param string              $organizationId
     * @param ListProjectsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProjectsResponse
     */
    public function listProjectsWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['category'] = $request->category;
        }

        if (null !== $request->conditions) {
            @$query['conditions'] = $request->conditions;
        }

        if (null !== $request->extraConditions) {
            @$query['extraConditions'] = $request->extraConditions;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->scope) {
            @$query['scope'] = $request->scope;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProjects',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/listProjects',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取项目列表.
     *
     * @param request - ListProjectsRequest
     *
     * @returns ListProjectsResponse
     *
     * @param string              $organizationId
     * @param ListProjectsRequest $request
     *
     * @return ListProjectsResponse
     */
    public function listProjects($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProjectsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 查询保护分支列表.
     *
     * @param request - ListProtectedBranchesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProtectedBranchesResponse
     *
     * @param string                       $repositoryId
     * @param ListProtectedBranchesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListProtectedBranchesResponse
     */
    public function listProtectedBranchesWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProtectedBranches',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/protect_branches',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProtectedBranchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询保护分支列表.
     *
     * @param request - ListProtectedBranchesRequest
     *
     * @returns ListProtectedBranchesResponse
     *
     * @param string                       $repositoryId
     * @param ListProtectedBranchesRequest $request
     *
     * @return ListProtectedBranchesResponse
     */
    public function listProtectedBranches($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProtectedBranchesWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 查询推送规则列表.
     *
     * @param request - ListPushRulesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPushRulesResponse
     *
     * @param string               $repositoryId
     * @param ListPushRulesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListPushRulesResponse
     */
    public function listPushRulesWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPushRules',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/' . Url::percentEncode($repositoryId) . '/push_rule/push_rules/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPushRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询推送规则列表.
     *
     * @param request - ListPushRulesRequest
     *
     * @returns ListPushRulesResponse
     *
     * @param string               $repositoryId
     * @param ListPushRulesRequest $request
     *
     * @return ListPushRulesResponse
     */
    public function listPushRules($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPushRulesWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 查询代码库列表.
     *
     * @param request - ListRepositoriesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRepositoriesResponse
     *
     * @param ListRepositoriesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListRepositoriesResponse
     */
    public function listRepositoriesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->archived) {
            @$query['archived'] = $request->archived;
        }

        if (null !== $request->minAccessLevel) {
            @$query['minAccessLevel'] = $request->minAccessLevel;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->perPage) {
            @$query['perPage'] = $request->perPage;
        }

        if (null !== $request->search) {
            @$query['search'] = $request->search;
        }

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRepositories',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRepositoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询代码库列表.
     *
     * @param request - ListRepositoriesRequest
     *
     * @returns ListRepositoriesResponse
     *
     * @param ListRepositoriesRequest $request
     *
     * @return ListRepositoriesResponse
     */
    public function listRepositories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询分支列表.
     *
     * @param request - ListRepositoryBranchesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRepositoryBranchesResponse
     *
     * @param string                        $repositoryId
     * @param ListRepositoryBranchesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListRepositoryBranchesResponse
     */
    public function listRepositoryBranchesWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->search) {
            @$query['search'] = $request->search;
        }

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRepositoryBranches',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/branches',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRepositoryBranchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询分支列表.
     *
     * @param request - ListRepositoryBranchesRequest
     *
     * @returns ListRepositoryBranchesResponse
     *
     * @param string                        $repositoryId
     * @param ListRepositoryBranchesRequest $request
     *
     * @return ListRepositoryBranchesResponse
     */
    public function listRepositoryBranches($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryBranchesWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 查询代码库单个提交（Commit）的提交内容.
     *
     * @param request - ListRepositoryCommitDiffRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRepositoryCommitDiffResponse
     *
     * @param string                          $repositoryId
     * @param string                          $sha
     * @param ListRepositoryCommitDiffRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListRepositoryCommitDiffResponse
     */
    public function listRepositoryCommitDiffWithOptions($repositoryId, $sha, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->contextLine) {
            @$query['contextLine'] = $request->contextLine;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRepositoryCommitDiff',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/commits/' . Url::percentEncode($sha) . '/diff',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRepositoryCommitDiffResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询代码库单个提交（Commit）的提交内容.
     *
     * @param request - ListRepositoryCommitDiffRequest
     *
     * @returns ListRepositoryCommitDiffResponse
     *
     * @param string                          $repositoryId
     * @param string                          $sha
     * @param ListRepositoryCommitDiffRequest $request
     *
     * @return ListRepositoryCommitDiffResponse
     */
    public function listRepositoryCommitDiff($repositoryId, $sha, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryCommitDiffWithOptions($repositoryId, $sha, $request, $headers, $runtime);
    }

    /**
     * 查询代码库提交历史.
     *
     * @param request - ListRepositoryCommitsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRepositoryCommitsResponse
     *
     * @param string                       $repositoryId
     * @param ListRepositoryCommitsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListRepositoryCommitsResponse
     */
    public function listRepositoryCommitsWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->end) {
            @$query['end'] = $request->end;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->path) {
            @$query['path'] = $request->path;
        }

        if (null !== $request->refName) {
            @$query['refName'] = $request->refName;
        }

        if (null !== $request->search) {
            @$query['search'] = $request->search;
        }

        if (null !== $request->showCommentsCount) {
            @$query['showCommentsCount'] = $request->showCommentsCount;
        }

        if (null !== $request->showSignature) {
            @$query['showSignature'] = $request->showSignature;
        }

        if (null !== $request->start) {
            @$query['start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRepositoryCommits',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/commits',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRepositoryCommitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询代码库提交历史.
     *
     * @param request - ListRepositoryCommitsRequest
     *
     * @returns ListRepositoryCommitsResponse
     *
     * @param string                       $repositoryId
     * @param ListRepositoryCommitsRequest $request
     *
     * @return ListRepositoryCommitsResponse
     */
    public function listRepositoryCommits($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryCommitsWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 查询代码组列表.
     *
     * @param request - ListRepositoryGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRepositoryGroupsResponse
     *
     * @param ListRepositoryGroupsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListRepositoryGroupsResponse
     */
    public function listRepositoryGroupsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->includePersonal) {
            @$query['includePersonal'] = $request->includePersonal;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->parentId) {
            @$query['parentId'] = $request->parentId;
        }

        if (null !== $request->search) {
            @$query['search'] = $request->search;
        }

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRepositoryGroups',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/groups/get/all',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRepositoryGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询代码组列表.
     *
     * @param request - ListRepositoryGroupsRequest
     *
     * @returns ListRepositoryGroupsResponse
     *
     * @param ListRepositoryGroupsRequest $request
     *
     * @return ListRepositoryGroupsResponse
     */
    public function listRepositoryGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询代码库成员列表.
     *
     * @param request - ListRepositoryMemberWithInheritedRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRepositoryMemberWithInheritedResponse
     *
     * @param string                                   $repositoryId
     * @param ListRepositoryMemberWithInheritedRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListRepositoryMemberWithInheritedResponse
     */
    public function listRepositoryMemberWithInheritedWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRepositoryMemberWithInherited',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/members/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRepositoryMemberWithInheritedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询代码库成员列表.
     *
     * @param request - ListRepositoryMemberWithInheritedRequest
     *
     * @returns ListRepositoryMemberWithInheritedResponse
     *
     * @param string                                   $repositoryId
     * @param ListRepositoryMemberWithInheritedRequest $request
     *
     * @return ListRepositoryMemberWithInheritedResponse
     */
    public function listRepositoryMemberWithInherited($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryMemberWithInheritedWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 查询标签列表.
     *
     * @param request - ListRepositoryTagsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRepositoryTagsResponse
     *
     * @param string                    $repositoryId
     * @param ListRepositoryTagsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListRepositoryTagsResponse
     */
    public function listRepositoryTagsWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->search) {
            @$query['search'] = $request->search;
        }

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRepositoryTags',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/tag/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRepositoryTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询标签列表.
     *
     * @param request - ListRepositoryTagsRequest
     *
     * @returns ListRepositoryTagsResponse
     *
     * @param string                    $repositoryId
     * @param ListRepositoryTagsRequest $request
     *
     * @return ListRepositoryTagsResponse
     */
    public function listRepositoryTags($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryTagsWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 查询代码库文件树.
     *
     * @param request - ListRepositoryTreeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRepositoryTreeResponse
     *
     * @param string                    $repositoryId
     * @param ListRepositoryTreeRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListRepositoryTreeResponse
     */
    public function listRepositoryTreeWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->path) {
            @$query['path'] = $request->path;
        }

        if (null !== $request->refName) {
            @$query['refName'] = $request->refName;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRepositoryTree',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/files/tree',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRepositoryTreeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询代码库文件树.
     *
     * @param request - ListRepositoryTreeRequest
     *
     * @returns ListRepositoryTreeResponse
     *
     * @param string                    $repositoryId
     * @param ListRepositoryTreeRequest $request
     *
     * @return ListRepositoryTreeResponse
     */
    public function listRepositoryTree($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryTreeWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 查询代码库Webhook列表.
     *
     * @param request - ListRepositoryWebhookRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRepositoryWebhookResponse
     *
     * @param string                       $repositoryId
     * @param ListRepositoryWebhookRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListRepositoryWebhookResponse
     */
    public function listRepositoryWebhookWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRepositoryWebhook',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/webhooks/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRepositoryWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询代码库Webhook列表.
     *
     * @param request - ListRepositoryWebhookRequest
     *
     * @returns ListRepositoryWebhookResponse
     *
     * @param string                       $repositoryId
     * @param ListRepositoryWebhookRequest $request
     *
     * @return ListRepositoryWebhookResponse
     */
    public function listRepositoryWebhook($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoryWebhookWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 获取资源成员列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourceMembersResponse
     *
     * @param string         $organizationId
     * @param string         $resourceType
     * @param string         $resourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListResourceMembersResponse
     */
    public function listResourceMembersWithOptions($organizationId, $resourceType, $resourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListResourceMembers',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/' . Url::percentEncode($resourceType) . '/' . Url::percentEncode($resourceId) . '/members',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取资源成员列表.
     *
     * @returns ListResourceMembersResponse
     *
     * @param string $organizationId
     * @param string $resourceType
     * @param string $resourceId
     *
     * @return ListResourceMembersResponse
     */
    public function listResourceMembers($organizationId, $resourceType, $resourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceMembersWithOptions($organizationId, $resourceType, $resourceId, $headers, $runtime);
    }

    /**
     * 搜索代码提交数据.
     *
     * @param request - ListSearchCommitRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSearchCommitResponse
     *
     * @param ListSearchCommitRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListSearchCommitResponse
     */
    public function listSearchCommitWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->keyword) {
            @$body['keyword'] = $request->keyword;
        }

        if (null !== $request->order) {
            @$body['order'] = $request->order;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->repoPath) {
            @$body['repoPath'] = $request->repoPath;
        }

        if (null !== $request->scope) {
            @$body['scope'] = $request->scope;
        }

        if (null !== $request->sort) {
            @$body['sort'] = $request->sort;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSearchCommit',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/search/commit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSearchCommitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 搜索代码提交数据.
     *
     * @param request - ListSearchCommitRequest
     *
     * @returns ListSearchCommitResponse
     *
     * @param ListSearchCommitRequest $request
     *
     * @return ListSearchCommitResponse
     */
    public function listSearchCommit($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSearchCommitWithOptions($request, $headers, $runtime);
    }

    /**
     * 搜索代码仓库数据.
     *
     * @param request - ListSearchRepositoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSearchRepositoryResponse
     *
     * @param ListSearchRepositoryRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListSearchRepositoryResponse
     */
    public function listSearchRepositoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->aliyunPk) {
            @$body['aliyunPk'] = $request->aliyunPk;
        }

        if (null !== $request->keyword) {
            @$body['keyword'] = $request->keyword;
        }

        if (null !== $request->order) {
            @$body['order'] = $request->order;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->repoPath) {
            @$body['repoPath'] = $request->repoPath;
        }

        if (null !== $request->scope) {
            @$body['scope'] = $request->scope;
        }

        if (null !== $request->sort) {
            @$body['sort'] = $request->sort;
        }

        if (null !== $request->visibilityLevel) {
            @$body['visibilityLevel'] = $request->visibilityLevel;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSearchRepository',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/search/repo',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSearchRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 搜索代码仓库数据.
     *
     * @param request - ListSearchRepositoryRequest
     *
     * @returns ListSearchRepositoryResponse
     *
     * @param ListSearchRepositoryRequest $request
     *
     * @return ListSearchRepositoryResponse
     */
    public function listSearchRepository($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSearchRepositoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 搜索代码片段.
     *
     * @param request - ListSearchSourceCodeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSearchSourceCodeResponse
     *
     * @param ListSearchSourceCodeRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListSearchSourceCodeResponse
     */
    public function listSearchSourceCodeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->filePath) {
            @$body['filePath'] = $request->filePath;
        }

        if (null !== $request->isCodeBlock) {
            @$body['isCodeBlock'] = $request->isCodeBlock;
        }

        if (null !== $request->keyword) {
            @$body['keyword'] = $request->keyword;
        }

        if (null !== $request->language) {
            @$body['language'] = $request->language;
        }

        if (null !== $request->order) {
            @$body['order'] = $request->order;
        }

        if (null !== $request->page) {
            @$body['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->repoPath) {
            @$body['repoPath'] = $request->repoPath;
        }

        if (null !== $request->scope) {
            @$body['scope'] = $request->scope;
        }

        if (null !== $request->sort) {
            @$body['sort'] = $request->sort;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListSearchSourceCode',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/search/code',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSearchSourceCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 搜索代码片段.
     *
     * @param request - ListSearchSourceCodeRequest
     *
     * @returns ListSearchSourceCodeResponse
     *
     * @param ListSearchSourceCodeRequest $request
     *
     * @return ListSearchSourceCodeResponse
     */
    public function listSearchSourceCode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSearchSourceCodeWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取服务授权列表.
     *
     * @param request - ListServiceAuthsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceAuthsResponse
     *
     * @param string                  $organizationId
     * @param ListServiceAuthsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListServiceAuthsResponse
     */
    public function listServiceAuthsWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceAuthType) {
            @$query['serviceAuthType'] = $request->serviceAuthType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServiceAuths',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/serviceAuths',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServiceAuthsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取服务授权列表.
     *
     * @param request - ListServiceAuthsRequest
     *
     * @returns ListServiceAuthsResponse
     *
     * @param string                  $organizationId
     * @param ListServiceAuthsRequest $request
     *
     * @return ListServiceAuthsResponse
     */
    public function listServiceAuths($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceAuthsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 获取服务连接列表.
     *
     * @param request - ListServiceConnectionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceConnectionsResponse
     *
     * @param string                        $organizationId
     * @param ListServiceConnectionsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListServiceConnectionsResponse
     */
    public function listServiceConnectionsWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sericeConnectionType) {
            @$query['sericeConnectionType'] = $request->sericeConnectionType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServiceConnections',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/serviceConnections',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServiceConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取服务连接列表.
     *
     * @param request - ListServiceConnectionsRequest
     *
     * @returns ListServiceConnectionsResponse
     *
     * @param string                        $organizationId
     * @param ListServiceConnectionsRequest $request
     *
     * @return ListServiceConnectionsResponse
     */
    public function listServiceConnections($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceConnectionsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 获取服务证书列表.
     *
     * @param request - ListServiceCredentialsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceCredentialsResponse
     *
     * @param string                        $organizationId
     * @param ListServiceCredentialsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListServiceCredentialsResponse
     */
    public function listServiceCredentialsWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceCredentialType) {
            @$query['serviceCredentialType'] = $request->serviceCredentialType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServiceCredentials',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/serviceCredentials',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServiceCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取服务证书列表.
     *
     * @param request - ListServiceCredentialsRequest
     *
     * @returns ListServiceCredentialsResponse
     *
     * @param string                        $organizationId
     * @param ListServiceCredentialsRequest $request
     *
     * @return ListServiceCredentialsResponse
     */
    public function listServiceCredentials($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceCredentialsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 获取迭代列表.
     *
     * @param request - ListSprintsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSprintsResponse
     *
     * @param string             $organizationId
     * @param ListSprintsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListSprintsResponse
     */
    public function listSprintsWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->spaceIdentifier) {
            @$query['spaceIdentifier'] = $request->spaceIdentifier;
        }

        if (null !== $request->spaceType) {
            @$query['spaceType'] = $request->spaceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSprints',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/sprints/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSprintsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取迭代列表.
     *
     * @param request - ListSprintsRequest
     *
     * @returns ListSprintsResponse
     *
     * @param string             $organizationId
     * @param ListSprintsRequest $request
     *
     * @return ListSprintsResponse
     */
    public function listSprints($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSprintsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 获取测试用例全部字段.
     *
     * @param request - ListTestCaseFieldsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTestCaseFieldsResponse
     *
     * @param string                    $organizationId
     * @param ListTestCaseFieldsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListTestCaseFieldsResponse
     */
    public function listTestCaseFieldsWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->spaceIdentifier) {
            @$query['spaceIdentifier'] = $request->spaceIdentifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTestCaseFields',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/testhub/testcase/fields',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTestCaseFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取测试用例全部字段.
     *
     * @param request - ListTestCaseFieldsRequest
     *
     * @returns ListTestCaseFieldsResponse
     *
     * @param string                    $organizationId
     * @param ListTestCaseFieldsRequest $request
     *
     * @return ListTestCaseFieldsResponse
     */
    public function listTestCaseFields($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTestCaseFieldsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 测试DrawService.
     *
     * @param request - ListUserDrawRecordByPkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserDrawRecordByPkResponse
     *
     * @param ListUserDrawRecordByPkRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListUserDrawRecordByPkResponse
     */
    public function listUserDrawRecordByPkWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunPk) {
            @$query['aliyunPk'] = $request->aliyunPk;
        }

        if (null !== $request->drawGroup) {
            @$query['drawGroup'] = $request->drawGroup;
        }

        if (null !== $request->drawPoolName) {
            @$query['drawPoolName'] = $request->drawPoolName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserDrawRecordByPk',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/listUserDrawRecords',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUserDrawRecordByPkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 测试DrawService.
     *
     * @param request - ListUserDrawRecordByPkRequest
     *
     * @returns ListUserDrawRecordByPkResponse
     *
     * @param ListUserDrawRecordByPkRequest $request
     *
     * @return ListUserDrawRecordByPkResponse
     */
    public function listUserDrawRecordByPk($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserDrawRecordByPkWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询当前用户的SSH Key列表.
     *
     * @param request - ListUserKeysRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserKeysResponse
     *
     * @param ListUserKeysRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListUserKeysResponse
     */
    public function listUserKeysWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->sort) {
            @$query['sort'] = $request->sort;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserKeys',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v3/user/keys',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUserKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询当前用户的SSH Key列表.
     *
     * @param request - ListUserKeysRequest
     *
     * @returns ListUserKeysResponse
     *
     * @param ListUserKeysRequest $request
     *
     * @return ListUserKeysResponse
     */
    public function listUserKeys($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserKeysWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询用户有权限的资源（代码库、组）.
     *
     * @param request - ListUserResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserResourcesResponse
     *
     * @param ListUserResourcesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListUserResourcesResponse
     */
    public function listUserResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->page) {
            @$query['page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->userIds) {
            @$query['userIds'] = $request->userIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserResources',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/user/vision/user_resources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUserResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户有权限的资源（代码库、组）.
     *
     * @param request - ListUserResourcesRequest
     *
     * @returns ListUserResourcesResponse
     *
     * @param ListUserResourcesRequest $request
     *
     * @return ListUserResourcesResponse
     */
    public function listUserResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取变量组列表.
     *
     * @param request - ListVariableGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVariableGroupsResponse
     *
     * @param string                    $organizationId
     * @param ListVariableGroupsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListVariableGroupsResponse
     */
    public function listVariableGroupsWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->pageOrder) {
            @$query['pageOrder'] = $request->pageOrder;
        }

        if (null !== $request->pageSort) {
            @$query['pageSort'] = $request->pageSort;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVariableGroups',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/variableGroups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListVariableGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取变量组列表.
     *
     * @param request - ListVariableGroupsRequest
     *
     * @returns ListVariableGroupsResponse
     *
     * @param string                    $organizationId
     * @param ListVariableGroupsRequest $request
     *
     * @return ListVariableGroupsResponse
     */
    public function listVariableGroups($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listVariableGroupsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 获取项目下工作项的所有字段.
     *
     * @param request - ListWorkItemAllFieldsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkItemAllFieldsResponse
     *
     * @param string                       $organizationId
     * @param ListWorkItemAllFieldsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListWorkItemAllFieldsResponse
     */
    public function listWorkItemAllFieldsWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->spaceIdentifier) {
            @$query['spaceIdentifier'] = $request->spaceIdentifier;
        }

        if (null !== $request->spaceType) {
            @$query['spaceType'] = $request->spaceType;
        }

        if (null !== $request->workitemTypeIdentifier) {
            @$query['workitemTypeIdentifier'] = $request->workitemTypeIdentifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkItemAllFields',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/fields/listAll',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkItemAllFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取项目下工作项的所有字段.
     *
     * @param request - ListWorkItemAllFieldsRequest
     *
     * @returns ListWorkItemAllFieldsResponse
     *
     * @param string                       $organizationId
     * @param ListWorkItemAllFieldsRequest $request
     *
     * @return ListWorkItemAllFieldsResponse
     */
    public function listWorkItemAllFields($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkItemAllFieldsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 查询工作项工作流的所有状态
     *
     * @param request - ListWorkItemWorkFlowStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkItemWorkFlowStatusResponse
     *
     * @param string                            $organizationId
     * @param ListWorkItemWorkFlowStatusRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListWorkItemWorkFlowStatusResponse
     */
    public function listWorkItemWorkFlowStatusWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->spaceIdentifier) {
            @$query['spaceIdentifier'] = $request->spaceIdentifier;
        }

        if (null !== $request->spaceType) {
            @$query['spaceType'] = $request->spaceType;
        }

        if (null !== $request->workitemCategoryIdentifier) {
            @$query['workitemCategoryIdentifier'] = $request->workitemCategoryIdentifier;
        }

        if (null !== $request->workitemTypeIdentifier) {
            @$query['workitemTypeIdentifier'] = $request->workitemTypeIdentifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkItemWorkFlowStatus',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/workflow/listWorkflowStatus',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkItemWorkFlowStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询工作项工作流的所有状态
     *
     * @param request - ListWorkItemWorkFlowStatusRequest
     *
     * @returns ListWorkItemWorkFlowStatusResponse
     *
     * @param string                            $organizationId
     * @param ListWorkItemWorkFlowStatusRequest $request
     *
     * @return ListWorkItemWorkFlowStatusResponse
     */
    public function listWorkItemWorkFlowStatus($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkItemWorkFlowStatusWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 获取工作项的附件列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkitemAttachmentsResponse
     *
     * @param string         $organizationId
     * @param string         $workitemIdentifier
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListWorkitemAttachmentsResponse
     */
    public function listWorkitemAttachmentsWithOptions($organizationId, $workitemIdentifier, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListWorkitemAttachments',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitem/' . Url::percentEncode($workitemIdentifier) . '/attachments',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkitemAttachmentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作项的附件列表.
     *
     * @returns ListWorkitemAttachmentsResponse
     *
     * @param string $organizationId
     * @param string $workitemIdentifier
     *
     * @return ListWorkitemAttachmentsResponse
     */
    public function listWorkitemAttachments($organizationId, $workitemIdentifier)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkitemAttachmentsWithOptions($organizationId, $workitemIdentifier, $headers, $runtime);
    }

    /**
     * 获取工作项预计工时明细列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkitemEstimateResponse
     *
     * @param string         $organizationId
     * @param string         $workitemId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListWorkitemEstimateResponse
     */
    public function listWorkitemEstimateWithOptions($organizationId, $workitemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListWorkitemEstimate',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/' . Url::percentEncode($workitemId) . '/estimate/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkitemEstimateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作项预计工时明细列表.
     *
     * @returns ListWorkitemEstimateResponse
     *
     * @param string $organizationId
     * @param string $workitemId
     *
     * @return ListWorkitemEstimateResponse
     */
    public function listWorkitemEstimate($organizationId, $workitemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkitemEstimateWithOptions($organizationId, $workitemId, $headers, $runtime);
    }

    /**
     * 获取工作项工时明细列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkitemTimeResponse
     *
     * @param string         $organizationId
     * @param string         $workitemId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListWorkitemTimeResponse
     */
    public function listWorkitemTimeWithOptions($organizationId, $workitemId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListWorkitemTime',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/' . Url::percentEncode($workitemId) . '/time/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkitemTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作项工时明细列表.
     *
     * @returns ListWorkitemTimeResponse
     *
     * @param string $organizationId
     * @param string $workitemId
     *
     * @return ListWorkitemTimeResponse
     */
    public function listWorkitemTime($organizationId, $workitemId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkitemTimeWithOptions($organizationId, $workitemId, $headers, $runtime);
    }

    /**
     * 获取工作项列表.
     *
     * @param request - ListWorkitemsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkitemsResponse
     *
     * @param string               $organizationId
     * @param ListWorkitemsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListWorkitemsResponse
     */
    public function listWorkitemsWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['category'] = $request->category;
        }

        if (null !== $request->conditions) {
            @$query['conditions'] = $request->conditions;
        }

        if (null !== $request->extraConditions) {
            @$query['extraConditions'] = $request->extraConditions;
        }

        if (null !== $request->groupCondition) {
            @$query['groupCondition'] = $request->groupCondition;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->searchType) {
            @$query['searchType'] = $request->searchType;
        }

        if (null !== $request->spaceIdentifier) {
            @$query['spaceIdentifier'] = $request->spaceIdentifier;
        }

        if (null !== $request->spaceType) {
            @$query['spaceType'] = $request->spaceType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWorkitems',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/listWorkitems',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWorkitemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取工作项列表.
     *
     * @param request - ListWorkitemsRequest
     *
     * @returns ListWorkitemsResponse
     *
     * @param string               $organizationId
     * @param ListWorkitemsRequest $request
     *
     * @return ListWorkitemsResponse
     */
    public function listWorkitems($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWorkitemsWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 获取流水线运行任务日志.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LogPipelineJobRunResponse
     *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $jobId
     * @param string         $pipelineRunId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return LogPipelineJobRunResponse
     */
    public function logPipelineJobRunWithOptions($organizationId, $pipelineId, $jobId, $pipelineRunId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'LogPipelineJobRun',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipeline/' . Url::percentEncode($pipelineId) . '/pipelineRun/' . Url::percentEncode($pipelineRunId) . '/job/' . Url::percentEncode($jobId) . '/logs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return LogPipelineJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取流水线运行任务日志.
     *
     * @returns LogPipelineJobRunResponse
     *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $jobId
     * @param string $pipelineRunId
     *
     * @return LogPipelineJobRunResponse
     */
    public function logPipelineJobRun($organizationId, $pipelineId, $jobId, $pipelineRunId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->logPipelineJobRunWithOptions($organizationId, $pipelineId, $jobId, $pipelineRunId, $headers, $runtime);
    }

    /**
     * 获取机器部署日志.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LogVMDeployMachineResponse
     *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string         $machineSn
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return LogVMDeployMachineResponse
     */
    public function logVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'LogVMDeployMachine',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines/' . Url::percentEncode($pipelineId) . '/deploy/' . Url::percentEncode($deployOrderId) . '/machine/' . Url::percentEncode($machineSn) . '/log',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return LogVMDeployMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取机器部署日志.
     *
     * @returns LogVMDeployMachineResponse
     *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     * @param string $machineSn
     *
     * @return LogVMDeployMachineResponse
     */
    public function logVMDeployMachine($organizationId, $pipelineId, $deployOrderId, $machineSn)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->logVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime);
    }

    /**
     * 合并代码评审
     *
     * @param request - MergeMergeRequestRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MergeMergeRequestResponse
     *
     * @param string                   $repositoryId
     * @param string                   $localId
     * @param MergeMergeRequestRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return MergeMergeRequestResponse
     */
    public function mergeMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->mergeMessage) {
            @$body['mergeMessage'] = $request->mergeMessage;
        }

        if (null !== $request->mergeType) {
            @$body['mergeType'] = $request->mergeType;
        }

        if (null !== $request->removeSourceBranch) {
            @$body['removeSourceBranch'] = $request->removeSourceBranch;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MergeMergeRequest',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/' . Url::percentEncode($repositoryId) . '/merge_requests/' . Url::percentEncode($localId) . '/merge',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MergeMergeRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 合并代码评审
     *
     * @param request - MergeMergeRequestRequest
     *
     * @returns MergeMergeRequestResponse
     *
     * @param string                   $repositoryId
     * @param string                   $localId
     * @param MergeMergeRequestRequest $request
     *
     * @return MergeMergeRequestResponse
     */
    public function mergeMergeRequest($repositoryId, $localId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->mergeMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime);
    }

    /**
     * 通过人工卡点.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PassPipelineValidateResponse
     *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PassPipelineValidateResponse
     */
    public function passPipelineValidateWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'PassPipelineValidate',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines/' . Url::percentEncode($pipelineId) . '/pipelineRuns/' . Url::percentEncode($pipelineRunId) . '/jobs/' . Url::percentEncode($jobId) . '/pass',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PassPipelineValidateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过人工卡点.
     *
     * @returns PassPipelineValidateResponse
     *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return PassPipelineValidateResponse
     */
    public function passPipelineValidate($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->passPipelineValidateWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * 通过人工卡点.
     *
     * @param request - PassReleaseStagePipelineValidateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PassReleaseStagePipelineValidateResponse
     *
     * @param string                                  $appName
     * @param string                                  $releaseWorkflowSn
     * @param string                                  $releaseStageSn
     * @param string                                  $executionNumber
     * @param PassReleaseStagePipelineValidateRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return PassReleaseStagePipelineValidateResponse
     */
    public function passReleaseStagePipelineValidateWithOptions($appName, $releaseWorkflowSn, $releaseStageSn, $executionNumber, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['jobId'] = $request->jobId;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PassReleaseStagePipelineValidate',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/appstack/apps/' . Url::percentEncode($appName) . '/releaseWorkflows/' . Url::percentEncode($releaseWorkflowSn) . '/releaseStages/' . Url::percentEncode($releaseStageSn) . '/executions/' . Url::percentEncode($executionNumber) . '%3ApassPipelineValidate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PassReleaseStagePipelineValidateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过人工卡点.
     *
     * @param request - PassReleaseStagePipelineValidateRequest
     *
     * @returns PassReleaseStagePipelineValidateResponse
     *
     * @param string                                  $appName
     * @param string                                  $releaseWorkflowSn
     * @param string                                  $releaseStageSn
     * @param string                                  $executionNumber
     * @param PassReleaseStagePipelineValidateRequest $request
     *
     * @return PassReleaseStagePipelineValidateResponse
     */
    public function passReleaseStagePipelineValidate($appName, $releaseWorkflowSn, $releaseStageSn, $executionNumber, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->passReleaseStagePipelineValidateWithOptions($appName, $releaseWorkflowSn, $releaseStageSn, $executionNumber, $request, $headers, $runtime);
    }

    /**
     * 拒绝人工卡点.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefusePipelineValidateResponse
     *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RefusePipelineValidateResponse
     */
    public function refusePipelineValidateWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RefusePipelineValidate',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines/' . Url::percentEncode($pipelineId) . '/pipelineRuns/' . Url::percentEncode($pipelineRunId) . '/jobs/' . Url::percentEncode($jobId) . '/refuse',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RefusePipelineValidateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 拒绝人工卡点.
     *
     * @returns RefusePipelineValidateResponse
     *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return RefusePipelineValidateResponse
     */
    public function refusePipelineValidate($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->refusePipelineValidateWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * 拒绝人工卡点.
     *
     * @param request - RefuseReleaseStagePipelineValidateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefuseReleaseStagePipelineValidateResponse
     *
     * @param string                                    $appName
     * @param string                                    $releaseWorkflowSn
     * @param string                                    $releaseStageSn
     * @param string                                    $executionNumber
     * @param RefuseReleaseStagePipelineValidateRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return RefuseReleaseStagePipelineValidateResponse
     */
    public function refuseReleaseStagePipelineValidateWithOptions($appName, $releaseWorkflowSn, $releaseStageSn, $executionNumber, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['jobId'] = $request->jobId;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefuseReleaseStagePipelineValidate',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/appstack/apps/' . Url::percentEncode($appName) . '/releaseWorkflows/' . Url::percentEncode($releaseWorkflowSn) . '/releaseStages/' . Url::percentEncode($releaseStageSn) . '/executions/' . Url::percentEncode($executionNumber) . '%3ArefusePipelineValidate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RefuseReleaseStagePipelineValidateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 拒绝人工卡点.
     *
     * @param request - RefuseReleaseStagePipelineValidateRequest
     *
     * @returns RefuseReleaseStagePipelineValidateResponse
     *
     * @param string                                    $appName
     * @param string                                    $releaseWorkflowSn
     * @param string                                    $releaseStageSn
     * @param string                                    $executionNumber
     * @param RefuseReleaseStagePipelineValidateRequest $request
     *
     * @return RefuseReleaseStagePipelineValidateResponse
     */
    public function refuseReleaseStagePipelineValidate($appName, $releaseWorkflowSn, $releaseStageSn, $executionNumber, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->refuseReleaseStagePipelineValidateWithOptions($appName, $releaseWorkflowSn, $releaseStageSn, $executionNumber, $request, $headers, $runtime);
    }

    /**
     * 重新打开代码评审
     *
     * @param request - ReopenMergeRequestRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReopenMergeRequestResponse
     *
     * @param string                    $repositoryId
     * @param string                    $localId
     * @param ReopenMergeRequestRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ReopenMergeRequestResponse
     */
    public function reopenMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReopenMergeRequest',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/' . Url::percentEncode($repositoryId) . '/merge_requests/' . Url::percentEncode($localId) . '/reopen',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReopenMergeRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重新打开代码评审
     *
     * @param request - ReopenMergeRequestRequest
     *
     * @returns ReopenMergeRequestResponse
     *
     * @param string                    $repositoryId
     * @param string                    $localId
     * @param ReopenMergeRequestRequest $request
     *
     * @return ReopenMergeRequestResponse
     */
    public function reopenMergeRequest($repositoryId, $localId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reopenMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime);
    }

    /**
     * 重置企业公钥.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetSshKeyResponse
     *
     * @param string         $organizationId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ResetSshKeyResponse
     */
    public function resetSshKeyWithOptions($organizationId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ResetSshKey',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/sshKey',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ResetSshKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重置企业公钥.
     *
     * @returns ResetSshKeyResponse
     *
     * @param string $organizationId
     *
     * @return ResetSshKeyResponse
     */
    public function resetSshKey($organizationId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resetSshKeyWithOptions($organizationId, $headers, $runtime);
    }

    /**
     * 继续部署.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeVMDeployOrderResponse
     *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ResumeVMDeployOrderResponse
     */
    public function resumeVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ResumeVMDeployOrder',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines/' . Url::percentEncode($pipelineId) . '/deploy/' . Url::percentEncode($deployOrderId) . '/resume',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ResumeVMDeployOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 继续部署.
     *
     * @returns ResumeVMDeployOrderResponse
     *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     *
     * @return ResumeVMDeployOrderResponse
     */
    public function resumeVMDeployOrder($organizationId, $pipelineId, $deployOrderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime);
    }

    /**
     * 重试流水线运行.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryPipelineJobRunResponse
     *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RetryPipelineJobRunResponse
     */
    public function retryPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RetryPipelineJobRun',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines/' . Url::percentEncode($pipelineId) . '/pipelineRuns/' . Url::percentEncode($pipelineRunId) . '/jobs/' . Url::percentEncode($jobId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RetryPipelineJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重试流水线运行.
     *
     * @returns RetryPipelineJobRunResponse
     *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return RetryPipelineJobRunResponse
     */
    public function retryPipelineJobRun($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * 重试机器部署.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetryVMDeployMachineResponse
     *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string         $machineSn
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RetryVMDeployMachineResponse
     */
    public function retryVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RetryVMDeployMachine',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines/' . Url::percentEncode($pipelineId) . '/deploy/' . Url::percentEncode($deployOrderId) . '/machine/' . Url::percentEncode($machineSn) . '/retry',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RetryVMDeployMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重试机器部署.
     *
     * @returns RetryVMDeployMachineResponse
     *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     * @param string $machineSn
     *
     * @return RetryVMDeployMachineResponse
     */
    public function retryVMDeployMachine($organizationId, $pipelineId, $deployOrderId, $machineSn)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->retryVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime);
    }

    /**
     * 提交变更请求的评审意见
     *
     * @param request - ReviewMergeRequestRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReviewMergeRequestResponse
     *
     * @param string                    $repositoryId
     * @param string                    $localId
     * @param ReviewMergeRequestRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ReviewMergeRequestResponse
     */
    public function reviewMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->draftCommentIds) {
            @$body['draftCommentIds'] = $request->draftCommentIds;
        }

        if (null !== $request->reviewComment) {
            @$body['reviewComment'] = $request->reviewComment;
        }

        if (null !== $request->reviewOpinion) {
            @$body['reviewOpinion'] = $request->reviewOpinion;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReviewMergeRequest',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/' . Url::percentEncode($repositoryId) . '/merge_requests/' . Url::percentEncode($localId) . '/submit_review_opinion',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ReviewMergeRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交变更请求的评审意见
     *
     * @param request - ReviewMergeRequestRequest
     *
     * @returns ReviewMergeRequestResponse
     *
     * @param string                    $repositoryId
     * @param string                    $localId
     * @param ReviewMergeRequestRequest $request
     *
     * @return ReviewMergeRequestResponse
     */
    public function reviewMergeRequest($repositoryId, $localId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reviewMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime);
    }

    /**
     * 跳过流水线任务运行.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SkipPipelineJobRunResponse
     *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return SkipPipelineJobRunResponse
     */
    public function skipPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'SkipPipelineJobRun',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines/' . Url::percentEncode($pipelineId) . '/pipelineRuns/' . Url::percentEncode($pipelineRunId) . '/jobs/' . Url::percentEncode($jobId) . '/skip',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SkipPipelineJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 跳过流水线任务运行.
     *
     * @returns SkipPipelineJobRunResponse
     *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return SkipPipelineJobRunResponse
     */
    public function skipPipelineJobRun($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->skipPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * 跳过机器部署.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SkipVMDeployMachineResponse
     *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string         $machineSn
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return SkipVMDeployMachineResponse
     */
    public function skipVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'SkipVMDeployMachine',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines/' . Url::percentEncode($pipelineId) . '/deploy/' . Url::percentEncode($deployOrderId) . '/machine/' . Url::percentEncode($machineSn) . '/skip',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SkipVMDeployMachineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 跳过机器部署.
     *
     * @returns SkipVMDeployMachineResponse
     *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     * @param string $machineSn
     *
     * @return SkipVMDeployMachineResponse
     */
    public function skipVMDeployMachine($organizationId, $pipelineId, $deployOrderId, $machineSn)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->skipVMDeployMachineWithOptions($organizationId, $pipelineId, $deployOrderId, $machineSn, $headers, $runtime);
    }

    /**
     * 运行流水线
     *
     * @param request - StartPipelineRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartPipelineRunResponse
     *
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param StartPipelineRunRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return StartPipelineRunResponse
     */
    public function startPipelineRunWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->params) {
            @$body['params'] = $request->params;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartPipelineRun',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organizations/' . Url::percentEncode($organizationId) . '/pipelines/' . Url::percentEncode($pipelineId) . '/run',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartPipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 运行流水线
     *
     * @param request - StartPipelineRunRequest
     *
     * @returns StartPipelineRunResponse
     *
     * @param string                  $organizationId
     * @param string                  $pipelineId
     * @param StartPipelineRunRequest $request
     *
     * @return StartPipelineRunResponse
     */
    public function startPipelineRun($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startPipelineRunWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * 终止流水线任务运行.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopPipelineJobRunResponse
     *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string         $jobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopPipelineJobRunResponse
     */
    public function stopPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopPipelineJobRun',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines/' . Url::percentEncode($pipelineId) . '/pipelineRuns/' . Url::percentEncode($pipelineRunId) . '/jobs/' . Url::percentEncode($jobId) . '/stop',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopPipelineJobRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 终止流水线任务运行.
     *
     * @returns StopPipelineJobRunResponse
     *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     * @param string $jobId
     *
     * @return StopPipelineJobRunResponse
     */
    public function stopPipelineJobRun($organizationId, $pipelineId, $pipelineRunId, $jobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopPipelineJobRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $jobId, $headers, $runtime);
    }

    /**
     * 终止流水线运行.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopPipelineRunResponse
     *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $pipelineRunId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopPipelineRunResponse
     */
    public function stopPipelineRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopPipelineRun',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines/' . Url::percentEncode($pipelineId) . '/pipelineRuns/' . Url::percentEncode($pipelineRunId) . '/stop',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopPipelineRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 终止流水线运行.
     *
     * @returns StopPipelineRunResponse
     *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $pipelineRunId
     *
     * @return StopPipelineRunResponse
     */
    public function stopPipelineRun($organizationId, $pipelineId, $pipelineRunId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopPipelineRunWithOptions($organizationId, $pipelineId, $pipelineRunId, $headers, $runtime);
    }

    /**
     * 取消部署单.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopVMDeployOrderResponse
     *
     * @param string         $organizationId
     * @param string         $pipelineId
     * @param string         $deployOrderId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopVMDeployOrderResponse
     */
    public function stopVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopVMDeployOrder',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines/' . Url::percentEncode($pipelineId) . '/deploy/' . Url::percentEncode($deployOrderId) . '/stop',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopVMDeployOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消部署单.
     *
     * @returns StopVMDeployOrderResponse
     *
     * @param string $organizationId
     * @param string $pipelineId
     * @param string $deployOrderId
     *
     * @return StopVMDeployOrderResponse
     */
    public function stopVMDeployOrder($organizationId, $pipelineId, $deployOrderId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopVMDeployOrderWithOptions($organizationId, $pipelineId, $deployOrderId, $headers, $runtime);
    }

    /**
     * 转移代码库.
     *
     * @param request - TransferRepositoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferRepositoryResponse
     *
     * @param TransferRepositoryRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return TransferRepositoryResponse
     */
    public function transferRepositoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->groupId) {
            @$query['groupId'] = $request->groupId;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->repositoryId) {
            @$query['repositoryId'] = $request->repositoryId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TransferRepository',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/repository/transfer',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TransferRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 转移代码库.
     *
     * @param request - TransferRepositoryRequest
     *
     * @returns TransferRepositoryResponse
     *
     * @param TransferRepositoryRequest $request
     *
     * @return TransferRepositoryResponse
     */
    public function transferRepository($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->transferRepositoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 触发仓库同步.
     *
     * @param request - TriggerRepositoryMirrorSyncRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TriggerRepositoryMirrorSyncResponse
     *
     * @param string                             $repositoryId
     * @param TriggerRepositoryMirrorSyncRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return TriggerRepositoryMirrorSyncResponse
     */
    public function triggerRepositoryMirrorSyncWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->account) {
            @$query['account'] = $request->account;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->token) {
            @$query['token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TriggerRepositoryMirrorSync',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/mirror',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TriggerRepositoryMirrorSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 触发仓库同步.
     *
     * @param request - TriggerRepositoryMirrorSyncRequest
     *
     * @returns TriggerRepositoryMirrorSyncResponse
     *
     * @param string                             $repositoryId
     * @param TriggerRepositoryMirrorSyncRequest $request
     *
     * @return TriggerRepositoryMirrorSyncResponse
     */
    public function triggerRepositoryMirrorSync($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->triggerRepositoryMirrorSyncWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 更新应用成员.
     *
     * @param request - UpdateAppMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAppMemberResponse
     *
     * @param string                 $appName
     * @param UpdateAppMemberRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAppMemberResponse
     */
    public function updateAppMemberWithOptions($appName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->player) {
            @$body['player'] = $request->player;
        }

        if (null !== $request->roleNames) {
            @$body['roleNames'] = $request->roleNames;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAppMember',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/appstack/apps/' . Url::percentEncode($appName) . '/members',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'string',
        ]);

        return UpdateAppMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新应用成员.
     *
     * @param request - UpdateAppMemberRequest
     *
     * @returns UpdateAppMemberResponse
     *
     * @param string                 $appName
     * @param UpdateAppMemberRequest $request
     *
     * @return UpdateAppMemberResponse
     */
    public function updateAppMember($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAppMemberWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * 更新应用.
     *
     * @param request - UpdateApplicationRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateApplicationResponse
     *
     * @param string                   $appName
     * @param UpdateApplicationRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateApplicationResponse
     */
    public function updateApplicationWithOptions($appName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->ownerAccountId) {
            @$body['ownerAccountId'] = $request->ownerAccountId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateApplication',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/appstack/apps/' . Url::percentEncode($appName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新应用.
     *
     * @param request - UpdateApplicationRequest
     *
     * @returns UpdateApplicationResponse
     *
     * @param string                   $appName
     * @param UpdateApplicationRequest $request
     *
     * @return UpdateApplicationResponse
     */
    public function updateApplication($appName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateApplicationWithOptions($appName, $request, $headers, $runtime);
    }

    /**
     * 更新检查运行记录.
     *
     * @param request - UpdateCheckRunRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCheckRunResponse
     *
     * @param UpdateCheckRunRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateCheckRunResponse
     */
    public function updateCheckRunWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->checkRunId) {
            @$query['checkRunId'] = $request->checkRunId;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->repositoryIdentity) {
            @$query['repositoryIdentity'] = $request->repositoryIdentity;
        }

        $body = [];
        if (null !== $request->annotations) {
            @$body['annotations'] = $request->annotations;
        }

        if (null !== $request->completedAt) {
            @$body['completedAt'] = $request->completedAt;
        }

        if (null !== $request->conclusion) {
            @$body['conclusion'] = $request->conclusion;
        }

        if (null !== $request->detailsUrl) {
            @$body['detailsUrl'] = $request->detailsUrl;
        }

        if (null !== $request->externalId) {
            @$body['externalId'] = $request->externalId;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->output) {
            @$body['output'] = $request->output;
        }

        if (null !== $request->startedAt) {
            @$body['startedAt'] = $request->startedAt;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCheckRun',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/check_runs/update_check_run',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateCheckRunResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新检查运行记录.
     *
     * @param request - UpdateCheckRunRequest
     *
     * @returns UpdateCheckRunResponse
     *
     * @param UpdateCheckRunRequest $request
     *
     * @return UpdateCheckRunResponse
     */
    public function updateCheckRun($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateCheckRunWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新代码库文件.
     *
     * @param request - UpdateFileRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFileResponse
     *
     * @param string            $repositoryId
     * @param UpdateFileRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateFileResponse
     */
    public function updateFileWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->branchName) {
            @$body['branchName'] = $request->branchName;
        }

        if (null !== $request->commitMessage) {
            @$body['commitMessage'] = $request->commitMessage;
        }

        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->encoding) {
            @$body['encoding'] = $request->encoding;
        }

        if (null !== $request->newPath) {
            @$body['newPath'] = $request->newPath;
        }

        if (null !== $request->oldPath) {
            @$body['oldPath'] = $request->oldPath;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateFile',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/files/update',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新代码库文件.
     *
     * @param request - UpdateFileRequest
     *
     * @returns UpdateFileResponse
     *
     * @param string            $repositoryId
     * @param UpdateFileRequest $request
     *
     * @return UpdateFileResponse
     */
    public function updateFile($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFileWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 更新标签.
     *
     * @param request - UpdateFlowTagRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFlowTagResponse
     *
     * @param string               $organizationId
     * @param string               $id
     * @param UpdateFlowTagRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateFlowTagResponse
     */
    public function updateFlowTagWithOptions($organizationId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->color) {
            @$query['color'] = $request->color;
        }

        if (null !== $request->flowTagGroupId) {
            @$query['flowTagGroupId'] = $request->flowTagGroupId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateFlowTag',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/flow/tags/' . Url::percentEncode($id) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateFlowTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新标签.
     *
     * @param request - UpdateFlowTagRequest
     *
     * @returns UpdateFlowTagResponse
     *
     * @param string               $organizationId
     * @param string               $id
     * @param UpdateFlowTagRequest $request
     *
     * @return UpdateFlowTagResponse
     */
    public function updateFlowTag($organizationId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFlowTagWithOptions($organizationId, $id, $request, $headers, $runtime);
    }

    /**
     * 标签分类.
     *
     * @param request - UpdateFlowTagGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFlowTagGroupResponse
     *
     * @param string                    $organizationId
     * @param string                    $id
     * @param UpdateFlowTagGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateFlowTagGroupResponse
     */
    public function updateFlowTagGroupWithOptions($organizationId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateFlowTagGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/flow/tagGroups/' . Url::percentEncode($id) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateFlowTagGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 标签分类.
     *
     * @param request - UpdateFlowTagGroupRequest
     *
     * @returns UpdateFlowTagGroupResponse
     *
     * @param string                    $organizationId
     * @param string                    $id
     * @param UpdateFlowTagGroupRequest $request
     *
     * @return UpdateFlowTagGroupResponse
     */
    public function updateFlowTagGroup($organizationId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFlowTagGroupWithOptions($organizationId, $id, $request, $headers, $runtime);
    }

    /**
     * 更新单个代码组信息.
     *
     * @param request - UpdateGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGroupResponse
     *
     * @param UpdateGroupRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateGroupResponse
     */
    public function updateGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->avatarUrl) {
            @$body['avatarUrl'] = $request->avatarUrl;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->path) {
            @$body['path'] = $request->path;
        }

        if (null !== $request->pathWithNamespace) {
            @$body['pathWithNamespace'] = $request->pathWithNamespace;
        }

        if (null !== $request->visibilityLevel) {
            @$body['visibilityLevel'] = $request->visibilityLevel;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/groups/modify',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新单个代码组信息.
     *
     * @param request - UpdateGroupRequest
     *
     * @returns UpdateGroupResponse
     *
     * @param UpdateGroupRequest $request
     *
     * @return UpdateGroupResponse
     */
    public function updateGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改组成员.
     *
     * @param request - UpdateGroupMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateGroupMemberResponse
     *
     * @param string                   $groupId
     * @param UpdateGroupMemberRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateGroupMemberResponse
     */
    public function updateGroupMemberWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->aliyunPk) {
            @$query['aliyunPk'] = $request->aliyunPk;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->accessLevel) {
            @$body['accessLevel'] = $request->accessLevel;
        }

        if (null !== $request->memberType) {
            @$body['memberType'] = $request->memberType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateGroupMember',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/groups/' . Url::percentEncode($groupId) . '/members/update/aliyun_pk',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改组成员.
     *
     * @param request - UpdateGroupMemberRequest
     *
     * @returns UpdateGroupMemberResponse
     *
     * @param string                   $groupId
     * @param UpdateGroupMemberRequest $request
     *
     * @return UpdateGroupMemberResponse
     */
    public function updateGroupMember($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGroupMemberWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * 更新主机组.
     *
     * @param request - UpdateHostGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHostGroupResponse
     *
     * @param string                 $organizationId
     * @param string                 $id
     * @param UpdateHostGroupRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateHostGroupResponse
     */
    public function updateHostGroupWithOptions($organizationId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->aliyunRegion) {
            @$body['aliyunRegion'] = $request->aliyunRegion;
        }

        if (null !== $request->ecsLabelKey) {
            @$body['ecsLabelKey'] = $request->ecsLabelKey;
        }

        if (null !== $request->ecsLabelValue) {
            @$body['ecsLabelValue'] = $request->ecsLabelValue;
        }

        if (null !== $request->ecsType) {
            @$body['ecsType'] = $request->ecsType;
        }

        if (null !== $request->envId) {
            @$body['envId'] = $request->envId;
        }

        if (null !== $request->machineInfos) {
            @$body['machineInfos'] = $request->machineInfos;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->serviceConnectionId) {
            @$body['serviceConnectionId'] = $request->serviceConnectionId;
        }

        if (null !== $request->tagIds) {
            @$body['tagIds'] = $request->tagIds;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateHostGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/hostGroups/' . Url::percentEncode($id) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateHostGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新主机组.
     *
     * @param request - UpdateHostGroupRequest
     *
     * @returns UpdateHostGroupResponse
     *
     * @param string                 $organizationId
     * @param string                 $id
     * @param UpdateHostGroupRequest $request
     *
     * @return UpdateHostGroupResponse
     */
    public function updateHostGroup($organizationId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHostGroupWithOptions($organizationId, $id, $request, $headers, $runtime);
    }

    /**
     * 更新代码评审的标题和描述.
     *
     * @param request - UpdateMergeRequestRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMergeRequestResponse
     *
     * @param string                    $repositoryId
     * @param string                    $localId
     * @param UpdateMergeRequestRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateMergeRequestResponse
     */
    public function updateMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMergeRequest',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/' . Url::percentEncode($repositoryId) . '/merge_requests/' . Url::percentEncode($localId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMergeRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新代码评审的标题和描述.
     *
     * @param request - UpdateMergeRequestRequest
     *
     * @returns UpdateMergeRequestResponse
     *
     * @param string                    $repositoryId
     * @param string                    $localId
     * @param UpdateMergeRequestRequest $request
     *
     * @return UpdateMergeRequestResponse
     */
    public function updateMergeRequest($repositoryId, $localId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMergeRequestWithOptions($repositoryId, $localId, $request, $headers, $runtime);
    }

    /**
     * 更新代码评审的干系人.
     *
     * @param request - UpdateMergeRequestPersonnelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMergeRequestPersonnelResponse
     *
     * @param string                             $repositoryId
     * @param string                             $localId
     * @param string                             $personType
     * @param UpdateMergeRequestPersonnelRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateMergeRequestPersonnelResponse
     */
    public function updateMergeRequestPersonnelWithOptions($repositoryId, $localId, $personType, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->newUserIdList) {
            @$body['newUserIdList'] = $request->newUserIdList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMergeRequestPersonnel',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/' . Url::percentEncode($repositoryId) . '/merge_requests/' . Url::percentEncode($localId) . '/person/' . Url::percentEncode($personType) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMergeRequestPersonnelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新代码评审的干系人.
     *
     * @param request - UpdateMergeRequestPersonnelRequest
     *
     * @returns UpdateMergeRequestPersonnelResponse
     *
     * @param string                             $repositoryId
     * @param string                             $localId
     * @param string                             $personType
     * @param UpdateMergeRequestPersonnelRequest $request
     *
     * @return UpdateMergeRequestPersonnelResponse
     */
    public function updateMergeRequestPersonnel($repositoryId, $localId, $personType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMergeRequestPersonnelWithOptions($repositoryId, $localId, $personType, $request, $headers, $runtime);
    }

    /**
     * 当前用户加入的企业列表.
     *
     * @param request - UpdateOrganizationMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOrganizationMemberResponse
     *
     * @param string                          $organizationId
     * @param string                          $accountId
     * @param UpdateOrganizationMemberRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateOrganizationMemberResponse
     */
    public function updateOrganizationMemberWithOptions($organizationId, $accountId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationMemberName) {
            @$query['organizationMemberName'] = $request->organizationMemberName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateOrganizationMember',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/members/' . Url::percentEncode($accountId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateOrganizationMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 当前用户加入的企业列表.
     *
     * @param request - UpdateOrganizationMemberRequest
     *
     * @returns UpdateOrganizationMemberResponse
     *
     * @param string                          $organizationId
     * @param string                          $accountId
     * @param UpdateOrganizationMemberRequest $request
     *
     * @return UpdateOrganizationMemberResponse
     */
    public function updateOrganizationMember($organizationId, $accountId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateOrganizationMemberWithOptions($organizationId, $accountId, $request, $headers, $runtime);
    }

    /**
     * 更新流水线。
     *
     * @param request - UpdatePipelineRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePipelineResponse
     *
     * @param string                $organizationId
     * @param UpdatePipelineRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdatePipelineResponse
     */
    public function updatePipelineWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->pipelineId) {
            @$body['pipelineId'] = $request->pipelineId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePipeline',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新流水线。
     *
     * @param request - UpdatePipelineRequest
     *
     * @returns UpdatePipelineResponse
     *
     * @param string                $organizationId
     * @param UpdatePipelineRequest $request
     *
     * @return UpdatePipelineResponse
     */
    public function updatePipeline($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePipelineWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 删除标签.
     *
     * @param request - UpdatePipelineBaseInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePipelineBaseInfoResponse
     *
     * @param string                        $organizationId
     * @param string                        $pipelineId
     * @param UpdatePipelineBaseInfoRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdatePipelineBaseInfoResponse
     */
    public function updatePipelineBaseInfoWithOptions($organizationId, $pipelineId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->envId) {
            @$query['envId'] = $request->envId;
        }

        if (null !== $request->pipelineName) {
            @$query['pipelineName'] = $request->pipelineName;
        }

        if (null !== $request->tagList) {
            @$query['tagList'] = $request->tagList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePipelineBaseInfo',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelines/' . Url::percentEncode($pipelineId) . '/baseInfo',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePipelineBaseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除标签.
     *
     * @param request - UpdatePipelineBaseInfoRequest
     *
     * @returns UpdatePipelineBaseInfoResponse
     *
     * @param string                        $organizationId
     * @param string                        $pipelineId
     * @param UpdatePipelineBaseInfoRequest $request
     *
     * @return UpdatePipelineBaseInfoResponse
     */
    public function updatePipelineBaseInfo($organizationId, $pipelineId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePipelineBaseInfoWithOptions($organizationId, $pipelineId, $request, $headers, $runtime);
    }

    /**
     * 更新流水线分组.
     *
     * @param request - UpdatePipelineGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePipelineGroupResponse
     *
     * @param string                     $organizationId
     * @param string                     $groupId
     * @param UpdatePipelineGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdatePipelineGroupResponse
     */
    public function updatePipelineGroupWithOptions($organizationId, $groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePipelineGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/pipelineGroups/' . Url::percentEncode($groupId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePipelineGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新流水线分组.
     *
     * @param request - UpdatePipelineGroupRequest
     *
     * @returns UpdatePipelineGroupResponse
     *
     * @param string                     $organizationId
     * @param string                     $groupId
     * @param UpdatePipelineGroupRequest $request
     *
     * @return UpdatePipelineGroupResponse
     */
    public function updatePipelineGroup($organizationId, $groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePipelineGroupWithOptions($organizationId, $groupId, $request, $headers, $runtime);
    }

    /**
     * 更新项目属性与字段.
     *
     * @param request - UpdateProjectFieldRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProjectFieldResponse
     *
     * @param string                    $organizationId
     * @param string                    $identifier
     * @param UpdateProjectFieldRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateProjectFieldResponse
     */
    public function updateProjectFieldWithOptions($organizationId, $identifier, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->statusIdentifier) {
            @$body['statusIdentifier'] = $request->statusIdentifier;
        }

        if (null !== $request->updateBasicFieldRequestList) {
            @$body['updateBasicFieldRequestList'] = $request->updateBasicFieldRequestList;
        }

        if (null !== $request->updateForOpenApiList) {
            @$body['updateForOpenApiList'] = $request->updateForOpenApiList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProjectField',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/project/' . Url::percentEncode($identifier) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateProjectFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新项目属性与字段.
     *
     * @param request - UpdateProjectFieldRequest
     *
     * @returns UpdateProjectFieldResponse
     *
     * @param string                    $organizationId
     * @param string                    $identifier
     * @param UpdateProjectFieldRequest $request
     *
     * @return UpdateProjectFieldResponse
     */
    public function updateProjectField($organizationId, $identifier, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectFieldWithOptions($organizationId, $identifier, $request, $headers, $runtime);
    }

    /**
     * 更新代码库Label.
     *
     * @param request - UpdateProjectLabelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProjectLabelResponse
     *
     * @param string                    $labelId
     * @param UpdateProjectLabelRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateProjectLabelResponse
     */
    public function updateProjectLabelWithOptions($labelId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->repositoryIdentity) {
            @$query['repositoryIdentity'] = $request->repositoryIdentity;
        }

        $body = [];
        if (null !== $request->color) {
            @$body['color'] = $request->color;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProjectLabel',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/labels/' . Url::percentEncode($labelId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateProjectLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新代码库Label.
     *
     * @param request - UpdateProjectLabelRequest
     *
     * @returns UpdateProjectLabelResponse
     *
     * @param string                    $labelId
     * @param UpdateProjectLabelRequest $request
     *
     * @return UpdateProjectLabelResponse
     */
    public function updateProjectLabel($labelId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectLabelWithOptions($labelId, $request, $headers, $runtime);
    }

    /**
     * 添加项目成员.
     *
     * @param request - UpdateProjectMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProjectMemberResponse
     *
     * @param string                     $organizationId
     * @param string                     $projectId
     * @param UpdateProjectMemberRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateProjectMemberResponse
     */
    public function updateProjectMemberWithOptions($organizationId, $projectId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->roleIdentifier) {
            @$body['roleIdentifier'] = $request->roleIdentifier;
        }

        if (null !== $request->targetIdentifier) {
            @$body['targetIdentifier'] = $request->targetIdentifier;
        }

        if (null !== $request->targetType) {
            @$body['targetType'] = $request->targetType;
        }

        if (null !== $request->userIdentifier) {
            @$body['userIdentifier'] = $request->userIdentifier;
        }

        if (null !== $request->userType) {
            @$body['userType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProjectMember',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/projects/' . Url::percentEncode($projectId) . '/updateMember',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateProjectMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加项目成员.
     *
     * @param request - UpdateProjectMemberRequest
     *
     * @returns UpdateProjectMemberResponse
     *
     * @param string                     $organizationId
     * @param string                     $projectId
     * @param UpdateProjectMemberRequest $request
     *
     * @return UpdateProjectMemberResponse
     */
    public function updateProjectMember($organizationId, $projectId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProjectMemberWithOptions($organizationId, $projectId, $request, $headers, $runtime);
    }

    /**
     * 更改保护分支设置.
     *
     * @param request - UpdateProtectedBranchesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProtectedBranchesResponse
     *
     * @param string                         $repositoryId
     * @param string                         $id
     * @param UpdateProtectedBranchesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateProtectedBranchesResponse
     */
    public function updateProtectedBranchesWithOptions($repositoryId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->allowMergeRoles) {
            @$body['allowMergeRoles'] = $request->allowMergeRoles;
        }

        if (null !== $request->allowMergeUserIds) {
            @$body['allowMergeUserIds'] = $request->allowMergeUserIds;
        }

        if (null !== $request->allowPushRoles) {
            @$body['allowPushRoles'] = $request->allowPushRoles;
        }

        if (null !== $request->allowPushUserIds) {
            @$body['allowPushUserIds'] = $request->allowPushUserIds;
        }

        if (null !== $request->branch) {
            @$body['branch'] = $request->branch;
        }

        if (null !== $request->id) {
            @$body['id'] = $request->id;
        }

        if (null !== $request->mergeRequestSetting) {
            @$body['mergeRequestSetting'] = $request->mergeRequestSetting;
        }

        if (null !== $request->testSettingDTO) {
            @$body['testSettingDTO'] = $request->testSettingDTO;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProtectedBranches',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/' . Url::percentEncode($repositoryId) . '/protect_branches/' . Url::percentEncode($id) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateProtectedBranchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更改保护分支设置.
     *
     * @param request - UpdateProtectedBranchesRequest
     *
     * @returns UpdateProtectedBranchesResponse
     *
     * @param string                         $repositoryId
     * @param string                         $id
     * @param UpdateProtectedBranchesRequest $request
     *
     * @return UpdateProtectedBranchesResponse
     */
    public function updateProtectedBranches($repositoryId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProtectedBranchesWithOptions($repositoryId, $id, $request, $headers, $runtime);
    }

    /**
     * 推送评审模式开关.
     *
     * @param request - UpdatePushReviewOnOffRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePushReviewOnOffResponse
     *
     * @param string                       $repositoryId
     * @param UpdatePushReviewOnOffRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdatePushReviewOnOffResponse
     */
    public function updatePushReviewOnOffWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        if (null !== $request->trunkMode) {
            @$query['trunkMode'] = $request->trunkMode;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePushReviewOnOff',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/settings/trunk_mode',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePushReviewOnOffResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 推送评审模式开关.
     *
     * @param request - UpdatePushReviewOnOffRequest
     *
     * @returns UpdatePushReviewOnOffResponse
     *
     * @param string                       $repositoryId
     * @param UpdatePushReviewOnOffRequest $request
     *
     * @return UpdatePushReviewOnOffResponse
     */
    public function updatePushReviewOnOff($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePushReviewOnOffWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 更新推送规则.
     *
     * @param request - UpdatePushRuleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePushRuleResponse
     *
     * @param string                $repositoryId
     * @param string                $pushRuleId
     * @param UpdatePushRuleRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdatePushRuleResponse
     */
    public function updatePushRuleWithOptions($repositoryId, $pushRuleId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->ruleInfos) {
            @$body['ruleInfos'] = $request->ruleInfos;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePushRule',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v4/projects/' . Url::percentEncode($repositoryId) . '/push_rule/' . Url::percentEncode($pushRuleId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePushRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新推送规则.
     *
     * @param request - UpdatePushRuleRequest
     *
     * @returns UpdatePushRuleResponse
     *
     * @param string                $repositoryId
     * @param string                $pushRuleId
     * @param UpdatePushRuleRequest $request
     *
     * @return UpdatePushRuleResponse
     */
    public function updatePushRule($repositoryId, $pushRuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePushRuleWithOptions($repositoryId, $pushRuleId, $request, $headers, $runtime);
    }

    /**
     * 更新代码库名称、路径、描述、默认分支等设置.
     *
     * @param request - UpdateRepositoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRepositoryResponse
     *
     * @param string                  $repositoryId
     * @param UpdateRepositoryRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateRepositoryResponse
     */
    public function updateRepositoryWithOptions($repositoryId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->adminSettingLanguage) {
            @$body['adminSettingLanguage'] = $request->adminSettingLanguage;
        }

        if (null !== $request->avatar) {
            @$body['avatar'] = $request->avatar;
        }

        if (null !== $request->buildsEnabled) {
            @$body['buildsEnabled'] = $request->buildsEnabled;
        }

        if (null !== $request->checkEmail) {
            @$body['checkEmail'] = $request->checkEmail;
        }

        if (null !== $request->defaultBranch) {
            @$body['defaultBranch'] = $request->defaultBranch;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->id) {
            @$body['id'] = $request->id;
        }

        if (null !== $request->issuesEnabled) {
            @$body['issuesEnabled'] = $request->issuesEnabled;
        }

        if (null !== $request->mergeRequestsEnabled) {
            @$body['mergeRequestsEnabled'] = $request->mergeRequestsEnabled;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->openCloneDownloadControl) {
            @$body['openCloneDownloadControl'] = $request->openCloneDownloadControl;
        }

        if (null !== $request->path) {
            @$body['path'] = $request->path;
        }

        if (null !== $request->projectCloneDownloadMethodList) {
            @$body['projectCloneDownloadMethodList'] = $request->projectCloneDownloadMethodList;
        }

        if (null !== $request->projectCloneDownloadRoleList) {
            @$body['projectCloneDownloadRoleList'] = $request->projectCloneDownloadRoleList;
        }

        if (null !== $request->snippetsEnabled) {
            @$body['snippetsEnabled'] = $request->snippetsEnabled;
        }

        if (null !== $request->visibilityLevel) {
            @$body['visibilityLevel'] = $request->visibilityLevel;
        }

        if (null !== $request->wikiEnabled) {
            @$body['wikiEnabled'] = $request->wikiEnabled;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRepository',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateRepositoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新代码库名称、路径、描述、默认分支等设置.
     *
     * @param request - UpdateRepositoryRequest
     *
     * @returns UpdateRepositoryResponse
     *
     * @param string                  $repositoryId
     * @param UpdateRepositoryRequest $request
     *
     * @return UpdateRepositoryResponse
     */
    public function updateRepository($repositoryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRepositoryWithOptions($repositoryId, $request, $headers, $runtime);
    }

    /**
     * 修改代码库成员的权限（角色）.
     *
     * @param request - UpdateRepositoryMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRepositoryMemberResponse
     *
     * @param string                        $repositoryId
     * @param string                        $aliyunPk
     * @param UpdateRepositoryMemberRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateRepositoryMemberResponse
     */
    public function updateRepositoryMemberWithOptions($repositoryId, $aliyunPk, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessToken) {
            @$query['accessToken'] = $request->accessToken;
        }

        if (null !== $request->organizationId) {
            @$query['organizationId'] = $request->organizationId;
        }

        $body = [];
        if (null !== $request->accessLevel) {
            @$body['accessLevel'] = $request->accessLevel;
        }

        if (null !== $request->expireAt) {
            @$body['expireAt'] = $request->expireAt;
        }

        if (null !== $request->memberType) {
            @$body['memberType'] = $request->memberType;
        }

        if (null !== $request->relatedId) {
            @$body['relatedId'] = $request->relatedId;
        }

        if (null !== $request->relatedInfos) {
            @$body['relatedInfos'] = $request->relatedInfos;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRepositoryMember',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/repository/' . Url::percentEncode($repositoryId) . '/members/' . Url::percentEncode($aliyunPk) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateRepositoryMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改代码库成员的权限（角色）.
     *
     * @param request - UpdateRepositoryMemberRequest
     *
     * @returns UpdateRepositoryMemberResponse
     *
     * @param string                        $repositoryId
     * @param string                        $aliyunPk
     * @param UpdateRepositoryMemberRequest $request
     *
     * @return UpdateRepositoryMemberResponse
     */
    public function updateRepositoryMember($repositoryId, $aliyunPk, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRepositoryMemberWithOptions($repositoryId, $aliyunPk, $request, $headers, $runtime);
    }

    /**
     * 更新资源成员.
     *
     * @param request - UpdateResourceMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourceMemberResponse
     *
     * @param string                      $organizationId
     * @param string                      $resourceType
     * @param string                      $resourceId
     * @param string                      $accountId
     * @param UpdateResourceMemberRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateResourceMemberResponse
     */
    public function updateResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $accountId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->roleName) {
            @$body['roleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateResourceMember',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/' . Url::percentEncode($resourceType) . '/' . Url::percentEncode($resourceId) . '/members/' . Url::percentEncode($accountId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateResourceMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新资源成员.
     *
     * @param request - UpdateResourceMemberRequest
     *
     * @returns UpdateResourceMemberResponse
     *
     * @param string                      $organizationId
     * @param string                      $resourceType
     * @param string                      $resourceId
     * @param string                      $accountId
     * @param UpdateResourceMemberRequest $request
     *
     * @return UpdateResourceMemberResponse
     */
    public function updateResourceMember($organizationId, $resourceType, $resourceId, $accountId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceMemberWithOptions($organizationId, $resourceType, $resourceId, $accountId, $request, $headers, $runtime);
    }

    /**
     * 更新测试用例字段.
     *
     * @param request - UpdateTestCaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTestCaseResponse
     *
     * @param string                $organizationId
     * @param string                $testcaseIdentifier
     * @param UpdateTestCaseRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTestCaseResponse
     */
    public function updateTestCaseWithOptions($organizationId, $testcaseIdentifier, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->updateWorkitemPropertyRequest) {
            @$body['updateWorkitemPropertyRequest'] = $request->updateWorkitemPropertyRequest;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTestCase',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/testhub/testcase/' . Url::percentEncode($testcaseIdentifier) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTestCaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新测试用例字段.
     *
     * @param request - UpdateTestCaseRequest
     *
     * @returns UpdateTestCaseResponse
     *
     * @param string                $organizationId
     * @param string                $testcaseIdentifier
     * @param UpdateTestCaseRequest $request
     *
     * @return UpdateTestCaseResponse
     */
    public function updateTestCase($organizationId, $testcaseIdentifier, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTestCaseWithOptions($organizationId, $testcaseIdentifier, $request, $headers, $runtime);
    }

    /**
     * 更新了测试计划中测试用例的执行人与状态
     *
     * @param request - UpdateTestResultRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTestResultResponse
     *
     * @param string                  $organizationId
     * @param string                  $testPlanIdentifier
     * @param string                  $testcaseIdentifier
     * @param UpdateTestResultRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateTestResultResponse
     */
    public function updateTestResultWithOptions($organizationId, $testPlanIdentifier, $testcaseIdentifier, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->executor) {
            @$body['executor'] = $request->executor;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTestResult',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/testhub/testplan/' . Url::percentEncode($testPlanIdentifier) . '/testresult/' . Url::percentEncode($testcaseIdentifier) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateTestResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新了测试计划中测试用例的执行人与状态
     *
     * @param request - UpdateTestResultRequest
     *
     * @returns UpdateTestResultResponse
     *
     * @param string                  $organizationId
     * @param string                  $testPlanIdentifier
     * @param string                  $testcaseIdentifier
     * @param UpdateTestResultRequest $request
     *
     * @return UpdateTestResultResponse
     */
    public function updateTestResult($organizationId, $testPlanIdentifier, $testcaseIdentifier, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTestResultWithOptions($organizationId, $testPlanIdentifier, $testcaseIdentifier, $request, $headers, $runtime);
    }

    /**
     * 更新变量组.
     *
     * @param request - UpdateVariableGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVariableGroupResponse
     *
     * @param string                     $organizationId
     * @param string                     $id
     * @param UpdateVariableGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateVariableGroupResponse
     */
    public function updateVariableGroupWithOptions($organizationId, $id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->variables) {
            @$body['variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVariableGroup',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/variableGroups/' . Url::percentEncode($id) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVariableGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新变量组.
     *
     * @param request - UpdateVariableGroupRequest
     *
     * @returns UpdateVariableGroupResponse
     *
     * @param string                     $organizationId
     * @param string                     $id
     * @param UpdateVariableGroupRequest $request
     *
     * @return UpdateVariableGroupResponse
     */
    public function updateVariableGroup($organizationId, $id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateVariableGroupWithOptions($organizationId, $id, $request, $headers, $runtime);
    }

    /**
     * 更新工作项信息.
     *
     * @param request - UpdateWorkItemRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkItemResponse
     *
     * @param string                $organizationId
     * @param UpdateWorkItemRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateWorkItemResponse
     */
    public function updateWorkItemWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fieldType) {
            @$body['fieldType'] = $request->fieldType;
        }

        if (null !== $request->identifier) {
            @$body['identifier'] = $request->identifier;
        }

        if (null !== $request->propertyKey) {
            @$body['propertyKey'] = $request->propertyKey;
        }

        if (null !== $request->propertyValue) {
            @$body['propertyValue'] = $request->propertyValue;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkItem',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateWorkItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新工作项信息.
     *
     * @param request - UpdateWorkItemRequest
     *
     * @returns UpdateWorkItemResponse
     *
     * @param string                $organizationId
     * @param UpdateWorkItemRequest $request
     *
     * @return UpdateWorkItemResponse
     */
    public function updateWorkItem($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWorkItemWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 更新工作项评论.
     *
     * @param request - UpdateWorkitemCommentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkitemCommentResponse
     *
     * @param string                       $organizationId
     * @param UpdateWorkitemCommentRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateWorkitemCommentResponse
     */
    public function updateWorkitemCommentWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->commentId) {
            @$body['commentId'] = $request->commentId;
        }

        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->formatType) {
            @$body['formatType'] = $request->formatType;
        }

        if (null !== $request->workitemIdentifier) {
            @$body['workitemIdentifier'] = $request->workitemIdentifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkitemComment',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/commentUpdate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateWorkitemCommentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新工作项评论.
     *
     * @param request - UpdateWorkitemCommentRequest
     *
     * @returns UpdateWorkitemCommentResponse
     *
     * @param string                       $organizationId
     * @param UpdateWorkitemCommentRequest $request
     *
     * @return UpdateWorkitemCommentResponse
     */
    public function updateWorkitemComment($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWorkitemCommentWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 批量更新工作项字段信息.
     *
     * @param request - UpdateWorkitemFieldRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkitemFieldResponse
     *
     * @param string                     $organizationId
     * @param UpdateWorkitemFieldRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateWorkitemFieldResponse
     */
    public function updateWorkitemFieldWithOptions($organizationId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->updateWorkitemPropertyRequest) {
            @$body['updateWorkitemPropertyRequest'] = $request->updateWorkitemPropertyRequest;
        }

        if (null !== $request->workitemIdentifier) {
            @$body['workitemIdentifier'] = $request->workitemIdentifier;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkitemField',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitems/updateWorkitemField',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateWorkitemFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量更新工作项字段信息.
     *
     * @param request - UpdateWorkitemFieldRequest
     *
     * @returns UpdateWorkitemFieldResponse
     *
     * @param string                     $organizationId
     * @param UpdateWorkitemFieldRequest $request
     *
     * @return UpdateWorkitemFieldResponse
     */
    public function updateWorkitemField($organizationId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWorkitemFieldWithOptions($organizationId, $request, $headers, $runtime);
    }

    /**
     * 工作项附件创建.
     *
     * @param request - WorkitemAttachmentCreateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns WorkitemAttachmentCreateResponse
     *
     * @param string                          $organizationId
     * @param string                          $workitemIdentifier
     * @param WorkitemAttachmentCreateRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return WorkitemAttachmentCreateResponse
     */
    public function workitemAttachmentCreateWithOptions($organizationId, $workitemIdentifier, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->fileKey) {
            @$body['fileKey'] = $request->fileKey;
        }

        if (null !== $request->originalFilename) {
            @$body['originalFilename'] = $request->originalFilename;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'WorkitemAttachmentCreate',
            'version' => '2021-06-25',
            'protocol' => 'HTTPS',
            'pathname' => '/organization/' . Url::percentEncode($organizationId) . '/workitem/' . Url::percentEncode($workitemIdentifier) . '/attachment',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return WorkitemAttachmentCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 工作项附件创建.
     *
     * @param request - WorkitemAttachmentCreateRequest
     *
     * @returns WorkitemAttachmentCreateResponse
     *
     * @param string                          $organizationId
     * @param string                          $workitemIdentifier
     * @param WorkitemAttachmentCreateRequest $request
     *
     * @return WorkitemAttachmentCreateResponse
     */
    public function workitemAttachmentCreate($organizationId, $workitemIdentifier, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->workitemAttachmentCreateWithOptions($organizationId, $workitemIdentifier, $request, $headers, $runtime);
    }
}
