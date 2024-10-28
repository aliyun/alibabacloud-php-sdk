<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ESA\V20240910\Models\ActivateClientCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ActivateClientCertificateResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CheckSiteNameRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CheckSiteNameResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CheckSiteProjectNameRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CheckSiteProjectNameResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CheckUserProjectNameRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CheckUserProjectNameResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CommitRoutineStagingCodeRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CommitRoutineStagingCodeResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateCustomScenePolicyRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateCustomScenePolicyResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppRecordRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppRecordResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppVersionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppVersionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateEdgeContainerAppVersionShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateKvNamespaceRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateKvNamespaceResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateListRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateListResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateListShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreatePageRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreatePageResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRecordRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRecordResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRecordShrinkRequest;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWafRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWafRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWafRuleShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWaitingRoomEventRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWaitingRoomEventResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWaitingRoomRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWaitingRoomResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWaitingRoomRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWaitingRoomRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWaitingRoomShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteCustomScenePolicyRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteCustomScenePolicyResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteEdgeContainerAppRecordRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteEdgeContainerAppRecordResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteEdgeContainerAppRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteEdgeContainerAppResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteEdgeContainerAppVersionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteEdgeContainerAppVersionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteKvNamespaceRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteKvNamespaceResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteKvRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteKvResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteListRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteListResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeletePageRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeletePageResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRecordRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DeleteRecordResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeHttpDDoSAttackIntelligentProtectionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeHttpDDoSAttackIntelligentProtectionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeHttpDDoSAttackProtectionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeHttpDDoSAttackProtectionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeIPRangeListResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeKvAccountStatusResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribePreloadTasksRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribePreloadTasksResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribePurgeTasksRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribePurgeTasksResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppRequest;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\GetKvAccountResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetKvNamespaceRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetKvNamespaceResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetKvRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetKvResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetListRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetListResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetPageRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetPageResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetPurgeQuotaRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetPurgeQuotaResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRealtimeDeliveryFieldRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRealtimeDeliveryFieldResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRecordRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRecordResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineStagingCodeUploadInfoRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineStagingCodeUploadInfoResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineStagingEnvIpResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineUserInfoResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetScheduledPreloadJobRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetScheduledPreloadJobResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteCurrentNSRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteCurrentNSResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteCustomLogRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteCustomLogResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteDeliveryTaskRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteDeliveryTaskResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteLogDeliveryQuotaRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteLogDeliveryQuotaResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteWafSettingsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteWafSettingsResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafRuleRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafRuleResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafRulesetRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetWafRulesetResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCacheReserveInstancesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListCacheReserveInstancesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListClientCertificatesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListClientCertificatesResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\ListInstanceQuotasRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListInstanceQuotasResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListInstanceQuotasWithUsageRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListInstanceQuotasWithUsageResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListKvsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListKvsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListListsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListListsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListListsShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancerRegionsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancerRegionsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListManagedRulesGroupsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListManagedRulesGroupsResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListPagesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListPagesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRecordsRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRecordsResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\PreloadCachesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PreloadCachesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\PreloadCachesShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PublishEdgeContainerAppVersionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PublishEdgeContainerAppVersionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\PublishEdgeContainerAppVersionShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PublishRoutineCodeVersionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\PublishRoutineCodeVersionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\PublishRoutineCodeVersionShrinkRequest;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\RollbackEdgeContainerAppVersionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\RollbackEdgeContainerAppVersionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\SetCertificateRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\SetCertificateResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\SetHttpDDoSAttackIntelligentProtectionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\SetHttpDDoSAttackIntelligentProtectionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\SetHttpDDoSAttackProtectionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\SetHttpDDoSAttackProtectionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\StartScheduledPreloadExecutionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\StartScheduledPreloadExecutionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\StopScheduledPreloadExecutionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\StopScheduledPreloadExecutionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\TransformExpressionToMatchRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\TransformExpressionToMatchResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\TransformMatchToExpressionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\TransformMatchToExpressionResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\TransformMatchToExpressionShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateCustomScenePolicyRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateCustomScenePolicyResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateKvNamespaceRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateKvNamespaceResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateListRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateListResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateListShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdatePageRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdatePageResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRecordRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRecordResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRecordShrinkRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateScheduledPreloadExecutionRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateScheduledPreloadExecutionResponse;
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
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteVanityNSRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteVanityNSResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateUserDeliveryTaskRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateUserDeliveryTaskResponse;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateUserDeliveryTaskStatusRequest;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateUserDeliveryTaskStatusResponse;
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
     * @summary 激活客户端证书
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ActivateClientCertificate',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActivateClientCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 激活客户端证书
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
     * @summary 创建记录
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
            'action'      => 'BatchCreateRecords',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchCreateRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建记录
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
     * @summary 批量创建WAF规则
     *  *
     * @param BatchCreateWafRulesRequest $tmpReq  BatchCreateWafRulesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchCreateWafRulesResponse BatchCreateWafRulesResponse
     */
    public function batchCreateWafRulesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchCreateWafRulesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configs)) {
            $request->configsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configs, 'Configs', 'json');
        }
        if (!Utils::isUnset($tmpReq->shared)) {
            $request->sharedShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->shared, 'Shared', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        $body = [];
        if (!Utils::isUnset($request->configsShrink)) {
            $body['Configs'] = $request->configsShrink;
        }
        if (!Utils::isUnset($request->phase)) {
            $body['Phase'] = $request->phase;
        }
        if (!Utils::isUnset($request->sharedShrink)) {
            $body['Shared'] = $request->sharedShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchCreateWafRules',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchCreateWafRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量创建WAF规则
     *  *
     * @param BatchCreateWafRulesRequest $request BatchCreateWafRulesRequest
     *
     * @return BatchCreateWafRulesResponse BatchCreateWafRulesResponse
     */
    public function batchCreateWafRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateWafRulesWithOptions($request, $runtime);
    }

    /**
     * @summary 批量删除Namespace的key-value对
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
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteKv',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量删除Namespace的key-value对
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
     * @summary 批量删除Namespace下的KV队，支持大body的上传，上限100M
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
            'action'      => 'BatchDeleteKvWithHighCapacity',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteKvWithHighCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量删除Namespace下的KV队，支持大body的上传，上限100M
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ESA',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $batchDeleteKvWithHighCapacityReq = new BatchDeleteKvWithHighCapacityRequest([]);
        OpenApiUtilClient::convert($request, $batchDeleteKvWithHighCapacityReq);
        if (!Utils::isUnset($request->urlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->urlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $batchDeleteKvWithHighCapacityReq->url = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->batchDeleteKvWithHighCapacityWithOptions($batchDeleteKvWithHighCapacityReq, $runtime);
    }

    /**
     * @summary 批量获取表达式的匹配项
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
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchGetExpressionFields',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchGetExpressionFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量获取表达式的匹配项
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
     * @summary 批量设置Namespace的key-value对
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
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchPutKv',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchPutKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量设置Namespace的key-value对
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
     * @summary 批量设置Namespace的key-value对，支持最大100M的请求体
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
            'action'      => 'BatchPutKvWithHighCapacity',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchPutKvWithHighCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量设置Namespace的key-value对，支持最大100M的请求体
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ESA',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $batchPutKvWithHighCapacityReq = new BatchPutKvWithHighCapacityRequest([]);
        OpenApiUtilClient::convert($request, $batchPutKvWithHighCapacityReq);
        if (!Utils::isUnset($request->urlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->urlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $batchPutKvWithHighCapacityReq->url = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->batchPutKvWithHighCapacityWithOptions($batchPutKvWithHighCapacityReq, $runtime);
    }

    /**
     * @summary 批量修改WAF规则
     *  *
     * @param BatchUpdateWafRulesRequest $tmpReq  BatchUpdateWafRulesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchUpdateWafRulesResponse BatchUpdateWafRulesResponse
     */
    public function batchUpdateWafRulesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchUpdateWafRulesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configs)) {
            $request->configsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configs, 'Configs', 'json');
        }
        if (!Utils::isUnset($tmpReq->shared)) {
            $request->sharedShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->shared, 'Shared', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        $body = [];
        if (!Utils::isUnset($request->configsShrink)) {
            $body['Configs'] = $request->configsShrink;
        }
        if (!Utils::isUnset($request->phase)) {
            $body['Phase'] = $request->phase;
        }
        if (!Utils::isUnset($request->rulesetId)) {
            $body['RulesetId'] = $request->rulesetId;
        }
        if (!Utils::isUnset($request->sharedShrink)) {
            $body['Shared'] = $request->sharedShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchUpdateWafRules',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUpdateWafRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量修改WAF规则
     *  *
     * @param BatchUpdateWafRulesRequest $request BatchUpdateWafRulesRequest
     *
     * @return BatchUpdateWafRulesResponse BatchUpdateWafRulesResponse
     */
    public function batchUpdateWafRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUpdateWafRulesWithOptions($request, $runtime);
    }

    /**
     * @summary URL封禁
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
            'action'      => 'BlockObject',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BlockObjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary URL封禁
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
     * @summary 修改站点的企业资源组
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
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
            'action'      => 'ChangeResourceGroup',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改站点的企业资源组
     *  *
     * @param ChangeResourceGroupRequest $request ChangeResourceGroupRequest
     *
     * @return ChangeResourceGroupResponse ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 校验站点名称是否可用
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
            'action'      => 'CheckSiteName',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckSiteNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 校验站点名称是否可用
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
     * @summary 实时日志任务投递名检查
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckSiteProjectName',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckSiteProjectNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实时日志任务投递名检查
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
     * @summary 实时日志用户任务投递名检查
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckUserProjectName',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckUserProjectNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 实时日志用户任务投递名检查
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
     * @summary 提交Routine测试版本代码
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
            'action'      => 'CommitRoutineStagingCode',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CommitRoutineStagingCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交Routine测试版本代码
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
     * @summary 创建定制场景策略
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
            'action'      => 'CreateCustomScenePolicy',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustomScenePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建定制场景策略
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
     * @summary 创建边缘容器的应用
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
            'action'      => 'CreateEdgeContainerApp',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEdgeContainerAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建边缘容器的应用
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
     * @summary 创建一个边缘容器应用的域名记录
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
            'action'      => 'CreateEdgeContainerAppRecord',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEdgeContainerAppRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建一个边缘容器应用的域名记录
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
     * @summary 创建边缘容器应用的版本
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
            'action'      => 'CreateEdgeContainerAppVersion',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEdgeContainerAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建边缘容器应用的版本
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
     * @summary 添加Namespace
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
            'action'      => 'CreateKvNamespace',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateKvNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加Namespace
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
     * @summary 创建自定义列表
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
            'action'      => 'CreateList',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建自定义列表
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
     * @summary 调用CreatePage创建自定义响应页面
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
            'action'      => 'CreatePage',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 调用CreatePage创建自定义响应页面
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
     * @summary 创建记录
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
            'action'      => 'CreateRecord',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建记录
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
     * @summary 创建routine
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
            'action'      => 'CreateRoutine',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRoutineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建routine
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
     * @summary 添加Routine关联域名
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
            'action'      => 'CreateRoutineRelatedRecord',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRoutineRelatedRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加Routine关联域名
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
     * @summary 添加Routine关联路由
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
            'action'      => 'CreateRoutineRelatedRoute',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRoutineRelatedRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加Routine关联路由
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
     * @summary 批量新增定时预热任务的计划
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
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateScheduledPreloadExecutions',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateScheduledPreloadExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量新增定时预热任务的计划
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
     * @summary 新增定时预热任务
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
            'action'      => 'CreateScheduledPreloadJob',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateScheduledPreloadJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新增定时预热任务
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
     * @summary 创建站点
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
            'action'      => 'CreateSite',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建站点
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
     * @summary 新建自定义字段
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
            'action'      => 'CreateSiteCustomLog',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSiteCustomLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新建自定义字段
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
     * @summary 新建一个任务投递
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
            'action'      => 'CreateSiteDeliveryTask',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSiteDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新建一个任务投递
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
     * @summary 新建一个用户粒度任务投递
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
            'action'      => 'CreateUserDeliveryTask',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新建一个用户粒度任务投递
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
     * @summary 创建WAF规则
     *  *
     * @param CreateWafRuleRequest $tmpReq  CreateWafRuleRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateWafRuleResponse CreateWafRuleResponse
     */
    public function createWafRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateWafRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->config)) {
            $request->configShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        $body = [];
        if (!Utils::isUnset($request->configShrink)) {
            $body['Config'] = $request->configShrink;
        }
        if (!Utils::isUnset($request->phase)) {
            $body['Phase'] = $request->phase;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWafRule',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWafRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建WAF规则
     *  *
     * @param CreateWafRuleRequest $request CreateWafRuleRequest
     *
     * @return CreateWafRuleResponse CreateWafRuleResponse
     */
    public function createWafRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWafRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 创建等候室
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
            'action'      => 'CreateWaitingRoom',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWaitingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建等候室
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
     * @summary 创建等候室事件
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
            'action'      => 'CreateWaitingRoomEvent',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWaitingRoomEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建等候室事件
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
     * @summary 创建等候室规则
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
            'action'      => 'CreateWaitingRoomRule',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWaitingRoomRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建等候室规则
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
     * @summary 删除定制场景策略
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
            'action'      => 'DeleteCustomScenePolicy',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomScenePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除定制场景策略
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
     * @summary 删除边缘容器的应用
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
            'action'      => 'DeleteEdgeContainerApp',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEdgeContainerAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除边缘容器的应用
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
     * @summary 删除一个边缘容器应用的域名记录
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
            'action'      => 'DeleteEdgeContainerAppRecord',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEdgeContainerAppRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除一个边缘容器应用的域名记录
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
     * @summary 删除边缘容器应用的版本
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
            'action'      => 'DeleteEdgeContainerAppVersion',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEdgeContainerAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除边缘容器应用的版本
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
     * @summary 删除Namespace的Key-Value对
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteKv',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除Namespace的Key-Value对
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
     * @summary 删除Namespace
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
            'action'      => 'DeleteKvNamespace',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteKvNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除Namespace
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
     * @summary 删除自定义列表
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
            'action'      => 'DeleteList',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除自定义列表
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
     * @summary 删除自定义响应页面
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
            'action'      => 'DeletePage',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除自定义响应页面
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
     * @summary 删除记录
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
            'action'      => 'DeleteRecord',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除记录
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
     * @summary 删除Routine
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
            'action'      => 'DeleteRoutine',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRoutineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除Routine
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
     * @summary 删除Routine某版本代码
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
            'action'      => 'DeleteRoutineCodeVersion',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRoutineCodeVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除Routine某版本代码
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
     * @summary 删除Routine关联域名
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
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRoutineRelatedRecord',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRoutineRelatedRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除Routine关联域名
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
     * @summary 删除Routine关联路由
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
            'action'      => 'DeleteRoutineRelatedRoute',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRoutineRelatedRouteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除Routine关联路由
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
     * @summary 删除单个定时预热计划
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
            'action'      => 'DeleteScheduledPreloadExecution',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScheduledPreloadExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除单个定时预热计划
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
     * @summary 删除指定定时预热任务
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
            'action'      => 'DeleteScheduledPreloadJob',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScheduledPreloadJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定定时预热任务
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
     * @summary 删除站点
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
            'action'      => 'DeleteSite',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除站点
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
     * @summary 删除一个任务投递
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
            'action'      => 'DeleteSiteDeliveryTask',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSiteDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除一个任务投递
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
     * @summary 删除一个用户任务投递
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
            'action'      => 'DeleteUserDeliveryTask',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除一个用户任务投递
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
     * @summary 删除WAF规则
     *  *
     * @param DeleteWafRuleRequest $request DeleteWafRuleRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWafRuleResponse DeleteWafRuleResponse
     */
    public function deleteWafRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWafRule',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWafRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除WAF规则
     *  *
     * @param DeleteWafRuleRequest $request DeleteWafRuleRequest
     *
     * @return DeleteWafRuleResponse DeleteWafRuleResponse
     */
    public function deleteWafRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWafRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 删除WAF规则集
     *  *
     * @param DeleteWafRulesetRequest $request DeleteWafRulesetRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWafRulesetResponse DeleteWafRulesetResponse
     */
    public function deleteWafRulesetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWafRuleset',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWafRulesetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除WAF规则集
     *  *
     * @param DeleteWafRulesetRequest $request DeleteWafRulesetRequest
     *
     * @return DeleteWafRulesetResponse DeleteWafRulesetResponse
     */
    public function deleteWafRuleset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWafRulesetWithOptions($request, $runtime);
    }

    /**
     * @summary 删除等候室
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
            'action'      => 'DeleteWaitingRoom',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWaitingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除等候室
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
     * @summary 删除等候室事件
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
            'action'      => 'DeleteWaitingRoomEvent',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWaitingRoomEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除等候室事件
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
     * @summary 删除等候室规则
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
            'action'      => 'DeleteWaitingRoomRule',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWaitingRoomRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除等候室规则
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
     * @summary 查询定制场景策略配置
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
            'action'      => 'DescribeCustomScenePolicies',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomScenePoliciesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询定制场景策略配置
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
     * @summary 攻击分析-查询攻击事件列表
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
            'action'      => 'DescribeDDoSAllEventList',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDDoSAllEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 攻击分析-查询攻击事件列表
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
     * @summary 查询HTTP DDoS智能防护配置信息
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
            'action'      => 'DescribeHttpDDoSAttackIntelligentProtection',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHttpDDoSAttackIntelligentProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询HTTP DDoS智能防护配置信息
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
     * @summary 查询HTTP DDoS攻击防护配置信息
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
            'action'      => 'DescribeHttpDDoSAttackProtection',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHttpDDoSAttackProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询HTTP DDoS攻击防护配置信息
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
     * @summary 查询加速服务节点IP段列表
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeIPRangeListResponse DescribeIPRangeListResponse
     */
    public function describeIPRangeListWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeIPRangeList',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeIPRangeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询加速服务节点IP段列表
     *  *
     * @return DescribeIPRangeListResponse DescribeIPRangeListResponse
     */
    public function describeIPRangeList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIPRangeListWithOptions($runtime);
    }

    /**
     * @summary 查询账户的KV状态信
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeKvAccountStatusResponse DescribeKvAccountStatusResponse
     */
    public function describeKvAccountStatusWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeKvAccountStatus',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeKvAccountStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询账户的KV状态信
     *  *
     * @return DescribeKvAccountStatusResponse DescribeKvAccountStatusResponse
     */
    public function describeKvAccountStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKvAccountStatusWithOptions($runtime);
    }

    /**
     * @summary 预热任务查询接口
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePreloadTasks',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePreloadTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 预热任务查询接口
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
     * @summary 刷新任务查询接口
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePurgeTasks',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePurgeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 刷新任务查询接口
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
     * @summary 禁用定制场景策略
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
            'action'      => 'DisableCustomScenePolicy',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableCustomScenePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 禁用定制场景策略
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
     * @summary 编辑站点WAF配置
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
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EditSiteWafSettings',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EditSiteWafSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 编辑站点WAF配置
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
     * @summary 启动定制场景策略
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
            'action'      => 'EnableCustomScenePolicy',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableCustomScenePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动定制场景策略
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
     * @summary 导出记录
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportRecords',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导出记录
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
     * @summary 查询缓存保持实例规格
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCacheReserveSpecificationResponse GetCacheReserveSpecificationResponse
     */
    public function getCacheReserveSpecificationWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetCacheReserveSpecification',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCacheReserveSpecificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询缓存保持实例规格
     *  *
     * @return GetCacheReserveSpecificationResponse GetCacheReserveSpecificationResponse
     */
    public function getCacheReserveSpecification()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCacheReserveSpecificationWithOptions($runtime);
    }

    /**
     * @summary 获取边缘容器应用信息
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
            'action'      => 'GetEdgeContainerApp',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEdgeContainerAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取边缘容器应用信息
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
     * @summary 获取边缘容器应用的状态信息
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
            'action'      => 'GetEdgeContainerAppStatus',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEdgeContainerAppStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取边缘容器应用的状态信息
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
     * @summary 获取边缘容器应用的某个版本信息
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEdgeContainerAppVersion',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEdgeContainerAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取边缘容器应用的某个版本信息
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
     * @summary 获取边缘容器应用部署区域
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEdgeContainerDeployRegions',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEdgeContainerDeployRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取边缘容器应用部署区域
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
     * @summary 获取边缘容器日志信息
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEdgeContainerLogs',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEdgeContainerLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取边缘容器日志信息
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
     * @summary 获取应用测试环境部署状态
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEdgeContainerStagingDeployStatus',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEdgeContainerStagingDeployStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取应用测试环境部署状态
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
     * @summary 获取边缘容器应用终端信息
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
            'action'      => 'GetEdgeContainerTerminal',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEdgeContainerTerminalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取边缘容器应用终端信息
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
     * @summary GetErService
     *  *
     * @param GetErServiceRequest $request GetErServiceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetErServiceResponse GetErServiceResponse
     */
    public function getErServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetErService',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetErServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary GetErService
     *  *
     * @param GetErServiceRequest $request GetErServiceRequest
     *
     * @return GetErServiceResponse GetErServiceResponse
     */
    public function getErService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getErServiceWithOptions($request, $runtime);
    }

    /**
     * @summary 查询Key-Value对的某个Key值
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetKv',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询Key-Value对的某个Key值
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
     * @summary 列出账号下的NS
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetKvAccountResponse GetKvAccountResponse
     */
    public function getKvAccountWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetKvAccount',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetKvAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出账号下的NS
     *  *
     * @return GetKvAccountResponse GetKvAccountResponse
     */
    public function getKvAccount()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKvAccountWithOptions($runtime);
    }

    /**
     * @summary 查询Namespace信息
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetKvNamespace',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetKvNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询Namespace信息
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
     * @summary 获取单个自定义列表
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
            'action'      => 'GetList',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取单个自定义列表
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
     * @summary 获取单个自定义响应页面详情
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
            'action'      => 'GetPage',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取单个自定义响应页面详情
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
     * @summary 获取刷新Quota
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPurgeQuota',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPurgeQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取刷新Quota
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
     * @summary ub日志字段列表接口
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRealtimeDeliveryField',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRealtimeDeliveryFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary ub日志字段列表接口
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
     * @summary 查询单个记录信息
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRecord',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询单个记录信息
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
     * @summary 查询Routine配置信息
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
            'action'      => 'GetRoutine',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRoutineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询Routine配置信息
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
     * @summary 上传Routine的测试版本代码, 返回上传代码到OSS的参数
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
            'action'      => 'GetRoutineStagingCodeUploadInfo',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRoutineStagingCodeUploadInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 上传Routine的测试版本代码, 返回上传代码到OSS的参数
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
     * @summary 查询边缘函数测试环境IP
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRoutineStagingEnvIpResponse GetRoutineStagingEnvIpResponse
     */
    public function getRoutineStagingEnvIpWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetRoutineStagingEnvIp',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRoutineStagingEnvIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询边缘函数测试环境IP
     *  *
     * @return GetRoutineStagingEnvIpResponse GetRoutineStagingEnvIpResponse
     */
    public function getRoutineStagingEnvIp()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoutineStagingEnvIpWithOptions($runtime);
    }

    /**
     * @summary 查询用户的Routine列表
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRoutineUserInfoResponse GetRoutineUserInfoResponse
     */
    public function getRoutineUserInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetRoutineUserInfo',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRoutineUserInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户的Routine列表
     *  *
     * @return GetRoutineUserInfoResponse GetRoutineUserInfoResponse
     */
    public function getRoutineUserInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRoutineUserInfoWithOptions($runtime);
    }

    /**
     * @summary 查询单个定时预热任务
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetScheduledPreloadJob',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetScheduledPreloadJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询单个定时预热任务
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
     * @summary 查询单个站点信息
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSite',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询单个站点信息
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
     * @summary 查询当前NS列表
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSiteCurrentNS',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSiteCurrentNSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询当前NS列表
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
     * @summary 获取自定义字段
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSiteCustomLog',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSiteCustomLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取自定义字段
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
     * @summary 获取一个实时日志任务投递
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSiteDeliveryTask',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSiteDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取一个实时日志任务投递
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
     * @summary 获取日志投递任务quota数
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSiteLogDeliveryQuota',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSiteLogDeliveryQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取日志投递任务quota数
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
     * @summary 获取站点WAF配置
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
            'action'      => 'GetSiteWafSettings',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSiteWafSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取站点WAF配置
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
     * @summary 文件上传任务查询接口
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUploadTask',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUploadTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文件上传任务查询接口
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
     * @summary 获取一个用户粒度任务投递
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserDeliveryTask',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取一个用户粒度任务投递
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
     * @summary 获取日志投递任务用户quota数
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserLogDeliveryQuota',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserLogDeliveryQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取日志投递任务用户quota数
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
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWafBotAppKeyResponse GetWafBotAppKeyResponse
     */
    public function getWafBotAppKeyWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetWafBotAppKey',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWafBotAppKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetWafBotAppKeyResponse GetWafBotAppKeyResponse
     */
    public function getWafBotAppKey()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWafBotAppKeyWithOptions($runtime);
    }

    /**
     * @summary 将匹配项转换为表达式
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
            'action'      => 'GetWafFilter',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWafFilterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 将匹配项转换为表达式
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
     * @summary 获取WAF配额详情
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
            'action'      => 'GetWafQuota',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWafQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取WAF配额详情
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
     * @summary 获取单个WAF规则详情
     *  *
     * @param GetWafRuleRequest $request GetWafRuleRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWafRuleResponse GetWafRuleResponse
     */
    public function getWafRuleWithOptions($request, $runtime)
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
            'action'      => 'GetWafRule',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWafRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取单个WAF规则详情
     *  *
     * @param GetWafRuleRequest $request GetWafRuleRequest
     *
     * @return GetWafRuleResponse GetWafRuleResponse
     */
    public function getWafRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWafRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 获取WAF规则集详情
     *  *
     * @param GetWafRulesetRequest $request GetWafRulesetRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWafRulesetResponse GetWafRulesetResponse
     */
    public function getWafRulesetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
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
            'action'      => 'GetWafRuleset',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWafRulesetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取WAF规则集详情
     *  *
     * @param GetWafRulesetRequest $request GetWafRulesetRequest
     *
     * @return GetWafRulesetResponse GetWafRulesetResponse
     */
    public function getWafRuleset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWafRulesetWithOptions($request, $runtime);
    }

    /**
     * @summary 查询缓存保持实例列表
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCacheReserveInstances',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCacheReserveInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询缓存保持实例列表
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
     * @summary 查询站点下客户端证书列表
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListClientCertificates',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClientCertificatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询站点下客户端证书列表
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
     * @summary 获取一个边缘容器应用的全部域名记录
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEdgeContainerAppRecords',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEdgeContainerAppRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取一个边缘容器应用的全部域名记录
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
     * @summary 获取边缘容器应用的全部版本信息
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEdgeContainerAppVersions',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEdgeContainerAppVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取边缘容器应用的全部版本信息
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
     * @summary 获取用户全部边缘容器应用
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
            'action'      => 'ListEdgeContainerApps',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEdgeContainerAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户全部边缘容器应用
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
     * @summary 查询站点的边缘容器记录
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEdgeContainerRecords',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEdgeContainerRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询站点的边缘容器记录
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
     * @summary 查询用户可购买的边缘函数的套餐
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEdgeRoutinePlansResponse ListEdgeRoutinePlansResponse
     */
    public function listEdgeRoutinePlansWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListEdgeRoutinePlans',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEdgeRoutinePlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户可购买的边缘函数的套餐
     *  *
     * @return ListEdgeRoutinePlansResponse ListEdgeRoutinePlansResponse
     */
    public function listEdgeRoutinePlans()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEdgeRoutinePlansWithOptions($runtime);
    }

    /**
     * @summary 查询站点的边缘路由记录
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEdgeRoutineRecords',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEdgeRoutineRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询站点的边缘路由记录
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
     * @summary 查询实例或者站点的quota值
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceQuotas',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstanceQuotasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询实例或者站点的quota值
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
     * @summary 查询功能quota和用量
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceQuotasWithUsage',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstanceQuotasWithUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询功能quota和用量
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
     * @summary 遍历Namespace的Key值
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListKvs',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListKvsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 遍历Namespace的Key值
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
     * @summary 列举自定义列表
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
            'action'      => 'ListLists',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListListsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举自定义列表
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
     * @summary 查询负载均衡区域列表
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLoadBalancerRegions',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLoadBalancerRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询负载均衡区域列表
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
     * @summary 列举自定义托管规则组
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
            'action'      => 'ListManagedRulesGroups',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListManagedRulesGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举自定义托管规则组
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
     * @summary 列举自定义响应页面
     *  *
     * @param ListPagesRequest $request ListPagesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPagesResponse ListPagesResponse
     */
    public function listPagesWithOptions($request, $runtime)
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
            'action'      => 'ListPages',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举自定义响应页面
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
     * @summary 查询站点下的记录列表
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRecords',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询站点下的记录列表
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
     * @summary 查询Routine灰度环境列表
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRoutineCanaryAreasResponse ListRoutineCanaryAreasResponse
     */
    public function listRoutineCanaryAreasWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListRoutineCanaryAreas',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRoutineCanaryAreasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询Routine灰度环境列表
     *  *
     * @return ListRoutineCanaryAreasResponse ListRoutineCanaryAreasResponse
     */
    public function listRoutineCanaryAreas()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRoutineCanaryAreasWithOptions($runtime);
    }

    /**
     * @summary 查询Routine可选择规格列表
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRoutineOptionalSpecsResponse ListRoutineOptionalSpecsResponse
     */
    public function listRoutineOptionalSpecsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListRoutineOptionalSpecs',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRoutineOptionalSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询Routine可选择规格列表
     *  *
     * @return ListRoutineOptionalSpecsResponse ListRoutineOptionalSpecsResponse
     */
    public function listRoutineOptionalSpecs()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRoutineOptionalSpecsWithOptions($runtime);
    }

    /**
     * @summary 列出指定任务下的执行计划
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListScheduledPreloadExecutions',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListScheduledPreloadExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出指定任务下的执行计划
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
     * @summary 列出定时预热任务列表
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListScheduledPreloadJobs',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListScheduledPreloadJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出定时预热任务列表
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
     * @summary 列出全部任务投递
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSiteDeliveryTasks',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSiteDeliveryTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出全部任务投递
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
     * @summary 查询站点列表
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSites',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSitesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询站点列表
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
     * @summary 查询云资源已经绑定的标签列表
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
            'action'      => 'ListTagResources',
            'version'     => '2024-09-10',
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
     * @summary 查询云资源已经绑定的标签列表
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
     * @summary 获取文件上传任务
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUploadTasks',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUploadTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取文件上传任务
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
     * @summary 列出用户全部任务投递
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserDeliveryTasks',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserDeliveryTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出用户全部任务投递
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
     * @summary 查询该用户下可用的已购套餐实例
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserRatePlanInstances',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserRatePlanInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询该用户下可用的已购套餐实例
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
     * @summary 列举WAF托管规则
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
            'action'      => 'ListWafManagedRules',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWafManagedRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举WAF托管规则
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
     * @summary 列举WAF阶段
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
            'action'      => 'ListWafPhases',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWafPhasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举WAF阶段
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
     * @summary 列举WAF规则
     *  *
     * @param ListWafRulesRequest $tmpReq  ListWafRulesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWafRulesResponse ListWafRulesResponse
     */
    public function listWafRulesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListWafRulesShrinkRequest([]);
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
        if (!Utils::isUnset($request->phase)) {
            $query['Phase'] = $request->phase;
        }
        if (!Utils::isUnset($request->queryArgsShrink)) {
            $query['QueryArgs'] = $request->queryArgsShrink;
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
            'action'      => 'ListWafRules',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWafRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举WAF规则
     *  *
     * @param ListWafRulesRequest $request ListWafRulesRequest
     *
     * @return ListWafRulesResponse ListWafRulesResponse
     */
    public function listWafRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWafRulesWithOptions($request, $runtime);
    }

    /**
     * @summary 列举WAF规则集
     *  *
     * @param ListWafRulesetsRequest $tmpReq  ListWafRulesetsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListWafRulesetsResponse ListWafRulesetsResponse
     */
    public function listWafRulesetsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListWafRulesetsShrinkRequest([]);
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
        if (!Utils::isUnset($request->phase)) {
            $query['Phase'] = $request->phase;
        }
        if (!Utils::isUnset($request->queryArgsShrink)) {
            $query['QueryArgs'] = $request->queryArgsShrink;
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
            'action'      => 'ListWafRulesets',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWafRulesetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举WAF规则集
     *  *
     * @param ListWafRulesetsRequest $request ListWafRulesetsRequest
     *
     * @return ListWafRulesetsResponse ListWafRulesetsResponse
     */
    public function listWafRulesets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWafRulesetsWithOptions($request, $runtime);
    }

    /**
     * @summary 列举WAF模板规则
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWafTemplateRules',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWafTemplateRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举WAF模板规则
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
     * @summary 列举WAF规则使用情况
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
            'action'      => 'ListWafUsageOfRules',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWafUsageOfRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举WAF规则使用情况
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
     * @summary 查询等候室事件
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWaitingRoomEvents',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWaitingRoomEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询等候室事件
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
     * @summary 查询等候室绕过规则
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWaitingRoomRules',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWaitingRoomRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询等候室绕过规则
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
     * @summary 查询等候室
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWaitingRooms',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWaitingRoomsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询等候室
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
     * @summary 缓存预热
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
            'action'      => 'PreloadCaches',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PreloadCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 缓存预热
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
     * @summary 发布边缘容器应用的某个版本
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
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PublishEdgeContainerAppVersion',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishEdgeContainerAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发布边缘容器应用的某个版本
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
     * @summary 发布Routine某版本代码
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
            'action'      => 'PublishRoutineCodeVersion',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishRoutineCodeVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发布Routine某版本代码
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
     * @summary 缓存刷新
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
            'action'      => 'PurgeCaches',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PurgeCachesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 缓存刷新
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
     * @summary 设置Namespace的Key-Value对
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
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutKv',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutKvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置Namespace的Key-Value对
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
     * @summary 设置Namespace的Key-Value对，支持最大25M的Body
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
            'action'      => 'PutKvWithHighCapacity',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutKvWithHighCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置Namespace的Key-Value对，支持最大25M的Body
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ESA',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $putKvWithHighCapacityReq = new PutKvWithHighCapacityRequest([]);
        OpenApiUtilClient::convert($request, $putKvWithHighCapacityReq);
        if (!Utils::isUnset($request->urlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->urlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $putKvWithHighCapacityReq->url = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->putKvWithHighCapacityWithOptions($putKvWithHighCapacityReq, $runtime);
    }

    /**
     * @summary 重建边缘容器应用的测试环境
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
            'action'      => 'RebuildEdgeContainerAppStagingEnv',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebuildEdgeContainerAppStagingEnvResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重建边缘容器应用的测试环境
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
     * @summary 重置定时预热任务的进度，从头开始预热
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
            'action'      => 'ResetScheduledPreloadJob',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetScheduledPreloadJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重置定时预热任务的进度，从头开始预热
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
     * @summary 回滚边缘容器应用的某个版本
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
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RollbackEdgeContainerAppVersion',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RollbackEdgeContainerAppVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 回滚边缘容器应用的某个版本
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
     * @summary 设置证书
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
        if (!Utils::isUnset($request->update)) {
            $body['Update'] = $request->update;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetCertificate',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置证书
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
     * @summary 设置HTTP DDoS智能防护配置信息
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
            'action'      => 'SetHttpDDoSAttackIntelligentProtection',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetHttpDDoSAttackIntelligentProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置HTTP DDoS智能防护配置信息
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
     * @summary 设置HTTP DDoS攻击防护配置信息
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
            'action'      => 'SetHttpDDoSAttackProtection',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetHttpDDoSAttackProtectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置HTTP DDoS攻击防护配置信息
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
     * @summary 开始单个定时预热计划
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
            'action'      => 'StartScheduledPreloadExecution',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartScheduledPreloadExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开始单个定时预热计划
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
     * @summary 停止单个定时预热计划
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
            'action'      => 'StopScheduledPreloadExecution',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopScheduledPreloadExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止单个定时预热计划
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
     * @summary 将表达式转换为匹配项
     *  *
     * @param TransformExpressionToMatchRequest $request TransformExpressionToMatchRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return TransformExpressionToMatchResponse TransformExpressionToMatchResponse
     */
    public function transformExpressionToMatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $body = [];
        if (!Utils::isUnset($request->expression)) {
            $body['Expression'] = $request->expression;
        }
        if (!Utils::isUnset($request->phase)) {
            $body['Phase'] = $request->phase;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TransformExpressionToMatch',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransformExpressionToMatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 将表达式转换为匹配项
     *  *
     * @param TransformExpressionToMatchRequest $request TransformExpressionToMatchRequest
     *
     * @return TransformExpressionToMatchResponse TransformExpressionToMatchResponse
     */
    public function transformExpressionToMatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transformExpressionToMatchWithOptions($request, $runtime);
    }

    /**
     * @summary 将匹配项转换为表达式
     *  *
     * @param TransformMatchToExpressionRequest $tmpReq  TransformMatchToExpressionRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return TransformMatchToExpressionResponse TransformMatchToExpressionResponse
     */
    public function transformMatchToExpressionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TransformMatchToExpressionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->match)) {
            $request->matchShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->match, 'Match', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        $body = [];
        if (!Utils::isUnset($request->matchShrink)) {
            $body['Match'] = $request->matchShrink;
        }
        if (!Utils::isUnset($request->phase)) {
            $body['Phase'] = $request->phase;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TransformMatchToExpression',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransformMatchToExpressionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 将匹配项转换为表达式
     *  *
     * @param TransformMatchToExpressionRequest $request TransformMatchToExpressionRequest
     *
     * @return TransformMatchToExpressionResponse TransformMatchToExpressionResponse
     */
    public function transformMatchToExpression($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transformMatchToExpressionWithOptions($request, $runtime);
    }

    /**
     * @summary 为资源列表统一解绑标签
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
            'action'      => 'UntagResources',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 为资源列表统一解绑标签
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
     * @summary 修改定制场景策略
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
            'action'      => 'UpdateCustomScenePolicy',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCustomScenePolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改定制场景策略
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
     * @summary 重命名账号下的Namespace
     *  *
     * @param UpdateKvNamespaceRequest $request UpdateKvNamespaceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateKvNamespaceResponse UpdateKvNamespaceResponse
     */
    public function updateKvNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->namespace_)) {
            $query['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateKvNamespace',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateKvNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重命名账号下的Namespace
     *  *
     * @param UpdateKvNamespaceRequest $request UpdateKvNamespaceRequest
     *
     * @return UpdateKvNamespaceResponse UpdateKvNamespaceResponse
     */
    public function updateKvNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateKvNamespaceWithOptions($request, $runtime);
    }

    /**
     * @summary 更新自定义列表
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
            'action'      => 'UpdateList',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新自定义列表
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
     * @summary 更新自定义响应页面
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
            'action'      => 'UpdatePage',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新自定义响应页面
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
     * @summary 更新记录
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
            'action'      => 'UpdateRecord',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新记录
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
     * @summary 更新单个定时预热计划
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
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateScheduledPreloadExecution',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateScheduledPreloadExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新单个定时预热计划
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
     * @summary 修改站点接入方式
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
            'action'      => 'UpdateSiteAccessType',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSiteAccessTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改站点接入方式
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
     * @summary 更新站点加速区域
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
            'action'      => 'UpdateSiteCoverage',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSiteCoverageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新站点加速区域
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
     * @summary 修改自定义字段
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
            'action'      => 'UpdateSiteCustomLog',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSiteCustomLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改自定义字段
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
     * @summary 修改一个任务投递
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
            'action'      => 'UpdateSiteDeliveryTask',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSiteDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改一个任务投递
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
     * @summary 上下线一个任务投递
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSiteDeliveryTaskStatus',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSiteDeliveryTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 上下线一个任务投递
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
     * @summary 修改站点自定义NS
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
            'action'      => 'UpdateSiteVanityNS',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSiteVanityNSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改站点自定义NS
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
     * @summary 修改一个用户粒度任务投递
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
            'action'      => 'UpdateUserDeliveryTask',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserDeliveryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改一个用户粒度任务投递
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
     * @summary 上下线一个用户任务投递
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
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserDeliveryTaskStatus',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserDeliveryTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 上下线一个用户任务投递
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
     * @summary 更新WAF规则页面
     *  *
     * @param UpdateWafRuleRequest $tmpReq  UpdateWafRuleRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWafRuleResponse UpdateWafRuleResponse
     */
    public function updateWafRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateWafRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->config)) {
            $request->configShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        $body = [];
        if (!Utils::isUnset($request->configShrink)) {
            $body['Config'] = $request->configShrink;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->position)) {
            $body['Position'] = $request->position;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWafRule',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWafRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新WAF规则页面
     *  *
     * @param UpdateWafRuleRequest $request UpdateWafRuleRequest
     *
     * @return UpdateWafRuleResponse UpdateWafRuleResponse
     */
    public function updateWafRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWafRuleWithOptions($request, $runtime);
    }

    /**
     * @summary 更新WAF规则集
     *  *
     * @param UpdateWafRulesetRequest $request UpdateWafRulesetRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWafRulesetResponse UpdateWafRulesetResponse
     */
    public function updateWafRulesetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->siteId)) {
            $query['SiteId'] = $request->siteId;
        }
        if (!Utils::isUnset($request->siteVersion)) {
            $query['SiteVersion'] = $request->siteVersion;
        }
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWafRuleset',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWafRulesetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新WAF规则集
     *  *
     * @param UpdateWafRulesetRequest $request UpdateWafRulesetRequest
     *
     * @return UpdateWafRulesetResponse UpdateWafRulesetResponse
     */
    public function updateWafRuleset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWafRulesetWithOptions($request, $runtime);
    }

    /**
     * @summary 修改等候室
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
            'action'      => 'UpdateWaitingRoom',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWaitingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改等候室
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
     * @summary 修改等候室事件
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
            'action'      => 'UpdateWaitingRoomEvent',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWaitingRoomEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改等候室事件
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
     * @summary 修改等候室规则
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
            'action'      => 'UpdateWaitingRoomRule',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWaitingRoomRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改等候室规则
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
     * @summary 缓存刷新文件上传
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
            'action'      => 'UploadFile',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 缓存刷新文件上传
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
        $accessKeyId          = $this->_credential->getAccessKeyId();
        $accessKeySecret      = $this->_credential->getAccessKeySecret();
        $securityToken        = $this->_credential->getSecurityToken();
        $credentialType       = $this->_credential->getType();
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (Utils::empty_($openPlatformEndpoint)) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }
        if (Utils::isUnset($credentialType)) {
            $credentialType = 'access_key';
        }
        $authConfig = new Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken'   => $securityToken,
            'type'            => $credentialType,
            'endpoint'        => $openPlatformEndpoint,
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new AuthorizeFileUploadRequest([
            'product'  => 'ESA',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = new AuthorizeFileUploadResponse([]);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient     = new OSS($ossConfig);
        $fileObj       = new FileField([]);
        $ossHeader     = new header([]);
        $uploadRequest = new PostObjectRequest([]);
        $ossRuntime    = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        OpenApiUtilClient::convert($runtime, $ossRuntime);
        $uploadFileReq = new UploadFileRequest([]);
        OpenApiUtilClient::convert($request, $uploadFileReq);
        if (!Utils::isUnset($request->urlObject)) {
            $authResponse           = $authClient->authorizeFileUploadWithOptions($authRequest, $runtime);
            $ossConfig->accessKeyId = $authResponse->body->accessKeyId;
            $ossConfig->endpoint    = OpenApiUtilClient::getEndpoint($authResponse->body->endpoint, $authResponse->body->useAccelerate, $this->_endpointType);
            $ossClient              = new OSS($ossConfig);
            $fileObj                = new FileField([
                'filename'    => $authResponse->body->objectKey,
                'content'     => $request->urlObject,
                'contentType' => '',
            ]);
            $ossHeader = new header([
                'accessKeyId'         => $authResponse->body->accessKeyId,
                'policy'              => $authResponse->body->encodedPolicy,
                'signature'           => $authResponse->body->signature,
                'key'                 => $authResponse->body->objectKey,
                'file'                => $fileObj,
                'successActionStatus' => '201',
            ]);
            $uploadRequest = new PostObjectRequest([
                'bucketName' => $authResponse->body->bucket,
                'header'     => $ossHeader,
            ]);
            $ossClient->postObject($uploadRequest, $ossRuntime);
            $uploadFileReq->url = 'http://' . $authResponse->body->bucket . '.' . $authResponse->body->endpoint . '/' . $authResponse->body->objectKey . '';
        }

        return $this->uploadFileWithOptions($uploadFileReq, $runtime);
    }

    /**
     * @summary 校验站点的归属
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
            'action'      => 'VerifySite',
            'version'     => '2024-09-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifySiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 校验站点的归属
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
