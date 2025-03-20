<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ESA\V20240910\Models\ActivateClientCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ActivateClientCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ActivateVersionManagementRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ActivateVersionManagementResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ApplyCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ApplyCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchDeleteKvRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchDeleteKvResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchDeleteKvShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchDeleteKvWithHighCapacityAdvanceRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchDeleteKvWithHighCapacityRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchDeleteKvWithHighCapacityResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchGetExpressionFieldsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchGetExpressionFieldsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchGetExpressionFieldsShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchPutKvRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchPutKvResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchPutKvShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchPutKvWithHighCapacityAdvanceRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchPutKvWithHighCapacityRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchPutKvWithHighCapacityResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\BlockObjectRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\BlockObjectResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\BlockObjectShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CheckAssumeSlrRoleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CheckSiteNameRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CheckSiteNameResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CheckSiteProjectNameRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CheckSiteProjectNameResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CheckUserProjectNameRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CheckUserProjectNameResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CommitRoutineStagingCodeRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CommitRoutineStagingCodeResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateCacheRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateCacheRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateClientCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateClientCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateCompressionRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateCompressionRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateCustomScenePolicyRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateCustomScenePolicyResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppRecordRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppRecordResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppVersionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppVersionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppVersionShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpRequestHeaderModificationRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpRequestHeaderModificationRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpRequestHeaderModificationRuleShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpResponseHeaderModificationRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpResponseHeaderModificationRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpResponseHeaderModificationRuleShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpsApplicationConfigurationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpsApplicationConfigurationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpsBasicConfigurationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpsBasicConfigurationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateImageTransformRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateImageTransformResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateKvNamespaceRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateKvNamespaceResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateListRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateListResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateListShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateLoadBalancerRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateLoadBalancerResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateLoadBalancerShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateNetworkOptimizationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateNetworkOptimizationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateOriginPoolRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateOriginPoolResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateOriginPoolShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateOriginProtectionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateOriginProtectionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateOriginRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateOriginRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreatePageRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreatePageResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRecordRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRecordResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRecordShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRedirectRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRedirectRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRewriteUrlRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRewriteUrlRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineRelatedRecordRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineRelatedRecordResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineRelatedRouteRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineRelatedRouteResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateScheduledPreloadExecutionsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateScheduledPreloadExecutionsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateScheduledPreloadExecutionsShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateScheduledPreloadJobRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateScheduledPreloadJobResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteCustomLogRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteCustomLogResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteCustomLogShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteDeliveryTaskRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteDeliveryTaskResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteDeliveryTaskShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSlrRoleForRealtimeLogResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWaitingRoomEventRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWaitingRoomEventResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWaitingRoomRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWaitingRoomResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWaitingRoomRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWaitingRoomRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWaitingRoomShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeactivateVersionManagementRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeactivateVersionManagementResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteCacheRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteCacheRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteClientCaCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteClientCaCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteClientCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteClientCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteCompressionRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteCompressionRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteCustomScenePolicyRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteCustomScenePolicyResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteEdgeContainerAppRecordRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteEdgeContainerAppRecordResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteEdgeContainerAppRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteEdgeContainerAppResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteEdgeContainerAppVersionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteEdgeContainerAppVersionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteHttpRequestHeaderModificationRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteHttpRequestHeaderModificationRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteHttpResponseHeaderModificationRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteHttpResponseHeaderModificationRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteHttpsApplicationConfigurationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteHttpsApplicationConfigurationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteHttpsBasicConfigurationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteHttpsBasicConfigurationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteImageTransformRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteImageTransformResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteKvNamespaceRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteKvNamespaceResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteKvRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteKvResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteListRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteListResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteLoadBalancerRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteLoadBalancerResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteNetworkOptimizationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteNetworkOptimizationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteOriginPoolRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteOriginPoolResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteOriginProtectionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteOriginProtectionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteOriginRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteOriginRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeletePageRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeletePageResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRecordRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRecordResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRedirectRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRedirectRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRewriteUrlRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRewriteUrlRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRoutineCodeVersionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRoutineCodeVersionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRoutineRelatedRecordRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRoutineRelatedRecordResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRoutineRelatedRouteRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRoutineRelatedRouteResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRoutineRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRoutineResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteScheduledPreloadExecutionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteScheduledPreloadExecutionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteScheduledPreloadJobRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteScheduledPreloadJobResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteSiteDeliveryTaskRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteSiteDeliveryTaskResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteSiteRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteSiteResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteUserDeliveryTaskRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteUserDeliveryTaskResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteWaitingRoomEventRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteWaitingRoomEventResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteWaitingRoomRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteWaitingRoomResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteWaitingRoomRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteWaitingRoomRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeCustomScenePoliciesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeCustomScenePoliciesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeDDoSAllEventListRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeDDoSAllEventListResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeDDoSBpsListRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeDDoSBpsListResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeDDoSL7QpsListRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeDDoSL7QpsListResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeEdgeContainerAppStatsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeEdgeContainerAppStatsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeHttpDDoSAttackIntelligentProtectionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeHttpDDoSAttackIntelligentProtectionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeHttpDDoSAttackProtectionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeHttpDDoSAttackProtectionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeKvAccountStatusResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribePreloadTasksRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribePreloadTasksResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribePurgeTasksRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribePurgeTasksResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeRatePlanInstanceStatusRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeRatePlanInstanceStatusResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DisableCustomScenePolicyRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DisableCustomScenePolicyResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\EditSiteWafSettingsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\EditSiteWafSettingsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\EditSiteWafSettingsShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\EnableCustomScenePolicyRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\EnableCustomScenePolicyResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ExportRecordsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ExportRecordsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetCacheReserveSpecificationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetCacheRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetCacheRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetCacheTagRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetCacheTagResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetCertificateQuotaRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetCertificateQuotaResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetClientCaCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetClientCaCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetClientCertificateHostnamesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetClientCertificateHostnamesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetClientCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetClientCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetCnameFlatteningRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetCnameFlatteningResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetCompressionRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetCompressionRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetDevelopmentModeRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetDevelopmentModeResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppLogRiverRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppLogRiverResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppResourceReserveRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppResourceReserveResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppStatusRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppStatusResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppVersionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppVersionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerDeployRegionsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerDeployRegionsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerLogsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerLogsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerStagingDeployStatusRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerStagingDeployStatusResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerTerminalRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerTerminalResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetHttpRequestHeaderModificationRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetHttpRequestHeaderModificationRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetHttpResponseHeaderModificationRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetHttpResponseHeaderModificationRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetHttpsApplicationConfigurationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetHttpsApplicationConfigurationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetHttpsBasicConfigurationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetHttpsBasicConfigurationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetImageTransformRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetImageTransformResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetIPv6Request;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetIPv6Response;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetKvAccountResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetKvNamespaceRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetKvNamespaceResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetKvRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetKvResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetListRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetListResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetLoadBalancerRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetLoadBalancerResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetManagedTransformRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetManagedTransformResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetNetworkOptimizationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetNetworkOptimizationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginPoolRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginPoolResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetPageRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetPageResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetPurgeQuotaRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetPurgeQuotaResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRealtimeDeliveryFieldRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRealtimeDeliveryFieldResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRecordRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRecordResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRedirectRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRedirectRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRewriteUrlRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRewriteUrlRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineStagingCodeUploadInfoRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineStagingCodeUploadInfoResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineStagingEnvIpResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineUserInfoResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetScheduledPreloadJobRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetScheduledPreloadJobResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSeoBypassRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSeoBypassResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteCurrentNSRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteCurrentNSResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteCustomLogRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteCustomLogResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteDeliveryTaskRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteDeliveryTaskResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteLogDeliveryQuotaRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteLogDeliveryQuotaResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteNameExclusiveRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteNameExclusiveResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSitePauseRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSitePauseResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteWafSettingsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteWafSettingsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetTieredCacheRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetTieredCacheResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetUploadTaskRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetUploadTaskResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetUserDeliveryTaskRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetUserDeliveryTaskResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetUserLogDeliveryQuotaRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetUserLogDeliveryQuotaResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafBotAppKeyResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCacheReserveInstancesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCacheReserveInstancesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCacheRulesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCacheRulesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCertificatesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCertificatesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCiphersRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCiphersResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListClientCaCertificatesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListClientCaCertificatesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListClientCertificatesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListClientCertificatesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCompressionRulesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCompressionRulesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppRecordsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppRecordsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppVersionsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppVersionsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerRecordsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerRecordsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeRoutinePlansResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeRoutineRecordsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeRoutineRecordsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListHttpRequestHeaderModificationRulesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListHttpRequestHeaderModificationRulesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListHttpResponseHeaderModificationRulesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListHttpResponseHeaderModificationRulesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListHttpsApplicationConfigurationsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListHttpsApplicationConfigurationsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListHttpsBasicConfigurationsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListHttpsBasicConfigurationsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListImageTransformsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListImageTransformsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListInstanceQuotasRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListInstanceQuotasResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListInstanceQuotasWithUsageRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListInstanceQuotasWithUsageResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListKvsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListKvsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListListsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListListsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListListsShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancerOriginStatusRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancerOriginStatusResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancerRegionsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancerRegionsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancersRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancersResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListManagedRulesGroupsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListManagedRulesGroupsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListNetworkOptimizationsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListNetworkOptimizationsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginPoolsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginPoolsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginRulesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginRulesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListPagesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListPagesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListPagesShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRecordsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRecordsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRedirectRulesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRedirectRulesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRewriteUrlRulesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRewriteUrlRulesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRoutineCanaryAreasResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRoutineOptionalSpecsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListScheduledPreloadExecutionsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListScheduledPreloadExecutionsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListScheduledPreloadJobsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListScheduledPreloadJobsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteDeliveryTasksRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteDeliveryTasksResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSitesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSitesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSitesShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUploadTasksRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUploadTasksResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUserDeliveryTasksRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUserDeliveryTasksResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUserRatePlanInstancesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUserRatePlanInstancesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafManagedRulesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafManagedRulesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafManagedRulesShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafPhasesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafPhasesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafTemplateRulesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafTemplateRulesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafTemplateRulesShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafUsageOfRulesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafUsageOfRulesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWaitingRoomEventsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWaitingRoomEventsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWaitingRoomRulesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWaitingRoomRulesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWaitingRoomsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWaitingRoomsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\PreloadCachesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PreloadCachesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\PreloadCachesShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PublishEdgeContainerAppVersionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PublishEdgeContainerAppVersionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\PublishEdgeContainerAppVersionShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PublishRoutineCodeVersionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PublishRoutineCodeVersionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\PublishRoutineCodeVersionShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PurchaseCacheReserveRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PurchaseCacheReserveResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\PurchaseRatePlanRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PurchaseRatePlanResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\PurgeCachesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PurgeCachesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\PurgeCachesShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PutKvRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PutKvResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\PutKvWithHighCapacityAdvanceRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PutKvWithHighCapacityRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PutKvWithHighCapacityResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\RebuildEdgeContainerAppStagingEnvRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\RebuildEdgeContainerAppStagingEnvResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ResetScheduledPreloadJobRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ResetScheduledPreloadJobResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\RevokeClientCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\RevokeClientCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\RollbackEdgeContainerAppVersionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\RollbackEdgeContainerAppVersionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\SetCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\SetCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\SetClientCertificateHostnamesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\SetClientCertificateHostnamesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\SetClientCertificateHostnamesShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\SetHttpDDoSAttackIntelligentProtectionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\SetHttpDDoSAttackIntelligentProtectionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\SetHttpDDoSAttackProtectionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\SetHttpDDoSAttackProtectionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\StartScheduledPreloadExecutionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\StartScheduledPreloadExecutionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\StopScheduledPreloadExecutionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\StopScheduledPreloadExecutionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateCacheReserveSpecRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateCacheReserveSpecResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateCacheRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateCacheRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateCacheTagRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateCacheTagResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateCnameFlatteningRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateCnameFlatteningResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateCompressionRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateCompressionRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateCustomScenePolicyRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateCustomScenePolicyResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateDevelopmentModeRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateDevelopmentModeResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateEdgeContainerAppLogRiverRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateEdgeContainerAppLogRiverResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateEdgeContainerAppResourceReserveRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateEdgeContainerAppResourceReserveResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateEdgeContainerAppResourceReserveShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateHttpRequestHeaderModificationRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateHttpRequestHeaderModificationRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateHttpRequestHeaderModificationRuleShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateHttpResponseHeaderModificationRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateHttpResponseHeaderModificationRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateHttpResponseHeaderModificationRuleShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateHttpsApplicationConfigurationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateHttpsApplicationConfigurationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateHttpsBasicConfigurationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateHttpsBasicConfigurationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateImageTransformRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateImageTransformResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateIPv6Request;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateIPv6Response;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateListRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateListResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateListShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateLoadBalancerRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateLoadBalancerResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateLoadBalancerShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateManagedTransformRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateManagedTransformResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateNetworkOptimizationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateNetworkOptimizationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateOriginPoolRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateOriginPoolResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateOriginPoolShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateOriginProtectionIpWhiteListRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateOriginProtectionIpWhiteListResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateOriginProtectionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateOriginProtectionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateOriginRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateOriginRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdatePageRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdatePageResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRatePlanSpecRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRatePlanSpecResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRecordRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRecordResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRecordShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRedirectRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRedirectRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRewriteUrlRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRewriteUrlRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateScheduledPreloadExecutionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateScheduledPreloadExecutionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSeoBypassRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSeoBypassResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteAccessTypeRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteAccessTypeResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteCoverageRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteCoverageResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteCustomLogRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteCustomLogResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteCustomLogShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteDeliveryTaskRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteDeliveryTaskResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteDeliveryTaskStatusRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteDeliveryTaskStatusResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteNameExclusiveRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteNameExclusiveResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSitePauseRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSitePauseResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteVanityNSRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteVanityNSResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateTieredCacheRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateTieredCacheResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateUserDeliveryTaskRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateUserDeliveryTaskResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateUserDeliveryTaskStatusRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateUserDeliveryTaskStatusResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateWaitingRoomEventRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateWaitingRoomEventResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateWaitingRoomRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateWaitingRoomResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateWaitingRoomRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateWaitingRoomRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateWaitingRoomShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UploadClientCaCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UploadClientCaCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UploadFileAdvanceRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UploadFileRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UploadFileResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\VerifySiteRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\VerifySiteResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\Models\AuthorizeFileUploadResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest;
use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\FileForm\FileForm\FileField;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class ESA extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('esa', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary Activates the client based on the certificate ID.
     *  *
     * @param ActivateClientCertificateRequest $request ActivateClientCertificateRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ActivateClientCertificateResponse ActivateClientCertificateResponse
     */
    public function activateClientCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ActivateClientCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ActivateClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ActivateClientCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Activates the client based on the certificate ID.
     *  *
     * @param ActivateClientCertificateRequest $request ActivateClientCertificateRequest
     *
     * @return ActivateClientCertificateResponse ActivateClientCertificateResponse
     */
    public function activateClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateClientCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Enable Version Management
     *  *
     * @param ActivateVersionManagementRequest $request ActivateVersionManagementRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ActivateVersionManagementResponse ActivateVersionManagementResponse
     */
    public function activateVersionManagementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ActivateVersionManagement',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ActivateVersionManagementResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ActivateVersionManagementResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Enable Version Management
     *  *
     * @param ActivateVersionManagementRequest $request ActivateVersionManagementRequest
     *
     * @return ActivateVersionManagementResponse ActivateVersionManagementResponse
     */
    public function activateVersionManagement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateVersionManagementWithOptions($request, $runtime);
    }

    /**
     * @summary Applies for a free SSL certificate.
     *  *
     * @param ApplyCertificateRequest $request ApplyCertificateRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyCertificateResponse ApplyCertificateResponse
     */
    public function applyCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ApplyCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ApplyCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Applies for a free SSL certificate.
     *  *
     * @param ApplyCertificateRequest $request ApplyCertificateRequest
     *
     * @return ApplyCertificateResponse ApplyCertificateResponse
     */
    public function applyCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Adds DNS records of different record types at a time..
     *  *
     * @description This operation allows you to create or update multiple DNS records at a time. It is suitable for managing a large number of DNS configurations. Supported record types include but are not limited to A/AAAA, CNAME, NS, MX, TXT, CAA, SRV, and URI. The operation allows you to configure the priority, flag, tag, and weight for DNS records. In addition, for specific types of records, such as CERT, SSHFP, SMIMEA, and TLSA, advanced settings such as certificate information and encryption algorithms are also supported.
     * Successful and failed records along with error messages are listed in the response.
     *  *
     * @param BatchCreateRecordsRequest $tmpReq  BatchCreateRecordsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchCreateRecordsResponse BatchCreateRecordsResponse
     */
    public function batchCreateRecordsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchCreateRecordsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->recordList)) {
            $request->recordListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->recordList, 'RecordList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->recordListShrink)) {
            $query['RecordList'] = $request->recordListShrink;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchCreateRecords',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return BatchCreateRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchCreateRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Adds DNS records of different record types at a time..
     *  *
     * @description This operation allows you to create or update multiple DNS records at a time. It is suitable for managing a large number of DNS configurations. Supported record types include but are not limited to A/AAAA, CNAME, NS, MX, TXT, CAA, SRV, and URI. The operation allows you to configure the priority, flag, tag, and weight for DNS records. In addition, for specific types of records, such as CERT, SSHFP, SMIMEA, and TLSA, advanced settings such as certificate information and encryption algorithms are also supported.
     * Successful and failed records along with error messages are listed in the response.
     *  *
     * @param BatchCreateRecordsRequest $request BatchCreateRecordsRequest
     *
     * @return BatchCreateRecordsResponse BatchCreateRecordsResponse
     */
    public function batchCreateRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes key-value pairs from a namespace at a time based on keys.
     *  *
     * @param BatchDeleteKvRequest $tmpReq  BatchDeleteKvRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDeleteKvResponse BatchDeleteKvResponse
     */
    public function batchDeleteKvWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchDeleteKvShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->keys)) {
            $request->keysShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->keys, 'Keys', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $body = [];
        if (!Utils::isUnset($request->keysShrink)) {
            $body['Keys'] = $request->keysShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteKv',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return BatchDeleteKvResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchDeleteKvResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes key-value pairs from a namespace at a time based on keys.
     *  *
     * @param BatchDeleteKvRequest $request BatchDeleteKvRequest
     *
     * @return BatchDeleteKvResponse BatchDeleteKvResponse
     */
    public function batchDeleteKv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteKvWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes multiple key-value pairs from a namespace at a time based on specified keys. The request body can be up to 100 MB.
     *  *
     * @description This operation allows you to upload a larger request body than by using [BatchDeleteKv](https://help.aliyun.com/document_detail/2850204.html). For small request bodies, we recommend that you use [BatchDeleteKv](https://help.aliyun.com/document_detail/2850204.html) to minimize the server processing time. This operation must be called by using SDKs. The following sample code uses the Golang SDK and BatchDeleteKvWithHighCapacityAdvance to call the operation.
     *     func TestBatchDeleteWithHighCapacity() error {
     *     	// Initialize the configurations.
     *     	cfg := new(openapi.Config)
     *     	cfg.SetAccessKeyId("xxxxxxxxx")
     *     	cfg.SetAccessKeySecret("xxxxxxxxxx")
     *     	cli, err := NewClient(cfg)
     *     	if err != nil {
     *     		return err
     *     	}
     *     	runtime := &util.RuntimeOptions{}
     *     	// Construct a request for deleting key-value pairs at a time.
     *     	namespace := "test_batch_put"
     *     	rawReq := BatchDeleteKvRequest{
     *     		Namespace: &namespace,
     *     	}
     *     	for i := 0; i < 10000; i++ {
     *     		key := fmt.Sprintf("test_key_%d", i)
     *     		rawReq.Keys = append(rawReq.Keys, &key)
     *     	}
     *     	payload, err := json.Marshal(rawReq)
     *     	if err != nil {
     *     		return err
     *     	}
     *     	// If the payload is greater than 2 MB, call the BatchDeleteKvWithHighCapacity operation for deletion.
     *     	reqHighCapacity := BatchDeleteKvWithHighCapacityAdvanceRequest{
     *     		Namespace: &namespace,
     *     		UrlObject: bytes.NewReader(payload),
     *     	}
     *     	resp, err := cli.BatchDeleteKvWithHighCapacityAdvance(&reqHighCapacity, runtime)
     *     	if err != nil {
     *     		return err
     *     	}
     *     	return nil
     *     }
     *  *
     * @param BatchDeleteKvWithHighCapacityRequest $request BatchDeleteKvWithHighCapacityRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDeleteKvWithHighCapacityResponse BatchDeleteKvWithHighCapacityResponse
     */
    public function batchDeleteKvWithHighCapacityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteKvWithHighCapacity',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return BatchDeleteKvWithHighCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchDeleteKvWithHighCapacityResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes multiple key-value pairs from a namespace at a time based on specified keys. The request body can be up to 100 MB.
     *  *
     * @description This operation allows you to upload a larger request body than by using [BatchDeleteKv](https://help.aliyun.com/document_detail/2850204.html). For small request bodies, we recommend that you use [BatchDeleteKv](https://help.aliyun.com/document_detail/2850204.html) to minimize the server processing time. This operation must be called by using SDKs. The following sample code uses the Golang SDK and BatchDeleteKvWithHighCapacityAdvance to call the operation.
     *     func TestBatchDeleteWithHighCapacity() error {
     *     	// Initialize the configurations.
     *     	cfg := new(openapi.Config)
     *     	cfg.SetAccessKeyId("xxxxxxxxx")
     *     	cfg.SetAccessKeySecret("xxxxxxxxxx")
     *     	cli, err := NewClient(cfg)
     *     	if err != nil {
     *     		return err
     *     	}
     *     	runtime := &util.RuntimeOptions{}
     *     	// Construct a request for deleting key-value pairs at a time.
     *     	namespace := "test_batch_put"
     *     	rawReq := BatchDeleteKvRequest{
     *     		Namespace: &namespace,
     *     	}
     *     	for i := 0; i < 10000; i++ {
     *     		key := fmt.Sprintf("test_key_%d", i)
     *     		rawReq.Keys = append(rawReq.Keys, &key)
     *     	}
     *     	payload, err := json.Marshal(rawReq)
     *     	if err != nil {
     *     		return err
     *     	}
     *     	// If the payload is greater than 2 MB, call the BatchDeleteKvWithHighCapacity operation for deletion.
     *     	reqHighCapacity := BatchDeleteKvWithHighCapacityAdvanceRequest{
     *     		Namespace: &namespace,
     *     		UrlObject: bytes.NewReader(payload),
     *     	}
     *     	resp, err := cli.BatchDeleteKvWithHighCapacityAdvance(&reqHighCapacity, runtime)
     *     	if err != nil {
     *     		return err
     *     	}
     *     	return nil
     *     }
     *  *
     * @param BatchDeleteKvWithHighCapacityRequest $request BatchDeleteKvWithHighCapacityRequest
     *
     * @return BatchDeleteKvWithHighCapacityResponse BatchDeleteKvWithHighCapacityResponse
     */
    public function batchDeleteKvWithHighCapacity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteKvWithHighCapacityWithOptions($request, $runtime);
    }

    /**
     * @param BatchDeleteKvWithHighCapacityAdvanceRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return BatchDeleteKvWithHighCapacityResponse
     */
    public function batchDeleteKvWithHighCapacityAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'ESA',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $batchDeleteKvWithHighCapacityReq = new BatchDeleteKvWithHighCapacityRequest([]);
        OpenApiUtilClient::convert($request, $batchDeleteKvWithHighCapacityReq);
        if (!Utils::isUnset($request->urlObject)) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->urlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $batchDeleteKvWithHighCapacityReq->url = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->batchDeleteKvWithHighCapacityWithOptions($batchDeleteKvWithHighCapacityReq, $runtime);
    }

    /**
     * @summary Batch queries the objects that match specific expressions.
     *  *
     * @param BatchGetExpressionFieldsRequest $tmpReq  BatchGetExpressionFieldsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchGetExpressionFieldsResponse BatchGetExpressionFieldsResponse
     */
    public function batchGetExpressionFieldsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchGetExpressionFieldsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->expressions)) {
            $request->expressionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->expressions, 'Expressions', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $body = [];
        if (!Utils::isUnset($request->expressionsShrink)) {
            $body['Expressions'] = $request->expressionsShrink;
        }
        if (!Utils::isUnset($request->phase)) {
            $body['Phase'] = $request->phase;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchGetExpressionFields',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return BatchGetExpressionFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchGetExpressionFieldsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Batch queries the objects that match specific expressions.
     *  *
     * @param BatchGetExpressionFieldsRequest $request BatchGetExpressionFieldsRequest
     *
     * @return BatchGetExpressionFieldsResponse BatchGetExpressionFieldsResponse
     */
    public function batchGetExpressionFields($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetExpressionFieldsWithOptions($request, $runtime);
    }

    /**
     * @summary Configures key-value pairs for a namespace at a time based on specified keys.
     *  *
     * @param BatchPutKvRequest $tmpReq  BatchPutKvRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchPutKvResponse BatchPutKvResponse
     */
    public function batchPutKvWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchPutKvShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->kvList)) {
            $request->kvListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->kvList, 'KvList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $body = [];
        if (!Utils::isUnset($request->kvListShrink)) {
            $body['KvList'] = $request->kvListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchPutKv',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return BatchPutKvResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchPutKvResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Configures key-value pairs for a namespace at a time based on specified keys.
     *  *
     * @param BatchPutKvRequest $request BatchPutKvRequest
     *
     * @return BatchPutKvResponse BatchPutKvResponse
     */
    public function batchPutKv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchPutKvWithOptions($request, $runtime);
    }

    /**
     * @summary Configures key-value pairs for a namespace at a time based on specified keys. The request body can be up to 100 MB.
     *  *
     * @description This operation allows you to upload a larger request body than by using [BatchPutKv](https://help.aliyun.com/document_detail/2850203.html). For small request bodies, we recommend that you use [BatchPutKv](https://help.aliyun.com/document_detail/2850203.html) to minimize the server processing time. This operation must be called by using SDKs. The following sample code uses the Golang SDK and BatchPutKvWithHighCapacityAdvance to call the operation.
     *     func TestBatchPutKvWithHighCapacity() error {
     *     	// Initialize the configurations.
     *     	cfg := new(openapi.Config)
     *     	cfg.SetAccessKeyId("xxxxxxxxx")
     *     	cfg.SetAccessKeySecret("xxxxxxxxxx")
     *     	cli, err := NewClient(cfg)
     *     	if err != nil {
     *     		return err
     *     	}
     *     	runtime := &util.RuntimeOptions{}
     *     	// Construct a request for uploading key-value pairs at a time.
     *     	namespace := "test_batch_put"
     *     	numKv := 10000
     *     	kvList := make([]*BatchPutKvRequestKvList, numKv)
     *     	test_value := strings.Repeat("a", 10*1024)
     *     	for i := 0; i < numKv; i++ {
     *     		key := fmt.Sprintf("test_key_%d", i)
     *     		value := test_value
     *     		kvList[i] = &BatchPutKvRequestKvList{
     *     			Key:   &key,
     *     			Value: &value,
     *     		}
     *     	}
     *     	rawReq := BatchPutKvRequest{
     *     		Namespace: &namespace,
     *     		KvList:    kvList,
     *     	}
     *     	payload, err := json.Marshal(rawReq)
     *     	if err != nil {
     *     		return err
     *     	}
     *     	// If the payload is greater than 2 MB, call the BatchPutKvWithHighCapacity operation for upload.
     *     	reqHighCapacity := BatchPutKvWithHighCapacityAdvanceRequest{
     *     		Namespace: &namespace,
     *     		UrlObject: bytes.NewReader(payload),
     *     	}
     *     	resp, err := cli.BatchPutKvWithHighCapacityAdvance(&reqHighCapacity, runtime)
     *     	if err != nil {
     *     		return err
     *     	}
     *     	return nil
     *     }
     *  *
     * @param BatchPutKvWithHighCapacityRequest $request BatchPutKvWithHighCapacityRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchPutKvWithHighCapacityResponse BatchPutKvWithHighCapacityResponse
     */
    public function batchPutKvWithHighCapacityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchPutKvWithHighCapacity',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return BatchPutKvWithHighCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchPutKvWithHighCapacityResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Configures key-value pairs for a namespace at a time based on specified keys. The request body can be up to 100 MB.
     *  *
     * @description This operation allows you to upload a larger request body than by using [BatchPutKv](https://help.aliyun.com/document_detail/2850203.html). For small request bodies, we recommend that you use [BatchPutKv](https://help.aliyun.com/document_detail/2850203.html) to minimize the server processing time. This operation must be called by using SDKs. The following sample code uses the Golang SDK and BatchPutKvWithHighCapacityAdvance to call the operation.
     *     func TestBatchPutKvWithHighCapacity() error {
     *     	// Initialize the configurations.
     *     	cfg := new(openapi.Config)
     *     	cfg.SetAccessKeyId("xxxxxxxxx")
     *     	cfg.SetAccessKeySecret("xxxxxxxxxx")
     *     	cli, err := NewClient(cfg)
     *     	if err != nil {
     *     		return err
     *     	}
     *     	runtime := &util.RuntimeOptions{}
     *     	// Construct a request for uploading key-value pairs at a time.
     *     	namespace := "test_batch_put"
     *     	numKv := 10000
     *     	kvList := make([]*BatchPutKvRequestKvList, numKv)
     *     	test_value := strings.Repeat("a", 10*1024)
     *     	for i := 0; i < numKv; i++ {
     *     		key := fmt.Sprintf("test_key_%d", i)
     *     		value := test_value
     *     		kvList[i] = &BatchPutKvRequestKvList{
     *     			Key:   &key,
     *     			Value: &value,
     *     		}
     *     	}
     *     	rawReq := BatchPutKvRequest{
     *     		Namespace: &namespace,
     *     		KvList:    kvList,
     *     	}
     *     	payload, err := json.Marshal(rawReq)
     *     	if err != nil {
     *     		return err
     *     	}
     *     	// If the payload is greater than 2 MB, call the BatchPutKvWithHighCapacity operation for upload.
     *     	reqHighCapacity := BatchPutKvWithHighCapacityAdvanceRequest{
     *     		Namespace: &namespace,
     *     		UrlObject: bytes.NewReader(payload),
     *     	}
     *     	resp, err := cli.BatchPutKvWithHighCapacityAdvance(&reqHighCapacity, runtime)
     *     	if err != nil {
     *     		return err
     *     	}
     *     	return nil
     *     }
     *  *
     * @param BatchPutKvWithHighCapacityRequest $request BatchPutKvWithHighCapacityRequest
     *
     * @return BatchPutKvWithHighCapacityResponse BatchPutKvWithHighCapacityResponse
     */
    public function batchPutKvWithHighCapacity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchPutKvWithHighCapacityWithOptions($request, $runtime);
    }

    /**
     * @param BatchPutKvWithHighCapacityAdvanceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return BatchPutKvWithHighCapacityResponse
     */
    public function batchPutKvWithHighCapacityAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'ESA',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $batchPutKvWithHighCapacityReq = new BatchPutKvWithHighCapacityRequest([]);
        OpenApiUtilClient::convert($request, $batchPutKvWithHighCapacityReq);
        if (!Utils::isUnset($request->urlObject)) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->urlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $batchPutKvWithHighCapacityReq->url = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->batchPutKvWithHighCapacityWithOptions($batchPutKvWithHighCapacityReq, $runtime);
    }

    /**
     * @summary Blocks URLs.
     *  *
     * @param BlockObjectRequest $tmpReq  BlockObjectRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return BlockObjectResponse BlockObjectResponse
     */
    public function blockObjectWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BlockObjectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->content)) {
            $request->contentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->contentShrink)) {
            $query['Content'] = $request->contentShrink;
        }
        if (!Utils::isUnset($request->extension)) {
            $query['Extension'] = $request->extension;
        }
        if (!Utils::isUnset($request->maxage)) {
            $query['Maxage'] = $request->maxage;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'BlockObject',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return BlockObjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BlockObjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Blocks URLs.
     *  *
     * @param BlockObjectRequest $request BlockObjectRequest
     *
     * @return BlockObjectResponse BlockObjectResponse
     */
    public function blockObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->blockObjectWithOptions($request, $runtime);
    }

    /**
     * @summary 检查实时日志slr角色是否已创建
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckAssumeSlrRoleResponse CheckAssumeSlrRoleResponse
     */
    public function checkAssumeSlrRoleWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'CheckAssumeSlrRole',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CheckAssumeSlrRoleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckAssumeSlrRoleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 检查实时日志slr角色是否已创建
     *  *
     * @return CheckAssumeSlrRoleResponse CheckAssumeSlrRoleResponse
     */
    public function checkAssumeSlrRole()
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAssumeSlrRoleWithOptions($runtime);
    }

    /**
     * @summary Checks whether a specified website name is available.
     *  *
     * @param CheckSiteNameRequest $request CheckSiteNameRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckSiteNameResponse CheckSiteNameResponse
     */
    public function checkSiteNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteName)) {
            $query['SiteName'] = $request->siteName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckSiteName',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CheckSiteNameResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckSiteNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Checks whether a specified website name is available.
     *  *
     * @param CheckSiteNameRequest $request CheckSiteNameRequest
     *
     * @return CheckSiteNameResponse CheckSiteNameResponse
     */
    public function checkSiteName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSiteNameWithOptions($request, $runtime);
    }

    /**
     * @summary Checks the name of a real-time log delivery task.
     *  *
     * @param CheckSiteProjectNameRequest $request CheckSiteProjectNameRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckSiteProjectNameResponse CheckSiteProjectNameResponse
     */
    public function checkSiteProjectNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckSiteProjectName',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CheckSiteProjectNameResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckSiteProjectNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Checks the name of a real-time log delivery task.
     *  *
     * @param CheckSiteProjectNameRequest $request CheckSiteProjectNameRequest
     *
     * @return CheckSiteProjectNameResponse CheckSiteProjectNameResponse
     */
    public function checkSiteProjectName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSiteProjectNameWithOptions($request, $runtime);
    }

    /**
     * @summary Checks the name of a real-time log delivery task by account.
     *  *
     * @param CheckUserProjectNameRequest $request CheckUserProjectNameRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckUserProjectNameResponse CheckUserProjectNameResponse
     */
    public function checkUserProjectNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckUserProjectName',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CheckUserProjectNameResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckUserProjectNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Checks the name of a real-time log delivery task by account.
     *  *
     * @param CheckUserProjectNameRequest $request CheckUserProjectNameRequest
     *
     * @return CheckUserProjectNameResponse CheckUserProjectNameResponse
     */
    public function checkUserProjectName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUserProjectNameWithOptions($request, $runtime);
    }

    /**
     * @summary Commits the unstable code in the staging environment to generate an official code version.
     *  *
     * @param CommitRoutineStagingCodeRequest $request CommitRoutineStagingCodeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CommitRoutineStagingCodeResponse CommitRoutineStagingCodeResponse
     */
    public function commitRoutineStagingCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->codeDescription)) {
            $body['CodeDescription'] = $request->codeDescription;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CommitRoutineStagingCode',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CommitRoutineStagingCodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CommitRoutineStagingCodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Commits the unstable code in the staging environment to generate an official code version.
     *  *
     * @param CommitRoutineStagingCodeRequest $request CommitRoutineStagingCodeRequest
     *
     * @return CommitRoutineStagingCodeResponse CommitRoutineStagingCodeResponse
     */
    public function commitRoutineStagingCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->commitRoutineStagingCodeWithOptions($request, $runtime);
    }

    /**
     * @summary Create a new site cache configuration
     *  *
     * @param CreateCacheRuleRequest $request CreateCacheRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCacheRuleResponse CreateCacheRuleResponse
     */
    public function createCacheRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->additionalCacheablePorts)) {
            $query['AdditionalCacheablePorts'] = $request->additionalCacheablePorts;
        }
        if (!Utils::isUnset($request->browserCacheMode)) {
            $query['BrowserCacheMode'] = $request->browserCacheMode;
        }
        if (!Utils::isUnset($request->browserCacheTtl)) {
            $query['BrowserCacheTtl'] = $request->browserCacheTtl;
        }
        if (!Utils::isUnset($request->bypassCache)) {
            $query['BypassCache'] = $request->bypassCache;
        }
        if (!Utils::isUnset($request->cacheDeceptionArmor)) {
            $query['CacheDeceptionArmor'] = $request->cacheDeceptionArmor;
        }
        if (!Utils::isUnset($request->cacheReserveEligibility)) {
            $query['CacheReserveEligibility'] = $request->cacheReserveEligibility;
        }
        if (!Utils::isUnset($request->checkPresenceCookie)) {
            $query['CheckPresenceCookie'] = $request->checkPresenceCookie;
        }
        if (!Utils::isUnset($request->checkPresenceHeader)) {
            $query['CheckPresenceHeader'] = $request->checkPresenceHeader;
        }
        if (!Utils::isUnset($request->edgeCacheMode)) {
            $query['EdgeCacheMode'] = $request->edgeCacheMode;
        }
        if (!Utils::isUnset($request->edgeCacheTtl)) {
            $query['EdgeCacheTtl'] = $request->edgeCacheTtl;
        }
        if (!Utils::isUnset($request->edgeStatusCodeCacheTtl)) {
            $query['EdgeStatusCodeCacheTtl'] = $request->edgeStatusCodeCacheTtl;
        }
        if (!Utils::isUnset($request->includeCookie)) {
            $query['IncludeCookie'] = $request->includeCookie;
        }
        if (!Utils::isUnset($request->includeHeader)) {
            $query['IncludeHeader'] = $request->includeHeader;
        }
        if (!Utils::isUnset($request->queryString)) {
            $query['QueryString'] = $request->queryString;
        }
        if (!Utils::isUnset($request->queryStringMode)) {
            $query['QueryStringMode'] = $request->queryStringMode;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->serveStale)) {
            $query['ServeStale'] = $request->serveStale;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        if (!Utils::isUnset($request->sortQueryStringForCache)) {
            $query['SortQueryStringForCache'] = $request->sortQueryStringForCache;
        }
        if (!Utils::isUnset($request->userDeviceType)) {
            $query['UserDeviceType'] = $request->userDeviceType;
        }
        if (!Utils::isUnset($request->userGeo)) {
            $query['UserGeo'] = $request->userGeo;
        }
        if (!Utils::isUnset($request->userLanguage)) {
            $query['UserLanguage'] = $request->userLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCacheRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateCacheRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateCacheRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Create a new site cache configuration
     *  *
     * @param CreateCacheRuleRequest $request CreateCacheRuleRequest
     *
     * @return CreateCacheRuleResponse CreateCacheRuleResponse
     */
    public function createCacheRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCacheRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Uses the ESA-managed certificate authority (CA) to issue client certificates.
     *  *
     * @param CreateClientCertificateRequest $request CreateClientCertificateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClientCertificateResponse CreateClientCertificateResponse
     */
    public function createClientCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $body = [];
        if (!Utils::isUnset($request->CSR)) {
            $body['CSR'] = $request->CSR;
        }
        if (!Utils::isUnset($request->pkeyType)) {
            $body['PkeyType'] = $request->pkeyType;
        }
        if (!Utils::isUnset($request->validityDays)) {
            $body['ValidityDays'] = $request->validityDays;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateClientCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateClientCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Uses the ESA-managed certificate authority (CA) to issue client certificates.
     *  *
     * @param CreateClientCertificateRequest $request CreateClientCertificateRequest
     *
     * @return CreateClientCertificateResponse CreateClientCertificateResponse
     */
    public function createClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClientCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Add a compression rule
     *  *
     * @param CreateCompressionRuleRequest $request CreateCompressionRuleRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCompressionRuleResponse CreateCompressionRuleResponse
     */
    public function createCompressionRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->brotli)) {
            $query['Brotli'] = $request->brotli;
        }
        if (!Utils::isUnset($request->gzip)) {
            $query['Gzip'] = $request->gzip;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        if (!Utils::isUnset($request->zstd)) {
            $query['Zstd'] = $request->zstd;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCompressionRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateCompressionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateCompressionRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Add a compression rule
     *  *
     * @param CreateCompressionRuleRequest $request CreateCompressionRuleRequest
     *
     * @return CreateCompressionRuleResponse CreateCompressionRuleResponse
     */
    public function createCompressionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCompressionRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an account-level custom scenario policy. You can execute a policy after you associate the policy with a website.
     *  *
     * @param CreateCustomScenePolicyRequest $request CreateCustomScenePolicyRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustomScenePolicyResponse CreateCustomScenePolicyResponse
     */
    public function createCustomScenePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->objects)) {
            $query['Objects'] = $request->objects;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCustomScenePolicy',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateCustomScenePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateCustomScenePolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates an account-level custom scenario policy. You can execute a policy after you associate the policy with a website.
     *  *
     * @param CreateCustomScenePolicyRequest $request CreateCustomScenePolicyRequest
     *
     * @return CreateCustomScenePolicyResponse CreateCustomScenePolicyResponse
     */
    public function createCustomScenePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomScenePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a containerized application. You can deploy and release a version of the application across points of presence (POPs).
     *  *
     * @param CreateEdgeContainerAppRequest $request CreateEdgeContainerAppRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEdgeContainerAppResponse CreateEdgeContainerAppResponse
     */
    public function createEdgeContainerAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->healthCheckFailTimes)) {
            $body['HealthCheckFailTimes'] = $request->healthCheckFailTimes;
        }
        if (!Utils::isUnset($request->healthCheckHost)) {
            $body['HealthCheckHost'] = $request->healthCheckHost;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $body['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $body['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckMethod)) {
            $body['HealthCheckMethod'] = $request->healthCheckMethod;
        }
        if (!Utils::isUnset($request->healthCheckPort)) {
            $body['HealthCheckPort'] = $request->healthCheckPort;
        }
        if (!Utils::isUnset($request->healthCheckSuccTimes)) {
            $body['HealthCheckSuccTimes'] = $request->healthCheckSuccTimes;
        }
        if (!Utils::isUnset($request->healthCheckTimeout)) {
            $body['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }
        if (!Utils::isUnset($request->healthCheckType)) {
            $body['HealthCheckType'] = $request->healthCheckType;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $body['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->remarks)) {
            $body['Remarks'] = $request->remarks;
        }
        if (!Utils::isUnset($request->servicePort)) {
            $body['ServicePort'] = $request->servicePort;
        }
        if (!Utils::isUnset($request->targetPort)) {
            $body['TargetPort'] = $request->targetPort;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEdgeContainerApp',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateEdgeContainerAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateEdgeContainerAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a containerized application. You can deploy and release a version of the application across points of presence (POPs).
     *  *
     * @param CreateEdgeContainerAppRequest $request CreateEdgeContainerAppRequest
     *
     * @return CreateEdgeContainerAppResponse CreateEdgeContainerAppResponse
     */
    public function createEdgeContainerApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEdgeContainerAppWithOptions($request, $runtime);
    }

    /**
     * @summary Associates a domain name with a containerized application. This way, requests destined for the associated domain name are forwarded to the application.
     *  *
     * @param CreateEdgeContainerAppRecordRequest $request CreateEdgeContainerAppRecordRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEdgeContainerAppRecordResponse CreateEdgeContainerAppRecordResponse
     */
    public function createEdgeContainerAppRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->recordName)) {
            $body['RecordName'] = $request->recordName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $body['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEdgeContainerAppRecord',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateEdgeContainerAppRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateEdgeContainerAppRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Associates a domain name with a containerized application. This way, requests destined for the associated domain name are forwarded to the application.
     *  *
     * @param CreateEdgeContainerAppRecordRequest $request CreateEdgeContainerAppRecordRequest
     *
     * @return CreateEdgeContainerAppRecordResponse CreateEdgeContainerAppRecordResponse
     */
    public function createEdgeContainerAppRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEdgeContainerAppRecordWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a version for a containerized application. You can iterate the application based on the version.
     *  *
     * @param CreateEdgeContainerAppVersionRequest $tmpReq  CreateEdgeContainerAppVersionRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEdgeContainerAppVersionResponse CreateEdgeContainerAppVersionResponse
     */
    public function createEdgeContainerAppVersionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateEdgeContainerAppVersionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->containers)) {
            $request->containersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->containers, 'Containers', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->containersShrink)) {
            $body['Containers'] = $request->containersShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->remarks)) {
            $body['Remarks'] = $request->remarks;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEdgeContainerAppVersion',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateEdgeContainerAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateEdgeContainerAppVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a version for a containerized application. You can iterate the application based on the version.
     *  *
     * @param CreateEdgeContainerAppVersionRequest $request CreateEdgeContainerAppVersionRequest
     *
     * @return CreateEdgeContainerAppVersionResponse CreateEdgeContainerAppVersionResponse
     */
    public function createEdgeContainerAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEdgeContainerAppVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Add HTTP Request Header Rule
     *  *
     * @param CreateHttpRequestHeaderModificationRuleRequest $tmpReq  CreateHttpRequestHeaderModificationRuleRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHttpRequestHeaderModificationRuleResponse CreateHttpRequestHeaderModificationRuleResponse
     */
    public function createHttpRequestHeaderModificationRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateHttpRequestHeaderModificationRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestHeaderModification)) {
            $request->requestHeaderModificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestHeaderModification, 'RequestHeaderModification', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->requestHeaderModificationShrink)) {
            $query['RequestHeaderModification'] = $request->requestHeaderModificationShrink;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHttpRequestHeaderModificationRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateHttpRequestHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateHttpRequestHeaderModificationRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Add HTTP Request Header Rule
     *  *
     * @param CreateHttpRequestHeaderModificationRuleRequest $request CreateHttpRequestHeaderModificationRuleRequest
     *
     * @return CreateHttpRequestHeaderModificationRuleResponse CreateHttpRequestHeaderModificationRuleResponse
     */
    public function createHttpRequestHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHttpRequestHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Add HTTP Response Header Rule
     *  *
     * @param CreateHttpResponseHeaderModificationRuleRequest $tmpReq  CreateHttpResponseHeaderModificationRuleRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHttpResponseHeaderModificationRuleResponse CreateHttpResponseHeaderModificationRuleResponse
     */
    public function createHttpResponseHeaderModificationRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateHttpResponseHeaderModificationRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->responseHeaderModification)) {
            $request->responseHeaderModificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->responseHeaderModification, 'ResponseHeaderModification', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->responseHeaderModificationShrink)) {
            $query['ResponseHeaderModification'] = $request->responseHeaderModificationShrink;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHttpResponseHeaderModificationRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateHttpResponseHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateHttpResponseHeaderModificationRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Add HTTP Response Header Rule
     *  *
     * @param CreateHttpResponseHeaderModificationRuleRequest $request CreateHttpResponseHeaderModificationRuleRequest
     *
     * @return CreateHttpResponseHeaderModificationRuleResponse CreateHttpResponseHeaderModificationRuleResponse
     */
    public function createHttpResponseHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHttpResponseHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Create a new site HTTPS application configuration
     *  *
     * @param CreateHttpsApplicationConfigurationRequest $request CreateHttpsApplicationConfigurationRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHttpsApplicationConfigurationResponse CreateHttpsApplicationConfigurationResponse
     */
    public function createHttpsApplicationConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->altSvc)) {
            $query['AltSvc'] = $request->altSvc;
        }
        if (!Utils::isUnset($request->altSvcClear)) {
            $query['AltSvcClear'] = $request->altSvcClear;
        }
        if (!Utils::isUnset($request->altSvcMa)) {
            $query['AltSvcMa'] = $request->altSvcMa;
        }
        if (!Utils::isUnset($request->altSvcPersist)) {
            $query['AltSvcPersist'] = $request->altSvcPersist;
        }
        if (!Utils::isUnset($request->hsts)) {
            $query['Hsts'] = $request->hsts;
        }
        if (!Utils::isUnset($request->hstsIncludeSubdomains)) {
            $query['HstsIncludeSubdomains'] = $request->hstsIncludeSubdomains;
        }
        if (!Utils::isUnset($request->hstsMaxAge)) {
            $query['HstsMaxAge'] = $request->hstsMaxAge;
        }
        if (!Utils::isUnset($request->hstsPreload)) {
            $query['HstsPreload'] = $request->hstsPreload;
        }
        if (!Utils::isUnset($request->httpsForce)) {
            $query['HttpsForce'] = $request->httpsForce;
        }
        if (!Utils::isUnset($request->httpsForceCode)) {
            $query['HttpsForceCode'] = $request->httpsForceCode;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHttpsApplicationConfiguration',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateHttpsApplicationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateHttpsApplicationConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Create a new site HTTPS application configuration
     *  *
     * @param CreateHttpsApplicationConfigurationRequest $request CreateHttpsApplicationConfigurationRequest
     *
     * @return CreateHttpsApplicationConfigurationResponse CreateHttpsApplicationConfigurationResponse
     */
    public function createHttpsApplicationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHttpsApplicationConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Create a new site HTTPS basic configuration
     *  *
     * @param CreateHttpsBasicConfigurationRequest $request CreateHttpsBasicConfigurationRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateHttpsBasicConfigurationResponse CreateHttpsBasicConfigurationResponse
     */
    public function createHttpsBasicConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ciphersuite)) {
            $query['Ciphersuite'] = $request->ciphersuite;
        }
        if (!Utils::isUnset($request->ciphersuiteGroup)) {
            $query['CiphersuiteGroup'] = $request->ciphersuiteGroup;
        }
        if (!Utils::isUnset($request->http2)) {
            $query['Http2'] = $request->http2;
        }
        if (!Utils::isUnset($request->http3)) {
            $query['Http3'] = $request->http3;
        }
        if (!Utils::isUnset($request->https)) {
            $query['Https'] = $request->https;
        }
        if (!Utils::isUnset($request->ocspStapling)) {
            $query['OcspStapling'] = $request->ocspStapling;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->tls10)) {
            $query['Tls10'] = $request->tls10;
        }
        if (!Utils::isUnset($request->tls11)) {
            $query['Tls11'] = $request->tls11;
        }
        if (!Utils::isUnset($request->tls12)) {
            $query['Tls12'] = $request->tls12;
        }
        if (!Utils::isUnset($request->tls13)) {
            $query['Tls13'] = $request->tls13;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHttpsBasicConfiguration',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateHttpsBasicConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateHttpsBasicConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Create a new site HTTPS basic configuration
     *  *
     * @param CreateHttpsBasicConfigurationRequest $request CreateHttpsBasicConfigurationRequest
     *
     * @return CreateHttpsBasicConfigurationResponse CreateHttpsBasicConfigurationResponse
     */
    public function createHttpsBasicConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHttpsBasicConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Add Site Image Transformation Configuration
     *  *
     * @param CreateImageTransformRequest $request CreateImageTransformRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateImageTransformResponse CreateImageTransformResponse
     */
    public function createImageTransformWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateImageTransform',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateImageTransformResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateImageTransformResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Add Site Image Transformation Configuration
     *  *
     * @param CreateImageTransformRequest $request CreateImageTransformRequest
     *
     * @return CreateImageTransformResponse CreateImageTransformResponse
     */
    public function createImageTransform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageTransformWithOptions($request, $runtime);
    }

    /**
     * @summary Create a namespace in your Alibaba Cloud account.
     *  *
     * @param CreateKvNamespaceRequest $request CreateKvNamespaceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateKvNamespaceResponse CreateKvNamespaceResponse
     */
    public function createKvNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateKvNamespace',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateKvNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateKvNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Create a namespace in your Alibaba Cloud account.
     *  *
     * @param CreateKvNamespaceRequest $request CreateKvNamespaceRequest
     *
     * @return CreateKvNamespaceResponse CreateKvNamespaceResponse
     */
    public function createKvNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKvNamespaceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a list. Lists are used for the referencing of values in the rules engine to implement complex logic and control in security policies.
     *  *
     * @param CreateListRequest $tmpReq  CreateListRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateListResponse CreateListResponse
     */
    public function createListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->items)) {
            $request->itemsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->items, 'Items', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->itemsShrink)) {
            $body['Items'] = $request->itemsShrink;
        }
        if (!Utils::isUnset($request->kind)) {
            $body['Kind'] = $request->kind;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateList',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a list. Lists are used for the referencing of values in the rules engine to implement complex logic and control in security policies.
     *  *
     * @param CreateListRequest $request CreateListRequest
     *
     * @return CreateListResponse CreateListResponse
     */
    public function createList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createListWithOptions($request, $runtime);
    }

    /**
     * @summary Add a New Load Balancer
     *  *
     * @description Through this API, users can configure load balancing services according to their business needs, including but not limited to adaptive routing, weighted round-robin, rule matching, health checks, and other settings, to achieve effective traffic management and optimization.
     *  *
     * @param CreateLoadBalancerRequest $tmpReq  CreateLoadBalancerRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLoadBalancerResponse CreateLoadBalancerResponse
     */
    public function createLoadBalancerWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateLoadBalancerShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->adaptiveRouting)) {
            $request->adaptiveRoutingShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->adaptiveRouting, 'AdaptiveRouting', 'json');
        }
        if (!Utils::isUnset($tmpReq->defaultPools)) {
            $request->defaultPoolsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->defaultPools, 'DefaultPools', 'json');
        }
        if (!Utils::isUnset($tmpReq->monitor)) {
            $request->monitorShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->monitor, 'Monitor', 'json');
        }
        if (!Utils::isUnset($tmpReq->randomSteering)) {
            $request->randomSteeringShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->randomSteering, 'RandomSteering', 'json');
        }
        if (!Utils::isUnset($tmpReq->rules)) {
            $request->rulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->adaptiveRoutingShrink)) {
            $query['AdaptiveRouting'] = $request->adaptiveRoutingShrink;
        }
        if (!Utils::isUnset($request->defaultPoolsShrink)) {
            $query['DefaultPools'] = $request->defaultPoolsShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->fallbackPool)) {
            $query['FallbackPool'] = $request->fallbackPool;
        }
        if (!Utils::isUnset($request->monitorShrink)) {
            $query['Monitor'] = $request->monitorShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->randomSteeringShrink)) {
            $query['RandomSteering'] = $request->randomSteeringShrink;
        }
        if (!Utils::isUnset($request->regionPools)) {
            $query['RegionPools'] = $request->regionPools;
        }
        if (!Utils::isUnset($request->rulesShrink)) {
            $query['Rules'] = $request->rulesShrink;
        }
        if (!Utils::isUnset($request->sessionAffinity)) {
            $query['SessionAffinity'] = $request->sessionAffinity;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->steeringPolicy)) {
            $query['SteeringPolicy'] = $request->steeringPolicy;
        }
        if (!Utils::isUnset($request->subRegionPools)) {
            $query['SubRegionPools'] = $request->subRegionPools;
        }
        if (!Utils::isUnset($request->ttl)) {
            $query['Ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLoadBalancer',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLoadBalancerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Add a New Load Balancer
     *  *
     * @description Through this API, users can configure load balancing services according to their business needs, including but not limited to adaptive routing, weighted round-robin, rule matching, health checks, and other settings, to achieve effective traffic management and optimization.
     *  *
     * @param CreateLoadBalancerRequest $request CreateLoadBalancerRequest
     *
     * @return CreateLoadBalancerResponse CreateLoadBalancerResponse
     */
    public function createLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * @summary Create a new site network optimization configuration
     *  *
     * @param CreateNetworkOptimizationRequest $request CreateNetworkOptimizationRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNetworkOptimizationResponse CreateNetworkOptimizationResponse
     */
    public function createNetworkOptimizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->grpc)) {
            $query['Grpc'] = $request->grpc;
        }
        if (!Utils::isUnset($request->http2Origin)) {
            $query['Http2Origin'] = $request->http2Origin;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        if (!Utils::isUnset($request->smartRouting)) {
            $query['SmartRouting'] = $request->smartRouting;
        }
        if (!Utils::isUnset($request->uploadMaxFilesize)) {
            $query['UploadMaxFilesize'] = $request->uploadMaxFilesize;
        }
        if (!Utils::isUnset($request->websocket)) {
            $query['Websocket'] = $request->websocket;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNetworkOptimization',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateNetworkOptimizationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateNetworkOptimizationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Create a new site network optimization configuration
     *  *
     * @param CreateNetworkOptimizationRequest $request CreateNetworkOptimizationRequest
     *
     * @return CreateNetworkOptimizationResponse CreateNetworkOptimizationResponse
     */
    public function createNetworkOptimization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkOptimizationWithOptions($request, $runtime);
    }

    /**
     * @summary Add a new origin address pool
     *  *
     * @description Multiple origins can be added under the origin address, supporting domain names, IPs, OSS, S3, and other types of origins. It supports authentication for OSS and S3 type origins.
     *  *
     * @param CreateOriginPoolRequest $tmpReq  CreateOriginPoolRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOriginPoolResponse CreateOriginPoolResponse
     */
    public function createOriginPoolWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateOriginPoolShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->origins)) {
            $request->originsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->origins, 'Origins', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->originsShrink)) {
            $query['Origins'] = $request->originsShrink;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOriginPool',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateOriginPoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOriginPoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Add a new origin address pool
     *  *
     * @description Multiple origins can be added under the origin address, supporting domain names, IPs, OSS, S3, and other types of origins. It supports authentication for OSS and S3 type origins.
     *  *
     * @param CreateOriginPoolRequest $request CreateOriginPoolRequest
     *
     * @return CreateOriginPoolResponse CreateOriginPoolResponse
     */
    public function createOriginPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOriginPoolWithOptions($request, $runtime);
    }

    /**
     * @summary Enables origin protection.
     *  *
     * @param CreateOriginProtectionRequest $request CreateOriginProtectionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOriginProtectionResponse CreateOriginProtectionResponse
     */
    public function createOriginProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOriginProtection',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateOriginProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOriginProtectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Enables origin protection.
     *  *
     * @param CreateOriginProtectionRequest $request CreateOriginProtectionRequest
     *
     * @return CreateOriginProtectionResponse CreateOriginProtectionResponse
     */
    public function createOriginProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOriginProtectionWithOptions($request, $runtime);
    }

    /**
     * @summary Create a new origin rule configuration for the site
     *  *
     * @param CreateOriginRuleRequest $request CreateOriginRuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOriginRuleResponse CreateOriginRuleResponse
     */
    public function createOriginRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dnsRecord)) {
            $query['DnsRecord'] = $request->dnsRecord;
        }
        if (!Utils::isUnset($request->originHost)) {
            $query['OriginHost'] = $request->originHost;
        }
        if (!Utils::isUnset($request->originHttpPort)) {
            $query['OriginHttpPort'] = $request->originHttpPort;
        }
        if (!Utils::isUnset($request->originHttpsPort)) {
            $query['OriginHttpsPort'] = $request->originHttpsPort;
        }
        if (!Utils::isUnset($request->originMtls)) {
            $query['OriginMtls'] = $request->originMtls;
        }
        if (!Utils::isUnset($request->originScheme)) {
            $query['OriginScheme'] = $request->originScheme;
        }
        if (!Utils::isUnset($request->originSni)) {
            $query['OriginSni'] = $request->originSni;
        }
        if (!Utils::isUnset($request->originVerify)) {
            $query['OriginVerify'] = $request->originVerify;
        }
        if (!Utils::isUnset($request->range)) {
            $query['Range'] = $request->range;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOriginRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateOriginRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOriginRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Create a new origin rule configuration for the site
     *  *
     * @param CreateOriginRuleRequest $request CreateOriginRuleRequest
     *
     * @return CreateOriginRuleResponse CreateOriginRuleResponse
     */
    public function createOriginRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOriginRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a custom error page, which is displayed when a request is blocked by Web Application Firewall (WAF). You can configure the HTML content, page type, and description, and submit the Base64-encoded page content.
     *  *
     * @param CreatePageRequest $request CreatePageRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePageResponse CreatePageResponse
     */
    public function createPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentType)) {
            $body['ContentType'] = $request->contentType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePage',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreatePageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a custom error page, which is displayed when a request is blocked by Web Application Firewall (WAF). You can configure the HTML content, page type, and description, and submit the Base64-encoded page content.
     *  *
     * @param CreatePageRequest $request CreatePageRequest
     *
     * @return CreatePageResponse CreatePageResponse
     */
    public function createPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPageWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a DNS record for a specific website.
     *  *
     * @param CreateRecordRequest $tmpReq  CreateRecordRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRecordResponse CreateRecordResponse
     */
    public function createRecordWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateRecordShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->authConf)) {
            $request->authConfShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->authConf, 'AuthConf', 'json');
        }
        if (!Utils::isUnset($tmpReq->data)) {
            $request->dataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->data, 'Data', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->authConfShrink)) {
            $query['AuthConf'] = $request->authConfShrink;
        }
        if (!Utils::isUnset($request->bizName)) {
            $query['BizName'] = $request->bizName;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->dataShrink)) {
            $query['Data'] = $request->dataShrink;
        }
        if (!Utils::isUnset($request->hostPolicy)) {
            $query['HostPolicy'] = $request->hostPolicy;
        }
        if (!Utils::isUnset($request->proxied)) {
            $query['Proxied'] = $request->proxied;
        }
        if (!Utils::isUnset($request->recordName)) {
            $query['RecordName'] = $request->recordName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->ttl)) {
            $query['Ttl'] = $request->ttl;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRecord',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a DNS record for a specific website.
     *  *
     * @param CreateRecordRequest $request CreateRecordRequest
     *
     * @return CreateRecordResponse CreateRecordResponse
     */
    public function createRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRecordWithOptions($request, $runtime);
    }

    /**
     * @summary Add a Redirect Rule
     *  *
     * @param CreateRedirectRuleRequest $request CreateRedirectRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRedirectRuleResponse CreateRedirectRuleResponse
     */
    public function createRedirectRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->reserveQueryString)) {
            $query['ReserveQueryString'] = $request->reserveQueryString;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        if (!Utils::isUnset($request->statusCode)) {
            $query['StatusCode'] = $request->statusCode;
        }
        if (!Utils::isUnset($request->targetUrl)) {
            $query['TargetUrl'] = $request->targetUrl;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRedirectRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateRedirectRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRedirectRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Add a Redirect Rule
     *  *
     * @param CreateRedirectRuleRequest $request CreateRedirectRuleRequest
     *
     * @return CreateRedirectRuleResponse CreateRedirectRuleResponse
     */
    public function createRedirectRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRedirectRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Add Rewrite URL Rule
     *  *
     * @param CreateRewriteUrlRuleRequest $request CreateRewriteUrlRuleRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRewriteUrlRuleResponse CreateRewriteUrlRuleResponse
     */
    public function createRewriteUrlRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->queryString)) {
            $query['QueryString'] = $request->queryString;
        }
        if (!Utils::isUnset($request->rewriteQueryStringType)) {
            $query['RewriteQueryStringType'] = $request->rewriteQueryStringType;
        }
        if (!Utils::isUnset($request->rewriteUriType)) {
            $query['RewriteUriType'] = $request->rewriteUriType;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        if (!Utils::isUnset($request->uri)) {
            $query['Uri'] = $request->uri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRewriteUrlRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateRewriteUrlRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRewriteUrlRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Add Rewrite URL Rule
     *  *
     * @param CreateRewriteUrlRuleRequest $request CreateRewriteUrlRuleRequest
     *
     * @return CreateRewriteUrlRuleResponse CreateRewriteUrlRuleResponse
     */
    public function createRewriteUrlRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRewriteUrlRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a routine.
     *  *
     * @param CreateRoutineRequest $request CreateRoutineRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRoutineResponse CreateRoutineResponse
     */
    public function createRoutineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->specName)) {
            $body['SpecName'] = $request->specName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRoutine',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateRoutineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRoutineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a routine.
     *  *
     * @param CreateRoutineRequest $request CreateRoutineRequest
     *
     * @return CreateRoutineResponse CreateRoutineResponse
     */
    public function createRoutine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoutineWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a record to map a domain that is associated with a routine. This record is used to trigger the associated routine code.
     *  *
     * @param CreateRoutineRelatedRecordRequest $request CreateRoutineRelatedRecordRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRoutineRelatedRecordResponse CreateRoutineRelatedRecordResponse
     */
    public function createRoutineRelatedRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->recordName)) {
            $body['RecordName'] = $request->recordName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $body['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRoutineRelatedRecord',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateRoutineRelatedRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRoutineRelatedRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Adds a record to map a domain that is associated with a routine. This record is used to trigger the associated routine code.
     *  *
     * @param CreateRoutineRelatedRecordRequest $request CreateRoutineRelatedRecordRequest
     *
     * @return CreateRoutineRelatedRecordResponse CreateRoutineRelatedRecordResponse
     */
    public function createRoutineRelatedRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoutineRelatedRecordWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a route to map a URL to a routine so that the routine can be triggered to respond to requests destined for the URL.
     *  *
     * @param CreateRoutineRelatedRouteRequest $request CreateRoutineRelatedRouteRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRoutineRelatedRouteResponse CreateRoutineRelatedRouteResponse
     */
    public function createRoutineRelatedRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->byPass)) {
            $body['ByPass'] = $request->byPass;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->route)) {
            $body['Route'] = $request->route;
        }
        if (!Utils::isUnset($request->siteId)) {
            $body['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRoutineRelatedRoute',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateRoutineRelatedRouteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRoutineRelatedRouteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Adds a route to map a URL to a routine so that the routine can be triggered to respond to requests destined for the URL.
     *  *
     * @param CreateRoutineRelatedRouteRequest $request CreateRoutineRelatedRouteRequest
     *
     * @return CreateRoutineRelatedRouteResponse CreateRoutineRelatedRouteResponse
     */
    public function createRoutineRelatedRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoutineRelatedRouteWithOptions($request, $runtime);
    }

    /**
     * @summary Creates scheduled prefetch plans.
     *  *
     * @param CreateScheduledPreloadExecutionsRequest $tmpReq  CreateScheduledPreloadExecutionsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateScheduledPreloadExecutionsResponse CreateScheduledPreloadExecutionsResponse
     */
    public function createScheduledPreloadExecutionsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateScheduledPreloadExecutionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->executions)) {
            $request->executionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->executions, 'Executions', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $body = [];
        if (!Utils::isUnset($request->executionsShrink)) {
            $body['Executions'] = $request->executionsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateScheduledPreloadExecutions',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateScheduledPreloadExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateScheduledPreloadExecutionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates scheduled prefetch plans.
     *  *
     * @param CreateScheduledPreloadExecutionsRequest $request CreateScheduledPreloadExecutionsRequest
     *
     * @return CreateScheduledPreloadExecutionsResponse CreateScheduledPreloadExecutionsResponse
     */
    public function createScheduledPreloadExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScheduledPreloadExecutionsWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a scheduled prefetch task.
     *  *
     * @param CreateScheduledPreloadJobRequest $request CreateScheduledPreloadJobRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateScheduledPreloadJobResponse CreateScheduledPreloadJobResponse
     */
    public function createScheduledPreloadJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->insertWay)) {
            $body['InsertWay'] = $request->insertWay;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ossUrl)) {
            $body['OssUrl'] = $request->ossUrl;
        }
        if (!Utils::isUnset($request->siteId)) {
            $body['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->urlList)) {
            $body['UrlList'] = $request->urlList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateScheduledPreloadJob',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateScheduledPreloadJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateScheduledPreloadJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Adds a scheduled prefetch task.
     *  *
     * @param CreateScheduledPreloadJobRequest $request CreateScheduledPreloadJobRequest
     *
     * @return CreateScheduledPreloadJobResponse CreateScheduledPreloadJobResponse
     */
    public function createScheduledPreloadJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScheduledPreloadJobWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a website.
     *  *
     * @description *   Make sure that you have an available plan before you add a website.
     * *   Make sure that your website domain name has an ICP filing if the location you want to specify covers the Chinese mainland.
     *  *
     * @param CreateSiteRequest $request CreateSiteRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSiteResponse CreateSiteResponse
     */
    public function createSiteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessType)) {
            $query['AccessType'] = $request->accessType;
        }
        if (!Utils::isUnset($request->coverage)) {
            $query['Coverage'] = $request->coverage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->siteName)) {
            $query['SiteName'] = $request->siteName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSite',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateSiteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSiteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Adds a website.
     *  *
     * @description *   Make sure that you have an available plan before you add a website.
     * *   Make sure that your website domain name has an ICP filing if the location you want to specify covers the Chinese mainland.
     *  *
     * @param CreateSiteRequest $request CreateSiteRequest
     *
     * @return CreateSiteResponse CreateSiteResponse
     */
    public function createSite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSiteWithOptions($request, $runtime);
    }

    /**
     * @summary Adds the configuration of custom request header, response header, and cookie fields that are used to capture logs of a website.
     *  *
     * @description *   **Custom field limits**: The key name of a custom field can contain only letters, digits, underscores (_), and spaces. The key name cannot contain other characters. Otherwise, errors may occur.
     * *   **Parameter passing**: Submit `SiteId`, `RequestHeaders`, `ResponseHeaders`, and `Cookies` by using `formData`. Each array element matches a custom field name.
     * *   **(Required) SiteId**: Although `SiteId` is not marked as required in the Required column, you must specify a website ID by using this parameter when you can call this API operation.
     *  *
     * @param CreateSiteCustomLogRequest $tmpReq  CreateSiteCustomLogRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSiteCustomLogResponse CreateSiteCustomLogResponse
     */
    public function createSiteCustomLogWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSiteCustomLogShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->cookies)) {
            $request->cookiesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->cookies, 'Cookies', 'json');
        }
        if (!Utils::isUnset($tmpReq->requestHeaders)) {
            $request->requestHeadersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestHeaders, 'RequestHeaders', 'json');
        }
        if (!Utils::isUnset($tmpReq->responseHeaders)) {
            $request->responseHeadersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->responseHeaders, 'ResponseHeaders', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->cookiesShrink)) {
            $body['Cookies'] = $request->cookiesShrink;
        }
        if (!Utils::isUnset($request->requestHeadersShrink)) {
            $body['RequestHeaders'] = $request->requestHeadersShrink;
        }
        if (!Utils::isUnset($request->responseHeadersShrink)) {
            $body['ResponseHeaders'] = $request->responseHeadersShrink;
        }
        if (!Utils::isUnset($request->siteId)) {
            $body['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSiteCustomLog',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateSiteCustomLogResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSiteCustomLogResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Adds the configuration of custom request header, response header, and cookie fields that are used to capture logs of a website.
     *  *
     * @description *   **Custom field limits**: The key name of a custom field can contain only letters, digits, underscores (_), and spaces. The key name cannot contain other characters. Otherwise, errors may occur.
     * *   **Parameter passing**: Submit `SiteId`, `RequestHeaders`, `ResponseHeaders`, and `Cookies` by using `formData`. Each array element matches a custom field name.
     * *   **(Required) SiteId**: Although `SiteId` is not marked as required in the Required column, you must specify a website ID by using this parameter when you can call this API operation.
     *  *
     * @param CreateSiteCustomLogRequest $request CreateSiteCustomLogRequest
     *
     * @return CreateSiteCustomLogResponse CreateSiteCustomLogResponse
     */
    public function createSiteCustomLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSiteCustomLogWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a real-time log delivery task.
     *  *
     * @param CreateSiteDeliveryTaskRequest $tmpReq  CreateSiteDeliveryTaskRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSiteDeliveryTaskResponse CreateSiteDeliveryTaskResponse
     */
    public function createSiteDeliveryTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSiteDeliveryTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->httpDelivery)) {
            $request->httpDeliveryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->httpDelivery, 'HttpDelivery', 'json');
        }
        if (!Utils::isUnset($tmpReq->kafkaDelivery)) {
            $request->kafkaDeliveryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->kafkaDelivery, 'KafkaDelivery', 'json');
        }
        if (!Utils::isUnset($tmpReq->ossDelivery)) {
            $request->ossDeliveryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ossDelivery, 'OssDelivery', 'json');
        }
        if (!Utils::isUnset($tmpReq->s3Delivery)) {
            $request->s3DeliveryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->s3Delivery, 'S3Delivery', 'json');
        }
        if (!Utils::isUnset($tmpReq->slsDelivery)) {
            $request->slsDeliveryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->slsDelivery, 'SlsDelivery', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->businessType)) {
            $body['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->dataCenter)) {
            $body['DataCenter'] = $request->dataCenter;
        }
        if (!Utils::isUnset($request->deliveryType)) {
            $body['DeliveryType'] = $request->deliveryType;
        }
        if (!Utils::isUnset($request->discardRate)) {
            $body['DiscardRate'] = $request->discardRate;
        }
        if (!Utils::isUnset($request->fieldName)) {
            $body['FieldName'] = $request->fieldName;
        }
        if (!Utils::isUnset($request->httpDeliveryShrink)) {
            $body['HttpDelivery'] = $request->httpDeliveryShrink;
        }
        if (!Utils::isUnset($request->kafkaDeliveryShrink)) {
            $body['KafkaDelivery'] = $request->kafkaDeliveryShrink;
        }
        if (!Utils::isUnset($request->ossDeliveryShrink)) {
            $body['OssDelivery'] = $request->ossDeliveryShrink;
        }
        if (!Utils::isUnset($request->s3DeliveryShrink)) {
            $body['S3Delivery'] = $request->s3DeliveryShrink;
        }
        if (!Utils::isUnset($request->siteId)) {
            $body['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->slsDeliveryShrink)) {
            $body['SlsDelivery'] = $request->slsDeliveryShrink;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSiteDeliveryTask',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateSiteDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSiteDeliveryTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a real-time log delivery task.
     *  *
     * @param CreateSiteDeliveryTaskRequest $request CreateSiteDeliveryTaskRequest
     *
     * @return CreateSiteDeliveryTaskResponse CreateSiteDeliveryTaskResponse
     */
    public function createSiteDeliveryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSiteDeliveryTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 创建一个实时日志slr角色
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSlrRoleForRealtimeLogResponse CreateSlrRoleForRealtimeLogResponse
     */
    public function createSlrRoleForRealtimeLogWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'CreateSlrRoleForRealtimeLog',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateSlrRoleForRealtimeLogResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSlrRoleForRealtimeLogResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建一个实时日志slr角色
     *  *
     * @return CreateSlrRoleForRealtimeLogResponse CreateSlrRoleForRealtimeLogResponse
     */
    public function createSlrRoleForRealtimeLog()
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSlrRoleForRealtimeLogWithOptions($runtime);
    }

    /**
     * @summary Creates a log delivery task to ship logs to the specified destination.
     *  *
     * @description This API operation allows you to deliver logs to destinations such as Simple Log Service (SLS), HTTP servers, Object Storage Service (OSS), Amazon Simple Storage Service (S3), and Kafka. You can specify the task name, log fields to deliver, data center, discard rate, delivery type, and delivery details.
     * *   **Field filtering**: Use the `FieldName` parameter to specify log fields to deliver.
     * *   **Filtering rules**: Use the `FilterRules` parameter to pre-process and filter log data.
     * *   **Diverse delivery destinations**: Logs can be delivered to different destinations. Configuration parameters vary with delivery destinations.
     * ## [](#)Precautions
     * *   Make sure that you have sufficient permissions to perform delivery tasks.
     * *   If you enable encryption or authentication, properly configure corresponding parameters.
     * *   Verify the syntax of `FilterRules` to make sure that filtering logic works as expected.
     * *   Specify advanced settings such as the number of retries and timeout period based on your needs to have optimal delivery efficiency and stability.
     *  *
     * @param CreateUserDeliveryTaskRequest $tmpReq  CreateUserDeliveryTaskRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserDeliveryTaskResponse CreateUserDeliveryTaskResponse
     */
    public function createUserDeliveryTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateUserDeliveryTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->httpDelivery)) {
            $request->httpDeliveryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->httpDelivery, 'HttpDelivery', 'json');
        }
        if (!Utils::isUnset($tmpReq->kafkaDelivery)) {
            $request->kafkaDeliveryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->kafkaDelivery, 'KafkaDelivery', 'json');
        }
        if (!Utils::isUnset($tmpReq->ossDelivery)) {
            $request->ossDeliveryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ossDelivery, 'OssDelivery', 'json');
        }
        if (!Utils::isUnset($tmpReq->s3Delivery)) {
            $request->s3DeliveryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->s3Delivery, 'S3Delivery', 'json');
        }
        if (!Utils::isUnset($tmpReq->slsDelivery)) {
            $request->slsDeliveryShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->slsDelivery, 'SlsDelivery', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->businessType)) {
            $body['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->dataCenter)) {
            $body['DataCenter'] = $request->dataCenter;
        }
        if (!Utils::isUnset($request->deliveryType)) {
            $body['DeliveryType'] = $request->deliveryType;
        }
        if (!Utils::isUnset($request->details)) {
            $body['Details'] = $request->details;
        }
        if (!Utils::isUnset($request->discardRate)) {
            $body['DiscardRate'] = $request->discardRate;
        }
        if (!Utils::isUnset($request->fieldName)) {
            $body['FieldName'] = $request->fieldName;
        }
        if (!Utils::isUnset($request->httpDeliveryShrink)) {
            $body['HttpDelivery'] = $request->httpDeliveryShrink;
        }
        if (!Utils::isUnset($request->kafkaDeliveryShrink)) {
            $body['KafkaDelivery'] = $request->kafkaDeliveryShrink;
        }
        if (!Utils::isUnset($request->ossDeliveryShrink)) {
            $body['OssDelivery'] = $request->ossDeliveryShrink;
        }
        if (!Utils::isUnset($request->s3DeliveryShrink)) {
            $body['S3Delivery'] = $request->s3DeliveryShrink;
        }
        if (!Utils::isUnset($request->slsDeliveryShrink)) {
            $body['SlsDelivery'] = $request->slsDeliveryShrink;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUserDeliveryTask',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateUserDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateUserDeliveryTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a log delivery task to ship logs to the specified destination.
     *  *
     * @description This API operation allows you to deliver logs to destinations such as Simple Log Service (SLS), HTTP servers, Object Storage Service (OSS), Amazon Simple Storage Service (S3), and Kafka. You can specify the task name, log fields to deliver, data center, discard rate, delivery type, and delivery details.
     * *   **Field filtering**: Use the `FieldName` parameter to specify log fields to deliver.
     * *   **Filtering rules**: Use the `FilterRules` parameter to pre-process and filter log data.
     * *   **Diverse delivery destinations**: Logs can be delivered to different destinations. Configuration parameters vary with delivery destinations.
     * ## [](#)Precautions
     * *   Make sure that you have sufficient permissions to perform delivery tasks.
     * *   If you enable encryption or authentication, properly configure corresponding parameters.
     * *   Verify the syntax of `FilterRules` to make sure that filtering logic works as expected.
     * *   Specify advanced settings such as the number of retries and timeout period based on your needs to have optimal delivery efficiency and stability.
     *  *
     * @param CreateUserDeliveryTaskRequest $request CreateUserDeliveryTaskRequest
     *
     * @return CreateUserDeliveryTaskResponse CreateUserDeliveryTaskResponse
     */
    public function createUserDeliveryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserDeliveryTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a waiting room for a website.
     *  *
     * @param CreateWaitingRoomRequest $tmpReq  CreateWaitingRoomRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWaitingRoomResponse CreateWaitingRoomResponse
     */
    public function createWaitingRoomWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateWaitingRoomShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->hostNameAndPath)) {
            $request->hostNameAndPathShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hostNameAndPath, 'HostNameAndPath', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->cookieName)) {
            $query['CookieName'] = $request->cookieName;
        }
        if (!Utils::isUnset($request->customPageHtml)) {
            $query['CustomPageHtml'] = $request->customPageHtml;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->disableSessionRenewalEnable)) {
            $query['DisableSessionRenewalEnable'] = $request->disableSessionRenewalEnable;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->hostNameAndPathShrink)) {
            $query['HostNameAndPath'] = $request->hostNameAndPathShrink;
        }
        if (!Utils::isUnset($request->jsonResponseEnable)) {
            $query['JsonResponseEnable'] = $request->jsonResponseEnable;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->newUsersPerMinute)) {
            $query['NewUsersPerMinute'] = $request->newUsersPerMinute;
        }
        if (!Utils::isUnset($request->queueAllEnable)) {
            $query['QueueAllEnable'] = $request->queueAllEnable;
        }
        if (!Utils::isUnset($request->queuingMethod)) {
            $query['QueuingMethod'] = $request->queuingMethod;
        }
        if (!Utils::isUnset($request->queuingStatusCode)) {
            $query['QueuingStatusCode'] = $request->queuingStatusCode;
        }
        if (!Utils::isUnset($request->sessionDuration)) {
            $query['SessionDuration'] = $request->sessionDuration;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->totalActiveUsers)) {
            $query['TotalActiveUsers'] = $request->totalActiveUsers;
        }
        if (!Utils::isUnset($request->waitingRoomType)) {
            $query['WaitingRoomType'] = $request->waitingRoomType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateWaitingRoom',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateWaitingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateWaitingRoomResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a waiting room for a website.
     *  *
     * @param CreateWaitingRoomRequest $request CreateWaitingRoomRequest
     *
     * @return CreateWaitingRoomResponse CreateWaitingRoomResponse
     */
    public function createWaitingRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWaitingRoomWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a waiting room event.
     *  *
     * @param CreateWaitingRoomEventRequest $request CreateWaitingRoomEventRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWaitingRoomEventResponse CreateWaitingRoomEventResponse
     */
    public function createWaitingRoomEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customPageHtml)) {
            $query['CustomPageHtml'] = $request->customPageHtml;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->disableSessionRenewalEnable)) {
            $query['DisableSessionRenewalEnable'] = $request->disableSessionRenewalEnable;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->jsonResponseEnable)) {
            $query['JsonResponseEnable'] = $request->jsonResponseEnable;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->newUsersPerMinute)) {
            $query['NewUsersPerMinute'] = $request->newUsersPerMinute;
        }
        if (!Utils::isUnset($request->preQueueEnable)) {
            $query['PreQueueEnable'] = $request->preQueueEnable;
        }
        if (!Utils::isUnset($request->preQueueStartTime)) {
            $query['PreQueueStartTime'] = $request->preQueueStartTime;
        }
        if (!Utils::isUnset($request->queuingMethod)) {
            $query['QueuingMethod'] = $request->queuingMethod;
        }
        if (!Utils::isUnset($request->queuingStatusCode)) {
            $query['QueuingStatusCode'] = $request->queuingStatusCode;
        }
        if (!Utils::isUnset($request->randomPreQueueEnable)) {
            $query['RandomPreQueueEnable'] = $request->randomPreQueueEnable;
        }
        if (!Utils::isUnset($request->sessionDuration)) {
            $query['SessionDuration'] = $request->sessionDuration;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->totalActiveUsers)) {
            $query['TotalActiveUsers'] = $request->totalActiveUsers;
        }
        if (!Utils::isUnset($request->waitingRoomId)) {
            $query['WaitingRoomId'] = $request->waitingRoomId;
        }
        if (!Utils::isUnset($request->waitingRoomType)) {
            $query['WaitingRoomType'] = $request->waitingRoomType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateWaitingRoomEvent',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateWaitingRoomEventResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateWaitingRoomEventResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a waiting room event.
     *  *
     * @param CreateWaitingRoomEventRequest $request CreateWaitingRoomEventRequest
     *
     * @return CreateWaitingRoomEventResponse CreateWaitingRoomEventResponse
     */
    public function createWaitingRoomEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWaitingRoomEventWithOptions($request, $runtime);
    }

    /**
     * @summary Create Waiting Room Rule
     *  *
     * @param CreateWaitingRoomRuleRequest $request CreateWaitingRoomRuleRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWaitingRoomRuleResponse CreateWaitingRoomRuleResponse
     */
    public function createWaitingRoomRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->waitingRoomId)) {
            $query['WaitingRoomId'] = $request->waitingRoomId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateWaitingRoomRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateWaitingRoomRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateWaitingRoomRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Create Waiting Room Rule
     *  *
     * @param CreateWaitingRoomRuleRequest $request CreateWaitingRoomRuleRequest
     *
     * @return CreateWaitingRoomRuleResponse CreateWaitingRoomRuleResponse
     */
    public function createWaitingRoomRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWaitingRoomRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Disables version management for a website.
     *  *
     * @description You can disable version management only when the default environment and version 0 exist.
     *  *
     * @param DeactivateVersionManagementRequest $request DeactivateVersionManagementRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeactivateVersionManagementResponse DeactivateVersionManagementResponse
     */
    public function deactivateVersionManagementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeactivateVersionManagement',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeactivateVersionManagementResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeactivateVersionManagementResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Disables version management for a website.
     *  *
     * @description You can disable version management only when the default environment and version 0 exist.
     *  *
     * @param DeactivateVersionManagementRequest $request DeactivateVersionManagementRequest
     *
     * @return DeactivateVersionManagementResponse DeactivateVersionManagementResponse
     */
    public function deactivateVersionManagement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactivateVersionManagementWithOptions($request, $runtime);
    }

    /**
     * @summary Delete Cache Configuration
     *  *
     * @param DeleteCacheRuleRequest $request DeleteCacheRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCacheRuleResponse DeleteCacheRuleResponse
     */
    public function deleteCacheRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCacheRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteCacheRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCacheRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Delete Cache Configuration
     *  *
     * @param DeleteCacheRuleRequest $request DeleteCacheRuleRequest
     *
     * @return DeleteCacheRuleResponse DeleteCacheRuleResponse
     */
    public function deleteCacheRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCacheRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a certificate for a website.
     *  *
     * @param DeleteCertificateRequest $request DeleteCertificateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCertificateResponse DeleteCertificateResponse
     */
    public function deleteCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a certificate for a website.
     *  *
     * @param DeleteCertificateRequest $request DeleteCertificateRequest
     *
     * @return DeleteCertificateResponse DeleteCertificateResponse
     */
    public function deleteCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a client CA certificate.
     *  *
     * @param DeleteClientCaCertificateRequest $request DeleteClientCaCertificateRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteClientCaCertificateResponse DeleteClientCaCertificateResponse
     */
    public function deleteClientCaCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteClientCaCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteClientCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteClientCaCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a client CA certificate.
     *  *
     * @param DeleteClientCaCertificateRequest $request DeleteClientCaCertificateRequest
     *
     * @return DeleteClientCaCertificateResponse DeleteClientCaCertificateResponse
     */
    public function deleteClientCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClientCaCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a revoked client certificate.
     *  *
     * @param DeleteClientCertificateRequest $request DeleteClientCertificateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteClientCertificateResponse DeleteClientCertificateResponse
     */
    public function deleteClientCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteClientCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteClientCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a revoked client certificate.
     *  *
     * @param DeleteClientCertificateRequest $request DeleteClientCertificateRequest
     *
     * @return DeleteClientCertificateResponse DeleteClientCertificateResponse
     */
    public function deleteClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClientCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Delete compression rule
     *  *
     * @param DeleteCompressionRuleRequest $request DeleteCompressionRuleRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCompressionRuleResponse DeleteCompressionRuleResponse
     */
    public function deleteCompressionRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCompressionRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteCompressionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCompressionRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Delete compression rule
     *  *
     * @param DeleteCompressionRuleRequest $request DeleteCompressionRuleRequest
     *
     * @return DeleteCompressionRuleResponse DeleteCompressionRuleResponse
     */
    public function deleteCompressionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCompressionRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a scenario-specific custom policy.
     *  *
     * @param DeleteCustomScenePolicyRequest $request DeleteCustomScenePolicyRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomScenePolicyResponse DeleteCustomScenePolicyResponse
     */
    public function deleteCustomScenePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomScenePolicy',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteCustomScenePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCustomScenePolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a scenario-specific custom policy.
     *  *
     * @param DeleteCustomScenePolicyRequest $request DeleteCustomScenePolicyRequest
     *
     * @return DeleteCustomScenePolicyResponse DeleteCustomScenePolicyResponse
     */
    public function deleteCustomScenePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomScenePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a containerized application.
     *  *
     * @param DeleteEdgeContainerAppRequest $request DeleteEdgeContainerAppRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEdgeContainerAppResponse DeleteEdgeContainerAppResponse
     */
    public function deleteEdgeContainerAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEdgeContainerApp',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteEdgeContainerAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEdgeContainerAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a containerized application.
     *  *
     * @param DeleteEdgeContainerAppRequest $request DeleteEdgeContainerAppRequest
     *
     * @return DeleteEdgeContainerAppResponse DeleteEdgeContainerAppResponse
     */
    public function deleteEdgeContainerApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEdgeContainerAppWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates a domain name from a containerized application. After the dissociation, you can no longer use the domain name to access the containerized application.
     *  *
     * @param DeleteEdgeContainerAppRecordRequest $request DeleteEdgeContainerAppRecordRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEdgeContainerAppRecordResponse DeleteEdgeContainerAppRecordResponse
     */
    public function deleteEdgeContainerAppRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->recordName)) {
            $body['RecordName'] = $request->recordName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $body['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteEdgeContainerAppRecord',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteEdgeContainerAppRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEdgeContainerAppRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Disassociates a domain name from a containerized application. After the dissociation, you can no longer use the domain name to access the containerized application.
     *  *
     * @param DeleteEdgeContainerAppRecordRequest $request DeleteEdgeContainerAppRecordRequest
     *
     * @return DeleteEdgeContainerAppRecordResponse DeleteEdgeContainerAppRecordResponse
     */
    public function deleteEdgeContainerAppRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEdgeContainerAppRecordWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a version of a containerized application.
     *  *
     * @param DeleteEdgeContainerAppVersionRequest $request DeleteEdgeContainerAppVersionRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEdgeContainerAppVersionResponse DeleteEdgeContainerAppVersionResponse
     */
    public function deleteEdgeContainerAppVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEdgeContainerAppVersion',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteEdgeContainerAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEdgeContainerAppVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a version of a containerized application.
     *  *
     * @param DeleteEdgeContainerAppVersionRequest $request DeleteEdgeContainerAppVersionRequest
     *
     * @return DeleteEdgeContainerAppVersionResponse DeleteEdgeContainerAppVersionResponse
     */
    public function deleteEdgeContainerAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEdgeContainerAppVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the configuration of modifying HTTP request headers for a website.
     *  *
     * @param DeleteHttpRequestHeaderModificationRuleRequest $request DeleteHttpRequestHeaderModificationRuleRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHttpRequestHeaderModificationRuleResponse DeleteHttpRequestHeaderModificationRuleResponse
     */
    public function deleteHttpRequestHeaderModificationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHttpRequestHeaderModificationRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteHttpRequestHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteHttpRequestHeaderModificationRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes the configuration of modifying HTTP request headers for a website.
     *  *
     * @param DeleteHttpRequestHeaderModificationRuleRequest $request DeleteHttpRequestHeaderModificationRuleRequest
     *
     * @return DeleteHttpRequestHeaderModificationRuleResponse DeleteHttpRequestHeaderModificationRuleResponse
     */
    public function deleteHttpRequestHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHttpRequestHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the configuration of modifying HTTP response headers for a website.
     *  *
     * @param DeleteHttpResponseHeaderModificationRuleRequest $request DeleteHttpResponseHeaderModificationRuleRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHttpResponseHeaderModificationRuleResponse DeleteHttpResponseHeaderModificationRuleResponse
     */
    public function deleteHttpResponseHeaderModificationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHttpResponseHeaderModificationRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteHttpResponseHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteHttpResponseHeaderModificationRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes the configuration of modifying HTTP response headers for a website.
     *  *
     * @param DeleteHttpResponseHeaderModificationRuleRequest $request DeleteHttpResponseHeaderModificationRuleRequest
     *
     * @return DeleteHttpResponseHeaderModificationRuleResponse DeleteHttpResponseHeaderModificationRuleResponse
     */
    public function deleteHttpResponseHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHttpResponseHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Delete HTTPS Application Configuration
     *  *
     * @param DeleteHttpsApplicationConfigurationRequest $request DeleteHttpsApplicationConfigurationRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHttpsApplicationConfigurationResponse DeleteHttpsApplicationConfigurationResponse
     */
    public function deleteHttpsApplicationConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHttpsApplicationConfiguration',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteHttpsApplicationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteHttpsApplicationConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Delete HTTPS Application Configuration
     *  *
     * @param DeleteHttpsApplicationConfigurationRequest $request DeleteHttpsApplicationConfigurationRequest
     *
     * @return DeleteHttpsApplicationConfigurationResponse DeleteHttpsApplicationConfigurationResponse
     */
    public function deleteHttpsApplicationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHttpsApplicationConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Delete HTTPS Basic Configuration
     *  *
     * @param DeleteHttpsBasicConfigurationRequest $request DeleteHttpsBasicConfigurationRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHttpsBasicConfigurationResponse DeleteHttpsBasicConfigurationResponse
     */
    public function deleteHttpsBasicConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHttpsBasicConfiguration',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteHttpsBasicConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteHttpsBasicConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Delete HTTPS Basic Configuration
     *  *
     * @param DeleteHttpsBasicConfigurationRequest $request DeleteHttpsBasicConfigurationRequest
     *
     * @return DeleteHttpsBasicConfigurationResponse DeleteHttpsBasicConfigurationResponse
     */
    public function deleteHttpsBasicConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHttpsBasicConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Delete Site Image Transformation Configuration
     *  *
     * @param DeleteImageTransformRequest $request DeleteImageTransformRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteImageTransformResponse DeleteImageTransformResponse
     */
    public function deleteImageTransformWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteImageTransform',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteImageTransformResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteImageTransformResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Delete Site Image Transformation Configuration
     *  *
     * @param DeleteImageTransformRequest $request DeleteImageTransformRequest
     *
     * @return DeleteImageTransformResponse DeleteImageTransformResponse
     */
    public function deleteImageTransform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageTransformWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a key-value pair from a namespace.
     *  *
     * @param DeleteKvRequest $request DeleteKvRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteKvResponse DeleteKvResponse
     */
    public function deleteKvWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteKv',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteKvResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteKvResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a key-value pair from a namespace.
     *  *
     * @param DeleteKvRequest $request DeleteKvRequest
     *
     * @return DeleteKvResponse DeleteKvResponse
     */
    public function deleteKv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKvWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a namespace from an Alibaba Cloud account.
     *  *
     * @param DeleteKvNamespaceRequest $request DeleteKvNamespaceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteKvNamespaceResponse DeleteKvNamespaceResponse
     */
    public function deleteKvNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteKvNamespace',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteKvNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteKvNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a namespace from an Alibaba Cloud account.
     *  *
     * @param DeleteKvNamespaceRequest $request DeleteKvNamespaceRequest
     *
     * @return DeleteKvNamespaceResponse DeleteKvNamespaceResponse
     */
    public function deleteKvNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKvNamespaceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a custom list that is no longer needed.
     *  *
     * @param DeleteListRequest $request DeleteListRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteListResponse DeleteListResponse
     */
    public function deleteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteList',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a custom list that is no longer needed.
     *  *
     * @param DeleteListRequest $request DeleteListRequest
     *
     * @return DeleteListResponse DeleteListResponse
     */
    public function deleteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteListWithOptions($request, $runtime);
    }

    /**
     * @summary Delete Load Balancer
     *  *
     * @description Delete a load balancer by its ID, only one can be deleted at a time.
     *  *
     * @param DeleteLoadBalancerRequest $request DeleteLoadBalancerRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLoadBalancerResponse DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLoadBalancer',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLoadBalancerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Delete Load Balancer
     *  *
     * @description Delete a load balancer by its ID, only one can be deleted at a time.
     *  *
     * @param DeleteLoadBalancerRequest $request DeleteLoadBalancerRequest
     *
     * @return DeleteLoadBalancerResponse DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * @summary Delete Network Optimization Configuration
     *  *
     * @param DeleteNetworkOptimizationRequest $request DeleteNetworkOptimizationRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNetworkOptimizationResponse DeleteNetworkOptimizationResponse
     */
    public function deleteNetworkOptimizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNetworkOptimization',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteNetworkOptimizationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteNetworkOptimizationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Delete Network Optimization Configuration
     *  *
     * @param DeleteNetworkOptimizationRequest $request DeleteNetworkOptimizationRequest
     *
     * @return DeleteNetworkOptimizationResponse DeleteNetworkOptimizationResponse
     */
    public function deleteNetworkOptimization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkOptimizationWithOptions($request, $runtime);
    }

    /**
     * @summary Delete Origin Address Pool
     *  *
     * @param DeleteOriginPoolRequest $request DeleteOriginPoolRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteOriginPoolResponse DeleteOriginPoolResponse
     */
    public function deleteOriginPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteOriginPool',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteOriginPoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteOriginPoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Delete Origin Address Pool
     *  *
     * @param DeleteOriginPoolRequest $request DeleteOriginPoolRequest
     *
     * @return DeleteOriginPoolResponse DeleteOriginPoolResponse
     */
    public function deleteOriginPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOriginPoolWithOptions($request, $runtime);
    }

    /**
     * @summary Disables origin protection.
     *  *
     * @param DeleteOriginProtectionRequest $request DeleteOriginProtectionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteOriginProtectionResponse DeleteOriginProtectionResponse
     */
    public function deleteOriginProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteOriginProtection',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteOriginProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteOriginProtectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Disables origin protection.
     *  *
     * @param DeleteOriginProtectionRequest $request DeleteOriginProtectionRequest
     *
     * @return DeleteOriginProtectionResponse DeleteOriginProtectionResponse
     */
    public function deleteOriginProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOriginProtectionWithOptions($request, $runtime);
    }

    /**
     * @summary Delete Origin Rule Configuration
     *  *
     * @param DeleteOriginRuleRequest $request DeleteOriginRuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteOriginRuleResponse DeleteOriginRuleResponse
     */
    public function deleteOriginRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteOriginRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteOriginRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteOriginRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Delete Origin Rule Configuration
     *  *
     * @param DeleteOriginRuleRequest $request DeleteOriginRuleRequest
     *
     * @return DeleteOriginRuleResponse DeleteOriginRuleResponse
     */
    public function deleteOriginRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOriginRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a custom error page that is no longer needed.
     *  *
     * @param DeletePageRequest $request DeletePageRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePageResponse DeletePageResponse
     */
    public function deletePageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeletePage',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeletePageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a custom error page that is no longer needed.
     *  *
     * @param DeletePageRequest $request DeletePageRequest
     *
     * @return DeletePageResponse DeletePageResponse
     */
    public function deletePage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePageWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a DNS record of a website based on the specified RecordId.
     *  *
     * @param DeleteRecordRequest $request DeleteRecordRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRecordResponse DeleteRecordResponse
     */
    public function deleteRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRecord',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a DNS record of a website based on the specified RecordId.
     *  *
     * @param DeleteRecordRequest $request DeleteRecordRequest
     *
     * @return DeleteRecordResponse DeleteRecordResponse
     */
    public function deleteRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRecordWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a URL redirect rule for a website.
     *  *
     * @param DeleteRedirectRuleRequest $request DeleteRedirectRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRedirectRuleResponse DeleteRedirectRuleResponse
     */
    public function deleteRedirectRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRedirectRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteRedirectRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRedirectRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a URL redirect rule for a website.
     *  *
     * @param DeleteRedirectRuleRequest $request DeleteRedirectRuleRequest
     *
     * @return DeleteRedirectRuleResponse DeleteRedirectRuleResponse
     */
    public function deleteRedirectRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRedirectRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a URL rewrite rule for a website.
     *  *
     * @param DeleteRewriteUrlRuleRequest $request DeleteRewriteUrlRuleRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRewriteUrlRuleResponse DeleteRewriteUrlRuleResponse
     */
    public function deleteRewriteUrlRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRewriteUrlRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteRewriteUrlRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRewriteUrlRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a URL rewrite rule for a website.
     *  *
     * @param DeleteRewriteUrlRuleRequest $request DeleteRewriteUrlRuleRequest
     *
     * @return DeleteRewriteUrlRuleResponse DeleteRewriteUrlRuleResponse
     */
    public function deleteRewriteUrlRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRewriteUrlRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a routine in Edge Routine.
     *  *
     * @param DeleteRoutineRequest $request DeleteRoutineRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRoutineResponse DeleteRoutineResponse
     */
    public function deleteRoutineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRoutine',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteRoutineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRoutineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a routine in Edge Routine.
     *  *
     * @param DeleteRoutineRequest $request DeleteRoutineRequest
     *
     * @return DeleteRoutineResponse DeleteRoutineResponse
     */
    public function deleteRoutine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoutineWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a code version of a routine.
     *  *
     * @param DeleteRoutineCodeVersionRequest $request DeleteRoutineCodeVersionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRoutineCodeVersionResponse DeleteRoutineCodeVersionResponse
     */
    public function deleteRoutineCodeVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->codeVersion)) {
            $body['CodeVersion'] = $request->codeVersion;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRoutineCodeVersion',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteRoutineCodeVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRoutineCodeVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a code version of a routine.
     *  *
     * @param DeleteRoutineCodeVersionRequest $request DeleteRoutineCodeVersionRequest
     *
     * @return DeleteRoutineCodeVersionResponse DeleteRoutineCodeVersionResponse
     */
    public function deleteRoutineCodeVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoutineCodeVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a record that is associated with a routine.
     *  *
     * @param DeleteRoutineRelatedRecordRequest $request DeleteRoutineRelatedRecordRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRoutineRelatedRecordResponse DeleteRoutineRelatedRecordResponse
     */
    public function deleteRoutineRelatedRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->recordId)) {
            $body['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->recordName)) {
            $body['RecordName'] = $request->recordName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRoutineRelatedRecord',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteRoutineRelatedRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRoutineRelatedRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a record that is associated with a routine.
     *  *
     * @param DeleteRoutineRelatedRecordRequest $request DeleteRoutineRelatedRecordRequest
     *
     * @return DeleteRoutineRelatedRecordResponse DeleteRoutineRelatedRecordResponse
     */
    public function deleteRoutineRelatedRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoutineRelatedRecordWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a route that is associated with a routine.
     *  *
     * @param DeleteRoutineRelatedRouteRequest $request DeleteRoutineRelatedRouteRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRoutineRelatedRouteResponse DeleteRoutineRelatedRouteResponse
     */
    public function deleteRoutineRelatedRouteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->route)) {
            $body['Route'] = $request->route;
        }
        if (!Utils::isUnset($request->routeId)) {
            $body['RouteId'] = $request->routeId;
        }
        if (!Utils::isUnset($request->siteId)) {
            $body['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRoutineRelatedRoute',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteRoutineRelatedRouteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRoutineRelatedRouteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a route that is associated with a routine.
     *  *
     * @param DeleteRoutineRelatedRouteRequest $request DeleteRoutineRelatedRouteRequest
     *
     * @return DeleteRoutineRelatedRouteResponse DeleteRoutineRelatedRouteResponse
     */
    public function deleteRoutineRelatedRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoutineRelatedRouteWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a scheduled prefetch plan based on the plan ID.
     *  *
     * @param DeleteScheduledPreloadExecutionRequest $request DeleteScheduledPreloadExecutionRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteScheduledPreloadExecutionResponse DeleteScheduledPreloadExecutionResponse
     */
    public function deleteScheduledPreloadExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteScheduledPreloadExecution',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteScheduledPreloadExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteScheduledPreloadExecutionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a scheduled prefetch plan based on the plan ID.
     *  *
     * @param DeleteScheduledPreloadExecutionRequest $request DeleteScheduledPreloadExecutionRequest
     *
     * @return DeleteScheduledPreloadExecutionResponse DeleteScheduledPreloadExecutionResponse
     */
    public function deleteScheduledPreloadExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScheduledPreloadExecutionWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a specified scheduled prefetch task based on the task ID.
     *  *
     * @param DeleteScheduledPreloadJobRequest $request DeleteScheduledPreloadJobRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteScheduledPreloadJobResponse DeleteScheduledPreloadJobResponse
     */
    public function deleteScheduledPreloadJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteScheduledPreloadJob',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteScheduledPreloadJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteScheduledPreloadJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a specified scheduled prefetch task based on the task ID.
     *  *
     * @param DeleteScheduledPreloadJobRequest $request DeleteScheduledPreloadJobRequest
     *
     * @return DeleteScheduledPreloadJobResponse DeleteScheduledPreloadJobResponse
     */
    public function deleteScheduledPreloadJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScheduledPreloadJobWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a website based on the specified website ID.
     *  *
     * @param DeleteSiteRequest $request DeleteSiteRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSiteResponse DeleteSiteResponse
     */
    public function deleteSiteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSite',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteSiteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSiteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a website based on the specified website ID.
     *  *
     * @param DeleteSiteRequest $request DeleteSiteRequest
     *
     * @return DeleteSiteResponse DeleteSiteResponse
     */
    public function deleteSite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSiteWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a real-time log delivery task.
     *  *
     * @param DeleteSiteDeliveryTaskRequest $request DeleteSiteDeliveryTaskRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSiteDeliveryTaskResponse DeleteSiteDeliveryTaskResponse
     */
    public function deleteSiteDeliveryTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->siteId)) {
            $body['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSiteDeliveryTask',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteSiteDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSiteDeliveryTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a real-time log delivery task.
     *  *
     * @param DeleteSiteDeliveryTaskRequest $request DeleteSiteDeliveryTaskRequest
     *
     * @return DeleteSiteDeliveryTaskResponse DeleteSiteDeliveryTaskResponse
     */
    public function deleteSiteDeliveryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSiteDeliveryTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a log delivery task from your Alibaba Cloud account.
     *  *
     * @description ******>
     * *   Deleted tasks cannot be restored. Proceed with caution.
     * *   To call this operation, you must have an account that has the required permissions.
     * *   The returned `RequestId` value can be used to track the request processing progress and troubleshoot issues.
     *  *
     * @param DeleteUserDeliveryTaskRequest $request DeleteUserDeliveryTaskRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserDeliveryTaskResponse DeleteUserDeliveryTaskResponse
     */
    public function deleteUserDeliveryTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteUserDeliveryTask',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteUserDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteUserDeliveryTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a log delivery task from your Alibaba Cloud account.
     *  *
     * @description ******>
     * *   Deleted tasks cannot be restored. Proceed with caution.
     * *   To call this operation, you must have an account that has the required permissions.
     * *   The returned `RequestId` value can be used to track the request processing progress and troubleshoot issues.
     *  *
     * @param DeleteUserDeliveryTaskRequest $request DeleteUserDeliveryTaskRequest
     *
     * @return DeleteUserDeliveryTaskResponse DeleteUserDeliveryTaskResponse
     */
    public function deleteUserDeliveryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserDeliveryTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a waiting room.
     *  *
     * @param DeleteWaitingRoomRequest $request DeleteWaitingRoomRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWaitingRoomResponse DeleteWaitingRoomResponse
     */
    public function deleteWaitingRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->waitingRoomId)) {
            $query['WaitingRoomId'] = $request->waitingRoomId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWaitingRoom',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteWaitingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteWaitingRoomResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a waiting room.
     *  *
     * @param DeleteWaitingRoomRequest $request DeleteWaitingRoomRequest
     *
     * @return DeleteWaitingRoomResponse DeleteWaitingRoomResponse
     */
    public function deleteWaitingRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWaitingRoomWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a waiting room event.
     *  *
     * @param DeleteWaitingRoomEventRequest $request DeleteWaitingRoomEventRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWaitingRoomEventResponse DeleteWaitingRoomEventResponse
     */
    public function deleteWaitingRoomEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->waitingRoomEventId)) {
            $query['WaitingRoomEventId'] = $request->waitingRoomEventId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWaitingRoomEvent',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteWaitingRoomEventResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteWaitingRoomEventResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a waiting room event.
     *  *
     * @param DeleteWaitingRoomEventRequest $request DeleteWaitingRoomEventRequest
     *
     * @return DeleteWaitingRoomEventResponse DeleteWaitingRoomEventResponse
     */
    public function deleteWaitingRoomEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWaitingRoomEventWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a waiting room bypass rule.
     *  *
     * @param DeleteWaitingRoomRuleRequest $request DeleteWaitingRoomRuleRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWaitingRoomRuleResponse DeleteWaitingRoomRuleResponse
     */
    public function deleteWaitingRoomRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->waitingRoomRuleId)) {
            $query['WaitingRoomRuleId'] = $request->waitingRoomRuleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteWaitingRoomRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteWaitingRoomRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteWaitingRoomRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a waiting room bypass rule.
     *  *
     * @param DeleteWaitingRoomRuleRequest $request DeleteWaitingRoomRuleRequest
     *
     * @return DeleteWaitingRoomRuleResponse DeleteWaitingRoomRuleResponse
     */
    public function deleteWaitingRoomRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWaitingRoomRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of a scenario-specific policy.
     *  *
     * @param DescribeCustomScenePoliciesRequest $request DescribeCustomScenePoliciesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustomScenePoliciesResponse DescribeCustomScenePoliciesResponse
     */
    public function describeCustomScenePoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCustomScenePolicies',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeCustomScenePoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeCustomScenePoliciesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of a scenario-specific policy.
     *  *
     * @param DescribeCustomScenePoliciesRequest $request DescribeCustomScenePoliciesRequest
     *
     * @return DescribeCustomScenePoliciesResponse DescribeCustomScenePoliciesResponse
     */
    public function describeCustomScenePolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomScenePoliciesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries DDoS attack events.
     *  *
     * @param DescribeDDoSAllEventListRequest $request DescribeDDoSAllEventListRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDDoSAllEventListResponse DescribeDDoSAllEventListResponse
     */
    public function describeDDoSAllEventListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDDoSAllEventList',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDDoSAllEventListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDDoSAllEventListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries DDoS attack events.
     *  *
     * @param DescribeDDoSAllEventListRequest $request DescribeDDoSAllEventListRequest
     *
     * @return DescribeDDoSAllEventListResponse DescribeDDoSAllEventListResponse
     */
    public function describeDDoSAllEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDoSAllEventListWithOptions($request, $runtime);
    }

    /**
     * @summary Query DCDN DDoS user bps and pps data
     *  *
     * @param DescribeDDoSBpsListRequest $request DescribeDDoSBpsListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDDoSBpsListResponse DescribeDDoSBpsListResponse
     */
    public function describeDDoSBpsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDDoSBpsList',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDDoSBpsListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDDoSBpsListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query DCDN DDoS user bps and pps data
     *  *
     * @param DescribeDDoSBpsListRequest $request DescribeDDoSBpsListRequest
     *
     * @return DescribeDDoSBpsListResponse DescribeDDoSBpsListResponse
     */
    public function describeDDoSBpsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDoSBpsListWithOptions($request, $runtime);
    }

    /**
     * @summary DDoS Analysis Layer 7 QPS Trend Chart API
     *  *
     * @param DescribeDDoSL7QpsListRequest $request DescribeDDoSL7QpsListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDDoSL7QpsListResponse DescribeDDoSL7QpsListResponse
     */
    public function describeDDoSL7QpsListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDDoSL7QpsList',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeDDoSL7QpsListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDDoSL7QpsListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary DDoS Analysis Layer 7 QPS Trend Chart API
     *  *
     * @param DescribeDDoSL7QpsListRequest $request DescribeDDoSL7QpsListRequest
     *
     * @return DescribeDDoSL7QpsListResponse DescribeDDoSL7QpsListResponse
     */
    public function describeDDoSL7QpsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDoSL7QpsListWithOptions($request, $runtime);
    }

    /**
     * @summary 将天眼提供给XCDN边缘容器的监控OpenAPI适配成青蓝的OpenAPI
     *  *
     * @param DescribeEdgeContainerAppStatsRequest $request DescribeEdgeContainerAppStatsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEdgeContainerAppStatsResponse DescribeEdgeContainerAppStatsResponse
     */
    public function describeEdgeContainerAppStatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEdgeContainerAppStats',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeEdgeContainerAppStatsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeEdgeContainerAppStatsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 将天眼提供给XCDN边缘容器的监控OpenAPI适配成青蓝的OpenAPI
     *  *
     * @param DescribeEdgeContainerAppStatsRequest $request DescribeEdgeContainerAppStatsRequest
     *
     * @return DescribeEdgeContainerAppStatsResponse DescribeEdgeContainerAppStatsResponse
     */
    public function describeEdgeContainerAppStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEdgeContainerAppStatsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configuration of smart HTTP DDoS protection for a website.
     *  *
     * @param DescribeHttpDDoSAttackIntelligentProtectionRequest $request DescribeHttpDDoSAttackIntelligentProtectionRequest
     * @param RuntimeOptions                                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHttpDDoSAttackIntelligentProtectionResponse DescribeHttpDDoSAttackIntelligentProtectionResponse
     */
    public function describeHttpDDoSAttackIntelligentProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHttpDDoSAttackIntelligentProtection',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeHttpDDoSAttackIntelligentProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeHttpDDoSAttackIntelligentProtectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the configuration of smart HTTP DDoS protection for a website.
     *  *
     * @param DescribeHttpDDoSAttackIntelligentProtectionRequest $request DescribeHttpDDoSAttackIntelligentProtectionRequest
     *
     * @return DescribeHttpDDoSAttackIntelligentProtectionResponse DescribeHttpDDoSAttackIntelligentProtectionResponse
     */
    public function describeHttpDDoSAttackIntelligentProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHttpDDoSAttackIntelligentProtectionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of HTTP DDoS attack protection.
     *  *
     * @param DescribeHttpDDoSAttackProtectionRequest $request DescribeHttpDDoSAttackProtectionRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHttpDDoSAttackProtectionResponse DescribeHttpDDoSAttackProtectionResponse
     */
    public function describeHttpDDoSAttackProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHttpDDoSAttackProtection',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeHttpDDoSAttackProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeHttpDDoSAttackProtectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of HTTP DDoS attack protection.
     *  *
     * @param DescribeHttpDDoSAttackProtectionRequest $request DescribeHttpDDoSAttackProtectionRequest
     *
     * @return DescribeHttpDDoSAttackProtectionResponse DescribeHttpDDoSAttackProtectionResponse
     */
    public function describeHttpDDoSAttackProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHttpDDoSAttackProtectionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether Edge KV is activated in your Alibaba Cloud account.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeKvAccountStatusResponse DescribeKvAccountStatusResponse
     */
    public function describeKvAccountStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeKvAccountStatus',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeKvAccountStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeKvAccountStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries whether Edge KV is activated in your Alibaba Cloud account.
     *  *
     * @return DescribeKvAccountStatusResponse DescribeKvAccountStatusResponse
     */
    public function describeKvAccountStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKvAccountStatusWithOptions($runtime);
    }

    /**
     * @summary Queries the details of prefetch tasks by time, task status, or prefetch URL.
     *  *
     * @param DescribePreloadTasksRequest $request DescribePreloadTasksRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePreloadTasksResponse DescribePreloadTasksResponse
     */
    public function describePreloadTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePreloadTasks',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePreloadTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePreloadTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of prefetch tasks by time, task status, or prefetch URL.
     *  *
     * @param DescribePreloadTasksRequest $request DescribePreloadTasksRequest
     *
     * @return DescribePreloadTasksResponse DescribePreloadTasksResponse
     */
    public function describePreloadTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePreloadTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of purge tasks.
     *  *
     * @param DescribePurgeTasksRequest $request DescribePurgeTasksRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePurgeTasksResponse DescribePurgeTasksResponse
     */
    public function describePurgeTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePurgeTasks',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePurgeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePurgeTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of purge tasks.
     *  *
     * @param DescribePurgeTasksRequest $request DescribePurgeTasksRequest
     *
     * @return DescribePurgeTasksResponse DescribePurgeTasksResponse
     */
    public function describePurgeTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurgeTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of an instance that uses a plan.
     *  *
     * @description You can query the status of an instance after you purchase a plan for the instance.
     *  *
     * @param DescribeRatePlanInstanceStatusRequest $request DescribeRatePlanInstanceStatusRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRatePlanInstanceStatusResponse DescribeRatePlanInstanceStatusResponse
     */
    public function describeRatePlanInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRatePlanInstanceStatus',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeRatePlanInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRatePlanInstanceStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of an instance that uses a plan.
     *  *
     * @description You can query the status of an instance after you purchase a plan for the instance.
     *  *
     * @param DescribeRatePlanInstanceStatusRequest $request DescribeRatePlanInstanceStatusRequest
     *
     * @return DescribeRatePlanInstanceStatusResponse DescribeRatePlanInstanceStatusResponse
     */
    public function describeRatePlanInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRatePlanInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Disables a scenario-specific policy.
     *  *
     * @param DisableCustomScenePolicyRequest $request DisableCustomScenePolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableCustomScenePolicyResponse DisableCustomScenePolicyResponse
     */
    public function disableCustomScenePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableCustomScenePolicy',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DisableCustomScenePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableCustomScenePolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Disables a scenario-specific policy.
     *  *
     * @param DisableCustomScenePolicyRequest $request DisableCustomScenePolicyRequest
     *
     * @return DisableCustomScenePolicyResponse DisableCustomScenePolicyResponse
     */
    public function disableCustomScenePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableCustomScenePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the Web Application Firewall (WAF) configuration of a website, such as the client IP address that is identified by WAF.
     *  *
     * @param EditSiteWafSettingsRequest $tmpReq  EditSiteWafSettingsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return EditSiteWafSettingsResponse EditSiteWafSettingsResponse
     */
    public function editSiteWafSettingsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new EditSiteWafSettingsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->settings)) {
            $request->settingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->settings, 'Settings', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        $body = [];
        if (!Utils::isUnset($request->settingsShrink)) {
            $body['Settings'] = $request->settingsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EditSiteWafSettings',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EditSiteWafSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EditSiteWafSettingsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the Web Application Firewall (WAF) configuration of a website, such as the client IP address that is identified by WAF.
     *  *
     * @param EditSiteWafSettingsRequest $request EditSiteWafSettingsRequest
     *
     * @return EditSiteWafSettingsResponse EditSiteWafSettingsResponse
     */
    public function editSiteWafSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editSiteWafSettingsWithOptions($request, $runtime);
    }

    /**
     * @summary Enables a scenario-specific policy.
     *  *
     * @param EnableCustomScenePolicyRequest $request EnableCustomScenePolicyRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableCustomScenePolicyResponse EnableCustomScenePolicyResponse
     */
    public function enableCustomScenePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableCustomScenePolicy',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EnableCustomScenePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableCustomScenePolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Enables a scenario-specific policy.
     *  *
     * @param EnableCustomScenePolicyRequest $request EnableCustomScenePolicyRequest
     *
     * @return EnableCustomScenePolicyResponse EnableCustomScenePolicyResponse
     */
    public function enableCustomScenePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableCustomScenePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Exports all DNS records of a website domain as a TXT file.
     *  *
     * @param ExportRecordsRequest $request ExportRecordsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportRecordsResponse ExportRecordsResponse
     */
    public function exportRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportRecords',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ExportRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExportRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Exports all DNS records of a website domain as a TXT file.
     *  *
     * @param ExportRecordsRequest $request ExportRecordsRequest
     *
     * @return ExportRecordsResponse ExportRecordsResponse
     */
    public function exportRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the available specifications of cache reserve instances.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCacheReserveSpecificationResponse GetCacheReserveSpecificationResponse
     */
    public function getCacheReserveSpecificationWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetCacheReserveSpecification',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetCacheReserveSpecificationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCacheReserveSpecificationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the available specifications of cache reserve instances.
     *  *
     * @return GetCacheReserveSpecificationResponse GetCacheReserveSpecificationResponse
     */
    public function getCacheReserveSpecification()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCacheReserveSpecificationWithOptions($runtime);
    }

    /**
     * @summary Query a single cache configuration
     *  *
     * @param GetCacheRuleRequest $request GetCacheRuleRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCacheRuleResponse GetCacheRuleResponse
     */
    public function getCacheRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCacheRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetCacheRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCacheRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query a single cache configuration
     *  *
     * @param GetCacheRuleRequest $request GetCacheRuleRequest
     *
     * @return GetCacheRuleResponse GetCacheRuleResponse
     */
    public function getCacheRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCacheRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Query Site Cache Tag Configuration
     *  *
     * @param GetCacheTagRequest $request GetCacheTagRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCacheTagResponse GetCacheTagResponse
     */
    public function getCacheTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCacheTag',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetCacheTagResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCacheTagResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query Site Cache Tag Configuration
     *  *
     * @param GetCacheTagRequest $request GetCacheTagRequest
     *
     * @return GetCacheTagResponse GetCacheTagResponse
     */
    public function getCacheTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCacheTagWithOptions($request, $runtime);
    }

    /**
     * @summary Retrieve the certificate, private key, and certificate information
     *  *
     * @param GetCertificateRequest $request GetCertificateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCertificateResponse GetCertificateResponse
     */
    public function getCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Retrieve the certificate, private key, and certificate information
     *  *
     * @param GetCertificateRequest $request GetCertificateRequest
     *
     * @return GetCertificateResponse GetCertificateResponse
     */
    public function getCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Query certificate quota and usage
     *  *
     * @param GetCertificateQuotaRequest $request GetCertificateQuotaRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCertificateQuotaResponse GetCertificateQuotaResponse
     */
    public function getCertificateQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCertificateQuota',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetCertificateQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCertificateQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query certificate quota and usage
     *  *
     * @param GetCertificateQuotaRequest $request GetCertificateQuotaRequest
     *
     * @return GetCertificateQuotaResponse GetCertificateQuotaResponse
     */
    public function getCertificateQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCertificateQuotaWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a client CA certificate.
     *  *
     * @param GetClientCaCertificateRequest $request GetClientCaCertificateRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetClientCaCertificateResponse GetClientCaCertificateResponse
     */
    public function getClientCaCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetClientCaCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetClientCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetClientCaCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a client CA certificate.
     *  *
     * @param GetClientCaCertificateRequest $request GetClientCaCertificateRequest
     *
     * @return GetClientCaCertificateResponse GetClientCaCertificateResponse
     */
    public function getClientCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClientCaCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about a client certificate.
     *  *
     * @param GetClientCertificateRequest $request GetClientCertificateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetClientCertificateResponse GetClientCertificateResponse
     */
    public function getClientCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetClientCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetClientCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries information about a client certificate.
     *  *
     * @param GetClientCertificateRequest $request GetClientCertificateRequest
     *
     * @return GetClientCertificateResponse GetClientCertificateResponse
     */
    public function getClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClientCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries domain names associated with a client CA certificate. If no certificate is specified, domain names associated with an Edge Security Acceleration(ESA)-managed CA certificate are returned.
     *  *
     * @param GetClientCertificateHostnamesRequest $request GetClientCertificateHostnamesRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetClientCertificateHostnamesResponse GetClientCertificateHostnamesResponse
     */
    public function getClientCertificateHostnamesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetClientCertificateHostnames',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetClientCertificateHostnamesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetClientCertificateHostnamesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries domain names associated with a client CA certificate. If no certificate is specified, domain names associated with an Edge Security Acceleration(ESA)-managed CA certificate are returned.
     *  *
     * @param GetClientCertificateHostnamesRequest $request GetClientCertificateHostnamesRequest
     *
     * @return GetClientCertificateHostnamesResponse GetClientCertificateHostnamesResponse
     */
    public function getClientCertificateHostnames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClientCertificateHostnamesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the CNAME flattening configuration of a website
     *  *
     * @param GetCnameFlatteningRequest $request GetCnameFlatteningRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCnameFlatteningResponse GetCnameFlatteningResponse
     */
    public function getCnameFlatteningWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCnameFlattening',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetCnameFlatteningResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCnameFlatteningResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the CNAME flattening configuration of a website
     *  *
     * @param GetCnameFlatteningRequest $request GetCnameFlatteningRequest
     *
     * @return GetCnameFlatteningResponse GetCnameFlatteningResponse
     */
    public function getCnameFlattening($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCnameFlatteningWithOptions($request, $runtime);
    }

    /**
     * @summary Query Compression Rule Details
     *  *
     * @param GetCompressionRuleRequest $request GetCompressionRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCompressionRuleResponse GetCompressionRuleResponse
     */
    public function getCompressionRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCompressionRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetCompressionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCompressionRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query Compression Rule Details
     *  *
     * @param GetCompressionRuleRequest $request GetCompressionRuleRequest
     *
     * @return GetCompressionRuleResponse GetCompressionRuleResponse
     */
    public function getCompressionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCompressionRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Query Site Developer Mode Configuration
     *  *
     * @param GetDevelopmentModeRequest $request GetDevelopmentModeRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDevelopmentModeResponse GetDevelopmentModeResponse
     */
    public function getDevelopmentModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDevelopmentMode',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetDevelopmentModeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDevelopmentModeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query Site Developer Mode Configuration
     *  *
     * @param GetDevelopmentModeRequest $request GetDevelopmentModeRequest
     *
     * @return GetDevelopmentModeResponse GetDevelopmentModeResponse
     */
    public function getDevelopmentMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDevelopmentModeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a containerized application, including basic application configurations and health check configurations.
     *  *
     * @param GetEdgeContainerAppRequest $request GetEdgeContainerAppRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEdgeContainerAppResponse GetEdgeContainerAppResponse
     */
    public function getEdgeContainerAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEdgeContainerApp',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetEdgeContainerAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEdgeContainerAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a containerized application, including basic application configurations and health check configurations.
     *  *
     * @param GetEdgeContainerAppRequest $request GetEdgeContainerAppRequest
     *
     * @return GetEdgeContainerAppResponse GetEdgeContainerAppResponse
     */
    public function getEdgeContainerApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerAppWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the log collection configuration of a containerized application.
     *  *
     * @param GetEdgeContainerAppLogRiverRequest $request GetEdgeContainerAppLogRiverRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEdgeContainerAppLogRiverResponse GetEdgeContainerAppLogRiverResponse
     */
    public function getEdgeContainerAppLogRiverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEdgeContainerAppLogRiver',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetEdgeContainerAppLogRiverResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEdgeContainerAppLogRiverResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the log collection configuration of a containerized application.
     *  *
     * @param GetEdgeContainerAppLogRiverRequest $request GetEdgeContainerAppLogRiverRequest
     *
     * @return GetEdgeContainerAppLogRiverResponse GetEdgeContainerAppLogRiverResponse
     */
    public function getEdgeContainerAppLogRiver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerAppLogRiverWithOptions($request, $runtime);
    }

    /**
     * @summary 获取边缘容器资源预留配置
     *  *
     * @param GetEdgeContainerAppResourceReserveRequest $request GetEdgeContainerAppResourceReserveRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEdgeContainerAppResourceReserveResponse GetEdgeContainerAppResourceReserveResponse
     */
    public function getEdgeContainerAppResourceReserveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEdgeContainerAppResourceReserve',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetEdgeContainerAppResourceReserveResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEdgeContainerAppResourceReserveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取边缘容器资源预留配置
     *  *
     * @param GetEdgeContainerAppResourceReserveRequest $request GetEdgeContainerAppResourceReserveRequest
     *
     * @return GetEdgeContainerAppResourceReserveResponse GetEdgeContainerAppResourceReserveResponse
     */
    public function getEdgeContainerAppResourceReserve($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerAppResourceReserveWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status information about a containerized application, including the deployment, release, and rollback of the application.
     *  *
     * @param GetEdgeContainerAppStatusRequest $request GetEdgeContainerAppStatusRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEdgeContainerAppStatusResponse GetEdgeContainerAppStatusResponse
     */
    public function getEdgeContainerAppStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->publishEnv)) {
            $query['PublishEnv'] = $request->publishEnv;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEdgeContainerAppStatus',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetEdgeContainerAppStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEdgeContainerAppStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the status information about a containerized application, including the deployment, release, and rollback of the application.
     *  *
     * @param GetEdgeContainerAppStatusRequest $request GetEdgeContainerAppStatusRequest
     *
     * @return GetEdgeContainerAppStatusResponse GetEdgeContainerAppStatusResponse
     */
    public function getEdgeContainerAppStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerAppStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a version of a containerized application. You can select an application version to release based on the version information.
     *  *
     * @param GetEdgeContainerAppVersionRequest $request GetEdgeContainerAppVersionRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEdgeContainerAppVersionResponse GetEdgeContainerAppVersionResponse
     */
    public function getEdgeContainerAppVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEdgeContainerAppVersion',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetEdgeContainerAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEdgeContainerAppVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a version of a containerized application. You can select an application version to release based on the version information.
     *  *
     * @param GetEdgeContainerAppVersionRequest $request GetEdgeContainerAppVersionRequest
     *
     * @return GetEdgeContainerAppVersionResponse GetEdgeContainerAppVersionResponse
     */
    public function getEdgeContainerAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerAppVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries regions where a containerized application is deployed based on the application ID.
     *  *
     * @param GetEdgeContainerDeployRegionsRequest $request GetEdgeContainerDeployRegionsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEdgeContainerDeployRegionsResponse GetEdgeContainerDeployRegionsResponse
     */
    public function getEdgeContainerDeployRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEdgeContainerDeployRegions',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetEdgeContainerDeployRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEdgeContainerDeployRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries regions where a containerized application is deployed based on the application ID.
     *  *
     * @param GetEdgeContainerDeployRegionsRequest $request GetEdgeContainerDeployRegionsRequest
     *
     * @return GetEdgeContainerDeployRegionsResponse GetEdgeContainerDeployRegionsResponse
     */
    public function getEdgeContainerDeployRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerDeployRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Edge Container logs.
     *  *
     * @param GetEdgeContainerLogsRequest $request GetEdgeContainerLogsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEdgeContainerLogsResponse GetEdgeContainerLogsResponse
     */
    public function getEdgeContainerLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEdgeContainerLogs',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetEdgeContainerLogsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEdgeContainerLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries Edge Container logs.
     *  *
     * @param GetEdgeContainerLogsRequest $request GetEdgeContainerLogsRequest
     *
     * @return GetEdgeContainerLogsResponse GetEdgeContainerLogsResponse
     */
    public function getEdgeContainerLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the deployment status of an application in the staging environment by using the application ID.
     *  *
     * @param GetEdgeContainerStagingDeployStatusRequest $request GetEdgeContainerStagingDeployStatusRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEdgeContainerStagingDeployStatusResponse GetEdgeContainerStagingDeployStatusResponse
     */
    public function getEdgeContainerStagingDeployStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEdgeContainerStagingDeployStatus',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetEdgeContainerStagingDeployStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEdgeContainerStagingDeployStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the deployment status of an application in the staging environment by using the application ID.
     *  *
     * @param GetEdgeContainerStagingDeployStatusRequest $request GetEdgeContainerStagingDeployStatusRequest
     *
     * @return GetEdgeContainerStagingDeployStatusResponse GetEdgeContainerStagingDeployStatusResponse
     */
    public function getEdgeContainerStagingDeployStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerStagingDeployStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the terminal information of a containerized application.
     *  *
     * @param GetEdgeContainerTerminalRequest $request GetEdgeContainerTerminalRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEdgeContainerTerminalResponse GetEdgeContainerTerminalResponse
     */
    public function getEdgeContainerTerminalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEdgeContainerTerminal',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetEdgeContainerTerminalResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEdgeContainerTerminalResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the terminal information of a containerized application.
     *  *
     * @param GetEdgeContainerTerminalRequest $request GetEdgeContainerTerminalRequest
     *
     * @return GetEdgeContainerTerminalResponse GetEdgeContainerTerminalResponse
     */
    public function getEdgeContainerTerminal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerTerminalWithOptions($request, $runtime);
    }

    /**
     * @summary Query HTTP Request Header Rule Details
     *  *
     * @param GetHttpRequestHeaderModificationRuleRequest $request GetHttpRequestHeaderModificationRuleRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHttpRequestHeaderModificationRuleResponse GetHttpRequestHeaderModificationRuleResponse
     */
    public function getHttpRequestHeaderModificationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHttpRequestHeaderModificationRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetHttpRequestHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetHttpRequestHeaderModificationRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query HTTP Request Header Rule Details
     *  *
     * @param GetHttpRequestHeaderModificationRuleRequest $request GetHttpRequestHeaderModificationRuleRequest
     *
     * @return GetHttpRequestHeaderModificationRuleResponse GetHttpRequestHeaderModificationRuleResponse
     */
    public function getHttpRequestHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHttpRequestHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Query HTTP Response Header Rules
     *  *
     * @param GetHttpResponseHeaderModificationRuleRequest $request GetHttpResponseHeaderModificationRuleRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHttpResponseHeaderModificationRuleResponse GetHttpResponseHeaderModificationRuleResponse
     */
    public function getHttpResponseHeaderModificationRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHttpResponseHeaderModificationRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetHttpResponseHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetHttpResponseHeaderModificationRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query HTTP Response Header Rules
     *  *
     * @param GetHttpResponseHeaderModificationRuleRequest $request GetHttpResponseHeaderModificationRuleRequest
     *
     * @return GetHttpResponseHeaderModificationRuleResponse GetHttpResponseHeaderModificationRuleResponse
     */
    public function getHttpResponseHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHttpResponseHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Query a Single HTTPS Application Configuration
     *  *
     * @param GetHttpsApplicationConfigurationRequest $request GetHttpsApplicationConfigurationRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHttpsApplicationConfigurationResponse GetHttpsApplicationConfigurationResponse
     */
    public function getHttpsApplicationConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHttpsApplicationConfiguration',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetHttpsApplicationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetHttpsApplicationConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query a Single HTTPS Application Configuration
     *  *
     * @param GetHttpsApplicationConfigurationRequest $request GetHttpsApplicationConfigurationRequest
     *
     * @return GetHttpsApplicationConfigurationResponse GetHttpsApplicationConfigurationResponse
     */
    public function getHttpsApplicationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHttpsApplicationConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Query a Single HTTPS Basic Configuration
     *  *
     * @param GetHttpsBasicConfigurationRequest $request GetHttpsBasicConfigurationRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHttpsBasicConfigurationResponse GetHttpsBasicConfigurationResponse
     */
    public function getHttpsBasicConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHttpsBasicConfiguration',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetHttpsBasicConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetHttpsBasicConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query a Single HTTPS Basic Configuration
     *  *
     * @param GetHttpsBasicConfigurationRequest $request GetHttpsBasicConfigurationRequest
     *
     * @return GetHttpsBasicConfigurationResponse GetHttpsBasicConfigurationResponse
     */
    public function getHttpsBasicConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHttpsBasicConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the IPv6 configuration of a website.
     *  *
     * @param GetIPv6Request $request GetIPv6Request
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetIPv6Response GetIPv6Response
     */
    public function getIPv6WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIPv6',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetIPv6Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetIPv6Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the IPv6 configuration of a website.
     *  *
     * @param GetIPv6Request $request GetIPv6Request
     *
     * @return GetIPv6Response GetIPv6Response
     */
    public function getIPv6($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIPv6WithOptions($request, $runtime);
    }

    /**
     * @summary Query Single Site Image Transformation Configuration
     *  *
     * @param GetImageTransformRequest $request GetImageTransformRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetImageTransformResponse GetImageTransformResponse
     */
    public function getImageTransformWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetImageTransform',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetImageTransformResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetImageTransformResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query Single Site Image Transformation Configuration
     *  *
     * @param GetImageTransformRequest $request GetImageTransformRequest
     *
     * @return GetImageTransformResponse GetImageTransformResponse
     */
    public function getImageTransform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageTransformWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the value of a key in a key-value pair.
     *  *
     * @param GetKvRequest   $request GetKvRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetKvResponse GetKvResponse
     */
    public function getKvWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetKv',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetKvResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetKvResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the value of a key in a key-value pair.
     *  *
     * @param GetKvRequest $request GetKvRequest
     *
     * @return GetKvResponse GetKvResponse
     */
    public function getKv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKvWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Edge KV usage in your Alibaba Cloud account, including the information about all namespaces.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetKvAccountResponse GetKvAccountResponse
     */
    public function getKvAccountWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetKvAccount',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetKvAccountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetKvAccountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the Edge KV usage in your Alibaba Cloud account, including the information about all namespaces.
     *  *
     * @return GetKvAccountResponse GetKvAccountResponse
     */
    public function getKvAccount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKvAccountWithOptions($runtime);
    }

    /**
     * @summary Queries the information about a namespace in your Alibaba Cloud account.
     *  *
     * @param GetKvNamespaceRequest $request GetKvNamespaceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetKvNamespaceResponse GetKvNamespaceResponse
     */
    public function getKvNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetKvNamespace',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetKvNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetKvNamespaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a namespace in your Alibaba Cloud account.
     *  *
     * @param GetKvNamespaceRequest $request GetKvNamespaceRequest
     *
     * @return GetKvNamespaceResponse GetKvNamespaceResponse
     */
    public function getKvNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKvNamespaceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a custom list, such as the name, description, type, and content.
     *  *
     * @param GetListRequest $request GetListRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetListResponse GetListResponse
     */
    public function getListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetList',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a custom list, such as the name, description, type, and content.
     *  *
     * @param GetListRequest $request GetListRequest
     *
     * @return GetListResponse GetListResponse
     */
    public function getList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getListWithOptions($request, $runtime);
    }

    /**
     * @summary Query a Specific Load Balancer
     *  *
     * @description This API allows users to query the configuration details of a specific load balancer by providing necessary authentication information and resource identifiers, including but not limited to name, session persistence strategy, routing policy, etc.
     *  *
     * @param GetLoadBalancerRequest $request GetLoadBalancerRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLoadBalancerResponse GetLoadBalancerResponse
     */
    public function getLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLoadBalancer',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLoadBalancerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query a Specific Load Balancer
     *  *
     * @description This API allows users to query the configuration details of a specific load balancer by providing necessary authentication information and resource identifiers, including but not limited to name, session persistence strategy, routing policy, etc.
     *  *
     * @param GetLoadBalancerRequest $request GetLoadBalancerRequest
     *
     * @return GetLoadBalancerResponse GetLoadBalancerResponse
     */
    public function getLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * @summary Query Managed Transform Configuration
     *  *
     * @param GetManagedTransformRequest $request GetManagedTransformRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetManagedTransformResponse GetManagedTransformResponse
     */
    public function getManagedTransformWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetManagedTransform',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetManagedTransformResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetManagedTransformResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query Managed Transform Configuration
     *  *
     * @param GetManagedTransformRequest $request GetManagedTransformRequest
     *
     * @return GetManagedTransformResponse GetManagedTransformResponse
     */
    public function getManagedTransform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getManagedTransformWithOptions($request, $runtime);
    }

    /**
     * @summary Query a single network optimization configuration
     *  *
     * @param GetNetworkOptimizationRequest $request GetNetworkOptimizationRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNetworkOptimizationResponse GetNetworkOptimizationResponse
     */
    public function getNetworkOptimizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNetworkOptimization',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetNetworkOptimizationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNetworkOptimizationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query a single network optimization configuration
     *  *
     * @param GetNetworkOptimizationRequest $request GetNetworkOptimizationRequest
     *
     * @return GetNetworkOptimizationResponse GetNetworkOptimizationResponse
     */
    public function getNetworkOptimization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNetworkOptimizationWithOptions($request, $runtime);
    }

    /**
     * @summary Query a specific origin pool
     *  *
     * @param GetOriginPoolRequest $request GetOriginPoolRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOriginPoolResponse GetOriginPoolResponse
     */
    public function getOriginPoolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOriginPool',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetOriginPoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOriginPoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query a specific origin pool
     *  *
     * @param GetOriginPoolRequest $request GetOriginPoolRequest
     *
     * @return GetOriginPoolResponse GetOriginPoolResponse
     */
    public function getOriginPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOriginPoolWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the origin protection configurations of a website, including the origin protection, IP convergence, and the status and details of the IP whitelist for origin protection. The details includes the IP whitelist used by the website, the latest IP whitelist, and the differences between them.
     *  *
     * @param GetOriginProtectionRequest $request GetOriginProtectionRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOriginProtectionResponse GetOriginProtectionResponse
     */
    public function getOriginProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOriginProtection',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetOriginProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOriginProtectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the origin protection configurations of a website, including the origin protection, IP convergence, and the status and details of the IP whitelist for origin protection. The details includes the IP whitelist used by the website, the latest IP whitelist, and the differences between them.
     *  *
     * @param GetOriginProtectionRequest $request GetOriginProtectionRequest
     *
     * @return GetOriginProtectionResponse GetOriginProtectionResponse
     */
    public function getOriginProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOriginProtectionWithOptions($request, $runtime);
    }

    /**
     * @summary Query a Single Origin Rule Configuration
     *  *
     * @param GetOriginRuleRequest $request GetOriginRuleRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOriginRuleResponse GetOriginRuleResponse
     */
    public function getOriginRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOriginRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetOriginRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOriginRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query a Single Origin Rule Configuration
     *  *
     * @param GetOriginRuleRequest $request GetOriginRuleRequest
     *
     * @return GetOriginRuleResponse GetOriginRuleResponse
     */
    public function getOriginRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOriginRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a custom error page based on the error page ID.
     *  *
     * @param GetPageRequest $request GetPageRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPageResponse GetPageResponse
     */
    public function getPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPage',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetPageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a custom error page based on the error page ID.
     *  *
     * @param GetPageRequest $request GetPageRequest
     *
     * @return GetPageResponse GetPageResponse
     */
    public function getPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the quotas and quota usage for different cache purge options.
     *  *
     * @param GetPurgeQuotaRequest $request GetPurgeQuotaRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPurgeQuotaResponse GetPurgeQuotaResponse
     */
    public function getPurgeQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPurgeQuota',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetPurgeQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPurgeQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the quotas and quota usage for different cache purge options.
     *  *
     * @param GetPurgeQuotaRequest $request GetPurgeQuotaRequest
     *
     * @return GetPurgeQuotaResponse GetPurgeQuotaResponse
     */
    public function getPurgeQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPurgeQuotaWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the fields in real-time logs based on the log category.
     *  *
     * @param GetRealtimeDeliveryFieldRequest $request GetRealtimeDeliveryFieldRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRealtimeDeliveryFieldResponse GetRealtimeDeliveryFieldResponse
     */
    public function getRealtimeDeliveryFieldWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRealtimeDeliveryField',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetRealtimeDeliveryFieldResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRealtimeDeliveryFieldResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the fields in real-time logs based on the log category.
     *  *
     * @param GetRealtimeDeliveryFieldRequest $request GetRealtimeDeliveryFieldRequest
     *
     * @return GetRealtimeDeliveryFieldResponse GetRealtimeDeliveryFieldResponse
     */
    public function getRealtimeDeliveryField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRealtimeDeliveryFieldWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configuration of a single DNS record, such as the record value, priority, and origin authentication setting (exclusive to CNAME records).
     *  *
     * @param GetRecordRequest $request GetRecordRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRecordResponse GetRecordResponse
     */
    public function getRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRecord',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the configuration of a single DNS record, such as the record value, priority, and origin authentication setting (exclusive to CNAME records).
     *  *
     * @param GetRecordRequest $request GetRecordRequest
     *
     * @return GetRecordResponse GetRecordResponse
     */
    public function getRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRecordWithOptions($request, $runtime);
    }

    /**
     * @summary Query Redirect Rule Details
     *  *
     * @param GetRedirectRuleRequest $request GetRedirectRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRedirectRuleResponse GetRedirectRuleResponse
     */
    public function getRedirectRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRedirectRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetRedirectRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRedirectRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query Redirect Rule Details
     *  *
     * @param GetRedirectRuleRequest $request GetRedirectRuleRequest
     *
     * @return GetRedirectRuleResponse GetRedirectRuleResponse
     */
    public function getRedirectRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRedirectRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Query details of the rewrite URL rule
     *  *
     * @param GetRewriteUrlRuleRequest $request GetRewriteUrlRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRewriteUrlRuleResponse GetRewriteUrlRuleResponse
     */
    public function getRewriteUrlRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRewriteUrlRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetRewriteUrlRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRewriteUrlRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query details of the rewrite URL rule
     *  *
     * @param GetRewriteUrlRuleRequest $request GetRewriteUrlRuleRequest
     *
     * @return GetRewriteUrlRuleResponse GetRewriteUrlRuleResponse
     */
    public function getRewriteUrlRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRewriteUrlRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of a routine, including the code versions and the configurations of the environments, associated domain names, and associated routes.
     *  *
     * @param GetRoutineRequest $request GetRoutineRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRoutineResponse GetRoutineResponse
     */
    public function getRoutineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetRoutine',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetRoutineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRoutineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of a routine, including the code versions and the configurations of the environments, associated domain names, and associated routes.
     *  *
     * @param GetRoutineRequest $request GetRoutineRequest
     *
     * @return GetRoutineResponse GetRoutineResponse
     */
    public function getRoutine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoutineWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the release information about the routine code that is released to the staging environment. This information can be used to upload the test code to Object Storage Service (OSS).
     *  *
     * @description *   Every time the code of a routine is released to the staging environment, a version number is generated. Such code is for tests only.
     * *   A routine can retain a maximum of 10 code versions. If the number of versions reaches the limit, you must call the DeleteRoutineCodeRevision operation to delete unwanted versions.
     *  *
     * @param GetRoutineStagingCodeUploadInfoRequest $request GetRoutineStagingCodeUploadInfoRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRoutineStagingCodeUploadInfoResponse GetRoutineStagingCodeUploadInfoResponse
     */
    public function getRoutineStagingCodeUploadInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->codeDescription)) {
            $body['CodeDescription'] = $request->codeDescription;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetRoutineStagingCodeUploadInfo',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetRoutineStagingCodeUploadInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRoutineStagingCodeUploadInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains the release information about the routine code that is released to the staging environment. This information can be used to upload the test code to Object Storage Service (OSS).
     *  *
     * @description *   Every time the code of a routine is released to the staging environment, a version number is generated. Such code is for tests only.
     * *   A routine can retain a maximum of 10 code versions. If the number of versions reaches the limit, you must call the DeleteRoutineCodeRevision operation to delete unwanted versions.
     *  *
     * @param GetRoutineStagingCodeUploadInfoRequest $request GetRoutineStagingCodeUploadInfoRequest
     *
     * @return GetRoutineStagingCodeUploadInfoResponse GetRoutineStagingCodeUploadInfoResponse
     */
    public function getRoutineStagingCodeUploadInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoutineStagingCodeUploadInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the IP addresses of staging environments for Edge Routine.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRoutineStagingEnvIpResponse GetRoutineStagingEnvIpResponse
     */
    public function getRoutineStagingEnvIpWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetRoutineStagingEnvIp',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetRoutineStagingEnvIpResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRoutineStagingEnvIpResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the IP addresses of staging environments for Edge Routine.
     *  *
     * @return GetRoutineStagingEnvIpResponse GetRoutineStagingEnvIpResponse
     */
    public function getRoutineStagingEnvIp()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoutineStagingEnvIpWithOptions($runtime);
    }

    /**
     * @summary Queries the Edge Routine information in your Alibaba Cloud account, including the associated subdomain and created routines.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRoutineUserInfoResponse GetRoutineUserInfoResponse
     */
    public function getRoutineUserInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetRoutineUserInfo',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetRoutineUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRoutineUserInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the Edge Routine information in your Alibaba Cloud account, including the associated subdomain and created routines.
     *  *
     * @return GetRoutineUserInfoResponse GetRoutineUserInfoResponse
     */
    public function getRoutineUserInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoutineUserInfoWithOptions($runtime);
    }

    /**
     * @summary Queries a specified scheduled prefetch task based on the task ID.
     *  *
     * @param GetScheduledPreloadJobRequest $request GetScheduledPreloadJobRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetScheduledPreloadJobResponse GetScheduledPreloadJobResponse
     */
    public function getScheduledPreloadJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScheduledPreloadJob',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetScheduledPreloadJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetScheduledPreloadJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a specified scheduled prefetch task based on the task ID.
     *  *
     * @param GetScheduledPreloadJobRequest $request GetScheduledPreloadJobRequest
     *
     * @return GetScheduledPreloadJobResponse GetScheduledPreloadJobResponse
     */
    public function getScheduledPreloadJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScheduledPreloadJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configuration for search engine crawler of a website.
     *  *
     * @param GetSeoBypassRequest $request GetSeoBypassRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSeoBypassResponse GetSeoBypassResponse
     */
    public function getSeoBypassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSeoBypass',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSeoBypassResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSeoBypassResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the configuration for search engine crawler of a website.
     *  *
     * @param GetSeoBypassRequest $request GetSeoBypassRequest
     *
     * @return GetSeoBypassResponse GetSeoBypassResponse
     */
    public function getSeoBypass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSeoBypassWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about a website based on the website ID.
     *  *
     * @param GetSiteRequest $request GetSiteRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSiteResponse GetSiteResponse
     */
    public function getSiteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSite',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSiteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSiteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries information about a website based on the website ID.
     *  *
     * @param GetSiteRequest $request GetSiteRequest
     *
     * @return GetSiteResponse GetSiteResponse
     */
    public function getSite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSiteWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the nameservers configured for a website.
     *  *
     * @param GetSiteCurrentNSRequest $request GetSiteCurrentNSRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSiteCurrentNSResponse GetSiteCurrentNSResponse
     */
    public function getSiteCurrentNSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSiteCurrentNS',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSiteCurrentNSResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSiteCurrentNSResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the nameservers configured for a website.
     *  *
     * @param GetSiteCurrentNSRequest $request GetSiteCurrentNSRequest
     *
     * @return GetSiteCurrentNSResponse GetSiteCurrentNSResponse
     */
    public function getSiteCurrentNS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSiteCurrentNSWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configuration of custom log fields for a website.
     *  *
     * @description *   **Description**: You can call this operation to query the configuration of custom log fields for a website, including custom fields in request headers, response headers, and cookies.
     * *   **Scenarios**: You can call this operation in scenarios where you need to obtain specific HTTP headers or cookie information for log analysis.
     *  *
     * @param GetSiteCustomLogRequest $request GetSiteCustomLogRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSiteCustomLogResponse GetSiteCustomLogResponse
     */
    public function getSiteCustomLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSiteCustomLog',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSiteCustomLogResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSiteCustomLogResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the configuration of custom log fields for a website.
     *  *
     * @description *   **Description**: You can call this operation to query the configuration of custom log fields for a website, including custom fields in request headers, response headers, and cookies.
     * *   **Scenarios**: You can call this operation in scenarios where you need to obtain specific HTTP headers or cookie information for log analysis.
     *  *
     * @param GetSiteCustomLogRequest $request GetSiteCustomLogRequest
     *
     * @return GetSiteCustomLogResponse GetSiteCustomLogResponse
     */
    public function getSiteCustomLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSiteCustomLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a real-time log delivery task.
     *  *
     * @param GetSiteDeliveryTaskRequest $request GetSiteDeliveryTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSiteDeliveryTaskResponse GetSiteDeliveryTaskResponse
     */
    public function getSiteDeliveryTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSiteDeliveryTask',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSiteDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSiteDeliveryTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a real-time log delivery task.
     *  *
     * @param GetSiteDeliveryTaskRequest $request GetSiteDeliveryTaskRequest
     *
     * @return GetSiteDeliveryTaskResponse GetSiteDeliveryTaskResponse
     */
    public function getSiteDeliveryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSiteDeliveryTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the remaining quota for delivering a specific category of real-time logs in a website.
     *  *
     * @description You can call this operation to query the remaining quota for delivering a specific category of real-time logs in a website within an Alibaba Cloud account. This is essential for monitoring and managing your log delivery capacity to ensure that logs can be delivered to the destination and prevent data loss or latency caused by insufficient quota.
     * **Take note of the following parameters:**
     * *   ``
     * *   `BusinessType` is required. You must specify a log category to obtain the corresponding quota information.
     * *   `SiteId` specifies the ID of a website, which must be a valid integer that corresponds to a website that you configured on Alibaba Cloud.
     * **Response:**
     * *   If a request is successful, the system returns the remaining log delivery quota (`FreeQuota`), request ID (`RequestId`), website ID (`SiteId`), and log category (`BusinessType`). You can confirm and record the returned data.
     *  *
     * @param GetSiteLogDeliveryQuotaRequest $request GetSiteLogDeliveryQuotaRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSiteLogDeliveryQuotaResponse GetSiteLogDeliveryQuotaResponse
     */
    public function getSiteLogDeliveryQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSiteLogDeliveryQuota',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSiteLogDeliveryQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSiteLogDeliveryQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the remaining quota for delivering a specific category of real-time logs in a website.
     *  *
     * @description You can call this operation to query the remaining quota for delivering a specific category of real-time logs in a website within an Alibaba Cloud account. This is essential for monitoring and managing your log delivery capacity to ensure that logs can be delivered to the destination and prevent data loss or latency caused by insufficient quota.
     * **Take note of the following parameters:**
     * *   ``
     * *   `BusinessType` is required. You must specify a log category to obtain the corresponding quota information.
     * *   `SiteId` specifies the ID of a website, which must be a valid integer that corresponds to a website that you configured on Alibaba Cloud.
     * **Response:**
     * *   If a request is successful, the system returns the remaining log delivery quota (`FreeQuota`), request ID (`RequestId`), website ID (`SiteId`), and log category (`BusinessType`). You can confirm and record the returned data.
     *  *
     * @param GetSiteLogDeliveryQuotaRequest $request GetSiteLogDeliveryQuotaRequest
     *
     * @return GetSiteLogDeliveryQuotaResponse GetSiteLogDeliveryQuotaResponse
     */
    public function getSiteLogDeliveryQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSiteLogDeliveryQuotaWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the site hold configuration of a website. After you enable site hold, other accounts cannot add your website domain or its subdomains to ESA.
     *  *
     * @param GetSiteNameExclusiveRequest $request GetSiteNameExclusiveRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSiteNameExclusiveResponse GetSiteNameExclusiveResponse
     */
    public function getSiteNameExclusiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSiteNameExclusive',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSiteNameExclusiveResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSiteNameExclusiveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the site hold configuration of a website. After you enable site hold, other accounts cannot add your website domain or its subdomains to ESA.
     *  *
     * @param GetSiteNameExclusiveRequest $request GetSiteNameExclusiveRequest
     *
     * @return GetSiteNameExclusiveResponse GetSiteNameExclusiveResponse
     */
    public function getSiteNameExclusive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSiteNameExclusiveWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the ESA proxy configuration of a website.
     *  *
     * @param GetSitePauseRequest $request GetSitePauseRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSitePauseResponse GetSitePauseResponse
     */
    public function getSitePauseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSitePause',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSitePauseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSitePauseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the ESA proxy configuration of a website.
     *  *
     * @param GetSitePauseRequest $request GetSitePauseRequest
     *
     * @return GetSitePauseResponse GetSitePauseResponse
     */
    public function getSitePause($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSitePauseWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Web Application Firewall (WAF) configurations of a website.
     *  *
     * @param GetSiteWafSettingsRequest $request GetSiteWafSettingsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSiteWafSettingsResponse GetSiteWafSettingsResponse
     */
    public function getSiteWafSettingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSiteWafSettings',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSiteWafSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSiteWafSettingsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the Web Application Firewall (WAF) configurations of a website.
     *  *
     * @param GetSiteWafSettingsRequest $request GetSiteWafSettingsRequest
     *
     * @return GetSiteWafSettingsResponse GetSiteWafSettingsResponse
     */
    public function getSiteWafSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSiteWafSettingsWithOptions($request, $runtime);
    }

    /**
     * @summary Query Multi-level Cache Configuration for Site
     *  *
     * @param GetTieredCacheRequest $request GetTieredCacheRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTieredCacheResponse GetTieredCacheResponse
     */
    public function getTieredCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTieredCache',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTieredCacheResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTieredCacheResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query Multi-level Cache Configuration for Site
     *  *
     * @param GetTieredCacheRequest $request GetTieredCacheRequest
     *
     * @return GetTieredCacheResponse GetTieredCacheResponse
     */
    public function getTieredCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTieredCacheWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the execution status and running information of a file upload task based on the task ID.
     *  *
     * @param GetUploadTaskRequest $request GetUploadTaskRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUploadTaskResponse GetUploadTaskResponse
     */
    public function getUploadTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUploadTask',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetUploadTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUploadTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the execution status and running information of a file upload task based on the task ID.
     *  *
     * @param GetUploadTaskRequest $request GetUploadTaskRequest
     *
     * @return GetUploadTaskResponse GetUploadTaskResponse
     */
    public function getUploadTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a log delivery task by account.
     *  *
     * @description *   This API operation queries the details of a delivery task, including the task name, discard rate, region, log category, status, delivery destination, configuration, and filtering rules.****
     * *   You can call this operation to query detailed information about a log delivery task to analyze log processing efficiency or troubleshoot delivery problems.****
     * *   ****````
     *  *
     * @param GetUserDeliveryTaskRequest $request GetUserDeliveryTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserDeliveryTaskResponse GetUserDeliveryTaskResponse
     */
    public function getUserDeliveryTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserDeliveryTask',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetUserDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserDeliveryTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a log delivery task by account.
     *  *
     * @description *   This API operation queries the details of a delivery task, including the task name, discard rate, region, log category, status, delivery destination, configuration, and filtering rules.****
     * *   You can call this operation to query detailed information about a log delivery task to analyze log processing efficiency or troubleshoot delivery problems.****
     * *   ****````
     *  *
     * @param GetUserDeliveryTaskRequest $request GetUserDeliveryTaskRequest
     *
     * @return GetUserDeliveryTaskResponse GetUserDeliveryTaskResponse
     */
    public function getUserDeliveryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserDeliveryTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the remaining log delivery quota of each log category in your account.
     *  *
     * @description This operation allows you to query the remaining real-time log delivery quota of each log category in your Alibaba Cloud account. You must provide your Alibaba Cloud account ID (aliUid) and log category (BusinessType). The system then returns the remaining quota of the log category to help you track the usage.
     *  *
     * @param GetUserLogDeliveryQuotaRequest $request GetUserLogDeliveryQuotaRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserLogDeliveryQuotaResponse GetUserLogDeliveryQuotaResponse
     */
    public function getUserLogDeliveryQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserLogDeliveryQuota',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetUserLogDeliveryQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserLogDeliveryQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the remaining log delivery quota of each log category in your account.
     *  *
     * @description This operation allows you to query the remaining real-time log delivery quota of each log category in your Alibaba Cloud account. You must provide your Alibaba Cloud account ID (aliUid) and log category (BusinessType). The system then returns the remaining quota of the log category to help you track the usage.
     *  *
     * @param GetUserLogDeliveryQuotaRequest $request GetUserLogDeliveryQuotaRequest
     *
     * @return GetUserLogDeliveryQuotaResponse GetUserLogDeliveryQuotaResponse
     */
    public function getUserLogDeliveryQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserLogDeliveryQuotaWithOptions($request, $runtime);
    }

    /**
     * @summary This interface is used to obtain the application key (AppKey) for the BOT behavior detection feature in the site\\"s Web Application Firewall (WAF). The key is typically used for authentication and data exchange with the WAF service.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWafBotAppKeyResponse GetWafBotAppKeyResponse
     */
    public function getWafBotAppKeyWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'GetWafBotAppKey',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetWafBotAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetWafBotAppKeyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary This interface is used to obtain the application key (AppKey) for the BOT behavior detection feature in the site\\"s Web Application Firewall (WAF). The key is typically used for authentication and data exchange with the WAF service.
     *  *
     * @return GetWafBotAppKeyResponse GetWafBotAppKeyResponse
     */
    public function getWafBotAppKey()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWafBotAppKeyWithOptions($runtime);
    }

    /**
     * @summary Queries the conditions for matching incoming requests that are configured in a WAF rule category for a website. These conditions define how WAF detects and processes different types of requests.
     *  *
     * @param GetWafFilterRequest $request GetWafFilterRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWafFilterResponse GetWafFilterResponse
     */
    public function getWafFilterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->phase)) {
            $query['Phase'] = $request->phase;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWafFilter',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetWafFilterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetWafFilterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the conditions for matching incoming requests that are configured in a WAF rule category for a website. These conditions define how WAF detects and processes different types of requests.
     *  *
     * @param GetWafFilterRequest $request GetWafFilterRequest
     *
     * @return GetWafFilterResponse GetWafFilterResponse
     */
    public function getWafFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWafFilterWithOptions($request, $runtime);
    }

    /**
     * @summary Get WAF Quota Details
     *  *
     * @param GetWafQuotaRequest $request GetWafQuotaRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWafQuotaResponse GetWafQuotaResponse
     */
    public function getWafQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->paths)) {
            $query['Paths'] = $request->paths;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWafQuota',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetWafQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetWafQuotaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Get WAF Quota Details
     *  *
     * @param GetWafQuotaRequest $request GetWafQuotaRequest
     *
     * @return GetWafQuotaResponse GetWafQuotaResponse
     */
    public function getWafQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWafQuotaWithOptions($request, $runtime);
    }

    /**
     * @summary Query Cache Reserve Instance List
     *  *
     * @param ListCacheReserveInstancesRequest $request ListCacheReserveInstancesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCacheReserveInstancesResponse ListCacheReserveInstancesResponse
     */
    public function listCacheReserveInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCacheReserveInstances',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListCacheReserveInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCacheReserveInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query Cache Reserve Instance List
     *  *
     * @param ListCacheReserveInstancesRequest $request ListCacheReserveInstancesRequest
     *
     * @return ListCacheReserveInstancesResponse ListCacheReserveInstancesResponse
     */
    public function listCacheReserveInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCacheReserveInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Query multiple cache configurations
     *  *
     * @param ListCacheRulesRequest $request ListCacheRulesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCacheRulesResponse ListCacheRulesResponse
     */
    public function listCacheRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCacheRules',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListCacheRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCacheRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query multiple cache configurations
     *  *
     * @param ListCacheRulesRequest $request ListCacheRulesRequest
     *
     * @return ListCacheRulesResponse ListCacheRulesResponse
     */
    public function listCacheRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCacheRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Lists certificates of a website.
     *  *
     * @param ListCertificatesRequest $request ListCertificatesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCertificatesResponse ListCertificatesResponse
     */
    public function listCertificatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCertificates',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCertificatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists certificates of a website.
     *  *
     * @param ListCertificatesRequest $request ListCertificatesRequest
     *
     * @return ListCertificatesResponse ListCertificatesResponse
     */
    public function listCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCertificatesWithOptions($request, $runtime);
    }

    /**
     * @summary Query TLS Cipher Suite List
     *  *
     * @param ListCiphersRequest $request ListCiphersRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCiphersResponse ListCiphersResponse
     */
    public function listCiphersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCiphers',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListCiphersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCiphersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query TLS Cipher Suite List
     *  *
     * @param ListCiphersRequest $request ListCiphersRequest
     *
     * @return ListCiphersResponse ListCiphersResponse
     */
    public function listCiphers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCiphersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of client certificate authority (CA) certificates for a website.
     *  *
     * @param ListClientCaCertificatesRequest $request ListClientCaCertificatesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClientCaCertificatesResponse ListClientCaCertificatesResponse
     */
    public function listClientCaCertificatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClientCaCertificates',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListClientCaCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClientCaCertificatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of client certificate authority (CA) certificates for a website.
     *  *
     * @param ListClientCaCertificatesRequest $request ListClientCaCertificatesRequest
     *
     * @return ListClientCaCertificatesResponse ListClientCaCertificatesResponse
     */
    public function listClientCaCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClientCaCertificatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries client certificates configured for a website.
     *  *
     * @param ListClientCertificatesRequest $request ListClientCertificatesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClientCertificatesResponse ListClientCertificatesResponse
     */
    public function listClientCertificatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClientCertificates',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListClientCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListClientCertificatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries client certificates configured for a website.
     *  *
     * @param ListClientCertificatesRequest $request ListClientCertificatesRequest
     *
     * @return ListClientCertificatesResponse ListClientCertificatesResponse
     */
    public function listClientCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClientCertificatesWithOptions($request, $runtime);
    }

    /**
     * @summary Query the list of compression rules
     *  *
     * @param ListCompressionRulesRequest $request ListCompressionRulesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCompressionRulesResponse ListCompressionRulesResponse
     */
    public function listCompressionRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCompressionRules',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListCompressionRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCompressionRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query the list of compression rules
     *  *
     * @param ListCompressionRulesRequest $request ListCompressionRulesRequest
     *
     * @return ListCompressionRulesResponse ListCompressionRulesResponse
     */
    public function listCompressionRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCompressionRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Lists domain names that are associated with a containerized application.
     *  *
     * @param ListEdgeContainerAppRecordsRequest $request ListEdgeContainerAppRecordsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEdgeContainerAppRecordsResponse ListEdgeContainerAppRecordsResponse
     */
    public function listEdgeContainerAppRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEdgeContainerAppRecords',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListEdgeContainerAppRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEdgeContainerAppRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists domain names that are associated with a containerized application.
     *  *
     * @param ListEdgeContainerAppRecordsRequest $request ListEdgeContainerAppRecordsRequest
     *
     * @return ListEdgeContainerAppRecordsResponse ListEdgeContainerAppRecordsResponse
     */
    public function listEdgeContainerAppRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEdgeContainerAppRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Lists versions of all containerized applications.
     *  *
     * @param ListEdgeContainerAppVersionsRequest $request ListEdgeContainerAppVersionsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEdgeContainerAppVersionsResponse ListEdgeContainerAppVersionsResponse
     */
    public function listEdgeContainerAppVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEdgeContainerAppVersions',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListEdgeContainerAppVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEdgeContainerAppVersionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists versions of all containerized applications.
     *  *
     * @param ListEdgeContainerAppVersionsRequest $request ListEdgeContainerAppVersionsRequest
     *
     * @return ListEdgeContainerAppVersionsResponse ListEdgeContainerAppVersionsResponse
     */
    public function listEdgeContainerAppVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEdgeContainerAppVersionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all containerized applications in your Alibaba Cloud account.
     *  *
     * @param ListEdgeContainerAppsRequest $request ListEdgeContainerAppsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEdgeContainerAppsResponse ListEdgeContainerAppsResponse
     */
    public function listEdgeContainerAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderKey)) {
            $query['OrderKey'] = $request->orderKey;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->searchType)) {
            $query['SearchType'] = $request->searchType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEdgeContainerApps',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListEdgeContainerAppsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEdgeContainerAppsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries all containerized applications in your Alibaba Cloud account.
     *  *
     * @param ListEdgeContainerAppsRequest $request ListEdgeContainerAppsRequest
     *
     * @return ListEdgeContainerAppsResponse ListEdgeContainerAppsResponse
     */
    public function listEdgeContainerApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEdgeContainerAppsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the records that are associated with Edge Container for a website.
     *  *
     * @param ListEdgeContainerRecordsRequest $request ListEdgeContainerRecordsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEdgeContainerRecordsResponse ListEdgeContainerRecordsResponse
     */
    public function listEdgeContainerRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEdgeContainerRecords',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListEdgeContainerRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEdgeContainerRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the records that are associated with Edge Container for a website.
     *  *
     * @param ListEdgeContainerRecordsRequest $request ListEdgeContainerRecordsRequest
     *
     * @return ListEdgeContainerRecordsResponse ListEdgeContainerRecordsResponse
     */
    public function listEdgeContainerRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEdgeContainerRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Edge Routine plans.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEdgeRoutinePlansResponse ListEdgeRoutinePlansResponse
     */
    public function listEdgeRoutinePlansWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListEdgeRoutinePlans',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListEdgeRoutinePlansResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEdgeRoutinePlansResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries Edge Routine plans.
     *  *
     * @return ListEdgeRoutinePlansResponse ListEdgeRoutinePlansResponse
     */
    public function listEdgeRoutinePlans()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEdgeRoutinePlansWithOptions($runtime);
    }

    /**
     * @summary Queries the records that are associated with Edge Routine routes for a website.
     *  *
     * @description >  You can call this operation 100 times per second.
     *  *
     * @param ListEdgeRoutineRecordsRequest $request ListEdgeRoutineRecordsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEdgeRoutineRecordsResponse ListEdgeRoutineRecordsResponse
     */
    public function listEdgeRoutineRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEdgeRoutineRecords',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListEdgeRoutineRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEdgeRoutineRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the records that are associated with Edge Routine routes for a website.
     *  *
     * @description >  You can call this operation 100 times per second.
     *  *
     * @param ListEdgeRoutineRecordsRequest $request ListEdgeRoutineRecordsRequest
     *
     * @return ListEdgeRoutineRecordsResponse ListEdgeRoutineRecordsResponse
     */
    public function listEdgeRoutineRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEdgeRoutineRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary List of HTTP Request Header Rules
     *  *
     * @param ListHttpRequestHeaderModificationRulesRequest $request ListHttpRequestHeaderModificationRulesRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHttpRequestHeaderModificationRulesResponse ListHttpRequestHeaderModificationRulesResponse
     */
    public function listHttpRequestHeaderModificationRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHttpRequestHeaderModificationRules',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListHttpRequestHeaderModificationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListHttpRequestHeaderModificationRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary List of HTTP Request Header Rules
     *  *
     * @param ListHttpRequestHeaderModificationRulesRequest $request ListHttpRequestHeaderModificationRulesRequest
     *
     * @return ListHttpRequestHeaderModificationRulesResponse ListHttpRequestHeaderModificationRulesResponse
     */
    public function listHttpRequestHeaderModificationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHttpRequestHeaderModificationRulesWithOptions($request, $runtime);
    }

    /**
     * @summary List of HTTP Response Header Rules
     *  *
     * @param ListHttpResponseHeaderModificationRulesRequest $request ListHttpResponseHeaderModificationRulesRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHttpResponseHeaderModificationRulesResponse ListHttpResponseHeaderModificationRulesResponse
     */
    public function listHttpResponseHeaderModificationRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHttpResponseHeaderModificationRules',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListHttpResponseHeaderModificationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListHttpResponseHeaderModificationRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary List of HTTP Response Header Rules
     *  *
     * @param ListHttpResponseHeaderModificationRulesRequest $request ListHttpResponseHeaderModificationRulesRequest
     *
     * @return ListHttpResponseHeaderModificationRulesResponse ListHttpResponseHeaderModificationRulesResponse
     */
    public function listHttpResponseHeaderModificationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHttpResponseHeaderModificationRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Query multiple HTTPS application configurations
     *  *
     * @param ListHttpsApplicationConfigurationsRequest $request ListHttpsApplicationConfigurationsRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHttpsApplicationConfigurationsResponse ListHttpsApplicationConfigurationsResponse
     */
    public function listHttpsApplicationConfigurationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHttpsApplicationConfigurations',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListHttpsApplicationConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListHttpsApplicationConfigurationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query multiple HTTPS application configurations
     *  *
     * @param ListHttpsApplicationConfigurationsRequest $request ListHttpsApplicationConfigurationsRequest
     *
     * @return ListHttpsApplicationConfigurationsResponse ListHttpsApplicationConfigurationsResponse
     */
    public function listHttpsApplicationConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHttpsApplicationConfigurationsWithOptions($request, $runtime);
    }

    /**
     * @summary Query multiple HTTPS basic configurations
     *  *
     * @param ListHttpsBasicConfigurationsRequest $request ListHttpsBasicConfigurationsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHttpsBasicConfigurationsResponse ListHttpsBasicConfigurationsResponse
     */
    public function listHttpsBasicConfigurationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHttpsBasicConfigurations',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListHttpsBasicConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListHttpsBasicConfigurationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query multiple HTTPS basic configurations
     *  *
     * @param ListHttpsBasicConfigurationsRequest $request ListHttpsBasicConfigurationsRequest
     *
     * @return ListHttpsBasicConfigurationsResponse ListHttpsBasicConfigurationsResponse
     */
    public function listHttpsBasicConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHttpsBasicConfigurationsWithOptions($request, $runtime);
    }

    /**
     * @summary Query Multiple Site Image Transformation Configurations
     *  *
     * @param ListImageTransformsRequest $request ListImageTransformsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListImageTransformsResponse ListImageTransformsResponse
     */
    public function listImageTransformsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListImageTransforms',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListImageTransformsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListImageTransformsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query Multiple Site Image Transformation Configurations
     *  *
     * @param ListImageTransformsRequest $request ListImageTransformsRequest
     *
     * @return ListImageTransformsResponse ListImageTransformsResponse
     */
    public function listImageTransforms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImageTransformsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the quota details in a subscription plan.
     *  *
     * @param ListInstanceQuotasRequest $request ListInstanceQuotasRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstanceQuotasResponse ListInstanceQuotasResponse
     */
    public function listInstanceQuotasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceQuotas',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListInstanceQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInstanceQuotasResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the quota details in a subscription plan.
     *  *
     * @param ListInstanceQuotasRequest $request ListInstanceQuotasRequest
     *
     * @return ListInstanceQuotasResponse ListInstanceQuotasResponse
     */
    public function listInstanceQuotas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceQuotasWithOptions($request, $runtime);
    }

    /**
     * @summary Queries quotas and the actual usage in a plan based on the website or plan ID.
     *  *
     * @param ListInstanceQuotasWithUsageRequest $request ListInstanceQuotasWithUsageRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstanceQuotasWithUsageResponse ListInstanceQuotasWithUsageResponse
     */
    public function listInstanceQuotasWithUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceQuotasWithUsage',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListInstanceQuotasWithUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInstanceQuotasWithUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries quotas and the actual usage in a plan based on the website or plan ID.
     *  *
     * @param ListInstanceQuotasWithUsageRequest $request ListInstanceQuotasWithUsageRequest
     *
     * @return ListInstanceQuotasWithUsageResponse ListInstanceQuotasWithUsageResponse
     */
    public function listInstanceQuotasWithUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceQuotasWithUsageWithOptions($request, $runtime);
    }

    /**
     * @summary Lists all key-value pairs in a namespace in your Alibaba Cloud account.
     *  *
     * @param ListKvsRequest $request ListKvsRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListKvsResponse ListKvsResponse
     */
    public function listKvsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListKvs',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListKvsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListKvsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists all key-value pairs in a namespace in your Alibaba Cloud account.
     *  *
     * @param ListKvsRequest $request ListKvsRequest
     *
     * @return ListKvsResponse ListKvsResponse
     */
    public function listKvs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKvsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all custom lists and their details in an Alibaba Cloud account. You can specify query arguments to filter the results and display the returned lists by page.
     *  *
     * @param ListListsRequest $tmpReq  ListListsRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListListsResponse ListListsResponse
     */
    public function listListsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListListsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->queryArgs)) {
            $request->queryArgsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->queryArgs, 'QueryArgs', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryArgsShrink)) {
            $query['QueryArgs'] = $request->queryArgsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLists',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListListsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListListsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries all custom lists and their details in an Alibaba Cloud account. You can specify query arguments to filter the results and display the returned lists by page.
     *  *
     * @param ListListsRequest $request ListListsRequest
     *
     * @return ListListsResponse ListListsResponse
     */
    public function listLists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListsWithOptions($request, $runtime);
    }

    /**
     * @summary Query the status of origins in load balancers
     *  *
     * @description Query the status of origins under load balancers. You can pass multiple load balancer IDs at once, separated by commas. This is for load balancers that have monitors configured. It will probe the origins in the source address pools used by the load balancers and record the current status of each origin.
     * - Healthy(healthy): The probe result is available.
     * - Unhealthy(unhealthy): The probe result is unavailable.
     * - Unknown(unknown): Unknown, the monitor has not yet probed.
     * - Undetected(undetected): The load balancer to which the origin belongs is not bound to a monitor.
     *  *
     * @param ListLoadBalancerOriginStatusRequest $request ListLoadBalancerOriginStatusRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLoadBalancerOriginStatusResponse ListLoadBalancerOriginStatusResponse
     */
    public function listLoadBalancerOriginStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLoadBalancerOriginStatus',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListLoadBalancerOriginStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLoadBalancerOriginStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query the status of origins in load balancers
     *  *
     * @description Query the status of origins under load balancers. You can pass multiple load balancer IDs at once, separated by commas. This is for load balancers that have monitors configured. It will probe the origins in the source address pools used by the load balancers and record the current status of each origin.
     * - Healthy(healthy): The probe result is available.
     * - Unhealthy(unhealthy): The probe result is unavailable.
     * - Unknown(unknown): Unknown, the monitor has not yet probed.
     * - Undetected(undetected): The load balancer to which the origin belongs is not bound to a monitor.
     *  *
     * @param ListLoadBalancerOriginStatusRequest $request ListLoadBalancerOriginStatusRequest
     *
     * @return ListLoadBalancerOriginStatusResponse ListLoadBalancerOriginStatusResponse
     */
    public function listLoadBalancerOriginStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLoadBalancerOriginStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Query Load Balancer Region List
     *  *
     * @description When creating a load balancer \\"based on country/region scheduling\\" strategy through OpenAPI, use the code of primary or secondary regions to represent traffic from this geographical area.
     *  *
     * @param ListLoadBalancerRegionsRequest $request ListLoadBalancerRegionsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLoadBalancerRegionsResponse ListLoadBalancerRegionsResponse
     */
    public function listLoadBalancerRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLoadBalancerRegions',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListLoadBalancerRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLoadBalancerRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query Load Balancer Region List
     *  *
     * @description When creating a load balancer \\"based on country/region scheduling\\" strategy through OpenAPI, use the code of primary or secondary regions to represent traffic from this geographical area.
     *  *
     * @param ListLoadBalancerRegionsRequest $request ListLoadBalancerRegionsRequest
     *
     * @return ListLoadBalancerRegionsResponse ListLoadBalancerRegionsResponse
     */
    public function listLoadBalancerRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLoadBalancerRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Query the list of load balancers
     *  *
     * @param ListLoadBalancersRequest $request ListLoadBalancersRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLoadBalancersResponse ListLoadBalancersResponse
     */
    public function listLoadBalancersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLoadBalancers',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLoadBalancersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query the list of load balancers
     *  *
     * @param ListLoadBalancersRequest $request ListLoadBalancersRequest
     *
     * @return ListLoadBalancersResponse ListLoadBalancersResponse
     */
    public function listLoadBalancers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLoadBalancersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all WAF managed rule groups in your Alibaba Cloud account.
     *  *
     * @param ListManagedRulesGroupsRequest $request ListManagedRulesGroupsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListManagedRulesGroupsResponse ListManagedRulesGroupsResponse
     */
    public function listManagedRulesGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListManagedRulesGroups',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListManagedRulesGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListManagedRulesGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries all WAF managed rule groups in your Alibaba Cloud account.
     *  *
     * @param ListManagedRulesGroupsRequest $request ListManagedRulesGroupsRequest
     *
     * @return ListManagedRulesGroupsResponse ListManagedRulesGroupsResponse
     */
    public function listManagedRulesGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listManagedRulesGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Query multiple network optimization configurations
     *  *
     * @param ListNetworkOptimizationsRequest $request ListNetworkOptimizationsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListNetworkOptimizationsResponse ListNetworkOptimizationsResponse
     */
    public function listNetworkOptimizationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListNetworkOptimizations',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListNetworkOptimizationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNetworkOptimizationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query multiple network optimization configurations
     *  *
     * @param ListNetworkOptimizationsRequest $request ListNetworkOptimizationsRequest
     *
     * @return ListNetworkOptimizationsResponse ListNetworkOptimizationsResponse
     */
    public function listNetworkOptimizations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetworkOptimizationsWithOptions($request, $runtime);
    }

    /**
     * @summary List Origin Pools
     *  *
     * @param ListOriginPoolsRequest $request ListOriginPoolsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOriginPoolsResponse ListOriginPoolsResponse
     */
    public function listOriginPoolsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOriginPools',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListOriginPoolsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListOriginPoolsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary List Origin Pools
     *  *
     * @param ListOriginPoolsRequest $request ListOriginPoolsRequest
     *
     * @return ListOriginPoolsResponse ListOriginPoolsResponse
     */
    public function listOriginPools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOriginPoolsWithOptions($request, $runtime);
    }

    /**
     * @summary Query multiple origin rule configurations
     *  *
     * @param ListOriginRulesRequest $request ListOriginRulesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOriginRulesResponse ListOriginRulesResponse
     */
    public function listOriginRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOriginRules',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListOriginRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListOriginRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query multiple origin rule configurations
     *  *
     * @param ListOriginRulesRequest $request ListOriginRulesRequest
     *
     * @return ListOriginRulesResponse ListOriginRulesResponse
     */
    public function listOriginRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOriginRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Lists all custom error pages that you created. You can define the page number and the number of entries per page to display the response.
     *  *
     * @param ListPagesRequest $tmpReq  ListPagesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPagesResponse ListPagesResponse
     */
    public function listPagesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListPagesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->queryArgs)) {
            $request->queryArgsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->queryArgs, 'QueryArgs', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryArgsShrink)) {
            $query['QueryArgs'] = $request->queryArgsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPages',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListPagesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPagesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists all custom error pages that you created. You can define the page number and the number of entries per page to display the response.
     *  *
     * @param ListPagesRequest $request ListPagesRequest
     *
     * @return ListPagesResponse ListPagesResponse
     */
    public function listPages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPagesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of Domain Name System (DNS) records of a website, including the record value, priority, and authentication configurations. Supports filtering by specifying parameters such as RecordName and RecordMatchType.
     *  *
     * @description The DNS records related to Edge Container, Edge Routine, and TCP/UDP proxy are not returned in this operation.
     *  *
     * @param ListRecordsRequest $request ListRecordsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRecordsResponse ListRecordsResponse
     */
    public function listRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRecords',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of Domain Name System (DNS) records of a website, including the record value, priority, and authentication configurations. Supports filtering by specifying parameters such as RecordName and RecordMatchType.
     *  *
     * @description The DNS records related to Edge Container, Edge Routine, and TCP/UDP proxy are not returned in this operation.
     *  *
     * @param ListRecordsRequest $request ListRecordsRequest
     *
     * @return ListRecordsResponse ListRecordsResponse
     */
    public function listRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Query Redirect Rule List
     *  *
     * @param ListRedirectRulesRequest $request ListRedirectRulesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRedirectRulesResponse ListRedirectRulesResponse
     */
    public function listRedirectRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRedirectRules',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListRedirectRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRedirectRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query Redirect Rule List
     *  *
     * @param ListRedirectRulesRequest $request ListRedirectRulesRequest
     *
     * @return ListRedirectRulesResponse ListRedirectRulesResponse
     */
    public function listRedirectRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRedirectRulesWithOptions($request, $runtime);
    }

    /**
     * @summary List of Rewrite URL Rules
     *  *
     * @param ListRewriteUrlRulesRequest $request ListRewriteUrlRulesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRewriteUrlRulesResponse ListRewriteUrlRulesResponse
     */
    public function listRewriteUrlRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRewriteUrlRules',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListRewriteUrlRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRewriteUrlRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary List of Rewrite URL Rules
     *  *
     * @param ListRewriteUrlRulesRequest $request ListRewriteUrlRulesRequest
     *
     * @return ListRewriteUrlRulesResponse ListRewriteUrlRulesResponse
     */
    public function listRewriteUrlRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRewriteUrlRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Lists the regions to which Edge Routine code can be released for canary deployment.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRoutineCanaryAreasResponse ListRoutineCanaryAreasResponse
     */
    public function listRoutineCanaryAreasWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListRoutineCanaryAreas',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListRoutineCanaryAreasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRoutineCanaryAreasResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists the regions to which Edge Routine code can be released for canary deployment.
     *  *
     * @return ListRoutineCanaryAreasResponse ListRoutineCanaryAreasResponse
     */
    public function listRoutineCanaryAreas()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRoutineCanaryAreasWithOptions($runtime);
    }

    /**
     * @summary Queries the specifications that you can select for a routine based on the plan type. The response contains all specifications that you can select for a routine. The IsAvailable parameter indicates whether a specification is available.
     *  *
     * @description You can call this operation to query the specifications that you can select for a routine.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRoutineOptionalSpecsResponse ListRoutineOptionalSpecsResponse
     */
    public function listRoutineOptionalSpecsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListRoutineOptionalSpecs',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListRoutineOptionalSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRoutineOptionalSpecsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the specifications that you can select for a routine based on the plan type. The response contains all specifications that you can select for a routine. The IsAvailable parameter indicates whether a specification is available.
     *  *
     * @description You can call this operation to query the specifications that you can select for a routine.
     *  *
     * @return ListRoutineOptionalSpecsResponse ListRoutineOptionalSpecsResponse
     */
    public function listRoutineOptionalSpecs()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRoutineOptionalSpecsWithOptions($runtime);
    }

    /**
     * @summary Lists the plans in a scheduled prefetch task by task ID.
     *  *
     * @param ListScheduledPreloadExecutionsRequest $request ListScheduledPreloadExecutionsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListScheduledPreloadExecutionsResponse ListScheduledPreloadExecutionsResponse
     */
    public function listScheduledPreloadExecutionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScheduledPreloadExecutions',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListScheduledPreloadExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListScheduledPreloadExecutionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists the plans in a scheduled prefetch task by task ID.
     *  *
     * @param ListScheduledPreloadExecutionsRequest $request ListScheduledPreloadExecutionsRequest
     *
     * @return ListScheduledPreloadExecutionsResponse ListScheduledPreloadExecutionsResponse
     */
    public function listScheduledPreloadExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScheduledPreloadExecutionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the scheduled prefetch tasks for a website.
     *  *
     * @param ListScheduledPreloadJobsRequest $request ListScheduledPreloadJobsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListScheduledPreloadJobsResponse ListScheduledPreloadJobsResponse
     */
    public function listScheduledPreloadJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScheduledPreloadJobs',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListScheduledPreloadJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListScheduledPreloadJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the scheduled prefetch tasks for a website.
     *  *
     * @param ListScheduledPreloadJobsRequest $request ListScheduledPreloadJobsRequest
     *
     * @return ListScheduledPreloadJobsResponse ListScheduledPreloadJobsResponse
     */
    public function listScheduledPreloadJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScheduledPreloadJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Lists all log delivery tasks that are in progress.
     *  *
     * @param ListSiteDeliveryTasksRequest $request ListSiteDeliveryTasksRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSiteDeliveryTasksResponse ListSiteDeliveryTasksResponse
     */
    public function listSiteDeliveryTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSiteDeliveryTasks',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSiteDeliveryTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSiteDeliveryTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists all log delivery tasks that are in progress.
     *  *
     * @param ListSiteDeliveryTasksRequest $request ListSiteDeliveryTasksRequest
     *
     * @return ListSiteDeliveryTasksResponse ListSiteDeliveryTasksResponse
     */
    public function listSiteDeliveryTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSiteDeliveryTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Query Site List
     *  *
     * @param ListSitesRequest $tmpReq  ListSitesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSitesResponse ListSitesResponse
     */
    public function listSitesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListSitesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tagFilter)) {
            $request->tagFilterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tagFilter, 'TagFilter', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSites',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSitesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSitesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query Site List
     *  *
     * @param ListSitesRequest $request ListSitesRequest
     *
     * @return ListSitesResponse ListSitesResponse
     */
    public function listSites($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSitesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries tags based on the region ID and resource type.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxItem)) {
            $query['MaxItem'] = $request->maxItem;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries tags based on the region ID and resource type.
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the execution status and running information of file upload tasks based on the task time and type.
     *  *
     * @param ListUploadTasksRequest $request ListUploadTasksRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUploadTasksResponse ListUploadTasksResponse
     */
    public function listUploadTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUploadTasks',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListUploadTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUploadTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the execution status and running information of file upload tasks based on the task time and type.
     *  *
     * @param ListUploadTasksRequest $request ListUploadTasksRequest
     *
     * @return ListUploadTasksResponse ListUploadTasksResponse
     */
    public function listUploadTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUploadTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all delivery tasks in your Alibaba Cloud account by page. You can filter the delivery tasks by the category of the delivered real-time logs.
     *  *
     * @param ListUserDeliveryTasksRequest $request ListUserDeliveryTasksRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserDeliveryTasksResponse ListUserDeliveryTasksResponse
     */
    public function listUserDeliveryTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserDeliveryTasks',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListUserDeliveryTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUserDeliveryTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries all delivery tasks in your Alibaba Cloud account by page. You can filter the delivery tasks by the category of the delivered real-time logs.
     *  *
     * @param ListUserDeliveryTasksRequest $request ListUserDeliveryTasksRequest
     *
     * @return ListUserDeliveryTasksResponse ListUserDeliveryTasksResponse
     */
    public function listUserDeliveryTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserDeliveryTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the plans that you purchased and the details of the plans.
     *  *
     * @param ListUserRatePlanInstancesRequest $request ListUserRatePlanInstancesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserRatePlanInstancesResponse ListUserRatePlanInstancesResponse
     */
    public function listUserRatePlanInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserRatePlanInstances',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListUserRatePlanInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListUserRatePlanInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the plans that you purchased and the details of the plans.
     *  *
     * @param ListUserRatePlanInstancesRequest $request ListUserRatePlanInstancesRequest
     *
     * @return ListUserRatePlanInstancesResponse ListUserRatePlanInstancesResponse
     */
    public function listUserRatePlanInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserRatePlanInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Lists all Web Application Firewall (WAF) managed rules or some of them based on specific conditions. You can call this operation to query the details of WAF rules by page.
     *  *
     * @param ListWafManagedRulesRequest $tmpReq  ListWafManagedRulesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWafManagedRulesResponse ListWafManagedRulesResponse
     */
    public function listWafManagedRulesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListWafManagedRulesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->queryArgs)) {
            $request->queryArgsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->queryArgs, 'QueryArgs', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->attackType)) {
            $query['AttackType'] = $request->attackType;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->protectionLevel)) {
            $query['ProtectionLevel'] = $request->protectionLevel;
        }
        if (!Utils::isUnset($request->queryArgsShrink)) {
            $query['QueryArgs'] = $request->queryArgsShrink;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWafManagedRules',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListWafManagedRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWafManagedRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists all Web Application Firewall (WAF) managed rules or some of them based on specific conditions. You can call this operation to query the details of WAF rules by page.
     *  *
     * @param ListWafManagedRulesRequest $request ListWafManagedRulesRequest
     *
     * @return ListWafManagedRulesResponse ListWafManagedRulesResponse
     */
    public function listWafManagedRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWafManagedRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the WAF rule categories that are applied to a website and related rulesets.
     *  *
     * @param ListWafPhasesRequest $request ListWafPhasesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWafPhasesResponse ListWafPhasesResponse
     */
    public function listWafPhasesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWafPhases',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListWafPhasesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWafPhasesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the WAF rule categories that are applied to a website and related rulesets.
     *  *
     * @param ListWafPhasesRequest $request ListWafPhasesRequest
     *
     * @return ListWafPhasesResponse ListWafPhasesResponse
     */
    public function listWafPhases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWafPhasesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries template rules in Web Application Firewall (WAF). In most cases, these rules are pre-defined rulesets that are used to quickly enable protection against common types of attacks.
     *  *
     * @param ListWafTemplateRulesRequest $tmpReq  ListWafTemplateRulesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWafTemplateRulesResponse ListWafTemplateRulesResponse
     */
    public function listWafTemplateRulesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListWafTemplateRulesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->queryArgs)) {
            $request->queryArgsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->queryArgs, 'QueryArgs', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->phase)) {
            $query['Phase'] = $request->phase;
        }
        if (!Utils::isUnset($request->queryArgsShrink)) {
            $query['QueryArgs'] = $request->queryArgsShrink;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWafTemplateRules',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListWafTemplateRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWafTemplateRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries template rules in Web Application Firewall (WAF). In most cases, these rules are pre-defined rulesets that are used to quickly enable protection against common types of attacks.
     *  *
     * @param ListWafTemplateRulesRequest $request ListWafTemplateRulesRequest
     *
     * @return ListWafTemplateRulesResponse ListWafTemplateRulesResponse
     */
    public function listWafTemplateRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWafTemplateRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the usage details of WAF rules.
     *  *
     * @param ListWafUsageOfRulesRequest $request ListWafUsageOfRulesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWafUsageOfRulesResponse ListWafUsageOfRulesResponse
     */
    public function listWafUsageOfRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->phase)) {
            $query['Phase'] = $request->phase;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWafUsageOfRules',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListWafUsageOfRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWafUsageOfRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the usage details of WAF rules.
     *  *
     * @param ListWafUsageOfRulesRequest $request ListWafUsageOfRulesRequest
     *
     * @return ListWafUsageOfRulesResponse ListWafUsageOfRulesResponse
     */
    public function listWafUsageOfRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWafUsageOfRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about waiting room events for a waiting room.
     *  *
     * @description You can call this operation to query details of all waiting room events related to a waiting room in a website.
     *  *
     * @param ListWaitingRoomEventsRequest $request ListWaitingRoomEventsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWaitingRoomEventsResponse ListWaitingRoomEventsResponse
     */
    public function listWaitingRoomEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWaitingRoomEvents',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListWaitingRoomEventsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWaitingRoomEventsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about waiting room events for a waiting room.
     *  *
     * @description You can call this operation to query details of all waiting room events related to a waiting room in a website.
     *  *
     * @param ListWaitingRoomEventsRequest $request ListWaitingRoomEventsRequest
     *
     * @return ListWaitingRoomEventsResponse ListWaitingRoomEventsResponse
     */
    public function listWaitingRoomEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWaitingRoomEventsWithOptions($request, $runtime);
    }

    /**
     * @summary Query Waiting Room Bypass Rules
     *  *
     * @description This API allows users to query the list of waiting room bypass rules associated with a specific site.
     *  *
     * @param ListWaitingRoomRulesRequest $request ListWaitingRoomRulesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWaitingRoomRulesResponse ListWaitingRoomRulesResponse
     */
    public function listWaitingRoomRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWaitingRoomRules',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListWaitingRoomRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWaitingRoomRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Query Waiting Room Bypass Rules
     *  *
     * @description This API allows users to query the list of waiting room bypass rules associated with a specific site.
     *  *
     * @param ListWaitingRoomRulesRequest $request ListWaitingRoomRulesRequest
     *
     * @return ListWaitingRoomRulesResponse ListWaitingRoomRulesResponse
     */
    public function listWaitingRoomRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWaitingRoomRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about all waiting rooms in a website.
     *  *
     * @description You can call this operation to query detailed configurations about all waiting rooms in a website, including the status, name, and queuing rules of each waiting room.
     *  *
     * @param ListWaitingRoomsRequest $request ListWaitingRoomsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWaitingRoomsResponse ListWaitingRoomsResponse
     */
    public function listWaitingRoomsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWaitingRooms',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListWaitingRoomsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWaitingRoomsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about all waiting rooms in a website.
     *  *
     * @description You can call this operation to query detailed configurations about all waiting rooms in a website, including the status, name, and queuing rules of each waiting room.
     *  *
     * @param ListWaitingRoomsRequest $request ListWaitingRoomsRequest
     *
     * @return ListWaitingRoomsResponse ListWaitingRoomsResponse
     */
    public function listWaitingRooms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWaitingRoomsWithOptions($request, $runtime);
    }

    /**
     * @summary Prefetches cache.
     *  *
     * @param PreloadCachesRequest $tmpReq  PreloadCachesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return PreloadCachesResponse PreloadCachesResponse
     */
    public function preloadCachesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PreloadCachesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->content)) {
            $request->contentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }
        if (!Utils::isUnset($tmpReq->headers)) {
            $request->headersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->headers, 'Headers', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->contentShrink)) {
            $query['Content'] = $request->contentShrink;
        }
        if (!Utils::isUnset($request->headersShrink)) {
            $query['Headers'] = $request->headersShrink;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'PreloadCaches',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PreloadCachesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PreloadCachesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Prefetches cache.
     *  *
     * @param PreloadCachesRequest $request PreloadCachesRequest
     *
     * @return PreloadCachesResponse PreloadCachesResponse
     */
    public function preloadCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preloadCachesWithOptions($request, $runtime);
    }

    /**
     * @summary Releases a specific version of a containerized application. You can call this operation to iterate an application.
     *  *
     * @param PublishEdgeContainerAppVersionRequest $tmpReq  PublishEdgeContainerAppVersionRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return PublishEdgeContainerAppVersionResponse PublishEdgeContainerAppVersionResponse
     */
    public function publishEdgeContainerAppVersionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PublishEdgeContainerAppVersionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->regions)) {
            $request->regionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->regions, 'Regions', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->fullRelease)) {
            $query['FullRelease'] = $request->fullRelease;
        }
        if (!Utils::isUnset($request->publishType)) {
            $query['PublishType'] = $request->publishType;
        }
        if (!Utils::isUnset($request->regionsShrink)) {
            $query['Regions'] = $request->regionsShrink;
        }
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->percentage)) {
            $body['Percentage'] = $request->percentage;
        }
        if (!Utils::isUnset($request->publishEnv)) {
            $body['PublishEnv'] = $request->publishEnv;
        }
        if (!Utils::isUnset($request->remarks)) {
            $body['Remarks'] = $request->remarks;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PublishEdgeContainerAppVersion',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PublishEdgeContainerAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PublishEdgeContainerAppVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Releases a specific version of a containerized application. You can call this operation to iterate an application.
     *  *
     * @param PublishEdgeContainerAppVersionRequest $request PublishEdgeContainerAppVersionRequest
     *
     * @return PublishEdgeContainerAppVersionResponse PublishEdgeContainerAppVersionResponse
     */
    public function publishEdgeContainerAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishEdgeContainerAppVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Releases a code version of a routine to the staging, canary, or production environment. You can specify the regions where the canary environment is deployed to release your code.
     *  *
     * @param PublishRoutineCodeVersionRequest $tmpReq  PublishRoutineCodeVersionRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return PublishRoutineCodeVersionResponse PublishRoutineCodeVersionResponse
     */
    public function publishRoutineCodeVersionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PublishRoutineCodeVersionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->canaryAreaList)) {
            $request->canaryAreaListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->canaryAreaList, 'CanaryAreaList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->canaryAreaListShrink)) {
            $body['CanaryAreaList'] = $request->canaryAreaListShrink;
        }
        if (!Utils::isUnset($request->canaryCodeVersion)) {
            $body['CanaryCodeVersion'] = $request->canaryCodeVersion;
        }
        if (!Utils::isUnset($request->codeVersion)) {
            $body['CodeVersion'] = $request->codeVersion;
        }
        if (!Utils::isUnset($request->env)) {
            $body['Env'] = $request->env;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PublishRoutineCodeVersion',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PublishRoutineCodeVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PublishRoutineCodeVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Releases a code version of a routine to the staging, canary, or production environment. You can specify the regions where the canary environment is deployed to release your code.
     *  *
     * @param PublishRoutineCodeVersionRequest $request PublishRoutineCodeVersionRequest
     *
     * @return PublishRoutineCodeVersionResponse PublishRoutineCodeVersionResponse
     */
    public function publishRoutineCodeVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishRoutineCodeVersionWithOptions($request, $runtime);
    }

    /**
     * @summary New Purchase of Cache Retention
     *  *
     * @param PurchaseCacheReserveRequest $request PurchaseCacheReserveRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return PurchaseCacheReserveResponse PurchaseCacheReserveResponse
     */
    public function purchaseCacheReserveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->crRegion)) {
            $query['CrRegion'] = $request->crRegion;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->quotaGb)) {
            $query['QuotaGb'] = $request->quotaGb;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'PurchaseCacheReserve',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PurchaseCacheReserveResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PurchaseCacheReserveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary New Purchase of Cache Retention
     *  *
     * @param PurchaseCacheReserveRequest $request PurchaseCacheReserveRequest
     *
     * @return PurchaseCacheReserveResponse PurchaseCacheReserveResponse
     */
    public function purchaseCacheReserve($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purchaseCacheReserveWithOptions($request, $runtime);
    }

    /**
     * @summary Purchase New Package
     *  *
     * @description 1. The package name and code can be obtained from the DescribeRatePlanPrice interface.
     * 2. If the acceleration area is not overseas, the site must have successfully completed the filing process.
     *  *
     * @param PurchaseRatePlanRequest $request PurchaseRatePlanRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return PurchaseRatePlanResponse PurchaseRatePlanResponse
     */
    public function purchaseRatePlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->coverage)) {
            $query['Coverage'] = $request->coverage;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->planCode)) {
            $query['PlanCode'] = $request->planCode;
        }
        if (!Utils::isUnset($request->planName)) {
            $query['PlanName'] = $request->planName;
        }
        if (!Utils::isUnset($request->siteName)) {
            $query['SiteName'] = $request->siteName;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'PurchaseRatePlan',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PurchaseRatePlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PurchaseRatePlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Purchase New Package
     *  *
     * @description 1. The package name and code can be obtained from the DescribeRatePlanPrice interface.
     * 2. If the acceleration area is not overseas, the site must have successfully completed the filing process.
     *  *
     * @param PurchaseRatePlanRequest $request PurchaseRatePlanRequest
     *
     * @return PurchaseRatePlanResponse PurchaseRatePlanResponse
     */
    public function purchaseRatePlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purchaseRatePlanWithOptions($request, $runtime);
    }

    /**
     * @summary Cache Refresh
     *  *
     * @param PurgeCachesRequest $tmpReq  PurgeCachesRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return PurgeCachesResponse PurgeCachesResponse
     */
    public function purgeCachesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PurgeCachesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->content)) {
            $request->contentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->contentShrink)) {
            $query['Content'] = $request->contentShrink;
        }
        if (!Utils::isUnset($request->edgeComputePurge)) {
            $query['EdgeComputePurge'] = $request->edgeComputePurge;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'PurgeCaches',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PurgeCachesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PurgeCachesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Cache Refresh
     *  *
     * @param PurgeCachesRequest $request PurgeCachesRequest
     *
     * @return PurgeCachesResponse PurgeCachesResponse
     */
    public function purgeCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purgeCachesWithOptions($request, $runtime);
    }

    /**
     * @summary Configures a key-value pair for a namespace. The request body can be up to 2 MB.
     *  *
     * @param PutKvRequest   $request PutKvRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return PutKvResponse PutKvResponse
     */
    public function putKvWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->base64)) {
            $query['Base64'] = $request->base64;
        }
        if (!Utils::isUnset($request->expiration)) {
            $query['Expiration'] = $request->expiration;
        }
        if (!Utils::isUnset($request->expirationTtl)) {
            $query['ExpirationTtl'] = $request->expirationTtl;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        $body = [];
        if (!Utils::isUnset($request->value)) {
            $body['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PutKv',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PutKvResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PutKvResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Configures a key-value pair for a namespace. The request body can be up to 2 MB.
     *  *
     * @param PutKvRequest $request PutKvRequest
     *
     * @return PutKvResponse PutKvResponse
     */
    public function putKv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putKvWithOptions($request, $runtime);
    }

    /**
     * @summary Configures a large key-value pair for a namespace. The request body can be up to 25 MB.
     *  *
     * @description This operation allows you to upload a larger request body than by using [PutKv](~~PutKv~~). For small request bodies, we recommend that you use [PutKv](~~PutKv~~) to minimize the server processing time. This operation must be called by using SDKs. The following sample code uses the Golang SDK and PutKvWithHighCapacityAdvance to call the operation.
     *     func TestPutKvWithHighCapacity() {
     *     	// Initialize the configurations.
     *     	cfg := new(openapi.Config)
     *     	cfg.SetAccessKeyId("xxxxxxxxx")
     *     	cfg.SetAccessKeySecret("xxxxxxxxxx")
     *     	cli, err := NewClient(cfg)
     *     	if err != nil {
     *     		return err
     *     	}
     *     	runtime := &util.RuntimeOptions{}
     *     	// Construct a request for uploading key-value pairs.
     *     	namespace := "test-put-kv"
     *     	key := "test_PutKvWithHighCapacity_0"
     *     	value := strings.Repeat("t", 10*1024*1024)
     *     	rawReq := &PutKvRequest{
     *     		Namespace: &namespace,
     *     		Key:       &key,
     *     		Value:     &value,
     *     	}
     *     	payload, err := json.Marshal(rawReq)
     *     	if err != nil {
     *     		return err
     *     	}
     *     	// If the payload is greater than 2 MB, call the PutKvWithHighCapacity operation for upload.
     *     	reqHighCapacity := &PutKvWithHighCapacityAdvanceRequest{
     *     		Namespace: &namespace,
     *     		Key:       &key,
     *     		UrlObject: bytes.NewReader([]byte(payload)),
     *     	}
     *     	resp, err := cli.PutKvWithHighCapacityAdvance(reqHighCapacity, runtime)
     *     	if err != nil {
     *     		return err
     *     	}
     *     	return nil
     *     }
     *  *
     * @param PutKvWithHighCapacityRequest $request PutKvWithHighCapacityRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return PutKvWithHighCapacityResponse PutKvWithHighCapacityResponse
     */
    public function putKvWithHighCapacityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'PutKvWithHighCapacity',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return PutKvWithHighCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PutKvWithHighCapacityResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Configures a large key-value pair for a namespace. The request body can be up to 25 MB.
     *  *
     * @description This operation allows you to upload a larger request body than by using [PutKv](~~PutKv~~). For small request bodies, we recommend that you use [PutKv](~~PutKv~~) to minimize the server processing time. This operation must be called by using SDKs. The following sample code uses the Golang SDK and PutKvWithHighCapacityAdvance to call the operation.
     *     func TestPutKvWithHighCapacity() {
     *     	// Initialize the configurations.
     *     	cfg := new(openapi.Config)
     *     	cfg.SetAccessKeyId("xxxxxxxxx")
     *     	cfg.SetAccessKeySecret("xxxxxxxxxx")
     *     	cli, err := NewClient(cfg)
     *     	if err != nil {
     *     		return err
     *     	}
     *     	runtime := &util.RuntimeOptions{}
     *     	// Construct a request for uploading key-value pairs.
     *     	namespace := "test-put-kv"
     *     	key := "test_PutKvWithHighCapacity_0"
     *     	value := strings.Repeat("t", 10*1024*1024)
     *     	rawReq := &PutKvRequest{
     *     		Namespace: &namespace,
     *     		Key:       &key,
     *     		Value:     &value,
     *     	}
     *     	payload, err := json.Marshal(rawReq)
     *     	if err != nil {
     *     		return err
     *     	}
     *     	// If the payload is greater than 2 MB, call the PutKvWithHighCapacity operation for upload.
     *     	reqHighCapacity := &PutKvWithHighCapacityAdvanceRequest{
     *     		Namespace: &namespace,
     *     		Key:       &key,
     *     		UrlObject: bytes.NewReader([]byte(payload)),
     *     	}
     *     	resp, err := cli.PutKvWithHighCapacityAdvance(reqHighCapacity, runtime)
     *     	if err != nil {
     *     		return err
     *     	}
     *     	return nil
     *     }
     *  *
     * @param PutKvWithHighCapacityRequest $request PutKvWithHighCapacityRequest
     *
     * @return PutKvWithHighCapacityResponse PutKvWithHighCapacityResponse
     */
    public function putKvWithHighCapacity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putKvWithHighCapacityWithOptions($request, $runtime);
    }

    /**
     * @param PutKvWithHighCapacityAdvanceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return PutKvWithHighCapacityResponse
     */
    public function putKvWithHighCapacityAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'ESA',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $putKvWithHighCapacityReq = new PutKvWithHighCapacityRequest([]);
        OpenApiUtilClient::convert($request, $putKvWithHighCapacityReq);
        if (!Utils::isUnset($request->urlObject)) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->urlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $putKvWithHighCapacityReq->url = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->putKvWithHighCapacityWithOptions($putKvWithHighCapacityReq, $runtime);
    }

    /**
     * @summary Rebuilds the staging environment for containerized applications.
     *  *
     * @param RebuildEdgeContainerAppStagingEnvRequest $request RebuildEdgeContainerAppStagingEnvRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return RebuildEdgeContainerAppStagingEnvResponse RebuildEdgeContainerAppStagingEnvResponse
     */
    public function rebuildEdgeContainerAppStagingEnvWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'RebuildEdgeContainerAppStagingEnv',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RebuildEdgeContainerAppStagingEnvResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RebuildEdgeContainerAppStagingEnvResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Rebuilds the staging environment for containerized applications.
     *  *
     * @param RebuildEdgeContainerAppStagingEnvRequest $request RebuildEdgeContainerAppStagingEnvRequest
     *
     * @return RebuildEdgeContainerAppStagingEnvResponse RebuildEdgeContainerAppStagingEnvResponse
     */
    public function rebuildEdgeContainerAppStagingEnv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebuildEdgeContainerAppStagingEnvWithOptions($request, $runtime);
    }

    /**
     * @summary Resets the progress of a scheduled prefetch task and starts the prefetch from the beginning.
     *  *
     * @param ResetScheduledPreloadJobRequest $request ResetScheduledPreloadJobRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetScheduledPreloadJobResponse ResetScheduledPreloadJobResponse
     */
    public function resetScheduledPreloadJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetScheduledPreloadJob',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ResetScheduledPreloadJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResetScheduledPreloadJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Resets the progress of a scheduled prefetch task and starts the prefetch from the beginning.
     *  *
     * @param ResetScheduledPreloadJobRequest $request ResetScheduledPreloadJobRequest
     *
     * @return ResetScheduledPreloadJobResponse ResetScheduledPreloadJobResponse
     */
    public function resetScheduledPreloadJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetScheduledPreloadJobWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes an activated client certificate.
     *  *
     * @param RevokeClientCertificateRequest $request RevokeClientCertificateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeClientCertificateResponse RevokeClientCertificateResponse
     */
    public function revokeClientCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokeClientCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RevokeClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RevokeClientCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Revokes an activated client certificate.
     *  *
     * @param RevokeClientCertificateRequest $request RevokeClientCertificateRequest
     *
     * @return RevokeClientCertificateResponse RevokeClientCertificateResponse
     */
    public function revokeClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeClientCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Rolls back a version of a containerized application.
     *  *
     * @param RollbackEdgeContainerAppVersionRequest $request RollbackEdgeContainerAppVersionRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return RollbackEdgeContainerAppVersionResponse RollbackEdgeContainerAppVersionResponse
     */
    public function rollbackEdgeContainerAppVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->versionId)) {
            $query['VersionId'] = $request->versionId;
        }
        $body = [];
        if (!Utils::isUnset($request->appId)) {
            $body['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->remarks)) {
            $body['Remarks'] = $request->remarks;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RollbackEdgeContainerAppVersion',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RollbackEdgeContainerAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RollbackEdgeContainerAppVersionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Rolls back a version of a containerized application.
     *  *
     * @param RollbackEdgeContainerAppVersionRequest $request RollbackEdgeContainerAppVersionRequest
     *
     * @return RollbackEdgeContainerAppVersionResponse RollbackEdgeContainerAppVersionResponse
     */
    public function rollbackEdgeContainerAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackEdgeContainerAppVersionWithOptions($request, $runtime);
    }

    /**
     * @summary Configures whether to enable certificates and update certificate information for a website.
     *  *
     * @param SetCertificateRequest $request SetCertificateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SetCertificateResponse SetCertificateResponse
     */
    public function setCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $body = [];
        if (!Utils::isUnset($request->casId)) {
            $body['CasId'] = $request->casId;
        }
        if (!Utils::isUnset($request->certificate)) {
            $body['Certificate'] = $request->certificate;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->privateKey)) {
            $body['PrivateKey'] = $request->privateKey;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->siteId)) {
            $body['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SetCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Configures whether to enable certificates and update certificate information for a website.
     *  *
     * @param SetCertificateRequest $request SetCertificateRequest
     *
     * @return SetCertificateResponse SetCertificateResponse
     */
    public function setCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Associates domain names with a client CA certificate. If no certificate is specified, domain names are associated with an Edge Security Acceleration (ESA)-managed CA certificate.
     *  *
     * @param SetClientCertificateHostnamesRequest $tmpReq  SetClientCertificateHostnamesRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return SetClientCertificateHostnamesResponse SetClientCertificateHostnamesResponse
     */
    public function setClientCertificateHostnamesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetClientCertificateHostnamesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->hostnames)) {
            $request->hostnamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hostnames, 'Hostnames', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $body = [];
        if (!Utils::isUnset($request->hostnamesShrink)) {
            $body['Hostnames'] = $request->hostnamesShrink;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetClientCertificateHostnames',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SetClientCertificateHostnamesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetClientCertificateHostnamesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Associates domain names with a client CA certificate. If no certificate is specified, domain names are associated with an Edge Security Acceleration (ESA)-managed CA certificate.
     *  *
     * @param SetClientCertificateHostnamesRequest $request SetClientCertificateHostnamesRequest
     *
     * @return SetClientCertificateHostnamesResponse SetClientCertificateHostnamesResponse
     */
    public function setClientCertificateHostnames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setClientCertificateHostnamesWithOptions($request, $runtime);
    }

    /**
     * @summary Configures smart HTTP DDoS protection.
     *  *
     * @param SetHttpDDoSAttackIntelligentProtectionRequest $request SetHttpDDoSAttackIntelligentProtectionRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return SetHttpDDoSAttackIntelligentProtectionResponse SetHttpDDoSAttackIntelligentProtectionResponse
     */
    public function setHttpDDoSAttackIntelligentProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aiMode)) {
            $query['AiMode'] = $request->aiMode;
        }
        if (!Utils::isUnset($request->aiTemplate)) {
            $query['AiTemplate'] = $request->aiTemplate;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'SetHttpDDoSAttackIntelligentProtection',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SetHttpDDoSAttackIntelligentProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetHttpDDoSAttackIntelligentProtectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Configures smart HTTP DDoS protection.
     *  *
     * @param SetHttpDDoSAttackIntelligentProtectionRequest $request SetHttpDDoSAttackIntelligentProtectionRequest
     *
     * @return SetHttpDDoSAttackIntelligentProtectionResponse SetHttpDDoSAttackIntelligentProtectionResponse
     */
    public function setHttpDDoSAttackIntelligentProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setHttpDDoSAttackIntelligentProtectionWithOptions($request, $runtime);
    }

    /**
     * @summary Configures HTTP DDoS attack protection for a website.
     *  *
     * @param SetHttpDDoSAttackProtectionRequest $request SetHttpDDoSAttackProtectionRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SetHttpDDoSAttackProtectionResponse SetHttpDDoSAttackProtectionResponse
     */
    public function setHttpDDoSAttackProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->globalMode)) {
            $query['GlobalMode'] = $request->globalMode;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'SetHttpDDoSAttackProtection',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SetHttpDDoSAttackProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetHttpDDoSAttackProtectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Configures HTTP DDoS attack protection for a website.
     *  *
     * @param SetHttpDDoSAttackProtectionRequest $request SetHttpDDoSAttackProtectionRequest
     *
     * @return SetHttpDDoSAttackProtectionResponse SetHttpDDoSAttackProtectionResponse
     */
    public function setHttpDDoSAttackProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setHttpDDoSAttackProtectionWithOptions($request, $runtime);
    }

    /**
     * @summary Starts a scheduled prefetch plan based on the plan ID.
     *  *
     * @param StartScheduledPreloadExecutionRequest $request StartScheduledPreloadExecutionRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return StartScheduledPreloadExecutionResponse StartScheduledPreloadExecutionResponse
     */
    public function startScheduledPreloadExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'StartScheduledPreloadExecution',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StartScheduledPreloadExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartScheduledPreloadExecutionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Starts a scheduled prefetch plan based on the plan ID.
     *  *
     * @param StartScheduledPreloadExecutionRequest $request StartScheduledPreloadExecutionRequest
     *
     * @return StartScheduledPreloadExecutionResponse StartScheduledPreloadExecutionResponse
     */
    public function startScheduledPreloadExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startScheduledPreloadExecutionWithOptions($request, $runtime);
    }

    /**
     * @summary Stops a scheduled prefetch plan based on the plan ID.
     *  *
     * @param StopScheduledPreloadExecutionRequest $request StopScheduledPreloadExecutionRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return StopScheduledPreloadExecutionResponse StopScheduledPreloadExecutionResponse
     */
    public function stopScheduledPreloadExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'StopScheduledPreloadExecution',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StopScheduledPreloadExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopScheduledPreloadExecutionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Stops a scheduled prefetch plan based on the plan ID.
     *  *
     * @param StopScheduledPreloadExecutionRequest $request StopScheduledPreloadExecutionRequest
     *
     * @return StopScheduledPreloadExecutionResponse StopScheduledPreloadExecutionResponse
     */
    public function stopScheduledPreloadExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopScheduledPreloadExecutionWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a resource tag based on a specified resource ID.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a resource tag based on a specified resource ID.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 缓存保持变配
     *  *
     * @param UpdateCacheReserveSpecRequest $request UpdateCacheReserveSpecRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCacheReserveSpecResponse UpdateCacheReserveSpecResponse
     */
    public function updateCacheReserveSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->targetQuotaGb)) {
            $query['TargetQuotaGb'] = $request->targetQuotaGb;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCacheReserveSpec',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateCacheReserveSpecResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCacheReserveSpecResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 缓存保持变配
     *  *
     * @param UpdateCacheReserveSpecRequest $request UpdateCacheReserveSpecRequest
     *
     * @return UpdateCacheReserveSpecResponse UpdateCacheReserveSpecResponse
     */
    public function updateCacheReserveSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCacheReserveSpecWithOptions($request, $runtime);
    }

    /**
     * @summary Modify cache configuration
     *  *
     * @param UpdateCacheRuleRequest $request UpdateCacheRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCacheRuleResponse UpdateCacheRuleResponse
     */
    public function updateCacheRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->additionalCacheablePorts)) {
            $query['AdditionalCacheablePorts'] = $request->additionalCacheablePorts;
        }
        if (!Utils::isUnset($request->browserCacheMode)) {
            $query['BrowserCacheMode'] = $request->browserCacheMode;
        }
        if (!Utils::isUnset($request->browserCacheTtl)) {
            $query['BrowserCacheTtl'] = $request->browserCacheTtl;
        }
        if (!Utils::isUnset($request->bypassCache)) {
            $query['BypassCache'] = $request->bypassCache;
        }
        if (!Utils::isUnset($request->cacheDeceptionArmor)) {
            $query['CacheDeceptionArmor'] = $request->cacheDeceptionArmor;
        }
        if (!Utils::isUnset($request->cacheReserveEligibility)) {
            $query['CacheReserveEligibility'] = $request->cacheReserveEligibility;
        }
        if (!Utils::isUnset($request->checkPresenceCookie)) {
            $query['CheckPresenceCookie'] = $request->checkPresenceCookie;
        }
        if (!Utils::isUnset($request->checkPresenceHeader)) {
            $query['CheckPresenceHeader'] = $request->checkPresenceHeader;
        }
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->edgeCacheMode)) {
            $query['EdgeCacheMode'] = $request->edgeCacheMode;
        }
        if (!Utils::isUnset($request->edgeCacheTtl)) {
            $query['EdgeCacheTtl'] = $request->edgeCacheTtl;
        }
        if (!Utils::isUnset($request->edgeStatusCodeCacheTtl)) {
            $query['EdgeStatusCodeCacheTtl'] = $request->edgeStatusCodeCacheTtl;
        }
        if (!Utils::isUnset($request->includeCookie)) {
            $query['IncludeCookie'] = $request->includeCookie;
        }
        if (!Utils::isUnset($request->includeHeader)) {
            $query['IncludeHeader'] = $request->includeHeader;
        }
        if (!Utils::isUnset($request->queryString)) {
            $query['QueryString'] = $request->queryString;
        }
        if (!Utils::isUnset($request->queryStringMode)) {
            $query['QueryStringMode'] = $request->queryStringMode;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->serveStale)) {
            $query['ServeStale'] = $request->serveStale;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->sortQueryStringForCache)) {
            $query['SortQueryStringForCache'] = $request->sortQueryStringForCache;
        }
        if (!Utils::isUnset($request->userDeviceType)) {
            $query['UserDeviceType'] = $request->userDeviceType;
        }
        if (!Utils::isUnset($request->userGeo)) {
            $query['UserGeo'] = $request->userGeo;
        }
        if (!Utils::isUnset($request->userLanguage)) {
            $query['UserLanguage'] = $request->userLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCacheRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateCacheRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCacheRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modify cache configuration
     *  *
     * @param UpdateCacheRuleRequest $request UpdateCacheRuleRequest
     *
     * @return UpdateCacheRuleResponse UpdateCacheRuleResponse
     */
    public function updateCacheRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCacheRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the cache tag configuration of your website. You can call this operation when you need to specify tags in the Cache-Tag response header to use the purge by cache tag feature.
     *  *
     * @param UpdateCacheTagRequest $request UpdateCacheTagRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCacheTagResponse UpdateCacheTagResponse
     */
    public function updateCacheTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caseInsensitive)) {
            $query['CaseInsensitive'] = $request->caseInsensitive;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        if (!Utils::isUnset($request->tagName)) {
            $query['TagName'] = $request->tagName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCacheTag',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateCacheTagResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCacheTagResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the cache tag configuration of your website. You can call this operation when you need to specify tags in the Cache-Tag response header to use the purge by cache tag feature.
     *  *
     * @param UpdateCacheTagRequest $request UpdateCacheTagRequest
     *
     * @return UpdateCacheTagResponse UpdateCacheTagResponse
     */
    public function updateCacheTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCacheTagWithOptions($request, $runtime);
    }

    /**
     * @summary Modify site CNAME flattening configuration
     *  *
     * @param UpdateCnameFlatteningRequest $request UpdateCnameFlatteningRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCnameFlatteningResponse UpdateCnameFlatteningResponse
     */
    public function updateCnameFlatteningWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flattenMode)) {
            $query['FlattenMode'] = $request->flattenMode;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCnameFlattening',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateCnameFlatteningResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCnameFlatteningResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modify site CNAME flattening configuration
     *  *
     * @param UpdateCnameFlatteningRequest $request UpdateCnameFlatteningRequest
     *
     * @return UpdateCnameFlatteningResponse UpdateCnameFlatteningResponse
     */
    public function updateCnameFlattening($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCnameFlatteningWithOptions($request, $runtime);
    }

    /**
     * @summary Modify compression rule
     *  *
     * @param UpdateCompressionRuleRequest $request UpdateCompressionRuleRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCompressionRuleResponse UpdateCompressionRuleResponse
     */
    public function updateCompressionRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->brotli)) {
            $query['Brotli'] = $request->brotli;
        }
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->gzip)) {
            $query['Gzip'] = $request->gzip;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->zstd)) {
            $query['Zstd'] = $request->zstd;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCompressionRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateCompressionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCompressionRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modify compression rule
     *  *
     * @param UpdateCompressionRuleRequest $request UpdateCompressionRuleRequest
     *
     * @return UpdateCompressionRuleResponse UpdateCompressionRuleResponse
     */
    public function updateCompressionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCompressionRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a custom scenario-specific policy.
     *  *
     * @param UpdateCustomScenePolicyRequest $request UpdateCustomScenePolicyRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCustomScenePolicyResponse UpdateCustomScenePolicyResponse
     */
    public function updateCustomScenePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->objects)) {
            $query['Objects'] = $request->objects;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCustomScenePolicy',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateCustomScenePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCustomScenePolicyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a custom scenario-specific policy.
     *  *
     * @param UpdateCustomScenePolicyRequest $request UpdateCustomScenePolicyRequest
     *
     * @return UpdateCustomScenePolicyResponse UpdateCustomScenePolicyResponse
     */
    public function updateCustomScenePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomScenePolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the development mode configuration of your website. If you enable Development Mode, all requests bypass caching components on POPs and are redirected to the origin server. This allows clients to retrieve the most recent resources on the origin server.
     *  *
     * @param UpdateDevelopmentModeRequest $request UpdateDevelopmentModeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDevelopmentModeResponse UpdateDevelopmentModeResponse
     */
    public function updateDevelopmentModeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDevelopmentMode',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateDevelopmentModeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDevelopmentModeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the development mode configuration of your website. If you enable Development Mode, all requests bypass caching components on POPs and are redirected to the origin server. This allows clients to retrieve the most recent resources on the origin server.
     *  *
     * @param UpdateDevelopmentModeRequest $request UpdateDevelopmentModeRequest
     *
     * @return UpdateDevelopmentModeResponse UpdateDevelopmentModeResponse
     */
    public function updateDevelopmentMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDevelopmentModeWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the log collection configuration of a containerized application.
     *  *
     * @param UpdateEdgeContainerAppLogRiverRequest $request UpdateEdgeContainerAppLogRiverRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEdgeContainerAppLogRiverResponse UpdateEdgeContainerAppLogRiverResponse
     */
    public function updateEdgeContainerAppLogRiverWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->path)) {
            $query['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->stdout)) {
            $query['Stdout'] = $request->stdout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateEdgeContainerAppLogRiver',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateEdgeContainerAppLogRiverResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateEdgeContainerAppLogRiverResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the log collection configuration of a containerized application.
     *  *
     * @param UpdateEdgeContainerAppLogRiverRequest $request UpdateEdgeContainerAppLogRiverRequest
     *
     * @return UpdateEdgeContainerAppLogRiverResponse UpdateEdgeContainerAppLogRiverResponse
     */
    public function updateEdgeContainerAppLogRiver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEdgeContainerAppLogRiverWithOptions($request, $runtime);
    }

    /**
     * @summary 更新边缘容器资源预留配置
     *  *
     * @param UpdateEdgeContainerAppResourceReserveRequest $tmpReq  UpdateEdgeContainerAppResourceReserveRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEdgeContainerAppResourceReserveResponse UpdateEdgeContainerAppResourceReserveResponse
     */
    public function updateEdgeContainerAppResourceReserveWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateEdgeContainerAppResourceReserveShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->reserveSet)) {
            $request->reserveSetShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->reserveSet, 'ReserveSet', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->durationTime)) {
            $query['DurationTime'] = $request->durationTime;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->forever)) {
            $query['Forever'] = $request->forever;
        }
        if (!Utils::isUnset($request->reserveSetShrink)) {
            $query['ReserveSet'] = $request->reserveSetShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateEdgeContainerAppResourceReserve',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateEdgeContainerAppResourceReserveResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateEdgeContainerAppResourceReserveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新边缘容器资源预留配置
     *  *
     * @param UpdateEdgeContainerAppResourceReserveRequest $request UpdateEdgeContainerAppResourceReserveRequest
     *
     * @return UpdateEdgeContainerAppResourceReserveResponse UpdateEdgeContainerAppResourceReserveResponse
     */
    public function updateEdgeContainerAppResourceReserve($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEdgeContainerAppResourceReserveWithOptions($request, $runtime);
    }

    /**
     * @summary Modify HTTP Request Header Rules
     *  *
     * @param UpdateHttpRequestHeaderModificationRuleRequest $tmpReq  UpdateHttpRequestHeaderModificationRuleRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateHttpRequestHeaderModificationRuleResponse UpdateHttpRequestHeaderModificationRuleResponse
     */
    public function updateHttpRequestHeaderModificationRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateHttpRequestHeaderModificationRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->requestHeaderModification)) {
            $request->requestHeaderModificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestHeaderModification, 'RequestHeaderModification', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->requestHeaderModificationShrink)) {
            $query['RequestHeaderModification'] = $request->requestHeaderModificationShrink;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateHttpRequestHeaderModificationRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateHttpRequestHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateHttpRequestHeaderModificationRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modify HTTP Request Header Rules
     *  *
     * @param UpdateHttpRequestHeaderModificationRuleRequest $request UpdateHttpRequestHeaderModificationRuleRequest
     *
     * @return UpdateHttpRequestHeaderModificationRuleResponse UpdateHttpRequestHeaderModificationRuleResponse
     */
    public function updateHttpRequestHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHttpRequestHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modify HTTP response header rules
     *  *
     * @param UpdateHttpResponseHeaderModificationRuleRequest $tmpReq  UpdateHttpResponseHeaderModificationRuleRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateHttpResponseHeaderModificationRuleResponse UpdateHttpResponseHeaderModificationRuleResponse
     */
    public function updateHttpResponseHeaderModificationRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateHttpResponseHeaderModificationRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->responseHeaderModification)) {
            $request->responseHeaderModificationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->responseHeaderModification, 'ResponseHeaderModification', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->responseHeaderModificationShrink)) {
            $query['ResponseHeaderModification'] = $request->responseHeaderModificationShrink;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateHttpResponseHeaderModificationRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateHttpResponseHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateHttpResponseHeaderModificationRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modify HTTP response header rules
     *  *
     * @param UpdateHttpResponseHeaderModificationRuleRequest $request UpdateHttpResponseHeaderModificationRuleRequest
     *
     * @return UpdateHttpResponseHeaderModificationRuleResponse UpdateHttpResponseHeaderModificationRuleResponse
     */
    public function updateHttpResponseHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHttpResponseHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modify HTTPS Application Configuration
     *  *
     * @param UpdateHttpsApplicationConfigurationRequest $request UpdateHttpsApplicationConfigurationRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateHttpsApplicationConfigurationResponse UpdateHttpsApplicationConfigurationResponse
     */
    public function updateHttpsApplicationConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->altSvc)) {
            $query['AltSvc'] = $request->altSvc;
        }
        if (!Utils::isUnset($request->altSvcClear)) {
            $query['AltSvcClear'] = $request->altSvcClear;
        }
        if (!Utils::isUnset($request->altSvcMa)) {
            $query['AltSvcMa'] = $request->altSvcMa;
        }
        if (!Utils::isUnset($request->altSvcPersist)) {
            $query['AltSvcPersist'] = $request->altSvcPersist;
        }
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->hsts)) {
            $query['Hsts'] = $request->hsts;
        }
        if (!Utils::isUnset($request->hstsIncludeSubdomains)) {
            $query['HstsIncludeSubdomains'] = $request->hstsIncludeSubdomains;
        }
        if (!Utils::isUnset($request->hstsMaxAge)) {
            $query['HstsMaxAge'] = $request->hstsMaxAge;
        }
        if (!Utils::isUnset($request->hstsPreload)) {
            $query['HstsPreload'] = $request->hstsPreload;
        }
        if (!Utils::isUnset($request->httpsForce)) {
            $query['HttpsForce'] = $request->httpsForce;
        }
        if (!Utils::isUnset($request->httpsForceCode)) {
            $query['HttpsForceCode'] = $request->httpsForceCode;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateHttpsApplicationConfiguration',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateHttpsApplicationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateHttpsApplicationConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modify HTTPS Application Configuration
     *  *
     * @param UpdateHttpsApplicationConfigurationRequest $request UpdateHttpsApplicationConfigurationRequest
     *
     * @return UpdateHttpsApplicationConfigurationResponse UpdateHttpsApplicationConfigurationResponse
     */
    public function updateHttpsApplicationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHttpsApplicationConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Modify HTTPS Basic Configuration
     *  *
     * @param UpdateHttpsBasicConfigurationRequest $request UpdateHttpsBasicConfigurationRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateHttpsBasicConfigurationResponse UpdateHttpsBasicConfigurationResponse
     */
    public function updateHttpsBasicConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ciphersuite)) {
            $query['Ciphersuite'] = $request->ciphersuite;
        }
        if (!Utils::isUnset($request->ciphersuiteGroup)) {
            $query['CiphersuiteGroup'] = $request->ciphersuiteGroup;
        }
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->http2)) {
            $query['Http2'] = $request->http2;
        }
        if (!Utils::isUnset($request->http3)) {
            $query['Http3'] = $request->http3;
        }
        if (!Utils::isUnset($request->https)) {
            $query['Https'] = $request->https;
        }
        if (!Utils::isUnset($request->ocspStapling)) {
            $query['OcspStapling'] = $request->ocspStapling;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->tls10)) {
            $query['Tls10'] = $request->tls10;
        }
        if (!Utils::isUnset($request->tls11)) {
            $query['Tls11'] = $request->tls11;
        }
        if (!Utils::isUnset($request->tls12)) {
            $query['Tls12'] = $request->tls12;
        }
        if (!Utils::isUnset($request->tls13)) {
            $query['Tls13'] = $request->tls13;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateHttpsBasicConfiguration',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateHttpsBasicConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateHttpsBasicConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modify HTTPS Basic Configuration
     *  *
     * @param UpdateHttpsBasicConfigurationRequest $request UpdateHttpsBasicConfigurationRequest
     *
     * @return UpdateHttpsBasicConfigurationResponse UpdateHttpsBasicConfigurationResponse
     */
    public function updateHttpsBasicConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHttpsBasicConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the IPv6 configuration of a website.
     *  *
     * @param UpdateIPv6Request $request UpdateIPv6Request
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateIPv6Response UpdateIPv6Response
     */
    public function updateIPv6WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateIPv6',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateIPv6Response::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateIPv6Response::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the IPv6 configuration of a website.
     *  *
     * @param UpdateIPv6Request $request UpdateIPv6Request
     *
     * @return UpdateIPv6Response UpdateIPv6Response
     */
    public function updateIPv6($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIPv6WithOptions($request, $runtime);
    }

    /**
     * @summary Modify Site Image Transformation Configuration
     *  *
     * @param UpdateImageTransformRequest $request UpdateImageTransformRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateImageTransformResponse UpdateImageTransformResponse
     */
    public function updateImageTransformWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateImageTransform',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateImageTransformResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateImageTransformResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modify Site Image Transformation Configuration
     *  *
     * @param UpdateImageTransformRequest $request UpdateImageTransformRequest
     *
     * @return UpdateImageTransformResponse UpdateImageTransformResponse
     */
    public function updateImageTransform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageTransformWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a custom list.
     *  *
     * @param UpdateListRequest $tmpReq  UpdateListRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateListResponse UpdateListResponse
     */
    public function updateListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->items)) {
            $request->itemsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->items, 'Items', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->itemsShrink)) {
            $body['Items'] = $request->itemsShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateList',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates a custom list.
     *  *
     * @param UpdateListRequest $request UpdateListRequest
     *
     * @return UpdateListResponse UpdateListResponse
     */
    public function updateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateListWithOptions($request, $runtime);
    }

    /**
     * @summary Modify Load Balancer
     *  *
     * @description Through this interface, you can modify multiple configurations of the load balancer, including but not limited to the name of the load balancer, whether to enable acceleration, session persistence strategy, and various advanced settings related to traffic routing.>Notice: Changes to certain parameters may affect the stability of existing services, please operate with caution.
     *  *
     * @param UpdateLoadBalancerRequest $tmpReq  UpdateLoadBalancerRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLoadBalancerResponse UpdateLoadBalancerResponse
     */
    public function updateLoadBalancerWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateLoadBalancerShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->adaptiveRouting)) {
            $request->adaptiveRoutingShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->adaptiveRouting, 'AdaptiveRouting', 'json');
        }
        if (!Utils::isUnset($tmpReq->defaultPools)) {
            $request->defaultPoolsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->defaultPools, 'DefaultPools', 'json');
        }
        if (!Utils::isUnset($tmpReq->monitor)) {
            $request->monitorShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->monitor, 'Monitor', 'json');
        }
        if (!Utils::isUnset($tmpReq->randomSteering)) {
            $request->randomSteeringShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->randomSteering, 'RandomSteering', 'json');
        }
        if (!Utils::isUnset($tmpReq->rules)) {
            $request->rulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->adaptiveRoutingShrink)) {
            $query['AdaptiveRouting'] = $request->adaptiveRoutingShrink;
        }
        if (!Utils::isUnset($request->defaultPoolsShrink)) {
            $query['DefaultPools'] = $request->defaultPoolsShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->fallbackPool)) {
            $query['FallbackPool'] = $request->fallbackPool;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->monitorShrink)) {
            $query['Monitor'] = $request->monitorShrink;
        }
        if (!Utils::isUnset($request->randomSteeringShrink)) {
            $query['RandomSteering'] = $request->randomSteeringShrink;
        }
        if (!Utils::isUnset($request->regionPools)) {
            $query['RegionPools'] = $request->regionPools;
        }
        if (!Utils::isUnset($request->rulesShrink)) {
            $query['Rules'] = $request->rulesShrink;
        }
        if (!Utils::isUnset($request->sessionAffinity)) {
            $query['SessionAffinity'] = $request->sessionAffinity;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->steeringPolicy)) {
            $query['SteeringPolicy'] = $request->steeringPolicy;
        }
        if (!Utils::isUnset($request->subRegionPools)) {
            $query['SubRegionPools'] = $request->subRegionPools;
        }
        if (!Utils::isUnset($request->ttl)) {
            $query['Ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLoadBalancer',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLoadBalancerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modify Load Balancer
     *  *
     * @description Through this interface, you can modify multiple configurations of the load balancer, including but not limited to the name of the load balancer, whether to enable acceleration, session persistence strategy, and various advanced settings related to traffic routing.>Notice: Changes to certain parameters may affect the stability of existing services, please operate with caution.
     *  *
     * @param UpdateLoadBalancerRequest $request UpdateLoadBalancerRequest
     *
     * @return UpdateLoadBalancerResponse UpdateLoadBalancerResponse
     */
    public function updateLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configuration of managed transforms for your website.
     *  *
     * @param UpdateManagedTransformRequest $request UpdateManagedTransformRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateManagedTransformResponse UpdateManagedTransformResponse
     */
    public function updateManagedTransformWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addClientGeolocationHeader)) {
            $query['AddClientGeolocationHeader'] = $request->addClientGeolocationHeader;
        }
        if (!Utils::isUnset($request->addRealClientIpHeader)) {
            $query['AddRealClientIpHeader'] = $request->addRealClientIpHeader;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateManagedTransform',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateManagedTransformResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateManagedTransformResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configuration of managed transforms for your website.
     *  *
     * @param UpdateManagedTransformRequest $request UpdateManagedTransformRequest
     *
     * @return UpdateManagedTransformResponse UpdateManagedTransformResponse
     */
    public function updateManagedTransform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateManagedTransformWithOptions($request, $runtime);
    }

    /**
     * @summary Modify network optimization configuration
     *  *
     * @param UpdateNetworkOptimizationRequest $request UpdateNetworkOptimizationRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateNetworkOptimizationResponse UpdateNetworkOptimizationResponse
     */
    public function updateNetworkOptimizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->grpc)) {
            $query['Grpc'] = $request->grpc;
        }
        if (!Utils::isUnset($request->http2Origin)) {
            $query['Http2Origin'] = $request->http2Origin;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->smartRouting)) {
            $query['SmartRouting'] = $request->smartRouting;
        }
        if (!Utils::isUnset($request->uploadMaxFilesize)) {
            $query['UploadMaxFilesize'] = $request->uploadMaxFilesize;
        }
        if (!Utils::isUnset($request->websocket)) {
            $query['Websocket'] = $request->websocket;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateNetworkOptimization',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateNetworkOptimizationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateNetworkOptimizationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modify network optimization configuration
     *  *
     * @param UpdateNetworkOptimizationRequest $request UpdateNetworkOptimizationRequest
     *
     * @return UpdateNetworkOptimizationResponse UpdateNetworkOptimizationResponse
     */
    public function updateNetworkOptimization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNetworkOptimizationWithOptions($request, $runtime);
    }

    /**
     * @summary Modify the Monitor
     *  *
     * @param UpdateOriginPoolRequest $tmpReq  UpdateOriginPoolRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateOriginPoolResponse UpdateOriginPoolResponse
     */
    public function updateOriginPoolWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateOriginPoolShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->origins)) {
            $request->originsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->origins, 'Origins', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->originsShrink)) {
            $query['Origins'] = $request->originsShrink;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateOriginPool',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateOriginPoolResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateOriginPoolResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modify the Monitor
     *  *
     * @param UpdateOriginPoolRequest $request UpdateOriginPoolRequest
     *
     * @return UpdateOriginPoolResponse UpdateOriginPoolResponse
     */
    public function updateOriginPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOriginPoolWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables IP convergence.
     *  *
     * @param UpdateOriginProtectionRequest $request UpdateOriginProtectionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateOriginProtectionResponse UpdateOriginProtectionResponse
     */
    public function updateOriginProtectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->originConverge)) {
            $query['OriginConverge'] = $request->originConverge;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateOriginProtection',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateOriginProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateOriginProtectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables IP convergence.
     *  *
     * @param UpdateOriginProtectionRequest $request UpdateOriginProtectionRequest
     *
     * @return UpdateOriginProtectionResponse UpdateOriginProtectionResponse
     */
    public function updateOriginProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOriginProtectionWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the IP whitelist for origin protection used by a website to the latest version.
     *  *
     * @param UpdateOriginProtectionIpWhiteListRequest $request UpdateOriginProtectionIpWhiteListRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateOriginProtectionIpWhiteListResponse UpdateOriginProtectionIpWhiteListResponse
     */
    public function updateOriginProtectionIpWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateOriginProtectionIpWhiteList',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateOriginProtectionIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateOriginProtectionIpWhiteListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the IP whitelist for origin protection used by a website to the latest version.
     *  *
     * @param UpdateOriginProtectionIpWhiteListRequest $request UpdateOriginProtectionIpWhiteListRequest
     *
     * @return UpdateOriginProtectionIpWhiteListResponse UpdateOriginProtectionIpWhiteListResponse
     */
    public function updateOriginProtectionIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOriginProtectionIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * @summary Modify Origin Rule Configuration for Site
     *  *
     * @param UpdateOriginRuleRequest $request UpdateOriginRuleRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateOriginRuleResponse UpdateOriginRuleResponse
     */
    public function updateOriginRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->dnsRecord)) {
            $query['DnsRecord'] = $request->dnsRecord;
        }
        if (!Utils::isUnset($request->originHost)) {
            $query['OriginHost'] = $request->originHost;
        }
        if (!Utils::isUnset($request->originHttpPort)) {
            $query['OriginHttpPort'] = $request->originHttpPort;
        }
        if (!Utils::isUnset($request->originHttpsPort)) {
            $query['OriginHttpsPort'] = $request->originHttpsPort;
        }
        if (!Utils::isUnset($request->originMtls)) {
            $query['OriginMtls'] = $request->originMtls;
        }
        if (!Utils::isUnset($request->originScheme)) {
            $query['OriginScheme'] = $request->originScheme;
        }
        if (!Utils::isUnset($request->originSni)) {
            $query['OriginSni'] = $request->originSni;
        }
        if (!Utils::isUnset($request->originVerify)) {
            $query['OriginVerify'] = $request->originVerify;
        }
        if (!Utils::isUnset($request->range)) {
            $query['Range'] = $request->range;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateOriginRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateOriginRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateOriginRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modify Origin Rule Configuration for Site
     *  *
     * @param UpdateOriginRuleRequest $request UpdateOriginRuleRequest
     *
     * @return UpdateOriginRuleResponse UpdateOriginRuleResponse
     */
    public function updateOriginRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOriginRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a custom error page, such as the name, description, content type, and content of the page.
     *  *
     * @param UpdatePageRequest $request UpdatePageRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePageResponse UpdatePageResponse
     */
    public function updatePageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentType)) {
            $body['ContentType'] = $request->contentType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePage',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdatePageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a custom error page, such as the name, description, content type, and content of the page.
     *  *
     * @param UpdatePageRequest $request UpdatePageRequest
     *
     * @return UpdatePageResponse UpdatePageResponse
     */
    public function updatePage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePageWithOptions($request, $runtime);
    }

    /**
     * @summary 套餐变配
     *  *
     * @param UpdateRatePlanSpecRequest $request UpdateRatePlanSpecRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRatePlanSpecResponse UpdateRatePlanSpecResponse
     */
    public function updateRatePlanSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->targetPlanCode)) {
            $query['TargetPlanCode'] = $request->targetPlanCode;
        }
        if (!Utils::isUnset($request->targetPlanName)) {
            $query['TargetPlanName'] = $request->targetPlanName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRatePlanSpec',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateRatePlanSpecResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRatePlanSpecResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 套餐变配
     *  *
     * @param UpdateRatePlanSpecRequest $request UpdateRatePlanSpecRequest
     *
     * @return UpdateRatePlanSpecResponse UpdateRatePlanSpecResponse
     */
    public function updateRatePlanSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRatePlanSpecWithOptions($request, $runtime);
    }

    /**
     * @summary Updates multiple types of DNS records and origin authentication configurations.
     *  *
     * @description This operation allows you to update multiple types of DNS records, including but not limited to A/AAAA, CNAME, NS, MX, TXT, CAA, SRV, and URI. You can modify the record content by providing the necessary fields such as Value, Priority, and Flag. For origins added in CNAME records such as OSS and S3, the API enables you to configure authentication details to ensure secure access.
     * ### [](#)Usage notes
     * *   The record value (Value) must match the record type. For example, the CNAME record should correspond to the target domain name.
     * *   You must specify a priority (Priority) for some record types, such as MX and SRV.
     * *   You must specify specific fields such as Flag and Tag for CAA records.
     * *   When you update security records such as CERT and SSHFP, you must accurately set fields such as Type and Algorithm.
     * *   If your origin type is OSS or S3, configure the authentication details in AuthConf based on the permissions.
     *  *
     * @param UpdateRecordRequest $tmpReq  UpdateRecordRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRecordResponse UpdateRecordResponse
     */
    public function updateRecordWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateRecordShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->authConf)) {
            $request->authConfShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->authConf, 'AuthConf', 'json');
        }
        if (!Utils::isUnset($tmpReq->data)) {
            $request->dataShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->data, 'Data', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->authConfShrink)) {
            $query['AuthConf'] = $request->authConfShrink;
        }
        if (!Utils::isUnset($request->bizName)) {
            $query['BizName'] = $request->bizName;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->dataShrink)) {
            $query['Data'] = $request->dataShrink;
        }
        if (!Utils::isUnset($request->hostPolicy)) {
            $query['HostPolicy'] = $request->hostPolicy;
        }
        if (!Utils::isUnset($request->proxied)) {
            $query['Proxied'] = $request->proxied;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->ttl)) {
            $query['Ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRecord',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates multiple types of DNS records and origin authentication configurations.
     *  *
     * @description This operation allows you to update multiple types of DNS records, including but not limited to A/AAAA, CNAME, NS, MX, TXT, CAA, SRV, and URI. You can modify the record content by providing the necessary fields such as Value, Priority, and Flag. For origins added in CNAME records such as OSS and S3, the API enables you to configure authentication details to ensure secure access.
     * ### [](#)Usage notes
     * *   The record value (Value) must match the record type. For example, the CNAME record should correspond to the target domain name.
     * *   You must specify a priority (Priority) for some record types, such as MX and SRV.
     * *   You must specify specific fields such as Flag and Tag for CAA records.
     * *   When you update security records such as CERT and SSHFP, you must accurately set fields such as Type and Algorithm.
     * *   If your origin type is OSS or S3, configure the authentication details in AuthConf based on the permissions.
     *  *
     * @param UpdateRecordRequest $request UpdateRecordRequest
     *
     * @return UpdateRecordResponse UpdateRecordResponse
     */
    public function updateRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecordWithOptions($request, $runtime);
    }

    /**
     * @summary Update Redirect Rule
     *  *
     * @param UpdateRedirectRuleRequest $request UpdateRedirectRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRedirectRuleResponse UpdateRedirectRuleResponse
     */
    public function updateRedirectRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->reserveQueryString)) {
            $query['ReserveQueryString'] = $request->reserveQueryString;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->statusCode)) {
            $query['StatusCode'] = $request->statusCode;
        }
        if (!Utils::isUnset($request->targetUrl)) {
            $query['TargetUrl'] = $request->targetUrl;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRedirectRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateRedirectRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRedirectRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Update Redirect Rule
     *  *
     * @param UpdateRedirectRuleRequest $request UpdateRedirectRuleRequest
     *
     * @return UpdateRedirectRuleResponse UpdateRedirectRuleResponse
     */
    public function updateRedirectRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRedirectRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modify Rewrite URL Rule
     *  *
     * @param UpdateRewriteUrlRuleRequest $request UpdateRewriteUrlRuleRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRewriteUrlRuleResponse UpdateRewriteUrlRuleResponse
     */
    public function updateRewriteUrlRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->queryString)) {
            $query['QueryString'] = $request->queryString;
        }
        if (!Utils::isUnset($request->rewriteQueryStringType)) {
            $query['RewriteQueryStringType'] = $request->rewriteQueryStringType;
        }
        if (!Utils::isUnset($request->rewriteUriType)) {
            $query['RewriteUriType'] = $request->rewriteUriType;
        }
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->uri)) {
            $query['Uri'] = $request->uri;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRewriteUrlRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateRewriteUrlRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRewriteUrlRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modify Rewrite URL Rule
     *  *
     * @param UpdateRewriteUrlRuleRequest $request UpdateRewriteUrlRuleRequest
     *
     * @return UpdateRewriteUrlRuleResponse UpdateRewriteUrlRuleResponse
     */
    public function updateRewriteUrlRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRewriteUrlRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a scheduled prefetch plan based on the plan ID.
     *  *
     * @param UpdateScheduledPreloadExecutionRequest $request UpdateScheduledPreloadExecutionRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateScheduledPreloadExecutionResponse UpdateScheduledPreloadExecutionResponse
     */
    public function updateScheduledPreloadExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $body['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->sliceLen)) {
            $body['SliceLen'] = $request->sliceLen;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateScheduledPreloadExecution',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateScheduledPreloadExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateScheduledPreloadExecutionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates a scheduled prefetch plan based on the plan ID.
     *  *
     * @param UpdateScheduledPreloadExecutionRequest $request UpdateScheduledPreloadExecutionRequest
     *
     * @return UpdateScheduledPreloadExecutionResponse UpdateScheduledPreloadExecutionResponse
     */
    public function updateScheduledPreloadExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateScheduledPreloadExecutionWithOptions($request, $runtime);
    }

    /**
     * @summary 修改站点放行搜索引擎爬虫配置
     *  *
     * @param UpdateSeoBypassRequest $request UpdateSeoBypassRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSeoBypassResponse UpdateSeoBypassResponse
     */
    public function updateSeoBypassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSeoBypass',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateSeoBypassResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSeoBypassResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 修改站点放行搜索引擎爬虫配置
     *  *
     * @param UpdateSeoBypassRequest $request UpdateSeoBypassRequest
     *
     * @return UpdateSeoBypassResponse UpdateSeoBypassResponse
     */
    public function updateSeoBypass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSeoBypassWithOptions($request, $runtime);
    }

    /**
     * @summary Converts the DNS setup option of a website.
     *  *
     * @description When you change the DNS setup of a website from NS to CNAME, note the following prerequisites:
     * *   The website only has proxied A/AAAA and CNAME records.
     * *   The DNS passthrough mode and custom nameserver features are not enabled for the website.
     *  *
     * @param UpdateSiteAccessTypeRequest $request UpdateSiteAccessTypeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSiteAccessTypeResponse UpdateSiteAccessTypeResponse
     */
    public function updateSiteAccessTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessType)) {
            $query['AccessType'] = $request->accessType;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSiteAccessType',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateSiteAccessTypeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSiteAccessTypeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Converts the DNS setup option of a website.
     *  *
     * @description When you change the DNS setup of a website from NS to CNAME, note the following prerequisites:
     * *   The website only has proxied A/AAAA and CNAME records.
     * *   The DNS passthrough mode and custom nameserver features are not enabled for the website.
     *  *
     * @param UpdateSiteAccessTypeRequest $request UpdateSiteAccessTypeRequest
     *
     * @return UpdateSiteAccessTypeResponse UpdateSiteAccessTypeResponse
     */
    public function updateSiteAccessType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSiteAccessTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the service location for a single website. This updates the acceleration configuration of the website to adapt to changes in traffic distribution, and improve user experience in specific regions.
     *  *
     * @param UpdateSiteCoverageRequest $request UpdateSiteCoverageRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSiteCoverageResponse UpdateSiteCoverageResponse
     */
    public function updateSiteCoverageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->coverage)) {
            $query['Coverage'] = $request->coverage;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSiteCoverage',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateSiteCoverageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSiteCoverageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the service location for a single website. This updates the acceleration configuration of the website to adapt to changes in traffic distribution, and improve user experience in specific regions.
     *  *
     * @param UpdateSiteCoverageRequest $request UpdateSiteCoverageRequest
     *
     * @return UpdateSiteCoverageResponse UpdateSiteCoverageResponse
     */
    public function updateSiteCoverage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSiteCoverageWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configuration of custom request header, response header, and cookie fields that are used to capture logs of a website.
     *  *
     * @param UpdateSiteCustomLogRequest $tmpReq  UpdateSiteCustomLogRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSiteCustomLogResponse UpdateSiteCustomLogResponse
     */
    public function updateSiteCustomLogWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateSiteCustomLogShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->cookies)) {
            $request->cookiesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->cookies, 'Cookies', 'json');
        }
        if (!Utils::isUnset($tmpReq->requestHeaders)) {
            $request->requestHeadersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->requestHeaders, 'RequestHeaders', 'json');
        }
        if (!Utils::isUnset($tmpReq->responseHeaders)) {
            $request->responseHeadersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->responseHeaders, 'ResponseHeaders', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->cookiesShrink)) {
            $body['Cookies'] = $request->cookiesShrink;
        }
        if (!Utils::isUnset($request->requestHeadersShrink)) {
            $body['RequestHeaders'] = $request->requestHeadersShrink;
        }
        if (!Utils::isUnset($request->responseHeadersShrink)) {
            $body['ResponseHeaders'] = $request->responseHeadersShrink;
        }
        if (!Utils::isUnset($request->siteId)) {
            $body['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSiteCustomLog',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateSiteCustomLogResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSiteCustomLogResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configuration of custom request header, response header, and cookie fields that are used to capture logs of a website.
     *  *
     * @param UpdateSiteCustomLogRequest $request UpdateSiteCustomLogRequest
     *
     * @return UpdateSiteCustomLogResponse UpdateSiteCustomLogResponse
     */
    public function updateSiteCustomLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSiteCustomLogWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a real-time log delivery task.
     *  *
     * @param UpdateSiteDeliveryTaskRequest $request UpdateSiteDeliveryTaskRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSiteDeliveryTaskResponse UpdateSiteDeliveryTaskResponse
     */
    public function updateSiteDeliveryTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->businessType)) {
            $body['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->discardRate)) {
            $body['DiscardRate'] = $request->discardRate;
        }
        if (!Utils::isUnset($request->fieldName)) {
            $body['FieldName'] = $request->fieldName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $body['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSiteDeliveryTask',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateSiteDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSiteDeliveryTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies a real-time log delivery task.
     *  *
     * @param UpdateSiteDeliveryTaskRequest $request UpdateSiteDeliveryTaskRequest
     *
     * @return UpdateSiteDeliveryTaskResponse UpdateSiteDeliveryTaskResponse
     */
    public function updateSiteDeliveryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSiteDeliveryTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the status of a real-time log delivery task.
     *  *
     * @param UpdateSiteDeliveryTaskStatusRequest $request UpdateSiteDeliveryTaskStatusRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSiteDeliveryTaskStatusResponse UpdateSiteDeliveryTaskStatusResponse
     */
    public function updateSiteDeliveryTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSiteDeliveryTaskStatus',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateSiteDeliveryTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSiteDeliveryTaskStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Changes the status of a real-time log delivery task.
     *  *
     * @param UpdateSiteDeliveryTaskStatusRequest $request UpdateSiteDeliveryTaskStatusRequest
     *
     * @return UpdateSiteDeliveryTaskStatusResponse UpdateSiteDeliveryTaskStatusResponse
     */
    public function updateSiteDeliveryTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSiteDeliveryTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the site hold configuration of a website. After you enable site hold, other accounts cannot add your website domain or its subdomains to ESA.
     *  *
     * @param UpdateSiteNameExclusiveRequest $request UpdateSiteNameExclusiveRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSiteNameExclusiveResponse UpdateSiteNameExclusiveResponse
     */
    public function updateSiteNameExclusiveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSiteNameExclusive',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateSiteNameExclusiveResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSiteNameExclusiveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the site hold configuration of a website. After you enable site hold, other accounts cannot add your website domain or its subdomains to ESA.
     *  *
     * @param UpdateSiteNameExclusiveRequest $request UpdateSiteNameExclusiveRequest
     *
     * @return UpdateSiteNameExclusiveResponse UpdateSiteNameExclusiveResponse
     */
    public function updateSiteNameExclusive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSiteNameExclusiveWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the ESA proxy configuration of a website.
     *  *
     * @param UpdateSitePauseRequest $request UpdateSitePauseRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSitePauseResponse UpdateSitePauseResponse
     */
    public function updateSitePauseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->paused)) {
            $query['Paused'] = $request->paused;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSitePause',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateSitePauseResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSitePauseResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the ESA proxy configuration of a website.
     *  *
     * @param UpdateSitePauseRequest $request UpdateSitePauseRequest
     *
     * @return UpdateSitePauseResponse UpdateSitePauseResponse
     */
    public function updateSitePause($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSitePauseWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the custom nameserver names for a single website.
     *  *
     * @param UpdateSiteVanityNSRequest $request UpdateSiteVanityNSRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSiteVanityNSResponse UpdateSiteVanityNSResponse
     */
    public function updateSiteVanityNSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->vanityNSList)) {
            $query['VanityNSList'] = $request->vanityNSList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSiteVanityNS',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateSiteVanityNSResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSiteVanityNSResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the custom nameserver names for a single website.
     *  *
     * @param UpdateSiteVanityNSRequest $request UpdateSiteVanityNSRequest
     *
     * @return UpdateSiteVanityNSResponse UpdateSiteVanityNSResponse
     */
    public function updateSiteVanityNS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSiteVanityNSWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the tiered cache configuration of your website.
     *  *
     * @param UpdateTieredCacheRequest $request UpdateTieredCacheRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTieredCacheResponse UpdateTieredCacheResponse
     */
    public function updateTieredCacheWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cacheArchitectureMode)) {
            $query['CacheArchitectureMode'] = $request->cacheArchitectureMode;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTieredCache',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateTieredCacheResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateTieredCacheResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the tiered cache configuration of your website.
     *  *
     * @param UpdateTieredCacheRequest $request UpdateTieredCacheRequest
     *
     * @return UpdateTieredCacheResponse UpdateTieredCacheResponse
     */
    public function updateTieredCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTieredCacheWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a delivery task, including the task name, log field, log category, and discard rate.
     *  *
     * @param UpdateUserDeliveryTaskRequest $request UpdateUserDeliveryTaskRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserDeliveryTaskResponse UpdateUserDeliveryTaskResponse
     */
    public function updateUserDeliveryTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->businessType)) {
            $body['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->details)) {
            $body['Details'] = $request->details;
        }
        if (!Utils::isUnset($request->discardRate)) {
            $body['DiscardRate'] = $request->discardRate;
        }
        if (!Utils::isUnset($request->fieldName)) {
            $body['FieldName'] = $request->fieldName;
        }
        if (!Utils::isUnset($request->taskName)) {
            $body['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUserDeliveryTask',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateUserDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateUserDeliveryTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a delivery task, including the task name, log field, log category, and discard rate.
     *  *
     * @param UpdateUserDeliveryTaskRequest $request UpdateUserDeliveryTaskRequest
     *
     * @return UpdateUserDeliveryTaskResponse UpdateUserDeliveryTaskResponse
     */
    public function updateUserDeliveryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserDeliveryTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the status of a delivery task in your Alibaba Cloud account.
     *  *
     * @description ## [](#)
     * You can call this operation to enable or disable a delivery task by using TaskName and Method. The response includes the most recent status and operation result details of the task.
     *  *
     * @param UpdateUserDeliveryTaskStatusRequest $request UpdateUserDeliveryTaskStatusRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateUserDeliveryTaskStatusResponse UpdateUserDeliveryTaskStatusResponse
     */
    public function updateUserDeliveryTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateUserDeliveryTaskStatus',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateUserDeliveryTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateUserDeliveryTaskStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Changes the status of a delivery task in your Alibaba Cloud account.
     *  *
     * @description ## [](#)
     * You can call this operation to enable or disable a delivery task by using TaskName and Method. The response includes the most recent status and operation result details of the task.
     *  *
     * @param UpdateUserDeliveryTaskStatusRequest $request UpdateUserDeliveryTaskStatusRequest
     *
     * @return UpdateUserDeliveryTaskStatusResponse UpdateUserDeliveryTaskStatusResponse
     */
    public function updateUserDeliveryTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserDeliveryTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a waiting room.
     *  *
     * @param UpdateWaitingRoomRequest $tmpReq  UpdateWaitingRoomRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWaitingRoomResponse UpdateWaitingRoomResponse
     */
    public function updateWaitingRoomWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateWaitingRoomShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->hostNameAndPath)) {
            $request->hostNameAndPathShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hostNameAndPath, 'HostNameAndPath', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->cookieName)) {
            $query['CookieName'] = $request->cookieName;
        }
        if (!Utils::isUnset($request->customPageHtml)) {
            $query['CustomPageHtml'] = $request->customPageHtml;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->disableSessionRenewalEnable)) {
            $query['DisableSessionRenewalEnable'] = $request->disableSessionRenewalEnable;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->hostNameAndPathShrink)) {
            $query['HostNameAndPath'] = $request->hostNameAndPathShrink;
        }
        if (!Utils::isUnset($request->jsonResponseEnable)) {
            $query['JsonResponseEnable'] = $request->jsonResponseEnable;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->newUsersPerMinute)) {
            $query['NewUsersPerMinute'] = $request->newUsersPerMinute;
        }
        if (!Utils::isUnset($request->queueAllEnable)) {
            $query['QueueAllEnable'] = $request->queueAllEnable;
        }
        if (!Utils::isUnset($request->queuingMethod)) {
            $query['QueuingMethod'] = $request->queuingMethod;
        }
        if (!Utils::isUnset($request->queuingStatusCode)) {
            $query['QueuingStatusCode'] = $request->queuingStatusCode;
        }
        if (!Utils::isUnset($request->sessionDuration)) {
            $query['SessionDuration'] = $request->sessionDuration;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->totalActiveUsers)) {
            $query['TotalActiveUsers'] = $request->totalActiveUsers;
        }
        if (!Utils::isUnset($request->waitingRoomId)) {
            $query['WaitingRoomId'] = $request->waitingRoomId;
        }
        if (!Utils::isUnset($request->waitingRoomType)) {
            $query['WaitingRoomType'] = $request->waitingRoomType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateWaitingRoom',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateWaitingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateWaitingRoomResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a waiting room.
     *  *
     * @param UpdateWaitingRoomRequest $request UpdateWaitingRoomRequest
     *
     * @return UpdateWaitingRoomResponse UpdateWaitingRoomResponse
     */
    public function updateWaitingRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWaitingRoomWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a waiting room event.
     *  *
     * @param UpdateWaitingRoomEventRequest $request UpdateWaitingRoomEventRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWaitingRoomEventResponse UpdateWaitingRoomEventResponse
     */
    public function updateWaitingRoomEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->customPageHtml)) {
            $query['CustomPageHtml'] = $request->customPageHtml;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->disableSessionRenewalEnable)) {
            $query['DisableSessionRenewalEnable'] = $request->disableSessionRenewalEnable;
        }
        if (!Utils::isUnset($request->enable)) {
            $query['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->jsonResponseEnable)) {
            $query['JsonResponseEnable'] = $request->jsonResponseEnable;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->newUsersPerMinute)) {
            $query['NewUsersPerMinute'] = $request->newUsersPerMinute;
        }
        if (!Utils::isUnset($request->preQueueEnable)) {
            $query['PreQueueEnable'] = $request->preQueueEnable;
        }
        if (!Utils::isUnset($request->preQueueStartTime)) {
            $query['PreQueueStartTime'] = $request->preQueueStartTime;
        }
        if (!Utils::isUnset($request->queuingMethod)) {
            $query['QueuingMethod'] = $request->queuingMethod;
        }
        if (!Utils::isUnset($request->queuingStatusCode)) {
            $query['QueuingStatusCode'] = $request->queuingStatusCode;
        }
        if (!Utils::isUnset($request->randomPreQueueEnable)) {
            $query['RandomPreQueueEnable'] = $request->randomPreQueueEnable;
        }
        if (!Utils::isUnset($request->sessionDuration)) {
            $query['SessionDuration'] = $request->sessionDuration;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->totalActiveUsers)) {
            $query['TotalActiveUsers'] = $request->totalActiveUsers;
        }
        if (!Utils::isUnset($request->waitingRoomEventId)) {
            $query['WaitingRoomEventId'] = $request->waitingRoomEventId;
        }
        if (!Utils::isUnset($request->waitingRoomType)) {
            $query['WaitingRoomType'] = $request->waitingRoomType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateWaitingRoomEvent',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateWaitingRoomEventResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateWaitingRoomEventResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a waiting room event.
     *  *
     * @param UpdateWaitingRoomEventRequest $request UpdateWaitingRoomEventRequest
     *
     * @return UpdateWaitingRoomEventResponse UpdateWaitingRoomEventResponse
     */
    public function updateWaitingRoomEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWaitingRoomEventWithOptions($request, $runtime);
    }

    /**
     * @summary Modify Waiting Room Rule
     *  *
     * @description This interface allows you to modify the rule settings of a specific waiting room in a site, including the rule name, enable status, and rule content, etc.
     *  *
     * @param UpdateWaitingRoomRuleRequest $request UpdateWaitingRoomRuleRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWaitingRoomRuleResponse UpdateWaitingRoomRuleResponse
     */
    public function updateWaitingRoomRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->rule)) {
            $query['Rule'] = $request->rule;
        }
        if (!Utils::isUnset($request->ruleEnable)) {
            $query['RuleEnable'] = $request->ruleEnable;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $query['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->waitingRoomRuleId)) {
            $query['WaitingRoomRuleId'] = $request->waitingRoomRuleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateWaitingRoomRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateWaitingRoomRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateWaitingRoomRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modify Waiting Room Rule
     *  *
     * @description This interface allows you to modify the rule settings of a specific waiting room in a site, including the rule name, enable status, and rule content, etc.
     *  *
     * @param UpdateWaitingRoomRuleRequest $request UpdateWaitingRoomRuleRequest
     *
     * @return UpdateWaitingRoomRuleResponse UpdateWaitingRoomRuleResponse
     */
    public function updateWaitingRoomRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWaitingRoomRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Uploads a client certificate authority (CA) certificate.
     *  *
     * @param UploadClientCaCertificateRequest $request UploadClientCaCertificateRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadClientCaCertificateResponse UploadClientCaCertificateResponse
     */
    public function uploadClientCaCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $body = [];
        if (!Utils::isUnset($request->certificate)) {
            $body['Certificate'] = $request->certificate;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadClientCaCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UploadClientCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadClientCaCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Uploads a client certificate authority (CA) certificate.
     *  *
     * @param UploadClientCaCertificateRequest $request UploadClientCaCertificateRequest
     *
     * @return UploadClientCaCertificateResponse UploadClientCaCertificateResponse
     */
    public function uploadClientCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadClientCaCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Uploads the file that contains resources to be purged or prefetched.
     *  *
     * @description >
     * *   The file can be up to 10 MB in size.
     *  *
     * @param UploadFileRequest $request UploadFileRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadFileResponse UploadFileResponse
     */
    public function uploadFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->uploadTaskName)) {
            $query['UploadTaskName'] = $request->uploadTaskName;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadFile',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UploadFileResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Uploads the file that contains resources to be purged or prefetched.
     *  *
     * @description >
     * *   The file can be up to 10 MB in size.
     *  *
     * @param UploadFileRequest $request UploadFileRequest
     *
     * @return UploadFileResponse UploadFileResponse
     */
    public function uploadFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadFileWithOptions($request, $runtime);
    }

    /**
     * @param UploadFileAdvanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UploadFileResponse
     */
    public function uploadFileAdvance($request, $runtime)
    {
        // Step 0: init client
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $securityToken = $this->_credential->getSecurityToken();
        $credentialType = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product' => 'ESA',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig = new OSS\Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type' => 'access_key',
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new FileField([]);
        $ossHeader = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $uploadFileReq = new UploadFileRequest([]);
        OpenApiUtilClient::convert($request, $uploadFileReq);
        if (!Utils::isUnset($request->urlObject)) {
            $authResponse = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient = new OSS($ossConfig);
            $fileObj = new FileField([
                'filename' => $authResponse->body->objectKey,
                'content' => $request->urlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId' => $authResponse->body->accessKeyId,
                'policy' => $authResponse->body->encodedPolicy,
                'signature' => $authResponse->body->signature,
                'key' => $authResponse->body->objectKey,
                'file' => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header' => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $uploadFileReq->url = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->uploadFileWithOptions($uploadFileReq, $runtime);
    }

    /**
     * @summary Verifies the ownership of a website domain. Websites that pass the verification are automatically activated.
     *  *
     * @description 1.  For a website connected by using NS setup, this operation verifies whether the nameservers of the website are the nameservers assigned by Alibaba Cloud.
     * 2.  For a website connected by using CNAME setup, this operation verifies whether the website has a TXT record whose hostname is  _esaauth.[websiteDomainName] and record value is the value of VerifyCode to the DNS records of your domain. You can see the VerifyCode field in the site information.
     *  *
     * @param VerifySiteRequest $request VerifySiteRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifySiteResponse VerifySiteResponse
     */
    public function verifySiteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifySite',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return VerifySiteResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return VerifySiteResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Verifies the ownership of a website domain. Websites that pass the verification are automatically activated.
     *  *
     * @description 1.  For a website connected by using NS setup, this operation verifies whether the nameservers of the website are the nameservers assigned by Alibaba Cloud.
     * 2.  For a website connected by using CNAME setup, this operation verifies whether the website has a TXT record whose hostname is  _esaauth.[websiteDomainName] and record value is the value of VerifyCode to the DNS records of your domain. You can see the VerifyCode field in the site information.
     *  *
     * @param VerifySiteRequest $request VerifySiteRequest
     *
     * @return VerifySiteResponse VerifySiteResponse
     */
    public function verifySite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifySiteWithOptions($request, $runtime);
    }
}
