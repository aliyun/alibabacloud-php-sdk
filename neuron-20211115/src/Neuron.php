<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Neuron\V20211115\Models\AddOrQuitPdpLaneForServiceGroupRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\AddOrQuitPdpLaneForServiceGroupResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\AuditForkReviewRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\AuditForkReviewResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\AuditPbcInvokeReviewRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\AuditPbcInvokeReviewResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\AuthorizeProductsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\AuthorizeProductsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\BatchGrantRolesToDeveloperRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\BatchGrantRolesToDeveloperResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CheckDeveloperRoleRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CheckDeveloperRoleResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CompleteRegisterLibraryRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CompleteRegisterLibraryResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CompleteRegistrationPbcVersionResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ContinueDeploymentRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ContinueDeploymentResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateAssetWatchRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateAssetWatchResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateComponentRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateComponentResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateComponentTemplateRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateComponentTemplateResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateDeveloperRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateDeveloperResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateEnterpriseRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateEnterpriseResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateForkReviewRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateForkReviewResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateGreyPdpServiceGroupRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateGreyPdpServiceGroupResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateLibraryInstructionRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateLibraryInstructionResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateLibraryRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateLibraryResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateLibraryReviewRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateLibraryReviewResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateLibrarySchemaRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateLibrarySchemaResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorArmsAlertRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorArmsAlertResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorArmsAlertsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorArmsAlertsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorContactGroupRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorContactGroupResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorContactRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorContactResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorGroupMemberRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorGroupMemberResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorMqAlertRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorMqAlertResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorMqAlertsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorMqAlertsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorSlsAlertRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorSlsAlertResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorSlsAlertsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorSlsAlertsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorWebhookRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMonitorWebhookResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMqGroupRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMqGroupResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMqTopicRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateMqTopicResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePbcApiSchemaRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePbcApiSchemaResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePbcInstructionRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePbcInstructionResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePbcInvokeRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePbcInvokeResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePbcInvokeReviewRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePbcInvokeReviewResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePbcRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePbcResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePbcReviewRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePbcReviewResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePbcSchemaRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePbcSchemaResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePbcVersionRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePbcVersionResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePdpConfigRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePdpConfigResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePdpLaneRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePdpLaneResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePdpPbcRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePdpPbcResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePdpServiceGroupRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePdpServiceGroupResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePdpServiceRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePdpServiceResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePrivilegePopRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePrivilegePopResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePrivilegeRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreatePrivilegeResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateProductRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateProductResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateRepoForkRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateRepoForkResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateResourceRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateResourceResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateRoleRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateRoleResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateSettledRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\CreateSettledResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteComponentResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteComponentTemplateResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteDeveloperRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteDeveloperResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteEnterpriseResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteLibraryInstructionResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteLibraryResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteLibrarySchemaResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteMonitorAlertResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteMonitorContactGroupResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteMonitorContactResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteMonitorGroupMemberRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteMonitorGroupMemberResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteMonitorWebhookResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteMqGroupResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteMqTopicResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeletePbcInvokeRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeletePbcInvokeResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeletePdpConfigResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeletePdpLaneInletServiceResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeletePdpLaneResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeletePdpLaneServiceGroupResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeletePdpPbcResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeletePdpServiceGroupResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeletePdpServiceResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeletePrivilegeResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteProductRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteProductResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteResourceResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteRoleResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DeleteSettledResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DependLibraryRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\DependLibraryResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\FeedbackLibraryReviewRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\FeedbackLibraryReviewResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\FeedbackPbcReviewRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\FeedbackPbcReviewResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetBucEnterpriseResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetComponentResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetComponentTemplateResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetDeploymentResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetDeveloperEnterpriseResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetDeveloperResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetEnterpriseDeveloperResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetEnterpriseResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetForkReviewResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetHistoryDeveloperRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetHistoryDeveloperResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetLastDeploymentConfigRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetLastDeploymentConfigResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetLibraryDeveloperRepoMetricsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetLibraryInstructionResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetLibraryRepoMetricsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetLibraryResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetLibraryReviewResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetLibrarySchemaResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetLoginUserInfoResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetLogUrlRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetLogUrlResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetMonitorAlertHistoryRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetMonitorAlertHistoryResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetMonitorAlertResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetMonitorContactGroupResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetMonitorContactResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetMonitorWebhookResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetPbcApiSchemaResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetPbcDeveloperRepoMetricsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetPbcInstructionResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetPbcInvokeReviewResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetPbcRepoMetricsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetPbcResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetPbcReviewResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetPbcSchemaResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetPbcVersionResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetPdpConfigResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetPdpHistoryConfigResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetPdpLaneResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetPdpPbcResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetPdpServiceGroupResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetPdpServiceResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetProductResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetResourceResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetRoleResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetStackDetailRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetStackDetailResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetTokenRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetTokenResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetTraceDetailRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GetTraceDetailResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GrantRoleRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\GrantRoleResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListAuthorizeProductsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListAuthorizeProductsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListBucUserEnterpriseRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListBucUserEnterpriseResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListComponentsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListComponentsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListComponentTemplatesRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListComponentTemplatesResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListDependLibrarysRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListDependLibrarysResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListDeploymentsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListDeploymentsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListDeploymentsShrinkRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListDeveloperEnterprisesResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListDeveloperPbcsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListDeveloperPbcsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListDevelopersRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListDevelopersResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListDevelopersShrinkRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListDownstreamPbcResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListEnterprisesRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListEnterprisesResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListEnvInfosRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListEnvInfosResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListForkReviewsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListForkReviewsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListGrantedRolesRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListGrantedRolesResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListInvokePbcsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListLibraryReviewsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListLibraryReviewsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListLibrarysRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListLibrarysResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMarketsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMarketsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMetadataInfosRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMetadataInfosResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMicroServiceRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMicroServiceResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMonitorContactGroupsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMonitorContactGroupsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMonitorContactsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMonitorContactsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMonitorNotifyObjectsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMonitorNotifyObjectsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMonitorTasksRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMonitorTasksResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMonitorWebhooksRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMonitorWebhooksResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMqGroupMsgsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMqGroupMsgsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMqTopicMsgsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMqTopicMsgsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMqTopicsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMqTopicsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMqTopicSubsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListMqTopicSubsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPbcInvokeReviewsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPbcInvokeReviewsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPbcInvokesRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPbcInvokesResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPbcReviewsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPbcReviewsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPbcsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPbcsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPbcSubscribeRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPbcSubscribeResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPbcVersionBuildRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPbcVersionBuildResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPbcVersionNumbersResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpConfigsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpConfigsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpHistoryConfigsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpHistoryConfigsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpImageRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpImageResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpLanesForServiceGroupRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpLanesForServiceGroupResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpLanesForServiceGroupShrinkRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpLanesRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpLanesResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpLogsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpLogsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpPbcsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpPbcsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpPbcsShrinkRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpServiceGroupsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpServiceGroupsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpServiceGroupsShrinkRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpServicesRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpServicesResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPdpServicesShrinkRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPermissionResourceForFrontRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPermissionResourceForFrontResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPermissionResourcePopRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPermissionResourcePopResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPermissionResourceRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPermissionResourceResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPrivilegeByRoleRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListPrivilegeByRoleResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListProductEnvInfosRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListProductEnvInfosResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListProductEnvsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListProductEnvsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListProductsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListProductsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListResourcesRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListResourcesResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListReviewersResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListRolesRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListRolesResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListRolesShrinkRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListRuntimeTokensRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListRuntimeTokensResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListServerInstancesResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListServiceMetricsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListServiceMetricsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListSettledsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListSettledsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListSubscribePbcsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListUpstreamPbcResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListWatchAssetsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ListWatchAssetsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ObtainMqConsoleLinkRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\ObtainMqConsoleLinkResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\OpenServiceGroupForServiceRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\OpenServiceGroupForServiceResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\PreviewComponentCrdSchemaRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\PreviewComponentCrdSchemaResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\RegisterBucUserRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\RegisterBucUserResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\RemoveAssetWatchRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\RemoveAssetWatchResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\RemoveDependLibraryRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\RemoveDependLibraryResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\RevertPdpServiceRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\RevertPdpServiceResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\RevokeLibraryReviewRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\RevokeLibraryReviewResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\RevokePbcReviewRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\RevokePbcReviewResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\RevokeRoleRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\RevokeRoleResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\RollbackPdpServiceRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\RollbackPdpServiceResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\SearchAssetsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\SearchAssetsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\SearchAssetsShrinkRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\SearchPbcAssetsRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\SearchPbcAssetsResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\SearchTracesByPageRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\SearchTracesByPageResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\SendTTSVerifyLinkResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\SubscribePbcRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\SubscribePbcResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\SyncComponentTemplateConfigRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\SyncComponentTemplateConfigResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\TransferEnterpriseRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\TransferEnterpriseResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\TriggerDeploymentRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\TriggerDeploymentResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateComponentRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateComponentResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateComponentTemplateRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateComponentTemplateResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateDeveloperRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateDeveloperResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateEnterpriseRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateEnterpriseResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateLibraryInstructionRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateLibraryInstructionResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateLibraryRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateLibraryResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateLibrarySchemaRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateLibrarySchemaResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateMonitorArmsAlertRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateMonitorArmsAlertResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateMonitorContactGroupRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateMonitorContactGroupResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateMonitorContactRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateMonitorContactResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateMonitorMqAlertRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateMonitorMqAlertResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateMonitorSlsAlertRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateMonitorSlsAlertResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateMonitorWebhookRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateMonitorWebhookResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdatePbcApiSchemaRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdatePbcApiSchemaResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdatePbcInstructionRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdatePbcInstructionResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdatePbcSchemaRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdatePbcSchemaResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdatePbcVersionRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdatePbcVersionResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdatePdpConfigRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdatePdpConfigResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdatePdpLaneRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdatePdpLaneResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdatePdpPbcRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdatePdpPbcResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdatePdpServiceGroupRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdatePdpServiceGroupResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdatePdpServiceRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdatePdpServiceResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateProductRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateProductResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateResourceRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateResourceResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateRoleRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateRoleResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateSettledRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpdateSettledResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpShelfLibraryRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpShelfLibraryResponse;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpShelfPbcVersionRequest;
use AlibabaCloud\SDK\Neuron\V20211115\Models\UpShelfPbcVersionResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Neuron extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-northeast-1' => 'neuron.aliyuncs.com',
            'ap-northeast-2-pop' => 'neuron.aliyuncs.com',
            'ap-south-1' => 'neuron.aliyuncs.com',
            'ap-southeast-1' => 'neuron.aliyuncs.com',
            'ap-southeast-2' => 'neuron.aliyuncs.com',
            'ap-southeast-3' => 'neuron.aliyuncs.com',
            'ap-southeast-5' => 'neuron.aliyuncs.com',
            'cn-beijing' => 'neuron.aliyuncs.com',
            'cn-beijing-finance-1' => 'neuron.aliyuncs.com',
            'cn-beijing-finance-pop' => 'neuron.aliyuncs.com',
            'cn-beijing-gov-1' => 'neuron.aliyuncs.com',
            'cn-beijing-nu16-b01' => 'neuron.aliyuncs.com',
            'cn-chengdu' => 'neuron.aliyuncs.com',
            'cn-edge-1' => 'neuron.aliyuncs.com',
            'cn-fujian' => 'neuron.aliyuncs.com',
            'cn-haidian-cm12-c01' => 'neuron.aliyuncs.com',
            'cn-hangzhou-bj-b01' => 'neuron.aliyuncs.com',
            'cn-hangzhou-finance' => 'neuron.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'neuron.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'neuron.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'neuron.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'neuron.aliyuncs.com',
            'cn-hangzhou-test-306' => 'neuron.aliyuncs.com',
            'cn-hongkong' => 'neuron.aliyuncs.com',
            'cn-hongkong-finance-pop' => 'neuron.aliyuncs.com',
            'cn-huhehaote' => 'neuron.aliyuncs.com',
            'cn-huhehaote-nebula-1' => 'neuron.aliyuncs.com',
            'cn-north-2-gov-1' => 'neuron.aliyuncs.com',
            'cn-qingdao' => 'neuron.aliyuncs.com',
            'cn-qingdao-nebula' => 'neuron.aliyuncs.com',
            'cn-shanghai' => 'neuron.aliyuncs.com',
            'cn-shanghai-et15-b01' => 'neuron.aliyuncs.com',
            'cn-shanghai-et2-b01' => 'neuron.aliyuncs.com',
            'cn-shanghai-finance-1' => 'neuron.aliyuncs.com',
            'cn-shanghai-inner' => 'neuron.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'neuron.aliyuncs.com',
            'cn-shenzhen' => 'neuron.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'neuron.aliyuncs.com',
            'cn-shenzhen-inner' => 'neuron.aliyuncs.com',
            'cn-shenzhen-st4-d01' => 'neuron.aliyuncs.com',
            'cn-shenzhen-su18-b01' => 'neuron.aliyuncs.com',
            'cn-wuhan' => 'neuron.aliyuncs.com',
            'cn-wulanchabu' => 'neuron.aliyuncs.com',
            'cn-yushanfang' => 'neuron.aliyuncs.com',
            'cn-zhangbei' => 'neuron.aliyuncs.com',
            'cn-zhangbei-na61-b01' => 'neuron.aliyuncs.com',
            'cn-zhangjiakou-na62-a01' => 'neuron.aliyuncs.com',
            'cn-zhengzhou-nebula-1' => 'neuron.aliyuncs.com',
            'eu-central-1' => 'neuron.aliyuncs.com',
            'eu-west-1' => 'neuron.aliyuncs.com',
            'eu-west-1-oxs' => 'neuron.aliyuncs.com',
            'me-east-1' => 'neuron.aliyuncs.com',
            'rus-west-1-pop' => 'neuron.aliyuncs.com',
            'us-east-1' => 'neuron.aliyuncs.com',
            'us-west-1' => 'neuron.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('neuron', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 微服务分组加入或退出泳道.
     *
     * @param request - AddOrQuitPdpLaneForServiceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddOrQuitPdpLaneForServiceGroupResponse
     *
     * @param AddOrQuitPdpLaneForServiceGroupRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return AddOrQuitPdpLaneForServiceGroupResponse
     */
    public function addOrQuitPdpLaneForServiceGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'AddOrQuitPdpLaneForServiceGroup',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/lanes/commands/add-quit-lane',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AddOrQuitPdpLaneForServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 微服务分组加入或退出泳道.
     *
     * @param request - AddOrQuitPdpLaneForServiceGroupRequest
     *
     * @returns AddOrQuitPdpLaneForServiceGroupResponse
     *
     * @param AddOrQuitPdpLaneForServiceGroupRequest $request
     *
     * @return AddOrQuitPdpLaneForServiceGroupResponse
     */
    public function addOrQuitPdpLaneForServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addOrQuitPdpLaneForServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 审批审核记录.
     *
     * @param request - AuditForkReviewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuditForkReviewResponse
     *
     * @param string                 $reviewId
     * @param AuditForkReviewRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return AuditForkReviewResponse
     */
    public function auditForkReviewWithOptions($reviewId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'AuditForkReview',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/fork-reviews/' . Url::percentEncode($reviewId) . '/commands/audit',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AuditForkReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 审批审核记录.
     *
     * @param request - AuditForkReviewRequest
     *
     * @returns AuditForkReviewResponse
     *
     * @param string                 $reviewId
     * @param AuditForkReviewRequest $request
     *
     * @return AuditForkReviewResponse
     */
    public function auditForkReview($reviewId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->auditForkReviewWithOptions($reviewId, $request, $headers, $runtime);
    }

    /**
     * 审批审核记录.
     *
     * @param request - AuditPbcInvokeReviewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuditPbcInvokeReviewResponse
     *
     * @param string                      $reviewId
     * @param AuditPbcInvokeReviewRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return AuditPbcInvokeReviewResponse
     */
    public function auditPbcInvokeReviewWithOptions($reviewId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->approve) {
            @$body['approve'] = $request->approve;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AuditPbcInvokeReview',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-invoke-reviews/' . Url::percentEncode($reviewId) . '/commands/audit',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AuditPbcInvokeReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 审批审核记录.
     *
     * @param request - AuditPbcInvokeReviewRequest
     *
     * @returns AuditPbcInvokeReviewResponse
     *
     * @param string                      $reviewId
     * @param AuditPbcInvokeReviewRequest $request
     *
     * @return AuditPbcInvokeReviewResponse
     */
    public function auditPbcInvokeReview($reviewId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->auditPbcInvokeReviewWithOptions($reviewId, $request, $headers, $runtime);
    }

    /**
     * 公司授权产品
     *
     * @param request - AuthorizeProductsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeProductsResponse
     *
     * @param AuthorizeProductsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return AuthorizeProductsResponse
     */
    public function authorizeProductsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'AuthorizeProducts',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/products/commands/authorize',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AuthorizeProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 公司授权产品
     *
     * @param request - AuthorizeProductsRequest
     *
     * @returns AuthorizeProductsResponse
     *
     * @param AuthorizeProductsRequest $request
     *
     * @return AuthorizeProductsResponse
     */
    public function authorizeProducts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->authorizeProductsWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量给开发者授权.
     *
     * @param request - BatchGrantRolesToDeveloperRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGrantRolesToDeveloperResponse
     *
     * @param BatchGrantRolesToDeveloperRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return BatchGrantRolesToDeveloperResponse
     */
    public function batchGrantRolesToDeveloperWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'BatchGrantRolesToDeveloper',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/roles/commands/batch-grant-roles',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return BatchGrantRolesToDeveloperResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量给开发者授权.
     *
     * @param request - BatchGrantRolesToDeveloperRequest
     *
     * @returns BatchGrantRolesToDeveloperResponse
     *
     * @param BatchGrantRolesToDeveloperRequest $request
     *
     * @return BatchGrantRolesToDeveloperResponse
     */
    public function batchGrantRolesToDeveloper($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchGrantRolesToDeveloperWithOptions($request, $headers, $runtime);
    }

    /**
     * 校验用户角色.
     *
     * @param request - CheckDeveloperRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckDeveloperRoleResponse
     *
     * @param CheckDeveloperRoleRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CheckDeveloperRoleResponse
     */
    public function checkDeveloperRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountId) {
            @$body['accountId'] = $request->accountId;
        }

        if (null !== $request->companyId) {
            @$body['companyId'] = $request->companyId;
        }

        if (null !== $request->platform) {
            @$body['platform'] = $request->platform;
        }

        if (null !== $request->roleName) {
            @$body['roleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckDeveloperRole',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/roles/commands/check-role',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CheckDeveloperRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 校验用户角色.
     *
     * @param request - CheckDeveloperRoleRequest
     *
     * @returns CheckDeveloperRoleResponse
     *
     * @param CheckDeveloperRoleRequest $request
     *
     * @return CheckDeveloperRoleResponse
     */
    public function checkDeveloperRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkDeveloperRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * 完成二方包注册.
     *
     * @param request - CompleteRegisterLibraryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompleteRegisterLibraryResponse
     *
     * @param string                         $id
     * @param CompleteRegisterLibraryRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CompleteRegisterLibraryResponse
     */
    public function completeRegisterLibraryWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dependIntegral) {
            @$body['dependIntegral'] = $request->dependIntegral;
        }

        if (null !== $request->marketId) {
            @$body['marketId'] = $request->marketId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CompleteRegisterLibrary',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/librarys/' . Url::percentEncode($id) . '/commands/complete-register',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CompleteRegisterLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 完成二方包注册.
     *
     * @param request - CompleteRegisterLibraryRequest
     *
     * @returns CompleteRegisterLibraryResponse
     *
     * @param string                         $id
     * @param CompleteRegisterLibraryRequest $request
     *
     * @return CompleteRegisterLibraryResponse
     */
    public function completeRegisterLibrary($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->completeRegisterLibraryWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * 完成pbc版本注册.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompleteRegistrationPbcVersionResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CompleteRegistrationPbcVersionResponse
     */
    public function completeRegistrationPbcVersionWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'CompleteRegistrationPbcVersion',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-versions/' . Url::percentEncode($id) . '/commands/complete-register',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CompleteRegistrationPbcVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 完成pbc版本注册.
     *
     * @returns CompleteRegistrationPbcVersionResponse
     *
     * @param string $id
     *
     * @return CompleteRegistrationPbcVersionResponse
     */
    public function completeRegistrationPbcVersion($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->completeRegistrationPbcVersionWithOptions($id, $headers, $runtime);
    }

    /**
     * 更新服务信息.
     *
     * @param request - ContinueDeploymentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ContinueDeploymentResponse
     *
     * @param ContinueDeploymentRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ContinueDeploymentResponse
     */
    public function continueDeploymentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'ContinueDeployment',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/deployments/commands/continue',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ContinueDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新服务信息.
     *
     * @param request - ContinueDeploymentRequest
     *
     * @returns ContinueDeploymentResponse
     *
     * @param ContinueDeploymentRequest $request
     *
     * @return ContinueDeploymentResponse
     */
    public function continueDeployment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->continueDeploymentWithOptions($request, $headers, $runtime);
    }

    /**
     * 关注资产.
     *
     * @param request - CreateAssetWatchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAssetWatchResponse
     *
     * @param CreateAssetWatchRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAssetWatchResponse
     */
    public function createAssetWatchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateAssetWatch',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/asset-watchs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateAssetWatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关注资产.
     *
     * @param request - CreateAssetWatchRequest
     *
     * @returns CreateAssetWatchResponse
     *
     * @param CreateAssetWatchRequest $request
     *
     * @return CreateAssetWatchResponse
     */
    public function createAssetWatch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAssetWatchWithOptions($request, $headers, $runtime);
    }

    /**
     * 新增组件.
     *
     * @param request - CreateComponentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateComponentResponse
     *
     * @param CreateComponentRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateComponentResponse
     */
    public function createComponentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateComponent',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-resource/v1/components',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateComponentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增组件.
     *
     * @param request - CreateComponentRequest
     *
     * @returns CreateComponentResponse
     *
     * @param CreateComponentRequest $request
     *
     * @return CreateComponentResponse
     */
    public function createComponent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createComponentWithOptions($request, $headers, $runtime);
    }

    /**
     * 新增组件模板
     *
     * @param request - CreateComponentTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateComponentTemplateResponse
     *
     * @param CreateComponentTemplateRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateComponentTemplateResponse
     */
    public function createComponentTemplateWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateComponentTemplate',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-resource/v1/component-templates',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateComponentTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增组件模板
     *
     * @param request - CreateComponentTemplateRequest
     *
     * @returns CreateComponentTemplateResponse
     *
     * @param CreateComponentTemplateRequest $request
     *
     * @return CreateComponentTemplateResponse
     */
    public function createComponentTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createComponentTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * 注册开发者.
     *
     * @param request - CreateDeveloperRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDeveloperResponse
     *
     * @param CreateDeveloperRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDeveloperResponse
     */
    public function createDeveloperWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateDeveloper',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/developers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDeveloperResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 注册开发者.
     *
     * @param request - CreateDeveloperRequest
     *
     * @returns CreateDeveloperResponse
     *
     * @param CreateDeveloperRequest $request
     *
     * @return CreateDeveloperResponse
     */
    public function createDeveloper($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDeveloperWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建公司.
     *
     * @param request - CreateEnterpriseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEnterpriseResponse
     *
     * @param CreateEnterpriseRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateEnterpriseResponse
     */
    public function createEnterpriseWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateEnterprise',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/enterprises',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateEnterpriseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建公司.
     *
     * @param request - CreateEnterpriseRequest
     *
     * @returns CreateEnterpriseResponse
     *
     * @param CreateEnterpriseRequest $request
     *
     * @return CreateEnterpriseResponse
     */
    public function createEnterprise($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEnterpriseWithOptions($request, $headers, $runtime);
    }

    /**
     * 申请代码Fork(创建代码Fork的审批流程).
     *
     * @param request - CreateForkReviewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateForkReviewResponse
     *
     * @param CreateForkReviewRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateForkReviewResponse
     */
    public function createForkReviewWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateForkReview',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/fork-reviews',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateForkReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 申请代码Fork(创建代码Fork的审批流程).
     *
     * @param request - CreateForkReviewRequest
     *
     * @returns CreateForkReviewResponse
     *
     * @param CreateForkReviewRequest $request
     *
     * @return CreateForkReviewResponse
     */
    public function createForkReview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createForkReviewWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建服务灰度分组.
     *
     * @param request - CreateGreyPdpServiceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGreyPdpServiceGroupResponse
     *
     * @param CreateGreyPdpServiceGroupRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateGreyPdpServiceGroupResponse
     */
    public function createGreyPdpServiceGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateGreyPdpServiceGroup',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/groups/grey',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateGreyPdpServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建服务灰度分组.
     *
     * @param request - CreateGreyPdpServiceGroupRequest
     *
     * @returns CreateGreyPdpServiceGroupResponse
     *
     * @param CreateGreyPdpServiceGroupRequest $request
     *
     * @return CreateGreyPdpServiceGroupResponse
     */
    public function createGreyPdpServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGreyPdpServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建二方包.
     *
     * @param request - CreateLibraryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLibraryResponse
     *
     * @param CreateLibraryRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateLibraryResponse
     */
    public function createLibraryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateLibrary',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/librarys',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建二方包.
     *
     * @param request - CreateLibraryRequest
     *
     * @returns CreateLibraryResponse
     *
     * @param CreateLibraryRequest $request
     *
     * @return CreateLibraryResponse
     */
    public function createLibrary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLibraryWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建二方包使用说明文档.
     *
     * @param request - CreateLibraryInstructionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLibraryInstructionResponse
     *
     * @param string                          $libraryId
     * @param CreateLibraryInstructionRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateLibraryInstructionResponse
     */
    public function createLibraryInstructionWithOptions($libraryId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->companyId) {
            @$body['companyId'] = $request->companyId;
        }

        if (null !== $request->document) {
            @$body['document'] = $request->document;
        }

        if (null !== $request->id) {
            @$body['id'] = $request->id;
        }

        if (null !== $request->libraryId) {
            @$body['libraryId'] = $request->libraryId;
        }

        if (null !== $request->marketId) {
            @$body['marketId'] = $request->marketId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLibraryInstruction',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/librarys/' . Url::percentEncode($libraryId) . '/instructions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateLibraryInstructionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建二方包使用说明文档.
     *
     * @param request - CreateLibraryInstructionRequest
     *
     * @returns CreateLibraryInstructionResponse
     *
     * @param string                          $libraryId
     * @param CreateLibraryInstructionRequest $request
     *
     * @return CreateLibraryInstructionResponse
     */
    public function createLibraryInstruction($libraryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLibraryInstructionWithOptions($libraryId, $request, $headers, $runtime);
    }

    /**
     * 提交审核.
     *
     * @param request - CreateLibraryReviewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLibraryReviewResponse
     *
     * @param CreateLibraryReviewRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateLibraryReviewResponse
     */
    public function createLibraryReviewWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateLibraryReview',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/library-reviews',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateLibraryReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交审核.
     *
     * @param request - CreateLibraryReviewRequest
     *
     * @returns CreateLibraryReviewResponse
     *
     * @param CreateLibraryReviewRequest $request
     *
     * @return CreateLibraryReviewResponse
     */
    public function createLibraryReview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLibraryReviewWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建二方包规格
     *
     * @param request - CreateLibrarySchemaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLibrarySchemaResponse
     *
     * @param CreateLibrarySchemaRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateLibrarySchemaResponse
     */
    public function createLibrarySchemaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateLibrarySchema',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/librarys/schemas',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateLibrarySchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建二方包规格
     *
     * @param request - CreateLibrarySchemaRequest
     *
     * @returns CreateLibrarySchemaResponse
     *
     * @param CreateLibrarySchemaRequest $request
     *
     * @return CreateLibrarySchemaResponse
     */
    public function createLibrarySchema($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createLibrarySchemaWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建应用报警任务
     *
     * @param request - CreateMonitorArmsAlertRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitorArmsAlertResponse
     *
     * @param CreateMonitorArmsAlertRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateMonitorArmsAlertResponse
     */
    public function createMonitorArmsAlertWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateMonitorArmsAlert',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/alert/commands/createMonitorArmsAlert',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMonitorArmsAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建应用报警任务
     *
     * @param request - CreateMonitorArmsAlertRequest
     *
     * @returns CreateMonitorArmsAlertResponse
     *
     * @param CreateMonitorArmsAlertRequest $request
     *
     * @return CreateMonitorArmsAlertResponse
     */
    public function createMonitorArmsAlert($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMonitorArmsAlertWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量新增应用报警任务
     *
     * @param request - CreateMonitorArmsAlertsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitorArmsAlertsResponse
     *
     * @param CreateMonitorArmsAlertsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateMonitorArmsAlertsResponse
     */
    public function createMonitorArmsAlertsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateMonitorArmsAlerts',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/alert/commands/createMonitorArmsAlerts',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMonitorArmsAlertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量新增应用报警任务
     *
     * @param request - CreateMonitorArmsAlertsRequest
     *
     * @returns CreateMonitorArmsAlertsResponse
     *
     * @param CreateMonitorArmsAlertsRequest $request
     *
     * @return CreateMonitorArmsAlertsResponse
     */
    public function createMonitorArmsAlerts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMonitorArmsAlertsWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建联系人.
     *
     * @param request - CreateMonitorContactRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitorContactResponse
     *
     * @param CreateMonitorContactRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateMonitorContactResponse
     */
    public function createMonitorContactWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateMonitorContact',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/contact',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMonitorContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建联系人.
     *
     * @param request - CreateMonitorContactRequest
     *
     * @returns CreateMonitorContactResponse
     *
     * @param CreateMonitorContactRequest $request
     *
     * @return CreateMonitorContactResponse
     */
    public function createMonitorContact($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMonitorContactWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建联系人组.
     *
     * @param request - CreateMonitorContactGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitorContactGroupResponse
     *
     * @param CreateMonitorContactGroupRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateMonitorContactGroupResponse
     */
    public function createMonitorContactGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateMonitorContactGroup',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/group',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMonitorContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建联系人组.
     *
     * @param request - CreateMonitorContactGroupRequest
     *
     * @returns CreateMonitorContactGroupResponse
     *
     * @param CreateMonitorContactGroupRequest $request
     *
     * @return CreateMonitorContactGroupResponse
     */
    public function createMonitorContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMonitorContactGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 加入联系人.
     *
     * @param request - CreateMonitorGroupMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitorGroupMemberResponse
     *
     * @param string                          $groupId
     * @param CreateMonitorGroupMemberRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateMonitorGroupMemberResponse
     */
    public function createMonitorGroupMemberWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateMonitorGroupMember',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/group/' . Url::percentEncode($groupId) . '/commands/create-member',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateMonitorGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 加入联系人.
     *
     * @param request - CreateMonitorGroupMemberRequest
     *
     * @returns CreateMonitorGroupMemberResponse
     *
     * @param string                          $groupId
     * @param CreateMonitorGroupMemberRequest $request
     *
     * @return CreateMonitorGroupMemberResponse
     */
    public function createMonitorGroupMember($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMonitorGroupMemberWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * 创建MQ报警任务
     *
     * @param request - CreateMonitorMqAlertRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitorMqAlertResponse
     *
     * @param CreateMonitorMqAlertRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateMonitorMqAlertResponse
     */
    public function createMonitorMqAlertWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateMonitorMqAlert',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/alert/commands/createMonitorMqAlert',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMonitorMqAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建MQ报警任务
     *
     * @param request - CreateMonitorMqAlertRequest
     *
     * @returns CreateMonitorMqAlertResponse
     *
     * @param CreateMonitorMqAlertRequest $request
     *
     * @return CreateMonitorMqAlertResponse
     */
    public function createMonitorMqAlert($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMonitorMqAlertWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量新增MQ报警任务
     *
     * @param request - CreateMonitorMqAlertsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitorMqAlertsResponse
     *
     * @param CreateMonitorMqAlertsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateMonitorMqAlertsResponse
     */
    public function createMonitorMqAlertsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateMonitorMqAlerts',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/alert/commands/createMonitorMqAlerts',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMonitorMqAlertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量新增MQ报警任务
     *
     * @param request - CreateMonitorMqAlertsRequest
     *
     * @returns CreateMonitorMqAlertsResponse
     *
     * @param CreateMonitorMqAlertsRequest $request
     *
     * @return CreateMonitorMqAlertsResponse
     */
    public function createMonitorMqAlerts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMonitorMqAlertsWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建日志报警任务
     *
     * @param request - CreateMonitorSlsAlertRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitorSlsAlertResponse
     *
     * @param CreateMonitorSlsAlertRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateMonitorSlsAlertResponse
     */
    public function createMonitorSlsAlertWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateMonitorSlsAlert',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/alert/commands/createMonitorSlsAlert',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMonitorSlsAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建日志报警任务
     *
     * @param request - CreateMonitorSlsAlertRequest
     *
     * @returns CreateMonitorSlsAlertResponse
     *
     * @param CreateMonitorSlsAlertRequest $request
     *
     * @return CreateMonitorSlsAlertResponse
     */
    public function createMonitorSlsAlert($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMonitorSlsAlertWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量新增建报警任务
     *
     * @param request - CreateMonitorSlsAlertsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitorSlsAlertsResponse
     *
     * @param CreateMonitorSlsAlertsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateMonitorSlsAlertsResponse
     */
    public function createMonitorSlsAlertsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateMonitorSlsAlerts',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/alert/commands/createMonitorSlsAlerts',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMonitorSlsAlertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量新增建报警任务
     *
     * @param request - CreateMonitorSlsAlertsRequest
     *
     * @returns CreateMonitorSlsAlertsResponse
     *
     * @param CreateMonitorSlsAlertsRequest $request
     *
     * @return CreateMonitorSlsAlertsResponse
     */
    public function createMonitorSlsAlerts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMonitorSlsAlertsWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建webhook.
     *
     * @param request - CreateMonitorWebhookRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitorWebhookResponse
     *
     * @param CreateMonitorWebhookRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateMonitorWebhookResponse
     */
    public function createMonitorWebhookWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateMonitorWebhook',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/webhook',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMonitorWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建webhook.
     *
     * @param request - CreateMonitorWebhookRequest
     *
     * @returns CreateMonitorWebhookResponse
     *
     * @param CreateMonitorWebhookRequest $request
     *
     * @return CreateMonitorWebhookResponse
     */
    public function createMonitorWebhook($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMonitorWebhookWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建Group.
     *
     * @param request - CreateMqGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMqGroupResponse
     *
     * @param CreateMqGroupRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateMqGroupResponse
     */
    public function createMqGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateMqGroup',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/mq/group',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMqGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Group.
     *
     * @param request - CreateMqGroupRequest
     *
     * @returns CreateMqGroupResponse
     *
     * @param CreateMqGroupRequest $request
     *
     * @return CreateMqGroupResponse
     */
    public function createMqGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMqGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建Topic.
     *
     * @param request - CreateMqTopicRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMqTopicResponse
     *
     * @param CreateMqTopicRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateMqTopicResponse
     */
    public function createMqTopicWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateMqTopic',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/mq/topic',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateMqTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Topic.
     *
     * @param request - CreateMqTopicRequest
     *
     * @returns CreateMqTopicResponse
     *
     * @param CreateMqTopicRequest $request
     *
     * @return CreateMqTopicResponse
     */
    public function createMqTopic($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMqTopicWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建PBC.
     *
     * @param request - CreatePbcRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePbcResponse
     *
     * @param CreatePbcRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreatePbcResponse
     */
    public function createPbcWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreatePbc',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbcs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePbcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建PBC.
     *
     * @param request - CreatePbcRequest
     *
     * @returns CreatePbcResponse
     *
     * @param CreatePbcRequest $request
     *
     * @return CreatePbcResponse
     */
    public function createPbc($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPbcWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建PBC的Api规格
     *
     * @param request - CreatePbcApiSchemaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePbcApiSchemaResponse
     *
     * @param CreatePbcApiSchemaRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreatePbcApiSchemaResponse
     */
    public function createPbcApiSchemaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreatePbcApiSchema',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-versions/api-schemas',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePbcApiSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建PBC的Api规格
     *
     * @param request - CreatePbcApiSchemaRequest
     *
     * @returns CreatePbcApiSchemaResponse
     *
     * @param CreatePbcApiSchemaRequest $request
     *
     * @return CreatePbcApiSchemaResponse
     */
    public function createPbcApiSchema($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPbcApiSchemaWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建PBC使用说明文档.
     *
     * @param request - CreatePbcInstructionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePbcInstructionResponse
     *
     * @param CreatePbcInstructionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreatePbcInstructionResponse
     */
    public function createPbcInstructionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreatePbcInstruction',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-versions/instructions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePbcInstructionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建PBC使用说明文档.
     *
     * @param request - CreatePbcInstructionRequest
     *
     * @returns CreatePbcInstructionResponse
     *
     * @param CreatePbcInstructionRequest $request
     *
     * @return CreatePbcInstructionResponse
     */
    public function createPbcInstruction($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPbcInstructionWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建服务调用记录.
     *
     * @param request - CreatePbcInvokeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePbcInvokeResponse
     *
     * @param CreatePbcInvokeRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreatePbcInvokeResponse
     */
    public function createPbcInvokeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreatePbcInvoke',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-invokes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePbcInvokeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建服务调用记录.
     *
     * @param request - CreatePbcInvokeRequest
     *
     * @returns CreatePbcInvokeResponse
     *
     * @param CreatePbcInvokeRequest $request
     *
     * @return CreatePbcInvokeResponse
     */
    public function createPbcInvoke($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPbcInvokeWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建PBC服务调用审核.
     *
     * @param request - CreatePbcInvokeReviewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePbcInvokeReviewResponse
     *
     * @param CreatePbcInvokeReviewRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreatePbcInvokeReviewResponse
     */
    public function createPbcInvokeReviewWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreatePbcInvokeReview',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-invoke-reviews',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePbcInvokeReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建PBC服务调用审核.
     *
     * @param request - CreatePbcInvokeReviewRequest
     *
     * @returns CreatePbcInvokeReviewResponse
     *
     * @param CreatePbcInvokeReviewRequest $request
     *
     * @return CreatePbcInvokeReviewResponse
     */
    public function createPbcInvokeReview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPbcInvokeReviewWithOptions($request, $headers, $runtime);
    }

    /**
     * 提交审核.
     *
     * @param request - CreatePbcReviewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePbcReviewResponse
     *
     * @param CreatePbcReviewRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreatePbcReviewResponse
     */
    public function createPbcReviewWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreatePbcReview',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-reviews',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePbcReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交审核.
     *
     * @param request - CreatePbcReviewRequest
     *
     * @returns CreatePbcReviewResponse
     *
     * @param CreatePbcReviewRequest $request
     *
     * @return CreatePbcReviewResponse
     */
    public function createPbcReview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPbcReviewWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建PBC规格
     *
     * @param request - CreatePbcSchemaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePbcSchemaResponse
     *
     * @param CreatePbcSchemaRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreatePbcSchemaResponse
     */
    public function createPbcSchemaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreatePbcSchema',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-versions/schemas',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePbcSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建PBC规格
     *
     * @param request - CreatePbcSchemaRequest
     *
     * @returns CreatePbcSchemaResponse
     *
     * @param CreatePbcSchemaRequest $request
     *
     * @return CreatePbcSchemaResponse
     */
    public function createPbcSchema($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPbcSchemaWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建PBC版本.
     *
     * @param request - CreatePbcVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePbcVersionResponse
     *
     * @param CreatePbcVersionRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreatePbcVersionResponse
     */
    public function createPbcVersionWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreatePbcVersion',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-versions',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePbcVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建PBC版本.
     *
     * @param request - CreatePbcVersionRequest
     *
     * @returns CreatePbcVersionResponse
     *
     * @param CreatePbcVersionRequest $request
     *
     * @return CreatePbcVersionResponse
     */
    public function createPbcVersion($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPbcVersionWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建配置.
     *
     * @param request - CreatePdpConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePdpConfigResponse
     *
     * @param CreatePdpConfigRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreatePdpConfigResponse
     */
    public function createPdpConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreatePdpConfig',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/configs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePdpConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建配置.
     *
     * @param request - CreatePdpConfigRequest
     *
     * @returns CreatePdpConfigResponse
     *
     * @param CreatePdpConfigRequest $request
     *
     * @return CreatePdpConfigResponse
     */
    public function createPdpConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPdpConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建泳道.
     *
     * @param request - CreatePdpLaneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePdpLaneResponse
     *
     * @param CreatePdpLaneRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreatePdpLaneResponse
     */
    public function createPdpLaneWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreatePdpLane',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/lanes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePdpLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建泳道.
     *
     * @param request - CreatePdpLaneRequest
     *
     * @returns CreatePdpLaneResponse
     *
     * @param CreatePdpLaneRequest $request
     *
     * @return CreatePdpLaneResponse
     */
    public function createPdpLane($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPdpLaneWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建PdpPbc.
     *
     * @param request - CreatePdpPbcRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePdpPbcResponse
     *
     * @param CreatePdpPbcRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreatePdpPbcResponse
     */
    public function createPdpPbcWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreatePdpPbc',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/pbcs',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePdpPbcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建PdpPbc.
     *
     * @param request - CreatePdpPbcRequest
     *
     * @returns CreatePdpPbcResponse
     *
     * @param CreatePdpPbcRequest $request
     *
     * @return CreatePdpPbcResponse
     */
    public function createPdpPbc($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPdpPbcWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建服务
     *
     * @param request - CreatePdpServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePdpServiceResponse
     *
     * @param CreatePdpServiceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreatePdpServiceResponse
     */
    public function createPdpServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreatePdpService',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/services',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePdpServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建服务
     *
     * @param request - CreatePdpServiceRequest
     *
     * @returns CreatePdpServiceResponse
     *
     * @param CreatePdpServiceRequest $request
     *
     * @return CreatePdpServiceResponse
     */
    public function createPdpService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPdpServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建服务分组.
     *
     * @param request - CreatePdpServiceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePdpServiceGroupResponse
     *
     * @param CreatePdpServiceGroupRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreatePdpServiceGroupResponse
     */
    public function createPdpServiceGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreatePdpServiceGroup',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/groups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePdpServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建服务分组.
     *
     * @param request - CreatePdpServiceGroupRequest
     *
     * @returns CreatePdpServiceGroupResponse
     *
     * @param CreatePdpServiceGroupRequest $request
     *
     * @return CreatePdpServiceGroupResponse
     */
    public function createPdpServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPdpServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 给角色添加权限.
     *
     * @param request - CreatePrivilegeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePrivilegeResponse
     *
     * @param string                 $roleId
     * @param CreatePrivilegeRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreatePrivilegeResponse
     */
    public function createPrivilegeWithOptions($roleId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreatePrivilege',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/roles/' . Url::percentEncode($roleId) . '/privileges',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 给角色添加权限.
     *
     * @param request - CreatePrivilegeRequest
     *
     * @returns CreatePrivilegeResponse
     *
     * @param string                 $roleId
     * @param CreatePrivilegeRequest $request
     *
     * @return CreatePrivilegeResponse
     */
    public function createPrivilege($roleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPrivilegeWithOptions($roleId, $request, $headers, $runtime);
    }

    /**
     * 给角色添加权限.
     *
     * @param request - CreatePrivilegePopRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePrivilegePopResponse
     *
     * @param string                    $roleId
     * @param CreatePrivilegePopRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreatePrivilegePopResponse
     */
    public function createPrivilegePopWithOptions($roleId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreatePrivilegePop',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/roles/' . Url::percentEncode($roleId) . '/privileges/pop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreatePrivilegePopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 给角色添加权限.
     *
     * @param request - CreatePrivilegePopRequest
     *
     * @returns CreatePrivilegePopResponse
     *
     * @param string                    $roleId
     * @param CreatePrivilegePopRequest $request
     *
     * @return CreatePrivilegePopResponse
     */
    public function createPrivilegePop($roleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createPrivilegePopWithOptions($roleId, $request, $headers, $runtime);
    }

    /**
     * 创建产品
     *
     * @param request - CreateProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProductResponse
     *
     * @param CreateProductRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProductResponse
     */
    public function createProductWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateProduct',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/products',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建产品
     *
     * @param request - CreateProductRequest
     *
     * @returns CreateProductResponse
     *
     * @param CreateProductRequest $request
     *
     * @return CreateProductResponse
     */
    public function createProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProductWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建代码库Fork记录.
     *
     * @param request - CreateRepoForkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRepoForkResponse
     *
     * @param CreateRepoForkRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateRepoForkResponse
     */
    public function createRepoForkWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateRepoFork',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/repo-forks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRepoForkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建代码库Fork记录.
     *
     * @param request - CreateRepoForkRequest
     *
     * @returns CreateRepoForkResponse
     *
     * @param CreateRepoForkRequest $request
     *
     * @return CreateRepoForkResponse
     */
    public function createRepoFork($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRepoForkWithOptions($request, $headers, $runtime);
    }

    /**
     * 新增资源.
     *
     * @param request - CreateResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateResourceResponse
     *
     * @param CreateResourceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateResourceResponse
     */
    public function createResourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateResource',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-resource/v1/resources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增资源.
     *
     * @param request - CreateResourceRequest
     *
     * @returns CreateResourceResponse
     *
     * @param CreateResourceRequest $request
     *
     * @return CreateResourceResponse
     */
    public function createResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * 生成角色.
     *
     * @param request - CreateRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRoleResponse
     *
     * @param CreateRoleRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRoleResponse
     */
    public function createRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateRole',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/roles',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 生成角色.
     *
     * @param request - CreateRoleRequest
     *
     * @returns CreateRoleResponse
     *
     * @param CreateRoleRequest $request
     *
     * @return CreateRoleResponse
     */
    public function createRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建入驻申请.
     *
     * @param request - CreateSettledRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSettledResponse
     *
     * @param CreateSettledRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateSettledResponse
     */
    public function createSettledWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'CreateSettled',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/settleds',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateSettledResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建入驻申请.
     *
     * @param request - CreateSettledRequest
     *
     * @returns CreateSettledResponse
     *
     * @param CreateSettledRequest $request
     *
     * @return CreateSettledResponse
     */
    public function createSettled($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSettledWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除组件.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteComponentResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteComponentResponse
     */
    public function deleteComponentWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteComponent',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-resource/v1/components/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteComponentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除组件.
     *
     * @returns DeleteComponentResponse
     *
     * @param string $id
     *
     * @return DeleteComponentResponse
     */
    public function deleteComponent($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteComponentWithOptions($id, $headers, $runtime);
    }

    /**
     * 删除组件模板
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteComponentTemplateResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteComponentTemplateResponse
     */
    public function deleteComponentTemplateWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteComponentTemplate',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-resource/v1/component-templates/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteComponentTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除组件模板
     *
     * @returns DeleteComponentTemplateResponse
     *
     * @param string $id
     *
     * @return DeleteComponentTemplateResponse
     */
    public function deleteComponentTemplate($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteComponentTemplateWithOptions($id, $headers, $runtime);
    }

    /**
     * 删除开发者.
     *
     * @param request - DeleteDeveloperRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDeveloperResponse
     *
     * @param string                 $accountId
     * @param DeleteDeveloperRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDeveloperResponse
     */
    public function deleteDeveloperWithOptions($accountId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['enterpriseId'] = $request->enterpriseId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDeveloper',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/developers/' . Url::percentEncode($accountId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteDeveloperResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除开发者.
     *
     * @param request - DeleteDeveloperRequest
     *
     * @returns DeleteDeveloperResponse
     *
     * @param string                 $accountId
     * @param DeleteDeveloperRequest $request
     *
     * @return DeleteDeveloperResponse
     */
    public function deleteDeveloper($accountId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDeveloperWithOptions($accountId, $request, $headers, $runtime);
    }

    /**
     * 删除公司.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEnterpriseResponse
     *
     * @param string         $enterpriseId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteEnterpriseResponse
     */
    public function deleteEnterpriseWithOptions($enterpriseId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteEnterprise',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/enterprises/' . Url::percentEncode($enterpriseId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteEnterpriseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除公司.
     *
     * @returns DeleteEnterpriseResponse
     *
     * @param string $enterpriseId
     *
     * @return DeleteEnterpriseResponse
     */
    public function deleteEnterprise($enterpriseId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEnterpriseWithOptions($enterpriseId, $headers, $runtime);
    }

    /**
     * 删除二方包.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLibraryResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteLibraryResponse
     */
    public function deleteLibraryWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteLibrary',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/librarys/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除二方包.
     *
     * @returns DeleteLibraryResponse
     *
     * @param string $id
     *
     * @return DeleteLibraryResponse
     */
    public function deleteLibrary($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLibraryWithOptions($id, $headers, $runtime);
    }

    /**
     * 删除二方包使用说明文档.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLibraryInstructionResponse
     *
     * @param string         $libraryId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteLibraryInstructionResponse
     */
    public function deleteLibraryInstructionWithOptions($libraryId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteLibraryInstruction',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/librarys/' . Url::percentEncode($libraryId) . '/instructions',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteLibraryInstructionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除二方包使用说明文档.
     *
     * @returns DeleteLibraryInstructionResponse
     *
     * @param string $libraryId
     *
     * @return DeleteLibraryInstructionResponse
     */
    public function deleteLibraryInstruction($libraryId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLibraryInstructionWithOptions($libraryId, $headers, $runtime);
    }

    /**
     * 删除二方包规格
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLibrarySchemaResponse
     *
     * @param string         $libraryId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteLibrarySchemaResponse
     */
    public function deleteLibrarySchemaWithOptions($libraryId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteLibrarySchema',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/librarys/' . Url::percentEncode($libraryId) . '/schemas',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteLibrarySchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除二方包规格
     *
     * @returns DeleteLibrarySchemaResponse
     *
     * @param string $libraryId
     *
     * @return DeleteLibrarySchemaResponse
     */
    public function deleteLibrarySchema($libraryId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteLibrarySchemaWithOptions($libraryId, $headers, $runtime);
    }

    /**
     * 删除报警任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMonitorAlertResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMonitorAlertResponse
     */
    public function deleteMonitorAlertWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMonitorAlert',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/alert/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteMonitorAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除报警任务
     *
     * @returns DeleteMonitorAlertResponse
     *
     * @param string $id
     *
     * @return DeleteMonitorAlertResponse
     */
    public function deleteMonitorAlert($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMonitorAlertWithOptions($id, $headers, $runtime);
    }

    /**
     * 删除联系人.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMonitorContactResponse
     *
     * @param string         $contactId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMonitorContactResponse
     */
    public function deleteMonitorContactWithOptions($contactId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMonitorContact',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/contact/' . Url::percentEncode($contactId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteMonitorContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除联系人.
     *
     * @returns DeleteMonitorContactResponse
     *
     * @param string $contactId
     *
     * @return DeleteMonitorContactResponse
     */
    public function deleteMonitorContact($contactId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMonitorContactWithOptions($contactId, $headers, $runtime);
    }

    /**
     * 删除联系人组.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMonitorContactGroupResponse
     *
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMonitorContactGroupResponse
     */
    public function deleteMonitorContactGroupWithOptions($groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMonitorContactGroup',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/group/' . Url::percentEncode($groupId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteMonitorContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除联系人组.
     *
     * @returns DeleteMonitorContactGroupResponse
     *
     * @param string $groupId
     *
     * @return DeleteMonitorContactGroupResponse
     */
    public function deleteMonitorContactGroup($groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMonitorContactGroupWithOptions($groupId, $headers, $runtime);
    }

    /**
     * 从联系人组中删除联系人.
     *
     * @param request - DeleteMonitorGroupMemberRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMonitorGroupMemberResponse
     *
     * @param string                          $groupId
     * @param DeleteMonitorGroupMemberRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteMonitorGroupMemberResponse
     */
    public function deleteMonitorGroupMemberWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactIds) {
            @$query['contactIds'] = $request->contactIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMonitorGroupMember',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/group/' . Url::percentEncode($groupId) . '/commands/delete-member',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteMonitorGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 从联系人组中删除联系人.
     *
     * @param request - DeleteMonitorGroupMemberRequest
     *
     * @returns DeleteMonitorGroupMemberResponse
     *
     * @param string                          $groupId
     * @param DeleteMonitorGroupMemberRequest $request
     *
     * @return DeleteMonitorGroupMemberResponse
     */
    public function deleteMonitorGroupMember($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMonitorGroupMemberWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * 删除webhook.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMonitorWebhookResponse
     *
     * @param string         $webhookId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMonitorWebhookResponse
     */
    public function deleteMonitorWebhookWithOptions($webhookId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMonitorWebhook',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/webhook/' . Url::percentEncode($webhookId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteMonitorWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除webhook.
     *
     * @returns DeleteMonitorWebhookResponse
     *
     * @param string $webhookId
     *
     * @return DeleteMonitorWebhookResponse
     */
    public function deleteMonitorWebhook($webhookId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMonitorWebhookWithOptions($webhookId, $headers, $runtime);
    }

    /**
     * 删除MQ Group.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMqGroupResponse
     *
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMqGroupResponse
     */
    public function deleteMqGroupWithOptions($groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMqGroup',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/mq/group/' . Url::percentEncode($groupId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteMqGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除MQ Group.
     *
     * @returns DeleteMqGroupResponse
     *
     * @param string $groupId
     *
     * @return DeleteMqGroupResponse
     */
    public function deleteMqGroup($groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMqGroupWithOptions($groupId, $headers, $runtime);
    }

    /**
     * 删除Topic.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMqTopicResponse
     *
     * @param string         $topicId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMqTopicResponse
     */
    public function deleteMqTopicWithOptions($topicId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteMqTopic',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/mq/topic/' . Url::percentEncode($topicId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteMqTopicResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除Topic.
     *
     * @returns DeleteMqTopicResponse
     *
     * @param string $topicId
     *
     * @return DeleteMqTopicResponse
     */
    public function deleteMqTopic($topicId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMqTopicWithOptions($topicId, $headers, $runtime);
    }

    /**
     * 取消服务调用服务
     *
     * @param request - DeletePbcInvokeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePbcInvokeResponse
     *
     * @param DeletePbcInvokeRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeletePbcInvokeResponse
     */
    public function deletePbcInvokeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicant) {
            @$query['applicant'] = $request->applicant;
        }

        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->marketId) {
            @$query['marketId'] = $request->marketId;
        }

        if (null !== $request->pbcId) {
            @$query['pbcId'] = $request->pbcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePbcInvoke',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-invokes',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePbcInvokeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消服务调用服务
     *
     * @param request - DeletePbcInvokeRequest
     *
     * @returns DeletePbcInvokeResponse
     *
     * @param DeletePbcInvokeRequest $request
     *
     * @return DeletePbcInvokeResponse
     */
    public function deletePbcInvoke($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePbcInvokeWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除服务配置.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePdpConfigResponse
     *
     * @param string         $configId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePdpConfigResponse
     */
    public function deletePdpConfigWithOptions($configId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePdpConfig',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/configs/' . Url::percentEncode($configId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePdpConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除服务配置.
     *
     * @returns DeletePdpConfigResponse
     *
     * @param string $configId
     *
     * @return DeletePdpConfigResponse
     */
    public function deletePdpConfig($configId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePdpConfigWithOptions($configId, $headers, $runtime);
    }

    /**
     * 删除泳道.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePdpLaneResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePdpLaneResponse
     */
    public function deletePdpLaneWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePdpLane',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/lanes/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePdpLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除泳道.
     *
     * @returns DeletePdpLaneResponse
     *
     * @param string $id
     *
     * @return DeletePdpLaneResponse
     */
    public function deletePdpLane($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePdpLaneWithOptions($id, $headers, $runtime);
    }

    /**
     * 删除指定泳道入口微服务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePdpLaneInletServiceResponse
     *
     * @param string         $laneId
     * @param string         $serviceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePdpLaneInletServiceResponse
     */
    public function deletePdpLaneInletServiceWithOptions($laneId, $serviceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePdpLaneInletService',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/lanes/' . Url::percentEncode($laneId) . '/commands/deleted-inlet-service/' . Url::percentEncode($serviceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePdpLaneInletServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除指定泳道入口微服务
     *
     * @returns DeletePdpLaneInletServiceResponse
     *
     * @param string $laneId
     * @param string $serviceId
     *
     * @return DeletePdpLaneInletServiceResponse
     */
    public function deletePdpLaneInletService($laneId, $serviceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePdpLaneInletServiceWithOptions($laneId, $serviceId, $headers, $runtime);
    }

    /**
     * 删除所有泳道中含有指定的微服务组.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePdpLaneServiceGroupResponse
     *
     * @param string         $serviceGroupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePdpLaneServiceGroupResponse
     */
    public function deletePdpLaneServiceGroupWithOptions($serviceGroupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePdpLaneServiceGroup',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/lanes/commands/deleted-service-group/' . Url::percentEncode($serviceGroupId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePdpLaneServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除所有泳道中含有指定的微服务组.
     *
     * @returns DeletePdpLaneServiceGroupResponse
     *
     * @param string $serviceGroupId
     *
     * @return DeletePdpLaneServiceGroupResponse
     */
    public function deletePdpLaneServiceGroup($serviceGroupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePdpLaneServiceGroupWithOptions($serviceGroupId, $headers, $runtime);
    }

    /**
     * 删除PdpPbc.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePdpPbcResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePdpPbcResponse
     */
    public function deletePdpPbcWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePdpPbc',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/pbcs/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePdpPbcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除PdpPbc.
     *
     * @returns DeletePdpPbcResponse
     *
     * @param string $id
     *
     * @return DeletePdpPbcResponse
     */
    public function deletePdpPbc($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePdpPbcWithOptions($id, $headers, $runtime);
    }

    /**
     * 删除服务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePdpServiceResponse
     *
     * @param string         $serviceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePdpServiceResponse
     */
    public function deletePdpServiceWithOptions($serviceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePdpService',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/services/' . Url::percentEncode($serviceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeletePdpServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除服务
     *
     * @returns DeletePdpServiceResponse
     *
     * @param string $serviceId
     *
     * @return DeletePdpServiceResponse
     */
    public function deletePdpService($serviceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePdpServiceWithOptions($serviceId, $headers, $runtime);
    }

    /**
     * 删除服务分组.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePdpServiceGroupResponse
     *
     * @param string         $serviceGroupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePdpServiceGroupResponse
     */
    public function deletePdpServiceGroupWithOptions($serviceGroupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePdpServiceGroup',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/groups/' . Url::percentEncode($serviceGroupId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeletePdpServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除服务分组.
     *
     * @returns DeletePdpServiceGroupResponse
     *
     * @param string $serviceGroupId
     *
     * @return DeletePdpServiceGroupResponse
     */
    public function deletePdpServiceGroup($serviceGroupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePdpServiceGroupWithOptions($serviceGroupId, $headers, $runtime);
    }

    /**
     * 删除权限.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePrivilegeResponse
     *
     * @param string         $privilegeId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeletePrivilegeResponse
     */
    public function deletePrivilegeWithOptions($privilegeId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeletePrivilege',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/roles/privileges/' . Url::percentEncode($privilegeId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeletePrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除权限.
     *
     * @returns DeletePrivilegeResponse
     *
     * @param string $privilegeId
     *
     * @return DeletePrivilegeResponse
     */
    public function deletePrivilege($privilegeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deletePrivilegeWithOptions($privilegeId, $headers, $runtime);
    }

    /**
     * 查询删除产品
     *
     * @param request - DeleteProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProductResponse
     *
     * @param string               $id
     * @param DeleteProductRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProductResponse
     */
    public function deleteProductWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteProduct',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/products/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询删除产品
     *
     * @param request - DeleteProductRequest
     *
     * @returns DeleteProductResponse
     *
     * @param string               $id
     * @param DeleteProductRequest $request
     *
     * @return DeleteProductResponse
     */
    public function deleteProduct($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProductWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * 删除指定资源.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteResourceResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteResourceResponse
     */
    public function deleteResourceWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteResource',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-resource/v1/resources/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DeleteResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除指定资源.
     *
     * @returns DeleteResourceResponse
     *
     * @param string $id
     *
     * @return DeleteResourceResponse
     */
    public function deleteResource($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceWithOptions($id, $headers, $runtime);
    }

    /**
     * 删除角色.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRoleResponse
     *
     * @param string         $roleId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteRoleResponse
     */
    public function deleteRoleWithOptions($roleId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteRole',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/roles/' . Url::percentEncode($roleId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除角色.
     *
     * @returns DeleteRoleResponse
     *
     * @param string $roleId
     *
     * @return DeleteRoleResponse
     */
    public function deleteRole($roleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRoleWithOptions($roleId, $headers, $runtime);
    }

    /**
     * 删除入驻申请记录.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSettledResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSettledResponse
     */
    public function deleteSettledWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteSettled',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/settleds/' . Url::percentEncode($id) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteSettledResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除入驻申请记录.
     *
     * @returns DeleteSettledResponse
     *
     * @param string $id
     *
     * @return DeleteSettledResponse
     */
    public function deleteSettled($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSettledWithOptions($id, $headers, $runtime);
    }

    /**
     * 依赖二方包.
     *
     * @param request - DependLibraryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DependLibraryResponse
     *
     * @param string               $id
     * @param DependLibraryRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DependLibraryResponse
     */
    public function dependLibraryWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DependLibrary',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/librarys/' . Url::percentEncode($id) . '/commands/dependency',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DependLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 依赖二方包.
     *
     * @param request - DependLibraryRequest
     *
     * @returns DependLibraryResponse
     *
     * @param string               $id
     * @param DependLibraryRequest $request
     *
     * @return DependLibraryResponse
     */
    public function dependLibrary($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dependLibraryWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * 审批审核.
     *
     * @param request - FeedbackLibraryReviewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FeedbackLibraryReviewResponse
     *
     * @param string                       $reviewId
     * @param FeedbackLibraryReviewRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return FeedbackLibraryReviewResponse
     */
    public function feedbackLibraryReviewWithOptions($reviewId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->approve) {
            @$body['approve'] = $request->approve;
        }

        if (null !== $request->feedback) {
            @$body['feedback'] = $request->feedback;
        }

        if (null !== $request->reviewId) {
            @$body['reviewId'] = $request->reviewId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FeedbackLibraryReview',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/library-reviews/' . Url::percentEncode($reviewId) . '/commands/feedback',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FeedbackLibraryReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 审批审核.
     *
     * @param request - FeedbackLibraryReviewRequest
     *
     * @returns FeedbackLibraryReviewResponse
     *
     * @param string                       $reviewId
     * @param FeedbackLibraryReviewRequest $request
     *
     * @return FeedbackLibraryReviewResponse
     */
    public function feedbackLibraryReview($reviewId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->feedbackLibraryReviewWithOptions($reviewId, $request, $headers, $runtime);
    }

    /**
     * 提交审核.
     *
     * @param request - FeedbackPbcReviewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FeedbackPbcReviewResponse
     *
     * @param string                   $reviewId
     * @param FeedbackPbcReviewRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return FeedbackPbcReviewResponse
     */
    public function feedbackPbcReviewWithOptions($reviewId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'FeedbackPbcReview',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-reviews/' . Url::percentEncode($reviewId) . '/commands/feedback',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return FeedbackPbcReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 提交审核.
     *
     * @param request - FeedbackPbcReviewRequest
     *
     * @returns FeedbackPbcReviewResponse
     *
     * @param string                   $reviewId
     * @param FeedbackPbcReviewRequest $request
     *
     * @return FeedbackPbcReviewResponse
     */
    public function feedbackPbcReview($reviewId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->feedbackPbcReviewWithOptions($reviewId, $request, $headers, $runtime);
    }

    /**
     * 查询Buc公司.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBucEnterpriseResponse
     *
     * @param string         $enterpriseId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetBucEnterpriseResponse
     */
    public function getBucEnterpriseWithOptions($enterpriseId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetBucEnterprise',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/bucs/enterprises/' . Url::percentEncode($enterpriseId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetBucEnterpriseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Buc公司.
     *
     * @returns GetBucEnterpriseResponse
     *
     * @param string $enterpriseId
     *
     * @return GetBucEnterpriseResponse
     */
    public function getBucEnterprise($enterpriseId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getBucEnterpriseWithOptions($enterpriseId, $headers, $runtime);
    }

    /**
     * 查询组件.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetComponentResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetComponentResponse
     */
    public function getComponentWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetComponent',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-resource/v1/components/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetComponentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询组件.
     *
     * @returns GetComponentResponse
     *
     * @param string $id
     *
     * @return GetComponentResponse
     */
    public function getComponent($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getComponentWithOptions($id, $headers, $runtime);
    }

    /**
     * 查询组件模板
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetComponentTemplateResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetComponentTemplateResponse
     */
    public function getComponentTemplateWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetComponentTemplate',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-resource/v1/component-templates/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetComponentTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询组件模板
     *
     * @returns GetComponentTemplateResponse
     *
     * @param string $id
     *
     * @return GetComponentTemplateResponse
     */
    public function getComponentTemplate($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getComponentTemplateWithOptions($id, $headers, $runtime);
    }

    /**
     * 查询部署详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeploymentResponse
     *
     * @param string         $deploymentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDeploymentResponse
     */
    public function getDeploymentWithOptions($deploymentId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDeployment',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/deployments/instance/' . Url::percentEncode($deploymentId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询部署详情.
     *
     * @returns GetDeploymentResponse
     *
     * @param string $deploymentId
     *
     * @return GetDeploymentResponse
     */
    public function getDeployment($deploymentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeploymentWithOptions($deploymentId, $headers, $runtime);
    }

    /**
     * 查询开发者.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeveloperResponse
     *
     * @param string         $accountId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDeveloperResponse
     */
    public function getDeveloperWithOptions($accountId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDeveloper',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/developers/' . Url::percentEncode($accountId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDeveloperResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询开发者.
     *
     * @returns GetDeveloperResponse
     *
     * @param string $accountId
     *
     * @return GetDeveloperResponse
     */
    public function getDeveloper($accountId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeveloperWithOptions($accountId, $headers, $runtime);
    }

    /**
     * 查询开发者所在公司.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeveloperEnterpriseResponse
     *
     * @param string         $accountId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDeveloperEnterpriseResponse
     */
    public function getDeveloperEnterpriseWithOptions($accountId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDeveloperEnterprise',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/enterprises/developers/' . Url::percentEncode($accountId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDeveloperEnterpriseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询开发者所在公司.
     *
     * @returns GetDeveloperEnterpriseResponse
     *
     * @param string $accountId
     *
     * @return GetDeveloperEnterpriseResponse
     */
    public function getDeveloperEnterprise($accountId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDeveloperEnterpriseWithOptions($accountId, $headers, $runtime);
    }

    /**
     * 查询公司.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEnterpriseResponse
     *
     * @param string         $enterpriseId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetEnterpriseResponse
     */
    public function getEnterpriseWithOptions($enterpriseId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetEnterprise',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/enterprises/' . Url::percentEncode($enterpriseId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEnterpriseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询公司.
     *
     * @returns GetEnterpriseResponse
     *
     * @param string $enterpriseId
     *
     * @return GetEnterpriseResponse
     */
    public function getEnterprise($enterpriseId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEnterpriseWithOptions($enterpriseId, $headers, $runtime);
    }

    /**
     * 查询开发者.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEnterpriseDeveloperResponse
     *
     * @param string         $accountId
     * @param string         $enterpriseId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetEnterpriseDeveloperResponse
     */
    public function getEnterpriseDeveloperWithOptions($accountId, $enterpriseId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetEnterpriseDeveloper',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/developers/' . Url::percentEncode($accountId) . '/enterprises/' . Url::percentEncode($enterpriseId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetEnterpriseDeveloperResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询开发者.
     *
     * @returns GetEnterpriseDeveloperResponse
     *
     * @param string $accountId
     * @param string $enterpriseId
     *
     * @return GetEnterpriseDeveloperResponse
     */
    public function getEnterpriseDeveloper($accountId, $enterpriseId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEnterpriseDeveloperWithOptions($accountId, $enterpriseId, $headers, $runtime);
    }

    /**
     * 获取审核详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetForkReviewResponse
     *
     * @param string         $reviewId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetForkReviewResponse
     */
    public function getForkReviewWithOptions($reviewId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetForkReview',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/fork-reviews/' . Url::percentEncode($reviewId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetForkReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取审核详情.
     *
     * @returns GetForkReviewResponse
     *
     * @param string $reviewId
     *
     * @return GetForkReviewResponse
     */
    public function getForkReview($reviewId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getForkReviewWithOptions($reviewId, $headers, $runtime);
    }

    /**
     * 查询历史开发者.
     *
     * @param request - GetHistoryDeveloperRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHistoryDeveloperResponse
     *
     * @param string                     $accountId
     * @param GetHistoryDeveloperRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetHistoryDeveloperResponse
     */
    public function getHistoryDeveloperWithOptions($accountId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['enterpriseId'] = $request->enterpriseId;
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
            'action' => 'GetHistoryDeveloper',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/developers/' . Url::percentEncode($accountId) . '/commonds/history',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHistoryDeveloperResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询历史开发者.
     *
     * @param request - GetHistoryDeveloperRequest
     *
     * @returns GetHistoryDeveloperResponse
     *
     * @param string                     $accountId
     * @param GetHistoryDeveloperRequest $request
     *
     * @return GetHistoryDeveloperResponse
     */
    public function getHistoryDeveloper($accountId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHistoryDeveloperWithOptions($accountId, $request, $headers, $runtime);
    }

    /**
     * 查询最近一次部署配置.
     *
     * @param request - GetLastDeploymentConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLastDeploymentConfigResponse
     *
     * @param GetLastDeploymentConfigRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetLastDeploymentConfigResponse
     */
    public function getLastDeploymentConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serviceGroupId) {
            @$query['serviceGroupId'] = $request->serviceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLastDeploymentConfig',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/deployments/last-config',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLastDeploymentConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询最近一次部署配置.
     *
     * @param request - GetLastDeploymentConfigRequest
     *
     * @returns GetLastDeploymentConfigResponse
     *
     * @param GetLastDeploymentConfigRequest $request
     *
     * @return GetLastDeploymentConfigResponse
     */
    public function getLastDeploymentConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLastDeploymentConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询最新版本二方库.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLibraryResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLibraryResponse
     */
    public function getLibraryWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetLibrary',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/librarys/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询最新版本二方库.
     *
     * @returns GetLibraryResponse
     *
     * @param string $id
     *
     * @return GetLibraryResponse
     */
    public function getLibrary($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLibraryWithOptions($id, $headers, $runtime);
    }

    /**
     * 获取二方包代码库开发者统计信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLibraryDeveloperRepoMetricsResponse
     *
     * @param string         $libraryId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLibraryDeveloperRepoMetricsResponse
     */
    public function getLibraryDeveloperRepoMetricsWithOptions($libraryId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetLibraryDeveloperRepoMetrics',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/Librarys/' . Url::percentEncode($libraryId) . '/code/commands/get-developer-repo-metrics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLibraryDeveloperRepoMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取二方包代码库开发者统计信息.
     *
     * @returns GetLibraryDeveloperRepoMetricsResponse
     *
     * @param string $libraryId
     *
     * @return GetLibraryDeveloperRepoMetricsResponse
     */
    public function getLibraryDeveloperRepoMetrics($libraryId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLibraryDeveloperRepoMetricsWithOptions($libraryId, $headers, $runtime);
    }

    /**
     * 查询二方包使用说明文档.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLibraryInstructionResponse
     *
     * @param string         $libraryId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLibraryInstructionResponse
     */
    public function getLibraryInstructionWithOptions($libraryId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetLibraryInstruction',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/librarys/' . Url::percentEncode($libraryId) . '/instructions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLibraryInstructionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询二方包使用说明文档.
     *
     * @returns GetLibraryInstructionResponse
     *
     * @param string $libraryId
     *
     * @return GetLibraryInstructionResponse
     */
    public function getLibraryInstruction($libraryId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLibraryInstructionWithOptions($libraryId, $headers, $runtime);
    }

    /**
     * 获取二方包的代码库统计信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLibraryRepoMetricsResponse
     *
     * @param string         $libraryId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLibraryRepoMetricsResponse
     */
    public function getLibraryRepoMetricsWithOptions($libraryId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetLibraryRepoMetrics',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/Librarys/' . Url::percentEncode($libraryId) . '/code/commands/get-repo-metrics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLibraryRepoMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取二方包的代码库统计信息.
     *
     * @returns GetLibraryRepoMetricsResponse
     *
     * @param string $libraryId
     *
     * @return GetLibraryRepoMetricsResponse
     */
    public function getLibraryRepoMetrics($libraryId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLibraryRepoMetricsWithOptions($libraryId, $headers, $runtime);
    }

    /**
     * 查询审核信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLibraryReviewResponse
     *
     * @param string         $reviewId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLibraryReviewResponse
     */
    public function getLibraryReviewWithOptions($reviewId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetLibraryReview',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/library-reviews/' . Url::percentEncode($reviewId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLibraryReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询审核信息.
     *
     * @returns GetLibraryReviewResponse
     *
     * @param string $reviewId
     *
     * @return GetLibraryReviewResponse
     */
    public function getLibraryReview($reviewId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLibraryReviewWithOptions($reviewId, $headers, $runtime);
    }

    /**
     * 查询二方包规格
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLibrarySchemaResponse
     *
     * @param string         $libraryId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLibrarySchemaResponse
     */
    public function getLibrarySchemaWithOptions($libraryId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetLibrarySchema',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/librarys/' . Url::percentEncode($libraryId) . '/schemas',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLibrarySchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询二方包规格
     *
     * @returns GetLibrarySchemaResponse
     *
     * @param string $libraryId
     *
     * @return GetLibrarySchemaResponse
     */
    public function getLibrarySchema($libraryId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLibrarySchemaWithOptions($libraryId, $headers, $runtime);
    }

    /**
     * 获取日志链接.
     *
     * @param request - GetLogUrlRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLogUrlResponse
     *
     * @param GetLogUrlRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetLogUrlResponse
     */
    public function getLogUrlWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ip) {
            @$query['ip'] = $request->ip;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->serviceGroupId) {
            @$query['serviceGroupId'] = $request->serviceGroupId;
        }

        if (null !== $request->sourceType) {
            @$query['sourceType'] = $request->sourceType;
        }

        if (null !== $request->to) {
            @$query['to'] = $request->to;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLogUrl',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/pdp-log/url',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLogUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取日志链接.
     *
     * @param request - GetLogUrlRequest
     *
     * @returns GetLogUrlResponse
     *
     * @param GetLogUrlRequest $request
     *
     * @return GetLogUrlResponse
     */
    public function getLogUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLogUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取登录的buc用户信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLoginUserInfoResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetLoginUserInfoResponse
     */
    public function getLoginUserInfoWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetLoginUserInfo',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/bucs/logins',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLoginUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取登录的buc用户信息.
     *
     * @returns GetLoginUserInfoResponse
     *
     * @return GetLoginUserInfoResponse
     */
    public function getLoginUserInfo()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLoginUserInfoWithOptions($headers, $runtime);
    }

    /**
     * 查询报警任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMonitorAlertResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMonitorAlertResponse
     */
    public function getMonitorAlertWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMonitorAlert',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/alert/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMonitorAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询报警任务
     *
     * @returns GetMonitorAlertResponse
     *
     * @param string $id
     *
     * @return GetMonitorAlertResponse
     */
    public function getMonitorAlert($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMonitorAlertWithOptions($id, $headers, $runtime);
    }

    /**
     * 查询报警历史.
     *
     * @param request - GetMonitorAlertHistoryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMonitorAlertHistoryResponse
     *
     * @param GetMonitorAlertHistoryRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetMonitorAlertHistoryResponse
     */
    public function getMonitorAlertHistoryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertRuleName) {
            @$query['alertRuleName'] = $request->alertRuleName;
        }

        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->env) {
            @$query['env'] = $request->env;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pbcId) {
            @$query['pbcId'] = $request->pbcId;
        }

        if (null !== $request->serviceGroupId) {
            @$query['serviceGroupId'] = $request->serviceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMonitorAlertHistory',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/alert/commands/getMonitorAlertHistory',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMonitorAlertHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询报警历史.
     *
     * @param request - GetMonitorAlertHistoryRequest
     *
     * @returns GetMonitorAlertHistoryResponse
     *
     * @param GetMonitorAlertHistoryRequest $request
     *
     * @return GetMonitorAlertHistoryResponse
     */
    public function getMonitorAlertHistory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMonitorAlertHistoryWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询联系人.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMonitorContactResponse
     *
     * @param string         $contactId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMonitorContactResponse
     */
    public function getMonitorContactWithOptions($contactId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMonitorContact',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/contact/' . Url::percentEncode($contactId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMonitorContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询联系人.
     *
     * @returns GetMonitorContactResponse
     *
     * @param string $contactId
     *
     * @return GetMonitorContactResponse
     */
    public function getMonitorContact($contactId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMonitorContactWithOptions($contactId, $headers, $runtime);
    }

    /**
     * 查询联系人组.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMonitorContactGroupResponse
     *
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMonitorContactGroupResponse
     */
    public function getMonitorContactGroupWithOptions($groupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMonitorContactGroup',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/group/' . Url::percentEncode($groupId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMonitorContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询联系人组.
     *
     * @returns GetMonitorContactGroupResponse
     *
     * @param string $groupId
     *
     * @return GetMonitorContactGroupResponse
     */
    public function getMonitorContactGroup($groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMonitorContactGroupWithOptions($groupId, $headers, $runtime);
    }

    /**
     * 查询webhook.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMonitorWebhookResponse
     *
     * @param string         $webhookId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetMonitorWebhookResponse
     */
    public function getMonitorWebhookWithOptions($webhookId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetMonitorWebhook',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/webhook/' . Url::percentEncode($webhookId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMonitorWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询webhook.
     *
     * @returns GetMonitorWebhookResponse
     *
     * @param string $webhookId
     *
     * @return GetMonitorWebhookResponse
     */
    public function getMonitorWebhook($webhookId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMonitorWebhookWithOptions($webhookId, $headers, $runtime);
    }

    /**
     * 查询最新版本pbc.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPbcResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPbcResponse
     */
    public function getPbcWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPbc',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbcs/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPbcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询最新版本pbc.
     *
     * @returns GetPbcResponse
     *
     * @param string $id
     *
     * @return GetPbcResponse
     */
    public function getPbc($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPbcWithOptions($id, $headers, $runtime);
    }

    /**
     * 查询PBC的api规格
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPbcApiSchemaResponse
     *
     * @param string         $pbcVersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPbcApiSchemaResponse
     */
    public function getPbcApiSchemaWithOptions($pbcVersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPbcApiSchema',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-versions/' . Url::percentEncode($pbcVersionId) . '/api-schemas',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPbcApiSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询PBC的api规格
     *
     * @returns GetPbcApiSchemaResponse
     *
     * @param string $pbcVersionId
     *
     * @return GetPbcApiSchemaResponse
     */
    public function getPbcApiSchema($pbcVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPbcApiSchemaWithOptions($pbcVersionId, $headers, $runtime);
    }

    /**
     * 获取PBC代码库开发者统计信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPbcDeveloperRepoMetricsResponse
     *
     * @param string         $pbcId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPbcDeveloperRepoMetricsResponse
     */
    public function getPbcDeveloperRepoMetricsWithOptions($pbcId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPbcDeveloperRepoMetrics',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbcs/' . Url::percentEncode($pbcId) . '/code/commands/get-developer-repo-metrics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPbcDeveloperRepoMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取PBC代码库开发者统计信息.
     *
     * @returns GetPbcDeveloperRepoMetricsResponse
     *
     * @param string $pbcId
     *
     * @return GetPbcDeveloperRepoMetricsResponse
     */
    public function getPbcDeveloperRepoMetrics($pbcId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPbcDeveloperRepoMetricsWithOptions($pbcId, $headers, $runtime);
    }

    /**
     * 查询PBC使用说明文档.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPbcInstructionResponse
     *
     * @param string         $pbcVersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPbcInstructionResponse
     */
    public function getPbcInstructionWithOptions($pbcVersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPbcInstruction',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-versions/' . Url::percentEncode($pbcVersionId) . '/instructions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPbcInstructionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询PBC使用说明文档.
     *
     * @returns GetPbcInstructionResponse
     *
     * @param string $pbcVersionId
     *
     * @return GetPbcInstructionResponse
     */
    public function getPbcInstruction($pbcVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPbcInstructionWithOptions($pbcVersionId, $headers, $runtime);
    }

    /**
     * 获取审核详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPbcInvokeReviewResponse
     *
     * @param string         $reviewId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPbcInvokeReviewResponse
     */
    public function getPbcInvokeReviewWithOptions($reviewId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPbcInvokeReview',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-invoke-reviews/' . Url::percentEncode($reviewId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPbcInvokeReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取审核详情.
     *
     * @returns GetPbcInvokeReviewResponse
     *
     * @param string $reviewId
     *
     * @return GetPbcInvokeReviewResponse
     */
    public function getPbcInvokeReview($reviewId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPbcInvokeReviewWithOptions($reviewId, $headers, $runtime);
    }

    /**
     * 获取PBC的代码库统计信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPbcRepoMetricsResponse
     *
     * @param string         $pbcId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPbcRepoMetricsResponse
     */
    public function getPbcRepoMetricsWithOptions($pbcId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPbcRepoMetrics',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbcs/' . Url::percentEncode($pbcId) . '/code/commands/get-repo-metrics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPbcRepoMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取PBC的代码库统计信息.
     *
     * @returns GetPbcRepoMetricsResponse
     *
     * @param string $pbcId
     *
     * @return GetPbcRepoMetricsResponse
     */
    public function getPbcRepoMetrics($pbcId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPbcRepoMetricsWithOptions($pbcId, $headers, $runtime);
    }

    /**
     * 查询pbc审核信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPbcReviewResponse
     *
     * @param string         $reviewId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPbcReviewResponse
     */
    public function getPbcReviewWithOptions($reviewId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPbcReview',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-reviews/' . Url::percentEncode($reviewId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPbcReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询pbc审核信息.
     *
     * @returns GetPbcReviewResponse
     *
     * @param string $reviewId
     *
     * @return GetPbcReviewResponse
     */
    public function getPbcReview($reviewId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPbcReviewWithOptions($reviewId, $headers, $runtime);
    }

    /**
     * 查询PBC规格
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPbcSchemaResponse
     *
     * @param string         $pbcVersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPbcSchemaResponse
     */
    public function getPbcSchemaWithOptions($pbcVersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPbcSchema',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-versions/' . Url::percentEncode($pbcVersionId) . '/schemas',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPbcSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询PBC规格
     *
     * @returns GetPbcSchemaResponse
     *
     * @param string $pbcVersionId
     *
     * @return GetPbcSchemaResponse
     */
    public function getPbcSchema($pbcVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPbcSchemaWithOptions($pbcVersionId, $headers, $runtime);
    }

    /**
     * 查询pbc版本信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPbcVersionResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPbcVersionResponse
     */
    public function getPbcVersionWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPbcVersion',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-versions/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPbcVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询pbc版本信息.
     *
     * @returns GetPbcVersionResponse
     *
     * @param string $id
     *
     * @return GetPbcVersionResponse
     */
    public function getPbcVersion($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPbcVersionWithOptions($id, $headers, $runtime);
    }

    /**
     * 获取配置信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPdpConfigResponse
     *
     * @param string         $configId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPdpConfigResponse
     */
    public function getPdpConfigWithOptions($configId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPdpConfig',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/configs/last/' . Url::percentEncode($configId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPdpConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取配置信息.
     *
     * @returns GetPdpConfigResponse
     *
     * @param string $configId
     *
     * @return GetPdpConfigResponse
     */
    public function getPdpConfig($configId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPdpConfigWithOptions($configId, $headers, $runtime);
    }

    /**
     * 获取历史配置详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPdpHistoryConfigResponse
     *
     * @param string         $historyConfigId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPdpHistoryConfigResponse
     */
    public function getPdpHistoryConfigWithOptions($historyConfigId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPdpHistoryConfig',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/configs/history/' . Url::percentEncode($historyConfigId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPdpHistoryConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取历史配置详情.
     *
     * @returns GetPdpHistoryConfigResponse
     *
     * @param string $historyConfigId
     *
     * @return GetPdpHistoryConfigResponse
     */
    public function getPdpHistoryConfig($historyConfigId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPdpHistoryConfigWithOptions($historyConfigId, $headers, $runtime);
    }

    /**
     * 查询泳道详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPdpLaneResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPdpLaneResponse
     */
    public function getPdpLaneWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPdpLane',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/lanes/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPdpLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询泳道详情.
     *
     * @returns GetPdpLaneResponse
     *
     * @param string $id
     *
     * @return GetPdpLaneResponse
     */
    public function getPdpLane($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPdpLaneWithOptions($id, $headers, $runtime);
    }

    /**
     * 查询PdpPbc.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPdpPbcResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPdpPbcResponse
     */
    public function getPdpPbcWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPdpPbc',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/pbcs/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPdpPbcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询PdpPbc.
     *
     * @returns GetPdpPbcResponse
     *
     * @param string $id
     *
     * @return GetPdpPbcResponse
     */
    public function getPdpPbc($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPdpPbcWithOptions($id, $headers, $runtime);
    }

    /**
     * 查询服务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPdpServiceResponse
     *
     * @param string         $serviceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPdpServiceResponse
     */
    public function getPdpServiceWithOptions($serviceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPdpService',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/services/' . Url::percentEncode($serviceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPdpServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询服务
     *
     * @returns GetPdpServiceResponse
     *
     * @param string $serviceId
     *
     * @return GetPdpServiceResponse
     */
    public function getPdpService($serviceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPdpServiceWithOptions($serviceId, $headers, $runtime);
    }

    /**
     * 查询服务分组.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPdpServiceGroupResponse
     *
     * @param string         $serviceGroupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetPdpServiceGroupResponse
     */
    public function getPdpServiceGroupWithOptions($serviceGroupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetPdpServiceGroup',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/groups/' . Url::percentEncode($serviceGroupId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPdpServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询服务分组.
     *
     * @returns GetPdpServiceGroupResponse
     *
     * @param string $serviceGroupId
     *
     * @return GetPdpServiceGroupResponse
     */
    public function getPdpServiceGroup($serviceGroupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPdpServiceGroupWithOptions($serviceGroupId, $headers, $runtime);
    }

    /**
     * 查询产品
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProductResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetProductResponse
     */
    public function getProductWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetProduct',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/products/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询产品
     *
     * @returns GetProductResponse
     *
     * @param string $id
     *
     * @return GetProductResponse
     */
    public function getProduct($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProductWithOptions($id, $headers, $runtime);
    }

    /**
     * 查询资源.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetResourceResponse
     */
    public function getResourceWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetResource',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-resource/v1/resources/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询资源.
     *
     * @returns GetResourceResponse
     *
     * @param string $id
     *
     * @return GetResourceResponse
     */
    public function getResource($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceWithOptions($id, $headers, $runtime);
    }

    /**
     * 查询角色.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRoleResponse
     *
     * @param string         $roleId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRoleResponse
     */
    public function getRoleWithOptions($roleId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRole',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/roles/role-id/' . Url::percentEncode($roleId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询角色.
     *
     * @returns GetRoleResponse
     *
     * @param string $roleId
     *
     * @return GetRoleResponse
     */
    public function getRole($roleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRoleWithOptions($roleId, $headers, $runtime);
    }

    /**
     * 获取调用链方法栈.
     *
     * @param request - GetStackDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStackDetailResponse
     *
     * @param string                $traceId
     * @param GetStackDetailRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetStackDetailResponse
     */
    public function getStackDetailWithOptions($traceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->env) {
            @$query['env'] = $request->env;
        }

        if (null !== $request->rpcId) {
            @$query['rpcId'] = $request->rpcId;
        }

        if (null !== $request->serviceGroupId) {
            @$query['serviceGroupId'] = $request->serviceGroupId;
        }

        if (null !== $request->serviceName) {
            @$query['serviceName'] = $request->serviceName;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStackDetail',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/traces/' . Url::percentEncode($traceId) . '/commonds/stack',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetStackDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取调用链方法栈.
     *
     * @param request - GetStackDetailRequest
     *
     * @returns GetStackDetailResponse
     *
     * @param string                $traceId
     * @param GetStackDetailRequest $request
     *
     * @return GetStackDetailResponse
     */
    public function getStackDetail($traceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getStackDetailWithOptions($traceId, $request, $headers, $runtime);
    }

    /**
     * 获取token.
     *
     * @param request - GetTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTokenResponse
     *
     * @param GetTokenRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetTokenResponse
     */
    public function getTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountId) {
            @$body['accountId'] = $request->accountId;
        }

        if (null !== $request->pbcId) {
            @$body['pbcId'] = $request->pbcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetToken',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/pbcs/token',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取token.
     *
     * @param request - GetTokenRequest
     *
     * @returns GetTokenResponse
     *
     * @param GetTokenRequest $request
     *
     * @return GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取调用链详情.
     *
     * @param request - GetTraceDetailRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTraceDetailResponse
     *
     * @param string                $traceId
     * @param GetTraceDetailRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetTraceDetailResponse
     */
    public function getTraceDetailWithOptions($traceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->env) {
            @$query['env'] = $request->env;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTraceDetail',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/traces/' . Url::percentEncode($traceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTraceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取调用链详情.
     *
     * @param request - GetTraceDetailRequest
     *
     * @returns GetTraceDetailResponse
     *
     * @param string                $traceId
     * @param GetTraceDetailRequest $request
     *
     * @return GetTraceDetailResponse
     */
    public function getTraceDetail($traceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTraceDetailWithOptions($traceId, $request, $headers, $runtime);
    }

    /**
     * 授权.
     *
     * @param request - GrantRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantRoleResponse
     *
     * @param string           $roleId
     * @param GrantRoleRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GrantRoleResponse
     */
    public function grantRoleWithOptions($roleId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'GrantRole',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/roles/' . Url::percentEncode($roleId) . '/commands/grant',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return GrantRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 授权.
     *
     * @param request - GrantRoleRequest
     *
     * @returns GrantRoleResponse
     *
     * @param string           $roleId
     * @param GrantRoleRequest $request
     *
     * @return GrantRoleResponse
     */
    public function grantRole($roleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->grantRoleWithOptions($roleId, $request, $headers, $runtime);
    }

    /**
     * 查询可以授权的产品
     *
     * @param request - ListAuthorizeProductsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAuthorizeProductsResponse
     *
     * @param ListAuthorizeProductsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListAuthorizeProductsResponse
     */
    public function listAuthorizeProductsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAuthorizeProducts',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/products/commands/list-authorize',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListAuthorizeProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询可以授权的产品
     *
     * @param request - ListAuthorizeProductsRequest
     *
     * @returns ListAuthorizeProductsResponse
     *
     * @param ListAuthorizeProductsRequest $request
     *
     * @return ListAuthorizeProductsResponse
     */
    public function listAuthorizeProducts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAuthorizeProductsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询Buc用户的公司.
     *
     * @param request - ListBucUserEnterpriseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBucUserEnterpriseResponse
     *
     * @param ListBucUserEnterpriseRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListBucUserEnterpriseResponse
     */
    public function listBucUserEnterpriseWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->empId) {
            @$query['empId'] = $request->empId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBucUserEnterprise',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/bucs/enterprises',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListBucUserEnterpriseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Buc用户的公司.
     *
     * @param request - ListBucUserEnterpriseRequest
     *
     * @returns ListBucUserEnterpriseResponse
     *
     * @param ListBucUserEnterpriseRequest $request
     *
     * @return ListBucUserEnterpriseResponse
     */
    public function listBucUserEnterprise($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBucUserEnterpriseWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询组件模板列表.
     *
     * @param request - ListComponentTemplatesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListComponentTemplatesResponse
     *
     * @param ListComponentTemplatesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListComponentTemplatesResponse
     */
    public function listComponentTemplatesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->productId) {
            @$query['productId'] = $request->productId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListComponentTemplates',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-resource/v1/component-templates',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListComponentTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询组件模板列表.
     *
     * @param request - ListComponentTemplatesRequest
     *
     * @returns ListComponentTemplatesResponse
     *
     * @param ListComponentTemplatesRequest $request
     *
     * @return ListComponentTemplatesResponse
     */
    public function listComponentTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listComponentTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询组件列表.
     *
     * @param request - ListComponentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListComponentsResponse
     *
     * @param ListComponentsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListComponentsResponse
     */
    public function listComponentsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->env) {
            @$query['env'] = $request->env;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->productId) {
            @$query['productId'] = $request->productId;
        }

        if (null !== $request->templateId) {
            @$query['templateId'] = $request->templateId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListComponents',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-resource/v1/components',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListComponentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询组件列表.
     *
     * @param request - ListComponentsRequest
     *
     * @returns ListComponentsResponse
     *
     * @param ListComponentsRequest $request
     *
     * @return ListComponentsResponse
     */
    public function listComponents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listComponentsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询我依赖的二方包列表.
     *
     * @param request - ListDependLibrarysRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDependLibrarysResponse
     *
     * @param ListDependLibrarysRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListDependLibrarysResponse
     */
    public function listDependLibrarysWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicant) {
            @$query['applicant'] = $request->applicant;
        }

        if (null !== $request->marketId) {
            @$query['marketId'] = $request->marketId;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDependLibrarys',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/librarys/commands/list-dependency',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDependLibrarysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询我依赖的二方包列表.
     *
     * @param request - ListDependLibrarysRequest
     *
     * @returns ListDependLibrarysResponse
     *
     * @param ListDependLibrarysRequest $request
     *
     * @return ListDependLibrarysResponse
     */
    public function listDependLibrarys($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDependLibrarysWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询部署记录列表.
     *
     * @param tmpReq - ListDeploymentsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeploymentsResponse
     *
     * @param ListDeploymentsRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListDeploymentsResponse
     */
    public function listDeploymentsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDeploymentsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->excludeStatus) {
            $request->excludeStatusShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->excludeStatus, 'excludeStatus', 'json');
        }

        if (null !== $tmpReq->status) {
            $request->statusShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->status, 'status', 'json');
        }

        $query = [];
        if (null !== $request->excludeStatusShrink) {
            @$query['excludeStatus'] = $request->excludeStatusShrink;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->serviceGroupId) {
            @$query['serviceGroupId'] = $request->serviceGroupId;
        }

        if (null !== $request->statusShrink) {
            @$query['status'] = $request->statusShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDeployments',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/deployments',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDeploymentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询部署记录列表.
     *
     * @param request - ListDeploymentsRequest
     *
     * @returns ListDeploymentsResponse
     *
     * @param ListDeploymentsRequest $request
     *
     * @return ListDeploymentsResponse
     */
    public function listDeployments($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDeploymentsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询开发者所在公司列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeveloperEnterprisesResponse
     *
     * @param string         $accountId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListDeveloperEnterprisesResponse
     */
    public function listDeveloperEnterprisesWithOptions($accountId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListDeveloperEnterprises',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/enterprises/developers/' . Url::percentEncode($accountId) . '/commands/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDeveloperEnterprisesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询开发者所在公司列表.
     *
     * @returns ListDeveloperEnterprisesResponse
     *
     * @param string $accountId
     *
     * @return ListDeveloperEnterprisesResponse
     */
    public function listDeveloperEnterprises($accountId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDeveloperEnterprisesWithOptions($accountId, $headers, $runtime);
    }

    /**
     * 查询当前开发者拥有权限的pbc列表.
     *
     * @param request - ListDeveloperPbcsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeveloperPbcsResponse
     *
     * @param ListDeveloperPbcsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListDeveloperPbcsResponse
     */
    public function listDeveloperPbcsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->marketId) {
            @$query['marketId'] = $request->marketId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDeveloperPbcs',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbcs/commands/allow-list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDeveloperPbcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询当前开发者拥有权限的pbc列表.
     *
     * @param request - ListDeveloperPbcsRequest
     *
     * @returns ListDeveloperPbcsResponse
     *
     * @param ListDeveloperPbcsRequest $request
     *
     * @return ListDeveloperPbcsResponse
     */
    public function listDeveloperPbcs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDeveloperPbcsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询开发者列表.
     *
     * @param tmpReq - ListDevelopersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDevelopersResponse
     *
     * @param ListDevelopersRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListDevelopersResponse
     */
    public function listDevelopersWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDevelopersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->accountIds) {
            $request->accountIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->accountIds, 'accountIds', 'json');
        }

        $query = [];
        if (null !== $request->accountIdsShrink) {
            @$query['accountIds'] = $request->accountIdsShrink;
        }

        if (null !== $request->enterpriseId) {
            @$query['enterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->roleId) {
            @$query['roleId'] = $request->roleId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDevelopers',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/developers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDevelopersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询开发者列表.
     *
     * @param request - ListDevelopersRequest
     *
     * @returns ListDevelopersResponse
     *
     * @param ListDevelopersRequest $request
     *
     * @return ListDevelopersResponse
     */
    public function listDevelopers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDevelopersWithOptions($request, $headers, $runtime);
    }

    /**
     * 此PBC依赖的PBC列表(下游游PBC).
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDownstreamPbcResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListDownstreamPbcResponse
     */
    public function listDownstreamPbcWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListDownstreamPbc',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-versions/' . Url::percentEncode($id) . '/commands/list-downstream',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDownstreamPbcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 此PBC依赖的PBC列表(下游游PBC).
     *
     * @returns ListDownstreamPbcResponse
     *
     * @param string $id
     *
     * @return ListDownstreamPbcResponse
     */
    public function listDownstreamPbc($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDownstreamPbcWithOptions($id, $headers, $runtime);
    }

    /**
     * 查询公司列表.
     *
     * @param request - ListEnterprisesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEnterprisesResponse
     *
     * @param ListEnterprisesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListEnterprisesResponse
     */
    public function listEnterprisesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEnterprises',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/enterprises',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEnterprisesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询公司列表.
     *
     * @param request - ListEnterprisesRequest
     *
     * @returns ListEnterprisesResponse
     *
     * @param ListEnterprisesRequest $request
     *
     * @return ListEnterprisesResponse
     */
    public function listEnterprises($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnterprisesWithOptions($request, $headers, $runtime);
    }

    /**
     * 产销环境信息列表.
     *
     * @param request - ListEnvInfosRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEnvInfosResponse
     *
     * @param ListEnvInfosRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListEnvInfosResponse
     */
    public function listEnvInfosWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['enterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->env) {
            @$query['env'] = $request->env;
        }

        if (null !== $request->pbcId) {
            @$query['pbcId'] = $request->pbcId;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEnvInfos',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/services/env/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEnvInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 产销环境信息列表.
     *
     * @param request - ListEnvInfosRequest
     *
     * @returns ListEnvInfosResponse
     *
     * @param ListEnvInfosRequest $request
     *
     * @return ListEnvInfosResponse
     */
    public function listEnvInfos($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEnvInfosWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询审核列表，支持按照审核人、申请人查询.
     *
     * @param request - ListForkReviewsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListForkReviewsResponse
     *
     * @param ListForkReviewsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListForkReviewsResponse
     */
    public function listForkReviewsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicant) {
            @$query['applicant'] = $request->applicant;
        }

        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->marketId) {
            @$query['marketId'] = $request->marketId;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->reviewer) {
            @$query['reviewer'] = $request->reviewer;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListForkReviews',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/fork-reviews',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListForkReviewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询审核列表，支持按照审核人、申请人查询.
     *
     * @param request - ListForkReviewsRequest
     *
     * @returns ListForkReviewsResponse
     *
     * @param ListForkReviewsRequest $request
     *
     * @return ListForkReviewsResponse
     */
    public function listForkReviews($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listForkReviewsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询被授权角色列表.
     *
     * @param request - ListGrantedRolesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGrantedRolesResponse
     *
     * @param ListGrantedRolesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListGrantedRolesResponse
     */
    public function listGrantedRolesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizerId) {
            @$query['authorizerId'] = $request->authorizerId;
        }

        if (null !== $request->authorizerType) {
            @$query['authorizerType'] = $request->authorizerType;
        }

        if (null !== $request->enterpriseId) {
            @$query['enterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGrantedRoles',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/roles/commands/list-granted-roles',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListGrantedRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询被授权角色列表.
     *
     * @param request - ListGrantedRolesRequest
     *
     * @returns ListGrantedRolesResponse
     *
     * @param ListGrantedRolesRequest $request
     *
     * @return ListGrantedRolesResponse
     */
    public function listGrantedRoles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGrantedRolesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询订阅当前组件的pbc的列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInvokePbcsResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListInvokePbcsResponse
     */
    public function listInvokePbcsWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListInvokePbcs',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbcs/' . Url::percentEncode($id) . '/commands/invoke-list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInvokePbcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询订阅当前组件的pbc的列表.
     *
     * @returns ListInvokePbcsResponse
     *
     * @param string $id
     *
     * @return ListInvokePbcsResponse
     */
    public function listInvokePbcs($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInvokePbcsWithOptions($id, $headers, $runtime);
    }

    /**
     * 查询审核信息列表.
     *
     * @param request - ListLibraryReviewsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLibraryReviewsResponse
     *
     * @param ListLibraryReviewsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListLibraryReviewsResponse
     */
    public function listLibraryReviewsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicant) {
            @$query['applicant'] = $request->applicant;
        }

        if (null !== $request->marketId) {
            @$query['marketId'] = $request->marketId;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->reviewer) {
            @$query['reviewer'] = $request->reviewer;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLibraryReviews',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/library-reviews',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListLibraryReviewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询审核信息列表.
     *
     * @param request - ListLibraryReviewsRequest
     *
     * @returns ListLibraryReviewsResponse
     *
     * @param ListLibraryReviewsRequest $request
     *
     * @return ListLibraryReviewsResponse
     */
    public function listLibraryReviews($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLibraryReviewsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询二方包列表.
     *
     * @param request - ListLibrarysRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLibrarysResponse
     *
     * @param ListLibrarysRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListLibrarysResponse
     */
    public function listLibrarysWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->marketId) {
            @$query['marketId'] = $request->marketId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->provider) {
            @$query['provider'] = $request->provider;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLibrarys',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/librarys',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListLibrarysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询二方包列表.
     *
     * @param request - ListLibrarysRequest
     *
     * @returns ListLibrarysResponse
     *
     * @param ListLibrarysRequest $request
     *
     * @return ListLibrarysResponse
     */
    public function listLibrarys($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLibrarysWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询市场列表.
     *
     * @param request - ListMarketsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMarketsResponse
     *
     * @param ListMarketsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListMarketsResponse
     */
    public function listMarketsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMarkets',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/markets',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMarketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询市场列表.
     *
     * @param request - ListMarketsRequest
     *
     * @returns ListMarketsResponse
     *
     * @param ListMarketsRequest $request
     *
     * @return ListMarketsResponse
     */
    public function listMarkets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMarketsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询/搜索元数据信息列表.
     *
     * @param request - ListMetadataInfosRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMetadataInfosResponse
     *
     * @param ListMetadataInfosRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListMetadataInfosResponse
     */
    public function listMetadataInfosWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->env) {
            @$query['env'] = $request->env;
        }

        if (null !== $request->namespaceId) {
            @$query['namespace_id'] = $request->namespaceId;
        }

        if (null !== $request->namespaceName) {
            @$query['namespace_name'] = $request->namespaceName;
        }

        if (null !== $request->orderBy) {
            @$query['order_by'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['order_direction'] = $request->orderDirection;
        }

        if (null !== $request->orgId) {
            @$query['org_id'] = $request->orgId;
        }

        if (null !== $request->pageNumber) {
            @$query['page_number'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->pbcId) {
            @$query['pbc_id'] = $request->pbcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMetadataInfos',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/metadata',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMetadataInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询/搜索元数据信息列表.
     *
     * @param request - ListMetadataInfosRequest
     *
     * @returns ListMetadataInfosResponse
     *
     * @param ListMetadataInfosRequest $request
     *
     * @return ListMetadataInfosResponse
     */
    public function listMetadataInfos($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMetadataInfosWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询微服务列表.
     *
     * @param request - ListMicroServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMicroServiceResponse
     *
     * @param string                  $env
     * @param ListMicroServiceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListMicroServiceResponse
     */
    public function listMicroServiceWithOptions($env, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pbcId) {
            @$query['pbcId'] = $request->pbcId;
        }

        if (null !== $request->serviceIds) {
            @$query['serviceIds'] = $request->serviceIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMicroService',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/mq/group/env/' . Url::percentEncode($env) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMicroServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询微服务列表.
     *
     * @param request - ListMicroServiceRequest
     *
     * @returns ListMicroServiceResponse
     *
     * @param string                  $env
     * @param ListMicroServiceRequest $request
     *
     * @return ListMicroServiceResponse
     */
    public function listMicroService($env, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMicroServiceWithOptions($env, $request, $headers, $runtime);
    }

    /**
     * 查询联系人组列表.
     *
     * @param request - ListMonitorContactGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMonitorContactGroupsResponse
     *
     * @param ListMonitorContactGroupsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListMonitorContactGroupsResponse
     */
    public function listMonitorContactGroupsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['enterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMonitorContactGroups',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/group',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMonitorContactGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询联系人组列表.
     *
     * @param request - ListMonitorContactGroupsRequest
     *
     * @returns ListMonitorContactGroupsResponse
     *
     * @param ListMonitorContactGroupsRequest $request
     *
     * @return ListMonitorContactGroupsResponse
     */
    public function listMonitorContactGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMonitorContactGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询联系人列表.
     *
     * @param request - ListMonitorContactsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMonitorContactsResponse
     *
     * @param ListMonitorContactsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListMonitorContactsResponse
     */
    public function listMonitorContactsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['enterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->groupId) {
            @$query['groupId'] = $request->groupId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMonitorContacts',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/contact',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMonitorContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询联系人列表.
     *
     * @param request - ListMonitorContactsRequest
     *
     * @returns ListMonitorContactsResponse
     *
     * @param ListMonitorContactsRequest $request
     *
     * @return ListMonitorContactsResponse
     */
    public function listMonitorContacts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMonitorContactsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询所有的联系人/联系人组/webhook列表.
     *
     * @param request - ListMonitorNotifyObjectsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMonitorNotifyObjectsResponse
     *
     * @param ListMonitorNotifyObjectsRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListMonitorNotifyObjectsResponse
     */
    public function listMonitorNotifyObjectsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['enterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        if (null !== $request->webhookType) {
            @$query['webhookType'] = $request->webhookType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMonitorNotifyObjects',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/alert/commands/listMonitorNotifyObjects',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMonitorNotifyObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询所有的联系人/联系人组/webhook列表.
     *
     * @param request - ListMonitorNotifyObjectsRequest
     *
     * @returns ListMonitorNotifyObjectsResponse
     *
     * @param ListMonitorNotifyObjectsRequest $request
     *
     * @return ListMonitorNotifyObjectsResponse
     */
    public function listMonitorNotifyObjects($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMonitorNotifyObjectsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询通知报警列表.
     *
     * @param request - ListMonitorTasksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMonitorTasksResponse
     *
     * @param ListMonitorTasksRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListMonitorTasksResponse
     */
    public function listMonitorTasksWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertName) {
            @$query['alertName'] = $request->alertName;
        }

        if (null !== $request->env) {
            @$query['env'] = $request->env;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pbcId) {
            @$query['pbcId'] = $request->pbcId;
        }

        if (null !== $request->serviceGroupId) {
            @$query['serviceGroupId'] = $request->serviceGroupId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMonitorTasks',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/alert/commands/listMonitorTasks',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMonitorTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询通知报警列表.
     *
     * @param request - ListMonitorTasksRequest
     *
     * @returns ListMonitorTasksResponse
     *
     * @param ListMonitorTasksRequest $request
     *
     * @return ListMonitorTasksResponse
     */
    public function listMonitorTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMonitorTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询webhook列表.
     *
     * @param request - ListMonitorWebhooksRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMonitorWebhooksResponse
     *
     * @param ListMonitorWebhooksRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListMonitorWebhooksResponse
     */
    public function listMonitorWebhooksWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['enterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->webhookType) {
            @$query['webhookType'] = $request->webhookType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMonitorWebhooks',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/webhook',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMonitorWebhooksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询webhook列表.
     *
     * @param request - ListMonitorWebhooksRequest
     *
     * @returns ListMonitorWebhooksResponse
     *
     * @param ListMonitorWebhooksRequest $request
     *
     * @return ListMonitorWebhooksResponse
     */
    public function listMonitorWebhooks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMonitorWebhooksWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询Group下的死信消息列表.
     *
     * @param request - ListMqGroupMsgsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMqGroupMsgsResponse
     *
     * @param string                 $groupId
     * @param ListMqGroupMsgsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListMqGroupMsgsResponse
     */
    public function listMqGroupMsgsWithOptions($groupId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->msgId) {
            @$query['msgId'] = $request->msgId;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMqGroupMsgs',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/mq/group/' . Url::percentEncode($groupId) . '/commands/msgs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMqGroupMsgsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Group下的死信消息列表.
     *
     * @param request - ListMqGroupMsgsRequest
     *
     * @returns ListMqGroupMsgsResponse
     *
     * @param string                 $groupId
     * @param ListMqGroupMsgsRequest $request
     *
     * @return ListMqGroupMsgsResponse
     */
    public function listMqGroupMsgs($groupId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMqGroupMsgsWithOptions($groupId, $request, $headers, $runtime);
    }

    /**
     * 查询Topic下的消息列表.
     *
     * @param request - ListMqTopicMsgsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMqTopicMsgsResponse
     *
     * @param string                 $topicId
     * @param ListMqTopicMsgsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListMqTopicMsgsResponse
     */
    public function listMqTopicMsgsWithOptions($topicId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->msgId) {
            @$query['msgId'] = $request->msgId;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMqTopicMsgs',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/mq/topic/' . Url::percentEncode($topicId) . '/commands/msgs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMqTopicMsgsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Topic下的消息列表.
     *
     * @param request - ListMqTopicMsgsRequest
     *
     * @returns ListMqTopicMsgsResponse
     *
     * @param string                 $topicId
     * @param ListMqTopicMsgsRequest $request
     *
     * @return ListMqTopicMsgsResponse
     */
    public function listMqTopicMsgs($topicId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMqTopicMsgsWithOptions($topicId, $request, $headers, $runtime);
    }

    /**
     * 查询Topic下的在线订阅列表.
     *
     * @param request - ListMqTopicSubsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMqTopicSubsResponse
     *
     * @param string                 $topicId
     * @param ListMqTopicSubsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListMqTopicSubsResponse
     */
    public function listMqTopicSubsWithOptions($topicId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->serviceName) {
            @$query['serviceName'] = $request->serviceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMqTopicSubs',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/mq/topic/' . Url::percentEncode($topicId) . '/commands/subs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMqTopicSubsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Topic下的在线订阅列表.
     *
     * @param request - ListMqTopicSubsRequest
     *
     * @returns ListMqTopicSubsResponse
     *
     * @param string                 $topicId
     * @param ListMqTopicSubsRequest $request
     *
     * @return ListMqTopicSubsResponse
     */
    public function listMqTopicSubs($topicId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMqTopicSubsWithOptions($topicId, $request, $headers, $runtime);
    }

    /**
     * 查询Topic列表.
     *
     * @param request - ListMqTopicsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMqTopicsResponse
     *
     * @param string              $env
     * @param string              $pbcId
     * @param ListMqTopicsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListMqTopicsResponse
     */
    public function listMqTopicsWithOptions($env, $pbcId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->topicName) {
            @$query['topicName'] = $request->topicName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMqTopics',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/mq/topic/env/' . Url::percentEncode($env) . '/pbcId/' . Url::percentEncode($pbcId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMqTopicsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询Topic列表.
     *
     * @param request - ListMqTopicsRequest
     *
     * @returns ListMqTopicsResponse
     *
     * @param string              $env
     * @param string              $pbcId
     * @param ListMqTopicsRequest $request
     *
     * @return ListMqTopicsResponse
     */
    public function listMqTopics($env, $pbcId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMqTopicsWithOptions($env, $pbcId, $request, $headers, $runtime);
    }

    /**
     * 查询服务调用审核列表，支持按照审核人、申请人查询.
     *
     * @param request - ListPbcInvokeReviewsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPbcInvokeReviewsResponse
     *
     * @param ListPbcInvokeReviewsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListPbcInvokeReviewsResponse
     */
    public function listPbcInvokeReviewsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicant) {
            @$query['applicant'] = $request->applicant;
        }

        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->marketId) {
            @$query['marketId'] = $request->marketId;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->orderby) {
            @$query['orderby'] = $request->orderby;
        }

        if (null !== $request->reviewer) {
            @$query['reviewer'] = $request->reviewer;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPbcInvokeReviews',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-invoke-reviews',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPbcInvokeReviewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询服务调用审核列表，支持按照审核人、申请人查询.
     *
     * @param request - ListPbcInvokeReviewsRequest
     *
     * @returns ListPbcInvokeReviewsResponse
     *
     * @param ListPbcInvokeReviewsRequest $request
     *
     * @return ListPbcInvokeReviewsResponse
     */
    public function listPbcInvokeReviews($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPbcInvokeReviewsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询我调用的pbc列表.
     *
     * @param request - ListPbcInvokesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPbcInvokesResponse
     *
     * @param ListPbcInvokesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListPbcInvokesResponse
     */
    public function listPbcInvokesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicant) {
            @$query['applicant'] = $request->applicant;
        }

        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->marketId) {
            @$query['marketId'] = $request->marketId;
        }

        if (null !== $request->pbcId) {
            @$query['pbcId'] = $request->pbcId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPbcInvokes',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-invokes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPbcInvokesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询我调用的pbc列表.
     *
     * @param request - ListPbcInvokesRequest
     *
     * @returns ListPbcInvokesResponse
     *
     * @param ListPbcInvokesRequest $request
     *
     * @return ListPbcInvokesResponse
     */
    public function listPbcInvokes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPbcInvokesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询审核信息列表.
     *
     * @param request - ListPbcReviewsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPbcReviewsResponse
     *
     * @param ListPbcReviewsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListPbcReviewsResponse
     */
    public function listPbcReviewsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicant) {
            @$query['applicant'] = $request->applicant;
        }

        if (null !== $request->marketId) {
            @$query['marketId'] = $request->marketId;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->reviewer) {
            @$query['reviewer'] = $request->reviewer;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPbcReviews',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-reviews',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPbcReviewsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询审核信息列表.
     *
     * @param request - ListPbcReviewsRequest
     *
     * @returns ListPbcReviewsResponse
     *
     * @param ListPbcReviewsRequest $request
     *
     * @return ListPbcReviewsResponse
     */
    public function listPbcReviews($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPbcReviewsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询我订阅的pbc列表.
     *
     * @param request - ListPbcSubscribeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPbcSubscribeResponse
     *
     * @param ListPbcSubscribeRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListPbcSubscribeResponse
     */
    public function listPbcSubscribeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderBy) {
            @$query['order_by'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['order_direction'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['page_number'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPbcSubscribe',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbcs/commands/list-subscribe',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPbcSubscribeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询我订阅的pbc列表.
     *
     * @param request - ListPbcSubscribeRequest
     *
     * @returns ListPbcSubscribeResponse
     *
     * @param ListPbcSubscribeRequest $request
     *
     * @return ListPbcSubscribeResponse
     */
    public function listPbcSubscribe($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPbcSubscribeWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询我创建的资产.
     *
     * @param request - ListPbcVersionBuildRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPbcVersionBuildResponse
     *
     * @param ListPbcVersionBuildRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListPbcVersionBuildResponse
     */
    public function listPbcVersionBuildWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['accountId'] = $request->accountId;
        }

        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->marketId) {
            @$query['marketId'] = $request->marketId;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPbcVersionBuild',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-versions/commands/list-build',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPbcVersionBuildResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询我创建的资产.
     *
     * @param request - ListPbcVersionBuildRequest
     *
     * @returns ListPbcVersionBuildResponse
     *
     * @param ListPbcVersionBuildRequest $request
     *
     * @return ListPbcVersionBuildResponse
     */
    public function listPbcVersionBuild($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPbcVersionBuildWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询pbc的版本号列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPbcVersionNumbersResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListPbcVersionNumbersResponse
     */
    public function listPbcVersionNumbersWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListPbcVersionNumbers',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbcs/' . Url::percentEncode($id) . '/commands/listPbcVersionNumbers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPbcVersionNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询pbc的版本号列表.
     *
     * @returns ListPbcVersionNumbersResponse
     *
     * @param string $id
     *
     * @return ListPbcVersionNumbersResponse
     */
    public function listPbcVersionNumbers($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPbcVersionNumbersWithOptions($id, $headers, $runtime);
    }

    /**
     * 查询pbc列表.
     *
     * @param request - ListPbcsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPbcsResponse
     *
     * @param ListPbcsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListPbcsResponse
     */
    public function listPbcsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->developerId) {
            @$query['developerId'] = $request->developerId;
        }

        if (null !== $request->marketId) {
            @$query['marketId'] = $request->marketId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPbcs',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbcs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPbcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询pbc列表.
     *
     * @param request - ListPbcsRequest
     *
     * @returns ListPbcsResponse
     *
     * @param ListPbcsRequest $request
     *
     * @return ListPbcsResponse
     */
    public function listPbcs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPbcsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询服务配置列表.
     *
     * @param request - ListPdpConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPdpConfigsResponse
     *
     * @param ListPdpConfigsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListPdpConfigsResponse
     */
    public function listPdpConfigsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->serviceGroupId) {
            @$query['serviceGroupId'] = $request->serviceGroupId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPdpConfigs',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/configs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPdpConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询服务配置列表.
     *
     * @param request - ListPdpConfigsRequest
     *
     * @returns ListPdpConfigsResponse
     *
     * @param ListPdpConfigsRequest $request
     *
     * @return ListPdpConfigsResponse
     */
    public function listPdpConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPdpConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询服务历史配置列表.
     *
     * @param request - ListPdpHistoryConfigsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPdpHistoryConfigsResponse
     *
     * @param ListPdpHistoryConfigsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListPdpHistoryConfigsResponse
     */
    public function listPdpHistoryConfigsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['configId'] = $request->configId;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->serviceGroupId) {
            @$query['serviceGroupId'] = $request->serviceGroupId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPdpHistoryConfigs',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/configs/history',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPdpHistoryConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询服务历史配置列表.
     *
     * @param request - ListPdpHistoryConfigsRequest
     *
     * @returns ListPdpHistoryConfigsResponse
     *
     * @param ListPdpHistoryConfigsRequest $request
     *
     * @return ListPdpHistoryConfigsResponse
     */
    public function listPdpHistoryConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPdpHistoryConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询服务的镜像.
     *
     * @param request - ListPdpImageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPdpImageResponse
     *
     * @param ListPdpImageRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListPdpImageResponse
     */
    public function listPdpImageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->serviceGroupId) {
            @$query['serviceGroupId'] = $request->serviceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPdpImage',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/services/instance/images',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPdpImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询服务的镜像.
     *
     * @param request - ListPdpImageRequest
     *
     * @returns ListPdpImageResponse
     *
     * @param ListPdpImageRequest $request
     *
     * @return ListPdpImageResponse
     */
    public function listPdpImage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPdpImageWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询泳道列表.
     *
     * @param request - ListPdpLanesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPdpLanesResponse
     *
     * @param ListPdpLanesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListPdpLanesResponse
     */
    public function listPdpLanesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->env) {
            @$query['env'] = $request->env;
        }

        if (null !== $request->inletServiceId) {
            @$query['inletServiceId'] = $request->inletServiceId;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->productId) {
            @$query['productId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPdpLanes',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/lanes',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPdpLanesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询泳道列表.
     *
     * @param request - ListPdpLanesRequest
     *
     * @returns ListPdpLanesResponse
     *
     * @param ListPdpLanesRequest $request
     *
     * @return ListPdpLanesResponse
     */
    public function listPdpLanes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPdpLanesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询微服务分组可以加入的泳道列表.
     *
     * @param tmpReq - ListPdpLanesForServiceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPdpLanesForServiceGroupResponse
     *
     * @param ListPdpLanesForServiceGroupRequest $tmpReq
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListPdpLanesForServiceGroupResponse
     */
    public function listPdpLanesForServiceGroupWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPdpLanesForServiceGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->laneIds) {
            $request->laneIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->laneIds, 'laneIds', 'simple');
        }

        $query = [];
        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->env) {
            @$query['env'] = $request->env;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->laneIdsShrink) {
            @$query['laneIds'] = $request->laneIdsShrink;
        }

        if (null !== $request->operator) {
            @$query['operator'] = $request->operator;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->serviceGroupId) {
            @$query['serviceGroupId'] = $request->serviceGroupId;
        }

        if (null !== $request->serviceId) {
            @$query['serviceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPdpLanesForServiceGroup',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/lanes/commands/list-service-group-lane',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPdpLanesForServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询微服务分组可以加入的泳道列表.
     *
     * @param request - ListPdpLanesForServiceGroupRequest
     *
     * @returns ListPdpLanesForServiceGroupResponse
     *
     * @param ListPdpLanesForServiceGroupRequest $request
     *
     * @return ListPdpLanesForServiceGroupResponse
     */
    public function listPdpLanesForServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPdpLanesForServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询日志列表.
     *
     * @param request - ListPdpLogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPdpLogsResponse
     *
     * @param ListPdpLogsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListPdpLogsResponse
     */
    public function listPdpLogsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->from) {
            @$query['from'] = $request->from;
        }

        if (null !== $request->ip) {
            @$query['ip'] = $request->ip;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->query) {
            @$query['query'] = $request->query;
        }

        if (null !== $request->serviceGroupId) {
            @$query['serviceGroupId'] = $request->serviceGroupId;
        }

        if (null !== $request->sourceType) {
            @$query['sourceType'] = $request->sourceType;
        }

        if (null !== $request->to) {
            @$query['to'] = $request->to;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPdpLogs',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/pdp-log',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPdpLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询日志列表.
     *
     * @param request - ListPdpLogsRequest
     *
     * @returns ListPdpLogsResponse
     *
     * @param ListPdpLogsRequest $request
     *
     * @return ListPdpLogsResponse
     */
    public function listPdpLogs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPdpLogsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询/搜索PdpPbc列表.
     *
     * @param tmpReq - ListPdpPbcsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPdpPbcsResponse
     *
     * @param ListPdpPbcsRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListPdpPbcsResponse
     */
    public function listPdpPbcsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPdpPbcsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->pbcIds) {
            $request->pbcIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->pbcIds, 'pbcIds', 'json');
        }

        $query = [];
        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->developerId) {
            @$query['developerId'] = $request->developerId;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pbcIdsShrink) {
            @$query['pbcIds'] = $request->pbcIdsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPdpPbcs',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/pbcs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPdpPbcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询/搜索PdpPbc列表.
     *
     * @param request - ListPdpPbcsRequest
     *
     * @returns ListPdpPbcsResponse
     *
     * @param ListPdpPbcsRequest $request
     *
     * @return ListPdpPbcsResponse
     */
    public function listPdpPbcs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPdpPbcsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询服务分组列表.
     *
     * @param tmpReq - ListPdpServiceGroupsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPdpServiceGroupsResponse
     *
     * @param ListPdpServiceGroupsRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListPdpServiceGroupsResponse
     */
    public function listPdpServiceGroupsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPdpServiceGroupsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ids) {
            $request->idsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ids, 'ids', 'json');
        }

        $query = [];
        if (null !== $request->alias) {
            @$query['alias'] = $request->alias;
        }

        if (null !== $request->enterpriseId) {
            @$query['enterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->env) {
            @$query['env'] = $request->env;
        }

        if (null !== $request->envType) {
            @$query['envType'] = $request->envType;
        }

        if (null !== $request->groupType) {
            @$query['groupType'] = $request->groupType;
        }

        if (null !== $request->idsShrink) {
            @$query['ids'] = $request->idsShrink;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->orgType) {
            @$query['orgType'] = $request->orgType;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pbcId) {
            @$query['pbcId'] = $request->pbcId;
        }

        if (null !== $request->productId) {
            @$query['productId'] = $request->productId;
        }

        if (null !== $request->region) {
            @$query['region'] = $request->region;
        }

        if (null !== $request->repoId) {
            @$query['repoId'] = $request->repoId;
        }

        if (null !== $request->serviceId) {
            @$query['serviceId'] = $request->serviceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPdpServiceGroups',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/groups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPdpServiceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询服务分组列表.
     *
     * @param request - ListPdpServiceGroupsRequest
     *
     * @returns ListPdpServiceGroupsResponse
     *
     * @param ListPdpServiceGroupsRequest $request
     *
     * @return ListPdpServiceGroupsResponse
     */
    public function listPdpServiceGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPdpServiceGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询服务列表.
     *
     * @param tmpReq - ListPdpServicesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPdpServicesResponse
     *
     * @param ListPdpServicesRequest $tmpReq
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListPdpServicesResponse
     */
    public function listPdpServicesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPdpServicesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->pdpServiceIds) {
            $request->pdpServiceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->pdpServiceIds, 'pdpServiceIds', 'json');
        }

        $query = [];
        if (null !== $request->alias) {
            @$query['alias'] = $request->alias;
        }

        if (null !== $request->enterpriseId) {
            @$query['enterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pbcId) {
            @$query['pbcId'] = $request->pbcId;
        }

        if (null !== $request->pdpServiceIdsShrink) {
            @$query['pdpServiceIds'] = $request->pdpServiceIdsShrink;
        }

        if (null !== $request->productId) {
            @$query['productId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPdpServices',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/services',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPdpServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询服务列表.
     *
     * @param request - ListPdpServicesRequest
     *
     * @returns ListPdpServicesResponse
     *
     * @param ListPdpServicesRequest $request
     *
     * @return ListPdpServicesResponse
     */
    public function listPdpServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPdpServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取权限列表.
     *
     * @param request - ListPermissionResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPermissionResourceResponse
     *
     * @param ListPermissionResourceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListPermissionResourceResponse
     */
    public function listPermissionResourceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->action) {
            @$query['action'] = $request->action;
        }

        if (null !== $request->enterpriseId) {
            @$query['enterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->operatorId) {
            @$query['operatorId'] = $request->operatorId;
        }

        if (null !== $request->operatorType) {
            @$query['operatorType'] = $request->operatorType;
        }

        if (null !== $request->resourcePrefix) {
            @$query['resourcePrefix'] = $request->resourcePrefix;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPermissionResource',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/permissions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPermissionResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取权限列表.
     *
     * @param request - ListPermissionResourceRequest
     *
     * @returns ListPermissionResourceResponse
     *
     * @param ListPermissionResourceRequest $request
     *
     * @return ListPermissionResourceResponse
     */
    public function listPermissionResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPermissionResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取前端资源权限，如按钮、页面.
     *
     * @param request - ListPermissionResourceForFrontRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPermissionResourceForFrontResponse
     *
     * @param ListPermissionResourceForFrontRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListPermissionResourceForFrontResponse
     */
    public function listPermissionResourceForFrontWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->action) {
            @$query['action'] = $request->action;
        }

        if (null !== $request->enterpriseId) {
            @$query['enterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->operatorId) {
            @$query['operatorId'] = $request->operatorId;
        }

        if (null !== $request->operatorType) {
            @$query['operatorType'] = $request->operatorType;
        }

        if (null !== $request->queryType) {
            @$query['queryType'] = $request->queryType;
        }

        if (null !== $request->resourcePrefix) {
            @$query['resourcePrefix'] = $request->resourcePrefix;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPermissionResourceForFront',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/permissions/command/front-permission',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPermissionResourceForFrontResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取前端资源权限，如按钮、页面.
     *
     * @param request - ListPermissionResourceForFrontRequest
     *
     * @returns ListPermissionResourceForFrontResponse
     *
     * @param ListPermissionResourceForFrontRequest $request
     *
     * @return ListPermissionResourceForFrontResponse
     */
    public function listPermissionResourceForFront($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPermissionResourceForFrontWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取有权限的资源,请求来源POP.
     *
     * @param request - ListPermissionResourcePopRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPermissionResourcePopResponse
     *
     * @param ListPermissionResourcePopRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListPermissionResourcePopResponse
     */
    public function listPermissionResourcePopWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->action) {
            @$query['action'] = $request->action;
        }

        if (null !== $request->operatorId) {
            @$query['operatorId'] = $request->operatorId;
        }

        if (null !== $request->operatorType) {
            @$query['operatorType'] = $request->operatorType;
        }

        if (null !== $request->resourcePrefix) {
            @$query['resourcePrefix'] = $request->resourcePrefix;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPermissionResourcePop',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/permissions/pop',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPermissionResourcePopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取有权限的资源,请求来源POP.
     *
     * @param request - ListPermissionResourcePopRequest
     *
     * @returns ListPermissionResourcePopResponse
     *
     * @param ListPermissionResourcePopRequest $request
     *
     * @return ListPermissionResourcePopResponse
     */
    public function listPermissionResourcePop($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPermissionResourcePopWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取该角色下的权限.
     *
     * @param request - ListPrivilegeByRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrivilegeByRoleResponse
     *
     * @param string                     $roleId
     * @param ListPrivilegeByRoleRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListPrivilegeByRoleResponse
     */
    public function listPrivilegeByRoleWithOptions($roleId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['accountId'] = $request->accountId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrivilegeByRole',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/roles/' . Url::percentEncode($roleId) . '/privileges',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPrivilegeByRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取该角色下的权限.
     *
     * @param request - ListPrivilegeByRoleRequest
     *
     * @returns ListPrivilegeByRoleResponse
     *
     * @param string                     $roleId
     * @param ListPrivilegeByRoleRequest $request
     *
     * @return ListPrivilegeByRoleResponse
     */
    public function listPrivilegeByRole($roleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPrivilegeByRoleWithOptions($roleId, $request, $headers, $runtime);
    }

    /**
     * 查询产品环境.
     *
     * @param request - ListProductEnvInfosRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductEnvInfosResponse
     *
     * @param ListProductEnvInfosRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListProductEnvInfosResponse
     */
    public function listProductEnvInfosWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->productId) {
            @$query['productId'] = $request->productId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProductEnvInfos',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/lanes/commands/list-product-env',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProductEnvInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询产品环境.
     *
     * @param request - ListProductEnvInfosRequest
     *
     * @returns ListProductEnvInfosResponse
     *
     * @param ListProductEnvInfosRequest $request
     *
     * @return ListProductEnvInfosResponse
     */
    public function listProductEnvInfos($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductEnvInfosWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询产品环境.
     *
     * @param request - ListProductEnvsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductEnvsResponse
     *
     * @param ListProductEnvsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListProductEnvsResponse
     */
    public function listProductEnvsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->productId) {
            @$query['productId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProductEnvs',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-resource/v1/resources/commands/list-product-env',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProductEnvsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询产品环境.
     *
     * @param request - ListProductEnvsRequest
     *
     * @returns ListProductEnvsResponse
     *
     * @param ListProductEnvsRequest $request
     *
     * @return ListProductEnvsResponse
     */
    public function listProductEnvs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductEnvsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询/搜索产品列表.
     *
     * @param request - ListProductsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductsResponse
     *
     * @param ListProductsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProductsResponse
     */
    public function listProductsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProducts',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/products',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询/搜索产品列表.
     *
     * @param request - ListProductsRequest
     *
     * @returns ListProductsResponse
     *
     * @param ListProductsRequest $request
     *
     * @return ListProductsResponse
     */
    public function listProducts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProductsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询资源列表.
     *
     * @param request - ListResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourcesResponse
     *
     * @param ListResourcesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListResourcesResponse
     */
    public function listResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->env) {
            @$query['env'] = $request->env;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->productId) {
            @$query['productId'] = $request->productId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResources',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-resource/v1/resources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询资源列表.
     *
     * @param request - ListResourcesRequest
     *
     * @returns ListResourcesResponse
     *
     * @param ListResourcesRequest $request
     *
     * @return ListResourcesResponse
     */
    public function listResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询所有审核人信息.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListReviewersResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListReviewersResponse
     */
    public function listReviewersWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListReviewers',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-reviews/commands/listReviewers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListReviewersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询所有审核人信息.
     *
     * @returns ListReviewersResponse
     *
     * @return ListReviewersResponse
     */
    public function listReviewers()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listReviewersWithOptions($headers, $runtime);
    }

    /**
     * 查询角色列表.
     *
     * @param tmpReq - ListRolesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRolesResponse
     *
     * @param ListRolesRequest $tmpReq
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListRolesResponse
     */
    public function listRolesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListRolesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->roleIds) {
            $request->roleIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roleIds, 'roleIds', 'json');
        }

        $query = [];
        if (null !== $request->authorizerId) {
            @$query['authorizerId'] = $request->authorizerId;
        }

        if (null !== $request->authorizerType) {
            @$query['authorizerType'] = $request->authorizerType;
        }

        if (null !== $request->enterpriseId) {
            @$query['enterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->platform) {
            @$query['platform'] = $request->platform;
        }

        if (null !== $request->roleIdsShrink) {
            @$query['roleIds'] = $request->roleIdsShrink;
        }

        if (null !== $request->roleType) {
            @$query['roleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRoles',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/roles',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询角色列表.
     *
     * @param request - ListRolesRequest
     *
     * @returns ListRolesResponse
     *
     * @param ListRolesRequest $request
     *
     * @return ListRolesResponse
     */
    public function listRoles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRolesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询token列表.
     *
     * @param request - ListRuntimeTokensRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRuntimeTokensResponse
     *
     * @param ListRuntimeTokensRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListRuntimeTokensResponse
     */
    public function listRuntimeTokensWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['enterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->pbcId) {
            @$query['pbcId'] = $request->pbcId;
        }

        if (null !== $request->serviceGroupId) {
            @$query['serviceGroupId'] = $request->serviceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRuntimeTokens',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/services/env/tokens',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRuntimeTokensResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询token列表.
     *
     * @param request - ListRuntimeTokensRequest
     *
     * @returns ListRuntimeTokensResponse
     *
     * @param ListRuntimeTokensRequest $request
     *
     * @return ListRuntimeTokensResponse
     */
    public function listRuntimeTokens($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRuntimeTokensWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询服务实例列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServerInstancesResponse
     *
     * @param string         $env
     * @param string         $serviceGroupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListServerInstancesResponse
     */
    public function listServerInstancesWithOptions($env, $serviceGroupId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListServerInstances',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/services/' . Url::percentEncode($serviceGroupId) . '/env/' . Url::percentEncode($env) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServerInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询服务实例列表.
     *
     * @returns ListServerInstancesResponse
     *
     * @param string $env
     * @param string $serviceGroupId
     *
     * @return ListServerInstancesResponse
     */
    public function listServerInstances($env, $serviceGroupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServerInstancesWithOptions($env, $serviceGroupId, $headers, $runtime);
    }

    /**
     * 查询多个服务监控指标.
     *
     * @param request - ListServiceMetricsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceMetricsResponse
     *
     * @param ListServiceMetricsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListServiceMetricsResponse
     */
    public function listServiceMetricsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->env) {
            @$query['env'] = $request->env;
        }

        if (null !== $request->groupId) {
            @$query['groupId'] = $request->groupId;
        }

        if (null !== $request->intervalInSec) {
            @$query['intervalInSec'] = $request->intervalInSec;
        }

        if (null !== $request->ip) {
            @$query['ip'] = $request->ip;
        }

        if (null !== $request->measures) {
            @$query['measures'] = $request->measures;
        }

        if (null !== $request->serviceGroupId) {
            @$query['serviceGroupId'] = $request->serviceGroupId;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        if (null !== $request->topicId) {
            @$query['topicId'] = $request->topicId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServiceMetrics',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/services',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListServiceMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询多个服务监控指标.
     *
     * @param request - ListServiceMetricsRequest
     *
     * @returns ListServiceMetricsResponse
     *
     * @param ListServiceMetricsRequest $request
     *
     * @return ListServiceMetricsResponse
     */
    public function listServiceMetrics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceMetricsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询申请记录列表.
     *
     * @param request - ListSettledsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSettledsResponse
     *
     * @param ListSettledsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListSettledsResponse
     */
    public function listSettledsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['accountId'] = $request->accountId;
        }

        if (null !== $request->applicant) {
            @$query['applicant'] = $request->applicant;
        }

        if (null !== $request->enterpriseName) {
            @$query['enterpriseName'] = $request->enterpriseName;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSettleds',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/settleds',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSettledsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询申请记录列表.
     *
     * @param request - ListSettledsRequest
     *
     * @returns ListSettledsResponse
     *
     * @param ListSettledsRequest $request
     *
     * @return ListSettledsResponse
     */
    public function listSettleds($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSettledsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询订阅当前组件的pbc的列表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSubscribePbcsResponse
     *
     * @param string         $pbcName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSubscribePbcsResponse
     */
    public function listSubscribePbcsWithOptions($pbcName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListSubscribePbcs',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbcs/' . Url::percentEncode($pbcName) . '/commands/subscribe-list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSubscribePbcsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询订阅当前组件的pbc的列表.
     *
     * @returns ListSubscribePbcsResponse
     *
     * @param string $pbcName
     *
     * @return ListSubscribePbcsResponse
     */
    public function listSubscribePbcs($pbcName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSubscribePbcsWithOptions($pbcName, $headers, $runtime);
    }

    /**
     * 依赖此PBC的列表(上游PBC).
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUpstreamPbcResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListUpstreamPbcResponse
     */
    public function listUpstreamPbcWithOptions($id, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListUpstreamPbc',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-/versions/' . Url::percentEncode($id) . '/commands/list-upstream',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUpstreamPbcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 依赖此PBC的列表(上游PBC).
     *
     * @returns ListUpstreamPbcResponse
     *
     * @param string $id
     *
     * @return ListUpstreamPbcResponse
     */
    public function listUpstreamPbc($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUpstreamPbcWithOptions($id, $headers, $runtime);
    }

    /**
     * 查询我关注的资产列表.
     *
     * @param request - ListWatchAssetsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWatchAssetsResponse
     *
     * @param ListWatchAssetsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListWatchAssetsResponse
     */
    public function listWatchAssetsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['accountId'] = $request->accountId;
        }

        if (null !== $request->assetType) {
            @$query['assetType'] = $request->assetType;
        }

        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->marketId) {
            @$query['marketId'] = $request->marketId;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->upshelfAssetId) {
            @$query['upshelfAssetId'] = $request->upshelfAssetId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWatchAssets',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/asset-watchs/commands/list-watch',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWatchAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询我关注的资产列表.
     *
     * @param request - ListWatchAssetsRequest
     *
     * @returns ListWatchAssetsResponse
     *
     * @param ListWatchAssetsRequest $request
     *
     * @return ListWatchAssetsResponse
     */
    public function listWatchAssets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWatchAssetsWithOptions($request, $headers, $runtime);
    }

    /**
     * 生成跳转mq控制台链接.
     *
     * @param request - ObtainMqConsoleLinkRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ObtainMqConsoleLinkResponse
     *
     * @param ObtainMqConsoleLinkRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ObtainMqConsoleLinkResponse
     */
    public function obtainMqConsoleLinkWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'ObtainMqConsoleLink',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/mq/topic/commonds/obtainMqConsoleLink',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ObtainMqConsoleLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 生成跳转mq控制台链接.
     *
     * @param request - ObtainMqConsoleLinkRequest
     *
     * @returns ObtainMqConsoleLinkResponse
     *
     * @param ObtainMqConsoleLinkRequest $request
     *
     * @return ObtainMqConsoleLinkResponse
     */
    public function obtainMqConsoleLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->obtainMqConsoleLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * 已有微服务开启分组.
     *
     * @param request - OpenServiceGroupForServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenServiceGroupForServiceResponse
     *
     * @param OpenServiceGroupForServiceRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return OpenServiceGroupForServiceResponse
     */
    public function openServiceGroupForServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'OpenServiceGroupForService',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/lanes/commands/open-group',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return OpenServiceGroupForServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 已有微服务开启分组.
     *
     * @param request - OpenServiceGroupForServiceRequest
     *
     * @returns OpenServiceGroupForServiceResponse
     *
     * @param OpenServiceGroupForServiceRequest $request
     *
     * @return OpenServiceGroupForServiceResponse
     */
    public function openServiceGroupForService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->openServiceGroupForServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * 预览组件CRD.
     *
     * @param request - PreviewComponentCrdSchemaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PreviewComponentCrdSchemaResponse
     *
     * @param PreviewComponentCrdSchemaRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return PreviewComponentCrdSchemaResponse
     */
    public function previewComponentCrdSchemaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'PreviewComponentCrdSchema',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-resource/v1/components/commonds/preview-component-schema',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PreviewComponentCrdSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预览组件CRD.
     *
     * @param request - PreviewComponentCrdSchemaRequest
     *
     * @returns PreviewComponentCrdSchemaResponse
     *
     * @param PreviewComponentCrdSchemaRequest $request
     *
     * @return PreviewComponentCrdSchemaResponse
     */
    public function previewComponentCrdSchema($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->previewComponentCrdSchemaWithOptions($request, $headers, $runtime);
    }

    /**
     * 注册Buc用户.
     *
     * @param request - RegisterBucUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterBucUserResponse
     *
     * @param RegisterBucUserRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RegisterBucUserResponse
     */
    public function registerBucUserWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'RegisterBucUser',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/bucs/logins/register',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RegisterBucUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 注册Buc用户.
     *
     * @param request - RegisterBucUserRequest
     *
     * @returns RegisterBucUserResponse
     *
     * @param RegisterBucUserRequest $request
     *
     * @return RegisterBucUserResponse
     */
    public function registerBucUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->registerBucUserWithOptions($request, $headers, $runtime);
    }

    /**
     * 取消关注资产.
     *
     * @param request - RemoveAssetWatchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveAssetWatchResponse
     *
     * @param string                  $assetId
     * @param RemoveAssetWatchRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RemoveAssetWatchResponse
     */
    public function removeAssetWatchWithOptions($assetId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->assetType) {
            @$query['assetType'] = $request->assetType;
        }

        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveAssetWatch',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/asset-watchs/' . Url::percentEncode($assetId) . '/commands/remove-watch',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveAssetWatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消关注资产.
     *
     * @param request - RemoveAssetWatchRequest
     *
     * @returns RemoveAssetWatchResponse
     *
     * @param string                  $assetId
     * @param RemoveAssetWatchRequest $request
     *
     * @return RemoveAssetWatchResponse
     */
    public function removeAssetWatch($assetId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeAssetWatchWithOptions($assetId, $request, $headers, $runtime);
    }

    /**
     * 取消依赖二方包.
     *
     * @param request - RemoveDependLibraryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveDependLibraryResponse
     *
     * @param string                     $id
     * @param RemoveDependLibraryRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return RemoveDependLibraryResponse
     */
    public function removeDependLibraryWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveDependLibrary',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/librarys/' . Url::percentEncode($id) . '/commands/remove-dependency',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RemoveDependLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消依赖二方包.
     *
     * @param request - RemoveDependLibraryRequest
     *
     * @returns RemoveDependLibraryResponse
     *
     * @param string                     $id
     * @param RemoveDependLibraryRequest $request
     *
     * @return RemoveDependLibraryResponse
     */
    public function removeDependLibrary($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeDependLibraryWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * 用指定版本部署.
     *
     * @param request - RevertPdpServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevertPdpServiceResponse
     *
     * @param RevertPdpServiceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return RevertPdpServiceResponse
     */
    public function revertPdpServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'RevertPdpService',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/deployments/commands/revert',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RevertPdpServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 用指定版本部署.
     *
     * @param request - RevertPdpServiceRequest
     *
     * @returns RevertPdpServiceResponse
     *
     * @param RevertPdpServiceRequest $request
     *
     * @return RevertPdpServiceResponse
     */
    public function revertPdpService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revertPdpServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * 撤销二方包上架审核.
     *
     * @param request - RevokeLibraryReviewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeLibraryReviewResponse
     *
     * @param RevokeLibraryReviewRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return RevokeLibraryReviewResponse
     */
    public function revokeLibraryReviewWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'RevokeLibraryReview',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/library-reviews/commands/revoke-review',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RevokeLibraryReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 撤销二方包上架审核.
     *
     * @param request - RevokeLibraryReviewRequest
     *
     * @returns RevokeLibraryReviewResponse
     *
     * @param RevokeLibraryReviewRequest $request
     *
     * @return RevokeLibraryReviewResponse
     */
    public function revokeLibraryReview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokeLibraryReviewWithOptions($request, $headers, $runtime);
    }

    /**
     * 撤销Pbc上架审核.
     *
     * @param request - RevokePbcReviewRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokePbcReviewResponse
     *
     * @param RevokePbcReviewRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RevokePbcReviewResponse
     */
    public function revokePbcReviewWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'RevokePbcReview',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-reviews/commands/revoke-review',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RevokePbcReviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 撤销Pbc上架审核.
     *
     * @param request - RevokePbcReviewRequest
     *
     * @returns RevokePbcReviewResponse
     *
     * @param RevokePbcReviewRequest $request
     *
     * @return RevokePbcReviewResponse
     */
    public function revokePbcReview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokePbcReviewWithOptions($request, $headers, $runtime);
    }

    /**
     * 取消授权.
     *
     * @param request - RevokeRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeRoleResponse
     *
     * @param string            $roleId
     * @param RevokeRoleRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return RevokeRoleResponse
     */
    public function revokeRoleWithOptions($roleId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'RevokeRole',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/roles/' . Url::percentEncode($roleId) . '/commands/revoke',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return RevokeRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消授权.
     *
     * @param request - RevokeRoleRequest
     *
     * @returns RevokeRoleResponse
     *
     * @param string            $roleId
     * @param RevokeRoleRequest $request
     *
     * @return RevokeRoleResponse
     */
    public function revokeRole($roleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokeRoleWithOptions($roleId, $request, $headers, $runtime);
    }

    /**
     * 回滚.
     *
     * @param request - RollbackPdpServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RollbackPdpServiceResponse
     *
     * @param RollbackPdpServiceRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return RollbackPdpServiceResponse
     */
    public function rollbackPdpServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'RollbackPdpService',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/deployments/commands/rollback',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RollbackPdpServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 回滚.
     *
     * @param request - RollbackPdpServiceRequest
     *
     * @returns RollbackPdpServiceResponse
     *
     * @param RollbackPdpServiceRequest $request
     *
     * @return RollbackPdpServiceResponse
     */
    public function rollbackPdpService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rollbackPdpServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询/搜索资产列表信息.
     *
     * @param tmpReq - SearchAssetsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchAssetsResponse
     *
     * @param SearchAssetsRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return SearchAssetsResponse
     */
    public function searchAssetsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SearchAssetsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->assetIndustrys) {
            $request->assetIndustrysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->assetIndustrys, 'assetIndustrys', 'json');
        }

        if (null !== $tmpReq->assetTypes) {
            $request->assetTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->assetTypes, 'assetTypes', 'json');
        }

        $query = [];
        if (null !== $request->assetIndustrysShrink) {
            @$query['assetIndustrys'] = $request->assetIndustrysShrink;
        }

        if (null !== $request->assetName) {
            @$query['assetName'] = $request->assetName;
        }

        if (null !== $request->assetTypesShrink) {
            @$query['assetTypes'] = $request->assetTypesShrink;
        }

        if (null !== $request->companyId) {
            @$query['companyId'] = $request->companyId;
        }

        if (null !== $request->marketId) {
            @$query['marketId'] = $request->marketId;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchAssets',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/markets/commands/search-asset',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询/搜索资产列表信息.
     *
     * @param request - SearchAssetsRequest
     *
     * @returns SearchAssetsResponse
     *
     * @param SearchAssetsRequest $request
     *
     * @return SearchAssetsResponse
     */
    public function searchAssets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchAssetsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询/搜索pbc资产列表信息.
     *
     * @param request - SearchPbcAssetsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchPbcAssetsResponse
     *
     * @param SearchPbcAssetsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return SearchPbcAssetsResponse
     */
    public function searchPbcAssetsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->industry) {
            @$query['industry'] = $request->industry;
        }

        if (null !== $request->keyword) {
            @$query['keyword'] = $request->keyword;
        }

        if (null !== $request->orderBy) {
            @$query['order_by'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['order_direction'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['page_number'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['page_size'] = $request->pageSize;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchPbcAssets',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/markets/commands/search',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchPbcAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询/搜索pbc资产列表信息.
     *
     * @param request - SearchPbcAssetsRequest
     *
     * @returns SearchPbcAssetsResponse
     *
     * @param SearchPbcAssetsRequest $request
     *
     * @return SearchPbcAssetsResponse
     */
    public function searchPbcAssets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchPbcAssetsWithOptions($request, $headers, $runtime);
    }

    /**
     * 分页查询调用链列表信息.
     *
     * @param request - SearchTracesByPageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchTracesByPageResponse
     *
     * @param SearchTracesByPageRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return SearchTracesByPageResponse
     */
    public function searchTracesByPageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['endTime'] = $request->endTime;
        }

        if (null !== $request->env) {
            @$query['env'] = $request->env;
        }

        if (null !== $request->minDuration) {
            @$query['minDuration'] = $request->minDuration;
        }

        if (null !== $request->operationName) {
            @$query['operationName'] = $request->operationName;
        }

        if (null !== $request->orderBy) {
            @$query['orderBy'] = $request->orderBy;
        }

        if (null !== $request->orderDirection) {
            @$query['orderDirection'] = $request->orderDirection;
        }

        if (null !== $request->pageNumber) {
            @$query['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['pageSize'] = $request->pageSize;
        }

        if (null !== $request->serviceGroupId) {
            @$query['serviceGroupId'] = $request->serviceGroupId;
        }

        if (null !== $request->serviceName) {
            @$query['serviceName'] = $request->serviceName;
        }

        if (null !== $request->startTime) {
            @$query['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchTracesByPage',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/traces',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SearchTracesByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询调用链列表信息.
     *
     * @param request - SearchTracesByPageRequest
     *
     * @returns SearchTracesByPageResponse
     *
     * @param SearchTracesByPageRequest $request
     *
     * @return SearchTracesByPageResponse
     */
    public function searchTracesByPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchTracesByPageWithOptions($request, $headers, $runtime);
    }

    /**
     * ARMS告警联系人发送手机号码验证
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendTTSVerifyLinkResponse
     *
     * @param string         $contactId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return SendTTSVerifyLinkResponse
     */
    public function sendTTSVerifyLinkWithOptions($contactId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'SendTTSVerifyLink',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/contact/commands/phoneVerify/' . Url::percentEncode($contactId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SendTTSVerifyLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ARMS告警联系人发送手机号码验证
     *
     * @returns SendTTSVerifyLinkResponse
     *
     * @param string $contactId
     *
     * @return SendTTSVerifyLinkResponse
     */
    public function sendTTSVerifyLink($contactId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sendTTSVerifyLinkWithOptions($contactId, $headers, $runtime);
    }

    /**
     * 订阅pbc.
     *
     * @param request - SubscribePbcRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubscribePbcResponse
     *
     * @param string              $pbcName
     * @param SubscribePbcRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return SubscribePbcResponse
     */
    public function subscribePbcWithOptions($pbcName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'SubscribePbc',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbcs/' . Url::percentEncode($pbcName) . '/commands/subscribe',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SubscribePbcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 订阅pbc.
     *
     * @param request - SubscribePbcRequest
     *
     * @returns SubscribePbcResponse
     *
     * @param string              $pbcName
     * @param SubscribePbcRequest $request
     *
     * @return SubscribePbcResponse
     */
    public function subscribePbc($pbcName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->subscribePbcWithOptions($pbcName, $request, $headers, $runtime);
    }

    /**
     * 同步组件的模板配置.
     *
     * @param request - SyncComponentTemplateConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncComponentTemplateConfigResponse
     *
     * @param SyncComponentTemplateConfigRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return SyncComponentTemplateConfigResponse
     */
    public function syncComponentTemplateConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SyncComponentTemplateConfig',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-resource/v1/components/commonds/sync-template-config',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SyncComponentTemplateConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 同步组件的模板配置.
     *
     * @param request - SyncComponentTemplateConfigRequest
     *
     * @returns SyncComponentTemplateConfigResponse
     *
     * @param SyncComponentTemplateConfigRequest $request
     *
     * @return SyncComponentTemplateConfigResponse
     */
    public function syncComponentTemplateConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->syncComponentTemplateConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * 转移公司.
     *
     * @param request - TransferEnterpriseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferEnterpriseResponse
     *
     * @param string                    $enterpriseId
     * @param TransferEnterpriseRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return TransferEnterpriseResponse
     */
    public function transferEnterpriseWithOptions($enterpriseId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'TransferEnterprise',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/enterprises/' . Url::percentEncode($enterpriseId) . '/commands/transfer',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TransferEnterpriseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 转移公司.
     *
     * @param request - TransferEnterpriseRequest
     *
     * @returns TransferEnterpriseResponse
     *
     * @param string                    $enterpriseId
     * @param TransferEnterpriseRequest $request
     *
     * @return TransferEnterpriseResponse
     */
    public function transferEnterprise($enterpriseId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->transferEnterpriseWithOptions($enterpriseId, $request, $headers, $runtime);
    }

    /**
     * 触发部署.
     *
     * @param request - TriggerDeploymentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TriggerDeploymentResponse
     *
     * @param TriggerDeploymentRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return TriggerDeploymentResponse
     */
    public function triggerDeploymentWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'TriggerDeployment',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/deployments',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TriggerDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 触发部署.
     *
     * @param request - TriggerDeploymentRequest
     *
     * @returns TriggerDeploymentResponse
     *
     * @param TriggerDeploymentRequest $request
     *
     * @return TriggerDeploymentResponse
     */
    public function triggerDeployment($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->triggerDeploymentWithOptions($request, $headers, $runtime);
    }

    /**
     * 上架二方包.
     *
     * @param request - UpShelfLibraryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpShelfLibraryResponse
     *
     * @param string                $id
     * @param UpShelfLibraryRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpShelfLibraryResponse
     */
    public function upShelfLibraryWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->marketId) {
            @$query['marketId'] = $request->marketId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpShelfLibrary',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/librarys/' . Url::percentEncode($id) . '/commands/up-shelf-library',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpShelfLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上架二方包.
     *
     * @param request - UpShelfLibraryRequest
     *
     * @returns UpShelfLibraryResponse
     *
     * @param string                $id
     * @param UpShelfLibraryRequest $request
     *
     * @return UpShelfLibraryResponse
     */
    public function upShelfLibrary($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upShelfLibraryWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * 上架pbc版本.
     *
     * @param request - UpShelfPbcVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpShelfPbcVersionResponse
     *
     * @param string                   $id
     * @param UpShelfPbcVersionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpShelfPbcVersionResponse
     */
    public function upShelfPbcVersionWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->marketId) {
            @$query['marketId'] = $request->marketId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpShelfPbcVersion',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-versions/' . Url::percentEncode($id) . '/commands/upShelf',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpShelfPbcVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上架pbc版本.
     *
     * @param request - UpShelfPbcVersionRequest
     *
     * @returns UpShelfPbcVersionResponse
     *
     * @param string                   $id
     * @param UpShelfPbcVersionRequest $request
     *
     * @return UpShelfPbcVersionResponse
     */
    public function upShelfPbcVersion($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upShelfPbcVersionWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * 更新组件.
     *
     * @param request - UpdateComponentRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateComponentResponse
     *
     * @param string                 $id
     * @param UpdateComponentRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateComponentResponse
     */
    public function updateComponentWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateComponent',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-resource/v1/components/' . Url::percentEncode($id) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateComponentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新组件.
     *
     * @param request - UpdateComponentRequest
     *
     * @returns UpdateComponentResponse
     *
     * @param string                 $id
     * @param UpdateComponentRequest $request
     *
     * @return UpdateComponentResponse
     */
    public function updateComponent($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateComponentWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * 更新组件模板
     *
     * @param request - UpdateComponentTemplateRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateComponentTemplateResponse
     *
     * @param string                         $id
     * @param UpdateComponentTemplateRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateComponentTemplateResponse
     */
    public function updateComponentTemplateWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateComponentTemplate',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-resource/v1/component-templates/' . Url::percentEncode($id) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateComponentTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新组件模板
     *
     * @param request - UpdateComponentTemplateRequest
     *
     * @returns UpdateComponentTemplateResponse
     *
     * @param string                         $id
     * @param UpdateComponentTemplateRequest $request
     *
     * @return UpdateComponentTemplateResponse
     */
    public function updateComponentTemplate($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateComponentTemplateWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * 更新开发者信息.
     *
     * @param request - UpdateDeveloperRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDeveloperResponse
     *
     * @param string                 $accountId
     * @param UpdateDeveloperRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateDeveloperResponse
     */
    public function updateDeveloperWithOptions($accountId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateDeveloper',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/developers/' . Url::percentEncode($accountId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDeveloperResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新开发者信息.
     *
     * @param request - UpdateDeveloperRequest
     *
     * @returns UpdateDeveloperResponse
     *
     * @param string                 $accountId
     * @param UpdateDeveloperRequest $request
     *
     * @return UpdateDeveloperResponse
     */
    public function updateDeveloper($accountId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDeveloperWithOptions($accountId, $request, $headers, $runtime);
    }

    /**
     * 更新公司信息.
     *
     * @param request - UpdateEnterpriseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEnterpriseResponse
     *
     * @param string                  $enterpriseId
     * @param UpdateEnterpriseRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateEnterpriseResponse
     */
    public function updateEnterpriseWithOptions($enterpriseId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateEnterprise',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/enterprises/' . Url::percentEncode($enterpriseId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateEnterpriseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新公司信息.
     *
     * @param request - UpdateEnterpriseRequest
     *
     * @returns UpdateEnterpriseResponse
     *
     * @param string                  $enterpriseId
     * @param UpdateEnterpriseRequest $request
     *
     * @return UpdateEnterpriseResponse
     */
    public function updateEnterprise($enterpriseId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEnterpriseWithOptions($enterpriseId, $request, $headers, $runtime);
    }

    /**
     * 修改二方包信息.
     *
     * @param request - UpdateLibraryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLibraryResponse
     *
     * @param UpdateLibraryRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateLibraryResponse
     */
    public function updateLibraryWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateLibrary',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/librarys',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateLibraryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改二方包信息.
     *
     * @param request - UpdateLibraryRequest
     *
     * @returns UpdateLibraryResponse
     *
     * @param UpdateLibraryRequest $request
     *
     * @return UpdateLibraryResponse
     */
    public function updateLibrary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLibraryWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新二方包使用说明文档.
     *
     * @param request - UpdateLibraryInstructionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLibraryInstructionResponse
     *
     * @param string                          $libraryId
     * @param UpdateLibraryInstructionRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateLibraryInstructionResponse
     */
    public function updateLibraryInstructionWithOptions($libraryId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateLibraryInstruction',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/librarys/' . Url::percentEncode($libraryId) . '/instructions',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateLibraryInstructionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新二方包使用说明文档.
     *
     * @param request - UpdateLibraryInstructionRequest
     *
     * @returns UpdateLibraryInstructionResponse
     *
     * @param string                          $libraryId
     * @param UpdateLibraryInstructionRequest $request
     *
     * @return UpdateLibraryInstructionResponse
     */
    public function updateLibraryInstruction($libraryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLibraryInstructionWithOptions($libraryId, $request, $headers, $runtime);
    }

    /**
     * 更新二方包规格
     *
     * @param request - UpdateLibrarySchemaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLibrarySchemaResponse
     *
     * @param string                     $libraryId
     * @param UpdateLibrarySchemaRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateLibrarySchemaResponse
     */
    public function updateLibrarySchemaWithOptions($libraryId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateLibrarySchema',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/librarys/' . Url::percentEncode($libraryId) . '/schemas',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateLibrarySchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新二方包规格
     *
     * @param request - UpdateLibrarySchemaRequest
     *
     * @returns UpdateLibrarySchemaResponse
     *
     * @param string                     $libraryId
     * @param UpdateLibrarySchemaRequest $request
     *
     * @return UpdateLibrarySchemaResponse
     */
    public function updateLibrarySchema($libraryId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateLibrarySchemaWithOptions($libraryId, $request, $headers, $runtime);
    }

    /**
     * 编辑应用报警任务
     *
     * @param request - UpdateMonitorArmsAlertRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMonitorArmsAlertResponse
     *
     * @param UpdateMonitorArmsAlertRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateMonitorArmsAlertResponse
     */
    public function updateMonitorArmsAlertWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateMonitorArmsAlert',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/alert/commands/updateMonitorArmsAlert',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMonitorArmsAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 编辑应用报警任务
     *
     * @param request - UpdateMonitorArmsAlertRequest
     *
     * @returns UpdateMonitorArmsAlertResponse
     *
     * @param UpdateMonitorArmsAlertRequest $request
     *
     * @return UpdateMonitorArmsAlertResponse
     */
    public function updateMonitorArmsAlert($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMonitorArmsAlertWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新联系人.
     *
     * @param request - UpdateMonitorContactRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMonitorContactResponse
     *
     * @param UpdateMonitorContactRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateMonitorContactResponse
     */
    public function updateMonitorContactWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateMonitorContact',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/contact',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMonitorContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新联系人.
     *
     * @param request - UpdateMonitorContactRequest
     *
     * @returns UpdateMonitorContactResponse
     *
     * @param UpdateMonitorContactRequest $request
     *
     * @return UpdateMonitorContactResponse
     */
    public function updateMonitorContact($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMonitorContactWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新联系人组.
     *
     * @param request - UpdateMonitorContactGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMonitorContactGroupResponse
     *
     * @param UpdateMonitorContactGroupRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateMonitorContactGroupResponse
     */
    public function updateMonitorContactGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateMonitorContactGroup',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/group',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMonitorContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新联系人组.
     *
     * @param request - UpdateMonitorContactGroupRequest
     *
     * @returns UpdateMonitorContactGroupResponse
     *
     * @param UpdateMonitorContactGroupRequest $request
     *
     * @return UpdateMonitorContactGroupResponse
     */
    public function updateMonitorContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMonitorContactGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 编辑MQ报警任务
     *
     * @param request - UpdateMonitorMqAlertRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMonitorMqAlertResponse
     *
     * @param UpdateMonitorMqAlertRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateMonitorMqAlertResponse
     */
    public function updateMonitorMqAlertWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateMonitorMqAlert',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/alert/commands/updateMonitorMqAlert',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMonitorMqAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 编辑MQ报警任务
     *
     * @param request - UpdateMonitorMqAlertRequest
     *
     * @returns UpdateMonitorMqAlertResponse
     *
     * @param UpdateMonitorMqAlertRequest $request
     *
     * @return UpdateMonitorMqAlertResponse
     */
    public function updateMonitorMqAlert($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMonitorMqAlertWithOptions($request, $headers, $runtime);
    }

    /**
     * 编辑日志报警任务
     *
     * @param request - UpdateMonitorSlsAlertRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMonitorSlsAlertResponse
     *
     * @param UpdateMonitorSlsAlertRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateMonitorSlsAlertResponse
     */
    public function updateMonitorSlsAlertWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateMonitorSlsAlert',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/alert/commands/updateMonitorSlsAlert',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMonitorSlsAlertResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 编辑日志报警任务
     *
     * @param request - UpdateMonitorSlsAlertRequest
     *
     * @returns UpdateMonitorSlsAlertResponse
     *
     * @param UpdateMonitorSlsAlertRequest $request
     *
     * @return UpdateMonitorSlsAlertResponse
     */
    public function updateMonitorSlsAlert($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMonitorSlsAlertWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新webhook.
     *
     * @param request - UpdateMonitorWebhookRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMonitorWebhookResponse
     *
     * @param UpdateMonitorWebhookRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateMonitorWebhookResponse
     */
    public function updateMonitorWebhookWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateMonitorWebhook',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-monitor/v1/monitor/webhook',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMonitorWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新webhook.
     *
     * @param request - UpdateMonitorWebhookRequest
     *
     * @returns UpdateMonitorWebhookResponse
     *
     * @param UpdateMonitorWebhookRequest $request
     *
     * @return UpdateMonitorWebhookResponse
     */
    public function updateMonitorWebhook($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMonitorWebhookWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新PBC的api规格
     *
     * @param request - UpdatePbcApiSchemaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePbcApiSchemaResponse
     *
     * @param string                    $pbcVersionId
     * @param UpdatePbcApiSchemaRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdatePbcApiSchemaResponse
     */
    public function updatePbcApiSchemaWithOptions($pbcVersionId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdatePbcApiSchema',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-versions/' . Url::percentEncode($pbcVersionId) . '/api-schemas',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePbcApiSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新PBC的api规格
     *
     * @param request - UpdatePbcApiSchemaRequest
     *
     * @returns UpdatePbcApiSchemaResponse
     *
     * @param string                    $pbcVersionId
     * @param UpdatePbcApiSchemaRequest $request
     *
     * @return UpdatePbcApiSchemaResponse
     */
    public function updatePbcApiSchema($pbcVersionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePbcApiSchemaWithOptions($pbcVersionId, $request, $headers, $runtime);
    }

    /**
     * 更新PBC使用说明文档.
     *
     * @param request - UpdatePbcInstructionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePbcInstructionResponse
     *
     * @param string                      $pbcVersionId
     * @param UpdatePbcInstructionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdatePbcInstructionResponse
     */
    public function updatePbcInstructionWithOptions($pbcVersionId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdatePbcInstruction',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-versions/' . Url::percentEncode($pbcVersionId) . '/instructions',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePbcInstructionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新PBC使用说明文档.
     *
     * @param request - UpdatePbcInstructionRequest
     *
     * @returns UpdatePbcInstructionResponse
     *
     * @param string                      $pbcVersionId
     * @param UpdatePbcInstructionRequest $request
     *
     * @return UpdatePbcInstructionResponse
     */
    public function updatePbcInstruction($pbcVersionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePbcInstructionWithOptions($pbcVersionId, $request, $headers, $runtime);
    }

    /**
     * 更新PBC规格
     *
     * @param request - UpdatePbcSchemaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePbcSchemaResponse
     *
     * @param string                 $pbcVersionId
     * @param UpdatePbcSchemaRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdatePbcSchemaResponse
     */
    public function updatePbcSchemaWithOptions($pbcVersionId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdatePbcSchema',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-versions/' . Url::percentEncode($pbcVersionId) . '/schemas',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePbcSchemaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新PBC规格
     *
     * @param request - UpdatePbcSchemaRequest
     *
     * @returns UpdatePbcSchemaResponse
     *
     * @param string                 $pbcVersionId
     * @param UpdatePbcSchemaRequest $request
     *
     * @return UpdatePbcSchemaResponse
     */
    public function updatePbcSchema($pbcVersionId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePbcSchemaWithOptions($pbcVersionId, $request, $headers, $runtime);
    }

    /**
     * 更新PBC版本.
     *
     * @param request - UpdatePbcVersionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePbcVersionResponse
     *
     * @param string                  $id
     * @param UpdatePbcVersionRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdatePbcVersionResponse
     */
    public function updatePbcVersionWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdatePbcVersion',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/catalog/v1/pbc-versions/' . Url::percentEncode($id) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePbcVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新PBC版本.
     *
     * @param request - UpdatePbcVersionRequest
     *
     * @returns UpdatePbcVersionResponse
     *
     * @param string                  $id
     * @param UpdatePbcVersionRequest $request
     *
     * @return UpdatePbcVersionResponse
     */
    public function updatePbcVersion($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePbcVersionWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * 更新服务配置信息.
     *
     * @param request - UpdatePdpConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePdpConfigResponse
     *
     * @param UpdatePdpConfigRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdatePdpConfigResponse
     */
    public function updatePdpConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdatePdpConfig',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/configs',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePdpConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新服务配置信息.
     *
     * @param request - UpdatePdpConfigRequest
     *
     * @returns UpdatePdpConfigResponse
     *
     * @param UpdatePdpConfigRequest $request
     *
     * @return UpdatePdpConfigResponse
     */
    public function updatePdpConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePdpConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新泳道.
     *
     * @param request - UpdatePdpLaneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePdpLaneResponse
     *
     * @param string               $id
     * @param UpdatePdpLaneRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdatePdpLaneResponse
     */
    public function updatePdpLaneWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdatePdpLane',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/lanes/' . Url::percentEncode($id) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePdpLaneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新泳道.
     *
     * @param request - UpdatePdpLaneRequest
     *
     * @returns UpdatePdpLaneResponse
     *
     * @param string               $id
     * @param UpdatePdpLaneRequest $request
     *
     * @return UpdatePdpLaneResponse
     */
    public function updatePdpLane($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePdpLaneWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * 更新PdpPbc.
     *
     * @param request - UpdatePdpPbcRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePdpPbcResponse
     *
     * @param UpdatePdpPbcRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdatePdpPbcResponse
     */
    public function updatePdpPbcWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdatePdpPbc',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/pbcs',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePdpPbcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新PdpPbc.
     *
     * @param request - UpdatePdpPbcRequest
     *
     * @returns UpdatePdpPbcResponse
     *
     * @param UpdatePdpPbcRequest $request
     *
     * @return UpdatePdpPbcResponse
     */
    public function updatePdpPbc($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePdpPbcWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新服务信息.
     *
     * @param request - UpdatePdpServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePdpServiceResponse
     *
     * @param UpdatePdpServiceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdatePdpServiceResponse
     */
    public function updatePdpServiceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdatePdpService',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/services',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePdpServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新服务信息.
     *
     * @param request - UpdatePdpServiceRequest
     *
     * @returns UpdatePdpServiceResponse
     *
     * @param UpdatePdpServiceRequest $request
     *
     * @return UpdatePdpServiceResponse
     */
    public function updatePdpService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePdpServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新服务分组信息.
     *
     * @param request - UpdatePdpServiceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePdpServiceGroupResponse
     *
     * @param UpdatePdpServiceGroupRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdatePdpServiceGroupResponse
     */
    public function updatePdpServiceGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdatePdpServiceGroup',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-service/v1/groups',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdatePdpServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新服务分组信息.
     *
     * @param request - UpdatePdpServiceGroupRequest
     *
     * @returns UpdatePdpServiceGroupResponse
     *
     * @param UpdatePdpServiceGroupRequest $request
     *
     * @return UpdatePdpServiceGroupResponse
     */
    public function updatePdpServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updatePdpServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新产品
     *
     * @param request - UpdateProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProductResponse
     *
     * @param UpdateProductRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProductResponse
     */
    public function updateProductWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateProduct',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-pbc/v1/products',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新产品
     *
     * @param request - UpdateProductRequest
     *
     * @returns UpdateProductResponse
     *
     * @param UpdateProductRequest $request
     *
     * @return UpdateProductResponse
     */
    public function updateProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProductWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新资源.
     *
     * @param request - UpdateResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateResourceResponse
     *
     * @param string                $id
     * @param UpdateResourceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateResourceResponse
     */
    public function updateResourceWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateResource',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/pdp-resource/v1/resources/' . Url::percentEncode($id) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新资源.
     *
     * @param request - UpdateResourceRequest
     *
     * @returns UpdateResourceResponse
     *
     * @param string                $id
     * @param UpdateResourceRequest $request
     *
     * @return UpdateResourceResponse
     */
    public function updateResource($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * 更新角色信息.
     *
     * @param request - UpdateRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRoleResponse
     *
     * @param string            $roleId
     * @param UpdateRoleRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRoleResponse
     */
    public function updateRoleWithOptions($roleId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateRole',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/roles/role-id/' . Url::percentEncode($roleId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新角色信息.
     *
     * @param request - UpdateRoleRequest
     *
     * @returns UpdateRoleResponse
     *
     * @param string            $roleId
     * @param UpdateRoleRequest $request
     *
     * @return UpdateRoleResponse
     */
    public function updateRole($roleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRoleWithOptions($roleId, $request, $headers, $runtime);
    }

    /**
     * 更新申请记录.
     *
     * @param request - UpdateSettledRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSettledResponse
     *
     * @param string               $id
     * @param UpdateSettledRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateSettledResponse
     */
    public function updateSettledWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($request->body),
        ]);
        $params = new Params([
            'action' => 'UpdateSettled',
            'version' => '2021-11-15',
            'protocol' => 'HTTPS',
            'pathname' => '/manager/v1/settleds/' . Url::percentEncode($id) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateSettledResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新申请记录.
     *
     * @param request - UpdateSettledRequest
     *
     * @returns UpdateSettledResponse
     *
     * @param string               $id
     * @param UpdateSettledRequest $request
     *
     * @return UpdateSettledResponse
     */
    public function updateSettled($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSettledWithOptions($id, $request, $headers, $runtime);
    }
}
