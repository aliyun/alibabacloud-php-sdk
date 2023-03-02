<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\GEMP\V20210413\Models\AddProblemServiceGroupRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\AddProblemServiceGroupResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\BillingStatisticsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CancelProblemRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CancelProblemResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CheckWebhookRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CheckWebhookResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ConfirmIntegrationConfigRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ConfirmIntegrationConfigResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateEscalationPlanRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateEscalationPlanResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateIncidentRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateIncidentResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateIncidentSubtotalRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateIncidentSubtotalResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateIntegrationConfigRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateIntegrationConfigResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemEffectionServiceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemEffectionServiceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemMeasureRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemMeasureResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemSubtotalRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemSubtotalResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemTimelineRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemTimelineResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemTimelinesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateProblemTimelinesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateRichTextRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateRichTextResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateRouteRuleRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateRouteRuleResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupSchedulingRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupSchedulingResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateSubscriptionRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateSubscriptionResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateTenantApplicationRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateTenantApplicationResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateUserRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateUserResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteEscalationPlanRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteEscalationPlanResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteIncidentRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteIncidentResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteIntegrationConfigRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteIntegrationConfigResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteProblemEffectionServiceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteProblemEffectionServiceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteProblemMeasureRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteProblemMeasureResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteProblemRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteProblemResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteProblemTimelineRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteProblemTimelineResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteRouteRuleRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteRouteRuleResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteServiceGroupRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteServiceGroupResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteServiceGroupSchedulingResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteServiceGroupUserRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteServiceGroupUserResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteServiceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteSubscriptionRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteSubscriptionResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteUserRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeleteUserResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeliverIncidentRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DeliverIncidentResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableEscalationPlanRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableEscalationPlanResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableIntegrationConfigRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableIntegrationConfigResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableRouteRuleRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableRouteRuleResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableServiceGroupWebhookRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableServiceGroupWebhookResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableSubscriptionRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\DisableSubscriptionResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableEscalationPlanRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableEscalationPlanResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableIntegrationConfigRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableIntegrationConfigResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableRouteRuleRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableRouteRuleResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableServiceGroupWebhookRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableServiceGroupWebhookResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableSubscriptionRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\EnableSubscriptionResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\FinishIncidentRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\FinishIncidentResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\FinishProblemRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\FinishProblemResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GeneratePictureLinkRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GeneratePictureLinkResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GeneratePictureUploadSignRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GeneratePictureUploadSignResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GenerateProblemPictureLinkRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GenerateProblemPictureLinkResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GenerateProblemPictureUploadSignRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GenerateProblemPictureUploadSignResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetEventRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetEventResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetHomePageGuidanceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetHomePageGuidanceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentListByIdListRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentListByIdListResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentStatisticsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentStatisticsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentSubtotalCountRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentSubtotalCountResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetIntegrationConfigRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetIntegrationConfigResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemEffectionServiceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemEffectionServiceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemImprovementRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemImprovementResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetResourceStatisticsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetResourceStatisticsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetRichTextRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetRichTextResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetRouteRuleRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetRouteRuleResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupPersonSchedulingRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupPersonSchedulingResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingPreviewRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingPreviewResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSpecialPersonSchedulingRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSpecialPersonSchedulingResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetSimilarIncidentStatisticsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetSimilarIncidentStatisticsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetSubscriptionRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetSubscriptionResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetTenantApplicationRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetTenantApplicationResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetTenantStatusRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetTenantStatusResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetUserGuideStatusRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetUserGuideStatusResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetUserRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetUserResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListAlertsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListAlertsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListByMonitorSourceIdRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListByMonitorSourceIdResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListChartDataForServiceGroupRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListChartDataForServiceGroupResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListChartDataForUserRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListChartDataForUserResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListConfigsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListConfigsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListDataReportForServiceGroupRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListDataReportForServiceGroupResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListDataReportForUserRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListDataReportForUserResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListDictionariesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListDictionariesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListEscalationPlansByNoticeObjectRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListEscalationPlansByNoticeObjectResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListEscalationPlanServicesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListEscalationPlanServicesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListEscalationPlansRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListEscalationPlansResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailEscalationPlansRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailEscalationPlansResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailTimelinesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailTimelinesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentSubtotalsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentSubtotalsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentTimelinesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentTimelinesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIntegrationConfigsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIntegrationConfigsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIntegrationConfigTimelinesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIntegrationConfigTimelinesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListMonitorSourcesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListMonitorSourcesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemDetailOperationsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemDetailOperationsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemOperationsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemOperationsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemSubtotalsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemSubtotalsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemTimeLinesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemTimeLinesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListRouteRulesByAssignWhoIdRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListRouteRulesByAssignWhoIdResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListRouteRulesByServiceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListRouteRulesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListRouteRulesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListServiceGroupMonitorSourceTemplatesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListServiceGroupMonitorSourceTemplatesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListServiceGroupsByUserIdResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListServiceGroupsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListServiceGroupsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListServicesRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListServicesResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSourceEventsForMonitorSourceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSourceEventsForMonitorSourceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSourceEventsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSourceEventsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSubscriptionServiceGroupsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSubscriptionServiceGroupsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSubscriptionsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSubscriptionsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListTrendForSourceEventRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListTrendForSourceEventResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListUserSerivceGroupsRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListUserSerivceGroupsResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListUsersRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListUsersResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\PushMonitorRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\PushMonitorResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RecoverProblemRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RecoverProblemResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RefreshIntegrationConfigKeyRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RefreshIntegrationConfigKeyResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RemoveIntegrationConfigRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RemoveIntegrationConfigResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RemoveProblemServiceGroupRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RemoveProblemServiceGroupResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ReplayProblemRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ReplayProblemResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RespondIncidentRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RespondIncidentResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RevokeProblemRecoveryRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\RevokeProblemRecoveryResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UnbindUserResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateEscalationPlanRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateEscalationPlanResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateIncidentRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateIncidentResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateIntegrationConfigRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateIntegrationConfigResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemEffectionServiceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemEffectionServiceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemImprovementRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemImprovementResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemMeasureRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemMeasureResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemNoticeRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemNoticeResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemTimelineRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateProblemTimelineResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateRichTextRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateRichTextResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateRouteRuleRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateRouteRuleResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceGroupRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceGroupResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceGroupSchedulingRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceGroupSchedulingResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceGroupSpecialDaySchedulingRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceGroupSpecialDaySchedulingResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateSubscriptionRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateSubscriptionResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateUserGuideStatusRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateUserGuideStatusResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateUserRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateUserResponse;
use AlibabaCloud\SDK\GEMP\V20210413\Models\VerifyRouteRuleRequest;
use AlibabaCloud\SDK\GEMP\V20210413\Models\VerifyRouteRuleResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class GEMP extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('gemp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddProblemServiceGroupRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return AddProblemServiceGroupResponse
     */
    public function addProblemServiceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->serviceGroupIds)) {
            $body['serviceGroupIds'] = $request->serviceGroupIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddProblemServiceGroup',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/addServiceGroup',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddProblemServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddProblemServiceGroupRequest $request
     *
     * @return AddProblemServiceGroupResponse
     */
    public function addProblemServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addProblemServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return BillingStatisticsResponse
     */
    public function billingStatisticsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'BillingStatistics',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/charging/details',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BillingStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return BillingStatisticsResponse
     */
    public function billingStatistics()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->billingStatisticsWithOptions($headers, $runtime);
    }

    /**
     * @param CancelProblemRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CancelProblemResponse
     */
    public function cancelProblemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cancelReason)) {
            $body['cancelReason'] = $request->cancelReason;
        }
        if (!Utils::isUnset($request->cancelReasonDescription)) {
            $body['cancelReasonDescription'] = $request->cancelReasonDescription;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->problemNotifyType)) {
            $body['problemNotifyType'] = $request->problemNotifyType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelProblem',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/cancel',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CancelProblemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelProblemRequest $request
     *
     * @return CancelProblemResponse
     */
    public function cancelProblem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelProblemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CheckWebhookRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CheckWebhookResponse
     */
    public function checkWebhookWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->webhook)) {
            $body['webhook'] = $request->webhook;
        }
        if (!Utils::isUnset($request->webhookType)) {
            $body['webhookType'] = $request->webhookType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckWebhook',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/check/webhook',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckWebhookRequest $request
     *
     * @return CheckWebhookResponse
     */
    public function checkWebhook($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->checkWebhookWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ConfirmIntegrationConfigRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ConfirmIntegrationConfigResponse
     */
    public function confirmIntegrationConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->integrationConfigId)) {
            $body['integrationConfigId'] = $request->integrationConfigId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfirmIntegrationConfig',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/integrationConfig/confirm',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ConfirmIntegrationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmIntegrationConfigRequest $request
     *
     * @return ConfirmIntegrationConfigResponse
     */
    public function confirmIntegrationConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->confirmIntegrationConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateEscalationPlanRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateEscalationPlanResponse
     */
    public function createEscalationPlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->escalationPlanDescription)) {
            $body['escalationPlanDescription'] = $request->escalationPlanDescription;
        }
        if (!Utils::isUnset($request->escalationPlanName)) {
            $body['escalationPlanName'] = $request->escalationPlanName;
        }
        if (!Utils::isUnset($request->escalationPlanRules)) {
            $body['escalationPlanRules'] = $request->escalationPlanRules;
        }
        if (!Utils::isUnset($request->escalationPlanScopeObjects)) {
            $body['escalationPlanScopeObjects'] = $request->escalationPlanScopeObjects;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEscalationPlan',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/escalationPlan/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateEscalationPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEscalationPlanRequest $request
     *
     * @return CreateEscalationPlanResponse
     */
    public function createEscalationPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createEscalationPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateIncidentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateIncidentResponse
     */
    public function createIncidentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assignUserId)) {
            $body['assignUserId'] = $request->assignUserId;
        }
        if (!Utils::isUnset($request->channels)) {
            $body['channels'] = $request->channels;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->effect)) {
            $body['effect'] = $request->effect;
        }
        if (!Utils::isUnset($request->incidentDescription)) {
            $body['incidentDescription'] = $request->incidentDescription;
        }
        if (!Utils::isUnset($request->incidentLevel)) {
            $body['incidentLevel'] = $request->incidentLevel;
        }
        if (!Utils::isUnset($request->incidentTitle)) {
            $body['incidentTitle'] = $request->incidentTitle;
        }
        if (!Utils::isUnset($request->relatedServiceId)) {
            $body['relatedServiceId'] = $request->relatedServiceId;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            $body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateIncident',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/incident/manualSave',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateIncidentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIncidentRequest $request
     *
     * @return CreateIncidentResponse
     */
    public function createIncident($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIncidentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateIncidentSubtotalRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateIncidentSubtotalResponse
     */
    public function createIncidentSubtotalWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->incidentId)) {
            $body['incidentId'] = $request->incidentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateIncidentSubtotal',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/incident/save/subtotal',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateIncidentSubtotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIncidentSubtotalRequest $request
     *
     * @return CreateIncidentSubtotalResponse
     */
    public function createIncidentSubtotal($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIncidentSubtotalWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateIntegrationConfigRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateIntegrationConfigResponse
     */
    public function createIntegrationConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->monitorSourceId)) {
            $body['monitorSourceId'] = $request->monitorSourceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateIntegrationConfig',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/integrationConfig/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateIntegrationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateIntegrationConfigRequest $request
     *
     * @return CreateIntegrationConfigResponse
     */
    public function createIntegrationConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIntegrationConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateProblemRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProblemResponse
     */
    public function createProblemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->affectServiceIds)) {
            $body['affectServiceIds'] = $request->affectServiceIds;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->discoverTime)) {
            $body['discoverTime'] = $request->discoverTime;
        }
        if (!Utils::isUnset($request->incidentId)) {
            $body['incidentId'] = $request->incidentId;
        }
        if (!Utils::isUnset($request->mainHandlerId)) {
            $body['mainHandlerId'] = $request->mainHandlerId;
        }
        if (!Utils::isUnset($request->preliminaryReason)) {
            $body['preliminaryReason'] = $request->preliminaryReason;
        }
        if (!Utils::isUnset($request->problemLevel)) {
            $body['problemLevel'] = $request->problemLevel;
        }
        if (!Utils::isUnset($request->problemName)) {
            $body['problemName'] = $request->problemName;
        }
        if (!Utils::isUnset($request->problemNotifyType)) {
            $body['problemNotifyType'] = $request->problemNotifyType;
        }
        if (!Utils::isUnset($request->problemStatus)) {
            $body['problemStatus'] = $request->problemStatus;
        }
        if (!Utils::isUnset($request->progressSummary)) {
            $body['progressSummary'] = $request->progressSummary;
        }
        if (!Utils::isUnset($request->progressSummaryRichTextId)) {
            $body['progressSummaryRichTextId'] = $request->progressSummaryRichTextId;
        }
        if (!Utils::isUnset($request->recoveryTime)) {
            $body['recoveryTime'] = $request->recoveryTime;
        }
        if (!Utils::isUnset($request->relatedServiceId)) {
            $body['relatedServiceId'] = $request->relatedServiceId;
        }
        if (!Utils::isUnset($request->serviceGroupIds)) {
            $body['serviceGroupIds'] = $request->serviceGroupIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProblem',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/upgrade',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProblemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProblemRequest $request
     *
     * @return CreateProblemResponse
     */
    public function createProblem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProblemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateProblemEffectionServiceRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateProblemEffectionServiceResponse
     */
    public function createProblemEffectionServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->level)) {
            $body['level'] = $request->level;
        }
        if (!Utils::isUnset($request->pictureUrl)) {
            $body['pictureUrl'] = $request->pictureUrl;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $body['serviceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProblemEffectionService',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/process/effectionService/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProblemEffectionServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProblemEffectionServiceRequest $request
     *
     * @return CreateProblemEffectionServiceResponse
     */
    public function createProblemEffectionService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProblemEffectionServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateProblemMeasureRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateProblemMeasureResponse
     */
    public function createProblemMeasureWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->checkStandard)) {
            $body['checkStandard'] = $request->checkStandard;
        }
        if (!Utils::isUnset($request->checkUserId)) {
            $body['checkUserId'] = $request->checkUserId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->directorId)) {
            $body['directorId'] = $request->directorId;
        }
        if (!Utils::isUnset($request->planFinishTime)) {
            $body['planFinishTime'] = $request->planFinishTime;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->stalkerId)) {
            $body['stalkerId'] = $request->stalkerId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProblemMeasure',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/improvement/measure/save',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProblemMeasureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProblemMeasureRequest $request
     *
     * @return CreateProblemMeasureResponse
     */
    public function createProblemMeasure($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProblemMeasureWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateProblemSubtotalRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateProblemSubtotalResponse
     */
    public function createProblemSubtotalWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProblemSubtotal',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/save/subtotal',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProblemSubtotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProblemSubtotalRequest $request
     *
     * @return CreateProblemSubtotalResponse
     */
    public function createProblemSubtotal($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProblemSubtotalWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateProblemTimelineRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateProblemTimelineResponse
     */
    public function createProblemTimelineWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->keyNode)) {
            $body['keyNode'] = $request->keyNode;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->time)) {
            $body['time'] = $request->time;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProblemTimeline',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/process/timeline/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProblemTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProblemTimelineRequest $request
     *
     * @return CreateProblemTimelineResponse
     */
    public function createProblemTimeline($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProblemTimelineWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateProblemTimelinesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateProblemTimelinesResponse
     */
    public function createProblemTimelinesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->timelineNodes)) {
            $body['timelineNodes'] = $request->timelineNodes;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProblemTimelines',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/process/timeline/batchCreate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProblemTimelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProblemTimelinesRequest $request
     *
     * @return CreateProblemTimelinesResponse
     */
    public function createProblemTimelines($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProblemTimelinesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateRichTextRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateRichTextResponse
     */
    public function createRichTextWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['instanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->richText)) {
            $body['richText'] = $request->richText;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRichText',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/rich/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRichTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRichTextRequest $request
     *
     * @return CreateRichTextResponse
     */
    public function createRichText($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRichTextWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateRouteRuleRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateRouteRuleResponse
     */
    public function createRouteRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assignObjectId)) {
            $body['assignObjectId'] = $request->assignObjectId;
        }
        if (!Utils::isUnset($request->assignObjectType)) {
            $body['assignObjectType'] = $request->assignObjectType;
        }
        if (!Utils::isUnset($request->childRuleRelation)) {
            $body['childRuleRelation'] = $request->childRuleRelation;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->convergenceFields)) {
            $body['convergenceFields'] = $request->convergenceFields;
        }
        if (!Utils::isUnset($request->convergenceType)) {
            $body['convergenceType'] = $request->convergenceType;
        }
        if (!Utils::isUnset($request->coverageProblemLevels)) {
            $body['coverageProblemLevels'] = $request->coverageProblemLevels;
        }
        if (!Utils::isUnset($request->effection)) {
            $body['effection'] = $request->effection;
        }
        if (!Utils::isUnset($request->enableStatus)) {
            $body['enableStatus'] = $request->enableStatus;
        }
        if (!Utils::isUnset($request->incidentLevel)) {
            $body['incidentLevel'] = $request->incidentLevel;
        }
        if (!Utils::isUnset($request->matchCount)) {
            $body['matchCount'] = $request->matchCount;
        }
        if (!Utils::isUnset($request->notifyChannels)) {
            $body['notifyChannels'] = $request->notifyChannels;
        }
        if (!Utils::isUnset($request->problemEffectionServices)) {
            $body['problemEffectionServices'] = $request->problemEffectionServices;
        }
        if (!Utils::isUnset($request->problemLevelGroup)) {
            $body['problemLevelGroup'] = $request->problemLevelGroup;
        }
        if (!Utils::isUnset($request->relatedServiceId)) {
            $body['relatedServiceId'] = $request->relatedServiceId;
        }
        if (!Utils::isUnset($request->routeChildRules)) {
            $body['routeChildRules'] = $request->routeChildRules;
        }
        if (!Utils::isUnset($request->routeType)) {
            $body['routeType'] = $request->routeType;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $body['ruleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->timeWindow)) {
            $body['timeWindow'] = $request->timeWindow;
        }
        if (!Utils::isUnset($request->timeWindowUnit)) {
            $body['timeWindowUnit'] = $request->timeWindowUnit;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateRouteRule',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/routeRule/save',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateRouteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRouteRuleRequest $request
     *
     * @return CreateRouteRuleResponse
     */
    public function createRouteRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRouteRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceDescription)) {
            $body['serviceDescription'] = $request->serviceDescription;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['serviceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateService',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/save',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateServiceRequest $request
     *
     * @return CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateServiceGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateServiceGroupResponse
     */
    public function createServiceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->enableWebhook)) {
            $body['enableWebhook'] = $request->enableWebhook;
        }
        if (!Utils::isUnset($request->monitorSourceTemplates)) {
            $body['monitorSourceTemplates'] = $request->monitorSourceTemplates;
        }
        if (!Utils::isUnset($request->serviceGroupDescription)) {
            $body['serviceGroupDescription'] = $request->serviceGroupDescription;
        }
        if (!Utils::isUnset($request->serviceGroupName)) {
            $body['serviceGroupName'] = $request->serviceGroupName;
        }
        if (!Utils::isUnset($request->userIds)) {
            $body['userIds'] = $request->userIds;
        }
        if (!Utils::isUnset($request->webhookLink)) {
            $body['webhookLink'] = $request->webhookLink;
        }
        if (!Utils::isUnset($request->webhookType)) {
            $body['webhookType'] = $request->webhookType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceGroup',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/group/insert',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateServiceGroupRequest $request
     *
     * @return CreateServiceGroupResponse
     */
    public function createServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateServiceGroupSchedulingRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateServiceGroupSchedulingResponse
     */
    public function createServiceGroupSchedulingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->fastScheduling)) {
            $body['fastScheduling'] = $request->fastScheduling;
        }
        if (!Utils::isUnset($request->fineScheduling)) {
            $body['fineScheduling'] = $request->fineScheduling;
        }
        if (!Utils::isUnset($request->schedulingWay)) {
            $body['schedulingWay'] = $request->schedulingWay;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            $body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceGroupScheduling',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/group/scheduling/save',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateServiceGroupSchedulingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateServiceGroupSchedulingRequest $request
     *
     * @return CreateServiceGroupSchedulingResponse
     */
    public function createServiceGroupScheduling($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceGroupSchedulingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateSubscriptionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateSubscriptionResponse
     */
    public function createSubscriptionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->expiredType)) {
            $body['expiredType'] = $request->expiredType;
        }
        if (!Utils::isUnset($request->notifyObjectList)) {
            $body['notifyObjectList'] = $request->notifyObjectList;
        }
        if (!Utils::isUnset($request->notifyObjectType)) {
            $body['notifyObjectType'] = $request->notifyObjectType;
        }
        if (!Utils::isUnset($request->notifyStrategyList)) {
            $body['notifyStrategyList'] = $request->notifyStrategyList;
        }
        if (!Utils::isUnset($request->period)) {
            $body['period'] = $request->period;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->scopeObjectList)) {
            $body['scopeObjectList'] = $request->scopeObjectList;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->subscriptionTitle)) {
            $body['subscriptionTitle'] = $request->subscriptionTitle;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSubscription',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/notify/subscription/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSubscriptionRequest $request
     *
     * @return CreateSubscriptionResponse
     */
    public function createSubscription($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSubscriptionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateTenantApplicationRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateTenantApplicationResponse
     */
    public function createTenantApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channel)) {
            $body['channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTenantApplication',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/mobileApp/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTenantApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTenantApplicationRequest $request
     *
     * @return CreateTenantApplicationResponse
     */
    public function createTenantApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTenantApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->email)) {
            $body['email'] = $request->email;
        }
        if (!Utils::isUnset($request->phone)) {
            $body['phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->ramId)) {
            $body['ramId'] = $request->ramId;
        }
        if (!Utils::isUnset($request->username)) {
            $body['username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateUser',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/user/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
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
        $headers = [];

        return $this->createUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteEscalationPlanRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteEscalationPlanResponse
     */
    public function deleteEscalationPlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->escalationPlanId)) {
            $body['escalationPlanId'] = $request->escalationPlanId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteEscalationPlan',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/escalationPlan/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteEscalationPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEscalationPlanRequest $request
     *
     * @return DeleteEscalationPlanResponse
     */
    public function deleteEscalationPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteEscalationPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteIncidentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteIncidentResponse
     */
    public function deleteIncidentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->incidentId)) {
            $body['incidentId'] = $request->incidentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteIncident',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/incident/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteIncidentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIncidentRequest $request
     *
     * @return DeleteIncidentResponse
     */
    public function deleteIncident($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIncidentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteIntegrationConfigRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteIntegrationConfigResponse
     */
    public function deleteIntegrationConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->integrationConfigId)) {
            $body['integrationConfigId'] = $request->integrationConfigId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteIntegrationConfig',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/integrationConfig/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteIntegrationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteIntegrationConfigRequest $request
     *
     * @return DeleteIntegrationConfigResponse
     */
    public function deleteIntegrationConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIntegrationConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteProblemRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProblemResponse
     */
    public function deleteProblemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteProblem',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProblemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteProblemRequest $request
     *
     * @return DeleteProblemResponse
     */
    public function deleteProblem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProblemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteProblemEffectionServiceRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteProblemEffectionServiceResponse
     */
    public function deleteProblemEffectionServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->effectionServiceId)) {
            $body['effectionServiceId'] = $request->effectionServiceId;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteProblemEffectionService',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/process/effectionService/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProblemEffectionServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteProblemEffectionServiceRequest $request
     *
     * @return DeleteProblemEffectionServiceResponse
     */
    public function deleteProblemEffectionService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProblemEffectionServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteProblemMeasureRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteProblemMeasureResponse
     */
    public function deleteProblemMeasureWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->measureId)) {
            $body['measureId'] = $request->measureId;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteProblemMeasure',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/improvement/measure/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProblemMeasureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteProblemMeasureRequest $request
     *
     * @return DeleteProblemMeasureResponse
     */
    public function deleteProblemMeasure($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProblemMeasureWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteProblemTimelineRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteProblemTimelineResponse
     */
    public function deleteProblemTimelineWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->problemTimelineId)) {
            $body['problemTimelineId'] = $request->problemTimelineId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteProblemTimeline',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/process/timeline/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProblemTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteProblemTimelineRequest $request
     *
     * @return DeleteProblemTimelineResponse
     */
    public function deleteProblemTimeline($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProblemTimelineWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteRouteRuleRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteRouteRuleResponse
     */
    public function deleteRouteRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->routeRuleId)) {
            $body['routeRuleId'] = $request->routeRuleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRouteRule',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/routeRule/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteRouteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRouteRuleRequest $request
     *
     * @return DeleteRouteRuleResponse
     */
    public function deleteRouteRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRouteRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $body['serviceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteService',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteServiceRequest $request
     *
     * @return DeleteServiceResponse
     */
    public function deleteService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteServiceGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteServiceGroupResponse
     */
    public function deleteServiceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            $body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceGroup',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/group/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteServiceGroupRequest $request
     *
     * @return DeleteServiceGroupResponse
     */
    public function deleteServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteServiceGroupSchedulingResponse
     */
    public function deleteServiceGroupSchedulingWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceGroupScheduling',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/group/scheduling/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceGroupSchedulingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DeleteServiceGroupSchedulingResponse
     */
    public function deleteServiceGroupScheduling()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceGroupSchedulingWithOptions($headers, $runtime);
    }

    /**
     * @param DeleteServiceGroupUserRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteServiceGroupUserResponse
     */
    public function deleteServiceGroupUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->newUserId)) {
            $body['newUserId'] = $request->newUserId;
        }
        if (!Utils::isUnset($request->oldUserId)) {
            $body['oldUserId'] = $request->oldUserId;
        }
        if (!Utils::isUnset($request->removeUser)) {
            $body['removeUser'] = $request->removeUser;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            $body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceGroupUser',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/group/deleteServiceGroupUser',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceGroupUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteServiceGroupUserRequest $request
     *
     * @return DeleteServiceGroupUserResponse
     */
    public function deleteServiceGroupUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceGroupUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteSubscriptionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteSubscriptionResponse
     */
    public function deleteSubscriptionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->subscriptionId)) {
            $body['subscriptionId'] = $request->subscriptionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSubscription',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/notify/subscription/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSubscriptionRequest $request
     *
     * @return DeleteSubscriptionResponse
     */
    public function deleteSubscription($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSubscriptionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/user/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
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
        $headers = [];

        return $this->deleteUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeliverIncidentRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeliverIncidentResponse
     */
    public function deliverIncidentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assignUserId)) {
            $body['assignUserId'] = $request->assignUserId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->incidentId)) {
            $body['incidentId'] = $request->incidentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeliverIncident',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/incident/deliver',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeliverIncidentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeliverIncidentRequest $request
     *
     * @return DeliverIncidentResponse
     */
    public function deliverIncident($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deliverIncidentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DisableEscalationPlanRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DisableEscalationPlanResponse
     */
    public function disableEscalationPlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->escalationPlanId)) {
            $body['escalationPlanId'] = $request->escalationPlanId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisableEscalationPlan',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/escalationPlan/disable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DisableEscalationPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableEscalationPlanRequest $request
     *
     * @return DisableEscalationPlanResponse
     */
    public function disableEscalationPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableEscalationPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DisableIntegrationConfigRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DisableIntegrationConfigResponse
     */
    public function disableIntegrationConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->integrationConfigId)) {
            $body['integrationConfigId'] = $request->integrationConfigId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisableIntegrationConfig',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/integrationConfig/disable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DisableIntegrationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableIntegrationConfigRequest $request
     *
     * @return DisableIntegrationConfigResponse
     */
    public function disableIntegrationConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableIntegrationConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DisableRouteRuleRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DisableRouteRuleResponse
     */
    public function disableRouteRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->routeRuleId)) {
            $body['routeRuleId'] = $request->routeRuleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisableRouteRule',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/routeRule/disable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DisableRouteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableRouteRuleRequest $request
     *
     * @return DisableRouteRuleResponse
     */
    public function disableRouteRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableRouteRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DisableServiceGroupWebhookRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DisableServiceGroupWebhookResponse
     */
    public function disableServiceGroupWebhookWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            $body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisableServiceGroupWebhook',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/group/disableWebhook',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DisableServiceGroupWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableServiceGroupWebhookRequest $request
     *
     * @return DisableServiceGroupWebhookResponse
     */
    public function disableServiceGroupWebhook($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableServiceGroupWebhookWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DisableSubscriptionRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DisableSubscriptionResponse
     */
    public function disableSubscriptionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->subscriptionId)) {
            $body['subscriptionId'] = $request->subscriptionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisableSubscription',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/notify/subscription/doDisable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DisableSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableSubscriptionRequest $request
     *
     * @return DisableSubscriptionResponse
     */
    public function disableSubscription($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableSubscriptionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EnableEscalationPlanRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return EnableEscalationPlanResponse
     */
    public function enableEscalationPlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->escalationPlanId)) {
            $body['escalationPlanId'] = $request->escalationPlanId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableEscalationPlan',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/escalationPlan/enable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableEscalationPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableEscalationPlanRequest $request
     *
     * @return EnableEscalationPlanResponse
     */
    public function enableEscalationPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableEscalationPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EnableIntegrationConfigRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return EnableIntegrationConfigResponse
     */
    public function enableIntegrationConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->integrationConfigId)) {
            $body['integrationConfigId'] = $request->integrationConfigId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableIntegrationConfig',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/integrationConfig/enable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableIntegrationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableIntegrationConfigRequest $request
     *
     * @return EnableIntegrationConfigResponse
     */
    public function enableIntegrationConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableIntegrationConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EnableRouteRuleRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return EnableRouteRuleResponse
     */
    public function enableRouteRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->routeRuleId)) {
            $body['routeRuleId'] = $request->routeRuleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableRouteRule',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/routeRule/enable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableRouteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableRouteRuleRequest $request
     *
     * @return EnableRouteRuleResponse
     */
    public function enableRouteRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableRouteRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EnableServiceGroupWebhookRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return EnableServiceGroupWebhookResponse
     */
    public function enableServiceGroupWebhookWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            $body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableServiceGroupWebhook',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/group/enableWebhook',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableServiceGroupWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableServiceGroupWebhookRequest $request
     *
     * @return EnableServiceGroupWebhookResponse
     */
    public function enableServiceGroupWebhook($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableServiceGroupWebhookWithOptions($request, $headers, $runtime);
    }

    /**
     * @param EnableSubscriptionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return EnableSubscriptionResponse
     */
    public function enableSubscriptionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->subscriptionId)) {
            $body['subscriptionId'] = $request->subscriptionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableSubscription',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/notify/subscription/enable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableSubscriptionRequest $request
     *
     * @return EnableSubscriptionResponse
     */
    public function enableSubscription($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableSubscriptionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FinishIncidentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return FinishIncidentResponse
     */
    public function finishIncidentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->incidentFinishReason)) {
            $body['incidentFinishReason'] = $request->incidentFinishReason;
        }
        if (!Utils::isUnset($request->incidentFinishReasonDescription)) {
            $body['incidentFinishReasonDescription'] = $request->incidentFinishReasonDescription;
        }
        if (!Utils::isUnset($request->incidentFinishSolution)) {
            $body['incidentFinishSolution'] = $request->incidentFinishSolution;
        }
        if (!Utils::isUnset($request->incidentFinishSolutionDescription)) {
            $body['incidentFinishSolutionDescription'] = $request->incidentFinishSolutionDescription;
        }
        if (!Utils::isUnset($request->incidentIds)) {
            $body['incidentIds'] = $request->incidentIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FinishIncident',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/incident/finish',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FinishIncidentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FinishIncidentRequest $request
     *
     * @return FinishIncidentResponse
     */
    public function finishIncident($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->finishIncidentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param FinishProblemRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return FinishProblemResponse
     */
    public function finishProblemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FinishProblem',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/finish',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FinishProblemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FinishProblemRequest $request
     *
     * @return FinishProblemResponse
     */
    public function finishProblem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->finishProblemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GeneratePictureLinkRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GeneratePictureLinkResponse
     */
    public function generatePictureLinkWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keys)) {
            $body['keys'] = $request->keys;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GeneratePictureLink',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/rich/oss/getPictureLink',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GeneratePictureLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GeneratePictureLinkRequest $request
     *
     * @return GeneratePictureLinkResponse
     */
    public function generatePictureLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generatePictureLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GeneratePictureUploadSignRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GeneratePictureUploadSignResponse
     */
    public function generatePictureUploadSignWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->files)) {
            $body['files'] = $request->files;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['instanceType'] = $request->instanceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GeneratePictureUploadSign',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/rich/oss/generatePostPolicy',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GeneratePictureUploadSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GeneratePictureUploadSignRequest $request
     *
     * @return GeneratePictureUploadSignResponse
     */
    public function generatePictureUploadSign($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generatePictureUploadSignWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GenerateProblemPictureLinkRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GenerateProblemPictureLinkResponse
     */
    public function generateProblemPictureLinkWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keys)) {
            $body['keys'] = $request->keys;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateProblemPictureLink',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/process/oss/getPresignedLink',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GenerateProblemPictureLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateProblemPictureLinkRequest $request
     *
     * @return GenerateProblemPictureLinkResponse
     */
    public function generateProblemPictureLink($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateProblemPictureLinkWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GenerateProblemPictureUploadSignRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return GenerateProblemPictureUploadSignResponse
     */
    public function generateProblemPictureUploadSignWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fileName)) {
            $body['fileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileSize)) {
            $body['fileSize'] = $request->fileSize;
        }
        if (!Utils::isUnset($request->fileType)) {
            $body['fileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateProblemPictureUploadSign',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/process/oss/generatePostPolicy',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GenerateProblemPictureUploadSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateProblemPictureUploadSignRequest $request
     *
     * @return GenerateProblemPictureUploadSignResponse
     */
    public function generateProblemPictureUploadSign($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateProblemPictureUploadSignWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetEscalationPlanRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetEscalationPlanResponse
     */
    public function getEscalationPlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->escalationPlanId)) {
            $body['escalationPlanId'] = $request->escalationPlanId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetEscalationPlan',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/escalationPlan/detail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEscalationPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEscalationPlanRequest $request
     *
     * @return GetEscalationPlanResponse
     */
    public function getEscalationPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEscalationPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetEventRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetEventResponse
     */
    public function getEventWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->monitorSourceId)) {
            $body['monitorSourceId'] = $request->monitorSourceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetEvent',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/events/getLastTimeEvent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEventRequest $request
     *
     * @return GetEventResponse
     */
    public function getEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getEventWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetHomePageGuidanceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetHomePageGuidanceResponse
     */
    public function getHomePageGuidanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetHomePageGuidance',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/guidance/detail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHomePageGuidanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHomePageGuidanceRequest $request
     *
     * @return GetHomePageGuidanceResponse
     */
    public function getHomePageGuidance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHomePageGuidanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetIncidentRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetIncidentResponse
     */
    public function getIncidentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->incidentId)) {
            $body['incidentId'] = $request->incidentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetIncident',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/incident/detail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIncidentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetIncidentRequest $request
     *
     * @return GetIncidentResponse
     */
    public function getIncident($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIncidentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetIncidentListByIdListRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetIncidentListByIdListResponse
     */
    public function getIncidentListByIdListWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->incidentIdList)) {
            $body['incidentIdList'] = $request->incidentIdList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetIncidentListByIdList',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/incident/getIncidentListByIdList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIncidentListByIdListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetIncidentListByIdListRequest $request
     *
     * @return GetIncidentListByIdListResponse
     */
    public function getIncidentListByIdList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIncidentListByIdListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetIncidentStatisticsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetIncidentStatisticsResponse
     */
    public function getIncidentStatisticsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetIncidentStatistics',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/incident/count',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIncidentStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetIncidentStatisticsRequest $request
     *
     * @return GetIncidentStatisticsResponse
     */
    public function getIncidentStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIncidentStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetIncidentSubtotalCountRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetIncidentSubtotalCountResponse
     */
    public function getIncidentSubtotalCountWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->incidentIds)) {
            $body['incidentIds'] = $request->incidentIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetIncidentSubtotalCount',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/incident/subtotal/count',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIncidentSubtotalCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetIncidentSubtotalCountRequest $request
     *
     * @return GetIncidentSubtotalCountResponse
     */
    public function getIncidentSubtotalCount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIncidentSubtotalCountWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetIntegrationConfigRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetIntegrationConfigResponse
     */
    public function getIntegrationConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->integrationConfigId)) {
            $body['integrationConfigId'] = $request->integrationConfigId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetIntegrationConfig',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/integrationConfig/detail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIntegrationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetIntegrationConfigRequest $request
     *
     * @return GetIntegrationConfigResponse
     */
    public function getIntegrationConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIntegrationConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetProblemRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetProblemResponse
     */
    public function getProblemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetProblem',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/detail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProblemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetProblemRequest $request
     *
     * @return GetProblemResponse
     */
    public function getProblem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProblemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetProblemEffectionServiceRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetProblemEffectionServiceResponse
     */
    public function getProblemEffectionServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->effectionServiceId)) {
            $body['effectionServiceId'] = $request->effectionServiceId;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetProblemEffectionService',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/process/effectionService/detail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProblemEffectionServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetProblemEffectionServiceRequest $request
     *
     * @return GetProblemEffectionServiceResponse
     */
    public function getProblemEffectionService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProblemEffectionServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetProblemImprovementRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetProblemImprovementResponse
     */
    public function getProblemImprovementWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetProblemImprovement',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/improvement/detail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProblemImprovementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetProblemImprovementRequest $request
     *
     * @return GetProblemImprovementResponse
     */
    public function getProblemImprovement($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProblemImprovementWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetProblemPreviewRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetProblemPreviewResponse
     */
    public function getProblemPreviewWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->effectServiceIds)) {
            $body['effectServiceIds'] = $request->effectServiceIds;
        }
        if (!Utils::isUnset($request->incidentId)) {
            $body['incidentId'] = $request->incidentId;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->problemLevel)) {
            $body['problemLevel'] = $request->problemLevel;
        }
        if (!Utils::isUnset($request->problemNotifyType)) {
            $body['problemNotifyType'] = $request->problemNotifyType;
        }
        if (!Utils::isUnset($request->relatedServiceId)) {
            $body['relatedServiceId'] = $request->relatedServiceId;
        }
        if (!Utils::isUnset($request->serviceGroupIds)) {
            $body['serviceGroupIds'] = $request->serviceGroupIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetProblemPreview',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/preview',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetProblemPreviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetProblemPreviewRequest $request
     *
     * @return GetProblemPreviewResponse
     */
    public function getProblemPreview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getProblemPreviewWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetResourceStatisticsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetResourceStatisticsResponse
     */
    public function getResourceStatisticsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetResourceStatistics',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/config/resource/count',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetResourceStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceStatisticsRequest $request
     *
     * @return GetResourceStatisticsResponse
     */
    public function getResourceStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetRichTextRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetRichTextResponse
     */
    public function getRichTextWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['instanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->richTextId)) {
            $body['richTextId'] = $request->richTextId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetRichText',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/rich/detail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRichTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRichTextRequest $request
     *
     * @return GetRichTextResponse
     */
    public function getRichText($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRichTextWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetRouteRuleRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetRouteRuleResponse
     */
    public function getRouteRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->routeRuleId)) {
            $body['routeRuleId'] = $request->routeRuleId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetRouteRule',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/routeRule/detail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRouteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRouteRuleRequest $request
     *
     * @return GetRouteRuleResponse
     */
    public function getRouteRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRouteRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetServiceResponse
     */
    public function getServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $body['serviceId'] = $request->serviceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetService',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/detail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceRequest $request
     *
     * @return GetServiceResponse
     */
    public function getService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceGroupRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetServiceGroupResponse
     */
    public function getServiceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            $body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetServiceGroup',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/group/detail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceGroupRequest $request
     *
     * @return GetServiceGroupResponse
     */
    public function getServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceGroupPersonSchedulingRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return GetServiceGroupPersonSchedulingResponse
     */
    public function getServiceGroupPersonSchedulingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            $body['serviceGroupId'] = $request->serviceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetServiceGroupPersonScheduling',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/group/scheduling/user/getScheduling',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetServiceGroupPersonSchedulingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceGroupPersonSchedulingRequest $request
     *
     * @return GetServiceGroupPersonSchedulingResponse
     */
    public function getServiceGroupPersonScheduling($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceGroupPersonSchedulingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceGroupSchedulingRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetServiceGroupSchedulingResponse
     */
    public function getServiceGroupSchedulingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            $body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetServiceGroupScheduling',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/group/scheduling/detail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetServiceGroupSchedulingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceGroupSchedulingRequest $request
     *
     * @return GetServiceGroupSchedulingResponse
     */
    public function getServiceGroupScheduling($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceGroupSchedulingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceGroupSchedulingPreviewRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return GetServiceGroupSchedulingPreviewResponse
     */
    public function getServiceGroupSchedulingPreviewWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->fastScheduling)) {
            $body['fastScheduling'] = $request->fastScheduling;
        }
        if (!Utils::isUnset($request->fineScheduling)) {
            $body['fineScheduling'] = $request->fineScheduling;
        }
        if (!Utils::isUnset($request->schedulingWay)) {
            $body['schedulingWay'] = $request->schedulingWay;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            $body['serviceGroupId'] = $request->serviceGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetServiceGroupSchedulingPreview',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/group/scheduling/preview',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetServiceGroupSchedulingPreviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceGroupSchedulingPreviewRequest $request
     *
     * @return GetServiceGroupSchedulingPreviewResponse
     */
    public function getServiceGroupSchedulingPreview($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceGroupSchedulingPreviewWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetServiceGroupSpecialPersonSchedulingRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return GetServiceGroupSpecialPersonSchedulingResponse
     */
    public function getServiceGroupSpecialPersonSchedulingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            $body['serviceGroupId'] = $request->serviceGroupId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetServiceGroupSpecialPersonScheduling',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/group/scheduling/getUserScheduling',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetServiceGroupSpecialPersonSchedulingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceGroupSpecialPersonSchedulingRequest $request
     *
     * @return GetServiceGroupSpecialPersonSchedulingResponse
     */
    public function getServiceGroupSpecialPersonScheduling($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getServiceGroupSpecialPersonSchedulingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetSimilarIncidentStatisticsRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return GetSimilarIncidentStatisticsResponse
     */
    public function getSimilarIncidentStatisticsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->createTime)) {
            $body['createTime'] = $request->createTime;
        }
        if (!Utils::isUnset($request->events)) {
            $body['events'] = $request->events;
        }
        if (!Utils::isUnset($request->incidentId)) {
            $body['incidentId'] = $request->incidentId;
        }
        if (!Utils::isUnset($request->incidentTitle)) {
            $body['incidentTitle'] = $request->incidentTitle;
        }
        if (!Utils::isUnset($request->relatedServiceId)) {
            $body['relatedServiceId'] = $request->relatedServiceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSimilarIncidentStatistics',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/incident/similarIncident/statistics',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSimilarIncidentStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSimilarIncidentStatisticsRequest $request
     *
     * @return GetSimilarIncidentStatisticsResponse
     */
    public function getSimilarIncidentStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSimilarIncidentStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetSubscriptionRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetSubscriptionResponse
     */
    public function getSubscriptionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->notFilterScopeObjectDeleted)) {
            $body['notFilterScopeObjectDeleted'] = $request->notFilterScopeObjectDeleted;
        }
        if (!Utils::isUnset($request->subscriptionId)) {
            $body['subscriptionId'] = $request->subscriptionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSubscription',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/notify/subscription/detail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSubscriptionRequest $request
     *
     * @return GetSubscriptionResponse
     */
    public function getSubscription($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSubscriptionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetTenantApplicationRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetTenantApplicationResponse
     */
    public function getTenantApplicationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTenantApplication',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/mobileApp/detail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTenantApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTenantApplicationRequest $request
     *
     * @return GetTenantApplicationResponse
     */
    public function getTenantApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTenantApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetTenantStatusRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetTenantStatusResponse
     */
    public function getTenantStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->tenantRamId)) {
            $body['tenantRamId'] = $request->tenantRamId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTenantStatus',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/tenant/getTenantStatus',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTenantStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTenantStatusRequest $request
     *
     * @return GetTenantStatusResponse
     */
    public function getTenantStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTenantStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetUserRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/user/getUser',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetUserGuideStatusRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetUserGuideStatusResponse
     */
    public function getUserGuideStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUserGuideStatus',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/user/guide/status',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserGuideStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserGuideStatusRequest $request
     *
     * @return GetUserGuideStatusResponse
     */
    public function getUserGuideStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserGuideStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListAlertsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListAlertsResponse
     */
    public function listAlertsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertLevel)) {
            $body['alertLevel'] = $request->alertLevel;
        }
        if (!Utils::isUnset($request->alertName)) {
            $body['alertName'] = $request->alertName;
        }
        if (!Utils::isUnset($request->alertSourceName)) {
            $body['alertSourceName'] = $request->alertSourceName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->monitorSourceId)) {
            $body['monitorSourceId'] = $request->monitorSourceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->relatedServiceId)) {
            $body['relatedServiceId'] = $request->relatedServiceId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $body['ruleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAlerts',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/alerts/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAlertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAlertsRequest $request
     *
     * @return ListAlertsResponse
     */
    public function listAlerts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAlertsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListByMonitorSourceIdRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListByMonitorSourceIdResponse
     */
    public function listByMonitorSourceIdWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->monitorSourceId)) {
            $body['monitorSourceId'] = $request->monitorSourceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListByMonitorSourceId',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/routeRule/listByMonitorSourceId',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListByMonitorSourceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListByMonitorSourceIdRequest $request
     *
     * @return ListByMonitorSourceIdResponse
     */
    public function listByMonitorSourceId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listByMonitorSourceIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListChartDataForServiceGroupRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ListChartDataForServiceGroupResponse
     */
    public function listChartDataForServiceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListChartDataForServiceGroup',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/statistics/chartDataForServiceGroup/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListChartDataForServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListChartDataForServiceGroupRequest $request
     *
     * @return ListChartDataForServiceGroupResponse
     */
    public function listChartDataForServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChartDataForServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListChartDataForUserRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListChartDataForUserResponse
     */
    public function listChartDataForUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListChartDataForUser',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/statistics/chartDataForUser/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListChartDataForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListChartDataForUserRequest $request
     *
     * @return ListChartDataForUserResponse
     */
    public function listChartDataForUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listChartDataForUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListConfigsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListConfigsResponse
     */
    public function listConfigsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListConfigs',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/config/all',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListConfigsRequest $request
     *
     * @return ListConfigsResponse
     */
    public function listConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListDataReportForServiceGroupRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListDataReportForServiceGroupResponse
     */
    public function listDataReportForServiceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->serviceGroupName)) {
            $body['serviceGroupName'] = $request->serviceGroupName;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDataReportForServiceGroup',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/statistics/listDataReportForServiceGroup',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataReportForServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDataReportForServiceGroupRequest $request
     *
     * @return ListDataReportForServiceGroupResponse
     */
    public function listDataReportForServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataReportForServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListDataReportForUserRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListDataReportForUserResponse
     */
    public function listDataReportForUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDataReportForUser',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/statistics/listDataReportForUser',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataReportForUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDataReportForUserRequest $request
     *
     * @return ListDataReportForUserResponse
     */
    public function listDataReportForUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataReportForUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListDictionariesRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListDictionariesResponse
     */
    public function listDictionariesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDictionaries',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dict/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDictionariesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDictionariesRequest $request
     *
     * @return ListDictionariesResponse
     */
    public function listDictionaries($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDictionariesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListEscalationPlanServicesRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListEscalationPlanServicesResponse
     */
    public function listEscalationPlanServicesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListEscalationPlanServices',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/escalationPlan/services',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEscalationPlanServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEscalationPlanServicesRequest $request
     *
     * @return ListEscalationPlanServicesResponse
     */
    public function listEscalationPlanServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEscalationPlanServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListEscalationPlansRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListEscalationPlansResponse
     */
    public function listEscalationPlansWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->escalationPlanName)) {
            $body['escalationPlanName'] = $request->escalationPlanName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['serviceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListEscalationPlans',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/escalationPlan/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEscalationPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEscalationPlansRequest $request
     *
     * @return ListEscalationPlansResponse
     */
    public function listEscalationPlans($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEscalationPlansWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListEscalationPlansByNoticeObjectRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListEscalationPlansByNoticeObjectResponse
     */
    public function listEscalationPlansByNoticeObjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->noticeObjectId)) {
            $body['noticeObjectId'] = $request->noticeObjectId;
        }
        if (!Utils::isUnset($request->noticeObjectType)) {
            $body['noticeObjectType'] = $request->noticeObjectType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListEscalationPlansByNoticeObject',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/escalationPlan/listByNoticeObject',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEscalationPlansByNoticeObjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEscalationPlansByNoticeObjectRequest $request
     *
     * @return ListEscalationPlansByNoticeObjectResponse
     */
    public function listEscalationPlansByNoticeObject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEscalationPlansByNoticeObjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListIncidentDetailEscalationPlansRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListIncidentDetailEscalationPlansResponse
     */
    public function listIncidentDetailEscalationPlansWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->incidentId)) {
            $body['incidentId'] = $request->incidentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListIncidentDetailEscalationPlans',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/incident/detail/escalation',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIncidentDetailEscalationPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIncidentDetailEscalationPlansRequest $request
     *
     * @return ListIncidentDetailEscalationPlansResponse
     */
    public function listIncidentDetailEscalationPlans($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIncidentDetailEscalationPlansWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListIncidentDetailTimelinesRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListIncidentDetailTimelinesResponse
     */
    public function listIncidentDetailTimelinesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->idSort)) {
            $body['idSort'] = $request->idSort;
        }
        if (!Utils::isUnset($request->incidentId)) {
            $body['incidentId'] = $request->incidentId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListIncidentDetailTimelines',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/incident/detail/timeline',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIncidentDetailTimelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIncidentDetailTimelinesRequest $request
     *
     * @return ListIncidentDetailTimelinesResponse
     */
    public function listIncidentDetailTimelines($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIncidentDetailTimelinesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListIncidentSubtotalsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListIncidentSubtotalsResponse
     */
    public function listIncidentSubtotalsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->incidentId)) {
            $body['incidentId'] = $request->incidentId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListIncidentSubtotals',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/incident/list/subtotal',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIncidentSubtotalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIncidentSubtotalsRequest $request
     *
     * @return ListIncidentSubtotalsResponse
     */
    public function listIncidentSubtotals($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIncidentSubtotalsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListIncidentTimelinesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListIncidentTimelinesResponse
     */
    public function listIncidentTimelinesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListIncidentTimelines',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/incident/timeline',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIncidentTimelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIncidentTimelinesRequest $request
     *
     * @return ListIncidentTimelinesResponse
     */
    public function listIncidentTimelines($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIncidentTimelinesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListIncidentsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListIncidentsResponse
     */
    public function listIncidentsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->createEndTime)) {
            $body['createEndTime'] = $request->createEndTime;
        }
        if (!Utils::isUnset($request->createStartTime)) {
            $body['createStartTime'] = $request->createStartTime;
        }
        if (!Utils::isUnset($request->effect)) {
            $body['effect'] = $request->effect;
        }
        if (!Utils::isUnset($request->incidentLevel)) {
            $body['incidentLevel'] = $request->incidentLevel;
        }
        if (!Utils::isUnset($request->incidentStatus)) {
            $body['incidentStatus'] = $request->incidentStatus;
        }
        if (!Utils::isUnset($request->me)) {
            $body['me'] = $request->me;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->relationServiceId)) {
            $body['relationServiceId'] = $request->relationServiceId;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $body['ruleName'] = $request->ruleName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListIncidents',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/incident/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIncidentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIncidentsRequest $request
     *
     * @return ListIncidentsResponse
     */
    public function listIncidents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIncidentsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListIntegrationConfigTimelinesRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return ListIntegrationConfigTimelinesResponse
     */
    public function listIntegrationConfigTimelinesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->integrationConfigId)) {
            $body['integrationConfigId'] = $request->integrationConfigId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListIntegrationConfigTimelines',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/integrationConfig/timeline',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIntegrationConfigTimelinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIntegrationConfigTimelinesRequest $request
     *
     * @return ListIntegrationConfigTimelinesResponse
     */
    public function listIntegrationConfigTimelines($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationConfigTimelinesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListIntegrationConfigsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListIntegrationConfigsResponse
     */
    public function listIntegrationConfigsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->monitorSourceName)) {
            $body['monitorSourceName'] = $request->monitorSourceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListIntegrationConfigs',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/integrationConfig/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListIntegrationConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListIntegrationConfigsRequest $request
     *
     * @return ListIntegrationConfigsResponse
     */
    public function listIntegrationConfigs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIntegrationConfigsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListMonitorSourcesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListMonitorSourcesResponse
     */
    public function listMonitorSourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMonitorSources',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/monitorSource/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMonitorSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMonitorSourcesRequest $request
     *
     * @return ListMonitorSourcesResponse
     */
    public function listMonitorSources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMonitorSourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListProblemDetailOperationsRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListProblemDetailOperationsResponse
     */
    public function listProblemDetailOperationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->createTimeSort)) {
            $body['createTimeSort'] = $request->createTimeSort;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListProblemDetailOperations',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/detail/operations',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProblemDetailOperationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProblemDetailOperationsRequest $request
     *
     * @return ListProblemDetailOperationsResponse
     */
    public function listProblemDetailOperations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProblemDetailOperationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListProblemOperationsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListProblemOperationsResponse
     */
    public function listProblemOperationsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListProblemOperations',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/operations',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProblemOperationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProblemOperationsRequest $request
     *
     * @return ListProblemOperationsResponse
     */
    public function listProblemOperations($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProblemOperationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListProblemSubtotalsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListProblemSubtotalsResponse
     */
    public function listProblemSubtotalsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListProblemSubtotals',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/list/subtotal',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProblemSubtotalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProblemSubtotalsRequest $request
     *
     * @return ListProblemSubtotalsResponse
     */
    public function listProblemSubtotals($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProblemSubtotalsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListProblemTimeLinesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListProblemTimeLinesResponse
     */
    public function listProblemTimeLinesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListProblemTimeLines',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/detail/timeLines',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProblemTimeLinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProblemTimeLinesRequest $request
     *
     * @return ListProblemTimeLinesResponse
     */
    public function listProblemTimeLines($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProblemTimeLinesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListProblemsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListProblemsResponse
     */
    public function listProblemsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->affectServiceId)) {
            $body['affectServiceId'] = $request->affectServiceId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->discoveryEndTime)) {
            $body['discoveryEndTime'] = $request->discoveryEndTime;
        }
        if (!Utils::isUnset($request->discoveryStartTime)) {
            $body['discoveryStartTime'] = $request->discoveryStartTime;
        }
        if (!Utils::isUnset($request->mainHandlerId)) {
            $body['mainHandlerId'] = $request->mainHandlerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->problemLevel)) {
            $body['problemLevel'] = $request->problemLevel;
        }
        if (!Utils::isUnset($request->problemStatus)) {
            $body['problemStatus'] = $request->problemStatus;
        }
        if (!Utils::isUnset($request->queryType)) {
            $body['queryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->repeaterId)) {
            $body['repeaterId'] = $request->repeaterId;
        }
        if (!Utils::isUnset($request->restoreEndTime)) {
            $body['restoreEndTime'] = $request->restoreEndTime;
        }
        if (!Utils::isUnset($request->restoreStartTime)) {
            $body['restoreStartTime'] = $request->restoreStartTime;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            $body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListProblems',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/listProblems',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProblemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProblemsRequest $request
     *
     * @return ListProblemsResponse
     */
    public function listProblems($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProblemsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListRouteRulesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListRouteRulesResponse
     */
    public function listRouteRulesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->notFilterRouteRuleDeleted)) {
            $body['notFilterRouteRuleDeleted'] = $request->notFilterRouteRuleDeleted;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->routeType)) {
            $body['routeType'] = $request->routeType;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $body['ruleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['serviceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListRouteRules',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/routeRule/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRouteRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRouteRulesRequest $request
     *
     * @return ListRouteRulesResponse
     */
    public function listRouteRules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRouteRulesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListRouteRulesByAssignWhoIdRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListRouteRulesByAssignWhoIdResponse
     */
    public function listRouteRulesByAssignWhoIdWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assignWhoId)) {
            $body['assignWhoId'] = $request->assignWhoId;
        }
        if (!Utils::isUnset($request->assignWhoType)) {
            $body['assignWhoType'] = $request->assignWhoType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListRouteRulesByAssignWhoId',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/routeRule/listByAssignWhoId',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRouteRulesByAssignWhoIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRouteRulesByAssignWhoIdRequest $request
     *
     * @return ListRouteRulesByAssignWhoIdResponse
     */
    public function listRouteRulesByAssignWhoId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRouteRulesByAssignWhoIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListRouteRulesByServiceResponse
     */
    public function listRouteRulesByServiceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListRouteRulesByService',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/routeRule/listByService',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRouteRulesByServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListRouteRulesByServiceResponse
     */
    public function listRouteRulesByService()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRouteRulesByServiceWithOptions($headers, $runtime);
    }

    /**
     * @param ListServiceGroupMonitorSourceTemplatesRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return ListServiceGroupMonitorSourceTemplatesResponse
     */
    public function listServiceGroupMonitorSourceTemplatesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['requestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            $body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListServiceGroupMonitorSourceTemplates',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/group/listServiceGroupMonitorSourceTemplates',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServiceGroupMonitorSourceTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServiceGroupMonitorSourceTemplatesRequest $request
     *
     * @return ListServiceGroupMonitorSourceTemplatesResponse
     */
    public function listServiceGroupMonitorSourceTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceGroupMonitorSourceTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListServiceGroupsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListServiceGroupsResponse
     */
    public function listServiceGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->isScheduled)) {
            $body['isScheduled'] = $request->isScheduled;
        }
        if (!Utils::isUnset($request->orderByScheduleStatus)) {
            $body['orderByScheduleStatus'] = $request->orderByScheduleStatus;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryName)) {
            $body['queryName'] = $request->queryName;
        }
        if (!Utils::isUnset($request->queryType)) {
            $body['queryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListServiceGroups',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/group/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServiceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServiceGroupsRequest $request
     *
     * @return ListServiceGroupsResponse
     */
    public function listServiceGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListServiceGroupsByUserIdResponse
     */
    public function listServiceGroupsByUserIdWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListServiceGroupsByUserId',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/group/listByUserId',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServiceGroupsByUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListServiceGroupsByUserIdResponse
     */
    public function listServiceGroupsByUserId()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceGroupsByUserIdWithOptions($headers, $runtime);
    }

    /**
     * @param ListServicesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['serviceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListServices',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServicesRequest $request
     *
     * @return ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSourceEventsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListSourceEventsResponse
     */
    public function listSourceEventsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['instanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startRowKey)) {
            $body['startRowKey'] = $request->startRowKey;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->stopRowKey)) {
            $body['stopRowKey'] = $request->stopRowKey;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSourceEvents',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/events/listOriginalEvent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSourceEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSourceEventsRequest $request
     *
     * @return ListSourceEventsResponse
     */
    public function listSourceEvents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSourceEventsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSourceEventsForMonitorSourceRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ListSourceEventsForMonitorSourceResponse
     */
    public function listSourceEventsForMonitorSourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->monitorSourceId)) {
            $body['monitorSourceId'] = $request->monitorSourceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSourceEventsForMonitorSource',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/events/queryLastestEvents',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSourceEventsForMonitorSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSourceEventsForMonitorSourceRequest $request
     *
     * @return ListSourceEventsForMonitorSourceResponse
     */
    public function listSourceEventsForMonitorSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSourceEventsForMonitorSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSubscriptionServiceGroupsRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListSubscriptionServiceGroupsResponse
     */
    public function listSubscriptionServiceGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceIds)) {
            $body['serviceIds'] = $request->serviceIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSubscriptionServiceGroups',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/serviceGroup/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSubscriptionServiceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSubscriptionServiceGroupsRequest $request
     *
     * @return ListSubscriptionServiceGroupsResponse
     */
    public function listSubscriptionServiceGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSubscriptionServiceGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSubscriptionsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListSubscriptionsResponse
     */
    public function listSubscriptionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->notFilterScopeObjectDeleted)) {
            $body['notFilterScopeObjectDeleted'] = $request->notFilterScopeObjectDeleted;
        }
        if (!Utils::isUnset($request->notifyObject)) {
            $body['notifyObject'] = $request->notifyObject;
        }
        if (!Utils::isUnset($request->notifyObjectType)) {
            $body['notifyObjectType'] = $request->notifyObjectType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->scopeObject)) {
            $body['scopeObject'] = $request->scopeObject;
        }
        if (!Utils::isUnset($request->subscriptionTitle)) {
            $body['subscriptionTitle'] = $request->subscriptionTitle;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSubscriptions',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/notify/subscription/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSubscriptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSubscriptionsRequest $request
     *
     * @return ListSubscriptionsResponse
     */
    public function listSubscriptions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSubscriptionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListTrendForSourceEventRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListTrendForSourceEventResponse
     */
    public function listTrendForSourceEventWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['instanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->requestId)) {
            $body['requestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->timeUnit)) {
            $body['timeUnit'] = $request->timeUnit;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTrendForSourceEvent',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/events/querySourceEventTrend',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTrendForSourceEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTrendForSourceEventRequest $request
     *
     * @return ListTrendForSourceEventResponse
     */
    public function listTrendForSourceEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTrendForSourceEventWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListUserSerivceGroupsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListUserSerivceGroupsResponse
     */
    public function listUserSerivceGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListUserSerivceGroups',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/user/preview/detail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUserSerivceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserSerivceGroupsRequest $request
     *
     * @return ListUserSerivceGroupsResponse
     */
    public function listUserSerivceGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserSerivceGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListUsersRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phone)) {
            $body['phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->ramId)) {
            $body['ramId'] = $request->ramId;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->synergyChannel)) {
            $body['synergyChannel'] = $request->synergyChannel;
        }
        if (!Utils::isUnset($request->username)) {
            $body['username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListUsers',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/user/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
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
        $headers = [];

        return $this->listUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string             $apiKey
     * @param PushMonitorRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return PushMonitorResponse
     */
    public function pushMonitorWithOptions($apiKey, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'PushMonitor',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/monitor/push/' . OpenApiUtilClient::getEncodeParam($apiKey) . '',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PushMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string             $apiKey
     * @param PushMonitorRequest $request
     *
     * @return PushMonitorResponse
     */
    public function pushMonitor($apiKey, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushMonitorWithOptions($apiKey, $request, $headers, $runtime);
    }

    /**
     * @param RecoverProblemRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return RecoverProblemResponse
     */
    public function recoverProblemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->problemNotifyType)) {
            $body['problemNotifyType'] = $request->problemNotifyType;
        }
        if (!Utils::isUnset($request->recoveryTime)) {
            $body['recoveryTime'] = $request->recoveryTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RecoverProblem',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/recovery',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecoverProblemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecoverProblemRequest $request
     *
     * @return RecoverProblemResponse
     */
    public function recoverProblem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recoverProblemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RefreshIntegrationConfigKeyRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return RefreshIntegrationConfigKeyResponse
     */
    public function refreshIntegrationConfigKeyWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->integrationConfigId)) {
            $body['integrationConfigId'] = $request->integrationConfigId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RefreshIntegrationConfigKey',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/integrationConfig/refreshKey',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RefreshIntegrationConfigKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshIntegrationConfigKeyRequest $request
     *
     * @return RefreshIntegrationConfigKeyResponse
     */
    public function refreshIntegrationConfigKey($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->refreshIntegrationConfigKeyWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RemoveIntegrationConfigRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return RemoveIntegrationConfigResponse
     */
    public function removeIntegrationConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->integrationConfigId)) {
            $body['integrationConfigId'] = $request->integrationConfigId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveIntegrationConfig',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/integrationConfig/remove',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveIntegrationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveIntegrationConfigRequest $request
     *
     * @return RemoveIntegrationConfigResponse
     */
    public function removeIntegrationConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeIntegrationConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RemoveProblemServiceGroupRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveProblemServiceGroupResponse
     */
    public function removeProblemServiceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->serviceGroupIds)) {
            $body['serviceGroupIds'] = $request->serviceGroupIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveProblemServiceGroup',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/removeServiceGroup',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveProblemServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveProblemServiceGroupRequest $request
     *
     * @return RemoveProblemServiceGroupResponse
     */
    public function removeProblemServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeProblemServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ReplayProblemRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ReplayProblemResponse
     */
    public function replayProblemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->replayDutyUserId)) {
            $body['replayDutyUserId'] = $request->replayDutyUserId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReplayProblem',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/replay',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReplayProblemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReplayProblemRequest $request
     *
     * @return ReplayProblemResponse
     */
    public function replayProblem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->replayProblemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RespondIncidentRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return RespondIncidentResponse
     */
    public function respondIncidentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->incidentIds)) {
            $body['incidentIds'] = $request->incidentIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RespondIncident',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/incident/response',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RespondIncidentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RespondIncidentRequest $request
     *
     * @return RespondIncidentResponse
     */
    public function respondIncident($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->respondIncidentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RevokeProblemRecoveryRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return RevokeProblemRecoveryResponse
     */
    public function revokeProblemRecoveryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->problemNotifyType)) {
            $body['problemNotifyType'] = $request->problemNotifyType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RevokeProblemRecovery',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/revoke',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RevokeProblemRecoveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RevokeProblemRecoveryRequest $request
     *
     * @return RevokeProblemRecoveryResponse
     */
    public function revokeProblemRecovery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokeProblemRecoveryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UnbindUserResponse
     */
    public function unbindUserWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UnbindUser',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/user/unbind',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UnbindUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return UnbindUserResponse
     */
    public function unbindUser()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unbindUserWithOptions($headers, $runtime);
    }

    /**
     * @param UpdateEscalationPlanRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEscalationPlanResponse
     */
    public function updateEscalationPlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->escalationPlanDescription)) {
            $body['escalationPlanDescription'] = $request->escalationPlanDescription;
        }
        if (!Utils::isUnset($request->escalationPlanId)) {
            $body['escalationPlanId'] = $request->escalationPlanId;
        }
        if (!Utils::isUnset($request->escalationPlanName)) {
            $body['escalationPlanName'] = $request->escalationPlanName;
        }
        if (!Utils::isUnset($request->escalationPlanRules)) {
            $body['escalationPlanRules'] = $request->escalationPlanRules;
        }
        if (!Utils::isUnset($request->escalationPlanScopeObjects)) {
            $body['escalationPlanScopeObjects'] = $request->escalationPlanScopeObjects;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEscalationPlan',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/escalationPlan/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateEscalationPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateEscalationPlanRequest $request
     *
     * @return UpdateEscalationPlanResponse
     */
    public function updateEscalationPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateEscalationPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateIncidentRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateIncidentResponse
     */
    public function updateIncidentWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->effect)) {
            $body['effect'] = $request->effect;
        }
        if (!Utils::isUnset($request->incidentId)) {
            $body['incidentId'] = $request->incidentId;
        }
        if (!Utils::isUnset($request->incidentLevel)) {
            $body['incidentLevel'] = $request->incidentLevel;
        }
        if (!Utils::isUnset($request->incidentTitle)) {
            $body['incidentTitle'] = $request->incidentTitle;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateIncident',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/incident/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateIncidentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateIncidentRequest $request
     *
     * @return UpdateIncidentResponse
     */
    public function updateIncident($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIncidentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateIntegrationConfigRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateIntegrationConfigResponse
     */
    public function updateIntegrationConfigWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessKey)) {
            $body['accessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->integrationConfigId)) {
            $body['integrationConfigId'] = $request->integrationConfigId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateIntegrationConfig',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/integrationConfig/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateIntegrationConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateIntegrationConfigRequest $request
     *
     * @return UpdateIntegrationConfigResponse
     */
    public function updateIntegrationConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateIntegrationConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateProblemRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProblemResponse
     */
    public function updateProblemWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->feedback)) {
            $body['feedback'] = $request->feedback;
        }
        if (!Utils::isUnset($request->level)) {
            $body['level'] = $request->level;
        }
        if (!Utils::isUnset($request->mainHandlerId)) {
            $body['mainHandlerId'] = $request->mainHandlerId;
        }
        if (!Utils::isUnset($request->preliminaryReason)) {
            $body['preliminaryReason'] = $request->preliminaryReason;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->problemName)) {
            $body['problemName'] = $request->problemName;
        }
        if (!Utils::isUnset($request->progressSummary)) {
            $body['progressSummary'] = $request->progressSummary;
        }
        if (!Utils::isUnset($request->progressSummaryRichTextId)) {
            $body['progressSummaryRichTextId'] = $request->progressSummaryRichTextId;
        }
        if (!Utils::isUnset($request->relatedServiceId)) {
            $body['relatedServiceId'] = $request->relatedServiceId;
        }
        if (!Utils::isUnset($request->serviceGroupIds)) {
            $body['serviceGroupIds'] = $request->serviceGroupIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProblem',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProblemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateProblemRequest $request
     *
     * @return UpdateProblemResponse
     */
    public function updateProblem($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProblemWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateProblemEffectionServiceRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateProblemEffectionServiceResponse
     */
    public function updateProblemEffectionServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->effectionServiceId)) {
            $body['effectionServiceId'] = $request->effectionServiceId;
        }
        if (!Utils::isUnset($request->level)) {
            $body['level'] = $request->level;
        }
        if (!Utils::isUnset($request->picUrl)) {
            $body['picUrl'] = $request->picUrl;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $body['serviceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProblemEffectionService',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/process/effectionService/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProblemEffectionServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateProblemEffectionServiceRequest $request
     *
     * @return UpdateProblemEffectionServiceResponse
     */
    public function updateProblemEffectionService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProblemEffectionServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateProblemImprovementRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateProblemImprovementResponse
     */
    public function updateProblemImprovementWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->customProblemReason)) {
            $body['customProblemReason'] = $request->customProblemReason;
        }
        if (!Utils::isUnset($request->discoverSource)) {
            $body['discoverSource'] = $request->discoverSource;
        }
        if (!Utils::isUnset($request->dutyDepartmentId)) {
            $body['dutyDepartmentId'] = $request->dutyDepartmentId;
        }
        if (!Utils::isUnset($request->dutyDepartmentName)) {
            $body['dutyDepartmentName'] = $request->dutyDepartmentName;
        }
        if (!Utils::isUnset($request->dutyUserId)) {
            $body['dutyUserId'] = $request->dutyUserId;
        }
        if (!Utils::isUnset($request->injectionMode)) {
            $body['injectionMode'] = $request->injectionMode;
        }
        if (!Utils::isUnset($request->monitorSourceName)) {
            $body['monitorSourceName'] = $request->monitorSourceName;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->problemReason)) {
            $body['problemReason'] = $request->problemReason;
        }
        if (!Utils::isUnset($request->recentActivity)) {
            $body['recentActivity'] = $request->recentActivity;
        }
        if (!Utils::isUnset($request->recoveryMode)) {
            $body['recoveryMode'] = $request->recoveryMode;
        }
        if (!Utils::isUnset($request->relationChanges)) {
            $body['relationChanges'] = $request->relationChanges;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->replayDutyUserId)) {
            $body['replayDutyUserId'] = $request->replayDutyUserId;
        }
        if (!Utils::isUnset($request->userReport)) {
            $body['userReport'] = $request->userReport;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProblemImprovement',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/improvement/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProblemImprovementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateProblemImprovementRequest $request
     *
     * @return UpdateProblemImprovementResponse
     */
    public function updateProblemImprovement($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProblemImprovementWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateProblemMeasureRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateProblemMeasureResponse
     */
    public function updateProblemMeasureWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->checkStandard)) {
            $body['checkStandard'] = $request->checkStandard;
        }
        if (!Utils::isUnset($request->checkUserId)) {
            $body['checkUserId'] = $request->checkUserId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->directorId)) {
            $body['directorId'] = $request->directorId;
        }
        if (!Utils::isUnset($request->measureId)) {
            $body['measureId'] = $request->measureId;
        }
        if (!Utils::isUnset($request->planFinishTime)) {
            $body['planFinishTime'] = $request->planFinishTime;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->stalkerId)) {
            $body['stalkerId'] = $request->stalkerId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProblemMeasure',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/improvement/measure/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProblemMeasureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateProblemMeasureRequest $request
     *
     * @return UpdateProblemMeasureResponse
     */
    public function updateProblemMeasure($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProblemMeasureWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateProblemNoticeRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateProblemNoticeResponse
     */
    public function updateProblemNoticeWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->problemNotifyType)) {
            $body['problemNotifyType'] = $request->problemNotifyType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProblemNotice',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/notify',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProblemNoticeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateProblemNoticeRequest $request
     *
     * @return UpdateProblemNoticeResponse
     */
    public function updateProblemNotice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProblemNoticeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateProblemTimelineRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateProblemTimelineResponse
     */
    public function updateProblemTimelineWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->content)) {
            $body['content'] = $request->content;
        }
        if (!Utils::isUnset($request->keyNode)) {
            $body['keyNode'] = $request->keyNode;
        }
        if (!Utils::isUnset($request->problemId)) {
            $body['problemId'] = $request->problemId;
        }
        if (!Utils::isUnset($request->problemTimelineId)) {
            $body['problemTimelineId'] = $request->problemTimelineId;
        }
        if (!Utils::isUnset($request->time)) {
            $body['time'] = $request->time;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProblemTimeline',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/problem/process/timeline/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProblemTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateProblemTimelineRequest $request
     *
     * @return UpdateProblemTimelineResponse
     */
    public function updateProblemTimeline($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateProblemTimelineWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateRichTextRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateRichTextResponse
     */
    public function updateRichTextWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['instanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->richText)) {
            $body['richText'] = $request->richText;
        }
        if (!Utils::isUnset($request->richTextId)) {
            $body['richTextId'] = $request->richTextId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRichText',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/rich/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateRichTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateRichTextRequest $request
     *
     * @return UpdateRichTextResponse
     */
    public function updateRichText($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRichTextWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateRouteRuleRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateRouteRuleResponse
     */
    public function updateRouteRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assignObjectId)) {
            $body['assignObjectId'] = $request->assignObjectId;
        }
        if (!Utils::isUnset($request->assignObjectType)) {
            $body['assignObjectType'] = $request->assignObjectType;
        }
        if (!Utils::isUnset($request->childRuleRelation)) {
            $body['childRuleRelation'] = $request->childRuleRelation;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->convergenceFields)) {
            $body['convergenceFields'] = $request->convergenceFields;
        }
        if (!Utils::isUnset($request->convergenceType)) {
            $body['convergenceType'] = $request->convergenceType;
        }
        if (!Utils::isUnset($request->coverageProblemLevels)) {
            $body['coverageProblemLevels'] = $request->coverageProblemLevels;
        }
        if (!Utils::isUnset($request->effection)) {
            $body['effection'] = $request->effection;
        }
        if (!Utils::isUnset($request->incidentLevel)) {
            $body['incidentLevel'] = $request->incidentLevel;
        }
        if (!Utils::isUnset($request->matchCount)) {
            $body['matchCount'] = $request->matchCount;
        }
        if (!Utils::isUnset($request->notifyChannels)) {
            $body['notifyChannels'] = $request->notifyChannels;
        }
        if (!Utils::isUnset($request->problemEffectionServices)) {
            $body['problemEffectionServices'] = $request->problemEffectionServices;
        }
        if (!Utils::isUnset($request->problemLevelGroup)) {
            $body['problemLevelGroup'] = $request->problemLevelGroup;
        }
        if (!Utils::isUnset($request->relatedServiceId)) {
            $body['relatedServiceId'] = $request->relatedServiceId;
        }
        if (!Utils::isUnset($request->routeChildRules)) {
            $body['routeChildRules'] = $request->routeChildRules;
        }
        if (!Utils::isUnset($request->routeRuleId)) {
            $body['routeRuleId'] = $request->routeRuleId;
        }
        if (!Utils::isUnset($request->routeType)) {
            $body['routeType'] = $request->routeType;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $body['ruleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->timeWindow)) {
            $body['timeWindow'] = $request->timeWindow;
        }
        if (!Utils::isUnset($request->timeWindowUnit)) {
            $body['timeWindowUnit'] = $request->timeWindowUnit;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRouteRule',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/routeRule/edit',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateRouteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateRouteRuleRequest $request
     *
     * @return UpdateRouteRuleResponse
     */
    public function updateRouteRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRouteRuleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateServiceResponse
     */
    public function updateServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->serviceDescription)) {
            $body['serviceDescription'] = $request->serviceDescription;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $body['serviceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['serviceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateService',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateServiceRequest $request
     *
     * @return UpdateServiceResponse
     */
    public function updateService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateServiceGroupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateServiceGroupResponse
     */
    public function updateServiceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->enableWebhook)) {
            $body['enableWebhook'] = $request->enableWebhook;
        }
        if (!Utils::isUnset($request->monitorSourceTemplates)) {
            $body['monitorSourceTemplates'] = $request->monitorSourceTemplates;
        }
        if (!Utils::isUnset($request->serviceGroupDescription)) {
            $body['serviceGroupDescription'] = $request->serviceGroupDescription;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            $body['serviceGroupId'] = $request->serviceGroupId;
        }
        if (!Utils::isUnset($request->serviceGroupName)) {
            $body['serviceGroupName'] = $request->serviceGroupName;
        }
        if (!Utils::isUnset($request->userIds)) {
            $body['userIds'] = $request->userIds;
        }
        if (!Utils::isUnset($request->webhookLink)) {
            $body['webhookLink'] = $request->webhookLink;
        }
        if (!Utils::isUnset($request->webhookType)) {
            $body['webhookType'] = $request->webhookType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceGroup',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/group/modify',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateServiceGroupRequest $request
     *
     * @return UpdateServiceGroupResponse
     */
    public function updateServiceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateServiceGroupSchedulingRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateServiceGroupSchedulingResponse
     */
    public function updateServiceGroupSchedulingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->fastScheduling)) {
            $body['fastScheduling'] = $request->fastScheduling;
        }
        if (!Utils::isUnset($request->fineScheduling)) {
            $body['fineScheduling'] = $request->fineScheduling;
        }
        if (!Utils::isUnset($request->schedulingWay)) {
            $body['schedulingWay'] = $request->schedulingWay;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            $body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceGroupScheduling',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/group/scheduling/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceGroupSchedulingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateServiceGroupSchedulingRequest $request
     *
     * @return UpdateServiceGroupSchedulingResponse
     */
    public function updateServiceGroupScheduling($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceGroupSchedulingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateServiceGroupSpecialDaySchedulingRequest $request
     * @param string[]                                      $headers
     * @param RuntimeOptions                                $runtime
     *
     * @return UpdateServiceGroupSpecialDaySchedulingResponse
     */
    public function updateServiceGroupSpecialDaySchedulingWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->schedulingDate)) {
            $body['schedulingDate'] = $request->schedulingDate;
        }
        if (!Utils::isUnset($request->schedulingSpecialDays)) {
            $body['schedulingSpecialDays'] = $request->schedulingSpecialDays;
        }
        if (!Utils::isUnset($request->serviceGroupId)) {
            $body['serviceGroupId'] = $request->serviceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceGroupSpecialDayScheduling',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/services/group/scheduling/updateSpecialDayScheduling',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceGroupSpecialDaySchedulingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateServiceGroupSpecialDaySchedulingRequest $request
     *
     * @return UpdateServiceGroupSpecialDaySchedulingResponse
     */
    public function updateServiceGroupSpecialDayScheduling($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceGroupSpecialDaySchedulingWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateSubscriptionRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateSubscriptionResponse
     */
    public function updateSubscriptionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->expiredType)) {
            $body['expiredType'] = $request->expiredType;
        }
        if (!Utils::isUnset($request->notifyObjectList)) {
            $body['notifyObjectList'] = $request->notifyObjectList;
        }
        if (!Utils::isUnset($request->notifyObjectType)) {
            $body['notifyObjectType'] = $request->notifyObjectType;
        }
        if (!Utils::isUnset($request->notifyStrategyList)) {
            $body['notifyStrategyList'] = $request->notifyStrategyList;
        }
        if (!Utils::isUnset($request->period)) {
            $body['period'] = $request->period;
        }
        if (!Utils::isUnset($request->scope)) {
            $body['scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->scopeObjectList)) {
            $body['scopeObjectList'] = $request->scopeObjectList;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->subscriptionId)) {
            $body['subscriptionId'] = $request->subscriptionId;
        }
        if (!Utils::isUnset($request->subscriptionTitle)) {
            $body['subscriptionTitle'] = $request->subscriptionTitle;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSubscription',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/notify/subscription/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSubscriptionRequest $request
     *
     * @return UpdateSubscriptionResponse
     */
    public function updateSubscription($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSubscriptionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->email)) {
            $body['email'] = $request->email;
        }
        if (!Utils::isUnset($request->phone)) {
            $body['phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->ramId)) {
            $body['ramId'] = $request->ramId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        if (!Utils::isUnset($request->username)) {
            $body['username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateUser',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/user/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
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
        $headers = [];

        return $this->updateUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateUserGuideStatusRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateUserGuideStatusResponse
     */
    public function updateUserGuideStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['clientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->guideAction)) {
            $body['guideAction'] = $request->guideAction;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserGuideStatus',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/user/update/guide/status',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateUserGuideStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateUserGuideStatusRequest $request
     *
     * @return UpdateUserGuideStatusResponse
     */
    public function updateUserGuideStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateUserGuideStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param VerifyRouteRuleRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return VerifyRouteRuleResponse
     */
    public function verifyRouteRuleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->routeRuleId)) {
            $body['routeRuleId'] = $request->routeRuleId;
        }
        if (!Utils::isUnset($request->testSourceEvents)) {
            $body['testSourceEvents'] = $request->testSourceEvents;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'VerifyRouteRule',
            'version'     => '2021-04-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/routeRule/verify',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return VerifyRouteRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyRouteRuleRequest $request
     *
     * @return VerifyRouteRuleResponse
     */
    public function verifyRouteRule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->verifyRouteRuleWithOptions($request, $headers, $runtime);
    }
}
