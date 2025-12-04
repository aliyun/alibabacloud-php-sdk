<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Exception\DaraException;
use AlibabaCloud\Dara\Exception\DaraUnableRetryException;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\RetryPolicy\RetryPolicyContext;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
use AlibabaCloud\SDK\ESA\V20240910\Models\ActivateClientCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ActivateClientCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ActivateVersionManagementRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ActivateVersionManagementResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ApplyCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ApplyCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateWafRulesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateWafRulesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateWafRulesShrinkRequest;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchUpdateWafRulesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchUpdateWafRulesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchUpdateWafRulesShrinkRequest;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpIncomingRequestHeaderModificationRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpIncomingRequestHeaderModificationRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpIncomingRequestHeaderModificationRuleShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpIncomingResponseHeaderModificationRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpIncomingResponseHeaderModificationRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateHttpIncomingResponseHeaderModificationRuleShrinkRequest;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineCodeDeploymentRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineCodeDeploymentResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineCodeDeploymentShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineRelatedRecordRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineRelatedRecordResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineRouteRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineRouteResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineWithAssetsCodeVersionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineWithAssetsCodeVersionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineWithAssetsCodeVersionShrinkRequest;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateTransportLayerApplicationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateTransportLayerApplicationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateTransportLayerApplicationShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUrlObservationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUrlObservationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateVideoProcessingRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateVideoProcessingResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWafRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWafRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWafRulesetRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWafRulesetResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWafRuleShrinkRequest;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteHttpIncomingRequestHeaderModificationRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteHttpIncomingRequestHeaderModificationRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteHttpIncomingResponseHeaderModificationRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteHttpIncomingResponseHeaderModificationRuleResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteOriginCaCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteOriginCaCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteOriginClientCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteOriginClientCertificateResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRoutineRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRoutineResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRoutineRouteRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRoutineRouteResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteScheduledPreloadExecutionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteScheduledPreloadExecutionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteScheduledPreloadJobRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteScheduledPreloadJobResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteSiteDeliveryTaskRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteSiteDeliveryTaskResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteSiteOriginClientCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteSiteOriginClientCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteSiteRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteSiteResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteTransportLayerApplicationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteTransportLayerApplicationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteUrlObservationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteUrlObservationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteUserDeliveryTaskRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteUserDeliveryTaskResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteVideoProcessingRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteVideoProcessingResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteWafRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteWafRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteWafRulesetRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteWafRulesetResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeSiteLogsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeSiteLogsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeSiteTimeSeriesDataRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeSiteTimeSeriesDataResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeSiteTimeSeriesDataShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeSiteTopDataRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeSiteTopDataResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeSiteTopDataShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeUrlObservationDataRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeUrlObservationDataResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DisableCustomScenePolicyRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DisableCustomScenePolicyResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\EditSiteWafSettingsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\EditSiteWafSettingsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\EditSiteWafSettingsShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\EnableCustomScenePolicyRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\EnableCustomScenePolicyResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ExportRecordsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ExportRecordsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetApiSchemaUsageRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetApiSchemaUsageResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\GetCrossBorderOptimizationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetCrossBorderOptimizationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetDevelopmentModeRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetDevelopmentModeResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppLogRiverRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppLogRiverResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppResourceReserveRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppResourceReserveResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppResourceStatusRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppResourceStatusResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\GetErServiceRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetErServiceResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetHttpIncomingRequestHeaderModificationRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetHttpIncomingRequestHeaderModificationRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetHttpIncomingResponseHeaderModificationRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetHttpIncomingResponseHeaderModificationRuleResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginCaCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginCaCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginClientCertificateHostnamesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginClientCertificateHostnamesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginClientCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginClientCertificateResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineCodeVersionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineCodeVersionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineRouteRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineRouteResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteOriginClientCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteOriginClientCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSitePauseRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSitePauseResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteWafSettingsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteWafSettingsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetTieredCacheRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetTieredCacheResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetTransportLayerApplicationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetTransportLayerApplicationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetUploadTaskRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetUploadTaskResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetUserDeliveryTaskRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetUserDeliveryTaskResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetUserLogDeliveryQuotaRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetUserLogDeliveryQuotaResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetVideoProcessingRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetVideoProcessingResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafBotAppKeyResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafRulesetRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafRulesetResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCacheReserveInstancesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCacheReserveInstancesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCacheRulesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCacheRulesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCertificatesByRecordRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCertificatesByRecordResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\ListESAIPInfoRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListESAIPInfoResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListHttpIncomingRequestHeaderModificationRulesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListHttpIncomingRequestHeaderModificationRulesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListHttpIncomingResponseHeaderModificationRulesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListHttpIncomingResponseHeaderModificationRulesResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginCaCertificatesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginCaCertificatesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginClientCertificatesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginClientCertificatesResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRoutineCodeVersionsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRoutineCodeVersionsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRoutineRelatedRecordsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRoutineRelatedRecordsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRoutineRoutesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRoutineRoutesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListScheduledPreloadExecutionsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListScheduledPreloadExecutionsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListScheduledPreloadJobsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListScheduledPreloadJobsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteDeliveryTasksRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteDeliveryTasksResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteRoutesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteRoutesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSitesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSitesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSitesShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListTransportLayerApplicationsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListTransportLayerApplicationsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUploadTasksRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUploadTasksResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUrlObservationsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUrlObservationsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUserDeliveryTasksRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUserDeliveryTasksResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUserRatePlanInstancesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUserRatePlanInstancesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUserRoutinesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListUserRoutinesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListVideoProcessingsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListVideoProcessingsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafManagedRulesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafManagedRulesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafManagedRulesShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafPhasesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafPhasesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafRulesetsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafRulesetsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafRulesetsShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafRulesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafRulesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListWafRulesShrinkRequest;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\OpenErServiceRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\OpenErServiceResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\PreloadCachesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PreloadCachesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\PreloadCachesShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PublishEdgeContainerAppVersionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PublishEdgeContainerAppVersionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\PublishEdgeContainerAppVersionShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PublishRoutineCodeVersionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PublishRoutineCodeVersionResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\SetOriginClientCertificateHostnamesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\SetOriginClientCertificateHostnamesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\SetOriginClientCertificateHostnamesShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\StartScheduledPreloadExecutionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\StartScheduledPreloadExecutionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\StopScheduledPreloadExecutionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\StopScheduledPreloadExecutionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\TagResourcesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\TagResourcesResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateCrossBorderOptimizationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateCrossBorderOptimizationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateCustomScenePolicyRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateCustomScenePolicyResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateDevelopmentModeRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateDevelopmentModeResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateEdgeContainerAppLogRiverRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateEdgeContainerAppLogRiverResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateEdgeContainerAppResourceReserveRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateEdgeContainerAppResourceReserveResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateEdgeContainerAppResourceReserveShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateHttpIncomingRequestHeaderModificationRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateHttpIncomingRequestHeaderModificationRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateHttpIncomingRequestHeaderModificationRuleShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateHttpIncomingResponseHeaderModificationRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateHttpIncomingResponseHeaderModificationRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateHttpIncomingResponseHeaderModificationRuleShrinkRequest;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRoutineConfigDescriptionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRoutineConfigDescriptionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRoutineRouteRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRoutineRouteResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateTransportLayerApplicationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateTransportLayerApplicationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateTransportLayerApplicationShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateUrlObservationRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateUrlObservationResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateUserDeliveryTaskRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateUserDeliveryTaskResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateUserDeliveryTaskStatusRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateUserDeliveryTaskStatusResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateVideoProcessingRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateVideoProcessingResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateWafRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateWafRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateWafRulesetRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateWafRulesetResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateWafRuleShrinkRequest;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\UploadOriginCaCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UploadOriginCaCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UploadOriginClientCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UploadOriginClientCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UploadSiteOriginClientCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UploadSiteOriginClientCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\VerifySiteRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\VerifySiteResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
     * @param string         $bucketName
     * @param mixed[]        $form
     * @param RuntimeOptions $runtime
     *
     * @return mixed[]
     */
    public function _postOSSObject($bucketName, $form, $runtime)
    {
        $_runtime = [
            'key' => '' . ($runtime->key ?: $this->_key),
            'cert' => '' . ($runtime->cert ?: $this->_cert),
            'ca' => '' . ($runtime->ca ?: $this->_ca),
            'readTimeout' => (($runtime->readTimeout ?: $this->_readTimeout) + 0),
            'connectTimeout' => (($runtime->connectTimeout ?: $this->_connectTimeout) + 0),
            'httpProxy' => '' . ($runtime->httpProxy ?: $this->_httpProxy),
            'httpsProxy' => '' . ($runtime->httpsProxy ?: $this->_httpsProxy),
            'noProxy' => '' . ($runtime->noProxy ?: $this->_noProxy),
            'socks5Proxy' => '' . ($runtime->socks5Proxy ?: $this->_socks5Proxy),
            'socks5NetWork' => '' . ($runtime->socks5NetWork ?: $this->_socks5NetWork),
            'maxIdleConns' => (($runtime->maxIdleConns ?: $this->_maxIdleConns) + 0),
            'retryOptions' => $this->_retryOptions,
            'ignoreSSL' => (bool) (($runtime->ignoreSSL ?: false)),
            'tlsMinVersion' => $this->_tlsMinVersion,
        ];

        $_retriesAttempted = 0;
        $_lastRequest = null;
        $_lastResponse = null;
        $_context = new RetryPolicyContext([
            'retriesAttempted' => $_retriesAttempted,
        ]);
        while (Dara::shouldRetry($_runtime['retryOptions'], $_context)) {
            if ($_retriesAttempted > 0) {
                $_backoffTime = Dara::getBackoffDelay($_runtime['retryOptions'], $_context);
                if ($_backoffTime > 0) {
                    Dara::sleep($_backoffTime);
                }
            }

            ++$_retriesAttempted;

            try {
                $_request = new Request();
                $boundary = FormUtil::getBoundary();
                $_request->protocol = 'HTTPS';
                $_request->method = 'POST';
                $_request->pathname = '/';
                $_request->headers = [
                    'host' => '' . @$form['host'],
                    'date' => Utils::getDateUTCString(),
                    'user-agent' => Utils::getUserAgent(''),
                ];
                @$_request->headers['content-type'] = 'multipart/form-data; boundary=' . $boundary . '';
                $_request->body = FormUtil::toFileForm($form, $boundary);
                $_lastRequest = $_request;
                $_response = Dara::send($_request, $_runtime);
                $_lastResponse = $_response;

                $respMap = null;
                $bodyStr = StreamUtil::readAsString($_response->body);
                if (($_response->statusCode >= 400) && ($_response->statusCode < 600)) {
                    $respMap = XML::parseXml($bodyStr, null);
                    $err = @$respMap['Error'];

                    throw new ClientException([
                        'code' => '' . @$err['Code'],
                        'message' => '' . @$err['Message'],
                        'data' => [
                            'httpCode' => $_response->statusCode,
                            'requestId' => '' . @$err['RequestId'],
                            'hostId' => '' . @$err['HostId'],
                        ],
                    ]);
                }

                $respMap = XML::parseXml($bodyStr, null);

                return Dara::merge([
                ], $respMap);
            } catch (DaraException $e) {
                $_context = new RetryPolicyContext([
                    'retriesAttempted' => $_retriesAttempted,
                    'lastRequest' => $_lastRequest,
                    'lastResponse' => $_lastResponse,
                    'exception' => $e,
                ]);

                continue;
            }
        }

        throw new DaraUnableRetryException($_context);
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
     * Activates the client based on the certificate ID.
     *
     * @param Request - ActivateClientCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActivateClientCertificateResponse
     *
     * @param ActivateClientCertificateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ActivateClientCertificateResponse
     */
    public function activateClientCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ActivateClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates the client based on the certificate ID.
     *
     * @param Request - ActivateClientCertificateRequest
     *
     * @returns ActivateClientCertificateResponse
     *
     * @param ActivateClientCertificateRequest $request
     *
     * @return ActivateClientCertificateResponse
     */
    public function activateClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateClientCertificateWithOptions($request, $runtime);
    }

    /**
     * Enable Version Management.
     *
     * @param Request - ActivateVersionManagementRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActivateVersionManagementResponse
     *
     * @param ActivateVersionManagementRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ActivateVersionManagementResponse
     */
    public function activateVersionManagementWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ActivateVersionManagementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enable Version Management.
     *
     * @param Request - ActivateVersionManagementRequest
     *
     * @returns ActivateVersionManagementResponse
     *
     * @param ActivateVersionManagementRequest $request
     *
     * @return ActivateVersionManagementResponse
     */
    public function activateVersionManagement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateVersionManagementWithOptions($request, $runtime);
    }

    /**
     * Applies for a free SSL certificate.
     *
     * @param Request - ApplyCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyCertificateResponse
     *
     * @param ApplyCertificateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ApplyCertificateResponse
     */
    public function applyCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ApplyCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Applies for a free SSL certificate.
     *
     * @param Request - ApplyCertificateRequest
     *
     * @returns ApplyCertificateResponse
     *
     * @param ApplyCertificateRequest $request
     *
     * @return ApplyCertificateResponse
     */
    public function applyCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyCertificateWithOptions($request, $runtime);
    }

    /**
     * Adds DNS records of different record types at a time..
     *
     * @remarks
     * This operation allows you to create or update multiple DNS records at a time. It is suitable for managing a large number of DNS configurations. Supported record types include but are not limited to A/AAAA, CNAME, NS, MX, TXT, CAA, SRV, and URI. The operation allows you to configure the priority, flag, tag, and weight for DNS records. In addition, for specific types of records, such as CERT, SSHFP, SMIMEA, and TLSA, advanced settings such as certificate information and encryption algorithms are also supported.
     * Successful and failed records along with error messages are listed in the response.
     *
     * @param tmpReq - BatchCreateRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchCreateRecordsResponse
     *
     * @param BatchCreateRecordsRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return BatchCreateRecordsResponse
     */
    public function batchCreateRecordsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchCreateRecordsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->recordList) {
            $request->recordListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->recordList, 'RecordList', 'json');
        }

        $query = [];
        if (null !== $request->recordListShrink) {
            @$query['RecordList'] = $request->recordListShrink;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return BatchCreateRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds DNS records of different record types at a time..
     *
     * @remarks
     * This operation allows you to create or update multiple DNS records at a time. It is suitable for managing a large number of DNS configurations. Supported record types include but are not limited to A/AAAA, CNAME, NS, MX, TXT, CAA, SRV, and URI. The operation allows you to configure the priority, flag, tag, and weight for DNS records. In addition, for specific types of records, such as CERT, SSHFP, SMIMEA, and TLSA, advanced settings such as certificate information and encryption algorithms are also supported.
     * Successful and failed records along with error messages are listed in the response.
     *
     * @param Request - BatchCreateRecordsRequest
     *
     * @returns BatchCreateRecordsResponse
     *
     * @param BatchCreateRecordsRequest $request
     *
     * @return BatchCreateRecordsResponse
     */
    public function batchCreateRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateRecordsWithOptions($request, $runtime);
    }

    /**
     * Batch Create WAF Rules.
     *
     * @param tmpReq - BatchCreateWafRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchCreateWafRulesResponse
     *
     * @param BatchCreateWafRulesRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return BatchCreateWafRulesResponse
     */
    public function batchCreateWafRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchCreateWafRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configs) {
            $request->configsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configs, 'Configs', 'json');
        }

        if (null !== $tmpReq->shared) {
            $request->sharedShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->shared, 'Shared', 'json');
        }

        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $body = [];
        if (null !== $request->configsShrink) {
            @$body['Configs'] = $request->configsShrink;
        }

        if (null !== $request->phase) {
            @$body['Phase'] = $request->phase;
        }

        if (null !== $request->rulesetId) {
            @$body['RulesetId'] = $request->rulesetId;
        }

        if (null !== $request->sharedShrink) {
            @$body['Shared'] = $request->sharedShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchCreateWafRules',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchCreateWafRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch Create WAF Rules.
     *
     * @param Request - BatchCreateWafRulesRequest
     *
     * @returns BatchCreateWafRulesResponse
     *
     * @param BatchCreateWafRulesRequest $request
     *
     * @return BatchCreateWafRulesResponse
     */
    public function batchCreateWafRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateWafRulesWithOptions($request, $runtime);
    }

    /**
     * Deletes key-value pairs from a namespace at a time based on keys.
     *
     * @param tmpReq - BatchDeleteKvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteKvResponse
     *
     * @param BatchDeleteKvRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return BatchDeleteKvResponse
     */
    public function batchDeleteKvWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchDeleteKvShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->keys) {
            $request->keysShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->keys, 'Keys', 'json');
        }

        $query = [];
        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $body = [];
        if (null !== $request->keysShrink) {
            @$body['Keys'] = $request->keysShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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

        return BatchDeleteKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes key-value pairs from a namespace at a time based on keys.
     *
     * @param Request - BatchDeleteKvRequest
     *
     * @returns BatchDeleteKvResponse
     *
     * @param BatchDeleteKvRequest $request
     *
     * @return BatchDeleteKvResponse
     */
    public function batchDeleteKv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteKvWithOptions($request, $runtime);
    }

    /**
     * Deletes multiple key-value pairs from a namespace at a time based on specified keys. The request body can be up to 100 MB.
     *
     * @remarks
     * This operation allows you to upload a larger request body than by using [BatchDeleteKv](https://help.aliyun.com/document_detail/2850204.html). For small request bodies, we recommend that you use [BatchDeleteKv](https://help.aliyun.com/document_detail/2850204.html) to minimize the server processing time. This operation must be called by using SDKs. The following sample code uses the Golang SDK and BatchDeleteKvWithHighCapacityAdvance to call the operation.
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
     *
     * @param Request - BatchDeleteKvWithHighCapacityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteKvWithHighCapacityResponse
     *
     * @param BatchDeleteKvWithHighCapacityRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return BatchDeleteKvWithHighCapacityResponse
     */
    public function batchDeleteKvWithHighCapacityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return BatchDeleteKvWithHighCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes multiple key-value pairs from a namespace at a time based on specified keys. The request body can be up to 100 MB.
     *
     * @remarks
     * This operation allows you to upload a larger request body than by using [BatchDeleteKv](https://help.aliyun.com/document_detail/2850204.html). For small request bodies, we recommend that you use [BatchDeleteKv](https://help.aliyun.com/document_detail/2850204.html) to minimize the server processing time. This operation must be called by using SDKs. The following sample code uses the Golang SDK and BatchDeleteKvWithHighCapacityAdvance to call the operation.
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
     *
     * @param Request - BatchDeleteKvWithHighCapacityRequest
     *
     * @returns BatchDeleteKvWithHighCapacityResponse
     *
     * @param BatchDeleteKvWithHighCapacityRequest $request
     *
     * @return BatchDeleteKvWithHighCapacityResponse
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
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'ESA',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $batchDeleteKvWithHighCapacityReq = new BatchDeleteKvWithHighCapacityRequest([]);
        Utils::convert($request, $batchDeleteKvWithHighCapacityReq);
        if (null !== $request->urlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->urlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $batchDeleteKvWithHighCapacityReq->url = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->batchDeleteKvWithHighCapacityWithOptions($batchDeleteKvWithHighCapacityReq, $runtime);
    }

    /**
     * Batch Get Expression Matches.
     *
     * @param tmpReq - BatchGetExpressionFieldsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGetExpressionFieldsResponse
     *
     * @param BatchGetExpressionFieldsRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return BatchGetExpressionFieldsResponse
     */
    public function batchGetExpressionFieldsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchGetExpressionFieldsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->expressions) {
            $request->expressionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->expressions, 'Expressions', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->planNameEn) {
            @$query['PlanNameEn'] = $request->planNameEn;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $body = [];
        if (null !== $request->expressionsShrink) {
            @$body['Expressions'] = $request->expressionsShrink;
        }

        if (null !== $request->kind) {
            @$body['Kind'] = $request->kind;
        }

        if (null !== $request->phase) {
            @$body['Phase'] = $request->phase;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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

        return BatchGetExpressionFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch Get Expression Matches.
     *
     * @param Request - BatchGetExpressionFieldsRequest
     *
     * @returns BatchGetExpressionFieldsResponse
     *
     * @param BatchGetExpressionFieldsRequest $request
     *
     * @return BatchGetExpressionFieldsResponse
     */
    public function batchGetExpressionFields($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetExpressionFieldsWithOptions($request, $runtime);
    }

    /**
     * Configures key-value pairs for a namespace at a time based on specified keys.
     *
     * @param tmpReq - BatchPutKvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchPutKvResponse
     *
     * @param BatchPutKvRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return BatchPutKvResponse
     */
    public function batchPutKvWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchPutKvShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->kvList) {
            $request->kvListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->kvList, 'KvList', 'json');
        }

        $query = [];
        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $body = [];
        if (null !== $request->kvListShrink) {
            @$body['KvList'] = $request->kvListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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

        return BatchPutKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures key-value pairs for a namespace at a time based on specified keys.
     *
     * @param Request - BatchPutKvRequest
     *
     * @returns BatchPutKvResponse
     *
     * @param BatchPutKvRequest $request
     *
     * @return BatchPutKvResponse
     */
    public function batchPutKv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchPutKvWithOptions($request, $runtime);
    }

    /**
     * Configures key-value pairs for a namespace at a time based on specified keys. The request body can be up to 100 MB.
     *
     * @remarks
     * This operation allows you to upload a larger request body than by using [BatchPutKv](https://help.aliyun.com/document_detail/2850203.html). For small request bodies, we recommend that you use [BatchPutKv](https://help.aliyun.com/document_detail/2850203.html) to minimize the server processing time. This operation must be called by using SDKs. The following sample code uses the Golang SDK and BatchPutKvWithHighCapacityAdvance to call the operation.
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
     *
     * @param Request - BatchPutKvWithHighCapacityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchPutKvWithHighCapacityResponse
     *
     * @param BatchPutKvWithHighCapacityRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return BatchPutKvWithHighCapacityResponse
     */
    public function batchPutKvWithHighCapacityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return BatchPutKvWithHighCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures key-value pairs for a namespace at a time based on specified keys. The request body can be up to 100 MB.
     *
     * @remarks
     * This operation allows you to upload a larger request body than by using [BatchPutKv](https://help.aliyun.com/document_detail/2850203.html). For small request bodies, we recommend that you use [BatchPutKv](https://help.aliyun.com/document_detail/2850203.html) to minimize the server processing time. This operation must be called by using SDKs. The following sample code uses the Golang SDK and BatchPutKvWithHighCapacityAdvance to call the operation.
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
     *
     * @param Request - BatchPutKvWithHighCapacityRequest
     *
     * @returns BatchPutKvWithHighCapacityResponse
     *
     * @param BatchPutKvWithHighCapacityRequest $request
     *
     * @return BatchPutKvWithHighCapacityResponse
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
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'ESA',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $batchPutKvWithHighCapacityReq = new BatchPutKvWithHighCapacityRequest([]);
        Utils::convert($request, $batchPutKvWithHighCapacityReq);
        if (null !== $request->urlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->urlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $batchPutKvWithHighCapacityReq->url = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->batchPutKvWithHighCapacityWithOptions($batchPutKvWithHighCapacityReq, $runtime);
    }

    /**
     * Modifies multiple rules in a specific Web Application Firewall (WAF) ruleset at a time.
     *
     * @param tmpReq - BatchUpdateWafRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchUpdateWafRulesResponse
     *
     * @param BatchUpdateWafRulesRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return BatchUpdateWafRulesResponse
     */
    public function batchUpdateWafRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchUpdateWafRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configs) {
            $request->configsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configs, 'Configs', 'json');
        }

        if (null !== $tmpReq->shared) {
            $request->sharedShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->shared, 'Shared', 'json');
        }

        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $body = [];
        if (null !== $request->configsShrink) {
            @$body['Configs'] = $request->configsShrink;
        }

        if (null !== $request->phase) {
            @$body['Phase'] = $request->phase;
        }

        if (null !== $request->rulesetId) {
            @$body['RulesetId'] = $request->rulesetId;
        }

        if (null !== $request->sharedShrink) {
            @$body['Shared'] = $request->sharedShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchUpdateWafRules',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchUpdateWafRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies multiple rules in a specific Web Application Firewall (WAF) ruleset at a time.
     *
     * @param Request - BatchUpdateWafRulesRequest
     *
     * @returns BatchUpdateWafRulesResponse
     *
     * @param BatchUpdateWafRulesRequest $request
     *
     * @return BatchUpdateWafRulesResponse
     */
    public function batchUpdateWafRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUpdateWafRulesWithOptions($request, $runtime);
    }

    /**
     * Blocks URLs.
     *
     * @param tmpReq - BlockObjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BlockObjectResponse
     *
     * @param BlockObjectRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return BlockObjectResponse
     */
    public function blockObjectWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BlockObjectShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->content) {
            $request->contentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }

        $query = [];
        if (null !== $request->contentShrink) {
            @$query['Content'] = $request->contentShrink;
        }

        if (null !== $request->extension) {
            @$query['Extension'] = $request->extension;
        }

        if (null !== $request->maxage) {
            @$query['Maxage'] = $request->maxage;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return BlockObjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Blocks URLs.
     *
     * @param Request - BlockObjectRequest
     *
     * @returns BlockObjectResponse
     *
     * @param BlockObjectRequest $request
     *
     * @return BlockObjectResponse
     */
    public function blockObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->blockObjectWithOptions($request, $runtime);
    }

    /**
     * 检查实时日志slr角色是否已创建.
     *
     * @param Request - CheckAssumeSlrRoleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckAssumeSlrRoleResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return CheckAssumeSlrRoleResponse
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

        return CheckAssumeSlrRoleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 检查实时日志slr角色是否已创建.
     *
     * @returns CheckAssumeSlrRoleResponse
     *
     * @return CheckAssumeSlrRoleResponse
     */
    public function checkAssumeSlrRole()
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkAssumeSlrRoleWithOptions($runtime);
    }

    /**
     * Checks whether a specified website name is available.
     *
     * @param Request - CheckSiteNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckSiteNameResponse
     *
     * @param CheckSiteNameRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CheckSiteNameResponse
     */
    public function checkSiteNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteName) {
            @$query['SiteName'] = $request->siteName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CheckSiteNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether a specified website name is available.
     *
     * @param Request - CheckSiteNameRequest
     *
     * @returns CheckSiteNameResponse
     *
     * @param CheckSiteNameRequest $request
     *
     * @return CheckSiteNameResponse
     */
    public function checkSiteName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSiteNameWithOptions($request, $runtime);
    }

    /**
     * Checks the name of a real-time log delivery task.
     *
     * @param Request - CheckSiteProjectNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckSiteProjectNameResponse
     *
     * @param CheckSiteProjectNameRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CheckSiteProjectNameResponse
     */
    public function checkSiteProjectNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CheckSiteProjectNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks the name of a real-time log delivery task.
     *
     * @param Request - CheckSiteProjectNameRequest
     *
     * @returns CheckSiteProjectNameResponse
     *
     * @param CheckSiteProjectNameRequest $request
     *
     * @return CheckSiteProjectNameResponse
     */
    public function checkSiteProjectName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkSiteProjectNameWithOptions($request, $runtime);
    }

    /**
     * Checks the name of a real-time log delivery task by account.
     *
     * @param Request - CheckUserProjectNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckUserProjectNameResponse
     *
     * @param CheckUserProjectNameRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CheckUserProjectNameResponse
     */
    public function checkUserProjectNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CheckUserProjectNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks the name of a real-time log delivery task by account.
     *
     * @param Request - CheckUserProjectNameRequest
     *
     * @returns CheckUserProjectNameResponse
     *
     * @param CheckUserProjectNameRequest $request
     *
     * @return CheckUserProjectNameResponse
     */
    public function checkUserProjectName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUserProjectNameWithOptions($request, $runtime);
    }

    /**
     * Commits the unstable code in the staging environment to generate an official code version.
     *
     * @param Request - CommitRoutineStagingCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CommitRoutineStagingCodeResponse
     *
     * @param CommitRoutineStagingCodeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CommitRoutineStagingCodeResponse
     */
    public function commitRoutineStagingCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->codeDescription) {
            @$body['CodeDescription'] = $request->codeDescription;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return CommitRoutineStagingCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Commits the unstable code in the staging environment to generate an official code version.
     *
     * @param Request - CommitRoutineStagingCodeRequest
     *
     * @returns CommitRoutineStagingCodeResponse
     *
     * @param CommitRoutineStagingCodeRequest $request
     *
     * @return CommitRoutineStagingCodeResponse
     */
    public function commitRoutineStagingCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->commitRoutineStagingCodeWithOptions($request, $runtime);
    }

    /**
     * Create a new site cache configuration.
     *
     * @param Request - CreateCacheRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCacheRuleResponse
     *
     * @param CreateCacheRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateCacheRuleResponse
     */
    public function createCacheRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->additionalCacheablePorts) {
            @$query['AdditionalCacheablePorts'] = $request->additionalCacheablePorts;
        }

        if (null !== $request->browserCacheMode) {
            @$query['BrowserCacheMode'] = $request->browserCacheMode;
        }

        if (null !== $request->browserCacheTtl) {
            @$query['BrowserCacheTtl'] = $request->browserCacheTtl;
        }

        if (null !== $request->bypassCache) {
            @$query['BypassCache'] = $request->bypassCache;
        }

        if (null !== $request->cacheDeceptionArmor) {
            @$query['CacheDeceptionArmor'] = $request->cacheDeceptionArmor;
        }

        if (null !== $request->cacheReserveEligibility) {
            @$query['CacheReserveEligibility'] = $request->cacheReserveEligibility;
        }

        if (null !== $request->checkPresenceCookie) {
            @$query['CheckPresenceCookie'] = $request->checkPresenceCookie;
        }

        if (null !== $request->checkPresenceHeader) {
            @$query['CheckPresenceHeader'] = $request->checkPresenceHeader;
        }

        if (null !== $request->edgeCacheMode) {
            @$query['EdgeCacheMode'] = $request->edgeCacheMode;
        }

        if (null !== $request->edgeCacheTtl) {
            @$query['EdgeCacheTtl'] = $request->edgeCacheTtl;
        }

        if (null !== $request->edgeStatusCodeCacheTtl) {
            @$query['EdgeStatusCodeCacheTtl'] = $request->edgeStatusCodeCacheTtl;
        }

        if (null !== $request->includeCookie) {
            @$query['IncludeCookie'] = $request->includeCookie;
        }

        if (null !== $request->includeHeader) {
            @$query['IncludeHeader'] = $request->includeHeader;
        }

        if (null !== $request->postBodyCacheKey) {
            @$query['PostBodyCacheKey'] = $request->postBodyCacheKey;
        }

        if (null !== $request->postBodySizeLimit) {
            @$query['PostBodySizeLimit'] = $request->postBodySizeLimit;
        }

        if (null !== $request->postCache) {
            @$query['PostCache'] = $request->postCache;
        }

        if (null !== $request->queryString) {
            @$query['QueryString'] = $request->queryString;
        }

        if (null !== $request->queryStringMode) {
            @$query['QueryStringMode'] = $request->queryStringMode;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->serveStale) {
            @$query['ServeStale'] = $request->serveStale;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        if (null !== $request->sortQueryStringForCache) {
            @$query['SortQueryStringForCache'] = $request->sortQueryStringForCache;
        }

        if (null !== $request->userDeviceType) {
            @$query['UserDeviceType'] = $request->userDeviceType;
        }

        if (null !== $request->userGeo) {
            @$query['UserGeo'] = $request->userGeo;
        }

        if (null !== $request->userLanguage) {
            @$query['UserLanguage'] = $request->userLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateCacheRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a new site cache configuration.
     *
     * @param Request - CreateCacheRuleRequest
     *
     * @returns CreateCacheRuleResponse
     *
     * @param CreateCacheRuleRequest $request
     *
     * @return CreateCacheRuleResponse
     */
    public function createCacheRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCacheRuleWithOptions($request, $runtime);
    }

    /**
     * Uses the ESA-managed certificate authority (CA) to issue client certificates.
     *
     * @param Request - CreateClientCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClientCertificateResponse
     *
     * @param CreateClientCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateClientCertificateResponse
     */
    public function createClientCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $body = [];
        if (null !== $request->CSR) {
            @$body['CSR'] = $request->CSR;
        }

        if (null !== $request->pkeyType) {
            @$body['PkeyType'] = $request->pkeyType;
        }

        if (null !== $request->validityDays) {
            @$body['ValidityDays'] = $request->validityDays;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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

        return CreateClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uses the ESA-managed certificate authority (CA) to issue client certificates.
     *
     * @param Request - CreateClientCertificateRequest
     *
     * @returns CreateClientCertificateResponse
     *
     * @param CreateClientCertificateRequest $request
     *
     * @return CreateClientCertificateResponse
     */
    public function createClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClientCertificateWithOptions($request, $runtime);
    }

    /**
     * Add a compression rule.
     *
     * @param Request - CreateCompressionRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCompressionRuleResponse
     *
     * @param CreateCompressionRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCompressionRuleResponse
     */
    public function createCompressionRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->brotli) {
            @$query['Brotli'] = $request->brotli;
        }

        if (null !== $request->gzip) {
            @$query['Gzip'] = $request->gzip;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        if (null !== $request->zstd) {
            @$query['Zstd'] = $request->zstd;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateCompressionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add a compression rule.
     *
     * @param Request - CreateCompressionRuleRequest
     *
     * @returns CreateCompressionRuleResponse
     *
     * @param CreateCompressionRuleRequest $request
     *
     * @return CreateCompressionRuleResponse
     */
    public function createCompressionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCompressionRuleWithOptions($request, $runtime);
    }

    /**
     * Creates an account-level custom scenario policy. You can execute a policy after you associate the policy with a website.
     *
     * @param Request - CreateCustomScenePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCustomScenePolicyResponse
     *
     * @param CreateCustomScenePolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateCustomScenePolicyResponse
     */
    public function createCustomScenePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->objects) {
            @$query['Objects'] = $request->objects;
        }

        if (null !== $request->siteIds) {
            @$query['SiteIds'] = $request->siteIds;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->template) {
            @$query['Template'] = $request->template;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateCustomScenePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an account-level custom scenario policy. You can execute a policy after you associate the policy with a website.
     *
     * @param Request - CreateCustomScenePolicyRequest
     *
     * @returns CreateCustomScenePolicyResponse
     *
     * @param CreateCustomScenePolicyRequest $request
     *
     * @return CreateCustomScenePolicyResponse
     */
    public function createCustomScenePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomScenePolicyWithOptions($request, $runtime);
    }

    /**
     * Creates a containerized application. You can deploy and release a version of the application across points of presence (POPs).
     *
     * @param Request - CreateEdgeContainerAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEdgeContainerAppResponse
     *
     * @param CreateEdgeContainerAppRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateEdgeContainerAppResponse
     */
    public function createEdgeContainerAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->healthCheckFailTimes) {
            @$body['HealthCheckFailTimes'] = $request->healthCheckFailTimes;
        }

        if (null !== $request->healthCheckHost) {
            @$body['HealthCheckHost'] = $request->healthCheckHost;
        }

        if (null !== $request->healthCheckHttpCode) {
            @$body['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }

        if (null !== $request->healthCheckInterval) {
            @$body['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckMethod) {
            @$body['HealthCheckMethod'] = $request->healthCheckMethod;
        }

        if (null !== $request->healthCheckPort) {
            @$body['HealthCheckPort'] = $request->healthCheckPort;
        }

        if (null !== $request->healthCheckSuccTimes) {
            @$body['HealthCheckSuccTimes'] = $request->healthCheckSuccTimes;
        }

        if (null !== $request->healthCheckTimeout) {
            @$body['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }

        if (null !== $request->healthCheckType) {
            @$body['HealthCheckType'] = $request->healthCheckType;
        }

        if (null !== $request->healthCheckURI) {
            @$body['HealthCheckURI'] = $request->healthCheckURI;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->remarks) {
            @$body['Remarks'] = $request->remarks;
        }

        if (null !== $request->servicePort) {
            @$body['ServicePort'] = $request->servicePort;
        }

        if (null !== $request->targetPort) {
            @$body['TargetPort'] = $request->targetPort;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return CreateEdgeContainerAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a containerized application. You can deploy and release a version of the application across points of presence (POPs).
     *
     * @param Request - CreateEdgeContainerAppRequest
     *
     * @returns CreateEdgeContainerAppResponse
     *
     * @param CreateEdgeContainerAppRequest $request
     *
     * @return CreateEdgeContainerAppResponse
     */
    public function createEdgeContainerApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEdgeContainerAppWithOptions($request, $runtime);
    }

    /**
     * Associates a domain name with a containerized application. This way, requests destined for the associated domain name are forwarded to the application.
     *
     * @param Request - CreateEdgeContainerAppRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEdgeContainerAppRecordResponse
     *
     * @param CreateEdgeContainerAppRecordRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateEdgeContainerAppRecordResponse
     */
    public function createEdgeContainerAppRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->recordName) {
            @$body['RecordName'] = $request->recordName;
        }

        if (null !== $request->siteId) {
            @$body['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return CreateEdgeContainerAppRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates a domain name with a containerized application. This way, requests destined for the associated domain name are forwarded to the application.
     *
     * @param Request - CreateEdgeContainerAppRecordRequest
     *
     * @returns CreateEdgeContainerAppRecordResponse
     *
     * @param CreateEdgeContainerAppRecordRequest $request
     *
     * @return CreateEdgeContainerAppRecordResponse
     */
    public function createEdgeContainerAppRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEdgeContainerAppRecordWithOptions($request, $runtime);
    }

    /**
     * Creates a version for a containerized application. You can iterate the application based on the version.
     *
     * @param tmpReq - CreateEdgeContainerAppVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEdgeContainerAppVersionResponse
     *
     * @param CreateEdgeContainerAppVersionRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateEdgeContainerAppVersionResponse
     */
    public function createEdgeContainerAppVersionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateEdgeContainerAppVersionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->containers) {
            $request->containersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->containers, 'Containers', 'json');
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->containersShrink) {
            @$body['Containers'] = $request->containersShrink;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->remarks) {
            @$body['Remarks'] = $request->remarks;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return CreateEdgeContainerAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a version for a containerized application. You can iterate the application based on the version.
     *
     * @param Request - CreateEdgeContainerAppVersionRequest
     *
     * @returns CreateEdgeContainerAppVersionResponse
     *
     * @param CreateEdgeContainerAppVersionRequest $request
     *
     * @return CreateEdgeContainerAppVersionResponse
     */
    public function createEdgeContainerAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEdgeContainerAppVersionWithOptions($request, $runtime);
    }

    /**
     * Adds the configuration of modifying HTTP request headers for a website.
     *
     * @param tmpReq - CreateHttpIncomingRequestHeaderModificationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHttpIncomingRequestHeaderModificationRuleResponse
     *
     * @param CreateHttpIncomingRequestHeaderModificationRuleRequest $tmpReq
     * @param RuntimeOptions                                         $runtime
     *
     * @return CreateHttpIncomingRequestHeaderModificationRuleResponse
     */
    public function createHttpIncomingRequestHeaderModificationRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateHttpIncomingRequestHeaderModificationRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->requestHeaderModification) {
            $request->requestHeaderModificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->requestHeaderModification, 'RequestHeaderModification', 'json');
        }

        $query = [];
        if (null !== $request->requestHeaderModificationShrink) {
            @$query['RequestHeaderModification'] = $request->requestHeaderModificationShrink;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHttpIncomingRequestHeaderModificationRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHttpIncomingRequestHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds the configuration of modifying HTTP request headers for a website.
     *
     * @param Request - CreateHttpIncomingRequestHeaderModificationRuleRequest
     *
     * @returns CreateHttpIncomingRequestHeaderModificationRuleResponse
     *
     * @param CreateHttpIncomingRequestHeaderModificationRuleRequest $request
     *
     * @return CreateHttpIncomingRequestHeaderModificationRuleResponse
     */
    public function createHttpIncomingRequestHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHttpIncomingRequestHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * Adds the configuration of modifying HTTP response headers for a website.
     *
     * @param tmpReq - CreateHttpIncomingResponseHeaderModificationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHttpIncomingResponseHeaderModificationRuleResponse
     *
     * @param CreateHttpIncomingResponseHeaderModificationRuleRequest $tmpReq
     * @param RuntimeOptions                                          $runtime
     *
     * @return CreateHttpIncomingResponseHeaderModificationRuleResponse
     */
    public function createHttpIncomingResponseHeaderModificationRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateHttpIncomingResponseHeaderModificationRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->responseHeaderModification) {
            $request->responseHeaderModificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->responseHeaderModification, 'ResponseHeaderModification', 'json');
        }

        $query = [];
        if (null !== $request->responseHeaderModificationShrink) {
            @$query['ResponseHeaderModification'] = $request->responseHeaderModificationShrink;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHttpIncomingResponseHeaderModificationRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHttpIncomingResponseHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds the configuration of modifying HTTP response headers for a website.
     *
     * @param Request - CreateHttpIncomingResponseHeaderModificationRuleRequest
     *
     * @returns CreateHttpIncomingResponseHeaderModificationRuleResponse
     *
     * @param CreateHttpIncomingResponseHeaderModificationRuleRequest $request
     *
     * @return CreateHttpIncomingResponseHeaderModificationRuleResponse
     */
    public function createHttpIncomingResponseHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHttpIncomingResponseHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * Add HTTP Request Header Rule.
     *
     * @param tmpReq - CreateHttpRequestHeaderModificationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHttpRequestHeaderModificationRuleResponse
     *
     * @param CreateHttpRequestHeaderModificationRuleRequest $tmpReq
     * @param RuntimeOptions                                 $runtime
     *
     * @return CreateHttpRequestHeaderModificationRuleResponse
     */
    public function createHttpRequestHeaderModificationRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateHttpRequestHeaderModificationRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->requestHeaderModification) {
            $request->requestHeaderModificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->requestHeaderModification, 'RequestHeaderModification', 'json');
        }

        $query = [];
        if (null !== $request->requestHeaderModificationShrink) {
            @$query['RequestHeaderModification'] = $request->requestHeaderModificationShrink;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateHttpRequestHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add HTTP Request Header Rule.
     *
     * @param Request - CreateHttpRequestHeaderModificationRuleRequest
     *
     * @returns CreateHttpRequestHeaderModificationRuleResponse
     *
     * @param CreateHttpRequestHeaderModificationRuleRequest $request
     *
     * @return CreateHttpRequestHeaderModificationRuleResponse
     */
    public function createHttpRequestHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHttpRequestHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * Add HTTP Response Header Rule.
     *
     * @param tmpReq - CreateHttpResponseHeaderModificationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHttpResponseHeaderModificationRuleResponse
     *
     * @param CreateHttpResponseHeaderModificationRuleRequest $tmpReq
     * @param RuntimeOptions                                  $runtime
     *
     * @return CreateHttpResponseHeaderModificationRuleResponse
     */
    public function createHttpResponseHeaderModificationRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateHttpResponseHeaderModificationRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->responseHeaderModification) {
            $request->responseHeaderModificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->responseHeaderModification, 'ResponseHeaderModification', 'json');
        }

        $query = [];
        if (null !== $request->responseHeaderModificationShrink) {
            @$query['ResponseHeaderModification'] = $request->responseHeaderModificationShrink;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateHttpResponseHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add HTTP Response Header Rule.
     *
     * @param Request - CreateHttpResponseHeaderModificationRuleRequest
     *
     * @returns CreateHttpResponseHeaderModificationRuleResponse
     *
     * @param CreateHttpResponseHeaderModificationRuleRequest $request
     *
     * @return CreateHttpResponseHeaderModificationRuleResponse
     */
    public function createHttpResponseHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHttpResponseHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * Create a new site HTTPS application configuration.
     *
     * @param Request - CreateHttpsApplicationConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHttpsApplicationConfigurationResponse
     *
     * @param CreateHttpsApplicationConfigurationRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return CreateHttpsApplicationConfigurationResponse
     */
    public function createHttpsApplicationConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->altSvc) {
            @$query['AltSvc'] = $request->altSvc;
        }

        if (null !== $request->altSvcClear) {
            @$query['AltSvcClear'] = $request->altSvcClear;
        }

        if (null !== $request->altSvcMa) {
            @$query['AltSvcMa'] = $request->altSvcMa;
        }

        if (null !== $request->altSvcPersist) {
            @$query['AltSvcPersist'] = $request->altSvcPersist;
        }

        if (null !== $request->hsts) {
            @$query['Hsts'] = $request->hsts;
        }

        if (null !== $request->hstsIncludeSubdomains) {
            @$query['HstsIncludeSubdomains'] = $request->hstsIncludeSubdomains;
        }

        if (null !== $request->hstsMaxAge) {
            @$query['HstsMaxAge'] = $request->hstsMaxAge;
        }

        if (null !== $request->hstsPreload) {
            @$query['HstsPreload'] = $request->hstsPreload;
        }

        if (null !== $request->httpsForce) {
            @$query['HttpsForce'] = $request->httpsForce;
        }

        if (null !== $request->httpsForceCode) {
            @$query['HttpsForceCode'] = $request->httpsForceCode;
        }

        if (null !== $request->httpsNoSniDeny) {
            @$query['HttpsNoSniDeny'] = $request->httpsNoSniDeny;
        }

        if (null !== $request->httpsSniVerify) {
            @$query['HttpsSniVerify'] = $request->httpsSniVerify;
        }

        if (null !== $request->httpsSniWhitelist) {
            @$query['HttpsSniWhitelist'] = $request->httpsSniWhitelist;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateHttpsApplicationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a new site HTTPS application configuration.
     *
     * @param Request - CreateHttpsApplicationConfigurationRequest
     *
     * @returns CreateHttpsApplicationConfigurationResponse
     *
     * @param CreateHttpsApplicationConfigurationRequest $request
     *
     * @return CreateHttpsApplicationConfigurationResponse
     */
    public function createHttpsApplicationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHttpsApplicationConfigurationWithOptions($request, $runtime);
    }

    /**
     * Create a new site HTTPS basic configuration.
     *
     * @param Request - CreateHttpsBasicConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHttpsBasicConfigurationResponse
     *
     * @param CreateHttpsBasicConfigurationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateHttpsBasicConfigurationResponse
     */
    public function createHttpsBasicConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ciphersuite) {
            @$query['Ciphersuite'] = $request->ciphersuite;
        }

        if (null !== $request->ciphersuiteGroup) {
            @$query['CiphersuiteGroup'] = $request->ciphersuiteGroup;
        }

        if (null !== $request->http2) {
            @$query['Http2'] = $request->http2;
        }

        if (null !== $request->http3) {
            @$query['Http3'] = $request->http3;
        }

        if (null !== $request->https) {
            @$query['Https'] = $request->https;
        }

        if (null !== $request->ocspStapling) {
            @$query['OcspStapling'] = $request->ocspStapling;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->tls10) {
            @$query['Tls10'] = $request->tls10;
        }

        if (null !== $request->tls11) {
            @$query['Tls11'] = $request->tls11;
        }

        if (null !== $request->tls12) {
            @$query['Tls12'] = $request->tls12;
        }

        if (null !== $request->tls13) {
            @$query['Tls13'] = $request->tls13;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateHttpsBasicConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a new site HTTPS basic configuration.
     *
     * @param Request - CreateHttpsBasicConfigurationRequest
     *
     * @returns CreateHttpsBasicConfigurationResponse
     *
     * @param CreateHttpsBasicConfigurationRequest $request
     *
     * @return CreateHttpsBasicConfigurationResponse
     */
    public function createHttpsBasicConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHttpsBasicConfigurationWithOptions($request, $runtime);
    }

    /**
     * Add Site Image Transformation Configuration.
     *
     * @param Request - CreateImageTransformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageTransformResponse
     *
     * @param CreateImageTransformRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateImageTransformResponse
     */
    public function createImageTransformWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateImageTransformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add Site Image Transformation Configuration.
     *
     * @param Request - CreateImageTransformRequest
     *
     * @returns CreateImageTransformResponse
     *
     * @param CreateImageTransformRequest $request
     *
     * @return CreateImageTransformResponse
     */
    public function createImageTransform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageTransformWithOptions($request, $runtime);
    }

    /**
     * Create a namespace in your Alibaba Cloud account.
     *
     * @param Request - CreateKvNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKvNamespaceResponse
     *
     * @param CreateKvNamespaceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateKvNamespaceResponse
     */
    public function createKvNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->namespace) {
            @$body['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return CreateKvNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a namespace in your Alibaba Cloud account.
     *
     * @param Request - CreateKvNamespaceRequest
     *
     * @returns CreateKvNamespaceResponse
     *
     * @param CreateKvNamespaceRequest $request
     *
     * @return CreateKvNamespaceResponse
     */
    public function createKvNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKvNamespaceWithOptions($request, $runtime);
    }

    /**
     * Creates a list. Lists are used for the referencing of values in the rules engine to implement complex logic and control in security policies.
     *
     * @param tmpReq - CreateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateListResponse
     *
     * @param CreateListRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return CreateListResponse
     */
    public function createListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->items) {
            $request->itemsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->items, 'Items', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->itemsShrink) {
            @$body['Items'] = $request->itemsShrink;
        }

        if (null !== $request->kind) {
            @$body['Kind'] = $request->kind;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return CreateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a list. Lists are used for the referencing of values in the rules engine to implement complex logic and control in security policies.
     *
     * @param Request - CreateListRequest
     *
     * @returns CreateListResponse
     *
     * @param CreateListRequest $request
     *
     * @return CreateListResponse
     */
    public function createList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createListWithOptions($request, $runtime);
    }

    /**
     * Add a New Load Balancer.
     *
     * @remarks
     * Through this API, users can configure load balancing services according to their business needs, including but not limited to adaptive routing, weighted round-robin, rule matching, health checks, and more, to achieve effective traffic management and optimization.
     *
     * @param tmpReq - CreateLoadBalancerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoadBalancerResponse
     *
     * @param CreateLoadBalancerRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CreateLoadBalancerResponse
     */
    public function createLoadBalancerWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateLoadBalancerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->adaptiveRouting) {
            $request->adaptiveRoutingShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->adaptiveRouting, 'AdaptiveRouting', 'json');
        }

        if (null !== $tmpReq->defaultPools) {
            $request->defaultPoolsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->defaultPools, 'DefaultPools', 'json');
        }

        if (null !== $tmpReq->monitor) {
            $request->monitorShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->monitor, 'Monitor', 'json');
        }

        if (null !== $tmpReq->randomSteering) {
            $request->randomSteeringShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->randomSteering, 'RandomSteering', 'json');
        }

        if (null !== $tmpReq->rules) {
            $request->rulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }

        $query = [];
        if (null !== $request->adaptiveRoutingShrink) {
            @$query['AdaptiveRouting'] = $request->adaptiveRoutingShrink;
        }

        if (null !== $request->defaultPoolsShrink) {
            @$query['DefaultPools'] = $request->defaultPoolsShrink;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->fallbackPool) {
            @$query['FallbackPool'] = $request->fallbackPool;
        }

        if (null !== $request->monitorShrink) {
            @$query['Monitor'] = $request->monitorShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->randomSteeringShrink) {
            @$query['RandomSteering'] = $request->randomSteeringShrink;
        }

        if (null !== $request->regionPools) {
            @$query['RegionPools'] = $request->regionPools;
        }

        if (null !== $request->rulesShrink) {
            @$query['Rules'] = $request->rulesShrink;
        }

        if (null !== $request->sessionAffinity) {
            @$query['SessionAffinity'] = $request->sessionAffinity;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->steeringPolicy) {
            @$query['SteeringPolicy'] = $request->steeringPolicy;
        }

        if (null !== $request->subRegionPools) {
            @$query['SubRegionPools'] = $request->subRegionPools;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add a New Load Balancer.
     *
     * @remarks
     * Through this API, users can configure load balancing services according to their business needs, including but not limited to adaptive routing, weighted round-robin, rule matching, health checks, and more, to achieve effective traffic management and optimization.
     *
     * @param Request - CreateLoadBalancerRequest
     *
     * @returns CreateLoadBalancerResponse
     *
     * @param CreateLoadBalancerRequest $request
     *
     * @return CreateLoadBalancerResponse
     */
    public function createLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * Create a new site network optimization configuration.
     *
     * @param Request - CreateNetworkOptimizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNetworkOptimizationResponse
     *
     * @param CreateNetworkOptimizationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateNetworkOptimizationResponse
     */
    public function createNetworkOptimizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->grpc) {
            @$query['Grpc'] = $request->grpc;
        }

        if (null !== $request->http2Origin) {
            @$query['Http2Origin'] = $request->http2Origin;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        if (null !== $request->smartRouting) {
            @$query['SmartRouting'] = $request->smartRouting;
        }

        if (null !== $request->uploadMaxFilesize) {
            @$query['UploadMaxFilesize'] = $request->uploadMaxFilesize;
        }

        if (null !== $request->websocket) {
            @$query['Websocket'] = $request->websocket;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateNetworkOptimizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a new site network optimization configuration.
     *
     * @param Request - CreateNetworkOptimizationRequest
     *
     * @returns CreateNetworkOptimizationResponse
     *
     * @param CreateNetworkOptimizationRequest $request
     *
     * @return CreateNetworkOptimizationResponse
     */
    public function createNetworkOptimization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkOptimizationWithOptions($request, $runtime);
    }

    /**
     * Add a new origin address pool.
     *
     * @remarks
     * Multiple origins can be added under the origin address, supporting domain names, IPs, OSS, S3, and other types of origins. It supports authentication for OSS and S3 type origins.
     *
     * @param tmpReq - CreateOriginPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOriginPoolResponse
     *
     * @param CreateOriginPoolRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateOriginPoolResponse
     */
    public function createOriginPoolWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateOriginPoolShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->origins) {
            $request->originsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->origins, 'Origins', 'json');
        }

        $query = [];
        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->originsShrink) {
            @$query['Origins'] = $request->originsShrink;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateOriginPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add a new origin address pool.
     *
     * @remarks
     * Multiple origins can be added under the origin address, supporting domain names, IPs, OSS, S3, and other types of origins. It supports authentication for OSS and S3 type origins.
     *
     * @param Request - CreateOriginPoolRequest
     *
     * @returns CreateOriginPoolResponse
     *
     * @param CreateOriginPoolRequest $request
     *
     * @return CreateOriginPoolResponse
     */
    public function createOriginPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOriginPoolWithOptions($request, $runtime);
    }

    /**
     * Enables origin protection.
     *
     * @param Request - CreateOriginProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOriginProtectionResponse
     *
     * @param CreateOriginProtectionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateOriginProtectionResponse
     */
    public function createOriginProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoConfirmIPList) {
            @$query['AutoConfirmIPList'] = $request->autoConfirmIPList;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateOriginProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables origin protection.
     *
     * @param Request - CreateOriginProtectionRequest
     *
     * @returns CreateOriginProtectionResponse
     *
     * @param CreateOriginProtectionRequest $request
     *
     * @return CreateOriginProtectionResponse
     */
    public function createOriginProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOriginProtectionWithOptions($request, $runtime);
    }

    /**
     * Create a new origin rule configuration for the site.
     *
     * @param Request - CreateOriginRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOriginRuleResponse
     *
     * @param CreateOriginRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateOriginRuleResponse
     */
    public function createOriginRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dnsRecord) {
            @$query['DnsRecord'] = $request->dnsRecord;
        }

        if (null !== $request->follow302Enable) {
            @$query['Follow302Enable'] = $request->follow302Enable;
        }

        if (null !== $request->follow302MaxTries) {
            @$query['Follow302MaxTries'] = $request->follow302MaxTries;
        }

        if (null !== $request->follow302RetainArgs) {
            @$query['Follow302RetainArgs'] = $request->follow302RetainArgs;
        }

        if (null !== $request->follow302RetainHeader) {
            @$query['Follow302RetainHeader'] = $request->follow302RetainHeader;
        }

        if (null !== $request->follow302TargetHost) {
            @$query['Follow302TargetHost'] = $request->follow302TargetHost;
        }

        if (null !== $request->originHost) {
            @$query['OriginHost'] = $request->originHost;
        }

        if (null !== $request->originHttpPort) {
            @$query['OriginHttpPort'] = $request->originHttpPort;
        }

        if (null !== $request->originHttpsPort) {
            @$query['OriginHttpsPort'] = $request->originHttpsPort;
        }

        if (null !== $request->originMtls) {
            @$query['OriginMtls'] = $request->originMtls;
        }

        if (null !== $request->originReadTimeout) {
            @$query['OriginReadTimeout'] = $request->originReadTimeout;
        }

        if (null !== $request->originScheme) {
            @$query['OriginScheme'] = $request->originScheme;
        }

        if (null !== $request->originSni) {
            @$query['OriginSni'] = $request->originSni;
        }

        if (null !== $request->originVerify) {
            @$query['OriginVerify'] = $request->originVerify;
        }

        if (null !== $request->range) {
            @$query['Range'] = $request->range;
        }

        if (null !== $request->rangeChunkSize) {
            @$query['RangeChunkSize'] = $request->rangeChunkSize;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateOriginRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a new origin rule configuration for the site.
     *
     * @param Request - CreateOriginRuleRequest
     *
     * @returns CreateOriginRuleResponse
     *
     * @param CreateOriginRuleRequest $request
     *
     * @return CreateOriginRuleResponse
     */
    public function createOriginRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOriginRuleWithOptions($request, $runtime);
    }

    /**
     * Creates a custom error page, which is displayed when a request is blocked by Web Application Firewall (WAF). You can configure the HTML content, page type, and description, and submit the Base64-encoded page content.
     *
     * @param Request - CreatePageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePageResponse
     *
     * @param CreatePageRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreatePageResponse
     */
    public function createPageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->contentType) {
            @$body['ContentType'] = $request->contentType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return CreatePageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom error page, which is displayed when a request is blocked by Web Application Firewall (WAF). You can configure the HTML content, page type, and description, and submit the Base64-encoded page content.
     *
     * @param Request - CreatePageRequest
     *
     * @returns CreatePageResponse
     *
     * @param CreatePageRequest $request
     *
     * @return CreatePageResponse
     */
    public function createPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPageWithOptions($request, $runtime);
    }

    /**
     * Creates a DNS record for a specific website.
     *
     * @param tmpReq - CreateRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRecordResponse
     *
     * @param CreateRecordRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateRecordResponse
     */
    public function createRecordWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateRecordShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->authConf) {
            $request->authConfShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->authConf, 'AuthConf', 'json');
        }

        if (null !== $tmpReq->data) {
            $request->dataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->data, 'Data', 'json');
        }

        $query = [];
        if (null !== $request->authConfShrink) {
            @$query['AuthConf'] = $request->authConfShrink;
        }

        if (null !== $request->bizName) {
            @$query['BizName'] = $request->bizName;
        }

        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->dataShrink) {
            @$query['Data'] = $request->dataShrink;
        }

        if (null !== $request->hostPolicy) {
            @$query['HostPolicy'] = $request->hostPolicy;
        }

        if (null !== $request->proxied) {
            @$query['Proxied'] = $request->proxied;
        }

        if (null !== $request->recordName) {
            @$query['RecordName'] = $request->recordName;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a DNS record for a specific website.
     *
     * @param Request - CreateRecordRequest
     *
     * @returns CreateRecordResponse
     *
     * @param CreateRecordRequest $request
     *
     * @return CreateRecordResponse
     */
    public function createRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRecordWithOptions($request, $runtime);
    }

    /**
     * Add a Redirect Rule.
     *
     * @param Request - CreateRedirectRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRedirectRuleResponse
     *
     * @param CreateRedirectRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateRedirectRuleResponse
     */
    public function createRedirectRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->reserveQueryString) {
            @$query['ReserveQueryString'] = $request->reserveQueryString;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        if (null !== $request->statusCode) {
            @$query['StatusCode'] = $request->statusCode;
        }

        if (null !== $request->targetUrl) {
            @$query['TargetUrl'] = $request->targetUrl;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateRedirectRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add a Redirect Rule.
     *
     * @param Request - CreateRedirectRuleRequest
     *
     * @returns CreateRedirectRuleResponse
     *
     * @param CreateRedirectRuleRequest $request
     *
     * @return CreateRedirectRuleResponse
     */
    public function createRedirectRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRedirectRuleWithOptions($request, $runtime);
    }

    /**
     * Add Rewrite URL Rule.
     *
     * @param Request - CreateRewriteUrlRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRewriteUrlRuleResponse
     *
     * @param CreateRewriteUrlRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateRewriteUrlRuleResponse
     */
    public function createRewriteUrlRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->queryString) {
            @$query['QueryString'] = $request->queryString;
        }

        if (null !== $request->rewriteQueryStringType) {
            @$query['RewriteQueryStringType'] = $request->rewriteQueryStringType;
        }

        if (null !== $request->rewriteUriType) {
            @$query['RewriteUriType'] = $request->rewriteUriType;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        if (null !== $request->uri) {
            @$query['Uri'] = $request->uri;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateRewriteUrlRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add Rewrite URL Rule.
     *
     * @param Request - CreateRewriteUrlRuleRequest
     *
     * @returns CreateRewriteUrlRuleResponse
     *
     * @param CreateRewriteUrlRuleRequest $request
     *
     * @return CreateRewriteUrlRuleResponse
     */
    public function createRewriteUrlRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRewriteUrlRuleWithOptions($request, $runtime);
    }

    /**
     * Creates a routine.
     *
     * @param Request - CreateRoutineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRoutineResponse
     *
     * @param CreateRoutineRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateRoutineResponse
     */
    public function createRoutineWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->hasAssets) {
            @$body['HasAssets'] = $request->hasAssets;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return CreateRoutineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a routine.
     *
     * @param Request - CreateRoutineRequest
     *
     * @returns CreateRoutineResponse
     *
     * @param CreateRoutineRequest $request
     *
     * @return CreateRoutineResponse
     */
    public function createRoutine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoutineWithOptions($request, $runtime);
    }

    /**
     * Release the version of the function code in proportion to the specified environment.
     *
     * @remarks
     * ## [](#)Request description
     * *   When you create a version for deployment, you can set the environment name `Env` parameter only to the test environment `staging` or the production environment `production`.
     * *   `CodeVersions` parameter supports up to two versions of a phased release, and the sum of the proportions of these versions must be equal to 100%.
     *
     * @param tmpReq - CreateRoutineCodeDeploymentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRoutineCodeDeploymentResponse
     *
     * @param CreateRoutineCodeDeploymentRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateRoutineCodeDeploymentResponse
     */
    public function createRoutineCodeDeploymentWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateRoutineCodeDeploymentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->codeVersions) {
            $request->codeVersionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->codeVersions, 'CodeVersions', 'json');
        }

        $body = [];
        if (null !== $request->codeVersionsShrink) {
            @$body['CodeVersions'] = $request->codeVersionsShrink;
        }

        if (null !== $request->env) {
            @$body['Env'] = $request->env;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->strategy) {
            @$body['Strategy'] = $request->strategy;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRoutineCodeDeployment',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRoutineCodeDeploymentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Release the version of the function code in proportion to the specified environment.
     *
     * @remarks
     * ## [](#)Request description
     * *   When you create a version for deployment, you can set the environment name `Env` parameter only to the test environment `staging` or the production environment `production`.
     * *   `CodeVersions` parameter supports up to two versions of a phased release, and the sum of the proportions of these versions must be equal to 100%.
     *
     * @param Request - CreateRoutineCodeDeploymentRequest
     *
     * @returns CreateRoutineCodeDeploymentResponse
     *
     * @param CreateRoutineCodeDeploymentRequest $request
     *
     * @return CreateRoutineCodeDeploymentResponse
     */
    public function createRoutineCodeDeployment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoutineCodeDeploymentWithOptions($request, $runtime);
    }

    /**
     * Adds a record to map a domain that is associated with a routine. This record is used to trigger the associated routine code.
     *
     * @param Request - CreateRoutineRelatedRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRoutineRelatedRecordResponse
     *
     * @param CreateRoutineRelatedRecordRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateRoutineRelatedRecordResponse
     */
    public function createRoutineRelatedRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->recordName) {
            @$body['RecordName'] = $request->recordName;
        }

        if (null !== $request->siteId) {
            @$body['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return CreateRoutineRelatedRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a record to map a domain that is associated with a routine. This record is used to trigger the associated routine code.
     *
     * @param Request - CreateRoutineRelatedRecordRequest
     *
     * @returns CreateRoutineRelatedRecordResponse
     *
     * @param CreateRoutineRelatedRecordRequest $request
     *
     * @return CreateRoutineRelatedRecordResponse
     */
    public function createRoutineRelatedRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoutineRelatedRecordWithOptions($request, $runtime);
    }

    /**
     * Adds edge function routing configurations.
     *
     * @param Request - CreateRoutineRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRoutineRouteResponse
     *
     * @param CreateRoutineRouteRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateRoutineRouteResponse
     */
    public function createRoutineRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bypass) {
            @$query['Bypass'] = $request->bypass;
        }

        if (null !== $request->fallback) {
            @$query['Fallback'] = $request->fallback;
        }

        if (null !== $request->routeEnable) {
            @$query['RouteEnable'] = $request->routeEnable;
        }

        if (null !== $request->routeName) {
            @$query['RouteName'] = $request->routeName;
        }

        if (null !== $request->routineName) {
            @$query['RoutineName'] = $request->routineName;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRoutineRoute',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRoutineRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds edge function routing configurations.
     *
     * @param Request - CreateRoutineRouteRequest
     *
     * @returns CreateRoutineRouteResponse
     *
     * @param CreateRoutineRouteRequest $request
     *
     * @return CreateRoutineRouteResponse
     */
    public function createRoutineRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoutineRouteWithOptions($request, $runtime);
    }

    /**
     * 创建带Assets资源的Routine代码版本.
     *
     * @param tmpReq - CreateRoutineWithAssetsCodeVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRoutineWithAssetsCodeVersionResponse
     *
     * @param CreateRoutineWithAssetsCodeVersionRequest $tmpReq
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateRoutineWithAssetsCodeVersionResponse
     */
    public function createRoutineWithAssetsCodeVersionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateRoutineWithAssetsCodeVersionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->confOptions) {
            $request->confOptionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->confOptions, 'ConfOptions', 'json');
        }

        $body = [];
        if (null !== $request->buildId) {
            @$body['BuildId'] = $request->buildId;
        }

        if (null !== $request->codeDescription) {
            @$body['CodeDescription'] = $request->codeDescription;
        }

        if (null !== $request->confOptionsShrink) {
            @$body['ConfOptions'] = $request->confOptionsShrink;
        }

        if (null !== $request->extraInfo) {
            @$body['ExtraInfo'] = $request->extraInfo;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRoutineWithAssetsCodeVersion',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRoutineWithAssetsCodeVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建带Assets资源的Routine代码版本.
     *
     * @param Request - CreateRoutineWithAssetsCodeVersionRequest
     *
     * @returns CreateRoutineWithAssetsCodeVersionResponse
     *
     * @param CreateRoutineWithAssetsCodeVersionRequest $request
     *
     * @return CreateRoutineWithAssetsCodeVersionResponse
     */
    public function createRoutineWithAssetsCodeVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoutineWithAssetsCodeVersionWithOptions($request, $runtime);
    }

    /**
     * Creates scheduled prefetch plans.
     *
     * @param tmpReq - CreateScheduledPreloadExecutionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScheduledPreloadExecutionsResponse
     *
     * @param CreateScheduledPreloadExecutionsRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return CreateScheduledPreloadExecutionsResponse
     */
    public function createScheduledPreloadExecutionsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateScheduledPreloadExecutionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->executions) {
            $request->executionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->executions, 'Executions', 'json');
        }

        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $body = [];
        if (null !== $request->executionsShrink) {
            @$body['Executions'] = $request->executionsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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

        return CreateScheduledPreloadExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates scheduled prefetch plans.
     *
     * @param Request - CreateScheduledPreloadExecutionsRequest
     *
     * @returns CreateScheduledPreloadExecutionsResponse
     *
     * @param CreateScheduledPreloadExecutionsRequest $request
     *
     * @return CreateScheduledPreloadExecutionsResponse
     */
    public function createScheduledPreloadExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScheduledPreloadExecutionsWithOptions($request, $runtime);
    }

    /**
     * Adds a scheduled prefetch task.
     *
     * @param Request - CreateScheduledPreloadJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScheduledPreloadJobResponse
     *
     * @param CreateScheduledPreloadJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateScheduledPreloadJobResponse
     */
    public function createScheduledPreloadJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->insertWay) {
            @$body['InsertWay'] = $request->insertWay;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->ossUrl) {
            @$body['OssUrl'] = $request->ossUrl;
        }

        if (null !== $request->siteId) {
            @$body['SiteId'] = $request->siteId;
        }

        if (null !== $request->urlList) {
            @$body['UrlList'] = $request->urlList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return CreateScheduledPreloadJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a scheduled prefetch task.
     *
     * @param Request - CreateScheduledPreloadJobRequest
     *
     * @returns CreateScheduledPreloadJobResponse
     *
     * @param CreateScheduledPreloadJobRequest $request
     *
     * @return CreateScheduledPreloadJobResponse
     */
    public function createScheduledPreloadJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScheduledPreloadJobWithOptions($request, $runtime);
    }

    /**
     * Adds a website.
     *
     * @remarks
     *   Make sure that you have an available plan before you add a website.
     * *   Make sure that your website domain name has an ICP filing if the location you want to specify covers the Chinese mainland.
     *
     * @param Request - CreateSiteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSiteResponse
     *
     * @param CreateSiteRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateSiteResponse
     */
    public function createSiteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessType) {
            @$query['AccessType'] = $request->accessType;
        }

        if (null !== $request->coverage) {
            @$query['Coverage'] = $request->coverage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->siteName) {
            @$query['SiteName'] = $request->siteName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateSiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a website.
     *
     * @remarks
     *   Make sure that you have an available plan before you add a website.
     * *   Make sure that your website domain name has an ICP filing if the location you want to specify covers the Chinese mainland.
     *
     * @param Request - CreateSiteRequest
     *
     * @returns CreateSiteResponse
     *
     * @param CreateSiteRequest $request
     *
     * @return CreateSiteResponse
     */
    public function createSite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSiteWithOptions($request, $runtime);
    }

    /**
     * Adds the configuration of custom request header, response header, and cookie fields that are used to capture logs of a website.
     *
     * @remarks
     *   **Custom field limits**: The key name of a custom field can contain only letters, digits, underscores (_), and spaces. The key name cannot contain other characters. Otherwise, errors may occur.
     * *   **Parameter passing**: Submit `SiteId`, `RequestHeaders`, `ResponseHeaders`, and `Cookies` by using `formData`. Each array element matches a custom field name.
     * *   **(Required) SiteId**: Although `SiteId` is not marked as required in the Required column, you must specify a website ID by using this parameter when you can call this API operation.
     *
     * @param tmpReq - CreateSiteCustomLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSiteCustomLogResponse
     *
     * @param CreateSiteCustomLogRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSiteCustomLogResponse
     */
    public function createSiteCustomLogWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSiteCustomLogShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->cookies) {
            $request->cookiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cookies, 'Cookies', 'json');
        }

        if (null !== $tmpReq->requestHeaders) {
            $request->requestHeadersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->requestHeaders, 'RequestHeaders', 'json');
        }

        if (null !== $tmpReq->responseHeaders) {
            $request->responseHeadersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->responseHeaders, 'ResponseHeaders', 'json');
        }

        $body = [];
        if (null !== $request->cookiesShrink) {
            @$body['Cookies'] = $request->cookiesShrink;
        }

        if (null !== $request->requestHeadersShrink) {
            @$body['RequestHeaders'] = $request->requestHeadersShrink;
        }

        if (null !== $request->responseHeadersShrink) {
            @$body['ResponseHeaders'] = $request->responseHeadersShrink;
        }

        if (null !== $request->siteId) {
            @$body['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return CreateSiteCustomLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds the configuration of custom request header, response header, and cookie fields that are used to capture logs of a website.
     *
     * @remarks
     *   **Custom field limits**: The key name of a custom field can contain only letters, digits, underscores (_), and spaces. The key name cannot contain other characters. Otherwise, errors may occur.
     * *   **Parameter passing**: Submit `SiteId`, `RequestHeaders`, `ResponseHeaders`, and `Cookies` by using `formData`. Each array element matches a custom field name.
     * *   **(Required) SiteId**: Although `SiteId` is not marked as required in the Required column, you must specify a website ID by using this parameter when you can call this API operation.
     *
     * @param Request - CreateSiteCustomLogRequest
     *
     * @returns CreateSiteCustomLogResponse
     *
     * @param CreateSiteCustomLogRequest $request
     *
     * @return CreateSiteCustomLogResponse
     */
    public function createSiteCustomLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSiteCustomLogWithOptions($request, $runtime);
    }

    /**
     * Creates a real-time log delivery task.
     *
     * @param tmpReq - CreateSiteDeliveryTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSiteDeliveryTaskResponse
     *
     * @param CreateSiteDeliveryTaskRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateSiteDeliveryTaskResponse
     */
    public function createSiteDeliveryTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSiteDeliveryTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->httpDelivery) {
            $request->httpDeliveryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->httpDelivery, 'HttpDelivery', 'json');
        }

        if (null !== $tmpReq->kafkaDelivery) {
            $request->kafkaDeliveryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->kafkaDelivery, 'KafkaDelivery', 'json');
        }

        if (null !== $tmpReq->ossDelivery) {
            $request->ossDeliveryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ossDelivery, 'OssDelivery', 'json');
        }

        if (null !== $tmpReq->s3Delivery) {
            $request->s3DeliveryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->s3Delivery, 'S3Delivery', 'json');
        }

        if (null !== $tmpReq->slsDelivery) {
            $request->slsDeliveryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->slsDelivery, 'SlsDelivery', 'json');
        }

        $body = [];
        if (null !== $request->businessType) {
            @$body['BusinessType'] = $request->businessType;
        }

        if (null !== $request->dataCenter) {
            @$body['DataCenter'] = $request->dataCenter;
        }

        if (null !== $request->deliveryType) {
            @$body['DeliveryType'] = $request->deliveryType;
        }

        if (null !== $request->discardRate) {
            @$body['DiscardRate'] = $request->discardRate;
        }

        if (null !== $request->fieldName) {
            @$body['FieldName'] = $request->fieldName;
        }

        if (null !== $request->filterVer) {
            @$body['FilterVer'] = $request->filterVer;
        }

        if (null !== $request->httpDeliveryShrink) {
            @$body['HttpDelivery'] = $request->httpDeliveryShrink;
        }

        if (null !== $request->kafkaDeliveryShrink) {
            @$body['KafkaDelivery'] = $request->kafkaDeliveryShrink;
        }

        if (null !== $request->ossDeliveryShrink) {
            @$body['OssDelivery'] = $request->ossDeliveryShrink;
        }

        if (null !== $request->s3DeliveryShrink) {
            @$body['S3Delivery'] = $request->s3DeliveryShrink;
        }

        if (null !== $request->siteId) {
            @$body['SiteId'] = $request->siteId;
        }

        if (null !== $request->slsDeliveryShrink) {
            @$body['SlsDelivery'] = $request->slsDeliveryShrink;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return CreateSiteDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a real-time log delivery task.
     *
     * @param Request - CreateSiteDeliveryTaskRequest
     *
     * @returns CreateSiteDeliveryTaskResponse
     *
     * @param CreateSiteDeliveryTaskRequest $request
     *
     * @return CreateSiteDeliveryTaskResponse
     */
    public function createSiteDeliveryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSiteDeliveryTaskWithOptions($request, $runtime);
    }

    /**
     * 创建一个实时日志slr角色.
     *
     * @param Request - CreateSlrRoleForRealtimeLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSlrRoleForRealtimeLogResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return CreateSlrRoleForRealtimeLogResponse
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

        return CreateSlrRoleForRealtimeLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建一个实时日志slr角色.
     *
     * @returns CreateSlrRoleForRealtimeLogResponse
     *
     * @return CreateSlrRoleForRealtimeLogResponse
     */
    public function createSlrRoleForRealtimeLog()
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSlrRoleForRealtimeLogWithOptions($runtime);
    }

    /**
     * Create Transport Layer Application.
     *
     * @param tmpReq - CreateTransportLayerApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTransportLayerApplicationResponse
     *
     * @param CreateTransportLayerApplicationRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateTransportLayerApplicationResponse
     */
    public function createTransportLayerApplicationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTransportLayerApplicationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->rules) {
            $request->rulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }

        $query = [];
        if (null !== $request->crossBorderOptimization) {
            @$query['CrossBorderOptimization'] = $request->crossBorderOptimization;
        }

        if (null !== $request->ipAccessRule) {
            @$query['IpAccessRule'] = $request->ipAccessRule;
        }

        if (null !== $request->ipv6) {
            @$query['Ipv6'] = $request->ipv6;
        }

        if (null !== $request->recordName) {
            @$query['RecordName'] = $request->recordName;
        }

        if (null !== $request->rulesShrink) {
            @$query['Rules'] = $request->rulesShrink;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->staticIp) {
            @$query['StaticIp'] = $request->staticIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTransportLayerApplication',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTransportLayerApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Transport Layer Application.
     *
     * @param Request - CreateTransportLayerApplicationRequest
     *
     * @returns CreateTransportLayerApplicationResponse
     *
     * @param CreateTransportLayerApplicationRequest $request
     *
     * @return CreateTransportLayerApplicationResponse
     */
    public function createTransportLayerApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTransportLayerApplicationWithOptions($request, $runtime);
    }

    /**
     * Create a web page monitoring configuration.
     *
     * @param Request - CreateUrlObservationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUrlObservationResponse
     *
     * @param CreateUrlObservationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateUrlObservationResponse
     */
    public function createUrlObservationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sdkType) {
            @$query['SdkType'] = $request->sdkType;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUrlObservation',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUrlObservationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a web page monitoring configuration.
     *
     * @param Request - CreateUrlObservationRequest
     *
     * @returns CreateUrlObservationResponse
     *
     * @param CreateUrlObservationRequest $request
     *
     * @return CreateUrlObservationResponse
     */
    public function createUrlObservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUrlObservationWithOptions($request, $runtime);
    }

    /**
     * Creates a log delivery task to ship logs to the specified destination.
     *
     * @remarks
     * This API operation allows you to deliver logs to destinations such as Simple Log Service (SLS), HTTP servers, Object Storage Service (OSS), Amazon Simple Storage Service (S3), and Kafka. You can specify the task name, log fields to deliver, data center, discard rate, delivery type, and delivery details.
     * *   **Field filtering**: Use the `FieldName` parameter to specify log fields to deliver.
     * *   **Filtering rules**: Use the `FilterRules` parameter to pre-process and filter log data.
     * *   **Diverse delivery destinations**: Logs can be delivered to different destinations. Configuration parameters vary with delivery destinations.
     * ## [](#)Precautions
     * *   Make sure that you have sufficient permissions to perform delivery tasks.
     * *   If you enable encryption or authentication, properly configure corresponding parameters.
     * *   Verify the syntax of `FilterRules` to make sure that filtering logic works as expected.
     * *   Specify advanced settings such as the number of retries and timeout period based on your needs to have optimal delivery efficiency and stability.
     *
     * @param tmpReq - CreateUserDeliveryTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserDeliveryTaskResponse
     *
     * @param CreateUserDeliveryTaskRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateUserDeliveryTaskResponse
     */
    public function createUserDeliveryTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateUserDeliveryTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->httpDelivery) {
            $request->httpDeliveryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->httpDelivery, 'HttpDelivery', 'json');
        }

        if (null !== $tmpReq->kafkaDelivery) {
            $request->kafkaDeliveryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->kafkaDelivery, 'KafkaDelivery', 'json');
        }

        if (null !== $tmpReq->ossDelivery) {
            $request->ossDeliveryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ossDelivery, 'OssDelivery', 'json');
        }

        if (null !== $tmpReq->s3Delivery) {
            $request->s3DeliveryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->s3Delivery, 'S3Delivery', 'json');
        }

        if (null !== $tmpReq->slsDelivery) {
            $request->slsDeliveryShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->slsDelivery, 'SlsDelivery', 'json');
        }

        $body = [];
        if (null !== $request->businessType) {
            @$body['BusinessType'] = $request->businessType;
        }

        if (null !== $request->dataCenter) {
            @$body['DataCenter'] = $request->dataCenter;
        }

        if (null !== $request->deliveryType) {
            @$body['DeliveryType'] = $request->deliveryType;
        }

        if (null !== $request->details) {
            @$body['Details'] = $request->details;
        }

        if (null !== $request->discardRate) {
            @$body['DiscardRate'] = $request->discardRate;
        }

        if (null !== $request->fieldName) {
            @$body['FieldName'] = $request->fieldName;
        }

        if (null !== $request->filterVer) {
            @$body['FilterVer'] = $request->filterVer;
        }

        if (null !== $request->httpDeliveryShrink) {
            @$body['HttpDelivery'] = $request->httpDeliveryShrink;
        }

        if (null !== $request->kafkaDeliveryShrink) {
            @$body['KafkaDelivery'] = $request->kafkaDeliveryShrink;
        }

        if (null !== $request->ossDeliveryShrink) {
            @$body['OssDelivery'] = $request->ossDeliveryShrink;
        }

        if (null !== $request->s3DeliveryShrink) {
            @$body['S3Delivery'] = $request->s3DeliveryShrink;
        }

        if (null !== $request->slsDeliveryShrink) {
            @$body['SlsDelivery'] = $request->slsDeliveryShrink;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return CreateUserDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a log delivery task to ship logs to the specified destination.
     *
     * @remarks
     * This API operation allows you to deliver logs to destinations such as Simple Log Service (SLS), HTTP servers, Object Storage Service (OSS), Amazon Simple Storage Service (S3), and Kafka. You can specify the task name, log fields to deliver, data center, discard rate, delivery type, and delivery details.
     * *   **Field filtering**: Use the `FieldName` parameter to specify log fields to deliver.
     * *   **Filtering rules**: Use the `FilterRules` parameter to pre-process and filter log data.
     * *   **Diverse delivery destinations**: Logs can be delivered to different destinations. Configuration parameters vary with delivery destinations.
     * ## [](#)Precautions
     * *   Make sure that you have sufficient permissions to perform delivery tasks.
     * *   If you enable encryption or authentication, properly configure corresponding parameters.
     * *   Verify the syntax of `FilterRules` to make sure that filtering logic works as expected.
     * *   Specify advanced settings such as the number of retries and timeout period based on your needs to have optimal delivery efficiency and stability.
     *
     * @param Request - CreateUserDeliveryTaskRequest
     *
     * @returns CreateUserDeliveryTaskResponse
     *
     * @param CreateUserDeliveryTaskRequest $request
     *
     * @return CreateUserDeliveryTaskResponse
     */
    public function createUserDeliveryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserDeliveryTaskWithOptions($request, $runtime);
    }

    /**
     * Add video processing configurations for a website.
     *
     * @param Request - CreateVideoProcessingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVideoProcessingResponse
     *
     * @param CreateVideoProcessingRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateVideoProcessingResponse
     */
    public function createVideoProcessingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flvSeekEnd) {
            @$query['FlvSeekEnd'] = $request->flvSeekEnd;
        }

        if (null !== $request->flvSeekStart) {
            @$query['FlvSeekStart'] = $request->flvSeekStart;
        }

        if (null !== $request->flvVideoSeekMode) {
            @$query['FlvVideoSeekMode'] = $request->flvVideoSeekMode;
        }

        if (null !== $request->mp4SeekEnd) {
            @$query['Mp4SeekEnd'] = $request->mp4SeekEnd;
        }

        if (null !== $request->mp4SeekStart) {
            @$query['Mp4SeekStart'] = $request->mp4SeekStart;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        if (null !== $request->videoSeekEnable) {
            @$query['VideoSeekEnable'] = $request->videoSeekEnable;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVideoProcessing',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVideoProcessingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add video processing configurations for a website.
     *
     * @param Request - CreateVideoProcessingRequest
     *
     * @returns CreateVideoProcessingResponse
     *
     * @param CreateVideoProcessingRequest $request
     *
     * @return CreateVideoProcessingResponse
     */
    public function createVideoProcessing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVideoProcessingWithOptions($request, $runtime);
    }

    /**
     * Create WAF Rule.
     *
     * @param tmpReq - CreateWafRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWafRuleResponse
     *
     * @param CreateWafRuleRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateWafRuleResponse
     */
    public function createWafRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateWafRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->config) {
            $request->configShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }

        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $body = [];
        if (null !== $request->configShrink) {
            @$body['Config'] = $request->configShrink;
        }

        if (null !== $request->phase) {
            @$body['Phase'] = $request->phase;
        }

        if (null !== $request->rulesetId) {
            @$body['RulesetId'] = $request->rulesetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWafRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWafRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create WAF Rule.
     *
     * @param Request - CreateWafRuleRequest
     *
     * @returns CreateWafRuleResponse
     *
     * @param CreateWafRuleRequest $request
     *
     * @return CreateWafRuleResponse
     */
    public function createWafRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWafRuleWithOptions($request, $runtime);
    }

    /**
     * Create WAF Ruleset.
     *
     * @param Request - CreateWafRulesetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWafRulesetResponse
     *
     * @param CreateWafRulesetRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateWafRulesetResponse
     */
    public function createWafRulesetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->phase) {
            @$body['Phase'] = $request->phase;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWafRuleset',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWafRulesetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create WAF Ruleset.
     *
     * @param Request - CreateWafRulesetRequest
     *
     * @returns CreateWafRulesetResponse
     *
     * @param CreateWafRulesetRequest $request
     *
     * @return CreateWafRulesetResponse
     */
    public function createWafRuleset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWafRulesetWithOptions($request, $runtime);
    }

    /**
     * Creates a waiting room for a website.
     *
     * @param tmpReq - CreateWaitingRoomRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWaitingRoomResponse
     *
     * @param CreateWaitingRoomRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return CreateWaitingRoomResponse
     */
    public function createWaitingRoomWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateWaitingRoomShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->hostNameAndPath) {
            $request->hostNameAndPathShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->hostNameAndPath, 'HostNameAndPath', 'json');
        }

        $query = [];
        if (null !== $request->cookieName) {
            @$query['CookieName'] = $request->cookieName;
        }

        if (null !== $request->customPageHtml) {
            @$query['CustomPageHtml'] = $request->customPageHtml;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->disableSessionRenewalEnable) {
            @$query['DisableSessionRenewalEnable'] = $request->disableSessionRenewalEnable;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->hostNameAndPathShrink) {
            @$query['HostNameAndPath'] = $request->hostNameAndPathShrink;
        }

        if (null !== $request->jsonResponseEnable) {
            @$query['JsonResponseEnable'] = $request->jsonResponseEnable;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->newUsersPerMinute) {
            @$query['NewUsersPerMinute'] = $request->newUsersPerMinute;
        }

        if (null !== $request->queueAllEnable) {
            @$query['QueueAllEnable'] = $request->queueAllEnable;
        }

        if (null !== $request->queuingMethod) {
            @$query['QueuingMethod'] = $request->queuingMethod;
        }

        if (null !== $request->queuingStatusCode) {
            @$query['QueuingStatusCode'] = $request->queuingStatusCode;
        }

        if (null !== $request->sessionDuration) {
            @$query['SessionDuration'] = $request->sessionDuration;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->totalActiveUsers) {
            @$query['TotalActiveUsers'] = $request->totalActiveUsers;
        }

        if (null !== $request->waitingRoomType) {
            @$query['WaitingRoomType'] = $request->waitingRoomType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateWaitingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a waiting room for a website.
     *
     * @param Request - CreateWaitingRoomRequest
     *
     * @returns CreateWaitingRoomResponse
     *
     * @param CreateWaitingRoomRequest $request
     *
     * @return CreateWaitingRoomResponse
     */
    public function createWaitingRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWaitingRoomWithOptions($request, $runtime);
    }

    /**
     * Creates a waiting room event.
     *
     * @param Request - CreateWaitingRoomEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWaitingRoomEventResponse
     *
     * @param CreateWaitingRoomEventRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateWaitingRoomEventResponse
     */
    public function createWaitingRoomEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customPageHtml) {
            @$query['CustomPageHtml'] = $request->customPageHtml;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->disableSessionRenewalEnable) {
            @$query['DisableSessionRenewalEnable'] = $request->disableSessionRenewalEnable;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->jsonResponseEnable) {
            @$query['JsonResponseEnable'] = $request->jsonResponseEnable;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->newUsersPerMinute) {
            @$query['NewUsersPerMinute'] = $request->newUsersPerMinute;
        }

        if (null !== $request->preQueueEnable) {
            @$query['PreQueueEnable'] = $request->preQueueEnable;
        }

        if (null !== $request->preQueueStartTime) {
            @$query['PreQueueStartTime'] = $request->preQueueStartTime;
        }

        if (null !== $request->queuingMethod) {
            @$query['QueuingMethod'] = $request->queuingMethod;
        }

        if (null !== $request->queuingStatusCode) {
            @$query['QueuingStatusCode'] = $request->queuingStatusCode;
        }

        if (null !== $request->randomPreQueueEnable) {
            @$query['RandomPreQueueEnable'] = $request->randomPreQueueEnable;
        }

        if (null !== $request->sessionDuration) {
            @$query['SessionDuration'] = $request->sessionDuration;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->totalActiveUsers) {
            @$query['TotalActiveUsers'] = $request->totalActiveUsers;
        }

        if (null !== $request->waitingRoomId) {
            @$query['WaitingRoomId'] = $request->waitingRoomId;
        }

        if (null !== $request->waitingRoomType) {
            @$query['WaitingRoomType'] = $request->waitingRoomType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateWaitingRoomEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a waiting room event.
     *
     * @param Request - CreateWaitingRoomEventRequest
     *
     * @returns CreateWaitingRoomEventResponse
     *
     * @param CreateWaitingRoomEventRequest $request
     *
     * @return CreateWaitingRoomEventResponse
     */
    public function createWaitingRoomEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWaitingRoomEventWithOptions($request, $runtime);
    }

    /**
     * Create Waiting Room Rule.
     *
     * @param Request - CreateWaitingRoomRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWaitingRoomRuleResponse
     *
     * @param CreateWaitingRoomRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateWaitingRoomRuleResponse
     */
    public function createWaitingRoomRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->waitingRoomId) {
            @$query['WaitingRoomId'] = $request->waitingRoomId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return CreateWaitingRoomRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create Waiting Room Rule.
     *
     * @param Request - CreateWaitingRoomRuleRequest
     *
     * @returns CreateWaitingRoomRuleResponse
     *
     * @param CreateWaitingRoomRuleRequest $request
     *
     * @return CreateWaitingRoomRuleResponse
     */
    public function createWaitingRoomRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWaitingRoomRuleWithOptions($request, $runtime);
    }

    /**
     * Disables version management for a website.
     *
     * @remarks
     * You can disable version management only when the default environment and version 0 exist.
     *
     * @param Request - DeactivateVersionManagementRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeactivateVersionManagementResponse
     *
     * @param DeactivateVersionManagementRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeactivateVersionManagementResponse
     */
    public function deactivateVersionManagementWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeactivateVersionManagementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables version management for a website.
     *
     * @remarks
     * You can disable version management only when the default environment and version 0 exist.
     *
     * @param Request - DeactivateVersionManagementRequest
     *
     * @returns DeactivateVersionManagementResponse
     *
     * @param DeactivateVersionManagementRequest $request
     *
     * @return DeactivateVersionManagementResponse
     */
    public function deactivateVersionManagement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactivateVersionManagementWithOptions($request, $runtime);
    }

    /**
     * Delete Cache Configuration.
     *
     * @param Request - DeleteCacheRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCacheRuleResponse
     *
     * @param DeleteCacheRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteCacheRuleResponse
     */
    public function deleteCacheRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteCacheRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Cache Configuration.
     *
     * @param Request - DeleteCacheRuleRequest
     *
     * @returns DeleteCacheRuleResponse
     *
     * @param DeleteCacheRuleRequest $request
     *
     * @return DeleteCacheRuleResponse
     */
    public function deleteCacheRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCacheRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes a certificate for a website.
     *
     * @param Request - DeleteCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCertificateResponse
     *
     * @param DeleteCertificateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCertificateResponse
     */
    public function deleteCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a certificate for a website.
     *
     * @param Request - DeleteCertificateRequest
     *
     * @returns DeleteCertificateResponse
     *
     * @param DeleteCertificateRequest $request
     *
     * @return DeleteCertificateResponse
     */
    public function deleteCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCertificateWithOptions($request, $runtime);
    }

    /**
     * Deletes a client CA certificate.
     *
     * @param Request - DeleteClientCaCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClientCaCertificateResponse
     *
     * @param DeleteClientCaCertificateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteClientCaCertificateResponse
     */
    public function deleteClientCaCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteClientCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a client CA certificate.
     *
     * @param Request - DeleteClientCaCertificateRequest
     *
     * @returns DeleteClientCaCertificateResponse
     *
     * @param DeleteClientCaCertificateRequest $request
     *
     * @return DeleteClientCaCertificateResponse
     */
    public function deleteClientCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClientCaCertificateWithOptions($request, $runtime);
    }

    /**
     * Deletes a revoked client certificate.
     *
     * @param Request - DeleteClientCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClientCertificateResponse
     *
     * @param DeleteClientCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteClientCertificateResponse
     */
    public function deleteClientCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a revoked client certificate.
     *
     * @param Request - DeleteClientCertificateRequest
     *
     * @returns DeleteClientCertificateResponse
     *
     * @param DeleteClientCertificateRequest $request
     *
     * @return DeleteClientCertificateResponse
     */
    public function deleteClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClientCertificateWithOptions($request, $runtime);
    }

    /**
     * Delete compression rule.
     *
     * @param Request - DeleteCompressionRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCompressionRuleResponse
     *
     * @param DeleteCompressionRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteCompressionRuleResponse
     */
    public function deleteCompressionRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteCompressionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete compression rule.
     *
     * @param Request - DeleteCompressionRuleRequest
     *
     * @returns DeleteCompressionRuleResponse
     *
     * @param DeleteCompressionRuleRequest $request
     *
     * @return DeleteCompressionRuleResponse
     */
    public function deleteCompressionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCompressionRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes a scenario-specific custom policy.
     *
     * @param Request - DeleteCustomScenePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomScenePolicyResponse
     *
     * @param DeleteCustomScenePolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteCustomScenePolicyResponse
     */
    public function deleteCustomScenePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteCustomScenePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a scenario-specific custom policy.
     *
     * @param Request - DeleteCustomScenePolicyRequest
     *
     * @returns DeleteCustomScenePolicyResponse
     *
     * @param DeleteCustomScenePolicyRequest $request
     *
     * @return DeleteCustomScenePolicyResponse
     */
    public function deleteCustomScenePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomScenePolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes a containerized application.
     *
     * @param Request - DeleteEdgeContainerAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEdgeContainerAppResponse
     *
     * @param DeleteEdgeContainerAppRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteEdgeContainerAppResponse
     */
    public function deleteEdgeContainerAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteEdgeContainerAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a containerized application.
     *
     * @param Request - DeleteEdgeContainerAppRequest
     *
     * @returns DeleteEdgeContainerAppResponse
     *
     * @param DeleteEdgeContainerAppRequest $request
     *
     * @return DeleteEdgeContainerAppResponse
     */
    public function deleteEdgeContainerApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEdgeContainerAppWithOptions($request, $runtime);
    }

    /**
     * Disassociates a domain name from a containerized application. After the dissociation, you can no longer use the domain name to access the containerized application.
     *
     * @param Request - DeleteEdgeContainerAppRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEdgeContainerAppRecordResponse
     *
     * @param DeleteEdgeContainerAppRecordRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteEdgeContainerAppRecordResponse
     */
    public function deleteEdgeContainerAppRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->recordName) {
            @$body['RecordName'] = $request->recordName;
        }

        if (null !== $request->siteId) {
            @$body['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return DeleteEdgeContainerAppRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates a domain name from a containerized application. After the dissociation, you can no longer use the domain name to access the containerized application.
     *
     * @param Request - DeleteEdgeContainerAppRecordRequest
     *
     * @returns DeleteEdgeContainerAppRecordResponse
     *
     * @param DeleteEdgeContainerAppRecordRequest $request
     *
     * @return DeleteEdgeContainerAppRecordResponse
     */
    public function deleteEdgeContainerAppRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEdgeContainerAppRecordWithOptions($request, $runtime);
    }

    /**
     * Deletes a version of a containerized application.
     *
     * @param Request - DeleteEdgeContainerAppVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEdgeContainerAppVersionResponse
     *
     * @param DeleteEdgeContainerAppVersionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteEdgeContainerAppVersionResponse
     */
    public function deleteEdgeContainerAppVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteEdgeContainerAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a version of a containerized application.
     *
     * @param Request - DeleteEdgeContainerAppVersionRequest
     *
     * @returns DeleteEdgeContainerAppVersionResponse
     *
     * @param DeleteEdgeContainerAppVersionRequest $request
     *
     * @return DeleteEdgeContainerAppVersionResponse
     */
    public function deleteEdgeContainerAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEdgeContainerAppVersionWithOptions($request, $runtime);
    }

    /**
     * Deletes the configuration of modifying incoming HTTP request headers for a website.
     *
     * @param Request - DeleteHttpIncomingRequestHeaderModificationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHttpIncomingRequestHeaderModificationRuleResponse
     *
     * @param DeleteHttpIncomingRequestHeaderModificationRuleRequest $request
     * @param RuntimeOptions                                         $runtime
     *
     * @return DeleteHttpIncomingRequestHeaderModificationRuleResponse
     */
    public function deleteHttpIncomingRequestHeaderModificationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHttpIncomingRequestHeaderModificationRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHttpIncomingRequestHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the configuration of modifying incoming HTTP request headers for a website.
     *
     * @param Request - DeleteHttpIncomingRequestHeaderModificationRuleRequest
     *
     * @returns DeleteHttpIncomingRequestHeaderModificationRuleResponse
     *
     * @param DeleteHttpIncomingRequestHeaderModificationRuleRequest $request
     *
     * @return DeleteHttpIncomingRequestHeaderModificationRuleResponse
     */
    public function deleteHttpIncomingRequestHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHttpIncomingRequestHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes the configuration of modifying HTTP response headers for a website.
     *
     * @param Request - DeleteHttpIncomingResponseHeaderModificationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHttpIncomingResponseHeaderModificationRuleResponse
     *
     * @param DeleteHttpIncomingResponseHeaderModificationRuleRequest $request
     * @param RuntimeOptions                                          $runtime
     *
     * @return DeleteHttpIncomingResponseHeaderModificationRuleResponse
     */
    public function deleteHttpIncomingResponseHeaderModificationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHttpIncomingResponseHeaderModificationRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHttpIncomingResponseHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the configuration of modifying HTTP response headers for a website.
     *
     * @param Request - DeleteHttpIncomingResponseHeaderModificationRuleRequest
     *
     * @returns DeleteHttpIncomingResponseHeaderModificationRuleResponse
     *
     * @param DeleteHttpIncomingResponseHeaderModificationRuleRequest $request
     *
     * @return DeleteHttpIncomingResponseHeaderModificationRuleResponse
     */
    public function deleteHttpIncomingResponseHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHttpIncomingResponseHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes the configuration of modifying HTTP request headers for a website.
     *
     * @param Request - DeleteHttpRequestHeaderModificationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHttpRequestHeaderModificationRuleResponse
     *
     * @param DeleteHttpRequestHeaderModificationRuleRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DeleteHttpRequestHeaderModificationRuleResponse
     */
    public function deleteHttpRequestHeaderModificationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteHttpRequestHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the configuration of modifying HTTP request headers for a website.
     *
     * @param Request - DeleteHttpRequestHeaderModificationRuleRequest
     *
     * @returns DeleteHttpRequestHeaderModificationRuleResponse
     *
     * @param DeleteHttpRequestHeaderModificationRuleRequest $request
     *
     * @return DeleteHttpRequestHeaderModificationRuleResponse
     */
    public function deleteHttpRequestHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHttpRequestHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes the configuration of modifying HTTP response headers for a website.
     *
     * @param Request - DeleteHttpResponseHeaderModificationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHttpResponseHeaderModificationRuleResponse
     *
     * @param DeleteHttpResponseHeaderModificationRuleRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DeleteHttpResponseHeaderModificationRuleResponse
     */
    public function deleteHttpResponseHeaderModificationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteHttpResponseHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the configuration of modifying HTTP response headers for a website.
     *
     * @param Request - DeleteHttpResponseHeaderModificationRuleRequest
     *
     * @returns DeleteHttpResponseHeaderModificationRuleResponse
     *
     * @param DeleteHttpResponseHeaderModificationRuleRequest $request
     *
     * @return DeleteHttpResponseHeaderModificationRuleResponse
     */
    public function deleteHttpResponseHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHttpResponseHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * Delete HTTPS Application Configuration.
     *
     * @param Request - DeleteHttpsApplicationConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHttpsApplicationConfigurationResponse
     *
     * @param DeleteHttpsApplicationConfigurationRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DeleteHttpsApplicationConfigurationResponse
     */
    public function deleteHttpsApplicationConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteHttpsApplicationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete HTTPS Application Configuration.
     *
     * @param Request - DeleteHttpsApplicationConfigurationRequest
     *
     * @returns DeleteHttpsApplicationConfigurationResponse
     *
     * @param DeleteHttpsApplicationConfigurationRequest $request
     *
     * @return DeleteHttpsApplicationConfigurationResponse
     */
    public function deleteHttpsApplicationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHttpsApplicationConfigurationWithOptions($request, $runtime);
    }

    /**
     * Delete HTTPS Basic Configuration.
     *
     * @param Request - DeleteHttpsBasicConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHttpsBasicConfigurationResponse
     *
     * @param DeleteHttpsBasicConfigurationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteHttpsBasicConfigurationResponse
     */
    public function deleteHttpsBasicConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteHttpsBasicConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete HTTPS Basic Configuration.
     *
     * @param Request - DeleteHttpsBasicConfigurationRequest
     *
     * @returns DeleteHttpsBasicConfigurationResponse
     *
     * @param DeleteHttpsBasicConfigurationRequest $request
     *
     * @return DeleteHttpsBasicConfigurationResponse
     */
    public function deleteHttpsBasicConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHttpsBasicConfigurationWithOptions($request, $runtime);
    }

    /**
     * Delete Site Image Transformation Configuration.
     *
     * @param Request - DeleteImageTransformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteImageTransformResponse
     *
     * @param DeleteImageTransformRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteImageTransformResponse
     */
    public function deleteImageTransformWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteImageTransformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Site Image Transformation Configuration.
     *
     * @param Request - DeleteImageTransformRequest
     *
     * @returns DeleteImageTransformResponse
     *
     * @param DeleteImageTransformRequest $request
     *
     * @return DeleteImageTransformResponse
     */
    public function deleteImageTransform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageTransformWithOptions($request, $runtime);
    }

    /**
     * Deletes a key-value pair from a namespace.
     *
     * @param Request - DeleteKvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteKvResponse
     *
     * @param DeleteKvRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return DeleteKvResponse
     */
    public function deleteKvWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a key-value pair from a namespace.
     *
     * @param Request - DeleteKvRequest
     *
     * @returns DeleteKvResponse
     *
     * @param DeleteKvRequest $request
     *
     * @return DeleteKvResponse
     */
    public function deleteKv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKvWithOptions($request, $runtime);
    }

    /**
     * Deletes a namespace from an Alibaba Cloud account.
     *
     * @param Request - DeleteKvNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteKvNamespaceResponse
     *
     * @param DeleteKvNamespaceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteKvNamespaceResponse
     */
    public function deleteKvNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteKvNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a namespace from an Alibaba Cloud account.
     *
     * @param Request - DeleteKvNamespaceRequest
     *
     * @returns DeleteKvNamespaceResponse
     *
     * @param DeleteKvNamespaceRequest $request
     *
     * @return DeleteKvNamespaceResponse
     */
    public function deleteKvNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKvNamespaceWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom list that is no longer needed.
     *
     * @param Request - DeleteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteListResponse
     *
     * @param DeleteListRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteListResponse
     */
    public function deleteListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return DeleteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom list that is no longer needed.
     *
     * @param Request - DeleteListRequest
     *
     * @returns DeleteListResponse
     *
     * @param DeleteListRequest $request
     *
     * @return DeleteListResponse
     */
    public function deleteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteListWithOptions($request, $runtime);
    }

    /**
     * Delete Load Balancer.
     *
     * @remarks
     * Delete a load balancer by its ID, only one can be deleted at a time.
     *
     * @param Request - DeleteLoadBalancerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLoadBalancerResponse
     *
     * @param DeleteLoadBalancerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Load Balancer.
     *
     * @remarks
     * Delete a load balancer by its ID, only one can be deleted at a time.
     *
     * @param Request - DeleteLoadBalancerRequest
     *
     * @returns DeleteLoadBalancerResponse
     *
     * @param DeleteLoadBalancerRequest $request
     *
     * @return DeleteLoadBalancerResponse
     */
    public function deleteLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * Delete Network Optimization Configuration.
     *
     * @param Request - DeleteNetworkOptimizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNetworkOptimizationResponse
     *
     * @param DeleteNetworkOptimizationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteNetworkOptimizationResponse
     */
    public function deleteNetworkOptimizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteNetworkOptimizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Network Optimization Configuration.
     *
     * @param Request - DeleteNetworkOptimizationRequest
     *
     * @returns DeleteNetworkOptimizationResponse
     *
     * @param DeleteNetworkOptimizationRequest $request
     *
     * @return DeleteNetworkOptimizationResponse
     */
    public function deleteNetworkOptimization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkOptimizationWithOptions($request, $runtime);
    }

    /**
     * 删除源服务器CA证书.
     *
     * @param Request - DeleteOriginCaCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOriginCaCertificateResponse
     *
     * @param DeleteOriginCaCertificateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteOriginCaCertificateResponse
     */
    public function deleteOriginCaCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteOriginCaCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOriginCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除源服务器CA证书.
     *
     * @param Request - DeleteOriginCaCertificateRequest
     *
     * @returns DeleteOriginCaCertificateResponse
     *
     * @param DeleteOriginCaCertificateRequest $request
     *
     * @return DeleteOriginCaCertificateResponse
     */
    public function deleteOriginCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOriginCaCertificateWithOptions($request, $runtime);
    }

    /**
     * 删除域名回源客户端证书.
     *
     * @param Request - DeleteOriginClientCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOriginClientCertificateResponse
     *
     * @param DeleteOriginClientCertificateRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteOriginClientCertificateResponse
     */
    public function deleteOriginClientCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteOriginClientCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOriginClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除域名回源客户端证书.
     *
     * @param Request - DeleteOriginClientCertificateRequest
     *
     * @returns DeleteOriginClientCertificateResponse
     *
     * @param DeleteOriginClientCertificateRequest $request
     *
     * @return DeleteOriginClientCertificateResponse
     */
    public function deleteOriginClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOriginClientCertificateWithOptions($request, $runtime);
    }

    /**
     * Delete Origin Address Pool.
     *
     * @param Request - DeleteOriginPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOriginPoolResponse
     *
     * @param DeleteOriginPoolRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteOriginPoolResponse
     */
    public function deleteOriginPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteOriginPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Origin Address Pool.
     *
     * @param Request - DeleteOriginPoolRequest
     *
     * @returns DeleteOriginPoolResponse
     *
     * @param DeleteOriginPoolRequest $request
     *
     * @return DeleteOriginPoolResponse
     */
    public function deleteOriginPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOriginPoolWithOptions($request, $runtime);
    }

    /**
     * Disables origin protection.
     *
     * @param Request - DeleteOriginProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOriginProtectionResponse
     *
     * @param DeleteOriginProtectionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteOriginProtectionResponse
     */
    public function deleteOriginProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteOriginProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables origin protection.
     *
     * @param Request - DeleteOriginProtectionRequest
     *
     * @returns DeleteOriginProtectionResponse
     *
     * @param DeleteOriginProtectionRequest $request
     *
     * @return DeleteOriginProtectionResponse
     */
    public function deleteOriginProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOriginProtectionWithOptions($request, $runtime);
    }

    /**
     * Delete Origin Rule Configuration.
     *
     * @param Request - DeleteOriginRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOriginRuleResponse
     *
     * @param DeleteOriginRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteOriginRuleResponse
     */
    public function deleteOriginRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteOriginRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Origin Rule Configuration.
     *
     * @param Request - DeleteOriginRuleRequest
     *
     * @returns DeleteOriginRuleResponse
     *
     * @param DeleteOriginRuleRequest $request
     *
     * @return DeleteOriginRuleResponse
     */
    public function deleteOriginRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOriginRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom error page that is no longer needed.
     *
     * @param Request - DeletePageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePageResponse
     *
     * @param DeletePageRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeletePageResponse
     */
    public function deletePageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return DeletePageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom error page that is no longer needed.
     *
     * @param Request - DeletePageRequest
     *
     * @returns DeletePageResponse
     *
     * @param DeletePageRequest $request
     *
     * @return DeletePageResponse
     */
    public function deletePage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePageWithOptions($request, $runtime);
    }

    /**
     * Deletes a DNS record of a website based on the specified RecordId.
     *
     * @param Request - DeleteRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRecordResponse
     *
     * @param DeleteRecordRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteRecordResponse
     */
    public function deleteRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a DNS record of a website based on the specified RecordId.
     *
     * @param Request - DeleteRecordRequest
     *
     * @returns DeleteRecordResponse
     *
     * @param DeleteRecordRequest $request
     *
     * @return DeleteRecordResponse
     */
    public function deleteRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRecordWithOptions($request, $runtime);
    }

    /**
     * Deletes a URL redirect rule for a website.
     *
     * @param Request - DeleteRedirectRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRedirectRuleResponse
     *
     * @param DeleteRedirectRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteRedirectRuleResponse
     */
    public function deleteRedirectRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteRedirectRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a URL redirect rule for a website.
     *
     * @param Request - DeleteRedirectRuleRequest
     *
     * @returns DeleteRedirectRuleResponse
     *
     * @param DeleteRedirectRuleRequest $request
     *
     * @return DeleteRedirectRuleResponse
     */
    public function deleteRedirectRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRedirectRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes a URL rewrite rule for a website.
     *
     * @param Request - DeleteRewriteUrlRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRewriteUrlRuleResponse
     *
     * @param DeleteRewriteUrlRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteRewriteUrlRuleResponse
     */
    public function deleteRewriteUrlRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteRewriteUrlRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a URL rewrite rule for a website.
     *
     * @param Request - DeleteRewriteUrlRuleRequest
     *
     * @returns DeleteRewriteUrlRuleResponse
     *
     * @param DeleteRewriteUrlRuleRequest $request
     *
     * @return DeleteRewriteUrlRuleResponse
     */
    public function deleteRewriteUrlRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRewriteUrlRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes a routine in Edge Routine.
     *
     * @param Request - DeleteRoutineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRoutineResponse
     *
     * @param DeleteRoutineRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteRoutineResponse
     */
    public function deleteRoutineWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return DeleteRoutineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a routine in Edge Routine.
     *
     * @param Request - DeleteRoutineRequest
     *
     * @returns DeleteRoutineResponse
     *
     * @param DeleteRoutineRequest $request
     *
     * @return DeleteRoutineResponse
     */
    public function deleteRoutine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoutineWithOptions($request, $runtime);
    }

    /**
     * Deletes a code version of a routine.
     *
     * @param Request - DeleteRoutineCodeVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRoutineCodeVersionResponse
     *
     * @param DeleteRoutineCodeVersionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteRoutineCodeVersionResponse
     */
    public function deleteRoutineCodeVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->codeVersion) {
            @$body['CodeVersion'] = $request->codeVersion;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return DeleteRoutineCodeVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a code version of a routine.
     *
     * @param Request - DeleteRoutineCodeVersionRequest
     *
     * @returns DeleteRoutineCodeVersionResponse
     *
     * @param DeleteRoutineCodeVersionRequest $request
     *
     * @return DeleteRoutineCodeVersionResponse
     */
    public function deleteRoutineCodeVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoutineCodeVersionWithOptions($request, $runtime);
    }

    /**
     * Deletes a record that is associated with a routine.
     *
     * @param Request - DeleteRoutineRelatedRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRoutineRelatedRecordResponse
     *
     * @param DeleteRoutineRelatedRecordRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteRoutineRelatedRecordResponse
     */
    public function deleteRoutineRelatedRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->recordId) {
            @$body['RecordId'] = $request->recordId;
        }

        if (null !== $request->recordName) {
            @$body['RecordName'] = $request->recordName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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

        return DeleteRoutineRelatedRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a record that is associated with a routine.
     *
     * @param Request - DeleteRoutineRelatedRecordRequest
     *
     * @returns DeleteRoutineRelatedRecordResponse
     *
     * @param DeleteRoutineRelatedRecordRequest $request
     *
     * @return DeleteRoutineRelatedRecordResponse
     */
    public function deleteRoutineRelatedRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoutineRelatedRecordWithOptions($request, $runtime);
    }

    /**
     * Deletes the route configuration of an edge function.
     *
     * @param Request - DeleteRoutineRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRoutineRouteResponse
     *
     * @param DeleteRoutineRouteRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteRoutineRouteResponse
     */
    public function deleteRoutineRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRoutineRoute',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRoutineRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the route configuration of an edge function.
     *
     * @param Request - DeleteRoutineRouteRequest
     *
     * @returns DeleteRoutineRouteResponse
     *
     * @param DeleteRoutineRouteRequest $request
     *
     * @return DeleteRoutineRouteResponse
     */
    public function deleteRoutineRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRoutineRouteWithOptions($request, $runtime);
    }

    /**
     * Deletes a scheduled prefetch plan based on the plan ID.
     *
     * @param Request - DeleteScheduledPreloadExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScheduledPreloadExecutionResponse
     *
     * @param DeleteScheduledPreloadExecutionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteScheduledPreloadExecutionResponse
     */
    public function deleteScheduledPreloadExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteScheduledPreloadExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a scheduled prefetch plan based on the plan ID.
     *
     * @param Request - DeleteScheduledPreloadExecutionRequest
     *
     * @returns DeleteScheduledPreloadExecutionResponse
     *
     * @param DeleteScheduledPreloadExecutionRequest $request
     *
     * @return DeleteScheduledPreloadExecutionResponse
     */
    public function deleteScheduledPreloadExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScheduledPreloadExecutionWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified scheduled prefetch task based on the task ID.
     *
     * @param Request - DeleteScheduledPreloadJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScheduledPreloadJobResponse
     *
     * @param DeleteScheduledPreloadJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteScheduledPreloadJobResponse
     */
    public function deleteScheduledPreloadJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteScheduledPreloadJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified scheduled prefetch task based on the task ID.
     *
     * @param Request - DeleteScheduledPreloadJobRequest
     *
     * @returns DeleteScheduledPreloadJobResponse
     *
     * @param DeleteScheduledPreloadJobRequest $request
     *
     * @return DeleteScheduledPreloadJobResponse
     */
    public function deleteScheduledPreloadJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScheduledPreloadJobWithOptions($request, $runtime);
    }

    /**
     * Deletes a website based on the specified website ID.
     *
     * @param Request - DeleteSiteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSiteResponse
     *
     * @param DeleteSiteRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteSiteResponse
     */
    public function deleteSiteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteSiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a website based on the specified website ID.
     *
     * @param Request - DeleteSiteRequest
     *
     * @returns DeleteSiteResponse
     *
     * @param DeleteSiteRequest $request
     *
     * @return DeleteSiteResponse
     */
    public function deleteSite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSiteWithOptions($request, $runtime);
    }

    /**
     * Deletes a real-time log delivery task.
     *
     * @param Request - DeleteSiteDeliveryTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSiteDeliveryTaskResponse
     *
     * @param DeleteSiteDeliveryTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteSiteDeliveryTaskResponse
     */
    public function deleteSiteDeliveryTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->siteId) {
            @$body['SiteId'] = $request->siteId;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return DeleteSiteDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a real-time log delivery task.
     *
     * @param Request - DeleteSiteDeliveryTaskRequest
     *
     * @returns DeleteSiteDeliveryTaskResponse
     *
     * @param DeleteSiteDeliveryTaskRequest $request
     *
     * @return DeleteSiteDeliveryTaskResponse
     */
    public function deleteSiteDeliveryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSiteDeliveryTaskWithOptions($request, $runtime);
    }

    /**
     * 删除站点回源客户端证书.
     *
     * @param Request - DeleteSiteOriginClientCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSiteOriginClientCertificateResponse
     *
     * @param DeleteSiteOriginClientCertificateRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DeleteSiteOriginClientCertificateResponse
     */
    public function deleteSiteOriginClientCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSiteOriginClientCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSiteOriginClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除站点回源客户端证书.
     *
     * @param Request - DeleteSiteOriginClientCertificateRequest
     *
     * @returns DeleteSiteOriginClientCertificateResponse
     *
     * @param DeleteSiteOriginClientCertificateRequest $request
     *
     * @return DeleteSiteOriginClientCertificateResponse
     */
    public function deleteSiteOriginClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSiteOriginClientCertificateWithOptions($request, $runtime);
    }

    /**
     * Delete Transport Layer Application.
     *
     * @param Request - DeleteTransportLayerApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTransportLayerApplicationResponse
     *
     * @param DeleteTransportLayerApplicationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteTransportLayerApplicationResponse
     */
    public function deleteTransportLayerApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTransportLayerApplication',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTransportLayerApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete Transport Layer Application.
     *
     * @param Request - DeleteTransportLayerApplicationRequest
     *
     * @returns DeleteTransportLayerApplicationResponse
     *
     * @param DeleteTransportLayerApplicationRequest $request
     *
     * @return DeleteTransportLayerApplicationResponse
     */
    public function deleteTransportLayerApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTransportLayerApplicationWithOptions($request, $runtime);
    }

    /**
     * Deletes page monitoring configurations.
     *
     * @param Request - DeleteUrlObservationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUrlObservationResponse
     *
     * @param DeleteUrlObservationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteUrlObservationResponse
     */
    public function deleteUrlObservationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteUrlObservation',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteUrlObservationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes page monitoring configurations.
     *
     * @param Request - DeleteUrlObservationRequest
     *
     * @returns DeleteUrlObservationResponse
     *
     * @param DeleteUrlObservationRequest $request
     *
     * @return DeleteUrlObservationResponse
     */
    public function deleteUrlObservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUrlObservationWithOptions($request, $runtime);
    }

    /**
     * Deletes a log delivery task from your Alibaba Cloud account.
     *
     * @remarks
     * *****>
     * *   Deleted tasks cannot be restored. Proceed with caution.
     * *   To call this operation, you must have an account that has the required permissions.
     * *   The returned `RequestId` value can be used to track the request processing progress and troubleshoot issues.
     *
     * @param Request - DeleteUserDeliveryTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteUserDeliveryTaskResponse
     *
     * @param DeleteUserDeliveryTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteUserDeliveryTaskResponse
     */
    public function deleteUserDeliveryTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return DeleteUserDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a log delivery task from your Alibaba Cloud account.
     *
     * @remarks
     * *****>
     * *   Deleted tasks cannot be restored. Proceed with caution.
     * *   To call this operation, you must have an account that has the required permissions.
     * *   The returned `RequestId` value can be used to track the request processing progress and troubleshoot issues.
     *
     * @param Request - DeleteUserDeliveryTaskRequest
     *
     * @returns DeleteUserDeliveryTaskResponse
     *
     * @param DeleteUserDeliveryTaskRequest $request
     *
     * @return DeleteUserDeliveryTaskResponse
     */
    public function deleteUserDeliveryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserDeliveryTaskWithOptions($request, $runtime);
    }

    /**
     * Deletes a video processing configuration.
     *
     * @param Request - DeleteVideoProcessingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVideoProcessingResponse
     *
     * @param DeleteVideoProcessingRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteVideoProcessingResponse
     */
    public function deleteVideoProcessingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVideoProcessing',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVideoProcessingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a video processing configuration.
     *
     * @param Request - DeleteVideoProcessingRequest
     *
     * @returns DeleteVideoProcessingResponse
     *
     * @param DeleteVideoProcessingRequest $request
     *
     * @return DeleteVideoProcessingResponse
     */
    public function deleteVideoProcessing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVideoProcessingWithOptions($request, $runtime);
    }

    /**
     * Delete WAF Rule.
     *
     * @param Request - DeleteWafRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWafRuleResponse
     *
     * @param DeleteWafRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteWafRuleResponse
     */
    public function deleteWafRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteWafRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWafRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete WAF Rule.
     *
     * @param Request - DeleteWafRuleRequest
     *
     * @returns DeleteWafRuleResponse
     *
     * @param DeleteWafRuleRequest $request
     *
     * @return DeleteWafRuleResponse
     */
    public function deleteWafRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWafRuleWithOptions($request, $runtime);
    }

    /**
     * Delete WAF Ruleset.
     *
     * @param Request - DeleteWafRulesetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWafRulesetResponse
     *
     * @param DeleteWafRulesetRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteWafRulesetResponse
     */
    public function deleteWafRulesetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteWafRuleset',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWafRulesetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete WAF Ruleset.
     *
     * @param Request - DeleteWafRulesetRequest
     *
     * @returns DeleteWafRulesetResponse
     *
     * @param DeleteWafRulesetRequest $request
     *
     * @return DeleteWafRulesetResponse
     */
    public function deleteWafRuleset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWafRulesetWithOptions($request, $runtime);
    }

    /**
     * Deletes a waiting room.
     *
     * @param Request - DeleteWaitingRoomRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWaitingRoomResponse
     *
     * @param DeleteWaitingRoomRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteWaitingRoomResponse
     */
    public function deleteWaitingRoomWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->waitingRoomId) {
            @$query['WaitingRoomId'] = $request->waitingRoomId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteWaitingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a waiting room.
     *
     * @param Request - DeleteWaitingRoomRequest
     *
     * @returns DeleteWaitingRoomResponse
     *
     * @param DeleteWaitingRoomRequest $request
     *
     * @return DeleteWaitingRoomResponse
     */
    public function deleteWaitingRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWaitingRoomWithOptions($request, $runtime);
    }

    /**
     * Deletes a waiting room event.
     *
     * @param Request - DeleteWaitingRoomEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWaitingRoomEventResponse
     *
     * @param DeleteWaitingRoomEventRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteWaitingRoomEventResponse
     */
    public function deleteWaitingRoomEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->waitingRoomEventId) {
            @$query['WaitingRoomEventId'] = $request->waitingRoomEventId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteWaitingRoomEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a waiting room event.
     *
     * @param Request - DeleteWaitingRoomEventRequest
     *
     * @returns DeleteWaitingRoomEventResponse
     *
     * @param DeleteWaitingRoomEventRequest $request
     *
     * @return DeleteWaitingRoomEventResponse
     */
    public function deleteWaitingRoomEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWaitingRoomEventWithOptions($request, $runtime);
    }

    /**
     * Deletes a waiting room bypass rule.
     *
     * @param Request - DeleteWaitingRoomRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWaitingRoomRuleResponse
     *
     * @param DeleteWaitingRoomRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteWaitingRoomRuleResponse
     */
    public function deleteWaitingRoomRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->waitingRoomRuleId) {
            @$query['WaitingRoomRuleId'] = $request->waitingRoomRuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DeleteWaitingRoomRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a waiting room bypass rule.
     *
     * @param Request - DeleteWaitingRoomRuleRequest
     *
     * @returns DeleteWaitingRoomRuleResponse
     *
     * @param DeleteWaitingRoomRuleRequest $request
     *
     * @return DeleteWaitingRoomRuleResponse
     */
    public function deleteWaitingRoomRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWaitingRoomRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of a scenario-specific policy.
     *
     * @param Request - DescribeCustomScenePoliciesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomScenePoliciesResponse
     *
     * @param DescribeCustomScenePoliciesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCustomScenePoliciesResponse
     */
    public function describeCustomScenePoliciesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DescribeCustomScenePoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a scenario-specific policy.
     *
     * @param Request - DescribeCustomScenePoliciesRequest
     *
     * @returns DescribeCustomScenePoliciesResponse
     *
     * @param DescribeCustomScenePoliciesRequest $request
     *
     * @return DescribeCustomScenePoliciesResponse
     */
    public function describeCustomScenePolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomScenePoliciesWithOptions($request, $runtime);
    }

    /**
     * Queries DDoS attack events.
     *
     * @param Request - DescribeDDoSAllEventListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDDoSAllEventListResponse
     *
     * @param DescribeDDoSAllEventListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDDoSAllEventListResponse
     */
    public function describeDDoSAllEventListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DescribeDDoSAllEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries DDoS attack events.
     *
     * @param Request - DescribeDDoSAllEventListRequest
     *
     * @returns DescribeDDoSAllEventListResponse
     *
     * @param DescribeDDoSAllEventListRequest $request
     *
     * @return DescribeDDoSAllEventListResponse
     */
    public function describeDDoSAllEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDoSAllEventListWithOptions($request, $runtime);
    }

    /**
     * Query DCDN DDoS user bps and pps data.
     *
     * @param Request - DescribeDDoSBpsListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDDoSBpsListResponse
     *
     * @param DescribeDDoSBpsListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDDoSBpsListResponse
     */
    public function describeDDoSBpsListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DescribeDDoSBpsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query DCDN DDoS user bps and pps data.
     *
     * @param Request - DescribeDDoSBpsListRequest
     *
     * @returns DescribeDDoSBpsListResponse
     *
     * @param DescribeDDoSBpsListRequest $request
     *
     * @return DescribeDDoSBpsListResponse
     */
    public function describeDDoSBpsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDoSBpsListWithOptions($request, $runtime);
    }

    /**
     * DDoS Analysis Layer 7 QPS Trend Chart API.
     *
     * @param Request - DescribeDDoSL7QpsListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDDoSL7QpsListResponse
     *
     * @param DescribeDDoSL7QpsListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDDoSL7QpsListResponse
     */
    public function describeDDoSL7QpsListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DescribeDDoSL7QpsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DDoS Analysis Layer 7 QPS Trend Chart API.
     *
     * @param Request - DescribeDDoSL7QpsListRequest
     *
     * @returns DescribeDDoSL7QpsListResponse
     *
     * @param DescribeDDoSL7QpsListRequest $request
     *
     * @return DescribeDDoSL7QpsListResponse
     */
    public function describeDDoSL7QpsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDDoSL7QpsListWithOptions($request, $runtime);
    }

    /**
     * Provides monitoring data for metrics of ESA edge containers.
     *
     * @param Request - DescribeEdgeContainerAppStatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEdgeContainerAppStatsResponse
     *
     * @param DescribeEdgeContainerAppStatsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeEdgeContainerAppStatsResponse
     */
    public function describeEdgeContainerAppStatsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DescribeEdgeContainerAppStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides monitoring data for metrics of ESA edge containers.
     *
     * @param Request - DescribeEdgeContainerAppStatsRequest
     *
     * @returns DescribeEdgeContainerAppStatsResponse
     *
     * @param DescribeEdgeContainerAppStatsRequest $request
     *
     * @return DescribeEdgeContainerAppStatsResponse
     */
    public function describeEdgeContainerAppStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEdgeContainerAppStatsWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration of smart HTTP DDoS protection for a website.
     *
     * @param Request - DescribeHttpDDoSAttackIntelligentProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHttpDDoSAttackIntelligentProtectionResponse
     *
     * @param DescribeHttpDDoSAttackIntelligentProtectionRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return DescribeHttpDDoSAttackIntelligentProtectionResponse
     */
    public function describeHttpDDoSAttackIntelligentProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DescribeHttpDDoSAttackIntelligentProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration of smart HTTP DDoS protection for a website.
     *
     * @param Request - DescribeHttpDDoSAttackIntelligentProtectionRequest
     *
     * @returns DescribeHttpDDoSAttackIntelligentProtectionResponse
     *
     * @param DescribeHttpDDoSAttackIntelligentProtectionRequest $request
     *
     * @return DescribeHttpDDoSAttackIntelligentProtectionResponse
     */
    public function describeHttpDDoSAttackIntelligentProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHttpDDoSAttackIntelligentProtectionWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of HTTP DDoS attack protection.
     *
     * @param Request - DescribeHttpDDoSAttackProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHttpDDoSAttackProtectionResponse
     *
     * @param DescribeHttpDDoSAttackProtectionRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeHttpDDoSAttackProtectionResponse
     */
    public function describeHttpDDoSAttackProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DescribeHttpDDoSAttackProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of HTTP DDoS attack protection.
     *
     * @param Request - DescribeHttpDDoSAttackProtectionRequest
     *
     * @returns DescribeHttpDDoSAttackProtectionResponse
     *
     * @param DescribeHttpDDoSAttackProtectionRequest $request
     *
     * @return DescribeHttpDDoSAttackProtectionResponse
     */
    public function describeHttpDDoSAttackProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHttpDDoSAttackProtectionWithOptions($request, $runtime);
    }

    /**
     * Queries whether Edge KV is activated in your Alibaba Cloud account.
     *
     * @param Request - DescribeKvAccountStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeKvAccountStatusResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeKvAccountStatusResponse
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

        return DescribeKvAccountStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether Edge KV is activated in your Alibaba Cloud account.
     *
     * @returns DescribeKvAccountStatusResponse
     *
     * @return DescribeKvAccountStatusResponse
     */
    public function describeKvAccountStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKvAccountStatusWithOptions($runtime);
    }

    /**
     * Queries the details of prefetch tasks by time, task status, or prefetch URL.
     *
     * @param Request - DescribePreloadTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePreloadTasksResponse
     *
     * @param DescribePreloadTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePreloadTasksResponse
     */
    public function describePreloadTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DescribePreloadTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of prefetch tasks by time, task status, or prefetch URL.
     *
     * @param Request - DescribePreloadTasksRequest
     *
     * @returns DescribePreloadTasksResponse
     *
     * @param DescribePreloadTasksRequest $request
     *
     * @return DescribePreloadTasksResponse
     */
    public function describePreloadTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePreloadTasksWithOptions($request, $runtime);
    }

    /**
     * Queries the details of purge tasks.
     *
     * @param Request - DescribePurgeTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePurgeTasksResponse
     *
     * @param DescribePurgeTasksRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribePurgeTasksResponse
     */
    public function describePurgeTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DescribePurgeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of purge tasks.
     *
     * @param Request - DescribePurgeTasksRequest
     *
     * @returns DescribePurgeTasksResponse
     *
     * @param DescribePurgeTasksRequest $request
     *
     * @return DescribePurgeTasksResponse
     */
    public function describePurgeTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurgeTasksWithOptions($request, $runtime);
    }

    /**
     * Queries the status of an instance that uses a plan.
     *
     * @remarks
     * You can query the status of an instance after you purchase a plan for the instance.
     *
     * @param Request - DescribeRatePlanInstanceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRatePlanInstanceStatusResponse
     *
     * @param DescribeRatePlanInstanceStatusRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeRatePlanInstanceStatusResponse
     */
    public function describeRatePlanInstanceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DescribeRatePlanInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of an instance that uses a plan.
     *
     * @remarks
     * You can query the status of an instance after you purchase a plan for the instance.
     *
     * @param Request - DescribeRatePlanInstanceStatusRequest
     *
     * @returns DescribeRatePlanInstanceStatusResponse
     *
     * @param DescribeRatePlanInstanceStatusRequest $request
     *
     * @return DescribeRatePlanInstanceStatusResponse
     */
    public function describeRatePlanInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRatePlanInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the URLs from which you can download the raw access logs of a website.
     *
     * @remarks
     *   If you do not specify StartTime or EndTime, the log data generated in the last 24 hours is queried. If you specify StartTime and EndTime, the log data generated within the specified time range is queried.
     * *   The log data is collected every hour.
     * *   You can call this operation up to 50 times per second per account.
     * *   You can query only logs in the last month. The time range cannot exceed 31 days.
     *
     * @param Request - DescribeSiteLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSiteLogsResponse
     *
     * @param DescribeSiteLogsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeSiteLogsResponse
     */
    public function describeSiteLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSiteLogs',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSiteLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the URLs from which you can download the raw access logs of a website.
     *
     * @remarks
     *   If you do not specify StartTime or EndTime, the log data generated in the last 24 hours is queried. If you specify StartTime and EndTime, the log data generated within the specified time range is queried.
     * *   The log data is collected every hour.
     * *   You can call this operation up to 50 times per second per account.
     * *   You can query only logs in the last month. The time range cannot exceed 31 days.
     *
     * @param Request - DescribeSiteLogsRequest
     *
     * @returns DescribeSiteLogsResponse
     *
     * @param DescribeSiteLogsRequest $request
     *
     * @return DescribeSiteLogsResponse
     */
    public function describeSiteLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteLogsWithOptions($request, $runtime);
    }

    /**
     * Query traffic analysis time series data.
     *
     * @remarks
     * - If you do not specify `StartTime` and `EndTime`, the API returns data for the past 24 hours; if you specify `StartTime` and `EndTime`, the API returns data for the specified time period.
     * - The API returns different time granularities based on the span between `StartTime` and `EndTime`.
     *   * For a span of 3 hours or less, it returns 1-minute granularity data.
     *   * For a span greater than 3 hours but no more than 12 hours, it returns 5-minute granularity data.
     *   * For a span greater than 12 hours but no more than 1 day, it returns 15-minute granularity data.
     *   * For a span greater than 1 day but no more than 10 days, it returns hourly granularity data.
     *   * For a span greater than 10 days but no more than 31 days, it returns daily granularity data.
     * - Due to the high number of accesses during the query period, the data analysis may be sampled.
     *
     * @param tmpReq - DescribeSiteTimeSeriesDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSiteTimeSeriesDataResponse
     *
     * @param DescribeSiteTimeSeriesDataRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSiteTimeSeriesDataResponse
     */
    public function describeSiteTimeSeriesDataWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeSiteTimeSeriesDataShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->fields) {
            $request->fieldsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fields, 'Fields', 'json');
        }

        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->fieldsShrink) {
            @$query['Fields'] = $request->fieldsShrink;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSiteTimeSeriesData',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSiteTimeSeriesDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query traffic analysis time series data.
     *
     * @remarks
     * - If you do not specify `StartTime` and `EndTime`, the API returns data for the past 24 hours; if you specify `StartTime` and `EndTime`, the API returns data for the specified time period.
     * - The API returns different time granularities based on the span between `StartTime` and `EndTime`.
     *   * For a span of 3 hours or less, it returns 1-minute granularity data.
     *   * For a span greater than 3 hours but no more than 12 hours, it returns 5-minute granularity data.
     *   * For a span greater than 12 hours but no more than 1 day, it returns 15-minute granularity data.
     *   * For a span greater than 1 day but no more than 10 days, it returns hourly granularity data.
     *   * For a span greater than 10 days but no more than 31 days, it returns daily granularity data.
     * - Due to the high number of accesses during the query period, the data analysis may be sampled.
     *
     * @param Request - DescribeSiteTimeSeriesDataRequest
     *
     * @returns DescribeSiteTimeSeriesDataResponse
     *
     * @param DescribeSiteTimeSeriesDataRequest $request
     *
     * @return DescribeSiteTimeSeriesDataResponse
     */
    public function describeSiteTimeSeriesData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteTimeSeriesDataWithOptions($request, $runtime);
    }

    /**
     * Queries the top-ranking records in a traffic analytics report by website or Alibaba Cloud account.
     *
     * @remarks
     *   If you do not specify the StartTime or EndTime parameter, the request returns the data collected in the previous 24 hours. If you specify both parameters, the request returns the data collected within the specified time range.
     *
     * @param tmpReq - DescribeSiteTopDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSiteTopDataResponse
     *
     * @param DescribeSiteTopDataRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSiteTopDataResponse
     */
    public function describeSiteTopDataWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeSiteTopDataShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->fields) {
            $request->fieldsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fields, 'Fields', 'json');
        }

        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->fieldsShrink) {
            @$query['Fields'] = $request->fieldsShrink;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSiteTopData',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSiteTopDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the top-ranking records in a traffic analytics report by website or Alibaba Cloud account.
     *
     * @remarks
     *   If you do not specify the StartTime or EndTime parameter, the request returns the data collected in the previous 24 hours. If you specify both parameters, the request returns the data collected within the specified time range.
     *
     * @param Request - DescribeSiteTopDataRequest
     *
     * @returns DescribeSiteTopDataResponse
     *
     * @param DescribeSiteTopDataRequest $request
     *
     * @return DescribeSiteTopDataResponse
     */
    public function describeSiteTopData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSiteTopDataWithOptions($request, $runtime);
    }

    /**
     * Queries the page monitoring data.
     *
     * @remarks
     * If you do not specify the StartTime or EndTime parameter, this operation returns the data collected within the last 24 hours. If you specify both parameters, this operation returns the data collected within the specified time range.
     *
     * @param Request - DescribeUrlObservationDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUrlObservationDataResponse
     *
     * @param DescribeUrlObservationDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeUrlObservationDataResponse
     */
    public function describeUrlObservationDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientPlatform) {
            @$query['ClientPlatform'] = $request->clientPlatform;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->metric) {
            @$query['Metric'] = $request->metric;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUrlObservationData',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUrlObservationDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the page monitoring data.
     *
     * @remarks
     * If you do not specify the StartTime or EndTime parameter, this operation returns the data collected within the last 24 hours. If you specify both parameters, this operation returns the data collected within the specified time range.
     *
     * @param Request - DescribeUrlObservationDataRequest
     *
     * @returns DescribeUrlObservationDataResponse
     *
     * @param DescribeUrlObservationDataRequest $request
     *
     * @return DescribeUrlObservationDataResponse
     */
    public function describeUrlObservationData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUrlObservationDataWithOptions($request, $runtime);
    }

    /**
     * Disables a scenario-specific policy.
     *
     * @param Request - DisableCustomScenePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableCustomScenePolicyResponse
     *
     * @param DisableCustomScenePolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DisableCustomScenePolicyResponse
     */
    public function disableCustomScenePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return DisableCustomScenePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a scenario-specific policy.
     *
     * @param Request - DisableCustomScenePolicyRequest
     *
     * @returns DisableCustomScenePolicyResponse
     *
     * @param DisableCustomScenePolicyRequest $request
     *
     * @return DisableCustomScenePolicyResponse
     */
    public function disableCustomScenePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableCustomScenePolicyWithOptions($request, $runtime);
    }

    /**
     * Edit WAF Configuration for a Site.
     *
     * @param tmpReq - EditSiteWafSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EditSiteWafSettingsResponse
     *
     * @param EditSiteWafSettingsRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return EditSiteWafSettingsResponse
     */
    public function editSiteWafSettingsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new EditSiteWafSettingsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->settings) {
            $request->settingsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->settings, 'Settings', 'json');
        }

        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $body = [];
        if (null !== $request->settingsShrink) {
            @$body['Settings'] = $request->settingsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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

        return EditSiteWafSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Edit WAF Configuration for a Site.
     *
     * @param Request - EditSiteWafSettingsRequest
     *
     * @returns EditSiteWafSettingsResponse
     *
     * @param EditSiteWafSettingsRequest $request
     *
     * @return EditSiteWafSettingsResponse
     */
    public function editSiteWafSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editSiteWafSettingsWithOptions($request, $runtime);
    }

    /**
     * Enables a scenario-specific policy.
     *
     * @param Request - EnableCustomScenePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableCustomScenePolicyResponse
     *
     * @param EnableCustomScenePolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return EnableCustomScenePolicyResponse
     */
    public function enableCustomScenePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return EnableCustomScenePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a scenario-specific policy.
     *
     * @param Request - EnableCustomScenePolicyRequest
     *
     * @returns EnableCustomScenePolicyResponse
     *
     * @param EnableCustomScenePolicyRequest $request
     *
     * @return EnableCustomScenePolicyResponse
     */
    public function enableCustomScenePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableCustomScenePolicyWithOptions($request, $runtime);
    }

    /**
     * Exports all DNS records of a website domain as a TXT file.
     *
     * @param Request - ExportRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportRecordsResponse
     *
     * @param ExportRecordsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ExportRecordsResponse
     */
    public function exportRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ExportRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Exports all DNS records of a website domain as a TXT file.
     *
     * @param Request - ExportRecordsRequest
     *
     * @returns ExportRecordsResponse
     *
     * @param ExportRecordsRequest $request
     *
     * @return ExportRecordsResponse
     */
    public function exportRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries the usage of the upload file quota for API security schema verification.
     *
     * @param Request - GetApiSchemaUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetApiSchemaUsageResponse
     *
     * @param GetApiSchemaUsageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetApiSchemaUsageResponse
     */
    public function getApiSchemaUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApiSchemaUsage',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetApiSchemaUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the usage of the upload file quota for API security schema verification.
     *
     * @param Request - GetApiSchemaUsageRequest
     *
     * @returns GetApiSchemaUsageResponse
     *
     * @param GetApiSchemaUsageRequest $request
     *
     * @return GetApiSchemaUsageResponse
     */
    public function getApiSchemaUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getApiSchemaUsageWithOptions($request, $runtime);
    }

    /**
     * Queries the available specifications of cache reserve instances.
     *
     * @param Request - GetCacheReserveSpecificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCacheReserveSpecificationResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetCacheReserveSpecificationResponse
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

        return GetCacheReserveSpecificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the available specifications of cache reserve instances.
     *
     * @returns GetCacheReserveSpecificationResponse
     *
     * @return GetCacheReserveSpecificationResponse
     */
    public function getCacheReserveSpecification()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCacheReserveSpecificationWithOptions($runtime);
    }

    /**
     * Query a single cache configuration.
     *
     * @param Request - GetCacheRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCacheRuleResponse
     *
     * @param GetCacheRuleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetCacheRuleResponse
     */
    public function getCacheRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetCacheRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query a single cache configuration.
     *
     * @param Request - GetCacheRuleRequest
     *
     * @returns GetCacheRuleResponse
     *
     * @param GetCacheRuleRequest $request
     *
     * @return GetCacheRuleResponse
     */
    public function getCacheRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCacheRuleWithOptions($request, $runtime);
    }

    /**
     * Query Site Cache Tag Configuration.
     *
     * @param Request - GetCacheTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCacheTagResponse
     *
     * @param GetCacheTagRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetCacheTagResponse
     */
    public function getCacheTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetCacheTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Site Cache Tag Configuration.
     *
     * @param Request - GetCacheTagRequest
     *
     * @returns GetCacheTagResponse
     *
     * @param GetCacheTagRequest $request
     *
     * @return GetCacheTagResponse
     */
    public function getCacheTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCacheTagWithOptions($request, $runtime);
    }

    /**
     * Retrieve the certificate, private key, and certificate information.
     *
     * @param Request - GetCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCertificateResponse
     *
     * @param GetCertificateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetCertificateResponse
     */
    public function getCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the certificate, private key, and certificate information.
     *
     * @param Request - GetCertificateRequest
     *
     * @returns GetCertificateResponse
     *
     * @param GetCertificateRequest $request
     *
     * @return GetCertificateResponse
     */
    public function getCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCertificateWithOptions($request, $runtime);
    }

    /**
     * Query certificate quota and usage.
     *
     * @param Request - GetCertificateQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCertificateQuotaResponse
     *
     * @param GetCertificateQuotaRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetCertificateQuotaResponse
     */
    public function getCertificateQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetCertificateQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query certificate quota and usage.
     *
     * @param Request - GetCertificateQuotaRequest
     *
     * @returns GetCertificateQuotaResponse
     *
     * @param GetCertificateQuotaRequest $request
     *
     * @return GetCertificateQuotaResponse
     */
    public function getCertificateQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCertificateQuotaWithOptions($request, $runtime);
    }

    /**
     * Queries a client CA certificate.
     *
     * @param Request - GetClientCaCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClientCaCertificateResponse
     *
     * @param GetClientCaCertificateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetClientCaCertificateResponse
     */
    public function getClientCaCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetClientCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a client CA certificate.
     *
     * @param Request - GetClientCaCertificateRequest
     *
     * @returns GetClientCaCertificateResponse
     *
     * @param GetClientCaCertificateRequest $request
     *
     * @return GetClientCaCertificateResponse
     */
    public function getClientCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClientCaCertificateWithOptions($request, $runtime);
    }

    /**
     * Queries information about a client certificate.
     *
     * @param Request - GetClientCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClientCertificateResponse
     *
     * @param GetClientCertificateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetClientCertificateResponse
     */
    public function getClientCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a client certificate.
     *
     * @param Request - GetClientCertificateRequest
     *
     * @returns GetClientCertificateResponse
     *
     * @param GetClientCertificateRequest $request
     *
     * @return GetClientCertificateResponse
     */
    public function getClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClientCertificateWithOptions($request, $runtime);
    }

    /**
     * Queries domain names associated with a client CA certificate. If no certificate is specified, domain names associated with an Edge Security Acceleration(ESA)-managed CA certificate are returned.
     *
     * @param Request - GetClientCertificateHostnamesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClientCertificateHostnamesResponse
     *
     * @param GetClientCertificateHostnamesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetClientCertificateHostnamesResponse
     */
    public function getClientCertificateHostnamesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetClientCertificateHostnamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries domain names associated with a client CA certificate. If no certificate is specified, domain names associated with an Edge Security Acceleration(ESA)-managed CA certificate are returned.
     *
     * @param Request - GetClientCertificateHostnamesRequest
     *
     * @returns GetClientCertificateHostnamesResponse
     *
     * @param GetClientCertificateHostnamesRequest $request
     *
     * @return GetClientCertificateHostnamesResponse
     */
    public function getClientCertificateHostnames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClientCertificateHostnamesWithOptions($request, $runtime);
    }

    /**
     * Queries the CNAME flattening configuration of a website.
     *
     * @param Request - GetCnameFlatteningRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCnameFlatteningResponse
     *
     * @param GetCnameFlatteningRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetCnameFlatteningResponse
     */
    public function getCnameFlatteningWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetCnameFlatteningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the CNAME flattening configuration of a website.
     *
     * @param Request - GetCnameFlatteningRequest
     *
     * @returns GetCnameFlatteningResponse
     *
     * @param GetCnameFlatteningRequest $request
     *
     * @return GetCnameFlatteningResponse
     */
    public function getCnameFlattening($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCnameFlatteningWithOptions($request, $runtime);
    }

    /**
     * Query Compression Rule Details.
     *
     * @param Request - GetCompressionRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCompressionRuleResponse
     *
     * @param GetCompressionRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetCompressionRuleResponse
     */
    public function getCompressionRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetCompressionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Compression Rule Details.
     *
     * @param Request - GetCompressionRuleRequest
     *
     * @returns GetCompressionRuleResponse
     *
     * @param GetCompressionRuleRequest $request
     *
     * @return GetCompressionRuleResponse
     */
    public function getCompressionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCompressionRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration of Chinese mainland access optimization.
     *
     * @param Request - GetCrossBorderOptimizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCrossBorderOptimizationResponse
     *
     * @param GetCrossBorderOptimizationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetCrossBorderOptimizationResponse
     */
    public function getCrossBorderOptimizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCrossBorderOptimization',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCrossBorderOptimizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration of Chinese mainland access optimization.
     *
     * @param Request - GetCrossBorderOptimizationRequest
     *
     * @returns GetCrossBorderOptimizationResponse
     *
     * @param GetCrossBorderOptimizationRequest $request
     *
     * @return GetCrossBorderOptimizationResponse
     */
    public function getCrossBorderOptimization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCrossBorderOptimizationWithOptions($request, $runtime);
    }

    /**
     * Query Site Developer Mode Configuration.
     *
     * @param Request - GetDevelopmentModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDevelopmentModeResponse
     *
     * @param GetDevelopmentModeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDevelopmentModeResponse
     */
    public function getDevelopmentModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetDevelopmentModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Site Developer Mode Configuration.
     *
     * @param Request - GetDevelopmentModeRequest
     *
     * @returns GetDevelopmentModeResponse
     *
     * @param GetDevelopmentModeRequest $request
     *
     * @return GetDevelopmentModeResponse
     */
    public function getDevelopmentMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDevelopmentModeWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a containerized application, including basic application configurations and health check configurations.
     *
     * @param Request - GetEdgeContainerAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEdgeContainerAppResponse
     *
     * @param GetEdgeContainerAppRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetEdgeContainerAppResponse
     */
    public function getEdgeContainerAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetEdgeContainerAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a containerized application, including basic application configurations and health check configurations.
     *
     * @param Request - GetEdgeContainerAppRequest
     *
     * @returns GetEdgeContainerAppResponse
     *
     * @param GetEdgeContainerAppRequest $request
     *
     * @return GetEdgeContainerAppResponse
     */
    public function getEdgeContainerApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerAppWithOptions($request, $runtime);
    }

    /**
     * Queries the log collection configuration of a containerized application.
     *
     * @param Request - GetEdgeContainerAppLogRiverRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEdgeContainerAppLogRiverResponse
     *
     * @param GetEdgeContainerAppLogRiverRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetEdgeContainerAppLogRiverResponse
     */
    public function getEdgeContainerAppLogRiverWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetEdgeContainerAppLogRiverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the log collection configuration of a containerized application.
     *
     * @param Request - GetEdgeContainerAppLogRiverRequest
     *
     * @returns GetEdgeContainerAppLogRiverResponse
     *
     * @param GetEdgeContainerAppLogRiverRequest $request
     *
     * @return GetEdgeContainerAppLogRiverResponse
     */
    public function getEdgeContainerAppLogRiver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerAppLogRiverWithOptions($request, $runtime);
    }

    /**
     * Obtain the resource reservation configuration of the edge container.
     *
     * @param Request - GetEdgeContainerAppResourceReserveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEdgeContainerAppResourceReserveResponse
     *
     * @param GetEdgeContainerAppResourceReserveRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GetEdgeContainerAppResourceReserveResponse
     */
    public function getEdgeContainerAppResourceReserveWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetEdgeContainerAppResourceReserveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the resource reservation configuration of the edge container.
     *
     * @param Request - GetEdgeContainerAppResourceReserveRequest
     *
     * @returns GetEdgeContainerAppResourceReserveResponse
     *
     * @param GetEdgeContainerAppResourceReserveRequest $request
     *
     * @return GetEdgeContainerAppResourceReserveResponse
     */
    public function getEdgeContainerAppResourceReserve($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerAppResourceReserveWithOptions($request, $runtime);
    }

    /**
     * Obtains the distribution of edge container application resources.
     *
     * @param Request - GetEdgeContainerAppResourceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEdgeContainerAppResourceStatusResponse
     *
     * @param GetEdgeContainerAppResourceStatusRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return GetEdgeContainerAppResourceStatusResponse
     */
    public function getEdgeContainerAppResourceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEdgeContainerAppResourceStatus',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEdgeContainerAppResourceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the distribution of edge container application resources.
     *
     * @param Request - GetEdgeContainerAppResourceStatusRequest
     *
     * @returns GetEdgeContainerAppResourceStatusResponse
     *
     * @param GetEdgeContainerAppResourceStatusRequest $request
     *
     * @return GetEdgeContainerAppResourceStatusResponse
     */
    public function getEdgeContainerAppResourceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerAppResourceStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the status information about a containerized application, including the deployment, release, and rollback of the application.
     *
     * @param Request - GetEdgeContainerAppStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEdgeContainerAppStatusResponse
     *
     * @param GetEdgeContainerAppStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetEdgeContainerAppStatusResponse
     */
    public function getEdgeContainerAppStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->publishEnv) {
            @$query['PublishEnv'] = $request->publishEnv;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetEdgeContainerAppStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status information about a containerized application, including the deployment, release, and rollback of the application.
     *
     * @param Request - GetEdgeContainerAppStatusRequest
     *
     * @returns GetEdgeContainerAppStatusResponse
     *
     * @param GetEdgeContainerAppStatusRequest $request
     *
     * @return GetEdgeContainerAppStatusResponse
     */
    public function getEdgeContainerAppStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerAppStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a version of a containerized application. You can select an application version to release based on the version information.
     *
     * @param Request - GetEdgeContainerAppVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEdgeContainerAppVersionResponse
     *
     * @param GetEdgeContainerAppVersionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetEdgeContainerAppVersionResponse
     */
    public function getEdgeContainerAppVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetEdgeContainerAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a version of a containerized application. You can select an application version to release based on the version information.
     *
     * @param Request - GetEdgeContainerAppVersionRequest
     *
     * @returns GetEdgeContainerAppVersionResponse
     *
     * @param GetEdgeContainerAppVersionRequest $request
     *
     * @return GetEdgeContainerAppVersionResponse
     */
    public function getEdgeContainerAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerAppVersionWithOptions($request, $runtime);
    }

    /**
     * Queries regions where a containerized application is deployed based on the application ID.
     *
     * @param Request - GetEdgeContainerDeployRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEdgeContainerDeployRegionsResponse
     *
     * @param GetEdgeContainerDeployRegionsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetEdgeContainerDeployRegionsResponse
     */
    public function getEdgeContainerDeployRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetEdgeContainerDeployRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries regions where a containerized application is deployed based on the application ID.
     *
     * @param Request - GetEdgeContainerDeployRegionsRequest
     *
     * @returns GetEdgeContainerDeployRegionsResponse
     *
     * @param GetEdgeContainerDeployRegionsRequest $request
     *
     * @return GetEdgeContainerDeployRegionsResponse
     */
    public function getEdgeContainerDeployRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerDeployRegionsWithOptions($request, $runtime);
    }

    /**
     * Queries Edge Container logs.
     *
     * @param Request - GetEdgeContainerLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEdgeContainerLogsResponse
     *
     * @param GetEdgeContainerLogsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetEdgeContainerLogsResponse
     */
    public function getEdgeContainerLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetEdgeContainerLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Edge Container logs.
     *
     * @param Request - GetEdgeContainerLogsRequest
     *
     * @returns GetEdgeContainerLogsResponse
     *
     * @param GetEdgeContainerLogsRequest $request
     *
     * @return GetEdgeContainerLogsResponse
     */
    public function getEdgeContainerLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerLogsWithOptions($request, $runtime);
    }

    /**
     * Queries the deployment status of an application in the staging environment by using the application ID.
     *
     * @param Request - GetEdgeContainerStagingDeployStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEdgeContainerStagingDeployStatusResponse
     *
     * @param GetEdgeContainerStagingDeployStatusRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GetEdgeContainerStagingDeployStatusResponse
     */
    public function getEdgeContainerStagingDeployStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetEdgeContainerStagingDeployStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the deployment status of an application in the staging environment by using the application ID.
     *
     * @param Request - GetEdgeContainerStagingDeployStatusRequest
     *
     * @returns GetEdgeContainerStagingDeployStatusResponse
     *
     * @param GetEdgeContainerStagingDeployStatusRequest $request
     *
     * @return GetEdgeContainerStagingDeployStatusResponse
     */
    public function getEdgeContainerStagingDeployStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerStagingDeployStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the terminal information of a containerized application.
     *
     * @param Request - GetEdgeContainerTerminalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEdgeContainerTerminalResponse
     *
     * @param GetEdgeContainerTerminalRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetEdgeContainerTerminalResponse
     */
    public function getEdgeContainerTerminalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetEdgeContainerTerminalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the terminal information of a containerized application.
     *
     * @param Request - GetEdgeContainerTerminalRequest
     *
     * @returns GetEdgeContainerTerminalResponse
     *
     * @param GetEdgeContainerTerminalRequest $request
     *
     * @return GetEdgeContainerTerminalResponse
     */
    public function getEdgeContainerTerminal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEdgeContainerTerminalWithOptions($request, $runtime);
    }

    /**
     * Checks the status of Edge Routine.
     *
     * @param Request - GetErServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetErServiceResponse
     *
     * @param GetErServiceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetErServiceResponse
     */
    public function getErServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetErService',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetErServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks the status of Edge Routine.
     *
     * @param Request - GetErServiceRequest
     *
     * @returns GetErServiceResponse
     *
     * @param GetErServiceRequest $request
     *
     * @return GetErServiceResponse
     */
    public function getErService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getErServiceWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration details of an HTTP request header modification rule for a website.
     *
     * @param Request - GetHttpIncomingRequestHeaderModificationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHttpIncomingRequestHeaderModificationRuleResponse
     *
     * @param GetHttpIncomingRequestHeaderModificationRuleRequest $request
     * @param RuntimeOptions                                      $runtime
     *
     * @return GetHttpIncomingRequestHeaderModificationRuleResponse
     */
    public function getHttpIncomingRequestHeaderModificationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHttpIncomingRequestHeaderModificationRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHttpIncomingRequestHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration details of an HTTP request header modification rule for a website.
     *
     * @param Request - GetHttpIncomingRequestHeaderModificationRuleRequest
     *
     * @returns GetHttpIncomingRequestHeaderModificationRuleResponse
     *
     * @param GetHttpIncomingRequestHeaderModificationRuleRequest $request
     *
     * @return GetHttpIncomingRequestHeaderModificationRuleResponse
     */
    public function getHttpIncomingRequestHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHttpIncomingRequestHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration details of an incoming HTTP response header modification rule for a website.
     *
     * @param Request - GetHttpIncomingResponseHeaderModificationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHttpIncomingResponseHeaderModificationRuleResponse
     *
     * @param GetHttpIncomingResponseHeaderModificationRuleRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return GetHttpIncomingResponseHeaderModificationRuleResponse
     */
    public function getHttpIncomingResponseHeaderModificationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHttpIncomingResponseHeaderModificationRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHttpIncomingResponseHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration details of an incoming HTTP response header modification rule for a website.
     *
     * @param Request - GetHttpIncomingResponseHeaderModificationRuleRequest
     *
     * @returns GetHttpIncomingResponseHeaderModificationRuleResponse
     *
     * @param GetHttpIncomingResponseHeaderModificationRuleRequest $request
     *
     * @return GetHttpIncomingResponseHeaderModificationRuleResponse
     */
    public function getHttpIncomingResponseHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHttpIncomingResponseHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * Query HTTP Request Header Rule Details.
     *
     * @param Request - GetHttpRequestHeaderModificationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHttpRequestHeaderModificationRuleResponse
     *
     * @param GetHttpRequestHeaderModificationRuleRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return GetHttpRequestHeaderModificationRuleResponse
     */
    public function getHttpRequestHeaderModificationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetHttpRequestHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query HTTP Request Header Rule Details.
     *
     * @param Request - GetHttpRequestHeaderModificationRuleRequest
     *
     * @returns GetHttpRequestHeaderModificationRuleResponse
     *
     * @param GetHttpRequestHeaderModificationRuleRequest $request
     *
     * @return GetHttpRequestHeaderModificationRuleResponse
     */
    public function getHttpRequestHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHttpRequestHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * Query HTTP Response Header Rules.
     *
     * @param Request - GetHttpResponseHeaderModificationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHttpResponseHeaderModificationRuleResponse
     *
     * @param GetHttpResponseHeaderModificationRuleRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return GetHttpResponseHeaderModificationRuleResponse
     */
    public function getHttpResponseHeaderModificationRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetHttpResponseHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query HTTP Response Header Rules.
     *
     * @param Request - GetHttpResponseHeaderModificationRuleRequest
     *
     * @returns GetHttpResponseHeaderModificationRuleResponse
     *
     * @param GetHttpResponseHeaderModificationRuleRequest $request
     *
     * @return GetHttpResponseHeaderModificationRuleResponse
     */
    public function getHttpResponseHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHttpResponseHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * Query a Single HTTPS Application Configuration.
     *
     * @param Request - GetHttpsApplicationConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHttpsApplicationConfigurationResponse
     *
     * @param GetHttpsApplicationConfigurationRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetHttpsApplicationConfigurationResponse
     */
    public function getHttpsApplicationConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetHttpsApplicationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query a Single HTTPS Application Configuration.
     *
     * @param Request - GetHttpsApplicationConfigurationRequest
     *
     * @returns GetHttpsApplicationConfigurationResponse
     *
     * @param GetHttpsApplicationConfigurationRequest $request
     *
     * @return GetHttpsApplicationConfigurationResponse
     */
    public function getHttpsApplicationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHttpsApplicationConfigurationWithOptions($request, $runtime);
    }

    /**
     * Query a Single HTTPS Basic Configuration.
     *
     * @param Request - GetHttpsBasicConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHttpsBasicConfigurationResponse
     *
     * @param GetHttpsBasicConfigurationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetHttpsBasicConfigurationResponse
     */
    public function getHttpsBasicConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetHttpsBasicConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query a Single HTTPS Basic Configuration.
     *
     * @param Request - GetHttpsBasicConfigurationRequest
     *
     * @returns GetHttpsBasicConfigurationResponse
     *
     * @param GetHttpsBasicConfigurationRequest $request
     *
     * @return GetHttpsBasicConfigurationResponse
     */
    public function getHttpsBasicConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHttpsBasicConfigurationWithOptions($request, $runtime);
    }

    /**
     * Queries the IPv6 configuration of a website.
     *
     * @param Request - GetIPv6Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIPv6Response
     *
     * @param GetIPv6Request $request
     * @param RuntimeOptions $runtime
     *
     * @return GetIPv6Response
     */
    public function getIPv6WithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetIPv6Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IPv6 configuration of a website.
     *
     * @param Request - GetIPv6Request
     *
     * @returns GetIPv6Response
     *
     * @param GetIPv6Request $request
     *
     * @return GetIPv6Response
     */
    public function getIPv6($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIPv6WithOptions($request, $runtime);
    }

    /**
     * Query Single Site Image Transformation Configuration.
     *
     * @param Request - GetImageTransformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetImageTransformResponse
     *
     * @param GetImageTransformRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetImageTransformResponse
     */
    public function getImageTransformWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetImageTransformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Single Site Image Transformation Configuration.
     *
     * @param Request - GetImageTransformRequest
     *
     * @returns GetImageTransformResponse
     *
     * @param GetImageTransformRequest $request
     *
     * @return GetImageTransformResponse
     */
    public function getImageTransform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageTransformWithOptions($request, $runtime);
    }

    /**
     * Queries the value of a key in a key-value pair.
     *
     * @param Request - GetKvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKvResponse
     *
     * @param GetKvRequest   $request
     * @param RuntimeOptions $runtime
     *
     * @return GetKvResponse
     */
    public function getKvWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the value of a key in a key-value pair.
     *
     * @param Request - GetKvRequest
     *
     * @returns GetKvResponse
     *
     * @param GetKvRequest $request
     *
     * @return GetKvResponse
     */
    public function getKv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKvWithOptions($request, $runtime);
    }

    /**
     * Queries the Edge KV usage in your Alibaba Cloud account, including the information about all namespaces.
     *
     * @param Request - GetKvAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKvAccountResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetKvAccountResponse
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

        return GetKvAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Edge KV usage in your Alibaba Cloud account, including the information about all namespaces.
     *
     * @returns GetKvAccountResponse
     *
     * @return GetKvAccountResponse
     */
    public function getKvAccount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKvAccountWithOptions($runtime);
    }

    /**
     * Queries the information about a namespace in your Alibaba Cloud account.
     *
     * @param Request - GetKvNamespaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetKvNamespaceResponse
     *
     * @param GetKvNamespaceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetKvNamespaceResponse
     */
    public function getKvNamespaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetKvNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a namespace in your Alibaba Cloud account.
     *
     * @param Request - GetKvNamespaceRequest
     *
     * @returns GetKvNamespaceResponse
     *
     * @param GetKvNamespaceRequest $request
     *
     * @return GetKvNamespaceResponse
     */
    public function getKvNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKvNamespaceWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a custom list, such as the name, description, type, and content.
     *
     * @param Request - GetListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetListResponse
     *
     * @param GetListRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetListResponse
     */
    public function getListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a custom list, such as the name, description, type, and content.
     *
     * @param Request - GetListRequest
     *
     * @returns GetListResponse
     *
     * @param GetListRequest $request
     *
     * @return GetListResponse
     */
    public function getList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getListWithOptions($request, $runtime);
    }

    /**
     * Query a Specific Load Balancer.
     *
     * @remarks
     * This API allows users to query the configuration details of a specific load balancer by providing necessary authentication information and resource identifiers, including but not limited to name, session persistence strategy, routing policy, etc.
     *
     * @param Request - GetLoadBalancerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLoadBalancerResponse
     *
     * @param GetLoadBalancerRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetLoadBalancerResponse
     */
    public function getLoadBalancerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query a Specific Load Balancer.
     *
     * @remarks
     * This API allows users to query the configuration details of a specific load balancer by providing necessary authentication information and resource identifiers, including but not limited to name, session persistence strategy, routing policy, etc.
     *
     * @param Request - GetLoadBalancerRequest
     *
     * @returns GetLoadBalancerResponse
     *
     * @param GetLoadBalancerRequest $request
     *
     * @return GetLoadBalancerResponse
     */
    public function getLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * Query Managed Transform Configuration.
     *
     * @param Request - GetManagedTransformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetManagedTransformResponse
     *
     * @param GetManagedTransformRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetManagedTransformResponse
     */
    public function getManagedTransformWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetManagedTransformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Managed Transform Configuration.
     *
     * @param Request - GetManagedTransformRequest
     *
     * @returns GetManagedTransformResponse
     *
     * @param GetManagedTransformRequest $request
     *
     * @return GetManagedTransformResponse
     */
    public function getManagedTransform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getManagedTransformWithOptions($request, $runtime);
    }

    /**
     * Query a single network optimization configuration.
     *
     * @param Request - GetNetworkOptimizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNetworkOptimizationResponse
     *
     * @param GetNetworkOptimizationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetNetworkOptimizationResponse
     */
    public function getNetworkOptimizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetNetworkOptimizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query a single network optimization configuration.
     *
     * @param Request - GetNetworkOptimizationRequest
     *
     * @returns GetNetworkOptimizationResponse
     *
     * @param GetNetworkOptimizationRequest $request
     *
     * @return GetNetworkOptimizationResponse
     */
    public function getNetworkOptimization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNetworkOptimizationWithOptions($request, $runtime);
    }

    /**
     * 获取源服务器CA证书信息.
     *
     * @param Request - GetOriginCaCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOriginCaCertificateResponse
     *
     * @param GetOriginCaCertificateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetOriginCaCertificateResponse
     */
    public function getOriginCaCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOriginCaCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOriginCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取源服务器CA证书信息.
     *
     * @param Request - GetOriginCaCertificateRequest
     *
     * @returns GetOriginCaCertificateResponse
     *
     * @param GetOriginCaCertificateRequest $request
     *
     * @return GetOriginCaCertificateResponse
     */
    public function getOriginCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOriginCaCertificateWithOptions($request, $runtime);
    }

    /**
     * 获取域名回源客户端证书信息.
     *
     * @param Request - GetOriginClientCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOriginClientCertificateResponse
     *
     * @param GetOriginClientCertificateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetOriginClientCertificateResponse
     */
    public function getOriginClientCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOriginClientCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOriginClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取域名回源客户端证书信息.
     *
     * @param Request - GetOriginClientCertificateRequest
     *
     * @returns GetOriginClientCertificateResponse
     *
     * @param GetOriginClientCertificateRequest $request
     *
     * @return GetOriginClientCertificateResponse
     */
    public function getOriginClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOriginClientCertificateWithOptions($request, $runtime);
    }

    /**
     * 获取域名回源客户端证书绑定的域名列表.
     *
     * @param Request - GetOriginClientCertificateHostnamesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOriginClientCertificateHostnamesResponse
     *
     * @param GetOriginClientCertificateHostnamesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GetOriginClientCertificateHostnamesResponse
     */
    public function getOriginClientCertificateHostnamesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOriginClientCertificateHostnames',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOriginClientCertificateHostnamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取域名回源客户端证书绑定的域名列表.
     *
     * @param Request - GetOriginClientCertificateHostnamesRequest
     *
     * @returns GetOriginClientCertificateHostnamesResponse
     *
     * @param GetOriginClientCertificateHostnamesRequest $request
     *
     * @return GetOriginClientCertificateHostnamesResponse
     */
    public function getOriginClientCertificateHostnames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOriginClientCertificateHostnamesWithOptions($request, $runtime);
    }

    /**
     * Query a specific origin pool.
     *
     * @param Request - GetOriginPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOriginPoolResponse
     *
     * @param GetOriginPoolRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetOriginPoolResponse
     */
    public function getOriginPoolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetOriginPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query a specific origin pool.
     *
     * @param Request - GetOriginPoolRequest
     *
     * @returns GetOriginPoolResponse
     *
     * @param GetOriginPoolRequest $request
     *
     * @return GetOriginPoolResponse
     */
    public function getOriginPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOriginPoolWithOptions($request, $runtime);
    }

    /**
     * Queries the origin protection configurations of a website, including the origin protection, IP convergence, and the status and details of the IP whitelist for origin protection. The details includes the IP whitelist used by the website, the latest IP whitelist, and the differences between them.
     *
     * @param Request - GetOriginProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOriginProtectionResponse
     *
     * @param GetOriginProtectionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetOriginProtectionResponse
     */
    public function getOriginProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetOriginProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the origin protection configurations of a website, including the origin protection, IP convergence, and the status and details of the IP whitelist for origin protection. The details includes the IP whitelist used by the website, the latest IP whitelist, and the differences between them.
     *
     * @param Request - GetOriginProtectionRequest
     *
     * @returns GetOriginProtectionResponse
     *
     * @param GetOriginProtectionRequest $request
     *
     * @return GetOriginProtectionResponse
     */
    public function getOriginProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOriginProtectionWithOptions($request, $runtime);
    }

    /**
     * Query a Single Origin Rule Configuration.
     *
     * @param Request - GetOriginRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOriginRuleResponse
     *
     * @param GetOriginRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetOriginRuleResponse
     */
    public function getOriginRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetOriginRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query a Single Origin Rule Configuration.
     *
     * @param Request - GetOriginRuleRequest
     *
     * @returns GetOriginRuleResponse
     *
     * @param GetOriginRuleRequest $request
     *
     * @return GetOriginRuleResponse
     */
    public function getOriginRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOriginRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a custom error page based on the error page ID.
     *
     * @param Request - GetPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPageResponse
     *
     * @param GetPageRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetPageResponse
     */
    public function getPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a custom error page based on the error page ID.
     *
     * @param Request - GetPageRequest
     *
     * @returns GetPageResponse
     *
     * @param GetPageRequest $request
     *
     * @return GetPageResponse
     */
    public function getPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPageWithOptions($request, $runtime);
    }

    /**
     * Queries the quotas and quota usage for different cache purge options.
     *
     * @param Request - GetPurgeQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPurgeQuotaResponse
     *
     * @param GetPurgeQuotaRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetPurgeQuotaResponse
     */
    public function getPurgeQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetPurgeQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the quotas and quota usage for different cache purge options.
     *
     * @param Request - GetPurgeQuotaRequest
     *
     * @returns GetPurgeQuotaResponse
     *
     * @param GetPurgeQuotaRequest $request
     *
     * @return GetPurgeQuotaResponse
     */
    public function getPurgeQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPurgeQuotaWithOptions($request, $runtime);
    }

    /**
     * Queries the fields in real-time logs based on the log category.
     *
     * @param Request - GetRealtimeDeliveryFieldRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRealtimeDeliveryFieldResponse
     *
     * @param GetRealtimeDeliveryFieldRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetRealtimeDeliveryFieldResponse
     */
    public function getRealtimeDeliveryFieldWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetRealtimeDeliveryFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the fields in real-time logs based on the log category.
     *
     * @param Request - GetRealtimeDeliveryFieldRequest
     *
     * @returns GetRealtimeDeliveryFieldResponse
     *
     * @param GetRealtimeDeliveryFieldRequest $request
     *
     * @return GetRealtimeDeliveryFieldResponse
     */
    public function getRealtimeDeliveryField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRealtimeDeliveryFieldWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration of a single DNS record, such as the record value, priority, and origin authentication setting (exclusive to CNAME records).
     *
     * @param Request - GetRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRecordResponse
     *
     * @param GetRecordRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetRecordResponse
     */
    public function getRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration of a single DNS record, such as the record value, priority, and origin authentication setting (exclusive to CNAME records).
     *
     * @param Request - GetRecordRequest
     *
     * @returns GetRecordResponse
     *
     * @param GetRecordRequest $request
     *
     * @return GetRecordResponse
     */
    public function getRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRecordWithOptions($request, $runtime);
    }

    /**
     * Query Redirect Rule Details.
     *
     * @param Request - GetRedirectRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRedirectRuleResponse
     *
     * @param GetRedirectRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetRedirectRuleResponse
     */
    public function getRedirectRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetRedirectRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Redirect Rule Details.
     *
     * @param Request - GetRedirectRuleRequest
     *
     * @returns GetRedirectRuleResponse
     *
     * @param GetRedirectRuleRequest $request
     *
     * @return GetRedirectRuleResponse
     */
    public function getRedirectRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRedirectRuleWithOptions($request, $runtime);
    }

    /**
     * Query details of the rewrite URL rule.
     *
     * @param Request - GetRewriteUrlRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRewriteUrlRuleResponse
     *
     * @param GetRewriteUrlRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetRewriteUrlRuleResponse
     */
    public function getRewriteUrlRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetRewriteUrlRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query details of the rewrite URL rule.
     *
     * @param Request - GetRewriteUrlRuleRequest
     *
     * @returns GetRewriteUrlRuleResponse
     *
     * @param GetRewriteUrlRuleRequest $request
     *
     * @return GetRewriteUrlRuleResponse
     */
    public function getRewriteUrlRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRewriteUrlRuleWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of a routine, including the code versions and the configurations of the environments, associated domain names, and associated routes.
     *
     * @param Request - GetRoutineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRoutineResponse
     *
     * @param GetRoutineRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetRoutineResponse
     */
    public function getRoutineWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return GetRoutineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a routine, including the code versions and the configurations of the environments, associated domain names, and associated routes.
     *
     * @param Request - GetRoutineRequest
     *
     * @returns GetRoutineResponse
     *
     * @param GetRoutineRequest $request
     *
     * @return GetRoutineResponse
     */
    public function getRoutine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoutineWithOptions($request, $runtime);
    }

    /**
     * Queries information about a code version of a routine.
     *
     * @param Request - GetRoutineCodeVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRoutineCodeVersionResponse
     *
     * @param GetRoutineCodeVersionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetRoutineCodeVersionResponse
     */
    public function getRoutineCodeVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->codeVersion) {
            @$body['CodeVersion'] = $request->codeVersion;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetRoutineCodeVersion',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRoutineCodeVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a code version of a routine.
     *
     * @param Request - GetRoutineCodeVersionRequest
     *
     * @returns GetRoutineCodeVersionResponse
     *
     * @param GetRoutineCodeVersionRequest $request
     *
     * @return GetRoutineCodeVersionResponse
     */
    public function getRoutineCodeVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoutineCodeVersionWithOptions($request, $runtime);
    }

    /**
     * Queries the route configurations of a single edge function.
     *
     * @param Request - GetRoutineRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRoutineRouteResponse
     *
     * @param GetRoutineRouteRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetRoutineRouteResponse
     */
    public function getRoutineRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRoutineRoute',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRoutineRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the route configurations of a single edge function.
     *
     * @param Request - GetRoutineRouteRequest
     *
     * @returns GetRoutineRouteResponse
     *
     * @param GetRoutineRouteRequest $request
     *
     * @return GetRoutineRouteResponse
     */
    public function getRoutineRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoutineRouteWithOptions($request, $runtime);
    }

    /**
     * Obtains the release information about the routine code that is released to the staging environment. This information can be used to upload the test code to Object Storage Service (OSS).
     *
     * @remarks
     *   Every time the code of a routine is released to the staging environment, a version number is generated. Such code is for tests only.
     * *   A routine can retain a maximum of 10 code versions. If the number of versions reaches the limit, you must call the DeleteRoutineCodeRevision operation to delete unwanted versions.
     *
     * @param Request - GetRoutineStagingCodeUploadInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRoutineStagingCodeUploadInfoResponse
     *
     * @param GetRoutineStagingCodeUploadInfoRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetRoutineStagingCodeUploadInfoResponse
     */
    public function getRoutineStagingCodeUploadInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->codeDescription) {
            @$body['CodeDescription'] = $request->codeDescription;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return GetRoutineStagingCodeUploadInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the release information about the routine code that is released to the staging environment. This information can be used to upload the test code to Object Storage Service (OSS).
     *
     * @remarks
     *   Every time the code of a routine is released to the staging environment, a version number is generated. Such code is for tests only.
     * *   A routine can retain a maximum of 10 code versions. If the number of versions reaches the limit, you must call the DeleteRoutineCodeRevision operation to delete unwanted versions.
     *
     * @param Request - GetRoutineStagingCodeUploadInfoRequest
     *
     * @returns GetRoutineStagingCodeUploadInfoResponse
     *
     * @param GetRoutineStagingCodeUploadInfoRequest $request
     *
     * @return GetRoutineStagingCodeUploadInfoResponse
     */
    public function getRoutineStagingCodeUploadInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoutineStagingCodeUploadInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the IP addresses of staging environments for Edge Routine.
     *
     * @param Request - GetRoutineStagingEnvIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRoutineStagingEnvIpResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetRoutineStagingEnvIpResponse
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

        return GetRoutineStagingEnvIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IP addresses of staging environments for Edge Routine.
     *
     * @returns GetRoutineStagingEnvIpResponse
     *
     * @return GetRoutineStagingEnvIpResponse
     */
    public function getRoutineStagingEnvIp()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoutineStagingEnvIpWithOptions($runtime);
    }

    /**
     * Queries the Edge Routine information in your Alibaba Cloud account, including the associated subdomain and created routines.
     *
     * @param Request - GetRoutineUserInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRoutineUserInfoResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetRoutineUserInfoResponse
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

        return GetRoutineUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Edge Routine information in your Alibaba Cloud account, including the associated subdomain and created routines.
     *
     * @returns GetRoutineUserInfoResponse
     *
     * @return GetRoutineUserInfoResponse
     */
    public function getRoutineUserInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoutineUserInfoWithOptions($runtime);
    }

    /**
     * Queries a specified scheduled prefetch task based on the task ID.
     *
     * @param Request - GetScheduledPreloadJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScheduledPreloadJobResponse
     *
     * @param GetScheduledPreloadJobRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetScheduledPreloadJobResponse
     */
    public function getScheduledPreloadJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetScheduledPreloadJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a specified scheduled prefetch task based on the task ID.
     *
     * @param Request - GetScheduledPreloadJobRequest
     *
     * @returns GetScheduledPreloadJobResponse
     *
     * @param GetScheduledPreloadJobRequest $request
     *
     * @return GetScheduledPreloadJobResponse
     */
    public function getScheduledPreloadJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScheduledPreloadJobWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration for search engine crawler of a website.
     *
     * @param Request - GetSeoBypassRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSeoBypassResponse
     *
     * @param GetSeoBypassRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetSeoBypassResponse
     */
    public function getSeoBypassWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetSeoBypassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration for search engine crawler of a website.
     *
     * @param Request - GetSeoBypassRequest
     *
     * @returns GetSeoBypassResponse
     *
     * @param GetSeoBypassRequest $request
     *
     * @return GetSeoBypassResponse
     */
    public function getSeoBypass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSeoBypassWithOptions($request, $runtime);
    }

    /**
     * Queries information about a website based on the website ID.
     *
     * @param Request - GetSiteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSiteResponse
     *
     * @param GetSiteRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetSiteResponse
     */
    public function getSiteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetSiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about a website based on the website ID.
     *
     * @param Request - GetSiteRequest
     *
     * @returns GetSiteResponse
     *
     * @param GetSiteRequest $request
     *
     * @return GetSiteResponse
     */
    public function getSite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSiteWithOptions($request, $runtime);
    }

    /**
     * Queries the nameservers configured for a website.
     *
     * @param Request - GetSiteCurrentNSRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSiteCurrentNSResponse
     *
     * @param GetSiteCurrentNSRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSiteCurrentNSResponse
     */
    public function getSiteCurrentNSWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetSiteCurrentNSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the nameservers configured for a website.
     *
     * @param Request - GetSiteCurrentNSRequest
     *
     * @returns GetSiteCurrentNSResponse
     *
     * @param GetSiteCurrentNSRequest $request
     *
     * @return GetSiteCurrentNSResponse
     */
    public function getSiteCurrentNS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSiteCurrentNSWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration of custom log fields for a website.
     *
     * @remarks
     *   **Description**: You can call this operation to query the configuration of custom log fields for a website, including custom fields in request headers, response headers, and cookies.
     * *   **Scenarios**: You can call this operation in scenarios where you need to obtain specific HTTP headers or cookie information for log analysis.
     *
     * @param Request - GetSiteCustomLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSiteCustomLogResponse
     *
     * @param GetSiteCustomLogRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSiteCustomLogResponse
     */
    public function getSiteCustomLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetSiteCustomLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration of custom log fields for a website.
     *
     * @remarks
     *   **Description**: You can call this operation to query the configuration of custom log fields for a website, including custom fields in request headers, response headers, and cookies.
     * *   **Scenarios**: You can call this operation in scenarios where you need to obtain specific HTTP headers or cookie information for log analysis.
     *
     * @param Request - GetSiteCustomLogRequest
     *
     * @returns GetSiteCustomLogResponse
     *
     * @param GetSiteCustomLogRequest $request
     *
     * @return GetSiteCustomLogResponse
     */
    public function getSiteCustomLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSiteCustomLogWithOptions($request, $runtime);
    }

    /**
     * Queries a real-time log delivery task.
     *
     * @param Request - GetSiteDeliveryTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSiteDeliveryTaskResponse
     *
     * @param GetSiteDeliveryTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetSiteDeliveryTaskResponse
     */
    public function getSiteDeliveryTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetSiteDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a real-time log delivery task.
     *
     * @param Request - GetSiteDeliveryTaskRequest
     *
     * @returns GetSiteDeliveryTaskResponse
     *
     * @param GetSiteDeliveryTaskRequest $request
     *
     * @return GetSiteDeliveryTaskResponse
     */
    public function getSiteDeliveryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSiteDeliveryTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the remaining quota for delivering a specific category of real-time logs in a website.
     *
     * @remarks
     * You can call this operation to query the remaining quota for delivering a specific category of real-time logs in a website within an Alibaba Cloud account. This is essential for monitoring and managing your log delivery capacity to ensure that logs can be delivered to the destination and prevent data loss or latency caused by insufficient quota.
     * **Take note of the following parameters:**
     * *   ``
     * *   `BusinessType` is required. You must specify a log category to obtain the corresponding quota information.
     * *   `SiteId` specifies the ID of a website, which must be a valid integer that corresponds to a website that you configured on Alibaba Cloud.
     * **Response:**
     * *   If a request is successful, the system returns the remaining log delivery quota (`FreeQuota`), request ID (`RequestId`), website ID (`SiteId`), and log category (`BusinessType`). You can confirm and record the returned data.
     *
     * @param Request - GetSiteLogDeliveryQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSiteLogDeliveryQuotaResponse
     *
     * @param GetSiteLogDeliveryQuotaRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetSiteLogDeliveryQuotaResponse
     */
    public function getSiteLogDeliveryQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetSiteLogDeliveryQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the remaining quota for delivering a specific category of real-time logs in a website.
     *
     * @remarks
     * You can call this operation to query the remaining quota for delivering a specific category of real-time logs in a website within an Alibaba Cloud account. This is essential for monitoring and managing your log delivery capacity to ensure that logs can be delivered to the destination and prevent data loss or latency caused by insufficient quota.
     * **Take note of the following parameters:**
     * *   ``
     * *   `BusinessType` is required. You must specify a log category to obtain the corresponding quota information.
     * *   `SiteId` specifies the ID of a website, which must be a valid integer that corresponds to a website that you configured on Alibaba Cloud.
     * **Response:**
     * *   If a request is successful, the system returns the remaining log delivery quota (`FreeQuota`), request ID (`RequestId`), website ID (`SiteId`), and log category (`BusinessType`). You can confirm and record the returned data.
     *
     * @param Request - GetSiteLogDeliveryQuotaRequest
     *
     * @returns GetSiteLogDeliveryQuotaResponse
     *
     * @param GetSiteLogDeliveryQuotaRequest $request
     *
     * @return GetSiteLogDeliveryQuotaResponse
     */
    public function getSiteLogDeliveryQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSiteLogDeliveryQuotaWithOptions($request, $runtime);
    }

    /**
     * Queries the site hold configuration of a website. After you enable site hold, other accounts cannot add your website domain or its subdomains to ESA.
     *
     * @param Request - GetSiteNameExclusiveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSiteNameExclusiveResponse
     *
     * @param GetSiteNameExclusiveRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetSiteNameExclusiveResponse
     */
    public function getSiteNameExclusiveWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetSiteNameExclusiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the site hold configuration of a website. After you enable site hold, other accounts cannot add your website domain or its subdomains to ESA.
     *
     * @param Request - GetSiteNameExclusiveRequest
     *
     * @returns GetSiteNameExclusiveResponse
     *
     * @param GetSiteNameExclusiveRequest $request
     *
     * @return GetSiteNameExclusiveResponse
     */
    public function getSiteNameExclusive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSiteNameExclusiveWithOptions($request, $runtime);
    }

    /**
     * 获取站点回源客户端证书信息.
     *
     * @param Request - GetSiteOriginClientCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSiteOriginClientCertificateResponse
     *
     * @param GetSiteOriginClientCertificateRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetSiteOriginClientCertificateResponse
     */
    public function getSiteOriginClientCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSiteOriginClientCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSiteOriginClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取站点回源客户端证书信息.
     *
     * @param Request - GetSiteOriginClientCertificateRequest
     *
     * @returns GetSiteOriginClientCertificateResponse
     *
     * @param GetSiteOriginClientCertificateRequest $request
     *
     * @return GetSiteOriginClientCertificateResponse
     */
    public function getSiteOriginClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSiteOriginClientCertificateWithOptions($request, $runtime);
    }

    /**
     * Queries the ESA proxy configuration of a website.
     *
     * @param Request - GetSitePauseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSitePauseResponse
     *
     * @param GetSitePauseRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetSitePauseResponse
     */
    public function getSitePauseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetSitePauseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the ESA proxy configuration of a website.
     *
     * @param Request - GetSitePauseRequest
     *
     * @returns GetSitePauseResponse
     *
     * @param GetSitePauseRequest $request
     *
     * @return GetSitePauseResponse
     */
    public function getSitePause($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSitePauseWithOptions($request, $runtime);
    }

    /**
     * Get WAF Configuration for a Site.
     *
     * @param Request - GetSiteWafSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSiteWafSettingsResponse
     *
     * @param GetSiteWafSettingsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetSiteWafSettingsResponse
     */
    public function getSiteWafSettingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetSiteWafSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get WAF Configuration for a Site.
     *
     * @param Request - GetSiteWafSettingsRequest
     *
     * @returns GetSiteWafSettingsResponse
     *
     * @param GetSiteWafSettingsRequest $request
     *
     * @return GetSiteWafSettingsResponse
     */
    public function getSiteWafSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSiteWafSettingsWithOptions($request, $runtime);
    }

    /**
     * Query Multi-level Cache Configuration for Site.
     *
     * @param Request - GetTieredCacheRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTieredCacheResponse
     *
     * @param GetTieredCacheRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetTieredCacheResponse
     */
    public function getTieredCacheWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetTieredCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Multi-level Cache Configuration for Site.
     *
     * @param Request - GetTieredCacheRequest
     *
     * @returns GetTieredCacheResponse
     *
     * @param GetTieredCacheRequest $request
     *
     * @return GetTieredCacheResponse
     */
    public function getTieredCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTieredCacheWithOptions($request, $runtime);
    }

    /**
     * Query details of the transport layer application.
     *
     * @param Request - GetTransportLayerApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTransportLayerApplicationResponse
     *
     * @param GetTransportLayerApplicationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetTransportLayerApplicationResponse
     */
    public function getTransportLayerApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTransportLayerApplication',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTransportLayerApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query details of the transport layer application.
     *
     * @param Request - GetTransportLayerApplicationRequest
     *
     * @returns GetTransportLayerApplicationResponse
     *
     * @param GetTransportLayerApplicationRequest $request
     *
     * @return GetTransportLayerApplicationResponse
     */
    public function getTransportLayerApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTransportLayerApplicationWithOptions($request, $runtime);
    }

    /**
     * Queries the execution status and running information of a file upload task based on the task ID.
     *
     * @param Request - GetUploadTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUploadTaskResponse
     *
     * @param GetUploadTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetUploadTaskResponse
     */
    public function getUploadTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetUploadTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution status and running information of a file upload task based on the task ID.
     *
     * @param Request - GetUploadTaskRequest
     *
     * @returns GetUploadTaskResponse
     *
     * @param GetUploadTaskRequest $request
     *
     * @return GetUploadTaskResponse
     */
    public function getUploadTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a log delivery task by account.
     *
     * @remarks
     *   This API operation queries the details of a delivery task, including the task name, discard rate, region, log category, status, delivery destination, configuration, and filtering rules.****
     * *   You can call this operation to query detailed information about a log delivery task to analyze log processing efficiency or troubleshoot delivery problems.****
     * *   ****````
     *
     * @param Request - GetUserDeliveryTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserDeliveryTaskResponse
     *
     * @param GetUserDeliveryTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetUserDeliveryTaskResponse
     */
    public function getUserDeliveryTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetUserDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a log delivery task by account.
     *
     * @remarks
     *   This API operation queries the details of a delivery task, including the task name, discard rate, region, log category, status, delivery destination, configuration, and filtering rules.****
     * *   You can call this operation to query detailed information about a log delivery task to analyze log processing efficiency or troubleshoot delivery problems.****
     * *   ****````
     *
     * @param Request - GetUserDeliveryTaskRequest
     *
     * @returns GetUserDeliveryTaskResponse
     *
     * @param GetUserDeliveryTaskRequest $request
     *
     * @return GetUserDeliveryTaskResponse
     */
    public function getUserDeliveryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserDeliveryTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the remaining log delivery quota of each log category in your account.
     *
     * @remarks
     * This operation allows you to query the remaining real-time log delivery quota of each log category in your Alibaba Cloud account. You must provide your Alibaba Cloud account ID (aliUid) and log category (BusinessType). The system then returns the remaining quota of the log category to help you track the usage.
     *
     * @param Request - GetUserLogDeliveryQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserLogDeliveryQuotaResponse
     *
     * @param GetUserLogDeliveryQuotaRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetUserLogDeliveryQuotaResponse
     */
    public function getUserLogDeliveryQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetUserLogDeliveryQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the remaining log delivery quota of each log category in your account.
     *
     * @remarks
     * This operation allows you to query the remaining real-time log delivery quota of each log category in your Alibaba Cloud account. You must provide your Alibaba Cloud account ID (aliUid) and log category (BusinessType). The system then returns the remaining quota of the log category to help you track the usage.
     *
     * @param Request - GetUserLogDeliveryQuotaRequest
     *
     * @returns GetUserLogDeliveryQuotaResponse
     *
     * @param GetUserLogDeliveryQuotaRequest $request
     *
     * @return GetUserLogDeliveryQuotaResponse
     */
    public function getUserLogDeliveryQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserLogDeliveryQuotaWithOptions($request, $runtime);
    }

    /**
     * Queries the video processing configuration details of a site.
     *
     * @param Request - GetVideoProcessingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoProcessingResponse
     *
     * @param GetVideoProcessingRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetVideoProcessingResponse
     */
    public function getVideoProcessingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVideoProcessing',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoProcessingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the video processing configuration details of a site.
     *
     * @param Request - GetVideoProcessingRequest
     *
     * @returns GetVideoProcessingResponse
     *
     * @param GetVideoProcessingRequest $request
     *
     * @return GetVideoProcessingResponse
     */
    public function getVideoProcessing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoProcessingWithOptions($request, $runtime);
    }

    /**
     * This interface is used to obtain the application key (AppKey) for the BOT behavior detection feature in the site\\"s Web Application Firewall (WAF). The key is typically used for authentication and data exchange with the WAF service.
     *
     * @param Request - GetWafBotAppKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWafBotAppKeyResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetWafBotAppKeyResponse
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

        return GetWafBotAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This interface is used to obtain the application key (AppKey) for the BOT behavior detection feature in the site\\"s Web Application Firewall (WAF). The key is typically used for authentication and data exchange with the WAF service.
     *
     * @returns GetWafBotAppKeyResponse
     *
     * @return GetWafBotAppKeyResponse
     */
    public function getWafBotAppKey()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWafBotAppKeyWithOptions($runtime);
    }

    /**
     * Queries the conditions for matching incoming requests that are configured in a WAF rule category for a website. These conditions define how WAF detects and processes different types of requests.
     *
     * @param Request - GetWafFilterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWafFilterResponse
     *
     * @param GetWafFilterRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetWafFilterResponse
     */
    public function getWafFilterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->phase) {
            @$query['Phase'] = $request->phase;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetWafFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the conditions for matching incoming requests that are configured in a WAF rule category for a website. These conditions define how WAF detects and processes different types of requests.
     *
     * @param Request - GetWafFilterRequest
     *
     * @returns GetWafFilterResponse
     *
     * @param GetWafFilterRequest $request
     *
     * @return GetWafFilterResponse
     */
    public function getWafFilter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWafFilterWithOptions($request, $runtime);
    }

    /**
     * Get WAF Quota Details.
     *
     * @param Request - GetWafQuotaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWafQuotaResponse
     *
     * @param GetWafQuotaRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetWafQuotaResponse
     */
    public function getWafQuotaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paths) {
            @$query['Paths'] = $request->paths;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return GetWafQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get WAF Quota Details.
     *
     * @param Request - GetWafQuotaRequest
     *
     * @returns GetWafQuotaResponse
     *
     * @param GetWafQuotaRequest $request
     *
     * @return GetWafQuotaResponse
     */
    public function getWafQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWafQuotaWithOptions($request, $runtime);
    }

    /**
     * Get Details of a Single WAF Rule.
     *
     * @param Request - GetWafRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWafRuleResponse
     *
     * @param GetWafRuleRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetWafRuleResponse
     */
    public function getWafRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWafRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWafRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get Details of a Single WAF Rule.
     *
     * @param Request - GetWafRuleRequest
     *
     * @returns GetWafRuleResponse
     *
     * @param GetWafRuleRequest $request
     *
     * @return GetWafRuleResponse
     */
    public function getWafRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWafRuleWithOptions($request, $runtime);
    }

    /**
     * Get WAF Ruleset Details.
     *
     * @param Request - GetWafRulesetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWafRulesetResponse
     *
     * @param GetWafRulesetRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetWafRulesetResponse
     */
    public function getWafRulesetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->phase) {
            @$query['Phase'] = $request->phase;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWafRuleset',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWafRulesetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get WAF Ruleset Details.
     *
     * @param Request - GetWafRulesetRequest
     *
     * @returns GetWafRulesetResponse
     *
     * @param GetWafRulesetRequest $request
     *
     * @return GetWafRulesetResponse
     */
    public function getWafRuleset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWafRulesetWithOptions($request, $runtime);
    }

    /**
     * Query Cache Reserve Instance List.
     *
     * @param Request - ListCacheReserveInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCacheReserveInstancesResponse
     *
     * @param ListCacheReserveInstancesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListCacheReserveInstancesResponse
     */
    public function listCacheReserveInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListCacheReserveInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Cache Reserve Instance List.
     *
     * @param Request - ListCacheReserveInstancesRequest
     *
     * @returns ListCacheReserveInstancesResponse
     *
     * @param ListCacheReserveInstancesRequest $request
     *
     * @return ListCacheReserveInstancesResponse
     */
    public function listCacheReserveInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCacheReserveInstancesWithOptions($request, $runtime);
    }

    /**
     * Query multiple cache configurations.
     *
     * @param Request - ListCacheRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCacheRulesResponse
     *
     * @param ListCacheRulesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListCacheRulesResponse
     */
    public function listCacheRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListCacheRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query multiple cache configurations.
     *
     * @param Request - ListCacheRulesRequest
     *
     * @returns ListCacheRulesResponse
     *
     * @param ListCacheRulesRequest $request
     *
     * @return ListCacheRulesResponse
     */
    public function listCacheRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCacheRulesWithOptions($request, $runtime);
    }

    /**
     * Lists certificates of a website.
     *
     * @param Request - ListCertificatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCertificatesResponse
     *
     * @param ListCertificatesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListCertificatesResponse
     */
    public function listCertificatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists certificates of a website.
     *
     * @param Request - ListCertificatesRequest
     *
     * @returns ListCertificatesResponse
     *
     * @param ListCertificatesRequest $request
     *
     * @return ListCertificatesResponse
     */
    public function listCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCertificatesWithOptions($request, $runtime);
    }

    /**
     * Lists certificates that match specified records for a website. You can specify multiple records at a time.
     *
     * @param Request - ListCertificatesByRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCertificatesByRecordResponse
     *
     * @param ListCertificatesByRecordRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListCertificatesByRecordResponse
     */
    public function listCertificatesByRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCertificatesByRecord',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCertificatesByRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists certificates that match specified records for a website. You can specify multiple records at a time.
     *
     * @param Request - ListCertificatesByRecordRequest
     *
     * @returns ListCertificatesByRecordResponse
     *
     * @param ListCertificatesByRecordRequest $request
     *
     * @return ListCertificatesByRecordResponse
     */
    public function listCertificatesByRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCertificatesByRecordWithOptions($request, $runtime);
    }

    /**
     * Query TLS Cipher Suite List.
     *
     * @param Request - ListCiphersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCiphersResponse
     *
     * @param ListCiphersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListCiphersResponse
     */
    public function listCiphersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListCiphersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query TLS Cipher Suite List.
     *
     * @param Request - ListCiphersRequest
     *
     * @returns ListCiphersResponse
     *
     * @param ListCiphersRequest $request
     *
     * @return ListCiphersResponse
     */
    public function listCiphers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCiphersWithOptions($request, $runtime);
    }

    /**
     * Queries a list of client certificate authority (CA) certificates for a website.
     *
     * @param Request - ListClientCaCertificatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClientCaCertificatesResponse
     *
     * @param ListClientCaCertificatesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListClientCaCertificatesResponse
     */
    public function listClientCaCertificatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListClientCaCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of client certificate authority (CA) certificates for a website.
     *
     * @param Request - ListClientCaCertificatesRequest
     *
     * @returns ListClientCaCertificatesResponse
     *
     * @param ListClientCaCertificatesRequest $request
     *
     * @return ListClientCaCertificatesResponse
     */
    public function listClientCaCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClientCaCertificatesWithOptions($request, $runtime);
    }

    /**
     * Queries client certificates configured for a website.
     *
     * @param Request - ListClientCertificatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClientCertificatesResponse
     *
     * @param ListClientCertificatesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListClientCertificatesResponse
     */
    public function listClientCertificatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListClientCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries client certificates configured for a website.
     *
     * @param Request - ListClientCertificatesRequest
     *
     * @returns ListClientCertificatesResponse
     *
     * @param ListClientCertificatesRequest $request
     *
     * @return ListClientCertificatesResponse
     */
    public function listClientCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClientCertificatesWithOptions($request, $runtime);
    }

    /**
     * Query the list of compression rules.
     *
     * @param Request - ListCompressionRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCompressionRulesResponse
     *
     * @param ListCompressionRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListCompressionRulesResponse
     */
    public function listCompressionRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListCompressionRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of compression rules.
     *
     * @param Request - ListCompressionRulesRequest
     *
     * @returns ListCompressionRulesResponse
     *
     * @param ListCompressionRulesRequest $request
     *
     * @return ListCompressionRulesResponse
     */
    public function listCompressionRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCompressionRulesWithOptions($request, $runtime);
    }

    /**
     * Batch query whether the IP address is included in the ESA resolution result.
     *
     * @remarks
     * This interface is used to check whether the vs_addr parameter in the vipInfo collection is vip.
     *
     * @param Request - ListESAIPInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListESAIPInfoResponse
     *
     * @param ListESAIPInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListESAIPInfoResponse
     */
    public function listESAIPInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListESAIPInfo',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListESAIPInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch query whether the IP address is included in the ESA resolution result.
     *
     * @remarks
     * This interface is used to check whether the vs_addr parameter in the vipInfo collection is vip.
     *
     * @param Request - ListESAIPInfoRequest
     *
     * @returns ListESAIPInfoResponse
     *
     * @param ListESAIPInfoRequest $request
     *
     * @return ListESAIPInfoResponse
     */
    public function listESAIPInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listESAIPInfoWithOptions($request, $runtime);
    }

    /**
     * Lists domain names that are associated with a containerized application.
     *
     * @param Request - ListEdgeContainerAppRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEdgeContainerAppRecordsResponse
     *
     * @param ListEdgeContainerAppRecordsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListEdgeContainerAppRecordsResponse
     */
    public function listEdgeContainerAppRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListEdgeContainerAppRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists domain names that are associated with a containerized application.
     *
     * @param Request - ListEdgeContainerAppRecordsRequest
     *
     * @returns ListEdgeContainerAppRecordsResponse
     *
     * @param ListEdgeContainerAppRecordsRequest $request
     *
     * @return ListEdgeContainerAppRecordsResponse
     */
    public function listEdgeContainerAppRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEdgeContainerAppRecordsWithOptions($request, $runtime);
    }

    /**
     * Lists versions of all containerized applications.
     *
     * @param Request - ListEdgeContainerAppVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEdgeContainerAppVersionsResponse
     *
     * @param ListEdgeContainerAppVersionsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListEdgeContainerAppVersionsResponse
     */
    public function listEdgeContainerAppVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListEdgeContainerAppVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists versions of all containerized applications.
     *
     * @param Request - ListEdgeContainerAppVersionsRequest
     *
     * @returns ListEdgeContainerAppVersionsResponse
     *
     * @param ListEdgeContainerAppVersionsRequest $request
     *
     * @return ListEdgeContainerAppVersionsResponse
     */
    public function listEdgeContainerAppVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEdgeContainerAppVersionsWithOptions($request, $runtime);
    }

    /**
     * Queries all containerized applications in your Alibaba Cloud account.
     *
     * @param Request - ListEdgeContainerAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEdgeContainerAppsResponse
     *
     * @param ListEdgeContainerAppsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListEdgeContainerAppsResponse
     */
    public function listEdgeContainerAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderKey) {
            @$query['OrderKey'] = $request->orderKey;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchKey) {
            @$query['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->searchType) {
            @$query['SearchType'] = $request->searchType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListEdgeContainerAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all containerized applications in your Alibaba Cloud account.
     *
     * @param Request - ListEdgeContainerAppsRequest
     *
     * @returns ListEdgeContainerAppsResponse
     *
     * @param ListEdgeContainerAppsRequest $request
     *
     * @return ListEdgeContainerAppsResponse
     */
    public function listEdgeContainerApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEdgeContainerAppsWithOptions($request, $runtime);
    }

    /**
     * Queries the records that are associated with Edge Container for a website.
     *
     * @param Request - ListEdgeContainerRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEdgeContainerRecordsResponse
     *
     * @param ListEdgeContainerRecordsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListEdgeContainerRecordsResponse
     */
    public function listEdgeContainerRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListEdgeContainerRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the records that are associated with Edge Container for a website.
     *
     * @param Request - ListEdgeContainerRecordsRequest
     *
     * @returns ListEdgeContainerRecordsResponse
     *
     * @param ListEdgeContainerRecordsRequest $request
     *
     * @return ListEdgeContainerRecordsResponse
     */
    public function listEdgeContainerRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEdgeContainerRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries Edge Routine plans.
     *
     * @param Request - ListEdgeRoutinePlansRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEdgeRoutinePlansResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListEdgeRoutinePlansResponse
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

        return ListEdgeRoutinePlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Edge Routine plans.
     *
     * @returns ListEdgeRoutinePlansResponse
     *
     * @return ListEdgeRoutinePlansResponse
     */
    public function listEdgeRoutinePlans()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEdgeRoutinePlansWithOptions($runtime);
    }

    /**
     * Queries the records that are associated with Edge Routine routes for a website.
     *
     * @remarks
     * >  You can call this operation 100 times per second.
     *
     * @param Request - ListEdgeRoutineRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEdgeRoutineRecordsResponse
     *
     * @param ListEdgeRoutineRecordsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListEdgeRoutineRecordsResponse
     */
    public function listEdgeRoutineRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListEdgeRoutineRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the records that are associated with Edge Routine routes for a website.
     *
     * @remarks
     * >  You can call this operation 100 times per second.
     *
     * @param Request - ListEdgeRoutineRecordsRequest
     *
     * @returns ListEdgeRoutineRecordsResponse
     *
     * @param ListEdgeRoutineRecordsRequest $request
     *
     * @return ListEdgeRoutineRecordsResponse
     */
    public function listEdgeRoutineRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEdgeRoutineRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration details of an incoming HTTP request header modification rule for a website.
     *
     * @param Request - ListHttpIncomingRequestHeaderModificationRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHttpIncomingRequestHeaderModificationRulesResponse
     *
     * @param ListHttpIncomingRequestHeaderModificationRulesRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return ListHttpIncomingRequestHeaderModificationRulesResponse
     */
    public function listHttpIncomingRequestHeaderModificationRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHttpIncomingRequestHeaderModificationRules',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHttpIncomingRequestHeaderModificationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration details of an incoming HTTP request header modification rule for a website.
     *
     * @param Request - ListHttpIncomingRequestHeaderModificationRulesRequest
     *
     * @returns ListHttpIncomingRequestHeaderModificationRulesResponse
     *
     * @param ListHttpIncomingRequestHeaderModificationRulesRequest $request
     *
     * @return ListHttpIncomingRequestHeaderModificationRulesResponse
     */
    public function listHttpIncomingRequestHeaderModificationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHttpIncomingRequestHeaderModificationRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of an incoming HTTP response header modification rule for a website.
     *
     * @param Request - ListHttpIncomingResponseHeaderModificationRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHttpIncomingResponseHeaderModificationRulesResponse
     *
     * @param ListHttpIncomingResponseHeaderModificationRulesRequest $request
     * @param RuntimeOptions                                         $runtime
     *
     * @return ListHttpIncomingResponseHeaderModificationRulesResponse
     */
    public function listHttpIncomingResponseHeaderModificationRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHttpIncomingResponseHeaderModificationRules',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHttpIncomingResponseHeaderModificationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of an incoming HTTP response header modification rule for a website.
     *
     * @param Request - ListHttpIncomingResponseHeaderModificationRulesRequest
     *
     * @returns ListHttpIncomingResponseHeaderModificationRulesResponse
     *
     * @param ListHttpIncomingResponseHeaderModificationRulesRequest $request
     *
     * @return ListHttpIncomingResponseHeaderModificationRulesResponse
     */
    public function listHttpIncomingResponseHeaderModificationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHttpIncomingResponseHeaderModificationRulesWithOptions($request, $runtime);
    }

    /**
     * List of HTTP Request Header Rules.
     *
     * @param Request - ListHttpRequestHeaderModificationRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHttpRequestHeaderModificationRulesResponse
     *
     * @param ListHttpRequestHeaderModificationRulesRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ListHttpRequestHeaderModificationRulesResponse
     */
    public function listHttpRequestHeaderModificationRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListHttpRequestHeaderModificationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List of HTTP Request Header Rules.
     *
     * @param Request - ListHttpRequestHeaderModificationRulesRequest
     *
     * @returns ListHttpRequestHeaderModificationRulesResponse
     *
     * @param ListHttpRequestHeaderModificationRulesRequest $request
     *
     * @return ListHttpRequestHeaderModificationRulesResponse
     */
    public function listHttpRequestHeaderModificationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHttpRequestHeaderModificationRulesWithOptions($request, $runtime);
    }

    /**
     * List of HTTP Response Header Rules.
     *
     * @param Request - ListHttpResponseHeaderModificationRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHttpResponseHeaderModificationRulesResponse
     *
     * @param ListHttpResponseHeaderModificationRulesRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return ListHttpResponseHeaderModificationRulesResponse
     */
    public function listHttpResponseHeaderModificationRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListHttpResponseHeaderModificationRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List of HTTP Response Header Rules.
     *
     * @param Request - ListHttpResponseHeaderModificationRulesRequest
     *
     * @returns ListHttpResponseHeaderModificationRulesResponse
     *
     * @param ListHttpResponseHeaderModificationRulesRequest $request
     *
     * @return ListHttpResponseHeaderModificationRulesResponse
     */
    public function listHttpResponseHeaderModificationRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHttpResponseHeaderModificationRulesWithOptions($request, $runtime);
    }

    /**
     * Query multiple HTTPS application configurations.
     *
     * @param Request - ListHttpsApplicationConfigurationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHttpsApplicationConfigurationsResponse
     *
     * @param ListHttpsApplicationConfigurationsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ListHttpsApplicationConfigurationsResponse
     */
    public function listHttpsApplicationConfigurationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListHttpsApplicationConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query multiple HTTPS application configurations.
     *
     * @param Request - ListHttpsApplicationConfigurationsRequest
     *
     * @returns ListHttpsApplicationConfigurationsResponse
     *
     * @param ListHttpsApplicationConfigurationsRequest $request
     *
     * @return ListHttpsApplicationConfigurationsResponse
     */
    public function listHttpsApplicationConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHttpsApplicationConfigurationsWithOptions($request, $runtime);
    }

    /**
     * Query multiple HTTPS basic configurations.
     *
     * @param Request - ListHttpsBasicConfigurationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHttpsBasicConfigurationsResponse
     *
     * @param ListHttpsBasicConfigurationsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListHttpsBasicConfigurationsResponse
     */
    public function listHttpsBasicConfigurationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListHttpsBasicConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query multiple HTTPS basic configurations.
     *
     * @param Request - ListHttpsBasicConfigurationsRequest
     *
     * @returns ListHttpsBasicConfigurationsResponse
     *
     * @param ListHttpsBasicConfigurationsRequest $request
     *
     * @return ListHttpsBasicConfigurationsResponse
     */
    public function listHttpsBasicConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHttpsBasicConfigurationsWithOptions($request, $runtime);
    }

    /**
     * Query Multiple Site Image Transformation Configurations.
     *
     * @param Request - ListImageTransformsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListImageTransformsResponse
     *
     * @param ListImageTransformsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListImageTransformsResponse
     */
    public function listImageTransformsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListImageTransformsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Multiple Site Image Transformation Configurations.
     *
     * @param Request - ListImageTransformsRequest
     *
     * @returns ListImageTransformsResponse
     *
     * @param ListImageTransformsRequest $request
     *
     * @return ListImageTransformsResponse
     */
    public function listImageTransforms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImageTransformsWithOptions($request, $runtime);
    }

    /**
     * Queries the quota details in a subscription plan.
     *
     * @param Request - ListInstanceQuotasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceQuotasResponse
     *
     * @param ListInstanceQuotasRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListInstanceQuotasResponse
     */
    public function listInstanceQuotasWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListInstanceQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the quota details in a subscription plan.
     *
     * @param Request - ListInstanceQuotasRequest
     *
     * @returns ListInstanceQuotasResponse
     *
     * @param ListInstanceQuotasRequest $request
     *
     * @return ListInstanceQuotasResponse
     */
    public function listInstanceQuotas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceQuotasWithOptions($request, $runtime);
    }

    /**
     * Queries quotas and the actual usage in a plan based on the website or plan ID.
     *
     * @param Request - ListInstanceQuotasWithUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceQuotasWithUsageResponse
     *
     * @param ListInstanceQuotasWithUsageRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListInstanceQuotasWithUsageResponse
     */
    public function listInstanceQuotasWithUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListInstanceQuotasWithUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries quotas and the actual usage in a plan based on the website or plan ID.
     *
     * @param Request - ListInstanceQuotasWithUsageRequest
     *
     * @returns ListInstanceQuotasWithUsageResponse
     *
     * @param ListInstanceQuotasWithUsageRequest $request
     *
     * @return ListInstanceQuotasWithUsageResponse
     */
    public function listInstanceQuotasWithUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceQuotasWithUsageWithOptions($request, $runtime);
    }

    /**
     * Lists all key-value pairs in a namespace in your Alibaba Cloud account.
     *
     * @param Request - ListKvsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListKvsResponse
     *
     * @param ListKvsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return ListKvsResponse
     */
    public function listKvsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListKvsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists all key-value pairs in a namespace in your Alibaba Cloud account.
     *
     * @param Request - ListKvsRequest
     *
     * @returns ListKvsResponse
     *
     * @param ListKvsRequest $request
     *
     * @return ListKvsResponse
     */
    public function listKvs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKvsWithOptions($request, $runtime);
    }

    /**
     * Queries all custom lists and their details in an Alibaba Cloud account. You can specify query arguments to filter the results and display the returned lists by page.
     *
     * @param tmpReq - ListListsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListListsResponse
     *
     * @param ListListsRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return ListListsResponse
     */
    public function listListsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListListsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->queryArgs) {
            $request->queryArgsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queryArgs, 'QueryArgs', 'json');
        }

        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryArgsShrink) {
            @$query['QueryArgs'] = $request->queryArgsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListListsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all custom lists and their details in an Alibaba Cloud account. You can specify query arguments to filter the results and display the returned lists by page.
     *
     * @param Request - ListListsRequest
     *
     * @returns ListListsResponse
     *
     * @param ListListsRequest $request
     *
     * @return ListListsResponse
     */
    public function listLists($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listListsWithOptions($request, $runtime);
    }

    /**
     * Query the status of origins in load balancers.
     *
     * @remarks
     * Query the status of origins under load balancers. You can pass multiple load balancer IDs at once, separated by commas. This is for load balancers that have monitors configured. It will probe the origins in the source address pools used by the load balancers and record the current status of each origin.
     * - Healthy(healthy): The probe result is available.
     * - Unhealthy(unhealthy): The probe result is unavailable.
     * - Unknown(unknown): Unknown, the monitor has not yet probed.
     * - Undetected(undetected): The load balancer to which the origin belongs is not bound to a monitor.
     *
     * @param Request - ListLoadBalancerOriginStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLoadBalancerOriginStatusResponse
     *
     * @param ListLoadBalancerOriginStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListLoadBalancerOriginStatusResponse
     */
    public function listLoadBalancerOriginStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListLoadBalancerOriginStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the status of origins in load balancers.
     *
     * @remarks
     * Query the status of origins under load balancers. You can pass multiple load balancer IDs at once, separated by commas. This is for load balancers that have monitors configured. It will probe the origins in the source address pools used by the load balancers and record the current status of each origin.
     * - Healthy(healthy): The probe result is available.
     * - Unhealthy(unhealthy): The probe result is unavailable.
     * - Unknown(unknown): Unknown, the monitor has not yet probed.
     * - Undetected(undetected): The load balancer to which the origin belongs is not bound to a monitor.
     *
     * @param Request - ListLoadBalancerOriginStatusRequest
     *
     * @returns ListLoadBalancerOriginStatusResponse
     *
     * @param ListLoadBalancerOriginStatusRequest $request
     *
     * @return ListLoadBalancerOriginStatusResponse
     */
    public function listLoadBalancerOriginStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLoadBalancerOriginStatusWithOptions($request, $runtime);
    }

    /**
     * Query Load Balancer Region List.
     *
     * @remarks
     * When creating a load balancer \\"based on country/region scheduling\\" strategy through OpenAPI, use the code of primary or secondary regions to represent traffic from this geographical area.
     *
     * @param Request - ListLoadBalancerRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLoadBalancerRegionsResponse
     *
     * @param ListLoadBalancerRegionsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListLoadBalancerRegionsResponse
     */
    public function listLoadBalancerRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListLoadBalancerRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Load Balancer Region List.
     *
     * @remarks
     * When creating a load balancer \\"based on country/region scheduling\\" strategy through OpenAPI, use the code of primary or secondary regions to represent traffic from this geographical area.
     *
     * @param Request - ListLoadBalancerRegionsRequest
     *
     * @returns ListLoadBalancerRegionsResponse
     *
     * @param ListLoadBalancerRegionsRequest $request
     *
     * @return ListLoadBalancerRegionsResponse
     */
    public function listLoadBalancerRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLoadBalancerRegionsWithOptions($request, $runtime);
    }

    /**
     * Query the list of load balancers.
     *
     * @param Request - ListLoadBalancersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLoadBalancersResponse
     *
     * @param ListLoadBalancersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListLoadBalancersResponse
     */
    public function listLoadBalancersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of load balancers.
     *
     * @param Request - ListLoadBalancersRequest
     *
     * @returns ListLoadBalancersResponse
     *
     * @param ListLoadBalancersRequest $request
     *
     * @return ListLoadBalancersResponse
     */
    public function listLoadBalancers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLoadBalancersWithOptions($request, $runtime);
    }

    /**
     * List Custom Managed Rule Groups.
     *
     * @param Request - ListManagedRulesGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListManagedRulesGroupsResponse
     *
     * @param ListManagedRulesGroupsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListManagedRulesGroupsResponse
     */
    public function listManagedRulesGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListManagedRulesGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List Custom Managed Rule Groups.
     *
     * @param Request - ListManagedRulesGroupsRequest
     *
     * @returns ListManagedRulesGroupsResponse
     *
     * @param ListManagedRulesGroupsRequest $request
     *
     * @return ListManagedRulesGroupsResponse
     */
    public function listManagedRulesGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listManagedRulesGroupsWithOptions($request, $runtime);
    }

    /**
     * Query multiple network optimization configurations.
     *
     * @param Request - ListNetworkOptimizationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNetworkOptimizationsResponse
     *
     * @param ListNetworkOptimizationsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListNetworkOptimizationsResponse
     */
    public function listNetworkOptimizationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListNetworkOptimizationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query multiple network optimization configurations.
     *
     * @param Request - ListNetworkOptimizationsRequest
     *
     * @returns ListNetworkOptimizationsResponse
     *
     * @param ListNetworkOptimizationsRequest $request
     *
     * @return ListNetworkOptimizationsResponse
     */
    public function listNetworkOptimizations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNetworkOptimizationsWithOptions($request, $runtime);
    }

    /**
     * 查询源服务器CA证书列表.
     *
     * @param Request - ListOriginCaCertificatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOriginCaCertificatesResponse
     *
     * @param ListOriginCaCertificatesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListOriginCaCertificatesResponse
     */
    public function listOriginCaCertificatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOriginCaCertificates',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOriginCaCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询源服务器CA证书列表.
     *
     * @param Request - ListOriginCaCertificatesRequest
     *
     * @returns ListOriginCaCertificatesResponse
     *
     * @param ListOriginCaCertificatesRequest $request
     *
     * @return ListOriginCaCertificatesResponse
     */
    public function listOriginCaCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOriginCaCertificatesWithOptions($request, $runtime);
    }

    /**
     * 查询域名回源客户端证书列表.
     *
     * @param Request - ListOriginClientCertificatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOriginClientCertificatesResponse
     *
     * @param ListOriginClientCertificatesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListOriginClientCertificatesResponse
     */
    public function listOriginClientCertificatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOriginClientCertificates',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOriginClientCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询域名回源客户端证书列表.
     *
     * @param Request - ListOriginClientCertificatesRequest
     *
     * @returns ListOriginClientCertificatesResponse
     *
     * @param ListOriginClientCertificatesRequest $request
     *
     * @return ListOriginClientCertificatesResponse
     */
    public function listOriginClientCertificates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOriginClientCertificatesWithOptions($request, $runtime);
    }

    /**
     * List Origin Pools.
     *
     * @param Request - ListOriginPoolsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOriginPoolsResponse
     *
     * @param ListOriginPoolsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListOriginPoolsResponse
     */
    public function listOriginPoolsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListOriginPoolsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List Origin Pools.
     *
     * @param Request - ListOriginPoolsRequest
     *
     * @returns ListOriginPoolsResponse
     *
     * @param ListOriginPoolsRequest $request
     *
     * @return ListOriginPoolsResponse
     */
    public function listOriginPools($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOriginPoolsWithOptions($request, $runtime);
    }

    /**
     * Query multiple origin rule configurations.
     *
     * @param Request - ListOriginRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOriginRulesResponse
     *
     * @param ListOriginRulesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListOriginRulesResponse
     */
    public function listOriginRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListOriginRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query multiple origin rule configurations.
     *
     * @param Request - ListOriginRulesRequest
     *
     * @returns ListOriginRulesResponse
     *
     * @param ListOriginRulesRequest $request
     *
     * @return ListOriginRulesResponse
     */
    public function listOriginRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOriginRulesWithOptions($request, $runtime);
    }

    /**
     * Lists all custom error pages that you created. You can define the page number and the number of entries per page to display the response.
     *
     * @param tmpReq - ListPagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPagesResponse
     *
     * @param ListPagesRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return ListPagesResponse
     */
    public function listPagesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListPagesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->queryArgs) {
            $request->queryArgsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queryArgs, 'QueryArgs', 'json');
        }

        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryArgsShrink) {
            @$query['QueryArgs'] = $request->queryArgsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListPagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists all custom error pages that you created. You can define the page number and the number of entries per page to display the response.
     *
     * @param Request - ListPagesRequest
     *
     * @returns ListPagesResponse
     *
     * @param ListPagesRequest $request
     *
     * @return ListPagesResponse
     */
    public function listPages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPagesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of Domain Name System (DNS) records of a website, including the record value, priority, and authentication configurations. Supports filtering by specifying parameters such as RecordName and RecordMatchType.
     *
     * @remarks
     * The DNS records related to Edge Container, Edge Routine, and TCP/UDP proxy are not returned in this operation.
     *
     * @param Request - ListRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRecordsResponse
     *
     * @param ListRecordsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListRecordsResponse
     */
    public function listRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of Domain Name System (DNS) records of a website, including the record value, priority, and authentication configurations. Supports filtering by specifying parameters such as RecordName and RecordMatchType.
     *
     * @remarks
     * The DNS records related to Edge Container, Edge Routine, and TCP/UDP proxy are not returned in this operation.
     *
     * @param Request - ListRecordsRequest
     *
     * @returns ListRecordsResponse
     *
     * @param ListRecordsRequest $request
     *
     * @return ListRecordsResponse
     */
    public function listRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRecordsWithOptions($request, $runtime);
    }

    /**
     * Query Redirect Rule List.
     *
     * @param Request - ListRedirectRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRedirectRulesResponse
     *
     * @param ListRedirectRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListRedirectRulesResponse
     */
    public function listRedirectRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListRedirectRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Redirect Rule List.
     *
     * @param Request - ListRedirectRulesRequest
     *
     * @returns ListRedirectRulesResponse
     *
     * @param ListRedirectRulesRequest $request
     *
     * @return ListRedirectRulesResponse
     */
    public function listRedirectRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRedirectRulesWithOptions($request, $runtime);
    }

    /**
     * List of Rewrite URL Rules.
     *
     * @param Request - ListRewriteUrlRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRewriteUrlRulesResponse
     *
     * @param ListRewriteUrlRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListRewriteUrlRulesResponse
     */
    public function listRewriteUrlRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListRewriteUrlRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List of Rewrite URL Rules.
     *
     * @param Request - ListRewriteUrlRulesRequest
     *
     * @returns ListRewriteUrlRulesResponse
     *
     * @param ListRewriteUrlRulesRequest $request
     *
     * @return ListRewriteUrlRulesResponse
     */
    public function listRewriteUrlRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRewriteUrlRulesWithOptions($request, $runtime);
    }

    /**
     * Lists the regions to which Edge Routine code can be released for canary deployment.
     *
     * @param Request - ListRoutineCanaryAreasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRoutineCanaryAreasResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListRoutineCanaryAreasResponse
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

        return ListRoutineCanaryAreasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the regions to which Edge Routine code can be released for canary deployment.
     *
     * @returns ListRoutineCanaryAreasResponse
     *
     * @return ListRoutineCanaryAreasResponse
     */
    public function listRoutineCanaryAreas()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRoutineCanaryAreasWithOptions($runtime);
    }

    /**
     * Queries the code versions of a function (routine) by page.
     *
     * @remarks
     * Call this operation to query the code versions of a specific function. Paged query and fuzzy search are supported. You can configure `Name` to specify the name of a function.
     * Specify `PageNumber` and `PageSize` to control the number of entries returned in a request, and use `SearchKeyWord` to specify a keyword for fuzzy search.
     * The response includes the number, description, and creation time of each code version.
     *
     * @param Request - ListRoutineCodeVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRoutineCodeVersionsResponse
     *
     * @param ListRoutineCodeVersionsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListRoutineCodeVersionsResponse
     */
    public function listRoutineCodeVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchKeyWord) {
            @$body['SearchKeyWord'] = $request->searchKeyWord;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListRoutineCodeVersions',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRoutineCodeVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the code versions of a function (routine) by page.
     *
     * @remarks
     * Call this operation to query the code versions of a specific function. Paged query and fuzzy search are supported. You can configure `Name` to specify the name of a function.
     * Specify `PageNumber` and `PageSize` to control the number of entries returned in a request, and use `SearchKeyWord` to specify a keyword for fuzzy search.
     * The response includes the number, description, and creation time of each code version.
     *
     * @param Request - ListRoutineCodeVersionsRequest
     *
     * @returns ListRoutineCodeVersionsResponse
     *
     * @param ListRoutineCodeVersionsRequest $request
     *
     * @return ListRoutineCodeVersionsResponse
     */
    public function listRoutineCodeVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRoutineCodeVersionsWithOptions($request, $runtime);
    }

    /**
     * The records associated with the function.
     *
     * @remarks
     * You can call this operation to query the routes associated with a function. You can specify paged query parameters to obtain the specified number of routes or specify a keyword for fuzzy search to filter specific routes.
     *
     * @param Request - ListRoutineRelatedRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRoutineRelatedRecordsResponse
     *
     * @param ListRoutineRelatedRecordsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListRoutineRelatedRecordsResponse
     */
    public function listRoutineRelatedRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchKeyWord) {
            @$body['SearchKeyWord'] = $request->searchKeyWord;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListRoutineRelatedRecords',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRoutineRelatedRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The records associated with the function.
     *
     * @remarks
     * You can call this operation to query the routes associated with a function. You can specify paged query parameters to obtain the specified number of routes or specify a keyword for fuzzy search to filter specific routes.
     *
     * @param Request - ListRoutineRelatedRecordsRequest
     *
     * @returns ListRoutineRelatedRecordsResponse
     *
     * @param ListRoutineRelatedRecordsRequest $request
     *
     * @return ListRoutineRelatedRecordsResponse
     */
    public function listRoutineRelatedRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRoutineRelatedRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries the routes of an edge function.
     *
     * @param Request - ListRoutineRoutesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRoutineRoutesResponse
     *
     * @param ListRoutineRoutesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListRoutineRoutesResponse
     */
    public function listRoutineRoutesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->routineName) {
            @$query['RoutineName'] = $request->routineName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRoutineRoutes',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRoutineRoutesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the routes of an edge function.
     *
     * @param Request - ListRoutineRoutesRequest
     *
     * @returns ListRoutineRoutesResponse
     *
     * @param ListRoutineRoutesRequest $request
     *
     * @return ListRoutineRoutesResponse
     */
    public function listRoutineRoutes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRoutineRoutesWithOptions($request, $runtime);
    }

    /**
     * Lists the plans in a scheduled prefetch task by task ID.
     *
     * @param Request - ListScheduledPreloadExecutionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScheduledPreloadExecutionsResponse
     *
     * @param ListScheduledPreloadExecutionsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListScheduledPreloadExecutionsResponse
     */
    public function listScheduledPreloadExecutionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListScheduledPreloadExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the plans in a scheduled prefetch task by task ID.
     *
     * @param Request - ListScheduledPreloadExecutionsRequest
     *
     * @returns ListScheduledPreloadExecutionsResponse
     *
     * @param ListScheduledPreloadExecutionsRequest $request
     *
     * @return ListScheduledPreloadExecutionsResponse
     */
    public function listScheduledPreloadExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScheduledPreloadExecutionsWithOptions($request, $runtime);
    }

    /**
     * Queries the scheduled prefetch tasks for a website.
     *
     * @param Request - ListScheduledPreloadJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScheduledPreloadJobsResponse
     *
     * @param ListScheduledPreloadJobsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListScheduledPreloadJobsResponse
     */
    public function listScheduledPreloadJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListScheduledPreloadJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the scheduled prefetch tasks for a website.
     *
     * @param Request - ListScheduledPreloadJobsRequest
     *
     * @returns ListScheduledPreloadJobsResponse
     *
     * @param ListScheduledPreloadJobsRequest $request
     *
     * @return ListScheduledPreloadJobsResponse
     */
    public function listScheduledPreloadJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScheduledPreloadJobsWithOptions($request, $runtime);
    }

    /**
     * Lists all log delivery tasks that are in progress.
     *
     * @param Request - ListSiteDeliveryTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSiteDeliveryTasksResponse
     *
     * @param ListSiteDeliveryTasksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListSiteDeliveryTasksResponse
     */
    public function listSiteDeliveryTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListSiteDeliveryTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists all log delivery tasks that are in progress.
     *
     * @param Request - ListSiteDeliveryTasksRequest
     *
     * @returns ListSiteDeliveryTasksResponse
     *
     * @param ListSiteDeliveryTasksRequest $request
     *
     * @return ListSiteDeliveryTasksResponse
     */
    public function listSiteDeliveryTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSiteDeliveryTasksWithOptions($request, $runtime);
    }

    /**
     * Queries the edge function routes for a website.
     *
     * @param Request - ListSiteRoutesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSiteRoutesResponse
     *
     * @param ListSiteRoutesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListSiteRoutesResponse
     */
    public function listSiteRoutesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->configType) {
            @$query['ConfigType'] = $request->configType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->routeName) {
            @$query['RouteName'] = $request->routeName;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSiteRoutes',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSiteRoutesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the edge function routes for a website.
     *
     * @param Request - ListSiteRoutesRequest
     *
     * @returns ListSiteRoutesResponse
     *
     * @param ListSiteRoutesRequest $request
     *
     * @return ListSiteRoutesResponse
     */
    public function listSiteRoutes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSiteRoutesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about websites in your account, such as the name, status, and configuration of each website.
     *
     * @param tmpReq - ListSitesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSitesResponse
     *
     * @param ListSitesRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return ListSitesResponse
     */
    public function listSitesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListSitesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tagFilter) {
            $request->tagFilterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tagFilter, 'TagFilter', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListSitesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about websites in your account, such as the name, status, and configuration of each website.
     *
     * @param Request - ListSitesRequest
     *
     * @returns ListSitesResponse
     *
     * @param ListSitesRequest $request
     *
     * @return ListSitesResponse
     */
    public function listSites($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSitesWithOptions($request, $runtime);
    }

    /**
     * Queries tags based on the region ID and resource type.
     *
     * @param Request - ListTagResourcesRequest
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
        if (null !== $request->maxItem) {
            @$query['MaxItem'] = $request->maxItem;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries tags based on the region ID and resource type.
     *
     * @param Request - ListTagResourcesRequest
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
     * List of Transport Layer Applications.
     *
     * @param Request - ListTransportLayerApplicationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTransportLayerApplicationsResponse
     *
     * @param ListTransportLayerApplicationsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListTransportLayerApplicationsResponse
     */
    public function listTransportLayerApplicationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTransportLayerApplications',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTransportLayerApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List of Transport Layer Applications.
     *
     * @param Request - ListTransportLayerApplicationsRequest
     *
     * @returns ListTransportLayerApplicationsResponse
     *
     * @param ListTransportLayerApplicationsRequest $request
     *
     * @return ListTransportLayerApplicationsResponse
     */
    public function listTransportLayerApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTransportLayerApplicationsWithOptions($request, $runtime);
    }

    /**
     * Queries the execution status and running information of file upload tasks based on the task time and type.
     *
     * @param Request - ListUploadTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUploadTasksResponse
     *
     * @param ListUploadTasksRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListUploadTasksResponse
     */
    public function listUploadTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListUploadTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the execution status and running information of file upload tasks based on the task time and type.
     *
     * @param Request - ListUploadTasksRequest
     *
     * @returns ListUploadTasksResponse
     *
     * @param ListUploadTasksRequest $request
     *
     * @return ListUploadTasksResponse
     */
    public function listUploadTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUploadTasksWithOptions($request, $runtime);
    }

    /**
     * Queries the list of page monitoring configurations.
     *
     * @param Request - ListUrlObservationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUrlObservationsResponse
     *
     * @param ListUrlObservationsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListUrlObservationsResponse
     */
    public function listUrlObservationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUrlObservations',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUrlObservationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of page monitoring configurations.
     *
     * @param Request - ListUrlObservationsRequest
     *
     * @returns ListUrlObservationsResponse
     *
     * @param ListUrlObservationsRequest $request
     *
     * @return ListUrlObservationsResponse
     */
    public function listUrlObservations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUrlObservationsWithOptions($request, $runtime);
    }

    /**
     * Queries all delivery tasks in your Alibaba Cloud account by page. You can filter the delivery tasks by the category of the delivered real-time logs.
     *
     * @param Request - ListUserDeliveryTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserDeliveryTasksResponse
     *
     * @param ListUserDeliveryTasksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListUserDeliveryTasksResponse
     */
    public function listUserDeliveryTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListUserDeliveryTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all delivery tasks in your Alibaba Cloud account by page. You can filter the delivery tasks by the category of the delivered real-time logs.
     *
     * @param Request - ListUserDeliveryTasksRequest
     *
     * @returns ListUserDeliveryTasksResponse
     *
     * @param ListUserDeliveryTasksRequest $request
     *
     * @return ListUserDeliveryTasksResponse
     */
    public function listUserDeliveryTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserDeliveryTasksWithOptions($request, $runtime);
    }

    /**
     * Queries the plans that you purchased and the details of the plans.
     *
     * @param Request - ListUserRatePlanInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserRatePlanInstancesResponse
     *
     * @param ListUserRatePlanInstancesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListUserRatePlanInstancesResponse
     */
    public function listUserRatePlanInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListUserRatePlanInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the plans that you purchased and the details of the plans.
     *
     * @param Request - ListUserRatePlanInstancesRequest
     *
     * @returns ListUserRatePlanInstancesResponse
     *
     * @param ListUserRatePlanInstancesRequest $request
     *
     * @return ListUserRatePlanInstancesResponse
     */
    public function listUserRatePlanInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserRatePlanInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the functions created in your account and the maximum number of functions supported by your plan. You can call this operation to perform a paged query.
     *
     * @remarks
     * You can call this operation to perform a paged query to query all functions created in your account, the maximum number of functions supported by the billing plan that you use, and the number of functions already created. You can specify `PageNumber` and `PageSize` to control the number of entries to be returned in the response and specify `SearchKeyWord` to perform a fuzzy search to filter specific routine names.
     *
     * @param Request - ListUserRoutinesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserRoutinesResponse
     *
     * @param ListUserRoutinesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListUserRoutinesResponse
     */
    public function listUserRoutinesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchKeyWord) {
            @$query['SearchKeyWord'] = $request->searchKeyWord;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserRoutines',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserRoutinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the functions created in your account and the maximum number of functions supported by your plan. You can call this operation to perform a paged query.
     *
     * @remarks
     * You can call this operation to perform a paged query to query all functions created in your account, the maximum number of functions supported by the billing plan that you use, and the number of functions already created. You can specify `PageNumber` and `PageSize` to control the number of entries to be returned in the response and specify `SearchKeyWord` to perform a fuzzy search to filter specific routine names.
     *
     * @param Request - ListUserRoutinesRequest
     *
     * @returns ListUserRoutinesResponse
     *
     * @param ListUserRoutinesRequest $request
     *
     * @return ListUserRoutinesResponse
     */
    public function listUserRoutines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserRoutinesWithOptions($request, $runtime);
    }

    /**
     * Queries the video processing configurations of a site.
     *
     * @param Request - ListVideoProcessingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVideoProcessingsResponse
     *
     * @param ListVideoProcessingsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListVideoProcessingsResponse
     */
    public function listVideoProcessingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->configType) {
            @$query['ConfigType'] = $request->configType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVideoProcessings',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVideoProcessingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the video processing configurations of a site.
     *
     * @param Request - ListVideoProcessingsRequest
     *
     * @returns ListVideoProcessingsResponse
     *
     * @param ListVideoProcessingsRequest $request
     *
     * @return ListVideoProcessingsResponse
     */
    public function listVideoProcessings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVideoProcessingsWithOptions($request, $runtime);
    }

    /**
     * List WAF Managed Rules.
     *
     * @param tmpReq - ListWafManagedRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWafManagedRulesResponse
     *
     * @param ListWafManagedRulesRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListWafManagedRulesResponse
     */
    public function listWafManagedRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListWafManagedRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->managedRuleset) {
            $request->managedRulesetShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->managedRuleset, 'ManagedRuleset', 'json');
        }

        if (null !== $tmpReq->queryArgs) {
            $request->queryArgsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queryArgs, 'QueryArgs', 'json');
        }

        $query = [];
        if (null !== $request->attackType) {
            @$query['AttackType'] = $request->attackType;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->managedRulesetShrink) {
            @$query['ManagedRuleset'] = $request->managedRulesetShrink;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->protectionLevel) {
            @$query['ProtectionLevel'] = $request->protectionLevel;
        }

        if (null !== $request->queryArgsShrink) {
            @$query['QueryArgs'] = $request->queryArgsShrink;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListWafManagedRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List WAF Managed Rules.
     *
     * @param Request - ListWafManagedRulesRequest
     *
     * @returns ListWafManagedRulesResponse
     *
     * @param ListWafManagedRulesRequest $request
     *
     * @return ListWafManagedRulesResponse
     */
    public function listWafManagedRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWafManagedRulesWithOptions($request, $runtime);
    }

    /**
     * List WAF Phases.
     *
     * @param Request - ListWafPhasesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWafPhasesResponse
     *
     * @param ListWafPhasesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListWafPhasesResponse
     */
    public function listWafPhasesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListWafPhasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List WAF Phases.
     *
     * @param Request - ListWafPhasesRequest
     *
     * @returns ListWafPhasesResponse
     *
     * @param ListWafPhasesRequest $request
     *
     * @return ListWafPhasesResponse
     */
    public function listWafPhases($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWafPhasesWithOptions($request, $runtime);
    }

    /**
     * List WAF Rules.
     *
     * @param tmpReq - ListWafRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWafRulesResponse
     *
     * @param ListWafRulesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ListWafRulesResponse
     */
    public function listWafRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListWafRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->queryArgs) {
            $request->queryArgsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queryArgs, 'QueryArgs', 'json');
        }

        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->phase) {
            @$query['Phase'] = $request->phase;
        }

        if (null !== $request->queryArgsShrink) {
            @$query['QueryArgs'] = $request->queryArgsShrink;
        }

        if (null !== $request->rulesetId) {
            @$query['RulesetId'] = $request->rulesetId;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWafRules',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWafRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List WAF Rules.
     *
     * @param Request - ListWafRulesRequest
     *
     * @returns ListWafRulesResponse
     *
     * @param ListWafRulesRequest $request
     *
     * @return ListWafRulesResponse
     */
    public function listWafRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWafRulesWithOptions($request, $runtime);
    }

    /**
     * List WAF Rule Sets.
     *
     * @param tmpReq - ListWafRulesetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWafRulesetsResponse
     *
     * @param ListWafRulesetsRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ListWafRulesetsResponse
     */
    public function listWafRulesetsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListWafRulesetsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->queryArgs) {
            $request->queryArgsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queryArgs, 'QueryArgs', 'json');
        }

        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->phase) {
            @$query['Phase'] = $request->phase;
        }

        if (null !== $request->queryArgsShrink) {
            @$query['QueryArgs'] = $request->queryArgsShrink;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListWafRulesets',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListWafRulesetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List WAF Rule Sets.
     *
     * @param Request - ListWafRulesetsRequest
     *
     * @returns ListWafRulesetsResponse
     *
     * @param ListWafRulesetsRequest $request
     *
     * @return ListWafRulesetsResponse
     */
    public function listWafRulesets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWafRulesetsWithOptions($request, $runtime);
    }

    /**
     * List WAF Template Rules.
     *
     * @param tmpReq - ListWafTemplateRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWafTemplateRulesResponse
     *
     * @param ListWafTemplateRulesRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return ListWafTemplateRulesResponse
     */
    public function listWafTemplateRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListWafTemplateRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->queryArgs) {
            $request->queryArgsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queryArgs, 'QueryArgs', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->phase) {
            @$query['Phase'] = $request->phase;
        }

        if (null !== $request->queryArgsShrink) {
            @$query['QueryArgs'] = $request->queryArgsShrink;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListWafTemplateRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List WAF Template Rules.
     *
     * @param Request - ListWafTemplateRulesRequest
     *
     * @returns ListWafTemplateRulesResponse
     *
     * @param ListWafTemplateRulesRequest $request
     *
     * @return ListWafTemplateRulesResponse
     */
    public function listWafTemplateRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWafTemplateRulesWithOptions($request, $runtime);
    }

    /**
     * List WAF Rule Usage.
     *
     * @param Request - ListWafUsageOfRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWafUsageOfRulesResponse
     *
     * @param ListWafUsageOfRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListWafUsageOfRulesResponse
     */
    public function listWafUsageOfRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->phase) {
            @$query['Phase'] = $request->phase;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListWafUsageOfRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * List WAF Rule Usage.
     *
     * @param Request - ListWafUsageOfRulesRequest
     *
     * @returns ListWafUsageOfRulesResponse
     *
     * @param ListWafUsageOfRulesRequest $request
     *
     * @return ListWafUsageOfRulesResponse
     */
    public function listWafUsageOfRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWafUsageOfRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about waiting room events for a waiting room.
     *
     * @remarks
     * You can call this operation to query details of all waiting room events related to a waiting room in a website.
     *
     * @param Request - ListWaitingRoomEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWaitingRoomEventsResponse
     *
     * @param ListWaitingRoomEventsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListWaitingRoomEventsResponse
     */
    public function listWaitingRoomEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListWaitingRoomEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about waiting room events for a waiting room.
     *
     * @remarks
     * You can call this operation to query details of all waiting room events related to a waiting room in a website.
     *
     * @param Request - ListWaitingRoomEventsRequest
     *
     * @returns ListWaitingRoomEventsResponse
     *
     * @param ListWaitingRoomEventsRequest $request
     *
     * @return ListWaitingRoomEventsResponse
     */
    public function listWaitingRoomEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWaitingRoomEventsWithOptions($request, $runtime);
    }

    /**
     * Query Waiting Room Bypass Rules.
     *
     * @remarks
     * This API allows users to query the list of waiting room bypass rules associated with a specific site.
     *
     * @param Request - ListWaitingRoomRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWaitingRoomRulesResponse
     *
     * @param ListWaitingRoomRulesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListWaitingRoomRulesResponse
     */
    public function listWaitingRoomRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListWaitingRoomRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Waiting Room Bypass Rules.
     *
     * @remarks
     * This API allows users to query the list of waiting room bypass rules associated with a specific site.
     *
     * @param Request - ListWaitingRoomRulesRequest
     *
     * @returns ListWaitingRoomRulesResponse
     *
     * @param ListWaitingRoomRulesRequest $request
     *
     * @return ListWaitingRoomRulesResponse
     */
    public function listWaitingRoomRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWaitingRoomRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about all waiting rooms in a website.
     *
     * @remarks
     * You can call this operation to query detailed configurations about all waiting rooms in a website, including the status, name, and queuing rules of each waiting room.
     *
     * @param Request - ListWaitingRoomsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWaitingRoomsResponse
     *
     * @param ListWaitingRoomsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListWaitingRoomsResponse
     */
    public function listWaitingRoomsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ListWaitingRoomsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about all waiting rooms in a website.
     *
     * @remarks
     * You can call this operation to query detailed configurations about all waiting rooms in a website, including the status, name, and queuing rules of each waiting room.
     *
     * @param Request - ListWaitingRoomsRequest
     *
     * @returns ListWaitingRoomsResponse
     *
     * @param ListWaitingRoomsRequest $request
     *
     * @return ListWaitingRoomsResponse
     */
    public function listWaitingRooms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWaitingRoomsWithOptions($request, $runtime);
    }

    /**
     * OpenErService.
     *
     * @param Request - OpenErServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenErServiceResponse
     *
     * @param OpenErServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return OpenErServiceResponse
     */
    public function openErServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OpenErService',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenErServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * OpenErService.
     *
     * @param Request - OpenErServiceRequest
     *
     * @returns OpenErServiceResponse
     *
     * @param OpenErServiceRequest $request
     *
     * @return OpenErServiceResponse
     */
    public function openErService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openErServiceWithOptions($request, $runtime);
    }

    /**
     * Prefetches cache.
     *
     * @param tmpReq - PreloadCachesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PreloadCachesResponse
     *
     * @param PreloadCachesRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return PreloadCachesResponse
     */
    public function preloadCachesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PreloadCachesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->content) {
            $request->contentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }

        if (null !== $tmpReq->headers) {
            $request->headersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->headers, 'Headers', 'json');
        }

        $query = [];
        if (null !== $request->contentShrink) {
            @$query['Content'] = $request->contentShrink;
        }

        if (null !== $request->headersShrink) {
            @$query['Headers'] = $request->headersShrink;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return PreloadCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Prefetches cache.
     *
     * @param Request - PreloadCachesRequest
     *
     * @returns PreloadCachesResponse
     *
     * @param PreloadCachesRequest $request
     *
     * @return PreloadCachesResponse
     */
    public function preloadCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preloadCachesWithOptions($request, $runtime);
    }

    /**
     * Releases a specific version of a containerized application. You can call this operation to iterate an application.
     *
     * @param tmpReq - PublishEdgeContainerAppVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishEdgeContainerAppVersionResponse
     *
     * @param PublishEdgeContainerAppVersionRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return PublishEdgeContainerAppVersionResponse
     */
    public function publishEdgeContainerAppVersionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PublishEdgeContainerAppVersionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->regions) {
            $request->regionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->regions, 'Regions', 'json');
        }

        $query = [];
        if (null !== $request->fullRelease) {
            @$query['FullRelease'] = $request->fullRelease;
        }

        if (null !== $request->publishType) {
            @$query['PublishType'] = $request->publishType;
        }

        if (null !== $request->regionsShrink) {
            @$query['Regions'] = $request->regionsShrink;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->percentage) {
            @$body['Percentage'] = $request->percentage;
        }

        if (null !== $request->publishEnv) {
            @$body['PublishEnv'] = $request->publishEnv;
        }

        if (null !== $request->remarks) {
            @$body['Remarks'] = $request->remarks;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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

        return PublishEdgeContainerAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a specific version of a containerized application. You can call this operation to iterate an application.
     *
     * @param Request - PublishEdgeContainerAppVersionRequest
     *
     * @returns PublishEdgeContainerAppVersionResponse
     *
     * @param PublishEdgeContainerAppVersionRequest $request
     *
     * @return PublishEdgeContainerAppVersionResponse
     */
    public function publishEdgeContainerAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishEdgeContainerAppVersionWithOptions($request, $runtime);
    }

    /**
     * Releases a code version of a routine to the staging, canary, or production environment. You can specify the regions where the canary environment is deployed to release your code.
     *
     * @param Request - PublishRoutineCodeVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishRoutineCodeVersionResponse
     *
     * @param PublishRoutineCodeVersionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return PublishRoutineCodeVersionResponse
     */
    public function publishRoutineCodeVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->codeVersion) {
            @$body['CodeVersion'] = $request->codeVersion;
        }

        if (null !== $request->env) {
            @$body['Env'] = $request->env;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return PublishRoutineCodeVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a code version of a routine to the staging, canary, or production environment. You can specify the regions where the canary environment is deployed to release your code.
     *
     * @param Request - PublishRoutineCodeVersionRequest
     *
     * @returns PublishRoutineCodeVersionResponse
     *
     * @param PublishRoutineCodeVersionRequest $request
     *
     * @return PublishRoutineCodeVersionResponse
     */
    public function publishRoutineCodeVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishRoutineCodeVersionWithOptions($request, $runtime);
    }

    /**
     * New Purchase of Cache Retention.
     *
     * @param Request - PurchaseCacheReserveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PurchaseCacheReserveResponse
     *
     * @param PurchaseCacheReserveRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PurchaseCacheReserveResponse
     */
    public function purchaseCacheReserveWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->crRegion) {
            @$query['CrRegion'] = $request->crRegion;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->quotaGb) {
            @$query['QuotaGb'] = $request->quotaGb;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return PurchaseCacheReserveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * New Purchase of Cache Retention.
     *
     * @param Request - PurchaseCacheReserveRequest
     *
     * @returns PurchaseCacheReserveResponse
     *
     * @param PurchaseCacheReserveRequest $request
     *
     * @return PurchaseCacheReserveResponse
     */
    public function purchaseCacheReserve($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purchaseCacheReserveWithOptions($request, $runtime);
    }

    /**
     * Purchase New Package.
     *
     * @remarks
     * 1. The package name and code can be obtained from the DescribeRatePlanPrice interface.
     * 2. If the acceleration area is not overseas, the site must have successfully completed the filing process.
     *
     * @param Request - PurchaseRatePlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PurchaseRatePlanResponse
     *
     * @param PurchaseRatePlanRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PurchaseRatePlanResponse
     */
    public function purchaseRatePlanWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->coverage) {
            @$query['Coverage'] = $request->coverage;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->planCode) {
            @$query['PlanCode'] = $request->planCode;
        }

        if (null !== $request->planName) {
            @$query['PlanName'] = $request->planName;
        }

        if (null !== $request->siteName) {
            @$query['SiteName'] = $request->siteName;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return PurchaseRatePlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Purchase New Package.
     *
     * @remarks
     * 1. The package name and code can be obtained from the DescribeRatePlanPrice interface.
     * 2. If the acceleration area is not overseas, the site must have successfully completed the filing process.
     *
     * @param Request - PurchaseRatePlanRequest
     *
     * @returns PurchaseRatePlanResponse
     *
     * @param PurchaseRatePlanRequest $request
     *
     * @return PurchaseRatePlanResponse
     */
    public function purchaseRatePlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purchaseRatePlanWithOptions($request, $runtime);
    }

    /**
     * Cache Refresh.
     *
     * @param tmpReq - PurgeCachesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PurgeCachesResponse
     *
     * @param PurgeCachesRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return PurgeCachesResponse
     */
    public function purgeCachesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PurgeCachesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->content) {
            $request->contentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }

        $query = [];
        if (null !== $request->contentShrink) {
            @$query['Content'] = $request->contentShrink;
        }

        if (null !== $request->edgeComputePurge) {
            @$query['EdgeComputePurge'] = $request->edgeComputePurge;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return PurgeCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cache Refresh.
     *
     * @param Request - PurgeCachesRequest
     *
     * @returns PurgeCachesResponse
     *
     * @param PurgeCachesRequest $request
     *
     * @return PurgeCachesResponse
     */
    public function purgeCaches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purgeCachesWithOptions($request, $runtime);
    }

    /**
     * Configures a key-value pair for a namespace. The request body can be up to 2 MB.
     *
     * @param Request - PutKvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutKvResponse
     *
     * @param PutKvRequest   $request
     * @param RuntimeOptions $runtime
     *
     * @return PutKvResponse
     */
    public function putKvWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->base64) {
            @$query['Base64'] = $request->base64;
        }

        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->expirationTtl) {
            @$query['ExpirationTtl'] = $request->expirationTtl;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        $body = [];
        if (null !== $request->value) {
            @$body['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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

        return PutKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a key-value pair for a namespace. The request body can be up to 2 MB.
     *
     * @param Request - PutKvRequest
     *
     * @returns PutKvResponse
     *
     * @param PutKvRequest $request
     *
     * @return PutKvResponse
     */
    public function putKv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putKvWithOptions($request, $runtime);
    }

    /**
     * Configures a large key-value pair for a namespace. The request body can be up to 25 MB.
     *
     * @remarks
     * This operation allows you to upload a larger request body than by using [PutKv](~~PutKv~~). For small request bodies, we recommend that you use [PutKv](~~PutKv~~) to minimize the server processing time. This operation must be called by using SDKs. The following sample code uses the Golang SDK and PutKvWithHighCapacityAdvance to call the operation.
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
     *
     * @param Request - PutKvWithHighCapacityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutKvWithHighCapacityResponse
     *
     * @param PutKvWithHighCapacityRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PutKvWithHighCapacityResponse
     */
    public function putKvWithHighCapacityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return PutKvWithHighCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a large key-value pair for a namespace. The request body can be up to 25 MB.
     *
     * @remarks
     * This operation allows you to upload a larger request body than by using [PutKv](~~PutKv~~). For small request bodies, we recommend that you use [PutKv](~~PutKv~~) to minimize the server processing time. This operation must be called by using SDKs. The following sample code uses the Golang SDK and PutKvWithHighCapacityAdvance to call the operation.
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
     *
     * @param Request - PutKvWithHighCapacityRequest
     *
     * @returns PutKvWithHighCapacityResponse
     *
     * @param PutKvWithHighCapacityRequest $request
     *
     * @return PutKvWithHighCapacityResponse
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
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'ESA',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $putKvWithHighCapacityReq = new PutKvWithHighCapacityRequest([]);
        Utils::convert($request, $putKvWithHighCapacityReq);
        if (null !== $request->urlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->urlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $putKvWithHighCapacityReq->url = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->putKvWithHighCapacityWithOptions($putKvWithHighCapacityReq, $runtime);
    }

    /**
     * Rebuilds the staging environment for containerized applications.
     *
     * @param Request - RebuildEdgeContainerAppStagingEnvRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebuildEdgeContainerAppStagingEnvResponse
     *
     * @param RebuildEdgeContainerAppStagingEnvRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return RebuildEdgeContainerAppStagingEnvResponse
     */
    public function rebuildEdgeContainerAppStagingEnvWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return RebuildEdgeContainerAppStagingEnvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rebuilds the staging environment for containerized applications.
     *
     * @param Request - RebuildEdgeContainerAppStagingEnvRequest
     *
     * @returns RebuildEdgeContainerAppStagingEnvResponse
     *
     * @param RebuildEdgeContainerAppStagingEnvRequest $request
     *
     * @return RebuildEdgeContainerAppStagingEnvResponse
     */
    public function rebuildEdgeContainerAppStagingEnv($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebuildEdgeContainerAppStagingEnvWithOptions($request, $runtime);
    }

    /**
     * Resets the progress of a scheduled prefetch task and starts the prefetch from the beginning.
     *
     * @param Request - ResetScheduledPreloadJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetScheduledPreloadJobResponse
     *
     * @param ResetScheduledPreloadJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ResetScheduledPreloadJobResponse
     */
    public function resetScheduledPreloadJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return ResetScheduledPreloadJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the progress of a scheduled prefetch task and starts the prefetch from the beginning.
     *
     * @param Request - ResetScheduledPreloadJobRequest
     *
     * @returns ResetScheduledPreloadJobResponse
     *
     * @param ResetScheduledPreloadJobRequest $request
     *
     * @return ResetScheduledPreloadJobResponse
     */
    public function resetScheduledPreloadJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetScheduledPreloadJobWithOptions($request, $runtime);
    }

    /**
     * Revokes an activated client certificate.
     *
     * @param Request - RevokeClientCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeClientCertificateResponse
     *
     * @param RevokeClientCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RevokeClientCertificateResponse
     */
    public function revokeClientCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return RevokeClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes an activated client certificate.
     *
     * @param Request - RevokeClientCertificateRequest
     *
     * @returns RevokeClientCertificateResponse
     *
     * @param RevokeClientCertificateRequest $request
     *
     * @return RevokeClientCertificateResponse
     */
    public function revokeClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeClientCertificateWithOptions($request, $runtime);
    }

    /**
     * Rolls back a version of a containerized application.
     *
     * @param Request - RollbackEdgeContainerAppVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RollbackEdgeContainerAppVersionResponse
     *
     * @param RollbackEdgeContainerAppVersionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return RollbackEdgeContainerAppVersionResponse
     */
    public function rollbackEdgeContainerAppVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->percentage) {
            @$query['Percentage'] = $request->percentage;
        }

        if (null !== $request->usedPercent) {
            @$query['UsedPercent'] = $request->usedPercent;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['AppId'] = $request->appId;
        }

        if (null !== $request->remarks) {
            @$body['Remarks'] = $request->remarks;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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

        return RollbackEdgeContainerAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rolls back a version of a containerized application.
     *
     * @param Request - RollbackEdgeContainerAppVersionRequest
     *
     * @returns RollbackEdgeContainerAppVersionResponse
     *
     * @param RollbackEdgeContainerAppVersionRequest $request
     *
     * @return RollbackEdgeContainerAppVersionResponse
     */
    public function rollbackEdgeContainerAppVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackEdgeContainerAppVersionWithOptions($request, $runtime);
    }

    /**
     * Configures whether to enable certificates and update certificate information for a website.
     *
     * @param Request - SetCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetCertificateResponse
     *
     * @param SetCertificateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetCertificateResponse
     */
    public function setCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $body = [];
        if (null !== $request->casId) {
            @$body['CasId'] = $request->casId;
        }

        if (null !== $request->certificate) {
            @$body['Certificate'] = $request->certificate;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->privateKey) {
            @$body['PrivateKey'] = $request->privateKey;
        }

        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->siteId) {
            @$body['SiteId'] = $request->siteId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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

        return SetCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures whether to enable certificates and update certificate information for a website.
     *
     * @param Request - SetCertificateRequest
     *
     * @returns SetCertificateResponse
     *
     * @param SetCertificateRequest $request
     *
     * @return SetCertificateResponse
     */
    public function setCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setCertificateWithOptions($request, $runtime);
    }

    /**
     * Associates domain names with a client CA certificate. If no certificate is specified, domain names are associated with an Edge Security Acceleration (ESA)-managed CA certificate.
     *
     * @param tmpReq - SetClientCertificateHostnamesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetClientCertificateHostnamesResponse
     *
     * @param SetClientCertificateHostnamesRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return SetClientCertificateHostnamesResponse
     */
    public function setClientCertificateHostnamesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SetClientCertificateHostnamesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->hostnames) {
            $request->hostnamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->hostnames, 'Hostnames', 'json');
        }

        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $body = [];
        if (null !== $request->hostnamesShrink) {
            @$body['Hostnames'] = $request->hostnamesShrink;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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

        return SetClientCertificateHostnamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates domain names with a client CA certificate. If no certificate is specified, domain names are associated with an Edge Security Acceleration (ESA)-managed CA certificate.
     *
     * @param Request - SetClientCertificateHostnamesRequest
     *
     * @returns SetClientCertificateHostnamesResponse
     *
     * @param SetClientCertificateHostnamesRequest $request
     *
     * @return SetClientCertificateHostnamesResponse
     */
    public function setClientCertificateHostnames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setClientCertificateHostnamesWithOptions($request, $runtime);
    }

    /**
     * Configures smart HTTP DDoS protection.
     *
     * @param Request - SetHttpDDoSAttackIntelligentProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetHttpDDoSAttackIntelligentProtectionResponse
     *
     * @param SetHttpDDoSAttackIntelligentProtectionRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SetHttpDDoSAttackIntelligentProtectionResponse
     */
    public function setHttpDDoSAttackIntelligentProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aiMode) {
            @$query['AiMode'] = $request->aiMode;
        }

        if (null !== $request->aiTemplate) {
            @$query['AiTemplate'] = $request->aiTemplate;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return SetHttpDDoSAttackIntelligentProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures smart HTTP DDoS protection.
     *
     * @param Request - SetHttpDDoSAttackIntelligentProtectionRequest
     *
     * @returns SetHttpDDoSAttackIntelligentProtectionResponse
     *
     * @param SetHttpDDoSAttackIntelligentProtectionRequest $request
     *
     * @return SetHttpDDoSAttackIntelligentProtectionResponse
     */
    public function setHttpDDoSAttackIntelligentProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setHttpDDoSAttackIntelligentProtectionWithOptions($request, $runtime);
    }

    /**
     * Configures HTTP DDoS attack protection for a website.
     *
     * @param Request - SetHttpDDoSAttackProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetHttpDDoSAttackProtectionResponse
     *
     * @param SetHttpDDoSAttackProtectionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetHttpDDoSAttackProtectionResponse
     */
    public function setHttpDDoSAttackProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->globalMode) {
            @$query['GlobalMode'] = $request->globalMode;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return SetHttpDDoSAttackProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures HTTP DDoS attack protection for a website.
     *
     * @param Request - SetHttpDDoSAttackProtectionRequest
     *
     * @returns SetHttpDDoSAttackProtectionResponse
     *
     * @param SetHttpDDoSAttackProtectionRequest $request
     *
     * @return SetHttpDDoSAttackProtectionResponse
     */
    public function setHttpDDoSAttackProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setHttpDDoSAttackProtectionWithOptions($request, $runtime);
    }

    /**
     * 为域名回源客户端证书绑定域名.
     *
     * @param tmpReq - SetOriginClientCertificateHostnamesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetOriginClientCertificateHostnamesResponse
     *
     * @param SetOriginClientCertificateHostnamesRequest $tmpReq
     * @param RuntimeOptions                             $runtime
     *
     * @return SetOriginClientCertificateHostnamesResponse
     */
    public function setOriginClientCertificateHostnamesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SetOriginClientCertificateHostnamesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->hostnames) {
            $request->hostnamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->hostnames, 'Hostnames', 'json');
        }

        $body = [];
        if (null !== $request->hostnamesShrink) {
            @$body['Hostnames'] = $request->hostnamesShrink;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->siteId) {
            @$body['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetOriginClientCertificateHostnames',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetOriginClientCertificateHostnamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 为域名回源客户端证书绑定域名.
     *
     * @param Request - SetOriginClientCertificateHostnamesRequest
     *
     * @returns SetOriginClientCertificateHostnamesResponse
     *
     * @param SetOriginClientCertificateHostnamesRequest $request
     *
     * @return SetOriginClientCertificateHostnamesResponse
     */
    public function setOriginClientCertificateHostnames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setOriginClientCertificateHostnamesWithOptions($request, $runtime);
    }

    /**
     * Starts a scheduled prefetch plan based on the plan ID.
     *
     * @param Request - StartScheduledPreloadExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartScheduledPreloadExecutionResponse
     *
     * @param StartScheduledPreloadExecutionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return StartScheduledPreloadExecutionResponse
     */
    public function startScheduledPreloadExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return StartScheduledPreloadExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a scheduled prefetch plan based on the plan ID.
     *
     * @param Request - StartScheduledPreloadExecutionRequest
     *
     * @returns StartScheduledPreloadExecutionResponse
     *
     * @param StartScheduledPreloadExecutionRequest $request
     *
     * @return StartScheduledPreloadExecutionResponse
     */
    public function startScheduledPreloadExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startScheduledPreloadExecutionWithOptions($request, $runtime);
    }

    /**
     * Stops a scheduled prefetch plan based on the plan ID.
     *
     * @param Request - StopScheduledPreloadExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopScheduledPreloadExecutionResponse
     *
     * @param StopScheduledPreloadExecutionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return StopScheduledPreloadExecutionResponse
     */
    public function stopScheduledPreloadExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return StopScheduledPreloadExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a scheduled prefetch plan based on the plan ID.
     *
     * @param Request - StopScheduledPreloadExecutionRequest
     *
     * @returns StopScheduledPreloadExecutionResponse
     *
     * @param StopScheduledPreloadExecutionRequest $request
     *
     * @return StopScheduledPreloadExecutionResponse
     */
    public function stopScheduledPreloadExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopScheduledPreloadExecutionWithOptions($request, $runtime);
    }

    /**
     * Adds one or more tags to resources.
     *
     * @param Request - TagResourcesRequest
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
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2024-09-10',
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
     * Adds one or more tags to resources.
     *
     * @param Request - TagResourcesRequest
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
     * Deletes a resource tag based on a specified resource ID.
     *
     * @param Request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a resource tag based on a specified resource ID.
     *
     * @param Request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
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
     * Cache Reserve Specification Change.
     *
     * @param Request - UpdateCacheReserveSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCacheReserveSpecResponse
     *
     * @param UpdateCacheReserveSpecRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateCacheReserveSpecResponse
     */
    public function updateCacheReserveSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->targetQuotaGb) {
            @$query['TargetQuotaGb'] = $request->targetQuotaGb;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateCacheReserveSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cache Reserve Specification Change.
     *
     * @param Request - UpdateCacheReserveSpecRequest
     *
     * @returns UpdateCacheReserveSpecResponse
     *
     * @param UpdateCacheReserveSpecRequest $request
     *
     * @return UpdateCacheReserveSpecResponse
     */
    public function updateCacheReserveSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCacheReserveSpecWithOptions($request, $runtime);
    }

    /**
     * Modify cache configuration.
     *
     * @param Request - UpdateCacheRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCacheRuleResponse
     *
     * @param UpdateCacheRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateCacheRuleResponse
     */
    public function updateCacheRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->additionalCacheablePorts) {
            @$query['AdditionalCacheablePorts'] = $request->additionalCacheablePorts;
        }

        if (null !== $request->browserCacheMode) {
            @$query['BrowserCacheMode'] = $request->browserCacheMode;
        }

        if (null !== $request->browserCacheTtl) {
            @$query['BrowserCacheTtl'] = $request->browserCacheTtl;
        }

        if (null !== $request->bypassCache) {
            @$query['BypassCache'] = $request->bypassCache;
        }

        if (null !== $request->cacheDeceptionArmor) {
            @$query['CacheDeceptionArmor'] = $request->cacheDeceptionArmor;
        }

        if (null !== $request->cacheReserveEligibility) {
            @$query['CacheReserveEligibility'] = $request->cacheReserveEligibility;
        }

        if (null !== $request->checkPresenceCookie) {
            @$query['CheckPresenceCookie'] = $request->checkPresenceCookie;
        }

        if (null !== $request->checkPresenceHeader) {
            @$query['CheckPresenceHeader'] = $request->checkPresenceHeader;
        }

        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->edgeCacheMode) {
            @$query['EdgeCacheMode'] = $request->edgeCacheMode;
        }

        if (null !== $request->edgeCacheTtl) {
            @$query['EdgeCacheTtl'] = $request->edgeCacheTtl;
        }

        if (null !== $request->edgeStatusCodeCacheTtl) {
            @$query['EdgeStatusCodeCacheTtl'] = $request->edgeStatusCodeCacheTtl;
        }

        if (null !== $request->includeCookie) {
            @$query['IncludeCookie'] = $request->includeCookie;
        }

        if (null !== $request->includeHeader) {
            @$query['IncludeHeader'] = $request->includeHeader;
        }

        if (null !== $request->postBodyCacheKey) {
            @$query['PostBodyCacheKey'] = $request->postBodyCacheKey;
        }

        if (null !== $request->postBodySizeLimit) {
            @$query['PostBodySizeLimit'] = $request->postBodySizeLimit;
        }

        if (null !== $request->postCache) {
            @$query['PostCache'] = $request->postCache;
        }

        if (null !== $request->queryString) {
            @$query['QueryString'] = $request->queryString;
        }

        if (null !== $request->queryStringMode) {
            @$query['QueryStringMode'] = $request->queryStringMode;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->serveStale) {
            @$query['ServeStale'] = $request->serveStale;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->sortQueryStringForCache) {
            @$query['SortQueryStringForCache'] = $request->sortQueryStringForCache;
        }

        if (null !== $request->userDeviceType) {
            @$query['UserDeviceType'] = $request->userDeviceType;
        }

        if (null !== $request->userGeo) {
            @$query['UserGeo'] = $request->userGeo;
        }

        if (null !== $request->userLanguage) {
            @$query['UserLanguage'] = $request->userLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateCacheRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify cache configuration.
     *
     * @param Request - UpdateCacheRuleRequest
     *
     * @returns UpdateCacheRuleResponse
     *
     * @param UpdateCacheRuleRequest $request
     *
     * @return UpdateCacheRuleResponse
     */
    public function updateCacheRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCacheRuleWithOptions($request, $runtime);
    }

    /**
     * Modifies the cache tag configuration of your website. You can call this operation when you need to specify tags in the Cache-Tag response header to use the purge by cache tag feature.
     *
     * @param Request - UpdateCacheTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCacheTagResponse
     *
     * @param UpdateCacheTagRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateCacheTagResponse
     */
    public function updateCacheTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->caseInsensitive) {
            @$query['CaseInsensitive'] = $request->caseInsensitive;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        if (null !== $request->tagName) {
            @$query['TagName'] = $request->tagName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateCacheTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the cache tag configuration of your website. You can call this operation when you need to specify tags in the Cache-Tag response header to use the purge by cache tag feature.
     *
     * @param Request - UpdateCacheTagRequest
     *
     * @returns UpdateCacheTagResponse
     *
     * @param UpdateCacheTagRequest $request
     *
     * @return UpdateCacheTagResponse
     */
    public function updateCacheTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCacheTagWithOptions($request, $runtime);
    }

    /**
     * Modifies the CNAME flattening configuration of a website.
     *
     * @param Request - UpdateCnameFlatteningRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCnameFlatteningResponse
     *
     * @param UpdateCnameFlatteningRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateCnameFlatteningResponse
     */
    public function updateCnameFlatteningWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flattenMode) {
            @$query['FlattenMode'] = $request->flattenMode;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateCnameFlatteningResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the CNAME flattening configuration of a website.
     *
     * @param Request - UpdateCnameFlatteningRequest
     *
     * @returns UpdateCnameFlatteningResponse
     *
     * @param UpdateCnameFlatteningRequest $request
     *
     * @return UpdateCnameFlatteningResponse
     */
    public function updateCnameFlattening($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCnameFlatteningWithOptions($request, $runtime);
    }

    /**
     * Modify compression rule.
     *
     * @param Request - UpdateCompressionRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCompressionRuleResponse
     *
     * @param UpdateCompressionRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateCompressionRuleResponse
     */
    public function updateCompressionRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->brotli) {
            @$query['Brotli'] = $request->brotli;
        }

        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->gzip) {
            @$query['Gzip'] = $request->gzip;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->zstd) {
            @$query['Zstd'] = $request->zstd;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateCompressionRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify compression rule.
     *
     * @param Request - UpdateCompressionRuleRequest
     *
     * @returns UpdateCompressionRuleResponse
     *
     * @param UpdateCompressionRuleRequest $request
     *
     * @return UpdateCompressionRuleResponse
     */
    public function updateCompressionRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCompressionRuleWithOptions($request, $runtime);
    }

    /**
     * Modifies the configuration of the Chinese mainland network access optimization.
     *
     * @param Request - UpdateCrossBorderOptimizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCrossBorderOptimizationResponse
     *
     * @param UpdateCrossBorderOptimizationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateCrossBorderOptimizationResponse
     */
    public function updateCrossBorderOptimizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCrossBorderOptimization',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCrossBorderOptimizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of the Chinese mainland network access optimization.
     *
     * @param Request - UpdateCrossBorderOptimizationRequest
     *
     * @returns UpdateCrossBorderOptimizationResponse
     *
     * @param UpdateCrossBorderOptimizationRequest $request
     *
     * @return UpdateCrossBorderOptimizationResponse
     */
    public function updateCrossBorderOptimization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCrossBorderOptimizationWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a custom scenario-specific policy.
     *
     * @param Request - UpdateCustomScenePolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCustomScenePolicyResponse
     *
     * @param UpdateCustomScenePolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateCustomScenePolicyResponse
     */
    public function updateCustomScenePolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->objects) {
            @$query['Objects'] = $request->objects;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->siteIds) {
            @$query['SiteIds'] = $request->siteIds;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->template) {
            @$query['Template'] = $request->template;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateCustomScenePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a custom scenario-specific policy.
     *
     * @param Request - UpdateCustomScenePolicyRequest
     *
     * @returns UpdateCustomScenePolicyResponse
     *
     * @param UpdateCustomScenePolicyRequest $request
     *
     * @return UpdateCustomScenePolicyResponse
     */
    public function updateCustomScenePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomScenePolicyWithOptions($request, $runtime);
    }

    /**
     * Modifies the development mode configuration of your website. If you enable Development Mode, all requests bypass caching components on POPs and are redirected to the origin server. This allows clients to retrieve the most recent resources on the origin server.
     *
     * @param Request - UpdateDevelopmentModeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDevelopmentModeResponse
     *
     * @param UpdateDevelopmentModeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateDevelopmentModeResponse
     */
    public function updateDevelopmentModeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateDevelopmentModeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the development mode configuration of your website. If you enable Development Mode, all requests bypass caching components on POPs and are redirected to the origin server. This allows clients to retrieve the most recent resources on the origin server.
     *
     * @param Request - UpdateDevelopmentModeRequest
     *
     * @returns UpdateDevelopmentModeResponse
     *
     * @param UpdateDevelopmentModeRequest $request
     *
     * @return UpdateDevelopmentModeResponse
     */
    public function updateDevelopmentMode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDevelopmentModeWithOptions($request, $runtime);
    }

    /**
     * Updates the log collection configuration of a containerized application.
     *
     * @param Request - UpdateEdgeContainerAppLogRiverRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEdgeContainerAppLogRiverResponse
     *
     * @param UpdateEdgeContainerAppLogRiverRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateEdgeContainerAppLogRiverResponse
     */
    public function updateEdgeContainerAppLogRiverWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->stdout) {
            @$query['Stdout'] = $request->stdout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateEdgeContainerAppLogRiverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the log collection configuration of a containerized application.
     *
     * @param Request - UpdateEdgeContainerAppLogRiverRequest
     *
     * @returns UpdateEdgeContainerAppLogRiverResponse
     *
     * @param UpdateEdgeContainerAppLogRiverRequest $request
     *
     * @return UpdateEdgeContainerAppLogRiverResponse
     */
    public function updateEdgeContainerAppLogRiver($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEdgeContainerAppLogRiverWithOptions($request, $runtime);
    }

    /**
     * Updates the resource reservation configuration of an edge container.
     *
     * @param tmpReq - UpdateEdgeContainerAppResourceReserveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEdgeContainerAppResourceReserveResponse
     *
     * @param UpdateEdgeContainerAppResourceReserveRequest $tmpReq
     * @param RuntimeOptions                               $runtime
     *
     * @return UpdateEdgeContainerAppResourceReserveResponse
     */
    public function updateEdgeContainerAppResourceReserveWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateEdgeContainerAppResourceReserveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->reserveSet) {
            $request->reserveSetShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->reserveSet, 'ReserveSet', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->durationTime) {
            @$query['DurationTime'] = $request->durationTime;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->forever) {
            @$query['Forever'] = $request->forever;
        }

        if (null !== $request->reserveSetShrink) {
            @$query['ReserveSet'] = $request->reserveSetShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateEdgeContainerAppResourceReserveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the resource reservation configuration of an edge container.
     *
     * @param Request - UpdateEdgeContainerAppResourceReserveRequest
     *
     * @returns UpdateEdgeContainerAppResourceReserveResponse
     *
     * @param UpdateEdgeContainerAppResourceReserveRequest $request
     *
     * @return UpdateEdgeContainerAppResourceReserveResponse
     */
    public function updateEdgeContainerAppResourceReserve($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEdgeContainerAppResourceReserveWithOptions($request, $runtime);
    }

    /**
     * Updates the HTTP incoming request header modification rule.
     *
     * @param tmpReq - UpdateHttpIncomingRequestHeaderModificationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHttpIncomingRequestHeaderModificationRuleResponse
     *
     * @param UpdateHttpIncomingRequestHeaderModificationRuleRequest $tmpReq
     * @param RuntimeOptions                                         $runtime
     *
     * @return UpdateHttpIncomingRequestHeaderModificationRuleResponse
     */
    public function updateHttpIncomingRequestHeaderModificationRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateHttpIncomingRequestHeaderModificationRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->requestHeaderModification) {
            $request->requestHeaderModificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->requestHeaderModification, 'RequestHeaderModification', 'json');
        }

        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->requestHeaderModificationShrink) {
            @$query['RequestHeaderModification'] = $request->requestHeaderModificationShrink;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateHttpIncomingRequestHeaderModificationRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateHttpIncomingRequestHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the HTTP incoming request header modification rule.
     *
     * @param Request - UpdateHttpIncomingRequestHeaderModificationRuleRequest
     *
     * @returns UpdateHttpIncomingRequestHeaderModificationRuleResponse
     *
     * @param UpdateHttpIncomingRequestHeaderModificationRuleRequest $request
     *
     * @return UpdateHttpIncomingRequestHeaderModificationRuleResponse
     */
    public function updateHttpIncomingRequestHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHttpIncomingRequestHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * Updates the configuration of modifying HTTP response headers for a website.
     *
     * @param tmpReq - UpdateHttpIncomingResponseHeaderModificationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHttpIncomingResponseHeaderModificationRuleResponse
     *
     * @param UpdateHttpIncomingResponseHeaderModificationRuleRequest $tmpReq
     * @param RuntimeOptions                                          $runtime
     *
     * @return UpdateHttpIncomingResponseHeaderModificationRuleResponse
     */
    public function updateHttpIncomingResponseHeaderModificationRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateHttpIncomingResponseHeaderModificationRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->responseHeaderModification) {
            $request->responseHeaderModificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->responseHeaderModification, 'ResponseHeaderModification', 'json');
        }

        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->responseHeaderModificationShrink) {
            @$query['ResponseHeaderModification'] = $request->responseHeaderModificationShrink;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateHttpIncomingResponseHeaderModificationRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateHttpIncomingResponseHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the configuration of modifying HTTP response headers for a website.
     *
     * @param Request - UpdateHttpIncomingResponseHeaderModificationRuleRequest
     *
     * @returns UpdateHttpIncomingResponseHeaderModificationRuleResponse
     *
     * @param UpdateHttpIncomingResponseHeaderModificationRuleRequest $request
     *
     * @return UpdateHttpIncomingResponseHeaderModificationRuleResponse
     */
    public function updateHttpIncomingResponseHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHttpIncomingResponseHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * Modify HTTP Request Header Rules.
     *
     * @param tmpReq - UpdateHttpRequestHeaderModificationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHttpRequestHeaderModificationRuleResponse
     *
     * @param UpdateHttpRequestHeaderModificationRuleRequest $tmpReq
     * @param RuntimeOptions                                 $runtime
     *
     * @return UpdateHttpRequestHeaderModificationRuleResponse
     */
    public function updateHttpRequestHeaderModificationRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateHttpRequestHeaderModificationRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->requestHeaderModification) {
            $request->requestHeaderModificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->requestHeaderModification, 'RequestHeaderModification', 'json');
        }

        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->requestHeaderModificationShrink) {
            @$query['RequestHeaderModification'] = $request->requestHeaderModificationShrink;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateHttpRequestHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify HTTP Request Header Rules.
     *
     * @param Request - UpdateHttpRequestHeaderModificationRuleRequest
     *
     * @returns UpdateHttpRequestHeaderModificationRuleResponse
     *
     * @param UpdateHttpRequestHeaderModificationRuleRequest $request
     *
     * @return UpdateHttpRequestHeaderModificationRuleResponse
     */
    public function updateHttpRequestHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHttpRequestHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * Modify HTTP response header rules.
     *
     * @param tmpReq - UpdateHttpResponseHeaderModificationRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHttpResponseHeaderModificationRuleResponse
     *
     * @param UpdateHttpResponseHeaderModificationRuleRequest $tmpReq
     * @param RuntimeOptions                                  $runtime
     *
     * @return UpdateHttpResponseHeaderModificationRuleResponse
     */
    public function updateHttpResponseHeaderModificationRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateHttpResponseHeaderModificationRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->responseHeaderModification) {
            $request->responseHeaderModificationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->responseHeaderModification, 'ResponseHeaderModification', 'json');
        }

        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->responseHeaderModificationShrink) {
            @$query['ResponseHeaderModification'] = $request->responseHeaderModificationShrink;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateHttpResponseHeaderModificationRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify HTTP response header rules.
     *
     * @param Request - UpdateHttpResponseHeaderModificationRuleRequest
     *
     * @returns UpdateHttpResponseHeaderModificationRuleResponse
     *
     * @param UpdateHttpResponseHeaderModificationRuleRequest $request
     *
     * @return UpdateHttpResponseHeaderModificationRuleResponse
     */
    public function updateHttpResponseHeaderModificationRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHttpResponseHeaderModificationRuleWithOptions($request, $runtime);
    }

    /**
     * Modify HTTPS Application Configuration.
     *
     * @param Request - UpdateHttpsApplicationConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHttpsApplicationConfigurationResponse
     *
     * @param UpdateHttpsApplicationConfigurationRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateHttpsApplicationConfigurationResponse
     */
    public function updateHttpsApplicationConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->altSvc) {
            @$query['AltSvc'] = $request->altSvc;
        }

        if (null !== $request->altSvcClear) {
            @$query['AltSvcClear'] = $request->altSvcClear;
        }

        if (null !== $request->altSvcMa) {
            @$query['AltSvcMa'] = $request->altSvcMa;
        }

        if (null !== $request->altSvcPersist) {
            @$query['AltSvcPersist'] = $request->altSvcPersist;
        }

        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->hsts) {
            @$query['Hsts'] = $request->hsts;
        }

        if (null !== $request->hstsIncludeSubdomains) {
            @$query['HstsIncludeSubdomains'] = $request->hstsIncludeSubdomains;
        }

        if (null !== $request->hstsMaxAge) {
            @$query['HstsMaxAge'] = $request->hstsMaxAge;
        }

        if (null !== $request->hstsPreload) {
            @$query['HstsPreload'] = $request->hstsPreload;
        }

        if (null !== $request->httpsForce) {
            @$query['HttpsForce'] = $request->httpsForce;
        }

        if (null !== $request->httpsForceCode) {
            @$query['HttpsForceCode'] = $request->httpsForceCode;
        }

        if (null !== $request->httpsNoSniDeny) {
            @$query['HttpsNoSniDeny'] = $request->httpsNoSniDeny;
        }

        if (null !== $request->httpsSniVerify) {
            @$query['HttpsSniVerify'] = $request->httpsSniVerify;
        }

        if (null !== $request->httpsSniWhitelist) {
            @$query['HttpsSniWhitelist'] = $request->httpsSniWhitelist;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateHttpsApplicationConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify HTTPS Application Configuration.
     *
     * @param Request - UpdateHttpsApplicationConfigurationRequest
     *
     * @returns UpdateHttpsApplicationConfigurationResponse
     *
     * @param UpdateHttpsApplicationConfigurationRequest $request
     *
     * @return UpdateHttpsApplicationConfigurationResponse
     */
    public function updateHttpsApplicationConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHttpsApplicationConfigurationWithOptions($request, $runtime);
    }

    /**
     * Modify HTTPS Basic Configuration.
     *
     * @param Request - UpdateHttpsBasicConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHttpsBasicConfigurationResponse
     *
     * @param UpdateHttpsBasicConfigurationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateHttpsBasicConfigurationResponse
     */
    public function updateHttpsBasicConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ciphersuite) {
            @$query['Ciphersuite'] = $request->ciphersuite;
        }

        if (null !== $request->ciphersuiteGroup) {
            @$query['CiphersuiteGroup'] = $request->ciphersuiteGroup;
        }

        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->http2) {
            @$query['Http2'] = $request->http2;
        }

        if (null !== $request->http3) {
            @$query['Http3'] = $request->http3;
        }

        if (null !== $request->https) {
            @$query['Https'] = $request->https;
        }

        if (null !== $request->ocspStapling) {
            @$query['OcspStapling'] = $request->ocspStapling;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->tls10) {
            @$query['Tls10'] = $request->tls10;
        }

        if (null !== $request->tls11) {
            @$query['Tls11'] = $request->tls11;
        }

        if (null !== $request->tls12) {
            @$query['Tls12'] = $request->tls12;
        }

        if (null !== $request->tls13) {
            @$query['Tls13'] = $request->tls13;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateHttpsBasicConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify HTTPS Basic Configuration.
     *
     * @param Request - UpdateHttpsBasicConfigurationRequest
     *
     * @returns UpdateHttpsBasicConfigurationResponse
     *
     * @param UpdateHttpsBasicConfigurationRequest $request
     *
     * @return UpdateHttpsBasicConfigurationResponse
     */
    public function updateHttpsBasicConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateHttpsBasicConfigurationWithOptions($request, $runtime);
    }

    /**
     * Modifies the IPv6 configuration of a website.
     *
     * @param Request - UpdateIPv6Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateIPv6Response
     *
     * @param UpdateIPv6Request $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateIPv6Response
     */
    public function updateIPv6WithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateIPv6Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the IPv6 configuration of a website.
     *
     * @param Request - UpdateIPv6Request
     *
     * @returns UpdateIPv6Response
     *
     * @param UpdateIPv6Request $request
     *
     * @return UpdateIPv6Response
     */
    public function updateIPv6($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateIPv6WithOptions($request, $runtime);
    }

    /**
     * Modify Site Image Transformation Configuration.
     *
     * @param Request - UpdateImageTransformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateImageTransformResponse
     *
     * @param UpdateImageTransformRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateImageTransformResponse
     */
    public function updateImageTransformWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateImageTransformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Site Image Transformation Configuration.
     *
     * @param Request - UpdateImageTransformRequest
     *
     * @returns UpdateImageTransformResponse
     *
     * @param UpdateImageTransformRequest $request
     *
     * @return UpdateImageTransformResponse
     */
    public function updateImageTransform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageTransformWithOptions($request, $runtime);
    }

    /**
     * Updates a custom list.
     *
     * @param tmpReq - UpdateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateListResponse
     *
     * @param UpdateListRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateListResponse
     */
    public function updateListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->items) {
            $request->itemsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->items, 'Items', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->itemsShrink) {
            @$body['Items'] = $request->itemsShrink;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return UpdateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a custom list.
     *
     * @param Request - UpdateListRequest
     *
     * @returns UpdateListResponse
     *
     * @param UpdateListRequest $request
     *
     * @return UpdateListResponse
     */
    public function updateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateListWithOptions($request, $runtime);
    }

    /**
     * Modify Load Balancer.
     *
     * @remarks
     * Through this interface, you can modify multiple configurations of the load balancer, including but not limited to the name of the load balancer, whether to enable acceleration, session persistence strategy, and various advanced settings related to traffic routing.>Notice: Changes to certain parameters may affect the stability of existing services, please operate with caution.
     *
     * @param tmpReq - UpdateLoadBalancerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLoadBalancerResponse
     *
     * @param UpdateLoadBalancerRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateLoadBalancerResponse
     */
    public function updateLoadBalancerWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateLoadBalancerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->adaptiveRouting) {
            $request->adaptiveRoutingShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->adaptiveRouting, 'AdaptiveRouting', 'json');
        }

        if (null !== $tmpReq->defaultPools) {
            $request->defaultPoolsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->defaultPools, 'DefaultPools', 'json');
        }

        if (null !== $tmpReq->monitor) {
            $request->monitorShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->monitor, 'Monitor', 'json');
        }

        if (null !== $tmpReq->randomSteering) {
            $request->randomSteeringShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->randomSteering, 'RandomSteering', 'json');
        }

        if (null !== $tmpReq->rules) {
            $request->rulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }

        $query = [];
        if (null !== $request->adaptiveRoutingShrink) {
            @$query['AdaptiveRouting'] = $request->adaptiveRoutingShrink;
        }

        if (null !== $request->defaultPoolsShrink) {
            @$query['DefaultPools'] = $request->defaultPoolsShrink;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->fallbackPool) {
            @$query['FallbackPool'] = $request->fallbackPool;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->monitorShrink) {
            @$query['Monitor'] = $request->monitorShrink;
        }

        if (null !== $request->randomSteeringShrink) {
            @$query['RandomSteering'] = $request->randomSteeringShrink;
        }

        if (null !== $request->regionPools) {
            @$query['RegionPools'] = $request->regionPools;
        }

        if (null !== $request->rulesShrink) {
            @$query['Rules'] = $request->rulesShrink;
        }

        if (null !== $request->sessionAffinity) {
            @$query['SessionAffinity'] = $request->sessionAffinity;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->steeringPolicy) {
            @$query['SteeringPolicy'] = $request->steeringPolicy;
        }

        if (null !== $request->subRegionPools) {
            @$query['SubRegionPools'] = $request->subRegionPools;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Load Balancer.
     *
     * @remarks
     * Through this interface, you can modify multiple configurations of the load balancer, including but not limited to the name of the load balancer, whether to enable acceleration, session persistence strategy, and various advanced settings related to traffic routing.>Notice: Changes to certain parameters may affect the stability of existing services, please operate with caution.
     *
     * @param Request - UpdateLoadBalancerRequest
     *
     * @returns UpdateLoadBalancerResponse
     *
     * @param UpdateLoadBalancerRequest $request
     *
     * @return UpdateLoadBalancerResponse
     */
    public function updateLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * Modifies the configuration of managed transforms for your website.
     *
     * @param Request - UpdateManagedTransformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateManagedTransformResponse
     *
     * @param UpdateManagedTransformRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateManagedTransformResponse
     */
    public function updateManagedTransformWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addClientGeolocationHeader) {
            @$query['AddClientGeolocationHeader'] = $request->addClientGeolocationHeader;
        }

        if (null !== $request->addRealClientIpHeader) {
            @$query['AddRealClientIpHeader'] = $request->addRealClientIpHeader;
        }

        if (null !== $request->realClientIpHeaderName) {
            @$query['RealClientIpHeaderName'] = $request->realClientIpHeaderName;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateManagedTransformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of managed transforms for your website.
     *
     * @param Request - UpdateManagedTransformRequest
     *
     * @returns UpdateManagedTransformResponse
     *
     * @param UpdateManagedTransformRequest $request
     *
     * @return UpdateManagedTransformResponse
     */
    public function updateManagedTransform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateManagedTransformWithOptions($request, $runtime);
    }

    /**
     * Modify network optimization configuration.
     *
     * @param Request - UpdateNetworkOptimizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateNetworkOptimizationResponse
     *
     * @param UpdateNetworkOptimizationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateNetworkOptimizationResponse
     */
    public function updateNetworkOptimizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->grpc) {
            @$query['Grpc'] = $request->grpc;
        }

        if (null !== $request->http2Origin) {
            @$query['Http2Origin'] = $request->http2Origin;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->smartRouting) {
            @$query['SmartRouting'] = $request->smartRouting;
        }

        if (null !== $request->uploadMaxFilesize) {
            @$query['UploadMaxFilesize'] = $request->uploadMaxFilesize;
        }

        if (null !== $request->websocket) {
            @$query['Websocket'] = $request->websocket;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateNetworkOptimizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify network optimization configuration.
     *
     * @param Request - UpdateNetworkOptimizationRequest
     *
     * @returns UpdateNetworkOptimizationResponse
     *
     * @param UpdateNetworkOptimizationRequest $request
     *
     * @return UpdateNetworkOptimizationResponse
     */
    public function updateNetworkOptimization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateNetworkOptimizationWithOptions($request, $runtime);
    }

    /**
     * Modify the Monitor.
     *
     * @param tmpReq - UpdateOriginPoolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOriginPoolResponse
     *
     * @param UpdateOriginPoolRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateOriginPoolResponse
     */
    public function updateOriginPoolWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateOriginPoolShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->origins) {
            $request->originsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->origins, 'Origins', 'json');
        }

        $query = [];
        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->originsShrink) {
            @$query['Origins'] = $request->originsShrink;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateOriginPoolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify the Monitor.
     *
     * @param Request - UpdateOriginPoolRequest
     *
     * @returns UpdateOriginPoolResponse
     *
     * @param UpdateOriginPoolRequest $request
     *
     * @return UpdateOriginPoolResponse
     */
    public function updateOriginPool($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOriginPoolWithOptions($request, $runtime);
    }

    /**
     * Enables or disables IP convergence.
     *
     * @param Request - UpdateOriginProtectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOriginProtectionResponse
     *
     * @param UpdateOriginProtectionRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateOriginProtectionResponse
     */
    public function updateOriginProtectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoConfirmIPList) {
            @$query['AutoConfirmIPList'] = $request->autoConfirmIPList;
        }

        if (null !== $request->originConverge) {
            @$query['OriginConverge'] = $request->originConverge;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateOriginProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables IP convergence.
     *
     * @param Request - UpdateOriginProtectionRequest
     *
     * @returns UpdateOriginProtectionResponse
     *
     * @param UpdateOriginProtectionRequest $request
     *
     * @return UpdateOriginProtectionResponse
     */
    public function updateOriginProtection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOriginProtectionWithOptions($request, $runtime);
    }

    /**
     * Updates the IP whitelist for origin protection used by a website to the latest version.
     *
     * @param Request - UpdateOriginProtectionIpWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOriginProtectionIpWhiteListResponse
     *
     * @param UpdateOriginProtectionIpWhiteListRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UpdateOriginProtectionIpWhiteListResponse
     */
    public function updateOriginProtectionIpWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateOriginProtectionIpWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the IP whitelist for origin protection used by a website to the latest version.
     *
     * @param Request - UpdateOriginProtectionIpWhiteListRequest
     *
     * @returns UpdateOriginProtectionIpWhiteListResponse
     *
     * @param UpdateOriginProtectionIpWhiteListRequest $request
     *
     * @return UpdateOriginProtectionIpWhiteListResponse
     */
    public function updateOriginProtectionIpWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOriginProtectionIpWhiteListWithOptions($request, $runtime);
    }

    /**
     * Modify Origin Rule Configuration for Site.
     *
     * @param Request - UpdateOriginRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOriginRuleResponse
     *
     * @param UpdateOriginRuleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateOriginRuleResponse
     */
    public function updateOriginRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->dnsRecord) {
            @$query['DnsRecord'] = $request->dnsRecord;
        }

        if (null !== $request->follow302Enable) {
            @$query['Follow302Enable'] = $request->follow302Enable;
        }

        if (null !== $request->follow302MaxTries) {
            @$query['Follow302MaxTries'] = $request->follow302MaxTries;
        }

        if (null !== $request->follow302RetainArgs) {
            @$query['Follow302RetainArgs'] = $request->follow302RetainArgs;
        }

        if (null !== $request->follow302RetainHeader) {
            @$query['Follow302RetainHeader'] = $request->follow302RetainHeader;
        }

        if (null !== $request->follow302TargetHost) {
            @$query['Follow302TargetHost'] = $request->follow302TargetHost;
        }

        if (null !== $request->originHost) {
            @$query['OriginHost'] = $request->originHost;
        }

        if (null !== $request->originHttpPort) {
            @$query['OriginHttpPort'] = $request->originHttpPort;
        }

        if (null !== $request->originHttpsPort) {
            @$query['OriginHttpsPort'] = $request->originHttpsPort;
        }

        if (null !== $request->originMtls) {
            @$query['OriginMtls'] = $request->originMtls;
        }

        if (null !== $request->originReadTimeout) {
            @$query['OriginReadTimeout'] = $request->originReadTimeout;
        }

        if (null !== $request->originScheme) {
            @$query['OriginScheme'] = $request->originScheme;
        }

        if (null !== $request->originSni) {
            @$query['OriginSni'] = $request->originSni;
        }

        if (null !== $request->originVerify) {
            @$query['OriginVerify'] = $request->originVerify;
        }

        if (null !== $request->range) {
            @$query['Range'] = $request->range;
        }

        if (null !== $request->rangeChunkSize) {
            @$query['RangeChunkSize'] = $request->rangeChunkSize;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateOriginRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Origin Rule Configuration for Site.
     *
     * @param Request - UpdateOriginRuleRequest
     *
     * @returns UpdateOriginRuleResponse
     *
     * @param UpdateOriginRuleRequest $request
     *
     * @return UpdateOriginRuleResponse
     */
    public function updateOriginRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOriginRuleWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a custom error page, such as the name, description, content type, and content of the page.
     *
     * @param Request - UpdatePageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePageResponse
     *
     * @param UpdatePageRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UpdatePageResponse
     */
    public function updatePageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->contentType) {
            @$body['ContentType'] = $request->contentType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return UpdatePageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a custom error page, such as the name, description, content type, and content of the page.
     *
     * @param Request - UpdatePageRequest
     *
     * @returns UpdatePageResponse
     *
     * @param UpdatePageRequest $request
     *
     * @return UpdatePageResponse
     */
    public function updatePage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePageWithOptions($request, $runtime);
    }

    /**
     * 套餐变配.
     *
     * @param Request - UpdateRatePlanSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRatePlanSpecResponse
     *
     * @param UpdateRatePlanSpecRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateRatePlanSpecResponse
     */
    public function updateRatePlanSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->targetPlanCode) {
            @$query['TargetPlanCode'] = $request->targetPlanCode;
        }

        if (null !== $request->targetPlanName) {
            @$query['TargetPlanName'] = $request->targetPlanName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateRatePlanSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 套餐变配.
     *
     * @param Request - UpdateRatePlanSpecRequest
     *
     * @returns UpdateRatePlanSpecResponse
     *
     * @param UpdateRatePlanSpecRequest $request
     *
     * @return UpdateRatePlanSpecResponse
     */
    public function updateRatePlanSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRatePlanSpecWithOptions($request, $runtime);
    }

    /**
     * Updates multiple types of DNS records and origin authentication configurations.
     *
     * @remarks
     * This operation allows you to update multiple types of DNS records, including but not limited to A/AAAA, CNAME, NS, MX, TXT, CAA, SRV, and URI. You can modify the record content by providing the necessary fields such as Value, Priority, and Flag. For origins added in CNAME records such as OSS and S3, the API enables you to configure authentication details to ensure secure access.
     * ### [](#)Usage notes
     * *   The record value (Value) must match the record type. For example, the CNAME record should correspond to the target domain name.
     * *   You must specify a priority (Priority) for some record types, such as MX and SRV.
     * *   You must specify specific fields such as Flag and Tag for CAA records.
     * *   When you update security records such as CERT and SSHFP, you must accurately set fields such as Type and Algorithm.
     * *   If your origin type is OSS or S3, configure the authentication details in AuthConf based on the permissions.
     *
     * @param tmpReq - UpdateRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRecordResponse
     *
     * @param UpdateRecordRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateRecordResponse
     */
    public function updateRecordWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateRecordShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->authConf) {
            $request->authConfShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->authConf, 'AuthConf', 'json');
        }

        if (null !== $tmpReq->data) {
            $request->dataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->data, 'Data', 'json');
        }

        $query = [];
        if (null !== $request->authConfShrink) {
            @$query['AuthConf'] = $request->authConfShrink;
        }

        if (null !== $request->bizName) {
            @$query['BizName'] = $request->bizName;
        }

        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->dataShrink) {
            @$query['Data'] = $request->dataShrink;
        }

        if (null !== $request->hostPolicy) {
            @$query['HostPolicy'] = $request->hostPolicy;
        }

        if (null !== $request->proxied) {
            @$query['Proxied'] = $request->proxied;
        }

        if (null !== $request->recordId) {
            @$query['RecordId'] = $request->recordId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->ttl) {
            @$query['Ttl'] = $request->ttl;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates multiple types of DNS records and origin authentication configurations.
     *
     * @remarks
     * This operation allows you to update multiple types of DNS records, including but not limited to A/AAAA, CNAME, NS, MX, TXT, CAA, SRV, and URI. You can modify the record content by providing the necessary fields such as Value, Priority, and Flag. For origins added in CNAME records such as OSS and S3, the API enables you to configure authentication details to ensure secure access.
     * ### [](#)Usage notes
     * *   The record value (Value) must match the record type. For example, the CNAME record should correspond to the target domain name.
     * *   You must specify a priority (Priority) for some record types, such as MX and SRV.
     * *   You must specify specific fields such as Flag and Tag for CAA records.
     * *   When you update security records such as CERT and SSHFP, you must accurately set fields such as Type and Algorithm.
     * *   If your origin type is OSS or S3, configure the authentication details in AuthConf based on the permissions.
     *
     * @param Request - UpdateRecordRequest
     *
     * @returns UpdateRecordResponse
     *
     * @param UpdateRecordRequest $request
     *
     * @return UpdateRecordResponse
     */
    public function updateRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecordWithOptions($request, $runtime);
    }

    /**
     * Update Redirect Rule.
     *
     * @param Request - UpdateRedirectRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRedirectRuleResponse
     *
     * @param UpdateRedirectRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateRedirectRuleResponse
     */
    public function updateRedirectRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->reserveQueryString) {
            @$query['ReserveQueryString'] = $request->reserveQueryString;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->statusCode) {
            @$query['StatusCode'] = $request->statusCode;
        }

        if (null !== $request->targetUrl) {
            @$query['TargetUrl'] = $request->targetUrl;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateRedirectRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update Redirect Rule.
     *
     * @param Request - UpdateRedirectRuleRequest
     *
     * @returns UpdateRedirectRuleResponse
     *
     * @param UpdateRedirectRuleRequest $request
     *
     * @return UpdateRedirectRuleResponse
     */
    public function updateRedirectRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRedirectRuleWithOptions($request, $runtime);
    }

    /**
     * Modify Rewrite URL Rule.
     *
     * @param Request - UpdateRewriteUrlRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRewriteUrlRuleResponse
     *
     * @param UpdateRewriteUrlRuleRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateRewriteUrlRuleResponse
     */
    public function updateRewriteUrlRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->queryString) {
            @$query['QueryString'] = $request->queryString;
        }

        if (null !== $request->rewriteQueryStringType) {
            @$query['RewriteQueryStringType'] = $request->rewriteQueryStringType;
        }

        if (null !== $request->rewriteUriType) {
            @$query['RewriteUriType'] = $request->rewriteUriType;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->uri) {
            @$query['Uri'] = $request->uri;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateRewriteUrlRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Rewrite URL Rule.
     *
     * @param Request - UpdateRewriteUrlRuleRequest
     *
     * @returns UpdateRewriteUrlRuleResponse
     *
     * @param UpdateRewriteUrlRuleRequest $request
     *
     * @return UpdateRewriteUrlRuleResponse
     */
    public function updateRewriteUrlRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRewriteUrlRuleWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of a routine.
     *
     * @param Request - UpdateRoutineConfigDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRoutineConfigDescriptionResponse
     *
     * @param UpdateRoutineConfigDescriptionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateRoutineConfigDescriptionResponse
     */
    public function updateRoutineConfigDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRoutineConfigDescription',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRoutineConfigDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of a routine.
     *
     * @param Request - UpdateRoutineConfigDescriptionRequest
     *
     * @returns UpdateRoutineConfigDescriptionResponse
     *
     * @param UpdateRoutineConfigDescriptionRequest $request
     *
     * @return UpdateRoutineConfigDescriptionResponse
     */
    public function updateRoutineConfigDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRoutineConfigDescriptionWithOptions($request, $runtime);
    }

    /**
     * Modifies the route configuration of an edge function.
     *
     * @param Request - UpdateRoutineRouteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRoutineRouteResponse
     *
     * @param UpdateRoutineRouteRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateRoutineRouteResponse
     */
    public function updateRoutineRouteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bypass) {
            @$query['Bypass'] = $request->bypass;
        }

        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->fallback) {
            @$query['Fallback'] = $request->fallback;
        }

        if (null !== $request->routeEnable) {
            @$query['RouteEnable'] = $request->routeEnable;
        }

        if (null !== $request->routeName) {
            @$query['RouteName'] = $request->routeName;
        }

        if (null !== $request->routineName) {
            @$query['RoutineName'] = $request->routineName;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRoutineRoute',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRoutineRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the route configuration of an edge function.
     *
     * @param Request - UpdateRoutineRouteRequest
     *
     * @returns UpdateRoutineRouteResponse
     *
     * @param UpdateRoutineRouteRequest $request
     *
     * @return UpdateRoutineRouteResponse
     */
    public function updateRoutineRoute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRoutineRouteWithOptions($request, $runtime);
    }

    /**
     * Updates a scheduled prefetch plan based on the plan ID.
     *
     * @param Request - UpdateScheduledPreloadExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateScheduledPreloadExecutionResponse
     *
     * @param UpdateScheduledPreloadExecutionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateScheduledPreloadExecutionResponse
     */
    public function updateScheduledPreloadExecutionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$body['Interval'] = $request->interval;
        }

        if (null !== $request->sliceLen) {
            @$body['SliceLen'] = $request->sliceLen;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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

        return UpdateScheduledPreloadExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a scheduled prefetch plan based on the plan ID.
     *
     * @param Request - UpdateScheduledPreloadExecutionRequest
     *
     * @returns UpdateScheduledPreloadExecutionResponse
     *
     * @param UpdateScheduledPreloadExecutionRequest $request
     *
     * @return UpdateScheduledPreloadExecutionResponse
     */
    public function updateScheduledPreloadExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateScheduledPreloadExecutionWithOptions($request, $runtime);
    }

    /**
     * Modifies the search engine crawler configuration for a website.
     *
     * @param Request - UpdateSeoBypassRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSeoBypassResponse
     *
     * @param UpdateSeoBypassRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateSeoBypassResponse
     */
    public function updateSeoBypassWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateSeoBypassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the search engine crawler configuration for a website.
     *
     * @param Request - UpdateSeoBypassRequest
     *
     * @returns UpdateSeoBypassResponse
     *
     * @param UpdateSeoBypassRequest $request
     *
     * @return UpdateSeoBypassResponse
     */
    public function updateSeoBypass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSeoBypassWithOptions($request, $runtime);
    }

    /**
     * Converts the DNS setup option of a website.
     *
     * @remarks
     * When you change the DNS setup of a website from NS to CNAME, note the following prerequisites:
     * *   The website only has proxied A/AAAA and CNAME records.
     * *   The DNS passthrough mode and custom nameserver features are not enabled for the website.
     *
     * @param Request - UpdateSiteAccessTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSiteAccessTypeResponse
     *
     * @param UpdateSiteAccessTypeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateSiteAccessTypeResponse
     */
    public function updateSiteAccessTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessType) {
            @$query['AccessType'] = $request->accessType;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateSiteAccessTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Converts the DNS setup option of a website.
     *
     * @remarks
     * When you change the DNS setup of a website from NS to CNAME, note the following prerequisites:
     * *   The website only has proxied A/AAAA and CNAME records.
     * *   The DNS passthrough mode and custom nameserver features are not enabled for the website.
     *
     * @param Request - UpdateSiteAccessTypeRequest
     *
     * @returns UpdateSiteAccessTypeResponse
     *
     * @param UpdateSiteAccessTypeRequest $request
     *
     * @return UpdateSiteAccessTypeResponse
     */
    public function updateSiteAccessType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSiteAccessTypeWithOptions($request, $runtime);
    }

    /**
     * Modifies the service location for a single website. This updates the acceleration configuration of the website to adapt to changes in traffic distribution, and improve user experience in specific regions.
     *
     * @param Request - UpdateSiteCoverageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSiteCoverageResponse
     *
     * @param UpdateSiteCoverageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateSiteCoverageResponse
     */
    public function updateSiteCoverageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->coverage) {
            @$query['Coverage'] = $request->coverage;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateSiteCoverageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the service location for a single website. This updates the acceleration configuration of the website to adapt to changes in traffic distribution, and improve user experience in specific regions.
     *
     * @param Request - UpdateSiteCoverageRequest
     *
     * @returns UpdateSiteCoverageResponse
     *
     * @param UpdateSiteCoverageRequest $request
     *
     * @return UpdateSiteCoverageResponse
     */
    public function updateSiteCoverage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSiteCoverageWithOptions($request, $runtime);
    }

    /**
     * Modifies the configuration of custom request header, response header, and cookie fields that are used to capture logs of a website.
     *
     * @param tmpReq - UpdateSiteCustomLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSiteCustomLogResponse
     *
     * @param UpdateSiteCustomLogRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateSiteCustomLogResponse
     */
    public function updateSiteCustomLogWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateSiteCustomLogShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->cookies) {
            $request->cookiesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cookies, 'Cookies', 'json');
        }

        if (null !== $tmpReq->requestHeaders) {
            $request->requestHeadersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->requestHeaders, 'RequestHeaders', 'json');
        }

        if (null !== $tmpReq->responseHeaders) {
            $request->responseHeadersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->responseHeaders, 'ResponseHeaders', 'json');
        }

        $body = [];
        if (null !== $request->cookiesShrink) {
            @$body['Cookies'] = $request->cookiesShrink;
        }

        if (null !== $request->requestHeadersShrink) {
            @$body['RequestHeaders'] = $request->requestHeadersShrink;
        }

        if (null !== $request->responseHeadersShrink) {
            @$body['ResponseHeaders'] = $request->responseHeadersShrink;
        }

        if (null !== $request->siteId) {
            @$body['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return UpdateSiteCustomLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configuration of custom request header, response header, and cookie fields that are used to capture logs of a website.
     *
     * @param Request - UpdateSiteCustomLogRequest
     *
     * @returns UpdateSiteCustomLogResponse
     *
     * @param UpdateSiteCustomLogRequest $request
     *
     * @return UpdateSiteCustomLogResponse
     */
    public function updateSiteCustomLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSiteCustomLogWithOptions($request, $runtime);
    }

    /**
     * Modifies a real-time log delivery task.
     *
     * @param Request - UpdateSiteDeliveryTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSiteDeliveryTaskResponse
     *
     * @param UpdateSiteDeliveryTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateSiteDeliveryTaskResponse
     */
    public function updateSiteDeliveryTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessType) {
            @$body['BusinessType'] = $request->businessType;
        }

        if (null !== $request->discardRate) {
            @$body['DiscardRate'] = $request->discardRate;
        }

        if (null !== $request->fieldName) {
            @$body['FieldName'] = $request->fieldName;
        }

        if (null !== $request->filterVer) {
            @$body['FilterVer'] = $request->filterVer;
        }

        if (null !== $request->siteId) {
            @$body['SiteId'] = $request->siteId;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return UpdateSiteDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a real-time log delivery task.
     *
     * @param Request - UpdateSiteDeliveryTaskRequest
     *
     * @returns UpdateSiteDeliveryTaskResponse
     *
     * @param UpdateSiteDeliveryTaskRequest $request
     *
     * @return UpdateSiteDeliveryTaskResponse
     */
    public function updateSiteDeliveryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSiteDeliveryTaskWithOptions($request, $runtime);
    }

    /**
     * Changes the status of a real-time log delivery task.
     *
     * @param Request - UpdateSiteDeliveryTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSiteDeliveryTaskStatusResponse
     *
     * @param UpdateSiteDeliveryTaskStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateSiteDeliveryTaskStatusResponse
     */
    public function updateSiteDeliveryTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateSiteDeliveryTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the status of a real-time log delivery task.
     *
     * @param Request - UpdateSiteDeliveryTaskStatusRequest
     *
     * @returns UpdateSiteDeliveryTaskStatusResponse
     *
     * @param UpdateSiteDeliveryTaskStatusRequest $request
     *
     * @return UpdateSiteDeliveryTaskStatusResponse
     */
    public function updateSiteDeliveryTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSiteDeliveryTaskStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies the site hold configuration of a website. After you enable site hold, other accounts cannot add your website domain or its subdomains to ESA.
     *
     * @param Request - UpdateSiteNameExclusiveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSiteNameExclusiveResponse
     *
     * @param UpdateSiteNameExclusiveRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateSiteNameExclusiveResponse
     */
    public function updateSiteNameExclusiveWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateSiteNameExclusiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the site hold configuration of a website. After you enable site hold, other accounts cannot add your website domain or its subdomains to ESA.
     *
     * @param Request - UpdateSiteNameExclusiveRequest
     *
     * @returns UpdateSiteNameExclusiveResponse
     *
     * @param UpdateSiteNameExclusiveRequest $request
     *
     * @return UpdateSiteNameExclusiveResponse
     */
    public function updateSiteNameExclusive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSiteNameExclusiveWithOptions($request, $runtime);
    }

    /**
     * Modifies the ESA proxy configuration of a website.
     *
     * @param Request - UpdateSitePauseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSitePauseResponse
     *
     * @param UpdateSitePauseRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateSitePauseResponse
     */
    public function updateSitePauseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->paused) {
            @$query['Paused'] = $request->paused;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateSitePauseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the ESA proxy configuration of a website.
     *
     * @param Request - UpdateSitePauseRequest
     *
     * @returns UpdateSitePauseResponse
     *
     * @param UpdateSitePauseRequest $request
     *
     * @return UpdateSitePauseResponse
     */
    public function updateSitePause($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSitePauseWithOptions($request, $runtime);
    }

    /**
     * Updates the custom nameserver names for a single website.
     *
     * @param Request - UpdateSiteVanityNSRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSiteVanityNSResponse
     *
     * @param UpdateSiteVanityNSRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateSiteVanityNSResponse
     */
    public function updateSiteVanityNSWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->vanityNSList) {
            @$query['VanityNSList'] = $request->vanityNSList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateSiteVanityNSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the custom nameserver names for a single website.
     *
     * @param Request - UpdateSiteVanityNSRequest
     *
     * @returns UpdateSiteVanityNSResponse
     *
     * @param UpdateSiteVanityNSRequest $request
     *
     * @return UpdateSiteVanityNSResponse
     */
    public function updateSiteVanityNS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSiteVanityNSWithOptions($request, $runtime);
    }

    /**
     * Modifies the tiered cache configuration of your website.
     *
     * @param Request - UpdateTieredCacheRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTieredCacheResponse
     *
     * @param UpdateTieredCacheRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateTieredCacheResponse
     */
    public function updateTieredCacheWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cacheArchitectureMode) {
            @$query['CacheArchitectureMode'] = $request->cacheArchitectureMode;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateTieredCacheResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the tiered cache configuration of your website.
     *
     * @param Request - UpdateTieredCacheRequest
     *
     * @returns UpdateTieredCacheResponse
     *
     * @param UpdateTieredCacheRequest $request
     *
     * @return UpdateTieredCacheResponse
     */
    public function updateTieredCache($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTieredCacheWithOptions($request, $runtime);
    }

    /**
     * Modify Transport Layer Application.
     *
     * @param tmpReq - UpdateTransportLayerApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTransportLayerApplicationResponse
     *
     * @param UpdateTransportLayerApplicationRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateTransportLayerApplicationResponse
     */
    public function updateTransportLayerApplicationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateTransportLayerApplicationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->rules) {
            $request->rulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->rules, 'Rules', 'json');
        }

        $query = [];
        if (null !== $request->applicationId) {
            @$query['ApplicationId'] = $request->applicationId;
        }

        if (null !== $request->crossBorderOptimization) {
            @$query['CrossBorderOptimization'] = $request->crossBorderOptimization;
        }

        if (null !== $request->ipAccessRule) {
            @$query['IpAccessRule'] = $request->ipAccessRule;
        }

        if (null !== $request->ipv6) {
            @$query['Ipv6'] = $request->ipv6;
        }

        if (null !== $request->rulesShrink) {
            @$query['Rules'] = $request->rulesShrink;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->staticIp) {
            @$query['StaticIp'] = $request->staticIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateTransportLayerApplication',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTransportLayerApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Transport Layer Application.
     *
     * @param Request - UpdateTransportLayerApplicationRequest
     *
     * @returns UpdateTransportLayerApplicationResponse
     *
     * @param UpdateTransportLayerApplicationRequest $request
     *
     * @return UpdateTransportLayerApplicationResponse
     */
    public function updateTransportLayerApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTransportLayerApplicationWithOptions($request, $runtime);
    }

    /**
     * Updates the webpage monitoring configuration.
     *
     * @param Request - UpdateUrlObservationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUrlObservationResponse
     *
     * @param UpdateUrlObservationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateUrlObservationResponse
     */
    public function updateUrlObservationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->sdkType) {
            @$query['SdkType'] = $request->sdkType;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateUrlObservation',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUrlObservationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the webpage monitoring configuration.
     *
     * @param Request - UpdateUrlObservationRequest
     *
     * @returns UpdateUrlObservationResponse
     *
     * @param UpdateUrlObservationRequest $request
     *
     * @return UpdateUrlObservationResponse
     */
    public function updateUrlObservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUrlObservationWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a delivery task, including the task name, log field, log category, and discard rate.
     *
     * @param Request - UpdateUserDeliveryTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserDeliveryTaskResponse
     *
     * @param UpdateUserDeliveryTaskRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateUserDeliveryTaskResponse
     */
    public function updateUserDeliveryTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->businessType) {
            @$body['BusinessType'] = $request->businessType;
        }

        if (null !== $request->details) {
            @$body['Details'] = $request->details;
        }

        if (null !== $request->discardRate) {
            @$body['DiscardRate'] = $request->discardRate;
        }

        if (null !== $request->fieldName) {
            @$body['FieldName'] = $request->fieldName;
        }

        if (null !== $request->filterVer) {
            @$body['FilterVer'] = $request->filterVer;
        }

        if (null !== $request->taskName) {
            @$body['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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

        return UpdateUserDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a delivery task, including the task name, log field, log category, and discard rate.
     *
     * @param Request - UpdateUserDeliveryTaskRequest
     *
     * @returns UpdateUserDeliveryTaskResponse
     *
     * @param UpdateUserDeliveryTaskRequest $request
     *
     * @return UpdateUserDeliveryTaskResponse
     */
    public function updateUserDeliveryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserDeliveryTaskWithOptions($request, $runtime);
    }

    /**
     * Changes the status of a delivery task in your Alibaba Cloud account.
     *
     * @remarks
     * ## [](#)
     * You can call this operation to enable or disable a delivery task by using TaskName and Method. The response includes the most recent status and operation result details of the task.
     *
     * @param Request - UpdateUserDeliveryTaskStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserDeliveryTaskStatusResponse
     *
     * @param UpdateUserDeliveryTaskStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateUserDeliveryTaskStatusResponse
     */
    public function updateUserDeliveryTaskStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateUserDeliveryTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the status of a delivery task in your Alibaba Cloud account.
     *
     * @remarks
     * ## [](#)
     * You can call this operation to enable or disable a delivery task by using TaskName and Method. The response includes the most recent status and operation result details of the task.
     *
     * @param Request - UpdateUserDeliveryTaskStatusRequest
     *
     * @returns UpdateUserDeliveryTaskStatusResponse
     *
     * @param UpdateUserDeliveryTaskStatusRequest $request
     *
     * @return UpdateUserDeliveryTaskStatusResponse
     */
    public function updateUserDeliveryTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserDeliveryTaskStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies the video processing configuration of the site.
     *
     * @param Request - UpdateVideoProcessingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVideoProcessingResponse
     *
     * @param UpdateVideoProcessingRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateVideoProcessingResponse
     */
    public function updateVideoProcessingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configId) {
            @$query['ConfigId'] = $request->configId;
        }

        if (null !== $request->flvSeekEnd) {
            @$query['FlvSeekEnd'] = $request->flvSeekEnd;
        }

        if (null !== $request->flvSeekStart) {
            @$query['FlvSeekStart'] = $request->flvSeekStart;
        }

        if (null !== $request->flvVideoSeekMode) {
            @$query['FlvVideoSeekMode'] = $request->flvVideoSeekMode;
        }

        if (null !== $request->mp4SeekEnd) {
            @$query['Mp4SeekEnd'] = $request->mp4SeekEnd;
        }

        if (null !== $request->mp4SeekStart) {
            @$query['Mp4SeekStart'] = $request->mp4SeekStart;
        }

        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sequence) {
            @$query['Sequence'] = $request->sequence;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->videoSeekEnable) {
            @$query['VideoSeekEnable'] = $request->videoSeekEnable;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateVideoProcessing',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVideoProcessingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the video processing configuration of the site.
     *
     * @param Request - UpdateVideoProcessingRequest
     *
     * @returns UpdateVideoProcessingResponse
     *
     * @param UpdateVideoProcessingRequest $request
     *
     * @return UpdateVideoProcessingResponse
     */
    public function updateVideoProcessing($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVideoProcessingWithOptions($request, $runtime);
    }

    /**
     * Update WAF Rule Page.
     *
     * @param tmpReq - UpdateWafRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWafRuleResponse
     *
     * @param UpdateWafRuleRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateWafRuleResponse
     */
    public function updateWafRuleWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateWafRuleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->config) {
            $request->configShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }

        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $body = [];
        if (null !== $request->configShrink) {
            @$body['Config'] = $request->configShrink;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->position) {
            @$body['Position'] = $request->position;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWafRule',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWafRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update WAF Rule Page.
     *
     * @param Request - UpdateWafRuleRequest
     *
     * @returns UpdateWafRuleResponse
     *
     * @param UpdateWafRuleRequest $request
     *
     * @return UpdateWafRuleResponse
     */
    public function updateWafRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWafRuleWithOptions($request, $runtime);
    }

    /**
     * Update WAF Ruleset.
     *
     * @param Request - UpdateWafRulesetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWafRulesetResponse
     *
     * @param UpdateWafRulesetRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateWafRulesetResponse
     */
    public function updateWafRulesetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->siteVersion) {
            @$query['SiteVersion'] = $request->siteVersion;
        }

        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWafRuleset',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWafRulesetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update WAF Ruleset.
     *
     * @param Request - UpdateWafRulesetRequest
     *
     * @returns UpdateWafRulesetResponse
     *
     * @param UpdateWafRulesetRequest $request
     *
     * @return UpdateWafRulesetResponse
     */
    public function updateWafRuleset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWafRulesetWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a waiting room.
     *
     * @param tmpReq - UpdateWaitingRoomRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWaitingRoomResponse
     *
     * @param UpdateWaitingRoomRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateWaitingRoomResponse
     */
    public function updateWaitingRoomWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateWaitingRoomShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->hostNameAndPath) {
            $request->hostNameAndPathShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->hostNameAndPath, 'HostNameAndPath', 'json');
        }

        $query = [];
        if (null !== $request->cookieName) {
            @$query['CookieName'] = $request->cookieName;
        }

        if (null !== $request->customPageHtml) {
            @$query['CustomPageHtml'] = $request->customPageHtml;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->disableSessionRenewalEnable) {
            @$query['DisableSessionRenewalEnable'] = $request->disableSessionRenewalEnable;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->hostNameAndPathShrink) {
            @$query['HostNameAndPath'] = $request->hostNameAndPathShrink;
        }

        if (null !== $request->jsonResponseEnable) {
            @$query['JsonResponseEnable'] = $request->jsonResponseEnable;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->newUsersPerMinute) {
            @$query['NewUsersPerMinute'] = $request->newUsersPerMinute;
        }

        if (null !== $request->queueAllEnable) {
            @$query['QueueAllEnable'] = $request->queueAllEnable;
        }

        if (null !== $request->queuingMethod) {
            @$query['QueuingMethod'] = $request->queuingMethod;
        }

        if (null !== $request->queuingStatusCode) {
            @$query['QueuingStatusCode'] = $request->queuingStatusCode;
        }

        if (null !== $request->sessionDuration) {
            @$query['SessionDuration'] = $request->sessionDuration;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->totalActiveUsers) {
            @$query['TotalActiveUsers'] = $request->totalActiveUsers;
        }

        if (null !== $request->waitingRoomId) {
            @$query['WaitingRoomId'] = $request->waitingRoomId;
        }

        if (null !== $request->waitingRoomType) {
            @$query['WaitingRoomType'] = $request->waitingRoomType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateWaitingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a waiting room.
     *
     * @param Request - UpdateWaitingRoomRequest
     *
     * @returns UpdateWaitingRoomResponse
     *
     * @param UpdateWaitingRoomRequest $request
     *
     * @return UpdateWaitingRoomResponse
     */
    public function updateWaitingRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWaitingRoomWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a waiting room event.
     *
     * @param Request - UpdateWaitingRoomEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWaitingRoomEventResponse
     *
     * @param UpdateWaitingRoomEventRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateWaitingRoomEventResponse
     */
    public function updateWaitingRoomEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customPageHtml) {
            @$query['CustomPageHtml'] = $request->customPageHtml;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->disableSessionRenewalEnable) {
            @$query['DisableSessionRenewalEnable'] = $request->disableSessionRenewalEnable;
        }

        if (null !== $request->enable) {
            @$query['Enable'] = $request->enable;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->jsonResponseEnable) {
            @$query['JsonResponseEnable'] = $request->jsonResponseEnable;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->newUsersPerMinute) {
            @$query['NewUsersPerMinute'] = $request->newUsersPerMinute;
        }

        if (null !== $request->preQueueEnable) {
            @$query['PreQueueEnable'] = $request->preQueueEnable;
        }

        if (null !== $request->preQueueStartTime) {
            @$query['PreQueueStartTime'] = $request->preQueueStartTime;
        }

        if (null !== $request->queuingMethod) {
            @$query['QueuingMethod'] = $request->queuingMethod;
        }

        if (null !== $request->queuingStatusCode) {
            @$query['QueuingStatusCode'] = $request->queuingStatusCode;
        }

        if (null !== $request->randomPreQueueEnable) {
            @$query['RandomPreQueueEnable'] = $request->randomPreQueueEnable;
        }

        if (null !== $request->sessionDuration) {
            @$query['SessionDuration'] = $request->sessionDuration;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->totalActiveUsers) {
            @$query['TotalActiveUsers'] = $request->totalActiveUsers;
        }

        if (null !== $request->waitingRoomEventId) {
            @$query['WaitingRoomEventId'] = $request->waitingRoomEventId;
        }

        if (null !== $request->waitingRoomType) {
            @$query['WaitingRoomType'] = $request->waitingRoomType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateWaitingRoomEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a waiting room event.
     *
     * @param Request - UpdateWaitingRoomEventRequest
     *
     * @returns UpdateWaitingRoomEventResponse
     *
     * @param UpdateWaitingRoomEventRequest $request
     *
     * @return UpdateWaitingRoomEventResponse
     */
    public function updateWaitingRoomEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWaitingRoomEventWithOptions($request, $runtime);
    }

    /**
     * Modify Waiting Room Rule.
     *
     * @remarks
     * This interface allows you to modify the rule settings of a specific waiting room in a site, including the rule name, enable status, and rule content, etc.
     *
     * @param Request - UpdateWaitingRoomRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWaitingRoomRuleResponse
     *
     * @param UpdateWaitingRoomRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateWaitingRoomRuleResponse
     */
    public function updateWaitingRoomRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->rule) {
            @$query['Rule'] = $request->rule;
        }

        if (null !== $request->ruleEnable) {
            @$query['RuleEnable'] = $request->ruleEnable;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->waitingRoomRuleId) {
            @$query['WaitingRoomRuleId'] = $request->waitingRoomRuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UpdateWaitingRoomRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify Waiting Room Rule.
     *
     * @remarks
     * This interface allows you to modify the rule settings of a specific waiting room in a site, including the rule name, enable status, and rule content, etc.
     *
     * @param Request - UpdateWaitingRoomRuleRequest
     *
     * @returns UpdateWaitingRoomRuleResponse
     *
     * @param UpdateWaitingRoomRuleRequest $request
     *
     * @return UpdateWaitingRoomRuleResponse
     */
    public function updateWaitingRoomRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWaitingRoomRuleWithOptions($request, $runtime);
    }

    /**
     * Uploads a client certificate authority (CA) certificate.
     *
     * @param Request - UploadClientCaCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadClientCaCertificateResponse
     *
     * @param UploadClientCaCertificateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UploadClientCaCertificateResponse
     */
    public function uploadClientCaCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $body = [];
        if (null !== $request->certificate) {
            @$body['Certificate'] = $request->certificate;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
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

        return UploadClientCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads a client certificate authority (CA) certificate.
     *
     * @param Request - UploadClientCaCertificateRequest
     *
     * @returns UploadClientCaCertificateResponse
     *
     * @param UploadClientCaCertificateRequest $request
     *
     * @return UploadClientCaCertificateResponse
     */
    public function uploadClientCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadClientCaCertificateWithOptions($request, $runtime);
    }

    /**
     * Uploads the file that contains resources to be purged or prefetched.
     *
     * @remarks
     * >
     * *   The file can be up to 10 MB in size.
     *
     * @param Request - UploadFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadFileResponse
     *
     * @param UploadFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UploadFileResponse
     */
    public function uploadFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->uploadTaskName) {
            @$query['UploadTaskName'] = $request->uploadTaskName;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return UploadFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads the file that contains resources to be purged or prefetched.
     *
     * @remarks
     * >
     * *   The file can be up to 10 MB in size.
     *
     * @param Request - UploadFileRequest
     *
     * @returns UploadFileResponse
     *
     * @param UploadFileRequest $request
     *
     * @return UploadFileResponse
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
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
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
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'ESA',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $uploadFileReq = new UploadFileRequest([]);
        Utils::convert($request, $uploadFileReq);
        if (null !== $request->urlObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->urlObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader, $runtime);
            $uploadFileReq->url = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->uploadFileWithOptions($uploadFileReq, $runtime);
    }

    /**
     * 上传源服务器CA证书.
     *
     * @param Request - UploadOriginCaCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadOriginCaCertificateResponse
     *
     * @param UploadOriginCaCertificateRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UploadOriginCaCertificateResponse
     */
    public function uploadOriginCaCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->certificate) {
            @$body['Certificate'] = $request->certificate;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->siteId) {
            @$body['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadOriginCaCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadOriginCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上传源服务器CA证书.
     *
     * @param Request - UploadOriginCaCertificateRequest
     *
     * @returns UploadOriginCaCertificateResponse
     *
     * @param UploadOriginCaCertificateRequest $request
     *
     * @return UploadOriginCaCertificateResponse
     */
    public function uploadOriginCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadOriginCaCertificateWithOptions($request, $runtime);
    }

    /**
     * 上传域名回源客户端证书.
     *
     * @param Request - UploadOriginClientCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadOriginClientCertificateResponse
     *
     * @param UploadOriginClientCertificateRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UploadOriginClientCertificateResponse
     */
    public function uploadOriginClientCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $body = [];
        if (null !== $request->certificate) {
            @$body['Certificate'] = $request->certificate;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->privateKey) {
            @$body['PrivateKey'] = $request->privateKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadOriginClientCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadOriginClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上传域名回源客户端证书.
     *
     * @param Request - UploadOriginClientCertificateRequest
     *
     * @returns UploadOriginClientCertificateResponse
     *
     * @param UploadOriginClientCertificateRequest $request
     *
     * @return UploadOriginClientCertificateResponse
     */
    public function uploadOriginClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadOriginClientCertificateWithOptions($request, $runtime);
    }

    /**
     * Upload site origin client certificate.
     *
     * @param Request - UploadSiteOriginClientCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadSiteOriginClientCertificateResponse
     *
     * @param UploadSiteOriginClientCertificateRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UploadSiteOriginClientCertificateResponse
     */
    public function uploadSiteOriginClientCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $body = [];
        if (null !== $request->certificate) {
            @$body['Certificate'] = $request->certificate;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->privateKey) {
            @$body['PrivateKey'] = $request->privateKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadSiteOriginClientCertificate',
            'version' => '2024-09-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadSiteOriginClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upload site origin client certificate.
     *
     * @param Request - UploadSiteOriginClientCertificateRequest
     *
     * @returns UploadSiteOriginClientCertificateResponse
     *
     * @param UploadSiteOriginClientCertificateRequest $request
     *
     * @return UploadSiteOriginClientCertificateResponse
     */
    public function uploadSiteOriginClientCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadSiteOriginClientCertificateWithOptions($request, $runtime);
    }

    /**
     * Verifies the ownership of a website domain. Websites that pass the verification are automatically activated.
     *
     * @remarks
     * 1.  For a website connected by using NS setup, this operation verifies whether the nameservers of the website are the nameservers assigned by Alibaba Cloud.
     * 2.  For a website connected by using CNAME setup, this operation verifies whether the website has a TXT record whose hostname is  _esaauth.[websiteDomainName] and record value is the value of VerifyCode to the DNS records of your domain. You can see the VerifyCode field in the site information.
     *
     * @param Request - VerifySiteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifySiteResponse
     *
     * @param VerifySiteRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return VerifySiteResponse
     */
    public function verifySiteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->siteId) {
            @$query['SiteId'] = $request->siteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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

        return VerifySiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the ownership of a website domain. Websites that pass the verification are automatically activated.
     *
     * @remarks
     * 1.  For a website connected by using NS setup, this operation verifies whether the nameservers of the website are the nameservers assigned by Alibaba Cloud.
     * 2.  For a website connected by using CNAME setup, this operation verifies whether the website has a TXT record whose hostname is  _esaauth.[websiteDomainName] and record value is the value of VerifyCode to the DNS records of your domain. You can see the VerifyCode field in the site information.
     *
     * @param Request - VerifySiteRequest
     *
     * @returns VerifySiteResponse
     *
     * @param VerifySiteRequest $request
     *
     * @return VerifySiteResponse
     */
    public function verifySite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifySiteWithOptions($request, $runtime);
    }
}
